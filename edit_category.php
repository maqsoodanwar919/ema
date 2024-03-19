<?php require_once('inc/top_header.php') ?>

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
                <h1 class="h3 mb-4 text-gray-800">Add Category</h1>
                <div class="row">
                    <div class="col">
                    <?php   
                    require_once('inc/db.php'); 
                        if (isset($_GET['edit'])) {  
                            $edit_id = $_GET['edit']; 
                                // Insert data query
                                $update_query = "SELECT * FROM category WHERE category_id='$edit_id'";  
                                $run_update = mysqli_query($conn, $update_query);  
                                $row_category = mysqli_fetch_array($run_update); 
                                $category_name = $row_category['category_name'];
                                $category_purpose = $row_category['category_purpose'];
                                
                                if ($run_update === true) {
                                    echo "Date has been update"; 
                                        
                                } else {
                                    echo "Date has been not add";
                                }  
                            }   
                       ?> 
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" class="form-control form-control-user" name="category_name" value="<?php echo $category_name ?>" placeholder="Please enter category name">
                            </div>
                            <div class="form-group">
                                <label>Category Name</label>
                                <select class="form-control" name="category_purpose" >
                                    <option value="<?php echo $category_purpose ?>" selected="" ><?php echo $category_purpose ?></option> 
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" name="btn-submit" value="Update Category" />
                            </div>
                        </form>
 
                        <?php    
                            require_once('inc/db.php');  
                            if (isset($_POST['btn-submit'])) {  
                                $e_category_name = $_POST['category_name'];
                                $e_category_purpose = $_POST['category_purpose'];  
                                $insert_category = "UPDATE category SET category_name='$e_category_name', category_purpose='$e_category_purpose' WHERE category_id =' $edit_id'" ; 
                                $run_category = mysqli_query($conn, $insert_category); 
                                if ($run_category === true) {
                                    echo "Date has been add";
                                } else {
                                    echo "Date has been not add";
                                }    
                            }   
                            ?>


                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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

</body>

</html>