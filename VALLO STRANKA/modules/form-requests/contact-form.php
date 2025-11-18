<?PHP 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name =$_POST ['name'];
    $email = $_POST ['email'];
    $message = $_POST ['message'];
    $telefon = $_POST ['telefon'];
    echo 'dakujeme. ' . $name . '!vasa sprava bola odoslana. <br<a href="../../"spat na domovsku stranku</a>';
}
    if($name ==''){
    echo 'prosím zadajte meno. <br><a href="../../"spat na domovsku stranku</a>';
    exit;
    }
    if($email ==''|| !filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'prosím zadajte email. <br><a href="../../"spat na domovsku stranku</a>';
    exit;
    }
    if ($telefon=''|| !preg_match('/^\+[1-9]\d{1,14}$/', $telefon) &&
                      !preg_match('/^[0-9]{6,14}$/', $telefon) ){
    echo "Telefónne číslo je zle zadané. <br><a href='../../'>Späť na domovskú stránku</a>";
    exit;
    }
    if($message ==''){
    echo 'prosím zadajte správu. <br><a href="../../"spat na domovsku stranku</a>';
    exit;
    }
