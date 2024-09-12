<?php
$posts = [
    ['title' => 'Some tech title 1', 'body' => 'Some tech body 1'],
    ['title' => 'Some tech title 2', 'body' => 'Some tech body 2'],
    ['title' => 'Some tech title 3', 'body' => 'Some tech body 3'],
    ['title' => 'Some tech title 4', 'body' => 'Some tech body 4'],
];
?>

<?php include 'partials/header.php'; ?>

<main class="container">
<?php include 'partials/hero.php'; ?>

<?php include 'partials/featured.php'; ?>

  <div class="row g-5">
    <div class="col-md-8">
    <?php include 'partials/post.php'; ?>

    <div class="col-md-4">
    <?php include 'partials/side.php'; ?>
    </div>
  </div>

</main>

<?php include 'partials/footer.php'; ?>