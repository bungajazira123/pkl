<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
    <?php $nama = "Bunga"; ?>
     @php
        $umur = 17;@endphp
    Nama Saya &nbsp;
    <?php echo $nama; ?> <br>
    Umur saya <strong>{{$umur}}</strong>

   

</body>
</html>