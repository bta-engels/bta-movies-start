<h3>Autoren Liste</h3>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    <?php foreach ($data as $item): ?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td><a href="/authors/<?php echo $item['id']?>">
                    <?php echo $item['firstname'],' ',$item['lastname'] ?></a></td>
        </tr>
    <?php endforeach ?>
</table>
