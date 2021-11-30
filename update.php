<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Обновление новости</title>
</head>
<meta charset="utf-8" />
    <title>новости</title>
    <style>
   .header { background: #D5BAE4; 
    height: 100px;
    background-image: url(1.png);
    text-align: center;
    font-size: 200%;
    color: white;
    line-height: 2em;
  }
  .layout { overflow: hidden; }
   .col1 { background: #ffffff; float: left; width: 200px; }
   .col2 { background: #e7e7e66b; 
    margin: 0 100px 0 200px; /* Отступ справа и слева */
   }
   .col3 { background: #ffffff; width: 100px; float: right; }
   #footer {
    position: fixed; /* Фиксированное положение */
    left: 0; bottom: 0; /* Левый нижний угол */
    padding: 10px; /* Поля вокруг текста */
    background: #212330; /* Цвет фона */
    color: #fff; /* Цвет текста */
    width: 100%; /* Ширина слоя */
   }


    </style>
</head>
<body>
  <div class="header">Удалить новоти</div>
  <div class="layout">
<div class="col1">
    

</div>
   <div class="col3"></div>
   <div class="col2"> 

<a href="index.php">НОВОСТИ</a>
<a href="index.php">НОВОСТИ</a>
<form name="feedback" method="POST" action="update.php">
<label>№ новости: <input type="text"  name="id"></label>
<br>
  <label>Заголовок: <input type="text"  name="name"></label>
 <br>
  <label>Новость: <textarea name="message"  cols="50" rows="5"  ></textarea></label>
<br>
  <input type="submit" name="send" value="Обновить">
</form>

<?php




if (isset($_POST)) {
    print("Имя: " . $_POST['name']);

    print("<br>Сообщение: " . $_POST['message']);


    $head = $_POST['name'];
    $text = $_POST['message'];
    $id = $_POST['id'];
if ($head!="" and $text != ""){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "UPDATE `news` SET `head`= '$head',`text`= '$text' WHERE id = $id";


if ($conn->multi_query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}}
?>


</div>
  </div>
  
  <div id="footer">
    &copy; Иванов Иван
   </div>
</body>
</html>


</body>
</html>
