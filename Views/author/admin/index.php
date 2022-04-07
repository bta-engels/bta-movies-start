
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
            <td>Edit</td>
            <td>Delete</td>        
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
