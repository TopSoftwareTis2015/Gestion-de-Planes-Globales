/*==============================================================*/
/* DBMS name:      PostgreSQL 8                                 */
/* Created on:     15/02/2016 10:40:55                          */
/*==============================================================*/


drop index RELATIONSHIP_21_FK;

drop index BIBLIOGRAFIAS_PK;

drop table BIBLIOGRAFIAS;

drop index RELATIONSHIP_20_FK;

drop index CAPITULO_PK;

drop table CAPITULO;

drop index CARGA_HORARIAS_PK;

drop table CARGA_HORARIAS;

drop index CARRERAS_PK;

drop table CARRERAS;

drop index RELATIONSHIP_24_FK;

drop index CICLOS_PK;

drop table CICLOS;

drop index RELATIONSHIP_15_FK;

drop index CONTENIDOS_SECCION_PK;

drop table CONTENIDOS_SECCION;

drop index DOCENTES_PK;

drop table DOCENTES;

drop index RELATIONSHIP_13_FK;

drop index RELATIONSHIP_14_FK;

drop index RELATIONSHIP_12_FK;

drop index GRUPOS_PK;

drop table GRUPOS;

drop index MATERIAS_PK;

drop table MATERIAS;

drop index RELATIONSHIP_25_FK;

drop index NIVELES_PK;

drop table NIVELES;

drop index RELATIONSHIP_27_FK;

drop index RELATIONSHIP_26_FK;

drop index NIVELES_MATERIAS_PK;

drop table NIVELES_MATERIAS;

drop index RELATIONSHIP_17_FK;

drop index OBJETIVOS_ESPECIFICOS_PK;

drop table OBJETIVOS_ESPECIFICOS;

drop index RELATIONSHIP_18_FK;

drop index OBJETIVOS_GENERALES_PK;

drop table OBJETIVOS_GENERALES;

drop index PLANES_GLOBALES_PK;

drop table PLANES_GLOBALES;

drop index RELATIONSHIP_8_FK;

drop index PLAN_DE_ESTUDIOS_PK;

drop table PLAN_DE_ESTUDIOS;

drop index PREREQUISITO_PK;

drop table PREREQUISITO;

drop index RELATIONSHIP_16_FK;

drop index SECCIONES_ADICIONALES_PK;

drop table SECCIONES_ADICIONALES;

drop index SUBTITULO_PK;

drop table SUBTITULO;

drop index RELATIONSHIP_23_FK;

drop index SUBTITULOS_CONTENIDO_SECCION_PK;

drop table SUBTITULOS_CONTENIDO_SECCION;

drop index RELATIONSHIP_19_FK;

drop index UNIDAD_PK;

drop table UNIDAD;

/*==============================================================*/
/* Table: BIBLIOGRAFIAS                                         */
/*==============================================================*/
create table BIBLIOGRAFIAS (
   ID_PG                INT4                 not null,
   ID_BIBLIOGRAFIA      SERIAL               not null,
   NOMBRE_LIBRO         VARCHAR(200)         not null,
   AUTOR_LIBRO          VARCHAR(200)         not null,
   TIPO_LIBRO           VARCHAR(30)          not null,
   constraint PK_BIBLIOGRAFIAS primary key (ID_PG, ID_BIBLIOGRAFIA)
);

/*==============================================================*/
/* Index: BIBLIOGRAFIAS_PK                                      */
/*==============================================================*/
create unique index BIBLIOGRAFIAS_PK on BIBLIOGRAFIAS (
ID_PG,
ID_BIBLIOGRAFIA
);

/*==============================================================*/
/* Index: RELATIONSHIP_21_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_21_FK on BIBLIOGRAFIAS (
ID_PG
);

/*==============================================================*/
/* Table: CAPITULO                                              */
/*==============================================================*/
create table CAPITULO (
   ID_PG                INT4                 not null,
   ID_UNIDAD            INT4                 not null,
   ID_CAPITULO          SERIAL               not null,
   TITULO_CAPITULO      VARCHAR(200)         not null,
   constraint PK_CAPITULO primary key (ID_PG, ID_UNIDAD, ID_CAPITULO)
);

/*==============================================================*/
/* Index: CAPITULO_PK                                           */
/*==============================================================*/
create unique index CAPITULO_PK on CAPITULO (
ID_PG,
ID_UNIDAD,
ID_CAPITULO
);

