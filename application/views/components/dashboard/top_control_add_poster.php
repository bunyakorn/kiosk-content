<script>
function onSubmit() {
    
    var fileposter = $("#file_poster").val();
    var name_poster = $("#name_poster").val();
    var category = $("#category").val();
    var dateail_poster = $("#dateail_poster").val();
    //-------------------------------------------
    var date_start = $("#date_start").val();
    //-------------------------------------------
    var date_finish = $("#date_finish").val();
    //-------------------------------------------
    var date_diff_indays = function(date1, date2) {
        dt1 = new Date(date1);
        dt2 = new Date(date2);
        return Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(),
            dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));
    }
    //-------------------------------------------
    var dateDiff = date_diff_indays(date_start, date_finish);
    //-------------------------------------------

    if (fileposter == "") {
        //alert('ท่านยังไม่ได้เพิ่มไฟล์ภาพโปสเตอร์');
        Swal.fire(
                'กรุณาตรวจสอบข้อมูล',
                'ท่านยังไม่ได้เพิ่มไฟล์ภาพโปสเตอร์',
                'warning'
            )
            .then((result) => {
                $("#file_poster").focus().trigger('click');
            });
    } else if (name_poster == "") {
        Swal.fire(
                'กรุณาตรวจสอบข้อมูล',
                'ท่านยังไม่ได้กรอกข้อมูลหัวข้อภาพโปสเตอร์',
                'warning'
            )
            .then((result) => {
                $("#name_poster").focus().trigger('click');
            });
    } else if (category == "") {
        Swal.fire(
                'กรุณาตรวจสอบข้อมูล',
                'กรุณาเลือกหมวดหมู่ หรือกลุ่มงานประชาสัมพันธ์',
                'warning'
            )
            .then((result) => {
                $("#category").focus().trigger('click');
            });
    } else if (dateail_poster == "") {
        Swal.fire(
                'กรุณาตรวจสอบข้อมูล',
                'ท่านยังไม่ได้กรอกข้อมูลรายละเอียดงานประชาสัมพันธ์',
                'warning'
            )
            .then((result) => {
                $("#dateail_poster").focus().trigger('click');
            });
    } else if (date_start == "") {
        Swal.fire(
                'กรุณาตรวจสอบข้อมูล',
                'ท่านยังไม่ได้กำหนดวันที่ต้องการแสดงผล เริ่มต้น',
                'warning'
            )
            .then((result) => {
                $("#date_start").focus().trigger('click');
            });
    } else if (date_finish == "") {
        Swal.fire(
                'กรุณาตรวจสอบข้อมูล',
                'ท่านยังไม่ได้กำหนดวันที่ต้องการแสดงผล สิ้นสุด',
                'warning'
            )
            .then((result) => {
                $("#date_finish").focus().trigger('click');
            });
    } else if (dateDiff < 0) {
        Swal.fire(
                'กรุณาตรวจสอบข้อมูล',
                'ท่านกำหนดวันที่ต้องการแสดงผล สิ้นสุด ไม่ถูกต้อง',
                'warning'
            )
            .then((result) => {
                $("#date_finish").focus().trigger('click');
            });
    } else {
        $("#submit").click();
    }
   
}
</script>

<div class="bg-white p-3 header-secondary row">
    <div class="col">
    </div>
    <div class="col col-auto">
        <a class="btn btn-light mt-4 mt-sm-0" href="<?php echo BASEURL;?>/poster">
            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-arrow-repeat" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
            </svg>
            Refresh
        </a>
        <a class="btn btn-success mt-4 mt-sm-0" href="javascript:void(0);" onClick="onSubmit()">
            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-clipboard-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
            <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
            </svg> 
            Add Poster
        </a>
    </div>
</div>