<?php
session_start();
print_r($_POST);
$post = $_POST["position"];
$fullname = $_POST["lname"]." ".$_POST['fname']." ".$_POST['mname'];
$date_applied = date("y/m/d H:i:s");
$letter_link = $_POST["letter"];
$email = $_POST["email"];

//echo $date_applied;
//connect to database jrfoundation
$con = mysqli_connect("localhost:3306","root","","jrfoundation");
//check if connection is successful
if(mysqli_connect_error()){
    echo "<br>failed to connect to JRFoundation Database";
}

$sql = "insert into job_applications (Job_Title, FullNames, Date_Applied,  Letter, email) "
        . "values('$post','$fullname','DATE: Manual Date, $date_applied','$letter_link','$email')";

if($con->query($sql)===true){
    echo"<br>New record added successfully";
}
else{
    echo "Error: " . $sql . "<br>" . $con->error."<br>";
}

//upload CV and letter of application to server
if(isset($_POST['submit'])){
  $fileName=$_FILES["resume"]["name"];
  $fileSize=$_FILES["resume"]["size"]/1024;
  $fileType=$_FILES["resume"]["type"];
  $fileTmpName=$_FILES["resume"]["tmp_name"];  
  echo "<br>I can submit this CV";
  if($fileType=="application/msword"){
       echo "<br>It's a legal Word document";
    if($fileSize<=200){
         echo "<br>And it's not larger than what is expected";
      //New file name
      $random=rand(1111,9999);
      $newFileName=$random.$fileName;

      //File upload path
      $uploadPath="Assets\FileUploads\\".$newFileName;

      //function for upload file
      if(move_uploaded_file($fileTmpName,$uploadPath)){
        echo "<br>Successful."; 
        echo "<br>File Name :".$newFileName; 
        echo "<br>File Size :".$fileSize." kb"; 
        echo "<br>File Type :".$fileType; 
      }
      else{
          echo " echo <br>This CV was not uploaded";
      }
    }
    else{
      echo "Maximum upload file size limit is 200 kb<br>";
    }
  }
  else{
    echo "<br>Resume ".$fileName." uploaded successfully";
  }  
}
else{
    echo "<br>Unable to submit CV";
}
