<div class="page-widget-item">
    <div class="modal-widget-item1">
        <div class="close-widget1 pointer" onclick="disablewidget1()"><img src="<?php echo BASEURL;?>/assets/images/close-tab.png" alt=""></div>
        <div class="header-title-meetingroom">
            <span class="text-meetroom">ตารางการใช้งานห้องประชุม</span>
        </div>
        <div class="body-content" id="load_body_content">
            <div class="row">
                <div class="col-sm">
                    <div class="text-left">
                        <button type="button" class="btn btn-info" onclick="prevMonth()">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 12.796L4.519 8 10 3.204v9.592zm-.659.753l-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
                            </svg>
                            <span class="text-next-prev"> ย้อนกลับ </span>&nbsp;&nbsp;
                        </button>
                        <button type="button" class="btn btn-info" onclick="nextMonth()">
                            <span class="text-next-prev"> เดือนถัดไป </span>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="col-sm">
                    <input type="hidden" name="monthHidden" id="monthHidden" value="">
                    <input type="hidden" name="yearHidden" id="yearHidden" value="">
                    <input type="hidden" name="fullyearHidden" id="fullyearHidden" value="">
                    <div class="text-center head_month"> เดือน <span id="name_month"></span> &nbsp;<span id="data_year"></span></div>
                </div>
                <div class="col-sm">
                    
                </div>
            </div>
            <div class="row mt-10 justify-content-center">
                <div class="col-md-12">
                    <div id="show_calendar_table"></div> 
                </div>
                <div class="col-md-12">
                    <div class="hr-line"></div>
                    <div class="info-use-meetroom mb-30">
                        แสดงรายละเอียดการใช้งานห้องประชุม
                    </div>
                    <div id="display_datauseroom" class="show_detail_meetroom"></div>
                </div>
            </div>
        </div>
    </div>
</div>
