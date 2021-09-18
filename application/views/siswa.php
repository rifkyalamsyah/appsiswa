<!-- Tampilkan alert -->
<?= $this->session->flashdata('pesan'); ?>

<div class="card">
    <div class="card-header">
        <a href="<?= base_url('siswa/tambah'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data Siswa</a>
        <a href="<?= base_url('siswa/print'); ?>" class="btn btn-info btn-sm"><i class="fas fa-print"></i> Print</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr class="text-center">
                    <th>NO</th>
                    <th>Nama Siswa</th>
                    <th>Kelas Siswa</th>
                    <th>Alamat Siswa</th>
                    <th>No. Telp</th>
                    <th>Action</th>
                </tr>
            </thead>

            <!-- Foreach -->
            <?php $no = 1;
            foreach ($siswa as $ssw) : ?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $ssw->nama_siswa ?></td>
                        <td><?= $ssw->kelas_siswa ?></td>
                        <td><?= $ssw->alamat_siswa ?></td>
                        <td><?= $ssw->no_telepon ?></td>
                        <td>
                            <!-- button edit -->
                            <button data-toggle="modal" data-target="#edit<?= $ssw->id_siswa ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>

                            <!-- button hapus -->
                            <a href="<?= base_url('siswa/delete/' . $ssw->id_siswa); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakan anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>


<!-- Modal -->
<?php foreach ($siswa as $ssw) : ?>
    <div class="modal fade" id="edit<?= $ssw->id_siswa ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form -->
                    <form action="<?= base_url('siswa/edit/' . $ssw->id_siswa); ?>" method="POST">
                        <div class="form-group">
                            <label for="">Nama Siswa</label>
                            <input type="text" name="nama_siswa" class="form-control" value="<?= $ssw->nama_siswa ?>">
                            <?= form_error('nama_siswa', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Kelas Siswa</label>
                            <input type="text" name="kelas_siswa" class="form-control" value="<?= $ssw->kelas_siswa ?>">
                            <?= form_error('kelas_siswa', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Siswa</label>
                            <textarea type="text" name="alamat_siswa" class="form-control"><?= $ssw->alamat_siswa ?></textarea>
                            <?= form_error('alamat_siswa', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">No Telepon</label>
                            <input type="text" name="no_telepon" class="form-control" value="<?= $ssw->no_telepon ?>">
                            <?= form_error('no_telepon', '<div class="text-small text-danger">', '</div>'); ?>
                        </div>

                        <!-- Button -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                            <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>