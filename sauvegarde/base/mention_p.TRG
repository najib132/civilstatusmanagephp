TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `deces_n` AFTER INSERT ON `mention_p`\n FOR EACH ROW BEGIN\n\nDECLARE d_etrange1 INT;\n\nIF NEW.jugement=12  THEN\nUPDATE  `naissance` SET `mort`=1 WHERE `annee_declaration`=NEW.annee_declaration AND `code`=NEW.code  ;\nSET @d_etrange1 :=(SELECT d_etrange from administration); \nUPDATE  `administration` SET `d_etrange`=1+@d_etrange1 ;\nEND IF;\n\n\nIF NEW.jugement=24  THEN\nUPDATE  `naissance` SET `mort` = 1 WHERE `annee_declaration`=NEW.annee_declaration AND `code`=NEW.code  ;\nEND IF;\n\nEND' 'CREATE DEFINER=`root`@`localhost` TRIGGER `supp_deces_n` BEFORE DELETE ON `mention_p`\n FOR EACH ROW BEGIN\n\nDECLARE d_etrange1 INT;\n\nIF OLD.jugement=12 THEN\nUPDATE  `naissance` SET `mort` = 0 WHERE `annee_declaration`=OLD.annee_declaration AND `code`=OLD.code  ;\nSET @d_etrange1 :=(SELECT d_etrange from administration); \nUPDATE  `administration` SET `d_etrange` = -1+@d_etrange1;\nEND IF;\n\nIF OLD.jugement=24 THEN\nUPDATE  `naissance` SET `mort` = 0 WHERE `annee_declaration`=OLD.annee_declaration AND `code`=OLD.code  ;\nEND IF;\n\nEND'
sql_modes=524288 524288
definers='root@localhost' 'root@localhost'
client_cs_names='utf8' 'utf8'
connection_cl_names='utf8_general_ci' 'utf8_general_ci'
db_cl_names='utf8_general_ci' 'utf8_general_ci'
