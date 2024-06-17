@extends('layouts.auth')

@section('content')
    <div class="auth-wrapper">
        <h3 class="auth-header">MERITOCRAT</h3>

        <form class="auth-form" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="auth-field">
                    <label for="email">{{ __('Login') }}</label>

                    <div class="auth-input">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required
                               autocomplete="email" autofocus>

                        @error('email')
                        <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="auth-field">
                    <label for="password">{{ __('Password') }}</label>

                    <div>
                        <input id="password" type="password" name="password" required autocomplete="current-password">

                        @error('password')
                        <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="auth-field">
                    <div>
                        <div>
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label for="remember">
                                {{ __('Запомнить меня') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="auth-field">
                    <div class="auth-action">
                        <button type="submit">
                            {{ __('Войти') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Забыли пароль?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
    </div>
@endsection
