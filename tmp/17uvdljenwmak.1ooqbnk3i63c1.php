<?php echo $this->render($header,$this->mime,get_defined_vars()); ?>

  <div class="login-box">
    <div class="login-logo">
      <a href="index2.html"><img src="views/dist/img/logo2.png" alt="logo"></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">
        <?php if (@$SESSION['flash']): ?>
          <span style="color: red"><?php echo @$SESSION['flash']; ?></span>
          <?php else: ?><span>Sign in to start your training</span>
        <?php endif; ?>
      </p>
      <form action="/login" method="post">
        <div class="form-group has-feedback">
          <input type="text" name="user-email" class="form-control" placeholder="Email"/>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="user-password" class="form-control" placeholder="Password"/>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">    
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>                        
          </div><!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div><!-- /.col -->
        </div>
      </form>
      <a href="#">I forgot my password</a><br>

    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->

<?php echo $this->render($footer,$this->mime,get_defined_vars()); ?>