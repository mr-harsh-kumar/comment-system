 <?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){

    header('Location: login.php');

    exit();   
}
else
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="welcome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="icon" type="image/x-icon" href="data:image/jpeg;base64,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">
     
    <script src="welcome.js"></script>
     <style>
        .carousel-caption {
            background: rgba(0, 0, 0, 0.7);
            padding: 10px;
            color: #fff;
        }
    </style>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<body>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3.9.1/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3.9.2/dist/gsap.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script> -->
   <!-- GSAP library -->
<script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>

<!-- ScrollTrigger plugin -->
<script src="https://unpkg.com/scrolltrigger/scrolltrigger.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>



<h1 id="welcome-head">Welcome <?php echo $_SESSION['username']?></h1>
    
    
<div class="mynav"><nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand"  href="#">
            <div clas="main-heading" id="main-heading">ALL-IN-<span class="one">1 </span>Tutorial</div>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " id="nav1" aria-current="page" href="main1.php">Home</a>
              </li>
             
              <li class="nav-item">
                <a id="nav3" class="nav-link" href="logout.php">Log out</a>
              </li>
             </ul>
          </div>
        </div>
      </nav>
    </div>
<br>
   <div class="intro">Here ,we upload our resources.</div>
   <div class="intro">You can access more resources by joining our course.</div>
   

<div id="notes-para">
   <h3 id="notes">NOTES</h3> 
<div class="container">
  <!-- <h2>Carousel Example</h2> -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="data:image/png;base64,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"  style="width:100%;">
        <div class="carousel-caption">
         <h3><a class="title" href="https://www.webpages.uidaho.edu/~stevel/504/Python%20Notes.pdf">Python</a></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius odio, molestiae quibusdam voluptatem sit eos ab pariatur aliquam sunt officia dolor iure quas! Animi ipsa quia culpa? Commodi, exercitationem facere!</p>
        </div>
      </div>

      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAHVtjgJGF3QZ0WS3ON6c8DsNnzRogub7C0w&usqp=CAU"  style="width:100%;">
        <div class="carousel-caption">
         <h3><a  class="title" href="https://www.tutorialspoint.com/javascript/javascript_tutorial.pdf">Javascript</a></h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad officia repudiandae odio quo tempore unde numquam pariatur optio deleniti alias, esse natus cum nisi quibusdam. Dolorum sed porro natus aliquam. Nobis?</p>
        </div>
      </div>
    
      <div class="item">
        <img src="https://e0.pxfuel.com/wallpapers/756/269/desktop-wallpaper-php-full-stack-developer-thumbnail.jpg"  style="width:100%;">
        <div class="carousel-caption">
         <h3><a  class="title" href="https://www.tutorialspoint.com/php/php_tutorial.pdf">PHP</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quam accusantium quod esse ducimus, earum omnis a odio eius vel dolores dolorum placeat. Eligendi quae voluptas fuga illo unde magnam officia cumque?</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

<div id="projects-para">
   <h3 id="projects">PROJECTS</h3> 
<div class="container">
  <!-- <h2>Carousel Example</h2> -->
  <div id="mySecondCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#mySecondCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#mySecondCarousel" data-slide-to="1"></li>
      <li data-target="#mySecondCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="data:image/png;base64,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"  style="width:100%;">
        <div class="carousel-caption">
         <h3><a class="title" href="https://medium.com/coders-camp/60-python-projects-with-source-code-919cd8a6e512">Python</a></h3>
          <p>Lorem  aliquam sunt officia dolor iure quas! Animi ipsa quia culpa? Commodi, exercitationem facere!</p>
          <p>You can view our projects for beginners as well as advance developer's with scource code.</p>
        </div>
      </div>

      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAHVtjgJGF3QZ0WS3ON6c8DsNnzRogub7C0w&usqp=CAU"  style="width:100%;">
        <div class="carousel-caption">
         <h3><a  class="title" href="https://www.interviewbit.com/blog/javascript-projects/">Javascript</a></h3>
          <p>Lorem ipsum dolor, sit amet c Lorem ipsum dolor, sit amet consectetur adipisicing elit.  unde numquam pariatur optio deleniti alias, esse natus cum nisi quibusdam. Dolorum sed porro natus aliquam. Nobis?</p>
        </div>
      </div>
    
      <div class="item">
        <img src="https://e0.pxfuel.com/wallpapers/756/269/desktop-wallpaper-php-full-stack-developer-thumbnail.jpg"  style="width:100%;">
        <div class="carousel-caption">
         <h3><a  class="title" href="https://www.sourcecodester.com/php-project">PHP</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quam accusantium quod esse ducimus, earum omnis a odio eius vel dolores dolorum placeat. Eligendi quae voluptas fuga illo unde magnam officia cumque?</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#mySecondCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#mySecondCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>



<div id="imp-ques-para">
   <h3 id="imp-ques">IMPORTANT QUESTIONS</h3> 
<div class="container">
  <!-- <h2>Carousel Example</h2> -->
  <div id="myThirdCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myThirdCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myThirdCarousel" data-slide-to="1"></li>
      <li data-target="#myThirdCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="data:image/png;base64,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"  style="width:100%;">
        <div class="carousel-caption">
         <h3><a class="title" href="https://www.simplilearn.com/tutorials/python-tutorial/python-interview-questions">Python</a></h3>
          <p>Lorem  aliquam sunt officia dolor iure quas! Animi ipsa quia culpa? Commodi, exercitationem facere!</p>
          <p>You can view our projects for beginners as well as advance developer's with scource code.</p>
        </div>
      </div>

      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAHVtjgJGF3QZ0WS3ON6c8DsNnzRogub7C0w&usqp=CAU"  style="width:100%;">
        <div class="carousel-caption">
         <h3><a  class="title" href="https://www.interviewbit.com/javascript-interview-questions/">Javascript</a></h3>
          <p>Lorem ipsum dolor, sit amet c Lorem ipsum dolor, sit amet consectetur adipisicing elit.  unde numquam pariatur optio deleniti alias, esse natus cum nisi quibusdam. Dolorum sed porro natus aliquam. Nobis?</p>
        </div>
      </div>
    
      <div class="item">
        <img src="https://e0.pxfuel.com/wallpapers/756/269/desktop-wallpaper-php-full-stack-developer-thumbnail.jpg"  style="width:100%;">
        <div class="carousel-caption">
         <h3><a  class="title" href="https://intellipaat.com/blog/interview-question/php-interview-questions/">PHP</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quam accusantium quod esse ducimus, earum omnis a odio eius vel dolores dolorum placeat. Eligendi quae voluptas fuga illo unde magnam officia cumque?</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myThirdCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myThirdCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
</body>
</html>


<?php include "footer.php" ?>



<!-- }
?> -->