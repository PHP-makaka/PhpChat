<?php
$host = 'localhost:3307'; // адрес сервера
$database = 'gurkov'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'root';
/////////////////////////////////////////


$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));
//инициализирую данные для отправки
$username =$_POST['username'];
$lastName =$_POST['lastName'];
$password =$_POST['password'];

$name = htmlentities(mysqli_real_escape_string($link,$username ));
$lastName= htmlentities(mysqli_real_escape_string($link, $lastName));
$password= htmlentities(mysqli_real_escape_string($link, $password));
/// сформирую строку запроса
$query ="INSERT INTO members VALUES(NULL, '$name','$lastName','$password')";

// выполняем запрос
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

if($result)
{
    echo "Выполнение запроса прошло успешно";
}
// // закрываем подключение
// mysqli_close($link);
// ////////////////////////////////////////////////////////////////////

$dataArr =[$lastName,$username,$password];
echo json_encode($dataArr);


?>