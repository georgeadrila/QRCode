<?php
session_start();
include 'connection.php';
// count rows in the userdata table
$stmt = $pdo->prepare("SELECT COUNT(*) FROM userdata");
$stmt->execute();
$count = $stmt->fetchColumn();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== FAVICON ===============-->
   <link rel="shortcut icon" href="./assets/img/qrcode.png" type="image/x-icon">

   <!--=============== REMIXICONS ===============-->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="assets/css/styles.css">

   <script src="./assets/js/jquery.min.js"></script>
   <script src="./assets/js/search.js"></script>
   
   <title>QRCodes UG</title>
</head>

<body>
   <!--==================== HEADER ====================-->
   <header class="header" id="header">
      <nav class="nav container">
         <a href="#" class="nav__logo">QRCodes Ug <i class="uil uil-qrcode-scan"></i></a>

         <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
               <li class="nav__item">
                  <a href="#home" class="nav__link active-link">
                     Home
                  </a>
               </li>

               <li class="nav__item">
                  <a href="#uses" class="nav__link">
                     Uses
                  </a>
               </li>

               <li class="nav__item">
                  <a href="#generate" class="nav__link">
                     Generate
                  </a>
               </li>

               <li class="nav__item">
                  <a href="#follow" class="nav__link">
                     Follow us
                  </a>
               </li>
            </ul>

            <!-- close button -->
            <div class="nav__close" id="nav-close">
               <i class="uil uil-multiply"></i>
            </div>
         </div>
         <div class="nav__buttons">
            <!-- theme change button -->
            <i class="uil uil-moon change-theme" id="theme-button"></i>

            <!-- toogle button -->
            <div class="nav__toggle" id="nav-toggle">
               <i class="uil uil-apps"></i>
            </div>
         </div>

      </nav>
   </header>

   <!--==================== MAIN ====================-->
   <main class="main">
      <!--==================== HOME ====================-->
      <section class="home section" id="home">
         <div class="home__container container grid">
            <div class="home__data">
               <h1 class="home__title">
                  Generate Free
                  <div class="home__title-box">
                     <div>QRCodes</div>
                  </div>
                  For Any Text!

                  <img src="./assets/img/star-img.svg" alt="home image" srcset="">
               </h1>

               <p class="home__description">
                  QR Codes are an easy way to share contact information, whatsapp numbers,
                  social media profiles, website links, documents, pictures and more.
                  <img src="./assets/img/circle-img.svg" alt="Home image" srcset="">
               </p>

               <a href="#" class="button">
                  Get Started Free <i class="uil uil-arrow-right"></i>
               </a>

               <div class="home__box">
                  <div class="">
                     <h3>17+</h3>
                     <span>Use cases</span>
                  </div>

                  <div class="">
                     <h3><?php echo $count ?>+</h3>
                     <span>QRCodes created</span>
                  </div>
               </div>
            </div>

            <img src="./assets/img/qrcodesfinal.png" alt="" class="home__image">
         </div>
      </section>

      <!--==================== LIST ====================-->
      <section class="list section">
         <div class="list__container container grid">
            <div class="list__content">
               <h1 class="list__number">#1</h1>

               <div class="list__blob">
                  <!-- <img src="./assets/img/list-yoga.png" alt=""> -->
                  Fast and free QRCodes
               </div>
            </div>

            <div class="list__data">
               <p class="list__description">
                  QR codes provide a hassle-free way to share your
                  contact details and social media handles. With a
                  simple scan, others can quickly access your phone number,
                  email, website, and social media profiles. This is
                  particularly useful for networking events or business cards.
                  A customized QR code can seamlessly integrate all your
                  information into one easy-to-scan code.

                  <img src="./assets/img/star-2-img.svg" alt="list image" srcset="">
               </p>

               <a href="#" class="button list__button">
                  Next <i class="uil uil-arrow-right"></i>

                  <img src="./assets/img/ellipse-img.svg" alt="arrow image" srcset="">
               </a>
            </div>
         </div>
      </section>

      <!--==================== HEALTH ====================-->
      <section class="health section" id="uses">
         <div class="health__container container grid">
            <div class="health__data">
               <h2 class="section__title">
                  What you can make
                  into a QRCode right now!
               </h2>

               <p class="health__description">
                  Phone number, whatsapp number, email,
                  website, social media profiles, documents, pictures and more.
               </p>

               <a href="#" class="button">
                  Lets start <i class="uil uil-arrow-right"></i>
               </a>
            </div>

            <div class="health__image">
               <img src="./assets/img/qrimage.png" alt="" class="health__img">

               <div class="health__rate">
                  <div class="health__icon">
                     <i class="uil uil-star"></i>
                  </div>

                  <div class="health__group">
                     <span class="health__title">
                        Unlimited
                     </span>

                     <span class="health__number">
                        QRCodes
                     </span>
                  </div>
               </div>

               <div class="health__course">
                  <div class="health__group">
                     <span class="health__number">
                        Free
                     </span>

                     <span class="health__title">
                        To use
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!--==================== JOIN ====================-->
      <section class="join section" id="generate">
         <div class="join__container container grid">
            <div class="join__content">
               <div class="">
                  <h2 class="join__title">
                     Create your QRCode!
                  </h2>

                  <p class="join__description">
                     Create your QRCode for a number or link to your social media pages,
                     website, email, phone number, whatsapp number, documents, pictures and more.
                     for free and share it with your friends.
                  </p>
               </div>


               <form class="join__form" method="" action="">
                  <input type="text" class="join__input" placeholder="e.g www.adygadgets.com or +256757591879" name="url" id="url">
                     <button class="button join__button" id="generate_button">
                     Generate <i class="uil uil-arrow-right"></i>
                  </button>
                  
               </form>
               <div class="qrdownload" id="display_hide">
                  <div class="result" id="display">
                     <img src="<?php echo $qrcodeimg['qrcode'] ?>" alt="" class="qrcode__image" style="margin-top: .5rem;">
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!--==================== ROUTINE ====================
      <section class="routine section" id="routine">
         <div class="routine__container container grid">
            <div class="routine__data">
               <h2 class="section__title">
                  Want your QRCode to do something different?
               </h2>

               <p class="routine__description">
                  Explain what you want your QRCode to do to
                  us and we will make it for you for free.. Maybe?!.
               </p>

               <a href="tel:+256757591879" class="button">
                  Get Started Now <i class="uil uil-arrow-right"></i>
               </a>
            </div>

            <div class="routine__images">
               <!-- <img src="./assets/img/Scan Barcode.png" alt="" class="routine__img-1"> -->
               <!-- <img src="./assets/img/qrimage.png" alt="" class="routine__img-2">

               <div class="routine__box-1">
                  <i class="uil uil-play routine__icon"></i>
                  <span class="routine__title">
                     High Quality QRCodes
                  </span>
               </div>

               <div class="routine__box-2">
                  <i class="uil uil-border-clear routine__icon"></i>
                  <span class="routine__title">
                     Clear Quality
                  </span>
               </div>
            </div>
         </div>
      </section> -->

      <!--==================== FOLLOW ====================-->
      <section class="follow section" id="follow">
         <div class="follow__container container grid">
            <div class="follow__content-1">
               <div class="follow__data">
                  <h2 class="section__title follow__title">
                     Follow Us On Instagram
                     <div class="">#QRCodes UG</div>
                  </h2>

                  <a href="https://instagram.com/george_adrian_s" class="button follow_button">
                     Follow <i class="uil uil-arrow-right"></i>
                  </a>
               </div>

               <!-- <img src="./assets//img/follow-yoga-1.png" alt="" class="follow__img-1">
               <img src="./assets//img/follow-yoga-2.png" alt="" class="follow__img-2"> -->
            </div>

            <div class="follow__content-2">
               <!-- <img src="./assets/img/follow-yoga-3.png" alt="" class="follow__img-3">
               <img src="./assets/img/follow-yoga-4.png" alt="" class="follow__img-4"> -->
            </div>
         </div>
      </section>

      <!--==================== JOIN ====================-->
      <section class="join section">
         <div class="join__container container grid">
            <div class="join__content">
               <div class="">
                  <h2 class="join__title">
                     Share your feedack
                  </h2>

                  <p class="join__description">
                     Share your feedback on how we could make
                     QRCodes UG a better service.
                  </p>
               </div>


               <form action="" class="join__form__feedback">
                  <input type="text" class="join__input" id="join-input" placeholder="Names">

                  <input type="text" class="join__input" id="join-input" placeholder="contact email or phone number">

                  <textarea name="message" id="" cols="30" rows="10" placeholder="Write your feedback here" class="join__input" style="font-family: var(--body-font); margin-top: .5rem; border-radius: 1rem;"></textarea>

                  <button class="button join__button">
                     Send Feeedback <i class="uil uil-arrow-right"></i>
                  </button>
               </form>

            </div>


         </div>
      </section>
   </main>

   <!--==================== FOOTER ====================-->
   <footer class="footer">
      <div class="footer__container container grid">
         <div class="footer__content grid">
            <div class="">
               <a href="#" class="footer__logo">QRcodes UG <i class="uil uil-qrcode-scan"></i></a>

               <p class="footer__description">
                  Take care of you qr codes and <br>
                  they will take care of you. <br>
                  here and now.
               </p>
            </div>

            <div class="footer__data grid">
               <div class="">
                  <h3 class="footer__title">Address</h3>

                  <p class="footer__info">
                     123 Street, Kampala <br>
                     Uganda
                  </p>
               </div>

               <div class="">
                  <h3 class="footer__title">Contact</h3>

                  <p class="footer__info">
                     +256 757591879 <br>
                     <a href="mailto:info@adygadgets.com" style="color: var(--text-color);">george@adygadgets.com</a>
                  </p>
               </div>

               <div class="">
                  <h3 class="footer__title">Office</h3>

                  <p class="footer__info">
                     Mon - Fri: <br>
                     9:00am - 6:00pm
                  </p>
               </div>
            </div>
         </div>

         <div class="footer__group">
            <ul class="footer__social">
               <li>
                  <a href="https://github.com/georgeadrila" target="_blank" class="footer__social-link">
                     <i class="uil uil-github"></i>
                  </a>
               </li>

               <li>
                  <a href="https://twitter.com/george_adrila" target="_blank" class="footer__social-link">
                     <i class="uil uil-twitter-alt"></i>
                  </a>

               </li>

               <li>
                  <a href="https://instagram.com/george_adrian_s" target="_blank" class="footer__social-link">
                     <i class="uil uil-instagram"></i>
                  </a>
               </li>

               <li>
                  <a href="https://george.adygadgets.com" target="_blank" class="footer__social-link">
                     <i class="uil uil-globe"></i>
                  </a>
            </ul>

            <span class="footer__copy">
               &copy; 2023 QRcode. All right reserved
            </span>
         </div>
      </div>
   </footer>

   <!--========== SCROLL UP ==========-->
   <a href="#" class="scrollup" id="scroll-up">
      <i class="uil uil-arrow-up scrollup__icon"></i>

      <!--=============== SCROLLREVEAL ===============-->
      <script src="./assets/js/scrollreveal.min.js"></script>

      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
</body>

</html>