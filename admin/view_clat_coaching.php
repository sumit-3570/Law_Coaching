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
                <h2 class="my-1 text-center"> View Clat coaching program </h2>
                
                <form method="post">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                   
                                    <th> ID </th>
                                    <th> Heading </th>
                                    <th>Paragraph</th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                                    <?php
                                       $sel_clat_p="SELECT * FROM clat_coahing ";
                                       $exe_clat_p=mysqli_query($conn,$sel_clat_p);
                                       while($fetch_clat_p=mysqli_fetch_assoc($exe_clat_p)) {
                                            
                                    ?>
                            <tbody>
                                 <tr>
                                    
                                    <td><?php echo $fetch_clat_p['clat_coahing_id'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_coahing_heading'] ?></td>
                                    <td><?php echo $fetch_clat_p['clat_coahing_paragraph'] ?></td>
                                   
                                    <td>
                                        <a href="edit_clat_coahing.php? edit_id=<?php echo $fetch_clat_p['clat_coahing_id'] ?>">
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