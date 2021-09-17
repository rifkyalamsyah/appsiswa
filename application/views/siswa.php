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
                        <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        <?php endforeach; ?>
    </table>
</div>