@extends('layouts.user')
@section('content')
<div class="help">
    <div class="container undefined">
        <h1 class="help__title">Temukan Jawaban Anda di Sini!</h1>
        <div class="help__tab-list"><a class="help__tab" aria-current="false" href="{{url('murid')}}"><span>Murid</span></a><a class="help__tab help__tab--selected" aria-current="true" href="{{url('guru')}}"><span>Guru</span></a></div>
        <div>
            <div class="help-teacher">
                <aside class="help-teacher__sidebar">
                    <div class="help-teacher__accordion">
                        <div class="help-teacher__collapsible_trigger"><input type="radio" class="help-teacher__collapsible_input" name="accordion-group" id="tab-1" value="on"><label class="help-teacher__collapsible_label" for="tab-1">General</label>
                            <article class="help-teacher__collapsible_article">
                                <ul class="list help-teacher__list">
                                    <li class="list__item help-teacher__list_item"><span><span>Apa saja syarat menjadi guru di Ruangguru?</span></span></li>
                                    <li class="list__item help-teacher__list_item"><span><span>Bagaimana cara mendaftar sebagai guru di Ruangguru?</span></span></li>
                                    <li class="list__item help-teacher__list_item"><span><span>Bagaimana jika saya salah mendaftar sebagai murid?</span></span></li>
                                </ul>
                            </article>
                        </div>
                        <div class="help-teacher__collapsible_trigger"><input type="radio" class="help-teacher__collapsible_input" name="accordion-group" id="tab-2" value="on"><label class="help-teacher__collapsible_label" for="tab-2">ruangles</label>
                            <article class="help-teacher__collapsible_article">
                                <ul class="list help-teacher__list">
                                    <li class="list__item help-teacher__list_item"><span><span>Bagaimana cara mendapatkan murid di Ruangguru?</span></span></li>
                                    <li class="list__item help-teacher__list_item"><span><span>Apa yang harus saya lakukan ketika mendapat murid baru?</span></span></li>
                                    <li class="list__item help-teacher__list_item"><span><span>Bagaimana sistem pembayaran guru di Ruangguru?</span></span></li>
                                    <li class="list__item help-teacher__list_item"><span><span>Bagaimana cara menentukan tarif di Ruangguru?</span></span></li>
                                    <li class="list__item help-teacher__list_item"><span><span>Bagaimana cara pembayaran guru?</span></span></li>
                                </ul>
                            </article>
                        </div>
                        <div class="help-teacher__collapsible_trigger"><input type="radio" class="help-teacher__collapsible_input" name="accordion-group" id="tab-3" value="on"><label class="help-teacher__collapsible_label" for="tab-3">ruanglesonline</label>
                            <article class="help-teacher__collapsible_article">
                                <ul class="list help-teacher__list">
                                    <li class="list__item help-teacher__list_item"><span><span>Bagaimana cara menjadi pengajar online di aplikasi Ruangguru?</span></span></li>
                                    <li class="list__item help-teacher__list_item"><span><span>Bagaimana sistem mengajar online di aplikasi Ruangguru?</span></span></li>
                                    <li class="list__item help-teacher__list_item"><span><span>Bagaimana cara mendapatkan tawaran mengajar dari murid?</span></span></li>
                                    <li class="list__item help-teacher__list_item"><span><span>Bagaimana jika saya mengalami masalah seperti aplikasi error, tidak terhubung dengan murid, tidak mendapat tawaran mengajar dalam waktu lama dan sebagainya?</span></span></li>
                                </ul>
                            </article>
                        </div>
                        <div class="help-teacher__collapsible_trigger"><input type="radio" class="help-teacher__collapsible_input" name="accordion-group" id="tab-4" value="on"><label class="help-teacher__collapsible_label" for="tab-4">ruangkelas</label>
                            <article class="help-teacher__collapsible_article">
                                <ul class="list help-teacher__list">
                                    <li class="list__item help-teacher__list_item"><span><span>Apa itu ruangkelas?</span></span></li>
                                    <li class="list__item help-teacher__list_item"><span><span>Bagaimana mengakses ruangkelas?</span></span></li>
                                    <li class="list__item help-teacher__list_item"><span><span>Bagaimana membuat kelas di ruangkelas?</span></span></li>
                                    <li class="list__item help-teacher__list_item"><span><span>Bagaimana membuat tugas di ruangkelas?</span></span></li>
                                    <li class="list__item help-teacher__list_item"><span><span>Bagaimana mendistribusikan tugas?</span></span></li>
                                    <li class="list__item help-teacher__list_item"><span><span>Bagaimana mendapatkan nilai siswa dari tugas yang diberikan oleh guru?</span></span></li>
                                </ul>
                            </article>
                        </div>
                    </div>
                </aside>
                <div class="help-teacher__content">
                    <h2 class="help-teacher__content_title">General</h2>
                    <hr>
                    <div><strong class="help-teacher__content_question">Pertanyaan: Apa saja syarat menjadi guru di Ruangguru?</strong>
                        <div>
                            <div class="help-teacher__answer_left">Jawaban:</div>
                            <div id="general-1" class="help-teacher__answer_right">Siapapun dapat mendaftar menjadi guru di Ruangguru, tidak terbatas pada lokasi tempat tinggal, latar belakang, ataupun usia. Pendaftaran terbuka selama Anda memiliki keahlian yang dapat diajarkan. Perlu diketahui bahwa Ruangguru menerapkan sistem verifikasi identitas berdasarkan Kartu Tanda Penduduk (KTP)/ Paspor yang diunggah ke dalam situs kami dan verifikasi Pendidikan Terakhir berdasarkan Ijazah/ Sertifikat Keahlian yang setara serta tes, baik online ataupun tes secara langsung.</div>
                        </div>
                    </div>
                    <div><strong class="help-teacher__content_question">Pertanyaan: Bagaimana cara mendaftar sebagai guru di Ruangguru?</strong>
                        <div>
                            <div class="help-teacher__answer_left">Jawaban:</div>
                            <div id="general-2" class="help-teacher__answer_right">Untuk mendaftar sebagai guru di Ruangguru, pengguna perlu membuat akun profil dengan melakukan langkah-langkah berikut:<ol>
                                    <li>Melakukan pendaftaran dengan klik “Daftar” pada bagian kanan atas halaman utama website Ruangguru dan pilih “Daftar sebagai guru”.</li>
                                    <li> Mengisi formulir pendaftaran.</li>
                                </ol> Untuk panduan lebih lengkap, Anda dapat mengakses panduan daftar sebagai guru di <a ui-sref="registration" href="/being-teacher/">sini</a>.</div>
                        </div>
                    </div>
                    <div><strong class="help-teacher__content_question">Pertanyaan: Bagaimana jika saya salah mendaftar sebagai murid?</strong>
                        <div>
                            <div class="help-teacher__answer_left">Jawaban:</div>
                            <div id="general-3" class="help-teacher__answer_right">Anda diharuskan untuk mendaftar ulang sebagai guru dengan email dan nomor telepon yang berbeda. Jika masih mengalami kesulitan, Anda dapat menghubungi call center kami di: 021-285 43000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection