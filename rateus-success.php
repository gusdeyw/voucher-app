<?php
include "layout/header.php";
?>
<meta name="description" content="Rate our service at Bali Coffee Club Digital for supporting us to provide better services.">
<title>Rate us! | Bali Coffee Club Digital</title>
</head>

<body>

    <!-- Here to place Content  -->
    <div class="w-screen h-screen bg-cover bg-center pt-3" style="background-image: url('public/images/background.jpg');">
        <div class="w-4/5 md:h-3/5 lg:w-2/5 mx-auto p-10 bg-white rounded-xl shadow-lg">
        <svg viewBox="0 0 24 24" class="text-green-600 w-16 h-16 mx-auto my-6">
            <path fill="currentColor"
                d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
            </path>
        </svg>
        <div class="text-center">
            <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">Thank you</h3>
            <p class="text-gray-600 my-2">Thank you for completing our guest review</p>
            <p> Have a great day!  </p>
        </div>
        </div>
    </div>


    <!-- Here is the end of the Content -->

    <!-- Place Single Javascript this page only script here-->
    <script>
        $(document).ready(function() {
            $("#1").hide();
            $("#2").hide();

            $("#select").on('change', function() {
                var rate = $("#select").val();
                if (rate == "op1") {
                    $("#1").show();
                    $("#2").hide();
                } else if (rate == "op2") {
                    $("#1").show();
                    $("#2").hide();
                } else if (rate == "op3") {
                    $("#1").hide();
                    $("#2").show();
                } else if (rate == "op4") {
                    $("#1").hide();
                    $("#2").show();
                } else if (rate == "op5") {
                    $("#1").hide();
                    $("#2").show();
                }
            });
        });
    </script>

    <?php
    include "layout/footer.php";
    ?>