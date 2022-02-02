<?php

    class server_on {
        /** Client IP1 */
        public function checkClientIP1($datecurr, $dataIP1){
            try {
                $db = DB();
                $query = $db->prepare("SELECT * FROM client_on WHERE date_on=:datecur and client_ip=:dataip");
                $query->bindParam("datecur", $datecurr, PDO::PARAM_STR);
                $query->bindParam("dataip", $dataIP1, PDO::PARAM_STR);
                $query->execute();
                if ($query->rowCount() > 0) {
                    return $query->fetch(PDO::FETCH_OBJ);
                }
            } catch (PDOException $e) {
                exit($e->getMessage());
            }
        }

        /** Client IP2 */
        public function checkClientIP2($datecurr, $dataIP2){
            try {
                $db = DB();
                $query = $db->prepare("SELECT * FROM client_on WHERE date_on=:datecur and client_ip=:dataip");
                $query->bindParam("datecur", $datecurr, PDO::PARAM_STR);
                $query->bindParam("dataip", $dataIP2, PDO::PARAM_STR);
                $query->execute();
                if ($query->rowCount() > 0) {
                    return $query->fetch(PDO::FETCH_OBJ);
                }
            } catch (PDOException $e) {
                exit($e->getMessage());
            }
        }
        

        /** Client IP3 */
        public function checkClientIP3($datecurr, $dataIP3){
            try {
                $db = DB();
                $query = $db->prepare("SELECT * FROM client_on WHERE date_on=:datecur and client_ip=:dataip");
                $query->bindParam("datecur", $datecurr, PDO::PARAM_STR);
                $query->bindParam("dataip", $dataIP3, PDO::PARAM_STR);
                $query->execute();
                if ($query->rowCount() > 0) {
                    return $query->fetch(PDO::FETCH_OBJ);
                }
            } catch (PDOException $e) {
                exit($e->getMessage());
            }
        }

        /** Client IP4 */
        public function checkClientIP4($datecurr, $dataIP4){
            try {
                $db = DB();
                $query = $db->prepare("SELECT * FROM client_on WHERE date_on=:datecur and client_ip=:dataip");
                $query->bindParam("datecur", $datecurr, PDO::PARAM_STR);
                $query->bindParam("dataip", $dataIP4, PDO::PARAM_STR);
                $query->execute();
                if ($query->rowCount() > 0) {
                    return $query->fetch(PDO::FETCH_OBJ);
                }
            } catch (PDOException $e) {
                exit($e->getMessage());
            }
        }

        /** Client IP5 */
        public function checkClientIP5($datecurr, $dataIP5){
            try {
                $db = DB();
                $query = $db->prepare("SELECT * FROM client_on WHERE date_on=:datecur and client_ip=:dataip");
                $query->bindParam("datecur", $datecurr, PDO::PARAM_STR);
                $query->bindParam("dataip", $dataIP5, PDO::PARAM_STR);
                $query->execute();
                if ($query->rowCount() > 0) {
                    return $query->fetch(PDO::FETCH_OBJ);
                }
            } catch (PDOException $e) {
                exit($e->getMessage());
            }
        }
    }

?>