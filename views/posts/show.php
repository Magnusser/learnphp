<?php include __DIR__ . '/../partials/header.php'; ?>

<!-- <style>
table, th, td {
  border:2px solid grey;
  background-color: lightgrey;
}



</style> -->

<main class="container">
    <table class="table table-hover table-striped">
      <tr>
        <th>Title / Heading</th>
        <td><?=$post->title?></td> 

      </tr>
      <tr>
      <th>Content</th>
      <!-- tühikuid ei tohi panna < ?=$post->title? >e need muidu liituvad teksti algusesse--></td>
        <td><?=$post->body?></td>
      </tr>
    </table>
    <!-- method default on GET -->
    <!-- kui actionit pole pandud siis ta tuleb samale leheküljele tagasi -->


</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>