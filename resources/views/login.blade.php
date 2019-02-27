@extends('layouts.user')
@section('content')
<div class="login-page">
    <div class="container login-page__container">
        <div class="login-page__box">
            <h3 class="login-page__title" data-test-id="page-title-login">Masuk ke akun Ruangguru Anda</h3>
            <div class="login-page__tabs">
             
                <div class="login-page__tab-panel">
                    <div class="login-page__form">
                        <form>
                            <div class="fields undefined"><label class="fields__label undefined-label">Email</label><input type="text" name="email" value="" class="fields__input undefined-input"></div>
                            <div class="login-page__password">
                                <div class="fields login-page__fields"><label class="fields__label login-page__fields-label">Kata Sandi</label><input type="password" name="password" value="" class="fields__input login-page__fields-input"></div><svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="1em" width="1em" viewBox="0 0 40 40" style="vertical-align: middle;">
                                    
                            </div>
                            <div><button type="submit" data-test-id="login-submit" class="btn btn-accent login-page__btn undefined"><canvas class="ink" height="0" width="0" style="border-radius: inherit; height: 100%; left: 0px; position: absolute; top: 0px; width: 100%;"></canvas>Masuk</button></div>
                        </form>
                      
                        <div class="login-page__layout-btn"><button type="button" class="btn login-page__btn-social login-page__btn-social--google" style=""><span>Google</span></button><button scope="public_profile,email" class="btn login-page__btn-social login-page__btn-social--facebook">Facebook</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection