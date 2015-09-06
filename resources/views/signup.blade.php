

<!DOCTYPE html>


<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <title>
    	Sign Up - DateInAsia.com
    </title>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    <script src="{{ asset('/js/script.js') }}"></script>
    <link rel="P3Pv1" href="w3c/p3p.xml" />
<meta name="description" content="Join DateInAsia for free now!" /></head>
<body class="mainbody">
    
        <noscript>
            <style type="text/css">
                .contentwrapper {
                    display: none;
                }
            </style>
            <div class="p">
                <h1>Uh-oh!</h1>
                <p>
                    Sorry... JavaScript must be enabled in order for you to use this site.
                    However, it seems JavaScript is either disabled or not supported by your browser.
                </p>
                <p>
                    Please enable JavaScript by changing your browser options, <a href=".html" class="text-underline">then try again</a>.
                </p>
            </div>
        </noscript>


<script src="{{ asset('/js/WebResource66e4.js?d=pynGkmcFUV13He1Qd6_TZCN2LLn4dtGevR8x57_bkcu_a8E8mS5qqRLytB9WKy1ZInWE6dRvIQ7211ZtFTtbcA2&amp;t=635705159995571078') }}" type="text/javascript"></script>

<script src="{{ asset('/js/WebResource08a2.js?d=x2nkrMJGXkMELz33nwnakKuooUqc7YL_81i2sqRCz6ncVFhsVWGerf1eJSMFjLI4w0O3TyM9SuOAiKJuyi-qgVFD0Zfs1jBT5czvhCR888Q1&amp;t=635705159995571078') }}" type="text/javascript"></script>
<style type="text/css">
    .error {
        color: red;
    }
