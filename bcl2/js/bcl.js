$(document).ready(function(){
    // Show/hide elements depending on whether filled out by borrower or broker
    $("input[value='Borrower']").on("change", function() {
        $(".broker").hide(500);
        $(".borrower").show(500);
    });
    $("input[value='Broker']").on("change", function() {
        $(".borrower").hide(500);
        $(".broker").show(500);
    });
    
    // Synch borrower's contact info with the first guarantor
    $("#borrowerFirstName").on('change', function(){
        $("#guarantorFirstName1").text($(this).val());
    });
    $("#borrowerLastName").on('change', function(){
        $("#guarantorLastName1").text($(this).val());
    });
    $("#borrowerEmail").on('change', function(){
        $("#guarantorEmail1").text($(this).val());
    });
    $("#borrowerPhoneNumber").on('change', function(){
        $("#guarantorPhoneNumber1").text($(this).val());
    });
    
    // Show/hide investment property lit if there is more than 0 investment properties owned
    $('#investPropCount').change(function() {$(document).ready(function() {
        /*
          This needs to be modified such that if you lower the number and then raise it again, data entered in a higher-numbered row is retained.  For example, if a borrower indicates there will be 4 guarantors, fills out the data, and then accidentally reduces the number, that filled-out data should remain.  This quick prototype version does not do that.
          
          The same fucntionality should apply to all lists of this nature in the web form.
        */
        var n = $('#investPropCount').val();
        $("#a").text(n);
        if (n < 1) {
            $("#investPropList").hide();
            $(".addedInvestProp").remove();
        } else {
            $(".addedInvestProp").remove();
            var i = 1;
            do {
                $("#investPropList tbody").append("<tr class='addedInvestProp'><td>"+i+"</td><td><select id='investPropType"+i+"'><option disabled selected>Choose…</option><option>Single-family home</option><option>Multi-family</option><option>Mixed-use property</option><option>Retail</option><option>Office</option><option>Industrial</option><option>Land</option><option>Other</option></select></td><td><input id='investPropValue"+i+"' type='number'></td><td><input id='investPropDebt"+i+"' type='number'></td><td><input id='investPropEquity"+i+"' type='number' readonly></td></tr>");
                /* 
                    Make it so that investProperEquityN = investPropValueN - investPropDebtN
                    
                    Include a total row at the bottom if more than one row.
                    
                    If there are 10 or fewer properties, have rows for each property.
                    If there are 10 or more properties, and it should look like this:
                    
A                           B                   C                   D            E
                  ---------------------------------------------------------------------
1                             | No. of Properties | Total As-Is Value | Total Debt | Total Equity |
-------------------------------------------------------------------------------------------------
2 | Free-and-Clear Properties |                   |                   |         $0 |          =C2 |
------------------------------------------------------------------------------------------------
3 |     Encumbered Properties |                   |                   |            |       =C3-D3 |
-------------------------------------------------------------------------------------------------
4 |                     TOTAL |            =B2+B3 |            =C2+C3 |     =D2+D3 |       =E2+E3 |
-------------------------------------------------------------------------------------------------
                */
                i++;
            } while (i <= n)
            $("#investPropList").show();
        }
      });
    });
    
    // Show/hide elements depending on whether there's a felony conviction or not
    $("input[value='felony']").on("click", function() {
        $(".felony").show(500);
    });
    $("input[value='nofelony']").on("click", function() {
        $(".felony").hide(500);
    });
    
    // Show/hide elements depending on how they found out about us
    $(".foundout").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="foundoutbroker"){
                $(".foundoutbroker").show(500);
                $(".foundoutevent").hide(500);
                $(".foundoutother").hide(500);
            }
            else if($(this).attr("value")=="foundoutevent"){
                $(".foundoutbroker").hide(500);
                $(".foundoutevent").show(500);
                $(".foundoutother").hide(500);
            }
            else if($(this).attr("value")=="foundoutother"){
                $(".foundoutbroker").hide(500);
                $(".foundoutevent").hide(500);
                $(".foundoutother").show(500);
            }
        });
    }).change();
    
    // Show/hide guarantor list if there is more the 1 guarantor
    $('#guarantorCount').change(function() {
        /*
            This needs to be modified such that if you lower the number and then raise it again, data entered in a higher-numbered row is retained.  For example, if a borrower indicates there will be 4 guarantors, fills out the data, and then accidentally reduces the number, that filled-out data should remain.  This quick prototype version does not do that.
            
            In addition, we need to figure out a way to effectively merge multiple guarnators who are backing one borrower so that we are looking at their financials collectively.  The personal finacial statement allows doing this for up to 3, and for any more we have been doing it manually and ad hoc.f
        */
        var n = $('#guarantorCount').val();
        $("#a").text(n);
        if (n < 2) {
            $("#guarantorList").hide(500);
            $(".addedGuarantor").remove();
        } else {
            $(".addedGuarantor").remove();
            var i = 2;
            do {
                $("#guarantorList tbody").append("<tr class='addedGuarantor'><td>"+i+"</td><td><input id='guarantorFirstName"+i+"' type='text'></td><td><input id='guarantorLastName"+i+"' type='text'></td><td><input id='guarantorEmail"+i+"' type='email'></td><td><input id='guarantorPhoneNumber"+i+"' type='tel'></td></tr>");
                i++;
            } while (i <= n)
            $("#guarantorList").show(500);
        }
    });
    
    // Show/hide elements depending on whether borrower owns property or not
    $("input[value='owned']").on("click", function() {
        $(".notinmind").hide(500);
        $(".notowned").hide(500);
        $(".owned").show(500);
        $("input[name='inmind']").prop('checked', false);
        $("input[name='sellOrHold']").prop('checked', false);
    });
    $("input[value='notowned']").on("click", function() {
        $(".notinmind").hide(500);
        $(".owned").hide(500);
        $(".notowned").show(500);
        $("input[name='inmind']").prop('checked', false);
        $("input[name='sellOrHold']").prop('checked', false);
    });
    
    // Show/hide elements depending on whether borrower had property in mind or not
    $("input[value='inmind']").on("click", function() {
        $(".notinmind").hide(500);
        $(".inmind").show(500);
        $(".inmindandnotinmind").show(500);
    });
    $("input[value='notinmind']").on("click", function() {
        $(".inmind").hide(500);
        $(".notinmind").show(500);
        $(".inmindandnotinmind").show(500);
    });
    
    // Specific property location
    $(".location").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="us"){
                $(".us").show(500);
                $(".canada").hide(500);
                $(".otherlocation").hide(500);
            }
            else if($(this).attr("value")=="canada"){
                $(".us").hide(500);
                $(".canada").show(500);
                $(".otherlocation").hide(500);
            }
            else if($(this).attr("value")=="otherlocation"){
                $(".us").hide(500);
                $(".canada").hide(500);
                $(".otherlocation").show(500);
            }
        });
    }).change();
    
    // Unspecific property location
    $('#us').change(function(){
        if($(this).prop("checked")) {
            $('.uscheckbox').show(500);
        } else {
            $('.uscheckbox').hide(500);
        }
    });
    $('#canada').change(function(){
        if($(this).prop("checked")) {
            $('.canadacheckbox').show(500);
        } else {
            $('.canadacheckbox').hide(500);
        }
    });
    $('#otherlocation').change(function(){
        if($(this).prop("checked")) {
            $('.othercheckbox').show(500);
        } else {
            $('.othercheckbox').hide(500);
        }
    });
    
    // Show/hide elements depending on whether budget is more than $0
    $('#budget').on('change',function(){
        if (!$(this).val()) {
            $(this).val(0);
        }
        if ($(this).val() > 0 ) { 
            $("#draws").show(500);
        } else {
            $("#draws").hide(500);
        }
    });
    
    // Show the proper timeline slider tool once the appropriate questions have been answered
    $("input[name='ownedOrNot'], input[name='sellOrHold'], #drawcount").on('change', function(){
        
        // Show/hide timeline depending on whether there is sufficient data to display it
        if($("input[name='ownedOrNot']:checked").val() && $("input[name='sellOrHold']:checked").val() && $("#drawcount").val()) {
            $("#timeline").show(500);
        } else {
            $("#timeline").hide(500);
        }
        
        // Show/hide sliders and appropriate labels
        if($("input[name='ownedOrNot']:checked").val() == "owned") {
            if($("input[name='sellOrHold']:checked").val() == "Sell") {
                if($('#drawcount').val() == 0) {
                    $("#timeline img").attr("src","img/owned_yes_draws_0_sell.png");
                } else if ($('#drawcount').val() == 1) {
                    $("#timeline img").attr("src","img/owned_yes_draws_1_sell.png");
                } else {
                    $("#timeline img").attr("src","img/owned_yes_draws_2_sell.png");
                }
            } else {
                if($('#drawcount').val() == 0) {
                    $("#timeline img").attr("src","img/owned_yes_draws_0_hold.png");
                } else if ($('#drawcount').val() == 1) {
                    $("#timeline img").attr("src","img/owned_yes_draws_1_hold.png");
                } else {
                    $("#timeline img").attr("src","img/owned_yes_draws_2_hold.png");
                }
            }
        } else {
            if($("input[name='sellOrHold']:checked").val() == "Sell") {
                if($('#drawcount').val() == 0) {
                    $("#timeline img").attr("src","img/owned_no_draws_0_sell.png");
                } else if ($('#drawcount').val() == 1) {
                    $("#timeline img").attr("src","img/owned_no_draws_1_sell.png");
                } else {
                    $("#timeline img").attr("src","img/owned_no_draws_2_sell.png");
                }
            } else {
                if($('#drawcount').val() == 0) {
                    $("#timeline img").attr("src","img/owned_no_draws_0_hold.png");
                } else if ($('#drawcount').val() == 1) {
                    $("#timeline img").attr("src","img/owned_no_draws_1_hold.png");
                } else {
                    $("#timeline img").attr("src","img/owned_no_draws_2_hold.png");
                }
            }
        }
    });
});