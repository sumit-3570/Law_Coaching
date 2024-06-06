<?php
    include_once "support.php";
    include_once "conn.php";

    p($_POST);
   
    $haryana_mock_series_title=$_POST['haryana_mock_series_title'];
    $haryana_mock_series_p1=$_POST['haryana_mock_series_p1'];
    $haryana_mock_series_p2=$_POST['haryana_mock_series_p2'];
    $haryana_mock_series_p3=$_POST['haryana_mock_series_p3'];
    $haryana_mock_series_Price=$_POST['haryana_mock_series_Price'];
    $haryana_mock_series_discount=$_POST['haryana_mock_series_discount'];
    $haryana_mock_series_percent=$_POST['haryana_mock_series_percent'];
    $haryana_mock_series_color=$_POST['haryana_mock_series_color'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }

   
   if(isset($_POST['save'])) {
    $ins_prep_c="INSERT INTO haryana_mock_test_series SET
        	
            haryana_mock_test_series_title='$haryana_mock_series_title',
            haryana_mock_test_series_p1='$haryana_mock_series_p1',
            haryana_mock_test_series_p2='$haryana_mock_series_p2',
            haryana_mock_test_series_p3='$haryana_mock_series_p3',
            haryana_mock_test_series_price='$haryana_mock_series_Price',
            haryana_mock_test_series_percent='$haryana_mock_series_percent',
            haryana_mock_test_series_discount='$haryana_mock_series_discount',
            color='$haryana_mock_series_color'
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Haryana Mock Test Series</span>
                    <h3 class="my-3 text-center"> Add Haryana Mock Test Series </h3>
                    <form method="post">

                            <div class="mb-3">
                              
                                <label for="exampleFormControlInput1" class="form-label fw-bold">haryana mock Series title</label>
                                <input type="text" class="form-control my-1"  id="exampleFormControlInput1" name="haryana_mock_series_title">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">haryana mock Series p1</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="haryana_mock_series_p1">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">haryana mock Series p2</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="haryana_mock_series_p2">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">haryana mock Series p3</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="haryana_mock_series_p3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">haryana mock Series Price</label>
                                <input type="text" class="form-control my-1"  accept="" id="exampleFormControlInput1" name="haryana_mock_series_Price">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">haryana mock Series Discount</label>
                                <input type="text" class="form-control my-1"  accept="" id="exampleFormControlInput1" name="haryana_mock_series_discount">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">haryana mock Series percent</label>
                                <input type="text" class="form-control my-1"  accept="" id="exampleFormControlInput1" name="haryana_mock_series_percent">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">haryana mock Series Color</label>
                                <input type="color" class="form-control my-1" required id="exampleFormControlInput1" name="haryana_mock_series_color">

                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>