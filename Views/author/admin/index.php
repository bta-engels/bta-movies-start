
<h3>Autoren Liste</h3>
<!-- Link-Button für neuen Datensatz -->
<a class="btn btn-primary mb-3" href="/authors/edit">Neuer Autor</a>

<table class="table table-striped">
    <thead>
       <tr>
            <th>ID</th>
            <th>Name</th>
            <th colspan="2"></th>
       </tr>
    </thead>
    <tbody>
        <?php foreach($data as $item): ?>
        <tr>
           <td><?php echo $item['id'] ?></td>
           <td>
               <?php
               echo "<a href=\"/authors/$item[id]\">";
               echo $item['firstname'] . ' ' . $item['lastname'];
               echo '</a>';
               ?>
            </td>
            <td><a class="btn btn-primary" href="/authors/edit/<?php echo $item['id']; ?>">Edit</a></td>
            <td><a class="btn btn-danger" href="/authors/delete/<?php echo $item['id']; ?>">Delete</a></td>        
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
