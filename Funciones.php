<html>
	<head>
     	<title>Lista de marcas </title>     
	<style>
	  .tit{
		  color:blue;
	  }
	 </style>
	</head>
	<body>
	 <h4 class='tit'>Trabanajdo  con funciones Numericas</h4>
	 <p>abs</p>
	 <?php
	 
	  $num=-20;
	  echo'El valor absoluto del número: '.$num.' Es: '.abs($num); 
	   
      echo'<p>Función round(numerodecimal,cantidad_decimales)</p>'; 	   
       $prec=45.68732;      
	   
	   echo'El precio: '.$prec.' redondeado a dos decimale es: '.round($prec,2);
	   
	   
	   echo'<p>Función rand(minimo,maximo)</p>'; 	   
       $nta=rand(0,20);
	   echo'La nota del alumno es: '.$nta;
	   
	   
	   echo'<p>Función max(num1,num2,num3,.....)</p>'; 	   
       $dto=max(53,76,51,12,78);
	   echo'El valor maximo de: 53,76,51,12,78: Es: '.$dto;
	   
	   echo'<p>Función min(num1,num2,num3,.....)</p>'; 	   
       $dto=min(53,76,51,12,78);
	   echo'El valor minimo de: 53,76,51,12,78: Es: '.$dto;
	
	
	   echo'<p>Función strlen(cadena)</p>'; 	   
       $dto='Miguel';
	   echo'La longitud de la cadena: '.$dto.' Es: '.strlen($dto);
    
	
	   echo'<p>Función substr(cadena,inicio,cantidad)</p>'; 	   
       $dto='Miguel';
	   echo'La cadena: '.$dto.' Es: '.substr($dto,2,3);
	   
	   
	   echo'<p>Función strtoupper(cadena) Convierte en mayusculas una cadena</p>'; 	   
       $dto='Miguel';
	   echo'La cadena: '.$dto.' en mayusculas Es: '.strtoupper	($dto);
	   
	   echo'<p>Función strtolower(cadena) Convierte en minusculas una cadena</p>'; 	   
       $dto='Miguel';
	   echo'La cadena: '.$dto.' en minusculas Es: '.strtolower	($dto);
	   
	   echo'<p>Función ucfirst(cadena) Convierte en mayusculas el primer caracter de una cadena</p>'; 	   
       $dto='miguel';
	   echo'La cadena: '.$dto.' en minusculas Es: '.ucfirst($dto);
	   
	   
	   echo'<p>Función strcmp(cadena1,cadena2) Sirve para comparar cadenas</p>'; 	   
       $dto1='miguel'; $dto2='MIGUEL';
	   echo'El Resultado de comparar cadenas Es: '.strcmp($dto1,$dto2);
	   
	
	   echo'<p>Función strcasecmp(cadena1,cadena2) Sirve para comparar cadenas</p>'; 	   
       $dto1='miguel'; $dto2='MIGUEL';
	   echo'El Resultado de comparar cadenas Es: '.strcasecmp($dto1,$dto2);
	   
	   
	   $hoy = getdate();
       print_r($hoy);
	   echo '<br>'.$hoy['year'].'<br>';
	   
	   echo date('m-d-y',date());
	
/*
 IMPLEMENTE UNA PROGRAMA QUE LE PERMITA INGRESAR SUS NOMBRES Y APELLIDOS EN MAYUSCULA Y LUEGO DEBE PRESENTAR
 ESE DATO CON LA PRIMERA LETRA EN MAYUSCULA Y EL RESTO DE LA CADENA EN MINUSCULA; ASI TAMBIEN
 EN UN COMBO MOSTRAR LAS FUERTES EN MAYUSCULA Y EN OTRO LAS VOCALES DEBILES EN MINUSCULA.
 
 
 implemente uun programa en php que le permita ingresar una cadena de caraactes y luego al hacer click en un boton de comando
 nos muestre en  select o lista desplegable, todos los caracteres de esa cadena. 
  
 Implemete un programa en php, que nos permita hacer el sorteo para determinar que grupo debe exponer
 sabiendo que tenemos 5 grupos donde cada grupo tiene un nombre, cuando el usuario haga click en el boton
 Elegir, se debe mostrar el nombre del grupo que debe exponer.
*/	   
	   
	  ?>
	 
	</body>
</html>