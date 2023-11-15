<?php
class uelloginnew1
{
    public function connection()
    {
        try {
            $con = new PDO("mysql:host=localhost;dbname=uelloginnew1", 'root', '');
            return $con;
        } catch (PDoException $error) {
            echo $error->getMessage();
        } catch (Exception $Error2) {
            echo $Error2->getMessage();
        }

    }
    public function insert($name, $email, $level, $password)
    {
        $insert = uelloginnew1::connection()->prepare("INSERT INTO users(name,email,level,password) VALUES(:n,:e,:l,:p)");
        $insert->bindvalue(':n', $name);
        $insert->bindvalue(':e', $email);
        $insert->bindvalue(':l', $level);
        $insert->bindvalue(':p', $password);
        $insert->execute();

        if ($insert) {
            echo 'Registered!';
        } else {
            echo 'Not Registered';
        }


    }
}



?>