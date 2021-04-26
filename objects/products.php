<?php
#Revision History
#Matheus Emidio (1931358) 2021-04-24 Created products class

require_once FILE_CONNECTION;
require_once FILE_COLLECTION;
require_once FILE_PRODUCT;



class products extends collection
{
    function __construct()
    {
        global $connection;
        
        #use a stored procedure
        #$SQLQuery = "SELECT car_id, description, year FROM cars;";
        #$SQLQuery = "SELECT car_id, description, year FROM cars WHERE year >= :year "
        #        . " ORDER BY year;";
        $SQLQuery = "CALL products_select_all();";
        
        $PDOStatement = $connection->prepare($SQLQuery);
        #$PDOStatement->bindParam(":year", $year);
        
        $PDOStatement->execute();     
        
        #check if you loaded something
        while($row = $PDOStatement->fetch())
        {
            $product = new product($row["product_id"], $row["product_code"], $row["product_description"], $row["product_price"], $row["product_cost"]);
            $this->add($row['product_id'], $product);
            
        }     
    }
}