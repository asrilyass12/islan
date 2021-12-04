<?php
include('language.php');
$ar_select='';
$fr_select='';
$language='';
if ((isset($_GET['language']) && $_GET['language']=='ar') || !isset($_GET['language'])){
  $ar_select='selected';
  $language='ar';
}else{
  $fr_select='selected';
  $language='fr';
  
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $titel_association[$language]['0']?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/fav.jpg" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- font-awesome Icons -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/stl.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
         <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body  dir="<?php echo $deriction[$language]['0']?>">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <!-- <img src="assets/img//2.jpg" alt=""> -->
                <a class="navbar-brand text-center" ><?php echo $titre[$language]['0']?> </a>
                

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#"><?php echo $top_nav[$language]['0']?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#about"> <?php echo $top_nav[$language]['1']?> </a></li>
                        <li class="nav-item"><a class="nav-link" href="#services"> <?php echo $top_nav[$language]['2']?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio"><?php echo $top_nav[$language]['3']?></a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#Amazzal"> <?php echo $top_nav[$language]['6']?></a></li> -->
                        <li class="nav-item"><a class="nav-link" href="#wwa"><?php echo $top_nav[$language]['4']?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact"><?php echo $top_nav[$language]['5']?></a></li>
                        
                    </ul>
                    <!--Dropdown 2-->
            <div class="dropdown nav-item mx-0 ">
              <button class="btn globe rounded-pill  dropdown-toggle " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-globe2"></i> </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" 
              onchange="set_language() " name="language" id="language">
              <li><a href="?language=ar" class="dropdown-item text-center" ><img src="assets/img/morocco.png"><?php echo $dropdown[$language]['0']?></li>
              <li><a href="?language=fr" class="dropdown-item text-center" ><img src="assets/img/france.png"><?php echo $dropdown[$language]['1']?></a></li>
            </ul>
          </div>
          <!--fin dropdown 2-->
                    
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-dark font-weight-bold">جمعية إسلان للتنمية و التراث والبيئة</h1> <br />
                        <h3 class="text-dark">Association d'Islan pour le développement, le patrimoine et l'environnement</h3>

                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5"></p>
                        <a class="btn1 third btn-xl text-dark border border-primary" href="#about"><?php echo $button1[$language]['0']?></a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class=" bg1 page-section" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 wx text-center">
                        <h2 class="text-dark mt-0"><?php echo $about[$language]['0']?></h2>
                        <hr class="divider divider-light" />
                        <p class="text-dark-75 mb-4"> 
                        <?php echo $about[$language]['1']?> </p>
                        <a class="btn third btn-xl border border-primary" href="#services"><?php echo $button2[$language]['0']?></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- objectives-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0"><?php echo $services[$language]['0']?></h2>
                <hr class="divider" />
                <p class="text-center">  <?php echo $services[$language]['1']?></p>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="fas fa-university fs-1 text-denger"></i></div>
                            <h3 class="h4 mb-2"> <?php echo $services[$language]['2']?> </h3>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i>	 <?php echo $services[$language]['3']?>.</p>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i>  <?php echo $services[$language]['4']?>  .</p>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i>	 <?php echo $services[$language]['5']?>   .</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="fas fa-hospital fs-1 text-den"></i></div>
                            <h3 class="h4 mb-2">  <?php echo $services[$language]['6']?>  </h3>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i> <?php echo $services[$language]['7']?> </p>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i> <?php echo $services[$language]['8']?></p>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i>	<?php echo $services[$language]['9']?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="fas fa-recycle fs-1 text-den"></i></div>
                            <h3 class="h4 mb-2">    <?php echo $services[$language]['10']?></h3>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i><?php echo $services[$language]['11']?>.</p>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i><?php echo $services[$language]['12']?>.</p>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i><?php echo $services[$language]['13']?>.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="fas fa-running fs-1 text-den"></i></div>
                            <h3 class="h4 mb-2"> <?php echo $services[$language]['14']?></h3>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i><?php echo $services[$language]['15']?>.</p>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i><?php echo $services[$language]['16']?>.</p>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i><?php echo $services[$language]['17']?>.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="fas fa-handshake fs-1 text-den"></i></div>
                            <h3 class="h4 mb-2"><?php echo $services[$language]['18']?></h3>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i><?php echo $services[$language]['19']?>.</p>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i><?php echo $services[$language]['20']?>.</p>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i><?php echo $services[$language]['21']?>.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-building fs-1 text-den"></i></div>
                            <h3 class="h4 mb-2"><?php echo $services[$language]['22']?></h3>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i><?php echo $services[$language]['23']?>.</p>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i><?php echo $services[$language]['24']?>.</p>
                            <p class="d-flex text-muted mb-0"><i class="bi bi-bookmark-check-fill"></i><?php echo $services[$language]['25']?>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <h2 class="text-center mt-0"><?php echo $portfolio[$language]['0']?></h2>
            <hr class="divider" />
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="">
                            <img class="img-fluid bg-warning" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"> <?php echo $photos[$language]['0']?></div>
                                <div class="project-name"><?php echo $photos[$language]['1']?>.</div>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"><?php echo $photos[$language]['2']?></div>
                                <div class="project-name"><?php echo $photos[$language]['3']?></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"><?php echo $photos[$language]['4']?></div>
                                <div class="project-name"><?php echo $photos[$language]['5']?></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg" title="بورتريه حول النشاط التقافي الذي نظمته جمعية إسلان أيام 10و11و12 2015 .">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">النشاط التقافي</div>
                                <div class="project-name">بورتريه حول النشاط التقافي الذي نظمته جمعية إسلان أيام 10و11و12 2015 .                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg" title="حملة توزيع المحافظ بمبادرة من جمعية مستقبل تمصغوست يوم الاحد 02 نونبر 2014">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">حملة توزيع المحافظ</div>
                                <div class="project-name">حملة توزيع المحافظ بمبادرة من جمعية مستقبل تمصغوست يوم الاحد 02 نونبر 2014                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg" title=" نظمت جمعية اسلان حملتها الطبية الاولى بدوار اسلان بشراكة مع جمعية بسمة امل الدار البيضاء">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50"> حملتها الطبية الاولى بدوار اسلان</div>
                                <div class="project-name">نظمت جمعية اسلان حملتها الطبية الاولى بدوار اسلان بشراكة مع جمعية بسمة امل الدار البيضاء</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class=" bgg1 page-section bg-danger text-dark" id="wwa">
            <div class="container px-4 px-lg-5 text-center">
              <div class="mb-2"><i class="fas fa-donate fs-1 texet-dan"></i></div>
              <h2 class="mb-4 text-center">للتبرع</h2>
              <p class="fs-2 text-center">رقم الحساب البنكي</p>
              <p class="fs-1 text-center">0/021021021021</p>
            </div>
          </section>
        <!-- Contact-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1019.1864250619909!2d-8.858280583075027!3d30.77118758443988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb19821e3f92b0b%3A0xe96fc6a5b004af69!2sIslane!5e0!3m2!1sar!2sma!4v1636912722309!5m2!1sar!2sma" 
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <section class=" page-section" id="contact">
            <div class="container px-4 px-lg-5">
              <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                  <h2 class="mt-0"><?php echo $contact[$language]['0']?></h2>
                  <hr class="divider" />
                  <p class="text-muted mb-5">
                  <?php echo $contact[$language]['1']?>
                  </p>
                </div>
              </div>
              <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                  
                  <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                      <input
                        class="form-control"
                        id="name"
                        type="text"
                        placeholder="Enter your name..."
                        data-sb-validations="required"
                      />
                      <label for="name"><?php echo $contact[$language]['2']?></label>
                      <div class="invalid-feedback" data-sb-feedback="name:required">
                      <?php echo $contact[$language]['3']?>
                      </div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                      <input
                        class="form-control"
                        id="email"
                        type="email"
                        placeholder="name@example.com"
                        data-sb-validations="required,email"
                      />
                      <label for="email"><?php echo $contact[$language]['4']?></label>
                      <div class="invalid-feedback" data-sb-feedback="email:required">
                      <?php echo $contact[$language]['5']?>
                      </div>
                      <div class="invalid-feedback" data-sb-feedback="email:email">
                      <?php echo $contact[$language]['6']?>
                      </div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                      <input
                        class="form-control"
                        id="phone"
                        type="tel"
                        placeholder="(123) 456-7890"
                        data-sb-validations="required"
                      />
                      <label for="phone"><?php echo $contact[$language]['7']?></label>
                      <div class="invalid-feedback" data-sb-feedback="phone:required">
                      <?php echo $contact[$language]['8']?>
                      </div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                      <textarea
                        class="form-control"
                        id="body"
                        type="text"
                        placeholder="Enter your message here..."
                        style="height: 10rem"
                        data-sb-validations="required"
                      ></textarea>
                      <label for="body"><?php echo $contact[$language]['9']?></label>
                      <div class="invalid-feedback" data-sb-feedback="body:required">
                      <?php echo $contact[$language]['10']?>
                      </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                      <div class="text-center mb-3">
                        <div class="fw-bolder"><h4 class="sent-notification"></h4></div>
                        <br />
                      </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                      <div class="text-center text-danger mb-3">
                      <?php echo $contact[$language]['11']?>
                      </div>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid">
                      <button
                        class="btn btn-primary btn-xl disabled"
                        id="submitButton"
                        type="submit"
                        onclick="sendEmail()"
                      >
                      <?php echo $contact[$language]['12']?>
                      </button>   
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
        
        
          
         
        

          <div class="mb-2"><a href="#"><i class="bi bi-caret-up-square-fill amqur"></i></a></div>

        
          <footer class="bg-primary text-center text-white">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
              <!-- Section: Social media -->
              <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/associationisslan/" role="button"
                  ><i class="fab fa-facebook-f"></i
                ></a>
              </section>
            </div>
           
           
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Copyright : Ajicod
              <a class="text-white" href="https://www.facebook.com/associationisslan/">Association Isslan</a>
            </div>
            
          </footer>


        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript">
      function sendEmail() {
        var name = $("#name");
        var email = $("#email");
        var phone = $("#phone");
        var body = $("#body");

        if (
          isNotEmpty(name) &&
          isNotEmpty(email) &&
          isNotEmpty(phone) &&
          isNotEmpty(body)
        ) {
          $.ajax({
            url: "sendEmail.php",
            method: "POST",
            dataType: "json",
            data: {
              name: name.val(),
              email: email.val(),
              phone: phone.val(),
              body: body.val(),
            },
            success: function (response) {
              $("#contactForm")[0].reset();
              $(".sent-notification").text("<?php echo $contact[$language]['13']?>");
            },
          });
        }
      }

      function isNotEmpty(caller) {
        if (caller.val() == "") {
          caller.css("border", "1px solid red");
          return false;
        } else caller.css("border", "");

        return true;
      }
      function set_language() {
        var language=jQuery('#language').val();
        window.location.href='http://localhost/islan%20amazal1/islan%20amazal/islan12/?language='+language;
      }
    </script>
              
    </body>
</html>
