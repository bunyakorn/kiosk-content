<?php
    class poster extends framework {

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
            $this->view('addPoster', $data);
        }

        public function detailPoster(){
            $searchData = $_GET["searchData"];
            $pageDetail = $this->view('components/dashboard/detail_poster', $searchData);
            echo $pageDetail;
        }

        public function addPoster(){
            
            setcookie('posterCookie', '');

            if(isset($_FILES['file_poster'])){
               $upload = $this->uploadFilePoster($_FILES['file_poster']);

               if($upload['data'] === "success"){
                  
                    $poster = $upload['posterFile'];
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
                   
                   $dataPoster = [
                        'name_poster'           => $this->input('name_poster'),
                        'department'            => $this->input('department'),
                        'category'              => $this->input('category'),
                        'dateail'               => $this->input('dateail_poster'),
                        'fileposter'            => $poster,
                        'display'               => $this->input('display_poster'),
                        'date_start'            => $date_start,
                        'date_finish'           => $date_finish,
                        'post_by'               => $this->input('uploadby'),
                        'date_post'             => $date_post
                   ]; 
                   //--send data from controller to posterModel for Query Insert Data
                   $data = [
                       $dataPoster['name_poster'], $dataPoster['department'], $dataPoster['category'], $dataPoster['dateail'], 
                       $dataPoster['fileposter'], $dataPoster['display'], $dataPoster['date_start'], $dataPoster['date_finish'],
                       $dataPoster['post_by'], $dataPoster['date_post']
                    ];

                   $addPoster = $this->posterModel->addDataPoster($data);
                   
                   if($addPoster['data'] === "success"){
                       $dataOps = "success";
                       setcookie('posterCookie', $dataOps, time() + (10 * 1));
                       $this->redirect("poster");
                   }
                   if($addPoster['data'] === "error"){
                       $dataOps = "fail";
                       setcookie('posterCookie', $dataOps, time() + (10 * 1));
                       $this->redirect("poster");
                   }
                   
               }
               else{
                   //echo "FAIL UPLOAD";
                   return false;
               }
            }
            else{
                //echo "ERROR";
                return false;
            }
            
        }

        public function logout(){

            $this->destroy();
            $this->redirect("authen");
        }
    }

    
?>