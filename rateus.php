<?php
include "layout/header.php";
?>
<meta name="description" content="Rate our service at Bali Coffee Club Digital for supporting us to provide better services.">
<title>Rate us! | Bali Coffee Club Digital</title>
</head>

<body>

    <!-- Here to place Content  -->
    <div class="w-screen bg-cover bg-center" style="background-image: url('public/images/background.jpg');">
        <div class="w-2/5 mx-auto p-10 bg-white rounded-xl shadow-lg">
            <div class="grid  gap-8 grid-cols-1">
                <div class="flex flex-col ">
                    <div class="flex flex-col sm:flex-row items-center">
                        <h2 class="font-semibold text-lg mr-auto">Give us a quick review</h2>
                        <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                    </div>
                    <div class="mt-5">
                        <div class="form">
                            <div class="md:space-y-2 mb-3">
                                <img src="public/images/logo-vertical.png" class="w-2/4" alt="">
                            </div>
                            <div class="mb-3 space-y-2 w-full text-xs">
                                <label class=" font-semibold text-gray-600 py-2">How do you think about our services<abbr title="required">*</label>
                                <div class="flex flex-wrap items-stretch w-full mb-4 relative">
                                    <select type="text" class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border h-10 border-grey-light rounded-lg px-3 relative focus:border-blue focus:shadow" placeholder="https://">
                                        <option value="">Our service quality</option>
                                        <option value="">Very Good</option>
                                        <option value="">Good</option>
                                        <option value="">Okay</option>
                                        <option value="">Bad</option>
                                        <option value="">Very Bad</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex-auto w-full mb-1 text-xs space-y-2" id="1">
                                <label class="font-semibold text-gray-600 py-2">Would you like to rate us on TripAdvisor or Google?<abbr title="required">*</label>
                                <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                    <button class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"><i class="fab fa-google"></i> Google </button>
                                    <button class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500"> <i class="fas fa-plane-departure"></i> TripAdvisor </button>
                                </div>
                            </div>
                            <div id="2">
                                <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                    <label class="font-semibold text-gray-600 py-2">Please describe our services<abbr title="required">*</label>
                                    <textarea required="" name="message" id="" class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" placeholder="Describe your opinion" spellcheck="false"></textarea>
                                </div>
                                <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                    <div class="w-full flex flex-col mb-3">
                                        <label class="font-semibold text-gray-600 py-2">First Name<abbr title="required">*</label>
                                        <input placeholder="First Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" type="text" name="integration[street_address]" id="integration_street_address">
                                    </div>
                                    <div class="w-full flex flex-col mb-3">
                                        <label class="font-semibold text-gray-600 py-2">Last Name<abbr title="required">*</label>
                                        <input placeholder="Last Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" type="text" name="integration[street_address]" id="integration_street_address">
                                    </div>
                                </div>
                                <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                    <div class="mb-3 space-y-2 w-full text-xs">
                                        <label class="font-semibold text-gray-600 py-2">Phone <abbr title="required">*</abbr></label>
                                        <input placeholder="Phone" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                        <p class="text-red text-xs hidden">Please fill out this field.</p>
                                    </div>
                                    <div class="mb-3 space-y-2 w-full text-xs">
                                        <label class="font-semibold text-gray-600 py-2">Email <abbr title="required">*</abbr></label>
                                        <input placeholder="Email ID" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                        <p class="text-red text-xs hidden">Please fill out this field.</p>
                                    </div>
                                </div>

                                <p class="text-xs text-red-500 text-right my-3">Required fields are marked with an
                                    asterisk <abbr title="Required field">*</abbr></p>
                                <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                    <button class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"> Cancel </button>
                                    <button class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Here is the end of the Content -->

    <!-- Place Single Javascript this page only script here-->


    <?php
    include "layout/footer.php";
    ?>