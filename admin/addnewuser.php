<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">
        <h2>Add a User</h2><hr>

         <div class="col-md-5">
          <?php 
            if ($_SERVER['REQUEST_METHOD']=='POST') {  
        


  
            $username =  $fm->validation($_POST['username']);  
            $password =  $fm->validation($_POST['password']);  
            $password = password_hash($password, PASSWORD_BCRYPT);  
            $first_name =  $fm->validation($_POST['first_name']);   
            $surname =  $fm->validation($_POST['surname']);   
            $date_of_birth =  $fm->validation($_POST['date_of_birth']);   
            $address =  $fm->validation($_POST['address']);   
            $category =  $fm->validation($_POST['category']);    
            $comment =  $fm->validation($_POST['comment']);     

            $username =  mysqli_real_escape_string($db->link,$username);
            $password =  mysqli_real_escape_string($db->link,$password);
            $first_name =  mysqli_real_escape_string($db->link,$first_name);
            $surname =  mysqli_real_escape_string($db->link,$surname);
            $date_of_birth =  mysqli_real_escape_string($db->link,$date_of_birth);
            $address =  mysqli_real_escape_string($db->link,$address);
            $category =  mysqli_real_escape_string($db->link,$category);
            $comment =  mysqli_real_escape_string($db->link,$comment);
            
         
           if(empty($username) || empty($password) || empty($first_name) || empty($surname) || empty($date_of_birth) || empty($address)|| empty($category)){
            echo "<center><span class='label label-danger'>Required fields must not be empty  !!!</span></center><br>";
           }else{
           $query = "SELECT * FROM tbl_users where username = '$username' limit 1";
           $mailcheck = $db->select($query);
           if ($mailcheck != false) {
            echo "<span class='label label-danger'>Username Already exists  !!!</span><br><br>";
           }else{
              
           
               $query = "INSERT INTO  tbl_users(username,password,first_name,surname,date_of_birth,address,category,comment) VALUES ('$username','$password','$first_name','$surname','$date_of_birth','$address','$category','$comment')";
                $userinsert = $db->insert($query);
                if($userinsert){
                  Session::set("message","Registration successful !!!");
            Session::set("color","success");
            
            echo "<script>window.location='index.php'</script>";  
            exit();
                }   else {
                  Session::set("message","Registration successful !!!");
            Session::set("color","success");
            
            echo "<script>window.location='index.php'</script>";  
            exit();
                    }
                }                
                } 
}

            
  
            ?>
              <form class="form-horizontal" method="post" id="demo-form" action="">   

            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Username*</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username" required />
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Password*</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label for="first_name" class="cols-sm-2 control-label">First Name*</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="first_name" id="first_name"  placeholder="Enter Your First Name" required/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="surname" class="cols-sm-2 control-label">Surname*</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="surname" id="surname"  placeholder="Enter Your SurName" required/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="date_of_birth" class="cols-sm-2 control-label">Date of Birth*</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar-o fa" aria-hidden="true"></i></span>
                  <input type="date" class="form-control" name="date_of_birth" id="date_of_birth"  placeholder="Enter The Date You Last Donated Blood" required/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="address" class="cols-sm-2 control-label">Address*</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="address" id="address"  placeholder="Enter Your Address" required/>
                </div>
              </div>
            </div>

            

            <div class="form-group">
              <label for="category" class="cols-sm-2 control-label">OS Category*</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-server" aria-hidden="true"></i></span>
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
              </div>
            </div>



            <div class="form-group">
              <label for="comment" class="cols-sm-2 control-label">Comment</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-comments fa" aria-hidden="true"></i></span>
                  <textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
                </div>
              </div>
            </div>

            <div class="form-group ">
              <button class="btn btn-primary btn-lg btn-block login-button g-recaptcha" data-sitekey="<?php echo $config['client-key']; ?>"
    data-callback="onSubmit">Register</button>
            </div>

            
          </form>

              </div>

      </div>
    </div>
       
<?php include 'inc/footer.php'; ?>