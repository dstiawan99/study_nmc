<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1>DataTables</h1> -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <?php if ($this->session->flashdata("success")) { ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <span style="text-align: left;"> <?php echo $this->session->flashdata("success"); ?></span>
                            </div>
                        <?php  } ?>
                        <?php if ($this->session->flashdata("error")) { ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <span style="text-align: left;"> <?php echo $this->session->flashdata("error"); ?></span>
                            </div>
                        <?php  } ?>
                        <div class="card-header">
                            <h3 class="card-title">Data Pelajar</h3>
                        </div>
                        <div class="card-body">
                            <!-- <div class="float-left"> -->
                            <div class="mb-2">
                                <a href="<?php echo base_url() ?>pelajar/tambah_data" class="btn btn-primary">
                                    <i class="fa fa-plus mr-2"></i>
                                    Tambah Data
                                </a>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">

                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NISN</th>
                                        <th>NAMA SISWA</th>
                                        <th>JURUSAN</th>
                                        <th>KELAS</th>
                                        <th>EMAIL</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($pelajar->result_array() as $data) :
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data['nis'] ?></td>
                                            <td><?php echo $data['nama_siswa'] ?></td>
                                            <td><?php echo $data['kelas'] ?></td>
                                            <td><?php echo $data['jurusan'] ?></td>
                                            <td><?php echo $data['email'] ?></td>
                                            <td>
                                                <span data-toggle="tooltip" data-original-tittle="Edit Data" style="font-size: 10;">
                                                    <a href="<?php echo base_url() ?>pelajar/edit_data/<?php echo $data['nis']; ?>" class="btn btn-warning btn-sm mr-1 mb-1"><i class="fa fa-edit"></i></a>
                                                </span>
                                                <span data-toggle="tooltip" data-original-tittle="Hapus Data" style="font-size: 10;">
                                                    <a href="<?php echo base_url() ?>pelajar/delete/<?php echo $data['nis']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->