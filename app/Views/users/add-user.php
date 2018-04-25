<?php
  include('../public/layout/header.php');
?>
  <h1><span class="blue"><span class="yellow">New user</pan></h1>  
  <div class="container form-top">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
        <div class="panel panel-danger">
          <div class="panel-body">
            <form method="post" enctype="multipart/form-data" id="reused_form" class="form-validate">
              <div class="form-group">
                <label >Full Name</label>
                <input type="text" name="fullname" pattern=".{0,100}" title ="Fullname tối đa 100 kí tự" class="form-control" placeholder="Enter fullname">
              </div>
              <div class="form-group">
                <label >Username</label>
                <input type="text" name="username" required pattern=".{0,20}" title ="Username tối đa 20 kí tự" class="form-control" placeholder="Enter username">
              </div>
              <div class="form-group">
                <label >Email</label>
                <input type="email" name="email" pattern=".{0,100}" title ="Email tối đa 100 kí tự" required class="form-control" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label >Password</label>
                <input type="password" name="password" pattern=".{0,50}" title ="Password tối đa 50 kí tự" required class="form-control" placeholder="Enter password">
              </div>
              <div class="form-group">
                <label >Phone</label>
                <input type="tel" name="phone" pattern=".{0,50}" title ="Phone tối đa 100 kí tự" class="form-control" placeholder="Enter phone">
              </div>
              <div class="form-group">
                <button class="btn btn-raised btn-lg btn-warning" type="submit" name="add">Send</button>
                <button class="btn btn-raised btn-lg btn-warning" type="reset">Reset</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
