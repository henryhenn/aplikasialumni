@extends('layouts.main')

@section('content')
    @include('components.flash_message')
    <h3 class="text-4xl font-extrabold text-center text-stone-700">Admin <span class="text-indigo-700">Login</span></h3>
    <div class="flex justify-center mt-28">
        <div class="flex-grow">
            <form action="{{ url('admin/login') }}" method="post" autocomplete="off">
                @csrf
                <input type="hidden" name="is_admin" value="1">
                <div class="p-10 shadow-md bg-indigo-600 rounded-lg text-white shadow-slate-600">
                    <div class="grid grid-cols-2 mb-6">
                        <label for="email" class="font-bold text-lg">Email &nbsp;</label>
                        <input type="text" name="email" id="email" autofocus
                            class="inline rounded-lg shadow-lg border-2 p-2 text-stone-800 @error('email') placeholder:text-red-500 border-red-500 @enderror"
                            @error('email') placeholder="{{ $message }}" @enderror placeholder="Email">
                    </div>
                    <div class="grid grid-cols-2 mb-10">
                        <label for="password" class="font-bold text-lg">Password &nbsp;</label>
                        <input type="password" name="password" id="password"
                            class="inline rounded-lg shadow-lg border-2 p-2 text-stone-800 @error('password') placeholder:text-red-500 border-red-500 @enderror"
                            @error('password') placeholder="{{ $message }}" @enderror placeholder="Password">
                    </div>
                    <button type="submit"
                        class="rounded-full font-bold py-3 px-6 w-full bg-indigo-800 hover:bg-indigo-400 ease-in-out duration-300 mt-6">Login
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
