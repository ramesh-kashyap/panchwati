<div class="contentLk">


    <h2 class="titleLk">Invest</h2>
    <div class="listInvest">
        <div class="item info_plan_5">
            <form  action="#" method="post">
                {{ csrf_field() }}
                <div class="form-group field-depositform-id_plan required">
                    <input type="hidden" id="depositform-id_plan" class="form-control" name="DepositForm[id_plan]"
                        value="5" label="Start" data-percent="0.166" data-term="200" data-min="50"
                        data-max="199">

                        <input type="hidden" name="min_amount" value="50">
                        <input type="hidden" name="max_amount" value="199">
               
                </div>
                <div class="nameInvest">
                    <div class="col">
                        <span class="pr">5%</span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-calendar-12"></span>
                        <span class="txt">
                            <b>Daily </b>
                            0.166% </span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-cash-1"></span>
                        <span class="tit">Deposit amount:</span>
                        <span class="val">$50 - $199</span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-mail-advertising"></span>
                        <span class="tit">Total profit:</span>
                        <span class="val">
                            200%
                        </span>
                    </div>
                </div>
                <div class="contentInvest">
                    <div class="formVivod">
                        <div class="left">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>1</span>
                            </div>
                            <span class="name">Payment system</span>
                            <div class="line">
                                <select name="DepositForm[id_wallet]" class="selectricBl selectricPic">

                                   
                                    <option value="USDT.BEP20" data-fixed="2" data-curs="1.00065344"
                                        data-currency="USDT" data-balance="0"
                                        data-image="/assets/c20a81c4/img/ps/USDT.BEP20.svg"> Tether
                                        BEP20</option>

                                </select>
                            </div>
                            <div class="error-summary" style="display:none">
                                <p>Please fix the following errors:</p>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="right">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>2</span>
                            </div>
                            <span class="name">Amount</span>
                            <div class="line">
                                <div class="inputLine field-amount required">
                                    <input type="text" id="amount1" class="form-control" name="DepositForm[amount]"
                                        value="10"  aria-required="true"><span class="cur info_currency"></span>
                                </div>
                                <ul class="inf">

                                    <li>Min. amount: <b class="info_min"></b></li>
                                    <li>Max. amount: <b class="info_max"></b></li>
                                </ul>
                            </div>
                        </div>
                        <div class="translate">
                            <ul>
                                <li>
                                    <span class="iconBl icon-cash-1"></span>
                                    <span class="tit">Daily Profit: </span>
                                    <span class="val info_profit_1"></span>
                                </li>
                                <li>
                                    <span class="iconBl icon-cash-1"></span>
                                    <span class="tit">Total profit:</span>
                                    <span class="val info_profit_all"></span>
                                </li>
                            </ul>
                            <button type="button" class="btn btnFullBlack btn-span-1" onclick="web3Login(1)"  >Invest</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="item info_plan_6">
            <form  action="#" method="post">
                {{ csrf_field() }}
                <div class="form-group field-depositform-id_plan required">
                    <input type="hidden" id="depositform-id_plan" class="form-control" name="DepositForm[id_plan]"
                        value="6" label="Regular" data-percent="0.2" data-term="200" data-min="200" data-max="499">

                        <input type="hidden" name="min_amount" value="200">
                        <input type="hidden" name="max_amount" value="499">
               
                </div>
                <div class="nameInvest">
                    <div class="col">
                        <span class="pr">6%</span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-calendar-12"></span>
                        <span class="txt">
                            <b>Daily </b>
                            0.2% </span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-cash-1"></span>
                        <span class="tit">Deposit amount:</span>
                        <span class="val">$200 - $499</span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-mail-advertising"></span>
                        <span class="tit">Total profit:</span>
                        <span class="val">
                            200%
                        </span>
                    </div>
                </div>
                <div class="contentInvest">
                    <div class="formVivod">
                        <div class="left">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>1</span>
                            </div>
                            <span class="name">Payment system</span>
                            <div class="line">
                                <select name="DepositForm[id_wallet]" class="selectricBl selectricPic">

                                 
                                    <option value="USDT.BEP20" data-fixed="4" data-curs="1.00065344"
                                        data-currency="USDT" data-balance="0"
                                        data-image="/assets/c20a81c4/img/ps/USDT.BEP20.svg"> Tether
                                        BEP20</option>

                                </select>
                            </div>
                            <div class="error-summary" style="display:none">
                                <p>Please fix the following errors:</p>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="right">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>2</span>
                            </div>
                            <span class="name">Amount</span>
                            <div class="line">
                                <div class="inputLine field-amount required">
                                    <input type="text" id="amount2" class="form-control"
                                        name="DepositForm[amount]" value="10" aria-required="true"><span
                                        class="cur info_currency"></span>
                                </div>
                                <ul class="inf">

                                    <li>Min. amount: <b class="info_min"></b></li>
                                    <li>Max. amount: <b class="info_max"></b></li>
                                </ul>
                            </div>
                        </div>
                        <div class="translate">
                            <ul>
                                <li>
                                    <span class="iconBl icon-cash-1"></span>
                                    <span class="tit">Daily Profit: </span>
                                    <span class="val info_profit_1"></span>
                                </li>
                                <li>
                                    <span class="iconBl icon-cash-1"></span>
                                    <span class="tit">Total profit:</span>
                                    <span class="val info_profit_all"></span>
                                </li>
                            </ul>
                            <button type="button" class="btn btnFullBlack btn-span-2" onclick="web3Login(2)"  >Invest</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="item info_plan_7">
            <form  action="#" method="post">
                {{ csrf_field() }}
                <div class="form-group field-depositform-id_plan required">
                    <input type="hidden" id="depositform-id_plan" class="form-control" name="DepositForm[id_plan]"
                        value="7" label="Exclusive" data-percent="0.233" data-term="200" data-min="500"
                        data-max="1999">

                        <input type="hidden" name="min_amount" value="500">
                        <input type="hidden" name="max_amount" value="1999">

                </div>
                <div class="nameInvest">
                    <div class="col">
                        <span class="pr">7%</span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-calendar-12"></span>
                        <span class="txt">
                            <b>Daily </b>
                            0.233% </span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-cash-1"></span>
                        <span class="tit">Deposit amount:</span>
                        <span class="val">$500 - $1999</span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-mail-advertising"></span>
                        <span class="tit">Total profit:</span>
                        <span class="val">
                            200%
                        </span>
                    </div>
                </div>
                <div class="contentInvest">
                    <div class="formVivod">
                        <div class="left">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>1</span>
                            </div>
                            <span class="name">Payment system</span>
                            <div class="line">
                                <select name="DepositForm[id_wallet]" class="selectricBl selectricPic">

                               
                                    <option value="USDT.BEP20" data-fixed="4" data-curs="1.00065344"
                                        data-currency="USDT" data-balance="0"
                                        data-image="/assets/c20a81c4/img/ps/USDT.BEP20.svg"> Tether
                                        BEP20</option>

                                </select>
                            </div>
                            <div class="error-summary" style="display:none">
                                <p>Please fix the following errors:</p>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="right">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>2</span>
                            </div>
                            <span class="name">Amount</span>
                            <div class="line">
                                <div class="inputLine field-amount required">
                                    <input type="text" id="amount3" class="form-control"
                                        name="DepositForm[amount]" value="10" aria-required="true"><span
                                        class="cur info_currency"></span>
                                </div>
                                <ul class="inf">
                                    <li>Balance: <b class="info_balance"></b></li>
                                    <li>Min. amount: <b class="info_min"></b></li>
                                    <li>Max. amount: <b class="info_max"></b></li>
                                </ul>
                            </div>
                        </div>
                        <div class="translate">
                            <ul>
                                <li>
                                    <span class="iconBl icon-cash-1"></span>
                                    <span class="tit">Daily Profit: </span>
                                    <span class="val info_profit_1"></span>
                                </li>
                                <li>
                                    <span class="iconBl icon-cash-1"></span>
                                    <span class="tit">Total profit:</span>
                                    <span class="val info_profit_all"></span>
                                </li>
                            </ul>
                             <button type="button" class="btn btnFullBlack btn-span-3" onclick="web3Login(3)"  >Invest</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="item info_plan_8">
            <form action="#" method="post">
                {{ csrf_field() }}
                <div class="form-group field-depositform-id_plan required">
                    <input type="hidden" id="depositform-id_plan" class="form-control" name="DepositForm[id_plan]"
                        value="9" label="Ultimate" data-percent="0.3" data-term="200" data-min="2000"
                        data-max="3999">

                        <input type="hidden" name="min_amount" value="2000">
                        <input type="hidden" name="max_amount" value="3999">

                </div>
                <div class="nameInvest">
                    <div class="col">
                        <span class="pr">9%</span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-calendar-12"></span>
                        <span class="txt">
                            <b>Daily </b>
                            0.3% </span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-cash-1"></span>
                        <span class="tit">Deposit amount:</span>
                        <span class="val">$2000 - $3999</span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-mail-advertising"></span>
                        <span class="tit">Total profit:</span>
                        <span class="val">
                            200%
                        </span>
                    </div>
                </div>
                <div class="contentInvest">
                    <div class="formVivod">
                        <div class="left">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>1</span>
                            </div>
                            <span class="name">Payment system</span>
                            <div class="line">
                                <select name="DepositForm[id_wallet]" class="selectricBl selectricPic">
                                 
                          
                                    <option value="USDT.BEP20" data-fixed="4" data-curs="1.00065344"
                                        data-currency="USDT" data-balance="0"
                                        data-image="/assets/c20a81c4/img/ps/USDT.BEP20.svg"> Tether
                                        BEP20</option>
                                   
                                </select>
                            </div>
                            <div class="error-summary" style="display:none">
                                <p>Please fix the following errors:</p>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="right">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>2</span>
                            </div>
                            <span class="name">Amount</span>
                            <div class="line">
                                <div class="inputLine field-amount required">
                                    <input type="text" id="amount4" class="form-control"
                                        name="DepositForm[amount]" value="10" aria-required="true"><span
                                        class="cur info_currency"></span>
                                </div>
                                <ul class="inf">
                            
                                    <li>Min. amount: <b class="info_min"></b></li>
                                    <li>Max. amount: <b class="info_max"></b></li>
                                </ul>
                            </div>
                        </div>
                        <div class="translate">
                            <ul>
                                <li>
                                    <span class="iconBl icon-cash-1"></span>
                                    <span class="tit">Daily Profit: </span>
                                    <span class="val info_profit_1"></span>
                                </li>
                                <li>
                                    <span class="iconBl icon-cash-1"></span>
                                    <span class="tit">Total profit:</span>
                                    <span class="val info_profit_all"></span>
                                </li>
                            </ul>
                            <button type="button" class="btn btnFullBlack btn-span-4" onclick="web3Login(4)"  >Invest</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="item info_plan_9">
            <form id="invest-form-4" action="#" method="post">
                {{ csrf_field() }}
                <div class="form-group field-depositform-id_plan required">
                    <input type="hidden" id="depositform-id_plan" class="form-control" name="DepositForm[id_plan]"
                        value="10" label="Ultimate" data-percent="0.3" data-term="200" data-min="4000"
                        data-max="4999">

                        <input type="hidden" name="min_amount" value="4000">
                        <input type="hidden" name="max_amount" value="4999">

                </div>
                <div class="nameInvest">
                    <div class="col">
                        <span class="pr">10%</span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-calendar-12"></span>
                        <span class="txt">
                            <b>Daily </b>
                            0.333% </span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-cash-1"></span>
                        <span class="tit">Deposit amount:</span>
                        <span class="val">$4000 - $4999</span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-mail-advertising"></span>
                        <span class="tit">Total profit:</span>
                        <span class="val">
                            200%
                        </span>
                    </div>
                </div>
                <div class="contentInvest">
                    <div class="formVivod">
                        <div class="left">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>1</span>
                            </div>
                            <span class="name">Payment system</span>
                            <div class="line">
                                <select name="DepositForm[id_wallet]" class="selectricBl selectricPic">
                                 
                               
                                    <option value="USDT.BEP20" data-fixed="4" data-curs="1.00065344"
                                        data-currency="USDT" data-balance="0"
                                        data-image="/assets/c20a81c4/img/ps/USDT.BEP20.svg"> Tether
                                        BEP20</option>
                                   
                                </select>
                            </div>
                            <div class="error-summary" style="display:none">
                                <p>Please fix the following errors:</p>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="right">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>2</span>
                            </div>
                            <span class="name">Amount</span>
                            <div class="line">
                                <div class="inputLine field-amount required">
                                    <input type="text" id="amount5" class="form-control"
                                        name="DepositForm[amount]" value="10" aria-required="true"><span
                                        class="cur info_currency"></span>
                                </div>
                                <ul class="inf">
                            
                                    <li>Min. amount: <b class="info_min"></b></li>
                                    <li>Max. amount: <b class="info_max"></b></li>
                                </ul>
                            </div>
                        </div>
                        <div class="translate">
                            <ul>
                                <li>
                                    <span class="iconBl icon-cash-1"></span>
                                    <span class="tit">Daily Profit: </span>
                                    <span class="val info_profit_1"></span>
                                </li>
                                <li>
                                    <span class="iconBl icon-cash-1"></span>
                                    <span class="tit">Total profit:</span>
                                    <span class="val info_profit_all"></span>
                                </li>
                            </ul>
                           <button type="button" class="btn btnFullBlack btn-span-5" onclick="web3Login(5)"  >Invest</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div class="item info_plan_10" style="display :none">
            <form id="invest-form-4" action="{{ route('user.confirmDeposit') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group field-depositform-id_plan required">
                    <input type="hidden" id="depositform-id_plan" class="form-control" name="DepositForm[id_plan]"
                        value="11" label="Ultimate" data-percent="0.366" data-term="200" data-min="5000"
                        data-max="Unlimited">

                        <input type="hidden" name="min_amount" value="5000">
                        <input type="hidden" name="max_amount" value="1000000">


                </div>
                <div class="nameInvest">
                    <div class="col">
                        <span class="pr">11%</span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-calendar-12"></span>
                        <span class="txt">
                            <b>Daily </b>
                            0.366% </span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-cash-1"></span>
                        <span class="tit">Deposit amount:</span>
                        <span class="val">$5000 - unlimited</span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-mail-advertising"></span>
                        <span class="tit">Total profit:</span>
                        <span class="val">
                            200%
                        </span>
                    </div>
                </div>
                <div class="contentInvest">
                    <div class="formVivod">
                        <div class="left">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>1</span>
                            </div>
                            <span class="name">Payment system</span>
                            <div class="line">
                                <select name="DepositForm[id_wallet]" class="selectricBl selectricPic">
                                 
                              
                                    <option value="USDT.BEP20" data-fixed="4" data-curs="1.00065344"
                                        data-currency="USDT" data-balance="0"
                                        data-image="/assets/c20a81c4/img/ps/USDT.BEP20.svg"> Tether
                                        BEP20</option>
                                   
                                </select>
                            </div>
                            <div class="error-summary" style="display:none">
                                <p>Please fix the following errors:</p>
                                <ul></ul>
                            </div>
                        </div>
                        <div class="right">
                            <div class="numBl">
                                <span class="num"><span class="zero">0</span>2</span>
                            </div>
                            <span class="name">Amount</span>
                            <div class="line">
                                <div class="inputLine field-amount required">
                                    <input type="text" id="amount6" class="form-control"
                                        name="DepositForm[amount]" value="10" aria-required="true"><span
                                        class="cur info_currency"></span>
                                </div>
                                <ul class="inf">
                            
                                    <li>Min. amount: <b class="info_min"></b></li>
                                    <li>Max. amount: unlimited </li>
                                </ul>
                            </div>
                        </div>
                        <div class="translate">
                            <ul>
                                <li>
                                    <span class="iconBl icon-cash-1"></span>
                                    <span class="tit">Daily Profit: </span>
                                    <span class="val info_profit_1"></span>
                                </li>
                                <li>
                                    <span class="iconBl icon-cash-1"></span>
                                    <span class="tit">Total profit:</span>
                                    <span class="val info_profit_all"></span>
                                </li>
                            </ul>
                        <button type="button" class="btn btnFullBlack btn-span-6" onclick="web3Login(6)"  >Invest</button>
                        </div>
                    </div>
                </div>
            </form>
            
            <input type="hidden" id="last_package" value="{{$last_package}}">
        </div>


           <form id="active-form" action="{{ route('user.fundActivation2') }}" method="POST" class="d-none">
            {{ csrf_field() }}

            <input type="hidden" name="amount" id="deposit_amount">
            <input type="hidden" name="txHash" id="txHash">
            <input type="hidden" name="plan" id="plan">
            <input type="hidden" name="account" id="walletAccount">
        </form>
        
        
        
    </div>


