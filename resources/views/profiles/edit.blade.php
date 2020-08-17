@extends('layouts.app')

@section('content')
    <form action="{{ $user->path() }}/update" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name"
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >
                Name
            </label>

            <input class="border border-gray-400 p-2 w-full" 
                type="text"
                name="name"
                id="name"
                value="{{ $user->name }}"
            >

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username"
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >
                Username
            </label>

            <input class="border border-gray-400 p-2 w-full" 
                type="text"
                name="username"
                id="username"
                value="{{ $user->username }}"
            >

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>    

        <div class="mb-6">
            <label for="email"
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >
                Email
            </label>

            <input class="border border-gray-400 p-2 w-full" 
                type="email"
                name="email"
                id="email"
                value="{{ $user->email }}"
            >

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div> 

        <div class="mb-6">
            <label for="avatar"
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                >
                    Avatar
            </label>

            <div class="flex">
                <input class="border border-gray-400 p-2 w-full" 
                    type="file"
                    name="avatar"
                    id="avatar"
                    value="{{ $user->avatar }}"
                >

                <img src="{{ $user->avatar }}" alt="your avatar" width="40">

            </div>

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
            
        </div> 

        <div class="mb-6">
            <label for="password"
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >
                password
            </label>

            <input class="border border-gray-400 p-2 w-full" 
                type="password"
                name="password"
                id="password"
            >

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation"
                class="block mb-2 uppercase font-bold text-xs text-gray-700"
            >
                password confirmation
            </label>

            <input class="border border-gray-400 p-2 w-full" 
                type="password"
                name="password_confirmation"
                id="password_confirmation"
            >

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
            >
            Update
            </button>
        </div>  

    </form>
@endsection