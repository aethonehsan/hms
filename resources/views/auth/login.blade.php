<!--begin::Authentication - Sign-in -->
@php
    $style = 'style=background-image:url(' . asset('assets/img/progress-hd.png') . ')';
    $settingValue = getSuperAdminSettingValue();
    App::setLocale(checkLanguageSession());

@endphp
@extends('layouts.auth_app')

@section('title')
    {{ __('auth.login.login') }}
@endsection
@section('content')



    <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-center p-4">
        <div class="col-12 text-center">
            <a href="{{ route('landing-home') }}" class="image mb-7 mb-sm-10">
                <img alt="Logo" src="{{ asset($settingValue['app_logo']['value']) }}" class="img-fluid logo-fix-size">
            </a>
        </div>
        <div class="bg-theme-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
            @include('flash::message')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h1 class="text-center mb-7">{{ __('auth.sign_in') }}</h1>
            <form method="post" action="{{ url('/login') }}">
                @csrf
                <input type="hidden" name="route_name"
                    value="{{ app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName() }}">
                <div class="mb-sm-7 mb-4">
                    <label for="formInputEmail" class="form-label">
                        {{ __('auth.email') }} <span class="required"></span>
                    </label>
                    <input type="email" class="form-control" name="email"
                        value="{{ Cookie::get('email') !== null ? Cookie::get('email') : old('email') }}" required
                        placeholder="{{ __('auth.login.enter_email') }}" id="formInputEmail">
                </div>
                <div class="mb-sm-7 mb-4">
                    <div class="d-flex justify-content-between">
                        <label for="formInputPassword" class="form-label">{{ __('auth.password') }}:
                            <span class="required"></span>
                        </label>
                        <a href="{{ url('/password/reset') }}" class="link-info fs-6 text-decoration-none">
                            {{ __('auth.login.forgot_password') }} ?
                        </a>
                        <input type="hidden"
                            value="{{ session('languageName') == null ? session('languageName') : checkLanguageSession() }}"
                            name="se_lang">
                    </div>
                    <input type="password" class="form-control" name="password" id="formInputPassword"
                        placeholder="{{ __('auth.login.enter_password') }}"
                        value="{{ Cookie::get('password') !== null ? Cookie::get('password') : null }}" required>
                </div>
                <div class="mb-sm-7 mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck" name="remember" checked>
                    <label class="form-check-label" for="formCheck">{{ __('auth.remember_me') }}</label>
                </div>
                <div class="d-grid" data-turbo="false">
                    <button type="submit" class="btn btn-primary">{{ __('auth.login.login') }}</button>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <span class="text-gray-700 me-2"> {{ __('messages.new_change.not_have_account') }}?</span>
                    <a href="{{ route('register') }}" class="link-info fs-6 text-decoration-none">
                        {{ __('messages.web_home.sign_up') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
    <!--end::Authentication - Sign-in -->
@endsection
