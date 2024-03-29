@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('api/auth/login') }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {

        $('form').on('submit', function (e) {
          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'api/auth/login',
            data: $('form').serialize(),
            dataType: 'json',
            success: function (data) {
                console.log(data);
                if (data.token) {
                    window.location.href = "/login?token="+data.token;
                } else {
                    alert(data.message);
                }
              // var message_error = $.parseJSON(data);
              // alert(message_error.message);
              // return;
            },
            error: function (data) {
                var obj = JSON.parse(data.responseText);
                var htmlresult = '<div class="form-group"><div class="col-md-8 col-md-offset-4">';
                console.log(obj.errors);
                for (i = 0; i < obj.errors.length; ++i) {
                    htmlresult += '<span class="help-block"><strong>'+obj.errors[i]+'</strong></span>'
                }
                htmlresult += '</div></div>'
                $('form').prepend(htmlresult);
            }
          });

        });

      });
</script>
@endsection