/*==============================================================*/
/* Index: RELATIONSHIP_20_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_20_FK on CAPITULO (
ID_PG,
ID_UNIDAD
);

/*==============================================================*/
/* Table: CARGA_HORARIAS                                        */
/*==============================================================*/
create table CARGA_HORARIAS (
   ID_PG                INT4                 not null,
   HORAS_SEMESTRE       INT4                 null,
   HORAS_SEMANA         INT4                 null,
   HORAS_TEORICAS_SEMANA INT4                 null,
   HORAS_PRACTICAS_SEMANA INT4                 null,
   PERIODO_SEMANA       INT4                 null,
   PERIODOS_TEORICOS_SEMANA INT4                 null,
   PERIODOS_PRACTICO_SEMANA INT4                 null,
   constraint PK_CARGA_HORARIAS primary key (ID_PG)
);

/*==============================================================*/
/* Index: CARGA_HORARIAS_PK                                     */
/*==============================================================*/
create unique index CARGA_HORARIAS_PK on CARGA_HORARIAS (
ID_PG
);

/*==============================================================*/
/* Table: CARRERAS                                              */
/*==============================================================*/
create table CARRERAS (
   NOMBRE               VARCHAR(30)          not null,
   TIPO                 VARCHAR(30)          not null,
   ANIO_CARRERA         INT4                 not null,
   HABILITADA_CARRERA   BOOL                 null,
   constraint PK_CARRERAS primary key (NOMBRE)
);

/*==============================================================*/
/* Index: CARRERAS_PK                                           */
/*==============================================================*/
create unique index CARRERAS_PK on CARRERAS (
NOMBRE
);

/*==============================================================*/
/* Table: CICLOS                                                */
/*==============================================================*/
create table CICLOS (
   CODIGO_PLAN_ESTUDIO  INT4                 not null,
   ID_CICLO             SERIAL               not null,
   NOMBRE_CICLO         VARCHAR(70)          not null,
   constraint PK_CICLOS primary key (CODIGO_PLAN_ESTUDIO, ID_CICLO)
);

/*==============================================================*/
/* Index: CICLOS_PK                                             */
/*==============================================================*/
create unique index CICLOS_PK on CICLOS (
CODIGO_PLAN_ESTUDIO,
ID_CICLO
);

/*==============================================================*/
/* Index: RELATIONSHIP_24_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_24_FK on CICLOS (
CODIGO_PLAN_ESTUDIO
);

/*==============================================================*/
/* Table: CONTENIDOS_SECCION                                    */
/*==============================================================*/
create table CONTENIDOS_SECCION (
   ID_PG                INT4                 not null,
   ID_SECCION           INT4                 not null,
   ID_CONTENIDO         SERIAL               not null,
   TITULO_CONTENIDO     VARCHAR(150)         null,
   NUMERO_CONTENIDO     INT4                 null,
   DESCRIPCION_CONTENIDO VARCHAR(350)         null,
   constraint PK_CONTENIDOS_SECCION primary key (ID_PG, ID_SECCION, ID_CONTENIDO)
);

/*==============================================================*/
/* Index: CONTENIDOS_SECCION_PK                                 */
/*==============================================================*/
create unique index CONTENIDOS_SECCION_PK on CONTENIDOS_SECCION (
ID_PG,
ID_SECCION,
ID_CONTENIDO
);

/*==============================================================*/
/* Index: RELATIONSHIP_15_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_15_FK on CONTENIDOS_SECCION (
ID_PG,
ID_SECCION
);

/*==============================================================*/
/* Table: DOCENTES                                              */
/*==============================================================*/
create table DOCENTES (
   ID_USUARIO           SERIAL               not null,
   TITULAR              BOOL                 null,
   NOMBRE_USUARIO       VARCHAR(50)          not null,
   NUMERO_FIJO_USUARIO  INT4                 null,
   NUMERO_MOVIL_USUARIO INT4                 not null,
   CORREO_USUARIO       VARCHAR(70)          not null,
   HABILITADO_USUARIO   BOOL                 null,
   constraint PK_DOCENTES primary key (ID_USUARIO)
);

/*==============================================================*/
/* Index: DOCENTES_PK                                           */
/*==============================================================*/
create unique index DOCENTES_PK on DOCENTES (
ID_USUARIO
);

