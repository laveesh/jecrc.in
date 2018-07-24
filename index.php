<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JECRC</title>
    <link rel="stylesheet" href="src/css/font-awesome.min.css">
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/home.css">
    <link rel="icon" href="src/img/favicon.png" type="image/x-icon"/>
  </head>
  <body>
    <!-- header -->
    <header>
      <div class="collegeHeader container-fluid bg-primary text-white">
        <a href="index.php"><img src="src/img/jecrclogo.png" id="jecrcLogo" alt="JECRC"></a>
        <span id="collegeName">Jaipur Engineering College And Research Center</span>
        <div id="collegeUni">Affilated to Rajasthan Technical University, Kota (REAP CODE: 020)</div>
        <div id="collegeAdd">
          Shri Ram ki Nangal, via Sitapura RIICO, Tonk Road, Sukhpuria, Bambala, Jaipur, Rajasthan 302022
        </div>
      </div>
      <nav class="navbar navbar-expand-xl bg-primary mainNav">
        <div class="collapse navbar-collapse bg-primary" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="pages/about.php">About<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                College
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="pages/administration.php">Administration</a>
                <a class="dropdown-item" href="pages/research.php">Research</a>
                <a class="dropdown-item" href="pages/library.php">Library</a>
                <a class="dropdown-item" href="pages/achivements.php">Achivements</a>
                <a class="dropdown-item" href="pages/ibm.php">Center Of Excillenece IBM</a>
                <a class="dropdown-item" href="pages/events.php">Events</a>
                <a class="dropdown-item" href="pages/campus_facilities.php">Campus Facilities</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Students
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="pages/admission.php">Admission</a>
                <a class="dropdown-item" href="pages/academics.php">Academics</a>
                <a class="dropdown-item" href="pages/student_resources.php">Student Resources</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Courses Offered
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="pages/cse.php">Computer Science</a>
                <a class="dropdown-item" href="pages/it.php">Information Technology</a>
                <a class="dropdown-item" href="pages/ece.php">Electronics and Communication</a>
                <a class="dropdown-item" href="pages/ee.php">Electrical Engineering</a>
                <a class="dropdown-item" href="pages/me.php">Mechanical Engineering</a>
                <a class="dropdown-item" href="pages/civil.php">Civil Engineering</a>
              </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="pages/government_schemes.php">Govt. Schemes</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="pages/tpo.php">Traning and Placements</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Alumni
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="pages/our_alumni.php">Our Alumni</a>
                <a class="dropdown-item" href="pages/alumni_survey.php">Alumni Survey</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Downloads
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">College Newsletter</a>
                <a class="dropdown-item" href="#">Department Newsletter</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Contact Us
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="pages/contact_details.php">Contact Details</a>
                <a class="dropdown-item" href="pages/how_to_reach.php">How to reach ?</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <button class="navbar-toggler navbar-light bg-light"  id="icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span><i class="fa fa-home"></i></span>
    </button>
    <!-- ---------------------- -->
    <div class="container-fluid text-center homeBanner">
      <div class="imageCarousel bg-primary py-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="src/img/Carousel/slider1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img src="src/img/Carousel/slider4.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img   src="src/img/Carousel/slider3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img  src="src/img/Carousel/slider2.jpg" alt="Fourth slide">
            </div>
            <div class="carousel-item">
              <img  src="src/img/Carousel/slider5.jpg" alt="Fifth slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <!-- randomly arranged contents  -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-3 col-lg-4">
          <section class="section container card">
            <div class="sectionHeading">NEWS & EVENTS</div>
            <div class="sectionContent card-body px-4 newsBox">
              <marquee direction="up" behavior="scroll" scrollamount="6" id="marq">
              <ul class="sectionList">
                <li class="border-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor.</li>
                <li class="border-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor.</li>
                <li class="border-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor.</li>
                <li class="border-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor.</li>
                <li class="border-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labor.</li>
              </ul>
              </marquee>
            </div>
          </section>
          <!-- Photo Gallery  -->
          <section class="section container card my-5 gallery">
            <div class="sectionHeading">Photo Gallery</div>
            <div class="sectionContent card-body px-4 gallery-cont">
              <marquee direction="down" behavior="scroll" scrollamount="10">
              <div class="row">
                <div class="col-12">
                  <img src="src/img/gallery/1.jpg" alt="img-1" class="gallery-img my-3">
                </div>
                <div class="col-12">
                  <img src="src/img/gallery/2.jpg" alt="img-2" class="gallery-img my-3">
                </div>
                <div class="col-12">
                  <img src="src/img/gallery/3.jpg" alt="img-3" class="gallery-img my-3">
                </div>
                <div class="col-12">
                  <img src="src/img/gallery/4.jpg" alt="img-4" class="gallery-img my-3">
                </div>
                <div class="col-12">
                  <img src="src/img/gallery/5.jpg" alt="img-5" class="gallery-img my-3">
                </div>
                <div class="col-12">
                  <img src="src/img/gallery/6.jpg" alt="img-6" class="gallery-img my-3">
                </div>
                <div class="col-12">
                  <img src="src/img/gallery/7.jpg" alt="img-7" class="gallery-img my-3">
                </div>
                <div class="col-12">
                  <img src="src/img/gallery/8.jpg" alt="img-8" class="gallery-img my-3">
                </div>
                <div class="col-12">
                  <img src="src/img/gallery/9.jpg" alt="img-9" class="gallery-img my-3">
                </div>
                <div class="col-12">
                  <img src="src/img/gallery/10.jpg" alt="img-10" class="gallery-img my-3">
                </div>
                <div class="col-12">
                  <img src="src/img/gallery/11.jpg" alt="img-11" class="gallery-img my-3">
                </div>
                <div class="col-12">
                  <img src="src/img/gallery/12.jpg" alt="img-12" class="gallery-img my-3">
                </div>
                <div class="col-12">
                  <img src="src/img/gallery/13.jpg" alt="img-13" class="gallery-img my-3">
                </div>
                <div class="col-12">
                  <img src="src/img/gallery/14.jpg" alt="img-14" class="gallery-img my-3">
                </div>
                <div class="col-12">
                  <img src="src/img/gallery/15.jpg" alt="img-15" class="gallery-img my-3">
                </div>
                <div class="col-12">
                  <img src="src/img/gallery/16.jpg" alt="img-16" class="gallery-img my-3">
                </div>
              </div>
              </marquee>
            </div>
          </section>
        </div>
        <div class="col-xl-6 col-lg-8">
          <section class="section container card">
            <div class="sectionHeading">Welcome to JECRC Foundation</div>
            <div class="sectionContent card-body">
              <ul class="sectionList">
                <p>An individual’s freedom lies in the way he is taught to express his thoughts, and this expression essentially comes from education. Established over a decade ago, JECRC Foundation has been providing quality education to its students, setting rationale in their minds for the transformation of technology, and ideologies of the world at large.</p>
                <p>Perceived as the unparalleled educational group, JECRC Foundation is continuously ascending the steps of glory by establishing premier institutes in the field of engineering, management and pure & applied sciences; viz. :</p>
                <ul class="sectionList my-1">
                  <li>Jaipur Engineering College & Research Centre (JECRC)</li>
                  <li>JECRC University</li>
                </ul>
                <p>Every year, more than 5000 students entrust JECRC Foundation with the responsibility of shaping their minds for a better future. Commanding the priority list of best engineering colleges in Jaipur, it has become the preferred choice of students from all across India, showing keen interest in admissions through various mediums of JEE and REAP.</p>
                <p>Development of a unique and creative approach to life and education is the prime focus of JECRC Foundation.</p>
              </ul>
            </div>
          </section>
          <section class="section container card">
            <div class="sectionHeading">Outcome based education</div>
            <div class="sectionContent card-body">
              <p>Jaipur Engineering College and Research Centre, Jaipur has implemented Outcome Based Education (OBE) in the Institute. JECRC is proud to mention that it has created necessary manpower and infrastructure to implement Outcome Based Education from the year 2014-15. So far the Technical Institutions have been imparting teaching through a traditional system where the learning outcomes of the students are not clearly measured. The‘Washington Accord’ emphasize on outcome based education. There is a need to develop a standard approach to match quality assurance for Engineering Programs. The graduating Engineers of the future will need to be evaluated in their outlook and experience and be ready for global opportunities. So, there is a need and challenge for all Technical Institutions to aid and empower the future students for global environment.</p>
              
              <div class="row">
                <div class="col-md-6 col-sm-12 text-center">
                  <img class="img-thumbnail" src="src/img/outcome_edu/ob1.jpg">
                </div>
                <div class="col-md-6 col-sm-12 text-center">
                  <img class="img-thumbnail" src="src/img/outcome_edu/ob2.jpg">
                </div>
              </div>
              <p>The Outcome Based Education focuses on outcomes through achievement of learning objectives of
                their program. The OBE strongly emphasize student centric learning and adaptation of modern
                teaching-learning systems. JECRC has gone far ahead in implementing OBE where every student
                will distinctly write-down the learning outcomes in every hour of lecture he/she attends. The
                Teachers have been given specialized training to embark on OBE method of delivery and use of
                modern teaching-learning systems. With this OBE, it is expected that the students distinctly gain
                excellent knowledge in their relevant branch and contribute to the development of the organizations
              where they are employed.</p>
              <div class="row">
                <div class="col-md-6 col-sm-12 text-center">
                  <img class="img-thumbnail" src="src/img/outcome_edu/ob3.jpg">
                </div>
                <div class="col-md-6 col-sm-12 text-center">
                  <img class="img-thumbnail" src="src/img/outcome_edu/ob4.jpg">
                </div>
              </div>
              
              <p>JECRC is also a Centre for imparting training on NBA which emphasis on OBE. The OBE process at
                JECRC is expected to raise the standards of Technical Education imparted in the Institute in the
                coming years. JECRC is committed for creating knowledge, skills and problem solving abilities
              among students of all ranks.</p>
            </div>
          </section>
        </div>
        <div class="col-xl-3 col-lg-12">
          <section class="section container card">
            <div class="sectionHeading">DIRECTOR'S MESSAGE</div>
            <div class="sectionContent card-body">
              <div class="col-12" style="text-align: center;">
                <img src="src/img/people/arpit.jpg" class="rounded-circle img-responsive faculty-img" alt="principle">
                <h3 class="py-1">Arpit Agarwal</h3>
                <h4 class="py-1">Director</h4>
              </div>
              <div class="col-12">
                <p class="py-2">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum error, voluptate. Porro alias nihil deserunt, vel soluta laboriosam maxime autem labore ab unde, laborum, asperiores officia ullam. Asperiores cupiditate numquam in aliquid doloribus? Dignissimos pariatur vel, nam ipsa consectetur dicta saepe explicabo quasi sapiente recusandae cumque facilis iusto praesentium quod, accusamus ducimus atque modi libero nostrum non sed laudantium sint. Nesciunt, debitis et illo ullam excepturi eum ad suscipit vel modi. Velit aliquam quos aliquid tenetur consectetur veritatis dolorem omnis nam maiores quasi quia aut ducimus at, possimus vitae debitis dolore inventore voluptate sapiente! Quasi et sunt reprehenderit quibusdam porro.
                </p>
              </div>
            </div>
          </section>
          <section class="section container card mt-5">
            <div class="sectionHeading">PRINCIPAL'S MESSAGE</div>
            <div class="sectionContent card-body">
              <div class="col-12" style="text-align: center;">
                <img src="src/img/people/principal.jpg" class="rounded-circle img-responsive faculty-img" alt="principle">
                <h3 class="py-1">V.K. Chandna</h3>
                <h4 class="py-1">Principal</h4>
              </div>
              <div class="col-12">
                <p class="py-2">
                  Technical education is seeing new reforms every once in a while, and that is rightly, the need of the hour. To bring these reforms in practice, and to offer engineering students a new vision of creation, JECRC was established eighteen years ago. With this departmental magazine, CSE Department has progressed further in making everyone aware of our goals and their successful achievement. 
                </p>
                <p class="py-2">
                  Computer Science & Engineering department is endowed with the best of faculty and staff members, deeply committed to skill based learning, and making students keen about advancements in the field. This program has procured great growth and continues to bring laurels to JECRC, making us proud by excellent results. Every field, be it research, entrepreneurship, industry, or a job; success in every dimension is achieved by the students.

                </p>
                <p class="py-2">
                  I wish for the institute and department to progress further with an ever increasing pace, and staunch support by the endeavors of all. Let us make JECRC a synonym for knowledge. Best wishes! 
                </p>
                <p class="text-right font-weight-bold pr-3">V.K. Chandna <br>Principal</p>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid mb-1 mt-5 pt-5 pb-5 pr-5 pl-5 bg-jecrc">
    <div class="pt-3 pb-3 pr-3 pl-3 text-center text-white advHeading">
      <span>The JECRC ADVANTAGES</span>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="col my-5 text-center bg-white advContainer">
          Advantage 1
        </div>
        <div class="col my-5 text-center bg-white advContainer">
          Advantage 1
        </div>
      </div>
      <div class="col-md-4">
        <div class="col my-5 text-center bg-white advContainer">
          Advantage 1
        </div>
        <div class="col my-5 text-center bg-white advContainer">
          Advantage 1
        </div>
      </div>
      <div class="col-md-4">
        <div class="col my-5 text-center bg-white advContainer">
          Advantage 1
        </div>
        <div class="col my-5 text-center bg-white advContainer">
          Advantage 1
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="site-footer">
    <div class="container footer-container">
      <div class="row  align-center">
        <div class="col-md-4">
          <h4>Important Links:</h4>
          <ul class="list-styling">
            <li><a href="#">demo link</a></li>
            <li><a href="#">demo link</a></li>
            <li><a href="#">demo link</a></li>
            <li><a href="#">demo link</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4>Recruitments 2018</h4>
        </div>
        <div class="col-md-4">
          <h4>Contact Us</h4>
          <h5>895084748</h5>
          <h5 class="support-color"> <a href="#">Support@jecrc.ac.in</a></h5>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="row">
          <div class="col-md-9">
            <a href="#"><i class="fa fa-facebook footer-icons"></i></a>
            <a href="#"><i class="fa fa-twitter footer-icons"></i></a>
            <a href="#"><i  class="fa fa-google footer-icons"></i></a>
            <a href="#"><i  class="fa fa-linkedin footer-icons"></i></a>
            <a href="#"><i  class="fa fa-youtube footer-icons"></i></a>
          </div>
          <div class="col-md-3">
            <p class="footer-bottom-para"> Developers</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- ---------------------------- -->
    <script src="src/js/jquery.min.js"></script>
    <script src="src/js/popper.min.js"></script>
    <script src="src/js/bootstrap.min.js"></script>
    <script>
    $("marquee").hover(function () {
    this.stop();
    }, function () {
    this.start();
    });
    </script>
  </body>
</html>