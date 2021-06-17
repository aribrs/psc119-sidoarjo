@extends('layout/main')

@section('title', 'Fasilitas Kesehatan')

@section('css')
<style>
    .nav-tabs-custom>.nav-tabs>li.active {
        border-top-color: #dd4b39;
    }
</style>
@endsection

@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Resource Bed
            <small>daftar resource Bed</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-flag"></i> Master</a></li>
            <li class="active"> Fasilitas Kesehatan</li>
            <li class="active"> Bed</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#resource" data-toggle="tab">Data Bed Command Center</a></li>
                <div class="pull-right" style="padding-top: 4px; padding-right: 6px;">
                    <a href="{{ url('/faskes') }}" class="btn btn-danger">X</a>
                </div>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="resource">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="btn-group">
                                <button href="#form_insert" role="button" data-toggle="modal" data-target="#ModalInput"
                                    class="btn btn-success">
                                    <i class="fa fa-plus-circle"></i> Insert Data</button>
                            </div>
                        </div>
                    </div><br>
                    <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 40px;">No</th>
                                <th class="text-center">Keterangan</th>
                                <th class="text-center">Jumlah</th>
                                <th class="text-center">Tersedia</th>
                                <th class="text-center" style="width: 80px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Kelas 1</td>
                                <td class="text-center">26</td>
                                <td class="text-center">Tersedia</td>
                                <td class="text-center">
                                    <div class="row" style="margin-bottom: 5px;">
                                        <button class="btn btn-sm btn-primary" type="button" title="Edit Data" data-toggle="modal" data-target="#ModalInput"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-sm btn-danger" type="button" title="Hapus Data"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </section>
    <!-- /.content -->
</div>
@endsection

@section('modal')
<div id="ModalInput" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width:30%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Form</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="post" id="" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Tipe Bed<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <select id="tipe_bed" name="tipe_bed" class="form-control">
                                        <option value="">Pilih Tipe Bed</option>
                                        <option value="">Bed IGD</option>
                                        <option value="">Kelas 1</option>
                                        <option value="">Kelas 2</option>
                                        <option value="">Bed ICU</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Jumlah<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="jumlah" name="jumlah" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Tersedia<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="tersedia" name="tersedia" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
            <div class="modal-footer">
                <button type="submit" onclick="" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<div id="ModalInputLayanan" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="width:30%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Form</b></h4>
                <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="post" id="" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-4 font-green-haze">Layanan<span class="required"
                                        style="color: red;">
                                        * </span>
                                </label>
                                <div class="col-md-8">
                                    <input type="text" id="layanan" name="layanan" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
                <!-- END VALIDATION STATES-->
            </div>
            <div class="modal-footer">
                <button type="submit" onclick="" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })

    $('#datepicker').datepicker({
        autoclose: true
    })
</script>
@endsection
