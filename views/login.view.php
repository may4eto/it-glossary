<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center mt-5 mb-4">
      <h1 class="mt-5">Login</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-6 offset-md-3">
      <form action="" method="POST">
        <div class="form-group">
          <label for="email">Email:</label>
          <input class="form-control" type="text" name="email" id="email" />
        </div>
        <div class="form-group mb-4">
          <label for="password">Password:</label>
          <input class="form-control" type="password" name="password" id="password" />
        </div>
        <div class="from-group">
          <button class="btn btn-dark" type="submit" name="login">Login</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <?php 
      if (isset($view_bag['status'])) {
        echo $view_bag['status'];
      }
    ?>
  </div>
</div>
