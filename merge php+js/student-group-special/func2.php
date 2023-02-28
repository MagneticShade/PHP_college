<?php
error_reporting(E_ALL);

require_once('link.php');

$query = mysqli_query($link, "SELECT
users.name,
groups.name AS groups_name,
speciality.name AS speciality_name,
college.name AS college_name
FROM
`users`
JOIN `groups` ON `group_id` = groups.id
JOIN `speciality` ON `speciality_id` = speciality.id
JOIN `college` ON `kolledge_id` = college.id
WHERE 
   users.name = '{$_GET['key']}' 
OR groups.name = '{$_GET['key']}' 
OR speciality.name = '{$_GET['key']}' 
OR college.name = '{$_GET['key']}'");

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
  
