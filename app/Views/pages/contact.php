<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h2> 📞 😊 Contact Us</h2>
            <?php foreach ($alamat as $a) : ?>
                <ul>
                    <li><?= $a['tipe']; ?></li>
                    <li><?= $a['alamat']; ?></li>
                    <li><?= $a['kota']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>