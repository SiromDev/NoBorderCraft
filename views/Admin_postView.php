<div class="card">
    <div class="header">
        <h4 class="title">Tout les articles</h4>
        <p class="category">
            <a href="/nbc/admin/post/write" class="btn btn-fill btn-success btn-block">Ajouter un article</a>
        </p>
    </div>
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
            <th>ID</th>
            <th>Name</th>
            <th>View</th>
            <th>Delete</th>
            </thead>
            <tbody>
            <?php foreach ($datas['posts'] as $post): ?>
            <tr>
                <td><?= $post->id; ?></td>
                <td><?= $post->title; ?></td>
                <td><a href="/nbc/post/<?= \App\App::toSlug($post->title) . '-' . $post->id; ?>" class="btn btn-success">View</a></td>
                <td><a href="/nbc/admin/post/delete/<?= $post->id; ?>" class="btn btn-warning">Delete</a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
</div>