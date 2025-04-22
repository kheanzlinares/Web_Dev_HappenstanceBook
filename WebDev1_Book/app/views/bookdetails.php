<?php
include __DIR__ . '/../views/navigation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/dance.css">
</head>

<body>
    <?php
    foreach ($books as $item) {
        foreach ($item as $book) {
            ?>
            <div class="container">
                <div class="column">
                    <header class="header">
                        <img src="<?php echo $book->getImage() ?>" class="card-img" alt="images"
                            style="width: 400px; height: 500px;">
                    </header>
                </div>
                <div class="column">
                    <div class="text-center">
                        <h2 class="pageName">
                            <?php echo $book->getBookName() ?>
                        </h2>
                        <h5 class="pageName">
                            <?php echo $book->getAuthor() ?>
                        </h5>
                        <h5 class="pageName">€
                            <?php echo $book->getPrice() ?>
                        </h5>
                        <p class="description">
                            <?php echo $book->getDescription(false) ?>
                        </p>

                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-end">
                        <form>
                            <input class="btn btn-primary" type="button" value="BACK" onclick="history.back()">
                        </form>
                        <a href="shoppingcart" class="btn btn-primary">BUY E-book</a>
                    </div>
                </div>
            </div>
            <?php
        }
    } ?>
</body>

</html>
<style>
    .float-left {
        float: left;
    }

    .container {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: flex-start;
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 20px;
    }

    .column {
        flex: 1;
        margin: 0 10px;
        /* Adjust as needed */
    }

    .header {
        margin-bottom: 20px;
        /* Adjust as needed */
    }

    .text-center {
        text-align: center;
    }
</style>