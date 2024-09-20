<?php include '../partials/header.php'; ?>

<main class="container">
    <form method="POST" action="/admin/posts">
        <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input name="fname" type="text" class="form-control" id="fname">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea class="form-control" id="body" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="CRRREEEATE">
        </div>
    </form>
</main>

<?php include '../partials/footer.php'; ?>