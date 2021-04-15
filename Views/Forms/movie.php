<?php require_once 'inc/html_header.php'; ?>

<form enctype="multipart/form-data" method="post" action="/movies/store<?php if($id): echo "/$id"; endif; ?>">
    <div class="form-group row">
        <label for="author_id" class="col-md-2 col-form-label">Autor</label>
        <div class="col-md-10">
            <select name="author_id" id="author_id" class="form-control col-sm-12 col-md-6 px-1">
                <option value="">Bitte wählen</option>
                <?php foreach($authors as $author): ?>
                    <option value="<?php echo $author['id'] ?>"
                        <?php if(isset($data) && $data['author_id'] == $author['id']): ?>selected<?php endif; ?>
                    ><?php echo $author['firstname'].' '.$author['lastname'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="title" class="col-md-2 col-form-label">Titel</label>
        <div class="col-md-10">
            <input type="text" id="title" name="title" class="form-control col-sm-12 col-md-6 px-1" 
            <?php if (isset($data)) : ?> value="<?php echo $data['title'] ?>" <?php endif; ?> required />
        </div>
    </div>

    <div class="form-group row">
        <label for="price" class="col-md-2 col-form-label">Preis</label>
        <div class="col-md-10">
            <input type="text" id="price" name="price" class="form-control col-sm-12 col-md-6 px-1" 
            <?php if (isset($data)) : ?> value="<?php echo $data['price'] ?>" <?php endif; ?> required />
        </div>
    </div>

    <div class="form-group row">
        <label for="image" class="col-md-2 col-form-label">Bild</label>
        <div class="col-md-10">
            <input type="file" id="image" name="image" class="form-control col-sm-12 col-md-6 px-1" />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-auto float-right">
            <input type="submit" value="Save" role="button" class="btn btn-primary col-md-auto px-5" />
        </div>
    </div>
</form>

<?php require_once 'inc/html_footer.php'; ?>
