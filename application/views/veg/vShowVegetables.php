
<!------ Include the above in your HEAD tag ---------->

<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Show vegetables</title>
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

<section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Vegetable Name</th>
                                            <th>Buying Price</th>
                                            <th>Selling Price</th>
                                            <th>Profit</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $this->load->helper('url');
                                        $editLink = site_url('cVegetables/showModify');
                                        $deleteLink = site_url('cVegetables/del');

                                        foreach ($vegs as $veg) 
                                        {
                                            echo "<tr>";
                                            echo "<form method='post' action = '$editLink'>";
                                            
                                            echo "<td> <input type='text' readonly style='background:transparent; border:none; display:none;' class='form-control' name='id' value='".$veg['ID']."'> </td>";
                                            echo "<td> <input type='text' readonly style='background:transparent; border:none;' class='form-control' name='name' value='".$veg['Name']."'> </td>";
                                            echo "<td> <input type='text' readonly style='background:transparent; border:none;' class='form-control' name='priceBuy' value='".$veg['PriceBuy']." RS/='> </td>";
                                            echo "<td> <input type='text' readonly style='background:transparent; border:none;' class='form-control' name='priceSell' value='".$veg['PriceSell']." RS/='> </td>";
                                            echo "<td> <input type='text' readonly style='background:transparent; border:none;' class='form-control' name='profit' value='".$veg['Profit']." RS/='> </td>";
                                            
                                            echo "<td>";
                                            echo "<button type='submit' class='btn btn-danger' formmethod='post' formaction='$deleteLink'>X</btn>"; //delete button
                                            echo "</td>";
                                            echo "<td>";
                                            echo '<button type="submit" class="btn btn-warning">Edit</btn>'; //edit button
                                            echo "</td>";

                                            
                                            echo "</form>";
                                            echo "</tr>";
                                        }
                                        ?>

                                        
                                    </tbody>
                                </table>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
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