<?php

    class admin extends framework {

        public function __construct(){
            if(!$this->getSession('userId')){

                $this->redirect("authen");
        
            }

            $this->helper("link");
            $this->adminModel = $this->model("adminModel");
        }

        public function index(){

            $date = date("Y-m-d");
            $ip1 = "158.108.64.53";     //-------kiosk 5-5
            $ip2 = "158.108.64.143";    //-------kiosk 5-1
            $ip3 = "158.108.64.198";    //-------kiosk 1-1
            $ip4 = "158.108.64.36";     //-------kiosk 2-1
            $ip5 = "158.108.88.215";    //-------kiosk 3-1
            $chkIp1 = [$ip1, $date];
            $chkIp2 = [$ip2, $date];
            $chkIp3 = [$ip3, $date];
            $chkIp4 = [$ip4, $date];
            $chkIp5 = [$ip5, $date];
            $userId = $this->getSession('userId');
            $data_arr1 = $this->adminModel->getDataUser($userId);
            $Kiosk1 = $this->adminModel->checkServerOn($chkIp1);
            $Kiosk2 = $this->adminModel->checkServerOn($chkIp2);
            $Kiosk3 = $this->adminModel->checkServerOn($chkIp3);
            $Kiosk4 = $this->adminModel->checkServerOn($chkIp4);
            $Kiosk5 = $this->adminModel->checkServerOn($chkIp5);
            $data = [$data_arr1, $Kiosk1, $Kiosk2, $Kiosk3, $Kiosk4, $Kiosk5];
            $this->view('dashboard', $data);
        }

        public function logout(){

            $this->destroy();
            $this->redirect("authen");
        }
    }
?>