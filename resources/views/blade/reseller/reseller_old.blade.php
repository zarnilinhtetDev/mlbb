@include('master.header')

<style>
    .content-wrapper {
        background: #13234d;
        /* Fallback color if gradients are not supported */
        background: linear-gradient(295deg, #13234d 0%, #0851aa 80%);
        background: -webkit-linear-gradient(295deg, #13234d 0%, #0851aa 80%);
        /* For Safari and Chrome */
        background: -moz-linear-gradient(295deg, #13234d 0%, #0851aa 80%);
        /* For Firefox */
    }

    .card {
        border-radius: 32px 33px 33px 30px;
        -webkit-border-radius: 32px 33px 33px 30px;
        -moz-border-radius: 32px 33px 33px 30px;
        font-family: "Times New Roman", Times, serif;
    }

    .custom-btn {
        position: relative;
        overflow: hidden;
        border: none;
        padding: 10px;
        font-size: 15px;
        cursor: pointer;
        background: linear-gradient(45deg, #162858, #0069D9);
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

    .custom-history {
        position: relative;
        overflow: hidden;
        border: none;
        padding: 10px;
        font-size: 15px;
        cursor: pointer;
        background: linear-gradient(45deg, #162858, #0069D9);
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        transition: box-shadow 0.1s ease;
    }

    .custom-history:hover {
        box-shadow: 0 0 20px rgba(14, 221, 248, 0.8);
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

    /* Define the keyframes for the animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Custom CSS for the gaming-themed card */
    .gaming-card {
        background-color: #151D2C;
        color: #ffffff;
        border: 2px solid #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .gaming-card .card-header {
        background: #162858;
        border-bottom: 2px solid #0056b3;
        background: linear-gradient(295deg, #13234d 0%, #0851aa 80%);
        background: -webkit-linear-gradient(295deg, #13234d 0%, #0851aa 80%);
        background: -moz-linear-gradient(295deg, #13234d 0%, #0851aa 80%);
    }

    .gaming-card .card-body {
        padding: 0;
        /* Remove default padding to make it tighter */
    }

    .gaming-textarea {
        border: 2px solid #6c757d;
        border-radius: 5px;
        padding: 10px;
    }

    .scrollable-textarea {
        color: red;
        font-size: 11px;
        font-family: 'Courier New', Courier, monospace;
        overflow-y: scroll;
        /* Add a vertical scrollbar */
    }

    @media (max-width: 425px) {
        .custom-history {
            margin-left: -30px;
            font-size: 15px;
        }
    }

    .custom-logout {
        position: relative;
        overflow: hidden;
        border: none;
        padding: 10px;
        font-size: 15px;
        cursor: pointer;
        background: linear-gradient(45deg, #162858, #fd0000);
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
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <section class="content" style="margin-top: 50px;">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8"> <!-- Adjust the column size as needed -->
                                            <div class="card gaming-card">
                                                <div class="card-header">
                                                    <h3 class="text-center">Reseller</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-3">
                                                            <div id="messageTextArea" name="message" rows="19"
                                                                cols="60"
                                                                class="form-control gaming-textarea scrollable-textarea"
                                                                style="color: red; font-size: 11px; font-family: 'Courier New', Courier, monospace; height: 400px">


                                                                <?php if (Session::has('val')) {
                                                                    // echo Session::get('val');
                                                                
                                                                    $sec_value = explode(',', Session::get('val'));
                                                                    //  echo gettype($sec_value);
                                                                    foreach ($sec_value as $dat) {
                                                                        echo $dat . '<br>';
                                                                    }
                                                                }
                                                                ?>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <form action="{{ url('reseller_store') }}" method="post">
                                                                @csrf
                                                                <input type="text" id="code" name="code"
                                                                    class="form-control animated-input"
                                                                    placeholder="Enter code">

                                                        </div>
                                                        <div class="col mb-3">
                                                            <button type="submit"
                                                                class="btn btn-primary custom-btn">Submit</button>
                                                        </div>
                                                        </form>
                                                        <div class="col" style="margin-left: 30px">
                                                            <?php
                                                            $id = 1; ?>
                                                            <a href="{{ url('resellerHistory', $id) }}"
                                                                class="btn btn-primary custom-history">
                                                                History</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>


                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @include('master.footer')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var textarea = document.getElementById("messageTextArea");
            textarea.focus();
            textarea.setSelectionRange(0, 0); // Set the selection range from start to start (i.e., the beginning)
        });
    </script>
