
$(document).ready(function() {
    $('.delsoft').click(function(e){
        // führe link nur aus, wenn confirmation bestätigt wurde
        // zur absicherung des lösch-vorgangs
        return confirm('Daten wirklich löschen?');
    });
});
