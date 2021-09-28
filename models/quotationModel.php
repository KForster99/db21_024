<?php
class quotation
{

    public function _construct()
    {
    }
    public static function get()
    {
        require("connection_connect.php");
        $sql = "";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();

        require("connection_close.php");
        return ;
    }
    public static function getAll()
    {
        require("connection_connect.php");
        $sql = "";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

        }
        require("connection_close.php");
        return ;
    }
    public static function search()
    {
        require("connection_connect.php");
        $sql = "";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

        }
        require("connection_close.php");
        return ;
    }
    public static function add()
    {
        require("connection_connect.php");
        $sql = "";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }
    public static function update()
    {
        require("connection_connect.php");
        $sql = "";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }
    public static function delete()
    {
        require_once("connection_connect.php");
        $sql = "";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }
}
