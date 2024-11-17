<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edition membres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mx-auto p-5">
        <div class="d-flex justify-content-between align-items-center pb-5">
            <h1>Administration</h1>
            <a href="/laboiteavinyles/admin" class="btn btn-primary">Accueil Administration</a>
        </div>

        <!-- Message d'erreur -->
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger">
                <?= $error; ?>
            </div>
        <?php endif; ?>

        <!-- Message de succès -->
        <?php if (isset($success)) : ?>
            <div class="alert alert-success">
                <?= $success; ?>
            </div>
        <?php endif; ?>

        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="username" class="form-label">Membre</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $user->getUsername(); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $user->getLastname(); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">Firstname</label>
                <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $user->getFirstname(); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?= $user->getEmail(); ?>" readonly>
            </div>
            <div class="mb-3">
                <?php if ($user->getRole() === 'USER') : ?>
                    <p>Rôle utilisateur</p>
                    <input type="radio" id="user" name="role" value="USER" checked>
                    <label for="user" class="form-label">USER</label><br>
                    <input type="radio" id="moderateur" name="role" value="MODERATEUR">
                    <label for="moderateur" class="form-label">MODERATEUR</label><br>
                    <input type="radio" id="administrateur" name="role" value="ADMINISTRATEUR">
                    <label for="administrateur" class="form-label">ADMINISTRATEUR</label><br>
                <?php elseif ($user->getRole() === 'MODERATEUR') : ?>
                    <p>Rôle modérateur</p>
                    <input type="radio" id="user" name="role" value="USER">
                    <label for="user" class="form-label">USER</label><br>
                    <input type="radio" id="moderateur" name="role" value="MODERATEUR" checked>
                    <label for="moderateur" class="form-label">MODERATEUR</label><br>
                    <input type="radio" id="administrateur" name="role" value="ADMINISTRATEUR">
                    <label for="administrateur" class="form-label">ADMINISTRATEUR</label><br>
                <?php else : ?>
                    <p>Rôle administrateur</p>
                    <input type="radio" id="user" name="role" value="USER">
                    <label for="user" class="form-label">USER</label><br>
                    <input type="radio" id="moderateur" name="role" value="MODERATEUR">
                    <label for="moderateur" class="form-label">MODERATEUR</label><br>
                    <input type="radio" id="administrateur" name="role" value="ADMINISTRATEUR" checked>
                    <label for="administrateur" class="form-label">ADMINISTRATEUR</label><br>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <?php if ($user->getStatus() === 1) : ?>
                    <p>Status actif</p>
                    <input type="radio" id="actif" name="status" value="1" checked>
                    <label for="actif" class="form-label">Actif</label><br>
                    <input type="radio" id="block" name="status" value="00">
                    <label for="block" class="form-label">Bloqué</label><br>
                <?php else : ?>
                    <p>Statut bloqué</p>
                    <input type="radio" id="actif" name="status" value="1">
                    <label for="actif" class="form-label">Actif</label><br>
                    <input type="radio" id="block" name="status" value="00" checked>
                    <label for="block" class="form-label">Bloqué</label><br>
                <?php endif; ?>
            </div>
            <div>
                <input type="hidden" id="token" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
            </div>
            <div class="mt-4">
                <button class="btn btn-success">Modifier le membre</button>
                <a href="/laboiteavinyles/admin" class="btn btn-light ml-5">Annuler</a>
            </div>
        </form>
    </div>
</body>

</html>