@extends('layouts.user')
@section('content')

<form class="banner"> 
<div class="img-ttg">
	<img src="{{url('images/biru.jpg')}}" style="height: 400px; width: 100%;">
</div>
</form>
<div class="general">
	<div class="con gen_con">
		<nav class="nav_page">
			<div class="a">
			<a href=""><b>Tentang Kami</b></a>
			</div>
			<div class="b">
			<a href=""><b>Kontak Kami</b></a>
			</div>			
		</nav>		
	</div>
</div>

<div class="container">
	<form class="container">
	<h1>Tentang Web Ini</h1>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	<video width="700" height="300" controls>
  <source src="{{url('video/Andre.mp4')}}" type="video/mp4">
  <source src="mov_bbb.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
	</form>
</div>

<div>
	<h3 class="kata">
		Kontolll Geo Gede
	</h3>
<p class="kata">
  	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
</div>

<h3 class="kata">
		Didukung Oleh nsakjsdnakdasndmaskl cksamcka
	</h3>
	<p class="kata">sadaskndaksjdsn ajdkas djkasdnasjkdnaskjdsandasjkdnasjdknsadjsandjasndajsdnajsdnajsdnasjdn</p>


<div class="row">
	<div class="img-dun">
	<img src="{{asset('images/biru.jpg')}}">
	<p>jndsajdnasjdjsadn asjk Lorem ipsum dolor sit amet </p>
	</div>

		<div class="img-dun">
	<img src="{{asset('images/biru.jpg')}}">
	<p>jndsajdnasjdjsadn asjk Lorem ipsum dolor sit amet </p>
	</div>
</div>
@endsection