</div>



    
<script src="{{ asset('') }}assets/9d244e36/yiicba3.js?v=1669716178"></script>
<script src="{{ asset('') }}assets/9d244e36/yii.activeForm.js?v=1669716178"></script>
<script>
    jQuery(function($) {
        jQuery('#invest-form-1').yiiActiveForm([{
            "id": "depositform-id_plan",
            "name": "id_plan",
            "container": ".field-depositform-id_plan",
            "input": "#depositform-id_plan",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "amount",
            "name": "amount",
            "container": ".field-amount",
            "input": "#amount",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }], []);
        jQuery('#invest-form-2').yiiActiveForm([{
            "id": "depositform-id_plan",
            "name": "id_plan",
            "container": ".field-depositform-id_plan",
            "input": "#depositform-id_plan",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "amount",
            "name": "amount",
            "container": ".field-amount",
            "input": "#amount",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }], []);
        jQuery('#invest-form-3').yiiActiveForm([{
            "id": "depositform-id_plan",
            "name": "id_plan",
            "container": ".field-depositform-id_plan",
            "input": "#depositform-id_plan",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "amount",
            "name": "amount",
            "container": ".field-amount",
            "input": "#amount",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }], []);
        jQuery('#invest-form-4').yiiActiveForm([{
            "id": "depositform-id_plan",
            "name": "id_plan",
            "container": ".field-depositform-id_plan",
            "input": "#depositform-id_plan",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }, {
            "id": "amount",
            "name": "amount",
            "container": ".field-amount",
            "input": "#amount",
            "enableAjaxValidation": true,
            "validateOnChange": false,
            "validateOnBlur": false
        }], []);

        jQuery('.listInvest .item').each(function() {
            var amount = jQuery(this).find('[name=\'DepositForm[amount]\']');
            var wallet = jQuery(this).find('[name=\'DepositForm[id_wallet]\']');
            var plan = jQuery(this).find('[name=\'DepositForm[id_plan]\']');

            // console.log(plan.data('percent'));
            var currency = wallet.find('option:selected').data('currency');
            var curs = wallet.find('option:selected').data('curs');
            var fixed = wallet.find('option:selected').data('fixed');
            var min = plan.data('min');
            var max = plan.data('max');

            var info_balance = jQuery(this).find('.info_balance');
            var info_currency = jQuery(this).find('.info_currency');
            var info_min = jQuery(this).find('.info_min');
            var info_max = jQuery(this).find('.info_max');

            var info_profit_1 = jQuery(this).find('.info_profit_1');
            var info_profit_all = jQuery(this).find('.info_profit_all');

            wallet.on('change', function() {
                currency = wallet.find('option:selected').data('currency');
                curs = wallet.find('option:selected').data('curs');
                fixed = wallet.find('option:selected').data('fixed');

                info_balance.html(wallet.find('option:selected').data('balance') + ' ' +
                    currency);
                info_currency.html(currency);

                info_min.html((min / curs).toFixed(0) + ' ' + currency);
                info_max.html((max / curs).toFixed(0) + ' ' + currency);

                amount.val((min / curs).toFixed(fixed));
                console.log(plan.data('percent'));
                info_profit_1.html((amount.val() * plan.data('percent') / 100).toFixed(fixed) +
                    ' ' + currency);
                info_profit_all.html((amount.val() * plan.data('term') /
                    100).toFixed(fixed) + ' ' + currency);
            });

            amount.on('change keyup', function() {
                info_profit_1.html((amount.val() * plan.data('percent') / 100).toFixed(fixed) +
                    ' ' + currency);
                info_profit_all.html((amount.val() * plan.data('term') /
                    100).toFixed(0) + ' ' + currency);
            });

            info_balance.html(wallet.find('option:selected').data('balance') + ' ' + currency);
            info_currency.html(currency);

            info_min.html((min / curs).toFixed(0) + ' ' + currency);
            info_max.html((max / curs).toFixed(0) + ' ' + currency);

            amount.val((min / curs).toFixed(0));

            info_profit_1.html((amount.val() * plan.data('percent') / 100).toFixed(fixed) + ' ' +
                currency);
            info_profit_all.html((amount.val() * plan.data('term') / 100)
                .toFixed(fixed) + ' ' + currency);
        });

    });
