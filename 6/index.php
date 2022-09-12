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

    <style>
        .hide{
            display: none;
        }
    </style>
</head>
<body>

<div data-noprint="1"><p>1</p></div>
<div data-show="1"><p>2</p></div>
<div data-show="1"><p>3</p></div>
<div data-noprint="1"><p>4</p></div>
<div data-show="1"><p>5</p></div>

</body>
</html>

<script>
    $('[data-noprint]').each(function () {
        this.classList.add('hide');
    })
</script>