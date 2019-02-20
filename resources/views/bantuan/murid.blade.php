@extends('layouts.user')
@section('content')
<div class="help">
    <div class="container undefined">
        <h1 class="help__title">Temukan Jawaban Anda di Sini!</h1>
        <div class="help__tab-list"><a class="help__tab help__tab--selected" aria-current="true" href="{{url('murid')}}"><span>Murid</span></a><a class="help__tab" aria-current="false" href="{{url('guru')}}"><span>Guru</span></a></div>
        <div>
            <div class="help-student">
                <aside class="help-student__sidebar">
                    <div class="help-student__accordion">
                        <div class="help-student__collapsible_trigger"><input type="radio" class="help-student__collapsible_input" name="accordion-group" id="tab-1" value="on"><label class="help-student__collapsible_label" for="tab-1">General</label>
                            <article class="help-student__collapsible_article">
                                <ul class="list help-student__list">
                                    <li class="list__item help-student__list_item"><span><span>Siapa saja yang dapat menjadi murid di Ruangguru?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana cara menjadi murid di Ruangguru?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apa itu Aplikasi Mobile Ruangguru?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Fitur apa saja yang tersedia pada Aplikasi Mobile Ruangguru?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apa yang dimaksud kode referral?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Ke mana saya bisa menghubungi layanan pelanggan Ruangguru?</span></span></li>
                                </ul>
                            </article>
                        </div>
                        <div class="help-student__collapsible_trigger"><input type="radio" class="help-student__collapsible_input" name="accordion-group" id="tab-2" value="on"><label class="help-student__collapsible_label" for="tab-2">ruangbelajar</label>
                            <article class="help-student__collapsible_article">
                                <ul class="list help-student__list">
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana cara menggunakan aplikasi ruangbelajar?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apakah bisa mencoba ruangbelajar secara gratis?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apa keunggulan ruangbelajar?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Berapa harga berlangganan ruangbelajar? Apa saja opsi pembayaran yang ada?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Video tidak bisa diputar, apa yang harus saya lakukan?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apa perbedaan ruangbelajar dan Ruangguru On-The-Go!?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Spesifikasi HP apa yang kompatibel dengan penggunaan Ruangguru On-The-Go!?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Kak, USB OTG nya sudah dipasang tapi tidak terdeteksi, apa yang harus saya lakukan?</span></span></li>
                                </ul>
                            </article>
                        </div>
                        <div class="help-student__collapsible_trigger"><input type="radio" class="help-student__collapsible_input" name="accordion-group" id="tab-3" value="on"><label class="help-student__collapsible_label" for="tab-3">digitalbootcamp</label>
                            <article class="help-student__collapsible_article">
                                <ul class="list help-student__list">
                                    <li class="list__item help-student__list_item"><span><span>Apa itu digitalbootcamp?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana Cara Bergabung ke dalam Grup Belajar digitalbootcamp?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apa Keunggulan digitalbootcamp?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Wah, harganya masih bisa kurang lagi tidak?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apakah ada program cicilan untuk digitalbootcamp?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apa saja fasilitas yang didapatkan di digitalbootcamp?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana sistem belajar yang dilaksanakan di digitalbootcamp?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apa perbedaan antara bimbel biasa dengan digitalbootcamp?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Mata pelajaran apa saja yang diajarkan di digitalbootcamp?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Siapa tutor yang mengajar di digitalbootcamp?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Kurikulum saya di sekolah KTSP. Bisa tidak saya ikut digitalbootcamp?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apakah hasil belajar siswa di digitalbootcamp bisa dilaporkan ke orang tua?</span></span></li>
                                </ul>
                            </article>
                        </div>
                        <div class="help-student__collapsible_trigger"><input type="radio" class="help-student__collapsible_input" name="accordion-group" id="tab-4" value="on"><label class="help-student__collapsible_label" for="tab-4">ruangles</label>
                            <article class="help-student__collapsible_article">
                                <ul class="list help-student__list">
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana cara menggunakan ruangles?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apa keunggulan les privat di ruangles?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Berapa harganya jika saya ingin memakai ruangles?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana jika guru privat yang sudah dipesan tidak dapat mengajar?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Berapa lama saya harus menunggu konfirmasi guru privat yang dapat mengajar?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apakah semua guru privat di Ruangguru sudah terverifikasi?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apakah ada jaminan jika saya tidak lulus ujian?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana cara melakukan pembayaran guru privat?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana cara konfirmasi pembayaran kepada Ruangguru?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apa yang akan terjadi jika murid terlambat melakukan pembayaran?</span></span></li>
                                </ul>
                            </article>
                        </div>
                        <div class="help-student__collapsible_trigger"><input type="radio" class="help-student__collapsible_input" name="accordion-group" id="tab-5" value="on"><label class="help-student__collapsible_label" for="tab-5">ruanglesonline</label>
                            <article class="help-student__collapsible_article">
                                <ul class="list help-student__list">
                                    <li class="list__item help-student__list_item"><span><span>Apakah itu ruanglesonline?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana cara menggunakan aplikasi ruanglesonline?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apa keunggulan dari ruanglesonline?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apakah yang dimaksud dengan koin?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Berapa harganya jika saya ingin memakai ruanglesonline?</span></span></li>
                                </ul>
                            </article>
                        </div>
                        <div class="help-student__collapsible_trigger"><input type="radio" class="help-student__collapsible_input" name="accordion-group" id="tab-6" value="on"><label class="help-student__collapsible_label" for="tab-6">ruanguji</label>
                            <article class="help-student__collapsible_article">
                                <ul class="list help-student__list">
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana cara untuk mengikuti tryout di ruanguji?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apa keunggulan menggunakan ruanguji?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Saat mengerjakan tryout, apakah saya boleh keluar dari aplikasi dulu lalu masuk kembali?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Saya sedang mengerjakan tryout, tiba-tiba muncul pesan error. Apa yang harus saya lakukan?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana cara melihat pembahasan soal dan analisis kemampuan saya?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana saya mengetahui Peringkat tryout yang telah dikerjakan?</span></span></li>
                                </ul>
                            </article>
                        </div>
                        <div class="help-student__collapsible_trigger"><input type="radio" class="help-student__collapsible_input" name="accordion-group" id="tab-7" value="on"><label class="help-student__collapsible_label" for="tab-7">ruangkelas</label>
                            <article class="help-student__collapsible_article">
                                <ul class="list help-student__list">
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana murid dapat gabung ke dalam kelas?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana cara murid mengerjakan tugas?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana cara murid mengetahui nilai yang diperoleh dari tugas yang sudah dikerjakan?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Bagaimana cara murid mendapatkan pembahasan secara soft copy agar bisa dipelajari kembali?</span></span></li>
                                </ul>
                            </article>
                        </div>
                        <div class="help-student__collapsible_trigger"><input type="radio" class="help-student__collapsible_input" name="accordion-group" id="tab-8" value="on"><label class="help-student__collapsible_label" for="tab-8">Pembelian</label>
                            <article class="help-student__collapsible_article">
                                <ul class="list help-student__list">
                                    <li class="list__item help-student__list_item"><span><span>Saya sudah melakukan pembayaran. Berapa lama saya harus menunggu sampai pembayaran terkonfirmasi?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Saya tertarik untuk berlangganan tetapi ingin membelinya dengan cara cicilan, apakah bisa?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Apa saja syarat mengajukan cicilan?</span></span></li>
                                    <li class="list__item help-student__list_item"><span><span>Saya sudah membeli Paket ruangbelajar online atau Paket ruangbelajar+RGDB, apakah saya dapat mengganti paket tersebut menjadi Paket Ruangguru On-The-Go! atau Paket Ruangguru On-The-Go Ekstra?</span></span></li>
                                </ul>
                            </article>
                        </div>
                    </div>
                </aside>
                <div class="help-student__content">
                    <h2 class="help-student__content_title">General</h2>
                    <hr>
                    <div><strong class="help-student__content_question">Pertanyaan: Siapa saja yang dapat menjadi murid di Ruangguru?</strong>
                        <div>
                            <div class="help-student__answer_left">Jawaban:</div>
                            <div id="general-1" class="help-student__answer_right">Murid adalah setiap individu yang menggunakan layanan Ruangguru untuk memfasilitasi kegiatan belajarnya. Siapapun dapat menjadi Murid di Ruangguru terlepas dari usia dan tingkat pendidikannya, baik untuk tingkat SD, SMP, SMA, Perguruan Tinggi hingga umum.</div>
                        </div>
                    </div>
                    <div><strong class="help-student__content_question">Pertanyaan: Bagaimana cara menjadi murid di Ruangguru?</strong>
                        <div>
                            <div class="help-student__answer_left">Jawaban:</div>
                            <div id="general-2" class="help-student__answer_right">Terdapat 2 cara untuk mendaftar sebagai murid di Ruangguru:<ol type="A">
                                    <li>Melalui Website Ruangguru<ol>
                                            <li>Kamu bisa melakukan pendaftaran dengan klik “Daftar” pada bagian kanan atas halaman utama Ruangguru dan pilih “Daftar Sebagai Murid”</li>
                                            <li>Lalu mengisi formulir pendaftaran.</li>
                                        </ol>
                                    </li>
                                    <li>Melalui Aplikasi Mobile Ruangguru<ol>
                                            <li><b>Download Aplikasi Mobile Ruangguru</b> di Google Play Store untuk pengguna Android dan App Store untuk pengguna iOS.</li>
                                            <li>Daftarkan email, nomor handphone, jenjang dan kelasmu, serta kota di mana kamu berada</li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div><strong class="help-student__content_question">Pertanyaan: Apa itu Aplikasi Mobile Ruangguru?</strong>
                        <div>
                            <div class="help-student__answer_left">Jawaban:</div>
                            <div id="general-3" class="help-student__answer_right">Aplikasi Mobile Ruangguru adalah aplikasi belajar dengan solusi belajar terlengkap untuk segala kesulitan belajar kamu. Di aplikasi ini, kamu bisa memahami materi lebih mudah dengan video, kuis, infografis, konsultasi soal dan materi yang sulit dengan tutor secara online, memesan guru privat (bukan hanya guru akademis tapi juga non-akademis), serta mengikuti <i>tryout</i> UN, SBMPTN, dan ujian lainnya.</div>
                        </div>
                    </div>
                    <div><strong class="help-student__content_question">Pertanyaan: Fitur apa saja yang tersedia pada Aplikasi Mobile Ruangguru?</strong>
                        <div>
                            <div class="help-student__answer_left">Jawaban:</div>
                            <div id="general-4" class="help-student__answer_right">
                                <ol type="A">
                                    <li><b>ruangbelajar</b><br><b>ruangbelajar</b> adalah tempat kamu untuk belajar mandiri <i>online</i> lewat misi-misi belajar (<i>learning journey</i>) yang terdiri dari ribuan video, rangkuman infografis, serta ribuan kuis dan latihan soal untuk masing-masing sub-topik pelajaran. Selain itu, kamu juga bisa memantau perkembangan belajar kamu secara langsung setiap harinya melalui rapor ruangbelajar. Dapatkan juga USB On The Go (OTG) biar kamu bisa tonton video ini tanpa kuota (khusus pengguna Android).</li>
                                    <li><b>digitalbootcamp</b><br><b>digitalbootcamp</b> adalah bimbel <i>online</i> pendukung segala persiapan belajar mulai dari kelas 6 SD sampai dengan kelas 12 SMA hingga SBMPTN. Disini, kamu akan dapat berbagai fasilitas belajar lengkap, mulai dari <i>group chat</i> mata pelajaran dengan kakak tutor <i>standby</i> yang akan membantu belajar kamu, modul belajar, <i>tryout online</i>, dan fasilitas belajar seru lainnya baik di app maupun di luar app Ruangguru!</li>
                                    <li><b>ruangles</b><br>Tingkatkan kemampuanmu secara akademik maupun non-akademik dengan memesan guru privat yang berpengalaman di bidangnya untuk datang dan mengajar di rumah kamu. Semua diatur sesuai keinginanmu, lho! Kami siap menjadikanmu yang terhebat!</li>
                                    <li><b>ruanglesonline</b><br>Bisa nanya pelajaran ke tutor via aplikasi! Ngerjain soal nggak pake bingung lagi! Kamu bisa konsultasi via aplikasi <i>live chat</i>, tutor ruanglesonline akan membantu kamu membahas semua soal maupun pertanyaanmu dalam hitungan menit!</li>
                                    <li><b>ruanguji</b><br><b>ruanguji</b> adalah tempat bagi kamu untuk mengukur kesiapan mengikuti ujian dengan mengerjakan <i>tryout</i>. Tidak hanya Ujian Nasional, kamu juga bisa menemukan soal SBMPTN, UTS, UAS dan UKG. Selesai mengerjakan, kamu bisa langsung mendapatkan pembahasan, analisis topik kelemahan dan peringkatmu.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div><strong class="help-student__content_question">Pertanyaan: Apa yang dimaksud kode referral?</strong>
                        <div>
                            <div class="help-student__answer_left">Jawaban:</div>
                            <div id="general-5" class="help-student__answer_right">Kode referral adalah kode unik yang didapatkan atas referensi dari pengguna Ruangguru lainnya atau kode promosi tertentu dari Ruangguru.</div>
                        </div>
                    </div>
                    <div><strong class="help-student__content_question">Pertanyaan: Ke mana saya bisa menghubungi layanan pelanggan Ruangguru?</strong>
                        <div>
                            <div class="help-student__answer_left">Jawaban:</div>
                            <div id="general-6" class="help-student__answer_right">Kamu bisa menghubungi Ruangguru melalui:<ul>
                                    <li>Telepon: (021) 2854-3000</li>
                                    <li>Email: info@ruangguru.com</li>
                                    <li>Facebook: https://www.facebook.com/ruanggurucom</li>
                                    <li>Twitter: @ruangguru</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection