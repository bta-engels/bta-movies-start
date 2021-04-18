<?php require_once 'inc/html_header.php'; ?>

<?php if (isset($list) && count($list) > 0) : ?>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php foreach ($list as $item) : ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><a href="/categories/<?php echo $item['id']; ?>"><?php echo $item['name']; ?></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <h3>Keine Daten vorhanden</h3>
<?php endif; ?>

<?php require_once 'inc/html_footer.php'; ?>
