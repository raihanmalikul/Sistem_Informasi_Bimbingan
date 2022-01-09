 <!-- left sidebar -->
 <!-- ============================================================== -->
 <div class="nav-left-sidebar sidebar-dark">
     <div class="menu-list">
         <nav class="navbar navbar-expand-lg navbar-light">
             <a class="d-xl-none d-lg-none" href="dashboard.html">Menu</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav flex-column">

                     <!-- quwry menu -->
                     <?php
                        $role_id = $this->session->userdata('role_id');
                        $queryMenu = "SELECT user_menu . id , menu  
                                           FROM  user_menu JOIN user_access_menu  
                                             ON  user_menu . id = user_access_menu . menu_id 
                                          WHERE  user_access_menu . role_id  = $role_id
                                       ORDER BY  user_access_menu . menu_id ASC
                                       ";
                        $menu = $this->db->query($queryMenu)->result_Array();
                        ?>

                     <!-- looping menu -->
                     <?php foreach ($menu as $m) :  ?>
                         <li class="nav-item ">
                             <div class="sidebar-heading">
                                 <?= $m['menu'];  ?>
                             </div>



                             <?php
                                $menuId = $m['id'];
                                $querySubMenu = "SELECT *
                                                FROM user_sub_menu JOIN user_menu 
                                                  ON user_sub_menu . menu_id  = user_menu . id
                                               WHERE user_sub_menu . menu_id = $menuId
                                                 AND user_sub_menu . is_active = 1
                                               ";
                                $subMenu = $this->db->query($querySubMenu)->result_Array();
                                ?>

                             <?php foreach ($subMenu as $sm) : ?>


                                 <!-- <div class="submenu"> -->
                                 <ul class="nav flex-column">
                                     <li class="nav-item">
                                         <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                                             <i class="<?= $sm['icon']; ?>"></i>
                                             <spam><?= $sm['title']; ?></spam>
                                         </a>

                                     </li>
                                 </ul>
                                 <!-- </div> -->
                         </li>

                         <!-- tutup -->
                     <?php endforeach; ?>
                 <?php endforeach; ?>


                 </ul>
             </div>
         </nav>
     </div>
 </div>
 <!-- ============================================================== -->
 <!-- end left sidebar -->