PGDMP         5                z            bcg    13.6    13.6     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    57757    bcg    DATABASE     _   CREATE DATABASE bcg WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_India.1252';
    DROP DATABASE bcg;
                postgres    false            �            1259    66831    photo_category    TABLE     �   CREATE TABLE public.photo_category (
    cate_id integer NOT NULL,
    category_title character varying(500),
    created_at timestamp(6) without time zone DEFAULT now(),
    gall_cate_id character varying(100) DEFAULT 2
);
 "   DROP TABLE public.photo_category;
       public         heap    postgres    false            �            1259    66829    photo_category_cate_id_seq    SEQUENCE     �   CREATE SEQUENCE public.photo_category_cate_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.photo_category_cate_id_seq;
       public          postgres    false    243            �           0    0    photo_category_cate_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.photo_category_cate_id_seq OWNED BY public.photo_category.cate_id;
          public          postgres    false    242                       2604    66834    photo_category cate_id    DEFAULT     �   ALTER TABLE ONLY public.photo_category ALTER COLUMN cate_id SET DEFAULT nextval('public.photo_category_cate_id_seq'::regclass);
 E   ALTER TABLE public.photo_category ALTER COLUMN cate_id DROP DEFAULT;
       public          postgres    false    242    243    243            �          0    66831    photo_category 
   TABLE DATA           [   COPY public.photo_category (cate_id, category_title, created_at, gall_cate_id) FROM stdin;
    public          postgres    false    243   �       �           0    0    photo_category_cate_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.photo_category_cate_id_seq', 17, true);
          public          postgres    false    242            	           2606    66840 "   photo_category photo_category_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.photo_category
    ADD CONSTRAINT photo_category_pkey PRIMARY KEY (cate_id);
 L   ALTER TABLE ONLY public.photo_category DROP CONSTRAINT photo_category_pkey;
       public            postgres    false    243            �   C  x��SMs�0=;�bo�*$�;��vJ;�P�.\{�
�#K��߳ri:���F����}�'߰o��n�\;l�u���ޫ�6~��\�o�5�I.EB�<���HA�e.�gY)�4��"��n�=��fO�? �M`�t������*�ORO��K�g<�*�*�/8�M�[8W4���)?�kն� ܨ���&h�~�LS��)�<%&&�*t���+3z�Ǚ'�1z��m,�`:t$�Y���ī�0�*��;P����"�>�Gm�;b�V�L�2��:i>�����mf5��r����=�lЌ�M�`bI.�TVuF`�'M���d�8B��#�<�Qwx�.��:���U�Rx���2��UZ�W$:����Ҩ�+R��~�mG4;�.̎�qf�n��#�Z�R��_gss�+��Z.9gB򴚩%��
���P��f�U�9j�#`�\ҽ4\�IO*�	~*$"[��虫�d5����f���B)YU��,ba���N�*�X=)�s�����}��(�H�'CK�ZQee�#��4�G�4�(jQ�mx{��Ox� Ok&������b��uYF�     