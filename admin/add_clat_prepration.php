<?php
    include_once "support.php";
    include_once "conn.php";

  
   $clat_image=$_POST['clat_image'];
   $clat_prep_heading=$_POST['clat_prep_heading'];
   session_start();
  
   if( $_SESSION['admin_sign_id'] == '') {
        header('location:index.php');
   }

   
   if(isset($_POST['save'])) {
    $ins_prep_c="INSERT INTO clat_prep SET
        clat_prep_image='$clat_image',
        clat_prep_heading='$clat_prep_heading'
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Clat Prepration</span>
                    <h3 class="my-3 text-center"> Add Clat Prepration </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat Prep image</label>
                                <input type="file" class="form-control my-1" required id="exampleFormControlInput1" name="clat_image">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat Prep Heading</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_prep_heading">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat Prep Link</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_prep_link">  
                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>