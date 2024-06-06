<?php
    include_once "support.php";
    include_once "conn.php";

   
    $multi_study_material_image=$_POST['multi_study_material_image'];
    $multi_study_course_tile=$_POST['multi_study_course_tile'];
    $multi_study_material_lines_1=$_POST['multi_study_material_lines_1'];
    $multi_study_material_lines_2=$_POST['multi_study_material_lines_2'];
    $multi_study_material_lines_3=$_POST['multi_study_material_lines_3'];
    $multi_study_material_lines_4=$_POST['multi_study_material_lines_4'];
    $multi_study_materia_Price=$_POST['multi_study_materia_Price'];
    $multi_study_materia_discount=$_POST['multi_study_materia_discount'];
    $multi_study_materia_percentage=$_POST['multi_study_materia_percentage'];
    $edit_id=$_GET['edit_id'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }
   

   

   
   if(isset($_POST['save'])) {
    $up_prep_c="UPDATE multi_state_material SET
        	multi_state_material_image='$multi_study_material_image ',
            title='$multi_study_course_tile',
            multi_state_material_line_1='$multi_study_material_lines_1',
            multi_state_material_line_2='$multi_study_material_lines_2',
            multi_state_material_line_3	='$multi_study_material_lines_3',
            multi_state_material_line_4='$multi_study_material_lines_4',
            multi_state_material_price='$multi_study_materia_Price',
            multi_state_material_discount='$multi_study_materia_discount',
            multi_state_material_percent='$multi_study_materia_percentage'
            WHERE multi_state_material_id ='$edit_id';
           
            
       
    ";
        $exe_clat_prep=mysqli_query($conn,$up_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Edit Multi-state Study material</span>
                    <h3 class="my-3 text-center"> Edit Multi-state Study material </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">multi Study material image</label>
                                <input type="file" class="form-control my-1" id="exampleFormControlInput1" name="multi_study_material_image"placeholder="<?php echo $multi_study_material_image ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">multi Study Course title</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="multi_study_course_tile"placeholder="<?php echo $multi_study_course_tile ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">multi study material lines 1 </label>
                              
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="multi_study_material_lines_1"placeholder="<?php echo $multi_study_material_lines_1?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">multi study material lines 2 </label>
                              
                              <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="multi_study_material_lines_2"placeholder="<?php echo $multi_study_material_lines_2?>">
                              <label for="exampleFormControlInput1" class="form-label fw-bold">multi study material lines 3 </label>
                              
                              <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="multi_study_material_lines_3"placeholder="<?php echo $multi_study_material_lines_3 ?>">
                              <label for="exampleFormControlInput1" class="form-label fw-bold">multi study material lines 4 </label>
                              
                              <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="multi_study_material_lines_4"placeholder="<?php echo $multi_study_material_lines_4?>">
                               
                                
                                <label for="exampleFormControlInput1" class="form-label fw-bold">multi Study material Price</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="multi_study_materia_Price"placeholder="<?php echo $multi_study_materia_Price ?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">multi Study material Discount</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="multi_study_materia_discount"placeholder="<?php echo $multi_study_materia_discount?>">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">multi Study  Discount percent</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="multi_study_materia_percentage"placeholder="<?php echo $multi_study_materia_percentage ?>">

                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>