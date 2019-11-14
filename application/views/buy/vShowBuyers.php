
<!------ Include the above in your HEAD tag ---------->


<html>

<head>
<title>Show buyer</title>

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
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Telephone Number</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        $this->load->helper('url');
                                        $editLink = site_url('cBuyers/showModify');
                                        $deleteLink = site_url('cBuyers/del');

                                        foreach ($buyers as $buyer) 
                                        {
                                            // echo "<tr>";
                                            // echo "<td>".$buyer['Name']."</td>";
                                            // echo "<td>".$buyer['TP']."</td>";
                                            // echo "<td>".$buyer['Address']."</td>";


                                            echo "<tr>";
                                            echo "<form method='post' action = '$editLink'>";
                                            
                                            echo "<td> <input type='text' readonly style='background:transparent; border:none; display:none;' class='form-control' name='id' value='".$buyer['ID']."'> </td>";
                                            echo "<td> <input type='text' readonly style='background:transparent; border:none;' class='form-control' name='name' value='".$buyer['Name']."'> </td>";
                                            echo "<td> <input type='text' readonly style='background:transparent; border:none;' class='form-control' name='tp' value='".$buyer['TP']."'> </td>";
                                            echo "<td> <input type='text' readonly style='background:transparent; border:none;' class='form-control' name='addr' value='".$buyer['Address']."'> </td>";
                                            
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
  background: url('https://i.postimg.cc/TwtYV8xV/46452800-frame-of-vegetables-and-fruits-on-white-background.png') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
</style>


<style>
body {
  background: url('https://i.postimg.cc/1tWn1tDx/image.png') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
</style>