<nav>
    <a href="http://localhost/biblio/home">home</a>
    <?php if (isset($_COOKIE['user_role']) && $_COOKIE['user_role'] == "admin") { ?>
        <a href="http://localhost/biblio/add_book">add book</a>
    <?php } else { ?>
        <a href="http://localhost/biblio/logs.">log</a>
    <?php } ?>
</nav>