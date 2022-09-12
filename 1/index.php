<style>
    .img-wrapper{
        position: relative;
        width: 200px;
        height: 300px;
        border: 1px solid black;
    }

    .img-main{
        position: absolute;

        width: 150px;
        height: 90px;

        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

<div class="img-wrapper">
    <img class="img-main" src="leo.jpg" alt="">
</div>

<?php
