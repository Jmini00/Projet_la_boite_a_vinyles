<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Connexion - La Boite à Vinyles">
    <title>Connexion - La Boite à Vinyles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--<script src="public/js/bt.js" defer></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
    <body>
        <div class="w-50 mx-auto pt-5">
            <h1 class="mb-3">Connexion</h1>

            <!-- Message d'erreur -->
            <?php if(isset($error)): ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
                <script>
                $(function() {
                    Swal.fire({
                        position: "center",
                        icon: "error",
                        title: "Identifiants invalides",
                        showConfirmButton: false,
                        timer: 2000
                    });
                });
            </script>
            <?php endif; ?>

            <form method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Identifiant</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de Passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div>
                    <input type="hidden" id="token" name="token" value="<?= $_SESSION['token'] ?? '' ?>"> 
                </div>
                <button id="bt-login" class="btn btn-primary">Se connecter</button> 
            </form>
        </div>
    </body>
</html>