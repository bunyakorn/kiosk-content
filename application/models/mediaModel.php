<?php
class mediaModel extends database
{
    public function getDataMedia($dep)
    {
        $dateCurr = date("Y-m-d");
        if ($this->Query("SELECT * FROM data_multimedia WHERE department = ? AND date_finish >= ? ORDER BY shownumber ASC", [$dep, $dateCurr])) {

            $data = $this->fetchAll();
            return $data;
        }
    }

    public function getDataMediaDisplay($dep)
    {
        $dateCurr = date("Y-m-d");
        if ($this->Query("SELECT * FROM data_multimedia WHERE department = ? AND date_finish >= ? AND display ='1' ORDER BY shownumber ASC", [$dep, $dateCurr])) {

            $data = $this->fetchAll();
            return $data;
        }
    }


    public function getDataMediaByID($dataID)
    {

        if ($this->Query("SELECT * FROM data_multimedia WHERE multimediaID = ?", [$dataID])) {

            $data = $this->fetchAll();
            return $data;
        }
    }

    public function getdataMediaID($mediaID)
    {
        if ($this->Query("SELECT * FROM data_multimedia WHERE multimediaID = ?", [$mediaID])) {
            $data = $this->fetchAll();
            return $data;
        }
    }

    public function addDataMedia($dataMedia)
    {
        if ($this->Query("INSERT INTO data_multimedia(name_multimedia,department,category,detail,file_video,display,date_start,date_finish,post_by,date_post) VALUES(?,?,?,?,?,?,?,?,?,?)", $dataMedia)) {

            return ['data' => 'success'];
        } else {
            return ['data' => 'error'];
        }
    }

    public function updateMediaHaveFile($dataFileMedia)
    {
        if ($this->Query("UPDATE data_multimedia SET name_multimedia =?, department =?, category =?, detail =?, file_video =?, display =?, date_start =?, date_finish =?, update_by =?, update_post =? WHERE multimediaID =?", $dataFileMedia)) {

            return ['data' => 'success'];
        } else {
            return ['data' => 'error'];
        }
    }

    public function updateMedia($dataZeroFileMedia)
    {
        //, update_by =?, update_post =?
        if ($this->Query("UPDATE data_multimedia SET name_multimedia =?, department =?, category =?, detail =?, display =?, date_start =?, date_finish =? WHERE multimediaID =?", $dataZeroFileMedia)) {

            return ['data' => 'success'];
        } else {
            return ['data' => 'error'];
        }
    }

    public function deleteFileMedia($dataID)
    {
        if ($this->Query("DELETE FROM data_multimedia WHERE multimediaID =?", [$dataID])) {
            return ['data' => 'success'];
        } else {
            return ['data' => 'error'];
        }
    }

    public function clearLevelDisplay()
    {
        if ($this->Query("UPDATE data_multimedia SET shownumber = NULL WHERE shownumber IS NOT NULL")) {
            return ['status' => 'success'];
        } else {
            return ['status' => 'error'];
        }
    }

    public function setDisplayMedia($mediaID, $levelShow)
    {
        if ($this->Query("UPDATE data_multimedia SET shownumber =? WHERE multimediaID =?", [$levelShow, $mediaID])) {
            return ['status' => 'success'];
        } else {
            return ['status' => 'error'];
        }
    }
}
