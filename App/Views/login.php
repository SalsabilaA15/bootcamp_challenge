<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <form method="post" action="<?php echo BASE ?>/index/login">
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>