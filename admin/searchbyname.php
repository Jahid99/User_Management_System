<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">

      <?php 
            if (!isset($_GET['search']) || $_GET['search'] == NULL) {
                echo "<script>window.location='index.php';</script>";
            }else{
                $search = $_GET['search'];
            }

         ?>

      <h2>Result for name: <?php echo $search; ?></h2><hr>

       
         
         <?php   if(Session::get("message")){ ?>
                 
                <center><span class="label label-<?php 
                if(Session::get("color")){
                echo Session::get("color");
                Session::unset_it("color");
              }else{
                  echo "danger";
              }
                 ?>"><?php echo Session::get("message"); ?></span></center><br>
               <?php Session::unset_it("message");
              }
                    ?>
             <?php 
          //$query = "SELECT * FROM tbl_users WHERE first_name LIKE '%$search%' OR surname LIKE '%$search%'";
          $query = "SELECT * FROM tbl_users where concat(first_name, ' ' , surname) LIKE '%$search%'";


          
          $users = $db->select($query);
          if($users){ ?>
            <table class="table table-bordered" id="example">
                <thead>
                  <tr>
                    <th width="5%">No.</th>
                    <th width="8%">Username</th>
                    <th width="8%">Full Name</th>
                    <th width="8%">Date of Birth</th>
                    <th width="5%">Address</th>
                    <th width="5%">Category</th>
                    <th width="5%">Comment</th>
                    <th width="5%">Family Group</th>
                    <th width="5%">Business</th>
                    <th width="5%">Note</th>
                    <th width="5%">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                    <?php $i=0;
                      while ($result = $users->fetch_assoc()) { $i++; $userid=$result['id'];?>

                        <tr class="odd gradeX">
                          <td><?php echo $i; ?></td>
                          <td><?php echo $result['username']; ?></td>
                          <td><?php echo $result['first_name'].' '.$result['surname']; ?></td>
                          <td><?php echo $result['date_of_birth']; ?></td>
                          <td><?php echo $result['address']; ?></td>
                          <td><?php echo $result['category']; ?></td>
                          <td><?php echo $result['comment']; ?></td>


                          <td><?php 

                          if($result['group_id']){

                            $id = $result['group_id'];
                $query = "select * from tbl_groups where id='$id'";
                $category = $db->select($query);
                if($category){
                while ($result2 = $category->fetch_assoc()) {
                      

                  echo $result2['name'].'('."<a href='changegroup.php?groupid=$id&userid=$userid'>Change</a>".')';


                  }
                }


                          } else {



                            echo 'Not Defined'.'('."<a href='assigngroup.php?userid=$userid'>Define</a>".')';
                          }

                          ?></td>

                          <td><?php 

                          if($result['business_id']){

                            $id = $result['business_id'];
                $query = "select * from tbl_business where id='$id'";
                $category = $db->select($query);
                if($category){
                while ($result2 = $category->fetch_assoc()) {
                      

                  echo $result2['name'].'('."<a href='changebusiness.php?businessid=$id&userid=$userid'>Change</a>".')';


                  }
                }


                          } else {



                            echo 'Not Defined'.'('."<a href='assignbusiness.php?userid=$userid'>Define</a>".')';
                          }

                          ?></td>

                          <td><?php 

                          if($result['comment_id']){

                            $id = $result['comment_id'];
                $query = "select * from tbl_comments where id='$id'";
                $category = $db->select($query);
                if($category){
                while ($result2 = $category->fetch_assoc()) {
                      

                  echo $result2['name'].'('."<a href='changecomment.php?commentid=$id&userid=$userid'>Change</a>".')';


                  }
                }


                          } else {



                            echo 'Not Defined'.'('."<a href='assigncomment.php?userid=$userid'>Define</a>".')';
                          }

                          ?></td>





                          <td><a onclick="return confirm('Are you sure to delete');" href="?del=<?php echo $result2['id']; ?>">Delete</a></td>
                          
                        <?php } ?>
                    
                </tbody>
              </table>
               <?php
                    }else{
                      echo '<center><h2 style="color:red">No user request found...</h2></center>';
                    }
                  

                     ?>

      </div>
    </div>
       
<?php include 'inc/footer.php'; ?>