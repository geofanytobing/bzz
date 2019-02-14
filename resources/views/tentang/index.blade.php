@extends('layouts.user')
@section('content')

<div class="general-page">
                <section class="general-page__section">
                    <div style="background-image:url(https://ruangguru.imgix.net/png/tentang-kami.png?auto=enhance%2Cformat%2Ccompress&amp;)" class="general-page__banner"></div>
                </section>
                <div class="general-page__nav">
                    <div class="container general-page__nav_container">
                        <nav class="general-page__nav_inner"><a class="general-page__nav_link active" aria-current="true" href="/general/about">Tentang Ruangguru</a><a class="general-page__nav_link" aria-current="false" href="/general/contact">Kontak Kami</a></nav>
                    </div>
                </div>
                <section class="general-page__section general-page__section_header">
                    <div class="container undefined">
                        <div class="general-child">
                            <div class="about">
                                <h2 class="about__title" data-test-id="page-title-about">Tentang Ruangguru</h2>
                                <div class="about__body">
                                    <section>
                                        <p>Ruangguru merupakan perusahaan teknologi terbesar dan terlengkap di Indonesia yang berfokus pada layanan berbasis pendidikan dan telah memiliki lebih dari 6 juta pengguna serta telah mengelola lebih dari 150.000 guru yang menawarkan jasa di lebih dari 100 bidang pelajaran. Perusahaan ini didirikan sejak tahun 2014 oleh Belva Devara dan Iman Usman, yang keduanya berhasil masuk dalam jajaran pengusaha sukses dibawah 30 tahun melalui Forbes 30 under 30 untuk teknologi konsumen di Asia.</p>
                                        <p>Ruangguru berkomitmen untuk menjadi mitra bagi pemerintah daerah demi memberikan pendidikan berkualitas melalui Sistem Manajemen Belajar (LMS). Tahun lalu, Ruangguru berhasil bekerja sama dengan 32 (dari 34) pemerintah provinsi dan lebih dari 326 pemerintah kota dan kabupaten di Indonesia. Selain itu, Ruangguru juga menawarkan video belajar berlangganan, marketplace les privat, layanan bimbingan belajar on-demand, tryout ujian online, dan lain-lain.</p>
                                    </section>
                                    <section class="about__video-wrapper">
                                        <div class="about__player">
    <video width="400" controls class="about__video-wrapper">
      <source src="{{asset('images/tayo.mp4')}}" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
  </div>
                                    </section>
                                   </div>
                               </div>
                           </div>
@endsection