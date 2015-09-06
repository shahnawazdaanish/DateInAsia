@extends('default')

@section('content')
           
<div class="container">
    <div class="contentbox">
        <div class="oversize-table">

            <div class="oversize-col-main">
                <div class="formpage backgroundA">

                    <h1>
                    <span id="ContentPlaceHolder1_FormViewUserProfile_LabelHeadline">Now just complete this page and your profile is ready. Promise!</span>
                </h1>
                    <br />
                    <div class="p2x" style="max-width: 650px; border: 1px dashed #333">
                        <ul class="fa-ul">
                            <li><i class="fa-li fa fa-thumbs-up fa-lg text-pale"></i>Please keep your profile clean and friendly.
                                <br />
                                <br />
                            </li>
                            <li><i class="fa-li fa fa-warning fa-lg text-pale"></i> No links to other sites, profanities, offensive, dirty or sex(ual) language/topic is allowed.
                                <br />
                                <br /> There are no exceptions to this rule. Context/intention does not matter. For example, the statements <i>"I am looking for sex"</i> and <i>"I am <b>not</b> looking for sex"</i> will <span class="text-underline">both</span> be trapped by our filters and your profile may either be automatically denied, subjected to manual approval by a moderator (which may take several days), or closed without any further warnings.
                                <br />
                                <br />

                            </li>
                            <li><i class="fa-li fa fa-language fa-lg text-pale"></i>Please use only English language.</li>
                        </ul>
                    </div>

                    <h2>
                    1. About yourself:
                </h2>
                    <br />
                    <br />
                    <div style="display: none">
                        <div class="flexi-table">
                            <div>
                                <span>Your Gender</span>
                                <div>
                                    <span>
                                <select name="ctl00$ContentPlaceHolder1$FormViewUserProfile$GenderIdDropDownList" id="ContentPlaceHolder1_FormViewUserProfile_GenderIdDropDownList">
                                    <option value="0"></option>
                                    <option selected="selected" value="1">Male</option>
                                    <option value="2">Female</option>

                                </select>
                                <br />
                                <span id="ContentPlaceHolder1_FormViewUserProfile_ctl01" style="display:none;">Please tell us your gender</span>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <span>Birth Date</span>
                                <div>
                                    <span class="auto-width">
                                <select name="ctl00$ContentPlaceHolder1$FormViewUserProfile$DayDropDownList" id="ContentPlaceHolder1_FormViewUserProfile_DayDropDownList">
                                    <option value="0"></option>
                                    <option value="1">1</option>
                                    <option selected="selected" value="31">31</option>

                                </select>
                                <span id="ContentPlaceHolder1_FormViewUserProfile_ctl02" style="display:none;">*</span>
                                    </span>
                                    <span class="auto-width">
                                <select name="ctl00$ContentPlaceHolder1$FormViewUserProfile$MonthDropDownList" id="ContentPlaceHolder1_FormViewUserProfile_MonthDropDownList">
                                    <option value="0"></option>
                                    <option value="1">January</option>
                                    <option selected="selected" value="12">December</option>

                                </select>
                                <span id="ContentPlaceHolder1_FormViewUserProfile_ctl03" style="display:none;">*</span>
                                    </span>
                                    <span class="auto-width">
                                <select name="ctl00$ContentPlaceHolder1$FormViewUserProfile$YearDropDownList" id="ContentPlaceHolder1_FormViewUserProfile_YearDropDownList">
                                    <option value="0"></option>
                                    <option value="2015">2015</option>
                                    <option selected="selected" value="1989">1989</option>
                                    <option value="1988">1988</option>

                                </select>
                                <br />
                                <span id="ContentPlaceHolder1_FormViewUserProfile_ctl04" style="display:none;"><br />Please tell us your birth date</span>
                                    </span>
                                </div>
                            </div>
                            <div>
                                <span>Country</span>
                                <div>
                                    <select name="ctl00$ContentPlaceHolder1$FormViewUserProfile$CountryCodeDropDownList" id="ContentPlaceHolder1_FormViewUserProfile_CountryCodeDropDownList" onChange="onCountryChange(this.value, &#39;RegionLabel&#39;)">
                                        <option value=""></option>
                                        <option selected="selected" value="BD">Bangladesh</option>
                                        <option value="">-</option>
                                        <option value="BT">Bhutan</option>

                                    </select>
                                    <br />
                                    <span id="ContentPlaceHolder1_FormViewUserProfile_ctl05" style="display:none;">Please tell us where you live</span>
                                </div>
                            </div>
                            <div>
                                <span>City</span>
                                <div>
                                    <input name="ctl00$ContentPlaceHolder1$FormViewUserProfile$CityTextBox" type="text" value="Tungi" maxlength="50" id="ContentPlaceHolder1_FormViewUserProfile_CityTextBox" />
                                    <br />
                                    <span id="ContentPlaceHolder1_FormViewUserProfile_ctl06" style="display:none;">Please tell us your city</span>
                                </div>
                            </div>
                            <div>
                                <span id="RegionLabel">Province</span>
                                <div>
                                    <input name="ctl00$ContentPlaceHolder1$FormViewUserProfile$StateTextBox" type="text" value="Dhaka" maxlength="50" id="ContentPlaceHolder1_FormViewUserProfile_StateTextBox" />
                                    <br />
                                    <span id="ContentPlaceHolder1_FormViewUserProfile_ctl07" style="display:none;">Please tell us your state / province</span>
                                </div>
                            </div>
                        </div>
                        <br />
                        <br />
                        <br />
                    </div>

                {!! Form::open(array('url'=>'storefirstdetails')) !!}
                    <div class="row">
                        Catchy headline for your amazing profile
                        <br />
                        <textarea name="profile_headline" rows="1" cols="20" id="profile_headline" spellcheck="true" onkeyup="count(this, 100)">
                        </textarea>
                        <input type="hidden" name="profile_id" value="{{ $id }}" >
                        <br />
                        <span id="ContentPlaceHolder1_FormViewUserProfile_ctl08" style="display:none;">Please write a headline for your profile</span>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-2-of-3">
                            Write about yourself here
                        </div>
                        <br />
                        <textarea name="profile_description" rows="12" cols="20" id="profile_description" spellcheck="true" onkeydown="chatHelper.autoResizeTextArea(this, &#39;__dummyTA1&#39;)" onkeyup="chatHelper.autoResizeTextArea(this, &#39;__dummyTA1&#39;); count(this, 4000);" style="overflow: hidden">
                        </textarea>
                        <textarea id="__dummyTA1" Rows="12" style="overflow: hidden; visibility: hidden; position: absolute; left: -10000px; top: -10000px;"></textarea>
                        <br />
                        <span id="ContentPlaceHolder1_FormViewUserProfile_ctl09" style="display:none;">Please write something about yourself</span>
                        <span id="ContentPlaceHolder1_FormViewUserProfile_ctl10" style="display:none;">Please write a bit more about yourself...</span>
                    </div>
                    <br />
                    <br />
                    <div class="flexi-table">
                        <div>
                            <span>Appearance</span>
                            <div>
                                <select name="profile_appearance" id="profile_appearance">
                                    <option selected="selected" value="0"></option>
                                    <option value="1">Very Attractive</option>
                                    <option value="2">Attractive</option>

                                </select>
                            </div>
                            <span>Body type</span>
                            <div>
                                <select name="profile_bodytype" id="profile_bodytype">
                                    <option selected="selected" value="0"></option>
                                    <option value="1">Average</option>
                                    <option value="2">A few extra kg / pounds</option>
                                    <option value="3">Slim</option>
                                    <option value="4">Athletic</option>
                                    <option value="5">Muscular</option>
                                    <option value="6">Big &amp; beautiful</option>

                                </select>
                            </div>
                        </div>
                        <div>
                            <span>Height</span>
                            <div>
                                <select name="profile_height" id="profile_height">
                                    <option selected="selected" value="0"></option>
                                    <option value="135">135cm (4&#39;5&quot;)</option>
                                    <option value="136">136cm (4&#39;6&quot;)</option>

                                </select>
                            </div>
                            <span>Weight</span>
                            <div>
                                <select name="profile_weight" id="profile_weight">
                                    <option selected="selected" value="0"></option>
                                    <option value="35">35kg (77lbs)</option>
                                    <option value="36">36kg (79lbs)</option>

                                </select>
                            </div>

                        </div>
                        <div>
                            <span>Eye color</span>
                            <div>
                                <select name="profile_eyecol" id="profile_eyecol">
                                    <option selected="selected" value="0"></option>
                                    <option value="1">Black</option>
                                    <option value="2">Blue</option>

                                </select>
                            </div>
                            <span>Hair color</span>
                            <div>
                                <select name="profile_haircol" id="profile_haircol">
                                    <option selected="selected" value="0"></option>
                                    <option value="10">Bald</option>
                                    <option value="1">Black</option>

                                </select>
                            </div>
                        </div>
                        <div>
                            <span>Education</span>
                            <div>
                                <select name="profile_education" id="profile_education">
                                    <option selected="selected" value="0"></option>
                                    <option value="8">No Education</option>
                                    <option value="9">Elementary School</option>

                                </select>
                            </div>
                            <span>Occupation</span>
                            <div>
                                <input name="profile_occu" type="text" maxlength="50" id="profile_occu" />
                            </div>
                        </div>
                        <div>
                            <span>Ethnicity / Race</span>
                            <div>
                                <select name="profile_race" id="profile_race">
                                    <option selected="selected" value="0"></option>
                                    <option value="1">African (Black)</option>
                                    <option value="9">African American</option>

                                </select>
                            </div>
                            <span>Religion</span>
                            <div>
                                <select name="profiel_religion" id="profiel_religion">
                                    <option selected="selected" value="0"></option>
                                    <option value="19">Agnostic</option>
                                    <option value="20">Atheist</option>

                                </select>
                            </div>
                        </div>
                        <div>

                        </div>
                        <div>
                            <span>Relationship status</span>
                            <div>
                                <select name="profile_rltnstatus" id="profile_rltnstatus">
                                    <option selected="selected" value="0"></option>
                                    <option value="1">Divorced</option>

                                </select>
                            </div>
                            <span>Have children</span>
                            <div>
                                <select name="profile_havechild" id="profile_havechild">
                                    <option selected="selected" value="0"></option>
                                    <option value="1">No</option>
                                    <option value="2">Yes (Live with)</option>

                                </select>
                            </div>
                        </div>
                        <div>
                            <span>Want children</span>
                            <div>
                                <select name="profile_wantchild" id="profile_wantchild">
                                    <option selected="selected" value="0"></option>
                                    <option value="1">Undecided</option>
                                    <option value="2">Yes</option>

                                </select>
                            </div>
                            <span>Smoking</span>
                            <div>
                                <select name="profile_smoking" id="profile_smoking">
                                    <option selected="selected" value="0"></option>
                                    <option value="1">Yes</option>
                                    <option value="2">Rarely smokes</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <span>Drinking</span>
                            <div>
                                <select name="profile_drinker" id="profile_drinker">
                                    <option selected="selected" value="0"></option>
                                    <option value="1">Non drinker</option>

                                </select>
                            </div>

                            <span>Willing to relocate to another country</span>
                            <div>
                                <select name="profile_wantchangeloc" id="profile_wantchangeloc">
                                    <option selected="selected" value="0"></option>
                                    <option value="1">Not sure</option>
                                    <option value="2">Yes</option>

                                </select>
                            </div>

                        </div>
                    </div>
                    <br />
                    <br />
                    <h2>
                    2. About who you want to meet:
                </h2>
                    <br />
                    <br />
                    <div class="fixed-table">
                        <div>
                            <span style="width: 1%">I&nbsp;want&nbsp;to&nbsp;meet&nbsp;a&nbsp;&nbsp;</span>
                            <div>
                                <span>
                                <select name="profile_meetgender" id="profile_meetgender">
                                    <option value="0"></option>
                                    <option value="1">Male</option>
                                    <option selected="selected" value="2">Female</option>
                                    <option value="3">Male or Female</option>

                                </select>
                                <br />
                                <span id="ContentPlaceHolder1_FormViewUserProfile_ctl11" style="display:none;">Please tell us which gender(s) you want to meet</span>
                                </span>
                            </div>
                        </div>

                        <div>
                            <span class="pt">Age&nbsp;from&nbsp;</span>
                            <div class="pt">
                                <span class="auto-width">
                                <select name="profile_meetagefrom" id="profile_meetagefrom">
                                    <option value="0"></option>
                                    <option selected="selected" value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>

                                </select>
                            </span> to
                                <span class="auto-width">
                                <select name="profile_meetageto" id="profile_meetageto">
                                    <option value="0"></option> 
                                    <option value="91">91</option>
                                    <option selected="selected" value="99">99</option>

                                </select>
                            </span>
                            </div>
                        </div>
                    </div>
                    <br />
                    <br /> And I want to meet for
                    <br />
                    <br />
                    <div class="flexi-table">
                        <div>
                            <div>
                                <input id="profile_meetfordate" type="checkbox" name="profile_meetfordate" checked="checked" />
                                <label for="ContentPlaceHolder1_FormViewUserProfile_MeetForDatingCheckBox">Dating</label>
                            </div>
                            <div>
                                <input id="profile_meetforfrnd" type="checkbox" name="profile_meetforfrnd" checked="checked" />
                                <label for="ContentPlaceHolder1_FormViewUserProfile_MeetForFriendshipCheckBox">Friendship</label>
                            </div>

                            <div>
                                <input id="profile_meetforserious" type="checkbox" name="profile_meetforserious" checked="checked" />
                                <label for="ContentPlaceHolder1_FormViewUserProfile_MeetForSeriousRelationshipCheckBox">Serious Relationship</label>
                            </div>
                            <div>
                                <input id="profile_meetfornet" type="checkbox" name="profile_meetfornet" checked="checked" />
                                <label for="ContentPlaceHolder1_FormViewUserProfile_MeetForNetworkingCheckBox">Networking</label>
                            </div>
                            <div>
                                <input id="profile_meetforother" type="checkbox" name="profile_meetforother" />
                                <label for="ContentPlaceHolder1_FormViewUserProfile_MeetForOtherCheckBox">Other</label>
                            </div>
                        </div>
                    </div>
                    <br />
                    <br />
                    <div class="row">
                        Write about who you want to meet here
                        <br />
                        <textarea name="profile_detailsaboutmeet" rows="12" cols="20" id="profile_detailsaboutmeet" spellcheck="true" onkeydown="chatHelper.autoResizeTextArea(this, &#39;__dummyTA2&#39;)" onkeyup="chatHelper.autoResizeTextArea(this, &#39;__dummyTA2&#39;); count(this, 4000);" style="overflow: hidden">
                        </textarea>
                        <textarea id="__dummyTA2" Rows="12" style="overflow: hidden; visibility: hidden; position: absolute; left: -10000px; top: -10000px;"></textarea>
                    </div>
                    <br /> Remember to save your profile
                    <br />
                    <br />
                    <input type="submit" name="profile_submit" value="Save" id="profile_submit" class="bttnf bluef" style="line-height: 50px; height: 50px; width: 200px" />
                    <br />
                    <br />
                    <br />
                    <br />
                    <div id="ContentPlaceHolder1_FormViewUserProfile_ValidationSummary1" style="display:none;">

                    </div>

                {!! Form::close() !!}


                </div>

            </div>

        </div>
    </div>
</div>
@endsection