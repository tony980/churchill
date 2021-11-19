


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
            $title = $rows['event'];
            $vip = $rows['vip'];
            $regular= $rows['regular'];
            
        ?>

       
       
      

        <?php
        }
    ?>


             <h2  class="text-uppercase" style="text-align: center;"><u><?php echo $title; ?> Edition</u></h2>
            <form action="data2.php" method="post" name="myform" onkeyup="calculate()">
<div class="form-group">
<div class="col-lg-12 ">
  <div class="row" style="margin-bottom: 10px;">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="First Name">First Name:</label>
    </div>
    <div class="col-lg-6">
         <input type="text" class="form-control bg-dark text-white text-left" id="First" placeholder="First Name" name="First" required=""> 
    </div>
</div>



<div class="row" style="margin-bottom: 10px;">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Last Name">Last Name:</label>
    </div>
    <div class="col-lg-6">
         <input type="text" class="form-control bg-dark text-white text-left" id="Last" placeholder="last Name" name="Last" required=""> 
    </div>
</div>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="phone no">Phone No:</label>
    </div>
    <div class="col-lg-6">
         <input type="text" class="form-control bg-dark text-white text-left" id="Phone" placeholder="Phone No" name="Phone" required=""> 
    </div>
</div>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Email">Email:</label>
    </div>
    <div class="col-lg-6">
         <input type="email" class="form-control bg-dark text-white text-left" id="Email" placeholder="Email" name="Email" required=""> 
    </div>
</div>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Seat">Seat Option:</label>
    </div>
    <div class="col-lg-6">
          <select name="qb" id="qb" class="  form-select input-lg bg-dark text-white text-left" onChange="document.getElementById('box2').value=this.value; calculate();" data-text="inptxt1" required="">
            <option   selected="active"></option>
  
  <option value=<?php echo $vip; ?>   data-price="vip"> vip</option>
  <option value=<?php echo $regular; ?>   data-price="regular"> regular</option>
  
</select>
    
    
    </div>
</div>
</div>



 
 <input  type="text" id="box1" type="text" oninput="calculate();" />
 
<input type="text"  id="box2" type="text" name="box2" oninput="calculate();" />
<input type="hidden"  id="result" />
<input type="text"  id="dt" />
 
  <input type="text" value="$0.00" name="inptxt1" id="inptxt1" readonly/>
 <script>


    function calculate() {
        var myBox1 = document.getElementById('box1').value; 
        var myBox2 = document.getElementById('box2').value;
        var result = document.getElementById('Price'); 
        var myResult = myBox1 * myBox2;
        var BB=document.getElementById('box2').text;
          document.getElementById('Price').value = myResult;
          
        var speed = $("#qb").data("cost");
         document.getElementById('dt').value = myResult;

    }
</script>

<div class="row" style="margin-bottom: 10px;">
    <div class="col-lg-1">
        <label class="control-label col-xs-2" for="Seat Numbers">Seat Numbers:</label>
    </div>
    <div class="col-lg-6">
       
       <select name="abc" id="abc" class="form-select input-lg bg-dark text-white text-left" onChange="document.getElementById('box1').value=this.value; calculate();" required="">
   <option   selected="active"></option>
  <option value="1" > one </option>
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
         <input type="text" class="form-control bg-dark text-white text-left" id="Price" placeholder="Price" name="Price" readonly=""> 
    </div>
     
</div>

</div>


<div class="row" style="margin-bottom: 10px;">
     <div class="col-lg-1">
     </div>
    <div class="col-lg-6">
<button class="btn btn-success text-uppercase form-control" name="submit" style="border-width: 2px;border-color: white;"><b>BOOK SEATS</b></button>

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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </body>




</html>










    <script type="text/javascript">
        

        $(function(){
    $('select[name="qb"]').change(function(){
        var textId= $(this).data('text');
        var price = $( "option:selected" , this).data('price');
        $('#'+textId).val(price);  
    });
});
    </script>