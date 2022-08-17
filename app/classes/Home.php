<?php


namespace App\classes;
use App\classes\Database;

class Home
{

    //public $database;

    public function __construct()
    {

    }
    public function index()
    {
        header('Location: action.php?page=home');
      //  $this->database = new Database();
     //   $this->database->dbConnect();
    }

}