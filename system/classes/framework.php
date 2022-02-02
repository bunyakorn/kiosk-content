<?php
class framework
{
    public function view($viewname, $data = [])
    {

        if (file_exists("../application/views/" . $viewname . ".php")) {
            require_once "../application/views/$viewname.php";
        } else {
            echo "<div style='margin:0; padding: 10px; background-color:silver;'>Sorry $viewname.php file not found</div>";
        }
    }

    public function model($modelName)
    {

        if (file_exists("../application/models/" . $modelName . ".php")) {
            require_once "../application/models/$modelName.php";
            return new $modelName;
        } else {
            echo "<div style='margin:0; padding: 10px; background-color:silver;'>Sorry $modelName.php file not found</div>";
        }
    }

    public function input($inputName)
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == 'POST') {
            return trim(strip_tags($_POST[$inputName]));
        } else if ($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == 'GET') {
            return trim(strip_tags($_GET[$inputName]));
        }
    }

    private $_supportedFormatFile = ['image/png', 'image/jpeg', 'image/jpg', 'image/gif'];
    private $_supportedFormatFileMedia = ['video/mp4', 'video/webm'];

    public function uploadFilePoster($file)
    {

        if (is_array($file)) {
            //continue

            if (in_array($file['type'], $this->_supportedFormatFile)) {
                //continue
                $temp = explode(".", $file['name']);
                $filename = round(microtime(true)) . '.' . end($temp);
                move_uploaded_file($file['tmp_name'], 'assets/poster/' . $filename);
                return ['data' => 'success', 'posterFile' => $filename];
            } else {
                echo "<div style='margin:0; padding: 10px; background-color:silver;'>Sorry file format is not supported!!</div>";
            }
        } else {
            echo "<div style='margin:0; padding: 10px; background-color:silver;'>Sorry no file poster was uploaded!!</div>";
        }
    }

    public function uploadFilevideo($file)
    {

        if (is_array($file)) {
            //continue
            if (in_array($file['type'], $this->_supportedFormatFileMedia)) {
                //continue
                $temp = explode(".", $file['name']);
                $filename = round(microtime(true)) . '.' . end($temp);
                move_uploaded_file($file['tmp_name'], 'assets/multimedia/' . $filename);
                return ['data' => 'success', 'mediaFile' => $filename];
            } else {
                echo "<div style='margin:0; padding: 10px; background-color:silver;'>Sorry file format is not supported!!</div>";
            }
        } else {
            echo "<div style='margin:0; padding: 10px; background-color:silver;'>Sorry no file media was uploaded!!</div>";
        }
    }

    public function uploadFileAvatar($file)
    {

        if (is_array($file)) {
            //continue

            if (in_array($file['type'], $this->_supportedFormatFile)) {
                //continue
                $temp = explode(".", $file['name']);
                $filename = round(microtime(true)) . '.' . end($temp);
                move_uploaded_file($file['tmp_name'], 'assets/images/users/avatars/' . $filename);
                return ['data' => 'success', 'fileAvatar' => $filename];
            } else {
                echo "<div style='margin:0; padding: 10px; background-color:silver;'>Sorry file format is not supported!!</div>";
            }
        } else {
            echo "<div style='margin:0; padding: 10px; background-color:silver;'>Sorry no file poster was uploaded!!</div>";
        }
    }

    public function delFilePoster($fileName)
    {

        $flgDelete = unlink('assets/poster/' . $fileName);
        if ($flgDelete) {
            return ['data' => 'success'];
        } else {
            return ['data' => 'warning'];
        }
    }

    public function delFileMedia($fileName)
    {

        $flgDelete = unlink('assets/multimedia/' . $fileName);
        if ($flgDelete) {
            return ['data' => 'success'];
        } else {
            return ['data' => 'warning'];
        }
    }

    public function helper($helperName)
    {

        if (file_exists("../system/helpers/" . $helperName . ".php")) {
            require_once "../system/helpers/" . $helperName . ".php";
        } else {
            echo "<div style='margin:0; padding: 10px; background-color:silver;'>Sorry $helperName.php file not found</div>";
        }
    }

    // SET SESSION
    public function setSession($sessionName, $sessionValue)
    {

        if (!empty($sessionName) && !empty($sessionValue)) {

            $_SESSION[$sessionName] = $sessionValue;

        }
    }

    // GET SESSION
    public function getSession($sessionName)
    {

        if (!empty($sessionName)) {
            return $_SESSION[$sessionName];
        }

    }

    // UNSET SESSION
    public function unsetSession($sessionName)
    {

        if (!empty($sessionName)) {

            unset($_SESSION[$sessionName]);
        }
    }

    // DESTROY WHOLE SESSION
    public function destroy()
    {

        session_destroy();
    }

    // SET FLASH MESSAGE
    public function setFlash($sessionName, $msg)
    {

        if (!empty($sessionName) && !empty($msg)) {

            $_SESSION[$sessionName] = $msg;

        }
    }

    // SHOW FLASH MESSAGE
    public function flash($sessionName, $className)
    {

        if (!empty($sessionName) && !empty($className) && isset($_SESSION[$sessionName])) {

            $msg = $_SESSION[$sessionName];

            echo "<div class='" . $className . "'>" . $msg . "</div>";
            unset($_SESSION[$sessionName]);
        }
    }

    public function redirect($path)
    {

        header("location:" . BASEURL . "/" . $path);

    }
}
