<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <title>{{ siteName() }} - Dashboard</title>

    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <link type="image/x-icon" href="/favicon.ico?v=1" rel="shortcut icon">
    <link type="image/png" href="/favicon.png" rel="icon">
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
    
    <script>
        
        setInterval(function(){
            var currentTime = new Date().toLocaleString();
            document.getElementById("digital-clock").innerHTML = currentTime;
            
        }, 1000);
    </script>
<style>
    .logo img {
    max-width: 145px;
    margin-top: -6px;
}
.selectric-items li {
    display: block;
    padding: 10px;
    color: #000;
    cursor: pointer;
    font-size: 16px;
}
</style>
    <section class="wrapper">
        <div class="lkPage">
            <div class="leftLk">
                <div class="logo invisLink">
                    <a href="/"></a>
                    <img src="{{ asset('') }}assets/c20a81c4/img/logo.png" alt="">
                </div>
                <div class="mobileToggle">
                    <div class="menuLk">
                        <ul>
                            <li><a href="{{route('user.dashboard')}}" class="active"> <span class="iconBl icon-presentation"></span>
                                    Dashboard</a></li>
                             <li><a href="{{route('user.invest')}}"> <span class="iconBl icon-wallet-9"></span> Activate user</a></li>
                               <li><a href="{{route('user.transfer-fund')}}"> <span class="iconBl icon-billboard"></span> Fund Transfer</a></li>
                            <li><a href="{{route('user.autoinvest')}}"> <span class="iconBl icon-safe-box"></span> Invest</a></li>
                            <li><a href="{{route('user.Withdraw')}}"> <span class="iconBl icon-money"></span> Withdraw</a></li>
                            <li><a href="{{route('user.roi-bonus')}}"> <span class="iconBl icon-calendar-12"></span> History</a></li>
                            <li><a href="{{route('user.referral-team')}}"> <span class="iconBl icon-teamwork"></span> Partners</a></li>
                           
                            <li><a href="{{route('user.profile')}}"> <span class="iconBl icon-settings-4"></span> Settings</a></li>
                            <li><a href="{{route('logout')}}"  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"  > <span class="iconBl icon-log-in"></span> Logout</a></li>
                        </ul>
                    </div>
                    <div class="lkLinks">
                        <ul>
                            <li><a href="#"><span class="iconBl icon-bell"></span>news</a><span
                                    class="circle">2</span></li>
                            <li><a href="#"><span class="iconBl icon-headphones-2"></span>support</a><span
                                    class="circle zero">0</span></li>
                        </ul>
                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    class="d-none">
                    {{ csrf_field() }}
                    </form>

                    <div class="lineTop">
                        <ul class="inf">
                            <li>
                                <span class="iconBl icon-paper-plane"></span>
                                <span class="tit">Telegram chat:</span>
                                <a href="#" target="_blank">@chat</a>
                            </li>
                            <li>
                                <span class="iconBl icon-paper-plane"></span>
                                <span class="tit">Telegram channel:</span>
                                <a href="#" target="_blank">@channel</a>
                            </li>
                            <li>
                                <span class="iconBl icon-mail-3"></span>
                                <a href="mailto:info@sipfx.live" target="_blank">support@sipfx.live</a>
                            </li>
                        </ul>
                        <div class="langBl">
                            <span class="iconBl icon-globe-2"></span>
                            <span class="langTit">Language: </span>
                            <span class="langText">en-US</span>
                           
                        </div>
                    </div>
                </div>
                <button class="menuBtn">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <div class="rightLk">
                <div class="lineTopLk">
                    <ul class="info">
                        <li>
                            <span class="iconBl icon-user-12"></span>
                            <span class="tit">Welcome: </span>
                            <span class="userName">{{Auth::user()->name}} - {{Auth::user()->username}}</span>
                            <div class="logLk">
                                <ul>
                                    <li><a href="{{route('user.profile')}}"><span class="iconBl icon-settings-4"></span></a></li>
                                    <li><a  href="{{route('logout')}}"  onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"  ><span class="iconBl icon-log-out-1"></span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <span class="iconBl icon-database"></span>
                            <span class="tit">Activation Date: </span>
                            
                            
                            
                                  @if(Auth::user()->active_status!="Pending")
                                      <span class="txt"> <?php echo date("D, d M Y H:i:s", strtotime(Auth::user()->adate))?></span>  
                                     @else
                                        <span class="txt">N/A</span>  
                                     @endif
                        </li>
                        <li>
                            <span class="iconBl icon-link-2"></span>
                            <span class="tit">Ref. link:</span>
                            <div class="linkRefWrapper">
                                <a href="#" class="link copyRef"
                                    data-clipboard-text="{{ asset('') }}register?ref={{ Auth::user()->username }}">{{ asset('') }}register?ref={{ Auth::user()->username }}</a>
                                <span class="copyMessage">Copied</span>
                            </div>
                        </li>
                    </ul>
                    <div class="lineHead">
                        <div class="lineTop">
                            <ul class="inf">
                                <li>
                                    <span class="iconBl icon-paper-plane"></span>
                                    <span class="tit">Telegram chat:</span>
                                    <a href="#">@chat</a>
                                </li>
                                <li>
                                    <span class="iconBl icon-paper-plane"></span>
                                    <span class="tit">Telegram channel:</span>
                                    <a href="#">@channel</a>
                                </li>
                                <li>
                                    <span class="iconBl icon-mail-3"></span>
                                    <a href="#">info@sipfx</a>
                                </li>
                            </ul>
                            <div class="langBl">
                                <span class="iconBl icon-globe-2"></span>
                                <span class="langTit">Language: </span>
                                <span class="langText">en-US</span>
                                
                            </div>
                        </div>
                        <div class="stateList">
                            <div class="item">
                                <span class="iconBl icon-cash-1"></span>
                                <span class="tit">Balance:</span>
                                <span class="val"> {{ currency() }}   {{ number_format((Auth::user()->available_balance()>0)?Auth::user()->available_balance():0, 2) }}</span>
                            </div>
                            <div class="item">
                                <span class="iconBl icon-money"></span>
                                <span class="tit">Withdrawn:</span>
                                <span class="val">{{ currency() }}
                                    {{ number_format(Auth::user()->withdraw(), 2) }}</span>
                            </div>
                            <div class="item">
                                <span class="iconBl icon-teamwork"></span>
                                <span class="tit">Total partners:</span>
                                <span class="val colorWhite">{{ Auth::user()->user_direct->count() }}</span>
                            </div>
                            <div class="item">
                                <span class="iconBl icon-safe-box"></span>
                                <span class="tit">Deposits:</span>
                                <span class="val">{{ currency() }}
                                    {{ number_format(Auth::user()->investment->sum('amount'), 2) }}</span>
                            </div>
                            <div class="item">
                                <span class="iconBl icon-rating-2"></span>
                                <span class="tit">Your rank:</span>
                                <span class="val colorWhite"><?php if(Auth::user()->rank==1){echo "Executive 1$";}elseif (Auth::user()->rank==2) {echo "Senior executive 3$";}elseif (Auth::user()->rank==3) {echo "Diamond 7$";}elseif (Auth::user()->rank==4) {echo "Blue diamond 20$";}elseif (Auth::user()->rank==5) {echo "Black Diamond 40$";}elseif (Auth::user()->rank==6) {echo "Red diamond 80$";}elseif (Auth::user()->rank==7) {echo "Pink diamond 160$";}elseif (Auth::user()->rank==8) {echo "Kohinoor 320$";}elseif (Auth::user()->rank==9) {echo "Trust Member 640$";}else{echo "N/A";}?> </span>
                            </div>
                            <div class="item">
                                <span class="iconBl icon-user-13"></span>
                                <ul>
                                    <li>
                                        <span class="txt"><span></span> Status</span>
                                        <span class="txt"><span></span> {{Auth::user()->active_status}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clockBl">
                            Your upline:<b style="margin-left:5px">{{ Auth::user()->sponsor_detail ? Auth::user()->sponsor_detail->username : '0' }}</b>
                        </div>
                        <div class="lkLinks">
                            <ul>
                                <li><a href="#"><span class="iconBl icon-bell"></span>News</a><span
                                        class="circle">0</span></li>
                                <li><a href="#"><span class="iconBl icon-headphones-2"></span>Support</a><span
                                        class="circle zero"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
