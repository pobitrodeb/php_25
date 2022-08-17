<?php


namespace App\classes;
use App\classes\Database;


class Student
{
    public $name, $email, $mobile, $dbConnection, $sql, $database, $imageName, $imageUrl, $directory, $tempLocation, $queryResult, $data = [], $row;

    public function  __construct($post=null, $files=null)
    {
     if(isset($post ['name']))
     {
         $this->name         = $post ['name'];
         $this->email        = $post ['email'];
         $this->mobile       = $post ['mobile'];

         $this->imageName           = time().$files['image']['name'];
         $this->directory           = 'assets/img/';
         $this->tempLocation        = $files['image']['tmp_name'];
         $this->imageUrl            = $this->directory.$this->imageName;
     }

    }
    public function newStudent()
    {
        if (! getimagesize($this->tempLocation))
        {
            return 'please select jpg or png file';
        }
        move_uploaded_file($this->tempLocation, $this->imageUrl);


        $this->sql = "INSERT INTO students(name, email, mobile, image) VALUES ('$this->name', '$this->email', '$this->mobile', '$this->imageUrl')";
        $this->database = new Database();
        mysqli_query($this->database->dbConnect(), $this->sql);
        return 'Student Add Successfuly';
    }


 public function getAllStudent()
 {
        $this->sql              = "SELECT * FROM students"; //ekhan theke sob data niye asa hoyehce. students ekta table name
        $this->database         = new Database();
        $this->queryResult     = mysqli_query($this->database->dbConnect(), $this->sql);

       // $this->data =  mysqli_fetch_assoc($this->queryResult);


       // $this->data =  mysqli_fetch_array($this->queryResult);


        while ($this->row = mysqli_fetch_assoc($this->queryResult))
        {
            array_push($this->data, $this->row);
        }
        return $this->data;
 }


 public function getStudentByID($id)
 {
     $this->sql              = "SELECT * FROM students WHERE  id ='$id'"; //ekhan theke sob data niye asa hoyehce. students ekta table name
     $this->database         = new Database();
     $this->queryResult      = mysqli_query($this->database->dbConnect(), $this->sql);

     $this->row              = mysqli_fetch_assoc($this->queryResult);
     return $this->row;

 }

 public function updateStudent()
 {
     $this->sql              = "UPDATE students SET name = '$this->name', email='$this->email', ";
     $this->database         = new Database();
     $this->queryResult      = mysqli_query($this->database->dbConnect(), $this->sql);
 }
}