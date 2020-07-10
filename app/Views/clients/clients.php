<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>
<div class="row mt-3">
    <div class="col-12">
        <table id="DTable" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Ad Soyad</th>
                <th>Telefon</th>
                <th>E-Mail</th>
                <th>Temsilci</th>
                <th>Kayıt Tarihi</th>
                <th>İşlem</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Misc</td>
                <td>Links</td>
                <td>Text only</td>
                <td>-</td>
                <td>X</td>
                <td><i class="fas fa-search"></i></td>
            </tr>
            <tr>
                <td>Misc</td>
                <td>Lynx</td>
                <td>Text only</td>
                <td>-</td>
                <td>X</td>
                <td>X</td>
            </tr>
            </tbody>
        </table>
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
