<?php
include ('./header.php');
 include('./config/db.php');
 $stmt =$con->prepare("SELECT id, name, email, phone, description, experience, project, image_name, image_url FROM users where 1");
 $stmt->execute();
 $result = $stmt->get_result();
 $users = $result->fetch_all(MYSQLI_ASSOC);
 

?>
<div class="container">
    <div class="card col-md-8 mx-auto mt-3">
        <div class="card-header">
            <h3 class="text-center text-secondary">All Users</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                        <th>SL</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                  </tr>
                    <tbody >

                    <?php
                     foreach($users as $key=>$user){
                     ?>
                    <tr>
                        <td><?= ++$key + 1 ?></td>
                        
            
                      <td><img src="<?= $user['image_url'] ?>"  alt= "" height="50px" width="50px" class="rounded-circle"> </td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['email'] ?></td> 

<td>  
    <div class="btn btn-group" role="group">
        <a href="" type="button" class="btn btn-primary">View</a>
        <a href="" type="button" class="btn btn-warning">Edit</a>
        <a href="" type="button" class="btn btn-danger">Delete</a>
    </div>
</td>


                    </tr>             
                <?php
                     }
             ?>
             
            </tbody>   
                <!--    </tr>-->
                </thead>
            </table>

        </div>
    </div>
</div>