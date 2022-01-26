<?= $this->extend('layouts/main'); ?>

<?= $this->section('css'); ?>
<!--  -->
<?= $this->endSection(); ?>

<?= $this->section('main-header') ?>
Daftar Produk
<?= $this->endSection() ?>

<?php echo $this->section('main-content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                
                <table id="example" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Toko Pemilik</th>
                            <th>Harga</th>
                            <th>Kode Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($produk as $item) {  ?>
                        <?php $tokonama = $toko->where('id_toko', $item["toko_id"])->first(); ?>
                        <tr>
                            <td><?= $item["nama_produk"] ?></td>
                            <td><?= $tokonama["nama_toko"] ?></td>
                            <td><?= $item["harga_produk"] ?></td>
                            <td><?= $item["kode_produk"] ?></td>
                            <td width="15%">
                                <div class="btn-group d-flex justify-content-center">
                                    <a href="#" class="btn btn-info btn-sm mr-1">LIHAT</a>
                                    <a href="#" class="btn btn-primary btn-sm mr-1">UBAH</a>
                                    <a href="#" class="btn btn-danger btn-sm">HAPUS</a>
                                </div>
                            </td>
                        </tr>

                        <?php } ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('js'); ?>
<script>
    $(document).ready( function () {
        $('#example').DataTable();
    } );
</script>
<?= $this->endSection(); ?>