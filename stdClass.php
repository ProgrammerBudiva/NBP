<?php

class stdClassCustom {

    public $years;
    public $months;
    public $days;
    public $total_days;
    public $invert;

    public $date1;
    public $date2;

    public function __construct($date1, $date2)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }

    /**
     * @return mixed
     */

    public function index(){
        $date1_array = explode('-', $this->date1);
        $date2_array = explode('-', $this->date2);

        $date1_sec = $this->getTotalSeconds($date1_array);
        $date2_sec = $this->getTotalSeconds($date2_array);

        $this->setInvert($date1_sec, $date2_sec);

        $years = $this->setYears($date1_sec, $date2_sec);

        return $this->years;
    }

    public function getTotalSeconds($array){
        $total_sec = $array[0] * 31536000 + $array[1] * 2592000 + $array[2] * 86400;

        return $total_sec;
    }

    public function setInvert($date1_sec, $date2_sec){
        if($date2_sec - $date1_sec > 0){
            $this->invert = false;
        }else{
            $this->invert = true;
        }
    }

    public function setYears($date1_sec, $date2_sec)
    {
        $years = abs(($date2_sec - $date1_sec)/31536000);
        if($years >= 1){
            $this->years = (int) $years;
        }else{
            $this->years = 0;
        }

        return $years;
    }

    public function setMonthes($date1_sec, $date2_sec)
    {
        $years = ($date2_sec - $date1_sec)/31536000;
        $this->years = abs($years);

    }

    public function setDays($date1_sec, $date2_sec)
    {
        $years = ($date2_sec - $date1_sec)/31536000;
        $this->years = abs($years);
    }

    public function setTotalDays($date1_sec, $date2_sec)
    {
        $years = ($date2_sec - $date1_sec)/31536000;
        $this->years = abs($years);
    }
}

$a = new stdClassCustom('2015-03-24', '2014-04-24');
echo '<pre>'; print_r($a->index());echo "</pre>";