<html>
    <head>
    <title>Modify buyer</title>
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
    <form action="<?php $this->load->helper('url'); echo site_url('cBuyers/modify');?>" method="POST">
        
    <?php
    echo "
        <div class='form-group'>
        <label for='name'>Buyer ID</label>
        ";
        echo "<input type='text' class='form-control' id='id' name='id' readonly value='".$buyer[0]["id"]."'>";
        echo "</div>"
        ;

    echo "
        <div class='form-group'>
        <label for='name'>Name</label>
        ";
        echo "<input type='text' class='form-control' id='name' placeholder='Enter vegetable name' name='name' value='".$buyer[0]["name"]."'>";
        echo "</div>";

    echo "
        <div class='form-group'>
        <label for='maxBuy'>Telephone Number</label>
        ";
        echo "<input type='text' class='form-control' id='maxBuy' placeholder='Enter maximum buying price' name='tp' value='".$buyer[0]["tp"]."'>";
        echo "</div>";
    echo "
        <div class='form-group'>
        <label for='minBuy'>Address</label>
        ";
        echo "<input type='text' class='form-control' id='minBuy' placeholder='Enter minimum buying price' name='addr' value='".$buyer[0]["addr"]."'>";
        echo "</div>";
        
    ?>

        
        <button type="submit" class="btn btn-success">Update</button>
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