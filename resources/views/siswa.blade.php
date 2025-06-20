<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswa</h1> <hr>
    <table>
         <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Kelas</th>
     </tr>
     @php $no=1;  @endphp
     @foreach($siswa as $data)
       <tr>
        <td>{{$no++}}</td>
        <td>{{$data['nama']}}</td>
        <td>{{$data['kelas']}}</td>
        <td><a href="/siswa/{{ $data['id'] }}">show</a></td>

       </tr>
     @endforeach
     </table>
</body>
</html>