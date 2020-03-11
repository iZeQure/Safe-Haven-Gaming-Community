<?php
include 'database.php';

$db = new db($dbhost, $dbuser, $dbpass, $dbname);

$users = $db->query('CALL UserIntroductions;')->fetchAll();
?>

<?php foreach ( $users as $user ) : ?>
<?php if ($user['isStaff'] == TRUE) : ?>
<div class="card card-bg-color mt-3 mb-3">
    <div class="card-body">
        <h5 class="card-title introduction-card-title text-center my-0"><?=$user['Title']?></h5>
        <hr>
        <div class="row">
            <div class="col-3 col-sm-4">
                <img class="rounded mx-auto d-block avatar"
                    src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/f2/f2b90afbb159a0e1c9dc4409347ebf2e3fa93b87_medium.jpg"
                    alt="<?=$user['Steam Name']?> Profile Picture">
            </div>
            <div class="col-9 col-sm-8">
                <h1 class="introduction-title-name my-0"><?=$user['Steam Name']?></h1>
                <hr class="custom-hr">
                <p class="text-muted introduction-description">
                    <?=$age = date_diff(date_create($user['Birth Year']), date_create('now'))->y;?> //
                    <?=$user['Gender']?>
                </p>
            </div>
        </div>

        <table class="table table-sm w-100 mt-2">
            <tbody>
                <tr>
                    <td>
                        <p class="text-information-size text-information-color">country</p>
                    </td>
                    <td>
                        <p class="text-information-size text-information-color-secondary">
                            <?=$user['Country']?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-information-size text-information-color">favorite food</p>
                    </td>
                    <td>
                        <p class="text-information-size text-information-color-secondary">
                            <?=$user['Favorite Food']?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-information-size text-information-color">likes</p>
                    </td>
                    <td>
                        <p class="text-information-size text-information-color-secondary">
                            <?=$user['Likes']?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-information-size text-information-color">dislikes</p>
                    </td>
                    <td>
                        <p class="text-information-size text-information-color-secondary">
                            <?=$user['Dislikes']?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-information-size text-information-color">hobbies</p>
                    </td>
                    <td>
                        <p class="text-information-size text-information-color-secondary">
                            <?=$user['Hobbies']?></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <h1 class="bio-section-title">about:</h1>
        <div class="text-center">
            <div class="bio-section-content p-1">
                <?=$user['Bio']?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php endforeach; ?>