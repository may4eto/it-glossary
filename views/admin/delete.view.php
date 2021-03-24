<div class="container">
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h1 class="my-5">Delete Term</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <h3 class="mb-4 text-center">Are you sure you want to delete "<?= $model->term ?>"?</h3>
    </div>
    <div class="row justify-content-center">
       <form action="" method="POST">
            <input type="hidden" name="term" value="<?=$model->term ?>">
            <button class="btn btn-dark mr-2" type="submit">Delete</button>
            <a href="index.php" class="btn btn-outline-dark">Back</a>
       </form>
    </div>
</div>