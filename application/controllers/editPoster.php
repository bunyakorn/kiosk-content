<?php
    class editPoster extends framework {

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
            $this->view('editDataPoster', $data);
        }

        public function detailPoster(){
            $searchData = $_GET["searchData"];
            $pageDetail = $this->view('components/dashboard/detail_poster', $searchData);
            echo $pageDetail;
        }

        public function formEditPoster(){

           $dataID = $_GET["PosterID"];
           $pageForm = $this->view('components/dashboard/form_update_data_poster', $dataID);
           echo $pageForm;
        }

        public function updateDataPoster(){

            setcookie('posterCookie', '');
            
            $fileposter = $_FILES['file_poster']['name'];
            
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
            $dsp = $_POST["display_poster"];
            if($dsp == ""){
                $display = "0";
            }
            else{
                $display = "1";
            }
            //--------------------------------

            $date_update = date("Y-m-d H:i");
            if(!empty($fileposter)){

                if(isset($_FILES['file_poster'])){
                    
                    // Have file poster change
                    $upload = $this->uploadFilePoster($_FILES['file_poster']);

                    if($upload['data'] === "success"){

                        $poster = $upload['posterFile'];
                        $dataPoster = [
                            'hiddenId'              => $this->input('hiddenID'),
                            'name_poster'           => $this->input('name_poster'),
                            'department'            => $this->input('department'),
                            'category'              => $this->input('category'),
                            'dateail'               => $this->input('dateail_poster'),
                            'fileposter'            => $poster,
                            'display'               => $display,
                            'date_start'            => $date_start,
                            'date_finish'           => $date_finish,
                            'update_by'             => $this->input('uploadby'),
                            'update_post'           => $date_post
                       ]; 

                        //--send data from controller to posterModel for Query Insert Data
                        $data = [
                            $dataPoster['name_poster'], $dataPoster['department'], $dataPoster['category'], $dataPoster['dateail'], 
                            $dataPoster['fileposter'], $dataPoster['display'], $dataPoster['date_start'], $dataPoster['date_finish'],
                            $dataPoster['update_by'], $dataPoster['update_post'], $dataPoster['hiddenId']
                        ];

                        // prepare data
                        $updatePoster = $this->posterModel->updatePosterHaveFile($data);

                        if($updatePoster['data'] === "success"){
                            $dataOps = "success";
                            setcookie('posterCookie', $dataOps, time() + (10 * 1));
                            $this->redirect("editPoster");
                        }
                        if($updatePoster['data'] === "error"){
                            $dataOps = "fail";
                            setcookie('posterCookie', $dataOps, time() + (10 * 1));
                            $this->redirect("editPoster");
                        }
                    }
                }
            }
            else{

                // Don't have file poster change
                $dataPoster = [
                    'hiddenId'              => $this->input('hiddenID'),
                    'name_poster'           => $this->input('name_poster'),
                    'department'            => $this->input('department'),
                    'category'              => $this->input('category'),
                    'dateail'               => $this->input('dateail_poster'),
                    'display'               => $display,
                    'date_start'            => $date_start,
                    'date_finish'           => $date_finish,
                    'update_by'             => $this->input('uploadby'),
                    'update_post'           => $date_post
               ]; 
               
                //--send data from controller to posterModel for Query Insert Data
                $data = [
                    $dataPoster['name_poster'], $dataPoster['department'], $dataPoster['category'], $dataPoster['dateail'], 
                    $dataPoster['display'], $dataPoster['date_start'], $dataPoster['date_finish'],
                    $dataPoster['update_by'], $dataPoster['update_post'], $dataPoster['hiddenId']
                ];

                // prepare data
                $updatePoster = $this->posterModel->updatePoster($data);

                if($updatePoster['data'] === "success"){
                    $dataOps = "success";
                    setcookie('posterCookie', $dataOps, time() + (10 * 1));
                    $this->redirect("editPoster");
                }
                if($updatePoster['data'] === "error"){
                    $dataOps = "fail";
                    setcookie('posterCookie', $dataOps, time() + (10 * 1));
                    $this->redirect("editPoster");
                }
            }
            
        }

        public function deletePoster(){

            $dataID = $_GET["dataID"];

            $getdata = $this->posterModel->getDataPosterID($dataID);
            foreach($getdata as $rowData):
            $posterName = $rowData->file_poster;
            endforeach;

            $delfile = $this->delFilePoster($posterName);
            if($delfile['data'] === "success"){
                
                $funcDel = $this->posterModel->deleteFilePoster($dataID);
                if($funcDel['data'] == "success"){
                    echo "success";
                }
                if($funcDel['data'] == "error"){
                    echo "error";
                }
            }
            if($delfile['data'] === "warning"){
                echo "error";
            }
        }
    }
?>