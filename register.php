
<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="card">
            <div class="card-header bg-success">
              <h3 class="text-white">Registration Form</h3>
            </div>
            <div class="card-body">
              <form action="register_post.php" method="post">
                <?php if(isset($_SESSION['success'])){ ?>
                  <div class="alert alert-success" role="alert">
                     <?=$_SESSION['success']?>
                  </div>
                <?php } unset($_SESSION['success'])?>
                  <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input name="name" type="text" class="form-control">
                    <?php if(isset($_SESSION['name_err'])){ ?>
                        <strong class="text-danger"><?=$_SESSION['name_err']?></strong>
                    <?php } unset($_SESSION['name_err'])?>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control">
                    <?php if(isset($_SESSION['email_err'])){ ?>
                        <strong class="text-danger"><?=$_SESSION['email_err']?></strong>
                    <?php } unset($_SESSION['email_err'])?>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" >
                    <?php if(isset($_SESSION['password_err'])){ ?>
                        <strong class="text-danger"><?=$_SESSION['password_err']?></strong>
                    <?php } unset($_SESSION['password_err'])?>
                  </div>
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>