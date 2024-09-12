<?php
$posts = [
    ['title' => 'Some title 1', 'body' => 'Some body 1'],
    ['title' => 'Some title 2', 'body' => 'Some body 2'],
    ['title' => 'Some title 3', 'body' => 'Some body 3'],
    ['title' => 'Some title 4', 'body' => 'Some body 4'],
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