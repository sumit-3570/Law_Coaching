<?php
    include_once "support.php";
    include_once "conn.php";

   
    $ailet_study_material_image=$_POST['ailet_study_material_image'];
    $ailet_study_course_tile=$_POST['ailet_study_course_tile'];
    $ailet_study_material_lines_1=$_POST['ailet_study_material_lines_1'];
    $ailet_study_material_lines_2=$_POST['ailet_study_material_lines_2'];
    $ailet_study_material_lines_3=$_POST['ailet_study_material_lines_3'];
    $ailet_study_material_lines_4=$_POST['ailet_study_material_lines_4'];
    $ailet_study_materia_Price=$_POST['ailet_study_materia_Price'];
    $ailet_study_materia_discount=$_POST['ailet_study_materia_discount'];
    $ailet_study_materia_percentage=$_POST['ailet_study_materia_percentage'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }

   
   if(isset($_POST['save'])) {
    $ins_prep_c="INSERT INTO ailet_study_course SET
        	ailet_study_course_image='$ailet_study_material_image',
            title='$ailet_study_course_tile',
            ailet_study_course_line_1='$ailet_study_material_lines_1',
            ailet_study_course_line_2='$ailet_study_material_lines_2',
            ailet_study_course_line_3	='$ailet_study_material_lines_3',
            ailet_study_course_line_4='$ailet_study_material_lines_4',
            ailet_study_course_price='$ailet_study_materia_Price',
            ailet_study_course_discount='$ailet_study_materia_discount',
            percent_discount='$ailet_study_materia_percentage'
            
       
    ";
        $exe_clat_prep=mysqli_query($conn,$ins_prep_c);
   }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Ailet Study material</span>
                    <h3 class="my-3 text-center"> Add Ailet Study material </h3>
                    <form method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet Study material image</label>
                                <input type="file" class="form-control my-1" id="exampleFormControlInput1" name="ailet_study_material_image">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet Study Course title</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_study_course_tile">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet study material lines 1 </label>
                              
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_study_material_lines_1">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet study material lines 2 </label>
                              
                              <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_study_material_lines_2">
                              <label for="exampleFormControlInput1" class="form-label fw-bold">ailet study material lines 3 </label>
                              
                              <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_study_material_lines_3">
                              <label for="exampleFormControlInput1" class="form-label fw-bold">ailet study material lines 4 </label>
                              
                              <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_study_material_lines_4">
                               
                                
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet Study material Price</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_study_materia_Price">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet Study material Discount</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_study_materia_discount">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">ailet Study  Discount percent</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="ailet_study_materia_percentage">

                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>