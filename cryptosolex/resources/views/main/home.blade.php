@include('layouts.mainsite.header')
<div class="grettingsMain">
    <div class="container">
        <div class="wrapIn">
            <div class="left">
                <div class="clockBl">
                    <span class="iconBl icon-wall-clock-11"></span>
                    <span id="time"></span>
                    <span id="date"></span>
                </div>
                <div class="gretting">
                    <h1 class="cap"><strong>Advanced </strong> <br>Arbitrage Trading</h1>
                    <span class="desr">Maximize Your Profits - More gains in USDT</span>
                    <p>With a sophisticated arbitrage trading system to analize the crypto market and benefit from the differences in rates.!</p>
                    <p style="color: #0b274a;font-size: 16px;font-weight: bold;"><img
                            src="{{ asset('') }}assets/c20a81c4/img/pdf-file.svg" alt=""
                            style="width:24px; position:relative; top:5px; margin-right:5px">PDF Presentation: <a
                            href="{{asset('')}}SIPGrp.pdf" target="_blank" style="color: #007ce3;font-weight: 700;" download>Download</a>
                    </p>
                    <div class="btnLine">
                        <a href="{{ route('login') }}" class="btn btnBlue">Invest</a>
                        <a href="{{ route('register') }}" class="btn btnBlack">Create Account</a>
                    </div>
                </div>
                <!--<ul class="inf">-->
                    <!--<li>-->
                    <!--    <span class="iconBl icon-calendar-10"></span>-->
                    <!--    <span class="tit">Days online </span>-->
                    <!--    <span class="num">15</span>-->
                    <!--</li>-->
                <!--    <li>-->
                <!--        <span class="iconBl icon-income"></span>-->
                <!--        <span class="tit">Investments</span>-->
                <!--        <span class="num">$337910.81</span>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--        <span class="iconBl icon-team-2"></span>-->
                <!--        <span class="tit">Membership</span>-->
                <!--        <span class="num">4267</span>-->
                <!--    </li>-->
                <!--    <li>-->
                <!--        <span class="iconBl icon-income2"></span>-->
                <!--        <span class="tit">Payouts</span>-->
                <!--        <span class="num">$58823.47</span>-->
                <!--    </li>-->
                <!--</ul>-->
            </div>
            <div class="right">
                <div class="miningBl">
                    <div class="item">
                        <span class="num">1</span>
                        <span class="iconBl icon-solar-energy"></span>
                        <span class="name">Arbitrage  <strong>Trading</strong></span>
                    </div>
                    <div class="item">
                        <span class="num">2</span>
                        <span class="iconBl iconWind"></span>
                        <span class="name">Maximize  <strong>Your Profit</strong></span>
                    </div>
                </div>
                <div class="currentVal">
                    <span class="tit">Cryptocurrency <br> rates</span>
                    {{-- <span class="date"> 01.12.2023</span> --}}


                </div>
            </div>
        </div>
        <div class="wrapIn">
            <div class="left">
                <div class="titleBl">
                    <h2 class="cap">Investment <span class="colorTxt">Plans</span></h2>
                </div>
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
                            data-min="500" data-max="1999">
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
                                    <span class="val">$500-1999</span>
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
                            data-min="2000" data-max="3999">
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
                                    <span class="val">$2000-3999</span>
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
                            data-min="4000" data-max="4999">
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
                                    <span class="val">$4000-4999</span>
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
                    <form action="#" onsubmit="return calc();">
                        <div class="form">
                            <div class="inputLine">
                                <label for="">Amount:</label>
                                <input type="number" lang="en" step="any" name="amount" id="calc_amount"
                                    class="summ">
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

        <div class="picture"
            style="background-image: url({{ asset('') }}assets/c20a81c4/img/3d-rebot.avif);background-repeat: no-repeat;
            background-size: contain; background-position: top;"></div>
        <div class="eclipse"></div>
    </div>
