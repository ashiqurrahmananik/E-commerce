<?php
 include'header.php';
 include'lib/connection.php';

 $sql = "SELECT * FROM product";
 $result = $conn -> query ($sql);
?>



<!--banner start-->
<div class="banner">
<div class="container">
  <div class="row">
    <div class="col-md-6">
    
        <div class="banner-text">
          <p class="bt1">Welcome To</p>
          <p class="bt2"><span class="bt3">Fashion</span>Store</p>
          <p class="bt4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et mi <br>vulputate gen vehicula maximus sagittis rhoncus tortor. Class </p>
          <button class="btn" id="banner-button">Great Sale</button>
        </div>
  
      
    </div>
    
  <div class="col-md-6">
    
      <img src="img/banner-pic.png" class="img-fluid">
 
  </div>

  </div>
</div>
</div>

<!--banner end-->


<!---top sell start---->

<section>
  <div class="container">
    <div class="topsell-head">
      <div class="row">
        <div class="col-md-12 text-center">
          <img src="img/mark.png">
          <h4>New Products</h4>
          <p>A passage of Lorem Ipsum you need here</p>

        </div>
        
        
      </div>

    </div>
  </div>
  <div class="container">
  <div class="row">
  <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              ?>
            <div class="col-md-3 col-sm-6 col-6">
              <div class="product-img">
                <img src="admin/product_img/<?php echo $row['imgname']; ?>" width="100%" class="img-fluid">
              </div>
              <div class="product-button">
                <button>Add to cart</button>
              </div>
              <div class="details text-center">
                <h6><?php echo $row["name"] ?></h6> 
                <span><?php echo $row["Price"] ?></span>               
              </div>
            </div>
            <?php 
    }
        } 
        else 
            echo "0 results";
        ?>

            
          </div>
  </div>
</section>


<!---top sell end---->


<!---logo start--->

<div class="logo5">
  <div class="container">
    <div class="row">
      <div class="col-md-1">
  
      </div>
      <div class="col-md-2 text-center">
        <img src="img/logo1.png">
      </div>
      <div class="col-md-2 text-center">
        <img src="img/logo2.png">
      </div>
      <div class="col-md-2 text-center">
        <img src="img/logo3.png">
      </div>
      <div class="col-md-2 text-center">
        <img src="img/logo4.png">
      </div>
      <div class="col-md-2 text-center">
        <img src="img/logo5.png">
      </div>
      <div class="col-md-1">
  
      </div>
    </div>
  </div>
</div>



<!---logo end--->

<!---welcome start--->

<div class="welcome">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-6 col-sm-12">
        <span class="welcometitle">Welcome to Lawyers Pro</span>
        <img src="img/titleful.png">
        <img src="img/titleline.png" class="titleline">

        <div class="row" id="wel1">
          <div class="col-md-2 col-lg-2 col-2">
            <img src="img/w1.png" class="w" class="img-fluid">
          </div>
          <div class="col-md-10  col-lg-10 col-10">
            <h6 class="wh">24x7 online free support</h6>
            <p class="wp">There are many variations of passages Lorem Ipsum available<br>
            but they are many variations </p>
          </div>   
        </div>

         <div class="row" id="wel2">
          <div class="col-md-2 col-lg-2 col-2">
            <img src="img/w1.png" class="w" class="img-fluid">
          </div>
          <div class="col-md-10  col-lg-10 col-10">
            <h6 class="wh">24x7 online free support</h6>
            <p class="wp">There are many variations of passages Lorem Ipsum available<br>
            but they are many variations </p>
          </div>   
        </div>

        <div class="row" id="wel2">
          <div class="col-md-2 col-lg-2 col-2">
            <img src="img/w1.png" class="w" class="img-fluid">
          </div>
          <div class="col-md-10  col-lg-10 col-10">
            <h6 class="wh">24x7 online free support</h6>
            <p class="wp">There are many variations of passages Lorem Ipsum available<br>
            but they are many variations </p>
          </div>   
        </div>

      </div>
      <div class="col-md-12 col-lg-6 col-sm-12">
        <img src="img/comment.png" class="img-fluid">
      </div>
    </div>
  </div>
</div>



<!---welcome end--->

<!---latest start--->

<div class="latest">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h5>LATEST NEWS</h5>
        <img src="img/mark.png">
      </div>
    </div>
    <div class="row" id="l1">
      <div class="col-lg-4 col-md-6">
        <div class="row">
          <div class="col-md-4 col-4 col-sm-3">
            <img src="img/let1.png" class="img-fluid">
          </div>
          <div class="col-md-8 col-8 col-sm-9">
            <h6 class="lh">Excepteur sint occaecat<br>cupidatat</h6>
            <p class="lp">03/08/2016  /  Read More</p>
          </div>   
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="row">
          <div class="col-md-4 col-4 col-sm-3">
            <img src="img/let2.png" class="img-fluid">
          </div>
          <div class="col-md-8 col-8 col-sm-9">
            <h6 class="lh">Excepteur sint occaecat<br>cupidatat</h6>
            <p class="lp">03/08/2016  /  Read More</p>
          </div>   
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="row">
          <div class="col-md-4 col-4 col-sm-3">
            <img src="img/let3.png" class="img-fluid">
          </div>
          <div class="col-md-8 col-8 col-sm-9">
            <h6 class="lh">Excepteur sint occaecat<br>cupidatat</h6>
            <p class="lp">03/08/2016  /  Read More</p>
          </div>   
        </div>
      </div>

    </div>


  <div class="row" id="l2">
      <div class="col-lg-4 col-md-6">
        <div class="row">
          <div class="col-md-4 col-4 col-sm-3">
            <img src="img/let3.png" class="img-fluid">
          </div>
          <div class="col-md-8 col-8 col-sm-9">
            <h6 class="lh">Excepteur sint occaecat<br>cupidatat</h6>
            <p class="lp">03/08/2016  /  Read More</p>
          </div>   
        </div>
      </div>

     <div class="col-lg-4 col-md-6">
        <div class="row">
          <div class="col-md-4 col-4 col-sm-3">
            <img src="img/let2.png" class="img-fluid">
          </div>
          <div class="col-md-8 col-8 col-sm-9">
            <h6 class="lh">Excepteur sint occaecat<br>cupidatat</h6>
            <p class="lp">03/08/2016  /  Read More</p>
          </div>   
        </div>
      </div>
    
      <div class="col-lg-4 col-md-6">
        <div class="row">
          <div class="col-md-4 col-4 col-sm-3">
            <img src="img/let1.png" class="img-fluid">
          </div>
          <div class="col-md-8 col-8 col-sm-9">
            <h6 class="lh">Excepteur sint occaecat<br>cupidatat</h6>
            <p class="lp">03/08/2016  /  Read More</p>
          </div>   
        </div>
      </div>

    </div>

  </div>
</div>


<!---latest end--->

<?php
 include'footer.php';
?>

