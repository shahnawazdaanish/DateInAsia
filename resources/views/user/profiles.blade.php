@extends('user.default')


@section('content')

<div class="container">
    <div class="contentbox">
        <div class="oversize-table">
            <div class="oversize-col-main">

                <script>
                    addOnLoadEvent(updateTimestamps);
                </script>


                <div style="max-width: 1090px">
                    <div class="ad-container ad-container-no-desktop-margin">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4093901704491557" data-ad-slot="9639653565" data-ad-format="horizontal"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({
                                params: {
                                    google_ad_channel: '1380915165'
                                }
                            });
                        </script>
                    </div>
                </div>
                <div class="only-desktop">
                    <div class="flexi-table">
                        <div>
                            <div style="font-size: 2em; line-height: 2">
                                shathi, 39
                            </div>
                            <div class="text-pale">
                                <span style="color: #3A0">&#9679; Online Now!</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row page-userprofile">
                    <div class="col-40percent">
                        <div class="text-center mbs" style="background-color: #000">
                            <style>
                                .responsive-image-local {
                                    width: 480px;
                                    max-width: 100%;
                                    height: auto;
                                }
                                .responsive-image-local-container-wrapper {
                                    display: inline-block;
                                    width: 480px;
                                    max-width: 100%;
                                    vertical-align: bottom;
                                }
                                .responsive-image-local-container {
                                    width: 480px;
                                    max-width: 100%;
                                    height: 0;
                                    padding-bottom: 125.894736842105%;
                                    background-color: #F6F5F5;
                                }
                            </style>
                            <a href="https://nd.dateinasia.com/Members/Photos/55/4405055_635704457804595041.jpg">
                                <div class="responsive-image-local-container-wrapper">
                                    <div class="responsive-image-local-container">
                                        <img class="responsive-image-local" src="https://nd.dateinasia.com/Members/Photos/55/4405055_profile_635704457804595041.jpg" alt="shathi" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="only-mobile" style="position: relative">
                            <div class="pl pr" style="-webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: absolute; top: -55px; width: 100%; height: 50px; background: #000000; background: rgba(0, 0, 0, 0.5)">
                                <div style="color: #fff; font-size: 20px">

                                    shathi, 39

                                </div>
                                <div style="color: #fff; font-size: 12px">
                                    <span style="color: #3A0">&#9679; Online Now!</span>
                                </div>
                            </div>
                        </div>

                        <div class="innercontentbox">
                            <div class="row-compact">
                                <div class="col-1-of-2-no-collapse">
                                    <a class="bttnf bttnf-fullwidth yellowf" href="/Photos">Manage Photo</a>
                                </div>
                                <div class="col-1-of-2-no-collapse">
                                    <a class="bttnf bttnf-fullwidth yellowf" href="EditUserProfile.aspx">Edit Profile</a>
                                </div>
                            </div>
                        </div>

                        <div class="innercontentbox">
                            <div class="row-compact">
                                <div class="col-1-of-1">
                                    <span class="bttnf bttnf-fullwidth yellowf" onclick="$(this).hide(); $('#settings-panel').show();">Settings</span>
                                </div>
                            </div>
                            <div class="hidden" id="settings-panel">
                                <h2>
                                    Settings
                                </h2>
                                <div class="pl pr borderDDD">
                                    <p>
                                        email:
                                        <a href="/ChangeEmail.aspx" class="">Confirmed</a>
                                    </p>
                                    <p>
                                        <label for="checkboxnotifications">Send me email notifications</label>
                                        <input type="checkbox" style="margin: 0 3px" id="checkboxnotifications" checked="checked" onclick="notifyByEmail(this.checked)" />
                                        <span id="emailnotificationssetstatus" class="ml"></span>
                                    </p>
                                    <p>
                                        My profile is
                                        <input class="ml" name="radiostatus" id="radiohidden" type="radio" onclick="hideProfile(true)" />
                                        <label for="radiohidden" style="margin: 0 10px 0 3px">Hidden</label>
                                        <input name="radiostatus" id="radiovisible" type="radio" checked onclick="hideProfile(false)" />
                                        <label for="radiovisible" style="margin: 0 3px">Visible</label>
                                        <span id="profilehidesetstatus" class="ml"></span>
                                    </p>
                                    <p>
                                        <a href="/ChangePassword.aspx">Change my password</a>
                                    </p>
                                    <p>
                                        <a href="/list/blocked">Blocked members</a>
                                    </p>
                                    <p>
                                        <a href="/DeleteAccount.aspx" class="fontcolorpale">Delete my Account</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div style="max-width: 406px">
                            <div class="ad-container">
                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4093901704491557" data-ad-slot="9639653565" data-ad-format="rectangle"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({
                                        params: {
                                            google_ad_channel: '8764581160'
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="only-desktop">
                            <h2>Lists</h2>
                            <p>
                                <a href="/list/interested">Who's interested?</a>
                                <br />
                                <a href="/list/interestedin">Who am i interested in?</a>
                                <br />
                                <a href="/list/favorites">My favorites</a>
                                <br />
                                <a href="/list/visitors">Visitors</a>
                                <br />
                                <a href="/list/visits">My visits</a>

                            </p>
                        </div>
                    </div>
                    <div class="col-60percent">
                        <div class="row only-desktop">
                            <div class="col-1-of-2">
                                <h2 style="margin-top: 0; line-height: 1">
                                Visitors to my profile
                            </h2>
                                <br />
                                <div class="fixed-table mbs">
                                    <div>
                                        <div class="pr">
                                            <a class="thumbnail" href="/sophiaque">
                                                <img src="https://nd.dateinasia.com/Members/Photos/27/2981527_gallery_635762680996771892.jpg" alt="" class="tinyphoto" />
                                                <span><img src="https://nd.dateinasia.com/Members/Photos/27/2981527_gallery_635762680996771892.jpg" alt="" /></span>
                                            </a>
                                        </div>
                                        <div style="vertical-align: middle; width: 100%">
                                            <div>
                                                <a class="text-no-underline-on-hover" href="/sophiaque"><b>sophiaque</b></a>, 39
                                                <img alt="New" src="https://sla.dateinasia.com/Images/new.gif" style="vertical-align: middle" />
                                            </div>
                                            <div class="meta">
                                                Singapore
                                            </div>
                                            <span data-o="55600" data-co="0" class="timestamp metalight">
                                                15h, 26m ago
                                            </span>
                                            <a href="/Account/ListDelete/2969541468"><i title="Delete" class="mls metalight text-red-on-hover fa fa-times-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fixed-table mbs">
                                    <div>
                                        <div class="pr">
                                            <a class="thumbnail" href="/siroyo">
                                                <img src="https://sla.dateinasia.com/Members/Photos/68/4799868_gallery_635768323979255174.jpg" alt="" class="tinyphoto" />
                                                <span><img src="https://sla.dateinasia.com/Members/Photos/68/4799868_gallery_635768323979255174.jpg" alt="" /></span>
                                            </a>
                                        </div>
                                        <div style="vertical-align: middle; width: 100%">
                                            <div>
                                                <a class="text-no-underline-on-hover" href="/siroyo"><b>siroyo</b></a>, 41
                                            </div>
                                            <div class="meta">
                                                Seoul-T&#39;ukpyolsi, Korea
                                            </div>
                                            <span data-o="98468" data-co="0" class="timestamp metalight">
                                                1d, 3h ago
                                            </span>
                                            <a href="/Account/ListDelete/3069410822"><i title="Delete" class="mls metalight text-red-on-hover fa fa-times-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fixed-table mbs">
                                    <div>
                                        <div class="pr">
                                            <a class="thumbnail" href="/Michelle32">
                                                <img src="https://nd.dateinasia.com/Members/Photos/35/4551035_gallery_635745565339291449.jpg" alt="" class="tinyphoto" />
                                                <span><img src="https://nd.dateinasia.com/Members/Photos/35/4551035_gallery_635745565339291449.jpg" alt="" /></span>
                                            </a>
                                        </div>
                                        <div style="vertical-align: middle; width: 100%">
                                            <div>
                                                <a class="text-no-underline-on-hover" href="/Michelle32"><b>Michelle32</b></a>, 33
                                            </div>
                                            <div class="meta">
                                                Catanduanes, Singapore
                                            </div>
                                            <span class="metalight">
                                                28 Aug 2015
                                            </span>
                                            <a href="/Account/ListDelete/3061727011"><i title="Delete" class="mls metalight text-red-on-hover fa fa-times-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fixed-table mbs">
                                    <div>
                                        <div class="pr">
                                            <a class="thumbnail" href="/rose_dabalos">
                                                <img src="https://nd.dateinasia.com/Members/Photos/66/4603066_gallery_635733865681948707.jpg" alt="" class="tinyphoto" />
                                                <span><img src="https://nd.dateinasia.com/Members/Photos/66/4603066_gallery_635733865681948707.jpg" alt="" /></span>
                                            </a>
                                        </div>
                                        <div style="vertical-align: middle; width: 100%">
                                            <div>
                                                <a class="text-no-underline-on-hover" href="/rose_dabalos"><b>rose_dabalos</b></a>, 23
                                            </div>
                                            <div class="meta">
                                                Cebu, Philippines
                                            </div>
                                            <span class="metalight">
                                                21 Aug 2015
                                            </span>
                                            <a href="/Account/ListDelete/3053290078"><i title="Delete" class="mls metalight text-red-on-hover fa fa-times-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fixed-table mbs">
                                    <div>
                                        <div class="pr">
                                            <a class="thumbnail" href="/rosellie94">
                                                <img src="https://nd.dateinasia.com/Members/Photos/74/3873074_gallery_635562992182879659.jpg" alt="" class="tinyphoto" />
                                                <span><img src="https://nd.dateinasia.com/Members/Photos/74/3873074_gallery_635562992182879659.jpg" alt="" /></span>
                                            </a>
                                        </div>
                                        <div style="vertical-align: middle; width: 100%">
                                            <div>
                                                <a class="text-no-underline-on-hover" href="/rosellie94"><b>rosellie94</b></a>, 20
                                            </div>
                                            <div class="meta">
                                                Cebu City, Philippines
                                            </div>
                                            <span class="metalight">
                                                20 Aug 2015
                                            </span>
                                            <a href="/Account/ListDelete/2812219153"><i title="Delete" class="mls metalight text-red-on-hover fa fa-times-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fixed-table mbs">
                                    <div>
                                        <div class="pr">
                                            <a class="thumbnail" href="/rizacasipong12">
                                                <img src="https://nd.dateinasia.com/Members/Photos/66/4617966_gallery_635721542685634437.jpg" alt="" class="tinyphoto" />
                                                <span><img src="https://nd.dateinasia.com/Members/Photos/66/4617966_gallery_635721542685634437.jpg" alt="" /></span>
                                            </a>
                                        </div>
                                        <div style="vertical-align: middle; width: 100%">
                                            <div>
                                                <a class="text-no-underline-on-hover" href="/rizacasipong12"><b>rizacasipong12</b></a>, 25
                                            </div>
                                            <div class="meta">
                                                Cebu, Philippines
                                            </div>
                                            <span class="metalight">
                                                8 Aug 2015
                                            </span>
                                            <a href="/Account/ListDelete/2959564840"><i title="Delete" class="mls metalight text-red-on-hover fa fa-times-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="/list/visitors">More visitors...</a>
                            </div>
                            <div class="col-1-of-2">
                                <h2 style="margin-top: 0; line-height: 1">
                                Interested in me
                            </h2>
                                <br />
                                <div class="fixed-table mbs">
                                    <div>
                                        <div class="pr">
                                            <a class="thumbnail" href="/iloveyou2015">
                                                <img src="https://nd.dateinasia.com/Members/Photos/99/4512299_gallery_635639052455222188.jpg" alt="" class="tinyphoto" />
                                                <span><img src="https://nd.dateinasia.com/Members/Photos/99/4512299_gallery_635639052455222188.jpg" alt="" /></span>
                                            </a>
                                        </div>
                                        <div style="vertical-align: middle; width: 100%">
                                            <div>
                                                <a class="text-no-underline-on-hover" href="/iloveyou2015"><b>iloveyou2015</b></a>, 22
                                            </div>
                                            <div class="meta">
                                                Cebu, Philippines
                                            </div>
                                            <span class="metalight">
                                                14 Jun 2015
                                            </span>
                                            <a href="/Account/ListDelete/2970177838"><i title="Delete" class="mls metalight text-red-on-hover fa fa-times-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fixed-table mbs">
                                    <div>
                                        <div class="pr">
                                            <a class="thumbnail" href="/pretty_mhel">
                                                <img src="https://nd.dateinasia.com/Members/Photos/04/957104_gallery_635068923270000000.jpg" alt="" class="tinyphoto" />
                                                <span><img src="https://nd.dateinasia.com/Members/Photos/04/957104_gallery_635068923270000000.jpg" alt="" /></span>
                                            </a>
                                        </div>
                                        <div style="vertical-align: middle; width: 100%">
                                            <div>
                                                <a class="text-no-underline-on-hover" href="/pretty_mhel"><b>pretty_mhel</b></a>, 25
                                            </div>
                                            <div class="meta">
                                                Cebu City, Philippines
                                            </div>
                                            <span class="metalight">
                                                27 Jan 2015
                                            </span>
                                            <a href="/Account/ListDelete/2804022183"><i title="Delete" class="mls metalight text-red-on-hover fa fa-times-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fixed-table mbs">
                                    <div>
                                        <div class="pr">
                                            <a class="thumbnail" href="/Jovelyn18">
                                                <img src="https://nd.dateinasia.com/Members/Photos/20/4373920_gallery_635761468690138770.jpg" alt="" class="tinyphoto" />
                                                <span><img src="https://nd.dateinasia.com/Members/Photos/20/4373920_gallery_635761468690138770.jpg" alt="" /></span>
                                            </a>
                                        </div>
                                        <div style="vertical-align: middle; width: 100%">
                                            <div>
                                                <a class="text-no-underline-on-hover" href="/Jovelyn18"><b>Jovelyn18</b></a>, 20
                                            </div>
                                            <div class="meta">
                                                Cebu, Philippines
                                            </div>
                                            <span class="metalight">
                                                9 Jan 2015
                                            </span>
                                            <a href="/Account/ListDelete/2782123279"><i title="Delete" class="mls metalight text-red-on-hover fa fa-times-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="fixed-table mbs">
                                    <div>
                                        <div class="pr">
                                            <a class="thumbnail" href="/cute_rizel">
                                                <img src="https://nd.dateinasia.com/Members/Photos/77/3814577_gallery_635566504214375622.jpg" alt="" class="tinyphoto" />
                                                <span><img src="https://nd.dateinasia.com/Members/Photos/77/3814577_gallery_635566504214375622.jpg" alt="" /></span>
                                            </a>
                                        </div>
                                        <div style="vertical-align: middle; width: 100%">
                                            <div>
                                                <a class="text-no-underline-on-hover" href="/cute_rizel"><b>cute_rizel</b></a>, 29
                                            </div>
                                            <div class="meta">
                                                Cagayan De Oro, Philippines
                                            </div>
                                            <span class="metalight">
                                                6 Jan 2015
                                            </span>
                                            <a href="/Account/ListDelete/2778143723"><i title="Delete" class="mls metalight text-red-on-hover fa fa-times-circle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="innercontentbox">
                            <h1>
                            <i class="text-important fa fa-quote-left pull-left" style="font-size: 1.5em; padding-left: 1px"></i>I&#39;m looking for a girl for friendship, dating  or serious relationship.
                        </h1>
                            <h2>
                            Location
                        </h2>
                            <p>
                                <a class="text-no-underline-on-hover" target="_googlemaps" href="https://www.google.com/maps/place/Selegie%2c+Singapore">
                                    <i class="fa fa-map-marker fa-lg text-info" style="padding-left: 1px">&nbsp;</i> Selegie, Singapore
                                </a>
                            </p>
                            <h2>
                            I'm here to
                        </h2>
                            <p>

                                I'm here to meet girls from 20 to 28 years old for dating, friendship, serious relationship and networking.

                            </p>

                            <h2>About me</h2>
                            <p>
                                Important note ( please its not for all girl, not for hurt you. only for those who after money here with out honest relationship) : dont be impatient, give time to mature the relation. don&#39;t ask for help (money) at early. a matured relationship must feel each other from heart and wish to help each other naturally. so asking money early is a stupid behavior and guys hate it.
                                <br />
                                <br />I believe, Good relationships often start with good friendships. It all develops step by step. It&#39;s OK to take things slowly and think about each step even though the idea of a relationship can be so exciting and it&#39;s tempting to rush forward. So I try to be sensitive about where the other person is at in regard to this relationship. I Don&#39;t like rush to the other person into anything.
                                <br />
                                <br />I Forgot everything about myself, May be I&#39;m no-body now. But I&#39;m Very simple and quick learner. I do respect relation and people.I love chill and like long drive, enjoy fun and....
                            </p>
                        </div>

                        <div class="innercontentbox">
                            <h2>
                            About you
                        </h2>
                            <p>
                                i&#39;m looking for the person, who is educated, kind, patient smart and friendly , do respect and care. Sincere and serious. i have plan to relocate in cebu very soon and I&#39;m looking for someone special in my life.
                                <br />
                                <br />im not here to play or waste time... If your here to play please be sure i&#39;m not for you.
                                <br />Hope i could able to find here a girl, who know love and who like to be loved seriously.
                                <br />
                                <br />finally, i dont need someone to complete me.i only need someone to accept me completely.
                                <br />Thanks and love.
                            </p>
                        </div>

                        <div class="innercontentbox">
                            <h2>
                            Personal info
                        </h2>
                            <div class="profilesummary">
                                <dl>
                                    <dt>Gender:</dt>
                                    <dd>Male</dd>
                                    <dt>Appearance:</dt>
                                    <dd>Attractive
                                        <br />Asian, 167cm (5&#39;6&quot;), 54kg (119lbs), average body type, black eyes and black hair.</dd>
                                </dl>
                                <br />
                                <dl>
                                    <dt>Occupation:</dt>
                                    <dd>IT Professional</dd>
                                    <dt>Education:</dt>
                                    <dd>University - Graduated</dd>
                                    <dt>Religion:</dt>
                                    <dd>Islam - Sunni</dd>
                                </dl>
                                <br />
                                <dl>
                                    <dt>Relationship status:</dt>
                                    <dd>Single</dd>
                                    <dt>Has children:</dt>
                                    <dd>Yes (Doesn&#39;t live with)</dd>
                                    <dt>Wants children:</dt>
                                    <dd>Undecided</dd>
                                    <dt>Willing to relocate:</dt>
                                    <dd>Not sure</dd>
                                    <dt>Smoking:</dt>
                                    <dd>Yes</dd>
                                    <dt>Drinking:</dt>
                                    <dd>Light / social drinker</dd>
                                </dl>
                            </div>

                            <h2>Stats</h2>
                            <ul class="fa-ul" style="margin-left: 23px">
                                <li>
                                    <i class="fa fa-li fa-certificate fa-lg text-pale"></i> Visitors today: 1
                                </li>
                                <li>
                                    <i class="fa fa-li fa-certificate fa-lg text-pale"></i> Visitors last 30 days: 6
                                </li>
                                <li>
                                    <i class="fa fa-li fa-certificate fa-lg text-pale"></i> Interests received today: 0
                                </li>
                                <li>
                                    <i class="fa fa-li fa-certificate fa-lg text-pale"></i> Interests received last 30 days: 0
                                </li>
                            </ul>
                            <p class="text-pale">
                                Only high stats (stats marked with golden seals) are shown to others. High stats are best achieved by using a respectable photo of yourself, by writing a good, informative and friendly profile, and by visiting and messaging other members. The more active you are, the more you will get noticed. Less active profiles are less visible on this site.
                            </p>
                            <br />
                            <br />
                        </div>
                    </div>
                </div>
            </div>
            <div class="oversize-col-right">
                <div class="ad-container ad-container-no-desktop-margin">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4093901704491557" data-ad-slot="9639653565" data-ad-format="vertical"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({
                            params: {
                                google_ad_channel: '2489723565'
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    </div>





@endsection