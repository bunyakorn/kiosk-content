<?php
    class configPoster extends framework {

        public function __construct(){

            if(!$this->getSession('userId')){

                $this->redirect("authen");
        
            }

            $this->helper("link");
            $this->posterModel = $this->model("posterModel");
            $this->adminModel = $this->model("adminModel");
        }


        public function index(){

            $userId = $this->getSession('userId');
            $data_arr1 = $this->adminModel->getDataUser($userId);
            $dep = $data_arr1->department;
            $data_arr2 = $this->posterModel->getDataPoster($dep);
            $data = [$data_arr1, $data_arr2];
            $this->view('configDisplayPoster', $data);
        }

        public function updateConfig(){

            $hdnLine = $_POST["hdnLine"];
            if($hdnLine > 1){
                $nullVl = $this->posterModel->clearLevelDisplay();
                if($nullVl['status'] == "success")
                {
                    $v = 0;
                    for($i = 1; $i <= $hdnLine; $i++){
                        $posterID = $_POST["hdnposterID$i"];
                        $levelShow = $_POST["shownumber$i"];
                        $updateLv = $this->posterModel->setDisplayPoster($posterID, $levelShow);
                        
                        if($updateLv['status'] == 'success'){
                            $v+=1;
                        } 
                    }
                    if($v == $hdnLine){
                        $dataOps = "success";
                        setcookie('posterCookie', $dataOps, time() + (10 * 1));
                        $this->redirect("configPoster");
                    }
                }
                if($nullVl['status'] == "error")
                {
                    $dataOps = "error";
                    setcookie('posterCookie', $dataOps, time() + (10 * 1));
                    $this->redirect("configPoster");
                }
            }
            
        }
        
    }
?>