</style>


        <div class ="contentwrapper">
            <div class="headerwrapper only-desktop">
                <div class="container header">
                    <nav class="clearfix">
                        <div class="logo left">
                            <a title='Asian Dating' href='Search.html'>
                                <img src="{{ asset('/images/logo7b30.png?v=4') }}" alt="DateInAsia.com" />
                            </a>
                        </div>

                        <ul class="left">
                            
                            <li><a href="Search.html"><i class="fa fa-search"></i>Search</a></li>
                            
                        </ul>
                        
                        <ul class="right">
                            
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="mobileheader only-mobile">
                <div class="container">
                    
                        <div class="logo left">
                            <a title='Asian Dating' href='Search.html'>
                                <img src="{{ asset('/images/logo7b30.png?v=4') }}" alt="DateInAsia.com" />
                            </a>
                        </div>
                    
                </div>
            </div>
            <div class="mobileheader-spacer only-mobile"></div>
            
                <div>
                    
                    <div class="lastactive only-desktop">
                        
                        <div>
                            <span class="ttip">
                                <a href="benag26.html">
                                    <img class="smallphoto" src="../sla.dateinasia.com/Members/Photos/13/3532813_small_635756928366986725.jpg" alt="benag26" />
                                    
                                    <span>
                                        <b>benag26</b>, 31<br />Pasay<br />Philippines
                                    </span>
                                    
                                </a>
                            </span>
                        </div>
                        
                    </div>
                    <div class="only-mobile lastactive-mobile">
                        
                        
                            <div>
                                <a href="benag26.html">
                                    <img class="tinyphoto" src="../sla.dateinasia.com/Members/Photos/13/3532813_small_635756928366986725.jpg" alt="benag26" />
                                </a>
                            </div>
                        
                    </div>
                    
                </div>
            
            
            
            
            <div class="container">
                <div class="contentbox">
                    <div class="oversize-table">
                        
                        <div class="oversize-col-main">
                            
    
    
    
    <style>
        [id^="ContentPlaceHolder1_ctl"] {
            color: red;
            font-size: 11px;
        }
        .mobileheader {
            position: relative;
        }
        .mobileheader-spacer {
            display: none;
        }
    </style>
    
    <div class="formpage backgroundA">

        {!! Form::open(array('url'=>'signup', 'id'=>'signup_form')) !!}

        <div id="firststep">
            
            <h1 style="font-size: 2.5em">
                
                Join DateInAsia now - it's 100% free!
            </h1>
            
            <p>
                Many other sites claim to be free, but once you sign up you realize that they charge even for the most basic features such as messaging, viewing who has visited your profile and so on.
                None of those trickeries here. This is a no-nonsense free site. When we say free, we mean free. Period.
            </p>
            <br />
            <div class="flexi-table">
                <div>
                    <span style="width: 150px">Username</span>
                    <div class="wide">
                        <input name="username" id="username" type="text" maxlength="20" id="" required>
                        <br />
                        <span id="ContentPlaceHolder1_ctl00" style="display:none;">Choose a Username</span>
                        <div id="duplicateusernamewarning" class="text-warning text-small"></div>
                    </div>
                </div>
                <div>
                    <span>Password</span>
                    <div class="wide">
                        <input name="password" type="password" id="password" required>
                        <br />
                        <span id="ContentPlaceHolder1_ctl01" style="display:none;">Choose a password</span>
                        <div id="weakpasswordwarning" class="text-warning text-small"></div>
                        <div id="passwordinfo"></div>    
                    </div>
                </div>
                <div>
                    <span>Your Email</span>
                    <div class="wide">
                        <input name="email" type="email" id="email" required>
                        <div id="emailinfo" class="mts hidden text-small"><i class="fa fa-info-circle fa-lg">&nbsp;&nbsp;</i>We will send you a confirmation email. It is not possible to sign up with an incorrect email address.</div>
                        <br />
                        <span id="ContentPlaceHolder1_ctl02" style="display:none;">Enter your email</span>
                        <div id="invalidemailwarning" class="text-warning text-small"></div>
                    </div>
                </div>
                <div>
                    <span>Birth Date</span>
                    <div>
                        <span class="auto-width">
                            <select name="b_day" id="">
                            	<option value="0"></option>
                            	<option value="1">1</option>
                            	<option value="2">2</option>

                            </select>
                            <span id="ContentPlaceHolder1_ctl03" style="display:none;">*</span>
                        </span>
                        <span class="auto-width">
                            <select name="b_month" id="">
                            	<option value="0"></option>
                            	<option value="1">January</option>
                            	<option value="2">February</option>

                            </select>
                            <span id="ContentPlaceHolder1_ctl04" style="display:none;">*</span>
                        </span>
                        <span class="auto-width">
                            <select name="b_year" id="">
                            	<option value="0"></option>
                            	<option value="2015">2015</option>
                            	<option value="2014">2014</option>
                            	<option value="2013">2013</option>

                            </select>
                            <span id="ContentPlaceHolder1_ctl05" style="display:none;"><br />Please input your birth date</span>
                        </span>
                    </div>
                </div>            
                <div>                
                    <span>Country</span>
                    <div class="wide">
                        <select name="country" id="" required>
                        	<option value=""></option>
                        	<option selected="selected" value="BD">Bangladesh</option>
                        	<option value="">-</option>
                        	<option value="BT">Bhutan</option>
                        	<option value="KH">Cambodia</option>
                        	<option value="CN">China</option>
                        	<option value="HK">Hong Kong</option>
                        	<option value="ID">Indonesia</option>
                        </select>
                        <br />
                        <span id="ContentPlaceHolder1_ctl06" style="display:none;">Please select your country</span>
                    </div>
                </div>
                <div id="region-select-gb" class="hidden" style="display: none">
                    <span id="regionlabel-gb">Province</span>
                    <div class="wide">
                        <select name="" id="">
                        	<option value=""></option>
                        	<option value="England">England</option>
                        	<option value="Scotland">Scotland</option>
                        	<option value="Wales">Wales</option>
                        	<option value="Northern Ireland">Northern Ireland</option>

                        </select>
                        <br />
                        <span id="ContentPlaceHolder1_ctl07" style="display:none;">Please select your constituent country</span>
                    </div>
                </div>
                <div id="region-select-us" class="hidden" style="display: none">
                    <span id="regionlabel-us">Province</span>
                    <div class="wide">
                        <select name="" id="">
                        	<option value=""></option>
                        	<option value="Alaska">Alaska</option>
                        </select>
                        <br />
                        <span id="ContentPlaceHolder1_ctl08" style="display:none;">Please select your state</span>
                    </div>
                </div>
                <div>                
                    <span>City</span>
                    <div class="wide">
                        <input name="city" type="text" value="Tungi" maxlength="50" id="" />
                        <br />
                        <span id="ContentPlaceHolder1_ctl09" style="display:none;">Please input your city</span>
                    </div>
                </div>
                <div id="region-type">
                    <span id="regionlabel-default">Province</span>
                    <div class="wide">
                        <input name="province" type="text" value="Dhaka" maxlength="50" id="" />
                        <br />
                        
                        <span id="ContentPlaceHolder1_ctl10" style="display:none;">Please input your province</span>
                    </div>
                </div>
                <div>
                    <span>I am a</span>
                    <div class="wide">
                        <select name="gender" id="" required>
                        	<option value="0"></option>
                        	<option value="1">Male</option>
                        	<option value="2">Female</option>

                        </select>
                        <br />
                        <span id="ContentPlaceHolder1_ctl11" style="display:none;">Please input your gender</span>
                    </div>
                </div>
                <div>
                    <span>Looking for a</span>
                    <div class="wide">
                        <select name="looking_for" id="" required>
                        	<option value="0"></option>
                        	<option value="1">Male</option>
                        	<option value="2">Female</option>
                        	<option value="3">Male or Female</option>

                        </select>
                        <br />
                        <span id="ContentPlaceHolder1_ctl12" style="display:none;">Please input which gender(s) you are looking for</span>
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-1-of-2">
                    <p>
                        By signing up, I affirm that I 
                        am at least 18 years old, that I will be nice, and that I have read and agree to the
                        <a href="terms-2.html" style="text-decoration: underline" target="_blank">Terms of Use</a> and
                        <a href="w3c/privacy.html" style="text-decoration: underline" target="_blank">Privacy Policy</a>, including
                        <a href="w3c/privacy.html#cookies" style="text-decoration: underline" target="_blank">Cookie Use</a>.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    
                    <button id="proceed_signup" type="button" class="bttnf yellowf" style="line-height: 50px; height: 50px; width: 200px">Sign up!</button>
                </div>
            </div>
            <div class="row">
                <div class="col-1-of-2">
                    <span id="ContentPlaceHolder1_CustomErrorMessage" class="text-error"></span>
                </div>
            </div>
            <div id="ContentPlaceHolder1_ctl13" style="display:none;">

