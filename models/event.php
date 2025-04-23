<?php

class EventModel extends Model
{
    public function Index()
    {
        $this->query('SELECT * FROM evento');
        $rows = $this->resultSet();
        return $rows;
    }

    public function add()
    {
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if ($post['submit']) {
            if ($post['nombreEvt'] == '' || $post['descEvt'] == '' || $post['cantidadUsrs'] == ''|| $post['requisitos'] == '' || $post['idOrganizador'] == '') {
                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }

            // Insert into MySQL
            $this->query('INSERT INTO evento (nombreEvt, descEvt, cantidadUsrs, requisitos, idOrganizador) VALUES(:nombreEvt, :descEvt, :cantidadUsrs, :requisitos, :idOrganizador)');
            $this->bind(':nombreEvt', $post['nombreEvt']);
            $this->bind(':descEvt', $post['descEvt']);
            $this->bind(':cantidadUsrs', $post['cantidadUsrs']);
            $this->bind(':requisitos', $post['requisitos']);
            $this->bind(':idOrganizador', $post['idOrganizador']);
            $this->execute();
            // Verify
            if ($this->lastInsertId()) {
                // Redirect
                header('Location: ' . ROOT_URL . 'events');
            }
        }
        return;
    }
}