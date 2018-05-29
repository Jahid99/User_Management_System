<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">
        <h2>Add a Business Category</h2><hr>

         <?php 
                if ($_SERVER['REQUEST_METHOD']=='POST') {
               
               
                $business_name =  $fm->validation($_POST['business_name']);
                $business_name =  mysqli_real_escape_string($db->link,$business_name);
             
                if(empty($business_name)){
                 echo "<span class='label label-danger'>Field must not be empty  !!!</span><br><br>";
               }else{

                      
                    $query = "INSERT INTO  tbl_business(name) VALUES ('$business_name')";
                $userinsert = $db->insert($query);
                if($userinsert){
                  Session::set("message","Business Added successful !!!");
            Session::set("color","success");
            echo "<script>window.location='business.php'</script>";  
            exit();
                }   else {
                  Session::set("message","Business Added successful !!!");
            Session::set("color","success");
            echo "<script>window.location='business.php'</script>";  
            exit();
                    }


                     }
                 }
             ?>

          <form action="" method="post">
                        <table class="form">                    
                           
                             <tr>
                                <td>
                                    <label class="form-group">Business Category Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="business_name" class="form-control" placeholder="Enter Business Category Name.."  class="medium" /><br>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input type="submit" class="btn btn-default" name="submit" Value="Add" />
                                </td>
                            </tr>

                        </table>
                    </form>
              
      </div>
    </div>
       
<?php include 'inc/footer.php'; ?>