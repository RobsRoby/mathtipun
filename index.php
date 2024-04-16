 <?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'mathtipun';
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

  session_start();
        If(empty($_SESSION['visibility'])){
          $visibility="";
          $invisible="display:none;";
          $_SESSION['visibility']=$invisible;
        }else{
          $visibility = $_SESSION['visibility'];
        } 
  If (empty($_GET['grade'])){
    If(empty($_SESSION['grade'])){
      $grade= 7;
      $_SESSION['grade']=$grade;
    }else{
      $grade= $_SESSION['grade'];  
    }

  }else{
      $_SESSION['grade']= $_GET['grade'];
      $grade= $_SESSION['grade'];
  }

  If (empty($_GET['topic'])){
    If(empty($_SESSION['topic'])){
      $image_dir = "images/GRADE 7/Mathematics/topic/";
      $_SESSION['topic']= $image_dir;
    }else{
      $image_dir=$_SESSION['topic'];
    }
   
  }else{
    $_SESSION['topic']=$_GET['topic'];
    $image_dir=$_SESSION['topic'];
  }

  If (empty($_GET['dir'])){
    If(empty($_SESSION['dir'])){
      $pergradedir = 'images/GRADE 7/Mathematics';
      $_SESSION['dir']= $pergradedir;
    }else{
      $pergradedir=$_SESSION['dir'];
    }
   
  }else{
    $_SESSION['dir']=$_GET['dir'];
    $pergradedir=$_SESSION['dir'];
  }

            $myfile = fopen("assets/xml/links.html", "w") or die("Unable to open file!");
          $xmlString = " <pages>
          ";
          $searchresult = $conn->query("SELECT * FROM content");
          while($row = mysqli_fetch_array($searchresult, MYSQLI_ASSOC)) { 
            $topicsearch = $row['topic'];
            $wheretopicsearch = $row['wheretopic'];
            $dirsearch = $row['dir'];
            $contentsearch = $row['content'];
            $pagesearch = $row['page'];
            $gradesearch = $row['grade'];
            $imagesearch = $row['image'];
            $imagesearch = str_replace('.jpg', "", $imagesearch);
            $imagesearch = str_replace('.png', "", $imagesearch);
            $xmlString .= "
            <link>
            <title>Grade $gradesearch | $topicsearch - $imagesearch </title>
            <content>$contentsearch</content>
            <url>http://localhost/MATH%C3%8DPUN/site/index.php?dir=$dirsearch&amp;topic=$wheretopicsearch&amp;grade=$gradesearch&amp;page=$pagesearch</url>
            </link>";
          }

          $xmlString .= " </pages> ";
          fwrite($myfile, $xmlString);
          fclose($myfile);
  ?>  

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mathtipun</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Button-Hover-Animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/sidebarmenu.css">
    <link rel="stylesheet" href="assets/css/zoompic.css">
    <link rel="stylesheet" href="assets/css/pagination.css">
    <link rel="stylesheet" href="assets/css/divlivesearch.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="shortcut icon" href="assets/img/M logo.png">
</head>
  <style type="text/css">
       .firstmodal {
        <?php echo $visibility; ?>
        position: absolute;
        z-index: 100;
        overflow: visible;
        visibility: visible;
        opacity: 0.90;
            }
        . {
        <?php echo $visibility; ?>
        position: absolute;
        z-index: 100;
        overflow: visible;
        visibility: visible;
        opacity: 0.90;
            }
