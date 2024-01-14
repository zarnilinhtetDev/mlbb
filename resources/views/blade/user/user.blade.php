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

    th {

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



    /* CSS */
    .btn-danger {
        background-color: #c2fbd7;
        border-radius: 100px;
        box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
        color: rgb(255, 0, 0);
        cursor: pointer;
        display: inline-block;
        font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif;
        padding: 7px 20px;
        text-align: center;
        text-decoration: none;
        transition: all 250ms;
        border: 0;
        font-size: 16px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .btn-danger:hover {
        box-shadow: rgba(0, 139, 53, 0.35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
        transform: scale(1.05) rotate(-1deg);
    }

    /* CSS */
    .btn-success {
        background-color: #c2fbd7;
        border-radius: 100px;
        box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
        color: rgb(40, 139, 0);
        cursor: pointer;
        display: inline-block;
        font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif;
        padding: 7px 20px;
        text-align: center;
        text-decoration: none;
        transition: all 250ms;
        border: 0;
        font-size: 16px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .btn-success:hover {
        box-shadow: rgba(0, 139, 53, 0.35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
        transform: scale(1.05) rotate(-1deg);
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
                                        <div class="my-4 ml-2"> <button type="button"
                                                class="btn btn-default text-white custom-btn" data-toggle="modal"
                                                data-target="#modal-xl" style="background-color: #007BFF">
                                                User Register
                                            </button></div>
                                        <div class="col-md-6 mx-auto">

                                            <div class="modal fade" id="modal-xl">
                                                <div class="modal-dialog modal-ml">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background-color: #0E3776">
                                                            <h4 class="modal-title text-white">User Register</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ url('/User_Register') }}" method="post">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Name <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="text"
                                                                        class="form-control animated-input"
                                                                        id="exampleInputEmail1"
                                                                        aria-describedby="emailHelp" name="name"
                                                                        required>
                                                                    @error('name')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror

                                                                </div>
                                                                <div class="form-group mt-3">
                                                                    <label for="exampleInputEmail1">Email address <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="email"
                                                                        class="form-control animated-input"
                                                                        id="exampleInputEmail1"
                                                                        aria-describedby="emailHelp" name="email"
                                                                        required>
                                                                    @error('email')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group mt-3">
                                                                    <label for="exampleInputPassword1">Password <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="password"
                                                                        class="form-control animated-input"
                                                                        id="exampleInputPassword1" name="password"
                                                                        required>
                                                                    @error('password')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group mt-3">
                                                                    <label for="userRole"> User Role <span
                                                                            class="text-danger">*</span></label>
                                                                    <select
                                                                        class="form-select form-control animated-input"
                                                                        aria-label="Default select example"
                                                                        name="userRole" id="userRole" required
                                                                        style="font-size: 13px">
                                                                        <option selected disabled>Choose User Role
                                                                        </option>
                                                                        <option value="2">Admin</option>
                                                                        <option value="1">Reseller</option>
                                                                        <option value="0">User</option>
                                                                    </select>
                                                                    @error('userRole')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button"
                                                                        class="btn btn-primary custom-btn"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary mt-3 custom-btn"
                                                                        style="background-color: #0069D9">Register</button>
                                                                </div>
                                                                {{-- <button type="submit"
                                                                    class="btn btn-primary mt-3 custom-btn"
                                                                    style="background-color: #0069D9">Register</button> --}}
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            {{-- <div class="card gaming-card p-4 mb-4">
                                                <form action="{{ url('/User_Register') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control animated-input"
                                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                                            name="name" required>
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="exampleInputEmail1">Email address <span
                                                                class="text-danger">*</span></label>
                                                        <input type="email" class="form-control animated-input"
                                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                                            name="email" required>
                                                        @error('email')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="exampleInputPassword1">Password <span
                                                                class="text-danger">*</span></label>
                                                        <input type="password" class="form-control animated-input"
                                                            id="exampleInputPassword1" name="password" required>
                                                        @error('password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="userRole"> User Role <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-select form-control animated-input"
                                                            aria-label="Default select example" name="userRole"
                                                            id="userRole" required>
                                                            <option selected disabled>Choose User Role</option>
                                                            <option value="2">Admin</option>
                                                            <option value="1">Reseller</option>
                                                            <option value="0">User</option>
                                                        </select>
                                                        @error('userRole')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-3 custom-btn"
                                                        style="background-color: #0069D9">Register</button>
                                                </form>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="card gaming-card">
                                        <div class="card-header mb-3">
                                            <h3 class="card-title">User Table</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Role</th>

                                                        <th>Create Date</th>
                                                        <th>Update Date</th>
                                                        <th>Action</th>
                                                        <th>Upload</th>
                                                        <th>Coin Balance</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = '1';
                                                    @endphp
                                                    @foreach ($showUser_data as $userData)
                                                        <tr>
                                                            <td>{{ $no }}</td>
                                                            <td>{{ $userData->name }}</td>
                                                            <td>{{ $userData->email }}</td>
                                                            <td>
                                                                @if ($userData->is_admin == 2)
                                                                    <span class="text-primary ">Admin</span>
                                                                @elseif($userData->is_admin == 1)
                                                                    <span class="text-primary ">Reseller</span>
                                                                @else
                                                                    <span class="text-primary ">User</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{ $userData->created_at->format('Y-m-d h:i A') }}
                                                                ({{ $userData->created_at->diffForHumans() }})
                                                            </td>
                                                            <td>
                                                                {{ $userData->updated_at->format('Y-m-d h:i A') }}
                                                                ({{ $userData->updated_at->diffForHumans() }})
                                                            </td>
                                                            </td>

                                                            </td>
                                                            </td>

                                                            <td>

                                                                @if ($userData->is_admin == 0)
                                                                    {{-- <form action="{{ url('change', $userData->id) }}" method="POST"> --}}
                                                                    <form
                                                                        action="{{ route('change', $userData->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $userData->id }}">
                                                                        <input type="hidden" value="3"
                                                                            name="is_admin">
                                                                        <button type="submit"
                                                                            class="btn btn-info btn-danger mb-1">Reseller</button>
                                                                    </form>
                                                                @endif
                                                                <a href="{{ url('userShow', $userData->id) }}"
                                                                    class="btn btn-success mb-1 ">
                                                                    <i class="fa-solid fa-pen-to-square"></i>

                                                                </a>

                                                                <a href="{{ url('delete_user', $userData->id) }}"
                                                                    class="btn btn-danger"
                                                                    onclick="return confirm('Are you sure you want to delete this user ?')">
                                                                    <i class="fa-solid fa-trash"></i></a>


                                                            </td>
                                                            <td>
                                                                <a href="{{ url('upload_coin', $userData->id) }}"><button
                                                                        class="btn btn-info btn-success">Upload
                                                                    </button></a>
                                                                <a href="{{ url('history', $userData->id) }}"><button
                                                                        class="btn btn-info btn-success mt-1">History
                                                                    </button></a>

                                                            </td>
                                                            <td>

                                                                {{ $userData->credit->coin_balance ?? '0' }}


                                                            </td>
                                                            <!-- Button trigger modal -->


                                                            <!-- Modal -->

                                                        </tr>
                                                        @php
                                                            $no++;
                                                        @endphp
                                                    @endforeach
                                                </tbody>




                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </section>

                            </section>
                        </div>
                    </div>
                    @include('master.footer')
