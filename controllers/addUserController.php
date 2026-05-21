<?php
include('../function.php');
session_start();
$btn = test_user($_POST['submit']);
$name = test_user($_POST['name']);
$email = test_user($_POST['email']);
$phone = test_user($_POST['phone']);
$experience = test_user($_POST['Experience']);
$description =test_user($_POST['Description']);
$project = test_user($_POST['Project']);
$profile_image = $_FILES['Profile_image'];

if(isset($btn))
{
    if(empty($name))
    {
        $_SESSION['name_error'] = "Name is required";
        header("location:../index.php");
    }else if(!preg_match("/^[a-zA-Z ]*$/", $name)){
        $_SESSION['name_error'] = "Only letters and white space allowed";
        header("location:../index.php");
    }
   /* else if(empty($email))
    {
        $_SESSION['email_error'] = "Email is required";
        header("location:../index.php");
    }else{
        echo "Form submitted successfully";
    }*/
        if(empty($email))
    {
        $_SESSION['email_error'] = "Email is required";
        header("location:../index.php");
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['email_error'] = "Invalid email format";
        header("location:../index.php");
    }
    if(empty($phone))
    {
        $_SESSION['phone_error'] = "Phone is required";
        header("location:../index.php");
    }
    if(empty($description))
    {
        $_SESSION['description_error'] = "Description is required";
        header("location:../index.php");
    }

if(empty($experience))
    {
        $_SESSION['experience_error'] = "Experience is required";
        header("location:../index.php");
    }
    if(empty($project))
    {
        $_SESSION['project_error'] = "Project is required";
        header("location:../index.php");
    }



    if(isset($_FILES['Profile_image'])){
     if(empty($profile_image['name']))
    {
        $_SESSION['image_err'] = 'Profile image is required';
        header("location:../index.php");
    }
    /*else{
        echo "Form submitted successfully";
    }
*/
    }


//extension check
$image_name = $profile_image['name'];
$file_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));

print_r($file_extension);

$allowed = ['jpg', 'png', 'jpeg', 'webp'];

if (!in_array($file_extension, $allowed)) {
    $_SESSION['image_err'] = 'Invalid Image';
    header("location: ../index.php");
}
}
// image
$image_location = $profile_image['tmp_name'];

$new_image_name = uniqid("user_") . '.' .$file_extension; // user_01555.png

$image_url = "http://localhost/CRUD_App/uploads/" . $new_image_name;

//store in database
include('../config/db.php');
$stmt = $con->prepare("INSERT INTO users (name, email, phone, description, experience, project,image_name, image_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $email, $phone, $description, $experience, $project, $new_image_name, $image_url);
$inserted = $stmt->execute();
if($inserted)
{
    move_uploaded_file($image_location, "../uploads/" . $new_image_name);
    $_SESSION['success'] = "User added successfully";
    header("location:../index.php");
}
?>