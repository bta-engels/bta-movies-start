
<h3>Filmliste</h3>

<table class="table table-striped">
    <thead>
       <tr>
            <th>ID</th>
            <th>Filmtitel</th>
            <th>Preis</th>
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
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
