<div class="container">
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h1 class="my-5">Create Term</h1>
        </div>
    </div>
    <div class="row mb-5 pb-5">
        <div class="col-12 col-md-6 offset-md-3">
            <form action="" method="POST">
                    <div class="form-group">
                        <label for="term">Term</label>
                        <input type="text" name="term" id="term" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="definition">Definition</label>
                        <textarea name="definition" id="definition" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="term">URL</label>
                        <input type="url" name="url" id="term" class="form-control">
                    </div>
                    <button class="btn btn-dark mr-2" type="submit">Submit</button>
                    <a href="index.php" class="btn btn-outline-dark">Back</a>
            </form>
        </div>
    </div>
</div>