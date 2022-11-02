<h3>Autoren Liste</h3>

<!-- <table class="table table-striped">
    <tr class="upper">
        <th>ID</th>
        <th>Vorname</th>
        <th>Nachname</th>
    </tr> -->
    <!-- php loop für tabellen daten ausgabe  -->
<!--     <php foreach($data as $item): ?>
    <tr>
        <td><php echo $item['id']; ?></td>
        <td><php echo $item['firstname']; ?></td>
        <td><php echo $item['lastname']; ?></td>
    </tr>
    <php endforeach; ?>
</table> -->

    <table class="table table-striped">
    <tr class="upper">
        <th>ID</th>
        <th>Name</th>
    </tr>
    <?php foreach($data as $item): ?>
    <tr>
        <td><?php echo $item['id']; ?></td>
        <td><a href="http://movies-start.loc/authors/<?php echo $item['id']; ?>"><?php echo $item['firstname'].' '.$item['lastname']; ?></a></td>
    </tr>
    <?php endforeach; ?>
</table>