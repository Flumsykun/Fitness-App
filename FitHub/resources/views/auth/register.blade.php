@extends('layouts.app')

@section('title', 'Register')

@section('body_class', 'bg-gray-50 dark:bg-gray-900')
@section('content')

    <section class="mx-auto w-full">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full bg-dark rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create your account
                    </h1>

                    <form class="space-y-4 md:space-y-6" action="{{route('register')}}" method="POST">
                        @csrf
                        @component('layout.components.shared.form-group', [
                            'inputName' => 'name',
                        ])
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="E.g. SpaceDragon249" required="">
                        @endcomponent
                        @component('layout.components.shared.form-group', [
                            'inputName' => 'email',
                        ])
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="E.g. SpaceDragon249@mail.com" required="">
                        @endcomponent
                        @component('layout.components.shared.form-group', [
                            'inputName' => 'password',
                        ])
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   required="">
                        @endcomponent
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <a href="{{ route('password.request') }}"
                                   class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot
                                    password?
                                </a>
                            </div>
                        </div>

                        <button type="submit"
                                class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Sign me up!
                        </button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">Already have an account?
                            <a href="{{ route('login') }}"
                               class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign in</a>
                        </p>
                        <a href="{{ route('home.index') }}"
                           class="flex items-center justify-between font-medium text-primary-600 hover:underline dark:text-primary-500">
                            ← Back to Home</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
