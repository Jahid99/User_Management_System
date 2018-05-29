<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">
        <h2>Add a Note</h2><hr>

         <?php 
                if ($_SERVER['REQUEST_METHOD']=='POST') {
               
               
                $comment_name =  $fm->validation($_POST['comment_name']);
                $comment_name =  mysqli_real_escape_string($db->link,$comment_name);
             
                if(empty($comment_name)){
                 echo "<span class='label label-danger'>Field must not be empty  !!!</span><br><br>";
               }else{

                      
                    $query = "INSERT INTO  tbl_comments(name) VALUES ('$comment_name')";
                $userinsert = $db->insert($query);
                if($userinsert){
                  Session::set("message","Business Added successful !!!");
            Session::set("color","success");
            echo "<script>window.location='comment.php'</script>";  
            exit();
                }   else {
                  Session::set("message","Business Added successful !!!");
            Session::set("color","success");
            echo "<script>window.location='comment.php'</script>";  
            exit();
                    }


                     }
                 }
             ?>

          <form action="" method="post">
                        <table class="form">                    
                           
                             <tr>
                                <td>
                                    <label class="form-group">Note Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="comment_name" class="form-control" placeholder="Enter Note Name.."  class="medium" /><br>

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