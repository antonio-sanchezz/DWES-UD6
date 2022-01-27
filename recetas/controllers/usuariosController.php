<?php

    function formLogin() {
        // Se incluye el modelo.
        require './models/usuariosModel.php';
        
        // Se incluye la vista para cargar el formulario
        include './views/loginForm.php';
    }

    function loginCheck() {
        // Se incluye el modelo.
        require './models/usuariosModel.php';

        // En $checkLogin obtenemos si el usuario y contraseña es correcto.
        $checkLogin = login($_POST['username'], $_POST['password']);

        if ($checkLogin) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header("Location: ?controller=recetas&action=ListarTodos");
        }
        
    }

?>