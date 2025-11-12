<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>

<style>
  table, th, td {
  border: 1px solid;
}
</style>

</head>
<body>
<?php
$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
    ],
        
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
    ], 

    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
    ]
];
?>

//create table taht display the data $student    
<table>
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th> 
    </tr>

<?php
    $no = 1;
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>". $student['name']. "</td>";
        echo "<td>". $student['program']. "</td>";
        echo "<td>". $student['age']. "</td>";
        echo "</tr>";

    }
?>
   
</table>

</body>
</html>
