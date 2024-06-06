<?php
    include_once "support.php";
    include_once "conn.php";
    session_start();
  
   if( $_SESSION['admin_sign_id'] == '') {
        header('location:index.php');
   }

    include_once "header_admin.php";
 
?>
            <div class="col-9 clm_dash">
                
                <h2 class="text-center my-2">Dashboard</h2>

            </div>

        </div>
    </div>
    <!-- section2_dashboard panel end -->

<?php
    include_once "footer_admin.php";

?>