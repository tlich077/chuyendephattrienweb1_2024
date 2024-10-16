<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/3038.less', 'css/3038.css');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>3038</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
              <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/3038.css" rel="stylesheet" type="text/css"/>
 
    </head>
    <body>
        <?php include './3038-content.php'; ?>
        <script>
        const dataArrays = [
            ["Not working camera", "Not working camera", "Not working button", "Sound problems", "Not working WI-FI", "No screen light", "Discharged battery", "Replacement housing", "Replacement camera", "Protective glass"],
            ["Not working camera", "Not working WI-FI", "Not working button", "Discharged battery", "Sound problems", "No screen light", "Replacement housing", "Replacement camera", "Protective glass"],
            ["Sound problems", "Not working WI-FI", "Not working button", "No screen light", "Not working camera", "Discharged battery", "Replacement housing", "Replacement camera", "Protective glass"],
            ["Not working WI-FI", "Not working button", "Replacement camera", "Replacement housing", "Protective glass"],
            ["Sound problems", "Not working WI-FI", "Not working button", "No screen light", "Not working camera", "Discharged battery", "Replacement housing", "Replacement camera", "Protective glass"],
            ["Not working camera", "Not working WI-FI", "Not working button", "Discharged battery", "Sound problems", "No screen light", "Replacement housing", "Replacement camera", "Protective glass"],
            ["Not working WI-FI", "Not working button", "Replacement camera", "Replacement housing", "Protective glass"],
            ["Not working WI-FI", "Not working button", "No screen light", "Not working camera", "Discharged battery", "Replacement housing", "Replacement camera", "Protective glass"],
            ["Not working camera", "Not working WI-FI", "Not working button", "Discharged battery", "Sound problems", "No screen light", "Replacement housing", "Replacement camera", "Protective glass"],
            ["Sound problems", "Not working WI-FI", "Not working button", "No screen light", "Not working camera", "Discharged battery", "Replacement housing", "Replacement camera", "Protective glass"],
        ]
        const jsonData = {
            "Not working camera": [
                { name: "Replacement Flex cable power button with the volume buttons, vibrate switch and flash.", price: "$110", time: "2 hours", order: "Order" },
                { name: "Replacement Home button (no Touch ID)", price: "$450", time: "1 hour", order: "Order" },
                { name: "Replacement dust mesh voice dynamics", price: "$211", time: "3 hours", order: "Order" }
            ],
            "Not working button": [
                { name: "Replacement Home button (no Touch ID)", price: "$300", time: "1.5 hours", order: "Order" },
                { name: "Replacement dust mesh voice dynamics", price: "$100", time: "3 hours", order: "Order" },
                { name: "Replacement Flex cable power button with the volume buttons, vibrate switch and flash.", price: "$110", time: "2 hours", order: "Order" },
            ],
            "Sound problems": [
                { name: "Replacement Home button (no Touch ID)", price: "$300", time: "1.5 hours", order: "Order" },
                { name: "Replacement Flex cable power button with the volume buttons, vibrate switch and flash.", price: "$110", time: "2 hours", order: "Order" },
                { name: "Replacement dust mesh voice dynamics", price: "$100", time: "3 hours", order: "Order" },
            ],
            "No screen light": [
                { name: "Replacement Home button (no Touch ID)", price: "$300", time: "1.5 hours", order: "Order" },
                { name: "Replacement Flex cable power button with the volume buttons, vibrate switch and flash.", price: "$110", time: "2 hours", order: "Order" },
                { name: "Replacement dust mesh voice dynamics", price: "$100", time: "3 hours", order: "Order" },
            ],
            "Discharged battery": [
                { name: "Replacement Flex cable power button with the volume buttons, vibrate switch and flash.", price: "$110", time: "2 hours", order: "Order" },
                { name: "Replacement Home button (no Touch ID)", price: "$300", time: "1.5 hours", order: "Order" },
                { name: "Replacement dust mesh voice dynamics", price: "$100", time: "3 hours", order: "Order" },
            ],
        };
        const listItems = document.querySelectorAll('#myList li');
        const breakageList = document.getElementById('breakageList');
        const liTitle = document.getElementById('liTitle');
        const dataTable = document.getElementById('dataTable');

        function updateData(index) {
            listItems.forEach((li, i) => {
                li.classList.remove('active'); 
                li.innerHTML = li.textContent; 
                if (i === index) {
                    li.classList.add('active'); 
                    li.innerHTML += ' <i class="fa fa-arrow-right"></i>';
                }
            });

          
            const previousUl = breakageList.querySelector('ul'); 
            if (previousUl) {
                previousUl.remove();
            }

            const ulId = `data${index + 1}`;

            let liItems = dataArrays[index].map(item => `<li>${item}</li>`).join('');
            breakageList.innerHTML += `<ul id="${ulId}" class="myList">${liItems}</ul>`;
            addLiClickEvents(ulId);
        }

        updateData(0);

        listItems.forEach((li, index) => {
            li.addEventListener('click', function () {
                updateData(index);
            });
        });
        function addLiClickEvents(ulId) {
            const newLiItems = document.querySelectorAll(`#${ulId} li`);

            newLiItems.forEach(li => {
                li.addEventListener('click', function () {
              
                    newLiItems.forEach(item => {
                        item.classList.remove('active');
                        const arrowIcon = item.querySelector('i.fa-arrow-right');
                        if (arrowIcon) {
                            arrowIcon.remove();
                        }
                    });

                   
                    this.classList.add('active');
                    const arrow = document.createElement('i');
                    arrow.classList.add('fa', 'fa-arrow-right');
                    this.appendChild(arrow);
                    liTitle.textContent = this.textContent;

                    const data = jsonData[this.textContent];
                    if (data && Array.isArray(data)) {
                        dataTable.innerHTML = ''; 
                        data.forEach(item => {
                            dataTable.innerHTML += `
                        <tr>
                            <td style="width: 50%; padding-left: 15px;">${item.name}</td>
                            <td style="width: 15%; vertical-align: middle">${item.price}</td>
                            <td style="width: 15%; vertical-align: middle">${item.time}</td>
                            <td style="width: 15%; vertical-align: middle">${item.order}</td>
                        </tr>
                    `;
                        });
                    }
                });
            });
        }

    </script>
    </body>
</html>
