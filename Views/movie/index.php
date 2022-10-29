<h3>Movie Liste</h3>
<!-- link button für neunen datensatz -->
<a class="btn btn-primary mb-3" href="/movies/store">Neuer Film</a>

<table class="table table-striped">
    <tr class="upper">
        <th>ID</th>
        <th>Autor</th>
        <th>Titel</th>
        <th>Preis</th>
        <th>Bild</th>
    </tr>
    
    <?php foreach($data as $item): ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['author']; ?></td>
            <td><a href="http://movies-start.loc/movies/<?php echo $item['id']; ?>"><?php echo $item['title']; ?></a></td>
            <td><?php echo $item['price']; ?> €</td>
            <td><?php echo $item['image']; ?></td>

        </tr>
    <?php endforeach; ?>
</table>
