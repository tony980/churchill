<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CHURCHILL SHOW EVENTS</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/logo.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />


         <style type="text/css"> 
        .navbar-brand { 
            display: flex; 
            width: 100%; 
            justify-content: center; 
        } </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top " id="mainNav" >
            <div class="container-fluid "   >
             <a class="navbar-brand" >churchill show</a>
               
               


               
                
            </div>
              
        </nav>
        <!-- Masthead-->
        <header class="masthead  text-white text-center" " style="background-image:url('assets/image4.jpg') ; height:auto;">
<div class="row" style="margin-left: 200px;">
       <div class="card bg-secondary" style="width: 18rem; margin-right: 100px;">
  <img class="card-img-top" src="assets/image2.jpg" alt="Card image cap">
  <?php
        $host ="localhost";
        $uname = "root";
        $pwd = '';
        $db_name = "churchill";

     
        $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
        mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
        $image_query = mysqli_query($result,"SELECT * FROM `event1` WHERE id = 1");
        while($rows = mysqli_fetch_array($image_query))
        {
            $title = $rows['event'];
            $venue = $rows['venue'];
             $city = $rows['city'];
              $vip = $rows['vip'];
               $regular = $rows['regular'];
                $date = $rows['Date'];
        ?>

       
       
      

        <?php
        }
    ?>
    <?php
        $host ="localhost";
        $uname = "root";
        $pwd = '';
        $db_name = "churchill";

     
        $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
        mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
        $image_query = mysqli_query($result,"SELECT * FROM `event2` WHERE id = 1");
        while($rows = mysqli_fetch_array($image_query))
        {
            $title2 = $rows['event'];
            $venue2 = $rows['venue'];
             $city2 = $rows['city'];
              $vip2 = $rows['vip'];
               $regular2= $rows['regular'];
                $date2 = $rows['Date'];
        ?>

       
       
      

        <?php
        }
    ?>



     <?php
        $host ="localhost";
        $uname = "root";
        $pwd = '';
        $db_name = "churchill";

     
        $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
        mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
        $image_query = mysqli_query($result,"SELECT * FROM `events3` WHERE id = 1");
        while($rows = mysqli_fetch_array($image_query))
        {
            $title3 = $rows['event'];
            $venue3 = $rows['venue'];
             $city3 = $rows['city'];
              $vip3 = $rows['vip'];
               $regular3= $rows['regular'];
                $date3= $rows['Date'];
        ?>

       
       
      

        <?php
        }
    ?>
  <div class="card-body">
    <h5 class="card-title text-uppercase"><?php echo $title; ?> Edition</h5>
    <p class="card-text" maxlength="2">Venue:<?php echo $venue; ?><br> City:<?php echo $city; ?><br>VIP: <?php echo $vip; ?>/=<br>Regular:<?php echo $regular; ?>/=<br>Date:<?php echo substr($date, 0,10); ?></p>
    
    <a href="check.php" class="btn btn-danger">BOOK NOW!</a>
  </div>
</div>


 <div class="card bg-secondary" style="width: 18rem; margin-right: 100px;">
  <img class="card-img-top" src="assets/image2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title text-uppercase"><?php echo $title2; ?> Edition</h5>
    <p class="card-text">Venue:<?php echo $venue2; ?><br> City:<?php echo $city2; ?><br> VIP: <?php echo $vip2; ?>/=<br>Regular:<?php echo $regular2; ?>/=<br>Date:<?php echo substr($date2, 0,10); ?></p>
    <a href="check2.php" class="btn btn-danger">BOOK NOW!</a>
  </div>
</div>

<div class="card bg-secondary" style="width: 18rem;  margin-right: 100px;">
  <img class="card-img-top" src="assets/image2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $title3; ?> Edition</h5>
    <p class="card-text" >Venue:<?php echo $venue3; ?><br> City:<?php echo $city3; ?><br> VIP: <?php echo $vip3; ?>/=<br>Regular:<?php echo $regular3; ?>/=<br>Date:<?php echo substr($date3, 0,10); ?></p>
    
    <a href="check3.php" class="btn btn-danger">BOOK NOW!</a>
  </div>
</div>
</div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">HIGHLIGHTS</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/image1.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class=" justify-content-center h-100 w-100">
                                <div class=""></i></div>
                            </div>
                            <img class="img-fluid" src="assets/image3.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/image1.jpg" alt="..." />
                        </div>
                    </div>
                    
                   
                   
                </div>
            </div>
        </section>
        
       
       
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            2215 Nairobi
                            <br />
                            Clar, MO 65243
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About </h4>
                        <p class="lead mb-0">
                            Come with your loved ones & enjoy the moments.
                            
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; churchill 2021</small></div>
        </div>
        <!-- Portfolio Modals-->
       
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>





