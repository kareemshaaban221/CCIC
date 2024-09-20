

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global Variables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <form action="./register_action.php" method="POST" class="card p-4">
        <div>
            <label for="">First Name</label>
            <input type="text" class="form-control" name="fname" value="test">
            <?php if (isset($errors['fname'])): ?>
                <small class="text-danger">* <?= $errors['fname']  ?></small>
            <?php endif; ?>
        </div>
        <div>
            <label for="">Last Name</label>
            <input type="text" class="form-control" name="lname">
            <?php if (isset($errors['lname'])): ?>
                <small class="text-danger">* <?= $errors['lname']  ?></small>
            <?php endif; ?>
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" class="form-control" name="email">
            <?php if (isset($errors['email'])): ?>
                <small class="text-danger">* <?= $errors['email']  ?></small>
            <?php endif; ?>
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
            <?php if (isset($errors['password'])): ?>
                <small class="text-danger">* <?= $errors['password']  ?></small>
            <?php endif; ?>
        </div>
        <div>
            <label for="">Confirm Password</label>
            <input type="password_confirmation" class="form-control" name="password_confirmation">
        </div>
        <div>
            <input type="submit" class="btn btn-primary" name="submit" value="Send">
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>