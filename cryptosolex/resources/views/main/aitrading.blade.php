

@include('layouts.mainsite.header')


<div class="greettingsPage">
    <div class="container">
        <div class="wrapIn">
            <h2 class="cap">Investors</h2>
            <span class="desr">Start making profits today!</span>
            <div class="clockBl">
                <span class="iconBl icon-wall-clock-11"></span>
                <span id="time"></span>
                <span id="date"></span>
            </div>
        </div>
        <div class="picture" style="background-image: url(/assets/c20a81c4/img/bginvest.png);"></div>
    </div>
</div>
<div class="investPage">
    <div class="textInvest">
        <div class="container">
            <div class="wrapIn">
                <span class="tit">{{siteName()}} is a professional online investment platform. We are here to help you to succeed and increase your net worth. We can guarantee our partners high profit returns due to the cost effective environment-friendly Arbitrage Trading and the exponential growth in demand for cryptocurrency.</span>
                <div class="textBlock">
                    <p>Our business is totally transparent. We have due expertise and obtained all the required permits and licenses to carry out production and investment activities in the United Kingdom. This allows us to extend our operations around the world.</p>
                    <p>We are offering several investment plans to fit any budget and risk tolerance level. The plans differ in ROI, minimum deposit requirements, and investment terms.</p>
                </div>
                <div class="textBlock">
                    <p>The funds raised through this platform are used to invest into new Arbitrage Trading farms development, equipment upgrades & maintenance, and new technology studies. The profits made from Arbitrage Trading operations are distributed among our investors.</p>
                    <p>Please, study the information below to get investment details and system operation guidelines. Welcome to join {{siteName()}} and start making profits with us today!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="investCalc">
        <div class="grettingsMain">
            <div class="container">
                <div class="wrapIn">
                    <div class="left">
                        <div class="titleBl"><h2 class="cap">Investment <span class="colorTxt">Plans</span></h2></div>
                        <div class="sliderPlans">
                    <div class="item">
                        <input type="radio" name="plan" id="plan1" checked data-percent="0.166" data-term="200"
                            data-min="50" data-max="199">
                        <label for="plan1">
                            <div class="prBl">
                                <div class="pr">5%</div>
                                <span class="txt">
                                    <span class="txtDay">Monthly</span>
                                    upto 200%
                                </span>
                            </div>
                            <ul>
                                <li>
                                    <span class="tit">Deposit amount:</span>
                                    <span class="val">$50-199</span>
                                </li>
                                <li>
                                    <span class="tit">Daily Profit:</span>
                                    <span class="val">0.166%</span>
                                </li>
                            </ul>
                        </label>
                    </div>
                    <div class="item">
                        <input type="radio" name="plan" id="plan2" data-percent="0.2" data-term="200"
                            data-min="200" data-max="499">
                        <label for="plan2">
                            <div class="prBl">
                                <div class="pr">6%</div>
                                <span class="txt">
                                    <span class="txtDay">Monthly</span>
                                    upto 200%
                                </span>
                            </div>
                            <ul>
                                <li>
                                    <span class="tit">Deposit amount:</span>
                                    <span class="val">$200-499</span>
                                </li>
                                <li>
                                    <span class="tit">Daily Profit:</span>
                                    <span class="val">0.2%</span>
                                </li>
                            </ul>
                        </label>
                    </div>
                    <div class="item">
                        <input type="radio" name="plan" id="plan3" data-percent="0.233" data-term="200"
                            data-min="500" data-max="999">
                        <label for="plan3">
                            <div class="prBl">
                                <div class="pr">7%</div>
                                <span class="txt">
                                    <span class="txtDay">Monthly</span>
                                    upto 200%
                                </span>
                            </div>
                            <ul>
                                <li>
                                    <span class="tit">Deposit amount:</span>
                                    <span class="val">$500-999</span>
                                </li>
                                <li>
                                    <span class="tit">Daily Profit:</span>
                                    <span class="val">0.233%</span>
                                </li>
                            </ul>
                        </label>
                    </div>
                    <div class="item">
                        <input type="radio" name="plan" id="plan4" data-percent="0.3" data-term="200"
                            data-min="1000" data-max="1999">
                        <label for="plan4">
                            <div class="prBl">
                                <div class="pr">9%</div>
                                <span class="txt">
                                    <span class="txtDay">Monthly</span>
                                    upto 200%
                                </span>
                            </div>
                            <ul>
                                <li>
                                    <span class="tit">Deposit amount:</span>
                                    <span class="val">$1000-1999</span>
                                </li>
                                <li>
                                    <span class="tit">Daily Profit:</span>
                                    <span class="val">0.3%</span>
                                </li>
                            </ul>
                        </label>
                    </div>

                    <div class="item">
                        <input type="radio" name="plan" id="plan5" data-percent="0.333" data-term="200"
                            data-min="2000" data-max="4999">
                        <label for="plan4">
                            <div class="prBl">
                                <div class="pr">10%</div>
                                <span class="txt">
                                    <span class="txtDay">Monthly</span>
                                    upto 200%
                                </span>
                            </div>
                            <ul>
                                <li>
                                    <span class="tit">Deposit amount:</span>
                                    <span class="val">$2000-4999</span>
                                </li>
                                <li>
                                    <span class="tit">Daily Profit:</span>
                                    <span class="val">0.333%</span>
                                </li>
                            </ul>
                        </label>
                    </div>

                    <!--<div class="item">-->
                    <!--    <input type="radio" name="plan" id="plan5" data-percent="0.366" data-term="200"-->
                    <!--        data-min="5000" data-max="100000">-->
                    <!--    <label for="plan4">-->
                    <!--        <div class="prBl">-->
                    <!--            <div class="pr">11%</div>-->
                    <!--            <span class="txt">-->
                    <!--                <span class="txtDay">Monthly</span>-->
                    <!--                upto 200%-->
                    <!--            </span>-->
                    <!--        </div>-->
                    <!--        <ul>-->
                    <!--            <li>-->
                    <!--                <span class="tit">Deposit amount:</span>-->
                    <!--                <span class="val">$5000-unlimited</span>-->
                    <!--            </li>-->
                    <!--            <li>-->
                    <!--                <span class="tit">Daily Profit:</span>-->
                    <!--                <span class="val">0.366%</span>-->
                    <!--            </li>-->
                    <!--        </ul>-->
                    <!--    </label>-->
                    <!--</div>-->


                </div>
                    </div>
                    <div class="right">
                        <div class="calcBl">
                            <div class="titleBl">
                                <h2 class="cap">Calculate <span class="colorTxt">your profit</span></h2>
                            </div>
                            <form action="" onsubmit="return calc();">
    <div class="form">
        <div class="inputLine">
            <label for="">Amount:</label>
            <input type="number" lang="en" step="any" name="amount" id="calc_amount" class="summ">
        </div>
        <div class="rangeBl">
            <input type="text" class="range" id="calc_range">
        </div>
        <ul class="inf">
            <li>
                <span class="iconBl icon-coins-1"></span>
                <span class="tit">Daily Profit: </span>
                <span class="val" id="info_profit_period"></span>
            </li>
            <li>
                <span class="iconBl icon-coins-1"></span>
                <span class="tit">Total Profit:</span>
                <span class="val" id="info_profit_total"></span>
            </li>
        </ul>
        <button class="btn btnWhite">Invest</button>
    </div>
    <input type="submit" id="calc_btn" style="display: none;">
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="startProfit">
        <div class="container">
            <div class="wrapIn">
                <div class="titleBl">
                    <h2 class="cap">How to start earning <span class="colorTxt">right now</span> </h2>
                </div>
                <div class="list">
                    <div class="item">
                                <span class="numer">
                                    <span class="num"><span class="zero">0</span>1</span>
                                </span>
                        <span class="name">Create an Account</span>
                        <span class="txt">Access our platform with your username and password.</span>
                    </div>
                    <div class="item">
                                <span class="numer">
                                    <span class="num"><span class="zero">0</span>2</span>
                                </span>
                        <span class="name">Select your investment plan</span>
                        <span class="txt">Invest into the best risk vs reward plan for your budget.</span>
                    </div>
                    <div class="item">
                                <span class="numer">
                                    <span class="num"><span class="zero">0</span>3</span>
                                </span>
                        <span class="name">Collect the profits</span>
                        <span class="txt">The company pays up to 3.4% interest daily.</span>
                    </div>
                    <div class="item">
                                <span class="numer">
                                    <span class="num"><span class="zero">0</span>4</span>
                                </span>
                        <span class="name">Cash out your earnings</span>
                        <span class="txt">Submit your withdrawal requests and get instant payments.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.mainsite.footer')