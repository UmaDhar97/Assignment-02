<?php

include ('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css">
    <!---
  <link rel="stylesheet" href="./assets/summernote-bs5.css">
    <link rel="stylesheet" href="./assets/summernote.min.css">-->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">CRUD Application</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="./index.php">Add User</a>
                    </li>
              <li class="nav-item">
                 <a class="nav-link" href="./allUser.php">All Users</a>
               </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>