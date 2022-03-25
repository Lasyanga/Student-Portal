<?php
if(count($_FILES["item_file"]['name'])>0){//check if any file uploaded
 $GLOBALS['msg'] = ""; //initiate the global message
  
  for($j=0; $j < count($_FILES["item_file"]['name']); $j++){ //loop the uploaded file array
    $filen = $_FILES["item_file"]['name']["$j"]; //file name
    $path = 'uploads/'.$filen; //generate the destination path
    if(move_uploaded_file($_FILES["item_file"]['tmp_name']["$j"],$path)){//upload the file 
      $GLOBALS['msg'] .= "File# ".($j+1)." ($filen) uploaded successfully<br>";//Success message
   }
  }
 }
 else {
  $GLOBALS['msg'] = "No files found to upload"; //No file upload message 
}
?>