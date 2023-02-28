<?php
error_reporting(E_ALL);

require_once('link.php');

$query = mysqli_query($link, "SELECT
user.name,
groups.name AS groups_name,
specs.name AS speciality_name,
colleges.name AS college_name
FROM
`users`
JOIN `groups` ON `group_id` = group.id
JOIN `specs` ON `speciality_id` = spec.id
JOIN `colleges` ON `kolledge_id` = college.id
WHERE 
   users.name = '{$_GET['user']}' 
OR groups.name = '{$_GET['groups']}' 
OR specs.name = '{$_GET['specs']}' 
OR colleges.name = '{$_GET['coleges']}'");

echo "<table>
<tr>
<th>Имя</th>
<th>Группа</th>
<th>Специальность</th>
<th>Колледж</th>
</tr>";
while($result = mysqli_fetch_assoc($query)){
  echo "<tr>";
  echo "<td>" . $result['name'] . "</td>";
  echo "<td>" . $result['groups_name'] . "</td>";
  echo "<td>" . $result['speciality_name'] . "</td>";
  echo "<td>" . $result['college_name'] . "</td>"; 
  echo "</tr>";
}
echo "</table>";