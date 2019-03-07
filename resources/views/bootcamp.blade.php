@extends('layouts.user')
@section('content')
<section class="ruangles__section-header">
    <div class="header">
        <div class="header__background" placeholder="" style="background-image:url(https://ruangguru.imgix.net/svg/global_bg-patterns.svg?auto=enhance%2Cformat%2Ccompress&amp;)">
            <div class="container header__container">
                <div class="header__logo-ruangles"><img src="https://ruangguru.imgix.net/svg/ruangles_logo-rl.svg?auto=enhance%2Cformat%2Ccompress&amp;" alt="logo ruangles" /></div>
                <div class="header__title">#BelajarJadiHebat dengan guru privat berkualitas datang ke rumah dengan harga terjangkau</div>
                <div class="header__header-iqbal"><img src="https://ruangguru.imgix.net/png/ruangles_landingpage_header-iqbal.png?auto=enhance%2Cformat%2Ccompress&amp;" alt="Iqbaal Ramadhan - Brand Ambassador Ruangguru" /></div>
                <div class="header__search-option">
                    <div class="header__search-option--card header__search-option--card-active disabled">
                        <div class="header__search-option--icon"><img src="https://ruangguru.imgix.net/svg/ruangles_icon-search-grey.svg?auto=enhance%2Cformat%2Ccompress&amp;" alt="icon search" /><img src="https://ruangguru.imgix.net/svg/ruangles_icon-search.svg?auto=enhance%2Cformat%2Ccompress&amp;" alt="icon search" /></div>
                        <div class="header__search-option--text">
                            <p class="header__search-option--text-label">Cari Guru Sendiri</p>
                            <div class="header__search-option--text-description">Lihat ribuan profil guru-guru kami dan pilih sendiri guru yang paling cocok untuk kamu!</div>
                        </div>
                    </div>
                    <div class="header__search-option--card"></div>
                    <div class="header__search-option--card header__search-option--card-disactive">
                        <div class="header__search-option--icon"><img src="https://ruangguru.imgix.net/svg/ruangles_icon-list-grey.svg?auto=enhance%2Cformat%2Ccompress&amp;" alt="icon search" /><img src="https://ruangguru.imgix.net/svg/ruangles_icon-list-active.svg?auto=enhance%2Cformat%2Ccompress&amp;" alt="icon search" class="" /></div>
                        <div class="header__search-option--text">
                            <p class="header__search-option--text-label">Pilihkan Guru Untuk Saya</p>
                            <div class="header__search-option--text-description">Masukkan kebutuhan belajar kamu dan kami akan pilihkan guru yang paling pas untuk kamu!</div>
                        </div>
                    </div>
                </div>
                <div class="header__search-box">
                    <div class="header__search-box--grid">
                        <div>
                            <form class="form-self-search">
                                <div class="form-self-search__coloumn">
                                    <div class="form-self-search__fields">
                                        <div class="fields search-jenjang form-self-search__field"><label class="fields__label search-jenjang form-self-search__field-label">JENJANG<span class="star">*</span></label>
                                            <div class="Select search-jenjang form-self-search__field-select is-clearable is-searchable Select--single">
                                                <div class="Select-control"><span class="Select-multi-value-wrapper" id="react-select-27--value">
                                                        <div class="Select-placeholder">Pilih...</div>
                                                        <div class="Select-input" style="display:inline-block"><input aria-activedescendant="react-select-27--value" aria-expanded="false" aria-haspopup="false" aria-owns="" role="combobox" required="" value="" style="box-sizing:content-box;width:5px" />
                                                            <div style="position:absolute;top:0;left:0;visibility:hidden;height:0;overflow:scroll;white-space:pre"></div>
                                                        </div>
                                                    </span><span class="Select-arrow-zone"><span class="Select-arrow"></span></span></div>
                                            </div>
                                        </div>
                                        <div class="fields form-self-search__field form-self-search__field--disabled"><label class="fields__label form-self-search__field form-self-search__field--disabled-label">MATA PELAJARAN<span class="star">*</span></label>
                                            <div class="Select form-self-search__field form-self-search__field--disabled-select is-clearable is-disabled is-searchable Select--single">
                                                <div class="Select-control"><span class="Select-multi-value-wrapper" id="react-select-28--value">
                                                        <div class="Select-placeholder">Pilih...</div>
                                                        <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-28--value" aria-disabled="true" class="Select-input" role="combobox" style="border:0;width:1px;display:inline-block" tabindex="0"></div>
                                                    </span><span class="Select-arrow-zone"><span class="Select-arrow"></span></span></div>
                                            </div>
                                        </div>
                                        <div class="fields form-self-search__field form-self-search__field--disabled"><label class="fields__label form-self-search__field form-self-search__field--disabled-label">KOTA/KABUPATEN<span class="star">*</span></label>
                                            <div class="Select form-self-search__field form-self-search__field--disabled-select is-clearable is-disabled is-searchable Select--single">
                                                <div class="Select-control"><span class="Select-multi-value-wrapper" id="react-select-29--value">
                                                        <div class="Select-placeholder">Pilih...</div>
                                                        <div aria-expanded="false" aria-owns="" aria-activedescendant="react-select-29--value" aria-disabled="true" class="Select-input" role="combobox" style="border:0;width:1px;display:inline-block" tabindex="0"></div>
                                                    </span><span class="Select-arrow-zone"><span class="Select-arrow"></span></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-self-search__label">
                                        <div class="form-self-search__label--additionalfilter"><span>FILTER TAMBAHAN</span><span class="isvg pending form-self-search__angledown"></span></div>
                                    </div>
                                </div>
                                <div class="form-self-search__line"></div>
                                <div class="form-self-search__bottom"><button type="submit" class="btn btn--disabled form-self-search__bottom--btn form-self-search__bottom--btn-disabled" disabled=""><canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas>CARI GURU</button></div>
                            </form>
                            <div class="form-self-search__dialog form-self-search__dialog--">
                                <div class="form-self-search__dialog--container">
                                    <div class="form-self-search__dialog--header">
                                        <p class="form-self-search__dialog--title">Pilih </p><button type="button" class="btn form-self-search__dialog--close-button"><canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas><span class="isvg pending form-self-search__dialog--close-icon"></span></button>
                                    </div>
                                    <div class="form-self-search__dialog--body"><input type="search" class="form-self-search__dialog--searchfield" value="" placeholder="Pilih..." />
                                        <ul class="form-self-search__dialog--list"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ruangles__section-whats">
    <div>
        <div class="container les-whats">
            <h2 class="les-whats__title">Apa itu ruangles?</h2>
            <div class="les-whats__line"></div>
            <div class="les-whats__description"><strong>ruangles</strong> adalah portal pencarian guru privat terbesar di Indonesia. Berbagai keunggulan kami membantu kamu #BelajarJadiHebat</div>
            <div class="les-whats__section-wrapper">
                <div class="les-whats__tabdesk"><button type="button" class="btn les-whats__btn les-whats__btn-active"><canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas><img alt="RuangLes Jaminan Puas" src="https://ruangguru.imgix.net/svg/les_landingpage-icon-guarantee.svg?w=84" class="les-whats__icon" />
                        <p>Jaminan Puas</p>
                    </button><button type="button" class="btn les-whats__btn"><canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas><img alt="RuangLes Guru Lebih Dari 80.000" src="https://ruangguru.imgix.net/svg/les_landingpage-icon-teacher-grey.svg" class="les-whats__icon" />
                        <p>Lebih Dari 80.000 Guru</p>
                    </button><button type="button" class="btn les-whats__btn"><canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas><img alt="RuangLes Mata Pelajaran Lengkap" src="https://ruangguru.imgix.net/svg/les_landingpage-icon-lesson-grey.svg" class="les-whats__icon" />
                        <p>Pilih Mata Pelajaran Lengkap</p>
                    </button><button type="button" class="btn les-whats__btn"><canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas><img alt="RuangLes Belajar Dimana dan Kapan Saja" src="https://ruangguru.imgix.net/svg/les_landingpage-icon-clock-grey.svg" class="les-whats__icon" />
                        <p>Belajar Dimana Saja &amp; Kapan Saja</p>
                    </button></div>
            </div>
            <div class="les-whats__section-wrapper les-whats__section-wrapper-detail">
                <div class="les-whats__tabdesk">
                    <div>
                        <div class="les-whats__side-img"><img alt="RuangLes Jaminan Puas" class="les-whats__icon-img" src="https://ruangguru.imgix.net/svg/les_landingpage-icon-guarantee.svg" /></div>
                        <div class="les-whats__side-wrapper">
                            <h3 class="les-whats__side-title">Jaminan Puas</h3>
                            <p class="les-whats__side-description">Jika kamu tidak puas/tidak cocok dengan guru dari kami, kamu bisa ganti dengan guru lain atau uang kembali.</p>
                        </div>
                    </div>
                </div>
                <div class="les-whats__mobile">
                    <div>
                        <div class="les-whats__side-img"><img alt="RuangLes Jaminan Puas" class="les-whats__icon-img" src="https://ruangguru.imgix.net/svg/les_landingpage-icon-guarantee.svg" /></div>
                        <div class="les-whats__side-wrapper">
                            <h3 class="les-whats__side-title">Jaminan Puas</h3>
                            <p class="les-whats__side-description">Jika kamu tidak puas/tidak cocok dengan guru dari kami, kamu bisa ganti dengan guru lain atau uang kembali.</p>
                        </div>
                    </div>
                    <div>
                        <div class="les-whats__side-img"><img alt="RuangLes Guru Lebih Dari 80.000" class="les-whats__icon-img" src="https://ruangguru.imgix.net/svg/les_landingpage-icon-teacher.svg" /></div>
                        <div class="les-whats__side-wrapper">
                            <h3 class="les-whats__side-title">Lebih Dari 80.000 Guru</h3>
                            <p class="les-whats__side-description">Dengan pilihan guru yang banyak, pastinya kamu akan mendapatkan guru yang cocok banget sama kebutuhan kamu!</p>
                        </div>
                    </div>
                    <div>
                        <div class="les-whats__side-img"><img alt="RuangLes Mata Pelajaran Lengkap" class="les-whats__icon-img" src="https://ruangguru.imgix.net/svg/les_landingpage-icon-lesson.svg" /></div>
                        <div class="les-whats__side-wrapper">
                            <h3 class="les-whats__side-title">Pilihan Mata Pelajaran Lengkap</h3>
                            <p class="les-whats__side-description">Selain pelajaran sekolah untuk semua jenjang, kamu juga bisa mencari guru olahraga, musik, bahasa asing, dan banyak lagi di ruangles, agar kamu bisa jadi hebat di dalam dan luar kelas!</p>
                        </div>
                    </div>
                    <div>
                        <div class="les-whats__side-img"><img alt="RuangLes Belajar Dimana dan Kapan Saja" class="les-whats__icon-img" src="https://ruangguru.imgix.net/svg/les_landingpage-icon-clock.svg" /></div>
                        <div class="les-whats__side-wrapper">
                            <h3 class="les-whats__side-title">Belajar Dimana Saja &amp; Kapan Saja</h3>
                            <p class="les-whats__side-description">Mau belajar di rumah pas pulang sekolah, di kafe pas malam minggu, atau di mana pun dan kapan pun juga bisa! Tentukan sendiri tempat dan waktu yang paling nyaman untuk kamu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ruangles__section-why-ruangles">
    <div class="why-ruangles">
        <div class="container why-ruangles__container">
            <h2 class="why-ruangles__title">Kenapa Harus ruangles</h2>
            <div class="why-ruangles__line"></div>
            <div class="why-ruangles__table-cards">
                <div class="card why-ruangles__table-card why-ruangles__table-card--one">
                    <div class="why-ruangles__table-inner why-ruangles__table-inner--1"><span class="why-ruangles__table-title why-ruangles__table-title--1"></span><span class="why-ruangles__item">Pilihan les</span><span class="why-ruangles__item">Lokasi belajar</span><span class="why-ruangles__item">Jadwal belajar</span><span class="why-ruangles__item">Pilihan guru</span><span class="why-ruangles__item">Mata Pelajaran</span></div>
                </div>
                <div class="card why-ruangles__table-card why-ruangles__table-card--two">
                    <div class="why-ruangles__table-inner why-ruangles__table-inner--2"><span class="why-ruangles__table-title why-ruangles__table-title--2">Bimbingan Belajar</span><span class="why-ruangles__item">Hanya satu bidang</span><span class="why-ruangles__item">Ditentukan tempat les</span><span class="why-ruangles__item">Diatur tempat les</span><span class="why-ruangles__item">Terbatas, ditentukan tempat les</span><span class="why-ruangles__item">Sesuai paket belajar</span></div>
                </div>
                <div class="card why-ruangles__table-card why-ruangles__table-card--three">
                    <div class="why-ruangles__table-inner why-ruangles__table-inner--3"><span class="why-ruangles__table-title why-ruangles__table-title--3"><img src="https://ruangguru.imgix.net/svg/ruangles_logo.svg?auto=enhance%2Cformat%2Ccompress&amp;" alt="logo ruangles" /></span><span class="why-ruangles__item">Paling lengkap untuk segala bidang</span><span class="why-ruangles__item">Di mana saja sesuai kemauanmu!</span><span class="why-ruangles__item">Kapan saja mengikuti jadwal kegiatanmu!</span><span class="why-ruangles__item">Lebih dari 80,000 pilihan, kamu bisa pilih sendiri!</span><span class="why-ruangles__item">Apa saja yang kamu mau, kami siap! (lebih dari berapa tipe mata pelajaran)</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ruangles__selected-teacher">
    <div class="selected-teacher">
        <div class="selected-teacher__head">
            <div class="container selected-teacher__container selected-teacher__container--flex">
                <div class="selected-teacher__featured-info">
                    <h2 class="selected-teacher__head_title">Beberapa Guru Terbaik Kami</h2>
                    <div class="selected-teacher__line"></div><span class="selected-teacher__head_sub-title">Berikut beberapa guru-guru terbaik kami yang berasal dari berbagai latar belakang dan berpengalaman yang sesuai dengan bidangnya.</span>
                    <div class="selected-teacher__featured-list">
                        <div class="selected-teacher__featured-item">
                            <div class="selected-teacher__featured-item_inner"><img src="https://ruangguru.imgix.net/svg/ruangles_idea-1-icon.svg?auto=enhance%2Cformat%2Ccompress&amp;" alt="" class="selected-teacher__featured-item_img" /><span class="selected-teacher__featured-item_img-text">Guru telah melewati serangkaian proses yang ketat untuk menjamin kualitas terbaik!</span></div>
                        </div>
                        <div class="selected-teacher__featured-item">
                            <div class="selected-teacher__featured-item_inner"><img src="https://ruangguru.imgix.net/svg/ruangles_idea-3-icon.svg?auto=enhance%2Cformat%2Ccompress&amp;" alt="" class="selected-teacher__featured-item_img" /><span class="selected-teacher__featured-item_img-text">93% guru kami berasal dari universitas negeri terbaik di Indonesia seperti UI, ITB, UGM, dll.</span></div>
                        </div>
                        <div class="selected-teacher__featured-item">
                            <div class="selected-teacher__featured-item_inner"><img src="https://ruangguru.imgix.net/svg/ruangles_idea-2-icon.svg?auto=enhance%2Cformat%2Ccompress&amp;" alt="" class="selected-teacher__featured-item_img" /><span class="selected-teacher__featured-item_img-text">Guru kami membuat rencana belajar sesuai kebutuhan kamu dan secara rutin melaporkan perkembangan belajar ke orangtuamu.</span></div>
                        </div>
                        <div class="selected-teacher__featured-item">
                            <div class="selected-teacher__featured-item_inner"><img src="https://ruangguru.imgix.net/svg/ruangles_idea-4-icon.svg?auto=enhance%2Cformat%2Ccompress&amp;" alt="" class="selected-teacher__featured-item_img" /><span class="selected-teacher__featured-item_img-text">Guru-guru kami tersedia di seluruh Indonesia.</span></div>
                        </div>
                    </div>
                </div>
                <div class="selected-teacher__featured_img-woman"><img src="https://ruangguru.imgix.net/png/ruangles_teacher-iqbal.png?w=495&amp;h=525&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="" /></div>
            </div>
        </div>
        <div class="selected-teacher__body">
            <div class="container selected-teacher__container">
                <div class="selected-teacher__stars"><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /></div>
                <h3 class="selected-teacher__body_title">Sebagian besar guru kami mendapatkan rating 5 oleh murid</h3>
            </div>
            <div class="container selected-teacher__container">
                <div class="selected-teacher__cards">
                    <div class="card selected-teacher__card">
                        <div class="selected-teacher__card_inner"><img src="https://ruangguru.imgix.net/png/ruangles_teacher1-new.png?auto=enhance%2Cformat%2Ccompress&amp;" alt="Annisaa F N" class="selected-teacher__card_img" /><strong class="selected-teacher__card_name">Annisaa F N</strong><small class="selected-teacher__card_title">Guru Privat UN SMP</small><small class="selected-teacher__card_major">Universitas Indonesia</small>
                            <div class="selected-teacher__card_stars"><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /></div>
                            <p class="selected-teacher__card_quote">“ Sangat enak diajak diskusi, nilai adik saya juga sudah cukup baik, yang tadinya peringkat 5 dari bawah sekarang Alhamdulillah sudah ada kemajuan. Metoda mengajarnya tidak membosankan. ”</p><span class="selected-teacher__card_name-quote">Dhea D (Murid)</span>
                        </div>
                    </div>
                    <div class="card selected-teacher__card">
                        <div class="selected-teacher__card_inner"><img src="https://ruangguru.imgix.net/png/ruangles_teacher2-new.png?auto=enhance%2Cformat%2Ccompress&amp;" alt="Marliana" class="selected-teacher__card_img" /><strong class="selected-teacher__card_name">Marliana</strong><small class="selected-teacher__card_title">Guru Privat Fisika</small><small class="selected-teacher__card_major">Universitas Indonesia</small>
                            <div class="selected-teacher__card_stars"><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /></div>
                            <p class="selected-teacher__card_quote">“ Sangat kompeten di bidangnya. Juga mampu berkomunikasi dengan anak saya dengan sangat baik. Selalu datang sebelum waktu perjanjian. Luar biasa support dari mba Mariana untuk anak saya. ”</p><span class="selected-teacher__card_name-quote">Genoveva (Orangtua Murid)</span>
                        </div>
                    </div>
                    <div class="card selected-teacher__card">
                        <div class="selected-teacher__card_inner"><img src="https://ruangguru.imgix.net/png/ruangles_teacher3-new.png?auto=enhance%2Cformat%2Ccompress&amp;" alt="Ditha A U" class="selected-teacher__card_img" /><strong class="selected-teacher__card_name">Ditha A U</strong><small class="selected-teacher__card_title">Guru Privat Bahasa Inggris</small><small class="selected-teacher__card_major">HAN University Of Applied Sciences</small>
                            <div class="selected-teacher__card_stars"><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /><img src="https://ruangguru.imgix.net/svg/global__star.svg?w=36&amp;h=36&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="bintang" class="selected-teacher__star" /></div>
                            <p class="selected-teacher__card_quote">“ Ms Ditha sangat kreatif dalam memberikan materi pengajaran yang merangsang imajinasi sekaligus percaya diri anak dalam berbicara dalam bahasa Inggris. ”</p><span class="selected-teacher__card_name-quote">Dian B (Orangtua Murid)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="selected-teacher__body_custom-gradient"></div>
        </div>
    </div>
