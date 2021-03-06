<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Siswa</title>
</head>

<body>
    <!-- Table -->
    <table class="table table-bordered" border="1 solid-black">
        <tr>
            <th>No.</th>
            <th>Nama Siswa</th>
            <th>Kelas Siswa</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
        </tr>

        <?php $no = 1;
        foreach ($siswa as $ssw) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $ssw->nama_siswa ?></td>
                <td><?= $ssw->kelas_siswa ?></td>
                <td><?= $ssw->alamat_siswa ?></td>
                <td><?= $ssw->no_telepon ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

    <!-- Js -->
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>