<?php

function currentUser()
{
    if (isset($_SESSION['username'])) {
        return $_SESSION['username'];
    }
    return false;
}

function imagePlaceholder($image = '')
{
    if (!$image) {
        return 'nopost.jpg';
    } else {
        return $image;
    }
}

function escape($string)
{
    global $connection;

    return mysqli_real_escape_string($connection, trim($string));
}

function users_online()
{

    global $connection;

    $session = session_id();
    $time = time();
    $time_out_in_seconds = 60;
    $time_out = $time - $time_out_in_seconds;

    $query = "SELECT * FROM users_online WHERE session = '$session'";
    $send_query = mysqli_query($connection, $query);
    $count = mysqli_num_rows($send_query);

    if ($count == NULL) {

        mysqli_query($connection, "INSERT INTO users_online(session, time) VALUES('$session','$time')");
    } else {

        mysqli_query($connection, "UPDATE users_online SET time = '$time' WHERE session = '$session'");
    }

    $users_online_query =  mysqli_query($connection, "SELECT * FROM users_online WHERE time > '$time_out'");
    return $count_user = mysqli_num_rows($users_online_query);
}


function confirm_query($result)
{
    global $connection;

    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

function getTeachersTable()
{
    global $connection;

    $teacher = "SELECT * from users where user_role = \"teacher\"";
    $result = mysqli_query($connection, $teacher);

    if (mysqli_num_rows($result) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            if (isset($_GET['user' . $row['user_id']])) {
                deleteUser($row['user_id']);
            }

            if (isset($_GET['userpass' . $row['user_id']])) {
                $_SESSION['teacherUsername'] = $row["username"];
                header("location: teacher-password.php");
            }
            echo "<tr> <th scope=\"row\">" . $i . "</th>";
            echo "<td>" . $row["user_name"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["user_email"] . "</td>";
            echo "<form action='' method='GET'>";
            echo "<td><input type=\"submit\" value=\"Change\" class=\"btn btn-dark\" name=\"userpass" . $row["user_id"] . "\"/></td>";
            echo "<td><input type=\"submit\" value=\"Delete\" class=\"btn btn-dark\" name=\"user" . $row["user_id"] . "\"/></td>";
            echo "</from>";
            echo "</tr>";
            $i += 1;
        }
    }
}

function getEditorsTable()
{
    global $connection;

    $teacher = "SELECT * from users where user_role = \"editor\"";
    $result = mysqli_query($connection, $teacher);

    if (mysqli_num_rows($result) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            if (isset($_GET['userpass' . $row['user_id']])) {
                $_SESSION['teacherUsername'] = $row["username"];
                header("location: teacher-password.php");
            }
            echo "<tr> <th scope=\"row\">" . $i . "</th>";
            echo "<td>" . $row["user_name"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["user_email"] . "</td>";
            echo "<form action='' method='GET'>";
            echo "<td><input type=\"submit\" value=\"Change\" class=\"btn btn-dark\" name=\"userpass" . $row["user_id"] . "\"/></td>";
            echo "</form>";
            echo "</tr>";
            $i += 1;
        }
    }
}

function deleteUser($userId)
{
    global $connection;
    $deleteQuery = "DELETE from users where user_id = '{$userId}'";
    $result = mysqli_query($connection, $deleteQuery);

    confirm_query($result);

    header("refresh:0");
}

function getSubjectTable()
{
    global $connection;

    $subjects = "SELECT s.id as sid,s.name as sname, d.name as dname from subject s join department d on d.id = s.dpt_id ";
    $result = mysqli_query($connection, $subjects);

    if (mysqli_num_rows($result) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            if (isset($_GET['subject' . $row['sid']])) {
                deleteSubject($row['sid']);
            }

            echo "<tr> <th scope=\"row\">" . $i . "</th>";
            echo "<td>" . $row["sname"] . "</td>";
            echo "<td>" . $row["dname"] . "</td>";
            echo "<form action='' method='GET'>";
            echo "<td><input type=\"submit\" value=\"Delete\" class=\"btn btn-dark\" name=\"subject" . $row["sid"] . "\"/></td>";
            echo "</from>";
            echo "</tr>";
            $i += 1;
        }
    }
}

function deleteSubject($sid)
{
    global $connection;

    $deleteQuery = "DELETE from sub_assigned where sub_id = '{$sid}';";
    $deleteQuery .= "DELETE from subject where id = '{$sid}';";
    $result = mysqli_multi_query($connection, $deleteQuery);

    confirm_query($result);

    header("refresh:0");
}

function getLabTable()
{
    global $connection;

    $subjects = "SELECT l.id as lid,l.name as lname, d.name as dname from lab l join department d on d.id = l.dpt_id ";
    $result = mysqli_query($connection, $subjects);

    if (mysqli_num_rows($result) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            if (isset($_GET['lab' . $row['lid']])) {
                deleteLab($row['lid']);
            }

            echo "<tr> <th scope=\"row\">" . $i . "</th>";
            echo "<td>" . $row["lname"] . "</td>";
            echo "<td>" . $row["dname"] . "</td>";
            echo "<form action='' method='GET'>";
            echo "<td><input type=\"submit\" value=\"Delete\" class=\"btn btn-dark\" name=\"lab" . $row["lid"] . "\"/></td>";
            echo "</from>";
            echo "</tr>";
            $i += 1;
        }
    }
}

