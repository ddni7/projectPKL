<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- template css --}}
    <style>
        * {
            font-family: 'Poppins', sans-serif !important;
        }

        :root {
            --btn-size: .8rem;
            --small-size: .75rem;
        }

        body {
            background-color: #e4eaeb;
        }

        .bg {
            background-color: #E4E8EB;
        }

        .login-card {
            width: calc(100% - 13rem);
        }

        .login-card h1 {
            color: #111727;
        }

        .login-card p {
            /* color: #b0b4b6; */
            color: #313131;
            font-size: var(--small-size);
        }

        .form-control:focus {
            outline: none;
            box-shadow: none;
            border: var(--bs-border-width) solid var(--bs-border-color);
        }

        .login-card label {
            font-size: var(--small-size);
        }

        form.form input {
            font-size: var(--small-size);
        }

        form.form input::placeholder {
            font-size: var(--small-size);
        }

        form.form button:nth-of-type(1) {
            color: #ffffff;
            background-color: #111727;
            font-size: var(--btn-size);
        }

        form.form button:nth-last-child(1) {
            color: #111727;
            border: 1px solid #111727;
            font-size: var(--btn-size);
        }

        form.form button:nth-last-child(2) {
            color: #111727;
            border: 1px solid #111727;
            font-size: var(--btn-size);
        }

        .checkbox label {
            font-size: var(--small-size);
        }

        .checkbox a {
            font-size: var(--small-size);
            color: #111727;
        }

        .signup {
            font-size: var(--small-size);
        }

        .signup a {
            color: #111727;
        }

        @media (max-width: 480px) {
            .login-card {
                width: calc(100% - 2rem);
            }
        }

    </style>

</head>

<body>
    <div class="container py-5 px-5 bg">
        <div class="row justify-content-between bg-white rounded-start-4">
            <div class="col-lg-7 d-flex justify-content-center align-items-center">
                <div class="login-card py-lg-0 py-5">
                    <h2 class="fw-semibold">Register</h2>
                    <p class="fw-light">This is register page ! Please create new Account</p>
                    {{-- memunculkan pesan error --}}
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <form action="{{ route('register') }}" method="post" class="form">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-12">
                                <label for="name" class="mb-1 fw-medium">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" required>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="email" class="mb-1 fw-medium">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
                            </div>
                            <div class="col-12">
                                <label for="password" class="mb-1 fw-medium">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
                            </div>
                        </div>
                        <button type="submit" class="btn mt-4 w-100">Sign in</button>
                        <button type="submit" class="btn mt-4 w-100" hidden>Sign in</button>
                        <p class="text-center signup mt-4">Already have an account? <a href="{{ route('login') }}" class="text-decoration-none fw-semibold">Login now</a></p>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 col-12 p-0">
                <img src="{{ asset('abc') }}/assets/logo-log.png" alt="" class="img-fluid w-100 h-100">
            </div>
        </div>
    </div>
</body>

{{-- import font --}}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');

</style>

{{-- teuing poho deui --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

{{-- cdn js bootsrapp --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</html>
