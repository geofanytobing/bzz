@extends('layouts.homeuser')
@section('header')

<style type="text/css">

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {margin:0; padding:0; border:0; outline:0; font-size:100%; vertical-align:baseline; background:transparent;} body {line-height: 1;}ol, ul{list-style:none;} blockquote, q{quotes:none;} blockquote:before, blockquote:after, q:before, q:after{content:'';content:none;} :focus{outline:0;} ins{text-decoration:none;} del{text-decoration:line-through;} table{border-collapse:collapse; border-spacing:0;}

a {

   color: #535859;
   text-decoration: none;

}

a:hover {

   color: #000000;

}

img {

   width: 100%;

}

header {

   background: #fff;
   width: 100%;
   height: 75px;
   position: fixed;
   top: 0;
   left: 0;  
   z-index: 100;
      align-items: center;


}

#logo{

   margin-top: 10px;
   float: left;
   width: 60px;
   height: 50px;
   background: url(../images/capstone.png) no-repeat center;
   background-size: cover; 
   display: block;
   margin-left: 10%;

}

nav {

   float: right;


}

#menu-icon {

   display: hidden;
   width: 40px;
   height: 40px;
   background: #9a4a0d url("../images/menu1.png") center;
   background-size: cover;
   margin-left: 10px;
}

a:hover#menu-icon {

   background-color: #555;
   border-radius: 4px 4px 0 0;
   float: right;

}

ul {

   list-style: none;
   margin-left: 50px;
   text-align: center;
   align-items: center;
   display: flex;

}

li {

   display: inline-block;
   float: left;
   margin-right:50px;
   font-size: 20px;

}


@media only screen and (max-width : 640px) {

   header {

      position: absolute;


   }

   #menu-icon {

      display:inline-block;

   }

   nav ul, nav:active ul { 

      display: none;
      position: absolute;
      padding: 20px;
      background: #fff;
    
      right: 20px;
      top: 60px;
      width: 100%;
      border-radius: 4px 0 4px 4px;

   }

   nav li {

      text-align: center;
      width: 100%;
      padding: 10px 0;
      margin: 0;

   }

   nav:hover ul {

      display: block;
      text-align: center;

   }
</style>



<a href="#" id="logo">
  
</a>

<nav>

<a href="#" id="menu-icon" class="">
  
</a>

<div class="site-header__nav_list">
<ul>

<li><a href="{{asset('tentang/index')}}">Tentang Kami</a></li>
<li><a href="{{asset('produk')}}">Produk Kami</a></li>
<li><a href="#">DDDDD</a></li>
<li><a href="#">aaaaaaaa</a></li>
<li><a href="#">Bantuan</a></li>
<li style="text-align:right;">
                  <div class="site-header__right">
                     <div class="auth-util site-header__auth-util">
                        <div class="auth-util__inner"><a class="auth-util__btn versa auth-util__btn--picton versa--picton" aria-current="false" data-test-id="menu-auth-login" href="{{url('login')}}">Masuk</a><a class="auth-util__btn inverse inverse--picton" aria-current="false" data-test-id="menu-auth-register" href="{{url('daftar')}}">Daftar</a></div>
                     </div>
                     <button type="button" class="btn btn--transparent site-header__menu-btn" data-theme="transparent" data-test-id="menu-hamburger-button">
                        <canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas>
                        <span class="isvg pending site-header__bars site-header__bars--picton"></span>
                     </button>
                  </div>
</li>
</ul>
</div>


</nav>

<script type="text/javascript">
   function classToggle() {
  const navs = document.querySelectorAll('.Navbar__Items')
  
  navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));
}
document.querySelector('.Navbar__Link-toggle')
  .addEventListener('click', classToggle);
</script>
<script type="text/javascript">
   var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000);
}
f
</script>
<br>
<br>
@endsection


