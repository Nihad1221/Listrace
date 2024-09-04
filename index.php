<?php
include_once './config/index.php';
include_once './app/helpers/folder-path.php';
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php
    include_once './views/includes/head.php';
    ?>
</head>

<body>
    <?php
    include_once _include('views.includes.header');
    include_once _include('views.pages.top-area');

    include_once 'views/pages/home.php';
    include_once 'views/pages/list-topics.php';
    include_once 'views/pages/works.php';
    include_once 'views/pages/explore.php';
    include_once 'views/pages/reviews.php';
    include_once 'views/pages/statistics.php';
    include_once 'views/pages/blog.php';
    include_once 'views/pages/contact.php';

    include_once 'views/includes/footer.php';

    include_once 'views/includes/js.php';
    ?>
</body>

</html>