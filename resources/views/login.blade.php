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
                                <div class="fields login-page__fields"><label class="fields__label login-page__fields-label">Kata Sandi</label><input type="password" name="password" value="" class="fields__input login-page__fields-input"></div><svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="1em" width="1em" viewBox="0 0 40 40" class="login-page__fa-eye" style="vertical-align: middle;">
                                    <g>
                                        <path d="m12.4 29.8l1.7-3.1q-1.9-1.5-3-3.6t-1.1-4.5q0-2.7 1.4-5-5.2 2.6-8.5 7.8 3.7 5.8 9.5 8.4z m8.7-16.9q0-0.5-0.3-0.8t-0.8-0.3q-2.8 0-4.8 2t-2 4.8q0 0.4 0.3 0.7t0.8 0.3 0.7-0.3 0.4-0.7q0-1.9 1.3-3.3t3.3-1.4q0.4 0 0.8-0.3t0.3-0.7z m8.1-4.3q0 0.2 0 0.2-2.4 4.2-7.1 12.6t-7 12.7l-1.1 2q-0.2 0.3-0.7 0.3-0.2 0-2.9-1.5-0.4-0.3-0.4-0.7 0-0.2 1-1.9-3.2-1.5-5.9-3.9t-4.7-5.4q-0.4-0.7-0.4-1.6t0.4-1.5q3.5-5.3 8.5-8.3t11.1-3q2 0 4 0.4l1.2-2.2q0.2-0.4 0.6-0.4 0.2 0 0.4 0.2t0.7 0.3 0.8 0.4 0.7 0.4 0.4 0.3q0.4 0.2 0.4 0.6z m0.8 10q0 3.1-1.8 5.6t-4.6 3.7l6.2-11.2q0.2 1 0.2 1.9z m10 2.8q0 0.8-0.4 1.6-0.9 1.4-2.5 3.2-3.3 3.8-7.7 6t-9.4 2.1l1.7-3q4.7-0.4 8.7-3t6.7-6.9q-2.5-4-6.3-6.5l1.5-2.5q2.1 1.4 4 3.4t3.3 4.1q0.4 0.7 0.4 1.5z"></path>
                                    </g>
                                </svg>
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