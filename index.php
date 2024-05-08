<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bienvenue a la page de commexion pour la gestion des ressources</title>
</head>
<body style="background-color: pink;">
    <h1>Login form using HTML and CSS</h1>
    <form action="">
        <!-- Headings for the form -->
        <div class="headingsContainer">
            <h3>Sign in</h3>
            <p>Sign in with your username and password</p>
        </div>

        <!-- Main container for all inputs -->
        <div class="mainContainer">
            <!-- Username -->
            <label for="username">Your username</label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <br><br>

            <!-- Password -->
            <label for="pswrd">Your password</label>
            <input type="password" placeholder="Enter Password" name="pswrd" required>

            <!-- sub container for the checkbox and forgot password link -->
            <div class="subcontainer">
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
            </div>


            <!-- Submit button -->
            <button type="submit">Login</button>

            <!-- Sign up link -->
            <p class="register">Not a member?  <a href="#">Register here!</a></p>

        </div>

    </form>
    Ceci est un premier essaie de MAJ
    <br>un autre essaie
</body>
</html>

<?php 
echo"c'est ok";

// Exécuter la commande git status
$output = shell_exec('git status');

// Vérifier la présence de mise a jour
$has_updates = preg_match('/behind/', $output);

if ($has_updates) {
  echo"Il ya une mise a jour disponible";
  
  $gitPullOutput = shell_exec('git pull origin');
}
else {
echo"c'est ok vous etes a jour maintenant";
}

?>
