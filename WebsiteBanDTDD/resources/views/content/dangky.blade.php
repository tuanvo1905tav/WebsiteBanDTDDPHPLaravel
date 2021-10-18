@extends('master.master')
@section('title','ĐĂNG KÝ TÀI KHOẢN')
@section('content')
<div class="taoTaiKhoan">
    <div class="dnLeft">
        <h1>TẠO TÀI KHOẢN</h1>
        <p style="text-align: justify;">Tạo tài khoản để theo dõi đơn hàng, lưu danh sách sản phẩm yêu thích, nhận nhiều ưu đãi hấp dẫn.</p>
        <img src="{{asset('images/password.png')}}" alt="" width="100%" style="margin-top:50px;">
    </div>
    <div class="dnRight">
        
        <form action="dangky" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <table>
            <tr>
                <td class="td1">Họ</td>
                <td><input type="text" name="ho" class="the" placeholder="Nhập họ tên"></td>
            </tr>
            <tr>
                <td class="td1">Tên</td>
                <td><input type="text" name="ten" class="the" placeholder="Nhập họ tên"></td>
            </tr>
            <tr>
                <td class="td1">Địa chỉ</td>
                <td><input type="text" name="diaChi" class="the" placeholder="Nhập địa chỉ"></td>
            </tr>
            <tr>
                <td class="td1">Số điện thoại</td>
                <td><input type="text" name="sdt" class="the" placeholder="Nhập số điện thoại"></td>
            </tr>
            <tr>
                <td class="td1">Ngày sinh</td>
                <td><input type="date" name="ngaySinh" class="the"></td>
            </tr>
            <tr>
                <td class="td1">Tên đăng nhập</td>
                <td><input type="text" name="tenDangNhap" class="the" placeholder="Nhập tên đăng nhập"></td>
            </tr>
            <tr>
                <td class="td1">Mật khẩu</td>
                <td><input type="password" name="password" class="the" placeholder="Nhập mật khẩu"></td>
            </tr>
            <tr>
                <td class="td1">Nhập lại mật khẩu</td>
                <td><input type="password" name="repassword" class="the" placeholder="Nhập lại mật khẩu"></td>
            </tr>
            <tr>
                <td class="td1">Giới tính</td>
                <td>
                    <select name="gioiTinh" >
                        <option>Nam</option>
                        <option>Nữ</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="td1">Email</td>
                <td><input type="text" name="email" class="the" placeholder="Nhập Email"></td>
            </tr>
            <tr>
                <td></td>
                <td style="color: red">
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
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="the" id="btnDangKy">Đăng ký</button></td>
            </tr>
        </table>
        </form>
    </div>
</div>
@endsection