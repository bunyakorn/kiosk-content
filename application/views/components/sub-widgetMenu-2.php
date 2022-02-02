<div class="page-widget-item2">
    <div class="modal-widget-item2">
        <div class="close-widget2 pointer" onclick="disablewidget2()"><img src="<?php echo BASEURL;?>/assets/images/close-tab.png" alt=""></div>
        <div class="header-title-usecar">
            <span class="text-usecar">ตารางการใช้งานรถยนต์คณะ</span>
        </div>
        <div class="body-content" id="load_body_content2">
            <div class="row">
                <div class="col-sm">
                    <div class="text-left">
                        <button type="button" class="btn btn-danger" onclick="prevMonth2()">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 12.796L4.519 8 10 3.204v9.592zm-.659.753l-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
                            </svg>
                            <span class="text-next-prev"> ย้อนกลับ </span>&nbsp;&nbsp;
                        </button>
                        <button type="button" class="btn btn-danger" onclick="nextMonth2()">
                            <span class="text-next-prev"> เดือนถัดไป </span>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 12.796L11.481 8 6 3.204v9.592zm.659.753l5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="col-sm">
                    <input type="hidden" name="monthHidden2" id="monthHidden2" value="">
                    <input type="hidden" name="yearHidden2" id="yearHidden2" value="">
                    <input type="hidden" name="fullyearHidden2" id="fullyearHidden2" value="">
                    <div class="text-center head_month"> เดือน <span id="name_month2"></span> &nbsp;<span id="data_year2"></span></div>
                </div>
                <div class="col-sm">
                    
                </div>
            </div>
            <div class="row mt-10 justify-content-center">
                <div class="col-md-12">
                    <div id="show_calendar_table_car"></div> 
                </div>
                <div class="col-md-12">
                    <div class="hr-line"></div>
                    <div class="info-use-car mb-30">
                        แสดงรายละเอียดการใช้งานรถยนต์คณะ
                    </div>
                    <div id="display_datausecar" class="show_detail_car"></div>
                </div>
            </div>
        </div>
    </div>
</div>
