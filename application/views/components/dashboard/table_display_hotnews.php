<?php
    $i = 1;
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header ">
                <h3 class="card-title ">ตารางแสดงรายการข้อมูล Hot News ที่ผ่านมา</h3>
                <div class="card-options">

                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-striped table-vcenter table-outline table-bordered text-nowrap ">
                    <thead>
                        <tr>
                            <th scope="col" class="border-top-0">ID</th>
                            <th scope="col" class="border-top-0">ข้อความวิ่ง</th>
                            <th scope="col" class="border-top-0">หมวดหมู่ </th>
                            <th scope="col" class="border-top-0 text-center">แสดงผล </th>
                            <th scope="col" class="border-top-0 text-center">เริ่มต้น แสดงผล</th>
                            <th scope="col" class="border-top-0 text-center">สิ้นสุดการแสดงผล</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data[1] as $row) { ?>
                        <tr>
                            <th scope="row"><?php echo $i++;?></th>
                            <td>
                            <?php 
                                $str_news = $row->data_hotnews;
                                $txtLenght = strlen($str_news);
                                if($txtLenght >=75){
                                    $dtHNews = iconv_substr($str_news, 0 ,75,'UTF-8');
                                    echo $dtHNews."...";
                                }
                                else{
                                    echo $str_news;
                                }
                            ?>
                            </td>
                            <td>
                                <?php 
                                    $cate = $row->category;
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
                            </td>
                            <td class="text-center">
                                <?php 
                                    $show = $row->display;
                                    switch ($show) {
                                        case (string) 1:
                                            echo '<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                                                    <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                </svg>';
                                        break;
                                        case (string) 0:
                                            echo '<svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                    <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                    <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                </svg>';
                                        break;
                                    }
                                ?>
                            </td>
                            <td class="text-center">
                                <?php 
                                    $d_start = $row->date_start;
                                    $ds = explode("-", $d_start);
                                    $ds1 = $ds[0];
                                    $ds2 = $ds[1];
                                    $ds3 = $ds[2];
                                    $dsy = $ds1+543;
                                    echo $ds3."-".$ds2."-".$dsy;
                                ?>
                            </td>
                            <td class="text-center">
                                <?php
                                    $d_finish = $row->date_finish;
                                    $df = explode("-", $d_finish);
                                    $df1 = $df[0];
                                    $df2 = $df[1];
                                    $df3 = $df[2];
                                    $dfy = $df1+543;
                                    echo $df3."-".$df2."-".$dfy;
                                ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>