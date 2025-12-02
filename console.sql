-- Tabela de Empresas/Agências
CREATE TABLE empresa (
    id_empresa INT AUTO_INCREMENT PRIMARY KEY,
    designacao_social VARCHAR(255) NOT NULL,
    nif VARCHAR(20) UNIQUE NOT NULL,
    morada VARCHAR(500),
    telefone VARCHAR(20),
    fax VARCHAR(20),
    email VARCHAR(100),
    pessoa_contacto VARCHAR(100),
    tipo_empresa ENUM('AGENCIA', 'EMPRESA', 'OUTRO'),
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de Clientes
CREATE TABLE cliente (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    genero ENUM('M', 'F'),
    data_nascimento DATE,
    nif VARCHAR(20) UNIQUE,
    morada VARCHAR(500),
    email VARCHAR(100),
    nacionalidade VARCHAR(50),
    tipo_documento ENUM('BI', 'PASSAPORTE'),
    numero_documento VARCHAR(50) UNIQUE,
    telefone VARCHAR(20),
    id_empresa INT,
    data_registo TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_empresa) REFERENCES empresa(id_empresa) ON DELETE SET NULL
);
-- Tabela de Tipos de Quarto
CREATE TABLE tipo_quarto (
    id_tipo_quarto INT AUTO_INCREMENT PRIMARY KEY,
    designacao VARCHAR(50) NOT NULL,
    descricao TEXT,
    capacidade_adultos INT DEFAULT 1,
    capacidade_criancas INT DEFAULT 0,
    tem_tv ENUM('S', 'N') DEFAULT 'S',
    tem_minibar ENUM('S', 'N') DEFAULT 'S',
    tem_ar_condicionado ENUM('S', 'N') DEFAULT 'S',
    area DECIMAL(5,2),
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de Quartos
CREATE TABLE quarto (
    id_quarto INT AUTO_INCREMENT PRIMARY KEY,
    numero_quarto VARCHAR(10) UNIQUE NOT NULL,
    id_tipo_quarto INT NOT NULL,
    piso INT,
    vista ENUM('MAR', 'CIDADE', 'JARDIM', 'PISCINA', 'OUTRA'),
    estado ENUM('DISPONIVEL', 'OCUPADO', 'SUJO', 'INDISPONIVEL', 'MANUTENCAO') DEFAULT 'DISPONIVEL',
    observacoes TEXT,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_tipo_quarto) REFERENCES tipo_quarto(id_tipo_quarto) ON DELETE RESTRICT
);

-- Tabela de Contratos com Agências (Allotments)
CREATE TABLE contrato_agencia (
    id_contrato INT AUTO_INCREMENT PRIMARY KEY,
    id_empresa INT NOT NULL,
    descricao VARCHAR(255),
    data_inicio DATE NOT NULL,
    data_fim DATE NOT NULL,
    numero_quartos_garantidos INT DEFAULT 0,
    preco_negociado DECIMAL(10,2),
    tipo_quarto VARCHAR(50),
    estado ENUM('ATIVO', 'INATIVO', 'EXPIRADO') DEFAULT 'ATIVO',
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_empresa) REFERENCES empresa(id_empresa) ON DELETE CASCADE
);


/*=====================================================================================*/

-- Tabela de Reservas
CREATE TABLE reserva (
    id_reserva INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    id_contrato INT,
    data_reserva TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_entrada_prevista DATE NOT NULL,
    data_saida_prevista DATE NOT NULL,
    tipo_estadia ENUM('BB', 'HB', 'FB'),
    numero_adultos INT DEFAULT 1,
    numero_criancas INT DEFAULT 0,
    estado ENUM('PENDENTE', 'CONFIRMADA', 'CHECKIN', 'CHECKOUT', 'CANCELADA', 'NOSHOW') DEFAULT 'PENDENTE',
    observacoes TEXT,
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente) ON DELETE RESTRICT,
    FOREIGN KEY (id_contrato) REFERENCES contrato_agencia(id_contrato) ON DELETE SET NULL
);

-- Tabela de Hóspedes por Reserva
CREATE TABLE hospede_reserva (
    id_hospede_reserva INT AUTO_INCREMENT PRIMARY KEY,
    id_reserva INT NOT NULL,
    id_cliente INT NOT NULL,
    data_registo TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_reserva) REFERENCES reserva(id_reserva) ON DELETE CASCADE,
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente) ON DELETE CASCADE,
    UNIQUE KEY unique_hospede_reserva (id_reserva, id_cliente)
);

