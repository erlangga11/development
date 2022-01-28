--
-- NOTE:
--
-- File paths need to be edited. Search for $$PATH$$ and
-- replace it with the path to the directory containing
-- the extracted data files.
--
--
-- PostgreSQL database dump
--

-- Dumped from database version 12.3
-- Dumped by pg_dump version 12.3

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE pku;
--
-- Name: pku; Type: DATABASE; Schema: -; Owner: icore
--

CREATE DATABASE pku WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_Indonesia.1252' LC_CTYPE = 'English_Indonesia.1252' TABLESPACE = pku;


ALTER DATABASE pku OWNER TO icore;

\connect pku

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: sq_asset; Type: SEQUENCE; Schema: public; Owner: icore
--

CREATE SEQUENCE public.sq_asset
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sq_asset OWNER TO icore;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: asset; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.asset (
    no integer DEFAULT nextval('public.sq_asset'::regclass) NOT NULL,
    assetnum character varying(50) NOT NULL,
    description character varying(250) NOT NULL,
    parent character varying(50) NOT NULL,
    status character varying(15),
    unitid character varying(2),
    siteid character varying(4)
);


ALTER TABLE public.asset OWNER TO icore;

--
-- Name: chf; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.chf (
    no integer,
    tanggal timestamp without time zone NOT NULL,
    peralatan character varying(30) NOT NULL,
    ujin character varying(10),
    ujrb character varying(10),
    ujpt character varying(10),
    ujpc character varying(10),
    ujta character varying(10),
    keterangan character varying(500),
    target character varying(300)
);


ALTER TABLE public.chf OWNER TO icore;

--
-- Name: sq_equip_cmms; Type: SEQUENCE; Schema: public; Owner: icore
--

CREATE SEQUENCE public.sq_equip_cmms
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sq_equip_cmms OWNER TO icore;

--
-- Name: equip_cmms; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.equip_cmms (
    id integer DEFAULT nextval('public.sq_equip_cmms'::regclass) NOT NULL,
    equipno character varying(20) NOT NULL,
    equipno_cmms character varying(30) NOT NULL,
    siteid character varying(10) NOT NULL
);


ALTER TABLE public.equip_cmms OWNER TO icore;

--
-- Name: sq_equip_pdm; Type: SEQUENCE; Schema: public; Owner: icore
--

CREATE SEQUENCE public.sq_equip_pdm
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sq_equip_pdm OWNER TO icore;

--
-- Name: equip_pdm; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.equip_pdm (
    id integer DEFAULT nextval('public.sq_equip_pdm'::regclass) NOT NULL,
    equipno character varying(20) NOT NULL,
    equipno_pdm character varying(30) NOT NULL,
    siteid character varying(10) NOT NULL
);


ALTER TABLE public.equip_pdm OWNER TO icore;

--
-- Name: sq_equipment; Type: SEQUENCE; Schema: public; Owner: icore
--

CREATE SEQUENCE public.sq_equipment
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sq_equipment OWNER TO icore;

--
-- Name: equipment; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.equipment (
    id integer DEFAULT nextval('public.sq_equipment'::regclass) NOT NULL,
    equipno character varying(20) NOT NULL,
    diskripsi character varying(100),
    parent character varying(20),
    bobot numeric(3,2),
    relasi character varying(1),
    nilai_wo numeric(5,2),
    level numeric,
    siteid character varying(10) NOT NULL,
    eq character varying(1),
    unitid character varying(10),
    eqpdm character varying(1),
    nilai_pdm numeric(5,2),
    nilai numeric(5,2)
);


ALTER TABLE public.equipment OWNER TO icore;

--
-- Name: sq_log_data; Type: SEQUENCE; Schema: public; Owner: icore
--

CREATE SEQUENCE public.sq_log_data
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sq_log_data OWNER TO icore;

--
-- Name: log_data; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.log_data (
    id integer DEFAULT nextval('public.sq_log_data'::regclass) NOT NULL,
    date_rec timestamp with time zone,
    record smallint,
    namafile character varying(100),
    siteid character varying(6)
);


ALTER TABLE public.log_data OWNER TO icore;

--
-- Name: sq_pdmid; Type: SEQUENCE; Schema: public; Owner: icore
--

CREATE SEQUENCE public.sq_pdmid
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sq_pdmid OWNER TO icore;

