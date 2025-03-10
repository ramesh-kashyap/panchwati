<footer>
    <div class="container">
        <div class="wrapIn">
            <div class="left">
                <div class="logo invisLink">
                    <a href="{{ asset('') }}"></a>
                    <img src="{{ asset('') }}assets/c20a81c4/img/logo-white.png" alt="" style="width:130px">
                </div>
                <span class="text">Mining bitcoin using renewable energy sources.</span>
                <div class="socialBl">
                    <ul>
                        <li>
                            <a href="#" target="_blank"><span class="iconBl"><img
                                        src="{{ asset('') }}assets/c20a81c4/img/twitter.svg" alt=""
                                        style="width:14px;position:relative;top:2px"></span></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=3VcFbiR0WHs" target="_blank"><span
                                    class="iconBl icon-youtube"></span></a>
                        </li>
                        <li>
                            <a href="https://t.me/defisip" target="_blank"><span
                                    class="iconBl icon-telegram"></span></a>
                        </li>
                    </ul>
                </div>
                <div class="copyBl">
                    <span class="txt">Copyright © 2023 <a href="{{ asset('') }}">{{ siteName() }}
                            Limited</a>.<br> All rights reserved.</span>
                </div>
            </div>
            <div class="right">
                <div class="plBlock">
                    <div class="titleBl">
                        <h2 class="cap">Payment <span class="colorTxt">systems</span></h2>
                    </div>
                    <div class="list">
                        <div class="item"
                            style="background-image: url({{ asset('') }}assets/c20a81c4/img/footer-bitcoin.svg);">
                        </div>
                        <div class="item"
                            style="background-image: url({{ asset('') }}assets/c20a81c4/img/footer-ethereum.svg);">
                        </div>
                        <div class="item"
                            style="background-image: url({{ asset('') }}assets/c20a81c4/img/footer-litecoin.svg);">
                        </div>
                        <div class="item"
                            style="background-image: url({{ asset('') }}assets/c20a81c4/img/footer-tether.svg);">
                        </div>
                        <div class="item"
                            style="background-image: url({{ asset('') }}assets/c20a81c4/img/footer-tron.svg);">
                        </div>
                        <div class="item"
                            style="background-image: url({{ asset('') }}assets/c20a81c4/img/footer-dogecoin.svg);">
                        </div>
                    </div>
                </div>
                <div class="menu">
                    <ul>

                        <li class="active">
                            <a href="{{ route('Index') }}" class="">
                                Home </a>
                        </li>
                        <li>
                            <a href="{{ route('affiliate') }}" class="">
                                About us </a>
                        </li>
                        <li>
                            <a href="{{ route('aitrading') }}" class="">
                                Investors </a>
                        </li>
                        <li>
                            <a href="{{ route('partners') }}" class="">
                                Partners </a>
                        </li>
                        <li>
                            <a href="{{ route('faq') }}" class="">
                                FAQ </a>
                        </li>
                        <li>
                            <a href="{{ route('term-candition') }}" class="">
                                terms & condition </a>
                        </li>
                        <li>
                            <a href="{{ route('contact-us') }}" class="">
                                Contacts </a>
                        </li>
                    </ul>
                </div>
                <div class="infoFot">
                    <div class="item">
                        <span class="iconBl icon-placeholder-7"></span>
                        <span class="txt">238 Wandsworth Road, London,<br /> England, SW8 2JS</span>
                    </div>
                    <div class="item">
                        <span class="iconBl icon-navigation"></span>
                        <ul>
                            <li>
                                <span class="tit">Telegram:</span> <a href="https://t.me/defisip"
                                    target="_blank">@channel</a>
                            </li>
                            <li>
                                <span class="tit">Telegram:</span> <a href="https://t.me/defisip"
                                    target="_blank">@chat</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <span class="iconBl icon-chat-3"></span>
                        <span class="tit">Support:</span> <a href="mailto:info@sipfx.live"
                            target="_blank">info@sipfx.live</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</section>


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


