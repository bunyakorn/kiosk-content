<style>
.hide {
    display: none;
}
</style>

<input type="hidden" name="hiddenStatus" id="hiddenStatus" value="<?php if(isset($_COOKIE['mediaCookie'])): echo $_COOKIE['mediaCookie']; endif;?>"/>

<form id="multimedia_form" action="<?php echo BASEURL;?>/multimedia/addMultimedia" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="uploadby" value="<?php echo $datauser->fullname; ?>" />
    <div class="row">
        <div class="col-xl-4 col-lg-12 col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h3 class="mb-0 card-title">
                        อัพโหลดไฟล์วิดีโอ (File WEBM/MP4)
                        &nbsp; 
                        <a href="https://video.online-convert.com/convert/mp4-to-webm" target="_blank" title="Convert MP4 to WEBM">
                        <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-globe" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4H2.255a7.025 7.025 0 0 1 3.072-2.472 6.7 6.7 0 0 0-.597.933c-.247.464-.462.98-.64 1.539zm-.582 3.5h-2.49c.062-.89.291-1.733.656-2.5H3.82a13.652 13.652 0 0 0-.312 2.5zM4.847 5H7.5v2.5H4.51A12.5 12.5 0 0 1 4.846 5zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5H7.5V11H4.847a12.5 12.5 0 0 1-.338-2.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12H7.5v2.923c-.67-.204-1.335-.82-1.887-1.855A7.97 7.97 0 0 1 5.145 12zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11H1.674a6.958 6.958 0 0 1-.656-2.5h2.49c.03.877.138 1.718.312 2.5zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12h2.355a7.967 7.967 0 0 1-.468 1.068c-.552 1.035-1.218 1.65-1.887 1.855V12zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5h-2.49A13.65 13.65 0 0 0 12.18 5h2.146c.365.767.594 1.61.656 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4H8.5V1.077c.67.204 1.335.82 1.887 1.855.173.324.33.682.468 1.068z"/>
                        </svg>
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <input type="file" name="file_video" id="file_video" class="dropify" />
                </div>
            </div>

            <!-- fix -->
            <div class="card shadow">
                <div class="card-header">
                    <h3 class="mb-0 card-title">ตั้งค่าการแสดงผลให้กับไฟล์มัลติมีเดีย</h3>
                </div>
                <div class="card-body">
                    <div class="form-label">กำหนดให้แสดงผล</div>
                    <label class="custom-switch">
                        <input type="checkbox" name="display_multimedia" value="1" class="custom-switch-input" checked />
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
                                    id="date_start" type="text">
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
                                    name="date_finish" id="date_finish" type="text">
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
                        ข้อมูล
                        รายละเอียดต่าง ๆ เกี่ยวกับมัลติมีเดีย</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">ชื่อมัลติมีเดีย หรือ ชื่องานวิดีโอที่ต้องการประชาสัมพันธ์</label>
                                <input type="text" class="form-control" name="name_multimedia" id="name_multimedia"
                                    placeholder="ชื่อมัลติมีเดีย...">
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
                                <textarea class="form-control" name="dateail_multimedia" id="dateail_multimedia" rows="7"
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


<div id="table_display_multimedia">
    <?php require_once("table_display_multimedia.php");?>
</div>

<input type="hidden" id="hd_dep" value="<?php echo $datauser->department;?>" />




<div class="modal fade" id="modal_id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-white" id="exampleModalLabel">Uploading FIle Multimedia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div id="loader-icon"><center><img src="<?php echo BASEURL;?>/assets/img/LoaderIcon.gif" /></center></div>
      </div>
      <div class="modal-footer">
        <br>
      </div>
    </div>
  </div>
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

<script>
    $( "#submit" ).click(function() {
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                $("#modal_id").modal('show');
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        percentComplete = parseInt(percentComplete * 100);
                        $('.uploadProgressBar').attr('aria-valuenow',percentComplete).css('width',percentComplete + '%').text(percentComplete + '%');
                        if (percentComplete === 100) {
                            $("#modal_id").modal('hide');
                        }
                    }
                }, false);
                return xhr;
            }
        });
    });
