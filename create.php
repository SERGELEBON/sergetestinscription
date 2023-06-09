<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "inscription";


//Create connection
$connection = new mysqli($servername, $username, $password, $database);


$name = "";
$lastname = "";
$email = "";
$phone = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST') { 

   $name = $_POST["name"];
   $lastname = $_POST["lastname"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];

   do { 
       if (empty($name) || empty($lastname) || empty($email) || empty($phone)){
            $errorMessage = "Tout les Champs sont obligatoire";
            break;
        
         }

          // ajouter à la database
         $sql = "INSERT INTO personnes (name, lastname, email, phone) ". 
                 "VALUES ('$name', '$lastname', '$email', '$phone')";
          $result = $connection->query($sql);

          if (!$result) {
            $errorMessage = "Information invalide: " . $connection->error;
            break;
          }

          $name = "";
          $lastname = "";
          $email = "";
          $phone = "";

          $successMessage = "Inscription effectuée";
          header("location: /inscription_simplon/index.php");
          exit;    

    } while (false);
} 
   


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Simplon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
      <div class="container my-5" >
        <a class="btn btn-primary" href="/inscription_simplon/index.php" role="button">Consultez la liste de presences</a>
        <br>
        <h2>Inscris-toi maintenant</h2>

       <?php
         if (!empty($errorMessage)) {
            echo"
              <div class=' alert alert-warning alert-dismissible fade show' role='alert'>
              <strong>$errorMessage</strong>
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
              </div>
            ";
         }
        ?>

        <form  method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nom</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" >
                </div>
            </div>
            
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Prenoms</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>" >
                </div>
            </div>
             
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" >
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Contact</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>" >
                </div>
            </div>

              <?php
                 if (!empty($successMessage)) {
                    echo"
                    <div class='row mb-3'>
                       <div class='offset-sm-3 col-sm-6'>
                          <div class=' alert alert-success  alert-dismissible fade show' role='alert'>
                           <strong>$successMessage</strong>
                           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                          </div>
                        </div>
                    </div> 
                    ";
                 }
              ?>


            


            <div class="row mb-3">
              <div class="offset-sm-3 col-sm-3 d-grid">
                 
                    <button type="submit" class="btn btn-primary" href="/inscription_simplon/index.php">VALIDER</button>
              </div>
              <div class="col-sm-3 d-grid">
                 <a class="btn btn-outline-primary" href="/inscription_simplon/index.php" role="button">Suprimer</a>
              </div>
            </div> 
        

        </form>

      </div> 

</body>
</html>
