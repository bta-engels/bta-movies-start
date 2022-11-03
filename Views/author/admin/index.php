
<h3>Autoren Liste</h3>
<!-- link button für neunen datensatz -->
<a class="btn btn-primary mb-3" href="/authors/edit">Neuer Autor</a>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Vorname</th>
        <th>Nachname</th>
        <th colspan="2"></th>
    </tr>
    <!-- php loop für tabellen daten ausgabe  -->
    <?php foreach($data as $item): ?>
    <tr>
        <td><?php echo $item['id']; ?></td>
        <td><?php echo $item['firstname']; ?></td>
        <td><?php echo $item['lastname']; ?></td>
        <td><a class="btn btn-primary" href="/authors/edit/<?php echo $item['id']; ?>">Edit</a></td>
        <td><a class="btn btn-danger delsoft" href="/authors/delete/<?php echo $item['id']; ?>">Delete</a></td>
    </tr>
    <!-- php loop ende  -->
    <?php endforeach; ?>
</table>
