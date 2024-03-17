{{-- <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class=" flex flex-wrap items-center justify-between mx-[3%] p-4 ">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('/images/logo.svg') }}" alt="logo" class="h-10">
            <span
                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
            >Data Anggota</span
            >
        </a>
        <button
            data-collapse-toggle="navbar-default"
            type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default"
            aria-expanded="false"
        >
            <span class="sr-only">Open main menu</span>
            <svg
                class="w-5 h-5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 17 14"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15"
                />
            </svg>
        </button>

        <div class="flex gap-5">
            <div>
                <livewire:search-box/>
            </div>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
                >
                    <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img
                            src="https://media-cgk1-1.cdn.whatsapp.net/v/t61.24694-24/328800017_650674973695588_5564531715144486245_n.jpg?ccb=11-4&oh=01_AdQBbDYAzSi8N2bpqn3F50y_lnJ0UpniwphOtPvbphf1bA&oe=655C331D&_nc_sid=e6ed6c&_nc_cat=102"
                            class="h-10 rounded-3xl"
                            alt=""
                        />
                    </a>
                </ul>
            </div>
        </div>
    </div>
</nav> --}}
<header class="bg-white shadow-md">
    <nav class="flex justify-between items-center">
        <div class="py-6">
            <ul class="flex items-center gap-[2vw] font-bold">
                <li class="ml-10">
                    <img class="w-10" src="storage/python.png" alt="">
                </li>
            </ul>

        </div>

        <div class="">
            <ul class="flex gap-[2vw] font-bold items-center">
                <li class="hover:text-green-600">
                    <a href="{{ route ('landingpage')}}">Dashboard</a>
                </li>
                <li class="hover:text-green-600">
                    <a href="{{ route ('landingpage')}}">Kegiatan</a>
                </li>
                <li class="hover:text-green-600">
                    <a href="{{ route ('landingpage')}}" class="mr-10">Saldo</a>
                </li>

            </ul>
        </div>

    </nav>
</header>