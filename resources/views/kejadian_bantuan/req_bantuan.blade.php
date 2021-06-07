@extends('layout/main')

@section('title', 'Request Bantuan')

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
                Request Bantuan
                <small>Request Bantuan Ambulance dan Paramedis</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-sliders"></i> Kejadian & Bantuan</a></li>
                <li class="active">Request Bantuan</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#req_bantuan" data-toggle="tab">Request Bantuan</a></li>
                            <li><a href="#req_belum_direspon" data-toggle="tab">Request Yang Belum Di Respon</a></li>
                        </ul><br>
                        <div class="tab-content">
                            <div class="active tab-pane" id="req_bantuan">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <table id="example1" class="table table-bordered dataTable no-footer table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">NO</th>
                                                    <th class="text-center">CCN</th>
                                                    <th class="text-center">PELAPOR</th>
                                                    <th class="text-center">WAKTU</th>
                                                    <th class="text-center">LOKASI</th>
                                                    <th class="text-center">KATEGORI KEJADIAN</th>
                                                    <th class="text-center" style="width: 120px;">JUMLAH KORBAN</th>
                                                    <th class="text-center">KETERANGAN</th>
                                                    <th class="text-center" style="width: 110px;">AKSI</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="req_belum_direspon">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <table id="example2" class="table table-bordered dataTable no-footer table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">NO</th>
                                                    <th class="text-center">CCN</th>
                                                    <th class="text-center">PELAPOR</th>
                                                    <th class="text-center">WAKTU KEJADIAN</th>
                                                    <th class="text-center">WAKTU REQUEST</th>
                                                    <th class="text-center">LOKASI</th>
                                                    <th class="text-center">NOPOL</th>
                                                    <th class="text-center" style="width: 80px;">AKSI</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">CCN1001-1573978744</td>
                                                    <td class="text-center">ainur rohim</td>
                                                    <td class="text-center">2019-11-17 15:19:07</td>
                                                    <td class="text-center">2019-11-17 15:25:00</td>
                                                    <td class="text-center">Jl. Raya Pabean No.36, Dabean, Pabean, Kec.
                                                        Sedati, Kabupaten Sidoarjo, Jawa Timur 61253, Indonesia</td>
                                                    <td class="text-center">W 8511 PP</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-primary" data-toggle="tooltip"
                                                            data-placement="left" title="Kirim Ulang Notifikasi"
                                                            style="width: 24px; margin: auto 2px;"><i
                                                                class="fa fa-info"></i></a>
                                                        <a id="btn-pembatalan-tugas" class="btn btn-xs btn-danger"
                                                            data-toggle="tooltip" data-placement="left"
                                                            title="Pembatalan Tugas"
                                                            style="width: 24px; margin: auto 2px;"><i
                                                                class="fa fa-reply"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">CCN1001-1573738456</td>
                                                    <td class="text-center">Pak Ali</td>
                                                    <td class="text-center">2019-11-14 20:34:18</td>
                                                    <td class="text-center">2019-11-14 20:36:47</td>
                                                    <td class="text-center">Jl. Raya Durung Bedug, Lebo, Kec. Sidoarjo,
                                                        Kabupaten Sidoarjo, Jawa Timur 61223, Indonesia</td>
                                                    <td class="text-center">W 1046 NP</td>
                                                    <td class="text-center">
                                                        <a id="btn-kirim-ulang" class="btn btn-xs btn-primary"
                                                            data-toggle="tooltip" data-placement="left"
                                                            title="Kirim Ulang Notifikasi"
                                                            style="width: 24px; margin: auto 2px;"><i
                                                                class="fa fa-info"></i></a>
                                                        <a id="btn-pembatalan-tugas" class="btn btn-xs btn-danger"
                                                            data-toggle="tooltip" data-placement="left"
                                                            title="Pembatalan Tugas"
                                                            style="width: 24px; margin: auto 2px;"><i
                                                                class="fa fa-reply"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('modal')
    <div id="ModalInput" class="modal">
        <div class="modal-dialog modal-dialog-centered modal-lg" style="width:50%">
            <div class="modal-content">
                <div class="modal-header" style="padding: 10px auto;">
                    <h4 style="display:inline-block" class="modal-title" id="ModalInputTitle"><b>Periksa Bantuan</b></h4>
                    <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form">
                        <div class="form-body">
                            <div id="content-detail"><input type="hidden" value="" name="id_kejadian">
                                <input type="hidden" value="" name="">
                                <table class="table-condensed">
                                    <tbody>
                                        <tr>
                                            <th width="200" align="right">CCN</th>
                                            <td id="ccn">CCN1455-1615267395</td>
                                        </tr>
                                        <tr>
                                            <th align="right">Pelapor</th>
                                            <td id="pelapor">ellena</td>
                                        </tr>
                                        <tr>
                                            <th align="right">Alamat</th>
                                            <td id="lokasi">bpbd sidoarjo<br>depan bpbd sidoarjo</td>
                                        </tr>
                                        <tr>
                                            <th align="right">Keterangan</th>
                                            <td id="keterangan">pengamen tidak sadar di depan kantor bpbd sidoarjo</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h3 class="form-section font-green-meadow">Data Bantuan</h3>
                                <table class="table table-bordered table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Resource</th>
                                            <th width="200px">Tujuan</th>
                                            <th>Waktu Request</th>
                                            <th width="250px">Status</th>
                                            <th class="text-right" width="200px">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>AMB_1974 - B 1974 WQ<br>
                                                <small class="text-info">
                                                    <i class="fa fa-car fa-fw"></i> Mobil
                                                </small>
                                            </td>
                                            <td>
                                                RSI Siti Hajar </td>
                                            <td>2021-03-09 12:27:08</td>
                                            <td>
                                                DITERIMA </td>
                                            <td class="text-right">
                                                (SELESAI) </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END FORM-->
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
                <!-- <form id="form-data">
                                                                                                <div class="modal-body">
                                                                                                    <table id="example-table" class="table table-bordered dataTable no-footer">
                                                                                                        <thead>
                                                                                                            <tr>
                                                                                                                <th class="text-center">Resource</th>
                                                                                                                <th class="text-center">Tujuan</th>
                                                                                                                <th class="text-center">Waktu Request</th>
                                                                                                                <th class="text-center">Status</th>
                                                                                                                <th class="text-center">Aksi</th>
                                                                                                            </tr>
                                                                                                        </thead>
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <td class="text-center">AMB_1974 - B 1974 WQ<br><i class="fa fa-car" style="color: #89c4f4;"> Mobil</i></td>
                                                                                                                <td class="text-center">RSI Siti Hajar</td>
                                                                                                                <td class="text-center">2021-03-09 12:27:08</td>
                                                                                                                <td class="text-center">DITERIMA</td>
                                                                                                                <td class="text-center">(SELESAI)</td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                            </form> -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {
            $('#example1').DataTable({
                processing: true,
                serverSide: true,
                lengthChange: false,
                autoWidth: false,
                searching: true,
                ordering: false,
                info: true,
                pageLength: 20,
                // scrollX: true,
                "order": [
                    [0, "desc"]
                ],
                ajax: '{{ route('get-incidents') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'kode_kasus',
                        name: 'kode_kasus'
                    },
                    {
                        data: 'nama_pelapor',
                        name: 'nama_pelapor'
                    },
                    {
                        data: 'waktu',
                        name: 'waktu'
                    },
                    {
                        data: 'lokasi',
                        name: 'lokasi'
                    },
                    {
                        data: 'category.kategori',
                        name: 'category.kategori'
                    },
                    {
                        data: 'jumlah_pasien',
                        name: 'jumlah_pasien'
                    },
                    {
                        data: 'keterangan',
                        name: 'keterangan'
                    },
                    {
                        data: 'Aksi',
                        name: 'Aksi',
                        orderable: false,
                        serachable: false,
                        sClass: 'text-center'
                    }
                ]
            })
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })

        }).on('click', '#btn-lihat', function() {
            var id = $(this).data('id'),
                b = $(this);
            $.ajax({
                url: "get-incident/" + id,
                method: 'GET',
                beforeSend: function() {
                    b.attr('disabled', 'disabled');
                },
                success: function(result) {
                    $('#ccn').html(result.kode_kasus);
                    $('#pelapor').html(result.nama_pelapor);
                    $('#lokasi').html(result.lokasi + '<br>' + result.detail_lokasi);
                    $('#keterangan').html(result.keterangan);
                    b.removeAttr('disabled');
                    $('#ModalInput').modal('show');
                },
                error: function() {
                    b.removeAttr('disabled');
                }
            });

        })

    </script>
@endsection
