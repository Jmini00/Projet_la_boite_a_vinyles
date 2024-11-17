<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Inscription - La Boite à Vinyles">
    <title>Inscription - La Boite à Vinyles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!--<script src="js/script.js" defer></script>-->
</head>

<body>
    <div class="w-50 mx-auto pt-5">
        <h1 class="mb-3">Inscription</h1>

        <!-- Message d'erreur -->
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger">
                <?= $error; ?>
            </div>
        <?php endif; ?>

        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="lastname" class="form-label">Nom</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required minlength="2" maxlength="50" pattern="[a-zA-Z].{2,50}">
                <small> 50 caractères maximum</small>
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required minlength="3" maxlength="50" pattern="[a-zA-Z-].{3,50}">
                <small> 50 caractères maximum</small>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Identifiant</label>
                <input type="text" class="form-control" id="username" name="username" required minlength="5" maxlength="30" pattern="[a-zA-Z-\W_\d].{5,30}">
                <small> 30 caractères maximum</small>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de Passe</label>
                <input type="password" class="form-control" id="password" name="password" minlength="12" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{12,}">
                <small>12 caractères minimum avec 1 majuscule, 1 minuscule, 1 chiffre et un caractère spécial</small>
            </div>
            <div class="mb-3">
                <label for="agree">
                    <input type="checkbox" name="agree" id="agree" value="yes" required/> J'accepte les 
                    <a href="/laboiteavinyles/mentions-legales" title="mentions">conditions d'utilisation</a>
                </label>
            </div> 
            <div class="mb-3">
                <label for="read">
                    <input type="checkbox" name="read" id="read" value="yes" required/> J'ai lu la 
                    <a href="/laboiteavinyles/charte-de-moderation" title="charte">charte de modération</a>
                </label>
            </div>
            <div> 
                <input type="hidden" id="token" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
            </div>
            <button class="btn btn-primary mb-3">S'inscrire</button>
            <div class="mb-3">Déjà membre ? <a href="/laboiteavinyles/login">Connectez-vous</a></div>
        </form>
    </div>
    
</body>

</html>