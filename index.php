<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Model</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
                <div class="mb-3">
                    <label for="completename" class="form-label">Name</label>
                    <input type="text" class="form-control" id="completename" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="completeemail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="completeemail" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="completemobile" class="form-label">Mobile</label>
                    <input type="text" class="form-control" id="completemobile" placeholder="Enter your mobile">
                </div>
                <div class="mb-3">
                    <label for="completeplace" class="form-label">Place</label>
                    <input type="text" class="form-control" id="completeplace" placeholder="Enter your place">
                </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-dark" onclick="adduser()">Submit</button>
            </div>
            </div>
        </div>
        </div>

    <div class="container my-5">
        <h1 class="text-center">PHP CRUD OPERATIONS USING BOOTSTRAP MODAL</h1>
        <!-- button for modal -->
        

        <!-- modal -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add new users
        </button>

        <div id="displayDataTable"></div>


    </div>

   
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

    <script src="js/insert.js"></script>
    
  </body>
</html>