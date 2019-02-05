   <?php

$connection = mysqli_connect('shareddb-j.hosting.stackcp.net', 'diary616-3935a18a', 'ayush616', 'diary616-3935a18a');

                if(mysqli_connect_error()){

                    die("Database Connection Error.");

                }  

$query = "SELECT * FROM question";

$result = mysqli_query($connection, $query);

$i = 1;
while($row = mysqli_fetch_array($result)){
    echo $i,". ", $row['question']."<br><br>";
    echo "(A) ", $row['o1']."<br>";
    echo "(B) ", $row['o2']."<br>";
    echo "(C) ", $row['o3']."<br>";
    echo "(D) ", $row['o4']."<br><br>";
    
    $i++;
}






?>
