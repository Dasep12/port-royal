



        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Pesanan Masuk</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>No Telp</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Pesan</th>
                                            <th>Batas Bayar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($pesanan as $prd) : ?>
                                        <tr>
                                            <td><?= $prd->first_name ?></td>
                                            <td><?= $prd->no_telp ?></td>
                                            <td><?= $prd->email ?></td>
                                            <td><?= $prd->alamat?></td>
                                            <td><?= $prd->tgl_pesan ?></td>
                                            <td><?= $prd->batas_bayar ?></td>
                                            <td>
                                                <?= anchor('admin/pesanan_masuk/pesanan/'.$prd->id,' <div class="btn btn-danger"><i class="fa fa-table"></i></div>'); ?>
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