function deleteLab($lid)
{
    global $connection;

    $deleteQuery = "DELETE from lab_assigned where lab_id = '{$lid}';";
    $deleteQuery .= "DELETE from lab where id = '{$lid}';";
    $result = mysqli_multi_query($connection, $deleteQuery);

    confirm_query($result);

    header("refresh:0");
}

function insert_categories()
{
    global $connection;

    $query = "SELECT * FROM categories";
    $select_title = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_title))
        $the_cat_title = $row['cat_title'];

    if (isset($_POST['submit'])) {
        $cat_title = $_POST['cat_title'];
        $cat_creator = $_SESSION['username'];

        if ($cat_title == "" || empty($cat_title)) {
            echo "<p class='lead text-danger'>*This field should not be empty</p>";
        } else if ($cat_title == $the_cat_title) {
            echo "<p class='lead text-danger'>*This category is taken</p>";
        } else {
            $query = "INSERT INTO categories(cat_title,cat_creator)";
            $query .= "VALUE(?,?)";

            $stmt_create_category_query = mysqli_prepare($connection, $query);
            mysqli_stmt_bind_param($stmt_create_category_query, "ss", $cat_title, $cat_creator);
            mysqli_stmt_execute($stmt_create_category_query);
            mysqli_stmt_close($stmt_create_category_query);

            if (!$stmt_create_category_query) {
                die('QUERY FAILED' . mysql_error($connection));
            }
        }
    }
}

function viewOwnCategory()
{
    global $connection;

    $serial = 0;
    $the_cat_creator = $_SESSION['username'];
    $query = "SELECT * FROM categories WHERE cat_creator = '{$the_cat_creator}' ";
    $select_all_categories = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_all_categories)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        echo "<tr>";
        $serial = $serial + 1;
        echo "<td>{$serial}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td><a href='category.php?delete={$cat_id}'>Delete</a></td>";
        echo "<td><a href='category.php?edit={$cat_id}'>Edit</a></td>";
        echo "</tr>";
    }
}


function DeleteCategories()
{
    global $connection;

    if (isset($_GET['delete'])) {
        $the_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
        $delete_query = mysqli_query($connection, $query);
        header("Location:category.php");
    }
}

function viewPostComments()
{
    global $connection;

    $serial = 0;
    $query = "SELECT * FROM posts WHERE post_user = '{$_SESSION['username']}' ";
    $select_post_query = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_post_query)) {
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];

        $query = "SELECT * FROM comments WHERE comment_post_id = $post_id";
        $select_all_comments_query = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_all_comments_query)) {
            $comment_id = $row['comment_id'];
            $comment_author = $row['comment_author'];
            $comment_post_id = $row['comment_post_id'];
            $comment_content = $row['comment_content'];
            $comment_status = $row['comment_status'];
            $comment_date = $row['comment_date'];

            echo "<tr>";
            $serial = $serial + 1;
            echo "<th scope='row'>$serial</th>";
            echo "<td>$comment_author</td>";
            echo "<td>$comment_content</td>";
            echo "<td>$comment_status</td>";
            echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
            echo "<td>$comment_date</td>";
            echo "<td><a href='comments.php?show=$comment_id'>Show</td>";
            echo "<td><a href='comments.php?hide=$comment_id'>Hide</td>";
            echo "<td><a href='comments.php?delete=$comment_id'>Delete</td>";
            echo "</tr>";
        }
    }
}

function Show_comment()
{
    global $connection;

    if (isset($_GET['show'])) {
        $the_comment_id = $_GET['show'];

        // $query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id = $the_comment_id";
        // $approve_query = mysqli_query($connection,$query);
        $query = "UPDATE comments SET comment_status = 'show' WHERE comment_id = ?";
        $stmt_show_query = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt_show_query, "s", $the_comment_id);
        mysqli_stmt_execute($stmt_show_query);
        mysqli_stmt_close($stmt_show_query);
        header("Location:comments.php");
    }
}

function Hide_comment()
{
    global $connection;

    if (isset($_GET['hide'])) {
        $the_comment_id = $_GET['hide'];

        // $query = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id = $the_comment_id";
        // $unapprove_query = mysqli_query($connection,$query);
        $query = "UPDATE comments SET comment_status = 'hide' WHERE comment_id = ?";
        $stmt_hide_query = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt_hide_query, "s", $the_comment_id);
        mysqli_stmt_execute($stmt_hide_query);
        mysqli_stmt_close($stmt_hide_query);
        header("Location:comments.php");
    }
}

function redirect($location)
{
    header("Location:" . $location);
    exit;
}

function ifItIsMethod($method = null)
{
    if ($_server['REQUEST_METHOD'] == strtoupper($method)) {
        return true;
    }

    return false;
}

function isLoggedIn()
{
    if (isset($_SESSION['user_role'])) {
        return true;
    }

    return false;
}

function checkIfUserIsLoggedInAndRedirect($redirectLocation = null)
{
    if (isLoggedIn()) {
        redirect($redirectLocation);
    }
}

function email_exists($email)
{
    global $connection;

    $query = "SELECT user_email FROM users WHERE user_email ='$email'";
    $result = mysqli_query($connection, $query);
    confirm_query($result);

    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}
