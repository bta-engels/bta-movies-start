<?php require_once 'inc/html_header.php'; ?>

<?php if (isset($item) && is_array($item)) : ?>
    <table class="table table-striped">
        <tr>
            <th>ID:</th>
            <td><?php echo $item['id']; ?></td>
        </tr>
        <tr>
            <th>Name:</th>
            <td><?php echo $item['name']; ?></td>
        </tr>
    </table>
<?php else : ?>
    <h3>Keine Daten vorhanden</h3>
<?php endif; ?>

<?php require_once 'inc/html_footer.php'; ?>
