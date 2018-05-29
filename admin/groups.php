<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">
        <h2>All Family Groups list</h2><hr>

           <?php 
            if (isset($_GET['delgroup'])) {
              $delid = $_GET['delgroup'];
              $delquery = "delete from tbl_groups where id ='$delid'";
              $deldata = $db->delete($delquery);
              if($deldata){
                        Session::set("message","Group Deleted Successfully !!!");
                        Session::set("color","success");

                    }   else {
                        Session::set("message","Group Not Deleted !!!");
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
          $query = "SELECT * from tbl_groups  order by id DESC";
          $users = $db->select($query);
          if($users){ ?>
            <table class="table table-bordered" id="example">
                <thead>
                  <tr>
                    <th width="5%">No.</th>
                    <th width="8%">Name</th>
                    <th width="8%">Action</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                    <?php $i=0;
                      while ($result = $users->fetch_assoc()) { $i++; $count = 0;$group_id = $result['id'];?>

                        <tr class="odd gradeX">
                          <td><?php echo $i; ?></td>
                          <?php
                         
                $query = "select * from tbl_users where group_id='$group_id'";
                $singleuser = $db->select($query);
                if($singleuser){
                    //echo print_r($singleuser);
                     $count =  ($singleuser->num_rows);
                     //exit;
                 } ?>

                         
                         <td><?php echo $result['name']; ?><?php echo ' ( <a href="usersbygroup.php?id='.$group_id.'"> '.$count .' users ) </a> '; ?></td>
                          <td><a href="editgroup.php?id=<?php echo $result['id']; ?>">Edit</a> || <a onclick="return confirm('Are you sure to delete');" href="?delgroup=<?php echo $result['id']; ?>">Delete</a></td>
                          
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