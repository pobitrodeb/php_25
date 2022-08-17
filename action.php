<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\RandomNumber;
use App\classes\Image;
use App\classes\Student;

if (isset($_GET['page']))
{
    if($_GET['page']=='home')
    {

        include 'pages/home.php';
    }
    elseif ($_GET['page']=='all-student')
    {
        $student = new Student();
        $students = $student->getAllStudent();
        include 'pages/all-student.php';
    }
    elseif ($_GET['page']=='edit')
    {
        $student = new Student();
        $singleStudent = $student->getStudentByID($_GET['id']);
        include 'pages/edit.php';
    }
}
elseif (isset($_POST['submit_btn']))
{
    $studnet = new Student($_POST, $_FILES);
    $message = $studnet->newStudent();
    include 'pages/home.php';
}
elseif (isset($_POST['update_btn']))
{
    $studnet = new Student($_POST, $_FILES);
    $message = $studnet->updateStudent();
}
