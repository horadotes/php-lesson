<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Form</title>
    <style>
        table {
            margin-top: 2em;
        }
    </style>
    <?php require('php/dbconfig.php'); ?>
</head>
<body>
    <a href="index.php">
        <button>Back</button>
    </a>
    <form action="php/update-user.php" method="POST">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($_GET['id']); ?>">
        <div>
            <h1>Update Form</h1>
        </div>
        <div>
            <label for="firstname">New First Name</label> <br />
            <input type="text" id="firstname" name="firstname" placeholder="First name" autocomplete="false" value="<?php echo isset($_GET['firstname']) ? htmlspecialchars($_GET['firstname']) : ''; ?>">
        </div>
        <div>
            <label for="lastname">New Last Name</label> <br />
            <input type="text" id="lastname" name="lastname" placeholder="Last name" autocomplete="false" value="<?php echo isset($_GET['lastname']) ? htmlspecialchars($_GET['lastname']) : ''; ?>">
        </div>
        <div>
            <label for="gender">Gender</label> <br />
            <input type="radio" id="gender" name="gender" value="Male" <?php if(isset($_GET['gender']) && $_GET['gender'] == 'Male') echo 'checked'; ?>> Male
            <input type="radio" id="genderFemale" name="gender" value="Female" <?php if(isset($_GET['gender']) && $_GET['gender'] == 'Female') echo 'checked'; ?>> Female
            <input type="radio" id="genderOthers" name="gender" value="Others" <?php if(isset($_GET['gender']) && $_GET['gender'] == 'Others') echo 'checked'; ?>> Others
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>
