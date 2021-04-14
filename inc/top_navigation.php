<a class="navbar-brand" href="/authors">BTA Movies</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/authors">Autoren</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/movies">Movies</a>
        </li>
    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        <?php if ( !isset($_SESSION['auth'])) : ?>

            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>

        <?php else : ?>

            <li class="nav-item">
                <?php echo $_SESSION['auth']['username']; ?><a class="ml-3" href="/logout" role="link">Logout</a>
            </li>

        <?php endif; ?>
    </ul>
</div>