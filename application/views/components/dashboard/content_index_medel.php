<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">สรุปข้อมูลในระบบทั้งหมด</h3>
            </div>
            <div class="card-body">
                <div class="jumbotron">
                    <h1 class="display-3">สวัสดีผู้ใช้งานระบบประชาสัมพันธ์</h1>
                    <p class="lead">เราชาว อก. ร่วมด้วยช่วยกัน สร้างสรรค์ผลงานนวัตกรรมและสื่อประชาสัมพันธ์ภาพลักษณ์
                        วิถีของ คณะอุตสาหกรรมเกษตร ให้ชาวมหาวิทยาลัยเกษตรศาสตร์และบุคคลภายนอกให้ได้รับทราบ</p>
                    <hr class="my-4">
                    <div class="kiosk_online">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                    <?php
                                        $kiosk1 = $data[1];
                                        $vlk1 = $kiosk1->client_ip;
                                        $currTime = date("Y-m-d H:i");
                                        $to_time = strtotime($currTime);
                                        $ontime1 = $kiosk1->Onlinetime;
                                        $from_time1 = strtotime($ontime1);
                                        $ans1 = round(abs($to_time - $from_time1) / 60, 2);
                                    ?>
                                    <span class="pulse <?php echo (!empty($vlk1) && $ans1 <= 65) ? 'bg-success' : 'bg-danger'; ?>"></span>
                                    Kiosk อาคาร 5 ชั้น 5
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                    <?php
                                        $kiosk2 = $data[2];
                                        $vlk2 = $kiosk2->client_ip;
                                        $ontime2 = $kiosk2->Onlinetime;
                                        $from_time2 = strtotime($ontime2);
                                        $ans2 = round(abs($to_time - $from_time2) / 60, 2);
                                    ?>
                                    <span class="pulse <?php echo (!empty($vlk2) && $ans2 <= 65) ? 'bg-success' : 'bg-danger'; ?>"></span>
                                    Kiosk อาคาร 5 ชั้น 1
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                    <?php
                                        $kiosk3 = $data[3];
                                        $vlk3 = $kiosk3->client_ip;
                                        $ontime3 = $kiosk3->Onlinetime;
                                        $from_time3 = strtotime($ontime3);
                                        $ans3 = round(abs($to_time - $from_time3) / 60, 2);
                                    ?>
                                    <span class="pulse <?php echo (!empty($vlk3) && $ans3 <= 65) ? 'bg-success' : 'bg-danger'; ?>"></span>
                                    Kiosk อาคาร 1 ชั้น 1
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                    <?php
                                        $kiosk4 = $data[4];
                                        $vlk4 = $kiosk4->client_ip;
                                        $ontime4 = $kiosk4->Onlinetime;
                                        $from_time4 = strtotime($ontime4);
                                        $ans4 = round(abs($to_time - $from_time4) / 60, 2);
                                    ?>
                                    <span class="pulse <?php echo (!empty($vlk4) && $ans4 <= 65) ? 'bg-success' : 'bg-danger'; ?>"></span>
                                    Kiosk อาคาร 2 ชั้น 1
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                    <?php
                                        $kiosk5 = $data[5];
                                        $vlk5 = $kiosk5->client_ip;
                                        $ontime5 = $kiosk5->Onlinetime;
                                        $from_time5 = strtotime($ontime5);
                                        $ans5 = round(abs($to_time - $from_time5) / 60, 2);
                                    ?>
                                    <span class="pulse <?php echo (!empty($vlk5) && $ans5 <= 65) ? 'bg-success' : 'bg-danger'; ?>"></span>
                                    Kiosk อาคาร 3 ชั้น 1
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>ระบบอยู่ในช่วงการพัฒนาเพื่อให้สามารถใช้งานได้อย่างมีประสิทธิภาพ </p>
                    <!-- <p class="lead m-0">
                        <a class="btn btn-instagram btn-lg" href="javascript:void(0);" role="button">Testing</a>
                    </p> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row close -->