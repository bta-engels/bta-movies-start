<?php require_once 'inc/html_header.php'; ?>

<?php if (isset($item) && is_array($item)) : ?>
    <table class="table table-striped">
        <tr>
            <th>ID:</th>
            <td><?php echo $item['id']; ?></td>
        </tr>
        <tr>
            <th>Titel:</th>
            <td><?php echo $item['title']; ?></td>
        </tr>
        <tr>
            <th>Preis:</th>
            <td><?php echo $item['price']; ?> €</td>
        </tr>
        <tr> 
            <th>Autor:</th> 
            <td><?php echo $item['author']['firstname']. ' ' .$item['author']['lastname'] ?></td>
        </tr>
        <?php if($item['image'] && '' !== $item['image']): ?>
            <tr> 
                <th>Bild:</th> 
                <td>
                    <img src="/uploads/<?php echo $item['image']; ?>" width="400" alt="Bild" />
                </td>
            </tr>
        <?php endif; ?>
    </table>
<?php else : ?>
    <h3>Keine Daten vorhanden</h3>
<?php endif; ?>

<?php require_once 'inc/html_footer.php'; ?>