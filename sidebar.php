<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <?php
                $dashboard_link = array(
                    'href' => $base_url.'/main.php',
                    'class' => 'nav-link',
                );
                $database_link = array(
                    'href' => $base_url.'/database.php',
                    'class' => 'nav-link',
                );
                $user_link = array(
                    'href' => $base_url.'/users.php',
                    'class' => 'nav-link',
                );
                $medias_link = array(
                    'href' => $base_url.'/medias.php',
                    'class' => 'nav-link'
                );
                $report_user_link = array(
                    'href' => $base_url.'/report/user.php',
                    'class' => 'nav-link'
                );
                $logout_link = array(
                    'href' => $base_url.'/logout.php',
                    'class' => 'nav-link',
                );
                li(anchor('<i class="icon-speedometer"></i>Dashboard<span class="badge badge-primary">NEW</span>',$dashboard_link));
                li(anchor('<i class="icon-cup"></i> Databases',$database_link));
                li(anchor('<i class="icon-user"></i> Users',$user_link));
                li(anchor('<i class="icon-picture"></i> Medias',$medias_link));
                li(anchor('<i class="icon-chart"></i> Report User',$report_user_link));
                li(anchor('<i class="icon-power"></i> Logout',$logout_link));
                ?>
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