--
-- Name: pdm; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.pdm (
    id integer DEFAULT nextval('public.sq_pdmid'::regclass) NOT NULL,
    equipno character varying(50),
    kksno character varying(50),
    eqname character varying(200),
    parent character varying(50),
    bobot numeric(3,1),
    relasi character varying(10),
    level character varying(10),
    siteid character varying(10),
    kategori character varying(10),
    nilai numeric(4,2),
    vibrasi character varying(10),
    bearing character varying(10),
    prediksivibrasi character varying(10),
    termografi character varying(10),
    tribologi character varying(10),
    mcsa character varying(10),
    dga character varying(10),
    pd character varying(10),
    operasi character varying(50),
    sr character varying(50),
    wo character varying(50),
    tglkejadian character varying(50),
    analisa text,
    rekomhar text,
    rekomops text,
    keterangan text,
    kualitas text,
    unit character varying(10),
    tgl timestamp without time zone,
    termografi2 character varying(10)
);


ALTER TABLE public.pdm OWNER TO icore;

--
-- Name: pdm1; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.pdm1 (
    "EQUIPNO" text,
    "KKSNO" text,
    "EQNAME" text,
    "PARENT" text,
    "BOBOT" text,
    "RELASI" text,
    "LEVEL" text,
    "SITEID" text,
    "KATEGORI" text,
    "NILAI" text,
    "VIBRASI" text,
    "BEARING" text,
    "PREDIKSIVIBRASI" text,
    "TERMOGRAFI" text,
    "TRIBOLOGI" text,
    "MCSA" text,
    "DGA" text,
    "PD" text,
    "OPERASI" text,
    "SR" text,
    "WO" text,
    "TGLKEJADIAN" text,
    "ANALISA" text,
    "REKOMHAR" text,
    "REKOMOPS" text,
    "KETERANGAN" text,
    "KUALITAS" text,
    "UNIT" text,
    "TGL" text
);


ALTER TABLE public.pdm1 OWNER TO icore;

--
-- Name: sq_rbd; Type: SEQUENCE; Schema: public; Owner: icore
--

CREATE SEQUENCE public.sq_rbd
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sq_rbd OWNER TO icore;

--
-- Name: rbd; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.rbd (
    id integer DEFAULT nextval('public.sq_rbd'::regclass) NOT NULL,
    equipno character varying(30) NOT NULL,
    diskripsi character varying(150) NOT NULL,
    parent character varying(30) NOT NULL,
    bobot numeric(3,2),
    relasi character varying(1),
    level numeric(2,0),
    unitid character varying(3),
    siteid character varying(6) NOT NULL,
    eqwo character varying(1),
    eqpdm character varying(1)
);


ALTER TABLE public.rbd OWNER TO icore;

--
-- Name: sq_rbd_asset; Type: SEQUENCE; Schema: public; Owner: icore
--

CREATE SEQUENCE public.sq_rbd_asset
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sq_rbd_asset OWNER TO icore;

--
-- Name: rbd_asset; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.rbd_asset (
    id integer DEFAULT nextval('public.sq_rbd_asset'::regclass) NOT NULL,
    equipno character varying(30),
    assetnum character varying(30),
    siteid character varying(4)
);


ALTER TABLE public.rbd_asset OWNER TO icore;

--
-- Name: rbd_cmms; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.rbd_cmms (
    assetnum character varying(30) NOT NULL,
    description character varying(250),
    parent character varying(25),
    status character varying(10),
    siteid character varying(4) NOT NULL
);


ALTER TABLE public.rbd_cmms OWNER TO icore;

--
-- Name: sq_site; Type: SEQUENCE; Schema: public; Owner: icore
--

CREATE SEQUENCE public.sq_site
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sq_site OWNER TO icore;

--
-- Name: site; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.site (
    id integer DEFAULT nextval('public.sq_site'::regclass) NOT NULL,
    siteid character varying(10) NOT NULL,
    diskripsi character varying(100) NOT NULL
);


ALTER TABLE public.site OWNER TO icore;

--
-- Name: sq_unit; Type: SEQUENCE; Schema: public; Owner: icore
--

CREATE SEQUENCE public.sq_unit
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sq_unit OWNER TO icore;

--
-- Name: sq_wo; Type: SEQUENCE; Schema: public; Owner: icore
--

CREATE SEQUENCE public.sq_wo
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sq_wo OWNER TO icore;

--
-- Name: unit; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.unit (
    id integer DEFAULT nextval('public.sq_unit'::regclass) NOT NULL,
    unitid character varying(10) NOT NULL,
    diskripsi character varying(100) NOT NULL,
    siteid character varying(10) NOT NULL
);


ALTER TABLE public.unit OWNER TO icore;

