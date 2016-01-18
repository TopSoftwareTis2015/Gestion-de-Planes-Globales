/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     17/01/2016 08:41:55 p.m.                     */
/*==============================================================*/
DROP DATABASE IF EXISTS planesglobales;

CREATE DATABASE planesglobales;

USE planesglobales;

drop table if exists BIBLIOGRAFIA;

drop table if exists CARGAHORARIA;

drop table if exists CARGAHORARIAUNIDAD;

drop table if exists CARRERA;

drop table if exists CONTENIDOADICIONAL;

drop table if exists CONTENIDOSUBTITULO;

drop table if exists DIRECCION;

drop table if exists DOCENTE;

drop table if exists DOCENTEMATERIA;

drop table if exists EMAIL;

drop table if exists ENCABEZADO;

drop table if exists ENLACE;

drop table if exists FACULTAD;

drop table if exists FORMATOPG;

drop table if exists LIBRO;

drop table if exists MATERIA;

drop table if exists MATERIAPLANDEE;

drop table if exists PLANDEESTUDIO;

drop table if exists PLANGLOBAL;

drop table if exists SECCIONADICIONAL;

drop table if exists SUBTITULOSUNIDAD;

drop table if exists TELEFONO;

drop table if exists UNIDAD;

drop table if exists USUARIO;

/*==============================================================*/
/* Table: BIBLIOGRAFIA                                          */
/*==============================================================*/
create table BIBLIOGRAFIA
(
   _IDBIBLIOGRAFIA      int not null auto_increment,
   _IDPLANGLOBAL        int,
   primary key (_IDBIBLIOGRAFIA)
);

alter table BIBLIOGRAFIA comment 'bibliografia';

/*==============================================================*/
/* Table: CARGAHORARIA                                          */
/*==============================================================*/
create table CARGAHORARIA
(
   _TIEMPO              int,
   UNIDADMATERIA        varchar(50),
   _CANTIDAD            int,
   TIEMPOPRACTICO       int,
   IDCARGAHORARIA       int not null auto_increment,
   _IDPLANGLOBAL        int not null,
   primary key (IDCARGAHORARIA)
);

alter table CARGAHORARIA comment 'cargaHoraria';

/*==============================================================*/
/* Table: CARGAHORARIAUNIDAD                                    */
/*==============================================================*/
create table CARGAHORARIAUNIDAD
(
   _ID_CARGAHORARIAUNIDAD int not null auto_increment,
   HORASACADEMICAS      int,
   DURACIONSEMANAS      int,
   primary key (_ID_CARGAHORARIAUNIDAD)
);

alter table CARGAHORARIAUNIDAD comment 'CargaHorariaUnidad';

/*==============================================================*/
/* Table: CARRERA                                               */
/*==============================================================*/
create table CARRERA
(
   IDCARRERA            int not null,
   _IDFACULTAD          int not null,
   NOMCARRERA           varchar(70) not null,
   TIPO                 varchar(30),
   primary key (IDCARRERA)
);

alter table CARRERA comment 'carrera';

/*==============================================================*/
/* Table: CONTENIDOADICIONAL                                    */
/*==============================================================*/
create table CONTENIDOADICIONAL
(
   ID_SECCION           int not null,
   TITULOCONTENIDO      varchar(70),
   OBJETIVOCONTENIDO    text,
   SUBITULOCONTENIDO    varchar(70),
   primary key (ID_SECCION)
);

alter table CONTENIDOADICIONAL comment 'contenidoAdicional';

/*==============================================================*/
/* Table: CONTENIDOSUBTITULO                                    */
/*==============================================================*/
create table CONTENIDOSUBTITULO
(
   _IDSUBITULO          int not null,
   NROCONTENIDO         int not null,
   NOMCONTENIDO         varchar(60) not null,
   primary key (_IDSUBITULO)
);

alter table CONTENIDOSUBTITULO comment 'contenidoSubtitulo';

/*==============================================================*/
/* Table: DIRECCION                                             */
/*==============================================================*/
create table DIRECCION
(
   IDDIRECCION          int not null,
   _IDUSUARIO           int,
   _NOMDIRECCION        varchar(60) not null,
   primary key (IDDIRECCION)
);