</div>
<div class="textAbout">
    <div class="container">
        <div class="wrapIn">
            <div class="lineTxt">
                <div class="titleBl">
                    <h2 class="cap">Experience a New Level of <span class="colorTxt" style="color:#fff">Crypto Trading</span>
                    </h2>
                </div>
                <div class="textBlock">
                    <p>Arbitrage Trading consumes vast amounts of energy and requires more and more resources every year. With this
                        in mind, the idea of mining cryptocurrencies using renewable energy sources is becoming more
                        relevant than ever before.</p>
                    <p>In November 2018, CoinShares Research published a 4-volume study on the development of
                        cryptocurrencies and the possible consequences of mining for humans in the prospect of the next
                        century. It expressed a theory according to which the harm of mining for the environment can be
                        fatal if the energy source for it is not replaced over the next 25 years.</p>
                </div>
                <div class="prBl">
                    <span class="pr">80%</span>
                    <span class="desr">Of our mining farms are powered by renewable energy sources!</span>
                </div>
            </div>
            <div class="lineDoc">
                <div class="docBl">
                    <div class="docPic invisLink"
                        style="background-image: url({{ asset('') }}assets/c20a81c4/img/cryptosolex-document-1.png);">
                        <a href="#" target="_blank"></a></div>
                    <span class="docTxt">
                        <span class="txtCompany">Sip <span>Fx Limited</span></span>
                        238 Wandsworth Road, London,<br /> England, SW8 2JS </span>
                    <span class="tit">Company number:</span>
                    <span class="num">15268792</span>
                    <a href="#"
                        class="btn" target="_blank">check</a>
                </div>
                <div class="titleBl">
                    <h2 class="cap">About the company <span class="colorTxt">Sip <span>Fx</span></span></h2>
                </div>
                <div class="textBlock">
                    <p>{{ siteName() }} is a team that has combined alternative energy sources powered mining and
                        investing in a convenient online platform. The company's mission is to create an eco-friendly
                        environment for mining and present its potential to everyone. At the moment, more than 80 mining
                        farms have been opened and 10 countries have been covered. In order to become a
                        {{ siteName() }} partner, all you have to do is register and choose an investment plan. The
                        funds raised will be used to open new farms, upgrade equipment and develop the
                        {{ siteName() }} brand.</p>
                </div>
                <div class="btnLine">
                    <a href="{{route('login')}}" class="btn btnBlue">More about us</a>
               
                </div>
            </div>
            <div class="lineStep">
                <div class="list">
                    <div class="item">
                        <div class="numBl">
                            <span class="num"><span class="zero">0</span>1</span>
                        </div>
                        <span class="name">Create Account</span>
                        <span class="txt">Get access to our platform.</span>
                    </div>
                    <div class="item">
                        <div class="numBl">
                            <span class="num"><span class="zero">0</span>2</span>
                        </div>
                        <span class="name">Select a Plan</span>
                        <span class="txt">A choice of investment plans available for any budget!</span>
                    </div>
                    <div class="item">
                        <div class="numBl">
                            <span class="num"><span class="zero">0</span>3</span>
                        </div>
                        <span class="name">Make profits</span>
                        <span class="txt">Investments yield up to 3.4% daily interest.</span>
                    </div>
                    <div class="item">
                        <div class="numBl">
                            <span class="num"><span class="zero">0</span>4</span>
                        </div>
                        <span class="name">Withdraw returns</span>
                        <span class="txt">Make withdrawal requests and receive instant payments.</span>
                    </div>
                </div>
                <div class="pic"
                    style="background-image: url({{ asset('') }}assets/c20a81c4/img/Trading.jpeg);"></div>
                <a href="{{ route('register') }}" class="btn btnWhite">Start earning</a>
            </div>
        </div>
    </div>
</div>
<div class="whyBlock">
    <div class="container">
        <div class="wrapIn">
            <div class="titleBl">
                <h2 class="cap">Why choose <span class="colorTxt">Sip <span>Fx</span></span></h2>
            </div>
            <div class="list">
                <div class="item">
                    <span class="iconBl icon-antivirus-1"></span>
                    <span class="name">Reliable protection</span>
                    <span class="txt">All accounts and personal data are protected from malignant attacks by
                        end-to-end encryption.</span>
                </div>
                <div class="item">
                    <span class="iconBl icon-purse-1"></span>
                    <span class="name">Guaranteed payments</span>
                    <span class="txt">The company is officially registered business licensed for international
                        investment activities.</span>
                </div>
                <div class="item">
                    <span class="iconBl icon-customer-service-6"></span>
                    <span class="name">Professional management</span>
                    <span class="txt">Our team consists of professional traders, investors, developers and mining
                        specialists.</span>
                </div>
                <div class="item">
                    <span class="iconBl icon-layout-1"></span>
                    <span class="name">User-friendly <br> interface</span>
                    <span class="txt">You get access to a fully automated platform, your personal safe money making
                        machine.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="partnersBlock">
    <div class="container">
        <div class="line">

            <div class="right">
                <div class="titleBl">
                    <h2 class="cap">Affiliate  <span class="colorTxt">Program</span></h2>
                </div>
                <div class="textBlock">
                    <p>{{ siteName() }} gives you the opportunity to earn not from investments only, but also for
                        inviting new partners.</p>
                    <p>Our company offers a multi-level referral program in order to facilitate the reach out for new
                        partners and enhance their earning potential. You can diversify your income with our partner and
                        representative programs.</p>
                </div>
                <a href="#" class="btn btnFullBlue">More detailes</a>
                <div class="progList">
                    <div class="item">
                        <span class="iconBl icon-excellence"></span>
                        <span class="tit">Staking <br> Bonus</span>
                        <span class="pr">10%</span>
                    </div>
                    <div class="item">
                        <span class="iconBl icon-leader-1"></span>
                        <span class="tit">Affiliate <br> program</span>
                        <span class="pr">5%</span>
                    </div>
                    <span class="text">A detailed compensations table can be found in the <a
                            href="#">partners</a> section.</span>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .modal {
    position: absolute;
    z-index: 10000; /* 1 */
    top: 0;
    left: 0;
    visibility: hidden;
    width: 100%;
    height: 100%;
}

