<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">

      <h2>Edit Note</h2><hr>
        
              <?php 
            if (!isset($_GET['id']) || $_GET['id'] == NULL) {
                echo "<script>window.location='index.php';</script>";
            }else{
                $id = $_GET['id'];
            }

         ?>

          <?php 
                     if ($_SERVER['REQUEST_METHOD']=='POST') {  
                        $name = $_POST['comment_name'];      
                        $name =  mysqli_real_escape_string($db->link,$name);
                     
                       if(empty($name)){
                        echo "<span class='label label-danger'>Field must not be empty !!!</span><br><br>";
                       } else{
                           

                            $query = "UPDATE tbl_comments
                            SET
                            name = '$name'
                            WHERE id = '$id'";
                            $updated_row = $db->update($query);
                            if($updated_row){
                                Session::set("message","Business Category Updated Successfully !!!");
                                Session::set("color","success");
                                echo "<script>window.location='comment.php'</script>";
                            }   else {
                                echo "<span class='label label-danger'>Comment Category Not Updated !!!</span><br><br>";
                            }
                                   
                            }
                       
                        
                    }
                ?>



         <form action="" method="post">
                        <table class="form">                    
                            
                            <?php 
                $query = "select * from tbl_comments where id='$id' order by id desc";
                $category = $db->select($query);
                if($category){
                while ($result = $category->fetch_assoc()) {
            ?>

                             <tr>
                                <td>
                                    <label class="form-group">Note Category Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="comment_name" class="form-control" value="<?php  echo $result['name']; ?>" placeholder="Enter Note Name.."  class="medium" /><br>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input type="submit" class="btn btn-default" name="submit" Value="Update" />
                                </td>
                            </tr>

                        </table>
                    </form>
                    <?php } } ?>

      </div>
    </div>
       
<?php include 'inc/footer.php'; ?>