<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>M2nGameShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/sample.css" />
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/photo/m2nseven.png') }}">
</head>

<style>
    /* Define the styles for the input fields */
    .animated-input {
        border: 2px solid #ccc;

        transition: transform 0.3s ease;
    }

    /* Add the animation effect on hover */
    .animated-input:hover {
        transform: scale(1.1);
        /* Change the scale value to adjust the animation effect */
    }

    /* Define the keyframes animation */
    @keyframes inputHoverEffect {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }

        100% {
            transform: translateY(0);
        }
    }

    /* Apply the keyframes animation on hover */
    .animated-input:hover {
        animation: inputHoverEffect 0.3s ease;
    }

    .card {
        background: #13234d;
        /* Fallback color if gradients are not supported */
        background: linear-gradient(295deg, #13234d 0%, #0851aa 80%);
        background: -webkit-linear-gradient(295deg, #13234d 0%, #0851aa 80%);
        /* For Safari and Chrome */
        background: -moz-linear-gradient(295deg, #13234d 0%, #0851aa 80%);
        /* For Firefox */
    }

    .custom-btn {
        position: relative;
        overflow: hidden;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        background: linear-gradient(45deg, #162858, #0069D9);
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: bold;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        transition: box-shadow 0.1s ease;
    }

    /* Add the neon light effect on hover */
    .custom-btn:hover {
        box-shadow: 0 0 20px rgba(14, 221, 248, 0.8);
    }
</style>

<body style="background-color: #063a6e">
    <div class="container main justify-content-center mt-5">
        <div class="d-flex flex-column align-items-center">
            <div class="card" style="background-color: #162858; max-width: 400px">
                <h3 class="text-white text-center my-3">Login Form</h3>
                <img class="mt-3 mx-auto" style="width: 80%"
                    src="https://staticg.sportskeeda.com/editor/2023/07/fde0c-16888913542123-1920.jpg" alt="" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3 mt-3">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-end text-white">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email"
                                class="form-control animated-input @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email"
                                autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password"
                            class="col-md-4 col-form-label text-md-end text-white">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control animated-input @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password" placeholder="*********">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input animated-input" type="checkbox" name="remember"
                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label text-white" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md-8 offset-md-4 ">
                            <button type="submit" class="btn btn-primary custom-btn">
                                {{ __('Login') }}
                            </button>


                            <div class="mt-2 justify content-center">
                                <p class="text-white ">
                                    Create account?
                                    <a href="{{ url('register') }}" class="text-warning">Sign Up</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
