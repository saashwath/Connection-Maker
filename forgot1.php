<html>
<head>
<title>FORGOT password</title>
<link rel="icon" type="image/png" href="opb.png" />
<style>
body{background-color:black;color:white;font-family:lucida handwriting;font-size:30px;font-style:italic;align:center}
input
{
padding:5px;  
background:white;
border:2px solid black;
border-radius:10px;
font-size:22px;
font style:italic;
height:35px;
width:250px;
}
.c
{
padding:5px; 
border:5px solid black; 
background:red;
border-radius:10px;
font-size:22px;
font style:italic;
height:50px;
width:200px;
}
.c:hover{background:white;border-color:white;}
</style>
</head>
<body>
<?php
$uname=$_POST['uname'];
$conn=mysqli_connect('localhost','root','','phonebook') or die("UNABLE TO CONNECT");
$sql="SELECT uname,ques FROM user";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
if($row["uname"]==$uname)
echo $row["ques"]." ?\n";
}
}
mysqli_close($conn);
echo "<form action='forgot2.php' method=post><br>
Answer : <input type=text auto-complete=false name=ans />
<input class=c type=submit value=SUBMIT />
</form>";
?>
</body>
</html>