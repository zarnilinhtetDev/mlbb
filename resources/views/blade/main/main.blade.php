<style>
    .custom-btn {
        width: 50%;
    }

    .PcDiamant-ul {
        list-style: none;
        padding-left: 0;
    }

    .PcDiamant-ul li {
        border: 1px solid #ddd;
        border-radius: 15px;
        margin-bottom: 10px;
        padding: 10px;
        background-color: #f8f9fa;
        /* Add background color for better visibility */
        transition: box-shadow 0.3s ease-in-out;
        /* Add transition for smooth effect */
    }

    .PcDiamant-ul {
        list-style: none;
        padding-left: 0;
    }

    .PcDiamant-ul li {
        transition: transform 0.3s ease-in-out;
        /* Add transition for smooth effect */
    }

    .PcDiamant-ul li:hover {
        transform: scale(1.1);
        background-color: greenyellow;
        /* Apply the "touch light" effect on hover */
    }


    @media only screen and (width: 320px) {

        .custom-btn {
            margin-top: 1%
        }

        .custom-col {
            /* Three columns on larger screens */
            width: 50%;
        }

        .custom-col-1 {
            min-width: 100%;
        }


    }

    @media only screen and (width: 375px) {

        .custom-btn {
            margin-top: 1%
        }

        .custom-col {
            /* Three columns on larger screens */
            width: 44%;
        }

        .custom-col-1 {
            min-width: 100%;
        }

    }


    @media only screen and (width: 425px) {

        .custom-btn {
            margin-top: 1%
        }

        .custom-col {
            /* Three columns on larger screens */
            width: 50%;
        }

        .custom-col-1 {
            min-width: 100%;
        }
    }

    @media only screen and (width: 1024px) {

        .custom-btn {
            margin-top: 1%
        }

        .custom-col {
            /* Three columns on larger screens */
            min-width: 50%;
        }

        .custom-col-1 {
            min-width: 100%;
        }
    }

    @media only screen and (width: 768px) {

        .custom-btn {
            margin-top: 1%
        }

        .custom-col {
            /* Three columns on larger screens */
            min-width: 50%;
        }

        .custom-col-1 {
            min-width: 100%;
        }
    }

    @media (min-width: 2560px) {
        .custom {
            margin-top: -10px;
            /* Adjust this value to fit your layout */
            position: relative;
            top: -5px;
            /* Adjust this value to fit your layout */
        }
    }

    /* Define the styles for the button */
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



    /* Define the styles for the input fields */
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

    .card {
        border-radius: 32px 33px 33px 30px;
        -webkit-border-radius: 32px 33px 33px 30px;
        -moz-border-radius: 32px 33px 33px 30px;



        background: #bd0394;
        /* Fallback color if gradients are not supported */
        background: linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        background: -webkit-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Safari and Chrome */
        background: -moz-linear-gradient(295deg, #bd0394 0%, #3a89eb 80%);
        /* For Firefox */
        font-family: "Times New Roman", Times, serif;
    }



    .btn-lg {
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
    .btn-lg:hover {
        box-shadow: 0 0 20px rgba(14, 221, 248, 0.8);
    }
</style>
<div class="container-fluid mt-3">
    <div class="d-flex justify-content-center">
        <form id="creditForm" action="{{ route('submit-form') }}" method="post">
            @csrf <!-- Add this line to include CSRF token in your form -->
            <div class="card" style="background-color: #162858">
                <div class="custom-font card-header text-center text-white " style="font-size: 150%">
                    Buy Credit
                </div>


                <div class="card-body my-2">
                    <h2 class="text-white">Enter Your Id</h2>
                    <div class="row">
                        <form action="">

                            <div class="col">
                                <label for="credit_amount" class="custom-font col-form-label text-white">User
                                    Id</label>
                                <input type="text" class="custom-font form-control animated-input" id="credit_amount"
                                    value="{{ old('user_id') }}" name="user_id" required />
                            </div>
                            <div class="col">
                                <label for="kyats" class="custom-font col-form-label text-white">Zone
                                    ID</label>
                                <input type="text" class="custom-font form-control animated-input" id="kyats"
                                    name="zone_id" value="{{ old('zone_id') }}" required />
                            </div>
                            <div class="col-md-5" style="margin-top: 35px;">
                                <button type="submit" class="btn btn-outline-primary custom-btn"
                                    onclick="submitForm()">
                                    Submit
                                </button>
                            </div>

                            @if (isset($response))
                                <div class="col-md-12 mt-3">
                                    <p class="text-success">User Name - {{ $response->username }} | Zone -
                                        {{ $response->zone }} | Price - {{ $response->change_price }}</p>
                                </div>
                            @else
                                {{-- <div class="col-md-12 mt-3 text-danger">
                                    <p>Response is undefined.</p>
                                </div> --}}
                            @endif
                        </form>

                        <form id="orderForm" action="{{ route('order-form') }}" method="post" class="col-md-12">
                            @csrf
                            <div class="mt-4">
                                <h2 class="text-white">Select Amount</h2>
                                <input type="text" id="selectedData" name="productName"
                                    class="form-control col-md-3 animated-input" required>
                                <input type="text" id="productid" name="productid" class="form-control" required
                                    style="display: none">
                                @if (isset($userid))
                                    <input type="text" id="userid" name="userid" class="form-control"
                                        value="{{ $userid }}" required style="display: none">
                                    <input type="text" id="zoneid" name="zoneid" class="form-control"
                                        value="{{ $zoneid }}" required style="display: none">
                                @endif

                                {{-- <div class="row mt-5">
                                    <div class="col-md-4 custom-col">
                                        <ul class="PcDiamant-ul commonDiamant-ul">
                                            <li class="fr fs" ga-data="1726" id="16642">
                                                <span ga-data="1726" style="font-size: 130%">
                                                    <em ga-data="1726">
                                                        R$ 6,40 </em>
                                                    <em ga-data="1726">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1726"> <img style="width: 20%"
                                                            src="{{ asset('frontend/photo/diamond.png') }}"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1726">

                                                    <p><strong style="color: rgb(51, 153, 153);" ga-data="1726">Passe
                                                            Semanal de
                                                            Diamante</strong>
                                                    </p>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div> --}}

                                <div class="row mt-3">
                                    <div class="col-md-4 custom-col">
                                        <ul class="PcDiamant-ul commonDiamant-ul">


                                            <li class="fr fs" ga-data="1702" id="13">
                                                <span ga-data="1702" style="font-size: 130%">
                                                    <em ga-data="1702">
                                                        R$ 5,00 </em>
                                                    <em ga-data="1702">
                                                    </em>
                                                    <em class="mx-5" ga-data="1702"> <img style="width: 20%"
                                                            src="{{ asset('frontend/photo/diamond.png') }}"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1702">
                                                    <div style="font-weight: 400;" ga-data="1702">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×78</strong><strong
                                                                style="color: rgb(255, 0, 0);">+8</strong></p>
                                                    </div>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1702"
                                                    style="display: block;"></div>
                                            </li>
                                            <li class="fr fs " ga-data="1705" id="26">
                                                <span ga-data="1703" style="font-size: 130%">
                                                    <em ga-data="1703">
                                                        R$ 10,00 </em>
                                                    <em ga-data="1703">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img style="width: 20%"
                                                            src="{{ asset('frontend/photo/diamond.png') }}"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1703">
                                                    <div style="font-weight: 400;" ga-data="1703">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×156</strong><strong
                                                                style="color: rgb(255, 0, 0);">+16</strong></p>
                                                    </div>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1703"></div>
                                            </li>
                                            <li class="fr fs" ga-data="1704" id="25">
                                                <span ga-data="1704" style="font-size: 130%">
                                                    <em ga-data="1704">
                                                        R$ 15,00 </em>
                                                    <em ga-data="1704">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img
                                                            style="width: 20%"
                                                            src="{{ asset('frontend/photo/diamond.png') }}"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1704">
                                                    <div style="font-weight: 400;" ga-data="1704">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×234</strong><strong
                                                                style="color: rgb(255, 0, 0);">+23</strong></p>
                                                    </div>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1704"
                                                    style="display: none;">
                                                </div>
                                            </li>
                                            <!-- Add more list items as needed -->
                                        </ul>
                                    </div>
                                    <div class="col-md-4 custom-col">
                                        <ul class="PcDiamant-ul commonDiamant-ul">


                                            <li class="fr fs" ga-data="1704" id="25">
                                                <span ga-data="1705" style="font-size: 130%">
                                                    <em ga-data="1705">
                                                        R$ 40,00 </em>
                                                    <em ga-data="1705">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img
                                                            style="width: 20%"
                                                            src="{{ asset('frontend/photo/diamond.png') }}"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1705">
                                                    <div style="font-weight: 400;" ga-data="1705">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×625</strong><strong
                                                                style="color: rgb(255, 0, 0);">+81</strong></p>
                                                    </div>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1705">
                                                </div>
                                            </li>
                                            <li class="fr fs" ga-data="1705" id="26">
                                                <span ga-data="1706" style="font-size: 130%">
                                                    <em ga-data="1706">
                                                        R$ 120,00 </em>
                                                    <em ga-data="1706">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img
                                                            style="width: 20%"
                                                            src="{{ asset('frontend/photo/diamond.png') }}"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1706">
                                                    <div style="font-weight: 400;" ga-data="1706">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×1860</strong><strong
                                                                style="color: rgb(255, 0, 0);">+335</strong>
                                                        </p>
                                                    </div>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1706">
                                                </div>
                                            </li>
                                            <li class="fr fs" ga-data="1705" id="26">
                                                <span ga-data="1707" style="font-size: 130%">
                                                    <em ga-data="1707">
                                                        R$ 200,00 </em>
                                                    <em ga-data="1707">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img
                                                            style="width: 20%"
                                                            src="{{ asset('frontend/photo/diamond.png') }}"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1707">
                                                    <div style="font-weight: 400;" ga-data="1707">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×3099</strong><strong
                                                                style="color: rgb(255, 0, 0);">+589</strong>
                                                        </p>
                                                    </div>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1707">
                                                </div>
                                            </li>


                                            <!-- Add more list items as needed -->
                                        </ul>
                                    </div>
                                    <div class="col-md-4 custom-col-1">
                                        <ul class="PcDiamant-ul commonDiamant-ul">
                                            <li class="fr fs" ga-data="1704" id="25">
                                                <span ga-data="1708" style="font-size: 130%">
                                                    <em ga-data="1708">
                                                        R$ 300,00 </em>
                                                    <em ga-data="1708">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img
                                                            style="width: 20%"
                                                            src="{{ asset('frontend/photo/diamond.png') }}"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1708">
                                                    <div style="font-weight: 400;" ga-data="1708">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×4649</strong><strong
                                                                style="color: rgb(255, 0, 0);">+883</strong>
                                                        </p>
                                                    </div>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1708">
                                                </div>
                                            </li>
                                            <li class="fr fs" ga-data="1705" id="26">
                                                <span ga-data="1709" style="font-size: 130%">
                                                    <em ga-data="1709">
                                                        R$ 500,00 </em>
                                                    <em ga-data="1709">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img
                                                            style="width: 20%"
                                                            src="{{ asset('frontend/photo/diamond.png') }}"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1709">
                                                    <div style="font-weight: 400;" ga-data="1709">
                                                        <p><strong
                                                                style="color: rgb(51, 153, 153);">Diamond×7740</strong><strong
                                                                style="color: rgb(255, 0, 0);">+1548</strong>
                                                        </p>
                                                    </div>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1709">
                                                </div>
                                            </li>
                                            <li class="fr fs" ga-data="1705" id="26">
                                                <span ga-data="1712" style="font-size: 130%">
                                                    <em ga-data="1712">
                                                        R$ 33,00 </em>
                                                    <em ga-data="1712">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1702"> <img
                                                            style="width: 20%"
                                                            src="{{ asset('frontend/photo/diamond.png') }}"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1712">
                                                    <div style="font-weight: 400;" ga-data="1712">
                                                        <p><strong style="color: rgb(51, 153, 153);">Passagem do
                                                                crepúsculo</strong>
                                                        </p>
                                                    </div>
                                                </span>
                                                <div class="Pcright-icon commonright-icon" ga-data="1712">
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="col-md-4 custom-col-1">
                                        <ul class="PcDiamant-ul commonDiamant-ul">
                                            <li class="fr fs li" ga-data="1726" id="16642">
                                                <span ga-data="1726" style="font-size: 130%">
                                                    <em ga-data="1726">
                                                        R$ 6,40 </em>
                                                    <em ga-data="1726">
                                                    </em>
                                                    <em class="PcliFo-em2 mx-5" ga-data="1726"> <img
                                                            style="width: 20%"
                                                            src="{{ asset('frontend/photo/diamond.png') }}"
                                                            alt="">
                                                    </em>
                                                </span>
                                                <span ga-data="1726">

                                                    <p><strong style="color: rgb(51, 153, 153);" ga-data="1726">Passe
                                                            Semanal de
                                                            Diamante</strong>
                                                    </p>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>

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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function submitForm() {
        var formData = $('#creditForm').serialize();
        $.ajax({
            type: 'POST',
            url: "{{ route('submit-form') }}", // Use the same route as in the form action
            data: formData,
            success: function(response) {
                // Display the response data where you want
                console.log(response);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    // jQuery code to handle the click event on list items
    $(document).ready(function() {

        $('.PcDiamant-ul li').click(function() {

            //alert("as" + $(this).val());

            // Get the text content of the clicked li
            var selectedText = $(this).text().trim();
            var productid = $(this).val();


            // Update the input with the selected text
            $('#selectedData').val(selectedText);
            $('#productid').val(productid);
        });
    });
</script>
