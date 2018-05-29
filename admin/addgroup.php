<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">
        <h2>Add a Family Group</h2><hr>

         <?php 
                if ($_SERVER['REQUEST_METHOD']=='POST') {
               
               
                $group_name =  $fm->validation($_POST['group_name']);
                $group_name =  mysqli_real_escape_string($db->link,$group_name);
             
                if(empty($group_name)){
                 echo "<span class='label label-danger'>Field must not be empty  !!!</span><br><br>";
               }else{

                      
                    $query = "INSERT INTO  tbl_groups(name) VALUES ('$group_name')";
                $userinsert = $db->insert($query);
                if($userinsert){
                  Session::set("message","Group Added successful !!!");
            Session::set("color","success");
            echo "<script>window.location='groups.php'</script>";  
            exit();
                }   else {
                  Session::set("message","Group Added successful !!!");
            Session::set("color","success");
            echo "<script>window.location='groups.php'</script>";  
            exit();
                    }


                     }
                 }
             ?>

          <form action="" method="post">
                        <table class="form">                    
                           
                             <tr>
                                <td>
                                    <label class="form-group">Group Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="group_name" class="form-control" placeholder="Enter Group Name.."  class="medium" /><br>

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