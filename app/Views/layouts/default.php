<!-- app/Views/layouts/default.php -->
<!DOCTYPE html>
<html>
<head>
    <title>下載專區</title>
</head>
<body>
    <?= $this->renderSection('header') ?>
    
    <div id="content">
        <?= $this->renderSection('content') ?>
    </div>
    
    <?= $this->renderSection('footer') ?>
</body>
</html>