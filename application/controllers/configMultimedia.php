<?php
class configMultimedia extends framework
{

    public function __construct()
    {

        if (!$this->getSession('userId')) {

            $this->redirect("authen");
        }

        $this->helper("link");
        $this->mediaModel = $this->model("mediaModel");
        $this->adminModel = $this->model("adminModel");
    }


    public function index()
    {

        $userId = $this->getSession('userId');
        $data_arr1 = $this->adminModel->getDataUser($userId);
        $dep = $data_arr1->department;
        $data_arr2 = $this->mediaModel->getDataMedia($dep);
        $data_arr3 = $this->mediaModel->getDataMediaDisplay($dep);
        $data = [$data_arr1, $data_arr2, $data_arr3];
        $this->view('configDisplayMultimedia', $data);
    }

    public function updateConfig()
    {

        $hdnLine = $_POST["hdnLine"];
        if ($hdnLine > 1) {
            $nullVl = $this->mediaModel->clearLevelDisplay();
            if ($nullVl['status'] == "success") {
                $v = 0;
                for ($i = 1; $i <= $hdnLine; $i++) {
                    $mediaID = $_POST["hdnmultimediaID$i"];
                    $levelShow = $_POST["shownumber$i"];
                    $updateLv = $this->mediaModel->setDisplayMedia($mediaID, $levelShow);

                    if ($updateLv['status'] == 'success') {
                        $v += 1;
                    }
                }
                if ($v == $hdnLine) {
                    $dataOps = "success";
                    setcookie('mediaCookie', $dataOps, time() + (10 * 1));
                    $this->redirect("configMultimedia");
                }
            }
            if ($nullVl['status'] == "error") {
                $dataOps = "error";
                setcookie('mediaCookie', $dataOps, time() + (10 * 1));
                $this->redirect("configMultimedia");
            }
        }
    }
}
