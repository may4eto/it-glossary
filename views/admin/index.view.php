<div class="container">
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h1 class="mb-4"><?= $view_bag['heading']; ?></h1>
        </div>
    </div>
    <div class="row">
       <a href="create.php" class="btn btn-dark mb-4">Create New Term</a>
    </div>
    <div class="row mb-5 pb-5">
        <table class="table table-striped">
        <?php sort($model); ?>
        <?php foreach ($model as $item) : ?>
            <tr>
                <td><span class="text-uppercase"><?= $item->term ?></span></td>
                <td><?= $item->definition ?></td>
                <td><a href="edit.php?key=<?= $item->term ?>"><i class="far fa-edit text-dark"></i></a></td>
                <td><a href="delete.php?key=<?= $item->term ?>"><i class="far fa-trash-alt text-dark"></i></a></td>
            </tr>
        <?php endforeach; ?>
        </table>
    </div>
</div>