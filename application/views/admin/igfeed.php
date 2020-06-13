



        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                <div class="btn btn-primary btn-sm" data-toggle="modal" data-target="#mediumModal"><i class="fa fa-plus"></i>Tambah Data</div>
                        
                            <form action="<?= base_url('admin/setting/hapusIG') ?>" method="post">
                                <?php foreach($gambar as $gmb) : ?>
                                    <?= anchor('admin/setting/hapusIG/'.$gmb->id,'<div class=" btn btn-danger btn-sm ml-4"><i class="fa fa-refresh"></i> Hapus Semua</div>') ?>
                                <?php endforeach; ?>
                                
                            </form>
                            </div>
                            </div>
                            <div class="card-body">
                       <?= $this->session->flashdata('pesan'); ?>

                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1 ; foreach($gambar as $gmb) : ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><img class="img-thumbnail" height="80" width="150" src="<?=base_url() ?>assets/img/igFeed/<?= $gmb->img1 ?>"></td>
                                                <td>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-success btn-sm">Edit</div>') ?>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-danger btn-sm">Hapus</div>') ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><img  class="img-thumbnail" height="80" width="150" src="<?=base_url() ?>assets/img/igFeed/<?= $gmb->img2 ?>"></td>
                                                <td>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-success btn-sm">Edit</div>') ?>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-danger btn-sm">Hapus</div>') ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><img  class="img-thumbnail" height="80" width="150" src="<?=base_url() ?>assets/img/igFeed/<?= $gmb->img3 ?>"></td>
                                                <td>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-success btn-sm">Edit</div>') ?>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-danger btn-sm">Hapus</div>') ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><img  class="img-thumbnail" height="80" width="150" src="<?=base_url() ?>assets/img/igFeed/<?= $gmb->img4 ?>"></td>
                                                <td>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-success btn-sm">Edit</div>') ?>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-danger btn-sm">Hapus</div>') ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><img  class="img-thumbnail" height="80" width="150" src="<?=base_url() ?>assets/img/igFeed/<?= $gmb->img5 ?>"></td>
                                                <td>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-success btn-sm">Edit</div>') ?>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-danger btn-sm">Hapus</div>') ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><img  class="img-thumbnail" height="80" width="150" src="<?=base_url() ?>assets/img/igFeed/<?= $gmb->img6 ?>"></td>
                                                <td>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-success btn-sm">Edit</div>') ?>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-danger btn-sm">Hapus</div>') ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><img  class="img-thumbnail" height="80" width="150" src="<?=base_url() ?>assets/img/igFeed/<?= $gmb->img7 ?>"></td>
                                                <td>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-success btn-sm">Edit</div>') ?>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-danger btn-sm">Hapus</div>') ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><img   class="img-thumbnail" height="80" width="150" src="<?=base_url() ?>assets/img/igFeed/<?= $gmb->img8 ?>"></td>
                                                <td>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-success btn-sm">Edit</div>') ?>
                                                    <?= anchor('setting/edit/'. $gmb->id,'<div class="btn btn-danger btn-sm">Hapus</div>') ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
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
                                <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?= form_open_multipart('admin/setting/uploadIGfeed')?>
                                <table class="table table-bordered ">
                                <tr><td>Gambar 1</td><td><input type="file" name="img1"></td></tr>
                                <tr><td>Gambar 2</td><td><input type="file" name="img2"></td></tr>
                                <tr><td>Gambar 3</td><td><input type="file" name="img3"></td></tr>
                                <tr><td>Gambar 4</td><td><input type="file" name="img4"></td></tr>
                                <tr><td>Gambar 5</td><td><input type="file" name="img5"></td></tr>
                                <tr><td>Gambar 6</td><td><input type="file" name="img6"></td></tr>
                                <tr><td>Gambar 7</td><td><input type="file" name="img7"></td></tr>
                                <tr><td>Gambar 8</td><td><input type="file" name="img8"></td></tr>                                
                                <tr><td colspan="4"><input type="submit" name="upload" value="upload" class="btn btn-danger"></td></tr>
                                </table>
                            </div>
                             <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
