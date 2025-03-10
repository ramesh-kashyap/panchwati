
                <div class="contentLk">


                    <h2 class="titleLk">Withdrawal of funds</h2>
                    <form  class="formVivod" action="{{ route('user.Withdraw-Request') }}" method="post">
                        {{ csrf_field() }}
                        <div class="left">
                            <div class="error-summary" style="display:none">
                                <p>Please fix the following errors:</p>
                                <ul></ul>
                            </div>
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>1</span>
                            </div>
                            <span class="name">Choose payment system</span>
                            <div class="line">
                                <select class="selectricBl selectricValue" name="paymentMode">
                                 
                                    <!--<option value="USDT.TRC20" data-html="Available" data-text="Tether TRC20"-->
                                    <!--    data-image="/assets/c20a81c4/img/ps/USDT.TRC20.svg" data-value="{{ number_format(Auth::user()->available_balance(), 2) }} USDT"-->
                                    <!--    data-min="10" data-max="10000" data-curr="USDT" data-currs="1.00065344">-->
                                    <!--    Tether TRC20 - USDT</option>-->
                                    <option value="USDT.BEP20" data-html="Available" data-text="Tether BEP20"
                                        data-image="/assets/c20a81c4/img/ps/USDT.BEP20.svg" data-value="{{ number_format(Auth::user()->available_balance(), 2) }} USDT"
                                        data-min="10" data-max="10000" data-curr="USDT" data-currs="1.00065344">
                                        Tether BEP20 - USDT</option>
                                  
                                </select>
                            </div>
                        </div>
                        <div class="right">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>2</span>
                            </div>
                            <span class="name">Enter amount</span>
                            <div class="line">
                                <div class="inputLine">
                                    <div class="form-group field-calc_amount required">
                                        <input type="number" id="calc_amount" class=""
                                            name="amount" value="10" step="any" lang="en"
                                            aria-required="true">
                                    </div> <span class="cur calc_curr">USD</span>
                                </div>
                                <ul class="inf">
                                    <li>Min. amount: 10</li>
                                    <li>Max. amount: 1000</li>
                                </ul>
                            </div>   <span class="name">Transaction Password</span>
                            <div class="line">
                                <div class="inputLine">
                                    <div class="form-group field-calc_amount required">
                                        <input type="password" class=""
                                            name="transaction_password" placeholder="Transaction Password"  step="any" lang="en"
                                            aria-required="true">
                                    </div> 
                                </div>
                                
                                 <ul class="inf">
                                    <li><a href="{{route('user.forgotPassword')}}">Forgot Transaction Password? </a></li>
                         
                                </ul>
                               
                            </div>
                        </div>
                        <div class="translate">
                            <ul>
                                <li>
                                    <span class="iconBl icon-cash-1"></span>
                                    <span class="tit">You will get:</span>
                                    <span class="val" id="info_amount"></span>
                                </li>
                            </ul>
                             @if(Auth::user()->active_status=="Active")
                                <button class="btn btnFullBlack" type="submit">Withdraw</button>
                            @else
                              <span class="btn btnFullBlack" type="submit">activate Your account to get withdrawal</span>  
                            @endif
                            
                        </div>
                    </form>

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


<script src="{{asset('')}}assets/9d244e36/yiicba3.js?v=1669716178"></script>
<script src="{{asset('')}}assets/9d244e36/yii.activeForm.js?v=1669716178"></script>
    <script>
        jQuery(function($) {
            jQuery('#withdraw-form').yiiActiveForm([{
                "id": "calc_amount",
                "name": "amount",
                "container": ".field-calc_amount",
                "input": "#calc_amount",
                "enableAjaxValidation": true,
                "validateOnChange": false,
                "validateOnBlur": false
            }], []);

            function minmax() {
                jQuery('#calc_min').html(jQuery('[name=\'WithdrawForm[id_wallet]\'] option:selected').data('min') +
                    ' ' + curr);
                jQuery('#calc_max').html(jQuery('[name=\'WithdrawForm[id_wallet]\'] option:selected').data('max') +
                    ' ' + curr);
                jQuery('.calc_curr').html(curr);

                jQuery('#calc_amount').attr('min', jQuery('[name=\'WithdrawForm[id_wallet]\'] option:selected')
                    .data('min'));
                jQuery('#calc_amount').attr('max', jQuery('[name=\'WithdrawForm[id_wallet]\'] option:selected')
                    .data('max'));
            }

            var curr = jQuery('[name=\'WithdrawForm[id_wallet]\'] option:selected').data('curr');
            jQuery(document).ready(function() {
                jQuery('[name=\'WithdrawForm[id_wallet]\']').on('change', function() {
                    curr = "USDT";

                    minmax();
                    jQuery('#info_amount').html(jQuery('#calc_amount').val()-jQuery('#calc_amount').val()*10/100 + ' USDT');
                });

                jQuery('#calc_amount').on('change keyup', function() {
                    jQuery('#info_amount').html(jQuery(this).val()-jQuery('#calc_amount').val()*10/100 + ' USDT');
                });

                minmax();
                jQuery('#info_amount').html(jQuery('#calc_amount').val()-jQuery('#calc_amount').val()*10/100 + ' USDT');
            })

        });
    </script>
</body>

</html>
