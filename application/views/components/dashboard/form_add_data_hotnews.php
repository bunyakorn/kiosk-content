<style>
.hide {
    display: none;
}
</style>

<input type="hidden" name="hiddenStatus" id="hiddenStatus" value="<?php if(isset($_COOKIE['hotnewsCookie'])): echo $_COOKIE['hotnewsCookie']; endif;?>"/>

<form id="hotnews_form" action="<?php echo BASEURL;?>/hotnews/addDataHotnews" method="post">
    <input type="hidden" name="uploadby" value="<?php echo $user->fullname; ?>" />
    <div class="row">
        <div class="col-xl-4 col-lg-12 col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h3 class="mb-0 card-title">ตั้งค่าการแสดงผลให้กับข้อความวิ่ง</h3>
                </div>
                <div class="card-body">
                    <div class="form-label">กำหนดให้แสดงผล</div>
                    <label class="custom-switch">
                        <input type="checkbox" name="display_hotnews" value="1" class="custom-switch-input" checked />
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
                                <input class="form-control fc-datepicker" placeholder="วันเริ่มแสดงผล" name="date_start"
                                    id="date_start" type="text" autocomplete="off" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                    </div>
                                </div>
                                <input class="form-control fc-datepicker" placeholder="วันสิ้นสุดแสดงผล"
                                    name="date_finish" id="date_finish" type="text" autocomplete="off" />
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
                                    placeholder="ข้อความวิ่ง">
                            </div>
                            <div class="form-group">
                                <label class="form-label">สังกัดหน่วยงาน</label>
                                <input type="text" class="form-control" name="department" id="department"
                                    value="<?php echo $datauser->department; ?>" readonly="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="form-label">เลือกหมวดหมู่ หรือกลุ่มงานประชาสัมพันธ์</label>
                                <select class="form-control select2 custom-select" name="category" id="category"
                                    data-placeholder="เลือกหมวดหมู่">
                                    <option label="เลือกหมวดหมู่">
                                    </option>
                                    <option value="1">งานฝ่ายกิจการนิสิต </option>
                                    <option value="2">งานฝ่ายบริการการศึกษา</option>
                                    <option value="3">งานวิเทศสัมพันธ์</option>
                                    <option value="4">งานฝ่ายบริหารบุคคล</option>
                                    <option value="5">งานบริการวิชาการและฝึกอบรม</option>
                                    <option value="6">งานพัสดุ เปิดซอง และจัดซื้อจัดจ้างภาครัฐ</option>
                                    <option value="7">งานซ่อมบำรุง ฝ่ายงานอาคารและสถานที่</option>
                                    <option value="8">งานประชาสัมพันธ์ต้อนรับแขก</option>
                                    <option value="9">ข่าวแสดงความยินดี แสดงความเสียใจ และเชิญชวนอื่น ๆ</option>
                                    <option value="10">ข่าวประชาสัมพันธ์ขอทุนวิจัย</option>
                                    <option value="11">ข่าวประชาสัมพันธ์ ข้อมูล Mintel</option>
                                    <option value="12">ข่าวประชาสัมพันธ์ห้องสมุด คณะอุตสาหกรรมเกษตร</option>
                                    <option value="13">ข่าวประชาสัมพันธ์ งานระบบสารสนเทศและเครือข่าย</option>
                                    <option value="14">ข่าวประชาสัมพันธ์ อื่น ๆ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group mb-0">
                                <label class="form-label">ข้อมูลรายละเอียดที่ต้องการให้แสดงเพิ่มเติม</label>
                                <textarea class="form-control" name="dateail_hotnews" id="dateail_hotnews" rows="7"
                                    placeholder="ใส่ข้อมูลที่นี่.."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" id="submit" class="hide">
</form>

<input type="hidden" id="hd_dep" value="<?php echo $datauser->department;?>" />

<div id="table_display_hotnews">
    <?php require_once("table_display_hotnews.php");?>
</div>


<script>
    $(document).ready(function () {
        var hdstatus = $("#hiddenStatus").val();
        if(hdstatus !== ""){
            if(hdstatus == "success"){
                Swal.fire(
                    'บันทึกข้อมูลสำเร็จ',
                    'ข้อมูลประชาสัมพันธ์ถูกบันทึกแล้ว',
                    'success'
                )
                .then((result) => {
                    
                });
            }
            if(hdstatus == "fail"){
                Swal.fire(
                    'บันทึกข้อมูลไม่สำเร็จ',
                    'เนื่องจากระบบขัดข้อง',
                    'warning'
                )
                .then((result) => {
                    
                });
            }
        }
        //====================================
    });
</script>