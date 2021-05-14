<!DOCTYPE html>
<?php
 try {

    $db = new PDO('mysql:host=localhost;dbname=hello','peter','World123');
    if (isset($db)) printf("Connection Success");
 } catch(PDOException $e) {
     printf("Could not connect to the database: %s ",$e->getMessage());
 }
$sql = "select * from connects;";
$runSQL = $db->prepare($sql);
$runSQL->execute();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <title>Bootstrap Index</title>
</head>
<body>
    <div class="container p-3 m-3 border bg-dark text-white" style="border-radius: 15px;">
        <h1>Hello World</h1>
        <p>My Website</p>
    </div>
    <div class="container p-3 my-3 border" style="border-radius: 15px;">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        while($row = $runSQL->fetch()){
                            printf("<tr>");
                            printf("<th scope='row'>%d</th>",$row[0]);
                            printf("<td>%s</td>",$row[1]);
                            printf("<td>%s</td>",$row[2]);
                            printf("<td>%s</td>",$row[3]);
                            printf("</tr>");
                        }
                    ?>
            </tbody>
        </table>
    </div>    
</body>
</html>