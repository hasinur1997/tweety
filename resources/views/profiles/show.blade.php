@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img src="/images/profile-banner.jpg" alt="" class="w-full rounded-lg mb-2">

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0" style="max-width: 270px">{{ $user->name }}</h2>
                <p class="text-sm">
                    {{ $user->created_at->diffForHumans() }}
                </p>
            </div>

            <div class="flex">
                @can('edit', $user)
                    <a href="{{ $user->path() }}/edit" class="rounded-full border border-gray-200 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
                @endcan

                @if(auth()->user()->isNot($user))
                    <form action="{{ $user->path() }}/follow" method="POST">
                        @csrf
                        <button 
                            type="submit" 
                            class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs"
                        >
                            {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
                        </button>
                    </form>
                @endif
            </div>
        </div>
        <p class="text-sm">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi nulla magnam odit aspernatur porro deleniti animi quam, beatae mollitia! Reprehenderit laboriosam quaerat et accusantium fugiat quos corporis nobis qui molestiae.
        </p>
    </header>
    <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2 absolute" style="width:150px; left: calc(50% - 125px); top:23%">

    @include('_timeline', [
        'tweets'    =>  $tweets
    ])
@endsection
