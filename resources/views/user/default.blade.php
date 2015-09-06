<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>shathi - I&#39;m looking for a girl for friendship, dating or serious relationship.</title>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    <script src="{{ asset('/js/script.js') }}"></script>
    <meta name="description" content="Important note ( please its not for all girl, not for hurt you. only for those who after money here with out honest relationship) : dont be impatient, gi..." />
    <link rel="P3Pv1" href="w3c/p3p.xml" />
</head>

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
                Sorry... JavaScript must be enabled in order for you to use this site. However, it seems JavaScript is either disabled or not supported by your browser.
            </p>
            <p>
                Please enable JavaScript by changing your browser options, <a href="." class="text-underline">then try again</a>.
            </p>
        </div>
    </noscript>

    <div class="contentwrapper">

        <div class="headerwrapper only-desktop">
            <div class="header container">
                <nav class="clearfix">
                    <div class="logo left">
                        <a title="" href="/Search.aspx?g=2&amp;af=18&amp;at=22&amp;c=PH&amp;ci=cebu">
                            <img src="https://sla.dateinasia.com/Images/logo.png?v=4" alt="DateInAsia.com" />
                        </a>
                    </div>

                    <ul class="left">
                        <li><a href="/shathi"><i class="fa fa-user"></i>Me myself</a>
                        </li>
                        <li><a href="/list/favorites"><i class="fa fa-star"></i>Favorites</a>
                        </li>
                        <li>
                            <a href="/list/interested">
                                <i class="fa fa-heart"></i>Interested
                                <div class="header-badge hidden">
                                    <span id="interestsReceivedUnreadCount">0</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/list/visitors">
                                <i class="fa fa-eye"></i>Visitors
                                <div class="header-badge hidden">
                                    <span id="visitsReceivedUnreadCount">0</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a id="messages-link" href="/messages">
                                <i class="fa fa-comments"></i>Messages
                                <div class="header-badge hidden">
                                    <span id="totalCountInBoxUnread">0</span>
                                </div>
                            </a>
                        </li>
                        <li><a href="/Search.aspx?g=2&amp;af=18&amp;at=22&amp;c=PH&amp;ci=cebu"><i class="fa fa-search"></i>Search</a>
                        </li>
                    </ul>

                    <ul class="right">
                        <li><a href="{{ URL::to('logout') }}">Signout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- //headerwrap -->

        <div class="mobileheader only-mobile">
            <div class="container">
                <ul>
                    <li>
                        <span onclick="$('.mobileheadermore').css('display') === 'none' ? $('.mobileheadermore').show() : $('.mobileheadermore').hide();">
                            <i class="fa fa-bars"></i>
                            <br />
                            More
                        </span>
                    </li>
                    <li>
                        <a href="/list/interested">
                            <i class="fa fa-heart"></i>
                            <div class="mobileheader-badge hidden">
                                <span id="interestsReceivedUnreadCount-mobile">0</span>
                            </div>
                            <br /> Interested
                        </a>
                    </li>
                    <li>
                        <a href="/list/visitors">
                            <i class="fa fa-eye"></i>
                            <div class="mobileheader-badge hidden">
                                <span id="visitsReceivedUnreadCount-mobile">0</span>
                            </div>
                            <br /> Visitors
                        </a>
                    </li>
                    <li>
                        <a id="messages-link-mobile" href="/messages">
                            <i class="fa fa-comments"></i>
                            <div class="mobileheader-badge hidden">
                                <span id="totalCountInBoxUnread-mobile">0</span>
                            </div>
                            <br /> Messages
                        </a>
                    </li>

                    <li>
                        <a href="/Search.aspx?g=2&amp;af=18&amp;at=22&amp;c=PH&amp;ci=cebu">
                            <i class="fa fa-search"></i>
                            <br /> Search
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //Mobile Header -->


        <div class="mobileheader-spacer only-mobile">

        </div>
        <div class="mobileheadermore only-mobile" style="display: none">
            <ul>
                <li><a href="/shathi">Me myself</a>
                </li>
                <li><a href="/list/favorites">My favorites</a>
                </li>
                <li><a href="/list/interestedin">My interests</a>
                </li>
                <li><a href="/list/visits">My visits</a>
                </li>

                <li><a href="/Account/SignOut">Sign Out</a>
                </li>
            </ul>
            <div class="p2x text-center pointer" onclick="$('.mobileheadermore').hide()">
                <i class="fa fa-bars"></i>
            </div>
        </div>
        <div class="only-desktop lastactive">
            <div>
                <span class="ttip">
                    <a href="/princesscj">
                        <img class="smallphoto" src="https://nd.dateinasia.com/Members/Photos/32/4742632_small_635737473441080982.jpg" alt="princesscj" />
                        <span>
                            <b>princesscj</b>, 20<br />Cebu City<br />Philippines
                        </span>
                </a>
                </span>
            </div>
        </div>
        <div class="only-mobile lastactive-mobile">
            <div>
                <a href="/princesscj">
                    <img class="tinyphoto" src="https://nd.dateinasia.com/Members/Photos/32/4742632_small_635737473441080982.jpg" alt="princesscj" />
                </a>
            </div>
        </div>



@yield('content')




        

        <div class="footerwrapper -only-desktop">
            <div class="container">
                <div class="footer">
                    <div class="row">
                        <div class="col-2-of-3">
                            <a href="/Faq.aspx">Help&nbsp;/&nbsp;FAQ&nbsp;/&nbsp;Contact</a>
                            <a href="/Terms.aspx">Terms</a>
                            <a href="/w3c/privacy">Privacy</a>
                            <a href="/w3c/privacy#cookies">Cookies</a>
                            <span class="only-desktop-inline"><a href="/dating">Dating&nbsp;by&nbsp;Top&nbsp;Locations</a></span>
                        </div>
                        <div class="col-1-of-3 mt push-right-on-desktop">
                            Copyright &copy; 2015 DateInAsia.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>