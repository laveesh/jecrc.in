<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JECRC</title>
    <link rel="stylesheet" href="src/css/font-awesome.min.css">
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/owl.carousel.min.css">
    <link rel="stylesheet" href="src/css/owl.theme.default.min.css">
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
        <div id="collegeUni">Approved by AICTE & Affilated to Rajasthan Technical University, Kota</div>
        <div id="collegeAdd">
          Shri Ram ki Nangal, via Sitapura RIICO, Tonk Road, Sukhpuria, Bambala, Jaipur, Rajasthan 302022
        </div>
      </div>
      <nav class="navbar navbar-expand-lg bg-primary mainNav">
        <div class="collapse navbar-collapse bg-primary" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto center-nav">
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
                <!-- <a class="dropdown-item" href="pages/library.php">Library</a> -->
                <a class="dropdown-item" href="pages/events.php">Events</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Students
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="pages/admission.php">Admission</a>
                <a class="dropdown-item" href="pages/achivements.php">Achivements</a>
                <a class="dropdown-item" href="pages/activities.php">Activities</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Courses Offered
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="pages/cse.php">Computer Science</a>
                <a class="dropdown-item" href="pages/it.php">Information Technology</a>
                <a class="dropdown-item" href="pages/ece.php">Electronics and Communication Engineering</a>
                <a class="dropdown-item" href="pages/ee.php">Electrical Engineering</a>
                <a class="dropdown-item" href="pages/me.php">Mechanical Engineering</a>
                <a class="dropdown-item" href="pages/civil.php">Civil Engineering</a>
              </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="initiatives.php">Initiatives</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="pages/placements.php">Traning and Placements</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="pages/alumni.php">Alumni</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="pages/contact.php">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Download
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Admission Form</a>
                <a class="dropdown-item" href="#">Library Form</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <button class="navbar-toggler navbar-light bg-light"  id="icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span><i class="fa fa-home"></i></span>
    </button>
    <div class="container-fluid text-center homeBanner">
      <div class="imageCarousel bg-primary py-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
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
            <!--             <div class="carousel-item">
              <img  src="src/img/Carousel/slider2.jpg" alt="Fourth slide">
            </div>
            -->            <div class="carousel-item">
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
    <div class="container-fluid shadow my-3 card">
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
    </div>
    <div class="container-fluid">
      <div class="row">
      <div class="col-lg-4 col-sm-12">
        <div class="card py-2 px-2 my-2 shadow newsBox">
          <div class="sectionHeading">NEWS & EVENTS</div>
          <div class="sectionContent px-4">
            <marquee direction="up" behavior="scroll" height="500" scrollamount="6" id="marq">
            <ul class="sectionList list-group news">
              <li class="list-group-item">JMAG Edition-9 released.</li>
              <li class="list-group-item">Sh. Anil Agarwal, Chairman, Vedanta Resources Plc @ JECRC</li>
              <li class="list-group-item">700 Placements in 2 Days with 2 Companies</li>
              <li class="list-group-item">Induction Day for Batch 2015-19</li>
              <li class="list-group-item">JMAG Edition-7 released.</li>
              <li class="list-group-item">Anti-Ragging Initiative</li>
              <li class="list-group-item">NIRF Engineering</li>
            </ul>
            </marquee>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="card py-2 px-2 mx-2 my-2 shadow msgBox">
          <div class="sectionHeading">PRINCIPAL'S MESSAGE</div>
          <div class="sectionContent card-body">
            <div class="col-12" style="text-align: center;">
              <img src="src/img/people/principal.jpg" class="rounded-circle img-responsive faculty-img" alt="principle">
              <h3 class="py-1">Dr. V.K. Chandna</h3>
              <h4 class="py-1">Principal</h4>
            </div>
            <div class="sectionContent overflow-y-scroll">
              <p>Jaipur Engineering College and Research Centre (JECRC) Jaipur is recognized as one of the best technical institute in the Rajasthan and is adopting the process of change that demands quality outcome-based     education. The vision of the institute is to become an institute of Excellence in imparting outcome based    education, providing facilities to the students to get placement in reputed companies, providing platform to the students for overall self-development that includes ethics, moral values etc. and develop research aptitude through project based learning.</p>
              <p>In the process of implementing Outcome Based Education (OBE) the faculty members are measuring the progress and competencies of the student as they go through a course in each Semester and are being assessed against pre-defined targets.</p>
              <p>Engineers are the wealth of the nation and excellence in all disciplines is the present requirement of the country for its sustained economic growth to compete globally. Nearly seventeen years ago, the founders of JECRC embarked on a journey to educate and nurture the finest engineers. It gives me immense to share that JECRC is contributing to the growth of nation by providing outcome based education to their students and nurturing them to compete at the global level.</p>
              <p>The faculty and technical staff members are committed to cater professional as well as research driven   project based learning to the students and accordingly the teaching-learning process is tuned so as to    fulfill their career growth in the prevalent emerging technology. Different programs have resulted in    overall growth and penetration of students in varied dimensions be it research, innovation, entrepreneurs, educationists or even as sports person and bureaucrats etc.</p>
              <p>With the support of qualified, dedicated and hardworking faculty, the institute has achieved enviable    ranking in a short span and I have no doubts that with this pace, the institute will relentlessly march    ahead of other eminent institutes at the national level. Let’s give our best and make this institute a    modern temple of outcome based learning through our diligence, devotion and dedication.</p>
              <p>All the credit goes to outstanding reputation and dedication of the Institute for all these years, under the able guidance of visionary Shri Amit Agrawal and Shri Arpit Agrawal, Directors of the JECRC Foundation.</p>
              <strong>Wishing you all the best!</strong>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="card py-2 px-2 mx-2 my-2 shadow newsBox">
          <div class="sectionHeading">DIRECTOR'S MESSAGE</div>
          <div class="sectionContent card-body">
            <div class="col-12" style="text-align: center;">
              <img src="src/img/people/arpit.jpg" class="rounded-circle img-responsive faculty-img" alt="principle">
              <h3 class="py-1">Shri Arpit Agarwal</h3>
              <h4 class="py-1">Director</h4>
            </div>
            <div class="col-12 sectionContent overflow-y-scroll">
              <p class="py-2">
                We are currently in the era of technology revolution, spearheaded by recent developments in engineering sciences providing sustainable solutions to various issues in different areas. The Indian engineering programs have a promising future particularly the Engineering sectors are on the threshold of becoming global players by 2020. Fragments of this newsletter will track different event and activities  that are taking place in the department. I extend my best wishes to all those who contributed to Ujjwalam and I am confident that the interaction will be a source of inspiration to the young talent budding in the college, who would be the educationists, technocrats and researchers of tomorrow. They would shoulder the responsibility of bringing in the desired innovations in their fields, leading to the advancement of the country.
              </p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="container-fluid shadow my-3 card">
      <div class="sectionHeading">Outcome based education</div>
      <div class="sectionContent">
        <p>Jaipur Engineering College and Research Centre, Jaipur has implemented Outcome Based Education (OBE) in the Institute. JECRC is proud to mention that it has created necessary manpower and infrastructure to implement Outcome Based Education from the year 2014-15. So far the Technical Institutions have been imparting teaching through a traditional system where the learning outcomes of the students are not clearly measured. The‘Washington Accord’ emphasize on outcome based education. There is a need to develop a standard approach to match quality assurance for Engineering Programs. The graduating Engineers of the future will need to be evaluated in their outlook and experience and be ready for global opportunities. So, there is a need and challenge for all Technical Institutions to aid and empower the future students for global environment.</p>
        <div class="row py-3">
          <div class="col-md-3 col-sm-12 text-center">
            <img class="img-thumbnail" src="src/img/outcome_edu/ob1.jpg">
          </div>
          <div class="col-md-3 col-sm-12 text-center">
            <img class="img-thumbnail" src="src/img/outcome_edu/ob2.jpg">
          </div>
          <div class="col-md-3 col-sm-12 text-center">
            <img class="img-thumbnail" src="src/img/outcome_edu/ob3.jpg">
          </div>
          <div class="col-md-3 col-sm-12 text-center">
            <img class="img-thumbnail" src="src/img/outcome_edu/ob4.jpg">
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
        <p>JECRC is also a Centre for imparting training on NBA which emphasis on OBE. The OBE process at
          JECRC is expected to raise the standards of Technical Education imparted in the Institute in the
          coming years. JECRC is committed for creating knowledge, skills and problem solving abilities
        among students of all ranks.</p>
      </div>
    </div>
    <div class="container-fluid shadow my-3 card">
      <div class="sectionHeading">Photo Gallery</div>
      <div class="sectionContent px-4">
        
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="src/img/gallery/1.jpg" alt="img-1" class="gallery-img mx-3">
          </div>
          <div class="item">
            <img src="src/img/gallery/2.jpg" alt="img-2" class="gallery-img mx-3">
          </div>
          <div class="item">
            <img src="src/img/gallery/3.jpg" alt="img-3" class="gallery-img mx-3">
          </div>
          <div class="item">
            <img src="src/img/gallery/4.jpg" alt="img-4" class="gallery-img mx-3">
          </div>
          <div class="item">
            <img src="src/img/gallery/5.jpg" alt="img-5" class="gallery-img mx-3">
          </div>
          <div class="item">
            <img src="src/img/gallery/6.jpg" alt="img-6" class="gallery-img mx-3">
          </div>
          <div class="item">
            <img src="src/img/gallery/7.jpg" alt="img-7" class="gallery-img mx-3">
          </div>
          <div class="item">
            <img src="src/img/gallery/8.jpg" alt="img-8" class="gallery-img mx-3">
          </div>
          <div class="item">
            <img src="src/img/gallery/9.jpg" alt="img-9" class="gallery-img mx-3">
          </div>
          <div class="item">
            <img src="src/img/gallery/10.jpg" alt="img-10" class="gallery-img mx-3">
          </div>
          <div class="item">
            <img src="src/img/gallery/11.jpg" alt="img-11" class="gallery-img mx-3">
          </div>
          <div class="item">
            <img src="src/img/gallery/12.jpg" alt="img-12" class="gallery-img mx-3">
          </div>
          <div class="item">
            <img src="src/img/gallery/13.jpg" alt="img-13" class="gallery-img mx-3">
          </div>
          <div class="item">
            <img src="src/img/gallery/14.jpg" alt="img-14" class="gallery-img mx-3">
          </div>
          <div class="item">
            <img src="src/img/gallery/15.jpg" alt="img-15" class="gallery-img mx-3">
          </div>
          <div class="item">
            <img src="src/img/gallery/16.jpg" alt="img-16" class="gallery-img mx-3">
          </div>
        </div>
        
      </div>
      <div class="container-fluid mb-1 pt-5 pb-5 pr-5 pl-5">
        <div class="pb-3 pr-3 pl-3 text-center advHeading">
          <span>OUR PRIDE</span>
        </div>
        <div class="d-flex flex-row justify-content-center flex-wrap">
          <div class="mx-5 my-3 shadow"><a href="https://innovate.mygov.in/sih2018/" target="_blank"><img class="pride-img" src="src/img/pride/sih.png" alt="jecrc pride"></a></div>
          <div class="mx-5 my-3 shadow"><a href="https://www.jecrchackathon.in/" target="_blank"><img class="pride-img" src="src/img/pride/jecrchack.png" alt="jecrc pride"></a></div>
          <div class="mx-5 my-3 shadow"><a href="http://jecrcrenaissance.in/" target="_blank"><img class="pride-img" src="src/img/pride/renaissance.png" alt="jecrc pride"></a></div>
          <div class="mx-5 my-3 shadow"><a href="https://www.facebook.com/tedxjecrc/?ref=br_rs" target="_blank"><img class="pride-img" src="src/img/pride/tedx.png" alt="jecrc pride"></a></div>
          <div class="mx-5 my-3 shadow"><a href="http://www.iceteas.in/" target="_blank"><img class="pride-img" src="src/img/pride/iceteas.png" alt="jecrc pride"></a></div>
          <div class="mx-5 my-3 shadow"><a href="http://jecrcmun.co.in" target="_blank"><img class="pride-img" src="src/img/pride/mun.png" alt="jecrc pride"></a></div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="site-footer">
        <div class="container footer-container">
          <div class="row  align-center">
            <div class="col-md-4">
              <ul class="list-styling">
                <li><a target="_blank" href="http://jecrcrenaissance.in/">Renaissance 2018</a></li>
                <li><a target="_blank" href="http://jecrcmun.co.in">Jecrc Mun 2018</a></li>
                <li><a target="_blank" href="http://www.iceteas.in/">ICETEAS Confrence</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul class="list-styling">
                <li><a href="../pages/administration.php?section=recruitments">Recruitments 2018</a></li>
                <li><a target="_blank" href="http://www.jecrcconference.in/">JECRC Confrences</a></li>
                <li><a target="_blank" href="http://codedocs.org">Jecrc Coding Community</a></li>
              </ul>
              <h4></h4>
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
        <script src="src/js/jquery.min.js"></script>
        <script src="src/js/popper.min.js"></script>
        <script src="src/js/bootstrap.min.js"></script>
        <script src="src/js/owl.carousel.min.js"></script>
        <script>
        $("marquee").hover(function () {
        this.stop();
        }, function () {
        this.start();
        });
        </script>
        <script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    responsiveClass: true,
    responsive:{
      0:{
        items: 1,
        dots: false
      },
      500:{
        items: 2
      },
      700:{
        items: 3
      },
      900:{
        items: 4
      },
      1200:{
        items: 5
      }
    },
    autoplay:true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsiveRefreshRate: 100

    
});
</script>
      </body>
    </html>