PGDMP                 	        z            bcg    13.7    13.7     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    19254    bcg    DATABASE     _   CREATE DATABASE bcg WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_India.1252';
    DROP DATABASE bcg;
                postgres    false                       1259    19519    tenders    TABLE     �  CREATE TABLE public.tenders (
    tender_id integer NOT NULL,
    tender_title character varying(500),
    advertise_no character varying(500),
    date_of_announce date,
    date_of_closed date,
    tenders_notice character varying(500),
    file_size character varying(500),
    tender_status character varying(500) DEFAULT 'Closed'::character varying,
    created_date timestamp(6) without time zone DEFAULT now()
);
    DROP TABLE public.tenders;
       public         heap    postgres    false            	           1259    19527    tenders_tender_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tenders_tender_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.tenders_tender_id_seq;
       public          postgres    false    264            �           0    0    tenders_tender_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.tenders_tender_id_seq OWNED BY public.tenders.tender_id;
          public          postgres    false    265                       2604    19603    tenders tender_id    DEFAULT     v   ALTER TABLE ONLY public.tenders ALTER COLUMN tender_id SET DEFAULT nextval('public.tenders_tender_id_seq'::regclass);
 @   ALTER TABLE public.tenders ALTER COLUMN tender_id DROP DEFAULT;
       public          postgres    false    265    264            �          0    19519    tenders 
   TABLE DATA           �   COPY public.tenders (tender_id, tender_title, advertise_no, date_of_announce, date_of_closed, tenders_notice, file_size, tender_status, created_date) FROM stdin;
    public          postgres    false    264   "       �           0    0    tenders_tender_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.tenders_tender_id_seq', 1, true);
          public          postgres    false    265            	           2606    19681    tenders tenders_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.tenders
    ADD CONSTRAINT tenders_pkey PRIMARY KEY (tender_id);
 >   ALTER TABLE ONLY public.tenders DROP CONSTRAINT tenders_pkey;
       public            postgres    false    264            �   |   x�3�,�/I,���SH�/R.-(ȩT�OS(HL���KW�M,I-�L�)�442651��4202�5��5@08�� ���ļ���4N3s3N��̲T$m
�V&�V��z�f���\1z\\\ c#�     