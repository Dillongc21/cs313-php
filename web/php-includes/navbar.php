<div class="nav">
    <div class="grid">
    <ul class="navbar col-1-1">
        <?php
            $routes = array(
                'Home' => 'index.php',
                'Assignments' => 'assignments.php'
            );

        foreach ($routes as $name => $route) {
            echo '<li '.(($title === $name) ? 'class="active" ': '').
                '><a href="'.$route.'">'.$name.'</a></li>';
        }
        ?>
    </ul>
    </div>
</div>