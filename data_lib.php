<!--
Muhammad Aidil Fahmiey Bin Osman
1819369
Section1
-->
<?php

class Data { 

    private $first_name;
    private $last_name;
    private $email;
    private $Phone_number;
    private $datec;
    private $ic;
    private $starttime;
    private $endtime;
    private $pax;


    public function __construct($first_name,$last_name,$email,$Phone_number,$datec,
    $ic,$starttime,$endtime,$pax)
    {
        $this->first_name =$first_name;
        $this->last_name =$last_name;
        $this->email =$email;
        $this->Phone_number =$Phone_number;
        $this->datec =$datec;
        $this->ic =$ic;
        $this->starttime =$starttime;
        $this->endtime =$endtime;
        $this->pax =$pax;
    }

    public function setFName($first_name){
        $this->first_name =$first_name;
    }
    public function getFName(){
        return $this->first_name;
    }

    public function setLName($last_name){
        $this->last_name =$last_name;
    }
    public function getLName(){
        return $this->last_name;
    }

    public function setEmail($email){
        $this->email =$email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setPnum($Phone_number){
        $this->Phone_number =$Phone_number;
    }
    public function getPnum(){
        return $this->Phone_number;
    }

    public function setDate($datec){
        $this->datec =$datec;
    }
    public function getDate(){
        return $this->datec;
    }

    public function setIc($ic){
        $this->ic =$ic;
    }
    public function getIc(){
        return $this->ic;
    }

    public function setSTime($starttime){
        $this->starttime =$starttime;
    }
    public function getSTime(){
        return $this->starttime;
    }

    public function setETime($endtime){
        $this->endtime =$endtime;
    }
    public function getETime(){
        return $this->endtime;
    }

    public function setPax($pax){
        $this->pax =$pax;
    }
    public function getPax(){
        return $this->pax;
    }

}
?>