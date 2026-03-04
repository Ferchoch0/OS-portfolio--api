<?php 

class ContactModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function addOrders($data) {
        $query = "INSERT INTO contact_request (name, company, prooject_type, message, email, status, ip_adress, created_at) VALUES ('$data[name]', '$data[company]', '$data[prooject_type]', '$data[message]', '$data[email]', '$data[status]', '$data[ip_adress]', '$data[created_at]')";
        $this->conn->query($query);
    }
}

?>