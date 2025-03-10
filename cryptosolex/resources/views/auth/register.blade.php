<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <title>{{ siteName() }} - Sign up</title>
    <link type="image/x-icon" href="{{ asset('') }}assets/c20a81c4/img/favicon.png" rel="shortcut icon">
    <link type="image/png" href="{{ asset('') }}assets/c20a81c4/img/favicon.png" rel="icon">
    <link href="{{ asset('') }}assets/c20a81c4/fonts/icomoon/style985d.css?v=1634350014" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/fonts/stylesheet11f1.css?v=1634187776" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/jquery-ui.min11f1.css?v=1634187776" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/selectric11f1.css?v=1634187776" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/jquery.mCustomScrollbar11f1.css?v=1634187776" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/ion.rangeSlider11f1.css?v=1634187776" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/ion.rangeSlider.skinSimple94b9.css?v=1700299396"
        rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/slick11f1.css?v=1634187776" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/style7d51.css?v=1700506980" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/responsived706.css?v=1701345157" rel="stylesheet">
    <link href="{{ asset('') }}assets/c20a81c4/css/alert9b0b.css?v=1627541768" rel="stylesheet">
</head>

<body>
    <script src="{{ asset('') }}assets/b808595e/jquery.mincba3.js?v=1669716178"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/jquery-3.3.1.min11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/jquery-ui.min11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/detect.min11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/clipboard.min11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/slick.min11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/jquery.selectric.min11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/jquery.mCustomScrollbar11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/ion.rangeSlider.min11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/clock2eb3.js?v=1640874314"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/modal11f1.js?v=1634187776"></script>
    <script src="{{ asset('') }}assets/c20a81c4/js/script5b51.js?v=1699953866"></script>


    <section class="wrapper">
        <div class="loginPage" style="background-image: url(/assets/c20a81c4/img/login-bg.jpeg);">
            <div class="loginForm regForm">
                <form id="signup-form" action="{{ route('registers') }}" method="post">
                    {{ csrf_field() }}
                    @php
                        $sponsor = @$_GET['ref'];
                        $pos = @$_GET['pos'];
                        $name = \App\Models\User::where('username', $sponsor)->first();
                    @endphp
                    <div class="formBl">
                        <div class="logo invisLink">
                            <a href="{{ asset('') }}"></a>
                            <img src="{{ asset('') }}assets/c20a81c4/img/logo.png" alt="">
                        </div>
                        <span class="title">Sign up</span>
                        <span class="sub-title">Create an investment account, start earning on environment-friendly
                            cryptocurrency Arbitrage Trading.</span>
                        <div class="inputList">
                            <div class="error-summary" style="display:none">
                                <p>Please fix the following errors:</p>
                                <ul></ul>
                            </div>
                            <div class="inputLine field-signupform-username required">
                                <input type="text" id="signupform-username" value="{{old('name')}}" class="form-control" name="name"
                                    autofocus placeholder="Full Name" aria-required="true">
                            </div>
                            <div class="inputLine field-signupform-email required">
                                <input type="text" id="signupform-email" value="{{old('email')}}" c class="form-control" name="email"
                                    placeholder="E-Mail" aria-required="true">
                            </div>



                            <div class="inputLine field-signupform-email required">
                                <input type="text" id="signupform-email"  value="{{old('phone')}}" class="form-control" name="phone"
                                    placeholder="Mobile No" aria-required="true">
                            </div>

                            <div class="inputLine field-signupform-email required">


                                <select name="position" class="form-control" required id="">
                                    <option value="Left">Left</option>
                                    <option value="Right">Right</option>
                                </select>
                            </div>


                            <div class="inputLine field-signupform-password required">
                                <input type="password" id="signupform-password"  value="{{old('password')}}" class="form-control" name="password"
                                    placeholder="Password" aria-required="true">
                                    
                                    <span id="strength_message"></span>
                            </div>
                            <div class="inputLine field-signupform-password_repeat required">
                                <input type="password" id="signupform-password_repeat"  value="{{old('password_confirmation')}}" class="form-control"
                                    name="password_confirmation" placeholder="Repeat password" aria-required="true">
                            </div>
                            <div class="inputLine field-signupform-referral">
                                <input type="text" id="signupform-referral" class="form-control check_sponsor_exist"
                                    name="sponsor" value="{{ $sponsor ? $sponsor : old('sponsor') }}" data-response="sponsor_res"
                                    placeholder="Your upline">
                                <span id="sponsor_res"> <?= $name ? $name->name : '' ?></span>

                            </div>

                            <div class="chekBl field-agreeReg required">
                                <input type="hidden" name="SignupForm[agreement]" value="0"><input
                                    type="checkbox" id="agreeReg" name="SignupForm[agreement]"  required
                                     aria-required="true">
                                <label class="css-label" for="agreeReg">I agree with <a href="{{route('term-candition')}}"
                                        target="_blank">rules and agreements</a>.</label>
                            </div>
                            <div class="form-group field-check2">
                                <input type="hidden" id="check2" class="form-control" name="SignupForm[check]"
                                    value="">
                            </div> <button class="btn btnBlue submit-btn" style="margin-top:40px; margin-bottom:-30px"
                                type="submit">Sign
                                up</button>
                </form>

                

            </div>
            <div class="links">
            
                <a href="{{ route('login') }}" class="link">Sign In</a>
            </div>

        </div>
        </div>
        </div>
    </section>
    @include('partials.notify')
    <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
    <script>
        $('.check_sponsor_exist').keyup(function(e) {
            var ths = $(this);
            var res_area = $(ths).attr('data-response');
            var sponsor = $(this).val();
            // alert(sponsor); 
            $.ajax({
                type: "POST",
                url: "{{ route('getUserName') }}",
                data: {
                    "user_id": sponsor,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    // alert(response);      
                    if (response != 1) {
                        // alert("hh");
                        $(".submit-btn").prop("disabled", false);
                        $('#' + res_area).html(response).css('color', '#000').css('font-weight', '800')
                            .css('margin-buttom', '10px');
                    } else {
                        // alert("hi");
                        $(".submit-btn").prop("disabled", true);
                        $('#' + res_area).html("Sponsor ID Not exists!").css('color', 'red').css(
                            'margin-buttom', '10px');
                    }
                }
            });
        });
    </script>
