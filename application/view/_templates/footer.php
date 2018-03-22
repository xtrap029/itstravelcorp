    <div class="container">

    </div>

  


    <footer>
        <div id="contact-us" class="container"> 
            <div class="row">


                <div class="col-sm-3 col-lg-3">
                    <div class="widget">
                        <h4>Get in touch with us</h4>
                        <p>Call Us and We are happy to assist you.</p>
                        <p>
                            <i class="icon-phone"></i> <strong>Landline:</strong> (02) 812-4970<br>
                            <i class="icon-phone"></i> <strong>Mobile:</strong> (0916) 785-4754<br>
                            <i class="icon-envelope-alt"></i> <strong>Email:</strong> reservations@itstravelcorp.com
                        </p>
                    </div>
                </div>
                
                <div class="col-sm-3 col-lg-3">
                    <!-- <div class="widget">
                        <h4>Innovative Travel Solutions</h4>
                        <ul class="link-list">
                            <li><a href="<?php echo Config::get('URL'); ?>">Home</a></li>
                            <li><a href="#domestic">Domestic</a></li>
                            <li><a href="#international">International</a></li>
                            <li><a href="#">Promos</a></li>
                            <li><a href="#contact-us">Contact Us</a></li>
                        </ul>
                    </div> -->
                </div>

                <div class="col-sm-3 col-lg-3">
                    <div class="widget">
                        <h4>Innovative Travel Solutions</h4>
                        <ul class="link-list">
                            <li><a href="<?php echo Config::get('URL'); ?>">Home</a></li>
                            <li><a href="#domestic">Domestic</a></li>
                            <!-- <li><a href="#international">International</a></li>
                             <li><a href="#">Promos</a></li> -->
                            <li><a href="#contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-sm-3 col-lg-3">
                    <div class="widget">
                        <h4>Newsletter</h4>
                        <p>Fill your email and sign up for monthly newsletter to keep updated</p>
                        <div class="form-group multiple-form-group input-group">
                            <input type="email" name="email" class="form-control">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-theme btn-add">Subscribe</button>
                            </span>
                        </div>
                    </div>

                    
                </div>

            </div>
        </div>


        <div id="sub-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>&copy; Innovative Travel Solutions</p>
                            <br>
                        </div>
                    </div>

                    <div class="col-lg-6">
                    	<!--
                        <ul class="social-network">
                            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                        </ul> --->
                    </div>

                </div>
            </div>
        </div>


    </footer>

    <div class="container text-center" style="padding-top:20px; padding-bottom:20px;">
        <img src="<?php echo Config::get('URL'); ?>assets/img/bank.png">

    </div>


    <!-- Core Scripts -->
    <script src="<?php echo Config::get('URL'); ?>assets/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo Config::get('URL'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo Config::get('URL'); ?>vendor/daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo Config::get('URL'); ?>vendor/daterangepicker/daterangepicker.js"></script>

    <script src="<?php echo Config::get('URL'); ?>vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo Config::get('URL'); ?>vendor/jquery-validation/additional-methods.min.js"></script>


    <script src="<?php echo Config::get('URL'); ?>vendor/flexslider/jquery.flexslider-min.js"></script> 
    <script src="<?php echo Config::get('URL'); ?>vendor/flexslider/flexslider.config.js"></script>


    <script src="<?php echo Config::get('URL'); ?>assets/js/booking-validations.js"></script>

    <script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo Config::get('URL'); ?>public/vendor/bootstrap-datepicker/js/custom-datepicker.js"></script>
    
    


    <script>
 


        function toggleIcon(e) {
            $(e.target)
                .prev('.panel-heading')
                .find(".more-less")
                .toggleClass('glyphicon-plus glyphicon-minus');
        }
        $('.panel-heading').on('hidden.bs.collapse', toggleIcon);
        $('.panel-heading').on('shown.bs.collapse', toggleIcon);

        $('.panel-heading').on('click',function(e){
            if($(this).parents('.panel').children('.panel-collapse').hasClass('in')){
                e.stopPropagation();
            }
            $('.panel-heading').removeClass('active');
            $(this).addClass('active');
        });

        $("#list-hotels :radio").hide().click(function(e){
            e.stopPropagation();
        });

        $("#list-hotels .hotels").click(function(e){
            $(this).closest("#list-hotels").find(".hotels").removeClass("selected");
            $(this).addClass("selected").find(":radio").click();
        });
    </script>


<script src="<?php echo Config::get('URL'); ?>assets/js/jquery.isotope.js"></script>
<script>


    $(window).load(function(){
        var $container = $('.package-sortables');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
    
        $('.package-filter a').click(function(){
            $('.package-filter .current').removeClass('current');
            $(this).addClass('current');
    
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });





    });

    $(window).load(function(){
        var $container = $('.hotel-sortables');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
    
        $('.hotel-filter a').click(function(){
            $('.hotel-filter .current').removeClass('current');
            $(this).addClass('current');
            var x;
            var selector = $(this).attr('data-filter');
            var selector2 = parseInt($("#adult").val()) + parseInt($("#child").val());

            if(selector2 == 1 || selector2 == 2)
            {
                x = '-twin';

            }else if(selector2 == 3)
            {
                x = '-triple';
            }else{

                x = '-quad';
            }

            $container.isotope({
                filter: selector + x,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

        
    });


    $(window).load(function(){
        var $container = $('.hotel-sortables');
        $container.isotope({
            filter: '.default',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
    
        $('.filter-select').on( 'change', function() {
            
            var count = parseInt($("#adult").val()) + parseInt($("#child").val());
            var selector = ".twin";

            if(count == 1 || count == 2)
            {
                selector = ".twin";
            }else if(count == 3)
            {
                selector = ".triple";
            }else{
                selector =".quad";
            }
            
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            
        });

        
    });
    
    
</script>

    
    

</body>
</html>