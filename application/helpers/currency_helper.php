<?php

       function numEmReais($valor){
           return "R$" . number_format($valor, 2, ",", ".");           
       }