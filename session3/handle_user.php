<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="req.php" method="Get">
        
        <input type="number" name="num1">
        
        <input type="number" name="num2">
        <select name="opr" >
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="div">/</option>
            <option value="mul">*</option>
        </select>
        <button type="submit" name="submit">add user</button>

    </form>
</body>
</html>