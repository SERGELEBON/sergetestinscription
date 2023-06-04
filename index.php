<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <H2>Liste des inscrit</H2>
        <a class="btn btn-primary" href="/inscription_simplon/create.php" role="button">Nouvelle inscription</a>
        <br>
        <table class="table">
           <thead>
             <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Prenoms</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Created At</th>
             </tr>
           </thead>
           <tbody>
               <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $database = "inscription";

                  //Create connection
                  $connection = new mysqli($servername, $username, $password, $database);

                  // Check connection
                  if($connection->connect_error){
                    die("connection failed: " .$connection->connect_error);
                  }

                  //Lecture de toute la base
                  $sql = "SELECT * FROM personnes";
                  $result = $connection->query($sql);

                  if (!$result) {
                    die("Invalid query: " . $connection->error);                                                                                                                                                                                                                           
                  }

                  // Lecture des donne de la colonne
                  while($row = $result->fetch_assoc()) 
                    echo  " 
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[lastname]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[created_at]</td>
                    <td>
                        
                    </td>
    
                  </tr>
                    ";
                  
               ?>
            
           </tbody>
        </table>
    </div>
</body>
</html>