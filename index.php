<?php include 'inc/header.php';?>

 <?php 
   $id = Session::get('userId');
   $category = Session::get('Category');
  ?>

<

<section class="homepage">


<div class="container">
            <div class="row">
        <div class="col-md-12">
        


           <?php 
          $query = "SELECT * from tbl_users WHERE category = '$category' order by id DESC";
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
                      

                  echo $result2['name'];


                  }
                }


                          } else {



                            echo 'Not Defined';
                          }

                          ?></td>

                          <td><?php 

                          if($result['business_id']){

                            $id = $result['business_id'];
                $query = "select * from tbl_business where id='$id'";
                $category = $db->select($query);
                if($category){
                while ($result2 = $category->fetch_assoc()) {
                      

                  echo $result2['name'];


                  }
                }


                          } else {



                            echo 'Not Defined';
                          }

                          ?></td>

                          <td><?php 

                          if($result['comment_id']){

                            $id = $result['comment_id'];
                $query = "select * from tbl_comments where id='$id'";
                $category = $db->select($query);
                if($category){
                while ($result2 = $category->fetch_assoc()) {
                      

                  echo $result2['name'];


                  }
                }


                          } else {



                            echo 'Not Defined';
                          }

                          ?></td>





                        
                          
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
        </div>

        
    </section>
        

    

<script src="js/loadislands.js"></script>

<?php include 'inc/footer.php';?>