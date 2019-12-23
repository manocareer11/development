<?php
    
    //$site_url = 'http://www.theserai.in/'; // Live
    // $site_url = 'http://52.66.117.60/'; // Amazon LightSail
    // $site_url = 'http://64.111.117.212/'; // Dreamhost VPS
    // $site_url = 'http://www.tiramisumedia.com/testbed/theserainew/'; // Testbed
//     $site_url = 'http://localhost/theserainew-from-64.111.117.212/'; // Local
    $site_url = 'http://10.1.1.6:8085/theserai/'; // Local

    $mamifestpath = file_get_contents($site_url ."public/build/rev-manifest.json");
    $mamifestjson = json_decode($mamifestpath, true);
    $minifiedjsfilename = "public/build/js/" . $mamifestjson['bundle-min.js'];
    $minifiedcssfilename = "public/build/css/" . $mamifestjson['stylesheet.css'];
    $production = false;

    function isActivePage( $this_page = 'null', $url = 'null' ) {
        
        if ($url == $this_page)
            echo 'active';
        
    }
    
?>

