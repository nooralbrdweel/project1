<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>my name is {{$name}} </h1>
    <h1>my Age is {{$age}} </h1>
    
    <form action ="send" method="POST" >   
@csrf           
    Name
    <input type = "text" name="myname" id = "myname"/>
<br>
Age
    <input type = "text" name="myage" id = "myage"/>

     <input type="submit" value="send"/> 
     
     
     
     </form>
   
</body>
</html>