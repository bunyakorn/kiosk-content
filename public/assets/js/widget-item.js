//   JAVASCRIPT Controll Widget Item
// Vanilla
document.addEventListener('DOMContentLoaded', function() {
    var d = new Date();
    var M = d.getMonth();
    var Y = d.getFullYear();
    var sendM, sendY;
    var getM =  document.getElementById('monthHidden').value;
    var getY = document.getElementById('yearHidden').value;
    if(getM == ""){
        sendM = M+1;
    }
    else{
        sendM = getM;
    }
    if(getY == ""){ sendY = Y;}
    else{sendY = getY;}

    var xhttp = new XMLHttpRequest();
    var url = 'homeController/showtable?month='+ sendM +'&year=' + sendY;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('show_calendar_table').innerHTML = this.responseText;
        }
    };

    xhttp.open('GET', url, true);
    xhttp.send();

});

var getmonthHidden = document.getElementById('monthHidden').value;
var getyearHidden = document.getElementById('yearHidden').value;
var setYM;

var month = ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];
// ====== SET MONTH THAILAND ==============
if(getmonthHidden == ""){
    var d = new Date();
    var n = d.getMonth();
    var name_month = month[n];
    document.getElementById('name_month').innerHTML = name_month;
}
else{
    var setM = (getmonthHidden - 1);
    var name_month = month[setM];
    document.getElementById('name_month').innerHTML = name_month;
}

// ====== SET YEAR THAILAND==============
if(getyearHidden == ""){
    var d = new Date();
    var n = d.getFullYear();
    var YearThai = (n + 543);
    document.getElementById('data_year').innerHTML = YearThai;
}
else{
    var setYearthai = (getyearHidden +543);
    document.getElementById('data_year').innerHTML = setYearthai;
}


// ======= Finish SET Default ========


// ======= CLICK PREV BUTTON ========
function prevMonth(){

    var getfullyearHidden = document.getElementById('fullyearHidden').value;

    if(getfullyearHidden == ""){
        var d = new Date();
        var Y = d.getFullYear();
        var M = d.getMonth();

        if(M == 1){
            var NewYear = (Y - 1).valueOf();
            var NewMonth = 12;
            setYM = NewYear + "-" + NewMonth;
        }
        else{
             var NewYear  = (Y - 0).valueOf();
             var NewMonth = (M - 0).valueOf();
             setYM = NewYear + "-" + NewMonth;
        }
    }
    else{

        var getfullYear = getfullyearHidden.split('-');
        var getYear = parseInt(getfullYear[0]);
        var getMonth = parseInt(getfullYear[1]);

        if(getMonth == 1){
            var NewYear = (getYear - 1).valueOf();
            var NewMonth = 12;
            setYM = NewYear + "-" + NewMonth;
        }
        else{
            var NewYear  = (getYear - 0).valueOf();
            var NewMonth = (getMonth - 1).valueOf();
            setYM = NewYear + "-" + NewMonth;
        }
    }

    document.getElementById('fullyearHidden').value = setYM;
    //----SET New Month
    var setMPrev = (NewMonth - 1).valueOf();
    var name_month = month[setMPrev];
    document.getElementById('name_month').innerHTML = name_month;

    //----SET New Year
    var YearThai = (NewYear + 543).valueOf();
    document.getElementById('data_year').innerHTML = YearThai;

    getNewCalendar(NewMonth,NewYear); 
    
}


// ======= CLICK NEXT BUTTON ========

function nextMonth() {

    var getfullyearHidden = document.getElementById('fullyearHidden').value;
    if(getfullyearHidden == ""){
        var d = new Date();
        var Y = d.getFullYear();
        var M = d.getMonth();

        if(M == 12){
            var NewYear = (Y + 1).valueOf();
            var NewMonth = 1;
            setYM = NewYear + "-" + NewMonth;
        }
        else{
             var NewYear  = (Y - 0).valueOf();
             var NewMonth = (M + 2).valueOf();
             setYM = NewYear + "-" + NewMonth;
        }
    }
    else{

        var getfullYear = getfullyearHidden.split('-');
        var getYear = parseInt(getfullYear[0]);
        var getMonth = parseInt(getfullYear[1]);

        if(getMonth == 12){
            var NewYear = (getYear + 1).valueOf();
            var NewMonth = 1;
            setYM = NewYear + "-" + NewMonth;
        }
        else{
            var NewYear  = (getYear + 0).valueOf();
            var NewMonth = (getMonth + 1).valueOf();
            setYM = NewYear + "-" + NewMonth;
        }
    }

    document.getElementById('fullyearHidden').value = setYM;
    //----SET New Month
    var setMPrev = (NewMonth - 1).valueOf();
    var name_month = month[setMPrev];
    document.getElementById('name_month').innerHTML = name_month;

    //----SET New Year
    var YearThai = (NewYear + 543).valueOf();
    document.getElementById('data_year').innerHTML = YearThai;

    getNewCalendar(NewMonth,NewYear); 
    
}

function getNewCalendar(NewMonth,NewYear) {
    //----Send data month && year to response calendar
    var xhttp = new XMLHttpRequest();
    var url = 'homeController/showtable?month='+ NewMonth +'&year=' + NewYear;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('show_calendar_table').innerHTML = this.responseText;
            //console.log("OK");
        }
    };

    xhttp.open('GET', url, true);
    xhttp.send();
}

// =====================================================================================================//

var el1 = document.querySelector('.modal-widget-item1');

function checkmeetingroom() {
    el1.classList.toggle('open-widget1-active');
}

function disablewidget1() {
    document.getElementById('display_datauseroom').innerHTML = null;
    document.querySelector(".modal-widget-item1").classList.remove('open-widget1-active');
}

function viewuseage(dateGet) {
    var date_get_vl = (dateGet);
    if(date_get_vl !== 'li-'){
        var dateGetClick = date_get_vl;
        var dateSplit = dateGetClick.split('li-');
        var dateUsage = dateSplit[1];

        //----Send date to response calendar usage meettingroom
        var xhttp = new XMLHttpRequest();
        var url = 'homeController/showUsagemeetingroom?dateUsage=' + dateUsage;
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('display_datauseroom').innerHTML = this.responseText;
                //console.log("OK");
            }
        };

        xhttp.open('GET', url, true);
        xhttp.send();
    }
}

