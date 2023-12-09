<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../styles/login.css">
</head>

<body>

    <main class="main main-container">
        <div class="center">
            <div class="form-container">
                <h1 class="voting">VOTING SYSTEM</h1>
                <p class="description">LOGIN AS A STUDENT</p>
                <form autocomplete="on" method="post" action="login_process.php">
                    <div class="">
                        <input class="form-input" type="text" required name="email" id="email" placeholder="E-mail">
                    </div>

                    <div class="">
                        <input class="form-input" type="password" required name="password" id="password"
                            placeholder="Password">
                    </div>
                    <button type='submit' class="submit">LOGIN</button>
                </form>

            </div>
        </div>
    </main>
</body>

</html>