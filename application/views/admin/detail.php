<div class="content-wrapper">
    <div class="content">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">MyVoqu Penghafal Data Detail</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/index/'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">MyVoqu Penghafal Data Detail</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->

            <table class="table">
                <tr>
                    <th>Nama</th>
                    <td><?php echo $detail->name ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $detail->email ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <?php if ($detail->status == "offline-dot" || $detail->status == ""): ?>
                        <td>
                            <?php echo "<span class='badge badge-danger'>Offline</span>"; ?>
                        </td>
                    <?php else: ?>
                        <td>
                            <?php echo "<span class='badge badge-primary'>Online</span>"; ?>
                        </td>
                    <?php endif;?>
                </tr>
                <tr>
                    <th>Status Aktivasi</th>
                    <?php if ($detail->is_active == 2 || $detail->is_active == 0): ?>
                        <td>
                            <?php echo "<span class='badge badge-danger'>Not Activated</span>"; ?>
                        </td>
                    <?php else: ?>
                        <td>
                            <?php echo "<span class='badge badge-primary'>Activated</span>"; ?>
                        </td>
                    <?php endif;?>
                </tr>
                <tr>
                    <th>Birth Date</th>
                    <?php if ($detail->birthdate == "0000-00-00"): ?>
                        <td>
                            <?php echo "-"; ?>
                        </td>
                    <?php else: ?>
                        <td>
                            <?php echo $detail->birthdate ?>
                        </td>
                    <?php endif;?>
                </tr>
                <tr>
                    <th>Create Date</th>
                    <td><?php echo date("d-m-Y H:i:s", $detail->date_created); ?></td>
                </tr>
                <tr>
                    <th>City</th>
                    <?php if ($detail->city == ""): ?>
                        <td>
                            <?php echo "-"; ?>
                        </td>
                    <?php else: ?>
                        <td>
                            <?php echo $detail->city ?>
                        </td>
                    <?php endif;?>
                </tr>
                <tr>
                    <th>Bio</th>
                    <td><?php echo $detail->bio ?></td>
                </tr>
                <tr>
                    <th>Work</th>
                    <?php if ($detail->work == ""): ?>
                        <td>
                            <?php echo "-"; ?>
                        </td>
                    <?php else: ?>
                        <td>
                            <?php echo $detail->work ?>
                        </td>
                    <?php endif;?>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo $detail->gender ?></td>
                </tr>
                <tr>
                    <th>Foto</th>
                    <td><img src="<?php echo base_url(); ?>assets/foto/<?php echo $detail->image; ?>" width="150" height="150"></td>
                </tr>
            </table>
            <a href="<?php echo base_url('Admin/indexPenghafal'); ?>" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>