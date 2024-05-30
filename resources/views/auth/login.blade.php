@extends('layouts.loginLayout')


@section('content')


<div class="flex items-center min-h-screen bg-white dark:bg-white">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10">
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Sign in</h1>
                <p class="text-gray-500 dark:text-gray-400">Sign in to access your account</p>
            </div>
            <div class="m-7">
                <form action="">
                    <div class="mb-6">
                        <label class="block mb-2 font-bold text-sm text-gray-600 dark:text-gray-600">Email
                            Address</label>
                        <input name="Email" type="email" placeholder="Email" value="{{ old('Email') }}"
                            class="text-black placeholder-gray-600 w-full px-5 py-3 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-300 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                    </div>
                    <div class="mb-6">
                        <div class="flex justify-between mb-2">
                            <label class="block mb-2 font-bold text-sm text-gray-600 dark:text-gray-600">Password</label>
                            <a href="#!" class="text-sm text-gray-400 focus:outline-none focus:text-indigo-500 hover:text-indigo-500 dark:hover:text-indigo-300">Forgot password?</a>
                        </div>
                        <input name="password" type="password" placeholder="Password"
                        class="text-black placeholder-gray-600 w-full px-5 py-3 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-300 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                    </div>
                    <div class="mb-6">
                        <button type="submit"
                        class="flex items-center justify-center w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-black rounded-lg hover:bg-gray-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        <span>Sign In</span>
                    </button>
                    </div>
                    <p class="text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="#!" class="text-indigo-400 focus:outline-none focus:underline focus:text-indigo-500 dark:focus:border-indigo-800">Sign up</a>.</p>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
