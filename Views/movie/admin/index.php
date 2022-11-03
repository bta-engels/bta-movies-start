
<h3>Movie Liste</h3>
<!-- link button für neunen datensatz -->
<a class="btn btn-primary mb-3" href="/movies/edit">Neues Movie</a>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Autor</th>
        <th>Titel</th>
        <th>Preis</th>
        <th colspan="2"></th>
    </tr>
    <!-- php loop für tabellen daten ausgabe  -->
    <tr>
        <td>id</td>
        <td>autor-name</td>
        <td><a href="/movies/">Titel</a></td>
        <td>preis €</td>
        <td><a class="btn btn-primary" href="/movies/edit/">Edit</a></td>
        <td><a class="btn btn-danger delsoft" href="/movies/delete/">Delete</a></td>
    </tr>
    <!-- php loop ende  -->
</table>
