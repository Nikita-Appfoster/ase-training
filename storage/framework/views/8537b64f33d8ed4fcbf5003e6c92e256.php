<!doctype html> 
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Project Page</title>
</head>
<body>
    <div class="container-fluid bg-dark text-white d-flex justify-content-center align-items-center" style="height: 10vh;">
        Project List
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="container-fluid bg-primary text-white d-flex justify-content-start mt-4" style="height: 5vh;">
                Users
            </div>
             
            <div class="d-flex justify-content-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop->iteration); ?></th>
                            <td><?php echo e($project->user_id); ?></td>
                            <td><?php echo e($project->title); ?></td>
                            <td>
                               
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-<?php echo e($project->id); ?>">
                                    View
                                </button>
                                
                               
                                <div class="modal fade" id="modal-<?php echo e($project->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel-<?php echo e($project->id); ?>" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalLabel-<?php echo e($project->id); ?>">Project Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p><strong>User ID:</strong><?php echo e($project->user_id); ?></p>
                                                <p><strong>ID:</strong><?php echo e($loop->iteration); ?></p>
                                                <p><strong>Title:</strong> <?php echo e($project->title); ?></p>
                                                <p><strong>Project Description:</strong> <?php echo e($project->body); ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            
                                <button type="button" class="btn btn-secondary ml-1 mr-1" data-toggle="modal" data-target="#editModal-<?php echo e($project->id); ?>">
                                    Edit
                                </button>
                                
                                <div class="modal fade" id="editModal-<?php echo e($project->id); ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel-<?php echo e($project->id); ?>" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel-<?php echo e($project->id); ?>">Edit Project Info</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo e(route('project.update', $project->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <div class="form-group">
                                                        <label for="title">Title</label>
                                                        <input type="text" class="form-control" id="title" name="title" value="<?php echo e($project->title); ?>" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="body">Body</label>
                                                        <input type="text" class="form-control" id="body" name="body" value="<?php echo e($project->body); ?>" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                              
                                <button type="button" class="btn btn-danger btn-l" data-toggle="modal" data-target="#deleteModal-<?php echo e($project->id); ?>">
                                    Delete
                                </button>
                               
                                <div class="modal fade" id="deleteModal-<?php echo e($project->id); ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel-<?php echo e($project->id); ?>" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel-<?php echo e($project->id); ?>">Confirm Deletion</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this project?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <form action="<?php echo e(route('project.destroy', $project->id)); ?>" method="POST" id="deleteForm-<?php echo e($project->id); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center align-items-start">
        <div>
            <a href="<?php echo e(route('createproject', ['id' => $user->id])); ?>" class="btn btn-success btn-sm active mt-3 mr-2" role="button" aria-pressed="true">Add more Project</a>
        </div>

        <div>
            <a href="<?php echo e(url('/')); ?>" class="btn btn-dark btn-sm active mt-3" role="button" aria-pressed="true">Back</a>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\Users\91706\backend-api-laravel\resources\views/project/index.blade.php ENDPATH**/ ?>