-- Tabela de Quartos Reservados
CREATE TABLE quarto_reserva (
    id_quarto_reserva INT AUTO_INCREMENT PRIMARY KEY,
    id_reserva INT NOT NULL,
    id_quarto INT NOT NULL,
    id_tipo_quarto INT NOT NULL,
    preco_diario DECIMAL(10,2) NOT NULL,
    data_associacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_reserva) REFERENCES reserva(id_reserva) ON DELETE CASCADE,
    FOREIGN KEY (id_quarto) REFERENCES quarto(id_quarto) ON DELETE RESTRICT,
    FOREIGN KEY (id_tipo_quarto) REFERENCES tipo_quarto(id_tipo_quarto) ON DELETE RESTRICT
);

-- Tabela de Check-in
CREATE TABLE checkin (
    id_checkin INT AUTO_INCREMENT PRIMARY KEY,
    id_reserva INT,
    id_quarto INT NOT NULL,
    data_entrada DATE NOT NULL,
    hora_entrada TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    recepcionista VARCHAR(100),
    observacoes TEXT,
    FOREIGN KEY (id_reserva) REFERENCES reserva(id_reserva) ON DELETE SET NULL,
    FOREIGN KEY (id_quarto) REFERENCES quarto(id_quarto) ON DELETE RESTRICT
);


/*========================================================================================*/

-- Tabela de Faturas
CREATE TABLE factura (
    id_factura INT AUTO_INCREMENT PRIMARY KEY,
    numero_factura VARCHAR(50) UNIQUE NOT NULL,
    id_checkin INT NOT NULL,
    id_cliente INT NOT NULL,
    id_empresa INT,
    data_emissao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    estado ENUM('ABERTA', 'FECHADA', 'PAGA', 'CANCELADA') DEFAULT 'ABERTA',
    valor_total DECIMAL(10,2) DEFAULT 0,
    valor_imposto DECIMAL(10,2) DEFAULT 0,
    valor_liquido DECIMAL(10,2) DEFAULT 0,
    FOREIGN KEY (id_checkin) REFERENCES checkin(id_checkin) ON DELETE RESTRICT,
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente) ON DELETE RESTRICT,
    FOREIGN KEY (id_empresa) REFERENCES empresa(id_empresa) ON DELETE SET NULL
);

-- Tabela de Tipos de Serviço
CREATE TABLE tipo_servico (
    id_tipo_servico INT AUTO_INCREMENT PRIMARY KEY,
    designacao VARCHAR(100) NOT NULL,
    descricao TEXT,
    taxa_imposto DECIMAL(5,2) DEFAULT 0,
    activo ENUM('S', 'N') DEFAULT 'S',
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de Itens de Fatura
CREATE TABLE item_factura (
    id_item_factura INT AUTO_INCREMENT PRIMARY KEY,
    id_factura INT NOT NULL,
    id_tipo_servico INT NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    quantidade DECIMAL(10,2) DEFAULT 1,
    preco_unitario DECIMAL(10,2) NOT NULL,
    valor_imposto DECIMAL(10,2) DEFAULT 0,
    data_servico DATE,
    referencia VARCHAR(100),
    data_registo TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_factura) REFERENCES factura(id_factura) ON DELETE CASCADE,
    FOREIGN KEY (id_tipo_servico) REFERENCES tipo_servico(id_tipo_servico) ON DELETE RESTRICT
);

-- Tabela de Transferências entre Faturas
CREATE TABLE transferencia_factura (
    id_transferencia INT AUTO_INCREMENT PRIMARY KEY,
    id_item_origem INT NOT NULL,
    id_fatura_destino INT NOT NULL,
    data_transferencia TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    utilizador VARCHAR(100),
    observacoes TEXT,
    FOREIGN KEY (id_item_origem) REFERENCES item_factura(id_item_factura) ON DELETE CASCADE,
    FOREIGN KEY (id_fatura_destino) REFERENCES factura(id_factura) ON DELETE CASCADE
);

/*===============================================================================================*/


-- Tabela de Serviços de Telefonia
CREATE TABLE servico_telefone (
    id_servico_telefone INT AUTO_INCREMENT PRIMARY KEY,
    id_quarto INT NOT NULL,
    numero_origem VARCHAR(20),
    numero_destino VARCHAR(20),
    data_chamada DATE,
    hora_inicio DATETIME,
    hora_fim DATETIME,
    duracao_segundos INT,
    numero_impulsos INT,
    custo DECIMAL(10,2),
    processado ENUM('S', 'N') DEFAULT 'N',
    data_registo TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_quarto) REFERENCES quarto(id_quarto) ON DELETE CASCADE
);

-- Tabela de Serviços de Internet
CREATE TABLE servico_internet (
    id_servico_internet INT AUTO_INCREMENT PRIMARY KEY,
    id_quarto INT NOT NULL,
    utilizador VARCHAR(50),
    data_acesso DATE,
    hora_inicio DATETIME,
    hora_fim DATETIME,
    duracao_minutos INT,
    dados_transferidos INT,
    custo DECIMAL(10,2),
    processado ENUM('S', 'N') DEFAULT 'N',
    data_registo TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_quarto) REFERENCES quarto(id_quarto) ON DELETE CASCADE
);