--
-- Name: wo; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.wo (
    id integer DEFAULT nextval('public.sq_wo'::regclass) NOT NULL,
    assetnum character varying(30),
    wonum character varying(10) NOT NULL,
    wodesc character varying(250),
    wtnum character varying(10),
    taskdesc character varying(250),
    worktype character varying(10),
    priority character varying(15),
    wostatus character varying(10),
    wtstatus character varying(10),
    ownergroup character varying(10),
    reportdate timestamp without time zone,
    schedstart timestamp without time zone,
    schedfinish timestamp without time zone,
    siteid character varying(10) NOT NULL,
    pengurang smallint,
    kelompok character varying(1),
    cmms character varying(10)
);


ALTER TABLE public.wo OWNER TO icore;

--
-- Name: wopriority; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.wopriority (
    kode character varying(12),
    detail character varying(12)
);


ALTER TABLE public.wopriority OWNER TO icore;

--
-- Name: wostatus; Type: TABLE; Schema: public; Owner: icore
--

CREATE TABLE public.wostatus (
    kode character varying(10) NOT NULL,
    detail character varying(50) NOT NULL
);


ALTER TABLE public.wostatus OWNER TO icore;

--
-- Data for Name: asset; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.asset (no, assetnum, description, parent, status, unitid, siteid) FROM stdin;
\.
COPY public.asset (no, assetnum, description, parent, status, unitid, siteid) FROM '$$PATH$$/2954.dat';

--
-- Data for Name: chf; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.chf (no, tanggal, peralatan, ujin, ujrb, ujpt, ujpc, ujta, keterangan, target) FROM stdin;
\.
COPY public.chf (no, tanggal, peralatan, ujin, ujrb, ujpt, ujpc, ujta, keterangan, target) FROM '$$PATH$$/2960.dat';

--
-- Data for Name: equip_cmms; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.equip_cmms (id, equipno, equipno_cmms, siteid) FROM stdin;
\.
COPY public.equip_cmms (id, equipno, equipno_cmms, siteid) FROM '$$PATH$$/2938.dat';

--
-- Data for Name: equip_pdm; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.equip_pdm (id, equipno, equipno_pdm, siteid) FROM stdin;
\.
COPY public.equip_pdm (id, equipno, equipno_pdm, siteid) FROM '$$PATH$$/2950.dat';

--
-- Data for Name: equipment; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.equipment (id, equipno, diskripsi, parent, bobot, relasi, nilai_wo, level, siteid, eq, unitid, eqpdm, nilai_pdm, nilai) FROM stdin;
\.
COPY public.equipment (id, equipno, diskripsi, parent, bobot, relasi, nilai_wo, level, siteid, eq, unitid, eqpdm, nilai_pdm, nilai) FROM '$$PATH$$/2940.dat';

--
-- Data for Name: log_data; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.log_data (id, date_rec, record, namafile, siteid) FROM stdin;
\.
COPY public.log_data (id, date_rec, record, namafile, siteid) FROM '$$PATH$$/2959.dat';

--
-- Data for Name: pdm; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.pdm (id, equipno, kksno, eqname, parent, bobot, relasi, level, siteid, kategori, nilai, vibrasi, bearing, prediksivibrasi, termografi, tribologi, mcsa, dga, pd, operasi, sr, wo, tglkejadian, analisa, rekomhar, rekomops, keterangan, kualitas, unit, tgl, termografi2) FROM stdin;
\.
COPY public.pdm (id, equipno, kksno, eqname, parent, bobot, relasi, level, siteid, kategori, nilai, vibrasi, bearing, prediksivibrasi, termografi, tribologi, mcsa, dga, pd, operasi, sr, wo, tglkejadian, analisa, rekomhar, rekomops, keterangan, kualitas, unit, tgl, termografi2) FROM '$$PATH$$/2963.dat';

--
-- Data for Name: pdm1; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.pdm1 ("EQUIPNO", "KKSNO", "EQNAME", "PARENT", "BOBOT", "RELASI", "LEVEL", "SITEID", "KATEGORI", "NILAI", "VIBRASI", "BEARING", "PREDIKSIVIBRASI", "TERMOGRAFI", "TRIBOLOGI", "MCSA", "DGA", "PD", "OPERASI", "SR", "WO", "TGLKEJADIAN", "ANALISA", "REKOMHAR", "REKOMOPS", "KETERANGAN", "KUALITAS", "UNIT", "TGL") FROM stdin;
\.
COPY public.pdm1 ("EQUIPNO", "KKSNO", "EQNAME", "PARENT", "BOBOT", "RELASI", "LEVEL", "SITEID", "KATEGORI", "NILAI", "VIBRASI", "BEARING", "PREDIKSIVIBRASI", "TERMOGRAFI", "TRIBOLOGI", "MCSA", "DGA", "PD", "OPERASI", "SR", "WO", "TGLKEJADIAN", "ANALISA", "REKOMHAR", "REKOMOPS", "KETERANGAN", "KUALITAS", "UNIT", "TGL") FROM '$$PATH$$/2962.dat';

