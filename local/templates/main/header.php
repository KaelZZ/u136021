<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
<?IncludeTemplateLangFile(__FILE__);?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title="<?$APPLICATION->ShowTitle();?>">Rackhost Hosting & Business Theme</title>
    <?$APPLICATION->ShowHead();?>
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- Stylesheets -->
    <link href="<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/rackhost.css", true);?>" rel="stylesheet" type="text/css" />
    <!-- Javascripts -->
    <script src="<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery-1.7.2.min.js", true);?> type="text/javascript"></script>
    <script src="<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/rackhost.js", true);?>" type="text/javascript"></script>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<!-- Site Wrapper Start -->
<div class="siteWrapper">
    <!-- Site Header -->
    <div class="siteHeaderShadow">
    </div>
    <div class="siteHeader">
        <div class="center">
            <a class="logo" href="<?=SITE_TEMPLATE_PATH;?>/index.html"></a>
            <ul class="navigation">
                <li>
                    <a href="<?=SITE_TEMPLATE_PATH;?>/shared.html"><strong>Shared</strong> Hosting<br /><span>cPanel powered</span></a>
                </li>
                <li>
                    <a class="dropdown" href="<?=SITE_TEMPLATE_PATH;?>/virtual.html"><strong>Virtual</strong> Servers<br /><span>OpenVZ or Xen</span></a>
                    <ul class="dropdown">
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/virtual.html"><strong>OpenVZ</strong> Dallas, TX</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/virtual.html"><strong>OpenVZ</strong> San Diego, CA</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/virtual.html"><strong>Xen</strong> Washington, DC</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/virtual.html"><strong>Xen</strong> Chicago, IL</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?=SITE_TEMPLATE_PATH;?>/dedicated.html"><strong>Dedicated</strong> Servers<br /><span>cPanel or Unmanaged</span></a>
                </li>
                <li>
                    <a class="dropdown" href="<?=SITE_TEMPLATE_PATH;?>/about.html"><strong>About</strong> Rackhost<br /><span>Who We Are</span></a>
                    <ul class="dropdown">
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/team.html"><strong>Our</strong> Team</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/locations.html"><strong>Datacenter</strong> Locations</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/blog.html"><strong>Company</strong> Blog</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/layout.html"><strong>Layout</strong> Elements</a></li>
                        <li><a href="<?=SITE_TEMPLATE_PATH;?>/business.html"><strong>Business</strong> Theme</a></li>
                    </ul>
                </li>
                <li>
                    <a href=<?=SITE_TEMPLATE_PATH;?>/contact.html"><strong>Contact</strong> Us<br /><span>Custom Quotes</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Content Slider -->
    <div class="contentSlider">
        <div class="center">
            <div class="slide clearfix">
                <div class="slideSwitchLabel">
                    <strong>Shared</strong> Hosting
                </div>
                <div class="information">
                    <h1>Shared <span>Hosting</span></h1>
                    <p>Powerful <strong>cPanel</strong> shared hosting on enterprise hardware.</p>
                    <ul class="clearfix">
                        <li><strong>96 MB</strong> Application Memory</li>
                        <li><strong>20</strong> Addon Domains</li>
                        <li><strong>10 GB</strong> Storage</li>
                        <li><strong>400 GB</strong> Monthly Traffic</li>
                    </ul>
                    <div class="box clearfix">
                        <div class="label">
                            yearly<br />from
                        </div>
                        <div class="price">
                            $69
                        </div>
                        <a class="colorButton" href="<?=SITE_TEMPLATE_PATH;?>/shared.html"><span class="pointer"><strong>View all</strong> available plans now</span></a>
                    </div>
                </div>
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/sharedServer.png" alt="Shared" />
            </div>
            <div class="slide clearfix">
                <div class="slideSwitchLabel">
                    <strong>Virtual</strong> Servers
                </div>
                <div class="information">
                    <h1>Virtual <span>Servers</span></h1>
                    <p>Enterprise <strong>OpenVZ</strong> and <strong>Xen</strong> virtual servers on reliable nodes.</p>
                    <ul class="clearfix">
                        <li><strong>1x Intel Xeon</strong> Core 2.40GHz</li>
                        <li><strong>256 MB</strong> DDR3 RAM</li>
                        <li><strong>20 GB</strong> SATA2</li>
                        <li><strong>1 TB</strong> Monthly Traffic</li>
                    </ul>
                    <div class="box clearfix">
                        <div class="label">
                            monthly<br />from
                        </div>
                        <div class="price">
                            $12
                        </div>
                        <a class="colorButton" href="<?=SITE_TEMPLATE_PATH;?>/virtual.html"><span class="pointer"><strong>View all</strong> available plans now</span></a>
                    </div>
                </div>
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/virtualServer.png" alt="Virtual" />
            </div>
            <div class="slide clearfix">
                <div class="slideSwitchLabel">
                    <strong>Dedicated</strong> Servers
                </div>
                <div class="information">
                    <h1>Dedicated <span>Servers</span></h1>
                    <p>Experience <strong>enterprise class</strong> dedicated resources at a fraction of a cost.</p>
                    <ul class="clearfix">
                        <li><strong>2x Intel Xeon</strong> 5620 2.40GHz</li>
                        <li><strong>48 GB</strong> DDR3 RAM</li>
                        <li><strong>4x 500 GB</strong> SAS 10.000 RPM</li>
                        <li><strong>10 TB</strong> Monthly Traffic</li>
                    </ul>
                    <div class="box clearfix">
                        <div class="label">
                            monthly<br />from
                        </div>
                        <div class="price">
                            $289
                        </div>
                        <a class="colorButton" href="<?=SITE_TEMPLATE_PATH;?>/dedicated.html"><span class="pointer"><strong>View all</strong> available plans now</span></a>
                    </div>
                </div>
                <img src="<?=SITE_TEMPLATE_PATH;?>/images/slider/dedicatedServer.png" alt="Dedicated" />
            </div>
        </div>
    </div>
    <!-- Content Wrapper -->
    <div class="contentWrapper">