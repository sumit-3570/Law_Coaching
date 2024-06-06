<?php
    include_once "support.php";
    include_once "conn.php";

    p($_POST);
    $Clat_class_tile=$_POST['Clat_class_tile'];
    $clat_class_duration=$_POST['clat_class_duration'];
    $clat_class_eligible=$_POST['clat_class_eligible'];
    $clat_class_hour=$_POST['clat_class_hour'];
    $clat_class_link=$_POST['clat_class_link'];
    $clat_class_Price=$_POST['clat_class_Price'];
    $clat_class_live=$_POST['clat_class_live'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }

   
   if(isset($_POST['save'])) {
    $up_prep_c="UPDATE clat_classes SET
        	clat_classes_title='$Clat_class_tile',
            clat_classes_duration='$clat_class_duration',
            clat_classes_eligible='$clat_class_eligible',
            clat_classes_hour='$clat_class_hour',
            clat_classes_link='$clat_class_link',
            price='$clat_class_Price',
            live_classes='$clat_class_live'
       
    ";
        $exe_clat_prep=mysqli_query($conn,$up_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Edit Clat courses</span>
                    <h3 class="my-3 text-center"> Edit Clat courses </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat class title</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="Clat_class_tile" placeholder="<?php echo $Clat_class_tile ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat class duration</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_class_duration"placeholder="<?php echo $clat_class_duration ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat class eligible</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_class_eligible"placeholder="<?php echo  $clat_class_eligible?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat class Hour</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_class_hour"placeholder="<?php echo $clat_class_hour?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat class Link</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_class_link"placeholder="<?php echo $clat_class_link ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat class Live</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_class_live" placeholder="<?php echo $clat_class_link ?>">
                               
                                  
                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>