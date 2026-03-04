<?php 

class NewsModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllNews() {
        $query = "SELECT * FROM news";
        $result = $this->conn->query($query);
        $news = [];
        while ($row = $result->fetch_assoc()) {
            $news[] = $row;
        }
        return $news;
    }

    public function getNewsById($id) {
        $query = "SELECT * FROM news WHERE id = $id";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
}

?>