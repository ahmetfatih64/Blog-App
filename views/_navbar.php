<?php

if (!empty($_GET['q'])) {
    $keyword = $_GET['q'];

    $films = array_filter($films, function ($film) use ($keyword) {
        return (stristr($film['title'], $keyword) or stristr($film['comment'], $keyword));
    });
}

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a href="index.php" class="navbar-brand">BlogApp</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="create.php" class="nav-link">Create</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Link 2</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Link 3</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">

                <?php if (isset($_COOKIE["auth"])): ?>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Hoş geldiniz, <?php echo $_COOKIE["auth"]["name"] ?></a>
                    </li>

                <?php else: ?>

                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Register</a>
                    </li>
                <?php endif; ?>

            </ul>
            <form class="d-flex" action="index.php" method="GET">
                <input type="text" name="q" class="form-control me-2" placeholder="Search">
                <button class="btn btn-outline-light">Search</button>
            </form>
        </div>
    </div>
</nav>