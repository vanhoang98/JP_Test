@extends('frontend.master')
@section("content")
    <div class="ioe-page">
        <div class="container">
            @include('frontend.layouts.menu')

            <div class="row">
                <div class="col-12">
                    <div class="tit-page">
                        <span>Thông tin tài khoản</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ioe-page-container" style="padding:20px">
        <div class="container">  
            <div class="my-ioe">
                <div class="row align-items-stretch">
                    <div class="col-sm-3">
                        <div class="myioe-l-content">
                            <div class="myioe-user">    
                                <span class="myioe-username">{{ Auth::guard('web')->user()->name }}</span>
                                <span class="myioe-coin">ID: <span>{{ Auth::guard('web')->user()->id }}</span></span>
                                <span class="myioe-coin">Trình độ: <span>N{{ Auth::guard('web')->user()->level }}</span></span>
                                <span class="myioe-coin">Địa chỉ: <span>{{ Auth::guard('web')->user()->address }}</span></span>
                                <span class="myioe-coin">Email: <span>{{ Auth::guard('web')->user()->email }}</span></span>
                            </div>
                            
                            <ul class="myioe-leftmenu" id="accordion">
                                <li data-toggle="collapse" data-target="#myioemenu1" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                                    <div class="myioe-leftmenu-list">
                                        <span><i class="material-icons">assignment_ind</i>Tài khoản</span>
                                        <i class="material-icons ic-showless">unfold_less</i>
                                        <i class="material-icons ic-showmore">unfold_more</i>
                                    </div>

                                    <ul id="myioemenu1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <li >
                                            <a href="{{ route('results') }}"><i class="material-icons-round">arrow_right</i>Lịch sử điểm thi</a>
                                        </li>
                                        <li >
                                            <a href="{{ route('acount.get', Auth::guard('web')->user()->id) }}" class=""><i class="material-icons-round">arrow_right</i>Thông tin tài khoản</a>
                                        </li>
                                    </ul>
                                </li>
                                <li data-toggle="collapse" data-target="#myioemenu2" aria-expanded="false" aria-controls="collapseOne" class="">
                                    <div class="myioe-leftmenu-list">
                                        <span><i class="material-icons">assignment_ind</i>Học viên</span>
                                        <i class="material-icons ic-showless">unfold_less</i>
                                        <i class="material-icons ic-showmore">unfold_more</i>
                                    </div>

                                    <ul id="myioemenu2" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                        <li >
                                            <a href="{{ route('self-training') }}" class=""><i class="material-icons-round">arrow_right</i>Luyện thi</a>
                                        </li>
                                        <li >
                                            <a href="" class=""><i class="material-icons-round">arrow_right</i>Kết quả thi</a>
                                        </li>
                                        <li >
                                            <a href="{{ route('get.ranking') }}" class=""><i class="material-icons-round">arrow_right</i>Bảng xếp hạng Tổng</a>
                                        </li>
                                        <li >
                                            <a href="{{ route('lists.video') }}" class=""><i class="material-icons-round">arrow_right</i>Video chữa đề thi</a>
                                        </li>
                                        <li >
                                            <a href="{{ route('user.get_feedback') }}" class=""><i class="material-icons-round">arrow_right</i>Góp ý hệ thống</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>    
                        </div>
                    </div>
    
                    <div class="col-sm-9">
                        <div class="myioe-r-content">
                            <div class="ioe-news">
                                <div class="row">
                                    <span class="tit-24" style="margin-bottom:5px;     padding-left: 15px;">Tài khoản học viên</span>
                                    <div class="col-sm-12">
                                        <form action="{{ route('acount.update', Auth::guard('web')->user()->id) }}" method="post">
                                            @csrf
                                            <div class="myioe-r-info" style="margin-bottom:0">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="ioe-input" style="margin-bottom: 15px">
                                                            <label>Họ và tên</label>
                                                            <input required type="text" id="name" name="name" class="form-control" style="font-size: 14px;" value="{{ $acount->name }}" placeholder="Họ và tên">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="ioe-input date" style="margin-bottom: 15px" id="datetimepickerbirthday">
                                                            <label>Ngày sinh</label>
                                                            <input required type="date" id="birthday" name="birthday" class="form-control" style="font-size: 14px;" value="{{ $acount->date_of_birth }}" placeholder="dd/mm/yyyy">
                                                            <span class="input-group-addon datetimepicker-addon">
                                                                <span class="glyphicon glyphicon-th"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="dropdown" style="margin-bottom: 15px">
                                                            <label class="ioe-dropdown-lable">Giới tính</label>
                                                            <select required name="sex" id="" class="form-control" style="font-size: 14px;">
                                                                <option value="1" @if($acount->sex == 1) selected @endif>Nam</option>
                                                                <option value="0" @if($acount->sex == 0) selected @endif>Nữ</option>
                                                            </select>
                                                        </div>   
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="ioe-input">
                                                            <label>Email</label>
                                                            <input required type="email" id="Email" name="email" class="form-control" style="cursor: not-allowed; font-size: 14px;" disabled="disabled" value="{{ $acount->email }}" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="ioe-input">
                                                            <label>Trình độ</label>
                                                            <input required type="text" id="level" name="level" class="form-control" style="cursor: not-allowed; font-size: 14px;" disabled="disabled" value="N{{ $acount->level }}" placeholder="Level">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4 myioe-r-btn" style="margin:0;text-align:left">
                                                        <button class="btn-solid-blue-40 update-account">Cập nhật thông tin</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="ioe-news">
                                <div class="row">
                                    <span class="tit-24" style="margin-bottom:5px;     padding-left: 15px;">Đổi mật khẩu</span>
                                    <div class="col-sm-12">
                                        <form action="{{ route('acount.update_password', Auth::guard('web')->user()->id) }}" method="post">
                                            @csrf
                                            <div class="myioe-r-info" style="margin-bottom:0">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="ioe-input">
                                                            <label>Mật khẩu hiện tại</label>
                                                            <input min="6" type="password" id="password" class="form-control" style="font-size: 14px;" name="current_password" value="{{ old('current_password') }}" required placeholder="Mật khẩu hiện tại...">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="ioe-input date" id="datetimepickerbirthday">
                                                            <label>Mật khẩu mới</label>
                                                            <input min="6" class="form-control" style="font-size: 14px;" type="password" id="new_password" name="new_password" value="{{ old('new_password') }}" required placeholder="Mật khẩu mới...">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="dropdown">
                                                            <label class="ioe-dropdown-lable">Nhập lại mật khẩu</label>
                                                            <input min="6" type="password" id="password_confirmation" class="form-control" style="font-size: 14px;" name="password_confirmation" value="{{ old('password_confirmation') }}" required placeholder="Nhập lại mật khẩu...">
                                                        </div>   
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4 myioe-r-btn" style="margin:0;text-align:left">
                                                        <button class="btn-solid-blue-40 update-account">Đổi mật khẩu</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
