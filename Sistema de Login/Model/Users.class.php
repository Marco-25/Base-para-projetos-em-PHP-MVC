<?php
    class Users extends Connection{
        //metodo de login
        public function getLogin($login, $password){
            $pdo = parent::get_instance();
            $sql = "SELECT * FROM users WHERE email = :email AND password = :password ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email', $login);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            if($stmt->rowCount() > 0 ){
                $stmt = $stmt->fetch();
                $id   = $stmt['idUser'];
                $_SESSION['login'] = $id;
                header("Location: ../public/Home.php?login_success");
            }else{
                echo "<script> alert('Login ou senha Inavlidos.');</script>";
                echo "<script> window.location.href = '../public/login.php';</script>";
                exit;
            }
        }
        // --------------------------------------------
        public function Logout(){
            unset($_SESSION['login']);
        }
    }
?>