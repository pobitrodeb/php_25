<?php


namespace App\classes;


class Image
{
    public function getImage()
    {

        $data = getimagesize($_FILES['image']['tmp_name']); // getimagesize is bulid in funcation.

        if($data)
        {
            $directory = 'assets/img/';
            $imageName = $_FILES['image']['name'];
            $destination = $directory.$imageName;
            move_uploaded_file( $_FILES['image']['tmp_name'], $destination); // move_uploaded_file is bulid in funcation
        }
        else
        {
            echo 'please input image type';
        }
    }
}