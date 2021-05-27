<?php 

incluir( "con_db.php" );

if( isset ( $ _POST [ 'registrar' ])) {
    if ( strlen ( $ _POST [ 'nombre' ])> = 1 && strlen ( $ _POST [ 'email' ])> = 1 ) {
	    $ nombre = recorte ( $ _POST [ 'nombre' ]);
	    $ email = trim ( $ _POST [ 'email' ]);
	    $ consulta = "INSERT INTO datos (nombre, email) VALUES ('$ name', '$ email')" ;
	    $ resultado = mysqli_query ( $ conex , $ consulta );
	    if ( $ resultado ) {
	    	?> 
	    	< h3  class = " ok " > ¡El registro fue un exito! </ h3 >
           <? php
	    } más {
	    	?> 
	    	< h3  class = " bad " > ¡Ha ocurrido un error! </ h3 >
           <? php
	    }
    }    más {
	    	?> 
	    	< h3  class = " bad " > ¡Por favor complete los campos! </ h3 >
           <? php
    }
}

?>