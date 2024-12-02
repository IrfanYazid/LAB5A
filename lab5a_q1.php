<!DOCTYPE html>

<head>
    <title>Lab 5a Q1</title>
<style>
        table, th, td {
  border: 1px solid black;
}
    </style>

</head>
<body>
    <?php 
        $name = "Muhammad Irfan Bin Yazid";
        $matric = "CI220130";
        $course = "Information Security";
        $year_of_study = "2024";
        $address = "No.1 Blok 3, Lorong Haji Mustafa, Rumah Kediaman Jalan Kluang PT, Parit Raja Batu Pahat, 86400";
    ?>

    <table>
        <thead>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Name:</td>
                <td><?php echo $name; ?></td> 
            </tr>
            <tr>
                <td>Matric Number:</td>
                <td><?php echo $matric; ?></td>
            </tr>
            <tr>
                <td>Course:</td>
                <td><?php echo $course; ?></td>
            </tr>
            <tr>
                <td>Year Of Study:</td>
                <td><?php echo $year_of_study; ?></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><?php echo $address; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>


