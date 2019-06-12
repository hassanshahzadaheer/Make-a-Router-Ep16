
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Home </title>
  </head>
  <body>

    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="about/culture">About Our Culture</a></li>
            <li><a href="contact">Contact</a></li>
        </ul>
    </nav>
    <h1>My Tasks</h1>

    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else : ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>

  </body>
</html>
