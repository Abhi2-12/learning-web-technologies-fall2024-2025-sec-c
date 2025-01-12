
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal - Registration</title>
    <link rel="stylesheet" href="../Style/styles.css">
</head>
<body>
    <h1>Register New Employer</h1>
    <form method="post" action="../Controller/regCheck.php">
        <label for="employer_name">Employer Name</label>
        <input type="text" name="employer_name" required /> <br>

        <label for="company_name">Company Name</label>
        <input type="text" name="company_name" required /><br>

        <label for="contact_no">Contact Number</label>
        <input type="text" name="contact_no" required /><br>

        <label for="username">Username</label>
        <input type="text" name="username" required /> <br>

        <label for="password">Password</label>
        <input type="password" name="password" required /> <br>

        <input type="submit" name="submit" value="Register" />
    </form>

    <div class="back-btn">
        <a href="../View/login.html">Back to Login</a>
    </div>
</body>
</html>


