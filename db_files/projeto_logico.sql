-- Table: captura_especie
CREATE TABLE captura_especie (
    id int  NOT NULL,
    peso real  NOT NULL,
    especie_id int  NOT NULL,
    lance_id int  NOT NULL,
    CONSTRAINT captura_especie_pk PRIMARY KEY (id)
);

-- Table: embarcacao
CREATE TABLE embarcacao (
    id int  NOT NULL,
    nome varchar(255)  NOT NULL,
    tamanho real  NOT NULL,
    CONSTRAINT embarcacao_pk PRIMARY KEY (id)
);

-- Table: especie
CREATE TABLE especie (
    id int  NOT NULL,
    nome varchar(255)  NOT NULL,
    profundidade_max real  NOT NULL,
    profundidade_min real  NOT NULL,
    CONSTRAINT especie_pk PRIMARY KEY (id)
);

-- Table: fotografia
CREATE TABLE fotografia (
    id int  NOT NULL,
    especie_id int  NOT NULL,
    dir text  NOT NULL,
    CONSTRAINT fotografia_pk PRIMARY KEY (id)
);

-- Table: lance
CREATE TABLE lance (
    id int  NOT NULL,
    hora_inicio timestamp  NOT NULL,
    hora_fim timestamp  NOT NULL,
    comprimento_rede real  NOT NULL,
    area_total_rede real  NOT NULL,
    tamanho_malha real  NOT NULL,
    profundidade real  NOT NULL,
    latitude real  NOT NULL,
    longitude real  NOT NULL,
    viagem_id int  NOT NULL,
    CONSTRAINT lance_pk PRIMARY KEY (id)
);

-- Table: porto
CREATE TABLE porto (
    id int  NOT NULL,
    nome varchar(255)  NOT NULL,
    administracao char(2)  NOT NULL,
    ano smallint  NOT NULL,
    CONSTRAINT administracao CHECK (administracao IN ('pr','pu')) NOT DEFERRABLE INITIALLY IMMEDIATE,
    CONSTRAINT porto_pk PRIMARY KEY (id)
);

-- Table: viagem
CREATE TABLE viagem (
    id int  NOT NULL,
    embarcacao_id int  NOT NULL,
    porto_inicio_id int  NOT NULL,
    porto_fim_id int  NOT NULL,
    data_inicio timestamp  NOT NULL,
    data_fim timestamp  NOT NULL,
    CONSTRAINT viagem_pk PRIMARY KEY (id)
);

-- Reference: captura_especie (table: captura_especie)
ALTER TABLE captura_especie ADD CONSTRAINT captura_especie
    FOREIGN KEY (especie_id)
    REFERENCES especie (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: captura_lance (table: captura_especie)
ALTER TABLE captura_especie ADD CONSTRAINT captura_lance
    FOREIGN KEY (lance_id)
    REFERENCES lance (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: fotografias_especie (table: fotografia)
ALTER TABLE fotografia ADD CONSTRAINT fotografias_especie
    FOREIGN KEY (especie_id)
    REFERENCES especie (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: lance_viagem (table: lance)
ALTER TABLE lance ADD CONSTRAINT lance_viagem
    FOREIGN KEY (viagem_id)
    REFERENCES viagem (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: viagem_embarcacao (table: viagem)
ALTER TABLE viagem ADD CONSTRAINT viagem_embarcacao
    FOREIGN KEY (embarcacao_id)
    REFERENCES embarcacao (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: viagem_porto (table: viagem)
ALTER TABLE viagem ADD CONSTRAINT viagem_porto
    FOREIGN KEY (porto_fim_id)
    REFERENCES porto (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: viagem_porto2 (table: viagem)
ALTER TABLE viagem ADD CONSTRAINT viagem_porto2
    FOREIGN KEY (porto_inicio_id)
    REFERENCES porto (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;


