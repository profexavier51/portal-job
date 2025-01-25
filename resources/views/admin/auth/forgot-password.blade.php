{{-- <x-guest-layout>
    <h1>Admin Forgot Password</h1>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('admin.password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@extends('admin.auth.layouts.auth-master')
@section('contents')
<section class="section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <div class="login-brand">
            <img src="{{ asset('admin/assets/img/logo-agile.jpeg') }}" alt="logo" width="120" style="margin-top: -60px !important" class="shadow-light rounded-circle">
          </div>
          <p class="alert alert-warning" style="margin-top: -35px;text-align: justify; color:rgb(255, 255, 255)" >Sem problemas. Basta nos informar seu endereço de email e enviaremos um link de redefinição de senha por email que permitirá escolher uma nova senha.</p>
          <div class="card card-primary">
            <div class="card-header"><h4>Esqueceu a senha?</h4></div>

            <div class="card-body" style="margin-top: -45px !important">

              <!-- Session Status -->

                <x-auth-session-status class="mb-4 alert alert-success" style="color:rgb(255, 255, 255);font-weight: bold" :status="session('status')" />

              <form method="POST" action="{{ route('admin.password.email') }}">
                @csrf
                     <!-- Email Address -->
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email" tabindex="1" value="{{ old('email') }}" required autofocus>
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Redefinir Senha
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="simple-footer" style="margin-top: -35px !important; z-index: 999; position: relative" >
            Copyright &copy; AgileSolutions {{ date('Y') }}
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
