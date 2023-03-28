<script type="text/javascript">
</script>
<section>
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="mb-5 font-weight-bold">CHI TIẾT SÁCH</h3>
        </div>

    </div>
    <article class="col-12">
        <!-- <div class="card"> -->
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="index.php?action=giohang&act=add_cart" method="post">
                    <div class="preview col-md-6">
                        <div class="tab-content">
                        <?php
                            if(isset($_GET['id']))
                            {
                                // gán biến 
                                $id=$_GET['id'];
                                $book=new Book();
                                $result=$book->getDetailBookById($id);
                                    $tensach=$result['name'];//$result[1]
                                    $sotrang=$result['number_pages'];
                                    $tacgia=$result['author'];
                                    $image=$result['image'];
                                    $theloai=$result['category'];
                                    $ngaytao=$result['created_by'];
                            }
                           ?>

                            <div class="tab-pane active" id=""><img src="<?php echo'/Content/image/'.$image;?>" alt="" width="200px" height="350px">
                            </div>
                           
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                         
                        </ul>
                    </div>
                    <div class="details col-md-6">
                    <input type="hidden" name="id" value="<?php echo $id;?>" />
                        <h3 class="product-title">Tên Sách: <?php echo $tensach?> </h3>
                        <h5 class="colors">   </br></br>
                        <h5 class="colors">Thể Loại: <?php echo $theloai?>   </br></br>
                          <h5 class="colors">Ngày tạo: <?php echo $ngaytao?>   </br></br>
                        <h3>Tác giả: <?php echo $tacgia;?></h3>
                           <h3>Số trang:<?php echo $sotrang;?></h3>
                           <h3>Ngày trả:<input name="ngaytra"type="date"></h3>
                        <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />
                        </h5>
                        
                        <div class="action">

                            <button class="add-to-cart btn btn-default" type="submit" data-toggle="modal" data-target="#myModal">Mượn Sách
                            </button>

                            <a href="http://hocwebgiare.com/" target="_blank"> <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- </div> -->
    </article>
</section>
<section>

                <p class="float-left"><b>BÌnh luận </b></p>
                <hr>
            </div>
            <form action="index.php?action=giohang&act=binhluan&id=<?php echo $id;?>" method="post">
            
            <div class="row">
                    <input type="hidden" name="com" value=""/>
                    <img src="Content/imagetourdien/people.png" width="50px" height="50px"; />
                    <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
                    <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />
                                
            </div>
            
            </form>
            <div class="row">
                <div class="col-md-12">
                <p class="float-left"><b>Các bình luận:</b></p>
                </div>
                <div class="col-md-12">
                <?php
            $comment=new GioHang();
            $result=$comment->getComment($id);
            while($set=$result->fetch()):
            ?>
                <h3><?php echo $set['binhluan'];?></h3>
                <hr>
                <br/>
            <?php
                endwhile;
              ?> 
                </div>
            
                
            
                
        </div>
    </section>





    