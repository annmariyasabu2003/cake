<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data" >
    @csrf
    <label>Name</label>
    <input type="text" name="name" required><br><br>

    <label>price</label>
    <input type="text" name="price" required><br><br>

    <label>Password</label>
    <input type="file" name="files" required><br><br> 

    <input type="submit" value="Register">
</form>

</center>
</body>
</html>