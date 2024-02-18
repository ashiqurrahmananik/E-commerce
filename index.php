<?php
 include 'header.php';
?>


<div class="banner">
<div class="container">
  <div class="row">
    <div class="col-md-6">
    
        <div class="banner-text">
          <p class="bt1">Seja Bem Vindo</p>
          <p class="bt2"><span class="bt3">Loja</span>Fashion</p>
          <p class="bt4">
            Encontre aqui o melhor para o seu dia a dia 
            <br>Tenha em sua mão tudo o que precisa para poderes estar bem em todo o momento </p>
          
        </div>
    </div>
  </div>
</div>
</div>


    <section class="my-3">
  <div class="container">
    <div class="row">
     
      <div class="col-lg-3">
       
        <button
                class="btn btn-outline-secondary mb-3 w-100 d-lg-none"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
          <span>Mostar Categorias</span>
        </button>
        <!-- Collapsible wrapper -->
        <div class="collapse card d-lg-block mb-5" id="navbarSupportedContent">
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <span
                        class="mx-3 my-3 px-3 pb-1 text-dark  btn-secondary"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#panelsStayOpen-collapseOne"
                        aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne"
                        >
                 Categorias
                </span>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                <div class="accordion-body">
                  <ul class="list-unstyled">

                  <?php
              foreach ($categories as $value):
               ?>
             <li class="nav-item"><a class="nav-link" href="search(1).php?category=<?php echo $value['categoria'];?>" class="text-dark">
             <?php echo $value['categoria'];?>
            </a></li>
           
            </option>
               <?php
              endforeach;
              ?>
                  </ul>
          </div>
        </div>
      </div>
        
         
       
          </div>
        </div>
      </div>

      <div class="col-lg-9">

        <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
          <h4 class="d-block py-2">Produtos </h4>
        </header>
<div class="text text-center bg-danger text-success">
  <?php
  echo $message;
  ?>
</div>
        <div class="row">
        <?php
          if (mysqli_num_rows($result) > 0) {
            // Resultado de cada linha de produtos
            while($row = mysqli_fetch_assoc($result)) {
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
    }
        } 
        else 
            echo "0 results";
        ?>



   </div>

        <hr />

        <!-- Pagination -->
        <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- Pagination -->
      </div>
    </div>
  </div>            
</section>





<?php
 include 'footer.php';
?>

