<html lang="pl">
    <head>
        <meta charset ="utf-8">
        <title> Kino Tura </title>
        <link href="/assets/css/bootstrap.css" rel="stylesheet">
        <link href ="/assets/css/bootstrap-responsive.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">         
            <div class="navbar navbar">
                <div class="navbar-inner">
                    <?php $a_page = Kohana::$config->load('pageConfig.pages') ?>                
                    <ul class="nav">
                        <?php foreach ($a_page as $page): ?>

                            <?php if ($actual_page == $page[0]): ?>  
                                <li class="active">                  
                                    <?php echo '<a href=' . $page[1] . '>' . $page[2] . '</a>'; ?>
                                </li>
                            <?php else: ?>
                                <li>                  
                                    <?php echo '<a href=' . $page[1] . '>' . $page[2] . '</a>'; ?>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="container-fluid">
                <?php include Kohana::find_file('views', $content) ?>
            </div>
        </div>
        
        <script src="/assets/js/jquery-1.8.2.min.js"></script>
        <script src="/assets/js/bootstrap.js"></script>                       
        <script src="/assets/js/core.js"></script>
    </body>
</html> 