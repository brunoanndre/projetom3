<?php

 $newmysqli = new mysqli("localhost","root","kaug6a38","condominio");
         
         if(mysqli_connect_error()){
             echo "Erro ao conectar com o BD: ". mysqli_connect_error();
             exit();
         };