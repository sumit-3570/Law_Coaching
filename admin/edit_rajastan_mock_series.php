<?php
    include_once "support.php";
    include_once "conn.php";

    p($_POST);
    $RJS_mock_best=$_POST['RJS_mock_best'];
    $RJS_mock_series_title=$_POST['RJS_mock_series_title'];
    $RJS_mock_series_p1=$_POST['RJS_mock_series_p1'];
    $RJS_mock_series_p2=$_POST['RJS_mock_series_p2'];
    $RJS_mock_series_p3=$_POST['RJS_mock_series_p3'];
    $RJS_mock_series_Price=$_POST['RJS_mock_series_Price'];
    $RJS_mock_series_discount=$_POST['RJS_mock_series_discount'];
    $RJS_mock_series_percent=$_POST['RJS_mock_series_percent'];
    $RJS_mock_series_color=$_POST['RJS_mock_series_color'];
    $edit_id=$_GET['edit_id'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }
   
   if(isset($_POST['save'])) {
    $up_prep_c="UPDATE rjs_mock_test SET
        	best='$RJS_mock_best',
            rjs_mock_test_title='$RJS_mock_series_title',
            rjs_mock_test_p1='$RJS_mock_series_p1',
            rjs_mock_test_p2='$RJS_mock_series_p2',
            rjs_mock_test_p3='$RJS_mock_series_p3',
            rjs_mock_test_price='$RJS_mock_series_Price',
            rjs_mock_test_discount='$RJS_mock_series_discount',
            rjs_mock_test_percentage='$RJS_mock_series_percent',
            color='$RJS_mock_series_color'
            WHERE rjs_mock_test_id ='$edit_id';
       
    ";
        $exe_clat_prep=mysqli_query($conn,$up_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Edit RJS Mock Test Series</span>
                    <h3 class="my-3 text-center"> Edit RJS Mock Test Series </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">RJS Mock Series best</label>
                                <input type="text" class="form-control my-1" id="exampleFormControlInput1" name="RJS_mock_best"placeholder="<?php echo $RJS_mock_best ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">RJS mock Series title</label>
                                <input type="text" class="form-control my-1"  id="exampleFormControlInput1" name="RJS_mock_series_title"placeholder="<?php echo $RJS_mock_series_title ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">RJS mock Series p1</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="RJS_mock_series_p1"placeholder="<?php echo $RJS_mock_series_p1 ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">RJS mock Series p2</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="RJS_mock_series_p2"placeholder="<?php echo $RJS_mock_series_p2 ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">RJS mock Series p3</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="RJS_mock_series_p3"placeholder="<?php echo $RJS_mock_series_p3 ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">RJS mock Series Price</label>
                                <input type="text" class="form-control my-1"  accept="" id="exampleFormControlInput1" name="RJS_mock_series_Price"placeholder="<?php echo $RJS_mock_series_Price ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">RJS mock Series Discount</label>
                                <input type="text" class="form-control my-1"  accept="" id="exampleFormControlInput1" name="RJS_mock_series_discount"placeholder="<?php echo $RJS_mock_series_discount ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">RJS mock Series percent</label>
                                <input type="text" class="form-control my-1"  accept="" id="exampleFormControlInput1" name="RJS_mock_series_percent"placeholder="<?php echo $RJS_mock_series_percent ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">RJS mock Series Color</label>
                                <input type="color" class="form-control my-1" required id="exampleFormControlInput1" name="RJS_mock_series_color"placeholder="<?php echo $RJS_mock_series_color ?>">

                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>