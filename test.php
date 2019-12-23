<!DOCTYPE html>
<html>
    <head>
        <title>One League</title>
        <link rel="icon" type="image/png" sizes="32x32" href="image/favicon.png">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/bootbox.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/custom-styles.css">

    </head>
    <body>
        <div>
            <div class="container">
                <div class="row header-container">
                    <div class="col-sm-3 col-xs-4">
                        <img class="logo" src="image/logos/one-league.png" title="One League" alt="One League">
                    </div>
                    <div class="col-sm-9 col-xs-8">
                        <p class="heading">MANY BRANDS. ONE LEAGUE.</p>
                    </div>                              
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <hr class="dark-line" />
                        <!--<div class="down-arrow hidden-sm">
                            <img src="image/down-arrow.png" alt="" class="tossing" id="test" />
                        </div>-->
                    </div>
                </div>
                <div>
                <?php 
                    $service_url = 'http://www.embassyplus.in/api/companyUser/companyUserSelectPrmUniqueIdForEmTransit?hashValue=8206D1E99FDBFB677C82EBBE2BEB41813AAA765D&uniqueId=9272&pagename=ticket';
                    $curl = curl_init($service_url);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    $curl_response = curl_exec($curl);
                    if ($curl_response === false) {
                        $info = curl_getinfo($curl);
                        curl_close($curl);
                        die('error occured during curl exec. Additioanl info: ' . var_export($info));
                    }
                    curl_close($curl);
                    $decoded = json_decode($curl_response);
                    if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
                        die('error occured: ' . $decoded->response->errormessage);
                    }
                    echo 'response ok!';
                ?>
                </div>
            </div>
        </div>
        <div class="footer-content">Copyrights 2017. All Rights Reserved.</div>
    </body>
</html>
