@include('layouts.mainsite.header')

<div class="greettingsPage">
    <div class="container">
        <div class="wrapIn">
            <h2 class="cap">Contacts</h2>
            <span class="desr">We are always in touch with you</span>
            <div class="clockBl">
                <span class="iconBl icon-wall-clock-11"></span>
                <span id="time"></span>
                <span id="date"></span>
            </div>
        </div>
        <div class="picture" style="background-image: url(/assets/c20a81c4/img/bgcontacts.png);"></div>
    </div>
</div>
<div class="contactsPage">
    <div class="container">
        <div class="wrapIn">
            <div class="left">
                <div class="contactList">
                    <div class="item">
                        <span class="iconBl icon-telegram-7"></span>
                        <span class="name">telegram:</span>
                        <ul>
                            <li><span class="tit">Telegram:</span><a href="#"
                                    target="_blank">@channel</a></li>
                            <li><span class="tit">Telegram chat:</span><a href="#"
                                    target="_blank">@chat</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <span class="iconBl icon-mail-7"></span>
                        <span class="name">Support:</span>
                        <ul>
                            <li><span class="tit">Telegram:</span><a href="#"
                                    target="_blank">@support</a></li>
                            <li><a href="mailto:info@sipfx.live" target="_blank">info@sipfx.live</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <span class="iconBl icon-share"></span>
                        <span class="name">We are in social media:</span>
                        <ul>
                            <li><a href="#" target="_blank"> <span class="iconBl"><img
                                            src="/assets/c20a81c4/img/twitter-2.svg" alt=""
                                            style="width:14px;position:relative;top:1px"></span> Twitter</a></li>
                            <li><a href="#" target="_blank"> <span
                                        class="iconBl icon-youtube"></span> Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="right">
                <span class="title">{{ siteName() }} Limited</span>
                <div class="adressBl">
                    <div class="col">
                        <span class="iconBl icon-placeholder-11"></span>
                        <span class="tit">Company address:</span>
                        <span class="txt">238 Wandsworth Road, London,<br /> England, SW8 2JS</span>
                    </div>
                    <div class="col">
                        <span class="iconBl icon-certificate"></span>
                        <span class="tit">Company number:</span>
                        <span class="num">15268792</span>
                        <a href="#"
                            target="_blank" class="link">check</a>
                    </div>
                </div>
                <div class="mapBl">
                    <div class="map">
                        <iframe
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=238%20Wandsworth%20Road,%20London,%20England,%20SW8%202JS+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="formBlock">
    <div class="container">
        <div class="wrapIn">
            <div class="left">
                <div class="titleBl">
                    <h2 class="cap">Write to us <span class="colorTxt">Feedback form</span></h2>
                </div>
                <span class="txt">If you have questions or valuable input, please, send us a message.</span>
                <span class="txt">We are always here to help.</span>
            </div>
            <div class="right">
                <form id="support" action="#" method="post">
                    <input type="hidden" name="_csrf"
                        value="yrx13ahjlBVP1l-dY--KQ5ctPDchyl23hvzsL254aA-5_SLpxhP3dheuDq0BgvN6ogBdXGSIO-PImosaAwwlbg==">
                    <div class="error-summary" style="display:none">
                        <p>Please fix the following errors:</p>
                        <ul></ul>
                    </div>
                    <div class="inputList">
                        <div class="inputLine field-contactform-subject required">
                            <input type="text" id="contactform-subject" class="form-control"
                                name="ContactForm[subject]" placeholder="Subject" aria-required="true">
                        </div>
                        <div class="inputLine field-contactform-email required">
                            <input type="text" id="contactform-email" class="form-control" name="ContactForm[email]"
                                placeholder="E-Mail" aria-required="true">
                        </div>
                        <div class="inputLine field-contactform-body required">
                            <textarea id="contactform-body" class="form-control" name="ContactForm[body]" placeholder="Message"
                                aria-required="true"></textarea>
                        </div>
                        <div class="inputLine field-contactform-code required">
                            <label><img id="contactform-code-image" src="/site/captcha/?v=656985fec6afd8.55423724"
                                    alt=""></label>
                            <div><input type="text" id="contactform-code" class="form-control"
                                    name="ContactForm[code]" aria-required="true"></div>
                        </div>
                        <div class="form-group field-check2">
                            <input type="hidden" id="check2" class="form-control" name="ContactForm[check]"
                                value="">
                        </div> <button class="btn btnFullBlue" type="button">send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('layouts.mainsite.footer')
