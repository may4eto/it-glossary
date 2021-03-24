<div class="container">
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h1 class="my-5">Edit Term</h1>
        </div>
    </div>
    <div class="row mb-5 pb-5">
        <div class="col-12 col-md-6 offset-md-3">
            <form action="" method="POST">
                    <input type="hidden" name="original-term" value="<?=$model->term ?>">
                    <div class="form-group">
                        <label for="term">Term</label>
                        <input type="text" name="term" id="term" class="form-control" value="<?=$model->term ?>">
                    </div>
                    <div class="form-group">
                        <label for="definition">Definition</label>
                        <textarea name="definition" id="definition" cols="30" rows="5" class="form-control"><?=$model->definition ?></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="term">URL</label>
                        <input type="url" name="url" id="term" class="form-control" value="<?=$model->url ?>">
                    </div>
                    <button class="btn btn-dark mr-2" type="submit">Edit</button>
                    <a href="index.php" class="btn btn-outline-dark">Back</a>
            </form>
        </div>
    </div>
</div>