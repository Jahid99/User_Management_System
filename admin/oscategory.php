<?php include 'inc/header.php'; ?>
    <div class="container">
      <div class="row">
        <h2>Choose a Category From the list</h2><hr>

          
              
      </div>
    </div>

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
      <div class="col-md-3">
     <button type="submit" class="btn btn-primary">Submit</button>
      </div>

    </div>
        </form>
                    </div>
            </div>
        </div>
       
<?php include 'inc/footer.php'; ?>