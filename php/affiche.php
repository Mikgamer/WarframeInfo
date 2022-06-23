<?php

echo '<table id="articlee">
<thead>
<tr>
<th><h4 id="artsort">Changer l\'ordre des articles</h4></th>
<th>Id</th>
</tr>
</thead>
<tbody id="transee">';

while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo '<td><div class="redac anim">
	<h3>'.$row['TitreArt'].'</h3><br>'
	.$row['TexteArt'].'<br>
	<div class="text-right">Posté le : '.date("d/m/Y", strtotime($row['DateArt'])).'</div>
	</div></td>';
	echo '<td>'.$row['IdArt']."</td>";
	echo '</tr>';
}

echo '</tbody>
</table>';

?>

