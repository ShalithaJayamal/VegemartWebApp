<html>
    <head>
    <title>Add distribution</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>

    <form action="<?php $this->load->helper('url'); echo site_url('Welcome/showLoggedHome');?>" method="POST">
    <button type="submit" class="btn btn-link">< Home</button>
    </form>

    <div class="container" align="right">
    <form action="<?php $this->load->helper('url'); echo site_url('cAuth/login');?>" method="POST">
    <button type="submit" class="btn btn-link-lg">Sign out</button>
    </form>
    </div>
    
    <div class="container">
    <form action="<?php $this->load->helper('url'); echo site_url('cDistributions/add');?>" method="POST">

        <div class="form-group">
        <label for="sel1">Buyer Name</label>
        <select class="form-control" name="buyerID">
          <?php
          foreach ($buyers as $buyer) {
            echo "<option value='".$buyer["ID"]."'>".$buyer["Name"]."</option>";
          }
          ?>
        </select>
        </div>


        <div class="form-group">
        <label for="sel1">Vegetable</label>
        <select class="form-control" name="vegID">
          <?php
          foreach ($vegs as $veg) {
            echo "<option value='".$veg["ID"]."'>".$veg["Name"]."</option>";
          }
          ?>
        </select>
        </div>

        <div class="form-group">
        <label for="Quantity">Quantity</label>
        <input type="text" class="form-control" id="Quantity" placeholder="Enter amount in KG" name="quantity">
        </div> 

        
        <div class="form-group">
        <label for="Date">Date</label>
        <input type="date" id="Date" class="form-control form-control-lg" name="date" value='<?php echo date("Y-m-d"); ?>'>
        </div>


        <button type="submit" class="btn btn-success">Add</button>
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