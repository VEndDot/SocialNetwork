<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/authentication.css">
    <title>MySite | REGISTRATION</title>
</head>
<body>
<div class="left-section">
    <p>
        Haven't registered yet?<br/> Then let's fix it.
    </p>  
</div>
    <div class="right-section">
        <div class="auth-form">
            <h2>Welcome! Let's register</h2>
            <form>
                <input class="auth-form__input" type="text" placeholder="Enter your first name" required>
                <input class="auth-form__input" type="text" placeholder="Enter your last name" required>
                <input class="auth-form__input" type="text" placeholder="Enter your email" required>
                <input class="auth-form__input" type="text" placeholder="Enter your password" required>
                <input class="auth-form__input" type="text" placeholder="Retype your password" required>
                <div class="auth-form__gender">
                    Сhoose your gender<br/>
                    <select class="auth-form__select" name="" id="">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>

                <button class="auth-form__button auth-form__button--submit" type="submit">Register!</button>
            </form>
            <p>Do you already have an account? <a href="#">Come in!</a></p>
        </div>
    </div>
</body>
</html>