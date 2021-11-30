<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Добавление новости</title>
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

<body>
<a href="index.php">НОВОСТИ</a>
<a href="index.php">НОВОСТИ</a>
<form name="feedback" method="POST" action="del_news.php">
  <label>Укажите номер новоти: <input type="text" cols="100" rows="7"  name="name"></label>
 <br>
<br>
  <input type="submit" name="send" value="Удалить">
</form>

<?php
if (isset($_POST)) {
    print("Имя: " . $_POST['name']);
$del_id = (int) $_POST['name'];
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



$sql = "DELETE FROM `news` WHERE id = $del_id";
if ($conn->multi_query($sql) === TRUE) {
    echo "Новость $del_id удалена";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>


</div>
  </div>
  
  <div id="footer">
    &copy; Иванов Иван
   </div>
</body>
</html>



