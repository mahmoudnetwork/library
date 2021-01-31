<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Library System </title>

    <!-- Bootstrap -->
    <link href="{{asset('user/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('user/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('user/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('user/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('user/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="/admin" method="post">
              {{ csrf_field() }}
              <h1>Admin Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Email" name="email" required="" />
                @if (Session()->has('error_login'))
                    <p class="help-block">
                        <strong>{{ Session()->get('error_login') }}</strong>
                    </p>
                @endif
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name='password' required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Log in</button>

              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  <a href="#signup" class="to_register btn btn-success btn-lg submit">Librarain Login </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1 ><i class="fa fa-book"></i> Library System !</h1>
                  <p>©2018 All Rights Reserved.By M³</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form  method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <h1>Librarain Login</h1>
              <div>
                <input type="email" class="form-control" placeholder="Email" value="{{ old('email') }}" name="email"  required="" />
                @if ($errors->has('email'))
                    <p class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </p>
                @endif
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
                @if ($errors->has('password'))
                    <p class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </p>
                @endif
              </div>
              <div>
                <button class="btn btn-default submit">Log in</button>
                
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  <a href="#signin" class="to_register btn btn-success btn-lg submit"> Admin Login </a>
                </p>

                <div class="clearfix"></div>
                <br />
                <div>
                  <h1 ><i class="fa fa-book"></i> Library System !</h1>
                  <p>©2018 All Rights Reserved.By M³</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
