<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">MyVoqu Penghafal Data</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/index/'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">MyVoqu Penghafal Data</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <?php echo $this->session->flashdata('message'); ?>


        <div class="dropdown">
            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-download"></i> Export
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a href="<?php echo base_url('Admin/printPenghafal'); ?>" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                <a href="<?php echo base_url('Admin/pdfPenghafal'); ?>" class="dropdown-item"><i class="fa fa-file"></i> PDF</a>
                <a href="<?php echo base_url('Admin/excelPenghafal'); ?>" class="dropdown-item"><i class="fa fa-file"></i> Excel</a>
            </div>
        </div>

        <table class="table mt-2">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
                <th colspan="5">
                    <center>Action</center>
                </th>
            </tr>
            <?php $no = 1;
foreach ($user as $u): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $u->name ?></td>
                    <td><?php echo $u->email ?></td>
                    <td><?php echo $u->gender ?></td>
                    <?php if ($u->status == "offline-dot" || $u->status == ""): ?>
                        <td>
                            <?php echo "<span class='badge badge-danger'>Offline</span>"; ?>
                        </td>
                    <?php else: ?>
                        <td>
                            <?php echo "<span class='badge badge-primary'>Online</span>"; ?>
                        </td>
                    <?php endif;?>
                    <td>
                        <?php echo anchor('Admin/detailPenghafal/' . $u->id, '<div class="btn btn-info btn-sm"><i class="fa fa-search-plus"></i> Detail</div>') ?>
                    </td>
                    <td onclick="return confirm('Delete User?');">
                        <?php echo anchor('Admin/hapusPenghafal/' . $u->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</div>') ?>
                    </td>
                    <?php if ($u->is_active == 2 || $u->is_active == 0): ?>
                        <td onclick="return confirm('Activate User?');">
                            <?php echo anchor('Admin/activatePenghafal/' . $u->id, '<div class="btn btn-warning btn-sm"><i class="fa fa-check"></i> Activate</div>') ?>
                        </td>
                    <?php else: ?>
                        <td onclick="return confirm('Deactivate User?');">
                            <?php echo anchor('Admin/deactivatePenghafal/' . $u->id, '<div class="btn btn-warning btn-sm"><i class="fas fa-exclamation-triangle"></i> Deactivate</div>') ?>
                        </td>
                    <?php endif;?>
                </tr>
            <?php endforeach;?>
        </table>
    </div>

</div>