@section('slideshow')
<br>
<br>
<br>

  <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="{{asset('images/capstone.jpeg')}}" style="width:100%; height: 80vh;">
     
    </div>

    <div class="mySlides fade">
      <img src="{{asset('images/lokon.png')}}" style="width:100% ;height:80vh;">
     
    </div>
    <div class="mySlides fade">
      <img src="{{asset('images/lokon.png')}}" style="width:100% ;height:80vh;">
     
    </div>
    <div class="mySlides fade">
      <img src="{{asset('images/lokon.png')}}" style="width:100% ;height:80vh;">
     
    </div>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
      <span class="dot" onclick="currentSlide(4)"></span> 
    </div>

    </div>

    <script type="text/javascript">
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000);
}
    </script>

@endsection



@section('capstonefordigitalera')

      <div class="container home_capstone-desktop__container">
         <div class="home_capstone-desktop__main-content">
            <div><img src="{{asset('images/qwerty.png')}}" class="home_capstone-desktop__label"/></div>
            <div class="home_ruangbelajar-desktop__line"></div>
            <div class="home_ruangbelajar-desktop__title">CAPSTONE INDONESIA</div>
            <div class="home_ruangbelajar-desktop__body">Fitur yang ditunggu-tunggu kini sudah hadir! Capstone Indonesia telah hadir untuk anda yang ingin membuat Aplikasi.<b> AYO BURUAN !!</b></div>
            <a class="home_capstone-desktop__lading-page-link" href="/belajar_desktop">
               Pelajari Selengkapnya
               <svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="1em" width="1em" viewBox="0 0 40 40" ize="12px" style="vertical-align:middle">
                  <g>
                     <path d="m26.3 21.4q0 0.3-0.2 0.5l-10.4 10.4q-0.3 0.3-0.6 0.3t-0.5-0.3l-1.1-1.1q-0.2-0.2-0.2-0.5t0.2-0.5l8.8-8.8-8.8-8.7q-0.2-0.3-0.2-0.6t0.2-0.5l1.1-1.1q0.3-0.2 0.5-0.2t0.6 0.2l10.4 10.4q0.2 0.2 0.2 0.5z"></path>
                  </g>
               </svg>
            </a>
         </div>
         <div class="home_ruangbelajar-desktop__second-content"><img src="../images/beranda(NEW).svg" alt="ruangbelajar desktop image" class="home_ruangbelajar-desktop__second-content__image-mobile"/></div>
      </div>
             
@endsection
@section('tigahp')

      <div class="container whats">
         <div class="whats__section-wrapper">
            <div class="whats__phone-img"><img src="{{asset('images/hpanjng.png')}}" alt="Ruangguru Aplikasi Belajar Untuk Siswa SD, SMP, dan SMA!"/></div>
            <div class="whats__side-wrapper">
               <h1 class="whats__title">Sebuah Perusahaan Yang Mengedepankan Permintaan Client</h1>
               <div class="whats__line"></div>
               <div class="whats__description">
                  CapstoneIndonesia adalah <b>Sebuah Jasa Pembuatan Aplikasi</b>
                  Terlengkap dan Terpercaya. dengan jasa pembuatan apliaksi jual beli, organisasi dan lainnya.
               </div>
               <div class="btn whats__btn whats__download-btn">DOWNLOAD GRATIS</div>
            </div>
         </div>
      </div>
   
@endsection

