PGDMP     '    5                z            bcg    13.6    13.6     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    57757    bcg    DATABASE     _   CREATE DATABASE bcg WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_India.1252';
    DROP DATABASE bcg;
                postgres    false            �            1259    66878    photo_gallery    TABLE     �   CREATE TABLE public.photo_gallery (
    photo_id integer NOT NULL,
    category integer,
    photo_file character varying(500),
    created_at timestamp(6) without time zone DEFAULT now(),
    photo_caption character varying(500)
);
 !   DROP TABLE public.photo_gallery;
       public         heap    postgres    false            �            1259    66876    photo_gallery_photo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.photo_gallery_photo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.photo_gallery_photo_id_seq;
       public          postgres    false    251            �           0    0    photo_gallery_photo_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.photo_gallery_photo_id_seq OWNED BY public.photo_gallery.photo_id;
          public          postgres    false    250                       2604    66881    photo_gallery photo_id    DEFAULT     �   ALTER TABLE ONLY public.photo_gallery ALTER COLUMN photo_id SET DEFAULT nextval('public.photo_gallery_photo_id_seq'::regclass);
 E   ALTER TABLE public.photo_gallery ALTER COLUMN photo_id DROP DEFAULT;
       public          postgres    false    250    251    251            �          0    66878    photo_gallery 
   TABLE DATA           b   COPY public.photo_gallery (photo_id, category, photo_file, created_at, photo_caption) FROM stdin;
    public          postgres    false    251   �       �           0    0    photo_gallery_photo_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.photo_gallery_photo_id_seq', 74, true);
          public          postgres    false    250                       2606    66887     photo_gallery photo_gallery_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.photo_gallery
    ADD CONSTRAINT photo_gallery_pkey PRIMARY KEY (photo_id);
 J   ALTER TABLE ONLY public.photo_gallery DROP CONSTRAINT photo_gallery_pkey;
       public            postgres    false    251            �     x�u��nGE�=_�P�^��]� ��H�,��h$�BR	���MJ�F,�-έ�w5kH����%����6�\P�`]��f�X̤&a`-G�ȧUcM%�
<�G���VbJVs���O��ES�Z������i�U�r��Ϗ�g�*jŀ7�s�q$�([�0����g�t��4&�D���1�;vY��4J�C$��0���`y$L��J�z��p��6���]|U7�ƀ�O��7�0�pNݍ�Ğ���̱Ufp��'�u���ъJ�v�{^��f,IZoiO,���6jF+'8���ѵ��V
,+w����c)�5�z^�<2�(Z�v'GX��9Y��fF�UυB��"a\�k���>�w���a�\x�P%ǚE:�f��𚢱qo8͡�w�W7oO�_r�Fy�߰�qG���L�������7}-����h�v�&Xk��GF'Z}nK&)�mP�#��ڈ���4\n��->nv������ry}7�W�:��L��X���f>�O�v�1��5��3���փi���e�B�ַ���3[id�
��5�	�`v��a��^���X�k��D/n���r�Fݣ2�����⦾���ު���֬� k3��/ HdÔ�!�Lм�K/4<��ϳ�֡�\"Y�h��|�pۺ�R6v?�H�R���J�	N�j��w�&5�h��b����j�7�����
BI�7���ڗ^	�a�R�tn�`�sF�a!�����ց���Z;d�y:�0A��}5¦2��O?n�m6�'?%�*�J=�̯$n���4edb��K����8K�2�"����vT��Z?��N��h�$̀w�3�y/;<v�ߥ�O�W@І=ZT�K&��9|^�?�����w���,�F2י����["��}�p	^
� �?�Z�Z��B3�����H� .���i�_nw�K2��u���Kr���Q���%�/�ڨ�3`=Bp���n?}�����.w�	�����a���l     