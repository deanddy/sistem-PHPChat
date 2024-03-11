<?php

class DB {
    public static function fetch(string $request, array $data, bool $all = false) {

        $pdo = new PDO('mysql:host=192.168.1.9;dbname=webchat', "devops", "Admin@123");

        $request = $pdo -> prepare($request);
        $request -> execute($data);

        if($all === true) {
            return $request -> fetchAll(PDO::FETCH_ASSOC);
        } else {
            return $request -> fetch(PDO::FETCH_ASSOC);
        } 
    }
}
