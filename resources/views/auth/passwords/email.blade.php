<x-master>
    <div class="mx-auto flex justify-center">
        <div class="bg-gray-200 border border-gray-300 px-12 py-8 rounded-lg" style="width:40%">
            <div class="col-md-8">
                <div class="card">
                    <div class="font-bold mb-6 text-xl">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
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
                                    value="{{ old('email') }}"
                                >

                                @error('email')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div> 

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4 mt-4">
                                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
