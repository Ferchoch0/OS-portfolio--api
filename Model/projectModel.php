<?php

class ProjectModel
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAllProjects()
    {
        $query = "SELECT * FROM projects";
        $result = $this->conn->query($query);
        $projects = [];
        while ($row = $result->fetch_assoc()) {
            $projects[] = $row;
        }
        return $projects;
    }

    public function getProjectById($id)
    {
        $query = "SELECT * FROM projects WHERE id = $id";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }

    public function getProjectHome()
    {
        $query = "SELECT * FROM projects WHERE home_position IN (1, 2, 3) ORDER BY home_position ASC";
        $result = $this->conn->query($query);

        $projects = [];
        while ($row = $result->fetch_assoc()) {
            $projects[] = $row;
        }
        return $projects;
    }
}

?>