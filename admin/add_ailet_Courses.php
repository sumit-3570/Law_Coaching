<?php
    include_once "support.php";
    include_once "conn.php";
 
    $ailet_class_live=$_POST['ailet_class_live'];
    $ailet_class_head=$_POST['ailet_class_head'];
    $ailet_class_duration=$_POST['ailet_class_duration'];
    $ailet_class_eligible=$_POST['ailet_class_eligible'];
    $ailet_class_hour=$_POST['ailet_class_hour'];
    $ailet_class_Price=$_POST['ailet_class_Price'];
    $ailet_class_link=$_POST['ailet_class_link'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }
    

   
   if(isset($_POST['save'])) {
    $ins_prep_c="INSERT INTO ailet_classes SET
        	ailet_classes_live='$ailet_class_live',
            ailet_classes_heading='$ailet_class_head',
            ailet_classes_duration='$ailet_class_duration',
            ailet_classes_eligible='$ailet_class_eligible',
            ailet_classes_hour='$ailet_class_hour',
            price='$ailet_class_Price',
            link='$ailet_class_link'
         
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Ailet courses</span>
                    <h3 class="my-3 text-center"> Add Ailet courses </h3>
                    <form method="post">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Ailet class Live</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_class_live">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Ailet class Heading</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_class_head">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Ailet class Duration</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_class_duration">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Ailet class Eligibility</label>
                                <input type="text" class="form-control my-1"id="exampleFormControlInput1" name="ailet_class_eligible">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Ailet class hour</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_class_hour">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Ailet class Price</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_class_Price">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Ailet class Link</label>
                                <input type="text" class="form-control my-1" id="exampleFormControlInput1" name="ailet_class_link">     
                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>
            </div>

<?php
    include_once "footer_admin.php";
?>