<script>
$(document).ready(function()
{
$('#signupform-password').keyup(function()
{
$('#strength_message').html(checkStrength($('#signupform-password').val()))
}) 
function checkStrength(password)
{
var strength = 0
if (password.length < 6) { 
$('#strength_message').removeClass()
$('#strength_message').addClass('short')
   $(".submit-btn").prop("disabled", true);
return 'Too short' 
}

if (password.length > 7) strength += 1
if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))  strength += 1
if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/))  strength += 1 
if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/))  strength += 1
if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
if (strength < 2 )
{
$('#strength_message').removeClass()
$('#strength_message').addClass('weak');
   $(".submit-btn").prop("disabled", true);
return 'Weak'   
}
else if (strength == 2 )
{
$('#strength_message').removeClass()
$('#strength_message').addClass('good')
   $(".submit-btn").prop("disabled", false);
return 'Good'  
}
else
{
$('#strength_message').removeClass()
$('#strength_message').addClass('strong')
   $(".submit-btn").prop("disabled", false);
return 'Strong'
}
}
});
</script>

    <div class="modalsScroll">
        <div class="modals table">
            <div class="middle tCell">
                <span class="closeModal">
                    <span></span>
                    <span></span>
                </span>
                <div class="blockMod" id="modal_error">
                    <div class="in">
                        <div class="modalsContent">
                            <div class="grayBl">
                                <span class="iconCircle icon-plus"></span>
                                <span class="title">Error</span>
                                <div class="modalSend">
                                    <ul class="txt" id="error-message" style="text-align: center;"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlayModal"></div>
    </div>

    <script>
        function show_error() {
            $(document).find('.error-summary ul').each(function() {
                if (!$(this).is(':empty')) {
                    error = $(this).html();
                    $(this).html('');
                    $('#error-message').html(error);
                    modalEventOpen('modal_error');
                }
            })
        }


        $(document).on("ajaxComplete", function() {
            show_error();
        });
        show_error();
    </script>


    <script src="{{ asset('') }}assets/9d244e36/yiicba3.js?v=1669716178"></script>
    <script src="{{ asset('') }}assets/9d244e36/yii.captchacba3.js?v=1669716178"></script>
    <script src="{{ asset('') }}assets/9d244e36/yii.activeFormcba3.js?v=1669716178"></script>
    <script>
        jQuery(function($) {
            jQuery('#signupform-code-image').yiiCaptcha({
                "refreshUrl": "\/site\/captcha\/?refresh=1",
                "hashKey": "yiiCaptcha\/site\/captcha"
            });
            jQuery('#signup-form').yiiActiveForm([{
                "id": "signupform-username",
                "name": "username",
                "container": ".field-signupform-username",
                "input": "#signupform-username",
                "enableAjaxValidation": true,
                "validateOnChange": false,
                "validateOnBlur": false
            }, {
                "id": "signupform-email",
                "name": "email",
                "container": ".field-signupform-email",
                "input": "#signupform-email",
                "enableAjaxValidation": true,
                "validateOnChange": false,
                "validateOnBlur": false
            }, {
                "id": "signupform-password",
                "name": "password",
                "container": ".field-signupform-password",
                "input": "#signupform-password",
                "enableAjaxValidation": true,
                "validateOnChange": false,
                "validateOnBlur": false
            }, {
                "id": "signupform-password_repeat",
                "name": "password_repeat",
                "container": ".field-signupform-password_repeat",
                "input": "#signupform-password_repeat",
                "enableAjaxValidation": true,
                "validateOnChange": false,
                "validateOnBlur": false
            }, {
                "id": "signupform-referral",
                "name": "referral",
                "container": ".field-signupform-referral",
                "input": "#signupform-referral",
                "enableAjaxValidation": true,
                "validateOnChange": false,
                "validateOnBlur": false
            }, {
                "id": "signupform-code",
                "name": "code",
                "container": ".field-signupform-code",
                "input": "#signupform-code",
                "enableAjaxValidation": true,
                "validateOnChange": false,
                "validateOnBlur": false
            }, {
                "id": "agreeReg",
                "name": "agreement",
                "container": ".field-agreeReg",
                "input": "#agreeReg",
                "enableAjaxValidation": true,
                "validateOnChange": false,
                "validateOnBlur": false
            }], []);
        });
    </script>
</body>

</html>
