<?php
    class editHotnews extends framework {

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
            $this->view('editDataHotnews', $data);
        }

        public function detailPoster(){
            $searchData = $_GET["searchData"];
            $pageDetail = $this->view('components/dashboard/detail_poster', $searchData);
            echo $pageDetail;
        }

        public function formEditHotnews(){

           $dataID = $_GET["hhnewID"];
           $pageForm = $this->view('components/dashboard/form_update_data_hotnews', $dataID);
           echo $pageForm;
        }

        public function updateDataHotnews(){

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
            //--------------------------------
            $dsp = $_POST["display_hotnews"];
            if($dsp == ""){
                $display = "0";
            }
            else{
                $display = "1";
            }
            //--------------------------------

            $date_update = date("Y-m-d H:i");

                $dataHotnews = [
                    'hiddenId'              => $this->input('hiddenID'),
                    'name_hotnews'          => $this->input('name_hotnews'),
                    'department'            => $this->input('department'),
                    'category'              => $this->input('category'),
                    'dateail'               => $this->input('dateail_hotnews'),
                    'display'               => $display,
                    'date_start'            => $date_start,
                    'date_finish'           => $date_finish,
                    'post_by'               => $this->input('uploadby'),
                    'date_post'             => $date_post
               ]; 
               
                //--send data from controller to hotnewsModel for Query Insert Data
                $data = [
                    $dataHotnews['name_hotnews'], $dataHotnews['department'], $dataHotnews['category'], $dataHotnews['dateail'], 
                    $dataHotnews['display'], $dataHotnews['date_start'], $dataHotnews['date_finish'],
                    $dataHotnews['post_by'], $dataHotnews['date_post'], $dataHotnews['hiddenId']
                ];

                // prepare data
                $updateHotnews = $this->hotnewsModel->updateHotnews($data);

                if($updateHotnews['data'] === "success"){
                    $dataOps = "success";
                    setcookie('hotnewsCookie', $dataOps, time() + (10 * 1));
                    $this->redirect("editHotnews");
                }
                if($updateHotnews['data'] === "error"){
                    $dataOps = "fail";
                    setcookie('hotnewsCookie', $dataOps, time() + (10 * 1));
                    $this->redirect("editHotnews");
                }
        }

        public function deleteHotnews(){

            $dataID = $_GET["dataID"];

            $funcDel = $this->hotnewsModel->deleteDataHotnews($dataID);
            if($funcDel['data'] == "success"){
                echo "success";
            }
            if($funcDel['data'] == "error"){
                echo "error";
            }
        }
    }
?>