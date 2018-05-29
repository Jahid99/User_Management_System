<?php include 'inc/header.php';?>

  <?php 
   if (isset($_GET['id'])) {
      $id = $_GET['id'];
    }
  ?>

<

<section class="homepage">


<div class="container">
            <div class="row">
        <div class="col-md-12">
        <?php
                $query = "select * from tbl_users where id='$id'";
                $singleuser = $db->select($query);
                if($singleuser){
                while ($result = $singleuser->fetch_assoc()) {
                ?>  
      <center><h1>Name : <?php echo $result['first_name'].' '.$result['surname']; ?></h1></center>
      <center><h2>Date of Birth : <?php echo $result['date_of_birth']; ?></h2></center>
      <center><h3>Address : <?php echo $result['address']; ?></h2></center>
      <center><h4>Category : <?php echo $result['category']; ?></h2></center>
      <center><h5>Comment : <?php echo $result['comment']; ?></h2></center>
      <?php } } ?>
      </div>
      </div>
        </div>

    <div class="container">
            <div class="row">

            </div>
      </div>
        
    </section>

<?php include 'inc/footer.php';?>