/*==============================================================*/
/* Table: GRUPOS                                                */
/*==============================================================*/
create table GRUPOS (
   CODIGO_MATERIA       VARCHAR(50)          not null,
   ID_USUARIO           INT4                 not null,
   GRUPO                INT4                 not null,
   ID_PG                INT4                 null,
   constraint PK_GRUPOS primary key (CODIGO_MATERIA, ID_USUARIO, GRUPO)
);

/*==============================================================*/
/* Index: GRUPOS_PK                                             */
/*==============================================================*/
create unique index GRUPOS_PK on GRUPOS (
CODIGO_MATERIA,
ID_USUARIO,
GRUPO
);

/*==============================================================*/
/* Index: RELATIONSHIP_12_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_12_FK on GRUPOS (
CODIGO_MATERIA
);

/*==============================================================*/
/* Index: RELATIONSHIP_14_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_14_FK on GRUPOS (
ID_PG
);

/*==============================================================*/
/* Index: RELATIONSHIP_13_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_13_FK on GRUPOS (
ID_USUARIO
);

/*==============================================================*/
/* Table: MATERIAS                                              */
/*==============================================================*/
create table MATERIAS (
   CODIGO_MATERIA       VARCHAR(50)          not null,
   NOMBRE_MATERIA       VARCHAR(50)          not null,
   SIGLA_MATERIA        VARCHAR(50)          not null,
   HABILITADA_MATERIA   BOOL                 null,
   constraint PK_MATERIAS primary key (CODIGO_MATERIA)
);

/*==============================================================*/
/* Index: MATERIAS_PK                                           */
/*==============================================================*/
create unique index MATERIAS_PK on MATERIAS (
CODIGO_MATERIA
);

/*==============================================================*/
/* Table: NIVELES                                               */
/*==============================================================*/
create table NIVELES (
   CODIGO_PLAN_ESTUDIO  INT4                 not null,
   ID_CICLO             INT4                 not null,
   NUMERO_NIVEL         INT4                 not null,
   constraint PK_NIVELES primary key (CODIGO_PLAN_ESTUDIO, ID_CICLO, NUMERO_NIVEL)
);

/*==============================================================*/
/* Index: NIVELES_PK                                            */
/*==============================================================*/
create unique index NIVELES_PK on NIVELES (
CODIGO_PLAN_ESTUDIO,
ID_CICLO,
NUMERO_NIVEL
);

/*==============================================================*/
/* Index: RELATIONSHIP_25_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_25_FK on NIVELES (
CODIGO_PLAN_ESTUDIO,
ID_CICLO
);

/*==============================================================*/
/* Table: NIVELES_MATERIAS                                      */
/*==============================================================*/
create table NIVELES_MATERIAS (
   CODIGO_PLAN_ESTUDIO  INT4                 not null,
   ID_CICLO             INT4                 not null,
   NUMERO_NIVEL         INT4                 not null,
   CODIGO_MATERIA       VARCHAR(50)          not null,
   constraint PK_NIVELES_MATERIAS primary key (CODIGO_PLAN_ESTUDIO, ID_CICLO, NUMERO_NIVEL, CODIGO_MATERIA)
);

/*==============================================================*/
/* Index: NIVELES_MATERIAS_PK                                   */
/*==============================================================*/
create unique index NIVELES_MATERIAS_PK on NIVELES_MATERIAS (
CODIGO_PLAN_ESTUDIO,
ID_CICLO,
NUMERO_NIVEL,
CODIGO_MATERIA
);

/*==============================================================*/
/* Index: RELATIONSHIP_26_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_26_FK on NIVELES_MATERIAS (
CODIGO_PLAN_ESTUDIO,
ID_CICLO,
NUMERO_NIVEL
);

/*==============================================================*/
/* Index: RELATIONSHIP_27_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_27_FK on NIVELES_MATERIAS (
CODIGO_MATERIA
);

/*==============================================================*/
/* Table: OBJETIVOS_ESPECIFICOS                                 */
/*==============================================================*/
create table OBJETIVOS_ESPECIFICOS (
   ID_PG                INT4                 not null,
   ID_OBJETIVO_ESPECIFICO SERIAL               not null,
   TITULO_OBJETIVO_ESPECIFICO VARCHAR(250)         not null,
   DESCRIPCION_OBJETIVO_ESPECIFICO TEXT                 null,
   constraint PK_OBJETIVOS_ESPECIFICOS primary key (ID_PG, ID_OBJETIVO_ESPECIFICO)
);