alter table DIRECCION comment 'Direccion';

/*==============================================================*/
/* Table: DOCENTE                                               */
/*==============================================================*/
create table DOCENTE
(
   _IDUSUARIO           int not null,
   _NOMBREUSUARIO       varchar(50) not null,
   _CARGO               varchar(50) not null,
   PRIVILEGIOS          varchar(50),
   _TITULAR             bool not null,
   primary key (_IDUSUARIO)
);

alter table DOCENTE comment 'docente';

/*==============================================================*/
/* Table: DOCENTEMATERIA                                        */
/*==============================================================*/
create table DOCENTEMATERIA
(
   _IDUSUARIO           int not null,
   _CODIGOMATERIA       varchar(30) not null,
   _GRUPO               int,
   primary key (_IDUSUARIO, _CODIGOMATERIA)
);

alter table DOCENTEMATERIA comment 'docenteMateria';

/*==============================================================*/
/* Table: EMAIL                                                 */
/*==============================================================*/
create table EMAIL
(
   _IDEMAIL             int not null,
   _IDUSUARIO           int,
   _EMAIL               varchar(50) not null,
   _TIPOCUENTA          varchar(50) not null,
   primary key (_IDEMAIL)
);

alter table EMAIL comment 'email';

/*==============================================================*/
/* Table: ENCABEZADO                                            */
/*==============================================================*/
create table ENCABEZADO
(
   IDENCABEZADO         int not null,
   DESCUNIVERSIDAD      varchar(50),
   DESCFACULTAD         varchar(50),
   DESCDEPARTAMENTO     varchar(50),
   DESCGESTION          varchar(30),
   LOGO                 varchar(500),
   TITULO               varchar(100),
   LEMA                 varchar(200),
   primary key (IDENCABEZADO)
);

alter table ENCABEZADO comment 'encabezado';

/*==============================================================*/
/* Table: ENLACE                                                */
/*==============================================================*/
create table ENLACE
(
   IDENLACE             int not null,
   _IDBIBLIOGRAFIA      int,
   URLENLACE            varchar(100),
   primary key (IDENLACE)
);

alter table ENLACE comment 'enlace';

/*==============================================================*/
/* Table: FACULTAD                                              */
/*==============================================================*/
create table FACULTAD
(
   _IDFACULTAD          int not null,
   NOMFACULTAD          varchar(70) not null,
   SECTOR               varchar(100),
   primary key (_IDFACULTAD)
);

alter table FACULTAD comment 'facultad';

/*==============================================================*/
/* Table: FORMATOPG                                             */
/*==============================================================*/
create table FORMATOPG
(
   _IDFORMATO           int not null auto_increment,
   _IDPLANGLOBAL        int,
   ESTADO               bool not null,
   GESTION              varchar(60) not null,
   primary key (_IDFORMATO)
);

alter table FORMATOPG comment 'formatoPG';

/*==============================================================*/
/* Table: LIBRO                                                 */
/*==============================================================*/
create table LIBRO
(
   IDLIBRO              int not null auto_increment,
   _IDBIBLIOGRAFIA      int,
   NOMLIBRO             varchar(50),
   AUTORLIBRO           varchar(50),
   EDICIONLIBRO         varchar(50),
   primary key (IDLIBRO)
);

alter table LIBRO comment 'libro';

/*==============================================================*/
/* Table: MATERIA                                               */
/*==============================================================*/
create table MATERIA
(
   _CODIGOMATERIA       varchar(30) not null,
   _NOMMATERIA          varchar(50) not null,
   SIGLAMATERIA         varchar(50),
   primary key (_CODIGOMATERIA)
);

alter table MATERIA comment 'materia';

/*==============================================================*/
/* Table: MATERIAPLANDEE                                        */
/*==============================================================*/
create table MATERIAPLANDEE
(
   _CODIGOMATERIA       varchar(30) not null,
   _CODIGOPE            varchar(50) not null,
   _NIVELMATERIA        char(1),
   _PRERREQUISITOS      varchar(50),
   TIPOMATERIA          varchar(50),
   primary key (_CODIGOMATERIA, _CODIGOPE)
);

