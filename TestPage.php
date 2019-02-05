   <?php

$connection = mysqli_connect('localhost', 'root', '', 'test');

                if(mysqli_connect_error()){

                    die("Database Connection Error.");

                }  


if($_POST['submit']){
    
    
    
    $que = $_POST['question'];
    $o1 = $_POST['o1'];
    $o2 = $_POST['o2'];
    $o3 = $_POST['o3'];
    $o4 = $_POST['o4'];
    $ans = $_POST['answer'];
    
    
    $query = "INSERT INTO question(question, o1, o2, o3, o4, answer)";
    $query .= "VALUES ('$que', '$o1', '$o2', '$o3', '$o4', '$ans')";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        
        echo "Query failed.";
    }
}



?>
<h2><u>Enter New Question</u></h2>
<form method="post">
    <label for="question">Question:-</label><br><br>
    <textarea name="question" id="" cols="30" rows="10"></textarea>
    
    <p>Enter Options:-</p>
    <input type="text" name="o1" placeholder="Enter Option 1">
    <input type="text" name="o2" placeholder="Enter Option 2">
    <input type="text" name="o3" placeholder="Enter Option 3">
    <input type="text" name="o4" placeholder="Enter Option 4">
    
    <p>Enter Correct Answer:-</p>
    <input type="text" name="answer" placeholder="Enter correct answer">
    <br><br><input type="submit" value="Enter" name="submit">
    
</form>

