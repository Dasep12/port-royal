



        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <?= anchor('admin/pesanan_masuk/','<div class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>Kembali</div>') ?>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id pesanan</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>QTY</th>
                                            <th>Sub-Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($pesanan as $prd) : 
                                    error_reporting(0);
                                     $sub_total = $prd->harga * $prd->jumlah;
                                     $total += $sub_total;
                                     ?>
                                       
                                        <tr>
                                            <td><?= $prd->id_invoice ?></td>
                                            <td><?= $prd->nama_produk ?></td>
                                            <td>Rp.<?= number_format($prd->harga,0,',','.') ?></td>
                                            <td><?= $prd->jumlah ?></td>
                                            <td>Rp.<?= number_format($sub_total,0,',','.') ?></td>
                                            
                                        </tr>
                                    <?php endforeach ?>
                                    <tr>
                                        <td colspan="4" align="center">Total yang harus di bayar</td>
                                       
                                         <td>Rp.<?= number_format($total,0,',','.') ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->


