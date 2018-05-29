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
               
               
                $business_cat =  $fm->validation($_POST['business_cat']);
                $business_cat =  mysqli_real_escape_string($db->link,$business_cat);

                //echo $family_group;exit;
             
                if(empty($business_cat)){
                 echo "<span class='label label-danger'>Field must not be empty  !!!</span><br><br>";
               }else{

                      
                   $query = "UPDATE tbl_users
                            SET
                            business_id = '$business_cat'
                            WHERE id = '$userid'";
                            $updated_row = $db->update($query);
                            if($updated_row){
                                Session::set("message","Business Category Added Successfully !!!");
                                Session::set("color","success");
                                echo "<script>window.location='index.php'</script>";
                            }   else {
                                echo "<span class='label label-danger'>Business Category Not Added !!!</span><br><br>";
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
                                    
                      

                <select name="business_cat" class="form-control" id="sel1"  required="required">
                                     <?php 
                $query = "select * from tbl_business order by id desc";
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