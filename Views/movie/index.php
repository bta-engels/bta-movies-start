
<h3>Movie Liste</h3>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Autor</th>
        <th>Titel</th>
        <th>Preis</th>
    </tr>
    <?php foreach ($data as $item): ?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td><?php echo $item['author'] ?></td>
            <td><a href="/movies/<?php echo $item['id']?>"><?php echo $item['title'] ?></a></td>
            <td><?php echo trim($item['price']) ?> €</td>
        </tr>
    <?php endforeach ?>
</table>
