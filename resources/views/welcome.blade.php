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
                           <div><img src="https://ruangguru.imgix.net/png/home_ruangbelajardesktop-label.png?auto=enhance%2Cformat%2Ccompress&amp;" alt="ruangbelajar for Desktop" class="home_ruangbelajar-desktop__label"/></div>
                           <div class="home_ruangbelajar-desktop__line"></div>
                           <div class="home_ruangbelajar-desktop__title">Akses ruangbelajar jadi lebih nyaman</div>
                           <div class="home_ruangbelajar-desktop__body">Fitur yang ditunggu-tunggu kini sudah hadir! Gunakan ruangbelajar di PC atau laptop kamu. Belajar kini lebih nyaman dengan layar yang lebih besar.</div>
                        </div>
                        <div class="home_ruangbelajar-desktop__second-content"><img src="https://ruangguru.imgix.net/png/home_ruangbelajardesktop-section-mobile.png?auto=enhance%2Cformat%2Ccompress&amp;" alt="ruangbelajar desktop image" class="home_ruangbelajar-desktop__second-content__image-mobile"/></div>
                     </div>
                  </div>
               </section>
               <section class="home__section-whats">
                  <div>
                     <div class="container whats">
                        <div class="whats__section-wrapper">
                           <div class="whats__phone-img"><img src="https://ruangguru.imgix.net/png/new-rg-app-pict.png?auto=format%2Ccompress&amp;" alt="Ruangguru Aplikasi Belajar Untuk Siswa SD, SMP, dan SMA!"/></div>
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
                  <div class="preview-products">
                     <div class="preview-products__item preview-products__item--ruangbelajar" name="ruangbelajar">
                        <div class="container preview-products__item-inner-container">
                           <div class="preview-products__item-content preview-products__item-content-ruangbelajar">
                              <img src="https://ruangguru.imgix.net/svg/preview-ruangbelajar-logo.svg?auto=enhance%2Cformat%2Ccompress&amp;" alt="Logo of ruangbelajar" class="preview-products__item-content-logo preview-products__item-content-logo-ruangbelajar"/>
                              <div class="preview-products__item-content-line} preview-products__item-content-line-ruangbelajar"></div>
                              <div class="preview-products__item-content-tagline">#BelajarJadiMudah dengan misi-misi seru berisi video, kuis, dan rangkuman!</div>
                              <p class="preview-products__item-content-text">Ribuan video belajar, latihan soal, dan rangkuman untuk setiap mata pelajaran utama dari jenjang SD, SMP, dan SMA siap buat kamu dapat nilai bagus di ulangan harian, UTS, UAS, UN, bahkan SBMPTN.</p>
                              <p class="preview-products__item-content-text"></p>
                              <a class="link link--btn btn  btn-ruangbelajar preview-products__btn preview-products__btn--ruangbelajar" href="/belajar">
                                 <canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas>
                                 COBA GRATIS
                              </a>
                           </div>
                           <div class="preview-products__item-illustration preview-products__item-illustration-ruangbelajar">
                              <div class="preview-products__item-illustration-desktop"><img src="https://ruangguru.imgix.net/png/preview-ruangbelajar-illustration-desktop.png?auto=enhance%2Cformat%2Ccompress&amp;" alt=""/></div>
                              <div class="preview-products__item-illustration-mobile"><img src="https://ruangguru.imgix.net/png/preview-ruangbelajar-illustration-mobile.png?auto=enhance%2Cformat%2Ccompress&amp;" alt=""/></div>
                           </div>
                        </div>
                     </div>
                     <div class="preview-products__item preview-products__item--digitalbootcamp" name="digitalbootcamp">
                        <div class="container preview-products__item-inner-container">
                           <div class="preview-products__item-content preview-products__item-content-digitalbootcamp">
                              <img src="https://ruangguru.imgix.net/svg/preview-digitalbootcamp-logo.svg?auto=enhance%2Cformat%2Ccompress&amp;" alt="Logo of digitalbootcamp" class="preview-products__item-content-logo preview-products__item-content-logo-digitalbootcamp"/>
                              <div class="preview-products__item-content-line} preview-products__item-content-line-digitalbootcamp"></div>
                              <div class="preview-products__item-content-tagline">#BelajarJadiSeru di group chat belajar online dengan tutor standby, ribuan latihan soal, dan modul belajar!</div>
                              <p class="preview-products__item-content-text">Bebas tanya-jawab soal sepuasnya ke tutor online di group chat eksklusif-cuma 20 orang saja. Dapatkan juga ratusan modul belajar berilustrasi dan ribuan soal latihan untuk UN, SBMPTN, dan belajar harianmu yang disusun Master Teacher berpengalaman sesuai kurikulum nasional!</p>
                              <p class="preview-products__item-content-text">Yuk daftar sekarang! Tersedia untuk kelas 6 SD sampai 12 SMA dan SBMPTN.</p>
                              <a class="link btn  btn-digitalbootcamp preview-products__btn preview-products__btn--digitalbootcamp" href="https://marketing.ruangguru.com/rgdigitalbootcamp/">
                                 <canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas>
                                 PELAJARI LEBIH LANJUT
                              </a>
                           </div>
                           <div class="preview-products__item-illustration preview-products__item-illustration-digitalbootcamp">
                              <div class="preview-products__item-illustration-desktop"><img src="https://ruangguru.imgix.net/png/preview-digitalbootcamp-illustration-desktop.png?auto=enhance%2Cformat%2Ccompress&amp;" alt=""/></div>
                              <div class="preview-products__item-illustration-mobile"><img src="https://ruangguru.imgix.net/png/preview-digitalbootcamp-illustration-mobile.png?auto=enhance%2Cformat%2Ccompress&amp;" alt=""/></div>
                           </div>
                        </div>
                     </div>
                     <div class="preview-products__item preview-products__item--ruangles" name="ruangles">
                        <div class="container preview-products__item-inner-container">
                           <div class="preview-products__item-content preview-products__item-content-ruangles">
                              <img src="https://ruangguru.imgix.net/svg/preview-ruangles-logo.svg?auto=enhance%2Cformat%2Ccompress&amp;" alt="Logo of ruangles" class="preview-products__item-content-logo preview-products__item-content-logo-ruangles"/>
                              <div class="preview-products__item-content-line} preview-products__item-content-line-ruangles"></div>
                              <div class="preview-products__item-content-tagline">#BelajarJadiHebat dimulai dari guru privat untuk kamu!</div>
                              <p class="preview-products__item-content-text">Tingkatkan kemampuan akademik maupun non-akademikmu dengan guru les privat yang berpengalaman di bidangnya. Semua bisa diatur sesuai keinginanmu, loh! Tinggal pesan dan guru terbaik siap datang ke tempatmu!</p>
                              <p class="preview-products__item-content-text"></p>
                              <a class="link link--btn btn  btn-ruangles preview-products__btn preview-products__btn--ruangles" href="/les">
                                 <canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas>
                                 CARI GURU
                              </a>
                           </div>
                           <div class="preview-products__item-illustration preview-products__item-illustration-ruangles">
                              <div class="preview-products__item-illustration-desktop"><img src="https://ruangguru.imgix.net/png/preview-ruangles-illustration-iqbal-desktop.png?auto=enhance%2Cformat%2Ccompress&amp;" alt=""/></div>
                              <div class="preview-products__item-illustration-mobile"><img src="https://ruangguru.imgix.net/png/preview-ruangles-illustration-iqbal-mobile.png?auto=enhance%2Cformat%2Ccompress&amp;" alt=""/></div>
                           </div>
                        </div>
                     </div>
                     <div class="preview-products__item preview-products__item--ruanglesonline" name="ruanglesonline">
                        <div class="container preview-products__item-inner-container">
                           <div class="preview-products__item-content preview-products__item-content-ruanglesonline">
                              <img src="https://ruangguru.imgix.net/svg/preview-ruanglesonline-logo.svg?auto=enhance%2Cformat%2Ccompress&amp;" alt="Logo of ruanglesonline" class="preview-products__item-content-logo preview-products__item-content-logo-ruanglesonline"/>
                              <div class="preview-products__item-content-line} preview-products__item-content-line-ruanglesonline"></div>
                              <div class="preview-products__item-content-tagline">#BelajarJadiPraktis dengan bertanya ke tutor secara online!</div>
                              <p class="preview-products__item-content-text">Ngerjain soal dan PR nggak perlu bingung lagi! Kamu bisa konsultasikan masalah kamu via aplikasi live chat, lalu guru ruanglesonline akan membantu menjelaskan dan menjawab pertanyaanmu dalam hitungan menit!</p>
                              <p class="preview-products__item-content-text"></p>
                              <a class="link link--btn btn  btn-ruanglesonline preview-products__btn preview-products__btn--ruanglesonline" href="/les-online">
                                 <canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas>
                                 COBA GRATIS
                              </a>
                           </div>
                           <div class="preview-products__item-illustration preview-products__item-illustration-ruanglesonline">
                              <div class="preview-products__item-illustration-desktop"><img src="https://ruangguru.imgix.net/png/preview-ruanglesonline-illustration-iqbal-desktop.png?auto=enhance%2Cformat%2Ccompress&amp;" alt=""/></div>
                              <div class="preview-products__item-illustration-mobile"><img src="https://ruangguru.imgix.net/png/preview-ruanglesonline-illustration-mobile.png?auto=enhance%2Cformat%2Ccompress&amp;" alt=""/></div>
                           </div>
                        </div>
                     </div>
                     <div class="preview-products__item preview-products__item--ruanguji" name="ruanguji">
                        <div class="container preview-products__item-inner-container">
                           <div class="preview-products__item-content preview-products__item-content-ruanguji">
                              <img src="https://ruangguru.imgix.net/svg/preview-ruanguji-logo.svg?auto=enhance%2Cformat%2Ccompress&amp;" alt="Logo of ruanguji" class="preview-products__item-content-logo preview-products__item-content-logo-ruanguji"/>
                              <div class="preview-products__item-content-line} preview-products__item-content-line-ruanguji"></div>
                              <div class="preview-products__item-content-tagline">Tryout Ujian Online</div>
                              <p class="preview-products__item-content-text">Uji persiapan kamu dalam menghadapi UN, Ujian Semester, UAS, SBMPTN, UKG serta ujian lainnya, dengan mengikuti tryout berbasis online. Kamu juga bisa melihat pembahasan soal serta analisis dengan kemampuanmu secara lengkap!</p>
                              <p class="preview-products__item-content-text"></p>
                              <a class="link btn  btn-ruanguji preview-products__btn preview-products__btn--ruanguji" href="https://uji.ruangguru.com/">
                                 <canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas>
                                 COBA GRATIS
                              </a>
                           </div>
                           <div class="preview-products__item-illustration preview-products__item-illustration-ruanguji">
                              <div class="preview-products__item-illustration-desktop"><img src="https://ruangguru.imgix.net/png/preview-ruanguji-illustration-desktop.png?auto=enhance%2Cformat%2Ccompress&amp;" alt=""/></div>
                              <div class="preview-products__item-illustration-mobile"><img src="https://ruangguru.imgix.net/png/preview-ruanguji-illustration-mobile.png?auto=enhance%2Cformat%2Ccompress&amp;" alt=""/></div>
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