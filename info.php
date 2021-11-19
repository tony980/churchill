


<!DOCTYPE html>
<html lang="en">
    <head>


        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CHURCHILL SHOW </title>
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
            <form action="" method="post" name="myform" onkeyup="calculate()">
<div class="form-group">
<div class="col-lg-12 ">
  <div class="row" style="margin-bottom: 10px;">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="First Name">First Name:</label>
    </div>
    <div class="col-lg-6">
         <input type="text" class="form-control" id="First" placeholder="First Name" name="First" required=""> 
    </div>
</div>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Last Name">Last Name:</label>
    </div>
    <div class="col-lg-6">
         <input type="text" class="form-control" id="Last" placeholder="last Name" name="Last" required=""> 
    </div>
</div>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="phone no">Phone No:</label>
    </div>
    <div class="col-lg-6">
         <input type="text" class="form-control" id="Phone" placeholder="Phone No" name="Phone" required=""> 
    </div>
</div>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Email">Email:</label>
    </div>
    <div class="col-lg-6">
         <input type="text" class="form-control" id="Email" placeholder="Email" name="Email" required=""> 
    </div>
</div>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Seat">Seat Option:</label>
    </div>
    <div class="col-lg-2">
          
      <label><input type="radio" name="r1" value="10" onClick="document.getElementById('hidfield').value=this.value"/>VIP </label>
    
      <label><input type="radio"  name="r1" value="45" onClick="document.getElementById('hidfield').value=this.value"/>
    Regular</label>
    
    </div>
</div>


 <input type="text" name="sum" value="" id="hidfield"  />
<div class="row" style="margin-bottom: 10px;">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Seat Numbers">Seat Numbers:</label>
    </div>
    <div class="col-lg-6">
       
       <select name="abc" class="  form-control input-lg" onChange="fun(this.value)">
  
  <option value="1" selected="active"> one </option>
  <option value="2"> Two</option>
  <option value="3"> Three </option>
   <option value="4"> Four </option>
    <option value="5"> Five </option>
</select>
    
</div>
</div>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Price">Price:</label>
    </div>
    <div class="col-lg-6">
         <input type="text" class="form-control" id="Price" placeholder="Price" name="Price" readonly=""> 
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
        
       
       </form>
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




<script type="text/javascript">



function fun(val)
{
    var num1 = parseInt(document.getElementById("hidfield").value);
  document.getElementById("Price").value = val * num1;
}
</script>


<input type="text" name="ansval" id="ansval">