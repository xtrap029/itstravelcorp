<br><br>
<link rel="stylesheet" href="<?php echo Config::get('URL'); ?>public/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
<form class="js-validation-bootstrap" method="POST" action="<?php echo Config::get('URL'); ?>reservation/processnewsletter">
<div class="section-container">
    <div class="container">

        <div class="row" style="margin-bottom:40px;">
            
            <div class="col-md-8 col-sm-6">
                <div class="reservation">
                    <h2 class="sidebar-title">Contact Information</h2>

                    <div class="row" style="padding:0px 10px;"> 

                        <div class="col-md-2 col-xs-12 no-gutter">
                            <label for="name">Name <span style="color:red;">*</span></label>
                            <select name="salutation" class="form-control">
                                <option value="">Title</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Ms.">Ms.</option>
                                <option value="Mrs.">Mrs.</option>
                            </select>
                        </div>

                        <div class="col-md-5 col-xs-12 no-gutter">
                            <label for="name"><br></label>
                            <input class="form-control" type="text" id="firstname" name="firstname" placeholder="First Name">
                        </div>

                        <div class="col-md-5 col-xs-12 no-gutter">
                            <label for="name"><br></label>
                            <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                        </div>

                    </div>

                    <div class="row" style="margin-top:10px; padding:0px 10px;">
                        <div class="col-md-3 col-xs-4 no-gutter">
                            <label for="name">Contact Number <span style="color:red;">*</span></label>
                            <select class="form-control" id="countrycode1" name="countrycode1">
                                <option value="">Country Code</option>
                                <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                <option data-countryCode="SG" value="65">Singapore (+65)</option>
                            </select>
                        </div>

                        <div class="col-md-3 col-xs-4 no-gutter">
                            <label for="name"><br></label>
                            <input type="text" class="form-control" name="areacode1" placeholder="Area Code*" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" required>
                        </div>

                        <div class="col-md-4 col-xs-4 no-gutter">
                            <label for="name"><br></label>
                            <input type="text" class="form-control" name="contactnumber1" placeholder="Contact Number*" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" required>
                        </div>
                    </div>


                    <div class="row" style="margin-top:10px; padding:0px 10px;">

                        <div class="col-md-3 col-xs-4 no-gutter">
                            <label for="name">Alternate Number</label>
                            <select class="form-control" id="countrycode2" name="countrycode2">
                                <option value="">Country Code</option>
                                <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                <option data-countryCode="SG" value="65">Singapore (+65)</option>
                            </select>
                        </div>

                        <div class="col-md-3 col-xs-4 no-gutter">
                            <label for="name" ><br></label>
                            <input type="text" class="form-control" name="areacode2" placeholder="Area Code*" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" required>
                        </div>

                        <div class="col-md-4 col-xs-4 no-gutter">
                            <label for="name"><br></label>
                            <input type="text" class="form-control" name="contactnumber2" placeholder="Contact Number*" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" required>
                        </div>

                    </div>


                    <div class="row" style="margin-top:10px; padding:0px 10px;">
                        <div class="col-md-6 col-xs-12 no-gutter">
                            <label for="name">Email Address <span style="color:red;">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                        </div>

                        <div class="col-md-6 col-xs-12 no-gutter">
                            <label for="name">Confirm Email Address <span style="color:red;">*</span></label>
                            <input type="email" class="form-control" id="confirmemail" name="confirmemail" placeholder="Confirm Email Address">
                        </div>
                    </div>

                    <div class="row" style="margin-top:20px; margin-bottom:20px; padding:0px 15px;">
                        
                        
                        <input type="hidden" id="flight-val" name="flight-val">
                        <label for="name">Do you have a flight already? <span style="color:red;">*</span> </label> &nbsp;
                        <div id="radiobox" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary btn-xs" style="margin-right:10px;">
                                Yes
                                <input type="radio" name="flight" id="flight" value="yes" autocomplete="off">
                                <span class="glyphicon glyphicon-ok"></span>
                            </label>
    
                            <label class="btn btn-danger btn-xs">
                                No
                                <input type="radio" name="flight" id="flight" value="no" autocomplete="off">
                                <span class="glyphicon glyphicon-remove"></span>
                            </label>
                        </div>
                    </div>

                    <!-- <div id="req" class="row" style="margin-top:10px; margin-bottom:20px; padding:0px 15px;">
                        <input type="hidden" id="request-flight-val" name="request-flight-val">
                        <label for="name">Request for quotation? <span style="color:red;">*</span> </label> &nbsp;

                        
                        <div id="radiobox2" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary btn-xs" style="margin-right:10px;">
                                Yes
                                <input type="radio" name="request-flight" id="request-flight" value="yes" autocomplete="off">
                                <span class="glyphicon glyphicon-ok"></span>
                            </label>
    
                            <label class="btn btn-danger btn-xs">
                                No
                                <input type="radio" name="request-flight" id="request-flight" value="no" checked="checked" autocomplete="off">
                                <span class="glyphicon glyphicon-remove"></span>
                            </label>
                        </div>
                    </div> -->

                    <div id="flight-details">
                        <h2 class="sidebar-title">Flight Information</h2>
                        
                        <div class="row" style="padding:0px 10px;">
                            <div class="col-md-4 no-gutter">
                                <label for="name">Departure Flight No.</label>
                                <input class="form-control" type="text" name="dep-flight" placeholder="Flight No. (eg. 5J224, PR2202)">
                            </div>

                            <div class="col-md-4 no-gutter">
                                <label for="name" >Date and Time</label>
                                <input type="text" class="form-control" name="dep-date" placeholder="">
                            </div>
                        </div>


                        <div class="row" style="margin-top:10px; padding:0px 10px;">
                            <div class="col-md-4 no-gutter">
                                <label for="name">Return Flight No.</label>
                                <input class="form-control" type="text" name="ret-flight" placeholder="Flight No. (eg. 5J224, PR2202)">
                            </div>

                            <div class="col-md-4 no-gutter">
                                <label for="name" >Date and Time</label>
                                <input type="text" class="form-control" name="ret-date" placeholder="">
                            </div>
                        </div>
                    </div>


                    <div id="guest-details">
                        <h2 class="sidebar-title">Guest Details</h2>
                        
                        <?php for($i=0; $i < $this->adult; $i++) { ?>
                        <div class="row" style="padding:0px 10px;">
                            <div class="col-md-2 col-xs-12 no-gutter">
                                <label for="name">Adult <?= $i+1; ?> </label>
                                <select name="guest-salutation-a[]" class="form-control">
                                    <option value="">Title</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Ms.">Ms.</option>
                                    <option value="Mrs.">Mrs.</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-xs-12 no-gutter">
                                <label for="name"><br></label>
                                <input class="form-control" type="text" id="guest-firstname-a" name="guest-firstname-a[]" placeholder="First Name">
                            </div>

                            <div class="col-md-4 col-xs-12 no-gutter">
                                <label for="name"><br></label>
                                <input type="text" class="form-control" name="guest-lastname-a[]" placeholder="Last Name">
                            </div>

                            <div class="col-md-3 col-xs-12 no-gutter">
                                <label for="name">Birthdate </label>
                                <input type="text" class="form-control dob" name="birthdate-a[]" placeholder="Birthday">
                            </div>

                        </div>
                        <?php } ?>

                        <?php if($this->child != "0") { for($c=0; $c < $this->child; $c++) { ?>
                        <div class="row" style="padding:0px 10px; margin-top:60px;">
                            <div class="col-md-2 col-xs-12 no-gutter">
                                <label for="name">Child <?= $c+1; ?> </label>
                                <select name="guest-salutation-c[]" class="form-control">
                                    <option value="">Title</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Ms.">Ms.</option>
                                    <option value="Mrs.">Mrs.</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-xs-12 no-gutter">
                                <label for="name"><br></label>
                                <input class="form-control" type="text" id="guest-firstname-c" name="guest-firstname-c[]" placeholder="First Name">
                            </div>

                            <div class="col-md-4 col-xs-12 no-gutter">
                                <label for="name"><br></label>
                                <input type="text" class="form-control" name="guest-lastname-c[]" placeholder="Last Name">
                            </div>

                            <div class="col-md-3 col-xs-12 no-gutter">
                                <label for="name">Birthdate </label>
                                <input type="text" class="form-control dob" name="birthdate-c[]" placeholder="Birthday">
                            </div>

                        </div>

                        <?php } } ?>
                    </div>


                    <h2 class="sidebar-title">Other Information</h2>
                    <div class="row" style="margin-top:10px; padding:0px 10px;">
                        <div class="col-md-12 col-xs-12 no-gutter">
                            <label for="name">Other Details (Questions, Instructions and Special request)</label>
                            <textarea name="request" rows="5" class="form-control" placeholder="Other Details (E.g Requesting for Full Board Meals, Request to book earlier and afternoon flight, etc.)"></textarea>
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px; padding:0px 10px;">
                        <div class="col-md-3 col-xs-12 no-gutter">
                            <label for="name">Promo Code</label>
                            <input type="text" class="form-control" id="promocode" name="promocode" placeholder="Promo Code">
                        </div>
                    </div>

                
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="sidebar2">
                    <h2 class="sidebar-title">BOOKING DETAILS</h2>
                    
                    <div class="sidebar-content">
                        <h5>Package: </h5> Newsletter - <?= ucwords($this->location); ?>
                        <input type="hidden" name="packagename" value="Newsletter">
                        <input type="hidden" name="packagelocation" value="<?= ucwords($this->location); ?>">
                        <h5>Hotel: </h5>
                        <select id="packagehotel" name="packagehotel" class="form-control">
                            <?php
                            foreach ($this->hotels as $key => $value) {
                                ?>
                                <option value="<?= ucwords(strtolower($value)); ?>" data-rate="<?= $this->rates[$key]; ?>"><?= ucwords(strtolower($value)); ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <h5>Package Rate <small>(per person)</small>: </h5> &#8369; <span id="packageratedisplay"></span>
                        <input type="hidden" id="packagerate" name="packagerate">
                        <h5>Check-in Date: </h5>
                        <input type="text" class="form-control datepicker datereserve datepickerfrom" name="packagestart">
                        <h5>Check-out Date: </h5>
                        <input type="text" class="form-control datepicker datereserve datepickerto" name="packageend">
                        <h5>Adult/s: </h5>
                        <select class="form-control" name="packageadult">
                            <?php
                            for ($i=1; $i<=20; $i++) { 
                                ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <h5>Child/s: </h5>
                        <select class="form-control" name="packagechild">
                            <?php
                            for ($i=0; $i<=20; $i++) { 
                                ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <hr> 
                        <input id="chktc" type="checkbox" name="condition" value="Yes"><a href="#" data-toggle="modal" data-target="#terms"> Terms and Conditions.</a>
                        <br>
                        <input type="hidden" id="tc-val" name="condition-val" value="">
                        <input type="hidden" name="packagetotal" value="n/a">
                        <br>
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                

            </div>

        </div>
    
    </div>
</div>

<style>
.tc li {
    margin-bottom:10px;
    font-size:13px;
}


</style>
<div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="terms" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Terms and Condition</h4>
      </div>
      <div class="modal-body text-justify" style="padding:20px;">
        <h4><strong>For Hotel Bookings under ITS</strong></h4>

        <ul class="tc">
            <li>All paid hotel reservations are subject to the cancellation, no-show and shortened stay policies of the hotel. ITS Innovative Travel Solutions, Inc (ITS) will only act as a third-party intermediary in processing requests for cancellations and shortened stays</li>
            <li>In the event of a No-Show, the entire booking becomes null and void without exceptions and is therefore, non-refundable and non-rebookable.</li>
            <li>A USD $10.00 fee will be assessed for each amendment and/or cancellation as processing fee.</li>
            <li>A service fee of 10% is non-refundable in the event of any qualified* cancellations. </li>
            <li>For amendments / changes in your reservations, you may email us at reservation@itstravelcorp.com add of ITS or call our hotline (632) 812-4970 and (916) 785-4754.</li>
            <li>All confirmed bookings may not be transferred nor cancelled without corresponding penalties and fees.</li>
        
            <small><i>*Qualified reservations are those that adhere to and stay within the parameters of the cancellation policies stated for each particular reservation.</i></small>
        </ul>

        <h4>For Tour Package Bookings Only</h4>
        <ul class="tc">
            <li>All finalized and paid tour packages, whether with flight component and/or land arrangement only, are non-refundable, non rebookable and non-transferrable.</li>
            <li>For packages with flight, please refer to the General Terms and Conditions for each respective airline.</li>
            <ol>
                <li>AirAsia - http://www.airasia.com/ph/en/about-us/terms-and-conditions.page</li>
                <li>Philippine Airlines - http://www1.philippineairlines.com/travel-planner/conditions-carriage/approved-civil-aeronautics-board/</li>
                <li>Cebu Pacific- https://www.cebupacificair.com/pages/plan-trip/conditions-of-carriage/cebupacific-general-terms-and-conditions-of-carriage</li>
                <li>Skyjet- https://www.flyskyjetair.com/terms-conditions/</li>
            </ol>
            <li>Carriage of passenger and baggage is subject to the Terms and Conditions of Carriage approved by the Civil Aeronautics Board. For complete Terms and Conditions of Carriage, please refer to General Terms and Conditions for each respective airline.</li>            
        </ul>




        <h4><strong>General Terms and Conditions (applicable for all types of bookings)</strong></h4>

        <ul class="tc">
            <li>Special requests such as early check-in, late check-out, bed configuration, etc. are not guaranteed and are subject to the hotel's availability and discretion.</li>
            <li>Bookings with flight and/or additional/optional tours from third-party providers and operators associated with us or providing products and services via this site, have the right to cancel travel/transfers/ tours for safety and security reasons (as determined by the third-party provider), or when justified by circumstances beyond the third-party providers' control, or suspension of the operation of a route for reasons outside the third-party providers' control.</li>
            <li>ITS is not under any circumstances liable to you in the event that the provision of the services and facilities you have booked is compromised in any way by an event or a combination of events that is beyond our control or that of our suppliers/hotels or due to circumstances where liability is excluded here below. The events referred to above include (but are not limited to) the following: war or threats of war, acts of God, civil disturbance, airport or ports being closed, etc.</li>
            <li>It is your responsibility to ensure that you are fit to travel and participate in all of the services and facilities you have booked to undertake. We are not liable if you are refused entry to any country or part of a country because you do not have or cannot prove that you have the necessary vaccinations or do not comply in any way with the health requirements of your destinations.</li>
        </ul>

        <h4><strong>Payment Terms and Conditions (applicable for all types of bookings)</strong></h4>

        <ul class="tc">
            <li>Using a credit card as payment for bookings made through ITS is via Paypal link. All bookings paid using a valid credit card must be able to present his/her personal or third party credit card. The traveler will be asked to present the copy of the credit card used upon check-in at the airport/hotel and during the availment of other third-party services. The airline/hotel/tour operator reserves the right to refuse service to the traveler if this stipulation is not fulfilled.</li>
            <li>If the traveler is not the same person whose credit card is being used to pay for a booking made through this site, he or she must be able to present an authorization letter from the credit card holder along with copy of the credit card used and copies of at least two (2) valid government IDs. (at least one (1) must bear a current address and a signature).</li>
        </ul>

        <br>
        Enjoy your trip!<br>
        ITS Innovative Travel Solutions, Inc 



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



</form>

<script src="<?php echo Config::get('URL'); ?>assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
   


    function getFormatDate(d){
        return d.getMonth()+1 + '/' + d.getDate() + '/' + d.getFullYear()
    }
    var minDate = getFormatDate(new Date(new Date().setDate(new Date().getDate() + 2))),
    mdTemp = new Date(),
    maxDate = getFormatDate(new Date(mdTemp.setDate(mdTemp.getDate() + 5)));

    $(function() {
        $('input[name="dep-date"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            timePicker: true,
            minDate: minDate,
            startDate: moment().add(1, 'day'),
            locale: {
                format: 'MM/DD/YYYY h:mm A'
            }
        });

        $('input[name="ret-date"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            timePicker: true,
            minDate: minDate,
            startDate: moment().add(1, 'day'),
            locale: {
                format: 'MM/DD/YYYY h:mm A'
            }
        });

        $('.dob').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            locale: {
                format: 'MM/DD/YYYY'
            }
        });
    });


    $(document).ready(function(){
        $chked = "no";
        $('#chktc').change(function(){
            
            if($chked == "no")
            {
                $('#tc-val').val("yes");
                $chked = "yes";
            }else{
                $('#tc-val').attr('value', '');  
                $chked = "no";
            }

            
        });



        $('#flight-details').hide();
        $('#guest-details').hide();
        $('#req').hide();
        $('#radiobox').change(function(){
            selected_value = $("input[name='flight']:checked").val();

            if(selected_value == "yes")
            {
                $('#flight-details').show();
                $('#guest-details').hide();
                $('#req').hide();

                $('#flight-val').val("yes");
                $('#request-flight-val').val("no");
                
            }else{
                // $('#guest-details').show();
                // $('#req').show();
                $('#flight-details').hide();

                $('#flight-val').val("no");
            }
        });
    });


    $(document).ready(function(){
        $('#radiobox2').change(function(){
            selected_value2 = $("input[name='request-flight']:checked").val();

            if(selected_value2 == "yes")
            {
                // $('#guest-details').show();

                $('#request-flight-val').val("yes");
            }else{
                $('#guest-details').hide();
                $('#request-flight-val').val("no");
            }
        });

        getRate();

        $('#packagehotel').on('change', function(){
            getRate();
        });

        function getRate(){
            var rate = $('#packagehotel').find(":selected").data('rate');

            $('#packagerate').val(rate);
            $('#packageratedisplay').text(rate.toLocaleString('en'));
        }
    });
</script>