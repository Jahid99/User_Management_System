<?php include 'inc/header.php'; ?>

    <div class="container">
      <div class="row">



      <div class="col-md-12"> 
         <h2>Filter users by OS Category</h2><hr>

        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                 
                        <form action="search.php" class="form-horizontal" role="form" method="get">
            <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Search Category:</label>
      <div class="col-md-3">          
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

                            <option value="<?php echo (string)$i; if($j==1){echo '/1';} ?>"><?php echo (string)$i ; if($j==1){echo '/1';}?></option>

                         <?php }  }

                     ?>
      </select>
      </div>
      <div class="col-md-1">
     <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      

    </div>
        </form>

        
                    </div>
            </div>
        </div>
</div>
         <div class="container">
      <div class="row">



      <div class="col-md-6"> 
        <h2>All Registered Users <a href="addnewuser.php">(Add New User)</a> </h2><hr>

        </div>

      <div class="col-md-6"> 
       <div class="topnav">
  
  <div class="search-container">
    <form action="searchbyname.php" method="get">
      <input type="text" placeholder="Search User by Name" name="search" required="">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

        </div>



        </div>
        </div>

           <?php 
            if (isset($_GET['del'])) {
              $delid = $_GET['del'];
              $delquery = "delete from tbl_users where id ='$delid'";
              $deldata = $db->delete($delquery);
              if($deldata){
                        Session::set("message","User Deleted Successfully !!!");
                        Session::set("color","success");

                    }   else {
                        Session::set("message","User Not Deleted !!!");
                    }
            }

           

         ?>
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
          $query = "SELECT * from tbl_users  order by id DESC";
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