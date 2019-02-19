@extends('layouts.user')
@section('content')

<div class="general-page">
                <section class="general-page__section">
                    <div style="background-image:url(https://ruangguru.imgix.net/png/tentang-kami.png?auto=enhance%2Cformat%2Ccompress&amp;)" class="general-page__banner"></div>
                </section>
                <div class="general-page__nav">
                    <div class="container general-page__nav_container">
                        <nav class="general-page__nav_inner"><a class="general-page__nav_link active" aria-current="true" href="/tentang/index">Tentang Ruangguru</a><a class="general-page__nav_link" aria-current="false" href="/tentang/kontak">Kontak Kami</a></nav>
                    </div>
                </div>
                <section class="general-page__section general-page__section_header">
                    <div class="container undefined">
                        <div class="general-child">
                            <div class="about">
                                <h2 class="about__title" data-test-id="page-title-about">Tentang Capstone Indonesia</h2>
                                <div class="about__body">
                                    <section>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </section>
                                    <section class="about__video-wrapper">
                                     	<div class="about__player">
    										<video width="400" controls class="about__video-wrapper">
      											<source src="{{asset('images/tayo.mp4')}}" type="video/mp4">
      											Your browser does not support HTML5 video.
    										</video>
 			 							</div>
                                    </section>

                                    <section class="about__section about__section--layout">
                                    	<div>
                                    		<h3 class="about__section-title kata" style="text-align: left;">Capstone Untuk Pendidikan Indonesia</h3>
                                    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    	</div>
                                    	<div>
                                    		<a class="link about__btn about__btn--orange about__btn--why" href="/help/student">Mengapa Belajar di Ruangguru?</a><a class="link about__btn about__btn--blue" href="/help/teacher">Mengapa Mengajar di Ruangguru?</a>
                                    	</div>
                                    </section>

                                    <section>
                                    <h3 class="about__section-title">Startup Digital di bidang pendidikan dan Teknologi terbaik di Indonesia</h3>
                                    	<span>Sebagai salah satu startup teknologi dan pendidikan terbesar di Indonesia, Ruangguru telah dinobatkan menjadi penerima beragam penghargaan.</span>
                                    	<div class="about__awards">
                                    		<div class="about__award">
                                    			<img src="{{asset('images/google-launchpad.png')}}" alt="google launchpad"/><span>Google Launchpad Accelerator 2016 - Awardee</span>
                                    		</div>
                                    		<div class="about__award">
                                    			<img src="{{asset('images/unicef.png')}}" alt="unicef"/>
                                    			<span>UNICEF Youth Innovation Forum 2015 - Innovation to Watch</span>
                                    		</div>
                                    		<div class="about__award">
                                    			<img src="{{asset('images/bubu-awards-logo.png')}}" alt="bubu awards"/>
                                    			<span>Bubu Awards 2016 - Indonesia&#x27;s Best Education Web</span>
                                    		</div>
                                    		<div class="about__award">
                                    			<img src="{{asset('images/solve-logo.png')}}" alt="solve MIT award"/>
                                    			<span>MIT Solve- Solver of MIT</span>
                                    		</div>
                                    		<div class="about__award">
                                    			<img src="{{asset('images/atlassian-logo.png')}}" alt="" class="about__atlassian"/>
                                    			<span>the Atlassian Foundation - Atlassian Prize</span>
                                    		</div>
                                    		<div class="about__award">
                                    			<img src="{{asset('images/australian-gov.png')}}" alt=""/>
                                    			<span>Departemen of Foreign Affairs</span>
                                    			<span>and Trade - DFAT Indo -</span>
                                    			<span>Pacific Development Prize</span>
                                    		</div>
                                    		<div class="about__award">
                                    			<img src="{{asset('images/kinses-logo.png')}}" alt="unicef" class="about__kinses"/>
                                    			<span>
                                    			Kaizen, INSEAD &amp; NYU Stern Education Symposium (KINSES 2016) - Honorable Mention</span>
                                    		</div>
                                    		<div class="about__award">
                                    			<img src="{{asset('images/ricebowl-awards.png')}}" alt=""/>
                                    			<span>Rice Bowl Startup Awards</span>
                                    			<span>2016 - Best Social</span>
                                    			<span>Entrepreneur for Tech</span>
                                    			<span>Startup</span>
                                    		</div>
                                    	</div>
                                    </section>

                                   </div>
                               </div>
                           </div>

@endsection