<?php require_once 'inc/html_header.php'; ?>

<div>
    <a href="/movies/edit" role="button" class="btn btn-primary mt-0 mb-3">Neuen Autor anlegen</a>
</div>

<?php if (isset($list) && count($list) > 0) : ?>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Titel</th>
            <th>Preis</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($list as $item) : ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><a href="/movies/<?php echo $item['id']; ?>"><?php echo $item['title']; ?></a></td>
                <td><?php echo $item['price']; ?> €</td>
                <td class="colButtons">
                    <a href="/movies/edit/<?php echo $item['id']; ?>" class="btn-sm btn-primary" role="button">Edit</a>
                    <a href="/movies/delete/<?php echo $item['id']; ?>" class="btn-sm btn-danger ml-1 delsoft" role="button">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <h3>Keine Daten vorhanden</h3>
<?php endif; ?>

<?php require_once 'inc/html_footer.php'; ?>