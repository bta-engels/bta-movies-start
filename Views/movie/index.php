<?php require_once 'inc/html_header.php'; ?>

<?php if (isset($list) && count($list) > 0) : ?>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Titel</th>
            <th>Preis</th>
        </tr>
        <?php foreach ($list as $item) : ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><a href="/movies/<?php echo $item['id']; ?>"><?php echo $item['title']; ?></a></td>
                <td><?php echo $item['price']; ?> €</td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <h3>Keine Daten vorhanden</h3>
<?php endif; ?>

<?php require_once 'inc/html_footer.php'; ?>