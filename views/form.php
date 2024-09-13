<?php include 'partials/header.php'; ?>

<main class="container">
  <?php if ($fname): ?>
    <h3>Hello <?= $fname ?></h3>
  <?php endif; ?>
  <form method="POST" action="/answer">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">First Name</label>
      <input name="fname" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name here...">
    </div>
    <div class="mb-3">
      <input type="submit" class="btn btn-primary" value="Press me">
    </div>
  </form>
</main>

<?php include 'partials/footer.php'; ?>