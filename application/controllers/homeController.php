<?php
    class homeController extends framework {

        public function  __construct(){
            
            $this->helper("link");
            $this->homeModel = $this->model('homeModel');
            $this->meetingModel = $this->model('meetingModel');
        }

        public function index(){

            $date = date("Y-m-d");
            $dataSource = [
                $display = '1',
                $stdate = $date,
                $fndate = $date
            ];
            
            $dataIP = $_SERVER['REMOTE_ADDR'];
            $dateOnServer = $date;
            $Onlinetime = date("Y-m-d H:i");
            $dataServer = [$dataIP, $dateOnServer, $Onlinetime];
            
            //----Prepare Data--------
            $dataHotnews = $this->homeModel->getDataHotnews();
            $dataVideo = $this->homeModel->getDataVideo($dataSource);
            $dataPoster = $this->homeModel->getDataPoster($dataSource);
            $dataAddServerOn = $this->homeModel->updateServerOn($dataServer);
            $data = [$dataHotnews, $dataVideo, $dataPoster];
            $this->view("home", $data);
        }
        
        public function showtable(){
            
            $month = $_GET["month"];
            $year = $_GET["year"];
            $sendParameter = [$month,$year];
            $caleandarDetail = $this->view('components/calendar_meetroom_table', $sendParameter);
            echo $caleandarDetail;
        }

        public function showtableCar(){
            
            $month = $_GET["month"];
            $year = $_GET["year"];
            $sendParameter2 = [$month,$year];
            $caleandarDetailCar = $this->view('components/calendar_meetroom_table_car', $sendParameter2);
            echo $caleandarDetailCar;
        }

        public function showUsagemeetingroom(){

            $dateV = $_GET["dateUsage"];
            $dx = explode("-",$dateV);
            $datav1 = $dx[0];
            $datav2 = $dx[1];
            $datav3 = $dx[2];
            $dataY = $datav1+543;
            $dateUsage = $dataY."-".$datav2."-".$datav3;
            $cateRoom = "ห้องประชุม";
            $dataSend = [$cateRoom, $dateUsage, $dateUsage];
            $resdata = $this->meetingModel->getDataUseMeetting($dataSend);


            echo '<div class="row row-cols-1 row-cols-md-3">';
            foreach($resdata as $dataResult):
                $chkbeak = $dataResult->chkbeak;
                echo '<div class="col mb-4">
                    <div class="card text-white bg-dark mb-3 h-100">
                        <div class="card-header">'.$dataResult->Name_room.'</div>
                        <div class="card-body">
                            <h5 class="card-title text-center text-danger">ช่วงเวลา '.$dataResult->St_time.' - '.$dataResult->En_time.'</h5>
                            <p class="card-text text-white-50 text-detail">'.$dataResult->datailuse.'</p>
                            <p class="card-text text-warning" text-detail">จำนวน '.$dataResult->usecount.' คน';
                            if($chkbeak == '1'){
                                echo ' :: เตรียมอาหารและเครื่องดื่ม';
                            }
                            '</p>
                            ';
                        
                echo '
                            <p class="card-text text-info text-detail"> ผู้ขอใช้  '.$dataResult->usefullname.'</p>
                            <p class="card-text text-info text-detail"> หน่วยงาน  '.$dataResult->agencies.'</p>
                        </div>
                    </div>
                </div>';
            endforeach;
            echo '</div>';
        }

        public function showUsageCar(){

            $dateV = $_GET["dateUsageCar"];
            $dx = explode("-",$dateV);
            $datav1 = $dx[0];
            $datav2 = $dx[1];
            $datav3 = $dx[2];
            $dataY = $datav1+543;
            $dateUsage = $dataY."-".$datav2."-".$datav3;
            $dataSend = [$dateUsage, $dateUsage];
            $resdataCar = $this->meetingModel->getDataUseCar($dataSend);


            echo '<div class="row row-cols-1 row-cols-md-3">';
            foreach($resdataCar as $dataResult):
                echo '<div class="col mb-4">
                    <div class="card text-white bg-secondary mb-3 h-100">
                        <div class="card-header">'.$dataResult->Category.' '.$dataResult->Number_car.'</div>
                        <div class="card-body">
                            <h5 class="card-title text-center text-danger">ช่วงเวลา '.$dataResult->St_time.' - '.$dataResult->En_time.'</h5>
                            <p class="card-text text-white text-detail">'.$dataResult->detailuse. ' ' .$dataResult->province.'</p>
                            <p class="card-text text-warning" text-detail">จำนวนผู้ร่วมเดินทาง '.$dataResult->countuse.' คน </p>
                            <p class="card-text text-success text-detail"> ผู้ขอใช้  '.$dataResult->usenamefull.'</p>
                            <p class="card-text text-success text-detail"> หน่วยงาน  '.$dataResult->agencies.'</p>
                        </div>
                    </div>
                </div>';
            endforeach;
            echo '</div>';
        }
    }
?>