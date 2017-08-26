<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add New Contacts</h1>
    <br>

    <form action="http://localhost/pb/index.php/phonebook/savecontact" method="post">
        <label for="">Full name : </label>
        <input type="text" name="fullname"><br><br>

        <label for="">Contact no : </label>
        <input type="text" name="contactno"><br><br>

        <button type="sumbit">Save</button>
    </form>

</body>
</html>