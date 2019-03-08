<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
      <meta name="theme-color" content="#000000">
      <meta name="apple-mobile-web-app-capable" content="yes"/>
      <meta name="description" content="Perusahaan penyedia layanan dan konten pendidikan berbasis teknologi terkemuka di Indonesia.  #BelajarJadiMudah"/>
      <meta name="keywords" content="guru privat, guru les, guru kursus, try out online, soal un, aplikasi belajar online"/>
      <meta name="robots" content="index, follow, noodp, noydir"/>
      <script>!function(e,t,a,n,g){e[n]=e[n]||[],e[n].push({"gtm.start":(new Date).getTime(),event:"gtm.js"});var m=t.getElementsByTagName(a)[0],r=t.createElement(a);r.async=!0,r.src="https://www.googletagmanager.com/gtm.js?id=GTM-PVNLZFT",m.parentNode.insertBefore(r,m)}(window,document,"script","dataLayer")</script>

      <title>Capstone</title>
      <link rel="icon" type="image/png" href="{{asset('images/capstone.jpeg')}}"/>
      <script>function testFunc(){"undefined"!=typeof Android&&Android.showToast("Ruangguru webview")}</script><script>function params(n,o){if("android"===o){var i=window.location.pathname;return"undefined"!=typeof Android&&Android.showToast("ruangguru"),window.location.href=i+"?token="+n+"&client_type="+o}}</script>
      <script type="text/javascript" src="{{asset('css/js.js')}}"></script><script src="/static/js/7.a8840dfe.chunk.js"></script>
       <script type="text/javascript" src="{{asset('css/jquery.js')}}"></script><script src="/static/js/7.a8840dfe.chunk.js"></script>
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <link href="{{asset('css/style.css')}}" rel="stylesheet">
      <script>window._PRERENDERED = 1;</script>

            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVNLZFT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <title></title>
</head>
<body>

<header>
@yield('header')
</header>


<div class="home">

<section>
    @yield('slideshow')
</section>

<section class="home__section-ruangbelajar-desktop">
   <div>
      @yield('capstonefordigitalera')
   </div>
</section> 

<section class="home__section-whats">
    <div>
      @yield('tigahp')
    </div>
</section>

<section>
    <div class="achivement">
      @yield('achivement')
    </div>
</section>

</div>

  <footer class="footer">
    <div class="footer__top">
      @yield('footer')
    </div>
  </footer>
</body>
</html>