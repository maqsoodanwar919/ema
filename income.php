<?php require_once('inc/top_header.php'); 

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
                <h1 class="h3 mb-4 text-gray-800">Delete Income</h1>
                <div class="row">
                    <div class="col"> 
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive"> 
                             <?php   
                                    require_once('inc/db.php'); 
                                    if (isset($_GET['del'])) {  
                                        $del_id = $_GET['del']; 
                                            // Insert data query
                                            $DELETE = "DELETE FROM income WHERE income_id='$del_id'";  
                                            $run_DELETE = mysqli_query($conn, $DELETE);   
                                            if ($run_DELETE === true) {
                                                echo "Date has been DELETE"; 
                                                    
                                            } else {
                                                echo "Date has been not DELETE";
                                            }  
                                        }   
                                ?> 
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th> 
                                            <th>Income Amount</th> 
                                            <th>Category Id</th> 
                                            <th>Income Receipt</th> 
                                            <th>Income Details</th> 
                                            <th>Income Date</th> 
                                            <th>Delete</th> 
                                            <th>Delete</th>  
                                        </tr>
                                    </thead> 
                                    <tbody>
                                        <?php  
                                            require_once('inc/db.php');
                                            $select_income = "SELECT * FROM income";  
                                            $run_income = mysqli_query($conn, $select_income); 
                                            while($row_income = mysqli_fetch_array($run_income)){ 

                                            $income_id = $row_income['income_id'];
                                            $income_amount = $row_income['income_amount'];
                                            $category_id = $row_income['category_id'];
                                            $income_receipt = $row_income['income_receipt'];
                                            $income_details = $row_income['income_details'];
                                            $income_date = $row_income['income_date'];
                                        ?>
                                        <tr>
                                            <td><?php echo ucfirst($income_id); ?></td> 
                                            <td><?php echo ucfirst($income_amount); ?></td> 
                                            <td><?php echo ucfirst($category_id); ?></td> 
                                            <td><?php echo ucfirst($income_receipt); ?></td> 
                                            <td><?php echo ucfirst($income_details); ?></td> 
                                            <td><?php echo ucfirst($income_date); ?></td>  
                                            <td><a href="income.php?del=<?php echo ($income_id); ?>" class="btn btn-danger delete_btn">DELETE</a></td> 
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                


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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    
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