--
-- Data for Name: rbd; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.rbd (id, equipno, diskripsi, parent, bobot, relasi, level, unitid, siteid, eqwo, eqpdm) FROM stdin;
\.
COPY public.rbd (id, equipno, diskripsi, parent, bobot, relasi, level, unitid, siteid, eqwo, eqpdm) FROM '$$PATH$$/2952.dat';

--
-- Data for Name: rbd_asset; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.rbd_asset (id, equipno, assetnum, siteid) FROM stdin;
\.
COPY public.rbd_asset (id, equipno, assetnum, siteid) FROM '$$PATH$$/2957.dat';

--
-- Data for Name: rbd_cmms; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.rbd_cmms (assetnum, description, parent, status, siteid) FROM stdin;
\.
COPY public.rbd_cmms (assetnum, description, parent, status, siteid) FROM '$$PATH$$/2955.dat';

--
-- Data for Name: site; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.site (id, siteid, diskripsi) FROM stdin;
\.
COPY public.site (id, siteid, diskripsi) FROM '$$PATH$$/2942.dat';

--
-- Data for Name: unit; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.unit (id, unitid, diskripsi, siteid) FROM stdin;
\.
COPY public.unit (id, unitid, diskripsi, siteid) FROM '$$PATH$$/2945.dat';

--
-- Data for Name: wo; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.wo (id, assetnum, wonum, wodesc, wtnum, taskdesc, worktype, priority, wostatus, wtstatus, ownergroup, reportdate, schedstart, schedfinish, siteid, pengurang, kelompok, cmms) FROM stdin;
\.
COPY public.wo (id, assetnum, wonum, wodesc, wtnum, taskdesc, worktype, priority, wostatus, wtstatus, ownergroup, reportdate, schedstart, schedfinish, siteid, pengurang, kelompok, cmms) FROM '$$PATH$$/2946.dat';

--
-- Data for Name: wopriority; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.wopriority (kode, detail) FROM stdin;
\.
COPY public.wopriority (kode, detail) FROM '$$PATH$$/2947.dat';

--
-- Data for Name: wostatus; Type: TABLE DATA; Schema: public; Owner: icore
--

COPY public.wostatus (kode, detail) FROM stdin;
\.
COPY public.wostatus (kode, detail) FROM '$$PATH$$/2948.dat';

--
-- Name: sq_asset; Type: SEQUENCE SET; Schema: public; Owner: icore
--

SELECT pg_catalog.setval('public.sq_asset', 18207, true);


--
-- Name: sq_equip_cmms; Type: SEQUENCE SET; Schema: public; Owner: icore
--

SELECT pg_catalog.setval('public.sq_equip_cmms', 4603, true);


--
-- Name: sq_equip_pdm; Type: SEQUENCE SET; Schema: public; Owner: icore
--

SELECT pg_catalog.setval('public.sq_equip_pdm', 124, true);


--
-- Name: sq_equipment; Type: SEQUENCE SET; Schema: public; Owner: icore
--

SELECT pg_catalog.setval('public.sq_equipment', 9182, true);


--
-- Name: sq_log_data; Type: SEQUENCE SET; Schema: public; Owner: icore
--

SELECT pg_catalog.setval('public.sq_log_data', 3776, true);


--
-- Name: sq_pdmid; Type: SEQUENCE SET; Schema: public; Owner: icore
--

SELECT pg_catalog.setval('public.sq_pdmid', 23600, true);


--
-- Name: sq_rbd; Type: SEQUENCE SET; Schema: public; Owner: icore
--

SELECT pg_catalog.setval('public.sq_rbd', 10380, true);


--
-- Name: sq_rbd_asset; Type: SEQUENCE SET; Schema: public; Owner: icore
--

SELECT pg_catalog.setval('public.sq_rbd_asset', 1535, true);


--
-- Name: sq_site; Type: SEQUENCE SET; Schema: public; Owner: icore
--

SELECT pg_catalog.setval('public.sq_site', 13, true);


--
-- Name: sq_unit; Type: SEQUENCE SET; Schema: public; Owner: icore
--

SELECT pg_catalog.setval('public.sq_unit', 36, true);


--
-- Name: sq_wo; Type: SEQUENCE SET; Schema: public; Owner: icore
--

SELECT pg_catalog.setval('public.sq_wo', 7804572, true);


