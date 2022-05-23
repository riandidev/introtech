@extends('layouts.app')
@section('content')
    <div class="w-full">
        <div class="mt-2 ml-2 flex">
            <div class="w-1/2 flex">
                <img src="{{asset('img/logo.jpeg')}}" width="100px" alt="">
                <h3 class="font-semibold pl-4 pt-2 text-3xl">INTROTECH</h3>
            </div>
            <div class="flex w-1/2 float-right">
                <a href="" class="float-right pt-2 text-lg shadow-sm font-semibold">HOME</a>
                <a href="" class="float-right pt-2 text-lg shadow-sm font-semibold ml-6">TENTANG KAMI</a>
                <a href="" class="float-right pt-2 text-lg shadow-sm font-semibold ml-6">JASA DAN LAYANAN</a>
                <a href="" class="float-right pt-2 text-lg shadow-sm font-semibold ml-6">PORTOFOLIO</a>
                <a href="" class="float-right pt-2 text-lg shadow-sm font-semibold ml-6">TESTIMONI</a>
                <a href="" class="float-right pt-2 text-lg shadow-sm font-semibold ml-6">KONTAK</a>
            </div>
        </div>
    </div>
@endsection