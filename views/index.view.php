<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5 mb-4"><?=$view_bag['heading']; ?></h1>
        </div>
    </div>
    <div class="row">
        <form action="" class="form-inline" method="GET">
        <div class="form-group mb-3">
            <div class="input-group mb-3">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-dark" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="row mb-5 pb-5">
        <table class="table table-striped">
        <?php sort($model); ?>
        <?php foreach ($model as $item) : ?>
            <tr>
                <td><a href="detail.php?term=<?= $item->term ?>"><span class="text-uppercase"><?= $item->term ?></span></a></td>
                <td><?= $item->definition ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
    </div>
</div>