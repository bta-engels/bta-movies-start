<?php if(isset($error)): ?>
    <h3 class="text-danger"><?php echo $error; ?></h3>
<?php endif; ?>
<form method="post" action="/authors/store">
    
    <div class="form-group row">
        <label for="firstname" class="col-md-2 col-form-label">Vorname</label>
        <div class="col-md-10">
            <input type="text" id="firstname" name="firstname" class="form-control col-sm-12 col-md-6 px-1" required />
        </div>
    </div>
    <div class="form-group row">
        <label for="lastname" class="col-md-2 col-form-label">Nachname</label>
        <div class="col-md-10">
            <input type="text" id="lastname" name="lastname" class="form-control col-sm-12 col-md-6 px-1" required />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-auto float-right">
            <button class="btn btn-primary col-md-auto px-5">Speichern</button>
        </div>
    </div>
</form>