</script>


<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>-->
<script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js"></script>
<script>
    async function web3Login(plan) {
        if (!window.ethereum) {
            alert('MetaMask not detected. Please install MetaMask first.');
            return;
        }
        const provider = new ethers.providers.Web3Provider(window.ethereum);

        const token_address = "0x55d398326f99059fF775485246999027B3197955";
          let abiUSDT = [
         // transfer
             {
              "constant": false,
              "inputs": [
               {
                "name": "_to",
                "type": "address"
               },
               {
                "name": "_value",
                "type": "uint256"
               }
              ],
              "name": "transfer",
              "outputs": [
               {
                "name": "",
                "type": "bool"
               }
              ],
              "type": "function"
             }
            ];
        
        await provider.send("eth_requestAccounts", []);
        const signer = await provider.getSigner();
        const address = await provider.getSigner().getAddress();
        const  networkID = await provider.getNetwork();
        console.log(networkID.chainId);
        
    	if (networkID.chainId != 56) {
            		iziToast.error({
            			message: 'Connect to Bnb Smart Chain',
            			position: "topRight"
            		});
            
            		return false;
            	}
         const minimum_package = [0,50,200,500,2000,4000,5000];
         const maximum_package = [0,199,499,1999,3999,4999,100000];
         
         let minimum = minimum_package[plan];
         let maximum = maximum_package[plan];
         
          console.log('min'+minimum);
          console.log('max'+maximum);
         
            var last_package = $('#last_package').val();
            var input = $('#amount'+plan).val();
            
            // alert(input);
            
            if(Number(input)>=last_package)
            {
           
           if (Number(input) >= Number(minimum)   &&  Number(input) <= Number(maximum)) 
            {
        
            const BUSDContract = new ethers.Contract(token_address, abiUSDT,signer);
             var recipient = '0xF82537118a7796D14Ca9e657eAF80F7f798d4049';
             let amount = input; 
               $('.btn-span-'+plan).html('Waiting for Confirmation');
             let amountInEth = ethers.utils.parseEther(amount.toString());
            await BUSDContract.transfer(recipient, amountInEth).then(async function(tx) {
                
                console.log(tx);  
                // window.location = "success.aspx?slot=30";
                $('#deposit_amount').val(amount);
                $('#txHash').val(tx.hash);
                $('#walletAccount').val(address);
                $('#plan').val(plan);
                
    
                document.getElementById('active-form').submit();
                
            }).catch(function(error){
                window.alert("Transaction Failed");
                  $('.btn-span-'+plan).html('Invest');
                <!--location.reload();-->
            })
            
            }
            else
            {
               iziToast.error({
            			message: 'choose package minimum $ '+minimum+' and maximum is $ '+maximum+'',
            			position: "topRight"
            		});
            
            		return false;  
            }
                 
            }
            else
            {
               iziToast.error({
            			message: 'choose package equal or above your last package $ '+last_package+'',
            			position: "topRight"
            		});
            
            		return false;   
            }

       
    }
</script>
    
    
    
</body>

</html>
