<?php require_once 'inc/html_header.php'; ?>

<form method="post" action="/categories/store<?php if($id): echo "/$id"; endif; ?>">
    <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label">Name</label>
        <div class="col-md-10">
            <input type="text" id="name" name="name" class="form-control col-sm-12 col-md-6 px-1"
            <?php if (isset($data)) : ?> value="<?php echo $data['name'] ?>" <?php endif; ?> required />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-auto float-right">
            <input type="submit" value="Save" role="button" class="btn btn-primary col-md-auto px-5" />
        </div>
    </div>
</form>

<?php require_once 'inc/html_footer.php'; ?>
