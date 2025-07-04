<?php

header("Content-Type: application/json");

require_once("../config/conexion.php");
require_once("../models/categoria.php");

$categoria = new Categoria();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["op"]) {
    case "GetAll":
        $datos = $categoria->get_categoria();
        echo json_encode($datos);

        break;

    case "GetId":
        $datos = $categoria->get_categoria_x_id($body["cat_id"]);
        echo json_encode($datos);

    case "insert":

        $datos = $categoria->insert_categoria($body["cat_nombre"], $body["cat_obs"]);
        echo json_encode("Categoria insertada correctamente");

        break;
    
    case "update":
        $datos = $categoria->update_categoria($body["cat_id"], $body["cat_nombre"], $body["cat_obs"]);
        echo json_encode("Categoria actualizada correctamente");
        break;
    case "delete":
        $datos = $categoria->delete_categoria($body["cat_id"]);
        echo json_encode("Categoria eliminada correctamente");
        break;
}