alter table MATERIAPLANDEE comment 'materiaPlanDeE';

/*==============================================================*/
/* Table: PLANDEESTUDIO                                         */
/*==============================================================*/
create table PLANDEESTUDIO
(
   _CODIGOPE            varchar(50) not null,
   IDCARRERA            int not null,
   _3                   int,
   primary key (_CODIGOPE)
);

alter table PLANDEESTUDIO comment 'planDeEstudio';

/*==============================================================*/
/* Table: PLANGLOBAL                                            */
/*==============================================================*/
create table PLANGLOBAL
(
   _IDPLANGLOBAL        int not null auto_increment,
   _CODIGOMATERIA       varchar(30),
   IDENCABEZADO         int,
   INDICEPLANGLOBAL     text,
   _OBJETIIVOSGENERALES text not null,
   OBJETIVOSESPECIFICOS text not null,
   PROPOSITOS           text not null,
   JUSTIFICACION        text not null,
   primary key (_IDPLANGLOBAL)
);

alter table PLANGLOBAL comment 'planGlobal';

/*==============================================================*/
/* Table: SECCIONADICIONAL                                      */
/*==============================================================*/
create table SECCIONADICIONAL
(
   ID_SECCION           int not null auto_increment,
   _IDPLANGLOBAL        int,
   TITULOSECCION        varchar(70) not null,
   OBJETIVOSECCION      text,
   primary key (ID_SECCION)
);

alter table SECCIONADICIONAL comment 'seccionAdicional';

/*==============================================================*/
/* Table: SUBTITULOSUNIDAD                                      */
/*==============================================================*/
create table SUBTITULOSUNIDAD
(
   _IDSUBITULO          int not null,
   IDUNIDAD             int,
   NOMSUBTITULO         varchar(70) not null,
   primary key (_IDSUBITULO)
);

alter table SUBTITULOSUNIDAD comment 'subtitulosUnidad';

/*==============================================================*/
/* Table: TELEFONO                                              */
/*==============================================================*/
create table TELEFONO
(
   _IDTELEFONO          int not null,
   _IDUSUARIO           int,
   _NUMTELEFONO         int not null,
   primary key (_IDTELEFONO)
);

alter table TELEFONO comment 'telefono';

/*==============================================================*/
/* Table: UNIDAD                                                */
/*==============================================================*/
create table UNIDAD
(
   IDUNIDAD             int not null auto_increment,
   _ID_CARGAHORARIAUNIDAD int,
   _CODIGOMATERIA       varchar(30),
   NROUNIDAD            varchar(30),
   NOMUNIDAD            varchar(50),
   OBJETIVOUNIDAD       varchar(100),
   primary key (IDUNIDAD)
);

alter table UNIDAD comment 'unidad';

/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO
(
   _IDUSUARIO           int not null,
   _NOMBREUSUARIO       varchar(50) not null,
   _CARGO               varchar(50) not null,
   PRIVILEGIOS          varchar(50),
   primary key (_IDUSUARIO)
);

alter table USUARIO comment 'usuario';

alter table BIBLIOGRAFIA add constraint FK_PLANGLOBALBIBLIOGRAFIA foreign key (_IDPLANGLOBAL)
      references PLANGLOBAL (_IDPLANGLOBAL) on delete restrict on update restrict;

alter table CARGAHORARIA add constraint FK_RELATIONSHIP_18 foreign key (_IDPLANGLOBAL)
      references PLANGLOBAL (_IDPLANGLOBAL) on delete restrict on update restrict;

alter table CARRERA add constraint FK_CARRERAFACULTAD foreign key (_IDFACULTAD)
      references FACULTAD (_IDFACULTAD) on delete restrict on update restrict;

alter table CONTENIDOADICIONAL add constraint FK_SECCIONCONETNIDOADICIONAL foreign key (ID_SECCION)
      references SECCIONADICIONAL (ID_SECCION) on delete restrict on update restrict;

