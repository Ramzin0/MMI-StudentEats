<?PHP
$Recipe = new Recipe($Conn);
$recipes = $Recipe->searchRecipes($_POST['query']);
?>

<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/styles.css">

    <title>Quick and affordable student recipes – StudentEat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

</head>

<body id="page-recipes">
    <div class="container">
        <h1 class="mb-4 pb-2">Search results for "<?php echo $_POST['query']; ?>"</h1>
        <div class="row">
            <?php foreach ($recipes as $recipe) { ?>
                <div class="col-md-3">
                    <div class="recipe-card">
                        <div class="recipe-card-image"
                            style="background-image: url('./recipe-images/<?php echo $recipe['recipe_image']; ?>');">
                            <a href="index.php?p=recipe&id=<?php echo $recipe['recipe_id']; ?>"></a>
                        </div>
                        <a href="index.php?p=recipe&id=<?php echo $recipe['recipe_id']; ?>">
                            <h3><?php echo $recipe['recipe_name']; ?></h3>
                        </a>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

    <script type="text/javascript" src=".\node_modules\bootstrap\dist\js\bootstrap.min.js"></script>

</body>

</html>