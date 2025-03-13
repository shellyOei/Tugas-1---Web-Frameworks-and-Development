@extends('layout')

@section('content')
<div class="w-screen min-h-screen bg-gradient-to-b from-[#53483B] via-[#605c56] to-[#817e7b] mx-auto px-4 py-12 ">
    <h1 data-aos="fade-right" data-aos-duration="500" class="text-4xl font-bold text-center max-sm:my-8 sm:mt-20 mb-10 title text-white">Contact Us</h1>

    <div data-aos="fade-down" data-aos-duration="1000" class="w-[90%] lg:w-[1000px] h-fit bg-[#30211b] mx-auto flex max-sm:flex-col rounded-3xl">
        {{-- left --}}
        <div class="h-1/2 sm:w-1/2 flex flex-col items-start justify-center p-9 space-y-4">
            <h1 class="text-base lg:text-lg text-white text">Butuh Tau Memilih Furnitur yang Tepat?</h1>
            <h1 class="title text-3xl lg:text-5xl text-[#ede3c5]">LEAVE A REQUEST</h1>
            <h1 class="text-sm text-white text">Tinggalkan pesan Anda, dan tim kami akan membantu menemukan solusi terbaik untuk hunian impian Anda!</h1>
    
            <input type="text" placeholder="Nama" class="text mt-2 w-full p-3 rounded-full bg-[#44312b] text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#dbcda2] border border-[#ede3c5]">
            <input type="tel" placeholder="Nomor Telepon" class="text w-full p-3 rounded-full bg-[#44312b] text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#dbcda2] border border-[#ede3c5]">
            
            <label class="flex items-center space-x-2 text-white text-sm">
                <input type="checkbox" class="w-4 h-4 text-[#dbcda2] bg-[#44312b] border-gray-600 rounded focus:ring-[#dbcda2]">
                <span class="text">Saya lapar</span>
            </label>
    
            {{-- Submit Button --}}
            <button class="text w-1/2 mx-auto bg-[#dbcda2] text-[#30211b] font-semibold py-3 rounded-full hover:bg-[#c4b58a] transition duration-300 cursor-pointer">Submit</button>
        </div>
        
        {{-- right --}}
        <img class="hidden sm:block w-1/2 rounded-r-3xl object-cover" src="{{ asset('img/furniture.jpg')}}" alt="">
    </div>
</div>
@endsection