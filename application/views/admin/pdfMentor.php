<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Myvoqu Mentor Data</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <table class="table">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Kode</th>
                <th>Instansi</th>
                <th>Email</th>
            </tr>

            <?php $no = 1;
            foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $mhs->nama ?></td>
                    <td><?php echo $mhs->kode_mentor ?></td>
                    <td><?php echo $mhs->instansi ?></td>
                    <td><?php echo $mhs->email ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>