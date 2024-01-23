@extends('layouts.app')

@section('title', 'FitHub')

@section('body_class', 'bg-gray-50 dark:bg-gray-900')
@section('content')

    <header class="text-center py-8">
        <h1 class="text-3xl font-semibold text-gray-800 dark:text-white">Welcome to FitHub</h1>
        <!-- Add any additional header content or navigation links -->
    </header>
    <section class="mx-auto w-full max-w-2xl p-8 bg-white rounded-md shadow-md dark:bg-gray-800 dark:border-gray-700">
        <h2 class="text-xl text-white font-semibold mb-4">Key Features:</h2>
        <ul class="space-y-2">
            @guest
                <!-- If user is not logged in, show login links -->
                <x-nav-link :href="route('login')">Login</x-nav-link>
                <x-nav-link :href="route('register')">Register</x-nav-link>
                <x-nav-link :href="route('password.request')">Forgot Password</x-nav-link>
            @else
                <div>
                    <label for="Welcome"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Welcome, {{ auth()->user()->name }}
                        !</label>
                    <label for="Role"
                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role: {{ auth()->user()->role ? auth()->user()->role->name : 'No role assigned' }}</label>
                </div>
                <!-- If user is logged in, show appropriate links -->
                @if(auth()->user()->hasRole(\App\Helpers\Roles::ADMIN))
                    <!-- Admin links -->
                    <x-nav-link :href="route('admin.dashboard')">Admin Dashboard</x-nav-link>
                    <x-nav-link :href="route('admin.workout-split.create')">Create Workout Split</x-nav-link>
                @else
                    <!-- User links -->
                    <x-nav-link :href="route('user.dashboard')">User Dashboard</x-nav-link>
                    <x-nav-link :href="route('user.workout-split.create')">View Workout Splits</x-nav-link>

                @endif
                <!-- Add links to other key features or sections -->
                <!-- Logout link POST method -->
                <form method="POST" class="text-red-500" action="{{ route('logout') }}">
                    @csrf
                    <x-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-nav-link>

{{--                <x-nav-link :href="route('auth.logout')" class="text-red-500">Logout</x-nav-link>--}}
            @endguest
        </ul>
    </section>

    <footer class="text-center mt-8">
        <!-- Add footer content or links to additional information -->
        <p class="text-gray-600 dark:text-gray-400">&copy; {{ date('Y') }} FitHub. All rights reserved.</p>
    </footer>

@endsection
