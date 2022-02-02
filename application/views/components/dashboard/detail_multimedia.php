<?php 

    $mID = $data;
    $results = $this->mediaModel->getDataMediaByID($mID); 
    foreach( $results as $result):
?>

<div class="modal-body pd-20">
    <div class="row">
        <div class="col-md-4">
            <video width="100%" controls>
                <source src="assets/multimedia/<?php echo $result->file_video;?>" type="video/mp4">
                Your browser does not support HTML video.
            </video>
        </div>
        <div class="col-md-8">
            <h5 class=" lh-3 mg-b-20">
                <span class="font-weight-bold">
                    <?php echo $result->name_multimedia;?>
                </span>
            </h5>
            <p class=""><span class="text-secondary"> หมวดหมู่ : </span>
                <?php 
                    $cate = $result->category;
                    switch ($cate) {
                        case (string) 1:
                            echo "งานฝ่ายกิจการนิสิต";
                        break;
                        case (string) 2:
                            echo "งานฝ่ายบริการการศึกษา";
                        break;
                        case (string) 3:
                            echo "งานวิเทศสัมพันธ์";
                        break;
                        case (string) 4:
                            echo "งานฝ่ายบริหารบุคคล";
                        break;
                        case (string) 5:
                            echo "งานบริการวิชาการและฝึกอบรม";
                        break;
                        case (string) 6:
                            echo "งานพัสดุ เปิดซอง และจัดซื้อจัดจ้างภาครัฐ";
                        break;
                        case (string) 7:
                            echo "งานซ่อมบำรุง ฝ่ายงานอาคารและสถานที่";
                        break;
                        case (string) 8:
                            echo "งานประชาสัมพันธ์ต้อนรับแขก";
                        break;
                        case (string) 9:
                            echo "ข่าวแสดงความยินดี แสดงความเสียใจ และเชิญชวนอื่น ๆ";
                        break;
                        case (string) 10:
                            echo "ข่าวประชาสัมพันธ์ขอทุนวิจัย";
                        break;
                        case (string) 11:
                            echo "ข่าวประชาสัมพันธ์ ข้อมูล Mintel";
                        break;
                        case (string) 12:
                            echo "ข่าวประชาสัมพันธ์ห้องสมุด คณะอุตสาหกรรมเกษตร";
                        break;
                        case (string) 13:
                            echo "ข่าวประชาสัมพันธ์ งานระบบสารสนเทศและเครือข่าย";
                        break;
                        case (string) 14:
                            echo "ข่าวประชาสัมพันธ์ อื่น ๆ";
                        break;
                    }
                ?>
            </p>
            <p class="">
                <span class="text-info">รายละเอียด : </span>
                <?php echo $result->detail;?>
            </p>
            <p class="">
                <span class="text-pink">เริ่มต้นแสดงผล : </span>
                <?php 
                    $d_start = $result->date_start;
                    $ds = explode("-", $d_start);
                    $ds1 = $ds[0];
                    $ds2 = $ds[1];
                    $ds3 = $ds[2];
                    $dsy = $ds1+543;
                    echo " &nbsp; วันที่ &nbsp; ".$ds3."-".$ds2."-".$dsy;

                    $d_finish = $result->date_finish;
                    $df = explode("-", $d_finish);
                    $df1 = $df[0];
                    $df2 = $df[1];
                    $df3 = $df[2];
                    $dfy = $df1+543;
                    echo  " &nbsp;&nbsp; ถึงวันที่ &nbsp; ".$df3."-".$df2."-".$dfy;
                ?>
            </p>
            <p class="">
                <span class="text-dark">สถานะการเผยแพร่ข่าวประชาสัมพันธ์ : </span>
                <?php 
                    $show = $result->display;
                    switch ($show) {
                        case (string) 1:
                            echo '<span class="text-green">เปิดการแสดงข้อมูล</span>';
                        break;
                        case (string) 0:
                            echo '<span class="text-red">ปิดซ่อนการแสดงข้อมูล</span>';
                        break;
                    }
                ?>
            </p>
            <p class="">
                <span class="text-info">ผู้เผยแพร่ข่าวประชาสัมพันธ์ : </span>
                <?php echo $result->post_by;?>
            </p>
        </div>
    </div>
</div>
<?php endforeach;?>