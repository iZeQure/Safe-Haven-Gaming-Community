<?php 
include './header.php';
?>

<link rel="stylesheet" href="./app/css/loading.css">

<div class="container">
    <div class="card-deck" id="cards">
        <div class="loader" id="loader">Loading...</div>
    </div>
</div>

<?php
include './footer.php';
?>

<script>
    $(document).ready(function () {
        console.info("Run AJAX");
        setTimeout(function() {
            $.ajax({
                method: "POST",
                url: "./app/core/staff-introduction-cards.php"
            })
            .done(function (msg) {
                $('#loader').remove();
                $('#cards').append(msg);
            })
            .fail(function () {
                alert("Tawt");
            });
        }, 1000);
    });
</script>