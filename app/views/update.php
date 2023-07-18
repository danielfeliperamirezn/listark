<?php
    include_once '  ./app/config.php';
    include_once './app/views/header.php';

    $query = $db->query('SELECT * FROM productos');

?>

<form action="save.php" method="post">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
<input type="submit" value="Update">