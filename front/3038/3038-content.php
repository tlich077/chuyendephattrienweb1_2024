<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
  <div class="type-3038">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-3 custom-padding">
                    <div class="box">
                        <h5 class="heading">SELEC YOUR DEVICE</h5>

                        <ul id="myList" class="myList">
                            <li class="list">iPhone 4</li>
                            <li class="list">iPhone 4s</li>
                            <li class="list">iPhone 5</li>
                            <li class="list">iPhone 5C</li>
                            <li class="list">iPhone 5S</li>
                            <li class="list">iPhone 6</li>
                            <li class="list">iPhone pluse</li>
                            <li class="list">iPhone 6S</li>
                            <li class="list">iPhone 7</li>
                            <li class="list">iPhone X</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 custom-padding" id="child">
                    <div class="box">
                        <h5 class="heading">SELEC BREAKAGE</h5>
                        <div class="content1" id="breakageList">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 custom-padding">
                    <div class="box">

                        <h5 class="heading" id="liTitle">NOT WORKING WI-FI</h5>

                        <div class="content2">
                            After stars heaven divided. Made let can't our divide a beast saw, is one open under cattle.
                            Whose own a. Replenish creepeth our shall fifth, together above one place forth he moved,
                            day
                            man days our Air. He earth days. Deep is.
                        </div>
                        <table id="dataTable" class="table table-bordered"
                            style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td class="table-cell">Replacement Flex cable power button with the
                                    volume buttons, vibrate switch and flash.</td>
                                <td class="table-cell">$110</td>
                                <td class="table-cell">2 hours</td>
                                <td class="table-cell">ODER</td>
                            </tr>
                            <tr>
                                <td class="table-cell">Replacement Home button (no Touch ID)</td>
                                <td class="table-cell">$450</td>
                                <td class="table-cell">1 hour</td>
                                <td class="table-cell">ODER</td>
                            </tr>
                            <tr>
                                <td class="table-cell">Replacement dust mesh voice dynamics</td>
                                <td class="table-cell">$211</td>
                                <td class="table-cell">3 hours</td>
                                <td class="table-cell">ODER</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
