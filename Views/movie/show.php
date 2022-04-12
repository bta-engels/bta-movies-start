
<h3>Movie:  <?php echo $data['title'] ,' ', $id; ?></h3>
<h5><?php echo $data['price']; ?> €</h5>
<h5>Autor: <?php echo $data['author']; ?></h5>
<?php if($data['image']): ?>
    <img src="/uploads/<?php echo $data['image'] ?>" height="400" alt="<?php echo $data['image'] ?>" title="<?php echo $data['image'] ?>" />
<?php endif; ?>
