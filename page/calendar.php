<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
<!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--font-->
<link href='https://fonts.googleapis.com/css?family=Didact Gothic' rel='stylesheet'>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<!--CSS-->
     <link rel="stylesheet" type="text/css" href="../css/standard.css">
<!--Calendar CSS-->
      <link rel="stylesheet" type="text/css" href="../css/calendar.css">
      

    <title>Calendario</title>
  </head>

  <body>
 <!--header-->
      <header>
         <div class="container text-center py-3">
             <div class="col-sm-12">
                 <img src="../img/logo_utp.png" class="logoutp">
                 <h4>Universidad Tecnológica de Panamá</h4>
                 <h5>Sistema para la Reservación de Eventos Academicos</h5>
             </div>
         </div>
      </header> 
<!-- Inicio Barra de navegacion -->
<?php include "../page/Includes/navbarAdm.php"; ?>
<!--fin de barra de navegación-->
  <br><br>
  <h3>Calendario de Eventos</h3>
   <div class="container">
      <div class="col-12">
         <div class="box">
            <div class="month">      
          <ul>
            <li class="prev">&#10094;</li>
            <li class="next">&#10095;</li>
            <li>
              Octubre<br>
              <span style="font-size:18px">2019</span>
            </li>
          </ul>
        </div>

        <ul class="weekdays">
          <li>Lu</li>
          <li>Ma</li>
          <li>Mi</li>
          <li>Ju</li>
          <li>Vi</li>
          <li>Sa</li>
          <li>Do</li>
        </ul>

        <ul class="days">  
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
          <li>9</li>
          <li>10</li>
          <li>11</li>
          <li>12</li>
          <li>13</li>
          <li>14</li>
          <li>15</li>
          <li>16</li>
          <li>17</li>
          <li>18</li>
          <li>19</li>
          <li>20</li>
          <li>21</li>
          <li>22</li>
          <li>23</li>
          <li>24</li>
          <li><span class="active">25</span></li>
          <li>26</li>
          <li>27</li>
          <li>28</li>
          <li>29</li>
          <li>30</li>
          <li>31</li>
        </ul>
         </div>
      </div>
   </div>
              
<!--Fin Primer Div-->

<!-- Footer -->
<?php include "../page/Includes/footer.php"; ?>
<!-- Footer -->
<!-- JS -->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/calendar.js"></script>
<!-- JS -->
  </body>
</html>