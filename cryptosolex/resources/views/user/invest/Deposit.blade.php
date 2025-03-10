<div class="contentLk">


    <h2 class="titleLk">Top up balance</h2>
    <div class="listInvest">
        <div class="item info_plan_5">
            <form  action="{{ route('user.fundActivation') }}" method="post">
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

                                    <option value="USDT.TRC20" data-fixed="2" data-curs="1.00065344"
                                        data-currency="USDT" data-balance="0"
                                        data-image="/assets/c20a81c4/img/ps/USDT.TRC20.svg"> Tether
                                        TRC20</option>
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
                                    <input type="text" id="amount" class="form-control" name="DepositForm[amount]"
                                        value="10" aria-required="true"><span class="cur info_currency"></span>
                                </div> 
                                
                               
                                <ul class="inf">

                                    <li>Min. amount: <b class="info_min"></b></li>
                                    <li>Max. amount: <b class="info_max"></b></li>
                                </ul>
                            </div>
                            
                            <div class="line">
                                <div class="inputLine field-amount required">
                                    <input type="text" id="amount" class="form-control check_sponsor_exist"  data-response="sponsor_res" placeholder="Username" name="DepositForm[username]"
                                        value="" aria-required="true">
                                </div> 
                                  <ul class="inf">
                                      <span class="sponsor_res"></span>
                              
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
                            <button type="submit" class="btn btnFullBlack">Invest</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="item info_plan_6">
            <form  action="{{ route('user.fundActivation') }}" method="post">
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

                                    <option value="USDT.TRC20" data-fixed="4" data-curs="1.00065344"
                                        data-currency="USDT" data-balance="0"
                                        data-image="/assets/c20a81c4/img/ps/USDT.TRC20.svg"> Tether
                                        TRC20</option>
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
                                    <input type="text" id="amount" class="form-control"
                                        name="DepositForm[amount]" value="10" aria-required="true"><span
                                        class="cur info_currency"></span>
                                </div>
                                <ul class="inf">

                                    <li>Min. amount: <b class="info_min"></b></li>
                                    <li>Max. amount: <b class="info_max"></b></li>
                                </ul>
                            </div>
                                <div class="line">
                                <div class="inputLine field-amount required">
                                    <input type="text" id="amount" class="form-control check_sponsor_exist"  data-response="sponsor_res" placeholder="Username" name="DepositForm[username]"
                                        value="" aria-required="true">
                                </div> 
                                  <ul class="inf">
                                      <span class="sponsor_res"></span>
                              
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
                            <button type="submit" class="btn btnFullBlack">Invest</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="item info_plan_7">
            <form  action="{{ route('user.fundActivation') }}" method="post">
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
                        <span class="val">$500 - 1999</span>
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

                                    <option value="USDT.TRC20" data-fixed="4" data-curs="1.00065344"
                                        data-currency="USDT" data-balance="0"
                                        data-image="/assets/c20a81c4/img/ps/USDT.TRC20.svg"> Tether
                                        TRC20</option>
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
                                    <input type="text" id="amount" class="form-control"
                                        name="DepositForm[amount]" value="10" aria-required="true"><span
                                        class="cur info_currency"></span>
                                </div>
                                <ul class="inf">
                                    <li>Balance: <b class="info_balance"></b></li>
                                    <li>Min. amount: <b class="info_min"></b></li>
                                    <li>Max. amount: <b class="info_max"></b></li>
                                </ul>
                            </div>
                            
                              <div class="line">
                                <div class="inputLine field-amount required">
                                    <input type="text" id="amount" class="form-control check_sponsor_exist"  data-response="sponsor_res" placeholder="Username" name="DepositForm[username]"
                                        value="" aria-required="true">
                                </div> 
                                  <ul class="inf">
                                      <span class="sponsor_res"></span>
                              
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
                            <button type="submit" class="btn btnFullBlack">Invest</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="item info_plan_8">
            <form action="{{ route('user.fundActivation') }}" method="post">
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
                        <span class="val">2000 - 3999</span>
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
                                 
                                    <option value="USDT.TRC20" data-fixed="4" data-curs="1.00065344"
                                        data-currency="USDT" data-balance="0"
                                        data-image="/assets/c20a81c4/img/ps/USDT.TRC20.svg"> Tether
                                        TRC20</option>
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
                                    <input type="text" id="amount" class="form-control"
                                        name="DepositForm[amount]" value="10" aria-required="true"><span
                                        class="cur info_currency"></span>
                                </div>
                                <ul class="inf">
                            
                                    <li>Min. amount: <b class="info_min"></b></li>
                                    <li>Max. amount: <b class="info_max"></b></li>
                                </ul>
                            </div>
                                <div class="line">
                                <div class="inputLine field-amount required">
                                    <input type="text" id="amount" class="form-control check_sponsor_exist"  data-response="sponsor_res" placeholder="Username" name="DepositForm[username]"
                                        value="" aria-required="true">
                                </div> 
                                  <ul class="inf">
                                      <span class="sponsor_res"></span>
                              
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
                            <button type="submit" class="btn btnFullBlack">Invest</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="item info_plan_9">
            <form id="invest-form-4" action="{{ route('user.fundActivation') }}" method="post">
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
                                 
                                    <option value="USDT.TRC20" data-fixed="4" data-curs="1.00065344"
                                        data-currency="USDT" data-balance="0"
                                        data-image="/assets/c20a81c4/img/ps/USDT.TRC20.svg"> Tether
                                        TRC20</option>
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
                                    <input type="text" id="amount" class="form-control"
                                        name="DepositForm[amount]" value="10" aria-required="true"><span
                                        class="cur info_currency"></span>
                                </div>
                                <ul class="inf">
                            
                                    <li>Min. amount: <b class="info_min"></b></li>
                                    <li>Max. amount: <b class="info_max"></b></li>
                                </ul>
                            </div>
                            
                             <div class="line">
                                <div class="inputLine field-amount required">
                                    <input type="text" id="amount" class="form-control check_sponsor_exist"  data-response="sponsor_res" placeholder="Username" name="DepositForm[username]"
                                        value="" aria-required="true">
                                </div> 
                                  <ul class="inf">
                                      <span class="sponsor_res"></span>
                              
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
                            <button type="submit" class="btn btnFullBlack">Invest</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        
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
