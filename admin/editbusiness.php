<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">

      <h2>Add a Family Group</h2><hr>
        
              <?php 
            if (!isset($_GET['id']) || $_GET['id'] == NULL) {
                echo "<script>window.location='index.php';</script>";
            }else{
                $id = $_GET['id'];
            }

         ?>

          <?php 
                     if ($_SERVER['REQUEST_METHOD']=='POST') {  
                        $name = $_POST['business_name'];      
                        $name =  mysqli_real_escape_string($db->link,$name);
                     
                       if(empty($name)){
                        echo "<span class='label label-danger'>Field must not be empty !!!</span><br><br>";
                       } else{
                           

                            $query = "UPDATE tbl_business
                            SET
                            name = '$name'
                            WHERE id = '$id'";
                            $updated_row = $db->update($query);
                            if($updated_row){
                                Session::set("message","Business Category Updated Successfully !!!");
                                Session::set("color","success");
                                echo "<script>window.location='business.php'</script>";
                            }   else {
                                echo "<span class='label label-danger'>Business Category Not Updated !!!</span><br><br>";
                            }
                                   
                            }
                       
                        
                    }
                ?>



         <form action="" method="post">
                        <table class="form">                    
                            
                            <?php 
                $query = "select * from tbl_business where id='$id' order by id desc";
                $category = $db->select($query);
                if($category){
                while ($result = $category->fetch_assoc()) {
            ?>

                             <tr>
                                <td>
                                    <label class="form-group">Business Category Name :</label>
                                </td>
                                <td>
                                    <input type="text" name="business_name" class="form-control" value="<?php  echo $result['name']; ?>" placeholder="Enter Group Name.."  class="medium" /><br>

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