<x-guest-layout>
    @if (Route::has('login_view'))
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form method="POST" action="{{ route('auth_login') }}">
                @csrf

                <!-- Email Address -->
                <div class="input-group mb-3">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required autofocus autocomplete="username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fa-sharp fa-solid fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <span class="text-danger">
                    @if ($errors->get('email'))
                    <ul>
                        @foreach ((array) $errors->get('email') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </span>

                <!-- Password -->
                <div class="input-group mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autocomplete="current-password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fa-sharp fa-solid fa-lock"></span>
                        </div>
                    </div>
                </div>
                <span class="text-danger">
                    @if ($errors->get('password'))
                    <ul>
                        @foreach ((array) $errors->get('password') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </span>

                <br />
                <div class="row">

                    <div class="col-7">
                        @if (Route::has('password.request'))
                        <a class="custome-link" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>

                    <div class="col-5">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endif
</x-guest-layout>
