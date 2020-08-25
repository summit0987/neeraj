<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('/dist/css/main.css')}}">
</head>
<body>
  <section>
    <div class="container-fluid log-bg">
      <div class="row h100">
        <div class="col-12">
          <div class="log-box">
            <div class="logo-holder mb-3">
              <img src="{{url('/images/logo/finla-logo-white.png')}}" class="logo img-fluid"alt="">
            </div>
            @if(count($errors) > 0)
            @foreach($errors as $error)
            {{$error}}
            @endforeach
            @endif
            <form action="{{url('login')}}" method="post">
              <div class="from-container mb-4">
                <div class="input-feilds">
                  <input name="email" type="text" placeholder="enter employee id..." required>
                  @if($errors->has('password')){{$errors->first('password')}}@endif
                </div>
              </div>
              <div class="from-container mb-4">
                <div class="input-feilds">
                  <input name="password" type="password" placeholder="Password" required>
                  @if($errors->has('password')){{$errors->first('password')}}@endif
                </div>
              </div>
              <div class="from-container mb-4">
                <div class="input-feilds">
                  <input type="checkbox" class="custom-cb" placeholder="Password" id="cb1">
                  <label class="custom-cb-label" for="cb1">Remember Me</label>
                </div>
              </div>
              <div class="from-container">
                <div class="input-feilds">
                  <button type="submit" class="btn-white ">Login</button>
                  @csrf
                </div>
              </div>
              <a class="forget-link" href="forget.html">Forget password</a>                                </a>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
