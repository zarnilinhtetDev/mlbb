@include('master.header')
<style>
    .content-wrapper {
        background: #bd0394;
        /* Fallback color if gradients are not supported */
        background: linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        background: -webkit-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Safari and Chrome */
        background: -moz-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Firefox */
    }

    .custom-btn {
        position: relative;
        overflow: hidden;
        border: none;
        padding: 10px;
        font-size: 15px;
        cursor: pointer;
        background: linear-gradient(45deg, #3a89eb, #bd0394);
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: bold;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        transition: box-shadow 0.3s ease;
    }

    /* Add the neon light effect on hover */
    .custom-btn:hover {
        box-shadow: 0 0 20px rgba(14, 221, 248, 0.8);
    }


    .card {
        border-radius: 32px 33px 33px 30px;
        -webkit-border-radius: 32px 33px 33px 30px;
        -moz-border-radius: 32px 33px 33px 30px;
        font-family: "Times New Roman", Times, serif;
    }

    .gaming-card {
        background-color: #FFFFFF;
        color: black;
        border: 2px solid #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .gaming-card .card-header {

        color: white;
        border-bottom: 2px solid #0056b3;
        background: #bd0394;
        /* Fallback color if gradients are not supported */
        background: linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        background: -webkit-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Safari and Chrome */
        background: -moz-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Firefox */
    }

    .gaming-card .card-body {
        padding: 0;
    }


    .animated-input {
        border: 2px solid #ccc;
        padding: 10px;
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

    .custom-logout {
        position: relative;
        overflow: hidden;
        border: none;
        padding: 10px;
        font-size: 15px;
        cursor: pointer;
        background: linear-gradient(45deg, #bd0394, #3a89eb);
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: bold;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        transition: box-shadow 0.3s ease;
    }



    /* Add the neon light effect on hover */
    .custom-logout:hover {
        box-shadow: 0 0 20px rgba(14, 221, 248, 0.8);
    }
</style>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">


                <li class="nav-item">



                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn custom-logout">Logout</button>
                    </form>
                </li>
                </li>
                </li>
            </ul>
        </nav>
        @include('master.sidebar')
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">


                            <!-- Content Header (Page header) -->
                            <section class="content-header text-white">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            {{-- <h1>User</h1> --}}
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-sm-right">
                                                {{-- <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a>
                                                </li>
                                                <li class="breadcrumb-item">User
                                                </li> --}}
                                            </ol>
                                        </div>
                                    </div>
                                </div><!-- /.container-fluid -->
                            </section>
                            <section class="content">
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}

                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('error') }}

                                    </div>
                                @endif
                                @if (session('success_import'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success_import') }}

                                    </div>
                                @endif
                                @if (session('delete_success'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('delete_success') }}

                                    </div>
                                @endif
                                <section class="content-body">
                                    <div class="row mt-6">
                                        <div class="col-md-6 mx-auto">

                                            <div class="card gaming-card p-4 mb-4">
                                                <div class="card-header mb-3">
                                                    <h3 class="card-title">Edit User</h3>
                                                </div>
                                                <form action="{{ url('update_user', $userShow->id) }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control animated-input"
                                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                                            name="name" value="{{ $userShow->name }}" required>


                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="exampleInputEmail1">Email address <span
                                                                class="text-danger">*</span></label>
                                                        <input type="email" class="form-control animated-input"
                                                            id="exampleInputEmail1" value="{{ $userShow->email }} "
                                                            aria-describedby="emailHelp" name="email" required>

                                                    </div>

                                                    <div class="form-group mt-3"><label for="userRole"> User Role <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-select form-control animated-input"
                                                            aria-label="Default select example" name="userRole"
                                                            id="userRole" required>
                                                            @if ($userShow->is_admin == 2)
                                                                {
                                                                <option selected disabled
                                                                    value="{{ $userShow->is_admin }}">Admin</option>
                                                                }
                                                            @elseif($userShow->is_admin == 1)
                                                                {
                                                                <option selected disabled
                                                                    value="{{ $userShow->is_admin }}">Reseller
                                                                </option>
                                                            }@else{
                                                                <option selected disabled
                                                                    value="{{ $userShow->is_admin }}">User</option>
                                                                }
                                                            @endif
                                                            <option value="2">Admin</option>
                                                            <option value="1">Reseller</option>
                                                            <option value="0">User</option>
                                                        </select>
                                                        @error('userRole')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group mt-3">
                                                        <label for="exampleInputPassword1">New Password<span
                                                                class="text-danger">*</span></label>
                                                        <input type="password" class="form-control animated-input"
                                                            id="exampleInputPassword1" name="new_password" required>
                                                        @error('new_password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <button type="submit" class="btn btn-primary mt-3 custom-btn"
                                                        style="background-color: #0069D9">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </section>
                        </div>
                    </div>
                    @include('master.footer')
