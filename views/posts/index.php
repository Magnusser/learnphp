<?php include '../partials/header.php'; ?>

<main class="container">
    <a href="/admin/posts/create" class="btn btn-primary">New Post</a>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach($posts as $post): ?>
                <tr>
                    <td><?=$post->id?></td>
                    <td><?=$post->title?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles blahh" >
                            <button type="button" class="btn btn-danger">View</button>
                            <button type="button" class="btn btn-warning">Edit</button>
                            <button type="button" class="btn btn-danger" href="/admin/posts/delete?id=<?=$post->id?>">Delete</button>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>

<?php include '../partials/footer.php'; ?>