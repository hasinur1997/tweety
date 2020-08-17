@extends('layouts.app')

@section('content')
    @foreach($users as $user)
        <div class="mb-6">
            <a href="{{ $user->path() }}" class="flex items-center">
                <img src="{{ $user->avatar }}" alt="User's avatar" width="60" class="mr-4 rounded">

                <div>
                    <h4 class="font-bold">
                        {{ '@' . $user->username}}
                    </h4>
                </div>
            </a>
        </div>
    @endforeach

    {{ $users->links() }}
@endsection