<?PHP 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name =$_POST ['name'];
    $email = $_POST ['email'];
    $message = $_POST ['message'];

    echo 'dakujeme. ' . $name . '!vasa sprava bola odoslana. <br<a href="../../"spat na domovsku stranku</a>';

}