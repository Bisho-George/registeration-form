<?php

class ImageUploader
{
 private $image;
 private $imageName;

 public function __construct($imageName)
 {
  $this->imageName = $imageName;
 }

 public function getImageName()
 {
  return $this->imageName;
 }

 public function uploadImage()
 {
  $imageName = $_FILES['userImage']['name'];
  $imaget = $_FILES['userImage']['tmp_name'];
  $ext = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
  $allowed = array('jpg', 'jpeg', 'png', 'gif');
  if (!in_array($ext, $allowed)) {
   echo "File type not allowed";
   exit;
  }
  $imageN = uniqid('IMG-', true) . "." . $ext;
  $this->imageName = $imageName;
  $targetPath = "uploads/" . $imageN;
  move_uploaded_file($imaget, $targetPath);
  if (move_uploaded_file($imaget, $targetPath)) {
   echo "File uploaded successfully";
  } else {
   $error = error_get_last();
   echo "File upload failed, please try again." . $error['message'];
  }
 }
}
