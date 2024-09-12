@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main class="container max-w-xl mx-auto space-y-8 mt-8 px-2 md:px-0 min-h-screen">

        {{-- Aleart --}}
        @if (session('success'))
            <div class="flex items-center justify-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                role="alert">
                <span class="sr-only">Success</span>
                <div class="text-center">{{ session('success') }}</div>
            </div>
        @endif

        <div class="text-center p-12 border border-gray-800 rounded-xl">
            <h1 class="text-3xl justify-center items-center">Welcome to Barta!</h1>
        </div>
    </main>
@endsection
