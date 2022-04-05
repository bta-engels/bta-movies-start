
<h3>Autoren Liste</h3>

<table class = "table table-striped">
   <tr>
        <th>ID</th>
        <th>Vorname</th>
        <th>Nachname</th>
   </tr>
   <?php foreach ($data as $item): ?>
   <tr>
       <td><?php echo $item['id'] ?></td>
       <td><?php echo $item['firstname'] ?></td>
       <td><?php echo $item['lastname'] ?></td>
   </tr>
    <?php endforeach ?>
</table>