/*==============================================================*/
/* Index: OBJETIVOS_ESPECIFICOS_PK                              */
/*==============================================================*/
create unique index OBJETIVOS_ESPECIFICOS_PK on OBJETIVOS_ESPECIFICOS (
ID_PG,
ID_OBJETIVO_ESPECIFICO
);

/*==============================================================*/
/* Index: RELATIONSHIP_17_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_17_FK on OBJETIVOS_ESPECIFICOS (
ID_PG
);

/*==============================================================*/
/* Table: OBJETIVOS_GENERALES                                   */
/*==============================================================*/
create table OBJETIVOS_GENERALES (
   ID_PG                INT4                 not null,
   ID_OBJETIVO_GENERAL  SERIAL               not null,
   TITULO_OBJETIVO_GENERAL VARCHAR(250)         not null,
   DESCRIPCION_OBJETIVO_GENERAL TEXT                 null,
   constraint PK_OBJETIVOS_GENERALES primary key (ID_PG, ID_OBJETIVO_GENERAL)
);

/*==============================================================*/
/* Index: OBJETIVOS_GENERALES_PK                                */
/*==============================================================*/
create unique index OBJETIVOS_GENERALES_PK on OBJETIVOS_GENERALES (
ID_PG,
ID_OBJETIVO_GENERAL
);

/*==============================================================*/
/* Index: RELATIONSHIP_18_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_18_FK on OBJETIVOS_GENERALES (
ID_PG
);

/*==============================================================*/
/* Table: PLANES_GLOBALES                                       */
/*==============================================================*/
create table PLANES_GLOBALES (
   ID_PG                SERIAL               not null,
   TITULO               VARCHAR(100)         null,
   JUSTIFICACION        TEXT                 not null,
   METODOLOGIAS         TEXT                 null,
   CRITERIOS_EVALUACION TEXT                 null,
   HABILITADO_PLAN_GLOBAL BOOL                 null,
   GESTION_PG           VARCHAR(15)          null,
   constraint PK_PLANES_GLOBALES primary key (ID_PG)
);

/*==============================================================*/
/* Index: PLANES_GLOBALES_PK                                    */
/*==============================================================*/
create unique index PLANES_GLOBALES_PK on PLANES_GLOBALES (
ID_PG
);

/*==============================================================*/
/* Table: PLAN_DE_ESTUDIOS                                      */
/*==============================================================*/
create table PLAN_DE_ESTUDIOS (
   CODIGO_PLAN_ESTUDIO  INT4                 not null,
   NOMBRE               VARCHAR(30)          null,
   NUMERO_MATERIAS      INT4                 not null,
   GESTION_PLAN_ESTUDIO VARCHAR(8)           not null,
   HABILITADO_PLAN_ESTUDIO BOOL                 null,
   constraint PK_PLAN_DE_ESTUDIOS primary key (CODIGO_PLAN_ESTUDIO)
);

/*==============================================================*/
/* Index: PLAN_DE_ESTUDIOS_PK                                   */
/*==============================================================*/
create unique index PLAN_DE_ESTUDIOS_PK on PLAN_DE_ESTUDIOS (
CODIGO_PLAN_ESTUDIO
);

/*==============================================================*/
/* Index: RELATIONSHIP_8_FK                                     */
/*==============================================================*/
create  index RELATIONSHIP_8_FK on PLAN_DE_ESTUDIOS (
NOMBRE
);

/*==============================================================*/
/* Table: PREREQUISITO                                          */
/*==============================================================*/
create table PREREQUISITO (
   CODIGO_PLAN_ESTUDIO  INT4                 not null,
   ID_CICLO             INT4                 not null,
   NUMERO_NIVEL         INT4                 not null,
   CODIGO_MATERIA       VARCHAR(50)          not null,
   MATERIA_PREREQUISITO VARCHAR(50)          null,
   constraint PK_PREREQUISITO primary key (CODIGO_PLAN_ESTUDIO, ID_CICLO, NUMERO_NIVEL, CODIGO_MATERIA)
);

/*==============================================================*/
/* Index: PREREQUISITO_PK                                       */
/*==============================================================*/
create unique index PREREQUISITO_PK on PREREQUISITO (
CODIGO_PLAN_ESTUDIO,
ID_CICLO,
NUMERO_NIVEL,
CODIGO_MATERIA
);

