



        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                            <strong>Edit Data Produk</strong>
                            </div>
                            <div class="card-body">
                            <form action="<?= base_url('admin/data_barang/update') ?>" method="post">
                                <?php foreach($produk as $prd) : ?>
                                <div class="form-group">
                                        <label class="small">Nama Produk</label>
                                        <input type="hidden" name="id" value="<?= $prd->id ?>">
                                        <input type="text" class="form-control" value="<?= $prd->nama_produk ?>" name="nama_produk">
                                    </div>
                                    <div class="form-group">
                                        <label class="small">Kode Produk</label>
                                        <input type="text" class="form-control" value="<?= $prd->kode_barang ?>" name="kode_barang">
                                    </div>
                                    <div class="form-group">
                                        <label class="small">Merk</label>
                                        <input type="text" class="form-control" value="<?= $prd->merk ?>" name="merk">
                                    </div>
                                    <div class="form-group">
                                        <label class="small">Ukuran</label>
                                        <select name="ukuran"  class="form-control">
                                            <option><?= $prd->ukuran ?></option>
                                            <option>39</option>
                                            <option>40</option>
                                            <option>41</option>
                                            <option>All Size</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="small">Harga</label>
                                        <input type="text" class="form-control" value="<?= $prd->harga ?>" name="harga">
                                    </div>
                                    <div class="form-group">
                                        <label class="small">Keterangan</label>
                                        <textarea class="form-control" name="keterangan"><?= $prd->keterangan ?></textarea> 
                                    </div>
                                 <?php endforeach; ?>

                                <button type="reset" class="btn btn-danger btn-sm" >Reset</button>
                                <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
                            </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

