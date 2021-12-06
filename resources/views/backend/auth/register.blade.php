<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Dashboard | Sign Up</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('backend/img/svg/logo.svg')}}" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{asset('backend/css/style.min.css')}}">
</head>

<body>
<div class="layer"></div>
<main class="page-center">
    <article class="sign-up">
        <h1 class="sign-up__title">Get started</h1>
        <p class="sign-up__subtitle">Start creating the best possible user experience for you customers</p>
        <form class="sign-up-form form" method="post" >
            @csrf
            <label class="form-label-wrapper">
                <p class="form-label">Name</p>
                <input class="form-input" type="text" name="name" placeholder="Enter your name" required>
            </label>
            <label class="form-label-wrapper">
                <p class="form-label">Email</p>
                <input class="form-input" type="email" name="email" placeholder="Enter your email" required>
            </label>
            <label class="form-label-wrapper">
                <p class="form-label">Password</p>
                <input class="form-input" type="password" name="password" placeholder="Enter your password" required>
            </label>
            <label class="form-checkbox-wrapper">
                <input class="form-checkbox" type="checkbox" requi  red>
                <span class="form-checkbox-label">Remember me next time</span>
            </label>
            <button class="form-btn primary-default-btn transparent-btn">Sign up</button>
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