-- Tabela de Consumos de Bar/Restaurante
CREATE TABLE consumo_pos (
    id_consumo INT AUTO_INCREMENT PRIMARY KEY,
    id_quarto INT,
    id_fatura INT,
    tipo_local ENUM('BAR', 'RESTAURANTE'),
    data_consumo DATE,
    hora_consumo TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    descricao VARCHAR(255),
    quantidade DECIMAL(10,2),
    preco_unitario DECIMAL(10,2),
    valor_total DECIMAL(10,2),
    funcionario VARCHAR(100),
    estado ENUM('ABERTO', 'FACTURADO', 'CANCELADO') DEFAULT 'ABERTO',
    FOREIGN KEY (id_quarto) REFERENCES quarto(id_quarto) ON DELETE SET NULL,
    FOREIGN KEY (id_fatura) REFERENCES factura(id_factura) ON DELETE SET NULL
);

/*===================================================================================================**/

-- Tabela de Tabela de Preços
CREATE TABLE tabela_preco (
    id_tabela_preco INT AUTO_INCREMENT PRIMARY KEY,
    id_tipo_quarto INT NOT NULL,
    epoca ENUM('ALTA', 'MEDIA', 'BAIXA'),
    tipo_cliente ENUM('INDIVIDUAL', 'EMPRESA', 'AGENCIA', 'GRUPO'),
    data_inicio DATE,
    data_fim DATE,
    preco_diario DECIMAL(10,2) NOT NULL,
    activo ENUM('S', 'N') DEFAULT 'S',
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_tipo_quarto) REFERENCES tipo_quarto(id_tipo_quarto) ON DELETE CASCADE
);

-- Tabela de Preços de Serviços
CREATE TABLE preco_servico (
    id_preco_servico INT AUTO_INCREMENT PRIMARY KEY,
    id_tipo_servico INT NOT NULL,
    designacao VARCHAR(100),
    preco DECIMAL(10,2) NOT NULL,
    data_inicio DATE,
    data_fim DATE,
    activo ENUM('S', 'N') DEFAULT 'S',
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_tipo_servico) REFERENCES tipo_servico(id_tipo_servico) ON DELETE CASCADE
);

