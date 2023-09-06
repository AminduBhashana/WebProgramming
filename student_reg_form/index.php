

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>
    <form action="form.php" method="post">
        <div>
            <label id="sname" for="name">Student Name : </label>
            <input type="text" name="name"> 
        </div>
        <br>
        <div>
            <label id="gender" for="gtype">Gender : </label>
            <input type="radio" name="gtype" value="Male" checked>Male 
            <input type="radio" name="gtype" value="Female" >Female 
        </div>
        <div><br>
            <label for="district">Selected District : </label>
            <input type="radio" name="mycity" value="Colombo">Colombo
            <input type="radio" name="mycity" value="Galle" >Galle
            <input type="radio" name="mycity" value="Jaffna">Jaffna 
             
        </div><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    
</body>
</html>