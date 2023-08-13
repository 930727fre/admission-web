<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.classless.min.css">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
                <?= $content ?>
        </main>

        <footer>
            &copy; <?= date('Y') ?> Your Website
        </footer>
    </body>
</html>
