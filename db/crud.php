<?php

    class crud{
        //private database objects
        private $db;

        //constructor to initialize private variable to the database connection
        function __constructor($conn){
            $this->db = $conn;
        }

        //function to insert records at attendee table
        public function insert($fname, $lname, $dob, $email, $contact, $speciality){
            try {
                //define sql statement to be executed
                $sql = "INSERT INTO attendee  (firstname, lastname, dateOfBirth, emailAddress, contactNumber, speciality_id)  VALUES(:fname, :lname, :dob, :email, :contact, :speciality)";
                //prepare sql statement for execution
                $stmt = $this->db->prepare($sql);

                //bind all the placeholders to actual values
                $stmt->bindparam(':fname', $fname);
                $stmt->bindparam(':lname', $lname);
                $stmt->bindparam(':dob', $dob);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':contact', $contact);
                $stmt->bindparam(':specaility', $speciality);

                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

    }

?>