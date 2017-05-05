<?php

$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);
$showsidepre = $hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT);
$showsidepost = $hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT);

$OUTPUT->doctype(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title><?php get_string('configtitle', 'theme_resilience') ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
</head>
<body id="<?php p($PAGE->bodyid) ?>" >

  <div class="image-container">
   	<div id="page" class="container-fluid">
        <!-- Start Main Regions -->
    	<div id="page-content" class="row-fluid">
    	    <section id="region-main" class="span12">
                <?php
                echo $OUTPUT->course_content_header();
                echo $OUTPUT->main_content();
                echo $OUTPUT->course_content_footer();
                ?>
            </section>
        </div>
        <!-- End Main Regions -->
	</div>
  </div>
</div>

</body>
</html>







<div id="page-footer" class="clearfix">

    <?php
    echo $OUTPUT->standard_footer_html();
    ?>
</div>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>