-- Tabela de Configurações do Sistema
CREATE TABLE configuracao_sistema (
    id_configuracao INT AUTO_INCREMENT PRIMARY KEY,
    chave VARCHAR(100) UNIQUE NOT NULL,
    valor VARCHAR(500),
    descricao TEXT,
    data_actualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela de Utilizadores do Sistema
CREATE TABLE utilizador (
    id_utilizador INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    tipo ENUM('RECECIONISTA', 'LIMPEZA', 'DIRECCAO', 'RESTAURANTE', 'BAR', 'QUARTOS'),
    activo ENUM('S', 'N') DEFAULT 'S',
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ultimo_login TIMESTAMP NULL
);

/*================================================================================================*/

-- Índices para consultas frequentes
CREATE INDEX idx_cliente_nif ON cliente(nif);
CREATE INDEX idx_cliente_nome ON cliente(nome);
CREATE INDEX idx_cliente_empresa ON cliente(id_empresa);

CREATE INDEX idx_quarto_numero ON quarto(numero_quarto);
CREATE INDEX idx_quarto_estado ON quarto(estado);
CREATE INDEX idx_quarto_tipo ON quarto(id_tipo_quarto);

CREATE INDEX idx_reserva_datas ON reserva(data_entrada_prevista, data_saida_prevista);
CREATE INDEX idx_reserva_estado ON reserva(estado);
CREATE INDEX idx_reserva_cliente ON reserva(id_cliente);

CREATE INDEX idx_checkin_data ON checkin(data_entrada);
CREATE INDEX idx_checkin_quarto ON checkin(id_quarto);

CREATE INDEX idx_fatura_estado ON factura(estado);
CREATE INDEX idx_fatura_checkin ON factura(id_checkin);
CREATE INDEX idx_fatura_cliente ON factura(id_cliente);

CREATE INDEX idx_item_factura_factura ON item_factura(id_factura);
CREATE INDEX idx_item_factura_servico ON item_factura(id_tipo_servico);

CREATE INDEX idx_servico_telefone_data ON servico_telefone(data_chamada);
CREATE INDEX idx_servico_telefone_quarto ON servico_telefone(id_quarto);

CREATE INDEX idx_consumo_pos_data ON consumo_pos(data_consumo);
CREATE INDEX idx_consumo_pos_quarto ON consumo_pos(id_quarto);
CREATE INDEX idx_consumo_pos_estado ON consumo_pos(estado);

/*===============================================================================================*/

-- Inserir tipos de serviço básicos
INSERT INTO tipo_servico (designacao, descricao, taxa_imposto) VALUES
('ALOJAMENTO', 'Serviço de alojamento em quarto', 6.00),
('RESTAURANTE', 'Serviço de refeições no restaurante', 13.00),
('BAR', 'Serviço de bar e bebidas', 13.00),
('TELEFONE', 'Serviço de telefonia', 23.00),
('INTERNET', 'Serviço de acesso à Internet', 13.00),
('LAVANDARIA', 'Serviço de lavandaria', 13.00),
('ESTACIONAMENTO', 'Serviço de estacionamento', 13.00);

-- Inserir tipos de quarto básicos
INSERT INTO tipo_quarto (designacao, capacidade_adultos, capacidade_criancas, area) VALUES
('SINGLE', 1, 0, 18.00),
('DOUBLE', 2, 1, 25.00),
('TWIN', 2, 0, 25.00),
('SUITE', 2, 2, 45.00),
('FAMILY', 2, 2, 35.00);

-- Inserir quartos de exemplo
INSERT INTO quarto (numero_quarto, id_tipo_quarto, piso, vista) VALUES
('101', 1, 1, 'JARDIM'),
('102', 1, 1, 'JARDIM'),
('201', 2, 2, 'CIDADE'),
('202', 2, 2, 'CIDADE'),
('301', 3, 3, 'MAR'),
('302', 4, 3, 'MAR');

-- Inserir configurações do sistema
INSERT INTO configuracao_sistema (chave, valor, descricao) VALUES
('preco_impulso_telefone', '0.10', 'Preço por impulso telefónico'),
('preco_internet_dia', '5.00', 'Preço do acesso à Internet por dia'),
('taxa_iva_normal', '23.00', 'Taxa de IVA normal'),
('taxa_iva_intermediaria', '13.00', 'Taxa de IVA intermédia'),
('taxa_iva_reduzida', '6.00', 'Taxa de IVA reduzida'),
('email_recepcao', 'recepcao@hotel.com', 'Email da recepção'),
('telefone_hotel', '+351 123 456 789', 'Telefone do hotel');

-- Inserir utilizador admin
INSERT INTO utilizador (username, password_hash, nome, email, tipo) VALUES
('admin', 'adm1n', 'Administrador', 'admin@kenyel.co.ao', 'DIRECCAO');



/*=========================================================================================================================*/

-- Trigger para actualizar estado do quarto no check-in
DELIMITER //
CREATE TRIGGER after_checkin_insert
AFTER INSERT ON checkin
FOR EACH ROW
BEGIN
    UPDATE quarto SET estado = 'OCUPADO' WHERE id_quarto = NEW.id_quarto;

    -- Atualizar estado da reserva se existir
    IF NEW.id_reserva IS NOT NULL THEN
        UPDATE reserva SET estado = 'CHECKIN' WHERE id_reserva = NEW.id_reserva;
    END IF;
END//DELIMITER ;

-- Trigger para atualizar valores da fatura
DELIMITER //
CREATE TRIGGER after_item_factura_insert
AFTER INSERT ON item_factura
FOR EACH ROW
BEGIN
    DECLARE total_imposto DECIMAL(10,2);
    DECLARE total_liquido DECIMAL(10,2);

    SELECT SUM(valor_imposto), SUM(quantidade * preco_unitario)
    INTO total_imposto, total_liquido
    FROM item_factura
    WHERE id_factura = NEW.id_factura;

    UPDATE factura
    SET valor_imposto = COALESCE(total_imposto, 0),
        valor_liquido = COALESCE(total_liquido, 0),
        valor_total = COALESCE(total_liquido, 0) + COALESCE(total_imposto, 0)
    WHERE id_factura = NEW.id_factura;
END//
DELIMITER ;

-- Procedure para check-out
DELIMITER //
CREATE PROCEDURE realizar_checkout(
    IN p_id_checkin INT,
    IN p_id_quarto INT,
    IN p_observacoes TEXT
)
BEGIN
    DECLARE v_id_reserva INT;

    -- Obter ID da reserva
    SELECT id_reserva INTO v_id_reserva FROM checkin WHERE id_checkin = p_id_checkin;

    -- Atualizar estado do quarto para sujo
    UPDATE quarto SET estado = 'SUJO' WHERE id_quarto = p_id_quarto;

    -- Atualizar estado da reserva
    IF v_id_reserva IS NOT NULL THEN
        UPDATE reserva SET estado = 'CHECKOUT' WHERE id_reserva = v_id_reserva;
    END IF;

    -- Fechar fatura
    UPDATE factura
    SET estado = 'FECHADA'
    WHERE id_checkin = p_id_checkin AND estado = 'ABERTA';

END//
DELIMITER ;

/*=======================================================================================================*/