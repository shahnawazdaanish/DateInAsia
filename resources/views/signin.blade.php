
<!DOCTYPE html>
<html>
<head>
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1" />
    <title>DateInAsia.com - Home of Singles in Asia. Asian Dating and Personals.</title>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    <script src="{{ asset('/js/script.js') }}"></script>
    <meta name="description" content="Where are all the Singles in Asia? DateInAsia.com is a Free Asian Dating Site. Meet Singles Online today!" />
    <meta name="google-site-verification" content="csNEKcgzSAorz1xz5mJ7mx9KCpOYAeD1RrMtGVcYkhc" />
    <link rel="P3Pv1" href="w3c/p3p.xml" />
    <style>
        input[type="text"], input[type="password"] {height: 45px; font-size: 14px; padding: 1px 10px 1px 10px; border: solid 1px #bf3952; background-color: #fff6f8; width: 100%; color: #bf3952; -ms-border-radius: 4px; border-radius: 4px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box}
        .wrapper-a {padding: 0 0 60px 0; background-color: #fdb3c4; text-align: center; color: #fff; font-weight: bold}
        nav a {display: inline-block; width: 100%; max-width: 148px; margin: 20px 10px 0 10px; background-color: #bf3952; color: #fff; font-size: 14px; font-weight: bold; -ms-border-radius: 4px; border-radius: 4px; padding: 12px 15px}
        nav a:hover {text-decoration: none}        
        input[type="submit"] {height: 45px; width: 100%; color: #fff; background-color: #bf3952; font-size: 14px; font-weight: bold; border: 0 none #FFF; cursor:pointer; -ms-border-radius: 4px; border-radius: 4px; -webkit-appearance: none; -moz-appearance: none}
        .info { text-align: center; padding: 20px}
        .info p, .info h1, .info h2 {font-family: 'Open Sans', sans-serif; font-weight: 300; margin: 0}
        .info h1, .info h2 {color: rgb(18, 18, 20); letter-spacing: -1px; font-size: 30px; line-height: 1.5em; margin-bottom: 0.7em }
        .info p {font-size: 14px; line-height: 24px; margin-bottom: 20px}
        .info b {font-weight: 600}
        .info strong {font-family: 'Shadows Into Light', sans-serif; font-size: 22px; font-weight: 400; color: #bf3952}
    </style>
</head>
<body class="mainbody">
    <div class="wrapper-a">
        <div class="only-desktop" style="height: 20px"></div>
        <div class="container">
            <div class="row">
                <div class="col-1-of-1" style="padding: 10px 10px 0 10px">
                    <a href="Search.html">
                        <img src="{{ asset('/images/logo_big30f4.png?v=3') }}" alt="Asian Dating" style="max-width: 100%" />
                    </a>
                </div>
            </div>
@if(Session::has('flash_message'))
    {{ Session::get('flash_message') }}
@endif

{{ $id = Auth::id() }}



            {!! Form::open(array('url'=>'signin')) !!}
                <div class="col-center mt mb pb" style="max-width: 180px">
                    <div style="text-align: left">
                        Username or email
                    </div>
                    <div>
                        <input type="text" name="username" value="" />
                    </div>
                    <div class="mt" style="text-align: left">
                        Password
                    </div>
                    <div>
                        <input type="password" name="password" />
                    </div>
                    <div class="mt pt">
                        <input type="submit" value="Sign in" title="Log in" />
                    </div>
                    <div class="mt">
                        <a href="PasswordRequest.html" style="color: #fff; font-size: 12px">
                            Forgot your password?
                        </a>
                    </div>
                </div>
            {!! Form::close() !!}
            <nav>
                    <a href="Search.html">Take&nbsp;a&nbsp;look</a>
                <a href="{{ URL::to('signup') }}">Join&nbsp;/&nbsp;Sign&nbsp;up</a>
            </nav>
        </div>
    </div>
    
    <div style="background-color: #fff">
        <div class="container">
            <div class="info">
                <div class="row">        
                    <div class="col-1-of-2">
                        <div class="col-center" style="max-width: 440px">
                            <h2>
                                Welcome to our <b>Dating Site</b>
                            </h2>
                            <p>
                                DateInAsia.com is a <strong>Dating&nbsp;Site</strong>,<br />but you can also <strong>find&nbsp;Friends</strong>
                                here. Our focus is on <strong>Asia</strong>, but we are not just an <strong><span style="letter-spacing: 1px">Asian</span> Dating</strong>
                                site.
                                Anyone can join our site regardless of nationality and ethnicity. This site
                                is for people living in Asia (Asians or non-Asians) and people with a special
                                interest for and/or attachment to Asia.
                            </p>
                            <p>
                                Try our site, it's free. We will not charge you to send messages or anything like that.
                                When we say free, we mean <strong>100%&nbsp;FREE!</strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-1-of-2">
                        <div class="col-center" style="max-width: 440px">
                            <h1>
                                Where are all the <b>Singles in Asia</b>?
                            </h1>
                            <p>
                                In our site you can publish a profile, browse or search for other members, and
                                message with the ones you like. That's it. No more, no less. But that's all you
                                need, isn't it?
                            </p>
                            <p>
                                This is a <strong>Free&nbsp;Dating&nbsp;Site</strong>, not an agency.
                                In our site you must help yourself.
                                But if you are OK with that (and if you are nice and awesome), then hundreds of thousands of nice and awesome members are
                                <strong>waiting&nbsp;to&nbsp;meet&nbsp;YOU&nbsp;:)</strong>
                            </p>
                        </div>
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
                            <span class="only-desktop-inline"><a href="dating.html">Dating&nbsp;by&nbsp;Top&nbsp;Locations</a></span>
                    </div>
                    <div class="col-1-of-3 mt push-right-on-desktop">
                        Copyright &copy; 2015 DateInAsia.com
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-496834-1', 'auto');
            ga('send', 'pageview');
        </script>


</body>
</html>
