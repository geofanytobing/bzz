@extends('layouts.user')
@section('content')
<div class="login-page">
    <div class="container login-page__container">
        <div class="login-page__box">
            <h3 class="login-page__title" data-test-id="page-title-login">Ayok Daftar</h3>
            <div class="login-page__tabs">
             
                <div class="login-page__tab-panel">
                    <div class="login-page__form">
                        <form>
                        	  <div class="fields undefined"><label class="fields__label undefined-label">Nama Lengkap</label><input type="text" name="email" value="" class="fields__input undefined-input"></div>
                            <div class="fields undefined"><label class="fields__label undefined-label">Email</label><input type="text" name="email" value="" class="fields__input undefined-input"></div>
                              <div class="fields undefined"><label class="fields__label undefined-label">Nomor Handphone</label><input type="text" name="email" value="" class="fields__input undefined-input"></div>
                            <div class="login-page__password">
                            	<select class="fields__input undefined-input" color="inherit" label="Kelas" required="" name="lesson_name">
    <option value="tkpaud">TK/PAUD</option>
    <option value="kelas-i">Kelas I</option>
    <option value="kelas-ii">Kelas II</option>
    <option value="kelas-iii">Kelas III</option>
    <option value="kelas-iv">Kelas IV</option>
    <option value="kelas-v">Kelas V</option>
    <option value="kelas-vi">Kelas VI</option>
    <option value="kelas-vii">Kelas VII</option>
    <option value="kelas-viii">Kelas VIII</option>
    <option value="kelas-ix">Kelas IX</option>
    <option value="kelas-vii-mts">Kelas VII MTS</option>
    <option value="kelas-viii-mts">Kelas VIII MTS</option>
    <option value="kelas-ix-mts">Kelas IX MTS</option>
    <option value="kelas-x-ipa">Kelas X IPA</option>
    <option value="kelas-xi-ipa">Kelas XI IPA</option>
    <option value="kelas-xii-ipa">Kelas XII IPA</option>
    <option value="kelas-x-ips">Kelas X IPS</option>
    <option value="kelas-xi-ips">Kelas XI IPS</option>
    <option value="kelas-xii-ips">Kelas XII IPS</option>
    <option value="kelas-x-ma">Kelas X MA</option>
    <option value="kelas-xi-ma">Kelas XI MA</option>
    <option value="kelas-xii-ma">Kelas XII MA</option>
    <option value="kelas-x-smk">Kelas X SMK</option>
    <option value="kelas-xi-smk">Kelas XI SMK</option>
    <option value="kelas-xii-smk">Kelas XII SMK</option>
    <option value="sbmptn">SBMPTN</option>
    <option value="stan">STAN</option>
    <option value="diploma">Diploma</option>
    <option value="s1">S1</option>
    <option value="s2">S2</option>
    <option value="s3">S3</option>
    <option value="umum">Umum</option>
</select>
                            	 <div class="fields login-page__fields"><label class="fields__label login-page__fields-label">Kata Sandi</label><input type="password" name="password" value="" class="fields__input login-page__fields-input"></div><svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="1em" width="1em" viewBox="0 0 40 40" class="login-page__fa-eye" style="vertical-align: middle;">
                                <div class="fields login-page__fields"><label class="fields__label login-page__fields-label">Konfirmasi Kata Sandi</label><input type="password" name="password" value="" class="fields__input login-page__fields-input"></div><svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="1em" width="1em" viewBox="0 0 40 40" class="login-page__fa-eye" style="vertical-align: middle;">
                                   
                                </svg>
                            </div>
                            <div><button type="submit" data-test-id="login-submit" class="btn btn-accent login-page__btn undefined"><canvas class="ink" height="0" width="0" style="border-radius: inherit; height: 100%; left: 0px; position: absolute; top: 0px; width: 100%;"></canvas>Daftar</button></div>
                        </form>
                        
                        <div class="login-page__layout-btn"><button type="button" class="btn login-page__btn-social login-page__btn-social--google" style=""><span>Google</span></button><button scope="public_profile,email" class="btn login-page__btn-social login-page__btn-social--facebook">Facebook</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection