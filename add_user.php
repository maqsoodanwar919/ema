<?php 

require_once('inc/top_header.php');
require_once('inc/db.php');



?> 
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
           <?php require_once('inc/sider_bar.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                  <?php require_once('inc/navbar.php') ?>
                <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid"> 
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Add New User</h1>
                <div class="row">
                    <div class="col">  
                     
                    <form action="" method="POST" enctype="multipart/form-data"> 
                        <div class="row"> 
                           <div class="col-6">
                                <div class="form-group"> 
                                    <label>User Name</label>
                                    <input type="text" class="form-control form-control-user" name="user_name" placeholder="Please enter name"> 
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" class="form-control form-control-user" name="user_email"  /> 
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Password:</label>
                                    <input type="password" class="form-control form-control-user" name="user_password"  /> 
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>User Image:</label>
                                    <input type="file" class="form-control form-control-user" name="user_image"  /> 
                                </div>
                            </div>  
                            </div> 
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" name="inser_btn" value="Add User"  /> 
                            </div>
                    </form>
                    <?php    
                        if (isset($_POST['inser_btn'])) {  
                            $user_name = $_POST['user_name'];
                            $user_email = $_POST['user_email']; 
                            $user_password = $_POST['user_password'];  
                            $user_image_name = $_FILES['user_image']['name'];

                            // Generate a salt for password hashing
                            $salt = uniqid(mt_rand(), true);

                            // Hash the password using crypt function
                            $secure_password = crypt($user_password, $salt);

                            // Check if the email already exists
                            $check_email_query = "SELECT * FROM user WHERE user_email='$user_email'";
                            $run_check_email = mysqli_query($conn, $check_email_query);  

                            if (mysqli_num_rows($run_check_email) > 0) {
                                echo "Email already exists";
                            } else {
                                // Insert data query
                                $insert_user = "INSERT INTO user (user_name, user_email, user_password, user_image)
                                                VALUES ('$user_name', '$user_email', '$secure_password', '$user_image_name')";   
                                $run_insert_user = mysqli_query($conn, $insert_user); 
                                if ($run_insert_user) {
                                    // Move uploaded file to the appropriate directory
                                    $upload_directory = "uploads/"; // Specify your upload directory
                                    $target_file = $upload_directory . $user_image_name; 
                                    // Check if the file was uploaded successfully before attempting to move it
                                    if (move_uploaded_file($_FILES['user_image'], $target_file)) {
                                        echo "Data has been added and image uploaded successfully";
                                    } else {
                                        echo "Data has been added but failed to upload image";
                                    }
                                } else {
                                    echo "Failed to insert data";
                                }
                            }
                        }   
                    ?> 
                   </div>   
            <!-- /.container-fluid -->
            </div> 
            </div> 
            <!-- End of Main Content -->
         </div> 
            <!-- Footer -->
             <?php require_once('inc/footer.php') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
 
 
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
 

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
  
     


           

</body>

</html>

