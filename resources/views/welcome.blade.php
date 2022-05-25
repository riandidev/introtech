@extends('layouts.app')
@section('content')
    <div class="w-full h-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 ...">
        <div class="mt-2 ml-2 flex">
            <div class="w-1/2 flex">
                <img src="{{asset('img/logo.jpeg')}}" width="100px" alt="">
                <h3 class="font-semibold font-mono text-white drop-shadow-lg pl-4 pt-4 text-3xl">INTROTECH</h3>
            </div>
            <div class="flex w-1/2">
                <a href="" class="menu-link">HOME</a>
                <a href="" class="menu-link ml-6">TENTANG KAMI</a>
                <a href="" class="menu-link ml-6">JASA DAN LAYANAN</a>
                <a href="" class="menu-link ml-6">PORTOFOLIO</a>
                <a href="" class="menu-link ml-6">TESTIMONI</a>
                <a href="" class="menu-link ml-6">KONTAK</a>
            </div>
        </div>
    </div>

    <div class="w-full pt-20 bg-[url('/img/bg.png')] bg-cover h-full bg-blend-saturation">
        <div class="mx-auto text-center text-white h-80">
            <h1 class="text-5xl drop-shadow-lg mb-4">IT Solution, Computer & Laptop Specialist</h1>
            <div class="mt-20 p-4">
                <p class="text-2xl drop-shadow-lg mb-3 text-green-50">Sosial media dan kontak personal</p>
                <div class="rounded-lg bg-indigo-500 bg-opacity-20 shadow-lg w-48 p-2 mx-auto border-4 border-white">
                    <a target="_blank" href="https://www.instagram.com/introtech.sukabumi/" class="text-5xl drop-shadow text-red-400 hover:text-red-300">
                        <span class="fa fa-instagram"></span>
                    </a>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=6285156794155&text=Selamat%20siang%2C%20saya%20menemukan%20Introtech%20sukabumi%20dari%20website" class="ml-8 drop-shadow text-5xl text-green-400 hover:text-green-300">
                       <span class="fa fa-whatsapp"></span>
                    </a>
                </div>
            </div>
         </div>
    </div>

    <div class="w-full h-96">
        <h3 class="text-center font-semibold text-2xl mt-8 drop-shadow">TENTANG KAMI</h3>
        <div class="flex pl-4 mt-4">
            <div class="w-1/3">
                <img src="{{asset('img/tentang.jpg')}}" alt="">
            </div>
            <div class="w-1/2 ml-10">
                <p class="text-xl text-justify">Introtech adalah sebuah usaha berlokasi di kota sukabumi yang bergerak di bidang jasa IT Consultant, spesialis perbaikan / servis laptop, dan menyediakan laptop bekas dengan kualitas yang sudah teruji dengan garansi yang terjamin.</p>
            </div>
        </div>
    </div>
@endsection