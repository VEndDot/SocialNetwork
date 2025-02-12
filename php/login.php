<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/authentication.css">
    <title>MySite | LOGIN</title>
</head>
<body>
<div class="left-section">
    <p>Welcome! <br/><br/>Your social network!</p>  
</div>
<div class="right-section">
    <div class="auth-form">
        <h2>Welcome, login to your account!</h2>
        <form>
            <input class="auth-form__input" type="text" placeholder="Enter your email" required>
            <input class="auth-form__input" type="password" placeholder="Enter your password" required>
            <div class="auth-form__remember-me">
                <input type="checkbox" id="remember-me">
                Remember me
            </div>
            <a href="#" class="auth-form__link">Forgot password?</a>
            <button class="auth-form__button" type="submit">Login now</button>
        </form>
        <p>Don’t have an account yet? <a href="#">Sign up!</a></p>
    </div>
</div>
</body>
</html>