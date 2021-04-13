<?php require_once 'inc/html_header.php'; ?>

<?php if (isset($item) && is_array($item)) : ?>
    <table class="table table-striped">
        <tr>
            <th>ID:</th>
            <td><?php echo $item['id']; ?></td>
        </tr>
        <tr>
            <th>Vorname:</th>
            <td><?php echo $item['firstname']; ?></td>
        </tr>
        <tr>
            <th>Nachname:</th>
            <td><?php echo $item['lastname']; ?></td>
        </tr>
        <tr>
            <th>Anzahl Filme:</th>
            <td><?php //echo count($item['movies']);  
            echo "<ul>";
            foreach($item['movies'] as $movie) {
                echo "<li>" . $movie['title'] . "</li>";
            }
            echo '</ul>';
            ?></td>
        </tr>
    </table>
<?php else : ?>
    <h3>Keine Daten vorhanden</h3>
<?php endif; ?>

<?php require_once 'inc/html_footer.php'; ?>