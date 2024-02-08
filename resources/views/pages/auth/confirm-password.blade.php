<x-guest-layout>
    <div class="text-sm text-white text-center">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div class="input-group mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autocomplete="current-password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
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

                <button type="submit" class="btn btn-primary btn-block">{{ __('Confirm') }}</button>
            </form>
        </div>
    </div>
</x-guest-layout>
