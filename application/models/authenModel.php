<?php
class authenModel extends database
{

    public function checkEmail($email)
    {

        if ($this->Query("SELECT * FROM user_admin WHERE email = ?", [$email])) {
            if ($this->rowCount() > 0) {
                return false;
            } else {
                return true;
            }
        }
    }

    public function userLogin($email, $password)
    {

        if ($this->Query("SELECT * FROM user_admin WHERE email = ?", [$email])) {

            if ($this->rowCount() > 0) {

                $row = $this->fetch();
                $dbPassword = $row->password;
                $userId = $row->id;

                if (password_verify($password, $dbPassword)) {

                    return ['status' => 'ok', 'data' => $userId];

                } else {

                    return ['status' => 'passwordNotMatched'];
                }
            } else {

                return ['status' => 'emailNotFound'];
            }
        }

    }
}
