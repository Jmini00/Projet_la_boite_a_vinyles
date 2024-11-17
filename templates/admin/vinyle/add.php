<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout de vinyles</title>
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
                <label for="name" class="form-label">Nom de l'album</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                    <label for="artist" class="form-label">Artiste</label> 
                    <select id="artist" name="artist"><?php foreach($artists as $artist): ?>
                            <option value="<?= $artist->getId(); ?>"><?= $artist->getName(); ?></option>
                        <?php endforeach; ?></select>
                </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description de l'album</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="releaseDate" class="form-label">Année de sortie</label>
                <input type="text" class="form-control" id="releaseDate" name="releaseDate">
            </div>
            <div class="mb-3">
                    <label for="category" class="form-label">Catégories</label>
                    <select id="category" name="category"><?php foreach($categories as $category): ?>
                            <option value="<?= $category->getId(); ?>"><?= $category->getName(); ?></option>
                        <?php endforeach; ?></select>
                </div>
            <div class="mb-3">
                <label for="preview" class="form-label">Pochette du vinyle</label>
                <input class="form-control" type="file" id="preview" name="preview">
            </div>
            <div class="mb-3">
                <label for="alt" class="form-label">Description alternative de l'image</label>
                <input type="text" class="form-control" id="alt" name="alt">
            </div>
            <div> 
                <input type="hidden" id="token" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
            </div>
            <div class="mt-4">
                <button class="btn btn-success">Enregistrer le vinyle</button>
                <a href="/laboiteavinyles/admin" class="btn btn-light ml-3">Annuler</a>
            </div>
        </form>
    </div>
</body>

</html>