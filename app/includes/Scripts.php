<!--begin::Base Scripts -->
<?php $assets="http://localhost/edit/app/";
      include  '../config/urls.php';?>

<script src="<?=$assets?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>

<script src="<?=$assets?>assets/demo/demo8/base/scripts.bundle.js" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Vendors -->
<script src="<?=$assets?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<!--end::Page Vendors -->
<!--begin::Page Snippets -->
<script src="<?=$assets?>assets/app/js/dashboard.js" type="text/javascript"></script>
<!--end::Page Snippets -->
<!-- begin::Page Loader -->
<script>
    $(window).on('load', function() {
        $('body').removeClass('m-page--loading');
    });
</script>
<?php  include ''.$assets.'assets/logoutscript.php' ?>
<!-- end::Page Loader -->
