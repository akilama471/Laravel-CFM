<x-guest-layout>
    <div class=" text-sm text-white text-center ">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>
<br/>
    <!-- Session Status -->
    {{session('status')}}
    <div class="card">
        <div class="card-body login-card-body">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="input-group mb-3">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="" required autofocus>
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

                <button type="submit" class="btn btn-primary btn-block">{{ __('Email Password Reset Link') }}</button>

            </form>
        </div>
    </div>
</x-guest-layout>
