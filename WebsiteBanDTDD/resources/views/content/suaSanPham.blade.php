<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <title>QUẢN TRỊ HỆ THỐNG</title>
</head>
<body>
    <div class="header">
        <img src="{{asset('images/login.png')}}" alt="login" width="200px" height="200px">
    </div>
    <div class="content">
        @if(count($errors) > 0)
        <!--CHỈNH LẠI CSS THOGN BAO-->
            <div>
                @foreach ($errors->all() as $err)
                    {{$err}}<br>
                @endforeach
            </div>

        @endif
        @if (@session('thongbao'))
<!--CHỈNH LẠI CSS THOGN BAO-->
            <div >
                {{@session('thongbao')}}
            </div>
            
        @endif
        <form action="{{$sanpham->MaSANPHAM}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        
        
        <table>
            <tr>
                <td class="tieuDe">Mã sản phẩm</td>
                <td class="input1"><input type="text" name="maSP" placeholder="Mã sản phẩm"  readonly value="{{$sanpham->MaSANPHAM}}"></td>
            </tr>
             <tr>
                <td class="tieuDe">Tên sản phẩm</td>
                <td class="input1"><input type="text" name="tenSp" value="{{$sanpham->TenSANPHAM}}" ></td>
            </tr>
            <tr>
                <td class="tieuDe">Giá bán</td>
                <td class="input1"><input type="number" name="giaBan" placeholder="Giá bán" value="{{$sanpham->DONGIA}}"></td>
            </tr>
             <tr>
                <td class="tieuDe">Ngày cập nhật</td>
                @php
                    $nowDay = Date("Y-m-d h:i:s ");
                @endphp
                <td class="input1"><input type="text" name="ngayCapNhat" value="{{$sanpham->NgayCapNhat}}" readonly></td>
                
            </tr>
            <tr>
                <td class="tieuDe">Số lượng</td>`
                <td class="input1"><input type="number" name="soLuong" value="{{$sanpham->SoLuongBan}}"></td>
            </tr>
            <tr>
                <td class="tieuDe">Mô tả</td>
                <td class="input1">
                    <textarea rows="9" cols="70" name="MoTa">{{$sanpham->MoTa}}</textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td class="input1"><button type="submit" >SỬA SẢN PHẨM</button></td>
            </tr>
        </table>
        
    </form>
    </div>
</body>
</html>