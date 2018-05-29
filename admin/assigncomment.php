<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">

      <h2>Assign a Business Category</h2><hr>

       <?php 
            if (!isset($_GET['userid']) || $_GET['userid'] == NULL) {
                echo "<script>window.location='catlist.php';</script>";
            }else{
                $userid = $_GET['userid'];
            }

         ?>


          <?php 
                if ($_SERVER['REQUEST_METHOD']=='POST') {
               
               
                $comment =  $fm->validation($_POST['comment']);
                $comment =  mysqli_real_escape_string($db->link,$comment);

                //echo $family_group;exit;
             
                if(empty($comment)){
                 echo "<span class='label label-danger'>Field must not be empty  !!!</span><br><br>";
               }else{

                      
                   $query = "UPDATE tbl_users
                            SET
                            comment_id = '$comment'
                            WHERE id = '$userid'";
                            $updated_row = $db->update($query);
                            if($updated_row){
                                Session::set("message","Comment Category Added Successfully !!!");
                                Session::set("color","success");
                                echo "<script>window.location='index.php'</script>";
                            }   else {
                                echo "<span class='label label-danger'>Comment Category Not Added !!!</span><br><br>";
                            }



                     }
                 }
             ?>
        
         <form action="" method="post">
                        <table class="form">                    
                           
                             <tr>
                                <td>
                                    <label class="form-group">Comment Name :</label>
                                </td>
                                <td>
                                    
                      

                <select name="comment" class="form-control" id="sel1"  required="required">
                                     <?php 
                $query = "select * from tbl_comments order by id desc";
                $category = $db->select($query);
                if($category){
                while ($result = $category->fetch_assoc()) {
            ?>
                                        <option value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?></option> <?php } } ?>
                                        
                                    </select><br>

           

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