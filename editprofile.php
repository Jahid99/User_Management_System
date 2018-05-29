<?php include 'inc/header.php'; ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Edit Your Profile
                        </h1>
                    </div>
                </div>
            <?php 
                $id = Session::get('userId');
                $category = Session::get('Category');
            ?>

            <?php 
            if ($_SERVER['REQUEST_METHOD']=='POST') { 
            $username =  $fm->validation($_POST['username']);    
            $first_name =  $fm->validation($_POST['first_name']);   
            $surname =  $fm->validation($_POST['surname']);   
            $date_of_birth =  $fm->validation($_POST['date_of_birth']);   
            $address =  $fm->validation($_POST['address']);   
            $category =  $fm->validation($_POST['category']);   
            $comment =  $fm->validation($_POST['comment']);    

            $username =  mysqli_real_escape_string($db->link,$username);
            $first_name =  mysqli_real_escape_string($db->link,$first_name);
            $surname =  mysqli_real_escape_string($db->link,$surname);
            $date_of_birth =  mysqli_real_escape_string($db->link,$date_of_birth);
            $address =  mysqli_real_escape_string($db->link,$address);
            $category =  mysqli_real_escape_string($db->link,$category);
            $comment =  mysqli_real_escape_string($db->link,$comment);

           
            if(empty($username) || empty($first_name) || empty($surname) || empty($date_of_birth) || empty($address)|| empty($category)){
                echo "<center><span class='label label-danger'>Required fields must not be empty  !!!</span></center><br>";
            }else{
            $usernamequery = "SELECT * FROM tbl_users where username = '$username' limit 1";
            $usernamecheck = $db->select($usernamequery);
            if ($usernamecheck == false) {
             $query = "UPDATE tbl_users
                    SET
                    username = '$username'
                    WHERE id = '$id';
            ";

                $updated_row = $db->update($query);
                if ($updated_row) {
                Session::set("message","Data Updated Successfully !!!");
                }else {
                 echo "<span class='label label-danger'>Data Updated Successfully !!!</span><br><br>";
                }
            }
            
                             
                            $query = "UPDATE tbl_users
                            SET
                            first_name = '$first_name',
                            surname = '$surname',
                            date_of_birth = '$date_of_birth',
                            address = '$address',
                            category = '$category',
                            comment = '$comment'
                            WHERE id = '$id';
                    ";

                    $updated_row = $db->update($query);
                        if ($updated_row) {
                        Session::set("message","Data Updated Successfully !!!");   
                            }else {
                                echo "<span class='label label-danger'>Data Not Updated !!!</span><br><br>";
                            }
                        
                    }
                }
            ?>

            <?php 

               if(Session::get("message")){ ?>
                  <span class="label label-success"><?php echo Session::get("message"); ?></span><br><br>
                  <?php Session::unset_it("message");
                  }

            ?>

            </div>
            <div class="main-center">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <?php
                $query = "select * from tbl_users where id='$id'";
                $singleuser = $db->select($query);
                if($singleuser){
                while ($result = $singleuser->fetch_assoc()) {
                ?>    
                   <form action="" method="post" enctype="multipart/form-data">
                        <table class="form">
                            

                            <tr>
                                <td>
                                    <label class="form-group">Username* :</label>
                                </td>
                                <td>
                                    <input name="username" class="form-control" type="text" value="<?php echo $result['username']; ?>" class="medium" /><br>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label class="form-group">First Name* :</label>
                                </td>
                                <td>
                                    <input name="first_name" class="form-control" type="text" value="<?php echo $result['first_name']; ?>" class="medium" /><br>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label class="form-group">Surame* :</label>
                                </td>
                                <td>
                                    <input name="surname" class="form-control" type="text" value="<?php echo $result['surname']; ?>" class="medium" /><br>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label class="form-group">Date of Birth* :</label>
                                </td>
                                <td>
                                    <input name="date_of_birth" class="form-control" type="date" value="<?php echo $result['date_of_birth']; ?>" class="medium" /><br>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label class="form-group">Address* :</label>
                                </td>
                                <td>
                                    <input name="address" class="form-control" type="text" value="<?php echo $result['address']; ?>" class="medium" /><br>
                                </td>
                            </tr>
                            

                            <tr>
                                <td>
                                    <label class="form-group">Category* :</label>
                                </td>
                                <td>

                                    <select name="category" class="form-control" id="sel1"  required="required">
                                        <option value="3885">3885</option>
                    <option value="3885/1">3885/1</option>
                    <option value="3885/2">3885/2</option>
                    <option value="3885/3">3885/3</option>
                    <option value="3885/4">3885/4</option>
                    <option value="3885/5">3885/5</option>
                    <?php 

                        for($i = 3886; $i<=3907; $i++){ 

                          for($j=0 ;$j<=1;$j++){ ?>
                            <?php

                            $check_cat =  (string)$i;

                            if($j==1){
                                $check_cat.='/1';
                            }

                            ?>
                            <option value="<?php echo (string)$i; if($j==1){echo '/1';} ?>"  <?php if($check_cat==$category){echo 'selected';} ?> ><?php echo (string)$i ; if($j==1){echo '/1';}?></option>

                         <?php }  }

                     ?>
                                    </select><br>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <label class="form-group">Comment* :</label>
                                </td>
                                <td>
                                    <input name="comment" class="form-control" type="text" value="<?php echo $result['comment']; ?>" class="medium" /><br>
                                </td>
                            </tr>
                           
                        
                        </table>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>           
                      <?php } } ?>
                    </div>
                </div>
            </div><br><br>
            
<?php include 'inc/footer.php'; ?>