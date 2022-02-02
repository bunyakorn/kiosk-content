<?php
    class posterModel extends database {

        
        public function getDataPoster($dep){

            $dateCurr = date("Y-m-d");
            if($this->Query("SELECT * FROM data_poster WHERE department = ? AND date_finish >= ?  ORDER BY shownumber ASC", [$dep, $dateCurr])){
                
                $data = $this->fetchAll();
                return $data;
            }
        }

        public function getDataPosterID($dataID){

            if($this->Query("SELECT * FROM data_poster WHERE posterID = ?", [$dataID])){
                
                $data = $this->fetchAll();
                return $data;
            }

        }
        
        public function addDataPoster($dataPoster){
            
            if($this->Query("INSERT INTO data_poster(name_poster,department,category,detail,file_poster,display,date_start,date_finish,post_by,date_post) VALUES(?,?,?,?,?,?,?,?,?,?)", $dataPoster)){
                
                return ['data' => 'success'];
            }
            else{
                return ['data' => 'error'];
            }
            
        }

        public function updatePosterHaveFile($dataFilePoster){

            if($this->Query("UPDATE data_poster SET name_poster =?, department =?, category =?, detail =?, file_poster =?, display =?, date_start =?, date_finish =?, update_by =?, update_post =?  WHERE posterID =?", $dataFilePoster)){
                
                return ['data' => 'success'];
            }
            else{
                return ['data' => 'error'];
            }
        }

        public function updatePoster($dataUpPoster){

            if($this->Query("UPDATE data_poster SET name_poster =?, department =?, category =?, detail =?, display =?, date_start =?, date_finish =?, update_by =?, update_post =?  WHERE posterID =?", $dataUpPoster)){
                
                return ['data' => 'success'];
            }
            else{
                return ['data' => 'error'];
            }
        }

        public function deleteFilePoster($delID){

            if($this->Query("DELETE FROM data_poster WHERE posterID =?", [$delID])){
                
                return ['data' => 'success'];
            }
            else{
                return ['data' => 'error'];
            }
        }

        public function clearLevelDisplay()
        {
            if($this->Query("UPDATE data_poster SET shownumber = NULL WHERE shownumber IS NOT NULL"))
            {
                return ['status' => 'success'];
            }
            else{
                return ['status' => 'error'];
            }
        }

        public function setDisplayPoster($posterID, $levelShow)
        {
            if($this->Query("UPDATE data_poster SET shownumber =? WHERE posterID =?", [$levelShow, $posterID]))
            {
                return ['status' => 'success'];
            }
            else{
                return ['status' => 'error'];
            }
        }

    }
?>