<?php
session_start();
include "header.php";
?>

<div class="container">
    <?php if(isset($_SESSION['success'])){ ?> 
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="2000">
        <div class="toast-header">
            <img src="..." class="rounded me-2" alt="...">
             <strong class="me-auto text-success">Successfully user added!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body text-success">
            <?= $_SESSION['success'] ?>
        </div>
    </div>
    <?php
  //  unset($_SESSION['success']);
    }
    ?>
<div class="container">
 <div class="card col-md-6 mx-auto mt-3">
     <div class="card-header">
            <h3 class="text-center text-secondary">Add User</h3>
        </div>
 <div class="card-body">
  <form action="./controllers/addUserController.php" method="post" enctype="multipart/form-data">
     <div class="mb-3">   
         <label for="name" class="form-label">Name</label>
         <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" /> 
         <?php 
                 if(isset($_SESSION['name_error'])) 
                 {?>
                     <span class="text-danger"> <?=$_SESSION['name_error'] ?></span>
                 
                 <?php
                 }
                ?>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
                 <?php 
                 if(isset($_SESSION['email_error'])) 
                 {?>
                     <span class="text-danger"> <?=$_SESSION['email_error'] ?></span>
                 
                 <?php
                 }
                ?>
                
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter your phone number"></div>
                <div class="mb-3">
                    <label for="Description" class="form-label">Description</label>
                 <textarea name="Description" id="" class="form-control summernote" placeholder="Enter your Description"></textarea>
                
                </div>

                <div class="mb-3">
                    <label for="Experience" class="form-label">Experience</label>
                <textarea name="Experience" id="Experience" class="form-control summernote" placeholder="Enter your Experience"></textarea>
                </div>
                <div class="mb-3"> 
                 <label for="Project" class="form-label">Project</label>
                <textarea name="Project" id="Project" class="form-control summernote" placeholder="Enter your Project"></textarea>
                <div class="mb-3"> 
                <label for="Profile" class="form-label">Profile</label>
                <input type="file" name="Profile_image" id="Profile" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
                 </form>
          </div>
      </div>
</div>
