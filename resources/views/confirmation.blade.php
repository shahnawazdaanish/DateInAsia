@extends('default')

@section('content')

<div class="container">
    <div class="contentbox">
        <div class="oversize-table">

            <div class="oversize-col-main">

                <script>
                    function EnableAlreadyConfirmed() {
                        $.get("/account/emailverified", function (data) {
                            if (data && data.indexOf("confirmed") != -1) {
                                $("#done").show();
                                $("#todo").hide();
                            } else {
                                setTimeout(EnableAlreadyConfirmed, 30000);
                            }
                        });
                    }

                    EnableAlreadyConfirmed();
                </script>
                <div class="formpage backgroundA">
                    <div id="done" class="hidden">
                        <h1>
						    {{ $username }}, please confirm your email!
						</h1>
                        <p>
                            <a class="bttnf yellowf" href="/"><i class="fa fa-check"></i>Already confirmed</a>
                        </p>
                    </div>
                    <div id="todo">
                        <div id="ContentPlaceHolder1_PanelConfirmEmail">

                            <h1>
						        {{ $username }}, please confirm your email!
						    </h1>
                            <p>
                                We need you to confirm your email address by clicking the link we have sent to <b>{{ $email }}</b>
                            </p>
                            <br />
                            <a class="bttnf yellowf" href="http://www.yopmail.com" target="_blank"><i class="fa fa-envelope-o"></i>Open email</a>


                            <div id="ContentPlaceHolder1_PanelResendLink">

                                <br />
                                <p>

                                    If you don't see the email, check other places it might be, like your junk, spam, social, or other folders.


                                </p>
                                <p>

                                    If the above does not work, you can <a class="text-underline" href="/Confirm?email=twitter_love%40yopmail.com">confirm your email address by sending us an email as shown here</a>.
                                </p>

                            </div>

                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <hr />
                            <p class="fontcolorpale">
                                If {{ $email }} is not your email address, or if you for any other reason are unable to confirm it, you may
                                <a onclick="return confirm(&#39;Are you sure you want to delete your account?&#39;);" id="ContentPlaceHolder1_LinkButtonDeleteAccount" href="javascript:__doPostBack(&#39;ctl00$ContentPlaceHolder1$LinkButtonDeleteAccount&#39;,&#39;&#39;)" style="text-decoration:underline;">delete your account</a> and then try to create a new one with another email address. If you choose to do nothing, your account may be deleted after 7 days by us.
                            </p>

                        </div>


                    </div>
                </div>

            </div>

        </div>
    </div>
</div>




@endsection