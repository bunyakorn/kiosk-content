<?php
class Calendar {  
     
    /**
     * Constructor
     */
    public function __construct(){     
        $this->naviHref = htmlentities($_SERVER['PHP_SELF']);
    }
     
    /********************* PROPERTY ********************/  
    private $dayLabels = array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");
     
    private $currentYear=0;
     
    private $currentMonth=0;
     
    private $currentDay=0;
     
    private $currentDate=null;
     
    private $daysInMonth=0;
     
    private $naviHref= null;

     
    /********************* PUBLIC **********************/  
        
    /**
    * print out the calendar
    */
    public function show($monthVL,$yearVL) {

        $year  = $yearVL;
        $month = $monthVL;
         
        $this->currentYear = $year;
         
        $this->currentMonth = $month;
         
        $this->daysInMonth = $this->_daysInMonth($month,$year);  
         
        $content='<div id="calendar">'.

                        '<div class="box-content">'.
                                '<ul class="label">'.$this->_createLabels().'</ul>';
                                $content.='<div class="clear"></div>';
                                $content.='<ul class="dates pointer">';
                                 
                                $weeksInMonth = $this->_weeksInMonth($month,$year);
                                
                                // Create weeks in a month
                                for( $i=0; $i<$weeksInMonth; $i++ ){
                                     
                                    //Create days in a week
                                    for($j=0;$j<=6;$j++){
                                        $content.=$this->_showDay($i*7+$j);
                                    }
                                }
                                 
                                $content.='</ul>';
                                 
                                $content.='<div class="clear"></div>';
             
                        $content.='</div>';
                 
        $content.='</div>';
        return $content;   
    }
     
    /********************* PRIVATE **********************/ 
    /**
    * create the li element for ul
    */
    private function _showDay($cellNumber){
         
        if($this->currentDay==0){
            
            $firstDayOfTheWeek = date('w',strtotime($this->currentYear.'-'.$this->currentMonth.'-01'));
                
            if(intval($cellNumber) == intval($firstDayOfTheWeek)){
                 
                $this->currentDay=1;
                 
            }
        }
         
        if( ($this->currentDay!=0)&&($this->currentDay<=$this->daysInMonth) ){
            
            $this->currentDate = date('Y-m-d',strtotime($this->currentYear.'-'.$this->currentMonth.'-'.($this->currentDay))); 
             
            $cellContent = $this->currentDay;
            $this->currentDay++;
             
        }
        
        else{
             
            $this->currentDate =null;
 
            $cellContent=null;
        }
             
         
        return '<li id="li-'.$this->currentDate.'" class="'.($cellNumber%7==1?' start ':($cellNumber%7==0?' end ':' ')).
                ($cellContent==null?'mask':'').'" onclick="viewuseageCar(this.id)" hvr-wobble-vertical>'.$cellContent.'</li>';
    }
         
    /**
    * create calendar week labels
    */
    private function _createLabels(){  
                 
        $content = '';
         
        foreach($this->dayLabels as $index=>$label){
             
            $content.='<li class="'.($label==6?'end title':'start title').' title">'.$label.'</li>';
 
        }
         
        return $content;
    }
     
     
     
    /**
    * calculate number of weeks in a particular month
    */
    private function _weeksInMonth($month,$year){
         
        // find number of days in this month
        $daysInMonths = $this->_daysInMonth($month,$year);
         
        $numOfweeks = ($daysInMonths%7==0?0:1) + intval($daysInMonths/7);
         
        $monthEndingDay = date('w',strtotime($year.'-'.$month.'-'.$daysInMonths));
         
        $monthStartDay = date('w',strtotime($year.'-'.$month.'-01'));
         
        if($monthEndingDay<$monthStartDay){
             
            $numOfweeks++;
         
        }
        return $numOfweeks;
    }
 
    /**
    * calculate number of days in a particular month
    */
    private function _daysInMonth($month,$year){
             
        return date('t',strtotime($year.'-'.$month.'-01'));

    }
     
}

$month = $data[0];
$year = $data[1];
$calendar = new Calendar();
echo $calendar->show($month,$year);

?>