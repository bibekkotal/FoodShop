<!DOCTYPE html>
<html lang="en">
<head>
	<title>BE FRESH | USER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Syne:wght@500&display=swap');
  body{ background: url(../assets/image/bg.jpg);
        background-repeat: no-repeat;
        background-size: cover; }
  *{ margin: 0px; padding: 0px;}

  .card{ border:none; border-radius: 0px; margin-top: 100px; }
  .card-title{  font-family: 'Syne', sans-serif; font-size: 60px; color: #fd3800; font-weight: bold; padding-bottom: px;}
  .card p{ font-family: 'KoHo', sans-serif; margin: 5px 00px 00px 00px; }
  .card a{ text-decoration: none; font-family: 'Syne', sans-serif; color: #fd3800; }
  input[type=email],input[type=password]{font-family: 'KoHo', sans-serif; padding-left: 20px; border: 1px solid #F8BCBC;}
  .btn{font-family: 'Poppins', sans-serif; font-weight: bold; letter-spacing: 2px;}
  </style>
</head>
<body>

<div class="container">

  <div class="card shadow">
        <div class="row">
        <div class="col-md-6">
        <img src="https://source.unsplash.com/600x450/?food,fastfood" alt="Product Image" class="img-fluid">
        </div>
        <div class="col-md-6">
            <div class="card-body">
              <h4 class="card-title mb-4 mt-4">LOGIN</h4>
               <form action="" method="post">

                   <div class="form-group row pr-4 pb-3">
                      <input type="email" class="form-control rounded-pill" id="inputPassword" placeholder="Email" name="email" required>
                  </div>

                   <div class="form-group row pr-4 pb-4">
                      <input type="password" class="form-control rounded-pill" id="inputPassword" placeholder="Password" name="password" required>
                  </div>

                  <div class="form-group row mr-1">
                    <div class="col-md-12">
                      <div class="row">
                      <div class="col-md-8">
                        <p>Do You Have An Account<a href="usignup.php">&nbsp REGISTER</a> ?</p>
                      </div>
                      <div class="col-md-4">
                        <button type="submit" class="btn btn-outline-danger rounded-pill form-control" name="login">LOGIN</button>
                      </div>
                      </div>
                    </div>
                  </div>
                 </form>
              <?php session_start(); include'../admin/inc/db.php';
                if (isset($_POST['login'])) {

                  $e=$_POST['email'];
                  $p=$_POST['password'];
                  $sel="SELECT * FROM customer WHERE email='$e' AND password='$p'";
                  $rs=$con->query($sel);
                  if ($rs->num_rows>0) {
                    $row=$rs->fetch_assoc();
                    $_SESSION['aid']=$row['id'];
                    $_SESSION['an']=$row['name'];
                    header("location:../index.php");
                  }else { echo "Login Faild !"; header("location:usignup.php"); }
                } ?>
            </div>
        </div>
      </div>
    </div>
</div>

</body>
</html>





