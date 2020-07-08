<?php
include "../../../dashboard/db.php";


ob_start();
session_start();

function getLabList($departmentId)
{
    global $connection;

    $query = "SELECT * from lab where dpt_id = '{$departmentId}'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li class=\"list-group-item subject-list\">";
            echo "<a href='javascript:void(0)' onClick=setVideos(" . $row["id"] . ")>" . $row["name"] . "</a></li>";
        }
    } else {
        echo "No Laboratory available";
    }
}


function getVideos($labId)
{
    global $connection;

    if ($labId) {
        $query = "SELECT topic, code, description from videos v";
        $query .= " join lab_assigned la on v.lab_assign_id = la.id";
        $query .= " where la.lab_id = '{$labId}'";

        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) > 0) {
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='card'><div class='card-body'><h4 class='topic' center>";
                echo $i . ". " . $row["topic"];
                echo "</h4><p class='px-2 pt-2'>";
                echo $row["description"];
                echo "</p><div class='notes-div'>";
                echo "<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/" . $row["code"];
                echo "\" frameborder=\"0\" allow=\"accelerometer; encrypted-media; gyroscope;\" allowfullscreen></iframe>";
                echo "</div></div></div>";

                $i += 1;
            }
        } else {
            echo "<p style='text-align: center !important;'>No Videos available</p>";
        }
    } else {
        echo "<p style='text-align: center !important;'>Select a Laboratory</p>";
    }
}

if (isset($_POST["getVideos"])) {
    getVideos($_POST["lab"]);
}
