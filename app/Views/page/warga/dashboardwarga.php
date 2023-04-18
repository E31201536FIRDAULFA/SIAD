<?= $this->extend('layout/dashboardLayout') ?>
<?= $this->section('content') ?>
    <?= $this->include('page/warga/surathome') ?>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url('js/SignOut.js') ?>"></script>
<script src="<?= base_url('js/Modules.js') ?>"></script>
<?= $this->endSection() ?>