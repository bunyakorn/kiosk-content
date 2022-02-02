<style>
.hide {
    display: none;
}
</style>

<!-- request update form -->
<div class="hide" id="form_update"></div>
<!-- request update form -->
<div id="table_editdelete_multimedia">
    <?php require_once("table_edit_delete_multimedia.php");?>
</div>

<input type="hidden" name="hiddenStatus" id="hiddenStatus" value="<?php if(isset($_COOKIE['mediaCookie'])): echo $_COOKIE['mediaCookie']; endif;?>"/>
<input type="hidden" id="hd_dep" value="<?php echo $datauser->department;?>" />


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