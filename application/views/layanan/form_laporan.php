<body onload="initialize()">
    
<div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list single-page-breadcome">
                        <div class="row">
                            <div class="">
                                <div class="text-center custom-login">
                                    <h2><?= $title; ?></h2>
                                    <p><?= $info; ?><br>
                                    <strong>Mohon isi lokasi kejadian dan keterangan kejadian agar memudahkan petugas.</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#laporan">Form <?= $title; ?></a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="laporan">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <?= form_open(); ?>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group" style="display: none;">
                                                            <label>Jenis Laporan</label>
                                                            <input type="text" name="laporan" class="form-control" value="<?= $laporan; ?>"  required />
                                                        </div>
                                                        <div class="form-group" style="display: none;">
                                                            <label>Waktu Kejadian</label>
                                                            <input type="text" name="waktu" class="form-control" value="<?= waktu(); ?>" required />
                                                        </div>
                                                        <div id="current" style="display: none;"></div>
                                                        <div class="form-group" style="display: none;">
                                                            <label>Latitude</label>
                                                            <input type="text" id="lat" name="latitude" class="form-control" required />
                                                        </div>
                                                        <div class="form-group" style="display: none;">
                                                            <label>Longitude</label>
                                                            <input type="text" id="long" name="longitude" class="form-control" required />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Lokasi Kejadian</label>
                                                            <input type="text" name="lokasi" class="form-control" placeholder="Tulis dimana lokasi kejadian" required />
                                                            *Contoh : <?= $lokasi; ?>
                                                            <?= form_error('lokasi', '<small class="text-danger pl-3">', '</small>') ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Keterangan Kejadian</label>
                                                            <input type="text" name="ket" class="form-control" placeholder="Tulis keterangan jika ada" required />
                                                            *Contoh : <?= $ket; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <div class="payment-adress" style="margin-top: 10px;">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                            <input type="button" onclick="location.href='<?= base_url('layanan') ?>';" class="btn btn-danger loginbtn" value="Kembali" />
                                                        </div>
                                                    </div>
                                                </div>
                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>