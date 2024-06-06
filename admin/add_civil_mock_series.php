<?php
    include_once "support.php";
    include_once "conn.php";

 
    $civil_mock_series_selling=$_POST['civil_mock_series_selling'];
    $civil_mock_series_title=$_POST['civil_mock_series_title'];
    $civil_mock_series_p1=$_POST['civil_mock_series_p1'];
    $civil_mock_series_p2=$_POST['civil_mock_series_p2'];
    $civil_mock_series_p3=$_POST['civil_mock_series_p3'];
    $civil_mock_series_Price=$_POST['civil_mock_series_Price'];
    $civil_mock_series_discount=$_POST['civil_mock_series_discount'];
    $civil_mock_series_percent=$_POST['civil_mock_series_percent'];
    $civil_mock_series_color=$_POST['civil_mock_series_color'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }

   
   if(isset($_POST['save'])) {
    $ins_prep_c="INSERT INTO civil_mock_series SET
        	civil_mock_series_best='$civil_mock_series_selling',
            civil_mock_series_title='$civil_mock_series_title',
            civil_mock_series_p1='$civil_mock_series_p1',
            civil_mock_series_p2='$civil_mock_series_p2',
            civil_mock_series_p3='$civil_mock_series_p3',
            civil_mock_series_price='$civil_mock_series_Price',
            civil_mock_series_percent='$civil_mock_series_percent',
            civil_mock_series_discount='$civil_mock_series_discount',
            color='$civil_mock_series_color'
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Civil Mock Test Series</span>
                    <h3 class="my-3 text-center"> Add Civil Mock Test Series </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">civil mock Series Selling</label>
                                <input type="text" class="form-control my-1"  id="exampleFormControlInput1" name="civil_mock_series_selling">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">civil mock Series title</label>
                                <input type="text" class="form-control my-1"  id="exampleFormControlInput1" name="civil_mock_series_title">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">civil mock Series p1</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="civil_mock_series_p1">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">civil mock Series p2</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="civil_mock_series_p2">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">civil mock Series p3</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="civil_mock_series_p3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">civil mock Series Price</label>
                                <input type="text" class="form-control my-1"  accept="" id="exampleFormControlInput1" name="civil_mock_series_Price">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">civil mock Series Discount</label>
                                <input type="text" class="form-control my-1"  accept="" id="exampleFormControlInput1" name="civil_mock_series_discount">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">civil mock Series percent</label>
                                <input type="text" class="form-control my-1"  accept="" id="exampleFormControlInput1" name="civil_mock_series_percent">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">civil mock Series Color</label>
                                <input type="color" class="form-control my-1" required id="exampleFormControlInput1" name="civil_mock_series_color">

                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>