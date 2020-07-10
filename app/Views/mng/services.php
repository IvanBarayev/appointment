<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>
<div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
    <table id="DTable" class="datatable-table" style="display: block;">
        <thead class="datatable-head">
        <tr class="datatable-row" style="left: 0px;">
            <th class="datatable-cell-left datatable-cell datatable-cell-sort datatable-cell-sorted" data-sort="asc"><span style="width: 40px;">#</span></th>
            <th class="datatable-cell datatable-cell-sort"><span style="width: 250px;">Customer</span></th>
            <th class="datatable-cell datatable-cell-sort"><span style="width: 158px;">Country</span></th>
            <th class="datatable-cell datatable-cell-sort"><span style="width: 158px;">Ship Date</span></th>
            <th class="datatable-cell datatable-cell-sort"><span style="width: 158px;">Company Name</span></th>
            <th class="datatable-cell datatable-cell-sort"><span style="width: 158px;">Status</span></th>
            <th data-autohide-disabled="false" class="datatable-cell datatable-cell-sort"><span style="width: 130px;">Actions</span></th>
        </tr>
        </thead>
        <tbody class="datatable-body" style="">
        <tr data-row="20" class="datatable-row" style="left: 0px;">
            <td class="datatable-cell-sorted datatable-cell-left datatable-cell"><span style="width: 40px;"><span class="font-weight-bolder">21</span></span></td>
            <td class="datatable-cell"><span style="width: 250px;"><div class="d-flex align-items-center"><div class="symbol symbol-40 symbol-circle symbol-sm"><img class="" src="https://keenthemes.com/metronic/preview/demo1/custom/apps/projects/assets/media/project-logos/2.png" alt="photo"></div><div class="ml-3"><div class="text-dark-75 font-weight-bolder font-size-lg mb-0">Beryl Lycett</div><a href="#" class="text-muted font-weight-bold text-hover-primary">Vue, Kendo</a></div></div></span></td>
            <td class="datatable-cell"><span style="width: 158px;"><div class="font-weight-bolder font-size-lg mb-0">Indonesia</div><div class="font-weight-bold text-muted">Code: ID</div></span></td>
            <td class="datatable-cell"><span style="width: 158px;"><div class="font-weight-bolder text-primary mb-0">6/28/2017</div><div class="text-muted">Paid</div></span></td>
            <td class="datatable-cell"><span style="width: 158px;"><div class="font-weight-bold text-muted">Schoen Inc</div></span></td>
            <td class="datatable-cell"><span style="width: 158px;"><span class="label label-lg font-weight-bold  label-light-primary label-inline">Canceled</span></span></td>
            <td class="datatable-cell">
                <span style="overflow: visible; position: relative; width: 130px;">
                    <div class="dropdown dropdown-inline">
                        <a href="javascript:;" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" data-toggle="dropdown">
                        <i class="fas fa-search"></i></a>
                    </div>
                </span>
            </td>
        </tr>
        <tr data-row="20" class="datatable-row" style="left: 0px;">
            <td class="datatable-cell-sorted datatable-cell-left datatable-cell"><span style="width: 40px;"><span class="font-weight-bolder">21</span></span></td>
            <td class="datatable-cell"><span style="width: 250px;"><div class="d-flex align-items-center"><div class="symbol symbol-40 symbol-circle symbol-sm"><img class="" src="https://keenthemes.com/metronic/preview/demo1/custom/apps/projects/assets/media/project-logos/2.png" alt="photo"></div><div class="ml-3"><div class="text-dark-75 font-weight-bolder font-size-lg mb-0">Beryl Lycett</div><a href="#" class="text-muted font-weight-bold text-hover-primary">Vue, Kendo</a></div></div></span></td>
            <td class="datatable-cell"><span style="width: 158px;"><div class="font-weight-bolder font-size-lg mb-0">Indonesia</div><div class="font-weight-bold text-muted">Code: ID</div></span></td>
            <td class="datatable-cell"><span style="width: 158px;"><div class="font-weight-bolder text-primary mb-0">6/28/2017</div><div class="text-muted">Paid</div></span></td>
            <td class="datatable-cell"><span style="width: 158px;"><div class="font-weight-bold text-muted">Schoen Inc</div></span></td>
            <td class="datatable-cell"><span style="width: 158px;"><span class="label label-lg font-weight-bold  label-light-primary label-inline">Canceled</span></span></td>
            <td class="datatable-cell">
                <span style="overflow: visible; position: relative; width: 130px;">
                    <div class="dropdown dropdown-inline">
                        <a href="javascript:;" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" data-toggle="dropdown">
                        <i class="fas fa-search"></i></a>
                    </div>
                </span>
            </td>
        </tr>

        </tbody>
    </table>
    <div class="datatable-pager datatable-paging-loaded">
        <ul class="datatable-pager-nav mb-5 mb-sm-0">
            <li><a title="First" class="datatable-pager-link datatable-pager-link-first" data-page="1"><i class="flaticon2-fast-back"></i></a></li>
            <li><a title="Previous" class="datatable-pager-link datatable-pager-link-prev" data-page="2"><i class="flaticon2-back"></i></a></li>
            <li style=""></li>
            <li style="display: none;"><input type="text" class="datatable-pager-input form-control" title="Page number"></li>
            <li><a class="datatable-pager-link datatable-pager-link-number" data-page="1" title="1">1</a></li>
            <li><a class="datatable-pager-link datatable-pager-link-number" data-page="2" title="2">2</a></li>
            <li><a class="datatable-pager-link datatable-pager-link-number datatable-pager-link-active" data-page="3" title="3">3</a></li>
            <li><a class="datatable-pager-link datatable-pager-link-number" data-page="4" title="4">4</a></li>
            <li><a class="datatable-pager-link datatable-pager-link-number" data-page="5" title="5">5</a></li>
            <li></li>
            <li><a title="Next" class="datatable-pager-link datatable-pager-link-next" data-page="4"><i class="flaticon2-next"></i></a></li>
            <li><a title="Last" class="datatable-pager-link datatable-pager-link-last" data-page="35"><i class="flaticon2-fast-next"></i></a></li>
        </ul>
    </div>
</div>
<?= $this->endSection() ?>
