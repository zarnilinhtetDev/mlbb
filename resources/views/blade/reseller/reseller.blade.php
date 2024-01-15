@include('master.header')

<style>
    /* Add custom styles here */
    .chat-container {
        min-width: 1000px;
        margin: 0 auto;
        padding: 20px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    .message {
        background-color: #f2f2f2;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .message.sent {
        background-color: #d9edf7;
        text-align: right;
    }

    .chat-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    .message {
        background-color: #f2f2f2;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .message.sent {
        background-color: #d9edf7;
        text-align: right;
    }

    .chat-input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        resize: none;
        height: 100px;
    }

    .chat-input-container {
        position: relative;
        margin-top: 20px;
    }

    .chat-input-scroll {
        position: absolute;
        bottom: 10px;
        right: 10px;
        max-height: 200px;
        overflow-y: auto;
    }

    .gaming-textarea {
        border-radius: 2px;
        padding: 10px;
        overflow-y: scroll;
        border: 1px solid white;
    }

    .gaming-textarea::-webkit-scrollbar {
        width: 5px;
        /* Width of the scrollbar */
    }

    textarea::-webkit-scrollbar {
        width: 5px;

    }



    /* Ensure the textarea expands to fit its content */
    textarea {
        resize: none;
        /* Prevent resizing */
        overflow-y: scroll;
        /* Hide vertical scrollbar */
        height: auto;
        /* Set initial height to fit content */
        min-height: 50px;
        /* Set minimum height */
        max-height: 200px;
        /* Set maximum height */
    }

    /* Style the scroll button (you may need to adjust this based on your icon library or custom icons) */
    .btn-dark {
        background-color: #343a40;
        color: #fff;
        border-color: #343a40;
    }

    /* Adjust the button position to align with the textarea */
    .chat-input-scroll {
        display: flex;
        align-items: flex-end;
        margin-left: -38px;
        /* Adjust this value based on your button size */
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
                        <button type="submit" class="btn btn-primary custom-logout">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
        @include('master.sidebar')
        <div class="content-wrapper" style="background-color: #FFFFFF;  font-family: Times New Roman, Times, serif;">

            <section class="content">
                <div class="container-fluid">
                    <div class="d-flex justify-content-end align-items-center text-white"
                        style="font-family: Times New Roman, Times, serif;">
                        <span class="mt-3 text-dark">
                            <img style="width: 40px" src="{{ asset('frontend/photo/coin.jpg') }}" alt="">
                            Balance - 0.00 </span>
                        <?php
                        $id = 1; ?>
                        <a href="{{ url('resellerHistory', $id) }}" class="ml-3 mt-3">
                            <img src="{{ asset('frontend/photo/user.png') }}" alt=""
                                style="width: 40px; margin-right: 10px">
                        </a>
                    </div>

                    <div class="row">

                        <div class="col-12">

                            <section class="content">

                                <div class="container mt-5">
                                    <?php if (Session::has('error')) {
                                        // echo Session::get('val');
                                    
                                        echo Session::get('error');
                                        //  echo gettype($sec_value);
                                    }
                                    ?>
                                    <div class="">
                                        <div id="messageTextArea" name="message" rows="19" cols="60"
                                            class="form-control gaming-textarea scrollable-textarea"
                                            style="color: red; font-size: 11px; font-family: 'Courier New', Courier, monospace; height: 400px">

                                            @if (Session::has('val'))
                                                <?php
                                                $sec_value = explode(',', Session::get('val'));
                                                ?>
                                                @foreach ($sec_value as $dat)
                                                    <div>
                                                        <img src="{{ asset('frontend/photo/m2nseven.png') }}"
                                                            alt="User Image"
                                                            style="width: 30px; margin-right: 10px; vertical-align: middle">
                                                        <span>{{ $dat }}</span><br>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>


                                        <!-- Add more messages here -->
                                        <form action="{{ url('reseller_store') }}" method="post">
                                            @csrf
                                            <div class="chat-input-container mt-3 mb-5">
                                                <textarea id="chat-input" name="code" class="form-control chat-input" placeholder="Type your message..."></textarea>
                                                <div class="chat-input-scroll">
                                                    <button id="scroll-to-bottom" class="btn btn-dark btn-sm"><i
                                                            class="fa-solid fa-arrow-up"></i></button>
                                                </div>
                                            </div>
                                        </form>

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            const textarea = document.getElementById('chat-input');
            const scrollButton = document.getElementById('scroll-to-bottom');

            function adjustTextareaHeight() {
                textarea.style.height = 'auto'; /* Reset the height to auto */
                textarea.style.height = (textarea.scrollHeight + 2) + 'px'; /* Set the new height */
            }

            function scrollToBottom() {
                textarea.scrollTop = textarea.scrollHeight;
            }

            window.onload = function() {
                adjustTextareaHeight();
                scrollToBottom();
            };

            textarea.addEventListener('input', function() {
                adjustTextareaHeight();
            });

            scrollButton.addEventListener('click', function() {
                scrollToBottom();
                textarea.focus();
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var textarea = document.getElementById("messageTextArea");
            textarea.focus();
            textarea.setSelectionRange(0, 0); // Set the selection range from start to start (i.e., the beginning)
        });
    </script>
