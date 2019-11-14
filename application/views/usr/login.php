<!DOCTYPE html>
<html><head>
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
   <div class="container">
        <form action="<?php $this->load->helper('url'); echo site_url('cAuth/verify') ?>" method="POST">
        <h2 style="color:#fff;">Log In</h2><br>

        <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username" id="username" required>
        </div>

        <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" id="pwd" required>
        </div>

        <button type="submit" class="btn btn-success">Login</button>
        </form>
    </div>

    <div class="container">
    <form action="<?php $this->load->helper('url'); echo site_url('cAuth/signupform');?>" method="POST">
    <label for="pwd">Don't have an account ?</label>
    <button type="submit" class="btn btn-link" id="signup">Sign Up</button>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<style>
body {
  background: url('https://i.postimg.cc/1tWn1tDx/image.png') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
</style>