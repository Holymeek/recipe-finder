<?php
session_start();
include "db_conn.php";
   if(isset($_POST['submit'])){
       $mealname = $_POST['mealname'];
       $mealtype = $_POST['mealtype'];
       $ingredients = $_POST['ingredients'];
       $procedure = $_POST['procedure'];

       if($mealtype == "breakfast"){
        $sql = "INSERT INTO breakfast('id', 'mealname', 'ingredients',' procedure') 
        VALUES (null,'$mealname','$ingredients','$procedure')";
                 print_r(mysqli_query($conn, $sql));

            }elseif($mealtype == "lunch"){
            $sql = "INSERT INTO lunch('id', 'mealname', 'ingredients',' procedure') 
            VALUES (null,'$mealname','$ingredients','$procedure')";
                    print_r(mysqli_query($conn, $sql));
       
                }elseif($mealtype == "supper"){
                    $sql = "INSERT INTO supper('id', 'mealname', 'ingredients',' procedure') 
                    VALUES (null,'$mealname','$ingredients','$procedure')";
                            print_r(mysqli_query($conn, $sql));
                            header("Location: index.html");

                }

   }else{
       echo "didn't save";
   }



?>