alter table CONTENIDOSUBTITULO add constraint FK_SUBTITULOSCONTENIDOSUNIDAD foreign key (_IDSUBITULO)
      references SUBTITULOSUNIDAD (_IDSUBITULO) on delete restrict on update restrict;

alter table DIRECCION add constraint FK_DIRECCIONUSUARIO foreign key (_IDUSUARIO)
      references USUARIO (_IDUSUARIO) on delete restrict on update restrict;

alter table DOCENTE add constraint FK_INHERITANCE_1 foreign key (_IDUSUARIO)
      references USUARIO (_IDUSUARIO) on delete restrict on update restrict;

alter table DOCENTEMATERIA add constraint FK_DOCENTEMATERIA foreign key (_IDUSUARIO)
      references DOCENTE (_IDUSUARIO) on delete restrict on update restrict;

alter table DOCENTEMATERIA add constraint FK_DOCENTEMATERIA2 foreign key (_CODIGOMATERIA)
      references MATERIA (_CODIGOMATERIA) on delete restrict on update restrict;

alter table EMAIL add constraint FK_EMAILUSUARIO foreign key (_IDUSUARIO)
      references USUARIO (_IDUSUARIO) on delete restrict on update restrict;

alter table ENLACE add constraint FK_BIBLIOGRAFIAENLACE foreign key (_IDBIBLIOGRAFIA)
      references BIBLIOGRAFIA (_IDBIBLIOGRAFIA) on delete restrict on update restrict;

alter table FORMATOPG add constraint FK_PLANGLOBALFORMATO foreign key (_IDPLANGLOBAL)
      references PLANGLOBAL (_IDPLANGLOBAL) on delete restrict on update restrict;

alter table LIBRO add constraint FK_BIBLIOGRAFIALIBRO foreign key (_IDBIBLIOGRAFIA)
      references BIBLIOGRAFIA (_IDBIBLIOGRAFIA) on delete restrict on update restrict;

alter table MATERIAPLANDEE add constraint FK_MATERIAPLANDEE foreign key (_CODIGOMATERIA)
      references MATERIA (_CODIGOMATERIA) on delete restrict on update restrict;

alter table MATERIAPLANDEE add constraint FK_MATERIAPLANDEE2 foreign key (_CODIGOPE)
      references PLANDEESTUDIO (_CODIGOPE) on delete restrict on update restrict;

alter table PLANDEESTUDIO add constraint FK_PLANDEESTUDIOCARRERA foreign key (IDCARRERA)
      references CARRERA (IDCARRERA) on delete restrict on update restrict;

alter table PLANGLOBAL add constraint FK_ENCABEZADOPLANGLOBAL foreign key (IDENCABEZADO)
      references ENCABEZADO (IDENCABEZADO) on delete restrict on update restrict;

alter table PLANGLOBAL add constraint FK_MATERIAPLANGLOBAL foreign key (_CODIGOMATERIA)
      references MATERIA (_CODIGOMATERIA) on delete restrict on update restrict;

alter table SECCIONADICIONAL add constraint FK_SECCIONADICIONALPLANGLOBAL foreign key (_IDPLANGLOBAL)
      references PLANGLOBAL (_IDPLANGLOBAL) on delete restrict on update restrict;

alter table SUBTITULOSUNIDAD add constraint FK_UNIDADSUBTITULOS foreign key (IDUNIDAD)
      references UNIDAD (IDUNIDAD) on delete restrict on update restrict;

alter table TELEFONO add constraint FK_TELEFONOUSUARIO foreign key (_IDUSUARIO)
      references USUARIO (_IDUSUARIO) on delete restrict on update restrict;

alter table UNIDAD add constraint FK_RELATIONSHIP_16 foreign key (_CODIGOMATERIA)
      references MATERIA (_CODIGOMATERIA) on delete restrict on update restrict;

alter table UNIDAD add constraint FK_UNIDADCARGAHORARIA foreign key (_ID_CARGAHORARIAUNIDAD)
      references CARGAHORARIAUNIDAD (_ID_CARGAHORARIAUNIDAD) on delete restrict on update restrict;