@section('achivement')

      <div class="achivement__background-1"><span class="isvg pending achivement__background--oval-1"></span></div>
      <div class="achivement__background-2"><span class="isvg pending achivement__background--oval-2"></span></div>
      <div class="achivement__background-3"><span class="isvg pending achivement__background--oval-3"></span></div>
      <div class="achivement__container-main">
         <div src="https://ruangguru.imgix.net/png/map-indonesia.png?auto=enhance%2Cformat%2Ccompress&amp;" class="achivement__map-indonesia" placeholder="" style="background-image:url('images/map-indonesia(NEW).png')">
            <div class="container achivement__container">
               <div class="achivement__label" id="achivement_label">Capstone Indonesia telah dipercaya oleh pemerintah 
                <br>daerah di seluruh Indonesia</div>
            </div>
         </div>
         <div class="achivement__goverment">
            <div class="achivement__city">
               <span class="achivement__city--number">0</span>
               <div class="achivement__city--label">Pemerintah <br>Kabupaten/Kota</div>
            </div>
            <div class="achivement__province">
               <span class="achivement__province--number">0</span>
               <div class="achivement__province--label">Pemerintah <br>Provinsi</div>
            </div>
         </div>
         <div class="achivement__student">
            <div class="container achivement__container">
               <div class="achivement__student--background" placeholder="">
                  <div class="achivement__student--label">
                     Capstone Indonesia telah membantu <br/>lebih dari 6.000.000 Client<br/>dalam kegiatan Jual Beli,<br> Organisasi Dan lainnya.
                  </div>
               </div>
            </div>
         </div>
         <div class="achivement__universitas">
            <div class="container achivement__container">
               <div class="achivement__universitas--text">
                  Permintaan Aplikasi Sesusai dengan Permintaan Client <br>
                  Programmer yang handal dan berpengalaman dalam membuat aplikasi <br>
                  Serta sudah dipercaya oleh pemerintah diseluruh Indnesiai.
               </div>
               <div class="achivement__universitas--logo">
                  <div class="achivement__universitas--logo-wrap"><img src="{{asset('images/ui-logo(NEW)@3x.png')}}" alt="logo UI"/></div>
                  <div class="achivement__universitas--logo-wrap"><img src="{{asset('images/itb-logo(NEW)@3x.png')}}" alt="logo ITB"/></div>
                  <div class="achivement__universitas--logo-wrap"><img src="{{asset('images/uny-logo(NEW)@3x.png')}}" alt="logo UNY"/></div>
                  <div class="achivement__universitas--logo-wrap"><img src="{{asset('images/standford-logo(NEW)@3x.png')}}" alt="logo Stanford"/></div>
                  <div class="achivement__universitas--logo-wrap"><img src="{{asset('images/columbia-logo(NEW)@3x.png')}}" alt="logo Colombia"/></div>
               </div>
            </div>
         </div>
         <div class="achivement__awards">
            <div class="container achivement__container">
              <div class="achivement__awards--label">
                <p>
                  Capstone Indonesia telah menerima berbagai 
                  penghargaan dari lembaga ternama
                </p>
              </div>
               <div class="achivement__awards--image" placeholder=""></div>
            </div>
         </div>
      </div>
               
@endsection
            @section('footer')
                    <div class="container footer__container">
                        <div class="footer__about">
                            <siteAppFooter>
                                <div class="footer__apps">
                                    <div class="footer__apps_badges_container">
                                        <div class="footer__apps_caption">
                                           <center> 
                                           ABOUT US
                                           </center>
                                        </div>
                                    </div>
                                </div>
                            </siteAppFooter>
                        </div>
                    </div>
                    <div class="container undefined">
                        <div class="footer__line"></div>
                    </div>
                    <div class="container footer__container">
                        <div class="site-maps">
                           <center>
                            <div class="site-map site-maps__item">
                                    <h3 style="color: white;">We Are</h3>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                            </div>
                            <div class="site-map site-maps__item">
                                    <h3 style="color: white;">Always</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                            </div>
                            <div class="site-map site-maps__item">
                                    <h3 style="color: white;">Here</h3>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                            </div>
                            <div class="site-map site-maps__item">
                                    <h3 style="color: white;">Oke</h3>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                            </div>
                            <!-- <div class="site-map site-maps__item site-map__item_sosmed">
                                <h3 style="color: white;">Follow Us</h3>
                                <ul class="list site-map__list">
                                    <li class="list__item site-map__list_item">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="list__item site-map__list_item">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list__item site-map__list_item">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list__item site-map__list_item">
                                        <a href="#"><i class="fas fa-globe"></i></a>
                                    </li>
                                </ul>
                            </div> -->
                            </center>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="container footer__container">
                        <div class="row">
                           <div class="footer__bottom_div text-left">
                            <span class="footer__bottom-text">© 2018 capstone. All Rights Reserved</span>
                           </div>
                           <!-- <div class="footer__bottom_div text-right">
                               <a href="#"><i class="fab fa-instagram"></i></a>
                               <a href="#"><i class="fab fa-twitter"></i></a>
                               <a href="#"><i class="fab fa-facebook-f"></i></a>
                               <a href="#"><i class="fas fa-globe"></i></a>
                           </div> -->
                        </div>
                    </div>
                
            @endsection