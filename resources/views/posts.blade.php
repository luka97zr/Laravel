<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>
<body>
    <!-- <article>
        <h1><a href="post/my-first-post">Article first</a></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quas repudiandae deleniti itaque optio soluta dignissimos possimus earum dolorum perspiciatis, excepturi animi nobis dolores minima blanditiis facere distinctio accusantium nemo.</p>
    </article>
    <article>
        <h1><a href="post/my-second-post">Article second</a></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quas repudiandae deleniti itaque optio soluta dignissimos possimus earum dolorum perspiciatis, excepturi animi nobis dolores minima blanditiis facere distinctio accusantium nemo.</p>
    </article>
    <article>
        <h1><a href="post/my-third-post">Article third</a></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quas repudiandae deleniti itaque optio soluta dignissimos possimus earum dolorum perspiciatis, excepturi animi nobis dolores minima blanditiis facere distinctio accusantium nemo.</p>
    </article> -->
    <?php 

        foreach($posts as $post) : ?>
            <article>
                <?= $post ?>
            </article>
        <?php
        endforeach;
    ?>
</body>
</html>