
<!--  -->
<div class="container"> 
 
 <div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-5 well well-sm col-md-offset-4"> 
   <legend><a href=""><i class="glyphicon glyphicon-globe"></i></a> Đăng ký thành viên!
   </legend> 
   <form  action="index.php?action=registration&act=registration_action" method="POST" class="form" role="form"> 
    <div class="row"> 
     <div class="col-xs-4 col-md-4"> <label for="email">Tên Sinh Viên:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="studentName" placeholder="Tên Sinh Viên" required="" autofocus="" type="text"> </div>
     <div class="col-xs-4 col-md-4"> <label for="email">Tuổi:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="age" placeholder="Tuổi" required="" autofocus="" type="number"> </div>  
     <div class="col-xs-4 col-md-4"> <label for="email"> Giới Tính:</label></div>
     <div class="col-xs-8 col-md-8"><select id="gender" name ="gender">
           <option value="nam">Nam</option>
            <option value="nu">Nữ</option></select></div> 
     <div class="col-xs-4 col-md-4"> <label for="email">Địa chỉ:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtdiachi" placeholder="Địa chỉ" required="" autofocus="" type="text"> </div> 
     <div class="col-xs-4 col-md-4"> <label for="email">Số Điện Thoại:</label>
     </div>
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtsodt" placeholder="Số điện thoại " required="" autofocus="" type="text"> </div> 
     <div class="col-xs-4 col-md-4"><label for="email">Tên Đăng Nhập:</label>
     </div> 
     <div class="col-xs-8 col-md-8"><input class="form-control" name="txtusername" placeholder="Tên đăng nhập" required="" type="text"> 
     </div> 
    </div><label for="email">Email:</label> <input class="form-control" name="txtemail" placeholder="Email" type="email">
     <input class="form-control" name="txtpass" placeholder="Mật khẩu" type="password">
      <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">
      
   
    <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button> 
   </form> 
  </div> 
 </div>
</div>