</script>

<script>
    /*
    $(document).ready(function() {
        var dep = $("#hd_dep").val();
        setTimeout(() => {
            $.get("../control/view/table_display_multimedia.php", {
                    agen: dep
                })
                .done(function(dataTable) {
                    $("#table_display_multimedia").html(dataTable);
                });
        }, 1000);
    });
    */
</script>



<script>
/*
// Attach a submit handler to the form
$("#multimedia_form").submit(function(event) {
    event.preventDefault();
    var post_url = $(this).attr("action");
    var request_method = $(this).attr("method");
    var form_data = new FormData(this);
    //alert("TEST SUBMIT");

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success mr-1',
            cancelButton: 'btn btn-danger ml-1'
        },
        buttonsStyling: true
    })

    swalWithBootstrapButtons.fire({
        title: 'ยืนยันความถูกต้องของข้อมูล?',
        text: "กดปุ่ม ยืนยัน เพื่อบันทึกข้อมูล",
        icon: 'info',
        showCancelButton: true,
        confirmButtonText: 'ยืนยัน',
        cancelButtonText: 'กลับไปแก้ไข',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                url: post_url,
                type: request_method,
                data: form_data,
                cache: false,
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    $("#modal_id").modal('show');
                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = evt.loaded / evt.total;
                            percentComplete = parseInt(percentComplete * 100);
                            $('.uploadProgressBar').attr('aria-valuenow',percentComplete).css('width',percentComplete + '%').text(percentComplete + '%');
                            if (percentComplete === 100) {
                                $("#modal_id").modal('hide');
                            }

                        }
                    }, false);

                    return xhr;
                },
                contentType: false,
                processData: false
            }).done(function(respData) {
                //--------ดำเนินการสำเร็จ---------------------
                var codeAlert = respData;
                //alert("CODE ::" + codeAlert);
                if (codeAlert == "codeA") {
                    swalWithBootstrapButtons.fire(
                            'บันทึกข้อมูลสำเร็จ',
                            'ข้อมูลประชาสัมพันธ์ถูกบันทึกแล้ว',
                            'success'
                        )
                        .then((result) => {
                            window.location.href = "add_data_multimedia.php";
                        });
                }
                if (codeAlert == "codeB") {
                    //-------ดำเนินการไม่สำเร็จ--------------
                    Swal.fire(
                        'บันทึกข้อมูลไม่สำเร็จ',
                        'เนื่องจากระบบขัดข้อง',
                        'warning'
                    );
                    return false;
                }
                if (codeAlert == "codeC") {
                    //--------------- ไฟล์วิดีโอมัลติมีเดีย ไม่ถูกต้อง
                    Swal.fire(
                        'บันทึกข้อมูลไม่สำเร็จ',
                        'เนื่องจากไฟล์วิดีโอมัลติมีเดีย ไม่ถูกต้อง',
                        'warning'
                    );
                    return false;
                }
                if (codeAlert == "codeD") {
                    //--------------- มีข้อมูลในฐานข้อมูลอยู่แล้ว
                    Swal.fire(
                        'บันทึกข้อมูลไม่สำเร็จ',
                        'เนื่องจากมีข้อมูลมัลติมีเดียในฐานข้อมูลอยู่แล้ว',
                        'warning'
                    );
                    return false;
                    //redirect page
                }
                if (codeAlert == "codeE") {
                    //--------------- อัพโหลดไฟล์วิดีโอมัลติมีเดีย ไม่สำเร็จ
                    Swal.fire(
                        'บันทึกข้อมูลไม่สำเร็จ',
                        'เกิดปัญหาหลัก ในการอัพโหลดไฟล์มัลติมีเดีย',
                        'warning'
                    );
                    return false;
                    //redirect page
                }
                
            });
        } else if (
            result.dismiss === Swal.DismissReason.cancel
        ) {
            return false;
        }
    });


});
*/
</script>