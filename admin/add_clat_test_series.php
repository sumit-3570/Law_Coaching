<?php
    include_once "support.php";
    include_once "conn.php";

  
   $clat_test_series_head=$_POST['clat_test_series_head'];
   $clat_test_series_para=$_POST['clat_test_series_para'];
   session_start();
  
   if( $_SESSION['admin_sign_id'] == '') {
        header('location:index.php');
   }

   
   if(isset($_POST['save'])) {
    $ins_prep_c="INSERT INTO clat_test_series SET
        clat_test_series_heading='$clat_test_series_head',
        clat_test_series_para='$clat_test_series_para'
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Clat Test Heading</span>
                    <h3 class="my-3 text-center"> Add Clat Test Heading </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">clat test series Heading</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_test_series_head">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">clat test series Paragraph</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_test_series_para">
                                
                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>