</section>
<section class="ruangles__testimony">
    <div class="container testimony__container">
        <h1 class="testimony__head">Pendapat Murid dan Orang Tua</h1>
        <div class="testimony__line"></div>
        <div class="testimony__slides_container">
            <div class="slick-initialized slick-slider">
                <div class="slick-list">
                    <div class="slick-track">
                        <div data-index="-1" class="slick-slide slick-cloned"></div>
                        <div class="slick-slide slick-active slick-cloned testimony__slides" data-index="0" tabindex="-1" style="outline:none">
                            <div class="testimony__slide_inner">
                                <div class="testimony__slide-left"><img src="https://ruangguru.imgix.net/jpg/ruangles_landingpage-testi1-new.jpg?auto=enhance%2Cformat%2Ccompress&amp;" alt="" class="testimony__img" />
                                    <div class="testimony__name">Gabby A</div>
                                    <div class="testimony__instance">10 Besar di Sekolah </div>
                                    <div class="testimony__action">Mengambil les Matematika SMA</div>
                                </div>
                                <div class="testimony__slide-right">
                                    <div class="testimony__testi">Belajar dengan guru di Ruangguru sangat asik. Tadinya nilai matematika ku 40-50 bahkan pernah 0, setelah les privat di Ruangguru nilaiku jadi 70-80 bahkan sekarang aku masuk 10 besar. Belajarnya tidak monoton karena gurunya bisa menyesuaikan. Bahkan sekarang aku ajak adikku juga ikutan les dan nilainya juga naik dan mama jadi senang</div>
                                </div>
                            </div>
                        </div>
                        <div data-index="1" class="slick-slide slick-cloned" tabindex="-1" style="outline:none"></div>
                        <div data-index="2" class="slick-slide slick-cloned" tabindex="-1" style="outline:none"></div>
                        <div class="slick-slide slick-active slick-cloned testimony__slides" data-index="3">
                            <div class="testimony__slide_inner">
                                <div class="testimony__slide-left"><img src="https://ruangguru.imgix.net/jpg/ruangles_landingpage-testi1-new.jpg?auto=enhance%2Cformat%2Ccompress&amp;" alt="" class="testimony__img" />
                                    <div class="testimony__name">Gabby A</div>
                                    <div class="testimony__instance">10 Besar di Sekolah </div>
                                    <div class="testimony__action">Mengambil les Matematika SMA</div>
                                </div>
                                <div class="testimony__slide-right">
                                    <div class="testimony__testi">Belajar dengan guru di Ruangguru sangat asik. Tadinya nilai matematika ku 40-50 bahkan pernah 0, setelah les privat di Ruangguru nilaiku jadi 70-80 bahkan sekarang aku masuk 10 besar. Belajarnya tidak monoton karena gurunya bisa menyesuaikan. Bahkan sekarang aku ajak adikku juga ikutan les dan nilainya juga naik dan mama jadi senang</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimony__slide_nav"><button type="button" class="btn testimony__slide_nav-btn testimony__slide_nav-btn--prev"><canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas><img src="https://ruangguru.imgix.net/png/ruangles_landingpage-slidearrowleft.png?auto=enhance%2Cformat%2Ccompress&amp;" alt="" /></button><button type="button" class="btn testimony__slide_nav-btn testimony__slide_nav-btn--next"><canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas><img src="https://ruangguru.imgix.net/png/ruangles_landingpage-slidearrowright.png?auto=enhance%2Cformat%2Ccompress&amp;" alt="" /></button></div>
        </div>
    </div>