.modal.is-visible {
    visibility: visible;
}

.modal-overlay {
  position: fixed;
  z-index: 10;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: hsla(0, 0%, 0%, 0.5);
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s linear 0.3s, opacity 0.3s;
}

.modal.is-visible .modal-overlay {
  opacity: 1;
  visibility: visible;
  transition-delay: 0s;
}

.modal-wrapper {
  position: absolute;
  z-index: 9999;
  top: 6em;
  left: 50%;
  width: 32em;
  margin-left: -16em;
  background-color: #fff;
  box-shadow: 0 0 1.5em hsla(0, 0%, 0%, 0.35);
}

@media only screen and (max-width: 600px) {
 .modal-wrapper {
     position: absolute;
    z-index: 9999;
    top: 6em;
    left: 55%;
    width: 100%;
    margin-left: -12em;
    background-color: #fff;
    box-shadow: 0 0 1.5em hsla(0, 0%, 0%, 0.35);
}
}


.modal-transition {
  transition: all 0.3s 0.12s;
  transform: translateY(-10%);
  opacity: 0;
}

.modal.is-visible .modal-transition {
  transform: translateY(0);
  opacity: 1;
}

.modal-header,
.modal-content {
  padding: 1em;
}

.modal-header {
  position: relative;
  background-color: #fff;
  box-shadow: 0 1px 2px hsla(0, 0%, 0%, 0.06);
  border-bottom: 1px solid #e8e8e8;
}

.modal-close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 1em;
  color: #aaa;
  background: none;
  border: 0;
}

.modal-close:hover {
  color: #777;
}

.modal-heading {
  font-size: 1.125em;
  margin: 0;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.modal-content > *:first-child {
  margin-top: 0;
}

.modal-content > *:last-child {
  margin-bottom: 0;
}
</style>



  <div class="modal">
    <div class="modal-overlay modal-toggle"></div>
    <div class="modal-wrapper modal-transition">
      <div class="modal-header">
        <button class="modal-close modal-toggle"><svg class="icon-close icon" viewBox="0 0 32 32"><use xlink:href="#icon-close"></use></svg></button>
        <h2 class="modal-heading">Maintenance</h2>
      </div>
      
      <div class="modal-body">
        <div class="modal-content">
          <p><img style="     width: 96%;" src="{{asset('assets/WhatsApp07.jpeg')}}"></p>
          <button class="modal-toggle">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!--<div class="modal model2">-->
  <!--  <div class="modal-overlay modal-toggle modal-toggle2"></div>-->
  <!--  <div class="modal-wrapper modal-transition">-->
  <!--    <div class="modal-header">-->
  <!--      <button class="modal-close modal-toggle"><svg class="icon-close icon" viewBox="0 0 32 32"><use xlink:href="#icon-close"></use></svg></button>-->
  <!--      <h2 class="modal-heading">Bonanza</h2>-->
  <!--    </div>-->
      
      <!--<div class="modal-body">-->
      <!--  <div class="modal-content">-->
      <!--    <p><img style="    width: 100%;" src="{{asset('assets/bonanza4.png')}}"></p>-->
      <!--    <button class="modal-toggle1 modal-toggle2">Close</button>-->
      <!--  </div>-->
      <!--</div>-->
  <!--  </div>-->
  <!--</div>-->
  
  
  <!--<div class="modal model3">-->
  <!--  <div class="modal-overlay modal-toggle modal-toggle2"></div>-->
  <!--  <div class="modal-wrapper modal-transition">-->
  <!--    <div class="modal-header">-->
  <!--      <button class="modal-close modal-toggle"><svg class="icon-close icon" viewBox="0 0 32 32"><use xlink:href="#icon-close"></use></svg></button>-->
  <!--      <h2 class="modal-heading">Bonanza</h2>-->
  <!--    </div>-->
      
  <!--    <div class="modal-body">-->
  <!--      <div class="modal-content">-->
  <!--        <p><img style="    width: 100%;" src="{{asset('assets/WhatsApp03.jpeg')}}"></p>-->
  <!--        <button class="modal-toggle3 modal-toggle3">Close</button>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
  
        <!--<script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>-->
        
        
<script>

$('.modal-toggle2').on('click', function(e) {
  e.preventDefault();
  $('.model2').removeClass('is-visible');
});

// $('.modal-toggle3').on('click', function(e) {
//   e.preventDefault();
//   $('.model3').removeClass('is-visible');
// });

$('.modal-toggle').on('click', function(e) {
  e.preventDefault();
  $('.modal').toggleClass('is-visible');
});


$(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready
  $('.modal').toggleClass('is-visible');
  $('.model2').toggleClass('is-visible');
  $('.model3').toggleClass('is-visible');
});

</script>
@include('layouts.mainsite.footer')
