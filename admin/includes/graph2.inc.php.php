<?php

    require "dbh.inc.php";

    $sql = "SELECT DISTINCT chk AS problemtype FROM crecords1 GROUP BY chk;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../reports/reports-p2.php?error=stmtfailed1");
        exit();
    } else {
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $problem = $row['problemtype'];
            
            $sql1 = "INSERT IGNORE pgraphs (problem) VALUES ('$problem');";
            $stmt1 = mysqli_stmt_init($conn);
            $result1 = mysqli_query($conn, $sql1);
        
            $sql2 = "SELECT COUNT(gender) AS pnum1 FROM crecords1 WHERE chk='$problem' AND gender='Male';";
            $stmt2 = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt2, $sql2)) {
                header("location: ../reports/reports-p2.php?error=stmtfailed2");
                exit();
            } else {
                $result2 = mysqli_query($conn, $sql2);
                while ($row = mysqli_fetch_assoc($result2)) {
                    $pnum1 = $row['pnum1'];
                
                    $sql3 = "UPDATE pgraphs SET male_num='$pnum1' WHERE problem='$problem';";
                    $stmt3 = mysqli_stmt_init($conn);
                    $result3 = mysqli_query($conn, $sql3);
                }
            }
            
            $sql4 = "SELECT COUNT(gender) AS pnum2 FROM crecords1 WHERE chk='$problem' AND gender='Female';";
            $stmt4 = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt4, $sql4)) {
                header("location: ../reports/reports-p2.php?error=stmtfailed3");
                exit();
            } else {
                $result4 = mysqli_query($conn, $sql4);
                while ($row = mysqli_fetch_assoc($result4)) {
                    $pnum2 = $row['pnum2'];
                
                    $sql5 = "UPDATE pgraphs SET female_num='$pnum2' WHERE problem='$problem';";
                    $stmt5 = mysqli_stmt_init($conn);
                    $result5 = mysqli_query($conn, $sql5);
                }
            }
            
            $sql6 = "SELECT SUM(female_num) FROM pgraphs";
            $stmt6 = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt6, $sql6)) {
                header("location: ../reports/reports-p2.php?error=stmtfailed4");
                exit();
            } else {
                $result6 = mysqli_query($conn, $sql6);
                $sum_female = mysqli_fetch_assoc($result6);
            }
            
            $sql8 = "SELECT SUM(male_num) FROM pgraphs;";
            $stmt8 = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt8, $sql8)) {
                header("location: ../reports/reports-p2.php?error=stmtfailed5");
                exit();
            } else {
                $result8 = mysqli_query($conn, $sql8);
                $sum_male = mysqli_fetch_assoc($result8);
            }
        }
        
        header("location: ../reports/reports-p2-2.php");
        exit();
    }