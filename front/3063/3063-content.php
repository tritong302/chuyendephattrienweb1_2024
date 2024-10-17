<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3063</title>
</head>

<body>
    <div class="type-3063 ">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h1>Pricing Plans</h1>
                </div>
                <!-- Cột đầu tiên -->
                <div class="col-md-3">
                    <div class="pt-head">
                        <div class="caption">Starting At</div>
                        <div class="pt-price-tag">$79<span>/mo</span></div>
                        <div class="pt-plan">Basic</div>
                    </div>
                    <ul>
                        <li>No Setup Fees</li>
                        <li>Professionally Recorded Greeting</li>
                        <li>Conference Bridge</li>
                        <li>VOIP Mobile App</li>
                        <li>Team Presence</li>
                        <li>24/7/365 Tech Support</li>
                    </ul>
                    <div class="pt-footer"><a href="#" class="btn-custom">BUY NOW</a></div>
                </div>
                <!-- Cột thứ hai (Pro) -->
                <div class="col-md-3 popular">
                    <div class="pt-head">
                        <div class="caption">Starting At <span><i class="fa-regular fa-gem"></i></span></div>
                        <div class="pt-price-tag">$129<span>/mo</span></div>
                    </div>
                    <div class="pt-plan">Pro</div>
                    <div class="pt-body">
                        <div class="pt-features">
                            <ul>
                                <li>No Setup Fees</li>
                                <li>Professionally Recorded Greeting</li>
                                <li>Conference Bridge</li>
                                <li>VOIP Mobile App</li>
                                <li>Team Presence</li>
                                <li>24/7/365 Tech Support</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pt-footer"><a href="#" class="btn-custom">BUY NOW</a></div>
                </div>

                <!-- Cột thứ ba -->
                <div class="col-md-3">
                    <div class="pt-head">
                        <div class="caption">Starting At</div>
                        <div class="pt-price-tag">$179<span>/mo</span></div>
                    </div>
                    <div class="pt-plan">Pro Plus</div>
                    <div class="pt-body">
                        <div class="pt-features">
                            <ul>
                                <li>No Setup Fees</li>
                                <li>Professionally Recorded Greeting</li>
                                <li>Conference Bridge</li>
                                <li>VOIP Mobile App</li>
                                <li>Team Presence</li>
                                <li>24/7/365 Tech Support</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pt-footer"><a href="#" class="btn-custom">BUY NOW</a></div>
                </div>
                <!-- Cột thứ tư -->
                <div class="col-md-3">
                    <div class="pt-head">
                        <div class="caption">Starting At</div>
                        <div class="pt-price-tag">$499<span>/mo</span></div>
                    </div>
                    <div class="pt-plan">Enterprise</div>
                    <div class="pt-body">
                        <div class="pt-features">
                            <ul>
                                <li>No Setup Fees</li>
                                <li>Professionally Recorded Greeting</li>
                                <li>Conference Bridge</li>
                                <li>VOIP Mobile App</li>
                                <li>Team Presence</li>
                                <li>24/7/365 Tech Support</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pt-footer"><a href="#" class="btn-custom">BUY NOW</a></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>