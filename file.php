<form action="" method="" enctype="multipart/form-data" name="form1">
    <input type="file" name="resume" id="resume">
    <input type="submit" name="SubmitBtn" id="SubmitBtn" value="Upload resume">
</form>
<?php 
if (isset($_POST["SubmitBtn"])){
   
    $fileName = $_FILES["resume"]["name"];
    $fileSize = $_FILES["resume"]["size"] / 1024;
    $fileType = $_FILES["resume"]["type"];
    $fileTmpName = $_FILES["resume"]["tmp_name"];

    if($fileType == "application/msword"){
        if($fileSize <= 200){

            //new file name 
            $random = rand(1111, 9999);
            $newFileName = $random . $fileName;

            //file upload path
           $uploadPath = "testUpload/" . $newFileName;

           //function for upload file
           if (move_uploaded_file($fileTmpName, $uploadPath)){
            echo "Successfull";
            echo "File Name: ". $newFileName;
            echo "File Siize : " . $fileSize . "kb";
            echo "File Type : " . $fileType;
           }
        }else {
            echo "Maximum upload file size limit is 200 kb";

        }
    }else {
        echo "You can only upload a word doc file.";
    }

}