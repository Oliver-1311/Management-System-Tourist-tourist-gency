DELIMITER $$

DROP PROCEDURE IF EXISTS `CreaExistenteInicial` $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `CreaExistenteInicial`(idequ int,ctd int)
BEGIN
 declare n int default 1;
 delete from Equi_imple_existente where idequipo_implemento=idequ;
 while n<=ctd do
  insert into Equi_imple_existente(estad,idequipo_implemento,idpedido) values('Activo',idequ,1);
  set n=n+1;
 end while;
END $$

DELIMITER ;