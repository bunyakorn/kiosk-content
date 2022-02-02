<?php
    class authen extends framework {
        public function  __construct(){

            $this->helper("link");
            $this->authenModel = $this->model("authenModel");
        }

        public function index(){

            $this->view('user');
        }

        public function userLogin(){

            $userData = [
                'email'         => $this->input('email'),
                'password'      => $this->input('password'),
                'remember'      => $this->input('remember'),
                'emailError'    => '',
                'passwordError' => ''
            ];

            if(empty($userData['email'])){
                $userData['emailError'] = "Email is needed !!";
            }

            if(empty($userData['password'])){
                $userData['passwordError'] = "Password is needed !!";
            }

            if(empty($userData['emailError']) && empty($userData['passwordError'])){

               $result = $this->authenModel->userLogin($userData['email'], $userData['password']);

               if($result['status'] === 'emailNotFound'){
                    $userData['emailError'] = "Sorry invalid email";
                    $this->view('user', $userData);
               }
               else if($result['status'] === 'passwordNotMatched'){
                    $userData['passwordError'] = "Sorry invalid password";
                    $this->view('user', $userData);
               }
               else if($result['status'] === 'ok'){
                    $this->setSession('userId', $result['data']);
                    // set remember me
                    if(!empty($userData['remember'])){
                        setcookie('user_login', $userData['email'], time() + (10*365*24*60*60));
                        setcookie('user_password', $userData['password'], time() + (10*365*24*60*60));
                    }
                    else{
                        if(isset($_COOKIE['user_login'])){
                            setcookie('user_login', '');
                            if(isset($_COOKIE['user_password'])){
                                setcookie('user_password', '');
                            }
                        }
                    }
                    $this->redirect("admin");
                }
                else{

                }
            }
            else {
                $this->view("user", $userData);
            }
        }
        
    }
?>