<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment-2</title>
    <meta name="description" content="This webpage contains login and signup form.">
    <meta name="robots" content="noindex, nofollow">
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- Header section -->
    <header>
        <h1>Welcome to The World Of Thoughts</h1>
        <p>Join our community today!</p>
    </header>

    <!-- Main content container -->
    <div class="container">

        <!-- Signup section -->
        <div id="signup-section">
            <p>Sign up now, and join our Team</p>
            <!-- Signup form -->
            <form id="signup-form" method="post" action="new-user.php">
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="first-name" placeholder="Enter you first name here" required>

                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" name="last-name" placeholder="Enter you last name here" required>

                <label for="new-username">Username:</label>
                <input type="text" id="new-username" name="new-username" placeholder="Enter you preferred username here"
                    required>

                <label for="new-password">Password:</label>
                <input type="password" id="new-password" name="new-password"
                    placeholder="Enter you preferred password here" required>

                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password"
                    placeholder="Confirm your password here" required>

                <input type="submit" value="Register">
                <p>Existing user? <a href="#login-section">Log in.</a></p>
            </form>

        </div>

        <!-- Login section -->
        <div id="login-section">
            <p>Login and Go ahead!</p>
            <!-- Login form -->
            <form id="login-form" method="post" action="verify-user.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter you username here" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password here" required>

                <input type="submit" value="Login">
            </form>
        </div>


    </div>

    <!-- Footer section -->
    <footer>
        <p>Contact us at: contact@example.com</p>
    </footer>
</body>

</html>