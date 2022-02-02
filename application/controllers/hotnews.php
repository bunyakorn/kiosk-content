<?php
    class hotnews extends framework {

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
            $this->view('addHotnews', $data);
        }

        public function detailHotnews(){
            $searchData = $_GET["searchData"];
            $pageDetail = $this->view('components/dashboard/detail_poster', $searchData);
            echo $pageDetail;
        }

        public function addDataHotnews(){
            
            setcookie('hotnewsCookie', '');  
                
                $d_start = $_POST["date_start"];
                $dst = explode("/", $d_start);
                $date_s1 = $dst[0];
                $date_s2 = $dst[1];
                $date_s3 = $dst[2];
                $date_start = $date_s3."-".$date_s1."-".$date_s2;
                //--------------------------------
                $d_finish = $_POST["date_finish"];
                $dfn = explode("/", $d_finish);
                $date_f1 = $dfn[0];
                $date_f2 = $dfn[1];
                $date_f3 = $dfn[2];
                $date_finish = $date_f3."-".$date_f1."-".$date_f2;

                $date_post = date("Y-m-d H:i");
                //echo "SUCCESS UPLOAD";
                
                $dataHnews = [
                    'name_hotnews'           => $this->input('name_hotnews'),
                    'department'            => $this->input('department'),
                    'category'              => $this->input('category'),
                    'dateail'               => $this->input('dateail_hotnews'),
                    'display'               => $this->input('display_hotnews'),
                    'date_start'            => $date_start,
                    'date_finish'           => $date_finish,
                    'post_by'               => $this->input('uploadby'),
                    'date_post'             => $date_post
                ]; 
                //--send data from controller to hotnewsModel for Query Insert Data
                $data = [
                    $dataHnews['name_hotnews'], $dataHnews['department'], $dataHnews['category'], $dataHnews['dateail'], 
                    $dataHnews['display'], $dataHnews['date_start'], $dataHnews['date_finish'],
                    $dataHnews['post_by'], $dataHnews['date_post']
                ];

                $addHotnews = $this->hotnewsModel->addDataHotnewsDB($data);
                
                if($addHotnews['data'] === "success"){
                    $dataOps = "success";
                    setcookie('hotnewsCookie', $dataOps, time() + (10 * 1));
                    $this->redirect("hotnews");
                }
                if($addHotnews['data'] === "error"){
                    $dataOps = "fail";
                    setcookie('hotnewsCookie', $dataOps, time() + (10 * 1));
                    $this->redirect("hotnews");
                }
                
        }

        public function logout(){

            $this->destroy();
            $this->redirect("authen");
        }
    }

    
?>