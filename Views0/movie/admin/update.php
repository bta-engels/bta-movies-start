
<?php if(isset($error)): ?>
    <h3 class="text-danger"><?php echo $error; ?></h3>
<?php endif; ?>

<form method="post" enctype="multipart/form-data" action="/movies/store/<?php echo $id ?>">
    <div class="form-group row">
        <label for="author_id" class="col-md-2 col-form-label">Autor</label>
        <div class="col-md-10">
            <select id="author_id" name="author_id" class="form-control col-sm-12 col-md-6 px-1" required>
                <!-- <option value="">Bitte wählen</option> -->
                <!-- hier php-loop über authors für html-options -->
                <!-- vorauswahl von aktuellem autor als selected anzeigen -->
                <?php foreach($data as $item): 
                    $selected = '';
                    if ($data['author'] === $item): $selected = 'selected'; ?>
                    <!-- echo "<option value=\"$item\" $selected>$item</option>"; -->
                    <option value="<?php echo $id; ?>" $selected><?php echo $item; ?></option>
                    <?php 
                    endif;
                    endforeach; 
                    ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="title" class="col-md-2 col-form-label">Titel</label>
        <div class="col-md-10">
            <!-- title via php in value ausgeben -->
            <input type="text" value="<?php echo $data['title']; ?>" id="title" name="title" class="form-control col-sm-12 col-md-6 px-1" required />
        </div>
    </div>

    <div class="form-group row">
        <label for="price" class="col-md-2 col-form-label">Preis in €</label>
        <div class="col-md-10">
            <!-- price via php in value ausgeben -->
            <input type="number" value="<?php echo $data['price']; ?>" min="0" step="0.01" id="price" name="price" class="form-control col-sm-12 col-md-6 px-1" required />
        </div>
    </div>

    <div class="form-group row">
        <label for="image" class="col-md-2 col-form-label">Bild <!-- image filename (falls vorhanden) via php ausgeben --></label>
        <div class="col-md-10">
            <?php if($data['image']): ?>
            <img src="/uploads/<?php echo $data['image']; ?>" height="400" alt="" title="" />
            <?php endif; ?>
            <input type="file" id="image" name="image" class="form-control-file col-sm-12 col-md-6 px-1" />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-auto float-right">
            <button class="btn btn-primary col-md-auto px-5">Speichern</button>
        </div>
    </div>
</form>

