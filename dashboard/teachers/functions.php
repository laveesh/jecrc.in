<?php

function currentUser(){
    if(isset($_SESSION['username'])){
        return $_SESSION['username'];
    }
    return false;
}

function imagePlaceholder($image=''){
    if(!$image){
        return 'nopost.jpg';
    }
    else{
        return $image;
    }
}

function escape($string){
    global $connection;

    return mysqli_real_escape_string($connection, trim($string));
}


function confirm_query($result){
    global $connection;

   if(!$result){
    die("QUERY FAILED" . mysqli_error($connection));
   }

}


function redirect($location){
    header("Location:" . $location);
    exit;
}

function ifItIsMethod($method=null){
    if($_server['REQUEST_METHOD'] == strtoupper($method)){
        return true;
    }

    return false;
}

function isLoggedIn(){
    if(isset($_SESSION['user_role'])){
        return true;
    }

    return false;
}

function checkIfUserIsLoggedInAndRedirect($redirectLocation=null){
    if(isLoggedIn()){
        redirect($redirectLocation);
    }
}

function getAssignedSubjects($userId){
    global $connection;
    
    $subjects = "SELECT sa.id as said, s.name as sname, d.name as dname from sub_assigned sa";
    $subjects .= " join subject s on sa.sub_id = s.id";
    $subjects .= " inner join department d on d.id = s.dpt_id ";
    $subjects = subAssQuery( );
    $subjects .= " where sa.user_id = \"{$userId}\"";
    
    $result = mysqli_query($connection, $subjects);    

    if (mysqli_num_rows($result) > 0) {
        $i = 1;
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr> <th scope=\"row\">".$i."</th>";
            echo "<td>".$row["sname"]."</td>";
            echo "<td>".$row["dname"]."</td>";
            echo "</tr>";
            $i += 1;
        }
    } else {
        echo "<tr> <td colspan=3 class='text-center' > No subject assigned. Please Assign a subject to your self. </td> </tr>";
    }
}


function getSubjectOptionsWithDptName(){
    global $connection;

    $subjectSql = "SELECT s.id as sid, s.name as sname, d.name as dname from subject s";
    $subjectSql .= " join department d on s.dpt_id = d.id";
    $result = mysqli_query($connection, $subjectSql);
    
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo "<option value=\"" . $row["said"]. "\">" . $row["sname"]. ", ". $row["dname"] . "</option>";
      }
    }
}

?>