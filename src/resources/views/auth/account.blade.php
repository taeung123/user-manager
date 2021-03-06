<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/app.css')}}" />
        <script src="{{url('js/app.js')}}"></script>
        <title>Login</title>
    </head>
    <body>
        <div class="limiter">
            <div class="container-fluid">
                <div class="row">
                    <div class="container-login">
                        <div class="wrap-account">
                            <div class="login-form validate-form">
                                <span class="login-form-title mb-5">
                                    Thông tin cá nhân
                                </span>
                                <div id="user_component_form_show_info">
                                    <table width="100%">
                                        <tr>
                                            <td><div class="account-type">Họ và tên : </div></td>
                                            <td><div class="account-info ">{!! Auth::user()->first_name." ". Auth::user()->last_name !!}</div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="account-type">Ngày sinh : </div></td>
                                            <td><div class="account-info ">{!! $date_of_birth !!}</div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="account-type">Giới tính : </div></td>
                                            <td><div class="account-info ">{!! $gender !!}</div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="account-type">Email : </div></td>
                                            <td><div class="account-info ">{!! Auth::user()->email !!}</td>
                                        </tr>
                                        <tr>
                                            <td><div class="account-type">Điện thoại : </div></td>
                                            <td><div class="account-info ">{!! Auth::user()->phone_number !!}</div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="account-type">Địa chỉ : </div></td>
                                            <td><div class="account-info ">{!! Auth::user()->address !!}</div></td>
                                        </tr>
                                    </table>
                                    <div class="btn-next-comeback d-flex justify-content-center mb-2 mb-lg-0">
                                        <input type="button" id="user_component_show_edit_form" class="btn-order mr-3" value="Chỉnh sửa">
                                        <a href="{{ url('logout') }}" class="btn-next mr-md-4">Đăng xuất</a>
                                    </div>
                                </div>
                                <div id="user_component_form_edit_info">
                                    <form action="{!! route('info.edit') !!}" method="POST">
                                        @csrf
                                        <div class="mt-4">
                                            <div class="">
                                                <div class="d-flex justify-content-between">
                                                    <div class="wrap-input-form-two">
                                                        <input class="input" type="text" placeholder="Họ..." value="{!! Auth::user()->first_name !!}" name="first_name">
                                                        <span class="focus-input" ></span>
                                                    </div>
                                                    <div class="wrap-input-form-two">
                                                        <input class="input" value="{!! Auth::user()->last_name !!}" type="text" placeholder="Tên..." name="last_name">
                                                        <span class="focus-input" ></span>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="label">Giới tính :</div>
                                                    <div class="d-flex">
                                                        <div>
                                                            <div class="checkbx col-12">
                                                                <label class="cbx">
                                                                    <div>
                                                                        <div class="cbx-width d-flex justify-content-between">
                                                                            <div>Nam</div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="radio" value="1" name="gender" {!! Auth::user()->gender == '1' ? "checked" : "" !!} >
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="checkbx col-12">
                                                                <label class="cbx">
                                                                    <div>
                                                                        <div class="cbx-width d-flex justify-content-between">
                                                                            <div>Nữ</div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="radio" value="2" name="gender" {!! Auth::user()->gender == '2' ? "checked" : "" !!} >
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="checkbx col-12">
                                                                <label class="cbx">
                                                                    <div>
                                                                        <div class="cbx-width d-flex justify-content-between">
                                                                            <div>Khác</div>
                                                                        </div>
                                                                    </div>
                                                                    <input type="radio" value="3"  name="gender" {!! Auth::user()->gender == '3' ? "checked" : ""!!} >
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="label">Ngày sinh :</div>
                                                    <div class="d-flex">
                                                        <div class="date"><input class="wrap-input mb-3 input" type="number" placeholder="Day" value="{!! $date[2] !!}" min="1" max="31" name="days"></div>
                                                        <div class="date">
                                                            <select id="moth" name="moths" class="wrap-input input option">
                                                                <option {!! $date[1] == '01' ? "selected" : "" !!} value="01">Tháng 1 </option>
                                                                <option {!! $date[1] == '02' ? "selected" : "" !!}  value="02">Tháng 2 </option>
                                                                <option {!! $date[1] == '03' ? "selected" : "" !!}  value="03">Tháng 3 </option>
                                                                <option {!! $date[1] == '04' ? "selected" : "" !!}  value="04">Tháng 4 </option>
                                                                <option {!! $date[1] == '05' ? "selected" : "" !!}  value="05">Tháng 5</option>
                                                                <option {!! $date[1] == '06' ? "selected" : "" !!}  value="06">Tháng 6</option>
                                                                <option {!! $date[1] == '07' ? "selected" : "" !!}  value="07">Tháng 7</option>
                                                                <option {!! $date[1] == '08' ? "selected" : "" !!}  value="08">Tháng 8</option>
                                                                <option {!! $date[1] == '09' ? "selected" : "" !!}  value="09">Tháng 9</option>
                                                                <option {!! $date[1] == '10' ? "selected" : "" !!}  value="10">Tháng 10</option>
                                                                <option {!! $date[1] == '11' ? "selected" : "" !!}  value="11">Tháng 11</option>
                                                                <option {!! $date[1] == '12' ? "selected" : "" !!}  value="12">Tháng 12</option>
                                                            </select>
                                                        </div>
                                                        <div class="date"><input class="wrap-input mb-3 input" type="number" placeholder="Year" min="1990" max="2020" value="{!! $date[0] !!}" name="years"></div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="label">Email :</div>
                                                    <div><input type="email" placeholder="Email" class="wrap-input mb-3 input" value="{!! Auth::user()->email !!}" name="email"></div>
                                                </div>
                                                <div class="">
                                                    <div class="label">Điện thoại :</div>
                                                    <div class=""><input placeholder="Điện thoại.." type="number" class="wrap-input mb-3 input" value="{!! Auth::user()->phone_number !!}" name="phone_number"></div>
                                                </div>
                                                <div class="">
                                                    <div class="label">Địa chỉ :</div>
                                                    <div class=""><input type="text" placeholder="Địa chỉ..." class="wrap-input mb-3 input" value="{!! Auth::user()->address !!}" name="address"></div>
                                                </div>
                                                <div class="btn-next-comeback d-flex justify-content-center mb-2 mb-lg-0">
                                                    <input type="submit" class="btn-order mr-3" value="Xác nhận">
                                                    <a href="/account" class="btn-next mr-md-4">Đóng</a>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="" name="auth_id" value="{{ Auth::user()->id }}" hidden>
                                    </form>
                                </div>
                                <div class="text-center mt-3">
                                    <a class="txt2" href="/">
                                        Trang chủ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