--
-- Name: asset asset_pkey; Type: CONSTRAINT; Schema: public; Owner: icore
--

ALTER TABLE ONLY public.asset
    ADD CONSTRAINT asset_pkey PRIMARY KEY (no);


--
-- Name: chf chf_pkey; Type: CONSTRAINT; Schema: public; Owner: icore
--

ALTER TABLE ONLY public.chf
    ADD CONSTRAINT chf_pkey PRIMARY KEY (tanggal, peralatan);


--
-- Name: equip_cmms equip_cmms_pkey; Type: CONSTRAINT; Schema: public; Owner: icore
--

ALTER TABLE ONLY public.equip_cmms
    ADD CONSTRAINT equip_cmms_pkey PRIMARY KEY (id);


--
-- Name: equip_pdm equip_pdm_pkey; Type: CONSTRAINT; Schema: public; Owner: icore
--

ALTER TABLE ONLY public.equip_pdm
    ADD CONSTRAINT equip_pdm_pkey PRIMARY KEY (id);


--
-- Name: equipment equipment_pkey; Type: CONSTRAINT; Schema: public; Owner: icore
--

ALTER TABLE ONLY public.equipment
    ADD CONSTRAINT equipment_pkey PRIMARY KEY (id);


--
-- Name: log_data log_data_pkey; Type: CONSTRAINT; Schema: public; Owner: icore
--

ALTER TABLE ONLY public.log_data
    ADD CONSTRAINT log_data_pkey PRIMARY KEY (id);


--
-- Name: pdm pdm_pkey; Type: CONSTRAINT; Schema: public; Owner: icore
--

ALTER TABLE ONLY public.pdm
    ADD CONSTRAINT pdm_pkey PRIMARY KEY (id);


--
-- Name: rbd_asset rbd_asset_pkey; Type: CONSTRAINT; Schema: public; Owner: icore
--

ALTER TABLE ONLY public.rbd_asset
    ADD CONSTRAINT rbd_asset_pkey PRIMARY KEY (id);


--
-- Name: rbd_cmms rbd_cmms_pkey; Type: CONSTRAINT; Schema: public; Owner: icore
--

ALTER TABLE ONLY public.rbd_cmms
    ADD CONSTRAINT rbd_cmms_pkey PRIMARY KEY (assetnum, siteid);


--
-- Name: rbd rbd_pkey; Type: CONSTRAINT; Schema: public; Owner: icore
--

ALTER TABLE ONLY public.rbd
    ADD CONSTRAINT rbd_pkey PRIMARY KEY (id);


--
-- Name: site site_pkey; Type: CONSTRAINT; Schema: public; Owner: icore
--

ALTER TABLE ONLY public.site
    ADD CONSTRAINT site_pkey PRIMARY KEY (id);


--
-- Name: unit unit_pkey; Type: CONSTRAINT; Schema: public; Owner: icore
--

ALTER TABLE ONLY public.unit
    ADD CONSTRAINT unit_pkey PRIMARY KEY (id);


--
-- Name: wo wo_pkey; Type: CONSTRAINT; Schema: public; Owner: icore
--

ALTER TABLE ONLY public.wo
    ADD CONSTRAINT wo_pkey PRIMARY KEY (id);


--
-- Name: wostatus wostatus_pkey; Type: CONSTRAINT; Schema: public; Owner: icore
--

ALTER TABLE ONLY public.wostatus
    ADD CONSTRAINT wostatus_pkey PRIMARY KEY (kode);


--
-- Name: TABLE equip_cmms; Type: ACL; Schema: public; Owner: icore
--

GRANT SELECT ON TABLE public.equip_cmms TO review;


--
-- Name: TABLE equipment; Type: ACL; Schema: public; Owner: icore
--

GRANT SELECT ON TABLE public.equipment TO review;


--
-- Name: TABLE site; Type: ACL; Schema: public; Owner: icore
--

GRANT SELECT ON TABLE public.site TO review;


--
-- Name: TABLE unit; Type: ACL; Schema: public; Owner: icore
--

GRANT SELECT ON TABLE public.unit TO review;


--
-- Name: TABLE wo; Type: ACL; Schema: public; Owner: icore
--

GRANT SELECT ON TABLE public.wo TO review;


--
-- Name: TABLE wopriority; Type: ACL; Schema: public; Owner: icore
--

GRANT SELECT ON TABLE public.wopriority TO review;


--
-- Name: TABLE wostatus; Type: ACL; Schema: public; Owner: icore
--

GRANT SELECT ON TABLE public.wostatus TO review;


--
-- PostgreSQL database dump complete
--

