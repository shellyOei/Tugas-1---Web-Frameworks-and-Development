@extends('layout')

@section('content')
<div class="w-screen min-h-screen bg-gradient-to-b from-[#53483B] via-[#605c56] to-[#817e7b] mx-auto px-4 py-12 ">
    <h1 data-aos="fade-right" data-aos-duration="500" class="text-4xl font-bold text-center max-sm:my-8 sm:mt-20 mb-10 title text-white">Product Catalogue</h1>

    <div data-aos="fade-up" data-aos-duration="1000" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 w-[80%] mx-auto">
        <div class="bg-white rounded-lg shadow-md overflow-hidden text scale-[1] hover:scale-[1.05] hover:-translate-y-5 transition duration-300">
            <img src="{{ asset('img/sofa.jpg') }}" class="w-full h-64 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold title">Sofa Mahal</h2>
                <p class="text-gray-600">Rp3.500.000</p>
                <a href="#" class="mt-3 inline-block px-4 py-2 bg-black text-white text-sm font-medium rounded-md hover:bg-gray-800 transition">View Details</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden text scale-[1] hover:scale-[1.05] hover:-translate-y-5 transition duration-300">
            <img src="{{ asset('img/meja.jpg') }}" class="w-full h-64 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold title">Meja</h2>
                <p class="text-gray-600">Rp1.250.000</p>
                <a href="#" class="mt-3 inline-block px-4 py-2 bg-black text-white text-sm font-medium rounded-md hover:bg-gray-800 transition">View Details</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden text scale-[1] hover:scale-[1.05] hover:-translate-y-5 transition duration-300">
            <img src="{{ asset('img/kursi.jpg') }}" class="w-full h-64 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold title">Kursi Keren</h2>
                <p class="text-gray-600">Rp950.000</p>
                <a href="#" class="mt-3 inline-block px-4 py-2 bg-black text-white text-sm font-medium rounded-md hover:bg-gray-800 transition">View Details</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden text scale-[1] hover:scale-[1.05] hover:-translate-y-5 transition duration-300">
            <img src="{{ asset('img/king-size.jpg') }}" class="w-full h-64 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold title">King Size Bed</h2>
                <p class="text-gray-600">Rp6.000.000</p>
                <a href="#" class="mt-3 inline-block px-4 py-2 bg-black text-white text-sm font-medium rounded-md hover:bg-gray-800 transition">View Details</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden text scale-[1] hover:scale-[1.05] hover:-translate-y-5 transition duration-300">
            <img src="{{ asset('img/kelly.jpg') }}" class="w-full h-64 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold title">Kelly</h2>
                <p class="text-gray-600">Rp4.200.000</p>
                <a href="#" class="mt-3 inline-block px-4 py-2 bg-black text-white text-sm font-medium rounded-md hover:bg-gray-800 transition">View Details</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden text scale-[1] hover:scale-[1.05] hover:-translate-y-5 transition duration-300">
            <img src="{{ asset('img/lemari.jpg') }}" class="w-full h-64 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold title">Lemari Tinggi</h2>
                <p class="text-gray-600">Rp5.800.000</p>
                <a href="#" class="mt-3 inline-block px-4 py-2 bg-black text-white text-sm font-medium rounded-md hover:bg-gray-800 transition">View Details</a>
            </div>
        </div>
    </div>
</div>
@endsection