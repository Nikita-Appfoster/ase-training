<!doctype html> 
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>User Listing Page</title>
  </head>
  <body>
    <div class="container-fluid bg-dark text-white d-flex justify-content-center align-items-center" style="height: 10vh;">
      Users List
  </div>
  

  <div class="d-flex justify-content-end">
    <a href="<?php echo e(url('/addnewuser')); ?>" class="btn btn-success btn-sm active mt-3" role="button" aria-pressed="true style" style="margin-right: 50px">Add New User</a>
</div>

<div class="d-flex justify-content-center align-items-center" >
  <div class="container">
     
      <div class="container bg-primary text-white d-flex justify-content-start mt-4" style="height: 5vh;">
          Users
      </div>
     
      <div class="d-flex justify-content-center">
          <table class="table table-striped">
              <thead>
                  <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Username</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Email</th>
                      <th scope="col">Website</th>
                      <th scope="col">CompanyName</th>
                      <th scope="col ">Actions</th>
                  </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    
                    <th scope="row"><?php echo e($user->id); ?></th>
                      <td><?php echo e($user->name); ?></td>
                      <td><?php echo e($user->username); ?></td>
                      <td><?php echo e($user->phone); ?></td>
                      <td><?php echo e($user->email); ?></td>
                      <td><?php echo e($user->website); ?></td>
                      <td><?php echo e($user->company_name); ?></td>
                      <td>
                        <div class="d-flex">
                          <a href="<?php echo e(url('/edituser/' . $user->id)); ?>" class="btn btn-secondary btn-sm active mr-1" role="button" aria-pressed="true">Edit</a>
                          <a href="<?php echo e(url('/projectlist')); ?>" class="btn btn-primary btn-sm active mr-1" role="button" aria-pressed="true">Project</a>
                          <a href="#" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
                        </div>
                      </td>
                        
                   
                      
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
          </table>
      </div>
  </div>
</div>







    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\Users\91706\backend-api-laravel\resources\views//users/homepage.blade.php ENDPATH**/ ?>