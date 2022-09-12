<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script
            src="https://code.jquery.com/jquery-3.6.1.js"
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
            crossorigin="anonymous"></script>
</head>
<body>

<div data-sort style="width: 200px;"><p>200</p></div>
<div data-sort style="width: 400px;"><p>400</p></div>
<div data-sort style="width: 100px;"><p>100</p></div>
<div data-sort style="width: 800px;"><p>800</p></div>
<div data-sort style="width: 200px;"><p>200</p></div>


<div id="list"></div>
</body>
</html>

<script>
    items = $('[data-sort]');
    arItems = $.makeArray(items);
    arItems.sort(function (a, b) {
        return $(a).width() - $(b).width();
    });


    $(arItems).appendTo("#list");

</script>