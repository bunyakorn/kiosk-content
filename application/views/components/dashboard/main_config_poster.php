<style>
.hide {
    display: none;
}
</style>
<div id="table_config_poster">
    <?php include "table_config_poster.php";?>
</div>
<input type="hidden" id="hd_dep" value="<?php echo $datauser->department;?>" />
<input type="hidden" name="hiddenStatus" id="hiddenStatus" value="<?php if(isset($_COOKIE['posterCookie'])): echo $_COOKIE['posterCookie']; endif;?>"/>

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
