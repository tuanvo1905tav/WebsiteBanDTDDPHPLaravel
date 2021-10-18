@extends('master.master')
@section('title','TRANG CHỦ')
@section('content')
<div class="banner1">
    <div class="c1">
        <h1>WELLCOME TO APPLE</h1>
    <p>Apple is always inspired by the future, which is why it is celebrating National Tree Day with the results of its carbon-capture Biodiversity Project.</p>
    </div>        
    <div class="c2"><img src="{{asset('images/iphone12delaynov-news.png')}}" alt="" ></div>
</div>

<div class="ndChinh">
    <img src="{{asset('images/iphone12.jpg')}}" alt="">
    <h1>Introducing the Apple Research app.</h1>
    <p>Making the world a healthier place just got a lot easier. Now you can contribute to groundbreaking research studies simply by using your Apple Watch and iPhone. Your participation will enable innovative research that would have been all but impossible before. And it will help Apple to create even more empowering technologies. We invite you to join one or more studies and make your mark on human health.</p>
    <div class="sanPham" id="sanPham1">
        <div class="spLeft">
            <img src="{{asset('images/ap3.jpg')}}" alt="">
        </div>
        <div class="ndRight">
            <p>15 NOVEMBER 2020</p>
            <h2>5G goes Pro A14 Bionic rockets past every other smartphone chip.</h2>
            <a href="{{route('5g')}}"><span>READ MORE</span></a>
        </div>
    </div>
    <div class="sanPham" id="sanPham2">
        <div class="spLeft">
            <img src="{{asset('images/ap2.jpg')}}" alt="">
        </div>
        <div class="ndRight">
            <p>21 MATH 2021</p>
            <h2>Technologies other phones out of the water.</h2>
            <a href="{{route('blow')}}"><span>READ MORE</span></a>

        </div>
    </div>
    <div class="sanPham" id="sanPham3">
        <div class="spLeft">
            <img src="{{asset('images/ap1.png')}}" alt="">
        </div>
        <div class="ndRight">
            <p>26 OCTOBER 2022</p>
            <h2>Night mode comes to both the Wide and Ultra Wide cameras</h2>
            <a href="{{route('night')}}"><span>READ MORE</span></a>

        </div>
    </div>
</div>
</div>
@endsection