</section>
<div class="ruangles__find-teacher-row"><button class="btn ruangles__find-teacher-btn" type="button"><canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas>Cari Guru Privat</button></div>
<section class="ruangles__for-teacher" style="background-image:url(https://ruangguru.imgix.net/jpg/ruangles__for-teacher-background.jpg)">
    <div class="container for-teacher-les__container">
        <div class="for-teacher-les__info">
            <div class="for-teacher-les__icon-title"><img src="https://ruangguru.imgix.net/svg/ruangles__icon-teaching.svg?w=84&amp;h=84&amp;auto=enhance%2Cformat%2Ccompress&amp;" alt="icon teaching" />
                <h2 class="for-teacher-les__title">Untuk Para Guru</h2>
            </div>
            <p class="for-teacher-les__text-top">Tertarik untuk ikut berpartisipasi dalam membuat anak - anak Indonesia menjadi hebat?</p>
            <p class="for-teacher-les__text-bottom"><strong>Yuk, daftar jadi tutor sekarang dan bergabung di penyedia guru privat terbesar di Indonesia!</strong></p><a class="link link--btn for-teacher-les__btn" href="/register"><canvas class="ink" style="border-radius:inherit;height:100%;left:0;position:absolute;top:0;width:100%" height="0" width="0"></canvas>Daftar Sekarang</a>
        </div>
        <div class="for-teacher-les__photo-container"><img src="https://ruangguru.imgix.net/png/ruangles_landingpage-teachers-iqbal.png?w=501&amp;h=491&amp;auto=compress&amp;" alt="foto para guru" /></div>
    </div>
</section>
</div>

@endsection