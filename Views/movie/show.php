
<h3>Movietitel: <?php echo $data['title']; ?> (ID: <?php echo $data['id']; ?>)</h3>
<h5>Preis: <?php echo $data['price']; ?> €</h5>
<h5>Autor: <?php echo $data['author']; ?></h5> 
<!-- wenn bild vorhanden, dann hier ausgeben -->
<!-- Alternativ Syntax ohne geschweiften klammern nur (:) und (endif) -->
<?php if($data['image']): ?>
<img src="/uploads/<?php echo $data['image']; ?>" height="400" alt="" title="" />
<?php endif;?>
