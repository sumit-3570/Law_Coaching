<?php
    include_once "support.php";
    include_once "conn.php";

  
    $ailet_mock_best=$_POST['ailet_mock_best'];
    $ailet_mock_series_title=$_POST['ailet_mock_series_title'];
    $ailet_mock_series_p1=$_POST['ailet_mock_series_p1'];
    $ailet_mock_series_p2=$_POST['ailet_mock_series_p2'];
    $ailet_mock_series_p3=$_POST['ailet_mock_series_p3'];
    $ailet_mock_series_Price=$_POST['ailet_mock_series_Price'];
    $ailet_mock_series_discount=$_POST['ailet_mock_series_discount'];
    $ailet_mock_series_percent=$_POST['ailet_mock_series_percent'];
    $ailet_mock_series_color=$_POST['ailet_mock_series_color'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }

   
   if(isset($_POST['save'])) {
    $ins_prep_c="UPDATE ailet_test_series SET
        	ailet_test_series_best='$ailet_mock_best',
            ailet_test_series_title='$ailet_mock_series_title',
            ailet_test_series_p1='$ailet_mock_series_p1',
            ailet_test_series_p2='$ailet_mock_series_p2',
            ailet_test_series_p3='$ailet_mock_series_p3',
            ailet_test_series_price='$ailet_mock_series_Price',
            ailet_test_series_discount='$ailet_mock_series_discount',
            ailet_test_series_percent='$ailet_mock_series_percent',
            ailet_mock_series_color='$ailet_mock_series_color'
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Edit Ailet Mock Test Series</span>
                    <h3 class="my-3 text-center"> Edit Ailet Mock Test Series </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet Mock Series best</label>
                                <input type="text" class="form-control my-1" id="exampleFormControlInput1" name="ailet_mock_best"placeholder="<?php echo $ailet_mock_best ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet mock Series title</label>
                                <input type="text" class="form-control my-1"  id="exampleFormControlInput1" name="ailet_mock_series_title"placeholder="<?php echo $ailet_mock_series_title ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet mock Series p1</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_mock_series_p1"placeholder="<?php echo $ailet_mock_series_p1 ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet mock Series p2</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_mock_series_p2"placeholder="<?php echo $ailet_mock_series_p2 ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet mock Series p3</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_mock_series_p3"placeholder="<?php echo $ailet_mock_series_p3 ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet mock Series Price</label>
                                <input type="text" class="form-control my-1"  accept="" id="exampleFormControlInput1" name="ailet_mock_series_Price"placeholder="<?php echo $ailet_mock_series_Price ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet mock Series Discount</label>
                                <input type="text" class="form-control my-1"  accept="" id="exampleFormControlInput1" name="ailet_mock_series_discount"placeholder="<?php echo $ailet_mock_series_discount ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet mock Series percent</label>
                                <input type="text" class="form-control my-1"  accept="" id="exampleFormControlInput1" name="ailet_mock_series_percent"placeholder="<?php echo $ailet_mock_series_percent ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet mock Series Color</label>
                                <input type="color" class="form-control my-1"  id="exampleFormControlInput1" name="ailet_mock_series_color"placeholder="<?php echo $ailet_mock_series_color ?>">

                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>