<?php
session_start();

include('protect.php');
//include auth_session.php file on all user panel pages
?>
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Tela do Doutor</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link href="css/dashboard.css" rel="stylesheet">
</head>
<body>
    <nav>
	<div class="logo-name">
            <div class="logo-image">
                <img src="../imagens/logo.png" alt="">
            </div>

            <span class="logo_name">Fisio Digital</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="dashboard.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Tela inicial</span>
                </a></li>
                <li><a href="perfil.php">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Editar Perfil</span>
                </a></li>
                <li><a href="appointment.php">
                    <i class="uil uil-schedule"></i>
                    <span class="link-name">Consultas Marcadas</span>
                </a></li>
                <li><a href="treinos/treino.html">
                    <i class="uil uil-book-medical"></i>
                    <span class="link-name">Adicionar Treinos</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
	<div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Painel do Doutor</span>
                </div>

                <div class="boxes">
                    <a href="perfil.php" class="box box1">
                        <i class="fas fa-thumbs-up"></i>
                        <span class="text">Editar Perfil</span>
                    </a>
                    <a href="appointment.php" class="box box2">
                        <i class="fas fa-comments"></i>
                        <span class="text">Consultas Marcadas</span>
                    </a>
                    <a href="treinos/treino.html" class="box box3">
                        <i class="fas fa-share"></i>
                        <span class="text">Adicionar Treinos</span>
                    </a>
                </div>
                
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Prem Shahi</span>
                        <span class="data-list">Deepa Chand</span>
                        <span class="data-list">Manisha Chand</span>
                        <span class="data-list">Pratima Shahi</span>
                        <span class="data-list">Man Shahi</span>
                        <span class="data-list">Ganesh Chand</span>
                        <span class="data-list">Bikash Chand</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">premshahi@gmail.com</span>
                        <span class="data-list">deepachand@gmail.com</span>
                        <span class="data-list">prakashhai@gmail.com</span>
                        <span class="data-list">manishachand@gmail.com</span>
                        <span class="data-list">pratimashhai@gmail.com</span>
                        <span class="data-list">manshahi@gmail.com</span>
                        <span class="data-list">ganeshchand@gmail.com</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-15</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../js/script2.js"></script>
</body>
</html>
<?php
	include('header.php');
    /*
    include('db.php');
    $id = $_SESSION['id'];
    
    $query    = "SELECT * FROM logind WHERE id=$doctorid;";
    $result = mysqli_query($con, $query);
    if($result)
    {
        $data = mysqli_fetch_assoc($result);
        $usuario = $data['doctorname'];
        if($data['profile'])
        {
            $image=$data['profile'];
        }
        else
        {
            $image="default.jpg";
        }
    }
    */
?>
<h1>Data : <?php echo date("d-m-Y"); ?></h1>
<h1>Horário Atual : <?php 
    date_default_timezone_set('America/Sao_Paulo');
    $currentTime = date('h:i:s A', time());
    echo $currentTime;
?></h1>

<?php
    function findclientname($id)
    {
        $conn =  mysqli_connect("localhost","root","","fisio digital");
        $qry =  "SELECT * FROM loginc WHERE id='$id'";
        $ans = mysqli_query($conn,$qry);
        if($ans)
        {
            $nam=mysqli_fetch_assoc($ans);
            return $nam['usuario'];
        }
    }
    
    function finddoctorname($id)
    {
        $conn =  mysqli_connect("localhost","root","","fisio digital");
        $qry =  "SELECT * FROM logind WHERE id=$id";
        $ans = mysqli_query($conn,$qry);
    
        if($ans)
        {
            $nam=mysqli_fetch_assoc($ans);
            return $nam['usuario'];
        }
    }
?>
</body>
</html>