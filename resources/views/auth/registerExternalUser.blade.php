@extends('layouts.registerLayout')

@section('content')

<section class="bg-white dark:bg-white">
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/5" style="background-image: url('https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80')">
        </div>

        <div class="flex items-center w-full max-w-2xl p-2 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <div class="flex items-center justify-between">
                    <div class="mt-1">
                        <h1 class="text-gray-500 dark:text-gray-500">Select type of account</h1>
                        <div class="mt-3 md:flex md:items-center md:-mx-2">
                            <button id="clientLink" href="{{ route('register.externalUser') }}" class="flex justify-center w-full px-6 py-3 text-white bg-black rounded-lg md:w-auto md:mx-2 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="mx-2">Cliente</span>
                            </button>

                            <button id="workerLink" href="{{ route('register.agentUser') }}" class="flex justify-center w-full px-6 py-3 mt-4 text-black border border-black rounded-lg md:mt-0 md:w-auto md:mx-2 dark:border-black dark:text-black focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span class="mx-2">Agente</span>
                            </button>
                        </div>



                    </div>

                    <div class="flex items-center ml-4 mt-6 md:mt-0">
                        <div class="relative">
                            <div class="flex items-center ml-4">
                                <input name="imagen" id="imagen" type="file" class="hidden" accept="image/*">
                                <label for="imagen" class="relative cursor-pointer flex items-center justify-center w-24 h-24 bg-gray-200 rounded-full overflow-hidden">
                                    <img id="profileImage" src="" alt="Profile Image" class="object-cover w-full h-full" style="display: none;">
                                    <svg id="profileIcon"  xmlns="http://www.w3.org/2000/svg"  width="54"  height="54"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                                </label>
                            </div>
                            <button id="removeImage" class="absolute -top-6 right-0 mt-4 mr-4 bg-red-500 text-white rounded-full p-1 focus:outline-none" style="display: none;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6 4a1 1 0 011-1h6a1 1 0 011 1v1h3a1 1 0 110 2h-1v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7H2a1 1 0 110-2h3V4zm2 3a1 1 0 00-1 1v7a1 1 0 002 0V8a1 1 0 00-1-1zm4 0a1 1 0 00-1 1v7a1 1 0 002 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <form class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2" enctype="multipart/form-data">
                    <div>
                        <label class="block mb-2 font-bold text-sm text-gray-600 dark:text-gray-600">Username</label>
                        <input name="Usuario" placeholder="Username" class="text-black placeholder-gray-600 w-full px-5 py-3 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-300 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                    </div>

                    <div>
                        <label class="block mb-2 font-bold text-sm text-gray-600 dark:text-gray-600">Email Address</label>
                        <input name="Email" type="email" placeholder="Email" class="text-black placeholder-gray-600 w-full px-5 py-3 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-300 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                    </div>

                    <div>
                        <label class="block mb-2 font-bold text-sm text-gray-600 dark:text-gray-600">Password</label>
                        <input name="password" type="password" placeholder="Password" class="text-black placeholder-gray-600 w-full px-5 py-3 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-300 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                    </div>

                    <div>
                        <label class="block mb-2 font-bold text-sm text-gray-600 dark:text-gray-600">Confirm Password</label>
                        <input name="password_confirmation" type="password" placeholder="Confirm Password" class="text-black placeholder-gray-600 w-full px-5 py-3 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-300 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block mb-2 font-bold text-sm text-gray-600 dark:text-gray-600">Company</label>
                        <input name="Empresa" placeholder="Company" class="text-black placeholder-gray-600 w-full px-5 py-3 mt-2 text-base transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200 focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-300 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                    </div>

                    <button class=" flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-black rounded-lg hover:bg-gray-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        <span>Sign Up</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById("workerLink").addEventListener("click", function(event) {
        event.preventDefault();
        window.location.href = "{{ route('register.agentUser') }}";
    });
</script>
<script>
    document.getElementById('imagen').addEventListener('change', function(event) {
        const profileImage = document.getElementById('profileImage');
        const profileIcon = document.getElementById('profileIcon');
        const removeImageButton = document.getElementById('removeImage');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                profileImage.src = e.target.result;
                profileImage.style.display = 'block';
                profileIcon.style.display = 'none';
                removeImageButton.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });

    document.getElementById('removeImage').addEventListener('click', function() {
        const profileImage = document.getElementById('profileImage');
        const profileIcon = document.getElementById('profileIcon');
        const removeImageButton = document.getElementById('removeImage');
        const imageInput = document.getElementById('imagen');

        profileImage.src = '';
        profileImage.style.display = 'none';
        profileIcon.style.display = 'block';
        removeImageButton.style.display = 'none';
        imageInput.value = '';
    });
</script>




@endsection
