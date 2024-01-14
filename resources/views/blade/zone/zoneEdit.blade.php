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

                                <section class="content-body">
                                    <div class="row mt-6">
                                        <div class="col-md-6 mx-auto">

                                            <div class="card gaming-card p-4 mb-4">
                                                <div class="card-header mb-3">
                                                    <h3 class="card-title">Edit Zone</h3>
                                                </div>
                                                <form action="{{ url('update_zone', $showZone->id) }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="product_id">Prodcut Id <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="product_id"
                                                            aria-describedby="emailHelp" name="product_id"
                                                            value="{{ $showZone->product_id }}" required>


                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="code">Code<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="code"
                                                            value="{{ $showZone->code }} " aria-describedby="emailHelp"
                                                            name="code" required>

                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="product_name">Product Name<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="product_name"
                                                            value="{{ $showZone->product_name }} "
                                                            aria-describedby="emailHelp" name="product_name" required>

                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="indo">Indo<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="indo"
                                                            value="{{ $showZone->indo }} " aria-describedby="emailHelp"
                                                            name="indo" required>

                                                    </div>

                                                    <div class="form-group mt-3">
                                                        <label for="brazil">Brazil<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="brazil"
                                                            value="{{ $showZone->brazil }} "
                                                            aria-describedby="emailHelp" name="brazil" required>

                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <label for="indo">Global<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="global"
                                                            value="{{ $showZone->global }} "
                                                            aria-describedby="emailHelp" name="global" required>

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
