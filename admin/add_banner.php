<?php
    include_once "support.php";
    include_once "conn.php";
 
   
    $image1=$_POST['image1'];
    $image2=$_POST['image2'];
    $image3=$_POST['image3'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }
    if(isset($_POST['save'])) {
        $ins_banner="INSERT INTO banner SET
            banner_image1='$image1',
            banner_image2='$image2',
            banner_image3='$image3'
        
        ";
        $exe_banner=mysqli_query($conn,$ins_banner);
    }
    include_once "header_admin.php";

?>

            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Banner Image</span>
                    <h3 class="my-3 text-center"> Add Banner Image </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Banner Image</label>
                                <input type="file" class="form-control my-1" required id="exampleFormControlInput1" name="image1">
                                <input type="file" class="form-control my-1" required id="exampleFormControlInput1" name="image2">
                                <input type="file" class="form-control my-1" required id="exampleFormControlInput1" name="image3">
                            </div>
                            
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Upload</button>
                    </form>
               

            </div>



<?php
    include_once "footer_admin.php";
?>