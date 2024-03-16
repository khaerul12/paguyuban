@extends('layouts.main')
@section('content')
    <!-- Section Dashboard -->
    <section id="dashboard" class="2xl:my-24 xl:my-24 sm:my-14">
        <div class="2xl:px-28 xl:px-28 sm:px-10">
            <h1 class="2xl:text-5xl xl:text-5xl md:text-4xl 2xl:inline-block xl:inline-block sm:flex sm:text-2xl sm:font-bold 2xl:font-normal xl:font-normal lg:font-normal ">Dashboard</h1>
            <h1 class="2xl:text-5xl xl:text-5xl 2xl:inline-block xl:inline-block 2xl:float-right xl:float-right sm:flex sm:text-2xl">View All</h1>

            <div class="2xl:grid xl:grid lg:grid 2xl:grid-cols-4 xl:grid-cols-4 lg:grid-cols-4 gap-4 my-10 sm:items-center">
                <div class="grid grid-rows-2 grid-flow-col gap-4 shadow-xl p-4 rounded-xl">
                    <div class="text-2xl">Total data anggota</div>
                    <div>09</div>
                </div>
                <div class="grid grid-rows-2 grid-flow-col gap-4 shadow-xl p-4 rounded-xl">
                    <div class="text-2xl">Total Kota</div>
                    <div>09</div>
                </div>
                <div class="grid grid-rows-2 grid-flow-col gap-4 shadow-xl p-4 rounded-xl">
                    <div class="text-2xl">Total Provinsi</div>
                    <div>09</div>
                </div>
                <div class="grid grid-rows-2 grid-flow-col gap-4 shadow-xl p-4 rounded-xl">
                    <div class="text-2xl">Total KK</div>
                    <div>09</div>
                </div>
            </div>

            <div class="2xl:grid xl:grid 2xl:grid-cols-2 xl:grid-cols-2 gap-4 my-10">
                <div class="gap-4 shadow-xl p-4 rounded-xl">
                    <div class="text-2xl ">City</div>

                    <div class="mt-3 overflow-auto rounded-lg shadow">

                        <table class="w-full">
                            <thead class="bg-gray-50 border-b-2 border-gray-200 ">
                                <tr>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">No.</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Details</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Status</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Date</th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">Total</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="bg-white">
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">10001</td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Kring New Fit office chair, mesh + PU, black</td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Delivered</td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">16/10/2021</td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">200</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">10002</td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Kring New Fit office chair, mesh + PU, black</td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Delivered</td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">16/10/2021</td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">200</td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">10003</td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Kring New Fit office chair, mesh + PU, black</td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Delivered</td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">16/10/2021</td>
                                    <td class="p-3 text-sm text-gray-700 whitespace-nowrap">200</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <table id="cashflow" class="w-full text-sm bg-gray-400  justify-center shadow-xl text-center">
                            <thead class="text-xs  uppercase bg-[#E3E1E1] ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Keterangan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nominal
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Debit or Kredit
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b ">
                                    <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                        03-02-2024
                                    </th>
                                    <td class="px-6 py-4">
                                        Pembelian Mobil
                                    </td>
                                    <td class="px-6 py-4">
                                        100.000.000
                                    </td>
                                    <td class="px-6 py-4">
                                        Debit
                                    </td>
                                </tr>
                                <tr class="bg-white border-b ">
                                    <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap">
                                        04-02-2024
                                    </th>
                                    <td class="px-6 py-4">
                                        Mendapatkan dana dari yayasan ABC
                                    </td>
                                    <td class="px-6 py-4">
                                        150.000.000
                                    </td>
                                    <td class="px-6 py-4">
                                        Kredit
                                    </td>
                                </tr>
                            </tbody>
                        </table> -->
                    </div>
                </div>
                

                <div class="grid grid-rows-2 grid-flow-col gap-4 shadow-xl p-4 rounded-xl">
                    <div class="text-2xl">Gender</div>
                    <div>09</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Dashboard -->

    <!-- Section Kegiatan -->
    <section id="kegiatan" class="2xl:my-24 xl:my-24 sm:my-14">
        <div class="2xl:px-28 xl:px-28 sm:px-10">
            <h1 class="2xl:text-5xl xl:text-5xl md:text-4xl 2xl:inline-block xl:inline-block sm:flex sm:text-2xl sm:font-bold 2xl:font-normal xl:font-normal lg:font-normal">
                Kegiatan
            </h1>
            <h1 class="2xl:text-5xl xl:text-5xl 2xl:inline-block xl:inline-block 2xl:float-right xl:float-right sm:flex sm:text-2xl">View All</h1>

            
            <div class="2xl:flex xl:flex md:flex 2xl:justify-center xl:justify-center 2xl:gap-7 xl:gap-7 md:gap-3">
            @foreach($activities as $activities)    
                <div class="w-full rounded overflow-hidden shadow-lg my-10">
                    <img class="w-full max-h-44 object-cover"
                        src="{{ asset('storage/'. $activities->image) }}"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $activities->title }}</div>
                        <p class="text-gray-700 text-base">
                            {{ $activities -> body}}
                        </p>
                    </div>
                </div>
            @endforeach
    
    
                {{-- <div class="max-w-sm rounded overflow-hidden shadow-lg my-10">
                    <img class="w-full max-h-60 object-fit"
                        src="https://images.unsplash.com/photo-1707343846292-0c11438d145f?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Buka puasa bersama</div>
                        <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                            perferendis eaque, exercitationem praesentium nihil.
                        </p>
                    </div>
                </div> --}}
    
    
            </div>


            




        </div>

    </section>
    <!-- Section Kegiatan -->


    <!-- Section Keuangan -->
    <section id="saldo" class="my-24">
        <div class="2xl:px-28 xl:px-28 sm:px-10">
            <h1 class="text-7xl justify-center flex">10.000.000</h1>
            <h2 class="text-5xl justify-center flex mt-4">Saldo</h2>

            
            <div class="2xl:flex xl:flex justify-center mt-10 overflow-auto rounded-lg shadow">
                <table class="w-full">
                    <thead class="bg-gray-50 border-b-2 border-gray-200 ">
                        <tr>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">No.</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Details</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Status</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Date</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="bg-white">
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">10001</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Kring New Fit office chair, mesh + PU, black</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Delivered</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">16/10/2021</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">200</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">10002</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Kring New Fit office chair, mesh + PU, black</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Delivered</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">16/10/2021</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">200</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">10003</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Kring New Fit office chair, mesh + PU, black</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Delivered</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">16/10/2021</td>
                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">200</td>
                        </tr>
                    </tbody>
                </table>

            </div>
    

        </div>
    </section>
    <!-- Section Keuangan -->
@endsection