
<h3>Autoren Liste</h3>

<table class="table table-striped">
    <thead>
       <tr>
            <th>ID</th>
            <th>Name</th>
            <?php if ($auth) : ?>
                <th colspan="2"></th>
            <?php endif; ?>
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
            <?php if ($auth) : ?>
            <td>Edit</td>
            <td>Delete</td> 
            <?php endif; ?>           
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
