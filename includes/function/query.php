<?php 

    function get_multiple_query($query, $conn){
        $result = $conn->query($query);
        echo $conn->error;
        $data = null;
        if($result && $result->num_rows > 0){
            $data = Array();
            while($row = $result->fetch_assoc()){
                array_push($data, $row);
            }
        }
        return $data;
    }

    function get_single_query($query, $conn){
        $result = $conn->query($query);
        echo $conn->error;
        $data = null;
        if($result && $result->num_rows > 0)
            $data = $result->fetch_assoc();
        
        return $data;
    }

    function post_query($query, $conn){
        $conn->query($query);
        $lastId = $conn->insert_id;
        echo $conn->error;
        return $lastId;
    }

?>