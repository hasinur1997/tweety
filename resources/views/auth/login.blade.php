<x-master>
    <div class="mx-auto flex justify-center">
        <div class="bg-gray-200 border border-gray-300 px-12 py-8 rounded-lg" style="width:40%">
            <h2 class="font-bold mb-6">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
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
                    >

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
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                        Login
                    </button>
                    <a href="{{ route('password.request') }}" class="ml-4">Forgot Your Password ?</a>
                </div>  

            </form>
        </div>
    </div>
</x-master>
