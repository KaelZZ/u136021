<?php ?>

<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
<?IncludeTemplateLangFile(__FILE__);?>

<html>
<head>
    <title>Hosting Company</title>
    <?$APPLICATION->ShowHead();?>
    <!-- ImageReady Preload Script (index.psd) -->
    <script type="text/javascript">
        <!--

        function newImage(arg) {
            if (document.images) {
                rslt = new Image();
                rslt.src = arg;
                return rslt;
            }
        }

        function changeImages() {
            if (document.images && (preloadFlag == true)) {
                for (var i=0; i<changeImages.arguments.length; i+=2) {
                    document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
                }
            }
        }

        var preloadFlag = false;
        function preloadImages() {
            if (document.images) {
                home_over = newImage("<?=SITE_TEMPLATE_PATH;?>/images/home-over.jpg");
                company_over = newImage("<?=SITE_TEMPLATE_PATH;?>/images/company-over.jpg");
                hosting_over = newImage("<?=SITE_TEMPLATE_PATH;?>/images/hosting-over.jpg");
                contacts_over = newImage("<?=SITE_TEMPLATE_PATH;?>/images/contacts-over.jpg");
                preloadFlag = true;
            }
        }

        // -->
    </script>
    <!-- End Preload Script -->
</head>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/styles.css", true);?>
<center>
    <body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="preloadImages();">
    <?$APPLICATION->ShowPanel();?>
    <!-- ImageReady Slices (index.psd) -->
    <table id="Table_01" width="776" height="681" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td rowspan="14">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/m1.jpg" width="58" height="680" alt=""></td>
            <td colspan="10">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/title.jpg" width="393" height="96" alt=""></td>
            <td colspan="5" rowspan="4">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/m3.jpg" width="259" height="267" alt=""></td>
            <td rowspan="14">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/m2.jpg" width="65" height="680" alt=""></td>
            <td>
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/spacer.gif" width="1" height="96" alt=""></td>
        </tr>
        <tr>
            <td colspan="5">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/sp1.jpg" width="183" height="42" alt=""></td>
            <td colspan="2" rowspan="3">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/sp5.jpg" width="58" height="171" alt=""></td>
            <td colspan="3">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/bp1.jpg" width="152" height="42" alt=""></td>
            <td>
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/spacer.gif" width="1" height="42" alt=""></td>
        </tr>
        <tr>
            <td rowspan="2">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/sp2.jpg" width="29" height="129" alt=""></td>
            <td colspan="2" align="left" valign="top" background="<?=SITE_TEMPLATE_PATH;?>/images/b_sp.jpg">300 Mb Space<br>
                15 Gb Tranfer<br>
                20 POP3 E-mail<br>
                C-Panel</td>
            <td colspan="2" rowspan="2" align="left" valign="top">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/sp4.jpg" width="56" height="129" alt=""></td>
            <td colspan="2" align="left" valign="top" background="<?=SITE_TEMPLATE_PATH;?>/images/b_bp.jpg">500 Mb Space<br>
                20 Gb Tranfer<br>
                30 POP3 E-mail<br>
                C-Panel</td>
            <td rowspan="2">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/bp3.jpg" width="53" height="129" alt=""></td>
            <td>
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/spacer.gif" width="1" height="49" alt=""></td>
        </tr>
        <tr>
            <td colspan="2">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/sp3.jpg" width="98" height="80" alt=""></td>
            <td colspan="2">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/bp2.jpg" width="99" height="80" alt=""></td>
            <td>
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/spacer.gif" width="1" height="80" alt=""></td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="#"
                   onmouseover="window.status='home'; changeImages('home', '<?=SITE_TEMPLATE_PATH;?>/images/home-over.jpg'); return true;"
                   onmouseout="window.status=''; changeImages('home', '<?=SITE_TEMPLATE_PATH;?>/images/home.jpg'); return true;"
                   onmousedown="changeImages('home', '<?=SITE_TEMPLATE_PATH;?>/images/home-over.jpg'); return true;"
                   onmouseup="changeImages('home', '<?=SITE_TEMPLATE_PATH;?>/images/home-over.jpg'); return true;">
                    <img name="home" src="<?=SITE_TEMPLATE_PATH;?>/images/home.jpg" width="101" height="54" border="0" alt="home"></a></td>
            <td colspan="4">
                <a href="#"
                   onmouseover="window.status='company'; changeImages('company', '<?=SITE_TEMPLATE_PATH;?>/images/company-over.jpg'); return true;"
                   onmouseout="window.status=''; changeImages('company', '<?=SITE_TEMPLATE_PATH;?>/images/company.jpg'); return true;"
                   onmousedown="changeImages('company', '<?=SITE_TEMPLATE_PATH;?>/images/company-over.jpg'); return true;"
                   onmouseup="changeImages('company', '<?=SITE_TEMPLATE_PATH;?>/images/company-over.jpg'); return true;">
                    <img name="company" src="<?=SITE_TEMPLATE_PATH;?>/images/company.jpg" width="117" height="54" border="0" alt="company"></a></td>
            <td colspan="2">
                <a href="#"
                   onmouseover="window.status='hosting'; changeImages('hosting', '<?=SITE_TEMPLATE_PATH;?>/images/hosting-over.jpg'); return true;"
                   onmouseout="window.status=''; changeImages('hosting', '<?=SITE_TEMPLATE_PATH;?>/images/hosting.jpg'); return true;"
                   onmousedown="changeImages('hosting', '<?=SITE_TEMPLATE_PATH;?>/images/hosting-over.jpg'); return true;"
                   onmouseup="changeImages('hosting', '<?=SITE_TEMPLATE_PATH;?>/images/hosting-over.jpg'); return true;">
                    <img name="hosting" src="<?=SITE_TEMPLATE_PATH;?>/images/hosting.jpg" width="108" height="54" border="0" alt="hosting"></a></td>
            <td colspan="4">
                <a href="#"
                   onmouseover="window.status='contacts'; changeImages('contacts', '<?=SITE_TEMPLATE_PATH;?>/images/contacts-over.jpg'); return true;"
                   onmouseout="window.status=''; changeImages('contacts', '<?=SITE_TEMPLATE_PATH;?>/images/contacts.jpg'); return true;"
                   onmousedown="changeImages('contacts', '<?=SITE_TEMPLATE_PATH;?>/images/contacts-over.jpg'); return true;"
                   onmouseup="changeImages('contacts', '<?=SITE_TEMPLATE_PATH;?>/images/contacts-over.jpg'); return true;">
                    <img name="contacts" src="<?=SITE_TEMPLATE_PATH;?>/images/contacts.jpg" width="100" height="54" border="0" alt="v"></a></td>
            <td colspan="3">
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/m4.jpg" width="226" height="54" alt=""></td>
            <td>
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/spacer.gif" width="1" height="54" alt=""></td>
        </tr>
