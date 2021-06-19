<?php
class Users{
    public $name;
    public $password;
    public $username;
    public $birth_of_date;
    public $married;
    public $age;

    //constructor
    public function __construct(){
        $birth_of_date = $this->birth_of_date;
        $dif = date_diff(date_create($birth_of_date),date_create(date("Y-m-d")));
        $this->age=$dif->format('%y');
    }
}