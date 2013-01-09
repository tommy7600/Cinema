<?php
$user = Auth::instance();
?>
<html lang="pl">
    <head>
        <meta charset ="utf-8">
        <title> Kino Tura </title>
        <link href="/assets/css/bootstrap.css" rel="stylesheet">
        <link href ="/assets/css/bootstrap-responsive.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <?php if ($user->logged_in("admin")): ?>
                <ul class="nav nav-pills  pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <?php echo $user->get_user()->username ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="adm_auth/logout">Wyloguj</a></li>
                        </ul>
                    </li>
                </ul>
            <?php endif; ?>
            <div class="navbar navbar">
                <div class="navbar-inner">
                    <?php $u_page = Kohana::$config->load('pageConfig.pages') ?>                
                    <ul class="nav">
                        <?php foreach ($u_page as $page): ?>                            
                            <li<?php if ($actual_page == $page[0]): ?> class="active"<?php endif; ?>>                  
                                <?php echo '<a href=' . $page[1] . '>' . $page[2] . '</a>'; ?>
                            </li>                            
                        <?php endforeach; ?>
                    <?php if ($user->logged_in("admin")): ?>                                      
                    <?php $u_page = Kohana::$config->load('pageConfig.admpg') ?>   
                            <?php foreach ($u_page as $page): ?>                            
                            <li<?php if ($actual_page == $page[0]): ?> class="active"<?php endif; ?>>                  
                                <?php echo '<a href=' . $page[1] . '>' . $page[2] . '</a>'; ?>
                            </li>                            
                        <?php endforeach; ?>                        
                    <?php endif; ?>
                    </ul>                    

                </div>
            </div>
            <div class="container-fluid">
                <?php echo isset($content) ? $content : ''; ?>
            </div>
        </div>

        <script src="/assets/js/jquery-1.8.2.min.js"></script>
        <script src="/assets/js/bootstrap.js"></script>                       
        <script src="/assets/js/core.js"></script>
    </body>
</html> 