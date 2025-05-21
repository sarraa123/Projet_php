<h2>Mes ordonnances</h2>
<ul>
<?php foreach ($liste as $ord) {
    echo "<li>Ordonnance ID: $ord[id] - Date: $ord[date]</li>";
} ?>
</ul>
