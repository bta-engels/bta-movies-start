

<?php if(isset($error)): ?>
    <h3 class="text-danger"><?php echo $error; ?></h3>
<?php endif; ?>
<!-- importend: attribute enctype="multipart/form-data" for  file upload -->
<form method="post" enctype="multipart/form-data" action="/movies/store">
    <div class="form-group row">
        <label for="author_id" class="col-md-2 col-form-label">Id</label>
        <div class="col-md-10">
            <select id="author_id" name="author_id" class="form-control col-sm-12 col-md-6 px-1" required>
                <option value="">Bitte wählen</option>
                <!-- hier php-loop über authors für html-options -->
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="title" class="col-md-2 col-form-label">Vorname</label>
        <div class="col-md-10">
            <input type="text" id="title" name="title" class="form-control col-sm-12 col-md-6 px-1" required />
        </div>
    </div>
    <div class="form-group row">
        <label for="title" class="col-md-2 col-form-label">Nachname</label>
        <div class="col-md-10">
            <input type="text" id="title" name="title" class="form-control col-sm-12 col-md-6 px-1" required />
        </div>
    </div>



    <div class="form-group row">
        <div class="col-md-auto float-right">
            <button class="btn btn-primary col-md-auto px-5">Insert</button>
        </div>
    </div>
</form>

