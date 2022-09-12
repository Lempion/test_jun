<style>
    .nav-bar {
        background-color: burlywood;
    }

    .nav-bar ul {
        width: 100%;
        display: table;
        margin: 0;
        padding: 0;
    }

    .nav-bar ul li {
        display: table-cell;
        list-style-type: none;
        text-align: center;
    }

    .nav-bar-lvl-2 {
        width: 100%;
        height: 200px;
        background-color: rebeccapurple;
        opacity: 0;
    }

    .show {
        animation: showBar 1s linear forwards;
    }

    .hide {
        animation: hideBar 1s linear forwards;
    }

    @keyframes showBar {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    @keyframes hideBar {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }
</style>

<div class="wrapper">
    <div class="nav-bar">
        <ul>
            <li><a id="show-menu" href="">Menu first lvl</a></li>
        </ul>
    </div>
    <div class="nav-bar-lvl-2">

    </div>
</div>

<script>
    let newBarMenu = document.getElementById('show-menu');
    let bar = document.querySelector('.nav-bar-lvl-2');
    newBarMenu.onmouseover = showBar
    newBarMenu.onmouseout = hideBar;

    function showBar() {
        bar.classList.add('show');
        bar.classList.remove('hide');
    }

    function hideBar() {
        bar.classList.add('hide');
        bar.classList.remove('show');
    }
</script>

