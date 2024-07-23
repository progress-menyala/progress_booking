<x-app-layout>
    @include('components.banner', ['title' => 'Login', 'subtitle' => ''])

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}

    <section class="login-section">
        <div class="auto-container">
            <div class="form-box site-form">
                <div class="login-form">
                    <h5>Login In</h5>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row clearfix">
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="f-label">Email Address <i>*</i></div>
                                <div class="field-inner">
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="f-label">Password <i>*</i></div>
                                <div class="field-inner">
                                    <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <div class="field-inner clearfix">
                                    <div class="remember">
                                        <div class="check-block">
                                            <input type="checkbox" name="fieldname" id="check-1">
                                            <label for="check-1">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="forgot-pass">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                        {{-- <a href="reset-password.html">Forgot your password? </a> --}}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="theme-btn btn-style-two"><span>Login In<i class="icon far fa-angle-right"></i></span></button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="lower-link">Don't have a account? <a href="/register">Sign Up</a> Now</div>
            </div>
        </div>
    </section>

</x-app-layout>


