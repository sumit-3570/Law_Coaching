<?php
    include_once "support.php";
    include_once "conn.php";


   
    $clat_choose_sub_head=$_POST['clat_choose_sub_head'];
    $clat_choose_p=$_POST['clat_choose_p'];
    $clat_choose_image=$_POST['clat_choose_image'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }
    if(isset($_POST['save'])) {
        $ins_l="INSERT INTO  clat_choose_mock SET
          
            clat_choose_mock_sub_head='$clat_choose_sub_head',
            clat_choose_mock_image='$clat_choose_image',
            clat_choose_mock_para='$clat_choose_p'

        ";
        $exe_l=mysqli_query($conn,$ins_l);
    }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Clat Mock choose</span>
                    <h3 class="my-3 text-center"> Add Clat Mock choose </h3>
                    <form method="post">    
                            <div class="mb-3">
                              
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat mock choose sub heading</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_choose_sub_head"> 
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat mock choose Paragraph</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="clat_choose_p">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Clat mock choose image</label>
                                <input type="file" class="form-control my-1" required id="exampleFormControlInput1" name="clat_choose_image">
                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>