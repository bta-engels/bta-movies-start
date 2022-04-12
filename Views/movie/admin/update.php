
<?php if(isset($error)): ?>
    <h3 class="text-danger"><?php echo $error; ?></h3>
<?php endif; ?>

<form method="post" action="/movies/store/<?php echo $id ?>">
    <div class="form-group row">
        <label for="title" class="col-md-2 col-form-label">Name des Films</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $data['title'] ?>" id="title" name="title" class="form-control col-sm-12 col-md-6 px-1" required />
        </div>
    </div>

    <div class="form-group row">
        <label for="price" class="col-md-2 col-form-label">Preis</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $data['price'] ?>" id="price" name="price" class="form-control col-sm-12 col-md-6 px-1" required />
        </div>
    </div>

    <div class="form-group row">
        <label for="author_id" class="col-md-2 col-form-label">Fremdschlüssel (author_id)</label>
        <div class="col-md-10">
            <select name="author_id" id="author_id" class="col-sm-12 col-md-6 px-1" required>
                <option value="">Bitte wählen</option>
                <?php foreach ($authors as $author) : 
                    $selected = '';
                    if ($data['author_id'] === $author['id']) {
                        $selected = 'selected';
                    }
                    ?>
                        <option <?php echo $selected ?> value="<?php echo $author['id'] ?>"><?php echo $author['firstname'] . ' ' . $author['lastname']; ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-auto float-right">
            <button class="btn btn-primary col-md-auto px-5">senden</button>
        </div>
    </div>
</form>

