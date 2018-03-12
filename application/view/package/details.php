


<div id="banners" class="section-container" style="background: url(<?php echo Config::get('URL'); ?>assets/img/banners/<?= $this->location; ?>.jpg) no-repeat center;">
    <div class="container">
        <div class="row">
            <h1 class="packages-header"> Package Details </h1>
        </div>
    </div>
</div>


<div class="section-container" style="padding-bottom:0px;">
    <div class="container">
        <ol class="breadcrumb breadcrumb-arrow">
            <li><a href="<?php echo Config::get('URL'); ?>">Home</a></li>
            <li><a href="<?php echo Config::get('URL'); ?>packages/<?= $this->location; ?>"><?= ucwords($this->location); ?> Packages</a></li>
            <li class="active"><span><?= ucwords(HelperModel::RemoveSlug($this->packagename)); ?></span></li>
        </ol>
    </div>
</div>


<div class="section-container">
    <div class="container">

        <div class="row" style="margin-bottom:40px;">
            
            <div class="col-md-8 col-sm-6">
                <div class="image-container">
                    <!-- <img class="img-responsive" src="<?php echo Config::get('URL'); ?>assets/img/coron/cebu-badian-2.jpg"> -->
                    <img class="img-responsive" src="<?php echo Config::get('URL') . $this->package["cover"]; ?>">
                </div>
            </div>


            <div class="col-md-4 col-sm-6 sidebar">
                <h2 class="sidebar-title">PACKAGE DETAILS</h2>
                
                <div class="sidebar-content">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">
                            <div class="panel-heading active" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Description
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body" style="text-align: justify;">
                                    <?= $this->package["description"]; ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Inclusions
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul>
                                        <?php foreach($this->package["inclusions"] as $inc) { ?>
                                        <li><?= $inc;?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Itinerary
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <ul style="list-style:none; padding-left:0;">
                                        <?php foreach($this->package["itinerary"] as $key => $value) { ?>
                                            <li><strong><?= $key;?> -</strong> <?= $value; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>
        

        <form class="booking-validation" method="POST" action="<?php echo Config::get('URL'); ?>reservation">
        <div class="row booking-menu" style="margin-bottom:60px;">
            <input type="hidden" name="package-name" value="<?= HelperModel::RemoveSlug($this->packagename); ?>">
            <input type="hidden" name="package-location" value="<?= $this->location; ?>">
            <h2 class="sidebar-title">BOOKING DETAILS</h2>
            <div class="col-md-3 no-gutter">
                <label for="dates" class="widgetlabel">Check In</label>
                <div class="icon-addon addon-lg">
                    <input type="text" class="form-control input-lg" name="check-in" id="checkin" onkeypress="return false">
                    <label for="checkin" class="fa fa-calendar" rel="tooltip" title="check in date"></label>
                </div>
            </div>

            <div class="col-md-3 no-gutter">
                <label for="dates" class="widgetlabel">Check Out</label>
                <div class="icon-addon addon-lg">
                    <input type="text" class="form-control input-lg" name="check-out" id="checkout" onkeypress="return false" readonly>
                    <label for="checkout" class="fa fa-calendar" rel="tooltip" title="check out date"></label>
                </div>
            </div>

            <div class="col-md-2 no-gutter">
                <label for="dates" class="widgetlabel">Adult/s</label>
                <div class="icon-addon addon-lg">
                    <select id="adult" name="adult" class="form-control filter-select">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option data-group=".triple" value="9">9</option>
                    </select>
                    <label for="adult" class="fa fa-male" rel="tooltip" title="check out date"></label>
                </div>
            </div>

            <div class="col-md-2 no-gutter">
                <label for="dates" class="widgetlabel">Child/s</label>
                <div class="icon-addon addon-lg">
                    <select id="child" name="child" class="form-control filter-select">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                    <label for="adult" class="fa fa-child" rel="tooltip" title="check out date"></label>
                </div>
            </div>

            <div class="col-md-2 no-gutter">
                <button type="submit" class="btn btn-lg btn-primary" style="margin-top:35px; width: 100%;">Book Now</button>
            </div>
        </div>
        

        <div class="row hotel-filter" style="margin-bottom:20px;">
            <div class="col-md-12 no-gutter">
                <a href="#" data-filter="*" class="package-selector">All</a>
                <a href="#" data-filter=".budget" class="package-selector">Budget</a>
                <a href="#" data-filter=".standard" class="package-selector">Standard</a>
                <a href="#" data-filter=".luxury" class="package-selector">Luxury</a>
            </div>
        </div>
        

        <div class="row" style="margin-bottom:0px;">
            <div><input type="hidden" name="hotel-rate" class="hotel-rate"></div>
        </div>

        <div id="list-hotels" class="row hotel-sortables" style="margin-bottom:20px;">

            <?php foreach($this->package["hotels"] as $x=>$val) { ?>
            <div class="col-xs-18 col-sm-6 col-md-4 default <?= $val["category"]; ?>-twin twin">
                <div class="hotels pointer">
                    <div class="hotel-thumb">
                        <img class="img-responsive" src="<?php echo Config::get('URL') . PackageModel::HotelImages($this->location, $x)["cover"]; ?>">
                    </div>

                    <div class="hotel-captions">
                        <div class="row">
                            <div class="col-xs-6" style="height:60px;">
                                <span class="hotel-name"><?= ucwords($x); ?></span>
                            </div>

                            <div class="col-xs-6" >
                                <div class="col-xs-12">
                                    <span class="rate">&#8369; <?= number_format($val["twin"]); ?><small>/pax</small></span>
                                </div>

                                <div class="col-xs-12">
                                    <span class="subrate">based on twin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="radio" name="selected-hotel" id="<?= $val["twin"]; ?>" value="<?= ucwords($x); ?>" />

                </div>
            </div>

            <?php if($val["triple"] != "0") { ?>
            <div class="col-xs-18 col-sm-6 col-md-4 <?= $val["category"]; ?>-triple triple">
                <div class="hotels pointer">
                    <div class="hotel-thumb">
                        <img class="img-responsive" src="<?php echo Config::get('URL') . PackageModel::HotelImages($this->location, $x)["cover"]; ?>">
                    </div>

                    <div class="hotel-captions">
                        <div class="row">
                            <div class="col-xs-6" style="height:60px;">
                                <span class="hotel-name"><?= ucwords($x); ?></span>
                            </div>

                            <div class="col-xs-6" >
                                <div class="col-xs-12">
                                    <span class="rate">&#8369; <?= number_format($val["triple"]); ?><small>/pax</small></span>
                                </div>

                                <div class="col-xs-12">
                                    <span class="subrate">based on triple</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="radio" name="selected-hotel" id="<?= $val["triple"]; ?>" value="<?= ucwords($x); ?>" />

                </div>
            </div>
            <?php } else { ?>
            
                <?php if($val["quad"] != "0") { ?>
                <div class="col-xs-18 col-sm-6 col-md-4 <?= $val["category"]; ?>-triple triple">
                    <div class="hotels pointer">
                        <div class="hotel-thumb">
                            <img class="img-responsive" src="<?php echo Config::get('URL') . PackageModel::HotelImages($this->location, $x)["cover"]; ?>">
                        </div>

                        <div class="hotel-captions">
                            <div class="row">
                                <div class="col-xs-6" style="height:60px;">
                                    <span class="hotel-name"><?= ucwords($x); ?></span>
                                </div>

                                <div class="col-xs-6" >
                                    <div class="col-xs-12">
                                        <span class="rate">&#8369; <?= number_format($val["quad"]); ?><small>/pax</small></span>
                                    </div>

                                    <div class="col-xs-12">
                                        <span class="subrate">based on quad</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="radio" name="selected-hotel" id="<?= $val["quad"]; ?>" value="<?= ucwords($x); ?>" />

                    </div>
                </div>
                <?php } ?>


            <?php } ?>
            

                <?php if($val["quad"] != "0") { ?>
                <div class="col-xs-18 col-sm-6 col-md-4 <?= $val["category"]; ?>-quad quad">
                    <div class="hotels pointer">
                        <div class="hotel-thumb">
                            <img class="img-responsive" src="<?php echo Config::get('URL') . PackageModel::HotelImages($this->location, $x)["cover"]; ?>">
                        </div>

                        <div class="hotel-captions">
                            <div class="row">
                                <div class="col-xs-6" style="height:60px;">
                                    <span class="hotel-name"><?= ucwords($x); ?></span>
                                </div>

                                <div class="col-xs-6" >
                                    <div class="col-xs-12">
                                        <span class="rate">&#8369; <?= number_format($val["quad"]); ?><small>/pax</small></span>
                                    </div>

                                    <div class="col-xs-12">
                                        <span class="subrate">based on quad</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="radio" name="selected-hotel" id="<?= $val["quad"]; ?>" value="<?= ucwords($x); ?>" />

                    </div>
                </div>
                <?php } ?>

    
            <?php } ?>

        
        </div>

        </form>

    </div>
</div>

<script src="<?php echo Config::get('URL'); ?>assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
        $("[id=triple]").css({ 'display': "none" });
    });
    function getFormatDate(d){
        return d.getMonth()+1 + '/' + d.getDate() + '/' + d.getFullYear()
    }
    var minDate = getFormatDate(new Date(new Date().setDate(new Date().getDate() + 2))),
    mdTemp = new Date(),
    maxDate = getFormatDate(new Date(mdTemp.setDate(mdTemp.getDate() + 5)));
    
    var minDate2 = getFormatDate(new Date(new Date().setDate(new Date().getDate() + 2))),
    mdTemp2 = new Date(),
    maxDate2 = getFormatDate(new Date(mdTemp2.setDate(mdTemp2.getDate() + 3)));

    $(function() {
        $('input[name="check-in"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minDate: minDate,
            startDate: moment().add(1, 'day'),
            format: 'mm/dd/YYYY'
        }, 
        function(start, end, label) {
            var newdate = new Date(end);
            var old= new Date(end);
            
            var years = moment().diff(start, 'day');
            $('input[name="check-out"]').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                minDate: new Date(old.setDate(old.getDate() + 2)),
                startDate: new Date(newdate.setDate(newdate.getDate() + 2)),
                maxDate: new Date(newdate.setDate(newdate.getDate())),
                format: 'mm/dd/YYYY'
            });
            
        });
    });

    $('input[name="selected-hotel"]').change(function(){
        var price = $('input[name="selected-hotel"]:checked').prop('id');

        $('.hotel-rate').val(price);
        // alert(price);
    });

    
   

</script>
