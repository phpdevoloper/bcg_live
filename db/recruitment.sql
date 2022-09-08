PGDMP     (            	        z            bcg    13.7    13.7     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    19254    bcg    DATABASE     _   CREATE DATABASE bcg WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_India.1252';
    DROP DATABASE bcg;
                postgres    false                       1259    19729    recruitment    TABLE     f  CREATE TABLE public.recruitment (
    rec_id integer NOT NULL,
    rect_title character varying(500),
    advt_no character varying(500),
    date_of_announce date,
    last_date_to_apply date,
    upload_advt character(500),
    file_size numeric(100,0),
    rec_status character varying(500),
    created_at timestamp(6) without time zone DEFAULT now()
);
    DROP TABLE public.recruitment;
       public         heap    postgres    false                       1259    19727    recruitment_rec_id_seq    SEQUENCE     �   CREATE SEQUENCE public.recruitment_rec_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.recruitment_rec_id_seq;
       public          postgres    false    279            �           0    0    recruitment_rec_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.recruitment_rec_id_seq OWNED BY public.recruitment.rec_id;
          public          postgres    false    278                       2604    19732    recruitment rec_id    DEFAULT     x   ALTER TABLE ONLY public.recruitment ALTER COLUMN rec_id SET DEFAULT nextval('public.recruitment_rec_id_seq'::regclass);
 A   ALTER TABLE public.recruitment ALTER COLUMN rec_id DROP DEFAULT;
       public          postgres    false    279    278    279            �          0    19729    recruitment 
   TABLE DATA           �   COPY public.recruitment (rec_id, rect_title, advt_no, date_of_announce, last_date_to_apply, upload_advt, file_size, rec_status, created_at) FROM stdin;
    public          postgres    false    279          �           0    0    recruitment_rec_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.recruitment_rec_id_seq', 1, true);
          public          postgres    false    278                       2606    19744    recruitment recruitment_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.recruitment
    ADD CONSTRAINT recruitment_pkey PRIMARY KEY (rec_id);
 F   ALTER TABLE ONLY public.recruitment DROP CONSTRAINT recruitment_pkey;
       public            postgres    false    279            �      x�3�t��+)JL.)M�Q�/.)�442651��4202�5�"8�Ќ$`��O�����S��+I-*�L-WH�/R�0P� %Maa�ihbhL)E�i%�ta�`hlebjej�glfijb����� m�_�     