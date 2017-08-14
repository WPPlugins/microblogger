<?php
@include("../../../../wp-blog-header.php");

if ($_POST['adminblogmodule'] == 'on')
{
    $adminblogmodule = "TRUE";
}else{
    $adminblogmodule = "FALSE";
}

if ($_POST[microblogmodule] == 'on')
{
    $microblogmodule = "TRUE";
}else{
    $microblogmodule = "FALSE";
}


if ($_POST[activitymodule] == 'on')
{
    $activitymodule = "TRUE";
}else{
    $activitymodule = "FALSE";
}

if ($_POST[keymodule] == 'on')
{
    $keymodule = "TRUE";
}else{
    $keymodule = "FALSE";
}

if ($_POST[RSSOn] == 'on')
{
    $RSSOn = "TRUE";
}else{
    $RSSOn = "FALSE";
}

if ($_POST[showtime] == 'on')
{
    $showtime = "TRUE";
}else{
    $showtime = "FALSE";
}

global $wpdb;
$table = $wpdb->prefix."microBsettings";

        mysql_query("TRUNCATE TABLE ". $wpdb->prefix."microBsettings");

      $query = "INSERT INTO " . $wpdb->prefix."microBsettings" . " (
                      pin,
                      adminblogmodule,
                      mobiletitle,
                      fontcolour,
                      pluginwidth,
                      activitybanner,
                      microblogbanner,
                      microblogcolour,
                      articlefollowscolour,
                      admincolour,
                      usercolour,
                      keymodule,
                      microblogmodule,
                      activitymodule,
                      microblogorder,
                      activityorder,
                      microblogresults,
                      activityresults,
                      fontsize,
                      secondaryfontcolour,
                      showtime,
                      RSSOn,
                      RSSLength,
                      RSSTitle,
                      RSSDescription,
                      RSSLink
                      )VALUES (
                    '$_POST[pin]',
                    '$adminblogmodule',
                    '$_POST[mobiletitle]',
                    '$_POST[fontcolour]',
                    '$_POST[pluginwidth]',
                    '$_POST[activitybanner]',
                    '$_POST[microblogbanner]',
                    '$_POST[microblogcolour]',
                    '$_POST[articlefollowscolour]',
                    '$_POST[admincolour]',
                    '$_POST[usercolour]',
                    '$keymodule',
                    '$microblogmodule',
                    '$activitymodule',
                    '$_POST[microblogorder]',
                    '$_POST[activityorder]',
                    '$_POST[microblogresults]',
                    '$_POST[activityresults]',
                    '$_POST[fontsize]',
                    '$_POST[secondaryfontcolour]',
                    '$showtime',
                    '$RSSOn',
                    '$_POST[RSSLength]',
                    '$_POST[RSSTitle]',
                    '$_POST[RSSDescription]',
                    '$_POST[RSSLink]'
);";
mysql_query($query);
$URL = $_SERVER["HTTP_REFERER"];
header ("Location:$URL");


?>