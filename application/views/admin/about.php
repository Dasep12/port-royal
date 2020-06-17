



        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                            <?= $this->session->flashdata('pesan'); ?>
                                <strong class="card-title">
                             Tentang Kami
                        </strong>
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url("admin/About/update/") ?>" method="post" name="form">
                                    <label>Tentang Kami </label>
                                    <textarea rows="10" class="form-control" name="tentang"><?= $tentang->about ?></textarea>
                                    <button type="submit" class="btn btn-danger  btn-sm  mt-2">Perbarui</button>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->
