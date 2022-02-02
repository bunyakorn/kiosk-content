<?php
class adminModel extends database
{

    public function getDataUser($userId)
    {

        if ($this->Query("SELECT * FROM user_admin WHERE id = ?", [$userId])) {

            $data = $this->fetch();
            return $data;
        }
    }

    public function checkServerOn($kiosk)
    {
        if ($this->Query("SELECT * FROM client_on WHERE client_ip = ? AND date_on = ? ORDER BY Onlinetime DESC", $kiosk)) {
            if ($this->rowCount() > 0) {
                $data = $this->fetch();
                return $data;
            }
        }
    }
}
