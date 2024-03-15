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
                <h1 class="h3 mb-4 text-gray-800">All Income</h1>
                <div class="row">
                    <div class="col">  
                     
                    <form action="" method="POST" >
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="text" class="form-control form-control-user" name="income_amount" placeholder="Please enter category name"> 
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Category </label>
                                    <select class="form-control" name="category_id">
                                    <option value="" disabled="" selected="" hidden="">Select Category </option>
                                    <?php  
                                    //    require_once('inc/db.php');
                                        $select_category = "SELECT * FROM category WHERE category_purpose='income'"; 

                                        $run_category = mysqli_query($conn, $select_category);  

                                        //  while loop
                                        while($row_category = mysqli_fetch_array($run_category)){ 
                                            $category_id = $row_category['category_id'];
                                            $category_name = $row_category['category_name'];  
                                        ?>   
                                        <option value="<?php echo $category_id ?>" ><?php echo  $category_name ?></option>  
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Receipt</label>
                                    <input type="file" class="form-control form-control-user" name="income_receipt"  /> 
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control form-control-user" name="income_date"  /> 
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Details</label>
                                    <textarea class="form-control" name="income_details"></textarea>
                                </div>
                            </div>  
                            </div> 
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" name="inser_btn"   /> 
                            </div>
                    </form>
                    <?php    
                        if (isset($_POST['inser_btn'])) {  
                            $income_amount = $_POST['income_amount'];
                            $category_id = $_POST['category_id']; 
                            $income_details = $_POST['income_details'];
                            $income_date = $_POST['income_date'];  
                            $income_receipt_name = $_FILES['income_receipt']['name'];
                            $income_receipt_tmp_name = $_FILES['income_receipt']['tmp_name'];
                            $month = Date('m');
                            $year = Date('y');  
                            // Insert data query
                            $insert_income = "INSERT INTO income(income_amount, category_id, income_details, income_receipt, income_date, income_month, income_year)
                                VALUES('$income_amount', '$category_id', '$income_details', '$income_receipt_name', '$income_date', '$month', '$year')"; 

                                $run_income = mysqli_query($conn, $insert_income);

                                if ($run_income === true) {
                                    echo "Date has been add";
                                } else {
                                    echo "Date has been not add";
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

