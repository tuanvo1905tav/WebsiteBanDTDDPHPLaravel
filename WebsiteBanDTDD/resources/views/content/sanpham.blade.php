@extends('master.master')
@section('title','SẢN PHẨM')
@section('content')\
    <h1 style="text-align: center">CỬA HÀNG SMART PHONE TỐT NHẤT</h1>
    <div class="khung">
        @foreach ($sanpham as $sp)
        <div class="dong">    
                <div class="hinhAnh"><img src="images/sanpham/{{$sp->HinhMinhHoa}}" alt=""></div>
                <div class="noiDung">
                    <p><span class="tieuDe">Tên sản phẩm: </span><span id="tenSP">{{$sp->TenSANPHAM}}</span></p>
                    <p><span class="tieuDe">Giá bán: </span><span id="giaBan">{{$sp->DONGIA}} VNĐ</span></p>
                    {{-- <p><span class="tieuDe">Mô tả: </span><span id="moTa">{{$sp->MoTa}}</span></p> --}}
                    <p><div id="moTa"><b> Mô tả:</b> {{$sp->MoTa}}</div></p>
                    <p><a href="giohang/{{$sp->MaSANPHAM}}"><input type="button" value="XEM THÊM" id="btnXem"></a></p>
                </div>          
        </div>
        @endforeach
    </div>
@endsection