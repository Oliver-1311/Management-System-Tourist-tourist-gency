<?php

class PaqueteTuristico
{
    public static function DevolverPaqueteTuristico()
    {
        include_once('Objetos/Base.php');$bas=new Base();$base=$bas->connect();
        $query = $base->query("select * from paquete_turistico;");
        while($valores = mysqli_fetch_array($query)){
            $paquetes[] = array('id'=> $valores[0], 'nombre'=> $valores[1]);
        }
        $json_string = json_encode($paquetes);echo $json_string;
    }

    public static function MostrarPaquete_turistico($eq_imp,$opc){
        include_once('Base.php');
        $sql="select * from paquete_turistico where descripcion like '%".$eq_imp."%' order by 2;";
        $bas=new Base();$base=$bas->connect();  $dto="";$cont=1;$query = $base->query($sql);
        switch($opc){
            case 0:
                while ($valores = mysqli_fetch_array($query)) {
                    $dto=$dto."<tr style='font-size:14px;color:black;'><td style='text-align:center'>".$cont."</td><td>"
                        .$valores[1]."</td><td style='text-align:center'>".$valores[2]."</td><td style='text-align:center'>".$valores[3]."</td><td class='td-actions'>
	   <a href='javascript:;'class='btn btn-info  btn-small' onclick=SeleccionaEquipo(".$valores[0].") title=
	   'Editar Equipo marca'><img src='../Imagenes/Edit.png' width=70% ></a><a href='javascript:;'class='btn btn-warning 
	   btn-small' onclick=EliminaEquipo(".$valores[0].") title='Elimina Equipo_Marca'>
	   <img src='../Imagenes/Cancel.png' width=70%></a></td></tr>";$cont++;
                }
                break;
            case 1: //Para El inventario inicial
                $sql="select eim.idequipo_implemento,concat_ws(' ',eim.descr,m.nommrc) descripcion,eim.tipo,eim.preref,
     (SELECT count(*) FROM equi_imple_existente where idequipo_implemento=eim.idequipo_implemento and idpedido=1)
	  from equipo_implemento eim inner join marca m on m.idmarca=eim.idmarca where eim.descr like '%".$eq_imp."%'
	  or m.nommrc like '%".$eq_imp."%' or eim.tipo like '%".$eq_imp."%' order by 2;";
                $query = $base->query($sql);
                while ($valores = mysqli_fetch_array($query)) {
                    $dto=$dto."<tr style='font-size:14px;color:black;' data-id='".$valores[0]."'>
	   <td style='text-align:center'>".$cont."</td><td>".$valores[1]."</td><td style='text-align:center'>
	   ".$valores[2]."</td><td style='text-align:center'>".$valores[3]."</td>
	   <td class='editable' style='text-align:center;' id='".$valores[0]."'>
	   <input type='text' style='width:3em;text-align:center;' id='cantidad' value='".$valores[4]."'/></td></tr>";$cont++;
                }
                break;
            case 2: //El stock o disponibilidad de equipos
                $sql="select eim.idequipo_implemento,concat_ws(' ',eim.descr,m.nommrc) descripcion,eim.tipo,(SELECT count(*) 
	  FROM equi_imple_existente where idequipo_implemento=eim.idequipo_implemento and estad='Activo') cantidad 
	  from equipo_implemento eim inner join marca m on m.idmarca=eim.idmarca where eim.descr like '%".$eq_imp."%' 
	  or m.nommrc like '%".$eq_imp."%' or eim.tipo like '%".$eq_imp."%' order by 2;";
                $query = $base->query($sql);
                while ($valores = mysqli_fetch_array($query)) {
                    $dto=$dto."<tr style='font-size:14px;color:black;' data-id='".$valores[0]."' id='".$cont.
                        "' onclick='seleccionar(this);'><td style='text-align:center'>".$cont."</td><td>".$valores[1]."</td><td 
	   style='text-align:center'>".$valores[2]."</td><td style='text-align:center'>".$valores[3]."</td></tr>";$cont++;
                }
                break;
            case 3: //Mostrar los equipos seleccionados
                $sql="select e.idequipo_implemento Id,concat_ws(' ',e.descr,m.nommrc) descripcion,(select count(*) from equi_imple_existente
	  where estad='Seleccionado' and idequipo_implemento=e.idequipo_implemento) Cant from equipo_implemento e inner join marca
	  m on m.idmarca=e.idmarca where (select count(*) from equi_imple_existente where estad='Seleccionado' and idequipo_implemento=
	  e.idequipo_implemento)>0;";
                $query = $base->query($sql);
                while ($valores = mysqli_fetch_array($query)) {
                    $dto=$dto."<tr style='font-size:14px;color:black;' data-id='".$valores[0]."' id='".$cont.
                        "' onclick='selecciomejorar(this);'><td style='text-align:center'>".$cont."</td><td>".$valores[1]."</td><td 
	   style='text-align:center'>".$valores[2]."</td></tr>";$cont++;
                }
                break;
        }
        echo $dto;
    }

    public function SeleccionarEquipo_Implemento($id,$ctd,$op,$idvje){
        include_once('Objetos/Base.php');
        $sql="call St_equi_imple_existente('".$id."','".$ctd."','".$op."','".$idvje."')";
        $bas=new Base();$base=$bas->connect();$query = $base->query($sql);
        echo "Selección Correcta";
    }
}