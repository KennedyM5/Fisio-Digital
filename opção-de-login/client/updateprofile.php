<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/updateprofile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid pt-2 pb-2" style="background-color:rgba(209, 209, 170,0.3);">
    <div class="row">
        <div class="col-sm-10 ">
        <a href="dashboard.php"> <img  width="150" class="ml-0 mt-2 mb-2" src="../images/logo.png"> </a>
        </div>
        <div class="col-sm-2 my-auto">
            <a href="dashboard.php" class="btn btn-primary ">Voltar para Tela Inicial</a>
        </div>
    </div>
</div>


<div class="container-fluid text-center" style="background-color:rgb(176, 192, 236);">
    <div class="">
        <h2 class="pt-3 pb-3">Atualizar o Perfil</h2>
    </div>
</div>

<form class="my-5 mx-auto w-50" method="post" name="login" action="">
  <div class="form-group" >
    <label>E-mail</label>
    <input type="email" class="form-control" name="email" placeholder="preencha seu email" required>
  </div>
  <div class="form-group" >
    <label>Numero de Telefone</label>
    <input type="text" class="form-control" name="phno" placeholder=" preencha seu número de telefone"  required>
  </div>

  <div class="form-group" >
    <label>Tipo Sanguineo</label>
    <input type="text" class="form-control" name="bg" placeholder="preencha seu tipo sanguíneo"  required>
  </div>

  <div class="form-group" >
  <label for="">Endereço</label>
  <textarea class="form-control "  placeholder="preencha seu endereço" name="address" id="address"  required></textarea>
  </div>

  <div class="form-group" >
  <label for="">Data de Nascimento</label>
  <input type="date" class="form-control" name="dob"  required>
  </div>

  <div class="form-group" >
    <label>Digite sua idade</label>
    <input type="number" class="form-control" name="age" placeholder="preencha sua idade"  required>
  </div>


  <button type="submit" class="btn btn-primary" value="Login" name="updatesubmit">Atualizar Perfil</button>
  <button type="reset" class="btn btn-primary">Resetar</button>
</form>





    <?php
    session_start();
    $nm=$_SESSION["nome"];
    include("db.php");
    if(isset($_POST['updatesubmit']))
    {
        $email=$_POST["email"];
        $phno=$_POST["phno"];
        $bg=$_POST["bg"];
        $address=$_POST["address"];
        $dob=$_POST["dob"];
        $age=$_POST["age"];
        //echo $email ." ".$phno ." ". $bg  ." ". $address ." ". $dob ." ". $age; 
        $query    = "UPDATE `loginc` SET clientemail='$email',phoneno='$phno',bloodgroup='$bg',
                    address='$address',dob='$dob',age='$age' WHERE clientname='$nm'";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "
                  <h3>ATUALIZADO COM SUCESSO</h3><br/>";

        }
        else {
            echo "<h3>ERRO NA ATUALIZAÇÃO DO PERFIL</h3>";
        }
    }
    ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                    crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
                    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
                    crossorigin="anonymous"></script>
    
</body>
</html>