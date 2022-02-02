<?php
class accountModel extends database
{
    public function getUserAll()
    {
        if ($this->Query("SELECT * FROM user_admin ORDER BY id DESC")) {

            $data = $this->fetchAll();
            return $data;
        }
    }

    public function addAccount($dataAccount)
    {
        if ($this->Query("INSERT INTO user_admin(avatars,username,password,fullname,department,email,status) VALUES(?,?,?,?,?,?,?)", $dataAccount)) {

            return ['data' => 'success'];
        } else {
            return ['data' => 'error'];
        }
    }
}
