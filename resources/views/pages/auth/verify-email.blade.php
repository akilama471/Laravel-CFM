<x-guest-layout>
    <div class="text-sm text-white text-center">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
    @endif
    <div class="card">
        <div class="card-body login-card-body">
            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button type="submit" class="btn btn-primary btn-block">{{ __('Resend Verification Email') }}</button>
                    </div>
                </form>
                <br>
                <form method="POST" action="{{ route('auth_logout') }}">
                    @csrf

                    <button type="submit" class="btn btn-primary btn-block">{{ __('Log Out') }}</button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
