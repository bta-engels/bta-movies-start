<h3>Autoren Liste</h3>
<a class="btn btn-primary mb-3" href="/authors/edit/">Neuer Autor</a>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th colspan="2"></th>

    </tr>
    <?php foreach ($data as $item): ?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td><a href="/authors/<?php echo $item['id']?>">
                    <?php echo $item['firstname'],' ',$item['lastname'] ?></a></td>
            <td><a class="btn btn-primary mb-3" href="/authors/edit/<?php echo $item['id'] ;?>">Edit</a></td>
            <td><a class="btn btn-danger mb-3" href="/authors/delete/<?php echo $item['id'] ;?>">Delete</a></td>
        </tr>
    <?php endforeach ?>
</table>
