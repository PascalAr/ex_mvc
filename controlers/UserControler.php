<?php 

class UserControler {

    public function list(Database $db){

       return $db->query('SELECT * FROM customers LIMIT 0, 2');
        
    }


}