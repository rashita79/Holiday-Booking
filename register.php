<?php
 //include 'register_action.php' ;
// session_start();
// if ($_SESSION['log'] == '')
// {
//     header("location:sindex.php");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <style>
        body{
                 background-image :url('https://www.puredestinations.co.uk/wp-content/uploads/2019/10/where-to-go-on-holiday-in-october-luxury-holiday-packages--1600x700.jpg');
                 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
        }
h1{
text-align: center;
color: white;
font-size: 50px;
}
.register{
padding-right: 65px;
padding-top: 50px;
}
.x
{
text-align: center;
}


.content
{
display: flex;
position: relative;
/* top: 10px; */
width: 350px;
/* justify-content: center; */
justify-content: space-around;
min-height: 100px;
background-color: rgba(139, 132, 129, 0.9);
margin: 0 auto;
color: rgb(8, 9, 10);
font-size: large;
font-style: italic;
border: 10px rgba(0, 0, 0, 0.5) solid;
}
    </style>
</head>
<body>
<h1>BOOK YOUR HOLIDAY </h1>
    <div class="register">
    <div class="content">
    <form action="register_action.php" method="POST">
        
        <div class="x"> DESTINATION <br> 
        <select id="inputState" class="form-control" name="dest">
   
   <option>Paris</option>
   <option>Malaysia</option>
   <option>Mauritius</option>
   <option>Srilanka</option>
   <option>Thailand</option>
   <option>Nepal</option>
   <option>Ladakh</option>
   <option>Kerala</option>
   <option>Bali</option>
   <option>Maldives</option>
   <option>Japan</option>
   <option>Greece</option>
   <option>Europe</option> 
   <option>Dubai</option>
   <option>Switzerland</option> 
   <option>Hong kong</option>
   </select> 
        <br></div>
        <div class="x">
        <label for="inputEmail4">DEPARTURE FORM :</label>    
        <br>
       <select id="inputState" class="form-control" name="dept">
   <option>Indore</option>
   <option>Mumbai</option>
   <option>Delhi</option>
   
   </select>
   <br></div>
        <div class="x">NAME<br> <input type="text" name="pname" id="pname" >
        <br></div>
        <div class="x">PHONE<br> <input type="number"  name="phone" id="phone">
       <br></div>
       <div class="x">EMAIL<br> <input type="email" name="email" id="email"> <br></div>
        <div class="x">DATE <br><input type="date" name="tdate" id="tdate">
       <br></div>
       <div class="x">HOTEL PREFERENCE(STAR) <br> <select id="inputState" class="form-control" name="hotel">
           <option value="">5 star</option>
           <option value="">4 star</option>
           <option value="">3 star</option>
           <option value="">2 star</option>
</select>
       </div>
       <div class="x">NUMBER OF NIGHTS<br> <input type="number" name="nights" id="nights"> <br></div>
       <div class="x">NUMBER OF TRAVELERS<br> <input type="number" name="person" id="person"> <br></div>
        <div class="x"><input type="submit" value="BOOK YOUR TRIP" name="submit"></div>
</form>
        <!-- <button class="btn">SUBMIT</button> -->
</body>
</html>