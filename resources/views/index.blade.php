<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aalaa Elsayed </title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/unicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="{{asset('assets/css/tooplate-style.css')}}">
    
 
  </head>
  <body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html"><i class='uil uil-user'></i> A'laa</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link"><span data-hover="About">About</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link"><span data-hover="Projects">Projects</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link"><span data-hover="Resume">Resume</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link"><span data-hover="Contact">Contact</span></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-lg-auto">
                    <div class="ml-lg-4">
                      <div class="color-mode d-lg-flex justify-content-center align-items-center">
                        <i class="color-mode-icon"></i>
                        Color mode
                      </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <small class="small-text">Welcome to <span class="mobile-block">my portfolio website!</span></small>
                        <h1 class="animated animated-text">
                            <span class="mr-2">Hey folks, I'm</span>
                                <div class="animated-info">
                                    <span class="animated-item">Aalaa Elsayed</span>
                                    <span class="animated-item">Web developer</span>
                                    <span class="animated-item">Backend </span>
                                </div>
                        </h1>

                        <p>Building a successful product is a challenge. I am highly energetic in  web development.</p>
                        
                        <div class="custom-btn-group mt-4">
                          <a href="{{asset('assets/files/Aalaa elsayed.pdf')}}" class="btn mr-lg-2 custom-btn"><i class='uil uil-file-alt'></i> Download Resume</a>
                          <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">Get a free quote</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="{{asset('assets/images/undraw/undraw_software_engineer_lvl5.svg')}}" class="img-fluid" alt="svg image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="project py-5" id="project">
        <div class="container">
                
                <div class="row">
                  <div class="col-lg-11 text-center mx-auto col-12">

                      <div class="col-lg-8 mx-auto">
                        <h2>Things I have devlop for digital  agencies</h2>
                      </div>

                      <div class="owl-carousel owl-theme">
                        <div class="item">
                          <div class="project-info">
                            <img src="{{asset('assets/images/project/project-image01.png')}}" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="{{asset('assets/images/project/project-image02.png')}}" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="{{asset('assets/images/project/project-image03.png')}}" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="{{asset('assets/images/project/project-image04.png')}}" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="{{asset('assets/images/project/project-image05.png')}}" class="img-fluid" alt="project image">
                          </div>
                        </div>
                      </div>

                  </div>
                </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4">Work Experience</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span>2023</span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span>Backend for Car rental </span><small>PHP</small></h3>
                                  <p> Review the entered data     </p>                      
                                  <p>	Login and registration system for users </p>
                                  <p>	Determine access services according to user permissions </p>

                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2024</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Backend for kinder </span><small>Laravel</small></h3>
                                <p>	Login and registration system for users </p>
                                  <p>Possibility of using soft deletion </p> 
                                  <p>	View updated data first on the site  </p>
                                  <p>	Authenticating users in more than one way </p>
                                  <p>	High level security protection  </p>   
                                 </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2024</span>
                            </div>
                            <div class="timeline-info">
                            <h3><span>Backend for Cars blog </span><small>Laravel</small></h3>
                                  <p>	Login and registration system for users </p>
                                  <p>	Authenticating users in more than one way </p>
                                  <p>	Determine access services according to user permissions </p>                   
                                 </div>
                        </div>
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2024</span>
                            </div>
                            <div class="timeline-info">
                            <h3><span>Backend for Simple Blog  </span><small>Laravel</small></h3>
                                  <p>	Login and registration system for users </p>
                                  <p>	Authenticating users in more than one way </p>
                                  <p>	Determine access services according to user permissions </p>                   
                                 </div>
                        </div>
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2024</span>
                            </div>
                            <div class="timeline-info">
                            <h3><span>Backend for Simple Blog  </span><small>PHP</small></h3>
                                  <p>	Login and registration system for users </p>
                                  <p>	Determine access services according to user permissions </p>      
                                  <p>Possibility of using soft deletion </p> 
                                  <p>	View updated data first on the site  </p>             
                                 </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4 mobile-mt-2">Educations and Internship</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span>2017</span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span>computer science</span><small>Master Design</small></h3>
                                  <p>Bachelor of Specific Education -Educational technology and computer science Cumulative Grade: Excellent with honors (A+) GPA: 4 
.</p>
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2019</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Skills For Success</span><small>AMIDEAST-ALEX</small></h3>
                                <p> <span>1.	Business English (Incompany - Mcmilan).</span> </p>
                                <p> <span>2.  TOEIC CERTIFICATES.</span>     </p>
                                <p> <span>3.	Presentation Skills. </span>     </p>
                                <p> <span>4.	Time Management.</span>     </p>
                                <p> <span>5.	Career Development.</span>     </p>
                                <p> <span>6.	Decision Making.</span>     </p>
                                <p> <span>7.  TOEIC CERTIFICATES.</span>     </p>

                              
                            </div>
                        </div>
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2019</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Computer Networks </span><small>Information Technology Institute (ITI) Platform </small></h3>
                                <p>Basics of computer networks </p>
                            </div>
                        </div>
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2021</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Pioneering Women Training  </span><small>Plan International </small></h3>
                                <p> <span>Pioneering Women Training Program Egypt Professional Counseling Plan International </span> </p>
                            </div>
                        </div>
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2023</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Renewable Energy</span><small>Information Technology Institute (ITI)</small></h3>
                                <p>3-month Program, Intensive Code Camp (ICC), Intensive Training Program (ITP), Information Technology Institute (ITI), Ministry of Communication and Information Technology (MCIT), Port Said Branch.</p>
                            </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2023</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Backend Development-PHP </span><small>Egyptian Council for Training (CTD)</small></h3>
                                <p>1.	Backend Development Basics level Course </p>
                                <p>2.	Backend Development Advanced level Course.</p>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-5 mr-lg-5 col-12">
            <div class="google-map w-100">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13641.281157425077!2d32.27673065!3d31.26723459999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1716564289686!5m2!1sar!2seg" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                <div class="contact-info-item">
                  <h3 class="mb-3 text-white">Say hello</h3>
                  <p class="footer-text mb-0">01128550010</p>
                  <p><a href="mailto:aalaaelsayed95@gmail.com">aalaaelsayed95@gmail.com</a></p>
                </div>

               
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Interested to work together? Let's talk</h2>

              <form action="https://formspree.io/f/xwkgjndw" method="POST">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                  </div>

                  <div class="col-12">
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input type="submit" class="form-control submit-btn" value="Send Button">
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->
     <footer class="footer py-5">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12">                                
                        <p class="copyright-text text-center">Copyright &copy; 2024 Aalaa Company  . All rights reserved</p>
                        <p class="copyright-text text-center">Designed by <a rel="nofollow" href="https://www.facebook.com/tooplate">Tooplate</a></p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/Headroom.js')}}"></script>
    <script src="{{asset('assets/js/jQuery.headroom.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/smoothscroll.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

  </body>
</html>