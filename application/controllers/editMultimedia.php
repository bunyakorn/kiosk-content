<?php
class editMultimedia extends framework
{

    public function __construct()
    {
        if (!$this->getSession('userId')) {

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

    public function index()
    {

        $userId = $this->getSession('userId');
        $data_arr1 = $this->adminModel->getDataUser($userId);
        $dep = $data_arr1->department;
        $data_arr2 = $this->mediaModel->getDataMedia($dep);
        $data = [$data_arr1, $data_arr2];
        $this->view('editDataMultimedia', $data);
    }

    public function detailMedia()
    {
        $searchData = $_GET["searchData"];
        $pageDetail = $this->view('components/dashboard/detail_multimedia', $searchData);
        echo $pageDetail;
    }

    public function formEditMultimedia()
    {
        $dataID = $_GET["MediaID"];
        $pageForm = $this->view('components/dashboard/form_update_data_multimedia', $dataID);
        echo $pageForm;
    }

    public function updateDataMultimedia()
    {
        setcookie('mediaCookie', '');
        $fileMedia = $_FILES['file_video']['name'];

        $d_start = $_POST["date_start"];
        $dst = explode("/", $d_start);
        $date_s1 = $dst[0];
        $date_s2 = $dst[1];
        $date_s3 = $dst[2];
        $date_start = $date_s3 . "-" . $date_s1 . "-" . $date_s2;
        //--------------------------------
        $d_finish = $_POST["date_finish"];
        $dfn = explode("/", $d_finish);
        $date_f1 = $dfn[0];
        $date_f2 = $dfn[1];
        $date_f3 = $dfn[2];
        $date_finish = $date_f3 . "-" . $date_f1 . "-" . $date_f2;
        //--------------------------------
        $dsp = $_POST["display_multimedia"];
        if ($dsp == "") {
            $display = "0";
        } else {
            $display = "1";
        }
        //--------------------------------
        $date_update = date("Y-m-d H:i");

        if (!empty($fileMedia)) {
            // Have file Media change
            $upload = $this->uploadFilevideo($_FILES['file_video']);

            if ($upload['data'] === "success") {

                //echo "SUCCESS UPLOAD";
                $mediaFile = $upload['mediaFile'];
                $dataMedia = [
                    'hiddenId'              => $this->input('hiddenID'),
                    'name_multimedia'       => $this->input('name_multimedia'),
                    'department'            => $this->input('department'),
                    'category'              => $this->input('category'),
                    'dateail'               => $this->input('dateail_multimedia'),
                    'filemedia'             => $mediaFile,
                    'display'               => $display,
                    'date_start'            => $date_start,
                    'date_finish'           => $date_finish,
                    'update_by'             => $this->input('uploadby'),
                    'update_post'           => $date_update
                ];

                //--send data from controller to mediaModel for Query Insert Data
                $data = [
                    $dataMedia['name_multimedia'], $dataMedia['department'], $dataMedia['category'], $dataMedia['dateail'],
                    $dataMedia['filemedia'], $dataMedia['display'], $dataMedia['date_start'], $dataMedia['date_finish'],
                    $dataMedia['update_by'], $dataMedia['update_post'], $dataMedia['hiddenId']
                ];

                // prepare data
                $updateMedia = $this->mediaModel->updateMediaHaveFile($data);

                if ($updateMedia['data'] === "success") {
                    $dataOps = "success";
                    setcookie('mediaCookie', $dataOps, time() + (10 * 1));
                    $this->redirect("editMultimedia");
                }
                if ($updateMedia['data'] === "error") {
                    $dataOps = "fail";
                    setcookie('mediaCookie', $dataOps, time() + (10 * 1));
                    $this->redirect("editMultimedia");
                }
            }
        } else {

            // Don't have file Media 
            $dataMedia = [
                'hiddenId'              => $this->input('hiddenID'),
                'name_multimedia'       => $this->input('name_multimedia'),
                'department'            => $this->input('department'),
                'category'              => $this->input('category'),
                'dateail'               => $this->input('dateail_multimedia'),
                'display'               => $display,
                'date_start'            => $date_start,
                'date_finish'           => $date_finish,
                'update_by'             => $this->input('uploadby'),
                'update_post'           => $date_update
            ];

            //--send data from controller to mediaModel for Query Insert Data
            // $data = [
            //     $dataMedia['name_multimedia'], $dataMedia['department'], $dataMedia['category'], $dataMedia['dateail'],
            //     $dataMedia['display'], $dataMedia['date_start'], $dataMedia['date_finish'],
            //     $dataMedia['update_by'], $dataMedia['update_post'], $dataMedia['hiddenId']
            // ];
            $data = [
                $dataMedia['name_multimedia'], $dataMedia['department'], $dataMedia['category'], $dataMedia['dateail'],
                $dataMedia['display'], $dataMedia['date_start'], $dataMedia['date_finish'], $dataMedia['hiddenId']
            ];

            // prepare data
            //print_r($data);
            $updateMedia = $this->mediaModel->updateMedia($data);

            if ($updateMedia['data'] === "success") {
                $dataOps = "success";
                setcookie('mediaCookie', $dataOps, time() + (10 * 1));
                $this->redirect("editMultimedia");
            }
            if ($updateMedia['data'] === "error") {
                $dataOps = "fail";
                setcookie('mediaCookie', $dataOps, time() + (10 * 1));
                $this->redirect("editMultimedia");
            }
        }
    }

    public function deleteMultimedia()
    {
        $dataID = $_GET["dataID"];
        $getdata = $this->mediaModel->getDataMediaByID($dataID);
        foreach ($getdata as $rowData) :
            $filevideoName = $rowData->file_video;
        endforeach;

        $delfileVideo = $this->delFileMedia($filevideoName);
        if ($delfileVideo['data'] === "success") {

            $funcDel = $this->mediaModel->deleteFileMedia($dataID);
            if ($funcDel['data'] == "success") {
                echo "success";
            }
            if ($funcDel['data'] == "error") {
                echo "error";
            }
        }
        if ($delfileVideo['data'] === "warning") {
            echo "error";
        }
    }

    public function logout()
    {

        $this->destroy();
        $this->redirect("authen");
    }
}