</div>
        </div>

        <div class="hidden" id="secondstep">
            <div class="row">
                <div class="col-1-of-2">
                    <h1>
                        Please repeat your email address
                    </h1>
                    <p>
                        This is important as we will send you a confirmation email, and we want to make absolutely sure that your email address is correct.
                    </p>
                </div>
            </div>
            <div class="flexi-table">
                <div>
                    <span style="width: 150px">Repeat your Email</span>
                    <div class="wide">
                        <input name="repeat_email" type="email" id="repeat_email" />
                    </div>
                </div>
                <div>
                    <span>
                    </span>
                    <div>
                        <br />
                        
                        <input type="submit" name="" value="Continue" class="bttnf yellowf" style="line-height: 50px; height: 50px; width: 200px" />
                    </div>
                </div>
            </div>
        </div>

        {!! Form::close() !!}

    </div>

                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="footerwrapper">
                <div class="container">
                    <div class="footer">
                        <div class="row">
                            <div class="col-2-of-3">
                                <a href="Faq.html">Help&nbsp;/&nbsp;FAQ&nbsp;/&nbsp;Contact</a>
                                <a href="Terms.html">Terms</a>
                                <a href="w3c/privacy.html">Privacy</a>
                                <a href="w3c/privacy.html#cookies">Cookies</a>
                                
                                <span class="only-desktop-inline"><a href="dating.html">Dating by Top Locations</a></span>
                                
                            </div>
                            <div class="col-1-of-3 mt push-right-on-desktop">
                                Copyright &copy; 2015 DateInAsia.com
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>  
    <script src="{{ asset('/plugins/jquery-validation/jquery.validate.min.js') }}"></script>  
    <script src="{{ asset('/js/custom.js') }}"></script>
    
</body>
</html>