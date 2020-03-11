<?php 
include './header.php';
?>

<link rel="stylesheet" href="./app/css/loading.css">

<div class="container mt-5">
    <div class="card-deck" id="cards">
        <div class="loader" id="loader">Loading...</div>
    </div>
</div>

<?php
include './footer.php';
?>

<script>
    $(document).ready(function () {
        getIntroductions();
        setInterval(function () {
            getIntroductions();
        }, 10000);
    });

    function getIntroductions() {
        $.ajax({
            method: "POST",
            url: "./app/core/staff-introduction-cards.php"
        })
        .done(function (msg) {
            $('#cards').html = "";
            if (!msg == "") {
                $('#loader').remove();
                $('#cards').html(msg);
            } else {
                $('#cards').append('<div class="loader" id="loader">Loading...</div>');
                setTimeout(getStaffIntro, 10000);
            }
        })
        .fail(function () {
            alert("Error");
        });
    }
</script>