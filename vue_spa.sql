--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.18
-- Dumped by pg_dump version 12.3 (Ubuntu 12.3-1.pgdg16.04+1)

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

SET default_tablespace = '';

--
-- Name: account; Type: TABLE; Schema: public; Owner: andreipunt90
--

CREATE TABLE public.account (
    user_name character varying(30),
    full_name character varying(64)
);


ALTER TABLE public.account OWNER TO andreipunt90;

--
-- Name: spravka; Type: TABLE; Schema: public; Owner: andreipunt90
--

CREATE TABLE public.spravka (
    name text NOT NULL,
    family text NOT NULL,
    middle_name text NOT NULL,
    n_reg_doc text NOT NULL,
    power text NOT NULL,
    category text NOT NULL,
    type_category text NOT NULL,
    id integer NOT NULL
);


ALTER TABLE public.spravka OWNER TO andreipunt90;

--
-- Name: spravka_id_seq; Type: SEQUENCE; Schema: public; Owner: andreipunt90
--

CREATE SEQUENCE public.spravka_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.spravka_id_seq OWNER TO andreipunt90;

--
-- Name: spravka_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: andreipunt90
--

ALTER SEQUENCE public.spravka_id_seq OWNED BY public.spravka.id;


--
-- Name: spravka id; Type: DEFAULT; Schema: public; Owner: andreipunt90
--

ALTER TABLE ONLY public.spravka ALTER COLUMN id SET DEFAULT nextval('public.spravka_id_seq'::regclass);


--
-- Data for Name: account; Type: TABLE DATA; Schema: public; Owner: andreipunt90
--

COPY public.account (user_name, full_name) FROM stdin;
Андрей	Пунтус
\.


--
-- Data for Name: spravka; Type: TABLE DATA; Schema: public; Owner: andreipunt90
--

COPY public.spravka (name, family, middle_name, n_reg_doc, power, category, type_category, id) FROM stdin;
Николай	Васильев	Викторович	101	способен передавать и читать чужие мысли на расстоянии	телепат	T	2
Роман	Петров	Валерьевич	103	способность вызывать огонь или значительное повышение температуры на расстоянии силой мысли	пирокинет	P	3
Игорь	Иванов	Сергеевич	102	способность образного конструирования с помощью биологических форм	биоморф	B	1
\.


--
-- Name: spravka_id_seq; Type: SEQUENCE SET; Schema: public; Owner: andreipunt90
--

SELECT pg_catalog.setval('public.spravka_id_seq', 7, true);


--
-- Name: spravka spravka_category_key; Type: CONSTRAINT; Schema: public; Owner: andreipunt90
--

ALTER TABLE ONLY public.spravka
    ADD CONSTRAINT spravka_category_key UNIQUE (category);


--
-- Name: spravka spravka_pkey; Type: CONSTRAINT; Schema: public; Owner: andreipunt90
--

ALTER TABLE ONLY public.spravka
    ADD CONSTRAINT spravka_pkey PRIMARY KEY (category);


--
-- PostgreSQL database dump complete
--

