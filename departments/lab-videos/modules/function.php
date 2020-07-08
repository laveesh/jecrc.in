<?php
include "../../../dashboard/db.php";


ob_start();
session_start();

function getSubjectList($departmentId)
{
    global $connection;

    $query = "SELECT * from subject where dpt_id = '{$departmentId}'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li class=\"list-group-item subject-list\">";
            echo "<a href='javascript:void(0)' onClick=setNotes(" . $row["id"] . ")>" . $row["name"] . "</a></li>";
        }
    } else {
        echo "No subjects available";
    }
}


function getNotes($subjectId)
{
    global $connection;

    if ($subjectId) {
        $query = "SELECT topic, link, description from notes n";
        $query .= " join sub_assigned sa on n.sub_assign_id = sa.id";
        $query .= " where sa.sub_id = '{$subjectId}'";

        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) > 0) {
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='card'><div class='card-body'><h4 class='topic' center>";
                echo $i . ". " . $row["topic"];
                echo "</h4><p class='px-2 pt-2'>";
                echo $row["description"];
                echo "</p><div class='notes-div'><a href='" . $row["link"] . "' target='_blank'>";
                echo "<button class='notes-btn'>Open Notes here</button>";
                echo "</a></div></div></div>";

                $i += 1;
            }
        } else {
            echo "<p style='text-align: center !important;'>No notes available</p>";
        }
    } else {
        echo "<p style='text-align: center !important;'>Select a subject</p>";
    }
}

if (isset($_POST["getNotes"])) {
    getNotes($_POST["subject"]);
}
