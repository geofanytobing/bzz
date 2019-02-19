 @extends('layouts.user')
 @section('content')

 <div class="general-page">
                <section class="general-page__section">
                    <div style="background-image:url(https://ruangguru.imgix.net/png/tentang-kami.png?auto=enhance%2Cformat%2Ccompress&amp;)" class="general-page__banner"></div>
                </section>
                <div class="general-page__nav">
                    <div class="container general-page__nav_container">
                        <nav class="general-page__nav_inner"><a class="general-page__nav_link" aria-current="false" href="{{asset('tentang/tentang')}}">Tentang Ruangguru</a><a class="general-page__nav_link active" aria-current="true" href="/general/contact">Kontak Kami</a></nav>
                    </div>
                </div>
                <section class="general-page__section general-page__section_header">
                    <div class="container undefined">
                        <div class="general-child">
                            <div class="contact">
                                <div class="contact__body">
                                    <div class="contact__layout">
                                        <div class="contact__layout_left">
                                            <h2 class="contact__title">Hubungi Kami</h2>
                                            <p>Apabila terdapat pertanyaan seputar Capstone Indonesia atau kerjasama dan hal lainnya, hubungi kami di +62 21 285 43000 atau isi formulir di bawah ini. Anda juga dapat meberikan informasi,saran atau bug di web kami.
                                            <div>
                                                <form class="create-class__form form-contact">
                                                    <div class="fields form-contact__fields"><label class="fields__label form-contact__fields-label">Nama<span class="star">*</span></label><input type="text" name="name" value="" class="fields__input form-contact__fields-input" required="" /></div>
                                                    <div class="fields form-contact__fields"><label class="fields__label form-contact__fields-label">Email<span class="star">*</span></label><input type="email" name="email" value="" class="fields__input form-contact__fields-input" required="" /></div>
                                                    <div class="fields form-contact__fields"><label class="fields__label form-contact__fields-label">Nomor Handphone<span class="star">*</span></label><input type="text" name="phone" value="" class="fields__input form-contact__fields-input" required="" /></div>
                                                    <div class="fields form-contact__fields"><label class="fields__label form-contact__fields-label">Subjek Pesan<span class="star">*</span></label><input type="text" name="subject" value="" class="fields__input form-contact__fields-input" required="" /></div>
                                                    <div class="textarea textarea--required"><label class="textarea__label">Pesan / Pertanyaan
                                                            <!-- -->*</label>
                                                        <div><textarea name="message" class="textarea__input"></textarea></div>
                                                    </div><button type="submit" class="btn form-contact__btn"><canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas>Kirim</button>
                                                </form>
                                            </div>
                                        </div>
                                        <aside class="contact__layout_right">
                                            <div class="super-card">
                                                <div class="super-card__header contact__rg-address">
                                                    <h3 class="super-card__title">Kontak Kami</h3>
                                                </div>
                                                <div class="super-card__body">
                                                    <p>Jam Kerja:</p>
                                                    <ul>
                                                        <li>10.00 - 21.00 WIB (Weekdays)</li>
                                                        <li>LIBUR (Weekend)</li>
                                                    </ul>
                                                    <p>Di luar jam kerja di atas, Anda dapat menghubungi kami melalui e-mail atau formulir yang tersedia di halaman ini. Kami akan segera menghubungi Anda!</p>
                                                    <dl class="contact__rg-address_list">
                                                        <div>
                                                            <dt>Telepon</dt>
                                                            <dd><a href="tel:+62212854300">+624545 45454 545</a></dd>
                                                        </div>
                                                        <div>
                                                            <dt>Email</dt>
                                                            <dd><a href="/cdn-cgi/l/email-protection#96fff8f0f9d6e4e3f7f8f1f1e3e4e3b8f5f9fb"><span class="__cf_email__" data-cfemail="640d0a020b241611050a03031116114a070b09">[email&#160;protected]</span></a></dd>
                                                        </div>
                                                        <div>
                                                            <dt>Blog</dt>
                                                            <dd><a href="https://blog.ruangguru.com" target="_blank" rel="noopener noreferrer">blog.capstone.com</a></dd>
                                                        </div>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="super-card">
                                                <div class="super-card__header ">
                                                    <h3 class="super-card__title">Alamat Kami</h3>
                                                </div>
                                                <div class="super-card__body">
                                                    <p><b>PT. CAPSTONE INDONESIA</b></p>
                                                    <p>Jl. Teratai 7 Dalam Raya No.22, RT.11/RW.3, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12810, Indonesia
                                                        <!-- -->
                                                    </p>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endsection