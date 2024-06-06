<?php
    include_once "support.php";
    include_once "conn.php";

 
    $Center_title=$_POST['Center_title'];
    $Center_email=$_POST['Center_email'];
    $Center_mobile=$_POST['Center_mobile'];
    $Center_address=$_POST['Center_address'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }
   
  

   
   if(isset($_POST['save'])) {
    $ins_prep_c="INSERT INTO center SET
        	center_title='$Center_title',
            mobile='$Center_mobile',
            center_email='$Center_email',
            center_address='$Center_address'
           
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Our center</span>
                    <h3 class="my-3 text-center"> Add Our center </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Center Title</label>
                                <input type="text" class="form-control my-1"  id="exampleFormControlInput1" name="Center_title">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Center Mobile</label>
                                <input type="text" class="form-control my-1"  id="exampleFormControlInput1" name="Center_mobile">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Center Email</label>
                                <input type="text" class="form-control my-1"  id="exampleFormControlInput1" name="Center_email">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Center Address</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="Center_address">
                              

                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>