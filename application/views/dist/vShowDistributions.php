
<!------ Include the above in your HEAD tag ---------->

<html>
<head>
<title>Show distribution</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                            <h3 align='center'><?php echo $buyer."'s orders of the vegetable ".$vegetable; ?></h3>
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Quantity (KG)</th>
                                            <th>Deploy Date</th>
                                            <th>Charge</th>
                                            <th>Profit</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        foreach ($distributions as $distribution) 
                                        {
                                            echo "<tr>";
                                            echo "<td>".$distribution['quantity']." kg</td>";
                                            echo "<td>".$distribution['deployDate']."</td>";
                                            echo "<td>".$distribution['charge']." Rs/=</td>";
                                            echo "<td>".$distribution['profit']." Rs/=</td>";
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