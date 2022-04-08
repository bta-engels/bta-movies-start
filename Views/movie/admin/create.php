

<?php if(isset($error)): ?>
    <h3 class="text-danger"><?php echo $error; ?></h3>
<?php endif; ?>

<form method="post" action="/movies/store">
    <div class="form-group row">
        <label for="title" class="col-md-2 col-form-label">Name des Films</label>
        <div class="col-md-10">
            <input type="text" id="title" name="title" class="form-control col-sm-12 col-md-6 px-1" required />
        </div>
    </div>

    <div class="form-group row">
        <label for="price" class="col-md-2 col-form-label">Preis</label>
        <div class="col-md-10">
            <input type="text" id="price" name="price" class="form-control col-sm-12 col-md-6 px-1" required />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-auto float-right">
            <button class="btn btn-primary col-md-auto px-5">senden</button>
        </div>
    </div>
</form>

