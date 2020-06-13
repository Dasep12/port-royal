



<div class="content mt-3">
<div class="animated fadeIn">
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Tambah Stok Barang</strong>
                </div>
                <div class="card-body">
                <?= $this->session->flashdata('pesan') ?>
                    <div class="row col-lg-12">
                    <form action="<?= base_url('admin/data_barang/addStock') ?>" method="post">
                    <div class="form-group">
                    <label >Kode Barang </label>
                        <select class="form-control" name="kode_barang">
                        <?php foreach($produk as $prd) : ?>
                            <option><?= $prd->kode_barang ?></option>
                        <?php endforeach; ?>
                        </select>
                        <?= form_error('kode_barang','<div class="text-danger small">','</div>') ?>
                    <label>Tambah Stock</label>
                    <input type="text" placeholder="QTY" name="stock" class="form-control" class="form-control">
                    <?= form_error('stock','<div class="text-danger small">','</div>') ?>
                    </div>
                    <button type="submit" class="btn btn-danger btn-sm">Tambah Stock</button>
                </form>


</div>
</div>


<!-- Modal -->



<!--end of modal-->

