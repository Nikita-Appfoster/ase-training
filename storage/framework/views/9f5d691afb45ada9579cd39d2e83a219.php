<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Add New Project</title>
  </head>
  <body>
   
    <div class="container-fluid bg-dark text-white d-flex justify-content-center align-items-center" style="height: 10vh;">
        Project
    </div>
    
   
    <div class="d-flex justify-content-end">
        <a href= "<?php echo e(route('projectlist', $user->id)); ?>" class="btn btn-dark btn-sm active mt-3" role="button" aria-pressed="true" style="margin-right: 160px;">Back</a>
    </div>
  
 
    <div class="d-flex justify-content-center align-items-center">
        <div class="container">
           
            <div class="bg-primary text-white d-flex justify-content-start mt-4 p-1" style="height: 5vh; width: 50%; margin: 0 auto">
                Add project for user
            </div>
            
           
            <div class="d-flex justify-content-center mt-2">
                <form style="width: 50%" action="<?php echo e(route('addprojects' , $user->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter your project title" name="title">
                    </div>
                   
                  
                    <div class="form-group">
                        <label for="body">Body</label>
                        <input type="text" class="form-control" id="body" placeholder="Enter your project description" name="body">
                    </div>
                   
                    <div class="mt-3 d-flex justify-content-end">
                        <input type="submit" 
                        value="save"
                        class="btn btn-primary"></input>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<?php /**PATH C:\Users\91706\backend-api-laravel\resources\views/project/create.blade.php ENDPATH**/ ?>