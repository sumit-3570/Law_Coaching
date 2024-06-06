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
                <a href="home.php">
                    <span class="text-black">Home</span>
                </a>
                <h2 class="my-1 text-center"> View haryana test series heading </h2>
                
                <form method="post">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
  
                                    <th>ID</th>
                                    <th>Heading</th>
                                    <th>Paragraph</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                    <?php
                                       $sel_clat_p="SELECT * FROM haryana_test_series";
                                       $exe_clat_p=mysqli_query($conn,$sel_clat_p);
                                       while($fetch_clat_p=mysqli_fetch_assoc($exe_clat_p)) {
                                        
                                           
                                    ?>
                            <tbody>
                                 <tr>
                                    
                                    <td><?php echo $fetch_clat_p['haryana_test_series_id'] ?></td>
                                    <td><?php echo $fetch_clat_p['haryana_test_series_head'] ?></td>
                                    <td><?php echo $fetch_clat_p['haryana_test_series_para']?></td>
                                   
                                    <td>
                                        <a href="edit_view_haryana_mock_series_head.php? edit_id=<?php echo $fetch_clat_p['haryana_test_series_id']?>">
                                                <button class="btn btn-success" type="button">Edit</button>
                                    </a>
                                        
                                        
                                        
                                    </td>
                                   
                                    
                                 </tr>
                                 <?php
                                       }              
                                 ?>
                            </tbody>
                        </table>
                        
                    </form>
                   

     </div>

<?php
        include_once "footer_admin.php";

?>