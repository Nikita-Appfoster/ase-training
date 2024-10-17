<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <title>Modal</title>
    <style>
      .modal-dialog {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
      }
      .modal-content {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }
      .modal-header {
        background-color: #007bff;
        color: white;
        border-bottom: none;
        position: relative;
        display: flex;
        flex-direction: column;
      }
      .modal-footer {
        border-top: none;
      }
      .modal-title {
        margin-right: 20px;
      }
    </style>
  </head>
  <body>


    <div class="modal fade" id="userModal-<?php echo e($user->id); ?>" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="userModalLabel">User Details</h5>
            <button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h6>ID: <?php echo e($user->id); ?></h6>
            <h6>Name: <?php echo e($user->name); ?></h6>
            <h6>Username: <?php echo e($user->username); ?></h6>
            <h6>Email: <?php echo e($user->email); ?></h6>
            <h6>Phone No.: <?php echo e($user->phone); ?></h6>
            <h6>Website: <?php echo e($user->website); ?></h6>
            <h6>Company Name: <?php echo e($user->company_name); ?></h6>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
  </body>
</html>
<?php /**PATH C:\Users\91706\backend-api-laravel\resources\views/users/view.blade.php ENDPATH**/ ?>