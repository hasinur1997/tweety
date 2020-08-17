<div class="bg-gray-200 rounded-lg py-4 px-6 border border-gray-300">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @forelse(auth()->user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-4' }}">
                <div class="flex item-center text-sm">
                    <a href="{{ $user->path() }}" class="flex item-center text-sm">
                        <img src="/images/profile.png" alt="" class="rounded-full mr-2" style="widht:40px; height:40px">
                        {{ $user->name }}
                    <a href="{{ $user->path() }}">
                </div>
            </li>
        @empty
            No friends yet !
        @endforelse
    </ul>
</div>


