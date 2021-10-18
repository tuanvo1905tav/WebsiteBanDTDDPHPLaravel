@extends('master.master')
@section('title','GIỎ HÀNG')
@section('content')
{{-- <table>
    <thead>
        <tr>
            <th>Hình Minh Họa</th>
           <th>Tên sản phẩm</th> 
           <th>Giá sản phẩm</th> 
           <th>Mô tả</th>
        </tr>
    </thead>
        <tbody>
                <tr>
                    <td><img src="../images/sanpham/{{$sanpham->HinhMinhHoa}}" alt=""></td>
                    <td>{{$sanpham->TenSANPHAM}}</td>
                    <td>{{$sanpham->DONGIA}}</td>
                    <td>{{$sanpham->MoTa}}</td>
                </tr>
            
        </tbody>
</table> --}}
<h1 style="text-align: center">CỬA HÀNG SMART PHONE TỐT NHẤT</h1>
    <div class="khung1">
        <div class="dong1">    
                <div class="hinhAnh"><img src="../images/sanpham/{{$sanpham->HinhMinhHoa}}" alt=""></div>
                <div class="noiDung">
                    <p><span class="tieuDe">Tên sản phẩm: </span><span id="tenSP">{{$sanpham->TenSANPHAM}}</span></p>
                    <p><span class="tieuDe">Giá bán: </span><span id="giaBan">{{$sanpham->DONGIA}} VNĐ</span></p>
                    <p><div><b> Mô tả:</b> {{$sanpham->MoTa}}</div></p>
                </div>          
        </div>
    </div>
@endsection