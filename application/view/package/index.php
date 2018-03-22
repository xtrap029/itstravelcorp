<div id="banners" class="section-container" style="background: url(<?php echo Config::get('URL'); ?>assets/img/banners/<?= $this->location; ?>.jpg) no-repeat center; background-size: 100%;">
    <div class="container">
        <div class="row">
            <h1 class="packages-header"> List of Packages </h1>
        </div>
    </div>
</div>


<div class="section-container" style="padding-bottom:0px;">
    <div class="container">
        <ol class="breadcrumb breadcrumb-arrow">
            <li><a href="<?php echo Config::get('URL'); ?>">Home</a></li>
            <li class="active"><span><?= ucwords($this->location); ?> Packages</span></li>
        </ol>
    </div>
</div>

<div class="section-container">
    <div class="container">

        <div id="package-filter" class="row package-filter" style="margin-bottom:20px;">
            <div class="col-md-12 no-gutter">
                <a href="#" data-filter="*" class="package-selector">All</a>
                <?php foreach($this->categories as $category) { ?>
                    <a href="#" data-filter=".<?= HelperModel::CreateSlug($category); ?>" class="package-selector"><?= ucwords($category); ?></a>
                <?php } ?>
            </div>
        </div>
        
        <div id="package-sortables" class="row package-sortables" style="margin-bottom:20px;">
            <?php foreach($this->packages as $package) { $detail = PackageModel::PackageDetails($this->location, $package); ?>
                <div  class="col-xs-18 col-sm-4 col-md-4 package-container no-gutter <?= HelperModel::CreateSlug($detail["category"]); ?>">   
                    <div class="package-items">
                        <a class="package-content" href="<?php echo Config::get('URL') . 'packages/' . $this->location . '/'. HelperModel::CreateSlug($package); ?>">
                            <img class="img-responsive" src="<?php echo Config::get('URL') . $detail["banner"]; ?>">
                            <div class="content">
                                <!-- <h1><?= ucwords($package); ?></h1> -->
                                <p style="background: rgba(<?= $detail["rgb"]; ?>,0.8);">
                                3Days/2Nights Hotel Accomodation <br> Roundtrip Airport Transfers
                                    <?php $len = count($detail["inclusions"]); foreach($detail["inclusions"] as $inc) { ?>
                                        

                                    <?php } ?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>

        </div>




    </div>
</div>


