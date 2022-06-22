PGDMP     '                    z            bcg    13.6    13.6 t    ^           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            _           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            `           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            a           1262    57757    bcg    DATABASE     _   CREATE DATABASE bcg WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_India.1252';
    DROP DATABASE bcg;
                postgres    false            �            1259    66279    about_us    TABLE     R  CREATE TABLE public.about_us (
    about_us_id integer NOT NULL,
    content_id character varying(200) NOT NULL,
    content_description text,
    content_status character varying(100),
    last_updated time without time zone DEFAULT CURRENT_TIMESTAMP,
    content_updated_by character varying(100),
    archive character varying(500)
);
    DROP TABLE public.about_us;
       public         heap    postgres    false            �            1259    66277    About_us_about_us_id_seq    SEQUENCE     �   CREATE SEQUENCE public."About_us_about_us_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public."About_us_about_us_id_seq";
       public          postgres    false    211            b           0    0    About_us_about_us_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public."About_us_about_us_id_seq" OWNED BY public.about_us.about_us_id;
          public          postgres    false    210            �            1259    66349    about_achivement    TABLE     �   CREATE TABLE public.about_achivement (
    achivement_id integer NOT NULL,
    achivement_name character varying(500),
    achivement_year timestamp(6) without time zone
);
 $   DROP TABLE public.about_achivement;
       public         heap    postgres    false            �            1259    66347 "   about_achivement_achivement_id_seq    SEQUENCE     �   CREATE SEQUENCE public.about_achivement_achivement_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.about_achivement_achivement_id_seq;
       public          postgres    false    213            c           0    0 "   about_achivement_achivement_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.about_achivement_achivement_id_seq OWNED BY public.about_achivement.achivement_id;
          public          postgres    false    212            �            1259    66209 	   user_info    TABLE     �   CREATE TABLE public.user_info (
    user_id integer NOT NULL,
    uname character varying(200),
    upass character varying(200),
    role_id integer
);
    DROP TABLE public.user_info;
       public         heap    postgres    false            �            1259    66207    bcg_users_user_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bcg_users_user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.bcg_users_user_id_seq;
       public          postgres    false    201            d           0    0    bcg_users_user_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.bcg_users_user_id_seq OWNED BY public.user_info.user_id;
          public          postgres    false    200            �            1259    66430    bcgvl_staff_designation    TABLE     �   CREATE TABLE public.bcgvl_staff_designation (
    deg_id integer NOT NULL,
    deg_name character varying(500),
    deg_code character varying(500)
);
 +   DROP TABLE public.bcgvl_staff_designation;
       public         heap    postgres    false            �            1259    66428 "   bcgvl_staff_designation_deg_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bcgvl_staff_designation_deg_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.bcgvl_staff_designation_deg_id_seq;
       public          postgres    false    221            e           0    0 "   bcgvl_staff_designation_deg_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.bcgvl_staff_designation_deg_id_seq OWNED BY public.bcgvl_staff_designation.deg_id;
          public          postgres    false    220            �            1259    66441    bcgvl_staff_details    TABLE     �   CREATE TABLE public.bcgvl_staff_details (
    staff_id integer NOT NULL,
    staff_name character varying(500),
    deg_code character varying(500),
    cate_code character varying(500),
    status character varying(500)
);
 '   DROP TABLE public.bcgvl_staff_details;
       public         heap    postgres    false            �            1259    66439     bcgvl_staff_details_staff_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bcgvl_staff_details_staff_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.bcgvl_staff_details_staff_id_seq;
       public          postgres    false    223            f           0    0     bcgvl_staff_details_staff_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.bcgvl_staff_details_staff_id_seq OWNED BY public.bcgvl_staff_details.staff_id;
          public          postgres    false    222            �            1259    66419    bcgvl_staff_groups    TABLE     �   CREATE TABLE public.bcgvl_staff_groups (
    cate_id integer NOT NULL,
    cate_name character varying(500),
    cate_code character varying(500)
);
 &   DROP TABLE public.bcgvl_staff_groups;
       public         heap    postgres    false            �            1259    66417    bcgvl_staff_groups_cate_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bcgvl_staff_groups_cate_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.bcgvl_staff_groups_cate_id_seq;
       public          postgres    false    219            g           0    0    bcgvl_staff_groups_cate_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.bcgvl_staff_groups_cate_id_seq OWNED BY public.bcgvl_staff_groups.cate_id;
          public          postgres    false    218            �            1259    66236    director_desk    TABLE     �  CREATE TABLE public.director_desk (
    dir_desk_id integer NOT NULL,
    director_name character varying(200),
    director_position character varying(200),
    director_qualification text,
    position_held text,
    director_photo character varying(500),
    short_profile character varying(500),
    detail_profile character varying(500),
    director_message text,
    director_status character varying(100),
    director_expertise text
);
 !   DROP TABLE public.director_desk;
       public         heap    postgres    false            �            1259    66234    director_desk_dir_desk_id_seq    SEQUENCE     �   CREATE SEQUENCE public.director_desk_dir_desk_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.director_desk_dir_desk_id_seq;
       public          postgres    false    205            h           0    0    director_desk_dir_desk_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.director_desk_dir_desk_id_seq OWNED BY public.director_desk.dir_desk_id;
          public          postgres    false    204            �            1259    66271    director_status    TABLE     �   CREATE TABLE public.director_status (
    dir_status_id integer NOT NULL,
    dir_status_name character varying(200),
    dir_status_short_code character varying(200)
);
 #   DROP TABLE public.director_status;
       public         heap    postgres    false            �            1259    66269 !   director_status_dir_status_id_seq    SEQUENCE     �   CREATE SEQUENCE public.director_status_dir_status_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 8   DROP SEQUENCE public.director_status_dir_status_id_seq;
       public          postgres    false    209            i           0    0 !   director_status_dir_status_id_seq    SEQUENCE OWNED BY     g   ALTER SEQUENCE public.director_status_dir_status_id_seq OWNED BY public.director_status.dir_status_id;
          public          postgres    false    208            �            1259    66251    emp_designation    TABLE     �   CREATE TABLE public.emp_designation (
    designation_id integer NOT NULL,
    designation_name character varying(200),
    designation_code character varying(200)
);
 #   DROP TABLE public.emp_designation;
       public         heap    postgres    false            �            1259    66249 "   emp_designation_designation_id_seq    SEQUENCE     �   CREATE SEQUENCE public.emp_designation_designation_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.emp_designation_designation_id_seq;
       public          postgres    false    207            j           0    0 "   emp_designation_designation_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.emp_designation_designation_id_seq OWNED BY public.emp_designation.designation_id;
          public          postgres    false    206            �            1259    66497    events    TABLE     �   CREATE TABLE public.events (
    event_id integer NOT NULL,
    event_title character varying(500),
    event_desc text,
    date_from timestamp(6) without time zone,
    date_to timestamp(6) without time zone,
    status character varying(200)
);
    DROP TABLE public.events;
       public         heap    postgres    false            �            1259    66495    events_event_id_seq    SEQUENCE     �   CREATE SEQUENCE public.events_event_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.events_event_id_seq;
       public          postgres    false    231            k           0    0    events_event_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.events_event_id_seq OWNED BY public.events.event_id;
          public          postgres    false    230            �            1259    66377    former_directors    TABLE     �   CREATE TABLE public.former_directors (
    director_id integer NOT NULL,
    director_name character varying(500),
    year_from character varying(500),
    year_to character varying(500)
);
 $   DROP TABLE public.former_directors;
       public         heap    postgres    false            �            1259    66375     former_directors_director_id_seq    SEQUENCE     �   CREATE SEQUENCE public.former_directors_director_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.former_directors_director_id_seq;
       public          postgres    false    215            l           0    0     former_directors_director_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.former_directors_director_id_seq OWNED BY public.former_directors.director_id;
          public          postgres    false    214            �            1259    66456    organisation_chart    TABLE     �   CREATE TABLE public.organisation_chart (
    org_id integer NOT NULL,
    org_pic character varying(500),
    org_status character varying(500)
);
 &   DROP TABLE public.organisation_chart;
       public         heap    postgres    false            �            1259    66454    organisation_chart_org_id_seq    SEQUENCE     �   CREATE SEQUENCE public.organisation_chart_org_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.organisation_chart_org_id_seq;
       public          postgres    false    225            m           0    0    organisation_chart_org_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.organisation_chart_org_id_seq OWNED BY public.organisation_chart.org_id;
          public          postgres    false    224            �            1259    66486    product    TABLE     �   CREATE TABLE public.product (
    product_id integer NOT NULL,
    product_name character varying,
    product_desc text,
    product_image character varying(500),
    product_status character varying(500)
);
    DROP TABLE public.product;
       public         heap    postgres    false            �            1259    66484    product_product_id_seq    SEQUENCE     �   CREATE SEQUENCE public.product_product_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.product_product_id_seq;
       public          postgres    false    229            n           0    0    product_product_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.product_product_id_seq OWNED BY public.product.product_id;
          public          postgres    false    228            �            1259    66475 
   production    TABLE     �   CREATE TABLE public.production (
    pro_id integer NOT NULL,
    production_pic character varying(500),
    status character varying(500)
);
    DROP TABLE public.production;
       public         heap    postgres    false            �            1259    66473    production_pro_id_seq    SEQUENCE     �   CREATE SEQUENCE public.production_pro_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.production_pro_id_seq;
       public          postgres    false    227            o           0    0    production_pro_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.production_pro_id_seq OWNED BY public.production.pro_id;
          public          postgres    false    226            �            1259    66217 	   user_role    TABLE     f   CREATE TABLE public.user_role (
    role_id integer NOT NULL,
    role_name character varying(200)
);
    DROP TABLE public.user_role;
       public         heap    postgres    false            �            1259    66215    user_role_role_id_seq    SEQUENCE     �   CREATE SEQUENCE public.user_role_role_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.user_role_role_id_seq;
       public          postgres    false    203            p           0    0    user_role_role_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.user_role_role_id_seq OWNED BY public.user_role.role_id;
          public          postgres    false    202            �            1259    66395    what_new    TABLE     �   CREATE TABLE public.what_new (
    whats_id integer NOT NULL,
    whats_title character varying,
    whats_desc text,
    whats_file character varying(500),
    created_date timestamp(6) without time zone DEFAULT now()
);
    DROP TABLE public.what_new;
       public         heap    postgres    false            �            1259    66393    what_new_whats_id_seq    SEQUENCE     �   CREATE SEQUENCE public.what_new_whats_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.what_new_whats_id_seq;
       public          postgres    false    217            q           0    0    what_new_whats_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.what_new_whats_id_seq OWNED BY public.what_new.whats_id;
          public          postgres    false    216            �           2604    66352    about_achivement achivement_id    DEFAULT     �   ALTER TABLE ONLY public.about_achivement ALTER COLUMN achivement_id SET DEFAULT nextval('public.about_achivement_achivement_id_seq'::regclass);
 M   ALTER TABLE public.about_achivement ALTER COLUMN achivement_id DROP DEFAULT;
       public          postgres    false    212    213    213            �           2604    66282    about_us about_us_id    DEFAULT     ~   ALTER TABLE ONLY public.about_us ALTER COLUMN about_us_id SET DEFAULT nextval('public."About_us_about_us_id_seq"'::regclass);
 C   ALTER TABLE public.about_us ALTER COLUMN about_us_id DROP DEFAULT;
       public          postgres    false    210    211    211            �           2604    66433    bcgvl_staff_designation deg_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_staff_designation ALTER COLUMN deg_id SET DEFAULT nextval('public.bcgvl_staff_designation_deg_id_seq'::regclass);
 M   ALTER TABLE public.bcgvl_staff_designation ALTER COLUMN deg_id DROP DEFAULT;
       public          postgres    false    220    221    221            �           2604    66444    bcgvl_staff_details staff_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_staff_details ALTER COLUMN staff_id SET DEFAULT nextval('public.bcgvl_staff_details_staff_id_seq'::regclass);
 K   ALTER TABLE public.bcgvl_staff_details ALTER COLUMN staff_id DROP DEFAULT;
       public          postgres    false    223    222    223            �           2604    66422    bcgvl_staff_groups cate_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_staff_groups ALTER COLUMN cate_id SET DEFAULT nextval('public.bcgvl_staff_groups_cate_id_seq'::regclass);
 I   ALTER TABLE public.bcgvl_staff_groups ALTER COLUMN cate_id DROP DEFAULT;
       public          postgres    false    218    219    219            �           2604    66239    director_desk dir_desk_id    DEFAULT     �   ALTER TABLE ONLY public.director_desk ALTER COLUMN dir_desk_id SET DEFAULT nextval('public.director_desk_dir_desk_id_seq'::regclass);
 H   ALTER TABLE public.director_desk ALTER COLUMN dir_desk_id DROP DEFAULT;
       public          postgres    false    205    204    205            �           2604    66274    director_status dir_status_id    DEFAULT     �   ALTER TABLE ONLY public.director_status ALTER COLUMN dir_status_id SET DEFAULT nextval('public.director_status_dir_status_id_seq'::regclass);
 L   ALTER TABLE public.director_status ALTER COLUMN dir_status_id DROP DEFAULT;
       public          postgres    false    208    209    209            �           2604    66254    emp_designation designation_id    DEFAULT     �   ALTER TABLE ONLY public.emp_designation ALTER COLUMN designation_id SET DEFAULT nextval('public.emp_designation_designation_id_seq'::regclass);
 M   ALTER TABLE public.emp_designation ALTER COLUMN designation_id DROP DEFAULT;
       public          postgres    false    206    207    207            �           2604    66500    events event_id    DEFAULT     r   ALTER TABLE ONLY public.events ALTER COLUMN event_id SET DEFAULT nextval('public.events_event_id_seq'::regclass);
 >   ALTER TABLE public.events ALTER COLUMN event_id DROP DEFAULT;
       public          postgres    false    231    230    231            �           2604    66380    former_directors director_id    DEFAULT     �   ALTER TABLE ONLY public.former_directors ALTER COLUMN director_id SET DEFAULT nextval('public.former_directors_director_id_seq'::regclass);
 K   ALTER TABLE public.former_directors ALTER COLUMN director_id DROP DEFAULT;
       public          postgres    false    215    214    215            �           2604    66459    organisation_chart org_id    DEFAULT     �   ALTER TABLE ONLY public.organisation_chart ALTER COLUMN org_id SET DEFAULT nextval('public.organisation_chart_org_id_seq'::regclass);
 H   ALTER TABLE public.organisation_chart ALTER COLUMN org_id DROP DEFAULT;
       public          postgres    false    225    224    225            �           2604    66489    product product_id    DEFAULT     x   ALTER TABLE ONLY public.product ALTER COLUMN product_id SET DEFAULT nextval('public.product_product_id_seq'::regclass);
 A   ALTER TABLE public.product ALTER COLUMN product_id DROP DEFAULT;
       public          postgres    false    228    229    229            �           2604    66478    production pro_id    DEFAULT     v   ALTER TABLE ONLY public.production ALTER COLUMN pro_id SET DEFAULT nextval('public.production_pro_id_seq'::regclass);
 @   ALTER TABLE public.production ALTER COLUMN pro_id DROP DEFAULT;
       public          postgres    false    227    226    227            �           2604    66212    user_info user_id    DEFAULT     v   ALTER TABLE ONLY public.user_info ALTER COLUMN user_id SET DEFAULT nextval('public.bcg_users_user_id_seq'::regclass);
 @   ALTER TABLE public.user_info ALTER COLUMN user_id DROP DEFAULT;
       public          postgres    false    201    200    201            �           2604    66220    user_role role_id    DEFAULT     v   ALTER TABLE ONLY public.user_role ALTER COLUMN role_id SET DEFAULT nextval('public.user_role_role_id_seq'::regclass);
 @   ALTER TABLE public.user_role ALTER COLUMN role_id DROP DEFAULT;
       public          postgres    false    202    203    203            �           2604    66398    what_new whats_id    DEFAULT     v   ALTER TABLE ONLY public.what_new ALTER COLUMN whats_id SET DEFAULT nextval('public.what_new_whats_id_seq'::regclass);
 @   ALTER TABLE public.what_new ALTER COLUMN whats_id DROP DEFAULT;
       public          postgres    false    216    217    217            I          0    66349    about_achivement 
   TABLE DATA           [   COPY public.about_achivement (achivement_id, achivement_name, achivement_year) FROM stdin;
    public          postgres    false    213   ��       G          0    66279    about_us 
   TABLE DATA           �   COPY public.about_us (about_us_id, content_id, content_description, content_status, last_updated, content_updated_by, archive) FROM stdin;
    public          postgres    false    211   �       Q          0    66430    bcgvl_staff_designation 
   TABLE DATA           M   COPY public.bcgvl_staff_designation (deg_id, deg_name, deg_code) FROM stdin;
    public          postgres    false    221   �n      S          0    66441    bcgvl_staff_details 
   TABLE DATA           `   COPY public.bcgvl_staff_details (staff_id, staff_name, deg_code, cate_code, status) FROM stdin;
    public          postgres    false    223   �p      O          0    66419    bcgvl_staff_groups 
   TABLE DATA           K   COPY public.bcgvl_staff_groups (cate_id, cate_name, cate_code) FROM stdin;
    public          postgres    false    219   �t      A          0    66236    director_desk 
   TABLE DATA           �   COPY public.director_desk (dir_desk_id, director_name, director_position, director_qualification, position_held, director_photo, short_profile, detail_profile, director_message, director_status, director_expertise) FROM stdin;
    public          postgres    false    205   u      E          0    66271    director_status 
   TABLE DATA           `   COPY public.director_status (dir_status_id, dir_status_name, dir_status_short_code) FROM stdin;
    public          postgres    false    209   5~      C          0    66251    emp_designation 
   TABLE DATA           ]   COPY public.emp_designation (designation_id, designation_name, designation_code) FROM stdin;
    public          postgres    false    207   �~      [          0    66497    events 
   TABLE DATA           _   COPY public.events (event_id, event_title, event_desc, date_from, date_to, status) FROM stdin;
    public          postgres    false    231   �~      K          0    66377    former_directors 
   TABLE DATA           Z   COPY public.former_directors (director_id, director_name, year_from, year_to) FROM stdin;
    public          postgres    false    215   �~      U          0    66456    organisation_chart 
   TABLE DATA           I   COPY public.organisation_chart (org_id, org_pic, org_status) FROM stdin;
    public          postgres    false    225   q�      Y          0    66486    product 
   TABLE DATA           h   COPY public.product (product_id, product_name, product_desc, product_image, product_status) FROM stdin;
    public          postgres    false    229   ��      W          0    66475 
   production 
   TABLE DATA           D   COPY public.production (pro_id, production_pic, status) FROM stdin;
    public          postgres    false    227   π      =          0    66209 	   user_info 
   TABLE DATA           C   COPY public.user_info (user_id, uname, upass, role_id) FROM stdin;
    public          postgres    false    201   �      ?          0    66217 	   user_role 
   TABLE DATA           7   COPY public.user_role (role_id, role_name) FROM stdin;
    public          postgres    false    203   4�      M          0    66395    what_new 
   TABLE DATA           _   COPY public.what_new (whats_id, whats_title, whats_desc, whats_file, created_date) FROM stdin;
    public          postgres    false    217   d�      r           0    0    About_us_about_us_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public."About_us_about_us_id_seq"', 7, true);
          public          postgres    false    210            s           0    0 "   about_achivement_achivement_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.about_achivement_achivement_id_seq', 1, false);
          public          postgres    false    212            t           0    0    bcg_users_user_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.bcg_users_user_id_seq', 1, false);
          public          postgres    false    200            u           0    0 "   bcgvl_staff_designation_deg_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.bcgvl_staff_designation_deg_id_seq', 1, false);
          public          postgres    false    220            v           0    0     bcgvl_staff_details_staff_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.bcgvl_staff_details_staff_id_seq', 1, false);
          public          postgres    false    222            w           0    0    bcgvl_staff_groups_cate_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.bcgvl_staff_groups_cate_id_seq', 1, false);
          public          postgres    false    218            x           0    0    director_desk_dir_desk_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.director_desk_dir_desk_id_seq', 59, true);
          public          postgres    false    204            y           0    0 !   director_status_dir_status_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.director_status_dir_status_id_seq', 1, false);
          public          postgres    false    208            z           0    0 "   emp_designation_designation_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.emp_designation_designation_id_seq', 1, false);
          public          postgres    false    206            {           0    0    events_event_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.events_event_id_seq', 1, false);
          public          postgres    false    230            |           0    0     former_directors_director_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.former_directors_director_id_seq', 1, false);
          public          postgres    false    214            }           0    0    organisation_chart_org_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.organisation_chart_org_id_seq', 3, true);
          public          postgres    false    224            ~           0    0    product_product_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.product_product_id_seq', 1, false);
          public          postgres    false    228                       0    0    production_pro_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.production_pro_id_seq', 1, true);
          public          postgres    false    226            �           0    0    user_role_role_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.user_role_role_id_seq', 1, false);
          public          postgres    false    202            �           0    0    what_new_whats_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.what_new_whats_id_seq', 30, true);
          public          postgres    false    216            �           2606    66288    about_us About_us_pkey 
   CONSTRAINT     _   ALTER TABLE ONLY public.about_us
    ADD CONSTRAINT "About_us_pkey" PRIMARY KEY (about_us_id);
 B   ALTER TABLE ONLY public.about_us DROP CONSTRAINT "About_us_pkey";
       public            postgres    false    211            �           2606    66357 &   about_achivement about_achivement_pkey 
   CONSTRAINT     o   ALTER TABLE ONLY public.about_achivement
    ADD CONSTRAINT about_achivement_pkey PRIMARY KEY (achivement_id);
 P   ALTER TABLE ONLY public.about_achivement DROP CONSTRAINT about_achivement_pkey;
       public            postgres    false    213            �           2606    66214    user_info bcg_users_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.user_info
    ADD CONSTRAINT bcg_users_pkey PRIMARY KEY (user_id);
 B   ALTER TABLE ONLY public.user_info DROP CONSTRAINT bcg_users_pkey;
       public            postgres    false    201            �           2606    66438 4   bcgvl_staff_designation bcgvl_staff_designation_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.bcgvl_staff_designation
    ADD CONSTRAINT bcgvl_staff_designation_pkey PRIMARY KEY (deg_id);
 ^   ALTER TABLE ONLY public.bcgvl_staff_designation DROP CONSTRAINT bcgvl_staff_designation_pkey;
       public            postgres    false    221            �           2606    66449 ,   bcgvl_staff_details bcgvl_staff_details_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.bcgvl_staff_details
    ADD CONSTRAINT bcgvl_staff_details_pkey PRIMARY KEY (staff_id);
 V   ALTER TABLE ONLY public.bcgvl_staff_details DROP CONSTRAINT bcgvl_staff_details_pkey;
       public            postgres    false    223            �           2606    66427 *   bcgvl_staff_groups bcgvl_staff_groups_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.bcgvl_staff_groups
    ADD CONSTRAINT bcgvl_staff_groups_pkey PRIMARY KEY (cate_id);
 T   ALTER TABLE ONLY public.bcgvl_staff_groups DROP CONSTRAINT bcgvl_staff_groups_pkey;
       public            postgres    false    219            �           2606    66244     director_desk director_desk_pkey 
   CONSTRAINT     g   ALTER TABLE ONLY public.director_desk
    ADD CONSTRAINT director_desk_pkey PRIMARY KEY (dir_desk_id);
 J   ALTER TABLE ONLY public.director_desk DROP CONSTRAINT director_desk_pkey;
       public            postgres    false    205            �           2606    66276 $   director_status director_status_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.director_status
    ADD CONSTRAINT director_status_pkey PRIMARY KEY (dir_status_id);
 N   ALTER TABLE ONLY public.director_status DROP CONSTRAINT director_status_pkey;
       public            postgres    false    209            �           2606    66256 $   emp_designation emp_designation_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.emp_designation
    ADD CONSTRAINT emp_designation_pkey PRIMARY KEY (designation_id);
 N   ALTER TABLE ONLY public.emp_designation DROP CONSTRAINT emp_designation_pkey;
       public            postgres    false    207            �           2606    66505    events events_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.events
    ADD CONSTRAINT events_pkey PRIMARY KEY (event_id);
 <   ALTER TABLE ONLY public.events DROP CONSTRAINT events_pkey;
       public            postgres    false    231            �           2606    66385 &   former_directors former_directors_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.former_directors
    ADD CONSTRAINT former_directors_pkey PRIMARY KEY (director_id);
 P   ALTER TABLE ONLY public.former_directors DROP CONSTRAINT former_directors_pkey;
       public            postgres    false    215            �           2606    66464 *   organisation_chart organisation_chart_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.organisation_chart
    ADD CONSTRAINT organisation_chart_pkey PRIMARY KEY (org_id);
 T   ALTER TABLE ONLY public.organisation_chart DROP CONSTRAINT organisation_chart_pkey;
       public            postgres    false    225            �           2606    66494    product product_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.product
    ADD CONSTRAINT product_pkey PRIMARY KEY (product_id);
 >   ALTER TABLE ONLY public.product DROP CONSTRAINT product_pkey;
       public            postgres    false    229            �           2606    66483    production production_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.production
    ADD CONSTRAINT production_pkey PRIMARY KEY (pro_id);
 D   ALTER TABLE ONLY public.production DROP CONSTRAINT production_pkey;
       public            postgres    false    227            �           2606    66222    user_role user_role_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.user_role
    ADD CONSTRAINT user_role_pkey PRIMARY KEY (role_id);
 B   ALTER TABLE ONLY public.user_role DROP CONSTRAINT user_role_pkey;
       public            postgres    false    203            �           2606    66404    what_new what_new_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.what_new
    ADD CONSTRAINT what_new_pkey PRIMARY KEY (whats_id);
 @   ALTER TABLE ONLY public.what_new DROP CONSTRAINT what_new_pkey;
       public            postgres    false    217            I      x������ � �      G      x����ңJ�&�;�*ª��f��t�OV�Hb 6�?8�$ľ	��q}'N�쬪�I��]��Ool�"�G�-��,���K�oQ�|�Ǧ)�ou�m����Q?��۳�6<�oU����5���,�����Y=�g4����}����d��?@��o�/�Ƣ�8�o,���()���?ؿ�;����蛨��K�����j�k��b���=��߿)i1��3���[U�_��{f��մ��o���o�����mH��Q�W�}��~xf�߿��.�+����N�~��(~ݻz����uQw�}���������l��ݫ��h���߿�iUE�o��[D6��J�~V���Y��?�/QI�.��O����Vi�[J�㛝vi���%Y���odD��~�f?t�/�?2>~	䛗Y���D����ʴ>WNU��?���/҇�o�oHІ�C��_�7�􇮮��p�o���'|V��r��g��~�����d����������g��o�X�g��.M���R�L�?�ǔw���[L��_�sF�v�X����2��]�1���cn���*&�&J�f�c,�o�����}��m��2�d���8Z`��l���r�����?��
������d���������H?ǰ�o�����������ΰ�ϝ���>b�s��_�~�{�]�]���-���g�S�7���8�S~�� �`#�W�������w'Q���α�?��.�΍/�(����`���9ى��(�~��bp?�_ϣ�������~�~��#���_�� iȒ~�o>���W��[���쮞5��~�S"�5���tН�1ipiM	��Z.�Z^�������hRɛ6�/�3�/����_�ZQ���}���(�W����zw�%Y5Y��s�NE���������=��נ�������>-~��c����e�.֫�I��x%���3� ��.��3t��\��6��:�0s.D��b�x����O{�u���Y������׭&�[W�i���yw �����q�o�}��u�N_���z7���������1���G�?��/�`Kvz�������Ó؍Et`��$�'p��G`G�z�}��������(d������z��h�G32Q�qw�O�k��;��x b��w�Xދ7I���������W��8,�����Y~��S~޹��;��r��7M9�ggk(s�j��^��^�zY�%O����f����N����Lo�ɣ�عq�]��r��U$m��.Q�(.���d�m�s �Ⱥ�_�������Q���q�N����V����m���[�����hә��e���
5�����7�k���cն�������ޘD����8��7@���}���`�S�e�<��z�qSP�t�l�|�� ���>�>|t(mEdW���ވ��K�q��sc܋�~ٷ���$����o!Z�q�{3�P�U9�c��s��SRq�s'�^���h�ea����R�=�;d&7Ҥ3��hdGJp�P�}�Y�D4�j��{<���c�	�C���g�y�ې�l�a}#	�5j7�"�t�[|���/��k:���n1�3�T�����KU1$���l]�}�5��@���ʫ����S�|;��!n�?�\�fwn<ī�>P3G%��NX��z�l
�V�	&k]�����g�ݐe�o���˅E��X/mQL����<�&����#�M3P�����qG��鲒�u�à��a�@�RAn3��{�Ue���LZ����W�b?y�^���nO���8nʶ+�rC����$�!·,=�$f�
+����2o��m�J�O|�'�@�QupT�{��F��2+R�h< 3u9w���:�ٹV��V�ѫ>�+��w�)�4�X���t��e�����6*5)��H3��'������8s�1�������X�&����&놱4k)L46�V���&@��r�)���y�-c�\�q��hY�eN�x.�N��>�����i�����U�>���?��u�S�X�V�����Q��L����G,�BF�+���][]����.zq#\:�P��4R���D=zO	����#�����<�n�����9�������z�#�m���L���zZ�;�ۙ7���ʉ�Kg��YEP�7O��=5���q39[��ں=����Z�=L)�p0Wc��,hK�+��}����f�c�pWr�������������אǻ�����N����wgP��*G xvS7y콖�� ��j伕җ;�"ץ�����̉*``�&�����eBO�b_��U;M�,������n�'��~ d��7`Y�I�����,��]�9��~x�xֈ����-X�'�-���w �/���ew���������j�\����BT&HJОo��Q:�ѥ�M-�)����Bǖ�Y0c��{`ቯ�0��$^�v�$��#�pG����ƛ�	\��6�F�7)���mbr�:�"��5TT�>g�6o��|���`�8Gݬ������uKb��OA�:NJs�M�)|�ߡ�RѮeԆ�*9�k���%�#��%N��)�Σj�r+ʲ��;`��I~�V j�W�"�ݙ��0�������\���M��i�^Iv\5��
xK�py���7����)�у��YM�Mj�0�b��[��;_bf��w�;R9_�I֑��}�4��7t%&A{�Սs���ѠZ	D�,t�C��q~��@�(�LG�	���vlVT�cu����Q�\4̽���0�I1��OaW�;��1+�k�מ5�^9�K��Hхe��	'����5* ��n�Mr��@I��!�jY�6�X�H���AJ?���{m.`�N�'	��,�J �������\t�i��Am�|K�3�;<�,&��O(��yB�_hdP�_��6T��ʅ@�Q�y~xʌ�8$>Q�E���ޕz��q��G�<���]��i=o±c�d�{W4����u� �@��a!;Z�L˓�73	���U�����j����i � ���k����nu�ck�9���h�1��\�<�
�>�P>����� ����g��7�C�����%�9px�P�\��ܨ�t�ܸMg�/8J�<��ۄ�~ca�a���t|N*7��kd\c��W�/�炀�	�;�N@U��>��\�gA`�=w.x��m�wHF�R�=&���zS�Oe[��r�	"��z5���W�l��dMi��3��|�*���"��ج�ش�EB9�{7N���^���TG4�|������ɚ�Fy�%��$�d�!m��x�6���0���AXNU3�����YM���!�^gyɽ�yz�ͪ�{�� �"��;�m��)^y�Z�
D))0��=EJ�̵z=��y�b���'I��!�E�Yc���V�l�vh�J�2d������]Cә��x�o�
w�cs(N����J��w�c�-	bS�&����:�WQ��Y|b!�o����K�VE��S�|�l�ct�r��W����T��:��JOP3Ā`�����в}�7���~��}�;	� ��Pk�,�]=jtuPFW X�0o��4�1�����?�ԧ�� �V�D}��t�'}�܁OJ=�'��2{�;��%�a���6{T��9���¶g;V0��Ҍ8�x�������� ���]>�����A��i��E��CCR������&*qV�3�-^���t���[�
�D�l��3��V���R�5D�i>��j|��ۻ@�d0�?�2>�>�3s�)G@qte�z69�I��
��{�pu�1���c�,a�X���}����:�� d���d_�ؤݿ;��z&�s���0�I������N�L���i�KԵ�eqF$�T��>r1[���Q�`���{��|#�{��0?L�B��v�,z<�p�ʞ�"��r/T/�N�Y#�� �Bv,*��N���'U�y�ё�B+��5L��&2ɾ[��BSݴ�w�YAF��7�^�\������FOJ�i�X�ƌY�}�:1�$)[�\��|{�01���?h�������(�]=��g`��+\<d}�R^k�йPcu���ƹ���������k    L���g4� s�L�Gś$M��X��b��b��@�_��ش���*�O#�9_�創�j�mCY�Z���
U��'�Lf�T%�7�����ʶ���cH�v`v�X��xp{pj��,Ȱ�x�����(���8ݮ����c@HR��3S�w!���(4�m��P{S�IA�9x�$!)�$���0��OuӀT>B{\&�If�cp�Sd�D޺=��7���y�F���;bF!�E�d�:��ʹ�,>�K2� �H�*5>�E�<+��F�V��R|���S�ycљ�3�5���҂���7w�ʽ�H�,*�MZ,�h=&8�
��Zw1R���|V0���6�tV������xC8��헚 �V���2����v� L+a�ֈ� Q�I�D'���~i/��gIyd�zƟ#�F����k�}ł({ؗn$P+��{��+_�N�2�Iԯ�ۃ�\�vU���v�&Zt/��S1�vm�W�����$c{F"����Ѥ���/;)�A*Ǭ�i>C� ��e%ߠ���F�D$?!2x��ޖ:1���q�Qxz[��A�U�B�He�p�{ba���� ���u]� �ز��z��`C��jm�|Y.��� �&��ǐ'��&�z0=N�AHPP��m�x$J�#f)�]Ү�%��B��0���R�CsdHvd�Jj"�qT5ːBg��QA������N�����׳�o��a��B0I��жh�3�)Z7�xˉ�]��8�0�c�S��Dzn3&��V���$�1q�~�'�Zd�j��)<��@lG`1����K6o��'t���,���6�=������ǀ�"�Ep@}��fB�6J�/gj�Z�UK&��{u}��؁�D��1}��J73k������m޻��yܐ8�왿�N��x+޼���&�`c��5����#I���7�;���#�J��!�K�&��ʹ�=[D',
�+p-aFq���K9u'�1���oi��2a����>v�bD�!����)���-�?�5V�QJ��1�	fw5f��cN(��
?'��C^	���!��!e��J��DǗ��LZ�O�-L�qx۸���eV{������{�3��y�Lr����e�r�κ��B�I˹qͫl�r�p���}_���&�Y8J����B2�:�\;}�e"o����ɋ꼷7μ�a̼�pF���e�F
����3Q�%��gX��f쓐d̡�a[̪�ّq2ς�M�Q��[�1�爢zd2��lљ6Z�?�'g�$������\��S�_Q�qh?B�#9?����RZy��@�u���G����KǏ��0��֬M��J�37�l:��r{~G,;���f@p�*���9���7�����7�~��1@��x������;�ݺ�I� Jө�s��h�Ex��e�����I�[��c̾����C�io����~0�7�[zEh�?��9�����	I��n��R�ĜHl��m�d�E�&����~�^-��0[�N��zPO'~��Y�" �)�2x���w���Q�K�}��]�f��͸�������#.�<#fly0y
;t,V�G��o�z���Z��8�4��q����!baF�Đ�h�:�q��
���J�z��,���6g`x�Vs6.
����LoI��!���έ��$o	�;��>Ƴ�w|�T��U~Ohp� ���28�s��l���,�mv�	,�Џ�[�g$���4ˉ=G1L�2�̞yOI��Fo@�ub�#@��E��ym>��b�E��g�R�;�G��wD���O��N�K���*��k��C��1���i�&��$��e�W(���O��3Ą#���d)�I��p��y7^�����яLڌ�GeBg��� QV�z�yjYK}�F=bz�M:��9��1�e��kiY�|����}[3A���]����y��x��J�����xX}r(�S�SC��� nľ����@�I�H:N5#�@\O7���*�M7��m��?Sw�W��*��(<"cX+h,o�)��u��|�N��oo��]�*�콫z�]w��IC��LE7y�l��i_��x?������X9T��Ψ�!{0Z���)n4�N��b+��YtVK3�5Ă|+ێգ���ձ�{�Ȝ#�יA\�ʃ!O5���$}�z;�̆�h����?��V}p�Rz76�Ux �H?�fxz����f�@9���G~��F� �f�����r�%O%!���#T'=b�#�4�&Ü�$[x�c��Y�犩��HB��녝���u]Z#k�Y�0�0�La֫-C2��nS��e����<a�RH�����	�oe���0,����.���?#y�Wb�^��˂^T�<���ö�&*PMH���9�|��zZ�U��U��D�o���-X6��;��ײ�_�����Y�`TsK�kƆe`ωx�p�&�rPe�J|�Dc��	���L�g�É1UB�Y���׊lVe[?$p�*Q���l]���$����f3��Gi��{�*ު�[ ]:�o�#�����4,fԩπ:�n7����0_,��EHF��m@�ry����H�����N(L,Y�F8DhK"?�.�h�E~���Ff����Lu�� s��bT��[������ҧPP=lr��k��g<�QhO+b8L}b���F���	�m�j������8���O�sͻ���(&r�N���*��ܜ:�D��#�A�>�v�B=��D��I>,���F:؟����p�.�^�!��Ҙ�h�G��O��I�e8�lG��g�9��L"e �[C`�F�k{gՑ�����[���1���)�+�s�snh��SxK��\��t�j	_����q����&��hO�s�3E�������D�?�� �k��U˜��-��*�ҩo	a!v����%4ܮ_yL�(�� 4�$�&h/�I��)�M�߭/�ǩ�W�6E=��>�X}���pe�U_�e=��-	d-�9A��[�Jy�a!���^9����� b<^8���[��"�у��b�`æ�j���R�3ۢY�X��f����
N �3<�"�O�'\��~��Xό�|l3K��~R���y�xL�wQP��H��C��^Q�Qp���C��"�$\K^�؁Q�JZ�_(J:�\UȀ�N�v�����=�h3(��?,��u���h��'��M������w��K>�YqI�+�K���l�|ZmOf�w�$�?�qU��s�Ԝ��_�6��f�N�m��c�Ɵ?^�|�m�,�gh��uk>�%͂9�N�8zP�	��EԻ
)���c
'(�E�"�7줈�}�	���=>;��������D����P�S�`~��~�6[�x`/�F���r�O��V,�'��fda�ڬj�,�ِ���u�nkHR\�ńl�$�wӖoM-osy��)巳mo&Q�s�	��Z�IlZ���iu��P�XD�r\�7�'�&���p��s�V��ѱ#����R��ğ���wh����$�A�mn�^�S����qɸ���o��``���3�&�<�ʽIF>E�<��'�����>%u��!+�Q�L������c��Ng�p���#Q���MX9᪻!���7�<&�2��,�ȾJP��H�F��ܩ�ѽ7��:Be$I�|+j�`x�{��G�ϫ �,�Ĵ�iE�7�������̹��&@Cⱸ�u�����+�mP���0��gv��[���>�n�3��X�k���y=	ì�nSDO�z���eF�<��@7�&���H�1K-7�!�Ϻ�֍�)�H�}gp�Ҩ#@�[T!����t�w�c�f��s��>�e���Q��g�ꓛc�3_�,�����@�Lb		*'ne5v�)L�'�s�r^}�!!���	�= !K��������k"? nJ4�A+Џ�1q]+��c�;T���REJ>��4�I�H�44ŵS�?;ئ��{��c��(�"�0��J���cJxɿ�6}���Xg��&���$;�	��~�>�hN}?�O�[0*XJ��fXX6�fo��    ag��}�~`1,Ҷ<�s���j�!���lDNy{�mr$��]mt�i�"8������5����s-UfL�.�3Em����E+�vk�*'U���^ �K��%�����p�h�ܷȏ;���ߔVI�q�:Z��ŝu��2(x$b��k�p�`�C���	R�+�K�#�a�Zs{s��@�
VF@�'�$}��w��aQϬ�h8�"�E2@g^i�<��J��4�OK��n�_�tC{ b��X<�j �4Ԓv�N��vksUy��%Ѿ�ϖmZU0<�i�f`����-<z�������=FK�Ê�լ1��g"ȩC�h���z�ױ�$�k"}ퟄ�2*����%.5�����c���Y��4B��F�9�2��
sj�{W�ʪY�Q٬q*�Ѹ���F���ʮW$�,��u���r.B>u{�xPty�9�v���y�j�C�� 2 ���v6�,�r�M#���;V���m�I�XTUϝ�ķ��E;6�@Y��(Lհ0_:y�
j����~�f�z^ʳ,�2��H,�\��=�x������r����q�t��p�`d��oW�taG��[O}�|��7+=+��PΠ�� ��)�c$!�˂m3����ͽ���;��|��D�[Αë��O}wԅ�.*:�t
m������F�X�P�V�$�'�-��9�������Pd�h�/�u]nB_�A��{�9�,Q�%1egQ�ا*�yܴ�<��ڣ���qsݩwަ75�T *�>k��xʪ��Ƽ1}����ɹQ�]��̀&��X��i�����ކC�ߏE�><��+F�Z4w�� /��ֵ͞>��7l�4&���Tv�གྷ�7��2!�`�a�U0:@����@D(Z���z~?����Ej�%+�V����
p��}�C�I��9�W��T��z/�<xnQ��|�3�Բ����g����T�PM+5�!�DV�Ξ~P�M��H�2��7�@�q!vsCG��5�r%B��S_���É����'f�z�F(]������_�tU'�ۡ��2���a95�a�:�3�~���UȒ��4.��QGq����Q(4�y���AA�ږ�9���0��µ�j�I�!Ƀc;��Ii�����R�*���v!xE�饒�A�y�$�L�`Y�u@��е�_#O�*r.o^��%?�^�,)O�z��Ja�/�OLZ���j�w�@��[���^�w�efw���cnt_f:�:K��z�+�����t��'*��䷛)n�yB;x�溙Ȋ�UK�1���yP���[$�:��N�?�Ě�p f0�:X�&�ǹOe��'��! EA&!q�'|��Eh�$�j}�z;��g��Wy)oA,�5�P2k��VZ��䅩^�Y3Q�0Q���xh�b�N۪��L�S��.�vh0�n�� �PJ;{VUe�*鑇g�ޡS��!�M&�6����,O����c*e�e�e8��(wC�9�����(Y�4�E��1��!&�&q����N�F��{7�ay�F����P��z��)�
Ġ��G>��}��s��$1c�rb�q2��cs ���f�n��L2�-L��Tt�?`q�Gk2�!04��c9�PV��q�Gc��*�+�fc-�&��ٞ���/C�X/���2�2�P���C�y�J��(�ʿ��J'����W�i�;=E��(���6^���u56�M�m,�o�Q�r���1Js�D��`���}T��Ӱ��~(�*b>�#J(���~�QwJ���l��]�ٓ��P���\o�'��I�Lwɀ��1;���ə�K�IX#�����|���nz�Ja`��7觚���$8��u���[#�?�aA����TL���jݝ='㑋��SK������[J�"��E���̍0��ٴ��Y��S�l��{�8!y� �l>Mo��#���q��	������ �`X�RW�������$�4a�fe���t�2{�U��8�3"Z���pH��5O�{��b�M���0N|�V@z�v��H�bb:>�}ަܴe8�$�Pw<�L;�j�O�XZ�(tJ���AS���
%܍�]�'��:I�eT��dk5!�JlE�#��^��� �x9[W�xFE�iӳ�I�h���g/������e���{s�1J��6F��!Cu���x��QU��~���'+q�z�dA��O=x�aQD1)�!�m=�"�սa-�	L��+�_��*���B���z5�6m�~����8���&�v#$gF0�2�ʽ��b��:9�C� ���=�3�2I��mʀy.qT�����d{Z��GL��a5�.� @�@��4ݍЛ��4��m,ϹQ}WM��:�P�=��je����N����L�{T5i���P���*� BJL�k��QB��G��6�e�P7-�-�&�c�n,|*��F�\��r�e%h���u?:]y$q۬g�x�P�ZB�oz	���}S�k���:�Φ$�� v�Dv�"�`��|�xc�p�ShXLXI�ƅp��v�P�i�>R�#X=��.�s�%��`ȥ����V����-�V㢙T�v
�e�Ub�n�3��ה��|.88%@(�v�<�G5��+	��d�̈́�H_7�~��l(s�&��sp&օKa|A�*'�M�
a���( C�ȓ��F�̉���b1!�Wà	/dGie�d�^oj�8`(s��c.\A"&��y��z�,!0�~���"�0|�{f~�ңG\Lr�33qC� �@���� �D�S�^��,�=6}KD��
*�B��Y�ᫎj�Egdh��^2*#~ȱO��}���
6����K�FM7�ai���:�_*{~}��ٹ���j���S��SQt{�F����� ���\��+�>����|�e	��׺D��h��e����\�?�|�?Ͽ����}��?�4?�{T���<y����~�"��ץ�������&oO�����6?Nߟڿ��%R߅�_6z�_����h+�ߥ����C�?�t�}�������ݟ/~>�_��!��v������1^�����a�g��^��}k�k�D|�Ѣ�q׋�MEq���z�O^�?�~�'�'������5ݘxs���k����*��M��6E�xΓ�k���hM�~�c���}��^Hc������ʚ�7O���X��\E����w�W,y��>��W�zF��u��{���̗]~�������f��z�*.����$c��|
B���k����5�k�eQEޗ���wiL�V�K�[E�}�����m~��u����!\���5��Z����q~������v7̊���#�e"�.��y�1��{}��	y�����I��݃����������LR����V�[�%7�}|�?lC*���-����'� 5��	�{"r���*R������W͎�"2&k��3���Щ���u$ߓ�ku���FH����$������]^��7]�S	�,�N��k����D䵸J����[��}%f�).,.��/�)�|��)h���ķ���g�k��/8�Kǌ��>�M����W�lP����?���A���S���������#?\�'�}��y�+��>ů_�����O�'�e  ��C#۷�S���ŏ��&!�{m�O����X��Ə�j1�^u��d��O������/�p�/���J�&ͷ�0k.y��z�+M�mH�hH�N���ߏ����Y{�s���"Qk���E�D����݉�����l�;�#�U�����QLdLT���|��&��&������_?R��~'���wp�]5M{�����vuw7���*y�݃�+���S{]u�תu}�ū0ߛ���ͫ��t~َ+[�w�������s�k�홳_l����Ńs��ˤ����21��[�Uh�ԡ�>�<��yVv��Q��Ь��S��'g�\v/���m~�����W0�{s�n�K����k�����p>�����:!���o�f�|KG�}m�3f-�T�&�!S ���]�u�o	^�C�H���^�K�q�}^������Ҽ���Zki'�I��+�eLM8��O�k�    a��q�]���&���ȑ���t�(ɏ�[���a���^<��p�w}H����U���o*����/�Aa:�NG�l/M�qjY%1@o;P)������4,{Y��L�G��fσ���	�I'�o#� ���h�ڐ>o��j��7�&N�l�fҟ���jU�.L��4uJ*7֪aCa�c�G��y5�U+�����۾�p����]�!4"4�� ��-�H{]O�vL9$�T�r������-�O-�K[Vj��(\y.e�0P��1�A<}� �J0���9kk��r)�ϐ0W��_�l�����W�<ΉP�w�iW�D���5!+�&a��xF��Qm���T��#����1��M�����4'`����-��XA�1-p�Jzjpe��h� �l��}ۧ-P����Ӊ&+	���l�^�~ⷙ�5�~�-���	U����On���&G��4�ƍ�y�F�T�ՃJ���M( 쮎�N����!��qL��0+=4�Xϡ������L=��=�X�
m�Jk�s����O�R�mk��D�5��[X�~�a޲��M����7�ͨ��5ݛ�����l�-�};��4n�xy�
�kl��V$�׏��v�,:k��3"��R�	������i�\�[��<q�N���
ZH3ĉ҈,��#P,5L@����|$�|,�9��}��ï��������r,��gNu��=?�񥧦���V\�c��0�]�X���t1�(^!n<?����,=�UO^���m��D\hNP��L�����n�+�+2j���M/�G�r�T?�y߽�+�\�B�ϐ��{rj��w�]��h��e�+m�h�%�@O[}�/:}�xa��{���?^�ȇ�����M]̽ǯ�\`=O�t�L������ɞ�"���03^�qu\Um=E8�>����?O�1���
y��9�˞w� ��.�
��c�Go�\VtA���9$p5�ݘP��\�#1����z׏�MB���CB1�K8_��9*�'�Kr)։7���� ��RDʾ�Z�8�p�n4���禹�	�:/$�>g-zN��$o]'�$eW`�GCE��M�H<������ ���癁���s?�L�>ώ��il]�<�]�yL�F��C�x�Yy�z�|~M��R����Ȃ[_[����tj��s�Hģ��	�d�$P�u,��w���D���ڰ�\tr�1�x�u]H$����	<��|(]��fs�1�)�Qn��؉h6s��@�M�æ<&�ث�F"���Þʸ�#���h��q��3�d��!���s�o�i�Ϛ)�W���5�;�������"��u���Rn�:;��8^F��t[ {Ӣ)��{F��ٽٻ�T�Vt�P���*�^�ɯC
���ԯ������y1[}h͚��2=�j��X�1�Ț��e� ?��	�C�\A�:���3�i�QqP�L
�OHg6�1L^����v��i q�V�r a���Q}���.C>W%?aj�,x����q�>�$g�k~qM��:�&x%���gdL�1~c�1�z��C*x�'t��JƢ�nH��9Ί�V8T��:�jA��|�Α���}n��E��S1��R[%���(v��0���	�>�I���̇n����eｶ]E�m���	a$��7<�{��74�ʪ̪�g���m��T�\����z�D�hgҳ=B�#l��<@*�&��t�lͅ��m-j����fZ�A���S�q&=��q�C��4��L�*qۢs�$޷�ɯ����Q%�P�j���FL�A�+�4� �pP���'�Y�l8QH�97]�W�z���Am�Lt��P�Ό�����;Q�	UV�]����Fm��%�NLM+U��0m\��r3zɤ:�p���CħfK�I= ,�sf��Hf�(��f�Cg�񼇑hϖ k�S�Y�-K�a���֩;cK�\z��w�����1�m �~��ba�� �ڋ���P�4Cѝ�b����y:���[��a��\Wj��6qק�9hZ'4��|&5C	���\O�/�YZ�G�(�f������Ǌ��V5K?AE���V�t�?�.M% /�&eIr����N:3ʌǺ����G�������$�ц%��Ӣ��2dG�4Ht�����c���O }>�U�w��fD�/*���P�)����%�63ujc�i.�=o�z��(- Lr�r�xP�2M/4�0\X`��l�j?!`��l�gজ<�媔-�L7gf�q��u���n�f#��j;�1a��;��,�A=��ƦT�"}zv=��	�Z8�AF�ުL�O��k\�g��
�p��܏�5�o��>��ё��؜Q�����;ݘ�=��+E�- 4A�q����7��:�}�����vY��Pg�h�;���
��b�$BgyE����@�!���[��e-��͂�7UJm��q�?]`s�Ι�s
��
�4X�=	;���N�jB^־$�6b�� l���h���8�������助a=��=�����%�a��H��PM�@K� L _~�S�"�h���;���a��3�v�mj����A�"d�.iL鶢��"㑊��ЎH(�>�p���(�D�_p ~�mnr�C�Q4�2��C.{�B%L_�G~�_���-+
UNF=� Q�9Q�ݸ�����Vn�E��{�D��#�S�~ (�4����%�j CB܉'YX�-�<<�\[@��F����
�T�׎�ώm��s�1��h�2o�J������J�s�0q;s�@P^pa s|'���q0%�m�� �(B��z ��B�����L�o��G�y.�Oz�S��'�� Ҧ�<0��#���A���69�B8��ZCT*�(q�G�~n"��]Ի*Er��ZL�4��>�U��~�C�%�S��n���/���1���~S)��(�G3��D1��Ɣ3������E3��}޿͌�#�p���*�/�B����Nk*�ׂS�x;��:&�E�^��e>�ܐ`���<��N��������L�_�ñ�,���z��<M���.�_���h�(�-���]�;+�{�F )����$�9p��u�f6�D�ZZO���
z�ݤ�A�c���ucQ��#1�)}�	�����|d�qw��57�ݨv$�}}f�DݞǶ���o��U��P��s1Dn1�v��c����	2������0�_ ��W�zQM��;�_e�>�b7�kJM�����W�f@Q^N��y!�]s��
���_�&�
�.LU�ն��ZО.KC��:�}��C��� ;�M���=Џϡ��S�����^��{!ȯo�L0L{����"���d��ݡXq�VfE{�Q慁�܄�&?=i[�ȀN��8�d���+f	�C��q
_�	�T�Ѽ�E��W��/6u}V�+�W��	��Vav`�Ҧ}cC��B�� =|�����1HB�#՛��~�Na�7Ҍ��+���1�{�ڻw�H�N�L���"ahO@���=���3��"c�E
ORG�@����o��~��S� �M���!s�61�.X}�v�g�
l��]��˥�n��Щ����{�v�y��됪�)Q����π2r>G�z�#-u^pѾ/ۏ�~(�N���q�%�;�mH�q�MD�B��H>sq(����ew����<���z뜐��W ���[�u��W�l$�[
Y��c�u�UC�X�zO�} �|���(�p!���xO=�Nˌ�֘�<���f�� �r���l��.�۝iC��:���کu�S��/�!jB*�X %�$5�f�5T,���L��P|�jH0�y���=�k�z��k 2Z�?�vzR޸At��}`6`�����!`ri��{�Å�A��h��	�� �%:t�6����x�ت@+h�	Eßp�������D[8]�nfJw.N��i@j$��,�*��J����_��a�N��dߜ�1LFb�gtώj~c%�ߟ��-�������Ъ��C0Pp�$���g�V����g�z�q�� �r��d���Y�e�Mf�B�d{$+,    ��x���y*��
��2��6���0���8N5Ud���\B��j#��`y�^���C<��p�+s����~K1�:��#��ol
S ⦩Z��k�,f|r��$e��eMD���c�@$��-c��hJ�^�)�D}�o�H՜��vm7�M�Gu�v5z�NB�q1>~F����Tө�Ҁ�B)B e�g�|=�p�R�4l4���\����l���W�( 尥����0��5b�u{Iy��N&X�5K8w��;�ح�G�C��Mh�A3z�&�T�"W@U&aZp[�f����~6�|1딲�R��7O_�pc� `)�z�Gk~���(�b'Yy3�gW�C�s��'n�p,l���A�WB����h~��O�MWN��zV�χK�w��H |6�}L�ϲ<Y�]�y�XA�!��2�����h<�%نU�s1���f�-��� �|i��n��bqN�eӣȪ�7KY�ǝ �tH�4���F!æ��cK����t0ͮ��0�\�o��A�r���
��BtY�4tE�t]��(�����c9�x�}������$�!�]1=}�����@��hkV~�8�Z��9_��V�PM�$~X�^���K��y��t���` é�+ҘD�7/wh��ӎ (�9�hS�=�L�"��Z"f���� �}T��1T���^lf��T���x��������R�Z
�抡��W찉�9���ܙ�^��*D/���-A�#�& �{�č>/���0�wj��	}���q�>zl�Ÿ�YA׆�E��fG�.t�vڬ0���z!H�d�Ao�z��ě��5?��[8F�3�m;�5�\�t�J�� ������[	Z:�y(n�0�D�O�S�[�����W��u]�BEqJ�`���4hY�3�_���p0�V�<XTrI}���nd��xR���)��� @~��$�8�l�����2��J&�n��,�,��6 ���l�>s��Q�-'`g�0��VR���'�FLc ���0+�zI�R>m�Y�O�t����ˮ����U{W}_i����P������-���$\k 	!G�
n ܉>�L�s)�]�?p��*�h�$ܰ	�:�N?� \DnP�_l'tX>�u��o��5
�4��Ֆ�Gn{����6�P	׮B�q�d?�'�o�$�vG��)Ff����1�,j��	l��lN���7��
,��^FG4%O��:��^c%Qi\#m��i�	Yd�K�B�&�8�)�Ёl}D��$��t�W?P�����CԬ��rߣP/Ֆ�P�*�Q��&qX��m����b�������q�GO��o�9�9:�w������ㅏ-ȫ/ 	��\������#���RF�,Y�1�n
]!�>I��_����Ӕ�z[�>C��Uz˝�z�/�������C��F�~��A��H����ظ��p�O}@9!5�J|��9�u� *l��2�KR��0M�C`j�=~���&F�C8�<�dͦ�66¥�e�s+��ÀH��
#��^�M@��0�*�S�+��%�"��^��^O<�b�(�?^�Nl^���=9_���8OÅy�N����>]IOm��y�?�Ĥ�ؿ�f�V�S��Y4��;�$����S�yt�u g�Q��T��H,����+�_��/j��:�(�(`� �(��`�����a�L'��7��LY9"�pQ���d�%*��3�����	|�i��UQ����H_�)����$)Řζ��ݼ^L1��c���$܌�b^�T��3��݂X?�,.F������s�]AӿYLG��`�Ĺ}gT$4��6=�J�~�IIk�ʵ�@sѝ	zR�z��Ocr��l�PJO�^5t�r��>���{�1q����J�H;� �]�$��>`IW�L��e��m�Q(q_��{ϔ�W��]������J�V��F�)�)�bN<����IO�t�:L_���k�%�Z����D��!݅�ۇM3�զ�� d�A�e��HS�i��߂�1��L���9��mqZCqDO��HZ/ay����3K�G���D��)t�9��B�Yj}-h���-!�b�Ә��F@4�״z	�7�1@��K������\z<�8�$����]�����dA�5U�{l	RNR�'(`L-��1�#'4�3x��<��*���>��[\M�EG�>y��d:�P6*?&)am�rzL\��
�8�2�rG3߯���LQ��U
��kBb8H�Τ�8��o]���F�RC/ns瀃{ ���#��PS}�	]Fe?kSa(�����ߡ���>>�p��P��x��^�w�P$���못o����{m�-f���Øa3� bǱ�hm����鿘}�qEQ��o'1m�t�tG��� ���n4�ϖ"u�zNr�d�7��Ii���]�[���r���;�on��oApwa�T��Ll*�`������#k[e��{�pZ��b���.h �P��4��6�w$ݵ����6�)Qp�N3���ά����D�b_�W�wx�@��`۹qڜ�9�.�9oC��*��<:��Y.C�K��ཚr�l�������@:�fD�ͭ�^G|-b}77�C��f_��a�:�~N,���r��"A�4��3�����v�1差zP��nTc�滑��3r	���rPEkA�I%��4���i�ʩ��J(���Fl�M�Cǡ�=N�p}d�R�b�c���ZrJ�e9���;����R��H��6�'B�*H���mLKw]x6�E��=Z�����ju���<�-B�v���2@�T��M��hFvaX�H�S�߸˽����*�k"3b���.��ci�i��D�>�z��N]�׶p���sQ���2cf�)��1��Q��/j�6F���=�mT�i>u3a_�|P��A7�D�`r��0���VlI^��88�2g�������a�I�GY�.��J�p`�η�@�����[P�Q[�H�yt5�4���%cӚ�0��$�ou
�7Z��EY�^��	��[���"l�ѹ�Z��9|.�a��:<6�қ	�IK�rH���`uK���N����aؕ�>B���./A�x�C������E_�
8f�io�2� �yP��"��Ϩf�b|Dr�o3�oc�i _�~�Z,�Ř�/���(-a5��)����`�?��PP�I�g�{��KtCns�.���}�UG����g�h���iA�A����x+?�B� ĆLu���
=���L��-:�q��u�������E C����w A�/��`|F@��V� �ƃ*�5�������{��\4�88?����g3Ѻ�|�K !��Js9�c�	��e0.p�p���)��#�K��r�l*h~�/�y���FYxB5cG�$�I��H[o��&S�P\��I���׸���b��z���q׮y��ǈ�^����|�� ��};����)���V�苯�Up=� ���0��~�H�vk� u>�Xr\��=�v>��И���Kʣ�������.�QL��䢁*�*rH<�2$� ��R$[=��)m\�q��\m�*#�b���O4 ��_�W�q��秶f�'`�r�Mw�7�?�th����N���J:a�r��Y���hS��>�74�GG��֨��$�'�bQ�q��y�9^�e޹�/0�\�C	�b���g@B��<��R�����a�R��!����<�]�E�e���1J��IԊ"k��+��9�/F�ۻݘ\ڧ�%Ѕ�8N�ɧ#���;z��Ca �g�EO�����M������dt�Tϓ��I��fat�pH�}~{A���M��]�^y���=�c��W7� !��zύu�@�w�oD���*cQc�`��0b|X���+����X�裧~��RDI]��8�W3rg��h�S�L�|�Ǌ/8N0��P���[7�[�b�OL�^6�/l�T+�;4K�zsj�2�PL�F���    oB�w�L�*jO��Lx����`G2G�����͆������'�����2jMP��D��V��$�v�5!�Q���쓄��GD�T1-�!��l#�yl�i0�-��AU�F�6��V9�	u!X\�b��8��ه�0�|<F��xУ�'�S�j�gBڄ�8��f�b��0ڠ��G��9(cSx6�T���R4�ҥI'#��F:�Vږ׏S$���8-ӑ�p\	iݝ���&(��i�'��.�_�3C���wg3��b�I�un"��'�ęTI+}�#��U�Q�>�A�9�4��3G���H��,��k����l�YB��e 2�r�k �!��ߋk��c^�h]��6b_=|��8?+N[Y𹪎�>�q��U��L2n�/�x/�v'�␞�[�#�VC�o�*��!� \�4��u�,{��KBS��ܺ���H��A'T�+�f�������I���a��2�'ᗫ��]�� ���/x�	M�q���̴	�)
�W�$ �l�+��ث��9� ��0�`4GCz���'&���l۬�c�dfm�����6_sm��94�\~c-e���TqLD. 2�� �N%�EY0���l7R�q{�b}e��|/@�3�G�d��J�4��mw=�#F���n�6�i�c��H��ϴ��Aܡ���Uإ�-�Ü�s{(�$)�[>e�٭�#��poy4�Yч�Md�5����N�R>�Ȗ�f3~��>9}#��b��r;��+W`���r�p߄@|�T^�3�|֮�oMF�B�L���6��|?�����[!hwNRaX2%�-9��Wc?׀���9:�!Mmh�#�>��<n@m��O)�W��GQ3aO�C�0$�Q�4t932�V�b�D����ފ����-O�ۜ=���OS�C�ltԆ�/��l�l�������a�K8j�6�ʛ����?w��%�W����������b���_��.���mj�ؙ�
mYp���8L��c�97?��i��(�8k(���n�Wh�>8����k��3����$�]L�\�K���q0�^��4���P�r���g��W���v�����
T�PVkl8�-	��I�6�aN|�1�����L* 9�0����X�L�عu�
���w�,�E�����Q}� Gs�[�`�& c�v�Q,�R��_f+D��dw�|haV�M	��U�ȣ����.��i{�8cp�.�ٴ��;�xa9��f���-��.�S��|���<:��+��9�ݤQG+��^��E�A>i�N�>�������z��|ܱ�\��[�̉�rb�`j� �s}���<dn��98�>��֔�XvM�����C8�[�Q@ޚ�0=\q���X��2#� -���z�O��Q\��c�Q�w6����^`��vL�[>���13�XG�{��{����k��nlPܛ�Ύ{￟S�����F?�?WZߥ;��� ���,��>n��~�X����?;D�w��ګ_�g��K��?�p��]��Ч��k��w
�ǟuUk�1���e�r�n,��H#2���	�t�+���~��!�ν\Uy����}�TҺvV�N�Sp5��A�� ��\mR�Yd:��R��������s��TP,(pΞ��BK�yܑc�k��u���{v�\���k���~�����6I,�X /�{�!�;M$��M�S<=I\9�-i�M�kR�n����^�$x��O�yIg��#�`^X��"K�'�&'Y��ki�U�!8�)��'���]��{x��Z%m��l���#cྲྀ�7�p��3��rk�?
&-!�D�r(�s�vӄ����+�A��t��۾���G[�����([��;��K���xK���]5�^��6z����O{�����|��ƈ�����yh��c �Wή?�&�Vk�C&���4��5�@߫��F��6����6�i�ہ��V��&��3��H�1�^���/0�א���������CFt0{���VBC.-�J�Ȟq���(6�(B���ȞZ�׽ք�~ ����cM�a��?�y"��|=W�u������_[��}��[��[���/0��_�.�V�b��#�Ab\����d�s��*8�E��˟�$hu9$���{�M��C�>����>�_cR~�9�@��wA�>�g��']���Ad�y��s�<�-�
�d9@��W�zA����l�������/�=~����wZ͜�w-����������e�}{$��u�3N��y������Kqg�~�2N�^��?���#����rq� v�K����Xn���a������=I7nD�����vw�|���2�߁�������{�V�g��H�e*8��^�dWO��x�{-?�]��]q�?]�Kw�ܠ���y~����[Z.q�t@��j�� ��w������_z!���o������m��	���.'r/��9]��b���߲u7��Å�*���M 0xr�����o����@��%�];�=�/� L��T�On1_&�;6��u�k��o���ߒ���]���	�C��)}6��5�ך՟�.�3~��<��l�w4?2��7����Yim�C˔#A���b�Dp;Я:�����W�����������'�s/������@�Bb���2���u�N����:�['��o�����u�N����:�['��o�����u�N����b���M���s�)�"��Z�R���$�{6��2�S3���Ϝ �U��1���g�B�HҼD�s<�/�7�[��Ų��_O��'j�ͯ����r��Z&"����c�:�ȉJ΃-���������Sc�W�+����[35��s�S����?ǝ�]~}.~�u�����(N���������_eӝP@ן��?����s���[Z�}Hi���݌|�i�4��W��~u,�K���u��s�d�N��_�
n}[�~�$�i����x���_?�r\O��9|�b�N���koA$�IjvQX��ǂ�����F�j�n�/�tT�>���^<�X����[�z�j,ʇ�G���/+A��e:
��5�~�S���k���_<������������M�,���{��S�-8�Uߺ�\�����c!�k������^/�?����g�l>�����y$C�)k���Y�O����a�^��q���&�ҪX�g�e��������H}�H��|��������_��������žd�Մ�{��T��݋<�<�����~?��ʶ��k��]���_��>�<�/`d�z�^D�_��xݱ�\�?؃N�<[��� pr4p��]�YVM�������p���7��$�6������^����[��k���r$AE���\Nw�G����`��؇�-��|�[Pw���e�7���PyY�`��;�a�⎳�B�C`����˾z��5��٩x���|'��Y%`ϝ3X�a��+X�a�=`��[{:�s��f��.�φ��R<	�&��+�+�=�/X/�����~/vAfC��B�F�}6�M���M6��!l.ݡB��b𬔲��!���χ���A��:خ��[c�����n�2�8��'vs@dz:N2���
��U�E{.,ԓ�	�ShKI�Th{K8d��92��)��r��Ś�]P��aBwi������y��}מ`�m�n ��:���y�p������	�0���C�ã����@��w�$����hj!*B���BgD�wĈ����=	��,�F�߱����p'kqb3��H"i�ă�%q/��3���\�$5�g|Ȅ�U���ד���ݿ콩~����~���ڻ����w�
y��0>��e��1;o����>�R1��)G��>�B��Mz@O2v�{�	':JU���
f\g �@Y��Ք�4.��}�3./��N�\]k!K��0kKA[�J���p�S����@�wX��x�l�|*F`ޡ�k6V��c>�s3c('����g�X���?[�*���9�r+��Tl� ��P���O�q����ډJK�߈s��Λ���]��A    X9<��X�P�׵�#��$-c�?�0ӆ'j*s���@8JV��S~6Au���q��hM!NB��§�s����s��È�c����r�DVJ��a���ǥ����%*�>��&Ήٞ�%Ɋm�5w
�:7H�꼹C��o��{J:[�^�|��-Q����:_��K��Si�+���iT�G�_�[m[����k��^v�D�%IÜA�Q�<#����H_/���3O�,��gy��R�>j�mCt��;eG�ӣ��s�߻4��ex�ȄX;/s�Ώ�&�@�,㉗r���z�S�ҟ[-��V[�(�Į��Yy;v=-�鏢(%��w���a>QNQ$��K#���/�Q_�q��:Z^�C�L��S	���Z�X��r_���}M)Ȼ�<4�Fn\GjU@��xj덖�eҨ������6pW�[�X�g,$qd��,Dp�RǞp_�㡲���Zz;�hDǝ����^�őq����Y�U�&b�M���f8�x|�6F$���3$g-`-�cZj������u{��ա��k��*�������'e/ժ1�N�含=�:�d^6���v��+��n���:o�,:�j��6:p������yu��ǡa⎍Ǡ��%_>��'���֑�5���"x��fB=čwk|�M���|+M3���<��;�.t�[��c���1������I��+�� Zj��Pk��0K[݋�p-;���jz�x�v�FQΏ�0�іN6�v��.vn�Q.���q�Z#�~��el&�e/;�H��h|qO��:垠赊p�;r�N�.J i�a� 1�RZ%�~�f�A����e)evc��&��#�¿����'��󠽻U9a�dp�������H��"��b�8�Ш�B��������{(��%	Iw�>
�R�6���;����z�M��*AS�9����V3��=��ld���6d�/ɬ��"HU��ȑ^ֻ�-�'��(�#�w�{>�*�V���Wk��E��m�w<�{�Imhݥ��xQkw`����^h�͋}}^�����JG���>(����H6��Ǽ�w�k|��Q|�����4چ�?g�>����UNG�}h@�Do�&����h�1_�k��fy����K!`Y���	�WU ��{��J-�Tv��3�L��h�����>�(ܼ{�����}�8O�k����GR	�s"�ۭ`N�zisK�U�^n3vұ�&'zپ�$vM��� �:c]�7$�-���b��b�Pes��7���05MP�B��1�
o�a����Ҕ>U���+�ۀSp���p���^6�lU �)�5�yO���f��ze��('m��՟m�i)^��Пj]4��o���\s�������6F�QG�3��1��н#F�&�$�\x� <���3���Y7R���s�!�K�~�ײlT��1+RW|7/q�����E-܍�����
�c��c��_�{㿳w�>�xI�X$ �<Kh\i�����س����	� �6���?͟}?�}I��^��'��I���wk��.	�4��֠_?��p�v��>~�{��8� ��@|��b��& ļdJ��>�'��$��Q���a|�����r����<����i���p��:FWSڥ���6�����ף,��e��h!��t��D5	�/S����b%p�e�=r��/

��,�H�H��C����GMZn3dA�q�²�|W��k�3��:O���1����l�������^5ΓwL����(������+�IX�w_�d{^/��2���� �q�R�׳8R������B^��u�;�mԮ�,ү�eՋ���lR������G�;C�yߚ���\�y�����&]H����Cu�G�\����ew���6&��X�/�;1�6��� ��am����bF�p9�ny,4C�1yUY��_�R�(���<�8�[�{�K����T��֟���gc�w�3Y$-z	�&˅��ɕP��0�ݨ;ZցzB�Yأ�I�[�;��g����R6���|�{u�%7�z~_ެ�¶�[�:[�'�s��x�jT����m�8�Enr 뎷R�������m<n�r�.��%��j|y�h��g�ۏ?�p�ǩ� lJ1r���v�2i��M��2R���d��zm�Nvz��}���ui#�����X�����5OQJ�\�P�3�7t�_����CN
�O2�Hw	ն��ũo�k�s��_�B9P��.(�aGJ%wx���l=sOZ���f�����^2��&ȟb�yK�_�$�fz��,�!�lv^�����V)0:ǖ�0���L|ݑ�B��PlT�����[���(KRI^W.��i��V^cN�4�;����4-�ەx�!�
j
�`�X�:��o�C)R��V(�_�jDt��F�v��i��Fu$h��� P�D�m��G��oi�q�z	�Z�.�u	UN��O�T��l����������-���¢����Z���/Q�/d>����Wys6�m���z��[��Yo��z�	J�X�;P����|R����+9}{?O��6[ή���ìW����qT�U�q�5�[�K����a]6]���m/k�{#����r0�<�c	Y�}i<!���C��ךC�J�hn�s!�%vL����N�A�1�7z��3��4cA����٣�Y�~��)&q�M�/�E:@F�M�`��#���G�&Q��1"Y���,�!&?�C�SΩ:O�$+�>QŃa������H�H��ߖL��\N�Ge�o�?
���	ۋ�ի+�Y|� Ȃw#��� ���vbV��&���7���<�|���vy����o_��'L� L`&���PBc�ە��[�)1�N����Ĭ����c���芔`Yw�W^�Nl�k]�e� �h�hǌ���Y>�,����o�n��-̂8��p�gD�u���1�~�d��]��{��L�e�����u)���f�mY���Z�9quæ��=$����O]�^U<j[��;�H���<2�-�#���ӡ�y����蟣�$7� ��-��`�ڷ������q4^�lG|z��"^&"�C:6�`�%0(�gw�5�j�&vk��n2�����ᩄ#h�/v":�<M���%O�P�վ��5Ɏ�\�;���7	�96W���6�"!�m���������FG�Ȱ�}�!��ut��d�������!��ͭ�^��X{�!U��^�%{FӾ�1��|�61��4;)$��X�*���6Z@�Q��n�vPF��#Ӷ��`u.���>r>�ؖf��9�o����'~KGzD�y D�8.'H&��r�^��"v覩��x�.�60�F��ER�/����pt�Z��P� ���޻�x|�2�&�3�������5ERi"+bH�����4}p����	i��q�����Q?�%� we�z�f%T�O���ŵ.�Q���A �Z����V��%L�`Km�}�ssU�C;SU�m�P�uƐ��6�����j�����Ao�X��� uU�(���OPT��M�RN�"K��oݨ�Mo��#�8�bRL�+84���zWj�}�O�Pz��S=I�D�l������4�⌉��GhV�Z	:��y�oܧթqy�(N��faL���h��!i_�S:]���E���LڃI�����ԯ0�cb�Q|4��%o���`3)y���x�(��3=��'�n��po����y��G�ʐ��D�noR�Iu_D�Р7�C�+� �l��Nh��ђ+=â��\o�%Ej���W��o?�*s�5I	�T�4��N󢷪� �6�M�܊�`WE� �F�4m+�S	�wU�hy������lDm 4�*LB&s�F's�m�R�5_�
�jP�Pd:J�l6)=W�Q,� S�:�����[�w��]��=W��L?m��k��B�+S
�����h"v�P���x)~�a�u%_��Pͨ+l`N��~�9�܍x ���H����m1&.��4�6���n�"

e��je=��F:�*��-��!��k��B���1F�pN@����J�29���h���    �F�����a��Řzt�[U�w�1jr$�<P`=;����ͨ@��A2��ly������	$7`��O�s��#�K�?p6"�Ȁ����2��Z�I'��{��3��3�E��盹i
C%+_J�z�*<�ߛ{��8˜?�b�Š&87TԪ|�5jX��`��9��2W�z�R⫕d�q�U�^��$�X���	Ģ4�4�z'Zt���(C�U����=�}]��ط�¾8%A���O���d��@�3E��ͬ2�@���t�W��- 
�ӂ �O3,`��tI����T�-�k��TR�ܔ��
��o$�	
��"���ДY�@a$�eI-Mׂ�;��wZkn�K?8p��$�����@�EVi�Hx�H�2,�?T��ط�QF(����d��5&M52�����{.��F��xC�>ǵ�U9m�ť�ɓ�Ս�:�K�f8��Y�!Iá|x�tݵ[!�L�.f�OS�4G��L!����,G�Y�ׇ�ڣW��$*�S/�M|g=�nD�x	��W|ClO���V�>\���U�(��%�@u�>��g�n��k�>2����R)��^b8�B�IґF�Z-?,��P��m��cA���e�s��BV���	��6-p��B�v�	B(.T��i�(>�6�t9�	�����d�;|E�z�,_ݿ�J��]���ƛ�n���r}΅��~��œ��y� Z�g�*/��}�6�P��sǧH�%�*@'���`��6�J���������{|\�w�>PA*t�	��Q2�׹���϶�^z��6��~E{-��r�v����D�$}i��YH&�Z�M��6���V B�_�*/��4#[qPP�*����R*��h��yH�K�Zk���ϊC�X����o���|�t/eZp՞�^����("��	��7_�p]��s����f���
���휿���S|��4D��7'��!T�΁�F� Й[_�{���T>��h�27o�闦�"NE�1����٦�1������ �H���ڄ��KN.��ʐ���Os��N(Sh>Tm�ר;͕��#l��o�L����0s*��n5�p3c"��QW��ꥒH���ǯ�=Q�`JTx�P�(�q	B��!U��>ƍ9[1��\&)��T���SA�`�}�	Կ���|�%<�o!��t��H(�IS�uZ�&�����L�E��Ƞ�s^+�������D�,N%��Ϗp&T6M KOZ~���1k0��4^���֌�; ;��Ԁ5?��-]��`��4|(����tk1NG��MyS���s��RS8ԅ}��"d�"?e,��Kp𸣺I�S���c��#�Q�>OݨRU]`ݭ���j�Ʋ,��y JyQ�~s��ª"�ם���q�8���к*^L�����'*�۫>&f��T��y���2rg�;���:ؕ�Q������|�7K-���Z=�۹��G��*�JS�H�!�'N��KO ��8?�E(	
���}��%�:B����2��*7Fs����DSX5�t���2\�OX>��aӼ����}+3���sr�l�@d�|.���G�F�0�iX��Ȥ{��c��0�x�\�x�4H�)N;���sms͟}�~\=QC��1�TTg�����2,��g���� W�@�����*^�q �F;O�Xg�Iђ8r!��:�/<T�C�f)3�Z�� v�<���Ã�$d��й542��걢e���V��)�?)��^p�"I���s#=і/	���񧣎4�«�'�d�L�7���$^7�}��������"�1#�%��^�u2'������Ö��j���?���5�	�J|_�Q���6O4�b��ٟ�4��oߩ
�{���q.1��@Qx@�|8�������bJ��ށ�.��@)a�O�	��>ΆC���O=��$�u�Uw~8.�����,���p�>��44�Y��1��0S�����j��nCG��9j��/�P[�|%�Tq�?Y8ڼ~��c�%���=�Ah�t��~n<��ƫ�#�&�cx{���fZ"�ʪǗ`O5����­�� �~�#~��SuH�`w:]���8#����>�v�{�?�]YK�y.�T?�dI�>��Ӱ�ȖZI���D���rBE�c�Ы�[���BuЇ�p�/\�p@��w����ܗUu�i��5��pr׀ص2�R��kq6A���L�@ꊬD�k����&jZ�gظE�M��}�����3�)���W�d�锍>Ν���BQ�E��n��C�n�I���H���j�E�7rLl��u��h��D�P�m;�v>�����vg�a"��`Q��f�q�����0�w�&���q���+����=2=(��{X��!�=��C��	��q;�	W�~��~�7.&oU�V�}����n_�R�R>k����I2����l�J 2�ߺ�ђV�b˭��bu�m)�UH���rg�bf%qa��>	������xʏ���ݤ�0UǄ%a��Ry���1�7a�ܩt��j��w��ߜ��e���V�J�����
�}���W���y#�Y��7�rC��~/����T������>խ>�:c�\�o�sW�x'8��) �L�WC�Z3���w�: ^�A��·R���<�ڊ��,�G�V��Q��}�X�}�$�`��id���jx$(
D{�jHD��G��E�*�}	�?����,���Zw��N{�&��?�}��S�$��Ioi�|Q|%N|���M�Ba���^�b|�V�[�@֋�x�,cz�)�Eo�(�|xH� �0�v3�.�h|��R�U�V2��|�6����M������,dA`Ue�DK;�{v����m��5�UǗ�)}uYϋaE�C�>C��+H=�=V����QCg..��/���[���2�]L0]DD�|�v,�#��Ai������VR?�����=��ڈ�ڳ;�J�����}�D�/9ꩿG�����\�:��{��@��@���:�����so\e(=�Mt��D���k��5�%R�L�g�Εl啌�i�w��/�{��ގ)1tE��[�xS��O��;�n�s@��ғ�1l��0���B��.9ՙ·ڈ,&��g��,<%�Y�_-��0��>�H@gNC��W��|2#���$A��	X���4˪������.��iʓ��*ħH�0`�#���g^�W"�Ǆ�_����yB;�Q9j������zJ�?�ka��/ה�M5���:n ����	�h]��e�X��Eћ?�6�yg��<i�.K�F��U�!��J��\z�^J/��DV�&��6����4ߨ��; S��)�_�V��aH�{2n/#_;6�{�8����'4�,���!����!a�,�)#��MEP?���ͻ|���|C���n�#��f� O�V��M��;At�G�Ӫ�ۓ����ѕ�$�P�/jYx���a��pz#��'?�T�B?��T�v�sP;��@�Lo .X��D��ߛ�ܝ]��0�����G�`��s�r�-��I�zÃ
�f���˟��Ū��ٶJ�$|��)����z�9_���zI��F/����y�1�k����ѬEo{���n����O�Uگ���-��E�LDMky���a�� �D��Sj� �'�am�����i��ˉ/��.ܮ��!�R��P�*#u�0^�x�2>����D�fk����4������$�߁N@�R}R���`���;=�p���-?��|x�n.��T�K��E�^��l~�KCB��1ռN��ψ T�0j��Y�췭�P]��1��vp�s�c)��\q�8�(,]g�z/	�&9K�X\%��h	W8Oxv���'���1D���Q�۽Y�\�p�����w9! 7���b�͢d���|���8������y�{�M����G��{c�F?pwlLCM@(�* gG�Ν�h�ɠ`
w��Tl�:�m��_�A<�,G.��m��2�Ka�����-$��l"��[    W�!�H��j��������w5Ζ�s��:����!�NG9�5���;��=���u��ח���~!iб��/$T�LF��7���%�\��{�jAM8�poEȪ �&IW_�47ܢS�����B=b10��m��Hf����*x��H�-���7sxf��V����,h#��􎪦X��2�L���H��v;8�(������)�rV��Bw���}�M�U.Nm=�E�si+�8����#�.��;�qU����������=�M�}�3l7$>������x�ku~��C��#�&ƙ?��< �ŧ������P4S��2f���[�_sF��:�i�#�U�_٧�خ��0��G
��ݥ�`�r��!��Ohľ�r5�Y���j�&�w3f�LU�"��w���@�_`� ���̩�i�`�����*�}7�ٵ]�K��ϱ�x��� D[>�i�K&��vЪl�r*���]->�}^���a��t����,�4�Kf���حw�M�.�={4sՅ�t��Y�s̰x�wjѐBG �j���C �b���[|/$��r��������b�)07��t���B�J�N<x ��!잹d+<���_�]l������{%#1 5/Ŧ�m���d]U�A͌b+4�,�[�s�7�ώO��=
E��4g2Y�A��_�gWH���E�K���9���2�{���}_���^#��ÈLд
x���T�sQ�z]�T&���g�G�
�a���%���Fx�Z��Y��f+��׎���g%�&���J�����2o����1�So�,�J�)�D^��yKF�q�EN��e��Z�tL�",����Dw|�q0��*�4�}�%<���Ԛ5���5��P�}�b�M�D�2��+�����n{1�]`�N ?�6�
9�c�l\D��쉄��(.�%��9�����T��b�^�dSp�4�^;(����0�ވ`K�g��gm���_�U��ߍ���
�p\�\Ȝ�l��~(+�|�����1��}5�i��w5���)��z�{����_Wѥ<D���K,��h|7��׿��ʙ�8�gAL(���E����L�LN������@s����	�I�'�u�� ��(�;7<0�ð��3�ՠ�U��0��w���! T3r#'�O�5C�3^o�J��bΑ4klv�u��P� �R �ȶ<z�/�oLR��^�b�u���v<����VX��m��x#�o�o]0�/�[��n�� �E�>�w�,��Z���Q��\=����W-W���4�A��0N�{�N��z�B�9mظn��2�E��HF/&Mc���\32G)�����kIA�rB�rL�M��.VA�6pm�T��dW�G���Q��ar]����ؑ;��Mv�v�ɮ�f\�ty�b4�����poL7��>�1U]�e����@|�K/)�w�%_IKYE�������i����J���[�5�q�Zn��Ʒ�9>y�_Of���	�a)�3/"�dU���u�Yޜ8k?Q������$���S�hl���o�������	��|��ZI������.O�WI�)���k�`�I�u|Z���+��	$�pw�ڡ(S��I��r#��(7��N��#^��1Q!���;�a��x�K�U��G�����:�o�Qܚ�1<�m��gZ�AYD��#��9����B�s��WC�;&T(�;=.���8�2��Q��-oZ�I�}������u|-�ֻ�2Z�ZY�)&��vY�:T�8��=:v�_/X/9��Z�&���;ʒ|��1s1����[A�e��i���z\�����]�ه��O�p��(7��ƾ��佳��-��!%+Os>6�� ����C?��N�^H?�ŗcC��c���J����%�^�u�cPج�[F
G��ח;M�'P�yQZh+�=�E��0�d��|_Y_l��c��g��O�� q9v����|�{Y�Q�XW0�َ;�#7,��ݶ�Zh�8��'��^1;�����~x_J�	2�Ă�2jd5���
e7����"���q��$������¨��3O����A���6n˰_ˍ���㦬��SOC�5�߷�8YǼ+͒�}3G�Dr~B7�im�C�{_t�F������l<M26�1� �}��mm4��䟖��no����@G>������g��	�����@� ���M�!�ϴcD�8*y�X>��NsH����J���hǫ�x`z-���j;Oy�g.�/�Q������ğ!�$����J� KD���#�B쌡�S���E�S�X��%@�u�5k�8��#�J<��j����.�H�ŲĜ�>\^���������Ǧ:
���r��a�M}��^2�"���y�v��a���$9���	��655���� �pVd���)�;�/ķԳC:��e���<�^(憫p�ؼOS��m����[Ȼ����\��� 7_\N��1�J��\w��Nz�ZB�&F&؎�ݨ���tUL�s���y�[��t�`��)�x4}!��xo+�I>�8�5�K��J?�2��WZ.O���FR�.W{33s�������w�'��
,�%גp�ޑs�Ie|=�ſ���A�y��kng3�:��O��`mr�g��	~��/PWP��N&����v��+�8'-�cp���u�
�ºe�-+�ǋ j[!��W*��-���#~6Z�a�Q�Z�7m����aK���2�����v|�1�!:�#]8��&b�=�{�Y�W.����l~�<7\v�#�p�kQ�>.�w>��/�5')�A/0Hu_�K�(��Q"�'��E�k�@��|BI���V�9����ʹ���`Ms����;�ml1>����9�x�^Պ��,m��3�&�&�+r�W�T?t��M�E�,���~��\�c]u	�0^����C3�倳���ӌ0S�H�ח'IK���o��Ep���Z���ʧ'��R���pI�C_�JB% �*�A���rm�=f1��&[rǥ�w��x�؀�Uy��19�����H���|<�"C���z��ޮ��X�w��e�ٙ`p���w�r��HA�y��{�b8m�=YN��)�6�5�G��ۙOˏk���q���F���R�)C�j.�o���6���k	�E��r��K�}���Q[	��B��)]��������I[�#�A�F��~��t���a���d���֢��:��R:Bx��±;�28R�N��@�j=�����������%�����Ȱ�:hA�!����N�B� ���W�4`)�B��d7��#����.�u�c�R<�CmD5�K�POr�F+�b�bԖ_�6g\����)�U����T��+b�,
@5���2�)?��.C�&�w����	��U����ׇqm)ex8?i�Ny5{��|u#%ޅ�V��g6�B�pm�{m"�@`U��
����~|����'��Iu[&��R%�,D�*� �$*T<9�-�.�E�d2|���S,L��k��9v�IKꛪ*���-_���Im�WT:�R�|D�oJ�Uꊀ�)�|����gG�$�!+�=�M�T
�Q������?�q>��ė���$�C�821Н��� �L��+}���"3Eru��53+�*��E��~!\ӡ�p/1���'`81��nwrήY�?��ǟ*փ��(0��`�h��`Ja'�uz?���O���W�H��F!�Мp3����҄@���r�3e��1e�GIB{�ǖG�+wP
���}���7�	V��5��iu����7����xx���!w/#֢A�2|���ڝ���U(�?l��lJr�#�h�C�=� �y[V�'�LH��7��k>N�-�9�����C5�s�5Jkk���\�[�b-c�����u�*�H�E�N���=�Al��$
�Vs.��1��������#VfA6���1�y/�aeG��7�*1XHJ���W��N|���{vu��~aܳ�SC�'���D��k�۽��Ȝ��3Ȅ�Ē��_��xFz'�    |������ZU�.�Z�&�;᥮��n�w�4�Z�ZX!?�ى*���.����[���#��x�4I�u!�>�����mT���aLMܽ�O��;ݯ����� �K,�?�����f a�7'��E[���v�;�$�g��#��]�=�l��-��@�zPE����+1�M�a��	Ξ�H�7����3�Q�u�E��D��~��{3(�����x/�
i�$�d(���h	k����Sh!�0 �'A����	S	���-���)J=�{Ia5���p����u��	�:�q�����Hu���=u�9������Ҙ��R,і�/_@y�\�E�enA�c�1��z��0����Y��uKu`��_4�[�4�m��=��b>Z��M&���A��a�6��9ȏN�e�Ii��v���p�~	B'�>m�qjaIY�<b�ѼUU�Q�K�
hi�LD�f�6:�+2hX?:Vß� �ߨ�h�_s'%3�ײi�T�1��q��A~[��XB�Dd�����"ߠUJj)	*��>�*�
'�D��ʩ\��閭՗?J�M$	�G����3��.��w��� n5�4�@D=���i�u�͇�X/��QN��7��-.-�\�G��GB�J,�m���s_?`]���r-��Fa?g�7G�Zt�gJ��u�|���Ak���Q�w��~ݎ�T�o��q��M���{��Y�(����S�, ��&G�A�I���E�u�6ۈ$����n=�H%N�,^�AE$x)�>��/#�����7O��H��� R�~�v�V56𩰿g���֒T����m��%=�N�*�k?Le����=�����y�!��4�N;"q�ŗ���<�찚��/a�_�S.�G641^����S�돫J���/�C�� u0���q�KT�GZ�]I����V��,�ee��C���z�A���z�E�'.��[<_���6�M�|��i�|H�'O!+����6�������@Z�5?� ���h�6��mt/��ܛQ0pmp��ȿU�ϯ����ߦt���K�S���덝#�F($��y���j�Z�A���������U�D���:WB�cY���@Et�[��>N+T)I�`%��6����Wh�~�o9�?�4�~'n{g㡋\+�*�� 엸A�p�8}��Ұ��;R����o�/r3�ܸ{Zir��%�_��<��UF-���mX�fTW.&�����r�~��A�~� c^kS�����>��I��M�<g��+~��9(hF������G�!�m���kb	���v�Ƙ�WG�B,:4��띪qNd�IC.I��B��:&|�L��RPw�ܽ5X.F;�
p�j�@LR��Ԡ$'r$~�X��:O�O�S�[��b�����r����rM�^χ��HY��=*b1�?��>$�j��.��y��������Q{b��`��� �WW!���(,_6�P=f@z8�l�5?G@ұ��˒8����i�k�:��L�ED��2�U����m���C�� �`��T�����}�)�2I�
F��B��1��}�#�>lD�LE��������O��o���D{����؇*N�G��[`F�ћ�/ê-+�T:�/���C��Ⴧ}wR�K��À�Ή�������Bdtق�v�YQL1�����(�<1���B(���3b�K?��Q�[3��ΰ��r&p7Iv���}�w��(�~����F-��t��L�[��;��k���'^Ey=�ͽ);-%�D��x��Ik�z��!�h�dy?ax'O�L�%�D �)P��y��#��Ne˛�*,m.#���v�K�՚�ن=�u/�-��T�%X���&������tzo�x����u0zd�ɿ]	Ë���D�0�e!�=�y�D��!K�����3��5ݿ%̹�ݜ�u`פ)w��E]�i��Ԭ:3����޹.3�f�//j׺�͑�ߎ3{����
9ʏ��D��$:�8��������jY�������mn�Z��w�C�E��+����"�r�"8�>N���eB��}�C�oh�ߵ��q�¿��w�[s��i���!����	M% ��g�
�����ȫ��l����c���9#d�T�\����}���q|�9��t,�	�X~h{<���*��[�[99��z�����!��Jn;06��W�#9��D��Qv������p��{���߰Cy�0�ھ�Lv��4�����f|!z����ݼ-���x3P���B���e�x��� ��R�k�� HB��G����w��/�-�C�w��-��b׻���[&�4&T+�Kf7��X3�d���i~X+qxkK�ZJI�A�;��a������융E>S;�{t��.��K�������{9 �AP�nt� �������E%Į���#FB����p4E��u���[O��_uV|�/6��w<�+��[H
��]<Y���@+�"�I�ϋ��?t�|�H9�J��n@R�+�QNVr���*�p����*�o��ؽ����|Ϣ��DE'C��|��-��Z�wX������:��Č�e�ͯ�@!�l͖�	ʏ� r�vw>�x5���JH��a���X�aj�ӷX��1�,�I��-�Sk����]��GDc�^ݴ~kpeֽ�;&���d����ͺ�N$4d�zvX&dfJ��|ZN�3ۏ�X����[��H8^�X��+abM��q�M_.�x�~T��6kNn���"���t �(.^s�wW^#��赞|�To��0<�N�ybh�t����L$������G0��}$�J+�L��*7���e�V	�ŗ�o#����q�)�^���K�^n�0w��M�hE*�dFby�]���v"��It�e�K��m{���r��9E���\q��c��ܛg���{"���f��+R�Y�Ag�;���,qh��-r^���!6=����(W��#�q�R�>�8L�tS{Qw�0��񙭸�Ʌ�����HZ�����qXM}E�M��(� ��7�	��L�γ	�U ��PW��CuiR��jo�:��߻d?
X)�3��#���{��݊`GO�,߰+L�UM�X�����$���!��������^��A�kr<�`&��E�����=X�&���G�7t��s�ѫ�4�)�L����uW��h���vy�+��.Tp�-P��B��\pXG���嵓ݑRXũg*�J��᛼D�ZF����uʟ=���+�eg��^l�j�0D ��2�g,�ar~;���w=�^W���}�N���u�����/k׊�a�v�VǸ�D=�F�B����
�w��|��j�ڭp椘cK��!���nb����.�)[:IC"Nq��L�����^�pl�#"|j�K��\cw����%�t��[�o��ǚԗ�y�T/��z��'Y�N��3�q��-V���Ϙ[�����	��B���NZ�K���Dп}g��:K���6W�Z���X��[�i���NT�̛-ڧ3��2V�*�>��|@ӵ��-@�rQ��M�k��)�j^��s�y����̣v�� ��۟bݺ�� �f_s4���ڻ�wʌJ<=�U�F楧|ǌP����v�&A�·�N��8���^�y����M�=¢|�X�\O��c����j���ޅJ=�f�A>��ԛkk��v\�w-	�._�6��2-;:����7�;������^��p�k/�$�h A1b�űw(�W�Tg4$O--hs6ڍ��xgy:�WE�$G"?�Z߿Wg��Dx�&�r�� )��g��z��D���e���86�8Њ��l#rƾxj�^���ð�C�~�wiZJ�7�6w�s�}�AS�{W�Ѽ�C28�n��o;\ف���>q4s��{+�*�zKQ@4APH�*�b�C���T7�8�m��ڲ��;��/�Py#e��Q8Ĉp�k��w4�����{'���t��HyX��L\���@3�d��Ѿ�\��A~A�� ��m�{�nT�N�B�4�k���7�ivc�5v��Ml��_2�Yo~�    W��e�K�~�������3k"�2��ڗc-<��H�9�F/h��_�A�呕xf�K�����yV���M]Ȱ�~�{c�S���$�t�?��t�U$i��s��Ϫ�<ɾU��f���$@H������"�66�4�0H���Uu��%��:��,���Lx��)'��6tSo��* �c���L��\`�Ù�y%��|Ffx5*H%Um�^&����$G{`ߊj�Ĭ�w^�-C�#���D���IƉaΫe�0��@�6]�1�!�ͬ��8�4Sn4s�f���˖3�(��\�,��(��"wt���z_K�f̱�j阬�ڄ�P��!^G8I����`U�n&V�M���Yn�� �B����@fߓ��0:o���2���~>t��t��Rb&��-��I���4��ĕ�Ց�0�A�K��ָ6G.��X����	*�T�.�T��C��[j8�[4+���	�(�^�EQ�a-�	v��@�xQ���ٛ+���fS�|��u�q�Ӡ�t`�xt�(�y�.�l���&�]���J"���\�YcĢ�J��ϫ�~N[�����
5:�/��<q21������>3����u���|��y�=M�n�D٬���L�]��b�M�V[In��@����z�i7���1��k�����
y�S�
G�#.ˈ�[Y��`i`[8�U?�C��]v�!b��;��|�<s[֜xk�T2�b���X��I�}��O5EZ�����=��eT��L�De^8Rc�c\i��T�n���lh��*�p�jY��X�Ҽ���cpb��B�8�a�����rI[�;di6*�3���d����ظ���Tr��/�ˏ�5S���4�3C�
��\��� ":X�7�:vn�#3�d<p�Lgq�'���qG㸾\�K}�Rص��擽k�zK��U��My�F푊�2ˍ-�D<k�B%CP\�K�>�l��b�>ȳ1nEB}ї�^�y���B<��pb/�F��V��L�V�+�Z����=�މB�cFK.ZE��m\o?'�`?��]^�؞��(�v���Zi�ĳ��־]���Z;_,6-$d��"
H]�U���.<��ӌ���Yz��4��H�(e<9^W˥hx�g{�����)D�u�9�%��q�Yv�凰:�휋��@�;�$���8�6��E<�E���6x|��K�_-g3�J�Ud�g|����<��4��Im��ު0�c����N\�V�0��c�������H���G-bY�+���5�L��_o��ns�"*

���`�p	zE�V�&8�c�G��/1�u7w�����
��5�,��-�Z�T�:�ň��s�f�j�
vW�É%fAuQjQ���j���\|� ;�vF���E�nh�Fg���z�G�y�k�t��d�Y�\7[�(�K�5��8�Z�iVMŻ�|=�����2��t8��G�!g�C[�(��Uy|�:h|8���m��zj��0Ӏ�H�%����N��+�+����}N/�m-�M���b�T����E%e1�!_\l�g� �hɹ �W�$	Bg�_�}L ���ʂ��!�=$.�x�u#'S$߭�k����ATQ������Sg+
����V�{nR��B�DEo�|N�]h��-��p�F$I�kI1�j�뤌�<:�`����)�c[�|�8g�,�����6*Ǵ��6���,�h�N�5���͊M��9��N��٨��'���+�`W���N�Q<�w����®����RR@_�Em�e���^����LBC^�����V�'���86i&4b��)�-��lc:�ٖWS���x6"4�J�<�k/�.`��P׶^2-��* 4�k���j�S�j���U����HrP{�M"GA��ڂ�Z;b�1w9K]��8��J����e��IL���Ѝ�\$�_q�u�N$��؞�t�&�J�/���9.��||7	����G,��39�`�kH�[iZ�N{(��[ �����se�:�%җ����!��R�ǽ���*.s�ző��rb�]�&�6�τ0�`��0+ F�lS��q���~��D�o3gY�van��T1Vy��Ox^۟��24/)��/�+6��D]�K�P�5�׳V9��YwZľs������^�8ɗC9,�C�񕖞�]�iJt\�su9�f#KG�S2گxTS*�7�A)ڤXn�ej��UB"�S�r�� ��j}�h��iKm�=����}���\C��X?�~�*k�I;���R��ȳQ�G�؞�;��й�0���d���b�8���"�֚�Q��o�A��fme��_��EI�XP����b7y}�S�Blq�$��R�Ĺ����1tW�\v�v����Qw��m���A��X�c���۟��V)�KK�Q�1�p�7T���nTt���E��X�Z�.q�e�ZĊ���q�O�&<�:z�JhL/-u�����jeH'��(��T)\��;�F�UG��il�Ws]OG?x�*�� A'ZJM\���5()����#כA�i��q���*]	��d{���˩*�(X턎i*U���*�y@L�=�&���O�8��r8o������>"!���_�c経�0���bP��4$�m�,#U����9{,��SP���6[M��(�v+�m�r�-����Y䍕8��F�/��$e�q�������W���,@aj}�w��PP�t|�Ud���֜67����5}�-��i_�lq�i��%����0�}��P���H�tm��	̓M�P��Ŋl/'��7K�r����n�W�.�N:��G��E�l�Pח�������n^�p�E�s
���N#�#v��]F�;ؗ�|�	I�vSQ'��Ѫ�eM��YU�aC(�)Hx5V����q��赜^I:+<G�(+?Է�bu�R6G�6(}��_B�(�E4I��=�JM|:?YW;���:��[�i��>�H�ۋ���m����KrE�YFŦ|\�b�/qqe]7䖍� ���NUBdYz�ª����5��+7�zE�v�dB�j"Rɖ.d��+m#F����a���ԣ��@��t;��Kz9a��9}�*)��jV���ċ��u�'�Z^;����Ksj����Q���a1Z�#ʎ0ʢ��q��V09��Xش�-��O ���l�Q�6F�X��B�/��[�Ǜk�@�
[��jD��r��T����K�]_G��.7@��˰�m��{f�Q;���ğ�$c��$)��D�p��HF�I���T��^<�[m7N�����&k#k":Iin�(se<v�}e7�,���˫�g�cq4��DBgÙ24�y�D���]�]�|?��b�tV�V�B�d�ϊH��zO�[k�z3�[�""�*7D�{����������d�(��t��:���������Z�-	�Ꚗ�mY\9��� �h���x
\�3,;�Sߘԥi��*/��;l��oƛm9�T�vE�$[��US	��m ����b%ϔ���V�n�n�`���/�z�e}�b%�Q�LB���E�ϋB��b�f��J׳|q
�2v�Ղ��KJ/W�T�<\��^��2�xD]�l�IAL�=��R!�C��/�p�m�b��ϝ�d��c�(��:	�vJ,NbdfȢ�m�vW������@C�Av���t��Nyal�|�����63�f!Q�-�c�s{�+~�+�bø�F�Eĳ����ᒭ!ﭭ�~��!�����\��j9A}�!��氋��1�UF�6�q�����6c/T�\-�%:ڣqwxR��T�Q����p�Z]*�Vj����,q���jo��nM֔�ۄ��Z5�VL��|21�q3��	v	�D=�<}mQg�+4���l���F^��其L� �(���4k��,�����T�]6(��b"W�m�Շ�}�-D�^TD��T��6�- ;6l�i�0�j.T�79б2۶�&_r~
��Dɸ�O�#�G;�֔���Ne�.]Q��=�0k�����r[���Z�+_!�|�{ğ���ޠ�.)*��b�.���]�tG��lR�~�������+��f&�U}3�hB0H���Ū�6�zF��R멓!��HD�^I��u�8    ���J��4
W[oʩ�[�*'"�фa��-^d$W#�2FG�Cm+��s_�1�k����e�Ͳ�)�m_���c�:�mf���U�!Ix��+���Ⱂ�"�L��\���q�l��`���+�I\^�G��lK1��)zBE~`@\�+ӗ��Ԇ�ʭ��ފZ�`<;0�Iu9�T̨�R�!�j|?��Q�����+M��JuE�JH��[ƀ��>��#�I�lrЁ�|��Yi/��x;�v�ʅg $Z�8Z��/��f�62��[C��\����ge3�D&=Zy2
��$25ـDy��,��u�feۤ�vrXLs�t�Dx��V�q��j5[A	%"6^��--?��v��1�S�ht����Q�X� b��|��R|����Ql+�g�p6�<J��B:9��Tr
�P%�i>�Σ�=��%���D��Vϒ���I!-��ζu(��mf嫱��GmΐI$�
;��z�P�z��+�UY
(�{�����e�'4i�a+E:i��;�8�D�8[~�����T�@'�^�s#�79�̀�Xw�B�8�,��J���{2�OO��p������^#`N��ԃt/�s���al�#���AqD瀨/q��!�d�^�i)U������������h(�/��v�0�r�V$�J��#�t�E�s��(�%�Xh�3��7�L�$*A�;�#|6v�VO�k�Q�FeFN���{��o4^�|�ʣ��$�hܕ,��KMw��c�CO+r���A�g�4&]>/�8��8���7ӝ�IC�s��+#FP��v@�=���N<})"�a���$����:��i���%�Ið��ڞi�=gO<E�0ץ�M�Ff�+|k�x�V�i��l�&��ca,l�T}o�&M�l���a5��aPC[\���N����w޾ �-��KG�6>O�4���4�8M�l�b�n���4_��\�8R0+�)�
�jӨ+�e��)�y]����i��6����Q��E�����+W������� M#�F4Q</�8U!��6�_M��Qzg��CT7���L�����2g�V5[�7�`s�,Mov�fRI6
{B��f�X�u����1�r,2S�"���
mT
7�k.rR6Eל�@ЇIY�3�7Q�ʇ��U��i#YQo�Ky����H'�b�k�o�W�M���
�x����TJ{�8��DDxN�P�X=Gy=�6��88�n�19e��z��Uy��)	��6$~��G��#+2�&v(Lu]����3�"[��ҍKŨ��uag�nN��
\��D
FZK�BWS��|g]��i�u230�0L��6I	;ǁ��fG ��Ab��UQ�:��pcV�;|f��m��P��N0�h~. &/�^:E�ڄ���o)�i�ZG���Q��V%fs�s�W�S������'4>RB?�j3
9�Z��<,j�	�p22�]6^�����x��	JjA�EA��xvf�a�ȟm����h��.��ӹ�$��3���h�KV頢L���5&;:�	N_W�S+�<����Ȟ�)e���'�lG���u�"�,��d�梪�=T<o�Z�g�>볓:َmw�X��?�@���Qgs{ïtDB��.;��M��]��(Z�MOB.���Cؙ�2VS�Kè$$j�I~��[���bQ��4:!�ɹZU|e�r1���7�1�dzK�G�
j��
��nkG�r�x���u/Zzg�';�Q͚�|7��m�r�ǚR����Du=�mB!h<��"�]��m��|A��� Ǎ1��瓶"jqkOw���磍���%Q|���H�NW^ ��R�L�[��fR����Ɋ���/%��P��lw�����r��U�H�Z�2������9GFΥ��W&�+\�Վ)6ٵW�g8\%�����+�K��ٹ�T����kmKrW4������/mX-s%O}i�i�<�4����� �8bX^O��h�Ы�����Y_�����c\5���V7������x��t/8���|��n��:n}�H�a��i��Nl�u�:�븬K��0>�:����fٕ��Q�y�Ԉ�\�)����-�8�J�D-4��yz��v�\�
��\�G9UopS��y�)J�%dy�Z�ܢ��f�t�u
�Lii�^X���#�9ŝTv�|��V�(['���6G4�=�V9B��+}���J;�������e4/�����i��)�p"f��ñz�)�2D����4,���e�m;_rw�C��Us��\6��|vbiv����򢏍֞S\ܤj#u	�&i.�,.)ۉ�*��t1ij�%�قg��9�b0e��+�` �>.��L�4褥�9|�W��R���	�u`=0��w��h7)�X�i��Ⱥj�tJl�NB`�b� \j��U��{�o�T]��Z��s��ҵf��M�fH:S&�k�X-��픕j	B�jW9�<��.������0!Gtb�kk ����`c��v�S�+aA�AQ�5�%��F����W��î�Ė��������0�4S	�;��^'�5���Rh��S�E�8z�c�Os5�;ex�]~'x����)�� �?����d�dry�u��-#[O�msf=���!E��?�����c�\�` �n�"�2��E�L�E�[��h�DM�\'{@A����2q�Ixṁ.��֋��f���\pQ���ͥ�X�̷TU`"F���#�y�����$�1m�6�z����q� Ȥ7gS��Xo"��a��PYkM��\\O�#Nm��s��󎖳+v4���~w9Ǵ���zvʉKԋ�lb��xgY�x�B����J ���h��@���^���T��rU���Tԑcp@���p��4��s�>�p�]��8�w�'h��τâ�-�q�h����J�\��|��`�0Nb�͓�y<V�-�߀?M��a!w�L�7���%�ǒ �Or�hqq�22�Cu���id;��u{�B��oW�A �=���y���EG��7����:]є���x�x�J�*�G���s�
�M��%״�����bWr��<�Js�4tz͇@�k)�A ۙ�|L�w�^V�;ٷ �|Es���26;��H9/��iF�ό�6�=��`���[]^/�em�ms7�h��Sys�Z���9���;(�yʺ]C�)YP�M�߹�,$�%]�	�J��	�90՜�X���QF�h8��D�0!�s��.Ls��iUE���bEm�\*K7x�F+CO�at�0�^"�l۾��p�	B��	���(��u:���TEf:�qZ	��(Mg>5��zuy�)���(����k{�9�����a��|�o��3�֘�b,[7�%��z���qk�*��Ϝ�OR�ƫ��k�[.��J]�e��$G�V����v��8kW_�):F�FN�����0Q�ŠC&�j{�&Fh���@�/���5	g�6�ich|�g�QO3:�)*����dT���e�F;����1�K�i6����+�y"�.���5l�_y;Y]sx�ҙE���*���|��� i�����u�7b����Ü[tt=_� �4��)_HD<� �� NoT^���C�HB�.��yk~��F���[Ӳ���.���[���,W���b&��5���\��=� X#|*"^�^A��Y\Z4����=���-�: �+�PW�G���6X�RT�ubǓ��iq����W_ &� �eyV�+���f���%�x�i�m8ڭ'�d�6��?4�ĉ��^�.�����g���P%db���um�E�޼�f|�����ѣ�x��t��p�n�hh,��(��)Cq2z�	����S��l�%�K ����m��uMMP��	dW���q�!NC����P��8���U�1C7��LMV @[OO���Ť]v��WV.�<���� �#�����$�}13®��T���b��9s@Қ��vZڊf,fxh��u�<��#�z4m�FU��
�H�2�(�z�r�m��Pݙ�8���.�b,���~��|Spu�e9>��1��s-ٍ�i��_�Xc4W1�@��:�ԭ�n��s"dt(1��w%0��R�����PN��    3y�EL���(4���\���,#�0�U�X�J<�1V��z^p���E�m����M���qQ��~'\��:�t���;�?AWn뫴}�q&���J�����b��` r�\����!o���th��f�X�lOQ�y�/�dΗi��&+�c�%�z���:a/SUvCI��a�$�S���j1w���]y�O��e=��{r�h�:���-���7����H�7\�9T�ʤ!�� ���6�ҎD�"_,�$��a��,tt� 1<��O"�p��w����.��"?֚]]ׅ�#�aA۳��.f2̌<>�K�����8İf�*5��tRC�M8[�FVD����Q
���j�8*�x�\��J�ER�8q/���P]h2C4��,�����l٦��#aø
>�X��&I�@ �n���`��"�;7:�|�M���Y��q� ��g�ڦ;9���4���B� S�SwJ�Lo���X�I�c	�.,7�&N@��'��F4U/�d��,�9z�ٳ��#Q�眥'F �^�ÓGN���յ�'<�܋]`L�Y6�e��s�]�v>������b)�0I�u�e��XΡ�;�X�x��hN����2�a_5��r�pC?��4�T�'y�����θ��1��6z4�jC���tF�Ǔ1S$�#5l�ۀx��t��v�l�w���?�Fǅ�"g�GnR���i�f:g�F�>n�J����ll�95(sX��-���&:���;�JC!-��<i+Uގ����*i�F�\&�.��ɴXC�Ҁ���yb{yzErq��%����e��4��0aF���o(��E�M��EQ���MgH��.%롻;��dk�`��.�f*LC�����ؽ�g��|�oj�٢���t���Ƽ�%ؗSY�>uBq=�I�5�:V)�Z9��D<��9P������7Ձ�*����lc*ȾTҩ�8. 䥲�����6;5�4_Z5��ҖFb��6x��T��[2�NW1�yȭl�)��j�R��w�$�ێk
]_H�u
����V�t����5N�`��8�#�K5\i��bc�����8N�?h�UrҸ9���T�-��!>>l�BV�3a�q�p���&>��C��FY�q=����4 ���ET�;�%D4Q��eAlbh��<��".����Q��֔�C��z!;�F��e(؋#�	�.D���=\�a7٣Lz-ɮC4�;΃�i����=ߔQ��r�G��td5�g�f��u�� ~4[]\���yב�p�� �۹#�	-=�85q��І�йǥ�Oʹ��!�x�����b��ϑ��Λ�;ϴ��:���C�Fu���[��\/�S�����aa�_ c�����c�qI[�����<�����gt^�Ά�Pd�.F�:�B�v7�P��E���[=&m,�s�-�;��pB�3R�Z�PW&(��w{�(�����7��s��ʞu����������x'ѽ\
��.��<Nk��)��Z�&�vW4��6X�( �`���`ov>JE��&�{��#Э\�� P�R�?��"��1����F��%Jk��CŅ�H͎�%J�`.q
��/W,�s�<z1T�,�������a	D5�>@��Oԧ�������_�U���'����}w0�;Ӷ��H��f���`�ij�������d��f�2�l�cP����p�
��fn�fO��W�@s���� �D��A�:n��'iPVE��b3uS3	�v�wc�,�'�e�H7���y���`^�f9p�ʴ��]g�����	���8�K4�*�U ���KzY� N��8ή������ǟ�9�?����C�7r���v`�E �{�</�-��R��L�A��Y���r����3}u�.�� >*p*H6��p�����s��*L� s�Ev*�$驙'@��ά��&���_`Y?"*�A�N;H\'�����1d:�2*3._�@�e�+����ya�n]��
KN?�̱����Jz
̼���v`�`��Y >f�	��@���bӁ���9\��w�p����U���wl��2�ܟ8�W�����m��se�O^��>�������Nm��t���^Ƣolz}�כ8� �������s��NL���́YUnZl�
3角[;� ��"����]���y0p]�+��-/���;��+A{5�㩿�u͢׉o *Qޯ^����88��Wr���\��$��'5 L����s_�'_��:�*p.�U`�i	�X�V�����i@��YyrӇ�উYD`EV���>+b��z�����
{qu�����}�H.�ǝ����L�;�,`^�'��^� �ƅz
�^!���J�\�] kc�$p�Y������&���p�]~ȦS 怵D�������{M��I�UNǾ��nӵ�4��S{c�}̀	��7��|+�ߊ�}?_�*y6��5�� Z�0�1d�ד�d��T���e���'Zhl�d%0�f�gu��v������tp	�+�C�ӹ�i���E��lQ���?ޯ�aP���_�v��[��[���k6�>�ܘ��,	����v�P���@ڟ�^������,z3n��c���{�pzѻ	���������Wc@�����w��(��;��^�i/�|���-�1��� ���{��n&3����P��~}��ٛȀ&�3 ��������X���{uj��v]<O ��}5K���7f�_��5�7�^�g��`��y�%�1pȊ����~ɳ+�?`�o���ܔ�N�1�] �OR�V����A_�����|^��){�{���ד�v�	��%Bg����c g�C?�|҄�N{���.��(߸�/��fn�u>�u��}k��hh <
��~S(�F>tW���?�d�q0XɂS?��^�w�fϿuxo�����4��y���!g�o)B�xn��S}׎ RQ�5���۴p���~s���^p�0x��Ǔ)�^u�,��O��lr�j�gc��Z?/_ �Ia⺷}��?ਗ�#H��s��o��ܻ+Y���	��GY!�w3��5}e���}�О�3��
 �� u�,v�X� �blVo�ڀ=~Q��g�?y�/��js\8�Y�g7K�0P���Ҩ�uP>�T�{7Y/�����˺���,<�_�į���ڻE �i�d[_S��7&�rAt�-��<�)�E��Ԝk���~�e�q���Z�<������k�B6��1 �س�ꧺi�+��J⟍�m#�'��z��!�w��_�4 Y*o�vߩ����a�_N=���;��ۙ��;�ay��~+s������(8��"��\�6���S���������in��)�������߮���zH����O������M>b$��G��
�OǓ�qb���%Q�������?[���'�Ъx�M��&��s�Β�`�������^���@�?�����4s_x���LP�#��Y4�_��v�i�}$�?�jH���4�,�'Ҍ��߁����9h&�`�o����G���h&�`�o��'�G���B@3��;�8��������)�Ϣ������I����d����HH��#��������?�f��;���J3�}��siƿ��Է�}���>�Žӯ#�)�x|U:�\���X���i?�����'ބ��i)���%�#�o�lSX�y*A�9,�r�`���$~��,
�:	�=_߯{ğ���}��pa�O񿪇�5���2 ��	��
�WW����AC.:AS�j̲���z�#,ڭ�4([n����g�a$�m�M=�C�J��@�v�m��Ga.����徔d\���н�`ª�@�r�6�*x��&Ko)r��n����­^n��7�n�U�z�^���>qЇ��H�C�z�f������`���5����iX^yJ�ܢv8ƫMz>yߩ2�e-_�#��bX����)��t0rm���X�i��ؾ��m����hI]��G�%O��,����    Y�浧�x]J{�����&��[&���[f�($u+��,k$�Cϊԅx�B��i^V�����~��	���}u�􀴼a�-����ӯl8����vc���r��qe����I�n����<'(��:�nCy�ܲ߻���˂��[�w�E
�o����PEx+����_!�s`���ZC���Y���[^8���6aW�MҞd�^�xɕ���z����$�+7C�xa�;i�VT�e� �L�|/�2�-�Y�����]` �a^�q0���}#�FV���ᷛ{��2�Y�^,����_B����>]e���P��7��Fx�������P����,��i��+uwO-��ݏ������2�e��B8���}���߹1�B�灥�S�����@�`�A/%P�{��6���s7���A	u�@񰼂e��<�ˈw���7�bHo�����&�}.�σ?�}q� ��[���0u[��_���u��fџ	���x��qo�]�|��AU��|�_����o��>c- ��{k����Pˆ��I��%q+�k�zq� ����\b�PAK�h7$��3�8Xٶ	MG?���fqr��B��1쳈�$��X�8ԍ�O����"�uI�_M��n`l�u�6�������^�U�e4hI^��pʧBV}��YA>�m(�]����[�,?SN|�_��[n�x�sЀ�@ؾ�M�s[?��S6�q�t�,�e��:��>�ȍ�}�k}aЭ���<����}R��z�5p�n5���� $����ڛ�oy$�w�d50�*�[g?[�C�l�oL{�Ԃ}٩�% 	�w�w�{�>ڍ�@����^M��`8�׌��B{=����<���&���J���L�`w�靾��-�0��B�ԭ���A����?Ǐ�R��K�;2N�T"���ǁ���
pm�b����ko��e��Im���_��抦N��|���>�K�;=OP������}�������po{Db�ؤ�7��ޗ���z�J�88<�8|Y/�b��}P@q���<t� �N��逎�j�A|/����Wq�l'�)b�t#$��%�}ᛆ������?}K�Y���A�'&�S����U��ws��۸`�E�-,�h�ܚ��z{�"��vz����v����M<~������'�_cp�
{~�&÷�$��Ar�w!�,��O��~�%jw]��%��� 78p�t���b��р�����W���;�O�&Ľu�>�PZ'�i`�� ���ܛ�jߪ��/�*��Y|�m�4ѭ��
�m���7�.�C�/ݐ
`��F�P��
�}�z՗����2N�(���a���H0��#<xs3n����L��0�P�a�� X��vb��<�����=���2d�t߽X�[S��[
u��7+1?vs}>�޷�t&.ߖ�_��>k�ƛ�,�הA��"�u�Z v��U^o��/6R3/�O��$�0���`Rq
�/��U?̺ʞ�<���SV�����ۼy.��4�k�[��t�DNn����TN�SՏ�R\�o���p�\��&����Ma���O� ���S�����մ߫��7$����ɿ�i�o�	 C~�u����y�Y����m�[���� ��K�;�����د8p�3W}oP�;�tt<�*OI��y��N��\��\�gP�V��F��X���'�3���E�7��g��x�.�����D��K�to]���æ��*��x�<g<�\U6��0�a@ҏ쫦���,���U?����,a2i�`�y���f��b^	-= �� =�fi�qpOTA�8��l�S���7$:߰.����%�������=�� o�@�͐� 6{��!$�`��V��A��e}K�>n1��[�:q��@�|�t�0P��@pc?xn��g�{����m�gD�n���T�@�{��ĩO8^,j�Gyx��]2�Y��n���:��-�%V�ώ�-���Ն1�[��S����$�Me�<�s �E�ܞ+�E��0{����զ?��`�I}�G<����~�rc��n׃1Q8$����[��u��p��{h �����=���­Kӆ���&�X�W"U����2��7�����G<�Kz��2b@6^�%N��o�ˏ�lW�е�ս����݅����]偖��	��>��lކ=Kl`��Y�n���~x*�����7A,~z��������5��I^��/���f�B��^_�{�XEJ��ZO�`�O�=M~��>�{Z���z��f��L��f�	ܟ�@W)��2��?��n	�{O�B�6I�!�`��]���v?�B�i��k�Y�D��#�"�o>����8�f���ټ�fѿC��߲ O�1�b����~�4b��ko�ʯG=ON�2�� ��~��+�u��.`��	�0�Ŭ _��, 2U]>%9r��|���Q�u���+'�s��/gir����n%�����U��G�E����E���5�`Fˁ(I)�ܾ�(U���K��Y��=&��0�=d�~�[�U�*�����Wȃ���������<��*����O���h�{���^�z{�[�[����(����#���$
xp��R�lS�	 |�Ї3�r��99���0���w��_�)�%�⯱1��G�������͟��}��$�B�㛾 `�O$AK5i`R/�S:@�gK�{��yyw� �O��wO:��:��*�_=#��|b����|��t�mMT��6�ew^g���1�e��Z��s���pΡ�?�����̷�B�,|�l_>u�����������/���3�����̏ �@,�WL��=N� ��>�Ӌ�v۱~�'�������`�\�*���x��E����e��	&���a�P����Dli��
���Ǥ����*�cSX�+Nώܞ'r�z�v���7�� =O
��m��R ��ӥ���O#ߟg�t�~��x����>����;ձY<I��>r?��p�H��q�WQ��6��ڀ���I�`�MO��b�[H�����7���$~� oh�'���.���A�m3���mz���i���=��c��?)��`X�m�_`��| 
��_����ҧ'�1�=�V���S?�[Tk�jy�?��8/��OX��R�0a�?�O����O�M`qL�U�|�5�)�'+�r�����B�����g���e����]'�/��`e��7u��� `�2i�"�B?��N����8��l���{��F6�5��(<�G�sr+蜾���Y�M��7H������O�|�3�#��`��<1�0�������<����ߒ�*@�_`l����H(p�~�h�{V���U����d鯬b������Y������b��a�}�VA���
� �Z�~ƕ����:�����Es�OU�>з��:�{�H��@���ǜgn6C�*3����+�����]��NW���{����˗�c�k2��y��)�~6����� �4�z�!�#�?�W�G�����E�3�������\���d��(��Ǚ?	:�`�ꯍO�B�#�	�?5B�9�}7����q�������8�3��8��πS�J�+�b?��78�N�ϧ�)�~�~�u	��|����)����ݿ�8��	�����#%�N�z�u)�S���N����8�<�^���?�}�M8E=P�_�~�Ei�S�;�����<�b O<��(�'a��s�/���?�W�>Zp��ߵ�)���#��)��} f���ޭ�I@�} ��L��1?&��>5L���OΪ>���r��8�����w����ӷ>L��@�<���T��8�G�L��_>�z�e�S짶�}�_�����_�G�bH���$@�}�&
�U��@���')N}f�⹇_x�_���G��@3|{�o�)`�>�!�+��?z�~S��@~l �|���6�G|`���h �  @�Gɞp�#��J�0���œ~��䃢)�wzJ1�O���?��e����m�
(���IP�`>C������>����)E�����/�Q���#0�|��Ϝ�#`�����4������g	#�?������#���^Z�ϐ����ϐ��F�
Fq��#����'?&�"�όQ7�>��&���gN��<���?���|�">2~y�(��0��c���͋��5A��o�~L ���	���O�:�<0�gN��wc�X�S �@~�b^�lE�#[��R�R�O��1��o�L�F?��Q�o��m!~����=���a��p�}�cA�P��g��Ҥ<Cԇ�|B^՟B��ޒ����?��`��|S�o������_e������S ����|"|�D����U����g�K�PE}�Ǧ��������7��}��'OD���?p�?��������?P�/~^ƽ|��缅3������������&���L���&|"��D�����w�|�����M�DP�<0���?�oñ���O+{=s�z�8Oq�/�I	�J��#����%	��a �^����[��:p�b���ㇿ8)K�I�kP�~vq�_�`Z�n��~�N3���n_rF�$������f�0��Ks_�}����C�����g�o���}c��i�5������ݤ�2����3��=��?�O8o��?��̸��暧v�v;H_}��6��W�m

{�r8��ȿ7�$��~0�N��dS��$%��r�7�R���������7X��(d}^T�(H�e�.�Nv�^��
�@���tM���1��8;A{>P�/�4�CXR�3���������X������Q^��qqq �%�      Q   �  x�e�Ms�0�ϫ_�S���qTlҒ"�����8"فH�,���ĝ�,���g%�F�\4,�»�E>����~�_~���+%�5�@!����A_6���6�3��ͼѕ����:�b0�-��[lm Q�+]G$%Ҷ}uؚ�����5��.�:lxǎJ�K�^m�<��U$�.���jv�_�.Z�l]����4�.A8|�����z�,�ς\ϋ�C�E�C���m�*B)R����[��!o������;��)ydJ��]�$�!3�d+Xv=�&����T</��G�x��a��-(Z��YK#2�A���*���������2��"yh��n�f�r�4��YU�ni��dL�?5��J�|
�>�W�G�Ag ��6��KZ�vK��y����      S   �  x�u��r�J��'O�L�z�hL4�!�]�����hb���g5��&�|===kV��3-}:�q�YU9�΢:I̞�֎��?�9f*U�#-�W_y���o:`�G�DeI�p�W�,�񐱒NAE$6� ���t��H8r��2)輿p^��Ř���T8��gd����('M�=��%
�{�m����E:�Ku����D�������&�1A9�w^��}��@.�>�p�>�PԔ2��p�����.���*�Od�n��TT�;�`�,��V�!���$.�$�ԙ�'S�D��S���Y5������om�a>]F�2�S��gG�� �"����{�D�H��[2,"���Ǥn��]Wer�S
�bK���e�����O��"��uZE��$5�7���D�~V��3����"U\&1Z1��Ͳ;7Ga���NU��ᣙB��*L�U�Qq��tp�5�B���Zt(\�������(QƇ)����U�S����\4��aZ1Ж�S�Q0)J�L�P5F�7Q�Q4���B$���.L��섑�b=H���Ez��v�ar��r_ƇDxL����Xܢ�ݪҸ��f�	m�p@���bk�Y5�����&��Z�ͮ>��0B3s17d�JxF�}�ۯ��Y���r����"����J7}��ML�/��T�\���{u�u��-�P�F^̂˸�0i50»��XJ>�C�N�����mT��N������Fcd?wg��@NN)��a��bu��*1g�z�AQ~@��	+�`ͤn`ó���[,���GmZ=s�_����-F>�Hټy\qT(?�����(3D�#�7W�?�nw�(���n=�L�v:��W���$��bkP��6Ϫn�B�fh�&-�N��s�.�&F;��>��/�MQvT��KEa�Q{ȿ[�x��=�/u4�,3��t����.�b�yL���=�Ϋ4^�6�7�w��������Ϭ���dw�ۖ�ˮ��k�G><<�ah�Y      O   E   x�3�t��u��\FP���{bUjIIj�&H��=��.嗟��*��7��?j��s����� �rA      A    	  x��YmO;�L��U"%���F�"AR ��҆�J�~qf��/{j{B�_�ϱg&����ҮV�b�:���s�s~>���_	��e�-�,���Ҋ��Ǟ����y~�L��g�i4���Be�˦c6�L�bS�X3�F��3=���='s{ʾ�/��7v!�2l� iJ���	������U�M�|�e����}~�������;)�)ˉ��'���%�;��K^z�w~���K>�Yh)�vP|;f�}�������J�	������ܬ���yq��f�6^&�1���h<b�Y��`�K����{�O朞�ò����>_�g#��˽�˶��\²��LEٻm>��O�VG����Uf����n�YZ��&���42ƦR�3͖���ͭ+�F�щZ t]��WHk���S�m���ٯ��`θʍF��Q�[�d�&��,1J�^��GD`�:�D��&�||���M�.<�%5�1}Ʈiw�yH��[a}����o��O�$R�NZR�ս���]k�hh���p��`��y�qJO��N�������������B����.1��X6o������ç�������3��t�,;DJ��B*ޟ���Ϙ�s��`X�D�'�A��䂭Mɼa����vxF�КK[D#��	T�\��٥�YS H*D�y� ��щ+�S��S|��sW�C`�]3��-�.��� M�y>W�e�O:�Gr�gx��od	g���+pس�	}0$�1�V.��A,�
Q�	��fJ��լ�J�
�M������f�Sv�s���Pn%�f%�F�=���T�'d���L��1bo����<�;���"�E4���B|�_V"��!����!.N����V�#��O����uHkɦ�G�TifL���9�TD�������H��(�b;?��.�
�V�V_j
>��p��5� 7>�2?��	Us�SJZ�������?����LfW����C�H�*���_nH���Z�/a���<r�_Y��4ǎ�S�`��l�cBgDA��A��pȚr���ƪ��{��M�:h2��l�����Rney�{���__��8�W�b�
�H+)�>bn�2CW`�A�$TT���s�����ŔJ�A���m�f��^�q;�d���f�,���Oo�Ã�!���۴�y%��9}�"�ʨ�²|��+F*����6�X���U�s	j��D��j|9	A���-� �p�X;�(p9tdd�\z/Pb����r�6��%��[��~�����npu}MB���64�"E7v��F�:��Qw ��w�"f����y�����&P�tjk�K[��)@������5`�r���FAy����%���Tj>���D�YJ����PwV.Kpz]-��ޡ_Y�(��9'я"7`��Ha {��EO��P��Q��oa�oQ`쫮�ʧ$��zB�S
V="�m��D����Q�	�=$ZU�����WU����6bS���! -��\llU�!�D�l?��j�^|�&7�B4����I�]!b��k�<��Eb�rN��>3��ԙ]�u�|�na��X��!�2��ք�ǈ1�g<ʨ��$�s�w 8G�"U�!�>��{U=���&�Mc��2����z�� ����{�ep���c#�>��ց�E&Ur�A�Q!��5�jy��QW���M{`���>����}���<vP!1܅��
�E�b@�"(��,��q�h����ÃA�e>�^�iQ��q�]��5DX��@Lڨ�5��M�d����$=`��g��D��������af�f�8��E�w�|��?��oO���c
�p�0Eap�Д"��ɽ6J�KQM7}�	�FF��`0(R�`I^R h&�y��یڋ8������@����>5��N�t��!7^�v��*242����'{l�$r�Fct�u��4ދ�h�Vi--\�8�}C�}	fq��nC�/N�h[�f�x\j���Fl�͝3:�ź~W��-Q�P�6�!�uс�p����K^$��7��,Ny#�ܳՉ���o�PU6D���ס��d�� ���LØ��.�x��f��$��Ũ�{��������~�M���G��I��P��ŷ�4ѿ�Ί`6�d����ӗ&	���@�T�x?�aZk^��\�M�cW���`]u25��$q�U������w�.����FP�3��t�c�G9QRz�C�cFu�6I#=(��LB/���Z�)�&���Es�l���'e`����H��w���{���˩^������ŗ��/���U�      E   =   x�3����-N-*�LN����v�2�)J�+NK-JM�	r�2�J-��B\�b���� ��      C      x�3�t�,JM.�/�L�,����� @q      [      x������ � �      K   �  x�mQMo�0=K�B�%N�[:2�k�i�3�%@�-@�E�?F���=����$�v�d0#��#%e�0���l�p�h'�-l��_��t"e���a]�Jt��4yal#L�\=�ԫ�����b��PCd�^��G�P�D��wU����E��H�)Ǯ{�PV�S<��F�	+R��o��*!g�d6����{Fh���thwӞF��n�te��b1S�d�a��C�r�]Q�Z1D��u��WiS��JV��	�F,��nG�� �S`��Y���H9S2�8�-�8<P���,��������j���o?_���ͪ��%��v�J��Z�cv^��6w}�2hi��}��T�ϐvr�O">�(q����5���:>�|�~z>��pר��z5���U� ��_�ޚ      U   1   x�3�,-��OL)��OO��,N,����O�H,*1�+�K������� 4ZJ      Y      x������ � �      W   .   x�3�,-��OL)�/(�O)M.)�O�H,*1�+�K������� �!      =      x�3�LL��̃��\1z\\\ B�B      ?       x�3�tL����2�tJNW(-N-����� P[      M   �  x��TMo�0=���Tb-$�ǭKU�C)b�	Yɤk)k[����7KiК�@�[�y�͛7#s��ӂǝ��~~o����R��5gkN9��gqm�:b�3QSZӌ�,T"��[�9�*hk�2-�U�0�4�����a�m����;q�����aDF�*�K���{�1&~�S>D��4�t����V�%�BH�x�[2cXp���]�S.x�)�2c�D�\ݘ��<�K�z�L9��;������0�!(��ЄX~����-���_���1�㻮��Ӧ��^��,�F�f��	���b�m�W����RT<�
ī�&~��6���:�6�����қ[`�f9)!e�]H�Z�����M8�~n�6*�����D)�g��ꌑ�1O52�R�/��ko��d~]���/%8��4~�a񔏊i��3�%a%�}!����,     