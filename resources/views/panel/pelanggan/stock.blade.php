<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action = "{{route('create-stock')}}">
    {{ @csrf_field()}}
    <label>nama barang</label>
    <input type="text" name ="namabarang">

    <label>harga jual</label>
    <input type="text" name ="hargajual">
    
    <label>harga beli</label>
    <input type="text" name ="hargabeli">
    <button type="submit">tambah</button>
</form>
    
    
</body>
</html>