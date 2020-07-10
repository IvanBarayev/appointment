<?= $this->extend('layout/index') ?>
<?= $this->section('linemenu') ?>
<button type="button" class="btn btn-flat bg-light btn-sm mr-1"><i class="fas fa-plus"></i> <span class="d-none d-md-inline-block d-lg-inline-block"> Ekle</span></button>
<button type="button" onclick="save()" class="btn btn-flat bg-light btn-sm"><i class="fas fa-save"></i> <span class="d-none d-md-inline-block d-lg-inline-block"> Kaydet</span></button>
<?= $this->endSection() ?>
<?= $this->section('ddownmenu') ?>
<!--<div class="btn-group">
    <button type="button" class="btn btn-sm btn-flat dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-plus"></i>
    </button>
    <div class="dropdown-menu">
        <?php /*foreach ($menu as $key => $val): */ ?>
            <a href="<? /*= $val */ ?>" data-toggle="modal" data-target="#myModal" class="dropdown-item">
                <? /*= $key */ ?>
            </a>
        <?php /*endforeach; */ ?>
    </div>
</div>-->
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="row mt-3">

    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-gradient-secondary">
                <h3 class="card-title">Şubeler</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Şube</th>
                        <th>İşlem</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img alt="Avatar" class="img-circle img-size-32 mr-2" src="/public/assets/dist/img/avatar.png"></td>
                        <td>Another Product</td>
                        <td><a href="#" class="text-muted"><i class="fas fa-search"></i></a></td>
                    </tr>
                    <tr>
                        <td><img alt="Avatar" class="img-circle img-size-32 mr-2" src="/public/assets/dist/img/avatar.png"></td>
                        <td>Another Product</td>
                        <td><a href="#" class="text-muted"><i class="fas fa-search"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-gradient-secondary nav nav-tabs" style="display: block !important;" id="custom-tabs-four-tab" role="tablist">
                <a class="btn btn-tool bg-primary mr-1 active" data-toggle="tab" href="#tabGeneral" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Genel</a>
                <a class="btn btn-tool bg-primary mr-1" data-toggle="tab" href="#tabContact" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">İletişim</a>
                <a class="btn btn-tool bg-primary mr-1" data-toggle="tab" href="#tabSocial" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Sosyal Medya</a>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
            </div>
            <form name="frm" id="frm" role="form">
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                        <div class="tab-pane fade show active" id="tabGeneral" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user_name">Kullanıcı Adı</label>
                                        <input type="email" class="form-control" name="user_name" id="user_name" placeholder="Kullanıcı Adı (E-Mail)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user_pass">Şifre</label>
                                        <input type="password" class="form-control" name="user_pass" id="user_pass" placeholder="Şifre">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="identity">VAT number</label>
                                        <input type="email" class="form-control" name="identity" id="identity" placeholder="VAT number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="authperson">Yetkili Kişi</label>
                                        <input type="password" class="form-control" name="authperson" id="authperson" placeholder="Authorized Person">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="password" class="form-control" name="title" id="title" placeholder="Company Title">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabContact" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Adres</label>
                                        <input type="text" class="form-control" name="address" id="address" placeholder="Adres">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="country">Ülke</label>
                                        <input type="text" class="form-control" name="country" id="country" placeholder="Ülke">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">Şehir</label>
                                        <input type="text" class="form-control" name="city" id="city" placeholder="Şehir">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="state">İlçe</label>
                                        <input type="text" class="form-control" name="state" id="state" placeholder="İlçe">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="zipcode">Posta Kodu</label>
                                        <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Posta Kodu">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabSocial" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sm_fb">Facebook</label><br>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="sm_fb" id="sm_fb">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sm_in">Instagram</label><br>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="sm_in" id="sm_in">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sm_tw">Twitter</label><br>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="sm_tw" id="sm_tw">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sm_yt">Youtube</label><br>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="sm_yt" id="sm_yt">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_name">Kullanıcı Adı</label>
                                <input type="email" class="form-control" name="user_name" id="user_name" placeholder="Kullanıcı adi (E-Mail)">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_pass">Şifre</label>
                                <input type="password" class="form-control" name="user_pass" id="user_pass" placeholder="Şifre">
                            </div>
                        </div>
                    </div>-->

                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <span class="float-left">
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" id="LetMail">
                        <label for="LetMail">SMS</label>
                    </div>
                </span>
                <span class="float-right">
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" id="LetSMS">
                        <label for="LetSMS">Mail</label>
                    </div>
                </span>
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="/public/assets/dist/img/user4-128x128.jpg" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">Nina Mcintire</h3>
                <div class="form-group">
                    <div class="input-group my-colorpicker2 colorpicker-element">
                        <input type="text" class="form-control form-control-sm" placeholder="Ad Soyad">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group my-colorpicker2 colorpicker-element">
                        <input type="text" class="form-control form-control-sm" placeholder="Telefon">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group my-colorpicker2 colorpicker-element">
                        <input type="text" class="form-control form-control-sm" placeholder="E-Mail">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">İptal</button>
                <button type="button" class="btn btn-primary btn-flat">Kaydet</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
