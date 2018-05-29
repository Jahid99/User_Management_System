<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">

      <h2>Change Family Group of the user</h2><hr>

       <?php 
            if (!isset($_GET['userid']) || $_GET['userid'] == NULL) {
                echo "<script>window.location='catlist.php';</script>";
            }else{
                $userid = $_GET['userid'];
            }

         ?>

         <?php 
            if (!isset($_GET['groupid']) || $_GET['groupid'] == NULL) {
                echo "<script>window.location='catlist.php';</script>";
            }else{
                $groupid = $_GET['groupid'];
            }

         ?>


          <?php 
                if ($_SERVER['REQUEST_METHOD']=='POST') {
               
               
                $family_group =  $fm->validation($_POST['family_group']);
                $family_group =  mysqli_real_escape_string($db->link,$family_group);

                //echo $family_group;exit;
             
                if(empty($family_group)){
                 echo "<span class='label label-danger'>Field must not be empty  !!!</span><br><br>";
               }else{

                      
                   $query = "UPDATE tbl_users
                            SET
                            group_id = '$family_group'
                            WHERE id = '$userid'";
                            $updated_row = $db->update($query);
                            if($updated_row){
                                Session::set("message","Family Group Updated Successfully !!!");
                                Session::set("color","success");
                                echo "<script>window.location='index.php'</script>";
                            }   else {
                                echo "<span class='label label-danger'>Family Group Not Updated !!!</span><br><br>";
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
                                    
                      

                <select name="family_group" class="form-control" id="sel1"  required="required">
                                     <?php 
                $query = "select * from tbl_groups order by id desc";
                $category = $db->select($query);
                if($category){
                while ($result = $category->fetch_assoc()) {
            ?>
                                        <option value="<?php echo $result['id']; ?>" <?php if($result['id']==$groupid){echo 'selected';} ?>><?php echo $result['name']; ?></option> <?php } } ?>
                                        
                                    </select><br>

           

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

      </div>
    </div>
       
<?php include 'inc/footer.php'; ?>