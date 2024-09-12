@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <main class="container max-w-2xl mx-auto space-y-8 mt-8 px-2 min-h-screen">
        <section
            class="bg-white border-2 p-8 border-gray-800 rounded-xl min-h-[400px] space-y-8 flex items-center flex-col justify-center">
            {{-- Profile Info --}}
            <div class="flex gap-4 justify-center flex-col text-center items-center">

                {{-- User Meta --}}
                <div>
                    <h1 class="font-bold md:text-2xl">Ahmed Shamim Hasan Shaon</h1>
                    <p class="text-gray-700">Less Talk, More Code 💻</p>
                </div>
                {{-- User Meta --}}
            </div>

            {{-- Profile Info --}}

            {{-- Edit Profile Button  --}}
            <a href="./edit-profile.html" type="button"
                class="-m-2 flex gap-2 items-center rounded-full px-4 py-2 font-semibold bg-gray-100 hover:bg-gray-200 text-gray-700">
                Edit Profile
            </a>
        </section>
    </main>
@endsection
