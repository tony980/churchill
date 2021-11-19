<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CHURCHILL SHOW-ADMIN</title>
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
    <body >
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top " id="mainNav" >
            <div class="container-fluid "   >
             <a class="navbar-brand" >churchill show</a>
               
               


               
                
            </div>
              
        </nav>
        <!-- Masthead-->
        <header class="masthead  text-white text-center" " style="background-image:url('assets/image4.jpg') ; height:auto;">
 <div class="u-clearfix u-sheet u-sheet-1">
   <div class="container mt-5">


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
            $title1 = $rows['event'];
            $vip1 = $rows['vip'];
            $regular1= $rows['regular'];
            
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
            $vip2= $rows['vip'];
            $regular2= $rows['regular'];
            
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
            $vip3 = $rows['vip'];
            $regular3= $rows['regular'];
            
        ?>

       
       
      

        <?php
        }
    ?>
      
           
              <h2 class="text-uppercase" style="text-align: center;"><u>Update Events</u></h2>
               
               
               <a href="modifyevent1.php"><button class="btn btn-secondary text-uppercase form-control" name="submit" style="border-width: 2px;border-color: white; margin-bottom: 15px;margin-top: 15px;"><b>update event1(<?php echo $title1; ?> Edition)</b></button></a></a>
                <a href="modifyevent2.php"><button class="btn btn-secondary text-uppercase form-control" name="submit" style="border-width: 2px;border-color: white;margin-bottom: 15px;"><b>update event2(<?php echo $title2; ?> Edition)</b></button></a>
               <a href="modifyevent3.php"> <button class="btn btn-secondary text-uppercase form-control" name="submit" style="border-width: 2px;border-color: white;"><b>update event3(<?php echo $title3; ?> Edition)</b></button></a>
            
          
   </div>

</div>


        </header>
       
        
       
       
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
