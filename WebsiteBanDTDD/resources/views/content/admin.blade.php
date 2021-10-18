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
        <form action="admin" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        
        
        <table>
            <tr>
                <td class="tieuDe">Mã sản phẩm</td>
                <td class="input1"><input type="text" name="maSP" placeholder="Mã sản phẩm"></td>
            </tr>
             <tr>
                <td class="tieuDe">Tên sản phẩm</td>
                <td class="input1"><input type="text" name="tenSp" placeholder="Tên sản phẩm"></td>
            </tr>
            <tr>
                <td class="tieuDe">Giá bán</td>
                <td class="input1"><input type="number" name="giaBan" placeholder="Giá bán"></td>
            </tr>
            <tr>
                <td class="tieuDe">Phân khúc</td>
                <td class="input1">
                    <select name="phanKhuc" >
                        @foreach ($phankhuc as $tpk)
                            <option value="{{$tpk->MaPHANKHUC}}">{{$tpk->TenPHANKHUC}}</option>
                        @endforeach
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td class="tieuDe">Nhà sản xuất</td>
                <td class="input1">
                    <select name="nsx">
                        @foreach ($nhasanxuat as $nsx)
                            <option value="{{$nsx->MaNHASANXUAT}}">{{$nsx->TenNHASANXUAT}}</option>
                        @endforeach
                    </section>
                </td>
            </tr>
             <tr>
                <td class="tieuDe">Ngày cập nhật</td>
                @php
                    $nowDay = Date("Y-m-d h:i:s ");
                @endphp
                <td class="input1"><input type="text" name="ngayCapNhat" value="{{$nowDay}}" readonly></td>
                
            </tr>
            <tr>
                <td class="tieuDe">Số lượng</td>`
                <td class="input1"><input type="number" name="soLuong"></td>
            </tr>
            <tr>
                <td class="tieuDe">Mô tả</td>
                <td class="input1">
                    <textarea rows="9" cols="70" name="MoTa"></textarea>
                </td>
            </tr>
            <tr>
                <td class="tieuDe">Chọn hình ảnh</td>
                <td class="input1">
                   <input type="file" name="hinh" id="hinh">
                   
                </td>
            </tr> 
            <tr>
                <td></td>
                <td class="input1"><button type="submit" id="btnThemSP">THÊM SẢN PHẨM</button></td>
            </tr>
        </table>
        <table id="ttsp">
                <tr>
                   <th>Mã sản phẩm</th> 
                   <th>Tên sản phẩm</th> 
                   <th>Giá sản phẩm</th> 
                   <th>Mô tả</th>
                   <th>Ngày cập nhật</th> 
                   <th>Số lượng</th>
                   <th>Xóa</th> 
                   <th>Sửa</th> 
                </tr>
                        @foreach ($sanpham as $sp)
                        <tr>
                            <td>{{$sp->MaSANPHAM}}</td>
                            <td>{{$sp->TenSANPHAM}}</td>
                            <td>{{$sp->DONGIA}}</td>
                            <td>Dữ liệu được ẩn!</td>
                            <td>{{$sp->NgayCapNhat}}</td>
                            <td>{{$sp->SoLuongBan}}</td>
                            <td><a href="xoaSanPham/{{$sp->MaSANPHAM}}">Xóa</a></td>
                            <td><a href="suaSanPham/{{$sp->MaSANPHAM}}">Sửa</a></td>
                        </tr>
                        @endforeach
        </table>
        <br><br><br>
    </form>
    </div>
</body>
</html>