@extends('master')
@section('title','EDIT PASSWORD')
@section('content')

<head>
    <title>Change Password</title>
    <link href="" rel="stylesheet">
</head>

<body>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Change Password</h3>
                            </div>
                            <div class="card-body">
                                @if($errors->any())
                                {!! implode('', $errors->all('<div style="color:red">:message</div>')) !!}
                                @endif
                                @if(Session::get('error') && Session::get('error') != null)
                                <div style="color:red">{{ Session::get('error') }}</div>
                                @php
                                Session::put('error', null)
                                @endphp
                                @endif
                                @if(Session::get('success') && Session::get('success') != null)
                                <div style="color:green">{{ Session::get('success') }}</div>
                                @php
                                Session::put('success', null)
                                @endphp
                                @endif
                                <form class="form" action="{{ route('postChangePassword') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="current_password" class="form-label">Current Password</label>
                                        <input type="password" class="form-control" id="current_password" name="current_password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="new_password" name="new_password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                                        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
                                    </div>
                                    <button type="submit" class="btn btn-primary text-center">Submit</button>
                                  <a href="user/index">  <button type="cancel" class="btn btn-secondary text-center">Kembali</button></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
</body>

@endsection

           