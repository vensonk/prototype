<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap - The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Barnett Capital Ltd. - Home </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link href="css/bcl.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                <h3>Preliminary Application for Residential Lending</h3>
                <p><span class="required">*</span>indicates a required field</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                <form>
                    <div class="panel preparer">
                        <h3>Preparer</h3>
                        <div class="form-group">
                            <label>Who is filling out this application?</label>
                            <div class="radio">
                                <label class="radio-inline">
                                    <input name="preparer" type="radio" value="borrower">Borrower
                                </label>
                                <label class="radio-inline">
                                    <input name="preparer" type="radio" value="broker">Broker
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="panel broker">
                        <h3>Broker</h3>
                            <div class="form-group">
                                <input name="brokerFirstName" type="text" placeholder="First name" class="form-control" >
                            </div>
                            <div class="form-group">
                                <input name="brokerLastName"  type="text" placeholder="Last name" class="form-control" >
                            </div>
                            <div class="form-group">
                                <input name="brokerEmail" type="email" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input name="brokerPhoneNumber" type="tel" placeholder="Phone number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>How should we communicate with the borrower?</label>
                                <div class="radio">
                                    <label>
                                        <input name="brokerCommunicationPreference" type="radio" value="brokerOnly">Send all communications to me and I will communicate with the borrower directly.
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="brokerCommunicationPreference" type="radio" value="brokerCCed">Communicate directly with the borrower but keep me CCed on all important communications with the borrower.
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="brokerCommunicationPreference" type="radio" value="borrowerOnly">Communicate directly with the borrower but let me know when the loan is approved or rejected.
                                    </label>
                                </div>
                            </div>
                    </div>
                    <div class="panel borrower">
                        <h3>Borrower</h3>
                        <!--
                            We need to implement a net worth and net income calculation as per the old prelim app.
                            Assets - Liabilities = Net Worth
                            Income - Expenses = Net Income
                            See barnettcapital.com/prelim as of July 2016
                        -->
                        <div class="form-group">
                            <input name="borrowerFirstName" type="text" placeholder="First name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input name="borrowerLastName" type="text" placeholder="Last name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input name="borrowerEmail" type="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input name="borrowerPhoneNumber" type="tel" placeholder="Phone number" class="form-control">
                        </div>
                    </div>
                    <div class="panel general-information">
                        <h3>General Information</h3>
                        <div class="form-group">
                            <label>How much cash 
                                <span class="borrower">do you</span>
                                <span class="broker">does the borrower</span>
                            have in bank accounts?</label>
                            <div class="input-group col-xs-4">
                                <span class="input-group-addon">$</span>
                                <input name="informationCash" type="number" min="0" value="0" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>How much
                                <span class="borrower">do you</span>
                                <span class="broker">does the borrower</span>
                            have in investment or retirement accounts?</label>
                            <div class="input-group col-xs-4">
                                <span class="input-group-addon">$</span>
                                <input name="informationInvestments" type="number" min="0" value="0" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                <span class="borrower">Have you</span>
                                <span class="broker">Has the borrower</span>
                            ever been convicted of a felony?</label>
                            <div class="radio">
                                <label class="radio-inline">
                                    <input name="informationFelony" type="radio" value="felony">Yes 
                                </label>
                                <label class="radio-inline">
                                    <input name="informationFelony" type="radio" value="noFelony">No
                                </label>
                            </div>
                            <textarea name="informationFelonyExplain" id="informationFelonyExplain" placeholder="Please explain your felony record" class="form-control hidden"></textarea>
                        </div>
                        <label>How did you find out about us?</label>
                        <div class="form-group">
                            <div class="input-group col-xs-4">
                                <select name="informationFoundUs" class="form-control">
                                    <option disabled selected>Choose…</option>
                                    <option value="broker">Broker…</option>
                                    <option value="event">Event or group…</option>
                                    <option value="other">Other…</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group hidden" id="informationFoundUsBroker">
                            <label>Please provide your broker's contact information:</label>
                            <div class="form-group">
                                <input name="informationFoundUsBrokerFirstName" type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="form-group">
                                <input name="informationFoundUsBrokerLastName"  type="text" class="form-control" placeholder="Last name">
                            </div>
                            <div class="form-group">
                                <input name="informationFoundUsBrokerEmail" type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input name="informationFoundUsBrokerPhoneNumber" type="tel" class="form-control" placeholder="Phone number">
                            </div>
                        </div>
                        <div class="form-group hidden" id="informationFoundUsEventName">
                            <div class="input-group col-xs-4">
                                <select name="informationFoundUsEventName" class="form-control">
                                    <option disabled selected>Choose…</option>
                                    <option value="dig">DIG</option>
                                    <option value="imn">IMN</option>
                                    <option value="ficon">FICON</option>
                                    <option value="redevelopU">Redevelop U</option>
                                    <option value="whip">W.H.I.P.</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group hidden" id="informationFoundUsOther">
                            <input name="informationFoundUsOther" type="text" placeholder="Please specify how you found out about us" class="form-control">
                        </div>
                    </div>
                    <div class="panel guarantors" >
                        <h3>Guarantors</h3>
                        <div class="form-group row">
                            <label class="col-xs-7">How many guarantors will there be
                                <span class="borrower">, including you</span>
                            ?</label>
                            <div class="col-xs-2">
                                <input name="guarantorsCount" id="guarantorsCount" type="number" value="1" min="1" step="1" class="form-control">
                            </div>
                        </div>
                        <label id="guarantorsList">Please provide the contact information for each guarantor:</label>
                        <table class="table table-striped table-condensed">
                            <tbody>
                                <tr>
                                    <!--
                                        The first row should be automatically populated with the borrower's information from the "Borrower" section (because the primary borrower needs to be a guarantor).
                                    -->
                                    <td id="guarantorsID1" class="col-xs-1">
                                        <div class="form-group">
                                            <input name="guarantorsID1" type="text" disabled class="form-control" placeholder="" value="1">
                                        </div>
                                    </td>
                                    <td id="guarantorsFirstName1">
                                        <div class="form-group">
                                            <input name="guarantorsFirstName1" type="text" class="form-control" placeholder="First name">
                                        </div>
                                    </td>
                                    <td id="guarantorsLastName1">
                                        <div class="form-group">
                                            <input name="guarantorsLastName1" type="text" class="form-control" placeholder="Last name">
                                        </div>
                                    </td>
                                    <td id="guarantorsEmail1">
                                        <div class="form-group">
                                            <input name="guarantorsEmail1" type="text" class="form-control" placeholder="Email">
                                        </div>
                                    </td>
                                    <td id="guarantorsPhoneNumber1">
                                        <div class="form-group">
                                            <input name="guarantorsPhoneNumber1" type="text" class="form-control" placeholder="Phone number">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel experience">
                        <h3>Experience</h3>
                        <div class="form-group">
                            <textarea placeholder="Please describe your real estate experience" class="form-control"></textarea>
                        </div>
                        <div class="form-group row">
                            <label class="col-xs-7">How many investment properties
                                <span class="borrower">have you</span>
                                <span class="broker">has the borrower</span>
                            sold after doing construction work on them?</label>
                            <div class="col-xs-2">
                                <input name="expInvestPropSoldAfterConstruction" id="expInvestPropSoldAfterConstruction" type="number" min="0" value="0" step="1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xs-7">How many investment properties
                                <span class="borrower">have you</span>
                                <span class="broker">has the borrower</span>
                            sold without doing construction work on them?</label>
                            <div class="col-xs-2">
                                <input name="expInvestPropSoldWithoutConstruction" id="expInvestPropSoldWithoutConstruction" type="number" min="0" value="0" step="1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xs-7">How many investment properties
                                <span class="borrower">do you</span>
                                <span class="broker">does the borrower</span>
                            currently own?</label>
                            <div class="col-xs-2">
                                <input name="expInvestPropCount" id="expInvestPropCount" type="number" min="0" value="0" step="1" class="form-control">
                            </div>
                        </div>
                        <label id="expInvestPropList">Please describe your investment properties:</label>
                        <table class="table table-striped table-condensed">
                            <tbody>
                                <tr>
                                    <!--
                                        The investment property section should be modified to allow for more than one specific property.
                                    -->
                                    <td id="expInvestPropID1" class="col-xs-1">
                                        <div class="form-group">
                                            <input name="expInvestPropID1" type="text" disabled class="form-control" placeholder="" value="1">
                                        </div>
                                    </td>
                                    <td id="expInvestPropType1">
                                        <div class="form-group">
                                            <input name="expInvestPropType1" type="text" class="form-control" placeholder="Type">
                                        </div>
                                    </td>
                                    <td id="expInvestPropAIV1">
                                        <div class="form-group">
                                            <input name="expInvestPropAIV1" type="text" class="form-control" placeholder="As-is value">
                                        </div>
                                    </td>
                                    <td id="expInvestPropDebt1">
                                        <div class="form-group">
                                            <input name="expInvestPropDebt1" type="text" class="form-control" placeholder="Debt">
                                        </div>
                                    </td>
                                    <td id="expInvestPropEquity1">
                                        <div class="form-group">
                                            <input name="expInvestPropEquity1" type="text" class="form-control" placeholder="Equity">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel property">
                        <h3>Property</h3>
                        <!--
                            The property section should be modified to allow for more than one specific property.
                            This covers the case of a borrower tackling multiple deals at once
                            or multiple collateral properties.
                        -->                        
                        <div class="form-group">
                            <label>
                                <span class="borrower">Do you</span>
                                <span class="broker">Does the borrower</span>
                            already own the investment property
                                <span class="borrower">you are</span>
                                <span class="broker">the borrower is</span>
                            seeking financing for?</label>
                            <div class="radio">
                                <label class="radio-inline">
                                    <input name="propertyOwnedOrNot" type="radio" value="owned">Yes 
                                </label>
                                <label class="radio-inline">
                                    <input name="propertyOwnedOrNot" type="radio" value="notOwned">No
                                </label>
                            </div>
                        </div>
                        <div class="form-group hidden" id="inmind">
                            <label>
                                <span class="borrower">Do you</span>
                                <span class="broker">Does the borrower</span>
                            already have a particular investment property in mind?</label>
                            <div class="radio">
                                <label class="radio-inline">
                                    <input name="propertyInmind" type="radio" value="inmind">Yes 
                                </label>
                                <label class="radio-inline">
                                    <input name="propertyInmind" type="radio" value="notInmind">No
                                </label>
                            </div>
                        </div>
                        <div class="form-group hidden owned inmind">
                            <label>Where is the property located?</label>
                            <div class="form-group">
                                <div class="input-group col-xs-4">
                                    <select name="location" class="form-control">
                                        <option value="us">United States</option>
                                        <option value="canada">Canada</option>
                                        <option value="otherlocation">Other…</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group hidden" id="us">
                                <div class="input-group col-xs-4">
                                    <select name="us" class="form-control">
                                        <option disabled selected>Choose a state…</option>
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>American Samoa</option>
                                        <option>Arizona</option>
                                        <option>Arkansas</option>
                                        <option>California</option>
                                        <option>Colorado</option>
                                        <option>Connecticut</option>
                                        <option>Delaware</option>
                                        <option>District of Columbia</option>
                                        <option>Florida</option>
                                        <option>Georgia</option>
                                        <option>Guam</option>
                                        <option>Hawaii</option>
                                        <option>Idaho</option>
                                        <option>Illinois</option>
                                        <option>Indiana</option>
                                        <option>Iowa</option>
                                        <option>Kansas</option>
                                        <option>Kentucky</option>
                                        <option>Louisiana</option>
                                        <option>Maine</option>
                                        <option>Maryland</option>
                                        <option>Massachusetts</option>
                                        <option>Michigan</option>
                                        <option>Minnesota</option>
                                        <option>Mississippi</option>
                                        <option>Missouri</option>
                                        <option>Montana</option>
                                        <option>Nebraska</option>
                                        <option>Nevada</option>
                                        <option>New Hampshire</option>
                                        <option>New Jersey</option>
                                        <option>New Mexico</option>
                                        <option>New York</option>
                                        <option>North Carolina</option>
                                        <option>North Dakota</option>
                                        <option>Northern Marianas Islands</option>
                                        <option>Ohio</option>
                                        <option>Oklahoma</option>
                                        <option>Oregon</option>
                                        <option>Pennsylvania</option>
                                        <option>Puerto Rico</option>
                                        <option>Rhode Island</option>
                                        <option>South Carolina</option>
                                        <option>South Dakota</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Utah</option>
                                        <option>Vermont</option>
                                        <option>Virgin Islands</option>
                                        <option>Virginia</option>
                                        <option>Washington</option>
                                        <option>West Virginia</option>
                                        <option>Wisconsin</option>
                                        <option>Wyoming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group hidden" id="canada">
                                <div class="input-group col-xs-4">
                                    <select name="canada" class="form-control">
                                        <option disabled selected>Choose a province…</option>
                                        <option>Alberta</option>
                                        <option>British Columbia</option>
                                        <option>Manitoba</option>
                                        <option>New Brunswick</option>
                                        <option>Newfoundland and Labrador</option>
                                        <option>Northwest Territories</option>
                                        <option>Nova Scotia</option>
                                        <option>Nunavut</option>
                                        <option>Ontario</option>
                                        <option>Prince Edward Island</option>
                                        <option>Quebec</option>
                                        <option>Saskatchewan</option>
                                        <option>Yukon Territory</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group hidden" id="otherlocation">
                                <input name="otherlocation" id="otherlocation" type="text"  placeholder="Please specify the location" class="form-control">
                            </div>
                        </div>
                        <div class="form-group hidden notinmind">
                            <label>Where
                                <span class="borrower">are you</span>
                                <span class="broker">is the borrower</span>
                            looking to invest? Select all that apply.</label>
                            <div class="checkbox">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="notinmindInvestCountry" value="us" checked>United States
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="notinmindInvestCountry" value="canada">Canada
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="notinmindInvestCountry" value="other-location">Other
                                </label>
                            </div>
                            <div class="checkbox hidden" id="notinmindUs">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Alabama</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Alaska</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">American Samoa</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Arizona</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Arkansas</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindUs">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">California</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Colorado</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Connecticut</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Delaware</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindUs">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">District of Columbia</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Florida</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Georgia</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Guam</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindUs">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Hawaii</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Idaho</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Illinois</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Indiana</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindUs">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Iowa</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Kansas</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Kentucky</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Louisiana</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindUs">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Maine</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Maryland</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Massachusetts</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Michigan</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindUs">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Minnesota</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Mississippi</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Missouri</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Montana</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindUs">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Nebraska</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Nevada</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">New Hampshire</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">New Jersey</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindUs">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">New Mexico</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">New York</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">North Carolina</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">North Dakota</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindUs">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Northern Marianas Islands</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Ohio</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Oklahoma</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Oregon</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindUs">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Pennsylvania</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Puerto Rico</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Rhode Island</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">South Carolina</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindUs">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">South Dakota</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Tennessee</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Texas</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Utah</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindUs">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Vermont</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Virgin Islands</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Virginia</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Washington</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindUs">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">West Virginia</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Wisconsin</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindUs" value="">Wyoming</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindCanada">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindCanada" value="">Alberta</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindCanada" value="">British Columbia</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindCanada" value="">Manitoba</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindCanada" value="">New Brunswick</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindCanada">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindCanada" value="">Newfoundland and Labrador</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindCanada" value="">Northwest Territories</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindCanada" value="">Nova Scotia</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindCanada">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindCanada" value="">Nunavut</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindCanada" value="">Ontario</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindCanada" value="">Prince Edward Island</label>
                            </div>
                            <div class="checkbox hidden" id="notinmindCanada">
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindCanada" value="">Quebec</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindCanada" value="">Saskatchewan</label>
                                <label class="checkbox-inline"><input type='checkbox' name="notinmindCanada" value="">Yukon Territory</label>
                            </div>
                            <div class="form-group hidden" id="othercheckbox">
                                <input name="otherlocation" id="otherlocation" type="text"  placeholder="Please specify the location" class="form-control">
                            </div>
                        </div>
                        <div class="form-group hidden" id="owned">
                            <label>When did
                                <span class="borrower">you</span>
                                <span class="broker">the borrower</span>
                            buy the property?</label>
                            <div class="input-group col-xs-4">
                                <select id="year" name="year" class="form-control">
                                    <script>
                                        var myDate = new Date();
                                        var year = myDate.getFullYear();
                                        var yearsBack = 5;
                                        for(var i = year; i >= year-yearsBack; i--){
                                            if (i == year-yearsBack){
                                                document.write('<option value="'+i+'">'+i+' or earlier</option>');
                                            } else {
                                                document.write('<option value="'+i+'">'+i+'</option>');
                                            }
                                        }
                                    </script>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group col-xs-4">
                                <select id="month" name="month" class="form-control">
                                    <!--
                                        If current year is selected && current month = January:
                                            January is auto selected as a single-option select element.
                                            Else: Only current month and less are shown in select element with "Choose a month…".
                                        Else if "or earlier" year is selected, hide .month select element.
                                        Else all 12 months are shown
                                    -->
                                    <option disabled selected>Choose a month…</option>
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group hidden inmindandnotinmind">
                            <!-- If the property is owned but was bought in the last 6 months, use purchase price instead of present value -->
                            <label>What is
                                <span class="hidden owned">the property worth right now</span>
                                <span class="hidden notowned">
                                    <span class="hidden inmind">the property's</span>
                                    <span class="hidden notinmind">
                                        <span class="borrower">your</span>
                                        <span class="broker">the borrower's</span>
                                    typical</span>
                                purchase price</span>
                            ?</label>
                            <div class="input-group col-xs-4">
                                <span class="input-group-addon">$</span>
                                <input name="worth" type="number" min="0" value="0" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                        <div class="form-group hidden inmindandnotinmind">
                            <label>What is
                                <span class="hidden owned inmind">the property's</span>
                                <span class="notinmind">
                                    <span class="borrower">your</span>
                                    <span class="broker">the borrower's</span>
                                typical</span>
                            construction budget?</label>
                            <div class="input-group col-xs-4">
                                <span class="input-group-addon">$</span>
                                <input name="budget" type="number" min="0" value="0" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                        <div class="form-group hidden owned inmindandnotinmind">
                            <label class="col-xs-7">How many construction draws will
                                <span class="borrower">you</span>
                                <span class="broker">the borrower</span>
                                <span class="hidden notinmind">typically</span>
                            request?</label>
                            <div class="col-xs-2">
                                <input name="drawcount" id="drawcount" type="number" min="0" value="0" step="1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group hidden owned inmind">
                            <label>What is
                                <span class="hidden owned inmind">the property's</span>
                                <span class="notinmind">
                                    <span class="borrower">your</span>
                                    <span class="broker">the borrower's</span>
                                typical</span>
                            after-repair value (ARV)?</label>
                            <div class="input-group col-xs-4">
                                <span class="input-group-addon">$</span>
                                <input name="arv" type="number" min="0" value="0" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                        <div class="form-group hidden owned inmindandnotinmind">
                            <label>Will
                                <span class="borrower">you</span>
                                <span class="broker">the borrower</span>
                                <span class="hidden notinmind">typically</span>
                            sell or hold the property?</label>
                            <div class="radio">
                                <label class="radio-inline">
                                    <input name="sellOrHold" type="radio" value="Sell">Sell 
                                </label>
                                <label class="radio-inline">
                                    <input name="sellOrHold" type="radio" value="Hold">Hold
                                </label>
                            </div>
                        </div>
                        <div class="form-group hidden owned inmindandnotinmind" id="timeline">
                            <!-- Create Sliders -->
                            <label>What is
                                <span class="hidden owned inmind">the project's</span>
                                <span class="notinmind">
                                    <span class="borrower">your</span>
                                    <span class="broker">the borrower's</span>
                                typical</span>
                            timeline? Please drag the sliders to specify.</label>
                        </div>
                    </div>
                </form>
            </div>  <!-- End Row Grid -->
        </div> <!-- End Row -->
    <div> <!-- End Container -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap  -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Functions  -->
    <script src="js/bcl.js"></script>
  </body>
</html>