<x-app-layout>
    @include('components.banner', ['title' => 'Forgot Password', 'subtitle' => ''])
    {{-- <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div> --}}

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- <form method="POST" action="{{ route('password.email') }}">
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
    </form> --}}

    <section class="reset-section">
        <div class="auto-container">
            <div class="form-box site-form">
                <div class="reset-form">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                
                        <div class="row clearfix">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="invalid-alert"><i class="fa fa-times-circle"></i> Invalid username or email</div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="text">Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="f-label">Email Address <i>*</i></div>
                                <div class="field-inner">
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>
                            
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="text-right"><button type="submit" class="theme-btn btn-style-two"><span>Reset Password<i class="icon far fa-angle-right"></i></span></button></div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="lower-link">Don't have a account? <a href="/register">Sign Up</a> Now</div>
            </div>
        </div>
    </section>

</x-app-layout>
