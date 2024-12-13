<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <table class="table table-hover table-striped">
      <tr>
        <th>Title / Heading</th>
        <td><?=$post->title?></td> 

      </tr>
      <tr>
      <th>Content</th>
      </td>
        <td><?=$post->body?></td>
      </tr>
    </table>
</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
