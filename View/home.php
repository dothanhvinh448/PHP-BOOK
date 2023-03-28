

  <section id="examples" class="text-center">


      <div class="row">
          <div class="col-lg-8 text-right">
              <h3 class="mb-5 font-weight-bold" style="color: red;">Sách mới nhất   </h3>
             
          </div>
          <div class="col-lg-4 text-right mt-4">
              
      </div>
      <div class="row">
    <?php
    $book=new Book();
    $result=$book->getListBookNew();
    while($set=$result->fetch()):
  ?>
              <div class="col-lg-3 col-md-3 mb-3 text-left" >
                  <div class="view overlay z-depth-1-half">
                      <img src="<?php echo 'Content/image/'.$set['image'];?>" class="img-fluid" alt="" style="height:250px;width:250px">
                      <div class="mask rgba-white-slight"></div>
                  </div>
                  </h5>
                  <a href=" index.php?action=home&act=detail&id=<?php echo $set['id'] ?>">
                      <span><?php echo $set['name']; ?></span></br></a>
              </div>
              <?php
                endwhile;
              ?>
         
      </div>
  </section>
 
  <section id="examples" class="text-center">

      <!-- Heading -->
      <div class="row">
          <div class="col-lg-8 text-right">
        <h3 class="mb-5 font-weight-bold" style="color: red;">Tất Cả Sách   </h3>
          </div>
      </div>
      <!--Grid row-->

    <div class="row">
        <?php
            $book=new Book();
            $result=$book->getListAllBook();
            while($set=$result->fetch()):
        ?>
    <div class="col-lg-3 col-md-3 mb-3 text-left">
        <div class="view overlay z-depth-1-half">
            <img src="<?php echo 'Content/image/'.$set['image'];?>" class="img-fluid" alt="" style="height:250px;width:250px">
        </div>
            <a href=" index.php?action=home&act=detail&id=<?php echo $set['id'] ?>">
            <span><?php echo $set['name']; ?></span></br></a>
              </div>
              <?php
                endwhile;
              ?>
      </div>
  </section>
