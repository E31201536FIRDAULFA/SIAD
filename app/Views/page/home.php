<?= $this->extend('layout/homeLayout') ?>
<?= $this->section('content') ?>
<br><br><br>
    <?= $this->include('layout/partials/homeAbout') ?>
    <br>
    <?= $this->include('layout/partials/homeService') ?>
<?= $this->endSection() ?>