<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- form start -->
                <form role="form" action="<?php echo base_url() ?>pelajar/add   " method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label>NIS</label>
                            <input type="number" name="nis" class="form-control" placeholder="Input Nis">
                        </div>
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <input type="text" name="nama" class="form-control" placeholder="Input Nama">
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control" placeholder="Input Kelas">
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" placeholder="Input Jurusan">
                            <!-- <select name="" id="">
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select> -->
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Input Email">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <!-- <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>