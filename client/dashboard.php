<?php
session_start();

include('protect.php');
//include auth_session.php file on all user panel pages

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tela inicial - área do paciente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid pt-2 pb-2" style="background-color:rgba(209, 209, 170,0.3);">
    <div class="row">
        <div class="col-sm-10 ">
            <img  width="200" class="ml-0 mt-2 mb-2" src="../imagens/teste.png">
        </div>
        <div class="col-sm-2">
            <h3 class="mr-0">Olá, <?php echo $_SESSION['nome']; ?>!</h3>
            <a href="logout.php" class="btn btn-primary ">Sair</a>
        </div>
    </div>
</div>
<div class="container-fluid text-center" style="background-color:rgb(176, 192, 236);">
    <div class="">
        <h2 class="pt-3 pb-3">TELA DO PACIENTE</h2>
    </div>
</div>

<a href="book1.php" class="btn btn-primary m-2">Nova Consulta</a> 
<a href="viewappointment.php" class="btn btn-primary m-2">Consultas Marcadas</a> 
<a href="updateprofile.php" class="btn btn-primary m-2">Atualizar Perfil</a>



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
