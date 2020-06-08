
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="background: url('<?= BASEURL?>assets/images/background/user-info.jpg') no-repeat;">
            <!-- User profile image -->
            <div class="profile-img"> <img src="<?= BASEURL?>assets/images/users/profile.png"  alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?= $data['nama']?></a>

            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">Home</li>
                <li>
                    <a class="waves-effect waves-dark" href="<?= BASEURL ?>Backoffice/Siswa" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                </li>
                <li class="nav-small-cap">Master</li>

                <li>
                    <a class="waves-effect waves-dark" href="<?= BASEURL; ?>Mapel/mapelSiswa" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">  Mapel</span></a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="<?= BASEURL; ?>Tugas/listTugas" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">  Tugas</span></a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="<?= BASEURL; ?>Report" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu"> Report</span></a>
                </li>
                <li class="nav-small-cap">Pengaturan</li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-user-circle"></i><span class="hide-menu">Akun</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="widget-apps.html">Akun Saya</a></li>
                        <li><a href="widget-data.html">Hak Akses</a></li>
                    </ul>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="<?= BASEURL; ?>Home/logout" aria-expanded="false"><i class="fa fa-sign-out"></i><span class="hide-menu">Logout</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
