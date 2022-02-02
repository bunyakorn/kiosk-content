<?php
    class multimedia extends framework {

        public function __construct(){
            if(!$this->getSession('userId')){

                $this->redirect("authen");
        
            }

            $this->helper("link");
            $this->mediaModel = $this->model("mediaModel");
            $this->adminModel = $this->model("adminModel");
            // CHANGE THE UPLOAD LIMITS
            ini_set('upload_max_filesize', '250M');
            ini_set('post_max_size', '250M');
            ini_set('max_input_time', 300);
            ini_set('max_execution_time', 300);
        }

        public function index(){

            $userId = $this->getSession('userId');
            $data_arr1 = $this->adminModel->getDataUser($userId);
            $dep = $data_arr1->department;
            $data_arr2 = $this->mediaModel->getDataMedia($dep);
            $data = [$data_arr1, $data_arr2];
            $this->view('addMedia', $data);
        }

        public function detailMedia(){
            $searchData = $_GET["searchData"];
            $pageDetail = $this->view('components/dashboard/detail_multimedia', $searchData);
            echo $pageDetail;
        }

        public function addMultimedia(){
            
            setcookie('mediaCookie', '');
             if(isset($_FILES['file_video'])){

               $upload = $this->uploadFilevideo($_FILES['file_video']);
               
               if($upload['data'] === "success"){
                  
                    $mediaFile = $upload['mediaFile'];
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
                   
                   $dataMedia = [
                        'name_multimedia'       => $this->input('name_multimedia'),
                        'department'            => $this->input('department'),
                        'category'              => $this->input('category'),
                        'dateail'               => $this->input('dateail_multimedia'),
                        'filemedia'             => $mediaFile,
                        'display'               => $this->input('display_multimedia'),
                        'date_start'            => $date_start,
                        'date_finish'           => $date_finish,
                        'post_by'               => $this->input('uploadby'),
                        'date_post'             => $date_post
                   ]; 
                   //--send data from controller to mediaModel for Query Insert Data
                   $data = [
                       $dataMedia['name_multimedia'], $dataMedia['department'], $dataMedia['category'], $dataMedia['dateail'], 
                       $dataMedia['filemedia'], $dataMedia['display'], $dataMedia['date_start'], $dataMedia['date_finish'],
                       $dataMedia['post_by'], $dataMedia['date_post']
                    ];

                   $addMedia = $this->mediaModel->addDataMedia($data);
                   
                   if($addMedia['data'] === "success"){
                       $dataOps = "success";
                       setcookie('mediaCookie', $dataOps, time() + (10 * 1));
                       $this->redirect("multimedia");
                   }
                   if($addMedia['data'] === "error"){
                       $dataOps = "fail";
                       setcookie('mediaCookie', $dataOps, time() + (10 * 1));
                       $this->redirect("multimedia");
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