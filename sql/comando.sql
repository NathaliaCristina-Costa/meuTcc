ALTER TABLE `cliente` CHANGE `telefoneCleinte` `telefoneCliente` VARCHAR(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;


ALTER TABLE servico ADD CONSTRAINT FK_categoria_idCategoria FOREIGN KEY(id_Categoria) REFERENCES categoria.id_Categoria;