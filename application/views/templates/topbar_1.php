<!-- navbar -->
<!-- ============================================================== -->
<?php
$role_id = $this->session->userdata('role_id');
$role = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
?>
<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="dashboard.html">Belajar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">


                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('assets/') ?>images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle mr-3"><?= $user['name_ds']  ?></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name"><?= $role['role'];  ?></h5>
                        </div>
                        <?php if ($role_id == 2) : ?>
                            <a class="dropdown-item" href="<?= base_url('dosen/my_profile') ?>"><i class="far fa-fw fa-user mr-2"></i>Profile</a>
                        <?php else : ?>
                            <a class="dropdown-item" href="<?= base_url('cordinator/my_profile') ?>"><i class="far fa-fw fa-user mr-2"></i>Profile</a>
                        <?php endif; ?>
                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="fas fa-power-off mr-2"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- ============================================================== -->
<!-- end navbar -->