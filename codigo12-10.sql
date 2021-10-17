DELIMITER $$

DROP PROCEDURE IF EXISTS `bd_turismo`.`St_equi_imple_existente` $$
CREATE PROCEDURE `bd_turismo`.`St_equi_imple_existente` (idequ int,cnt int,opc int)
BEGIN
 case opc
  when 1 then
   while opc do
     set @id=(select idequi_imple_existente from equi_imple_existente where idequipo_implemento=idequ
     and estad='Activo' order by 1 limit 1); select @id ID;
     update equi_imple_existente set estad='Seleccionado' where idequi_imple_existente=@id;
   end while;
 end case;
END $$

DELIMITER ;