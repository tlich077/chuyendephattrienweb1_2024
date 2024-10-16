<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3022">
        <div class="container container-custom">
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="box">
                        <a class="title-link" href=""><h5 class="title">SMART PHONE REPAIR</h5></a>
                        <div class="img-box">
                            <img src="3022-1.jpg" alt="">
                            <div class="overlay">
                                <i class="fa fa-link icon"></i>
                            </div>
                        </div>
                            <p class="content">We specialise in Phone repairs for Apple iPhones, iPad, iPod, Samsung, Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</p>
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <a class="title-link" href=""><h5 class="title">TABLETS & IPAD REPAIR</h5></a>
                        <div class="img-box">
                            <img src="3022-2.jpg" alt="">
                            <div class="overlay">
                                <i class="fa fa-link icon"></i>
                            </div>
                        </div>
                            <p class="content">If you are facing any problem with your Tablets / Ipads, Kindly pls go through the menttioned catagories ...</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <a class="title-link" href=""><h5 class="title">DESKTOP & MAC REPAIR</h5></a>
                        <div class="img-box">
                            <img src="3022-3.jpg" alt="">
                            <div class="overlay">
                                <i class="fa fa-link icon"></i>
                            </div>
                        </div>
                            <p class="content">We specialist in providing On-Site Computer Desktop Repair Service and Network Support for all sized business, On-Site Computer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
