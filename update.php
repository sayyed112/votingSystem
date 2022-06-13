<?php
include_once 'config.php';
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = $_POST['name'];
        $id = $_POST['id'];
        $user_id = $_POST['user_id'];
        $address = $_POST['address'];
        $image = $_POST['file_name'];
	// Check if file was uploaded without errors
        if(isset($_FILES["anyfile"]) && $_FILES["anyfile"]["error"] == 0){
            	$temp = explode(".", $_FILES["anyfile"]["name"]);
				$newfilename = round(microtime(true)) . '.' . end($temp);
                if(move_uploaded_file($_FILES["anyfile"]["tmp_name"], "upload/" . $newfilename)){
                    $image = $newfilename;
                }
        }
        $sql="UPDATE profiles SET full_name='$name', id_no='$id',address='$address',file='$image' WHERE id = '$user_id'";
                    mysqli_query($conn,$sql);
                    // echo "Your file was uploaded successfully.";
                    header("Location: display.php");
}
?>