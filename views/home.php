<?php
require("common/functions.php");

if ($_POST['username'] && $_POST['email']) {
    require_once("models/user.php");

    $createdUserID = User::createUser($_POST['username'], $_POST['email']);
    if ($createdUserID) {
        header('Location: /?success=true');
    } else {
        header('Location: /?success=false');
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="night">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php UI::getExternalDependencies(); ?>
    <title>Document</title>
</head>

<?php UI::getBodyStart(" flex flex-col items-center "); ?>

<?php UI::getHeader(); ?>


<div class="flex items-center gap-48">

    <form method="post" class="flex flex-col rounded-xl items-center gap-3 p-4 bg-base-200 w-min mt-24" action="/">
        <label class="flex flex-col gap-1">
            <span>Username</span>
            <input class="input input-bordered" name="username" placeholder="Username" />
        </label>
        <label class="flex flex-col gap-1">
            <span>Email</span>
            <input class="input input-bordered" name="email" placeholder="Email" />
        </label>
        <button class="btn btn-primary">Create</button>
    </form>
    <div>
        <h1 class="text-2xl mt-10">Users: </h1>

        <table class="table w-min whitespace-nowrap">
            <thead>
                <th>Name</th>
                <th>Email</th>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</body>

</html>