<?php
/*
./app/vues/categories/index.php
Variables disponibles :
-$categories :ARRAY(ARRAY(id, name))
*/

?>


<ul class="menu-link">
  <?php foreach ($categories as $category): ?>

    <li><a href="index.html"><?php echo $category['name']; ?></a></li>

      <?php endforeach; ?>





    </ul>
