<?php
 include 'header.php';
?>

<div class="container">
    <section>
  <div class="container">
<?php
foreach ($categories as $value):

?>
  <h5 class="text-lg my-4"><?php echo $value['categoria']; ?></h5>

  <div class="row">
  <?php
  foreach ($result as $row){ 
              if($row['catagory'] == $value['categoria']):
              ?>
            <div class="col-md-4 mt-2">
                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            
                                                <img src="admin/product_img/<?php echo $row['imgname']; ?>" class="card-img img-fluid" width="96" height="350" alt="">
                                              
                                           
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-2">
                                                <a href="#" class="text-default mb-2" data-abc="true"> <?php echo $row["catagory"] ?></a>
                                            </h6>

                                            <a href="#" class="text-muted" data-abc="true"> <?php echo $row["name"] ?></a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold"><?php echo $row["Price"]?> KZ</h3>

                                        <div>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                        </div>

                                        <div class="text-muted mb-3">

                                        <form action="details.php" method="post">
              <div>
            <div class="col-md-3 col-sm-6 col-6">
              
                <input type="hidden" name="user_id" value="<?php 
                if(isset($_SESSION['userid'])){
                  echo  $_SESSION['userid'];
                }else{
                  echo 0;
                }
                ?>" >
                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>"> 
                <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $row['Price']; ?>">              
              </div>
              <input type="submit" class="btn btn-sm btn-info" value="Detalhes" name="detalhes">
              </div>
  </form>
                                        </div>

                                      
                      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="col-md-3 col-sm-6 col-6">
                <input type="hidden" name="user_id" value="<?php 
                if(isset($_SESSION['userid'])){
                  echo  $_SESSION['userid'];
                }else{
                  echo 0;
                }
                ?>" >
                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>"> 
                <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $row['Price']; ?>">              
              </div>
             <button name="add_to_cart" type="submit" class="btn bg-cart" >
             <i class="ion-android-add-circle"></i>
             </button>
             
     </form>
                                      

                                        
                   </div>
           </div>


                            
                             
           </div> 
 
            <?php 
            endif;
    }
        ?>

            
          </div>



<?php
        endforeach;
        ?>

  </div>
</section>
</div>


<?php
 include'footer.php';
?>