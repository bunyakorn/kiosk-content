<script>
function onUpdate() {

    var hdnLine = $("#hdnLine").val();

    for (var i = 1; i <= hdnLine; i++) {
        var nValue = $("#shownumber" + i).val();
        if (nValue == "") {
            Swal.fire(
                    'กรุณาตรวจสอบข้อมูล',
                    'ลำดับการแสดงผลไม่ถูกต้อง',
                    'warning'
                )
                .then((result) => {
                    $("#shownumber" + i).focus();
                });
            return false;
        }
    }
    $("#submit").click();
}
</script>
<div class="bg-white p-3 header-secondary row">
    <div class="col">
    </div>
    <div class="col col-auto">
        <a class="btn btn-light mt-4 mt-sm-0" href="<?php echo BASEURL;?>/configHotnews">
            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
            </svg>
            Refresh
        </a>
        <a class="btn btn-azure mt-4 mt-sm-0" href="javascript:void(0);" onClick="onUpdate()" id="btnUpdate">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
            </svg> 
            Save Update
        </a>
    </div>
</div>