/*==============================================================*/
/* Table: SECCIONES_ADICIONALES                                 */
/*==============================================================*/
create table SECCIONES_ADICIONALES (
   ID_PG                INT4                 not null,
   ID_SECCION           SERIAL               not null,
   NUMERO_SECCION       INT4                 null,
   TITULO_SECCION       VARCHAR(150)         null,
   OBJETIVO_SECCION     VARCHAR(300)         null,
   constraint PK_SECCIONES_ADICIONALES primary key (ID_PG, ID_SECCION)
);

/*==============================================================*/
/* Index: SECCIONES_ADICIONALES_PK                              */
/*==============================================================*/
create unique index SECCIONES_ADICIONALES_PK on SECCIONES_ADICIONALES (
ID_PG,
ID_SECCION
);

/*==============================================================*/
/* Index: RELATIONSHIP_16_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_16_FK on SECCIONES_ADICIONALES (
ID_PG
);

/*==============================================================*/
/* Table: SUBTITULO                                             */
/*==============================================================*/
create table SUBTITULO (
   ID_PG                INT4                 not null,
   ID_UNIDAD            INT4                 not null,
   ID_CAPITULO          INT4                 not null,
   SUBTITULO            VARCHAR(200)         null,
   ID_SUBTITULO         SERIAL               null,
   constraint PK_SUBTITULO primary key (ID_PG, ID_UNIDAD, ID_CAPITULO)
);

/*==============================================================*/
/* Index: SUBTITULO_PK                                          */
/*==============================================================*/
create unique index SUBTITULO_PK on SUBTITULO (
ID_PG,
ID_UNIDAD,
ID_CAPITULO
);

/*==============================================================*/
/* Table: SUBTITULOS_CONTENIDO_SECCION                          */
/*==============================================================*/
create table SUBTITULOS_CONTENIDO_SECCION (
   ID_PG                INT4                 not null,
   ID_SECCION           INT4                 not null,
   ID_CONTENIDO         INT4                 not null,
   ID_SUBTITULO_SECCION SERIAL               not null,
   SUBTITULO_SECCION    VARCHAR(150)         null,
   constraint PK_SUBTITULOS_CONTENIDO_SECCIO primary key (ID_PG, ID_SECCION, ID_CONTENIDO, ID_SUBTITULO_SECCION)
);

/*==============================================================*/
/* Index: SUBTITULOS_CONTENIDO_SECCION_PK                       */
/*==============================================================*/
create unique index SUBTITULOS_CONTENIDO_SECCION_PK on SUBTITULOS_CONTENIDO_SECCION (
ID_PG,
ID_SECCION,
ID_CONTENIDO,
ID_SUBTITULO_SECCION
);

/*==============================================================*/
/* Index: RELATIONSHIP_23_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_23_FK on SUBTITULOS_CONTENIDO_SECCION (
ID_PG,
ID_SECCION,
ID_CONTENIDO
);

/*==============================================================*/
/* Table: UNIDAD                                                */
/*==============================================================*/
create table UNIDAD (
   ID_PG                INT4                 not null,
   ID_UNIDAD            SERIAL               not null,
   TITULO_UNIDAD        VARCHAR(200)         not null,
   OBJETIVO_UNIDAD      TEXT                 null,
   NUMERO_UNIDAD        VARCHAR(30)          null,
   DURACION_HORAS_ACADEMICAS INT4                 null,
   DURACION_SEMANAS     INT4                 null,
   constraint PK_UNIDAD primary key (ID_PG, ID_UNIDAD)
);

/*==============================================================*/
/* Index: UNIDAD_PK                                             */
/*==============================================================*/
create unique index UNIDAD_PK on UNIDAD (
ID_PG,
ID_UNIDAD
);

/*==============================================================*/
/* Index: RELATIONSHIP_19_FK                                    */
/*==============================================================*/
create  index RELATIONSHIP_19_FK on UNIDAD (
ID_PG
);

alter table BIBLIOGRAFIAS
   add constraint FK_BIBLIOGR_RELATIONS_PLANES_G foreign key (ID_PG)
      references PLANES_GLOBALES (ID_PG)
      on delete restrict on update restrict;

alter table CAPITULO
   add constraint FK_CAPITULO_RELATIONS_UNIDAD foreign key (ID_PG, ID_UNIDAD)
      references UNIDAD (ID_PG, ID_UNIDAD)
      on delete restrict on update restrict;

alter table CARGA_HORARIAS
   add constraint FK_CARGA_HO_RELATIONS_PLANES_G foreign key (ID_PG)
      references PLANES_GLOBALES (ID_PG)
      on delete restrict on update restrict;

