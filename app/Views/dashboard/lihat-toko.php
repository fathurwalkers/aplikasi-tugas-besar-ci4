<?= $this->extend('layouts/main'); ?>

<?= $this->section('main-header') ?>
Lihat Data Toko 
<?= $this->endSection() ?>

<?php echo $this->section('main-content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <?php $userss = $user->where('id_user', $toko["user_id"])->first(); ?>
                    <div class="row">
                        <div class="col-3">
                            Nama Toko <br>
                            Pemilik Toko <br>
                            Kode Toko <br>
                        </div>
                        <div class="col-3">
                            <?= $toko["nama_toko"] ?> <br>
                            <?= $userss["nama"] ?> <br>
                            <?= $toko["kode_toko"] ?> <br>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>