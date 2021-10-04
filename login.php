<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login form</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row" style="margin-top:4%">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="card">
  <div class="card-header">
    Login Form
  </div>
  <div class="card-body">
          <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Staf</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Doctor</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Admin</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent" style="margin-top:20px">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <form action="staf_login.php" method="post">
    <div class="mb-3">
      <label class="form-label">Email  address</label>
      <input type="email" class="form-control" id="email1" name="email1" required>
  </div>
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" id="password1" name="password1" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
  </form>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <form action="doctor_login.php" method="post">
    <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" class="form-control" id="email2" name="email2" required>
</div>
    <div class="mb-3">
      <label  class="form-label">Password</label>
      <input type="password" class="form-control" id="password2" name="password2" required>
    </div>

    <button type="submit" class="btn btn-primary" name="submit2">Submit</button>
  </form>
  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    <form action="admin_login.php" method="post">
    <div class="mb-3">
      <label class="form-label">Email  address</label>
      <input type="email" class="form-control" id="email3" name="email3" required>
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" id="password3" name="password3" required>
    </div>

    <button type="submit" class="btn btn-primary" id="submit3" name="submit3">Submit</button>
  </form>
  </div>
</div></div></div>
        </div>
      </div>
    </div>

    <script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
