<?php
    class configHotnews extends framework {

        public function __construct(){
            if(!$this->getSession('userId')){

                $this->redirect("authen");
        
            }
            $this->helper("link");
            $this->hotnewsModel = $this->model("hotnewsModel");
            $this->adminModel = $this->model("adminModel");
        }

        public function index(){
            $userId = $this->getSession('userId');
            $data_arr1 = $this->adminModel->getDataUser($userId);
            $dep = $data_arr1->department;
            $data_arr2 = $this->hotnewsModel->getDataHotnews($dep);
            $data = [$data_arr1, $data_arr2];
            $this->view('configDisplayHotnews', $data);
        }
        public function updateConfig(){

            $hdnLine = $_POST["hdnLine"];
            
            if($hdnLine > 1){
               
                $nullVl = $this->hotnewsModel->clearLevelDisplay();
                if($nullVl['status'] == "success")
                {
                    $v = 0;
                    for($i = 1; $i <= $hdnLine; $i++){

                        $hotnewsID = $_POST["hdnhotnewsID$i"];
                        $levelShow = $_POST["shownumber$i"];
                        
                        $updateLv = $this->hotnewsModel->setDisplayhotnews($hotnewsID,$levelShow);
                        if($updateLv['status'] == 'success'){
                            $v+=1;
                        }
                    }
                    
                    if($v == $hdnLine){
                        $dataOps = "success";
                        setcookie('hotnewsCookie', $dataOps, time() + (10 * 1));
                        $this->redirect("configHotnews");
                    }
                }
                if($nullVl['status'] == "error")
                {
                    $dataOps = "error";
                    setcookie('hotnewsCookie', $dataOps, time() + (10 * 1));
                    $this->redirect("configHotnews");
                }
                
            }
        }
    }
?>