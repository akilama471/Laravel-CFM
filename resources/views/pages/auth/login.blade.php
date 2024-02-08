<x-guest-layout>
    @if (Route::has('login_view'))

    @auth

    <div class="lockscreen-wrapper">

        <div class="lockscreen-name">{{ Auth::user()->name }}</div>

        <div class="lockscreen-item">
            <div class="lockscreen-image">
                <img src="{{asset("assets/images/male.png")}}" alt="User Image">
            </div>

            <form method="POST" action="{{ route('auth_login') }}" class="lockscreen-credentials">
                @csrf
                <div class="input-group mb-3" hidden>
                    <input type="email" name="email" id="email" class="form-control" value="{{ Auth::user()->email }}">
                </div>

                <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="password" required>

                    <div class="input-group-append">
                        <button type="submit" class="btn">
                            <i class="fas fa-arrow-right text-muted"></i>
                        </button>
                    </div>
                </div>
            </form>

        </div>

        <div class="help-block text-center text-white">
            Enter your password to retrieve your session
        </div>
        <div class="text-center">
            <form method="POST" action="{{ route('auth_logout') }}">
                @csrf
                <a href="{{ route('auth_logout') }}" class="nav-link" onclick="event.preventDefault();this.closest('form').submit();">
                    <p>
                        Or sign in as a different user
                    </p>
                </a>
            </form>
        </div>
    </div>

    @else

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
    @endauth
    @endif
</x-guest-layout>
