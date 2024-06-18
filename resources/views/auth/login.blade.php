@extends('layouts.auth')

@section('content')
    <div class="auth-wrapper">
        <h3 class="auth-header">MERITOCRAT</h3>

        <form class="auth-form" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="auth-field">
                    <label for="email">{{ __('Логин') }}</label>

                    <div class="auth-input">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required
                               autocomplete="email" autofocus>
                    </div>
                </div>

                <div class="auth-field">
                    <label for="password">{{ __('Пароль') }}</label>

                    <div class="auth-input">
                        <input id="password" type="password" name="password" required autocomplete="current-password">

                        @error('email')
                        <span class="auth-error" role="alert">
                            Неверный логин или пароль
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
                            {{ __('Вход') }}
                        </button>
                    </div>
                </div>
            </form>
    </div>
@endsection
