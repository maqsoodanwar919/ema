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
                    
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control form-control-user" name="category_name" placeholder="Please enter category name">
                        </div>
                        <div class="form-group">
                            <label>Category Name</label>
                            <select class="form-control" name="category_purpose">
                                <option value="" disabled="" selected="" hidden="">Select Category </option>
                                <option value="income">Income</option>
                                <option value="expense">Expense</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" name="btn-submit" value="Add Category" />
                        </div>
                    </form>
 
                    <?php    
                            require_once('inc/db.php');  
                            if (isset($_POST['btn-submit'])) {  
                                $category_name = $_POST['category_name'];
                                $category_purpose = $_POST['category_purpose']; 
                                // insert data query 
                                $insert_category = "INSERT INTO category(category_name, category_purpose) VALUES('$category_name','$category_purpose')"; 
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