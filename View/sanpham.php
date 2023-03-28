
  <section id="examples" class="text-center">
  <div class="row">
          <div class="col-lg-8 text-right">
        <h3 class="mb-5 font-weight-bold" style="color: red;">Sách Tìm Kiếm   </h3>
          </div>
      </div>
      <div class="row">
             <?php
             $book=new Book();
            $results=$book->searchBook($_POST['search']);
             while($set=$results->fetch()):
             ?>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">
                  <div class="view overlay z-depth-1-half">
                      <img src="<?php echo 'Content/image/'.$set['image'];?>" class="img-fluid" alt="">
                      <div class="mask rgba-white-slight"></div>
                  </div>
                  <a href="index.php?action=home&act=detail&id=<?php echo $set['id'];?>">
              </div>
            <?php
            endwhile;
            ?>
      </div>
  </section>

 