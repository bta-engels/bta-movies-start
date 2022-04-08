
<h3>Filmliste</h3>
<!-- Link-Button für neuen Datensatz -->
<a class="btn btn-primary mb-3" href="/movies/edit">Neuer Film</a>

<table class="table table-striped">
    <thead>
       <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Preis</th>
            <th colspan="2"></th>
       </tr>
    </thead>
    <tbody>
        <?php foreach($data as $item): ?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td>
               <?php
               echo "<a href=\"/movies/$item[id]\">";
               echo $item['title'];
               echo '</a>';
               ?>
            </td>
            <td>
               <?php
               echo "<a href=\"/movies/$item[id]\">";
               echo $item['price'];
               echo '</a>';
               ?>
            </td>
            <td><a class="btn btn-primary" href="/movies/edit/<?php echo $item['id']; ?>">Edit</a></td>
            <td><a class="btn btn-danger delsoft" href="/movies/delete/<?php echo $item['id']; ?>">Delete</a></td>        
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
