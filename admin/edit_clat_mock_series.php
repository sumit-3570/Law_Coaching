<?php
    include_once "support.php";
    include_once "conn.php";

    p($_POST);
    $clat_mock_best=$_POST['clat_mock_best'];
    $clat_mock_series_title=$_POST['clat_mock_series_title'];
    $clat_mock_series_p1=$_POST['clat_mock_series_p1'];
    $clat_mock_series_p2=$_POST['clat_mock_series_p2'];
    $clat_mock_series_p3=$_POST['clat_mock_series_p3'];
    $clat_mock_series_Price=$_POST['clat_mock_series_Price'];
    $clat_mock_series_discount=$_POST['clat_mock_series_discount'];
    $clat_mock_series_percent=$_POST['clat_mock_series_percent'];
    $clat_mock_series_color=$_POST['clat_mock_series_color'];
    $edit_id=$_GET['edit_id'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }

   
   if(isset($_POST['save'])) {
    $ins_prep_c="INSERT INTO clat_mock_series SET
        	clat_mock_series_best='$clat_mock_best',
            clat_mock_series_title='$clat_mock_series_title',
            clat_mock_series_p1='$clat_mock_series_p1',
            clat_mock_series_p2='$clat_mock_series_p2',
            clat_mock_series_p3='$clat_mock_series_p3',
            clat_mock_series_price='$clat_mock_series_Price',
            clat_mock_series_percent='$clat_mock_series_discount',
            clat_mock_series_discount='$clat_mock_series_percent',
            clat_mock_series_color='$clat_mock_series_color'
            WHERE clat_mock_series_id ='edit_id';
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Edit Clat Mock Test Series</span>
                    <h3 class="my-3 text-center"> Edit Clat Mock Test Series </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat Mock Series best</label>
                                <input type="text" class="form-control my-1" id="exampleFormControlInput1" name="clat_mock_best"<?php echo $clat_mock_best ?>>
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat mock Series title</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_mock_series_title"<?php echo $clat_mock_series_title ?>>
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat mock Series p1</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_mock_series_p1"<?php echo $clat_mock_series_p1 ?>>
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat mock Series p2</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_mock_series_p2"<?php echo $clat_mock_series_p2 ?>>
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat mock Series p3</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_mock_series_p3"<?php echo $clat_mock_series_p3 ?>>
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat mock Series Price</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_mock_series_Price"<?php echo $clat_mock_series_Price ?>>
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat mock Series Discount</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_mock_series_discount"<?php echo $clat_mock_series_discount ?>>
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat mock Series percent</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_mock_series_percent"<?php echo $clat_mock_series_percent ?>>
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat mock Series Color</label>
                                <input type="color" class="form-control my-1" required id="exampleFormControlInput1" name="clat_mock_series_color"<?php echo $clat_mock_series_color ?>>

                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>