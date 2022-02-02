<?php
class profileAccount extends framework
{

    public function __construct()
    {
        if (!$this->getSession('userId')) {

            $this->redirect("authen");

        }

        $this->helper("link");
        $this->accountModel = $this->model("accountModel");
        $this->adminModel = $this->model("adminModel");
    }

    public function index()
    {

        $userId = $this->getSession('userId');
        $data_arr1 = $this->adminModel->getDataUser($userId);
        $alluser = $this->accountModel->getUserAll();
        $data = [$data_arr1, $alluser];
        $this->view('dataProfile', $data);
    }

    public function addUser()
    {
        //uploadFileAvatar
        if (isset($_FILES['file_avatar'])) {

            $upload = $this->uploadFileAvatar($_FILES['file_avatar']);
            if ($upload['data'] === "success") {

                $avatar = $upload['fileAvatar'];

                $dataUser = [
                    'filepicture' => $avatar,
                    'username' => $this->input('username'),
                    'password' => $this->input('password'),
                    'fullname' => $this->input('fullname'),
                    'department' => $this->input('department'),
                    'email' => $this->input('email'),
                    'status' => $this->input('status'),
                ];
                //--send data from controller to posterModel for Query Insert Data
                $password = password_hash($dataUser['password'], PASSWORD_DEFAULT);
                $data = [
                    $dataUser['filepicture'], $dataUser['username'], $password, $dataUser['fullname'],
                    $dataUser['department'], $dataUser['email'], $dataUser['status'],
                ];

                $addProfileUser = $this->accountModel->addAccount($data);

                if ($addProfileUser['data'] === "success") {
                    $dataOps = "success";
                    //setcookie('posterCookie', $dataOps, time() + (10 * 1));
                    $this->redirect("profileAccount");
                }
                if ($addProfileUser['data'] === "error") {
                    $dataOps = "fail";
                    //setcookie('posterCookie', $dataOps, time() + (10 * 1));
                    $this->redirect("profileAccount");
                }
            }

        }
    }

    public function logout()
    {

        $this->destroy();
        $this->redirect("authen");
    }
}
