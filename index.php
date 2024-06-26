<?php 
if(isset($_POST['submit'])){
    $to = "baonn@doppelherz.vn"; // this is your Email address
    $from = "baonn@sweetsica.com"; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $file = ($_POST['file'] ? $_POST['file'] : '');
    $subject = "Lời nhắn từ catalogue Thái Hưng!";
    $subject2 = "Copy of your form submission";
    $message = "- Họ tên: ". $name . " " . $email . "\n\n" . "- Email: " . $_POST['email'] . "\n\n" ."- Lời nhắn:" . "\n\n" . $_POST['msg'] . "\n\n" ."- File đính kèm: " . $_POST['file'];

    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['msg'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Gửi tin nhắn thành công! Cảm ơn " . $name . ", chúng tôi sẽ liên hệ bạn trong thời gian sớm nhất.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="format-detection" content="telephone=no">
    <title>TBTHT.VN</title>
    <link href="css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon_1.ico" type="image/x-icon">
    <style>
      @keyframes animate-circle {
      	from {
      		transform: scale(0);
      		opacity: 1;
      	}
      	to {
      		transform: scale(1);
      		opacity: 0;
      	}
      }
      #preloader{
      	width: 100%;
      	height: 100%;
      	position: fixed;
      	top: 0;
      	left: 0;
      	z-index: 999;
      	background: #1C1C1C;
      	background: linear-gradient(to right, rgba(36, 31, 31, 1) 0%, rgba(36, 31, 31, 1) 32%, rgba(74, 71, 70, 1) 100%);
      }
      .loader {
      	position: fixed;
      	top: 50%;
      	left: 50%;
      	height: 10rem;
      	width: 10rem;
      	transform: translateX(-50%) translateY(-50%);
      }
      .loader > .circle {
      	position: absolute;
      	height: inherit;
      	width: inherit;
      	background: #B66449;
      	border-radius: 0;
      	animation: animate-circle 2s cubic-bezier(.9, .24, .62, .79) infinite;
      }
      .loader > .circle:nth-of-type(1) {
      	animation-delay: 0s;
      }
      .loader > .circle:nth-of-type(2) {
      	animation-delay: calc(2s / -3);
      }
      .loader > .circle:nth-of-type(3) {
      	animation-delay: calc(2s / -6);
      }
    </style>
  </head>
  <body>
    <div id="preloader">
      <div class="loader">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>
    </div>
    <main class="main main--home" style="opacity:0">
      <canvas class="noise" id="noise"></canvas>
      <div class="header">
        <div class="header__left">
          <div class="header__letter">S</div>
          <div class="header__socials"><a href="" target="_blank">
              <svg>
                <use xlink:href="./svg/sprite.svg#fb"></use>
              </svg></a><a href="" target="_blank">
              <svg>
                <use xlink:href="./svg/sprite.svg#tw"></use>
              </svg></a><a href="" target="_blank">
              <svg>
                <use xlink:href="./svg/sprite.svg#in"></use>
              </svg></a></div>
        </div>
        <div class="header__right">
          <ul class="header__menu">
            <li class="active"><a class="js-scroll-link" href="javascript:;" data-link="0">Home</a></li>
            <li><a class="js-scroll-link" href="javascript:;" data-link="1">Portfolio</a></li>
            <li><a class="js-scroll-link" href="javascript:;" data-link="2">Milestones</a></li>
            <li><a class="js-scroll-link" href="javascript:;" data-link="3">testimonials</a></li>
            <li><a class="js-scroll-link" href="javascript:;" data-link="4">experience</a></li>
            <li><a class="js-scroll-link" href="javascript:;" data-link="5">blog</a></li>
            <li><a class="js-scroll-link" href="javascript:;" data-link="6">CONTACT</a></li>
          </ul>
          <div class="header__phone"><a href="tel:+84809889">+84 (0) 888 809 889</a></div>
        </div>
      </div>
      <div class="scroll">
        <div class="home-page">
          <div class="page-title show">
            <ul>
              <li>
                <div class="title">THAI BINH HUNG THINH CORP.</div>
                <div class="number">1.0</div>
              </li>
              <li>
                <div class="title">Portfolio</div>
                <div class="number">2.0</div>
              </li>
              <li>
                <div class="title">Milestones</div>
                <div class="number">3.0</div>
              </li>
              <li>
                <div class="title">testimonials</div>
                <div class="number">4.0</div>
              </li>
              <li>
                <div class="title">working experience</div>
                <div class="number">5.0</div>
              </li>
              <li>
                <div class="title">from the blog</div>
                <div class="number">5.0</div>
              </li>
              <li>
                <div class="title">contact</div>
                <div class="number">6.0</div>
              </li>
            </ul>
            <canvas class="noise noise--inner" id="noise_menu"></canvas>
          </div>
          <div class="scrollable">
            <section class="home">
              <div class="sticky-title">
                <ul>
                  <li>
                    <div>my name is robert</div>
                    <div>1.0</div>
                  </li>
                </ul>
              </div>
              <div class="content">
                <div class="content__left">
                  <div class="content__title">
                    <div class="h1">Peaceful</div>
                    <div class="h1">Prosperous</div>
                    <div class="h1">Construction</div>
                  </div>
                  <div class="content__description">
                    <div class="small">Address: No. 266 Tran Hung Dao Street, An Bai Town, Quynh Phu District, Thai Binh Province.</div>
                    <div class="small">Tel: +84 (0) 888 809 889</div>
                    <div class="small">Email: admin@tbht.vn</div>
                  </div>
                  <div class="content__btn-block">
                    <div class="content__btn-label small"> </div>
                    <a class="content__btn-btn btn btn--arrow js-scroll-link" href="#hireme" data-link="6">
                      <svg>
                        <use xlink:href="./svg/sprite.svg#arrow"></use>
                      </svg>
                    </a>
                  </div>
                  <div class="home__numbers">
                    <div class="home__number">
                      <div class="home__number-digital" data-number="18">18</div>
                      <div class="home__number-text small">Years <br>Creation & Development</div>
                    </div>
                    <div class="home__number">
                      <div class="home__number-digital" data-number="12">12</div>
                      <div class="home__number-text small">Product <br>lines</div>
                    </div>
                    <div class="home__number">
                      <div class="home__number-digital" data-number="80">80</div>
                      <div class="home__number-text small">Employees</div>
                    </div>
                  </div>
                </div>
                <div class="content__right">
                  <div class="home__circles">
                    <div class="home__circles-lines"></div>
                    <div class="home__circle home__circle--left"><img class="home__circle-img" src="img/image-1.jpg" alt=""></div>
                    <div class="home__circle home__circle--right">
                      <div class="home__circle-text">
                        <label class="input-file" for="brief">Welcome to Thai Hung Corp!</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="scrollable">
            <section class="projects">
              <div class="sticky-title">
                <ul>
                  <li>
                    <div>Portfolio</div>
                    <div>2.0</div>
                  </li>
                </ul>
              </div>
              <div class="content">
                <div class="content__left">
                  <div class="content__title">
                    <div class="h1">Brands</div>
                  </div>
                  <ul class="content__menu projects__menu">
                    <li class="active"><a href="javascript:;">Thai Hung Corp.</a></li>
                    <li><a href="javascript:;">XDD - Electric Cargo Vehicle</a></li>
                    <li><a href="javascript:;">Giong - Electric bicycles</a></li>
                    <li><a href="javascript:;">Mastertran - Doppelherz Vietnam</a></li>
                    <li><a href="javascript:;">Medinova - Germacare</a></li>
                    <!-- <li><a href="javascript:;">jonny - personal website</a></li> -->
                  </ul>
                  <div class="content__btn-block">
                    <div class="content__btn-label small">View all works</div><a class="content__btn-btn btn btn--arrow" href="https://www.behance.net/" target="_blank" rel="nofollow">
                      <svg>
                        <use xlink:href="./svg/sprite.svg#arrow"></use>
                      </svg></a>
                  </div>
                </div>
                <div class="content__right">
                  <div class="projects__blocks">
                    <div class="projects__block active"><a href="#" target="_blank" rel="nofollow"><img src="img/project-1.png" alt=""></a></div>
                    <div class="projects__block active"><a href="#" target="_blank" rel="nofollow"><img src="img/project-2.png" alt=""></a></div>
                    <div class="projects__block active"><a href="#" target="_blank" rel="nofollow"><img src="img/project-3.png" alt=""></a></div>
                    <div class="projects__block active"><a href="#" target="_blank" rel="nofollow"><img src="img/project-4.png" alt=""></a></div>
                    <div class="projects__block active"><a href="#" target="_blank" rel="nofollow"><img src="img/project-5.png" alt=""></a></div>
                    <!-- <div class="projects__block active"><a href="#" target="_blank" rel="nofollow"><img src="img/project-6.jpg" alt=""></a></div> -->
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="scrollable">
            <section class="awards">
              <div class="sticky-title">
                <ul>
                  <li>
                    <div>some highlights</div>
                    <div>3.0</div>
                  </li>
                </ul>
              </div>
              <div class="content">
                <div class="content__left">
                  <div class="content__title">
                    <div class="h1">Reputation</div>
                  </div>
                  <div class="content__description">
                    <div class="small">A long journey with many impressions.</div>
                  </div>
                  <!-- <div class="content__btn-block">
                    <div class="content__btn-label small">View behance</div><a class="content__btn-btn btn btn--arrow" href="#">
                      <svg>
                        <use xlink:href="./svg/sprite.svg#arrow"></use>
                      </svg></a>
                  </div> -->
                </div>
                <div class="content__right">
                  <div class="content__subtitle">Some <span>highlights</span></div>
                  <div class="content__awards awards__list">
                    <div class="content__award">
                      <div class="content__award-img"><img src="img/award-1.png" alt=""></div>
                      <div class="content__award-title">
                        <p>Top 10 most trusted brands in Vietnam</p>
                      </div>
                      <div class="content__award-text small">Highly appreciated for many criteria: business efficiency, product and service quality, brand development, leadership capacity, environmental protection, awareness of respect for the law, active participation in community activities community and society.</div>
                    </div>
                    <div class="content__award">
                      <div class="content__award-img"><img src="img/award-2.png" alt=""></div>
                      <div class="content__award-title">
                        <p>Cooperating with Roding Mobility Germany</p>
                      </div>
                      <div class="content__award-text small">Roding will provide technical advice, supervise and implement the entire product research and development process and technology transfer for Thai Hung.</div>
                    </div>
                    <div class="content__award">
                      <div class="content__award-img"><img src="img/award-3.png" alt=""></div>
                      <div class="content__award-title">
                        <p>Achieved ISO 13485:2016 certification</p>
                      </div>
                      <div class="content__award-text small">A certification that stipulates requirements for quality management systems applied at facilities providing medical instruments and related services to ensure the ability to provide products that meet customer requirements. products and legal regulations in the field of production,
                        Medical equipment business is applicable to manufacturers around the world</div>
                    </div>
                    <div class="content__award">
                      <div class="content__award-img"><img src="img/award-4.png" alt=""></div>
                      <div class="content__award-title">
                        <p>Cooperating with Wuling</p>
                      </div>
                      <div class="content__award-text small">Authorized production by Wuling - The brand has 39 years of experience in researching and manufacturing cars </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="scrollable">
            <section class="testimonials">
              <div class="sticky-title">
                <ul>
                  <li>
                    <div>Partners</div>
                    <div>4.0</div>
                  </li>
                </ul>
              </div>
              <div class="content" style="background-image: url(images/testmonials-bg.png); background-size: auto 100%; background-repeat: no-repeat; background-position: center center;">
                <div class="content__left">
                  <div class="content__title">
                    <div class="h1">+250</div>
                    <div class="h1">happy</div>
                    <div class="h1">clients</div>
                    <div class="small">I love my work and every project is my pride</div>
                  </div>
                  <div class="testimonials__clients">
                    <div class="testimonials__client"><img src="img/client-1.png" alt=""></div>
                    <div class="testimonials__client"><img src="img/client-2.png" alt=""></div>
                    <div class="testimonials__client"><img src="img/client-3.png" alt=""></div>
                    <div class="testimonials__client"><img src="img/client-4.png" alt=""></div>
                  </div>
                </div>
                <div class="content__right">
                  <div class="content__subtitle"><span>Creative</span> & dedicated is things that my studio brings for your business</div>
                  <div class="content__slider slides testimonials__slider">
                    <div class="slides__container">
                      <div class="slides__inner">
                        <div class="slide">
                          <div class="content__slider-text small">“ If you are seeking an Interior designer that will understand exactly your needs, and someone who will utilise their creative and technical skills in parity with your taste, then Suzanne at The Bauhaus Studio is perfect.</div>
                          <div class="content__slider-name">david & elisa</div>
                          <div class="content__slider-staff small">Apartment view lake at Brooklyn</div>
                        </div>
                        <div class="slide">
                          <div class="content__slider-text small">“ If you are seeking an Interior designer that will understand exactly your needs, and someone who will utilise their creative and technical skills in parity with your taste, then Suzanne at The Bauhaus Studio is perfect.</div>
                          <div class="content__slider-name">elisa</div>
                          <div class="content__slider-staff small">Apartment view lake at Brooklyn</div>
                        </div>
                        <div class="slide">
                          <div class="content__slider-text small">“ If you are seeking an Interior designer that will understand exactly your needs, and someone who will utilise their creative and technical skills in parity with your taste, then Suzanne at The Bauhaus Studio is perfect.</div>
                          <div class="content__slider-name">david & elisa</div>
                          <div class="content__slider-staff small">Apartment view lake at Brooklyn</div>
                        </div>
                        <div class="slide">
                          <div class="content__slider-text small">“ If you are seeking an Interior designer that will understand exactly your needs, and someone who will utilise their creative and technical skills in parity with your taste, then Suzanne at The Bauhaus Studio is perfect.</div>
                          <div class="content__slider-name">david</div>
                          <div class="content__slider-staff small">Apartment view lake at Brooklyn</div>
                        </div>
                      </div>
                    </div>
                    <div class="slides__controls">
                      <button class="slides__btn slides__btn--prev btn btn--invert btn--arrow" id="prevButton">
                        <svg>
                          <use xlink:href="./svg/sprite.svg#arrow"></use>
                        </svg>
                      </button>
                      <button class="slides__btn slides__btn--next btn btn--arrow" id="nextButton">
                        <svg>
                          <use xlink:href="./svg/sprite.svg#arrow"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="scrollable">
            <section class="experience">
              <div class="sticky-title">
                <ul>
                  <li>
                    <div>working experience</div>
                    <div>5.0</div>
                  </li>
                </ul>
              </div>
              <div class="content">
                <div class="content__bg" style="background-image: url(images/exp-bg.jpg);"></div>
                <div class="content__left">
                  <div class="content__title">
                    <div class="h1">Experience</div>
                  </div>
                  <div class="content__description">
                    <div class="small">15 years of operation in many development fields.</div>
                  </div>
                  <div class="content__btn-block"><a class="content__btn-btn btn" href="#">resume</a></div>
                </div>
                <div class="content__right">
                  <div class="content__awards experience__list">
                    <div class="content__award">
                      <div class="content__award-img"><img src="img/soc-fb.svg" alt=""></div>
                      <div class="content__award-title"><span class="small">2019-2021</span>
                        <p>Mastertran - Doppelherz Vietnam</p>
                      </div>
                      <div class="content__award-text small">Assertively exploit wireless initiatives rather than synergistic core competencies.</div>
                    </div>
                    <div class="content__award">
                      <div class="content__award-img"><img src="img/soc-be.svg" alt=""></div>
                      <div class="content__award-title"><span class="small">2017-2019</span>
                        <p>Thai Hung Corp.</p>
                      </div>
                      <div class="content__award-text small">im working via developer 9 years and i know all about design</div>
                    </div>
                    <div class="content__award">
                      <div class="content__award-img"><img src="img/soc-tw.svg" alt=""></div>
                      <div class="content__award-title"><span class="small">2014-2017</span>
                        <p>Medinova</p>
                      </div>
                      <div class="content__award-text small">Credibly streamline mission-critical value with multifunctional functionalities. Leading team designers.</div>
                    </div>
                    <div class="content__award">
                      <div class="content__award-img"><img src="img/soc-inst.svg" alt=""></div>
                      <div class="content__award-title"><span class="small">2012-2014</span>
                        <p>Giong</p>
                      </div>
                      <div class="content__award-text small">Proven ability to lead and manage a wide variety of design and development projects in team and independent situations.</div>
                    </div>
                    <div class="content__award">
                      <div class="content__award-img"><img src="img/soc-in.svg" alt=""></div>
                      <div class="content__award-title"><span class="small">206-2012</span>
                        <p>Xedaydien - XDD</p>
                      </div>
                      <div class="content__award-text small">Assertively exploit wireless initiatives rather than synergistic core competencies.</div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="scrollable">
            <section class="news">
              <div class="sticky-title">
                <ul>
                  <li>
                    <div>from the blog</div>
                    <div>5.0</div>
                  </li>
                </ul>
              </div>
              <div class="content">
                <div class="content__left">
                  <div class="content__title">
                    <div class="h1">latest</div>
                    <div class="h1">news</div>
                    <div class="small">I love my work and every project is my pride</div>
                  </div>
                  <ul class="content__menu news__menu">
                    <li class="active"><a href="javascript:;">How to design well?</a></li>
                    <li><a href="javascript:;">Lemon Illustration design</a></li>
                    <li><a href="javascript:;">Paul theme Branding</a></li>
                    <li><a href="javascript:;">Best typography 2020</a></li>
                    <li><a href="javascript:;">my name is pattison</a></li>
                  </ul>
                  <div class="content__btn-block">
                    <div class="content__btn-label small">View all works</div><a class="content__btn-btn btn btn--arrow" href="blog.html" target="_blank">
                      <svg>
                        <use xlink:href="./svg/sprite.svg#arrow"></use>
                      </svg></a>
                  </div>
                </div>
                <div class="content__right">
                  <div class="news__blocks">
                    <div class="news__block active">
                      <div class="news__block-info">
                        <div class="news__block-date small">3th January, 2020</div>
                        <div class="news__block-text small">Berling ® —  minimalism photography agency website. with the help of a  minimalistic design, the site turned out to be very  user-friendly  and responsive, and the brand became more.</div>
                        <div class="news__block-number">(01)</div>
                      </div>
                      <div class="news__block-image"><a href="blog.html" target="_blank"><img src="img/news-1.jpg" alt=""></a></div>
                    </div>
                    <div class="news__block active">
                      <div class="news__block-info">
                        <div class="news__block-date small">3th January, 2020</div>
                        <div class="news__block-text small">Berling ® —  minimalism photography agency website. with the help of a  minimalistic design, the site turned out to be very  user-friendly  and responsive, and the brand became more.</div>
                        <div class="news__block-number">(02)</div>
                      </div>
                      <div class="news__block-image"><a href="blog.html" target="_blank"><img src="img/news-2.jpg" alt=""></a></div>
                    </div>
                    <div class="news__block active">
                      <div class="news__block-info">
                        <div class="news__block-date small">3th January, 2020</div>
                        <div class="news__block-text small">Berling ® —  minimalism photography agency website. with the help of a  minimalistic design, the site turned out to be very  user-friendly  and responsive, and the brand became more.</div>
                        <div class="news__block-number">(03)</div>
                      </div>
                      <div class="news__block-image"><a href="blog.html" target="_blank"><img src="img/news-3.jpg" alt=""></a></div>
                    </div>
                    <div class="news__block active">
                      <div class="news__block-info">
                        <div class="news__block-date small">3th January, 2020</div>
                        <div class="news__block-text small">Berling ® —  minimalism photography agency website. with the help of a  minimalistic design, the site turned out to be very  user-friendly  and responsive, and the brand became more.</div>
                        <div class="news__block-number">(04)</div>
                      </div>
                      <div class="news__block-image"><a href="blog.html" target="_blank"><img src="img/news-4.jpg" alt=""></a></div>
                    </div>
                    <div class="news__block active">
                      <div class="news__block-info">
                        <div class="news__block-date small">3th January, 2020</div>
                        <div class="news__block-text small">Berling ® —  minimalism photography agency website. with the help of a  minimalistic design, the site turned out to be very  user-friendly  and responsive, and the brand became more.</div>
                        <div class="news__block-number">(05)</div>
                      </div>
                      <div class="news__block-image"><a href="blog.html" target="_blank"><img src="img/news-5.jpg" alt=""></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="scrollable" id="hireme">
            <section class="contacts">
              <div class="sticky-title">
                <ul>
                  <li>
                    <div>contact</div>
                    <div>6.0</div>
                  </li>
                </ul>
              </div>
              <div class="content">
                <div class="content__left">
                  <div class="content__title">
                    <div class="h1">Contact Us</div>
                    <div class="small">We will respone soon</div>
                  </div>
                  <ul class="content__menu contacts__menu">
                    <li class="active"><a class="noicon" href="javascript:;" onclick="window.open('mailto:admin@tbht.vn')">Email: admin@tbht.vn</a></li>
                    <li class="active"><a class="noicon" href="javascript:;">Address: No. 266 Tran Hung Dao Street, An Bai Town, Quynh Phu District, Thai Binh Province.</a></li>
                    <li class="active"><a href="https://tbht.vn/contact" target="_blank">www.tbht.vn/contact</a></li>
                    <li class="active"><a class="noicon" target="_blank">Tel: +84 (0) 888 809 889</a></li>
                  </ul>
                  <div class="contacts__copyright small">© Pattison 2021.  All Rights Resevered</div>
                </div>
                <div class="content__right">
                  <div class="content__subtitle">We always welcome you - <span>potential partners</span>. Please leave your information and we will have a discussion soon.</div>
                  <!-- <form class="content__contacts contacts__form js-contact-form" method="post" action=""> -->
                  <form class="content__contacts contacts__form" method="post" action="">
                    <div class="content__brief">
                      <!-- <div class="content__brief-title">
                        <label class="input-file">
                          <input type="file" name="file" id="brief"><span>send a brief</span>
                        </label>
                      </div> -->
                      <div class="content__brief-text small">Please send us link introduction file or service description so we can respond <label for="as-soon-as-posible">as soon as possible</label>.</div>
                    </div>
                    <div class="content__form">
                      <label class="content__form-input">
                        <input type="text" name="name"><span class="content__form-placeholder">name</span>
                      </label>
                      <label class="content__form-input">
                        <input type="email" name="email" required=""><span class="content__form-placeholder">EMAIL *</span>
                      </label>
                      <label class="content__form-input">
                        <input type="text" name="msg" required="" minlength="10"><span class="content__form-placeholder">MESSAGE *</span>
                      </label>
                      <label class="content__form-input">
                        <input type="text" name="file" minlength="10"><span class="content__form-placeholder">DOCUMENT LINK</span>
                      </label>
                      <div class="content__form-btn">
                        <!-- <input type="submit" name="submit" value="Submit"> -->
                        <button class="btn btn--arrow" type="submit">
                          <svg>
                            <use xlink:href="./svg/sprite.svg#arrow"></use>
                          </svg>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </main>
    <script src="js/main.js"></script>
  </body>
</html>