<?php
include 'database.php';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_safehaven';

$db = new db($dbhost, $dbuser, $dbpass, $dbname);

$users = $db->query('SELECT * FROM user')->fetchAll();
?>

<?php foreach ( $users as $user ) : ?>
<?php if ($user['isStaff'] == FALSE) : ?>
<div class="card card-bg-color mt-3 mb-3">
    <div class="card-body">
        <h5 class="card-title introduction-card-title text-center my-0"><?=$user['positiontitle']?></h5>
        <hr>
        <div class="row">
            <div class="col-3 col-sm-4">
                <img class="rounded mx-auto d-block avatar"
                    src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/f2/f2b90afbb159a0e1c9dc4409347ebf2e3fa93b87_medium.jpg"
                    alt="<?=$user['name']?> Profile Picture">
            </div>
            <div class="col-9 col-sm-8">
                <h1 class="introduction-title-name my-0"><?=$user['name']?></h1>
                <hr class="custom-hr">
                <p class="text-muted introduction-description">
                    <?=$age = date_diff(date_create($user['birthDate']), date_create('now'))->y;?> //
                    <?=$user['pronounid']?>
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
                            <?=$user['countrycode']?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-information-size text-information-color">favorite food</p>
                    </td>
                    <td>
                        <p class="text-information-size text-information-color-secondary">
                            <?=$user['favoriteFood']?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-information-size text-information-color">likes</p>
                    </td>
                    <td>
                        <p class="text-information-size text-information-color-secondary">
                            <?=$user['likes']?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-information-size text-information-color">dislikes</p>
                    </td>
                    <td>
                        <p class="text-information-size text-information-color-secondary">
                            <?=$user['dislikes']?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-information-size text-information-color">hobbies</p>
                    </td>
                    <td>
                        <p class="text-information-size text-information-color-secondary">
                            <?=$user['hobbies']?></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <h1 class="bio-section-title">about:</h1>
        <div class="text-center">
            <div class="bio-section-content p-1">
                <?=$user['bio']?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php endforeach; ?>