

<-- hier login fehler ausgeben -->

<form method="post" class="" action="/login/check">
    <div class="form-group row">
        <label for="username" class="col-md-2 col-form-label">Username</label>
        <div class="col-md-10">
            <input type="text" id="username" name="username" class="form-control col-sm-12 col-md-6 px-1" required />
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-2 col-form-label">Passwort</label>
        <div class="col-md-10">
            <input type="password" id="password" name="password" class="form-control col-sm-12 col-md-6 px-1" required />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-auto float-right">
            <input type="submit" id="login" name="login" value="Login" role="button" class="btn btn-primary col-md-auto px-5" required />
        </div>
    </div>
</form>

