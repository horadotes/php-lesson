<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        form div {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <a href="index.php">
        <button>Back</button>
    </a>
    <form action="php/register.php" method="POST">
        <div>
            <h1>Form Registration</h1>
        </div>
        <div>
            <label for="firstname">First Name</label> <br />
            <input type="text" id="firstname" name="firstname" placeholder="First name" autocomplete="false">
        </div>
        <div>
            <label for="lastname">Last Name</label> <br />
            <input type="text" id="lastname" name="lastname" placeholder="Last name" autocomplete="false">
        </div>
        <div>
            <label for="gender">Gender</label> <br />
            <input type="radio" id="gender" name="gender" value="Male" checked> Male
            <input type="radio" id="genderFemale" name="gender" value="Female"> Female
            <input type="radio" id="genderOthers" name="gender" value="Others"> Others
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</body>

</html>