<?php include __DIR__ .'../partials/header.php'; ?>

<main class="container">
    <form method="POST" action="/admin/posts/edit?id=<?=$post->id?>">
        <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input name="fname" type="text" class="form-control" id="fname" value="<?=$post->title?>">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea class="form-control" id="body" rows="3"><?=$post->body?></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Edito">
        </div>
    </form>
</main>

<?php include __DIR__ .'../partials/footer.php'; ?>