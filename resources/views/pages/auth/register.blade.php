<x-guest-layout>
    <div class="card">
        <div class="card-body login-card-body">
            <form method="POST" action="{{ route('auth_register') }}">
                @csrf

                <!-- Name -->
                <div class="input-group mb-3">
                    <input type="text" name="name" id="name" class="form-control" placeholder="name" required autofocus autocomplete="name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fa-solid fa-input-text"></span>
                        </div>
                    </div>
                </div>
                <span class="text-danger">
                    @if ($errors->get('name'))
                    <ul>
                        @foreach ((array) $errors->get('name') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </span>

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
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autocomplete="new-password">
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

                <!-- Confirm Password -->
                <div class="input-group mb-3">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" required autocomplete="new-password">
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

                <div class="row">
                    <div class="col-6">
                        <a class="custome-link" href="{{ route('login_view') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>

                    <div class="col-6">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
