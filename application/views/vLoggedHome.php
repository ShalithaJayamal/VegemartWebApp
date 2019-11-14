<html>
    <head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>

    <div class="container" align="right">
    <form action="<?php $this->load->helper('url'); echo site_url('cAuth/login');?>" method="POST">
    <button type="submit" class="btn btn-link-lg">Sign out</button>
    </form>
    </div>

  <div class="container">
    <div class="jumbotron bg-transparent">
    <h1 class="display-4">VegeMart</h1>


    </div>
  </div>

    
    <div class="container">
    <div class="row align-items-center">
    <table class="table table-borderless">
    <thead>
    <tr>
      <th scope="col"><form action="<?php $this->load->helper('url'); echo site_url('cVegetables/showAdd');?>"><button type="submit" class="btn btn-success btn-lg">Add Vegetables</button></form></th>
      <th scope="col"><form action="<?php $this->load->helper('url'); echo site_url('cBuyers/showAdd');?>"><button type="submit" class="btn btn-success btn-lg">Add Buyers</button></form></th>
      <th scope="col"><form action="<?php $this->load->helper('url'); echo site_url('cDistributions/showAdd');?>"><button type="submit" class="btn btn-success btn-lg">Add Distributions</button></form></th>
      <!-- <th scope="col"><form action=""><button type="submit" class="btn btn-success btn-lg">Logout</button></form></th> -->
    </tr>
    <tr>
    <th scope="col"><form action="<?php $this->load->helper('url'); echo site_url('cVegetables/showSearch');?>"><button type="submit" class="btn btn-success btn-lg">Search/View Vegetables</button></form></th>
      <th scope="col"><form action="<?php $this->load->helper('url'); echo site_url('cBuyers/showSearch');?>"><button type="submit" class="btn btn-success btn-lg">Search/View Buyers</button></form></th>
      <th scope="col"><form action="<?php $this->load->helper('url'); echo site_url('cDistributions/showSearch');?>"><button type="submit" class="btn btn-success btn-lg">Search/View Distributions</button></form></th>
    </tr>
    </thead>
    </table>
    </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

<style>
body {
  background: url("https://i.postimg.cc/1tWn1tDx/image.png") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
</style>