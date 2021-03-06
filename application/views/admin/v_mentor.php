<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">MyVoqu Mentors Data</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('Admin/index/'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">MyVoqu Mentors Data</li>
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
                <a href="<?php echo base_url('Admin/printMentor'); ?>" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                <a href="<?php echo base_url('Admin/pdfMentor'); ?>" class="dropdown-item"><i class="fa fa-file"></i> PDF</a>
                <a href="<?php echo base_url('Admin/excelMentor'); ?>" class="dropdown-item"><i class="fa fa-file"></i> Excel</a>
            </div>
        </div>

        <table class="table mt-2">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Instansi</th>
                <th>Status</th>
                <th colspan="4">
                    <center>Action</center>
                </th>
            </tr>
            <?php $no = 1;
            foreach ($mentor as $m) : ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $m->name ?></td>
                    <td><?php echo $m->email ?></td>
                    <td><?php echo $m->instansi ?></td>
                    <?php if ($m->status == "offline-dot" || $m->status == "") : ?>
                        <td>
                            <?php echo "<span class='badge badge-danger'>Offline</span>"; ?>
                        </td>
                    <?php else : ?>
                        <td>
                            <?php echo "<span class='badge badge-primary'>Online</span>"; ?>
                        </td>
                    <?php endif; ?>
                    <td>
                        <?php echo anchor('Admin/detailMentor/' . $m->id, '<div class="btn btn-info btn-sm"><i class="fa fa-search-plus"></i> Detail</div>') ?>
                    </td>
                    <?php if ($m->verified == 0) : ?>
                        <td onclick="return confirm('Verify Mentor?');">
                            <?php echo anchor('Admin/verifyMentor/' . $m->id, '<div class="btn btn-warning btn-sm"><i class="fa fa-check"></i> Verify</div>') ?>
                        </td>
                    <?php else : ?>
                        <td>
                            <?php echo '<div class="btn btn-primary btn-sm"> Verified</div>' ?>
                        </td>
                    <?php endif; ?>
                    <?php if ($m->is_active == 2 || $m->is_active == 0) : ?>
                        <td onclick="return confirm('Activate Mentor?');">
                            <?php echo anchor('Admin/activateMentor/' . $m->id, '<div class="btn btn-warning btn-sm"><i class="fa fa-check"></i> Activate</div>') ?>
                        </td>
                    <?php else : ?>
                        <td onclick="return confirm('Deactivate Mentor?');">
                            <?php echo anchor('Admin/deactivateMentor/' . $m->id, '<div class="btn btn-warning btn-sm"><i class="fas fa-exclamation-triangle"></i> Deactivate</div>') ?>
                        </td>
                    <?php endif; ?>
                    <td onclick="return confirm('Delete Mentor?');">
                        <?php echo anchor('Admin/hapusMentor/' . $m->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</div>') ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

</div>