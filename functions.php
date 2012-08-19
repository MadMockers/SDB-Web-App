<?php

function GetBans()
{
    global $banreasons;


    $sql = "SELECT `player`, `cause`, `by`, `date` FROM `deathbans` WHERE `active`=1 ORDER BY `id` DESC;";
    $result = mysql_query($sql);
    if (!$result)
    {
        echo "Could not successfully run query ($sql) on DB: " . mysql_error();
        exit;
    }
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Player</th>
            <th>Cause</th>
            <th>By</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysql_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>";
            echo $row["player"];
            echo "</td>";

           echo "<td>";
            $reason = $row["cause"];
            echo $banreasons[$reason];
            echo "</td>";

            echo "<td>";
            echo $row["by"];
            echo "</td>";

            echo "<td>";
            echo(date('l jS \of F Y h:i:s A', $row["date"]/1000));
            echo "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <?php
    }
?>