<?php
mysqli_autocommit($conn, false);

function commitTable ($db, $query)
{
    $flag = true;

    $setTable = mysqli_query($db, $query);

    if (!$setTable)
    {
        $flag = false;
        echo "Error details: " . mysqli_error($db) . ". ";
    }

    if ($flag)
    {
        mysqli_commit($db);
        //echo "All queries were executed successfully";
    }
    else
    {
        mysqli_rollback($db);
        //echo "All queries were rolled back";
    }
}
?>