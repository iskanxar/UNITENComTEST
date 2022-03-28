<head>
<link rel="icon" href="{{ asset('/images/logobig.png') }}">
<title>UNITEN Community</title>
</head>

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="role_id" value="{{ __('Register as') }}" />
                <select name="role_id" x-model="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="1">Admin</option>
                    <option value="2">Committee</option>
                    <option value="3">Student</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="phone_number" value="{{ __('Phone Number') }}" />
                <x-jet-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required autofocus autocomplete="phone_number" />
            </div>

            <div class="mt-4">
                <x-jet-label for="ic_number" value="{{ __('IC Number') }}" />
                <x-jet-input id="ic_number" class="block mt-1 w-full" type="text" name="ic_number" :value="old('ic_number')" required autofocus autocomplete="ic_number" />
            </div>

            <div class="mt-4">
                <x-jet-label for="program" value="{{ __('Program') }}" />
                <x-jet-input id="program" class="block mt-1 w-full" type="text" name="program" :value="old('program')" required autofocus autocomplete="program" />
            </div>

            <div class="mt-4">
                <x-jet-label for="intake_semester" value="{{ __('Intake Semester') }}" />
                <select name="intake_semester" x-model="intake_semester" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="Trimester 1, Academic Year 2018/2019">Trimester 1, Academic Year 2018/2019</option>
                    <option value="Trimester 2, Academic Year 2018/2019">Trimester 2, Academic Year 2018/2019</option>
                    <option value="Trimester 3, Academic Year 2018/2019">Trimester 3, Academic Year 2018/2019</option>
                    <option value="Trimester 1, Academic Year 2019/2020">Trimester 1, Academic Year 2019/2020</option>
                    <option value="Trimester 2, Academic Year 2019/2020">Trimester 2, Academic Year 2019/2020</option>
                    <option value="Trimester 3, Academic Year 2019/2020">Trimester 3, Academic Year 2019/2020</option>
                    <option value="Trimester 1, Academic Year 2020/2021">Trimester 1, Academic Year 2020/2021</option>
                    <option value="Trimester 2, Academic Year 2020/2021">Trimester 2, Academic Year 2020/2021</option>
                    <option value="Trimester 3, Academic Year 2020/2021">Trimester 3, Academic Year 2020/2021</option>
                </select>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
