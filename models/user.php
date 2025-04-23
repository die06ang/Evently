<?php

class UserModel extends Model
{
    public function register()
    {
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = md5($post['password']);

        if ($post['submit']) {
            if ($post['name'] == '' || $post['email'] == '' || $post['password'] == '') {
                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }

            // Insert into MySQL
            $this->query('INSERT INTO usuario (nombreUsr, contrasenaUsr) VALUES(:nombreUsr, :contrasenaUsr)');
            $this->bind(':nombreUsr', $post['nombreUsr']);
            $this->bind(':contrasenaUsr', $post['contrasenaUsr']);
            $this->execute();
            // Verify
            if ($this->lastInsertId()) {
                // Redirect
                header('Location: ' . ROOT_URL . 'users/login');
            }
        }
        return;
    }

    public function login()
    {
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = md5($post['password']);

        if ($post['submit']) {
            // Compare Login
            $this->query('SELECT * FROM usuario WHERE nombreUsr = :nombreUsr AND contrasenaUsr = :contrasenaUsr');
            $this->bind(':nombreUsr', $post['nombreUsr']);
            $this->bind(':contrasenaUsr', $post['contrasenaUsr']);

            $row = $this->single();
            if ($row) {
                $_SESSION['is_logged_in'];
                $_SESSION['user_data'] = array(
                    "idUsuario" => $row['idUsuario'],
                    "nameUsr" => $row['nombreUsr'],
                );
                header('Location: ' . ROOT_URL . 'events');
            } else {
                Messages::setMsg('Incorrect Login', 'error');
            }
        }
        return;
    }
}