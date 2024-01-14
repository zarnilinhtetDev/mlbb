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

    .modal-header {
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
            </ul>
        </nav>
        @include('master.sidebar')
        <div class="content-wrapper">


            <!-- Main content -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            {{-- <h1>Zone</h1> --}}
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                {{-- <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Zone</li> --}}
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

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

            @if (session('delete_success'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('delete_success') }}

                </div>
            @endif
            <section class="content-body">
                <div class="my-4 ml-2"> <button type="button" class="btn btn-default text-white custom-btn"
                        data-toggle="modal" data-target="#modal-xl" style="background-color: #007BFF">
                        Zone Register
                    </button></div>
                <div class="modal fade" id="modal-xl">
                    <div class="modal-dialog modal-ml">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #0E3776">
                                <h4 class="modal-title text-white">Zone Register</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('/zone_register') }}" method="post">
                                    @csrf
                                    <div class="">
                                        <div class="col-md-10 mx-auto">
                                            <div class="form-group">
                                                <label for="product_id">Product Id <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="product_id"
                                                    aria-describedby="emailHelp" name="product_id" required>
                                                @error('product_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="code">Code <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="code"
                                                    aria-describedby="emailHelp" name="code" required>
                                                @error('code')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="exampleInputPassword1">Product Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="product_name"
                                                    name="product_name" required>
                                                @error('product_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="indo">Indo <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="indo" name="indo"
                                                    required>
                                                @error('indo')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="brazil">Brazil<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="brazil" name="brazil"
                                                    required>
                                                @error('brazil')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="global">Global <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="global"
                                                    name="global" required>
                                                @error('global')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default custom-btn"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary custom-btn mt-3 mb-3 "
                                                    style="background-color: #0069D9">Submit</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

                <div class="card gaming-card">
                    @if (session('change_success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('change_success') }}

                        </div>
                    @endif
                    <div class="card-header">
                        <h3 class="card-title">Zone Table</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body my-3">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Product Id</th>
                                    <th>Code</th>
                                    <th>Product Name</th>

                                    <th>Indo</th>
                                    <th>Brazil</th>
                                    <th>Global</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = '1';
                                @endphp
                                @foreach ($zones as $zone)
                                    <tr>
                                        <td>{{ $no }}
                                        </td>
                                        <td>{{ $zone->product_id }}</td>
                                        <td>{{ $zone->code }}</td>
                                        <td>{{ $zone->product_name }}</td>
                                        <td>{{ $zone->indo }}</td>
                                        <td>{{ $zone->brazil }}</td>
                                        <td>{{ $zone->global }}</td>
                                        <td> <a href="{{ url('/zone_edit', $zone->id) }}" class="btn btn-success">
                                                <i class="fa-solid fa-pen-to-square"></i>

                                            </a>

                                            <a href=" {{ url('/delete_zone', $zone->id) }}" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete?')">
                                                <i class="fa-solid fa-trash"></i></a>
                                        </td>
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
            {{-- <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; SSE Web Solutions</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer> --}}
        </div>
        @include('master.footer')
    </div>
