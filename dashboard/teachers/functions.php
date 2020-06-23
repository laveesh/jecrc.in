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
        echo "<option value=\"" . $row["sid"]. "\">" . $row["sname"]. ", ". $row["dname"] . "</option>";
      }
    }
}

function getNotesList($userId){
    global $connection;
    
    $subjects = "SELECT n.id as nid, n.topic as topic, s.name as sname, d.name as dname, n.link as link from notes n";
    $subjects .= " join sub_assigned sa on sa.id = n.sub_assign_id";
    $subjects .= " join subject s on sa.sub_id = s.id";
    $subjects .= " inner join department d on d.id = s.dpt_id ";
    $subjects .= " where sa.user_id = \"{$userId}\"";

    $result = mysqli_query($connection, $subjects);    

    if (mysqli_num_rows($result) > 0) {
        $i = 1;
        while($row = mysqli_fetch_assoc($result)) {
            if(isset($_GET['note'.$row['nid']])){
                deleteNote($row['nid'], $row['link']);
            }

            echo "<tr> <th scope=\"row\">".$i."</th>";
            echo "<td>".$row["topic"]."</td>";
            echo "<td>".$row["sname"]."</td>";
            echo "<td>".$row["dname"]."</td>";
            echo "<td>".$row["link"]."</td>";
            echo "<form action='' method='GET'>";
            echo "<td><input type=\"submit\" value=\"Delete\" class=\"btn btn-dark\" name=\"note".$row["nid"]."\"/></td>";
            echo "</from>";
            echo "</tr>";
            $i += 1;
        }
    } else {
        echo "<tr> <td colspan=6 class='text-center' > No Notes uploaded.</td> </tr>";
    }
}

function deleteNote($noteId, $link){
    global $connection;

    $deleteQuery = "DELETE from notes where id = '{$noteId}'";

    $fileExtension = end(explode(".", $link));
    $filePointer = "../../uploads" . $noteId . $fileExtension;
    unlink($fileExtension);

    $result = mysqli_query($connection, $deleteQuery);

    confirm_query($result);

    header("refresh:0");
}

?>