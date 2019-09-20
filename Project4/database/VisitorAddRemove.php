<?php
    // Add the visitor to the database  
    function add_visitor ($visitorName, $visitor_email, $visitorPhone, $suitType, $heardVia, $mailMe, $comment) {
        global $db;
        //$db = Database::getDB();
        $query = 'INSERT INTO visitor
                     (Name, email, phone, suit, heardVia, mailMe, comment)
                  VALUES
                     (:name, :email, :phone, :suit, :heardVia, :mailMe, :comment)';
        $statement = $db->prepare($query);
            $statement->bindValue(':name', $visitorName);
            $statement->bindValue(':email', $visitor_email);
            $statement->bindValue(':phone', $visitorPhone);
            $statement->bindValue(':suit', $suitType);
            $statement->bindValue(':heardVia', $heardVia);
            $statement->bindValue(':mailMe', $mailMe);
            $statement->bindValue(':comment', $comment);
        $statement->execute();
        $statement->closeCursor();
    }
    
    //function delete visitor from database
    function deleteVisitor($visitor_id){
        global $db;
        //$db = Database::getDB();
        $visitor_id = filter_input(INPUT_POST, 'visitorID', 
                FILTER_VALIDATE_INT);
        $query = 'DELETE FROM visitor
                  WHERE visitorID = :visitorID';
        $statement = $db->prepare($query);
        $statement->bindValue(':visitorID', $visitor_id);
        $statement->execute();
        $statement->closeCursor();
        //echo ($visitor_id);
        
    }
?>