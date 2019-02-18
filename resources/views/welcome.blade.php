@extends('layouts.user')
@section('content')
<br>
<br>

<section>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="{{asset('images/capstone.jpeg')}}" style="width:100%; height: 80vh;">
 
</div>

<div class="mySlides fade">
  <img src="https://capstoneindonesia.net/images/201901160816155c3ee84f55d69.jpg" style="width:100%; height: 80vh;">
  
</div>

<div class="mySlides fade">
  <img src="https://capstoneindonesia.net/images/201901160816555c3ee87782720.jpg" style="width:100% ;height:80vh;">
 
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

               </section>
               <section class="home__section-ruangbelajar-desktop">
                  <div>
                     <div class="container home_ruangbelajar-desktop__container">
                        <div class="home_ruangbelajar-desktop__main-content">
                           <div><img src="{{asset('images/qwerty.svg')}}" alt="ruangbelajar for Desktop" class="home_ruangbelajar-desktop__label"/></div>
                           <div class="home_ruangbelajar-desktop__line"></div>
                           <div class="home_ruangbelajar-desktop__title">Akses ruangbelajar jadi lebih nyaman</div>
                           <div class="home_ruangbelajar-desktop__body">Fitur yang ditunggu-tunggu kini sudah hadir! Gunakan ruangbelajar di PC atau laptop kamu. Belajar kini lebih nyaman dengan layar yang lebih besar.</div>
                           <a class="home_ruangbelajar-desktop__lading-page-link" href="/belajar_desktop">
                              Pelajari Selengkapnya
                              <svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="1em" width="1em" viewBox="0 0 40 40" ize="12px" style="vertical-align:middle">
                                 <g>
                                    <path d="m26.3 21.4q0 0.3-0.2 0.5l-10.4 10.4q-0.3 0.3-0.6 0.3t-0.5-0.3l-1.1-1.1q-0.2-0.2-0.2-0.5t0.2-0.5l8.8-8.8-8.8-8.7q-0.2-0.3-0.2-0.6t0.2-0.5l1.1-1.1q0.3-0.2 0.5-0.2t0.6 0.2l10.4 10.4q0.2 0.2 0.2 0.5z"></path>
                                 </g>
                              </svg>
                           </a>
                        </div>
                        <div class="home_ruangbelajar-desktop__second-content"><img src="../images/beranda.png" alt="ruangbelajar desktop image" class="home_ruangbelajar-desktop__second-content__image-mobile"/></div>
                     </div>
                  </div>
               </section>
               <section class="home__section-whats">
                  <div>
                     <div class="container whats">
                        <div class="whats__section-wrapper">
                           <div class="whats__phone-img"><img src="{{asset('images/hpanjng.png')}}" alt="Ruangguru Aplikasi Belajar Untuk Siswa SD, SMP, dan SMA!"/></div>
                           <div class="whats__side-wrapper">
                              <h1 class="whats__title">Aplikasi Belajar Untuk Siswa SD, SMP, dan SMA!</h1>
                              <div class="whats__line"></div>
                              <div class="whats__description">
                                 Ruangguru adalah <b>aplikasi belajar</b> dengan solusi belajar terlengkap untuk segala kesulitan belajar kamu. Konten tersedia untuk berbagai jenjang mulai dari SD, SMP dan SMA sesuai dengan kurikulum nasional dan dirancang khusus oleh pengajar terbaik dan berpengalaman (Master Teacher). Mulai dari<!-- --> <b>nonton video, latihan soal, les privat, tryout</b> semua bisa diakses dari smartphone kamu!
                              </div>
                              <div class="btn whats__btn whats__download-btn">DOWNLOAD GRATIS</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section>
                  <div class="achivement">
                     <div class="achivement__background-1"><span class="isvg pending achivement__background--oval-1"></span></div>
                     <div class="achivement__background-2"><span class="isvg pending achivement__background--oval-2"></span></div>
                     <div class="achivement__background-3"><span class="isvg pending achivement__background--oval-3"></span></div>
                     <div class="achivement__container-main">
                        <div src="https://ruangguru.imgix.net/png/map-indonesia.png?auto=enhance%2Cformat%2Ccompress&amp;" class="achivement__map-indonesia" placeholder="" style="background-image:url(https://ruangguru.imgix.net/png/map-indonesia.png?auto=enhance%2Cformat%2Ccompress&amp;)">
                           <div class="container achivement__container">
                              <div class="achivement__label" id="achivement_label">Ruangguru telah dipercaya oleh pemerintah <br/>daerah di seluruh Indonesia</div>
                           </div>
                        </div>
                        <div class="achivement__goverment">
                           <div class="achivement__city">
                              <span class="achivement__city--number">0</span>
                              <div class="achivement__city--label">Pemerintah <br/>Kabupaten/Kota</div>
                           </div>
                           <div class="achivement__province">
                              <span class="achivement__province--number">0</span>
                              <div class="achivement__province--label">Pemerintah <br/>Provinsi</div>
                           </div>
                        </div>
                        <div class="achivement__student">
                           <div class="container achivement__container">
                              <div class="achivement__student--background" placeholder="">
                                 <div class="achivement__student--label">
                                    Ruangguru telah membantu <br/>lebih dari 6.000.000 murid<!-- --> <br/>dalam kegiatan belajar
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="achivement__universitas">
                           <div class="container achivement__container">
                              <div class="achivement__universitas--text">
                                 Materi sesuai kurikulum nasional dan disiapkan oleh Master<!-- --> <br/>Teacher, pengajar-pengajar berpengalaman dan terbaik lulusan<br/>universitas-universitas top Indonesia dan luar negeri.
                              </div>
                              <div class="achivement__universitas--logo">
                                 <div class="achivement__universitas--logo-wrap"><img src="https://ruangguru.imgix.net/png/ui-logo@3x.png?auto=enhance%2Cformat%2Ccompress&amp;" alt="logo UI"/></div>
                                 <div class="achivement__universitas--logo-wrap"><img src="https://ruangguru.imgix.net/png/itb-logo@3x.png?auto=enhance%2Cformat%2Ccompress&amp;" alt="logo ITB"/></div>
                                 <div class="achivement__universitas--logo-wrap"><img src="https://ruangguru.imgix.net/png/uny-logo@3x.png?auto=enhance%2Cformat%2Ccompress&amp;" alt="logo UNY"/></div>
                                 <div class="achivement__universitas--logo-wrap"><img src="https://ruangguru.imgix.net/png/standford-logo@3x.png?auto=enhance%2Cformat%2Ccompress&amp;" alt="logo Stanford"/></div>
                                 <div class="achivement__universitas--logo-wrap"><img src="https://ruangguru.imgix.net/png/columbia-logo@3x.png?auto=enhance%2Cformat%2Ccompress&amp;" alt="logo Colombia"/></div>
                              </div>
                           </div>
                        </div>
                        <div class="achivement__awards">
                           <div class="container achivement__container">
                              <div class="achivement__awards--label">Ruangguru telah menerima berbagai penghargaan dari lembaga ternama</div>
                              <div class="achivement__awards--image" placeholder=""></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
@endsection