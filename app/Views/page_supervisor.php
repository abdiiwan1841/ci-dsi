<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('layout/head'); ?>
</head>

<body class="animsition">
    <?= $this->include('layout/sidebar_supervisor'); ?>

    <?= $this->include('layout/navbar_supervisor'); ?>

    <?= $this->renderSection('content_supervisor'); ?>

    <?= $this->include('layout/js'); ?>
</body>

</html>