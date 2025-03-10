<div class="contentLk">


    <h2 class="titleLk">Internal Transfer</h2>
    <div class="settingsPage">
        <div class="settingsTabs">
           
            <div class="tabsBody" id="password">
                <div class="passwordSettings">
                    <form action="{{ route('user.fundtransferSubmit') }}" method="post">
                        {{ csrf_field() }}
                        <div class="error-summary" style="display:none">
                            <p>Please fix the following errors:</p>
                            <ul></ul>
                        </div>
                        <div class="inputList">
                            <div class="inputLine field-changepasswordform-password_old required">
                                <label class="control-label" for="changepasswordform-password_old">Enter Amount </label><input type="text" id="changepasswordform-password_old"
                                    class="form-control"  name="amount" placeholder="Enter Amount" autofocus
                                    aria-required="true"><span class="iconBl icon-user"></span>
                            </div>
                            <div class="inputLine field-changepasswordform-password_new required">
                                <label class="control-label" for="changepasswordform-password_new">Username</label><input type="text" id="changepasswordform-password_new"
                                    class="form-control check_sponsor_exist"   data-response="sponsor_res" name="username" placeholder="Username" autofocus
                                    aria-required="true"><span class="iconBl icon-"></span>  <span class="sponsor_res"></span>
                            </div>
                            <div class="inputLine field-changepasswordform-password_repeat required">
                                <label class="control-label" for="changepasswordform-password_repeat">Transaction
                                    Password</label><input type="password" placeholder="Transaction Password" id="changepasswordform-password_repeat"
                                    class="form-control" name="transaction_password" autofocus
                                    aria-required="true"><span class="iconBl icon-"></span>
                            </div>
                        </div>
                        <button class="btn btnBlue" type="submit">Transfer</button>
                    </form>
                </div>
            </div>
    
        </div>
    </div>
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
<script src="{{ asset('') }}assets/9d244e36/yii.activeForm.js?v=1669716178"></script>
<script>
    jQuery(function($) {
        jQuery('#settings-form').yiiActiveForm([{
            "id": "userdata-first_name",
            "name": "first_name",
            "container": ".field-userdata-first_name",
            "input": "#userdata-first_name",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "userdata-last_name",
            "name": "last_name",
            "container": ".field-userdata-last_name",
            "input": "#userdata-last_name",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "investuser-username",
            "name": "username",
            "container": ".field-investuser-username",
            "input": "#investuser-username",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "investuser-email",
            "name": "email",
            "container": ".field-investuser-email",
            "input": "#investuser-email",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "userdata-phone",
            "name": "phone",
            "container": ".field-userdata-phone",
            "input": "#userdata-phone",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "userdata-whatsapp",
            "name": "whatsapp",
            "container": ".field-userdata-whatsapp",
            "input": "#userdata-whatsapp",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "userdata-telegram",
            "name": "telegram",
            "container": ".field-userdata-telegram",
            "input": "#userdata-telegram",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "userdata-email_notify",
            "name": "email_notify",
            "container": ".field-userdata-email_notify",
            "input": "#userdata-email_notify",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }], []);
        jQuery('#password-form').yiiActiveForm([{
            "id": "changepasswordform-password_old",
            "name": "password_old",
            "container": ".field-changepasswordform-password_old",
            "input": "#changepasswordform-password_old",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "changepasswordform-password_new",
            "name": "password_new",
            "container": ".field-changepasswordform-password_new",
            "input": "#changepasswordform-password_new",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "changepasswordform-password_repeat",
            "name": "password_repeat",
            "container": ".field-changepasswordform-password_repeat",
            "input": "#changepasswordform-password_repeat",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }], []);
        jQuery('#security-form').yiiActiveForm([{
            "id": "securityform-time_zone",
            "name": "time_zone",
            "container": ".field-securityform-time_zone",
            "input": "#securityform-time_zone",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "securityform-email_notification",
            "name": "email_notification",
            "container": ".field-securityform-email_notification",
            "input": "#securityform-email_notification",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "securityform-ip_control",
            "name": "ip_control",
            "container": ".field-securityform-ip_control",
            "input": "#securityform-ip_control",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "securityform-ip_session",
            "name": "ip_session",
            "container": ".field-securityform-ip_session",
            "input": "#securityform-ip_session",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "securityform-multilogin",
            "name": "multilogin",
            "container": ".field-securityform-multilogin",
            "input": "#securityform-multilogin",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "securityform-auto_logout",
            "name": "auto_logout",
            "container": ".field-securityform-auto_logout",
            "input": "#securityform-auto_logout",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "securityform-code",
            "name": "code",
            "container": ".field-securityform-code",
            "input": "#securityform-code",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }], []);
        jQuery('#payments-form').yiiActiveForm([{
            "id": "investpaymentwallet-5-2-wallet",
            "name": "[5][2]wallet",
            "container": ".field-investpaymentwallet-5-2-wallet",
            "input": "#investpaymentwallet-5-2-wallet",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "investpaymentwallet-6-3-wallet",
            "name": "[6][3]wallet",
            "container": ".field-investpaymentwallet-6-3-wallet",
            "input": "#investpaymentwallet-6-3-wallet",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "investpaymentwallet-7-4-wallet",
            "name": "[7][4]wallet",
            "container": ".field-investpaymentwallet-7-4-wallet",
            "input": "#investpaymentwallet-7-4-wallet",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "investpaymentwallet-8-21-wallet",
            "name": "[8][21]wallet",
            "container": ".field-investpaymentwallet-8-21-wallet",
            "input": "#investpaymentwallet-8-21-wallet",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "investpaymentwallet-9-22-wallet",
            "name": "[9][22]wallet",
            "container": ".field-investpaymentwallet-9-22-wallet",
            "input": "#investpaymentwallet-9-22-wallet",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "investpaymentwallet-10-23-wallet",
            "name": "[10][23]wallet",
            "container": ".field-investpaymentwallet-10-23-wallet",
            "input": "#investpaymentwallet-10-23-wallet",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "investpaymentwallet-11-24-wallet",
            "name": "[11][24]wallet",
            "container": ".field-investpaymentwallet-11-24-wallet",
            "input": "#investpaymentwallet-11-24-wallet",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "investpaymentwallet-14-31-wallet",
            "name": "[14][31]wallet",
            "container": ".field-investpaymentwallet-14-31-wallet",
            "input": "#investpaymentwallet-14-31-wallet",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "investpaymentwallet-16-26-wallet",
            "name": "[16][26]wallet",
            "container": ".field-investpaymentwallet-16-26-wallet",
            "input": "#investpaymentwallet-16-26-wallet",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }], []);
    });
    
    
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
                        $('.' + res_area).html(response).css('color', '#000').css('font-weight', '800')
                            .css('margin-buttom', '10px');
                    } else {
                        // alert("hi");
                        $(".submit-btn").prop("disabled", true);
                        $('.' + res_area).html("User Not exists!").css('color', 'red').css(
                            'margin-buttom', '10px');
                    }
                }
            });
        });
        
</script>
</body>

</html>
