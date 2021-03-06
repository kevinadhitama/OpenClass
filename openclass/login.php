<!DOCTYPE html>
<html>
  <?php 
    $isLogin = true;
    include('/extends/header.php');
  ?>
<body>
  <div class="app app-default">

<div class="app-container app-login">
  <div class="flex-center">
    <div class="app-header"></div>
    <div class="app-body">
      <div class="loader-container text-center">
          <div class="icon">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
              </div>
            </div>
          <div class="title">Logging in...</div>
      </div>
      <div class="app-block">
      <div class="app-form">
        <div class="form-header">
          <div class="app-brand"><span class="highlight">Open</span> Class</div>
        </div>
        <form action="action/login" method="POST">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon2">
                <i class="fa fa-key" aria-hidden="true"></i></span>
              <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2" name="password">
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-success btn-submit" value="Login">
            </div>
        </form>

        <div class="form-line">
          <div class="title">OR</div>
        </div>
        <div class="form-footer">
          <button type="button" class="btn btn-default btn-sm btn-social __facebook">
            <div class="info">
             <span class="title">Register</span>
            </div>
          </button>
        </div>
      </div>
      </div>
    </div>
    <div class="app-footer">
    </div>
  </div>
</div>

  </div>

</body>
</html>