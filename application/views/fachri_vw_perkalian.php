<?php $page = base_url('fachri_ctrl_dashboard/fachri_perkalian'); ?>

<div class="container mt-3 col-12">
    <h1>Selamat Datang Di Form Perkalian!</h1>
    <div class="body">
        <p>Masukan Data</p>
        <form action="<?= base_url('fachri_ctrl_dashboard/fachri_perkalian') ?>" method="post">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="v1">Panjang
                        <span class="text-danger"><?= form_error('v1'); ?></span>
                    </label>
                    <div class="input-group">
                        <input maxlength="5" type="text" class="form-control" id="v1" name="v1"
                            placeholder="<?= "Masukan Panjang"; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="v2">Lebar
                        <span class="text-danger"><?= form_error('v2'); ?></span>
                    </label>
                    <div class="input-group">
                        <input maxlength="5" type="text" class="form-control" id="v2" name="v2"
                            placeholder="<?= "Masukan Lebar"; ?>">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="v3">Tinggi
                        <span class="text-danger"><?= form_error('v3'); ?></span>
                    </label>
                    <div class="input-group">
                        <input maxlength="5" type="text" class="form-control" id="v3" name="v3"
                            placeholder="<?= "Masukan Tinggi"; ?>">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>

        <div class="mt-4">
            <strong>Hasil:</strong> <span class="font-weight-bold text-success"><?= $hasil; ?></span> <br>
            <a href="<?= base_url('fachri_ctrl_dashboard'); ?>" class="btn btn-secondary mt-3">&lt;&lt; Kembali</a>
        </div>
    </div>
</div>