</style>
<body style="background: #959EC9;">
   <div id="myModal" class="firstmodal" style="background: #959EC9;padding-right: 5vw;padding-left: 5vw;">
            <div style="width: 100%;height: 100%;background: #959EC9;opacity: 1;padding-left: 4vw;padding-right: 4vw;padding-bottom: 4vw;padding-top: 20vw;">
                <div class="row" style="padding: 4vw;height: 55vw;">
                    <div class="col"><img src="assets/img/LogoLul.png" style="width: 100%;">
                        <h1 class="text-center" style="color: #28264C;font-family: Quicksand, sans-serif;font-size: 3.1vw;transform: translateY(-3px);"><strong>A Digital Compendium for Mathematical Formulae</strong><br></h1>
                    </div>
                </div>
                <div class="row" style="margin-top: 2vw;">
                    <div class="col">
                        <h1 style="font-size: 4vw;color: #A40033;"><strong>Objective</strong></h1>
                        <p style="font-size: 2vw;margin-top: -3vw;"><br>MathTípun aims to collect every available formula in Angeles City Science High School (ACSci) from grade seven up to twelve in order to be a digital learning resource for the students. Moreover, it also aims to aid teachers in developing and widening their teaching materials.<br><br></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1 style="font-size: 4vw;color: #A40033;padding-bottom: 1vw;text-align: left;"><strong>The MathTipun Team</strong></h1><!-- Start: People -->
                        <div class="row people">
                            <div class="col-md-6 col-lg-4 item" style="width: 50%;">
                                <div class="box" style="text-align: center;"><img class="rounded-circle" src="assets/img/IMG_2175-removebg-preview.png" style="background:white;text-align: center;height: 25vw;">
                                    <h3 class="name" style="font-size: 2vw;font-family: Quicksand, sans-serif;"><strong>Arias, Yver Richardson M.</strong></h3>
                                    <p class="text-break title" style="font-family: Quicksand, sans-serif;font-size: 1.4vw;">yverrichardson.arias@depedangelescity.com</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 item" style="width: 50%;">
                                <div class="box" style="text-align: center;"><img class="rounded-circle" src="assets/img/IMG_2174-removebg-preview.png" style="background:white;text-align: center;height: 25vw;">
                                    <h3 class="name" style="font-size: 2vw;font-family: Quicksand, sans-serif;"><strong>Concengco, Kent Danielle L.</strong></h3>
                                    <p class="text-break title" style="font-family: Quicksand, sans-serif;font-size: 1.4vw;">kentdanielle.concengco@depedangelescity.com</p>
                                </div>
                            </div>
                        </div><!-- End: People -->
                        <!-- Start: People -->
                        <div class="row people">
                            <div class="col-md-6 col-lg-4 item" style="width: 50%;">
                                <div class="box" style="text-align: center;"><img class="rounded-circle" src="assets/img/IMG_2179-removebg-preview.png" style="background:white;text-align: center;height: 25vw;">
                                    <h3 class="name" style="font-size: 2vw;font-family: Quicksand, sans-serif;"><strong>Gatbonton, Gabriel Alfonso M.</strong></h3>
                                    <p class="text-break title" style="font-family: Quicksand, sans-serif;font-size: 1.4vw;">gabrielalfonso.gatbonton@depedangelescity.com</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 item" style="width: 50%;">
                                <div class="box" style="text-align: center;"><img class="rounded-circle" src="assets/img/IMG_2176-removebg-preview.png" style="background:white; text-align: center;height: 25vw;">
                                    <h3 class="name" style="font-size: 2vw;font-family: Quicksand, sans-serif;"><strong>Manaloto, Robymar.Louise C.</strong></h3>
                                    <p class="text-break title" style="font-family: Quicksand, sans-serif;font-size: 1.4vw;">robymarlouise.manaloto@depedangelescity.com</p>
                                </div>
                            </div>
                        </div><!-- End: People -->
                        <!-- Start: People -->
                        <div class="row people" style="margin: 2vw;">
                            <div class="col-md-6 col-lg-4 item" style="width: 50%;">
                                <div class="box" style="text-align: center;"><img class="rounded-circle" src="assets/img/IMG_2178-removebg-preview.png" style="background:white;text-align: center;height: 25vw;">
                                    <h3 class="name" style="font-size: 2vw;font-family: Quicksand, sans-serif;"><strong>Velasquez, Jan Gabriel Sebastian P.</strong></h3>
                                    <p class="text-break title" style="font-family: Quicksand, sans-serif;font-size: 1vw;">jangabriel.velasquez@depedangelescity.com</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 item" style="width: 50%;">
                                <div class="box" style="text-align: center;"><img class="rounded-circle" src="assets/img/IMG_2180-removebg-preview.png" style="background:white;text-align: center;height: 25vw;">
                                    <h3 class="name" style="font-size: 2vw;font-family: Quicksand, sans-serif;"><strong>Villareal, Ivan Genesis D.</strong></h3>
                                    <p class="text-break title" style="font-family: Quicksand, sans-serif;font-size: 1.4vw;">genesis.villareal@depedangelescity.com</p>
                                </div>
                            </div>
                        </div><!-- End: People -->
                        <!-- Start: People -->
                        <div class="row people" style="margin: 2vw;">
                            <div class="col-md-6 col-lg-4 item" style="width: 100%;">
                                <div class="box" style="text-align: center;"><img class="rounded-circle" src="assets/img/IMG_2181-removebg-preview.png" style="background:white;text-align: center;height: 25vw;">
                                    <h3 class="name" style="font-size: 2vw;font-family: Quicksand, sans-serif;"><strong>Medina, Katherine Ysabelle B.</strong></h3>
                                    <p class="text-break title" style="font-family: Quicksand, sans-serif;font-size: 1.4vw;">katherineysabelle.medina@depedangelescity.com</p>
                                </div>
                            </div>
                        </div><!-- End: People -->
                    </div>
                </div>
                <div class="row" style="margin-top: 2vw;">
                    <div class="col">
                        <h1 style="font-size: 4vw;color: #A40033;padding-bottom: 1vw;"><strong>References</strong></h1><!-- Start: best carousel slide -->
                        <section id="carousel">
                            <!-- Start: Carousel Hero -->
                            <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="transform: scale(1);">
                                <div class="carousel-inner" style="border-radius: 7px;">
                                    <div class="carousel-item">
                                        <div class="bg-light border rounded border-light pulse animated hero-technology carousel-hero jumbotron py-5 px-4" style="background: url(&quot;assets/img/Sources-3.png&quot;) center / contain no-repeat, rgb(248, 249, 250);height: 750px;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="bg-light border rounded border-light pulse animated hero-technology carousel-hero jumbotron py-5 px-4" style="background: url(&quot;assets/img/Sources-4.png&quot;) center / contain no-repeat, rgb(248, 249, 250);height: 750px;"></div>
                                    </div>
                                    <div class="carousel-item active">
                                        <div class="bg-light border rounded border-light pulse animated hero-technology carousel-hero jumbotron py-5 px-4" style="background: url(&quot;assets/img/Sources-1.png&quot;) center / contain no-repeat, rgb(248, 249, 250);height: 750px;"></div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="bg-light border rounded border-light pulse animated hero-technology carousel-hero jumbotron py-5 px-4" style="background: url(&quot;assets/img/Sources-2.png&quot;) center / contain no-repeat, rgb(248, 249, 250);height: 750px;"></div>
                                    </div>
                                </div>
                                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" style="background: transparent;color: rgb(0,0,0);"></span><span class="visually-hidden" style="color: rgb(0,0,0);">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                                <ol class="carousel-indicators" style="background: rgba(149,158,201,0);margin-bottom: -22px;">
                                    <li data-bs-target="#carousel-1" data-bs-slide-to="2" class="active"></li>
                                    <li data-bs-target="#carousel-1" data-bs-slide-to="3"></li>
                                    <li data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
                                    <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                                    
                                    
                                </ol>
                            </div><!-- End: Carousel Hero -->
                        </section><!-- End: best carousel slide -->
                    </div>
                </div>
                <div class="row" style="margin-top: 2vw;">
                    <div class="col" style="text-align: center;padding: 3vw;">
                        <!-- Start: Button Hover Animate --><button class="btn switchhover1" type="button" style="background: #A40033;font-family: Quicksand, sans-serif;border-radius: 3px;color: rgb(255, 255, 255);">Continue</button><!-- End: Button Hover Animate -->
                    </div>
                </div>
            </div>
    </div>
    <script>
        var firstmodal = document.getElementById("myModal");
        var close = document.getElementsByClassName("btn switchhover1")[0];
        close.onclick = function() {
          firstmodal.style.display = "none";
        }
    </script>



    <div style="background: #4E5174;">
        <div class="row" style="width: 100%;height: 6vw;">
            <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 col-xxl-3 d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center"><img class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" src="assets/img/LogoLul.png" width="80%"></div>
            <div class="col d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center align-items-xxl-center" style="padding-left: 3vw;">

                  <script>
                  function showResult(str) {
                    if (str.length==0) {
                      document.getElementById("livesearch").innerHTML="";
                      return;
                    }
                    var xmlhttp=new XMLHttpRequest();
                    xmlhttp.onreadystatechange=function() {
                      if (this.readyState==4 && this.status==200) {
                        document.getElementById("livesearch").innerHTML=this.responseText;
                        var displaysearch = document.getElementById("livesearch");
                        displaysearch.style.display = "visible";
                      }
                    }
                    xmlhttp.open("GET","livesearch.php?q="+str,true);
                    xmlhttp.send();
                  }
                  </script>
                    
                    <input type="search" id="search" name="search" onkeyup="showResult(this.value)" style="height: 3.5vw;width: 70%;background: url(&quot;assets/img/search.png&quot;) left / contain no-repeat, #28264C;text-indent: 5%;background-size: 3%;background-position: 1% 50%;border-radius: 7px;color: #E8EAE7;" placeholder="Search for formulas, keywords, or phrases....">
                    <div class="suggestionsearch"  id="livesearch"></div>
                    </div>
            </div>
        </div>
    </div>
    <div>



        <div class="row g-0" style="width: 100%;height: auto;">
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3" style="padding: 2vw;padding-top: 2vw;height: auto;">
                <div><nav class="❤">
  <ul class="🗂" >
    <li class="headingtitle"><a style="font-size: 2.5vw;color:#E8EAE7;"><b>Formulas</b></a></li>
    <li class="<?php if($grade == 7){echo '✉';}?>"><a href="#">7th Grade</a>
      <ul>
        <li><a href="#"><b>Mathematics</b></a>
          <ul>
                    <?php
                      $dirgrade7 = 'images/GRADE 7/Mathematics';
                      $directories = glob($dirgrade7 . '/*', GLOB_ONLYDIR);
                      $directories = str_replace($dirgrade7."/", "", $directories);
                      foreach( $directories as $folder) {
                          echo "<li><a href='index.php?dir=".$dirgrade7."&topic=".$dirgrade7."/".$folder."/"."&grade=7'>".$folder."</a></li>";
                      }
                    ?>
          </ul>
        </li>
      </ul>
    </li>

    <li class="<?php if($grade == 8){echo '✉';}?>"><a href="#">8th Grade</a>
      <ul>
        <li><a href="#"><b>Mathematics</b></a>
          <ul>
                    <?php
                      $dirgrade8 = 'images/GRADE 8/Mathematics';
                      $directories = glob($dirgrade8 . '/*', GLOB_ONLYDIR);
                      $directories = str_replace($dirgrade8."/", "", $directories);
                      foreach( $directories as $folder) {
                          echo "<li><a href='index.php?dir=".$dirgrade8."&topic=".$dirgrade8."/".$folder."/"."&grade=8'>".$folder."</a></li>";
                      }
                    ?>
          </ul>
        </li>
      </ul>
    </li>

     <li class="<?php if($grade == 9){echo '✉';}?>"><a href="#">9th Grade</a>
      <ul>
        <li><a href="#"><b>Mathematics</b></a>
          <ul>
                    <?php
                      $dirgrade9 = 'images/GRADE 9/Mathematics';
                      $directories = glob($dirgrade9 . '/*', GLOB_ONLYDIR);
                      $directories = str_replace($dirgrade9."/", "", $directories);
                      foreach( $directories as $folder) {
                          echo "<li><a href='index.php?dir=".$dirgrade9."&topic=".$dirgrade9."/".$folder."/"."&grade=9'>".$folder."</a></li>";
                      }
                    ?>
          </ul>
        </li>
        <li><a href="#"><b>Consumer Chemistry</b></a>
          <ul>
                    <?php
                      $dirgrade9 = 'images/GRADE 9/Consumer Chemistry';
                      $directories = glob($dirgrade9 . '/*', GLOB_ONLYDIR);
                      $directories = str_replace($dirgrade9."/", "", $directories);
                      foreach( $directories as $folder) {
                          echo "<li><a href='index.php?dir=".$dirgrade9."&topic=".$dirgrade9."/".$folder."/"."&grade=9'>".$folder."</a></li>";
                      }
                    ?>
          </ul>
        </li>
        
      </ul>
    </li>

     <li class="<?php if($grade == 10){echo '✉';}?>"><a href="#">10th Grade</a>
      <ul>
        <li><a href="#"><b>Mathematics</b></a>
          <ul>
                    <?php
                      $dirgrade10 = 'images/GRADE 10/Mathematics';
                      $directories = glob($dirgrade10 . '/*', GLOB_ONLYDIR);
                      $directories = str_replace($dirgrade10."/", "", $directories);
                      foreach( $directories as $folder) {
                          echo "<li><a href='index.php?dir=".$dirgrade10."&topic=".$dirgrade10."/".$folder."/"."&grade=10'>".$folder."</a></li>";
                      }
                    ?>
          </ul>
        </li>
        <li><a href="#"><b>Electronics</b></a>
          <ul>
                    <?php
                      $dirgrade10 = 'images/GRADE 10/Electronics';
                      $directories = glob($dirgrade10 . '/*', GLOB_ONLYDIR);
                      $directories = str_replace($dirgrade10."/", "", $directories);
                      foreach( $directories as $folder) {
                          echo "<li><a href='index.php?dir=".$dirgrade10."&topic=".$dirgrade10."/".$folder."/"."&grade=10'>".$folder."</a></li>";
                      }
                    ?>
          </ul>
        </li>
      </ul>
    </li>

   <li class="<?php if($grade == 11){echo '✉';}?>"><a href="#">11th Grade</a>
      <ul>
        <li><a href="#"><b>General Mathematics</b></a>
          <ul>
                    <?php
                      $dirgrade11 = 'images/GRADE 11/General Mathematics';
                      $directories = glob($dirgrade11 . '/*', GLOB_ONLYDIR);
                      $directories = str_replace($dirgrade11."/", "", $directories);
                      foreach( $directories as $folder) {
                          echo "<li><a href='index.php?dir=".$dirgrade11."&topic=".$dirgrade11."/".$folder."/"."&grade=11'>".$folder."</a></li>";
                      }
                      ?>
          </ul>
        </li>
        <li><a href="#"><b>Statistics and Probability</b></a>
          <ul>
                    <?php
                      $dirgrade11 = 'images/GRADE 11/Statistics and Probability';
                      $directories = glob($dirgrade11 . '/*', GLOB_ONLYDIR);
                      $directories = str_replace($dirgrade11."/", "", $directories);
                      foreach( $directories as $folder) {
                          echo "<li><a href='index.php?dir=".$dirgrade11."&topic=".$dirgrade11."/".$folder."/"."&grade=11'>".$folder."</a></li>";
                      }
                      ?>
          </ul>
        </li>
        <li><a href="#"><b>Pre-Calculus</b></a>
          <ul>
                    <?php
                      $dirgrade11 = 'images/GRADE 11/Pre-Calculus';
                      $directories = glob($dirgrade11 . '/*', GLOB_ONLYDIR);
                      $directories = str_replace($dirgrade11."/", "", $directories);
                      foreach( $directories as $folder) {
                          echo "<li><a href='index.php?dir=".$dirgrade11."&topic=".$dirgrade11."/".$folder."/"."&grade=11'>".$folder."</a></li>";
                      }
                      ?>
          </ul>
        </li>
        <li><a href="#"><b>Basic Calculus</b></a>
          <ul>
                    <?php
                      $dirgrade11 = 'images/GRADE 11/Basic Calculus';
                      $directories = glob($dirgrade11 . '/*', GLOB_ONLYDIR);
                      $directories = str_replace($dirgrade11."/", "", $directories);
                      foreach( $directories as $folder) {
                          echo "<li><a href='index.php?dir=".$dirgrade11."&topic=".$dirgrade11."/".$folder."/"."&grade=11'>".$folder."</a></li>";
                      }
                      ?>
          </ul>
        </li>
        <li><a href="#"><b>General Chemistry</b></a>
          <ul>
                    <?php
                      $dirgrade11 = 'images/GRADE 11/General Chemistry';
                      $directories = glob($dirgrade11 . '/*', GLOB_ONLYDIR);
                      $directories = str_replace($dirgrade11."/", "", $directories);
                      foreach( $directories as $folder) {
                          echo "<li><a href='index.php?dir=".$dirgrade11."&topic=".$dirgrade11."/".$folder."/"."&grade=11'>".$folder."</a></li>";
                      }
                      ?>
          </ul>
        </li>
      </ul>
    </li>

    <li class="<?php if($grade == 12){echo '✉';}?>"><a href="#">12th Grade</a>
      <ul>
        <li><a href="#"><b>General Physics</b></a>
          <ul>
                    <?php
                      $dirgrade12 = 'images/GRADE 12/General Physics';
                      $directories = glob($dirgrade12 . '/*', GLOB_ONLYDIR);
                      $directories = str_replace($dirgrade12."/", "", $directories);
                      foreach( $directories as $folder) {
                          echo "<li><a href='index.php?dir=".$dirgrade12."&topic=".$dirgrade12."/".$folder."/"."&grade=12'>".$folder."</a></li>";
                      }
                    ?>
          </ul>
        </li>
      </ul>
    </li>

  </ul>
