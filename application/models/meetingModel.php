<?php

    class meetingModel extends externaldatabase {

        public function getDataUseMeetting($dataSource){

            if($this->Query("SELECT * FROM table_visualroom WHERE Category =? AND(date_time2 >=? AND Date_time <=?) AND cancel_chk IS NULL ORDER BY Name_room", $dataSource)){
                
                $data = $this->fetchAll();
                return $data;
            }
            else
            {
                return "Not Found";
            }
        }

        public function getDataUseCar($dataUse){

            if($this->Query("SELECT * FROM equipmentcar WHERE (date_time2 >=? AND Date_time <=?) AND cancel_chk IS NULL ORDER BY Number_car", $dataUse)){
                
                $datacar = $this->fetchAll();
                return $datacar;
            }
            else
            {
                return "Not Found";
            }
        }
    }

?>