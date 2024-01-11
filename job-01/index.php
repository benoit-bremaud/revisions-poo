<?php
       class Product {
            private $id; 
            private $name;
            private $photos;
            private $price;
            private $description;
            private $quantity;
            private $createdAt;
            private $updatedAt;

            function __construct($id, $name, $photos, $price, $description, $quantity, $createdAt, $updatedAt) {
                $this->id = $id;
                $this->name = $name;
                $this->photos = $photos;
                $this->price = $price;
                $this->description = $description;
                $this->quantity = $quantity;
                $this->createdAt = $createdAt;
                $this->updatedAt = $updatedAt;
            }
            function getId() {
                return $this->id;
            }
            function getName() {
                return $this->name;
            }
            function getPhotos() {
                return $this->photos;
            }
            function getPrice() {
                return $this->price;
            }
            function getDescription() {
                return $this->description;
            }
            function getQuantity() {
                return $this->quantity;
            }
            function getCreatedAt() {
                return $this->createdAt;
            }
            function getUpdatedAt() {
                return $this->updatedAt;
            }
            function setId($id) {
                $this->id = $id;
            }
            function setName($name) {
                $this->name = $name;
            }
            function setPhotos($photos) {
                $this->photos = $photos;
            }
            function setPrice($price) {
                $this->price = $price;
            }
            function setDescription($description) {
                $this->description = $description;
            }
            function setQuantity($quantity) {
                $this->quantity = $quantity;
            }
            function setCreatedAt($createdAt) {
                $this->createdAt = $createdAt;
            }
            function setUpdatedAt($updatedAt) {
                $this->updatedAt = $updatedAt;
            }
        }
        $apple = new Product(1, "Pomme", array("https://www.halfyourplate.ca/wp-content/uploads/2014/12/one-apple-with-leaves.jpg"), 10, "Fruit", 10, new DateTime(), new DateTime());
        $banana = new Product(2, "Banane", array("https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Banana-Single.jpg/1200px-Banana-Single.jpg"), 20, "Fruit", 20, new DateTime(), new DateTime());

        echo $apple->getName()."<br>";
        var_dump($apple->getName());
        echo "<br>".$apple->getPhotos()[0]."<br>";
        var_dump($apple->getPhotos()[0])."<br><br>";
        echo $apple->getPrice()."<br>";
        var_dump($apple->getPrice())."<br><br>";
        echo $apple->getDescription()."<br>";
        var_dump($apple->getDescription())."<br><br>";
        echo $apple->getQuantity()."<br>";
        var_dump($apple->getQuantity())."<br><br>";
        echo $apple->getCreatedAt()->format('Y-m-d H:i:s')."<br>";
        var_dump($apple->getCreatedAt())."<br><br>";


        echo $banana->getName()."<br>";
        echo $banana->getPhotos()[0]."<br>";
        echo $banana->getPrice()."<br>";
        echo $banana->getDescription()."<br>";
        echo $banana->getQuantity()."<br>";


        $apple->setName("Pomme verte");

        echo $apple->getName()."<br>";

        

    ?>