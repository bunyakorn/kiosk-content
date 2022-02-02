<link rel="stylesheet" href="./assets/plugins/bootstrap-daterangepicker/daterangepicker.css" type="text/css">
<link rel="stylesheet" href="./assets/plugins/select2/select2.min.css" type="text/css">
<link rel="stylesheet" href="./assets/plugins/date-picker/spectrum.css" type="text/css">
<link rel="stylesheet" href="./assets/plugins/accordion1/css/easy-responsive-tabs.css" type="text/css">
<link rel="stylesheet" href="./assets/plugins/sidebar/sidebar.css" type="text/css">
<link rel="stylesheet" href="./assets/plugins/multipleselect/multiple-select.css" type="text/css">
<?php 

    $hnewsID = $data;
    $result = $this->hotnewsModel->getDataHotnewsID($hnewsID); 
    foreach($result as $db_result):
?>

<form id="hotnews_editform" action="<?php echo BASEURL;?>/editHotnews/updateDataHotnews" method="post">
    <input type="hidden" name="hiddenID" value="<?php echo $db_result->hnid; ?>" />
    <input type="hidden" name="uploadby" value="<?php echo $datauser->department;?>"/>
    <div class="row">
        <div class="col-xl-4 col-lg-12 col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h3 class="mb-0 card-title">ตั้งค่าการแสดงผลให้กับข้อความวิ่ง</h3>
                </div>
                <div class="card-body">
                    <div class="form-label">กำหนดให้แสดงผล</div>
                    <label class="custom-switch">
                        <input type="checkbox" name="display_hotnews" value="1" class="custom-switch-input" <?php 
                            $dsp = $db_result->display;
                            if($dsp == "1"){
                                echo "checked";
                            }
                        ?> />
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">ต้องการให้แสดงผลในตู้ประชาสัมพันธ์</span>
                    </label>
                    <div class="form-label text-danger mt-2">กำหนดวันที่ต้องการแสดงผล</div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control fc-datepicker" name="date_start" id="date_start"
                                    value="<?php 
                                        $d_start = $db_result->date_start;
                                        $ds = explode("-", $d_start);
                                        $ds1 = $ds[0]; //y
                                        $ds2 = $ds[1]; //m
                                        $ds3 = $ds[2]; //d
                                        echo $ds2."/".$ds3."/".$ds1;
                                    ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control fc-datepicker" name="date_finish"
                                    id="date_finish" value="<?php 
                                        $d_finish = $db_result->date_finish;
                                        $df = explode("-", $d_finish);
                                        $df1 = $df[0]; //y
                                        $df2 = $df[1]; //m
                                        $df3 = $df[2]; //d
                                        echo $df2."/".$df3."/".$df1;
                                    ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 card-title">
                        <i class="ti-help-alt" data-toggle="tooltip" title="ti-help-alt"></i>
                        ฟอร์มกรอกข้อมูล Hot News
                        ข้อความวิ่ง เพื่อใช้ประชาสัมพันธ์ข่าวสาร</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">หัวข้อการประชาสัมพันธ์ ( Hot News )</label>
                                <input type="text" class="form-control" name="name_hotnews" id="name_hotnews"
                                    placeholder="ข้อความวิ่ง" value="<?php echo $db_result->data_hotnews; ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label">สังกัดหน่วยงาน</label>
                                <input type="text" class="form-control" name="department" id="department"
                                    value="<?php echo $db_result->department; ?>" readonly="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="form-label">เลือกหมวดหมู่ หรือกลุ่มงานประชาสัมพันธ์</label>
                                <select class="form-control select2 custom-select" name="category" id="category"
                                    data-placeholder="เลือกหมวดหมู่">
                                    <?php $cate = $db_result->category;?>
                                    <option label="เลือกหมวดหมู่">
                                    </option>
                                    <option value="1" <?php if($cate == "1"){echo "selected";}?>>งานฝ่ายกิจการนิสิต
                                    </option>
                                    <option value="2" <?php if($cate == "2"){echo "selected";}?>>งานฝ่ายบริการการศึกษา
                                    </option>
                                    <option value="3" <?php if($cate == "3"){echo "selected";}?>>งานวิเทศสัมพันธ์
                                    </option>
                                    <option value="4" <?php if($cate == "4"){echo "selected";}?>>งานฝ่ายบริหารบุคคล
                                    </option>
                                    <option value="5" <?php if($cate == "5"){echo "selected";}?>>
                                        งานบริการวิชาการและฝึกอบรม</option>
                                    <option value="6" <?php if($cate == "6"){echo "selected";}?>>งานพัสดุ เปิดซอง
                                        และจัดซื้อจัดจ้างภาครัฐ</option>
                                    <option value="7" <?php if($cate == "7"){echo "selected";}?>>งานซ่อมบำรุง
                                        ฝ่ายงานอาคารและสถานที่</option>
                                    <option value="8" <?php if($cate == "8"){echo "selected";}?>>
                                        งานประชาสัมพันธ์ต้อนรับแขก</option>
                                    <option value="9" <?php if($cate == "9"){echo "selected";}?>>ข่าวแสดงความยินดี
                                        แสดงความเสียใจ และเชิญชวนอื่น ๆ</option>
                                    <option value="10" <?php if($cate == "10"){echo "selected";}?>>
                                        ข่าวประชาสัมพันธ์ขอทุนวิจัย</option>
                                    <option value="11" <?php if($cate == "11"){echo "selected";}?>>ข่าวประชาสัมพันธ์
                                        ข้อมูล Mintel</option>
                                    <option value="12" <?php if($cate == "12"){echo "selected";}?>>
                                        ข่าวประชาสัมพันธ์ห้องสมุด คณะอุตสาหกรรมเกษตร</option>
                                    <option value="13" <?php if($cate == "13"){echo "selected";}?>>ข่าวประชาสัมพันธ์
                                        งานระบบสารสนเทศและเครือข่าย</option>
                                    <option value="14" <?php if($cate == "14"){echo "selected";}?>>ข่าวประชาสัมพันธ์
                                        อื่น ๆ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group mb-0">
                                <label class="form-label">ข้อมูลรายละเอียดที่ต้องการให้แสดงเพิ่มเติม</label>
                                <textarea class="form-control" name="dateail_hotnews" id="dateail_hotnews"
                                    rows="7"><?php echo $db_result->detail; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" id="submit" class="hide">
</form>
<?php endforeach;?>

<!-- Daterangepicker js-->
<script src="./assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<!--Select2 js -->
<script src="./assets/plugins/select2/select2.full.min.js"></script>
<script src="./assets/js/select2.js"></script>

<!-- Datepicker js -->
<script src="./assets/plugins/date-picker/spectrum.js"></script>
<script src="./assets/plugins/date-picker/jquery-ui.js"></script>
<script src="./assets/plugins/input-mask/jquery.maskedinput.js"></script>

<!--MutipleSelect js-->
<script src="./assets/plugins/multipleselect/multiple-select.js"></script>
<script src="./assets/plugins/multipleselect/multi-select.js"></script>

<!-- Custom scroll bar js-->
<script src="./assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Rightsidebar js -->
<script src="./assets/plugins/sidebar/sidebar.js"></script>