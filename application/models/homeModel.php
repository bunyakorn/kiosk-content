<?php

    class homeModel extends database {

        public function getDataHotnews(){

            if($this->Query("SELECT * FROM hotnews ORDER BY hnid DESC")){
                $dataHotnews = $this->fetchAll();
                return $dataHotnews;
            }
        }

        public function getDataVideo($dataSource){

            if($this->Query("SELECT * FROM data_multimedia WHERE display = ?  AND(date_finish >= ? AND date_start <= ?) ORDER BY shownumber", $dataSource)){
                $dateVideo = $this->fetchAll();
                return $dateVideo;
            }
        }

        public function getDataPoster($dataValue){

            if($this->Query("SELECT * FROM data_poster WHERE display = ?  AND(date_finish >= ? AND date_start <= ?) ORDER BY shownumber", $dataValue)){
                $datePoster = $this->fetchAll();
                return $datePoster;
            }
        }
        
        public function updateServerOn($dataUpServer){
            if($this->Query("SELECT * FROM client_on WHERE client_ip = ? AND date_on = ? AND Onlinetime = ?", $dataUpServer)){

                if($this->rowCount() > 0){
                    return false;
                }
                else{
                    
                    if($this->Query("INSERT INTO client_on(client_ip, date_on, Onlinetime) VALUES(?,?,?)", $dataUpServer)){
                        return true;
                    }
                    else{
                        return false;
                    }
                }
            }
        }
    }

?>