</nav></div>
            </div>
            <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9" style="padding: 2vw;height: 60vw;padding-left: 1vw;">
                <div class="border rounded shadow d-xxl-flex justify-content-xxl-center align-items-xxl-start" style="height: 100%;background:white;padding: 10px;overflow: auto;">
                              <div class="container">       
                                  <input type="checkbox" id="zoomCheck">
                                  <label for="zoomCheck">
                                      <img class="img-fluid" id="imagesrc" style="width: 70vw;height: auto;" alt="Formula" src="">
                                  </label>
                              </div>
                </div>
            </div>
        </div>
        <div class="row g-0" style="width: 100%;height: auto;">
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3" style="padding: 2vw;padding-top: 2vw;height: auto;"></div>
            <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9" style="height: auto;padding-right: 2vw;padding-left: 2vw;">
                <div class="d-xxl-flex align-items-xxl-center" style="height: 150px;text-align: center;">

                         <!-- MAIN CONTENT -->
                          <div class="pagination"> 
                          <?php
                          // How many images should be shown on each apge?
                          $limit = 1; 
                           
                          // How many adjacent pages should be shown on each side?
                          $adjacents = 3;
                           
                          // This is the name of file ex. I saved this file as index.php.
                          $targetpage = "index.php";
                           
                          // All iamges holder, defalut value is empty
                          $allImages = [];
                        
                          // Iterator over the directory
                          $dir = new DirectoryIterator(dirname(__FILE__).DIRECTORY_SEPARATOR.$image_dir);
                           
                          // Iterator over the files and push jpg and png images to $allImages array.
                          foreach ($dir as $fileinfo) {
                              if ($fileinfo->isFile() && in_array($fileinfo->getExtension(),array('jpg','png'))) { 
                                array_push($allImages,$image_dir.$fileinfo->getBasename());
                              }
                            }
                           
                          // total number of images
                          $total_pages = count($allImages);
                           
                          //how many items to show per page
                          $page = isset($_GET['page']) ? $_GET['page'] : 1;
                           
                          //  if no page var is given, set start to 0
                          $start = $page ?  (($page - 1) * $limit) : 0; 
                           
                           
                          $images = array_slice( $allImages, $start, $limit );;
                           
                          /* Setup page vars for display. */
                          if ($page == 0) $page = 1; //if no page var is given, default to 1.
                          $prev = $page - 1; //previous page is page - 1
                          $next = $page + 1; //next page is page + 1
                          $lastpage = ceil($total_pages/$limit); //lastpage is = total pages / items per page, rounded up.
                          $lpm1 = $lastpage - 1; //last page minus 1
                           
                          $pagination = "";
                          if($lastpage > 1)
                          { 
                            $pagination .= "<div class=\"pagination\">";
                            //previous button
                            if ($page > 1) 
                              $pagination.= "<a href=\"$targetpage?page=$prev\">&laquo;</a>";
                            else
                              $pagination.= "<a href=\"$targetpage?page=$prev\">&laquo;</a>"; 
                            
                            //pages 
                            if ($lastpage < 7 + ($adjacents * 2)) //not enough pages to bother breaking it up
                            { 
                              for ($counter = 1; $counter <= $lastpage; $counter++)
                              {
                                if ($counter == $page)
                                  $pagination.= "<a class=\"current\">$counter</a>";
                                else
                                  $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>"; 
                              }
                            }
                            elseif($lastpage > 5 + ($adjacents * 2)) //enough pages to hide some
                            {
                              //close to beginning; only hide later pages
                              if($page < 1 + ($adjacents * 2)) 
                              {
                                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                                {
                                  if ($counter == $page)
                                    $pagination.= "<a class=\"current\">$counter</a>";
                                  else
                                    $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>"; 
                                }
                                $pagination.= "...";
                                $pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
                                $pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>"; 
                              }
                              //in middle; hide some front and some back
                              elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
                              {
                                $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
                                $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
                                $pagination.= "...";
                                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                                {
                                  if ($counter == $page)
                                    $pagination.= "<a class=\"current\">$counter</a>";
                                  else
                                    $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>"; 
                                }
                                $pagination.= "...";
                                $pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
                                $pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>"; 
                              }
                              //close to end; only hide early pages
                              else
                              {
                                $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
                                $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
                                $pagination.= "...";
                                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                                {
                                  if ($counter == $page)
                                    $pagination.= "<a class=\"current\">$counter</a>";
                                  else
                                    $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>"; 
                                }
                              }
                            }
                            
                            //next button
                            if ($page < $counter - 1) 
                              $pagination.= "<a href=\"$targetpage?page=$next\">&raquo;</a>";
                            else
                              $pagination.= "<a href=\"$targetpage?page=$prev\">&raquo;</a>";
                            $pagination.= "</div>\n"; 
                          }
                            

                          if(count($images) >= 1) {
                              foreach($images as $image) { 
                                echo "<script>document.getElementById('imagesrc').src='".$image."';</script>";
                            }
                          } else {
                            echo 'No images';
                          }
                          echo $pagination;
                          ?>
                    </div>
                          <!-- MAIN CONTENT -->

                </div>
            </div>
        </div>
    </div>


   

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>
</body>

</html>