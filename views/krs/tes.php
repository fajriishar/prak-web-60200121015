<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
        <tr>
            <td>matkul</td>
            <td>nama</td>
            <td>nim</td>
            <?php foreach ($users as $user): ?>
                <td><?= $user->matkul ?> </td>
                <td><?= $user->nama ?> </td>
                <td><?= $user->nim ?> </td>
            <?php endforeach; ?>
        </tr>
    </table>

</body>
</html>