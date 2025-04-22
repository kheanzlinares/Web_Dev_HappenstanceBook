<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css">
    <title>Home</title>
</head>

<body>
    <?php
    foreach ($books as $item) {
        foreach ($item as $book) {
            ?>
            <!-- creating card -->
            <div class="col-3" style="display: inline-block; margin-right: 30px;">
                <section class="card bg-warning" style="width: 500px;">
                    <img src="<?php echo $book->getImage() ?>" class="card-img" alt="images">
                    <div class="card-body" style="height: 18rem;">
                        <h5 class="card-title text-center">
                            <?php echo $book->getBookName() ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $book->getAuthor() ?>
                        </p>
                        <p class="card-text">
                            <?php echo $book->getDate() ?>
                        </p>
                        <p class="card-text">
                            <?php echo $book->getDescription() ?>
                        </p>
                    </div>
                    <form action="book" method="post">
                        <div class="row">
                            <div class="col">
                                <input id="bookId" name="bookId" type="text" value=<?php echo $book->getId() ?> hidden>
                                <button class="btn btn-primary" type="submit" name="submit">Read more</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
            <?php
        }
    } ?>
</body>

</html>
<style>
    .card-img {
        height: 500px;
        width: 500px;
        object-fit: cover;
    }

    .col-3 {
        width: 30rem;
    }

    .card {
        margin-bottom: 20px;
        /* Add space between cards */
        margin-left: 20px;
        margin-right: 20px;
    }
</style>