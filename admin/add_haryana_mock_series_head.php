<?php
    include_once "support.php";
    include_once "conn.php";

  
   $haryana_test_series_head=$_POST['haryana_test_series_head'];
   $haryana_test_series_para=$_POST['haryana_test_series_para'];
   session_start();
  
   if( $_SESSION['admin_sign_id'] == '') {
        header('location:index.php');
   }

   
   if(isset($_POST['save'])) {
    $ins_prep_c="INSERT INTO haryana_test_series SET
        haryana_test_series_head='$haryana_test_series_head',
        haryana_test_series_para='$haryana_test_series_para'
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Haryana Mock test  Heading</span>
                    <h3 class="my-3 text-center"> Add Haryana Mock test  Heading </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">haryana  test series Heading</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="haryana_test_series_head">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">haryana test series Paragraph</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="haryana_test_series_para">
                                
                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>