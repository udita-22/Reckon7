<?php
include_once("includes/functions.php");
?>
<!DOCTYPE html>
<head>
<title>links</title>
<link rel="shotcuticon" href="assets/img/olx.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../static/CB_LOGO_BW.png">
    <link rel="stylesheet" type="text/css" href="assets/css/home_style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>   
    <title>QueAnstify</title>

<script>

    function getareas(cid){
        $(document).ready(function(){
            $.get("getAreas.php?cid="+cid, function(data, status){
                $("#areaDiv").html(data);
            });
        });
    }

</script>
</head>
<body>

<?php
drawHeader1();
?>

       <!-- Container with form and image -->
    <div class="content">

        <div class="box1">

         <p class="text">Upload and Generate Question and Answers!</p>
         <br> <br>
         <div class="mb-4">
          <a href="/upload"><button type="submit" class="btn btn-lg btn-block" id="button" style="font-size:20px;">Generate</button></a>
        </div>
      </div>   
       <!-- Image Section -->
       <div class="image_div">

          <!-- Image -->
          <img class="image" src="assets/img/home_img.jpg"/>
          </div> 
  </div>
  <br> <br> <br> 
  <div class="text-center">
    <p class="text2">How It Works</p>
    <p class="text3">Nothing can be easier than this</p> 
    <br> 
  </div>
  <div class="content2">
    <ul class="flex-container wrap">
      <li class="flex-item"><img class="image_small" src="../static/11.PNG"/></li>
      <li class="flex-item"><img class="arrow_img" src="../static/arrow.PNG"/> </li>
      <li class="flex-item"><img class="image_small1" src="../static/22.PNG"/></li>
      <li class="flex-item"><img class="arrow_img" src="../static/arrow.PNG"/> </li>
      <li class="flex-item"><img class="image_small1" src="../static/33.PNG"/></li>
    </ul>
  </div>
    <br> <br> 
  <!-- Footer -->
<footer class="text-center text-white" style="background-color:#121B46;">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Text -->
      <section class="mb-4">
        <h3>
          QueAnstify
        </h3>
        <br>
      </section>
      <!-- Section: Text -->
       <!-- Section: Social media -->
       <section class="mb-4">
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/cbigdtuw?lang=en" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/celestialbiscuit/" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://in.linkedin.com/company/celestial-biscuit-igdtuw" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
      </section>
      <!-- Section: Social media -->
  
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #121B46;">
      © 2023 copyright:
      <a class="text-white" href="#!">all right reserved</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>