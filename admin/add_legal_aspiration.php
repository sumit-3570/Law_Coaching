<?php
    include_once "support.php";
    include_once "conn.php";


    $legal_sub_head=$_POST['legal_sub_head'];
    $legal_p=$_POST['legal_p'];
    session_start();
  
    if( $_SESSION['admin_sign_id'] == '') {
         header('location:index.php');
    }
    if(isset($_POST['save'])) {
        $ins_l="INSERT INTO  legal_aspiration SET
            legal_aspiration_sub_head='$legal_sub_head',
            legal_aspiration_p='$legal_p'
        
        ";
        $exe_l=mysqli_query($conn,$ins_l);
    }
    include_once "header_admin.php";

?>
            <div class="col-9 clm_dash">
                    <span class="text-black"><a href="home.php">Home/</a>Add Legal Aspiration</span>
                    <h3 class="my-3 text-center"> Add Legal Aspiration </h3>
                    <form method="post">    
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Legal Aspiration sub heading</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="legal_sub_head"> 
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Legal Aspiration Paragraph</label>
                                <input type="text" class="form-control my-1" required id="exampleFormControlInput1" name="legal_p">
                            </div>
                            <button type="submit" name="save" value="1" class="btn btn-dark text-white mb-1">Insert</button>
                    </form>

            </div>

<?php
    include_once "footer_admin.php";
?>