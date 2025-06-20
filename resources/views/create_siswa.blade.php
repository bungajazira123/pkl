<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Siswa</h1>
    <hr>
    <form action="/siswa" method="POST">
     @csrf
     <select name="kelas" id="" required>
        <option>Pilih Kelas</option>
        <option value="XI RPPL 1">XI RPL 1</option>
        <option value="XI RPPL 2">XI RPL 2</option>
        <option value="XI RPPL 3">XI RPL 3</option>
     </select>
      <br>
      <input type="text" name="nama" id="" placeholder="Masukkan Nama" required>
      <br>
      
      <button type="submit">Simpan</button>
      <button type="submit">Reset</button>
    </form>
    <a href="/siswa">Kembali</a>
</body>
</html>