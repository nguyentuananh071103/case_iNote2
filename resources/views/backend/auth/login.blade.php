<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Dashboard | Sign In</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('backend/img/svg/logo.svg')}}" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{asset('backend/css/style.min.css')}}">
</head>

<body>
<div class="layer">
    <script>
        @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.success("{{ session('message') }}");
        @endif
    </script>
</div>
<main class="page-center">
    <article class="sign-up">
        <h1 class="sign-up__title">Welcome back!</h1>
        <p class="sign-up__subtitle">Sign in to your account to continue</p>
        <form class="user" method="post" action="{{route("admin.login")}}">
            @csrf
            <label class="form-label-wrapper">
                <p class="form-label">Email</p>
                <input class="form-input" type="email" name="email" placeholder="Enter your email" required>
            </label>
            <label class="form-label-wrapper">
                <p class="form-label">Password</p>
                <input class="form-input" type="password" name="password" placeholder="Enter your password" required>
            </label>
            <a class="link-info forget-link" href="register">Click here to register?</a>
            <label class="form-checkbox-wrapper">
                <input class="form-checkbox" type="checkbox" required>
                <span class="form-checkbox-label">Remember me next time</span>
            </label>
            <button class="form-btn primary-default-btn transparent-btn">Sign in</button>
        </form>
    </article>
</main>
<!-- Chart library -->
<script src="{{asset('backend/plugins/chart.min.js')}}"></script>
<!-- Icons library -->
<script src="{{asset('backend/plugins/feather.min.js')}}"></script>
<!-- Custom scripts -->
<script src="{{asset('backend/js/script.js')}}"></script>
</body>

</html>