alter table CICLOS
   add constraint FK_CICLOS_RELATIONS_PLAN_DE_ foreign key (CODIGO_PLAN_ESTUDIO)
      references PLAN_DE_ESTUDIOS (CODIGO_PLAN_ESTUDIO)
      on delete restrict on update restrict;

alter table CONTENIDOS_SECCION
   add constraint FK_CONTENID_RELATIONS_SECCIONE foreign key (ID_PG, ID_SECCION)
      references SECCIONES_ADICIONALES (ID_PG, ID_SECCION)
      on delete restrict on update restrict;

alter table GRUPOS
   add constraint FK_GRUPOS_RELATIONS_MATERIAS foreign key (CODIGO_MATERIA)
      references MATERIAS (CODIGO_MATERIA)
      on delete restrict on update restrict;

alter table GRUPOS
   add constraint FK_GRUPOS_RELATIONS_DOCENTES foreign key (ID_USUARIO)
      references DOCENTES (ID_USUARIO)
      on delete restrict on update restrict;

alter table GRUPOS
   add constraint FK_GRUPOS_RELATIONS_PLANES_G foreign key (ID_PG)
      references PLANES_GLOBALES (ID_PG)
      on delete restrict on update restrict;

alter table NIVELES
   add constraint FK_NIVELES_RELATIONS_CICLOS foreign key (CODIGO_PLAN_ESTUDIO, ID_CICLO)
      references CICLOS (CODIGO_PLAN_ESTUDIO, ID_CICLO)
      on delete restrict on update restrict;

alter table NIVELES_MATERIAS
   add constraint FK_NIVELES__RELATIONS_NIVELES foreign key (CODIGO_PLAN_ESTUDIO, ID_CICLO, NUMERO_NIVEL)
      references NIVELES (CODIGO_PLAN_ESTUDIO, ID_CICLO, NUMERO_NIVEL)
      on delete restrict on update restrict;

alter table NIVELES_MATERIAS
   add constraint FK_NIVELES__RELATIONS_MATERIAS foreign key (CODIGO_MATERIA)
      references MATERIAS (CODIGO_MATERIA)
      on delete restrict on update restrict;

alter table OBJETIVOS_ESPECIFICOS
   add constraint FK_OBJETIVO_RELATIONS_PLANES_G foreign key (ID_PG)
      references PLANES_GLOBALES (ID_PG)
      on delete restrict on update restrict;

alter table OBJETIVOS_GENERALES
   add constraint FK_OBJETIVO_RELATIONS_PLANES_G foreign key (ID_PG)
      references PLANES_GLOBALES (ID_PG)
      on delete restrict on update restrict;

alter table PLAN_DE_ESTUDIOS
   add constraint FK_PLAN_DE__RELATIONS_CARRERAS foreign key (NOMBRE)
      references CARRERAS (NOMBRE)
      on delete restrict on update restrict;

alter table PREREQUISITO
   add constraint FK_PREREQUI_RELATIONS_NIVELES_ foreign key (CODIGO_PLAN_ESTUDIO, ID_CICLO, NUMERO_NIVEL, CODIGO_MATERIA)
      references NIVELES_MATERIAS (CODIGO_PLAN_ESTUDIO, ID_CICLO, NUMERO_NIVEL, CODIGO_MATERIA)
      on delete restrict on update restrict;

alter table SECCIONES_ADICIONALES
   add constraint FK_SECCIONE_RELATIONS_PLANES_G foreign key (ID_PG)
      references PLANES_GLOBALES (ID_PG)
      on delete restrict on update restrict;

alter table SUBTITULO
   add constraint FK_SUBTITUL_RELATIONS_CAPITULO foreign key (ID_PG, ID_UNIDAD, ID_CAPITULO)
      references CAPITULO (ID_PG, ID_UNIDAD, ID_CAPITULO)
      on delete restrict on update restrict;

alter table SUBTITULOS_CONTENIDO_SECCION
   add constraint FK_SUBTITUL_RELATIONS_CONTENID foreign key (ID_PG, ID_SECCION, ID_CONTENIDO)
      references CONTENIDOS_SECCION (ID_PG, ID_SECCION, ID_CONTENIDO)
      on delete restrict on update restrict;

alter table UNIDAD
   add constraint FK_UNIDAD_RELATIONS_PLANES_G foreign key (ID_PG)
      references PLANES_GLOBALES (ID_PG)
      on delete restrict on update restrict;

