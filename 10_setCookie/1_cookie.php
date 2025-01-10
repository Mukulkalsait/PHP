<body style="color: white;">
<?php


setcookie("fav_food", "Pizza", time() + (86400 * 4), "/");
setcookie("fav_food", "Pizza", time() - 1, "/");


setcookie("fav_song", "All", time() + (86400 * 4), "/");
setcookie("fav_drink", "mirinda", time() +  (86400 * 2), "/");
setcookie("fav_movie", "Inseption", time() + (86400 * 1), "/");


foreach ($_COOKIE as $catagory => $item) {
    echo "{$catagory} => {$item}<br>";
}


// IMP: everytime i change the cookite it waill add.
// infact jsut changing/modyving will also add multyple copyes.
// which mean it will be saved untill you :w
