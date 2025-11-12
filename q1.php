<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
<style>
    table, th, td {
  border: 1px solid;
}
</style>

</head>
<body>
    <?php 
        $name = "Nurul Fashihah binti Kassim";
        $matric = "CI230073";
        $course = "Bachelor of Computer Science (Information Security)";
        $year = 3;
        $address = "No 104 Parit 13 Sungai Nibong 45400 Sekinchan, Selangor";
    ?>

    <table>
        <tr>
            <td>Name </td>
            <td><?php echo " $name"; ?></td> 
        </tr>
        <tr>
            <td>Matric number </td>
            <td><?php echo "$matric"; ?></td> 
        </tr>
        <tr>
            <td>Course </td>
            <td><?php echo "$course"; ?></td>
        </tr> 
        <tr>
            <td>Year of Study </td>
            <td><?php echo "$year"; ?></td> 
        </tr>
        <tr>
            <td>Address </td>
            <td><?php echo "$address"; ?></td> 
        </tr>
    </table>
    
</body>
</html>
