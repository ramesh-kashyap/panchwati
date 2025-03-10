<div class="contentLk">


    <h2 class="titleLk">Settings</h2>
    <div class="settingsPage">
        <div class="settingsTabs">
            <ul class="listLinks">
                <li><a href="#personal"> <span class="iconBl icon-contacts"></span> Personal data</a>
                </li>
                <li><a href="#password"> <span class="iconBl icon-padlock-2"></span> Change
                        password</a></li>
                {{-- <li><a href="#security"> <span class="iconBl icon-database"></span> Security</a></li>
                <li><a href="#payment"> <span class="iconBl icon-credit-card-5"></span> Payment
                        details</a></li> --}}
            </ul>
            <div class="tabsBody" id="personal">
                <form  action="{{ route('user.update-profile') }}" method="post">
                    {{ csrf_field() }}
                    <div class="error-summary" style="display:none">
                        <p>Please fix the following errors:</p>
                        <ul></ul>
                    </div>
                    <div class="inputList">
                        <div class="inputLine field-userdata-first_name">
                            <label class="control-label" for="userdata-first_name">First
                                Name</label><input type="text" value="{{ $profile_data ? $profile_data->name : '' }}" id="userdata-first_name" class="form-control"
                                name="name" autofocus><span class="iconBl icon-identity-card"></span>
                        </div>
                        <div class="inputLine field-userdata-last_name">
                            <label class="control-label" for="userdata-last_name">Last
                                Name</label><input type="text" value="{{ $profile_data ? $profile_data->lastname : '' }}" id="userdata-last_name" class="form-control"
                                name="lastname"><span class="iconBl icon-identity-card"></span>
                        </div>
                        <div class="inputLine field-investuser-username required">
                            <label class="control-label" for="investuser-username">Username</label><input type="text"
                                id="investuser-username" class="form-control" name=""
                                value="{{ $profile_data ? $profile_data->username : '' }}" readonly aria-required="true"><span
                                class="iconBl icon-user-12--"></span>
                        </div>
                        <div class="inputLine field-investuser-email required">
                            <label class="control-label" for="investuser-email">Email</label><input type="text"
                                id="investuser-email" class="form-control" name="email"
                                value="{{ $profile_data ? $profile_data->email : '' }}" readonly aria-required="true"><span
                                class="iconBl icon-mail-3"></span>
                        </div>
                        <div class="inputLine field-userdata-phone">
                            <label class="control-label" for="userdata-phone">Country</label>
                            <select name="country" id="" class="form-control">

                                <option>
                                    {{ $profile_data ? $profile_data->country : '' }}
                                </option>
                                <option value="AFGHANISTAN">
                                    AFGHANISTAN</option>
                                <option value="ALBANIA">ALBANIA
                                </option>
                                <option value="ALGERIA">ALGERIA
                                </option>
                                <option value="AMERICAN SAMOA">
                                    AMERICAN SAMOA</option>
                                <option value="ANDORRA">ANDORRA
                                </option>
                                <option value="ANGOLA">ANGOLA
                                </option>
                                <option value="ANGUILLA">ANGUILLA
                                </option>
                                <option value="ANTARCTICA">
                                    ANTARCTICA</option>
                                <option value="ANTIGUA AND BARBUDA">
                                    ANTIGUA AND BARBUDA</option>
                                <option value="ARGENTINA">
                                    ARGENTINA</option>
                                <option value="ARMENIA">ARMENIA
                                </option>
                                <option value="ARUBA">ARUBA
                                </option>
                                <option value="AUSTRALIA">
                                    AUSTRALIA</option>
                                <option value="AUSTRIA">AUSTRIA
                                </option>
                                <option value="AZERBAIJAN">
                                    AZERBAIJAN</option>
                                <option value="BAHAMAS">BAHAMAS
                                </option>
                                <option value="BAHRAIN">BAHRAIN
                                </option>
                                <option value="BANGLADESH">
                                    BANGLADESH</option>
                                <option value="BARBADOS">
                                    BARBADOS</option>
                                <option value="BELARUS">BELARUS
                                </option>
                                <option value="BELGIUM">BELGIUM
                                </option>
                                <option value="BELIZE">BELIZE
                                </option>
                                <option value="BENIN">BENIN
                                </option>
                                <option value="BERMUDA">BERMUDA
                                </option>
                                <option value="BHUTAN">BHUTAN
                                </option>
                                <option value="BOLIVIA">BOLIVIA
                                </option>
                                <option value="BOSNIA AND HERZEGOVINA">
                                    BOSNIA AND HERZEGOVINA
                                </option>
                                <option value="BOTSWANA">
                                    BOTSWANA</option>
                                <option value="BOUVET ISLAND">
                                    BOUVET ISLAND</option>
                                <option value="BRAZIL">BRAZIL
                                </option>
                                <option value="BRITISH INDIAN OCEAN TERRITORY">
                                    BRITISH INDIAN OCEAN
                                    TERRITORY</option>
                                <option value="BRUNEI DARUSSALAM">
                                    BRUNEI DARUSSALAM</option>
                                <option value="BULGARIA">
                                    BULGARIA</option>
                                <option value="BURKINA FASO">
                                    BURKINA FASO</option>
                                <option value="BURUNDI">BURUNDI
                                </option>
                                <option value="CAMBODIA">
                                    CAMBODIA</option>
                                <option value="CAMEROON">
                                    CAMEROON</option>
                                <option value="CANADA">CANADA
                                </option>
                                <option value="CAPE VERDE">CAPE
                                    VERDE</option>
                                <option value="CAYMAN ISLANDS">
                                    CAYMAN ISLANDS</option>
                                <option value="CENTRAL AFRICAN REPUBLIC">
                                    CENTRAL AFRICAN REPUBLIC
                                </option>
                                <option value="CHAD">CHAD
                                </option>
                                <option value="CHILE">CHILE
                                </option>
                                <option value="CHINA">CHINA
                                </option>
                                <option value="CHRISTMAS ISLAND">
                                    CHRISTMAS ISLAND</option>
                                <option value="COCOS (KEELING) ISLANDS">
                                    COCOS (KEELING) ISLANDS
                                </option>
                                <option value="COLOMBIA">
                                    COLOMBIA</option>
                                <option value="COMOROS">COMOROS
                                </option>
                                <option value="CONGO">CONGO
                                </option>
                                <option value="CONGO, THE DEMOCRATIC REPUBLIC OF THE">
                                    CONGO, THE DEMOCRATIC
                                    REPUBLIC OF THE</option>
                                <option value="COOK ISLANDS">
                                    COOK ISLANDS</option>
                                <option value="COSTA RICA">COSTA
                                    RICA</option>
                                <option value="COTE D'IVOIRE">
                                    COTE D'IVOIRE</option>
                                <option value="CROATIA">CROATIA
                                </option>
                                <option value="CUBA">CUBA
                                </option>
                                <option value="CYPRUS">CYPRUS
                                </option>
                                <option value="CZECH REPUBLIC">
                                    CZECH REPUBLIC</option>
                                <option value="DENMARK">DENMARK
                                </option>
                                <option value="DJIBOUTI">
                                    DJIBOUTI</option>
                                <option value="DOMINICA">
                                    DOMINICA</option>
                                <option value="DOMINICAN REPUBLIC">
                                    DOMINICAN REPUBLIC</option>
                                <option value="ECUADOR">ECUADOR
                                </option>
                                <option value="EGYPT">EGYPT
                                </option>
                                <option value="EL SALVADOR">EL
                                    SALVADOR</option>
                                <option value="EQUATORIAL GUINEA">
                                    EQUATORIAL GUINEA</option>
                                <option value="ERITREA">ERITREA
                                </option>
                                <option value="ESTONIA">ESTONIA
                                </option>
                                <option value="ETHIOPIA">
                                    ETHIOPIA</option>
                                <option value="FALKLAND ISLANDS (MALVINAS)">
                                    FALKLAND ISLANDS (MALVINAS)
                                </option>
                                <option value="FAROE ISLANDS">
                                    FAROE ISLANDS</option>
                                <option value="FIJI">FIJI
                                </option>
                                <option value="FINLAND">FINLAND
                                </option>
                                <option value="FRANCE">FRANCE
                                </option>
                                <option value="FRENCH GUIANA">
                                    FRENCH GUIANA</option>
                                <option value="FRENCH POLYNESIA">
                                    FRENCH POLYNESIA</option>
                                <option value="FRENCH SOUTHERN TERRITORIES">
                                    FRENCH SOUTHERN TERRITORIES
                                </option>
                                <option value="GABON">GABON
                                </option>
                                <option value="GAMBIA">GAMBIA
                                </option>
                                <option value="GEORGIA">GEORGIA
                                </option>
                                <option value="GERMANY">GERMANY
                                </option>
                                <option value="GHANA">GHANA
                                </option>
                                <option value="GIBRALTAR">
                                    GIBRALTAR</option>
                                <option value="GREECE">GREECE
                                </option>
                                <option value="GREENLAND">
                                    GREENLAND</option>
                                <option value="GRENADA">GRENADA
                                </option>
                                <option value="GUADELOUPE">
                                    GUADELOUPE</option>
                                <option value="GUAM">GUAM
                                </option>
                                <option value="GUATEMALA">
                                    GUATEMALA</option>
                                <option value="GUINEA">GUINEA
                                </option>
                                <option value="GUINEA-BISSAU">
                                    GUINEA-BISSAU</option>
                                <option value="GUYANA">GUYANA
                                </option>
                                <option value="HAITI">HAITI
                                </option>
                                <option value="HEARD ISLAND AND MCDONALD ISLANDS">
                                    HEARD ISLAND AND MCDONALD
                                    ISLANDS</option>
                                <option value="HOLY SEE (VATICAN CITY STATE)">
                                    HOLY SEE (VATICAN CITY STATE)
                                </option>
                                <option value="HONDURAS">
                                    HONDURAS</option>
                                <option value="HONG KONG">HONG
                                    KONG</option>
                                <option value="HUNGARY">HUNGARY
                                </option>
                                <option value="ICELAND">ICELAND
                                </option>
                                <option value="INDIA">INDIA
                                </option>
                                <option value="INDONESIA">
                                    INDONESIA</option>
                                <option value="IRAN, ISLAMIC REPUBLIC OF">
                                    IRAN, ISLAMIC REPUBLIC OF
                                </option>
                                <option value="IRAQ">IRAQ
                                </option>
                                <option value="IRELAND">IRELAND
                                </option>
                                <option value="ISRAEL">ISRAEL
                                </option>
                                <option value="ITALY">ITALY
                                </option>
                                <option value="JAMAICA">JAMAICA
                                </option>
                                <option value="JAPAN">JAPAN
                                </option>
                                <option value="JORDAN">JORDAN
                                </option>
                                <option value="KAZAKHSTAN">
                                    KAZAKHSTAN</option>
                                <option value="KENYA">KENYA
                                </option>
                                <option value="KIRIBATI">
                                    KIRIBATI</option>
                                <option value="KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF">
                                    KOREA, DEMOCRATIC PEOPLE'S
                                    REPUBLIC OF</option>
                                <option value="KOREA, REPUBLIC OF">
                                    KOREA, REPUBLIC OF</option>
                                <option value="KUWAIT">KUWAIT
                                </option>
                                <option value="KYRGYZSTAN">
                                    KYRGYZSTAN</option>
                                <option value="LAO PEOPLE'S DEMOCRATIC REPUBLIC">
                                    LAO PEOPLE'S DEMOCRATIC
                                    REPUBLIC</option>
                                <option value="LATVIA">LATVIA
                                </option>
                                <option value="LEBANON">LEBANON
                                </option>
                                <option value="LESOTHO">LESOTHO
                                </option>
                                <option value="LIBERIA">LIBERIA
                                </option>
                                <option value="LIBYAN ARAB JAMAHIRIYA">
                                    LIBYAN ARAB JAMAHIRIYA
                                </option>
                                <option value="LIECHTENSTEIN">
                                    LIECHTENSTEIN</option>
                                <option value="LITHUANIA">
                                    LITHUANIA</option>
                                <option value="LUXEMBOURG">
                                    LUXEMBOURG</option>
                                <option value="MACAO">MACAO
                                </option>
                                <option value="MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF">
                                    MACEDONIA, THE FORMER
                                    YUGOSLAV REPUBLIC OF</option>
                                <option value="MADAGASCAR">
                                    MADAGASCAR</option>
                                <option value="MALAWI">MALAWI
                                </option>
                                <option value="MALAYSIA">
                                    MALAYSIA</option>
                                <option value="MALDIVES">
                                    MALDIVES</option>
                                <option value="MALI">MALI
                                </option>
                                <option value="MALTA">MALTA
                                </option>
                                <option value="MARSHALL ISLANDS">
                                    MARSHALL ISLANDS</option>
                                <option value="MARTINIQUE">
                                    MARTINIQUE</option>
                                <option value="MAURITANIA">
                                    MAURITANIA</option>
                                <option value="MAURITIUS">
                                    MAURITIUS</option>
                                <option value="MAYOTTE">MAYOTTE
                                </option>
                                <option value="MEXICO">MEXICO
                                </option>
                                <option value="MICRONESIA, FEDERATED STATES OF">
                                    MICRONESIA, FEDERATED STATES
                                    OF</option>
                                <option value="MOLDOVA, REPUBLIC OF">
                                    MOLDOVA, REPUBLIC OF</option>
                                <option value="MONACO">MONACO
                                </option>
                                <option value="MONGOLIA">
                                    MONGOLIA</option>
                                <option value="MONTSERRAT">
                                    MONTSERRAT</option>
                                <option value="MOROCCO">MOROCCO
                                </option>
                                <option value="MOZAMBIQUE">
                                    MOZAMBIQUE</option>
                                <option value="MYANMAR">MYANMAR
                                </option>
                                <option value="NAMIBIA">NAMIBIA
                                </option>
                                <option value="NAURU">NAURU
                                </option>
                                <option value="NEPAL">NEPAL
                                </option>
                                <option value="NETHERLANDS">
                                    NETHERLANDS</option>
                                <option value="NETHERLANDS ANTILLES">
                                    NETHERLANDS ANTILLES</option>
                                <option value="NEW CALEDONIA">
                                    NEW CALEDONIA</option>
                                <option value="NEW ZEALAND">NEW
                                    ZEALAND</option>
                                <option value="NICARAGUA">
                                    NICARAGUA</option>
                            </select>
                        </div>

                        <div class="inputLine field-userdata-phone">
                            <label class="control-label" for="userdata-phone">Phone</label><input type="text"
                                id="userdata-phone" value="{{ $profile_data ? $profile_data->phone : '' }}"  class="form-control" name="phone"><span
                                class="iconBl icon-smartphone-5"></span>
                        </div>
                        
                        <div class="inputLine field-userdata-whatsapp">
                            <label class="control-label" for="userdata-whatsapp">Tether TRC20</label><input type="text"
                                id="userdata-whatsapp" class="form-control" {{ (!empty($profile_data->usdtTrc20)) ? 'readonly' : '' }} value="{{ $profile_data ? $profile_data->usdtTrc20 : '' }}" placeholder="TETHER TRC20 " name="usdtTrc20">
                        </div>
                        <div class="inputLine field-userdata-telegram">
                            <label class="control-label" for="userdata-telegram">Tether BEP20</label><input type="text"
                                id="userdata-telegram" class="form-control" {{ (!empty($profile_data->usdtBep20)) ? 'readonly' : '' }} value="{{ $profile_data ? $profile_data->usdtBep20 : '' }}" placeholder="TETHER BEP20 " name="usdtBep20">
                        </div>
                        
                    </div>
                    <button class="btn btnBlue" type="submit" name="settings_btn">Save</button>
                </form>
            </div>
            <div class="tabsBody" id="password">
                <div class="passwordSettings">
                    <form action="{{ route('user.edit-password') }}" method="post">
                        {{ csrf_field() }}
                        <div class="error-summary" style="display:none">
                            <p>Please fix the following errors:</p>
                            <ul></ul>
                        </div>
                        <div class="inputList">
                            <div class="inputLine field-changepasswordform-password_old required">
                                <label class="control-label" for="changepasswordform-password_old">Old
                                    Password</label><input type="text" id="changepasswordform-password_old"
                                    class="form-control" name="old_password" autofocus
                                    aria-required="true"><span class="iconBl icon-lock"></span>
                            </div>
                            <div class="inputLine field-changepasswordform-password_new required">
                                <label class="control-label" for="changepasswordform-password_new">New
                                    Password</label><input type="text" id="changepasswordform-password_new"
                                    class="form-control" name="password" autofocus
                                    aria-required="true"><span class="iconBl icon-lock"></span>
                            </div>
                            <div class="inputLine field-changepasswordform-password_repeat required">
                                <label class="control-label" for="changepasswordform-password_repeat">Repeat
                                    Password</label><input type="text" id="changepasswordform-password_repeat"
                                    class="form-control" name="password_confirmation" autofocus
                                    aria-required="true"><span class="iconBl icon-lock"></span>
                            </div>
                        </div>
                        <button class="btn btnBlue" type="submit">Save</button>
                    </form>
                </div>
            </div>
            {{-- <div class="tabsBody" id="security">
                <form id="security-form" class="" action="/settings/#security" method="post">
                    <input type="hidden" name="_csrf"
                        value="u0TM_Qu4y8fVDWSoKez8HfvP3i0Sby83EHyn3X5cbhPycaSbZ-G7l75VIsBlnbVuir-zXHAGYkRmMv-MPTpYeQ==">
                    <div class="error-summary" style="display:none">
                        <p>Please fix the following errors:</p>
                        <ul></ul>
                    </div>
                    <div class="securitySettings">
                        <div class="setLeft">
                            <div class="inputList">
                                <div class="inputLine field-securityform-time_zone">
                                    <label class="control-label" for="securityform-time_zone">Your
                                        time zone (from UTC)</label><input type="text" id="securityform-time_zone"
                                        class="form-control" name="SecurityForm[time_zone]" value="0">
                                </div>
                                <div class="chekBl field-securityform-email_notification">
                                    <input type="hidden" name="SecurityForm[email_notification]"
                                        value="0"><input type="checkbox" id="securityform-email_notification"
                                        name="SecurityForm[email_notification]" value="1"><label
                                        class="control-label" for="securityform-email_notification">Do
                                        not receive email alerts</label>
                                </div> <span class="title">Security</span>
                                <div class="inputLine field-securityform-ip_control">
                                    <label class="control-label" for="securityform-ip_control">Limit
                                        Access by IP</label><select id="securityform-ip_control" class="selectricBl"
                                        name="SecurityForm[ip_control]">
                                        <option value="0" selected>0.0.0.0</option>
                                        <option value="1">x.0.0.0</option>
                                        <option value="2">x.x.0.0</option>
                                        <option value="3">x.x.x.0</option>
                                        <option value="4">x.x.x.x</option>
                                    </select>
                                </div>
                                <div class="chekBl field-securityform-ip_session">
                                    <input type="hidden" name="SecurityForm[ip_session]" value="0"><input
                                        type="checkbox" id="securityform-ip_session" name="SecurityForm[ip_session]"
                                        value="1"><label class="control-label"
                                        for="securityform-ip_session">Bind a session to an IP
                                        address</label>
                                </div>
                                <div class="chekBl field-securityform-multilogin">
                                    <input type="hidden" name="SecurityForm[multilogin]" value="0"><input
                                        type="checkbox" id="securityform-multilogin" name="SecurityForm[multilogin]"
                                        value="1"><label class="control-label"
                                        for="securityform-multilogin">Prohibit parallel
                                        sessions</label>
                                </div>
                                <div class="inputLine field-securityform-auto_logout">
                                    <label class="control-label" for="securityform-auto_logout">Auto
                                        logout after N minutes (0 by default)</label><input type="text"
                                        id="securityform-auto_logout" class="form-control"
                                        name="SecurityForm[auto_logout]" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="setRight">
                            <span class="title">Google Authenticator</span>
                            <span class="txt">Use the key to activate Google Authenticator:</span>
                            <span class="num">S7NH22WIMH5OR5S2</span>
                            <div class="pic"
                                style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAL4AAAC+CAIAAAAEFiLKAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEaUlEQVR4nO3dy67dNgwF0Cbo/3/yRafOQIC0Rcpyutbwwq+mGzqETdO/fn5+/oF1v9++AL5KdAiJDiHRISQ6hESHkOgQEh1CokNIdAiJDiHRISQ6hESHkOgQEh1CokNIdAiJDiHRISQ6hESHkOgQEh1CokNIdAiJDiHRIfRv03F//64P5cxkhed5n9uP/r5j9b9x9fqrNE2ksOoQEh1CokOoq9Z52vmtHf32r9YuM3XP6Fyj4+8cc+b6O/7dCll1CIkOIdEhdKLWeZr5DV6tXWb+vlpzPP++WgON7Nxbqvp3K2TVISQ6hESH0Olap8rOb/9OTbO6zUzt9dGp51YdQqJDSHQIfbXWWa0tquqJqh6gj9Y3T1YdQqJDSHQIna51TvYFz9yD2alddu7ljI4zc65LWHUIiQ4h0SF0otbp7pPt6BGuep9r9XpG+17o6ovjZqJDSHQI/brwhsGqjr7dqvfJq/qaL2TVISQ6hESH0I3zdVbvf1Tt212XrPYpd99z2mTVISQ6hESH0Jv9Ojv3Y3bqgJnjz6h6XtZxDQdYdQiJDiHRIXTiGdbOe9qr9dBOj/DM8Ueqrn/1+C+y6hASHUKiQ6ir1tnp4X2qujezum/3s7OquTsvzhi06hASHUKiQ+hErTNj57f/tvtGq3auYWb7JlYdQqJDSHQIvTlLcGce8WibmXOt7ruq6l3xy+cTWnUIiQ4h0SH05jOsnT7ijtqo6t2x0TE7vuXpPSy+R3QIiQ6hW55hPVX1qcwcs2Nm4Mx5d/bt6K0OWHUIiQ4h0SF0uta5rW6o2rfjGqrmDDWx6hASHUKiQ+jNfp2qeTM7z7NG2++cd2b77lrkwLmsOoREh5DoEHrzGVb3853uZ0Dd56p6P0utw11Eh5DoELrle1hVPSvd24/2Pdk7fEmfslWHkOgQEh1CN/YmV6marzM65lPV9893tpm5zkLv/w/mo0SHkOgQerM3uWq+8Oq+Ix0zi2eux3tY/L+IDiHRIXSiN3nne1Ud/S5VcwW/ct+oiVWHkOgQEh1Cb76H9VT1W17Vy9wxC3HnmJfUN3+c7uTJ+JuIDiHRIXTj3OTVbUbbP3XMtumYPTjjxVnJT1YdQqJDSHQI3fIe1qru74F31z1VvcxqHb5HdAiJDqGuZ1gdz1N2ent3njFVfUe9+/0s38PiG0SHkOgQOt2bvKrqHaWOb6SP7NQcVd9sN1+He4kOIdEhdLo3uXue8oyTs4Y7Zitf4pMXzQ1Eh5DoELrlPawqq++Tn+xx2bnX0nG/apNVh5DoEBIdQn9DrdM9n3Bn+53eoI7na4WsOoREh5DoEDpd67z121z1PtTM8au+f97RQ13IqkNIdAiJDqETtU53P8rOzOKOGcer28/Mia66d1XIqkNIdAiJDqGvztfhdVYdQqJDSHQIiQ4h0SEkOoREh5DoEBIdQqJDSHQIiQ4h0SEkOoREh5DoEBIdQqJDSHQIiQ4h0SEkOoREh5DoEBIdQqJDSHQIiQ6h/wDdK/sAqnt6GAAAAABJRU5ErkJggg==);">
                            </div>
                            <div class="inputList">
                                <div class="inputLine field-securityform-code">
                                    <label class="control-label" for="securityform-code">Enter code
                                        from GA</label><input type="text" id="securityform-code"
                                        class="form-control" name="SecurityForm[code]">
                                </div>
                            </div>
                        </div>
                        <button class="btn btnBlue" type="submit">Save</button>
                    </div>
                </form>
            </div>
            <div class="tabsBody" id="payment">
                <div class="listPlat">
                    <form id="payments-form" action="/settings/#payment" method="post">
                        <input type="hidden" name="_csrf"
                            value="u0TM_Qu4y8fVDWSoKez8HfvP3i0Sby83EHyn3X5cbhPycaSbZ-G7l75VIsBlnbVuir-zXHAGYkRmMv-MPTpYeQ==">
                        <div class="error-summary" style="display:none">
                            <p>Please fix the following errors:</p>
                            <ul></ul>
                        </div>
                        <div class="inputList">
                            <div class="inputLine field-investpaymentwallet-5-2-wallet">
                                <label class="control-label" for="investpaymentwallet-5-2-wallet">Tether
                                    ERC20</label><input type="text" id="investpaymentwallet-5-2-wallet"
                                    class="form-control" name="InvestPaymentWallet[5][2][wallet]">
                                <div class="pic"
                                    style="background-image: url(/assets/c20a81c4/img/ps/USDT_ERC20.svg);">
                                </div>
                            </div>
                            <div class="inputLine field-investpaymentwallet-6-3-wallet">
                                <label class="control-label" for="investpaymentwallet-6-3-wallet">Tether
                                    TRC20</label><input type="text" id="investpaymentwallet-6-3-wallet"
                                    class="form-control" name="InvestPaymentWallet[6][3][wallet]">
                                <div class="pic"
                                    style="background-image: url(/assets/c20a81c4/img/ps/USDT_TRC20.svg);">
                                </div>
                            </div>
                            <div class="inputLine field-investpaymentwallet-7-4-wallet">
                                <label class="control-label" for="investpaymentwallet-7-4-wallet">Tether
                                    BEP20</label><input type="text" id="investpaymentwallet-7-4-wallet"
                                    class="form-control" name="InvestPaymentWallet[7][4][wallet]">
                                <div class="pic"
                                    style="background-image: url(/assets/c20a81c4/img/ps/USDT_BEP20.svg);">
                                </div>
                            </div>
                            <div class="inputLine field-investpaymentwallet-8-21-wallet">
                                <label class="control-label"
                                    for="investpaymentwallet-8-21-wallet">Bitcoin</label><input type="text"
                                    id="investpaymentwallet-8-21-wallet" class="form-control"
                                    name="InvestPaymentWallet[8][21][wallet]">
                                <div class="pic"
                                    style="background-image: url(/assets/c20a81c4/img/ps/BTC_BTC.svg);">
                                </div>
                            </div>
                            <div class="inputLine field-investpaymentwallet-9-22-wallet">
                                <label class="control-label"
                                    for="investpaymentwallet-9-22-wallet">Ethereum</label><input type="text"
                                    id="investpaymentwallet-9-22-wallet" class="form-control"
                                    name="InvestPaymentWallet[9][22][wallet]">
                                <div class="pic"
                                    style="background-image: url(/assets/c20a81c4/img/ps/ETH_ERC20.svg);">
                                </div>
                            </div>
                            <div class="inputLine field-investpaymentwallet-10-23-wallet">
                                <label class="control-label" for="investpaymentwallet-10-23-wallet">TRON</label><input
                                    type="text" id="investpaymentwallet-10-23-wallet" class="form-control"
                                    name="InvestPaymentWallet[10][23][wallet]">
                                <div class="pic"
                                    style="background-image: url(/assets/c20a81c4/img/ps/TRX_TRC20.svg);">
                                </div>
                            </div>
                            <div class="inputLine field-investpaymentwallet-11-24-wallet">
                                <label class="control-label"
                                    for="investpaymentwallet-11-24-wallet">Litecoin</label><input type="text"
                                    id="investpaymentwallet-11-24-wallet" class="form-control"
                                    name="InvestPaymentWallet[11][24][wallet]">
                                <div class="pic"
                                    style="background-image: url(/assets/c20a81c4/img/ps/LTC_LTC.svg);">
                                </div>
                            </div>
                            <div class="inputLine field-investpaymentwallet-14-31-wallet">
                                <label class="control-label"
                                    for="investpaymentwallet-14-31-wallet">Solano</label><input type="text"
                                    id="investpaymentwallet-14-31-wallet" class="form-control"
                                    name="InvestPaymentWallet[14][31][wallet]">
                                <div class="pic"
                                    style="background-image: url(/assets/c20a81c4/img/ps/SOL_BEP20.svg);">
                                </div>
                            </div>
                            <div class="inputLine field-investpaymentwallet-16-26-wallet">
                                <label class="control-label"
                                    for="investpaymentwallet-16-26-wallet">Dogecoin</label><input type="text"
                                    id="investpaymentwallet-16-26-wallet" class="form-control"
                                    name="InvestPaymentWallet[16][26][wallet]">
                                <div class="pic"
                                    style="background-image: url(/assets/c20a81c4/img/ps/DOGE_DOGE.svg);">
                                </div>
                            </div>
                        </div>
                        <button class="btn btnBlue">Save</button>
                    </form>
                </div>
            </div> --}}
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
</script>
</body>

</html>
