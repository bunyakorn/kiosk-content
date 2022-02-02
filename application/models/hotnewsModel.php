<?php
    class hotnewsModel extends database
    {
        public function getDataHotnews($dep)
        {
            $dateCurr = date("Y-m-d");
            if($this->Query("SELECT * FROM hotnews WHERE department = ? AND date_finish >= ?  ORDER BY shownumber ASC", [$dep, $dateCurr])){
                
                $data = $this->fetchAll();
                return $data;
            }
        }

        public function addDataHotnewsDB($dataHotnews)
        {
            if($this->Query("INSERT INTO hotnews(data_hotnews,department,category,detail,display,date_start,date_finish,post_by,date_post) VALUES(?,?,?,?,?,?,?,?,?)", $dataHotnews))
            {
                return ['data' => 'success'];
            }
            else{
                return ['data' => 'error'];
            }
        }

        public function getDataHotnewsID($hdId)
        {
            if($this->Query("SELECT * FROM hotnews WHERE hnid = ?", [$hdId])){
                
                $data = $this->fetchAll();
                return $data;
            }
        }

        public function updateHotnews($dataHnews)
        {
            if($this->Query("UPDATE hotnews SET data_hotnews =?, department =?, category =?, detail =?, display =?, date_start =?, date_finish =?, post_by =?, date_post =?  WHERE hnid =?", $dataHnews)){
                
                return ['data' => 'success'];
            }
            else{
                return ['data' => 'error'];
            }
        }

        public function deleteDataHotnews($dataID)
        {
            if($this->Query("DELETE FROM hotnews WHERE hnid =?", [$dataID]))
            {
                return ['data' => 'success'];
            }
            else{
                return ['data' => 'error'];
            }
        }

        public function clearLevelDisplay()
        {
            if($this->Query("UPDATE hotnews SET shownumber = NULL WHERE shownumber IS NOT NULL"))
            {
                return ['status' => 'success'];
            }
            else{
                return ['status' => 'error'];
            }
        }

        public function setDisplayhotnews($hotnewsID, $levelShow)
        {
            if($this->Query("UPDATE hotnews SET shownumber =? WHERE hnid =?", [$levelShow, $hotnewsID]))
            {
                return ['status' => 'success'];
            }
            else{
                return ['status' => 'error'];
            }
        }
    }
?>