<script>
    jQuery(function($) {

        function calc(amount, percent, term) {
            amount = $('#calc_amount').val();
            percent = jQuery('[name=plan]:checked').data('percent');
            term = jQuery('[name=plan]:checked').data('term');
            jQuery('#info_profit_period').html((amount * percent / 100).toFixed(2));
            jQuery('#info_profit_total').html((amount * term / 100).toFixed(2));
        }

        jQuery(document).ready(function() {
            $('#calc_range').ionRangeSlider({
                grid: false,
                min: jQuery('[name=plan]:checked').data('min'),
                max: jQuery('[name=plan]:checked').data('max'),
                from: jQuery('[name=plan]:checked').data('min'),
                step: 0.1,
                prefix: '<span class=lbl>$</span>',
                onChange: function(data) {
                    $('#calc_amount').val(data.from);
                    calc();
                },
                onUpdate: function(data) {
                    $('#calc_amount').val(data.from);
                    calc();
                }
            });

            jQuery('[name=plan]').on('change', function() {
                jQuery('#calc_range').data('ionRangeSlider').update({
                    min: jQuery('[name=plan]:checked').data('min'),
                    max: jQuery('[name=plan]:checked').data('max'),
                    from: jQuery('[name=plan]:checked').data('min')
                });
                calc();
            });

            jQuery('#calc_amount').on('keyup change', function() {
                jQuery('#calc_range').data('ionRangeSlider').update({
                    from: jQuery('#calc_amount').val()
                });
                calc();
            });

            jQuery('#calc_amount').val(jQuery('[name=plan]:checked').data('min'));
            calc();
        })


        'use strict';

        var canvas = document.createElement('canvas');
        var ctx = canvas.getContext('2d');

        var MAX_FLIES = 50;
        var FLY_XSPEED_RANGE = [-1, 1];
        var FLY_YSPEED_RANGE = [-0.5, 0.5];
        var FLY_SIZE_RANGE = [1, 5];
        var FLY_LIFESPAN_RANGE = [75, 150];

        var flies = [];

        function randomRange(min, max) {
            return Math.random() * (max - min) + min;
        }

        function Fly(options) {
            if (!options) {
                options = {};
            }

            this.x = options.x || randomRange(0, canvas.width);
            this.y = options.y || randomRange(0, canvas.height);
            this.xSpeed = options.xSpeed || randomRange(FLY_XSPEED_RANGE[0], FLY_XSPEED_RANGE[1]);
            this.ySpeed = options.ySpeed || randomRange(FLY_YSPEED_RANGE[0], FLY_YSPEED_RANGE[1]);
            this.size = options.size || randomRange(FLY_SIZE_RANGE[0], FLY_SIZE_RANGE[1]);
            this.lifeSpan = options.lifeSpan || randomRange(FLY_LIFESPAN_RANGE[0], FLY_LIFESPAN_RANGE[1]);
            this.age = 0;

            this.colors = options.colors || {
                red: 217,
                green: 73,
                blue: 29,
                alpha: 0
            };
        }

        function fitToScreen(element) {
            element.width = window.innerWidth;
            element.height = window.innerHeight;
        }

        function clearScreen() {
            ctx.beginPath();
            ctx.fillStyle = '#007ce3';
            ctx.rect(0, 0, canvas.width, canvas.height);
            ctx.fill();


        }

        function createFlies() {
            if (flies.length !== MAX_FLIES) {
                flies.push(new Fly());
            }
        }

        function moveFlies() {
            flies.forEach(function(fly) {
                fly.x += fly.xSpeed;
                fly.y += fly.ySpeed;
                fly.age++;

                if (fly.age < fly.lifeSpan / 2) {
                    fly.colors.alpha += 1 / (fly.lifeSpan / 2);

                    if (fly.colors.alpha > 1) {
                        fly.colors.alpha = 1;
                    }
                } else {
                    fly.colors.alpha -= 1 / (fly.lifeSpan / 2);

                    if (fly.colors.alpha < 0) {
                        fly.colors.alpha = 0;
                    }
                }
            });
        }

        function removeFlies() {
            var i = flies.length;

            while (i--) {
                var fly = flies[i];

                if (fly.age >= fly.lifeSpan) {
                    flies.splice(i, 1);
                }
            }
        }

        function drawFlies() {
            flies.forEach(function(fly) {
                ctx.beginPath();
                ctx.fillStyle = 'rgba(255,255,255,.55)';
                ctx.arc(
                    fly.x,
                    fly.y,
                    fly.size,
                    0,
                    Math.PI * 2,
                    false
                );
                ctx.fill();
            });
        }

        function render() {
            clearScreen();
            createFlies();
            moveFlies();
            removeFlies();
            drawFlies();
        }

        window.addEventListener('resize', function() {
            fitToScreen(canvas);
        });

        //document.querySelector('.circleAnimate').appendChild(canvas);
        fitToScreen(canvas);

        (function animationLoop() {
            window.requestAnimationFrame(animationLoop);
            render();
        })();

    });
</script>
</body>

<!-- Mirrored from cryptosolex.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2023 05:54:16 GMT -->

</html>
