<?php
     require_once("../../../FrontEnd/authen/database_config.php");
     //=====request database=======
     require __DIR__ . './server_on.php';
     //=====Library =======

     $dateCurr = date("Y-m-d");

     $ip1 = "158.108.64.53"; //-------kiosk 5-5
     $ip2 = "158.108.64.143"; //-------kiosk 5-1
     $ip3 = "158.108.64.198"; //-------kiosk 1-1
     $ip4 = "158.108.64.36"; //-------kiosk 2-1
     $ip5 = "158.108.88.215"; //-------kiosk 3-1

     $ckclient = new server_on();

     $status_ip1 = $ckclient ->checkClientIP1($dateCurr, $ip1); 
     $status_ip2 = $ckclient ->checkClientIP2($dateCurr, $ip2); 
     $status_ip3 = $ckclient ->checkClientIP3($dateCurr, $ip3);
     $status_ip4 = $ckclient ->checkClientIP4($dateCurr, $ip4);
     $status_ip5 = $ckclient ->checkClientIP5($dateCurr, $ip5);
?>
<style>
.hide {
    display: none;
}
</style>
<script>
$(document).ready(function() {
    var hip5_5 = $("#kiosk5-5").val();
    var hip5_1 = $("#kiosk5-1").val();
    var hip1_1 = $("#kiosk1-1").val();
    var hip2_1 = $("#kiosk2-1").val();
    var hip3_1 = $("#kiosk3-1").val();

    if (hip5_5 == "158.108.64.53") {
        $("#ledip5_5").removeClass('bg-red');
        $("#ledip5_5").addClass('bg-green');
        $("#offline5_5").addClass('hide');
        $("#online5_5").removeClass('hide');
    }
    if (hip5_1 == "158.108.64.143") {
        $("#ledip5_1").removeClass('bg-red');
        $("#ledip5_1").addClass('bg-green');
        $("#offline5_1").addClass('hide');
        $("#online5_1").removeClass('hide');
    }
    if (hip1_1 == "158.108.64.198") {
        $("#ledip1_1").removeClass('bg-red');
        $("#ledip1_1").addClass('bg-green');
        $("#offline1_1").addClass('hide');
        $("#online1_1").removeClass('hide');
    }
    if (hip2_1 == "158.108.64.36") {
        $("#ledip2_1").removeClass('bg-red');
        $("#ledip2_1").addClass('bg-green');
        $("#offline2_1").addClass('hide');
        $("#online2_1").removeClass('hide');
    }
    if (hip3_1 == "158.108.88.215") {
        $("#ledip3_1").removeClass('bg-red');
        $("#ledip3_1").addClass('bg-green');
        $("#offline3_1").addClass('hide');
        $("#online3_1").removeClass('hide');
    }
});
</script>
<div class="list-group list-group-flush ">
    <div class="list-group-item d-flex  align-items-center">
        <div class="mr-2">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pl-1 pr-1 m-t-5 m-b-5">
                <a href="javascript:void(0);" class="member"> <img
                        src="http://158.108.64.57/kiosk/BackEnd/assets/images/kiosk_icon.jpg" alt="">
                    <span class="avatar-status bg-red" id="ledip5_5"></span>
                    <div class="memmbername text-red" id="offline5_5">Offline </div>
                    <div class="memmbername text-green hide" id="online5_5">Online</div>
                </a>
            </div>
        </div>
        <div class="">
            <div class="font-weight-semibold">Kiosk อาคาร 5 ชั้น 5 </div>
            <input type="hidden" id="kiosk5-5" value="<?php echo $status_ip1->client_ip;?>">
        </div>
    </div>
    <div class="list-group-item d-flex  align-items-center">
        <div class="mr-2">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pl-1 pr-1 m-t-5 m-b-5">
                <a href="javascript:void(0);" class="member"> <img
                        src="http://158.108.64.57/kiosk/BackEnd/assets/images/kiosk_icon.jpg" alt="">
                    <span class="avatar-status bg-red" id="ledip5_1"></span>
                    <div class="memmbername text-red" id="offline5_1">Offline </div>
                    <div class="memmbername text-green hide" id="online5_1">Online</div>
                </a>
            </div>
        </div>
        <div class="">
            <div class="font-weight-semibold">Kiosk อาคาร 5 ชั้น 1 </div>
            <input type="hidden" id="kiosk5-1" value="<?php echo $status_ip2->client_ip;?>">
        </div>
    </div>
    <div class="list-group-item d-flex  align-items-center">
        <div class="mr-2">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pl-1 pr-1 m-t-5 m-b-5">
                <a href="javascript:void(0);" class="member"> <img
                        src="http://158.108.64.57/kiosk/BackEnd/assets/images/kiosk_icon.jpg" alt="">
                    <span class="avatar-status bg-red" id="ledip1_1"></span>
                    <div class="memmbername text-red" id="offline1_1">Offline </div>
                    <div class="memmbername text-green hide" id="online1_1">Online</div>
                </a>
            </div>
        </div>
        <div class="">
            <div class="font-weight-semibold">Kiosk อาคาร 1 ชั้น 1 </div>
            <input type="hidden" id="kiosk1-1" value="<?php echo $status_ip3->client_ip;?>">
        </div>
    </div>
    <div class="list-group-item d-flex  align-items-center">
        <div class="mr-2">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pl-1 pr-1 m-t-5 m-b-5">
                <a href="javascript:void(0);" class="member"> <img
                        src="http://158.108.64.57/kiosk/BackEnd/assets/images/kiosk_icon.jpg" alt="">
                    <span class="avatar-status bg-red" id="ledip2_1"></span>
                    <div class="memmbername text-red" id="offline2_1">Offline </div>
                    <div class="memmbername text-green hide" id="online2_1">Online</div>
                </a>
            </div>
        </div>
        <div class="">
            <div class="font-weight-semibold">Kiosk อาคาร 2 ชั้น 1 </div>
            <input type="hidden" id="kiosk2-1" value="<?php echo $status_ip4->client_ip;?>">
        </div>
    </div>
    <div class="list-group-item d-flex  align-items-center">
        <div class="mr-2">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pl-1 pr-1 m-t-5 m-b-5">
                <a href="javascript:void(0);" class="member"> <img
                        src="http://158.108.64.57/kiosk/BackEnd/assets/images/kiosk_icon.jpg" alt="">
                    <span class="avatar-status bg-red" id="ledip3_1"></span>
                    <div class="memmbername text-red" id="offline3_1">Offline </div>
                    <div class="memmbername text-green hide" id="online3_1">Online</div>
                </a>
            </div>
        </div>
        <div class="">
            <div class="font-weight-semibold">Kiosk อาคาร 3 ชั้น 1 </div>
            <input type="hidden" id="kiosk3-1" value="<?php echo $status_ip5->client_ip;?>">
        </div>
    </div>
</div>