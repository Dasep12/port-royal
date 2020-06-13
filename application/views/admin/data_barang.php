



        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                            <?= $this->session->flashdata('pesan'); ?>
                                <strong class="card-title"><button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal">
                            <i class="fa fa-plus"></i> Tambah Data Barang
                        </button></strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th>Kode Barang</th>
                                            <th>Merk</th>
                                            <th>Ukuran</th>
                                            <th>Stock</th>
                                            <th>Harga</th>
                                            <th>Diskon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($produk as $prd) : 
                                    $kodenya =$prd->kode_barang?>
                                        <tr>
                                            <td><?= $prd->nama_produk ?></td>
                                            <td><img src="<?= site_url('admin/data_barang/barcode/'.$kodenya) ?>"></td>
                                            <td><?= $prd->merk ?></td>
                                            <td><?= $prd->ukuran ?></td>
                                            <td><?= $prd->stock ?></td>
                                            <td>Rp.<?= number_format($prd->harga,0,',','.'); ?></td>
                                            <td><?= $prd->diskon?>%</td>
                                            <td>
                                                <?= anchor('admin/data_barang/hapus/'.$prd->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></div>'); ?> / 
                                                <?= anchor('admin/data_barang/edit/'.$prd->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>'); ?>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->


                <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg-2" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Tambah Produk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/data_barang/tambah_produk')?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="small">Kategory Produk</label>
                                        <input type="text" class="form-control" name="nama_produk">
                                    </div>
                                    <div class="form-group">
                                        <label class="small">Merk</label>
                                        <input type="text" class="form-control" name="merk">
                                    </div>
                                    <div class="form-group">
                                        <label class="small">Kode Barang</label>
                                        <input type="text" class="form-control" name="kode_barang">
                                    </div>
                                    <div class="form-group">
                                        <label class="small">Ukuran</label>
                                        <select name="ukuran" class="form-control">
                                            <option>39</option>
                                            <option>40</option>
                                            <option>41</option>
                                            <option>All Size</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="small">Stock</label>
                                        <input type="text" class="form-control" name="stock">
                                    </div>
                                    <div class="form-group">
                                        <label class="small">Harga</label>
                                        <input type="text" class="form-control" name="harga">
                                    </div>
                                    <div class="form-group">
                                        <label class="small">Diskon(%)</label>
                                        <input type="text" class="form-control" name="diskon">
                                    </div>
                                    <div class="form-group">
                                        <label class="small">Keterangan</label>
                                        <textarea class="form-control" name="keterangan"></textarea> 
                                    </div>
                                    <div class="form-group">
                                        <label class="small">Gambar Produk</label><br>
                                    <input type="file" name="gambar" class="small" style="border:1px solid #ddd;width: 100%"> 
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                             </form>
                            </div>
                        </div>
                    </div>
                </div>