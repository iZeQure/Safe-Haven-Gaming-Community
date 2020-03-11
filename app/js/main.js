$(document).ready(function () {
    $('#introduction-form').submit(function (event) {
        event.preventDefault();

        $.ajax({
            method: "POST",
            url: "./app/core/submit-introduction.php",
            data: $(this).serialize()
        })
        .done(function () {
            alert("Finished Call.");
        })
        .fail(function (error) {
            alert("Error in call : " + error);
        });
    });
});

function getSteamAPIInfo() {
    var steamId = document.getElementById('steam-id');
    console.info("Focus Lost");

    $.ajax({
        method: "POST",
        url: "./app/core/api.php",
        data: {
            steamId: steamId.value
        }
    })
    .done(function (response) {
        if (!response == "") {
            $('#steamProfileHelp').html("Found Profile : " + response);
            return;
        }
    })
    .fail(function(error){
        $('#steamProfileHelp').html("No Profile Found");
        setTimeout(function() {
            $('#steamProfileHelp').html('Find your id <a class="" href="https://steamid.io/lookup" target="_blank" rel="noopener noreferrer">here.');
        },5000);
    });
}