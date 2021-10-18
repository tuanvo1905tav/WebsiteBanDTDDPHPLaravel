@extends('master.master')
@section('title','ĐĂNG NHẬP')
@section('content')
<div class="dangNhap">
    <div class="dnLeft">
        <h1>ĐĂNG NHẬP</h1>
        <p style="text-align: justify;">Đăng nhập để theo dõi đơn hàng, lưu danh sách sản phẩm yêu thích, nhận nhiều ưu đãi hấp dẫn.</p>
        <img src="{{asset('images/login.png')}}" alt="" width="100%" style="margin-top:50px;">

    </div>
    <div class="dnRight">
        <form action="dangnhap" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <table>
            <tr>
                <td class="td1">Tên đăng nhập</td>
                <td><input type="text" name="tenDangNhap" class="the"></td>
            </tr>
            <tr>
                <td class="td1">Mật khẩu</td>
                <td><input type="password" name="password" class="the"></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="#">Quên mật khẩu?</a><a href="{{asset('dangky')}}" style="float: right;">Đăng ký tài khoản</a></td>
            </tr>
            {{-- ======================== --}}
            <tr>
                <td></td>
                <td style="text-align: center; color: red;">
                    @if(count($errors) > 0)
                        <div>
                            @foreach ($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif
                    @if (@session('thongbao'))
                        <div style="">
                            {{@session('thongbao')}}
                        </div>
                    @endif
                </td>
            </tr>
            {{-- ================================= --}}
            <tr>
                <td></td>
                <td><button type="submit" id="btnDangNhap" class="the">Đăng nhập</button></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="button" value="Đăng nhập bằng Facebook" name="btnFace" class="the" id="btnFace"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="button" value="Đăng nhập bằng Zalo" name="btnZalo" class="the" id="btnZalo"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="button" value="Đăng nhập bằng Google" name="btnGoogle" class="the" id="btnGoogle"></td>
            </tr>
        </table>
    </form>
    </div>
</div>
@endsection