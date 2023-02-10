<?php
class UsuariosModel extends Mysql{
    public $id, $clave, $nombre, $usuario, $correo;
    public function __construct()
    {
        parent::__construct();
    }
    public function selectUsuarios()
    {
        $sql = "SELECT * FROM usuarios";
        $res = $this->select_all($sql);
        return $res;
    }
    public function selectUsuariosPass(int $id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $res = $this->select($sql);
        return $res;
    }
    public function insertarUsuarios(string $nombre, string $usuario, string $clave)
    {
        $return = "";
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->clave = $clave;
        $query = "INSERT INTO usuarios(nombre, usuario, clave) VALUES (?,?,?)";
        $data = array($this->nombre, $this->usuario, $this->clave);
        $resul = $this->insert($query, $data);
        $return = $resul;
        return $return;
    }
    public function editarUsuarios(int $id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $res = $this->select($sql);
        if (empty($res)) {
            $res = 0;
        }
        return $res;
    }
    public function actualizarUsuarios(string $nombre, string $usuario, int $id)
    {
        $return = "";
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->id = $id;
        $query = "UPDATE usuarios SET nombre=?, usuario=? WHERE id=?";
        $data = array($this->nombre, $this->usuario, $this->id);
        $resul = $this->update($query, $data);
        $return = $resul;
        return $return;
    }
    public function eliminarUsuarios(int $id)
    {
        $return = "";
        $this->id = $id;
        $query = "UPDATE usuarios SET estado = 0 WHERE id=?";
        $data = array($this->id);
        $resul = $this->update($query, $data);
        $return = $resul;
        return $return;
    }
    public function selectUsuario(string $usuario, string $clave)
    {
        $this->usuario = $usuario;
        $this->clave = $clave;
        $sql = "SELECT * FROM usuarios WHERE usuario = '{$this->usuario}' AND clave = '{$this->clave}' AND estado = 1";
        $res = $this->select($sql);
        return $res;
    }
    public function reingresarUsuarios(int $id)
    {
        $return = "";
        $this->id = $id;
        $query = "UPDATE usuarios SET estado = 1 WHERE id=?";
        $data = array($this->id);
        $resul = $this->update($query, $data);
        $return = $resul;
        return $return;
    }
    public function cambiarPass(string $clave, int $id)
    {
        $this->clave = $clave;
        $query = "SELECT * FROM usuarios WHERE clave = '$clave' AND id = $id";
        $resul = $this->select($query);
        return $resul;
    }
    public function cambiarContra(string $clave, int $id)
    {
        $this->clave = $clave;
        $this->id = $id;
        $query = "UPDATE usuarios SET clave = ? WHERE id = ?";
        $data = array($this->clave, $this->id);
        $resul = $this->update($query, $data);
        return $resul;
    }
    
}
?>