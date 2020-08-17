<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="POST">
        @csrf

        <textarea name="body" class="w-full" placeholder="What's up doc?">

        </textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">

            <img src="{{ auth()->user()->avatar }}" alt="" class="rounded-full mr-2" style="widht:40px; height:40px">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-full shadow py-2 px-10 text-sm text-white">
                Publish
            </button>
        </footer>
    </form>

     @error('body')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>
