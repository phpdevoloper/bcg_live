PGDMP     8                    z            bcg    13.6    13.6 �    w           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            x           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            y           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            z           1262    57757    bcg    DATABASE     _   CREATE DATABASE bcg WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_India.1252';
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
       public          postgres    false    211            {           0    0    About_us_about_us_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public."About_us_about_us_id_seq" OWNED BY public.about_us.about_us_id;
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
       public          postgres    false    213            |           0    0 "   about_achivement_achivement_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.about_achivement_achivement_id_seq OWNED BY public.about_achivement.achivement_id;
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
       public          postgres    false    201            }           0    0    bcg_users_user_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.bcg_users_user_id_seq OWNED BY public.user_info.user_id;
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
       public          postgres    false    221            ~           0    0 "   bcgvl_staff_designation_deg_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.bcgvl_staff_designation_deg_id_seq OWNED BY public.bcgvl_staff_designation.deg_id;
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
       public          postgres    false    223                       0    0     bcgvl_staff_details_staff_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.bcgvl_staff_details_staff_id_seq OWNED BY public.bcgvl_staff_details.staff_id;
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
       public          postgres    false    219            �           0    0    bcgvl_staff_groups_cate_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.bcgvl_staff_groups_cate_id_seq OWNED BY public.bcgvl_staff_groups.cate_id;
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
       public          postgres    false    205            �           0    0    director_desk_dir_desk_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.director_desk_dir_desk_id_seq OWNED BY public.director_desk.dir_desk_id;
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
       public          postgres    false    209            �           0    0 !   director_status_dir_status_id_seq    SEQUENCE OWNED BY     g   ALTER SEQUENCE public.director_status_dir_status_id_seq OWNED BY public.director_status.dir_status_id;
          public          postgres    false    208            �            1259    66555    documents_bcg    TABLE     �   CREATE TABLE public.documents_bcg (
    doc_id integer NOT NULL,
    doc_title character varying(500),
    doc_attachment character varying(500),
    doc_category character varying(500)
);
 !   DROP TABLE public.documents_bcg;
       public         heap    postgres    false            �            1259    66553    documents_bcg_doc_id_seq    SEQUENCE     �   CREATE SEQUENCE public.documents_bcg_doc_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.documents_bcg_doc_id_seq;
       public          postgres    false    235            �           0    0    documents_bcg_doc_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.documents_bcg_doc_id_seq OWNED BY public.documents_bcg.doc_id;
          public          postgres    false    234            �            1259    66251    emp_designation    TABLE     �   CREATE TABLE public.emp_designation (
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
       public          postgres    false    207            �           0    0 "   emp_designation_designation_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.emp_designation_designation_id_seq OWNED BY public.emp_designation.designation_id;
          public          postgres    false    206            �            1259    66497    events    TABLE       CREATE TABLE public.events (
    event_id integer NOT NULL,
    event_title character varying(500),
    event_desc text,
    date_from timestamp without time zone,
    date_to timestamp without time zone,
    event_file character varying(500),
    event_url character varying(500)
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
       public          postgres    false    231            �           0    0    events_event_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.events_event_id_seq OWNED BY public.events.event_id;
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
       public          postgres    false    215            �           0    0     former_directors_director_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.former_directors_director_id_seq OWNED BY public.former_directors.director_id;
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
       public          postgres    false    225            �           0    0    organisation_chart_org_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.organisation_chart_org_id_seq OWNED BY public.organisation_chart.org_id;
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
       public          postgres    false    229            �           0    0    product_product_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.product_product_id_seq OWNED BY public.product.product_id;
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
       public          postgres    false    227            �           0    0    production_pro_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.production_pro_id_seq OWNED BY public.production.pro_id;
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
       public          postgres    false    203            �           0    0    user_role_role_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.user_role_role_id_seq OWNED BY public.user_role.role_id;
          public          postgres    false    202            �            1259    66537    vaccine_supply    TABLE     �   CREATE TABLE public.vaccine_supply (
    vs_id integer NOT NULL,
    vs_details text,
    created_date timestamp(6) without time zone DEFAULT now(),
    updated_by character varying(500)
);
 "   DROP TABLE public.vaccine_supply;
       public         heap    postgres    false            �            1259    66535    vaccine_supply_vs_id_seq    SEQUENCE     �   CREATE SEQUENCE public.vaccine_supply_vs_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.vaccine_supply_vs_id_seq;
       public          postgres    false    233            �           0    0    vaccine_supply_vs_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.vaccine_supply_vs_id_seq OWNED BY public.vaccine_supply.vs_id;
          public          postgres    false    232            �            1259    66395    what_new    TABLE     �   CREATE TABLE public.what_new (
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
       public          postgres    false    217            �           0    0    what_new_whats_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.what_new_whats_id_seq OWNED BY public.what_new.whats_id;
          public          postgres    false    216            �           2604    66352    about_achivement achivement_id    DEFAULT     �   ALTER TABLE ONLY public.about_achivement ALTER COLUMN achivement_id SET DEFAULT nextval('public.about_achivement_achivement_id_seq'::regclass);
 M   ALTER TABLE public.about_achivement ALTER COLUMN achivement_id DROP DEFAULT;
       public          postgres    false    212    213    213            �           2604    66282    about_us about_us_id    DEFAULT     ~   ALTER TABLE ONLY public.about_us ALTER COLUMN about_us_id SET DEFAULT nextval('public."About_us_about_us_id_seq"'::regclass);
 C   ALTER TABLE public.about_us ALTER COLUMN about_us_id DROP DEFAULT;
       public          postgres    false    211    210    211            �           2604    66433    bcgvl_staff_designation deg_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_staff_designation ALTER COLUMN deg_id SET DEFAULT nextval('public.bcgvl_staff_designation_deg_id_seq'::regclass);
 M   ALTER TABLE public.bcgvl_staff_designation ALTER COLUMN deg_id DROP DEFAULT;
       public          postgres    false    220    221    221            �           2604    66444    bcgvl_staff_details staff_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_staff_details ALTER COLUMN staff_id SET DEFAULT nextval('public.bcgvl_staff_details_staff_id_seq'::regclass);
 K   ALTER TABLE public.bcgvl_staff_details ALTER COLUMN staff_id DROP DEFAULT;
       public          postgres    false    223    222    223            �           2604    66422    bcgvl_staff_groups cate_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_staff_groups ALTER COLUMN cate_id SET DEFAULT nextval('public.bcgvl_staff_groups_cate_id_seq'::regclass);
 I   ALTER TABLE public.bcgvl_staff_groups ALTER COLUMN cate_id DROP DEFAULT;
       public          postgres    false    219    218    219            �           2604    66239    director_desk dir_desk_id    DEFAULT     �   ALTER TABLE ONLY public.director_desk ALTER COLUMN dir_desk_id SET DEFAULT nextval('public.director_desk_dir_desk_id_seq'::regclass);
 H   ALTER TABLE public.director_desk ALTER COLUMN dir_desk_id DROP DEFAULT;
       public          postgres    false    204    205    205            �           2604    66274    director_status dir_status_id    DEFAULT     �   ALTER TABLE ONLY public.director_status ALTER COLUMN dir_status_id SET DEFAULT nextval('public.director_status_dir_status_id_seq'::regclass);
 L   ALTER TABLE public.director_status ALTER COLUMN dir_status_id DROP DEFAULT;
       public          postgres    false    208    209    209            �           2604    66558    documents_bcg doc_id    DEFAULT     |   ALTER TABLE ONLY public.documents_bcg ALTER COLUMN doc_id SET DEFAULT nextval('public.documents_bcg_doc_id_seq'::regclass);
 C   ALTER TABLE public.documents_bcg ALTER COLUMN doc_id DROP DEFAULT;
       public          postgres    false    235    234    235            �           2604    66254    emp_designation designation_id    DEFAULT     �   ALTER TABLE ONLY public.emp_designation ALTER COLUMN designation_id SET DEFAULT nextval('public.emp_designation_designation_id_seq'::regclass);
 M   ALTER TABLE public.emp_designation ALTER COLUMN designation_id DROP DEFAULT;
       public          postgres    false    206    207    207            �           2604    66500    events event_id    DEFAULT     r   ALTER TABLE ONLY public.events ALTER COLUMN event_id SET DEFAULT nextval('public.events_event_id_seq'::regclass);
 >   ALTER TABLE public.events ALTER COLUMN event_id DROP DEFAULT;
       public          postgres    false    230    231    231            �           2604    66380    former_directors director_id    DEFAULT     �   ALTER TABLE ONLY public.former_directors ALTER COLUMN director_id SET DEFAULT nextval('public.former_directors_director_id_seq'::regclass);
 K   ALTER TABLE public.former_directors ALTER COLUMN director_id DROP DEFAULT;
       public          postgres    false    215    214    215            �           2604    66459    organisation_chart org_id    DEFAULT     �   ALTER TABLE ONLY public.organisation_chart ALTER COLUMN org_id SET DEFAULT nextval('public.organisation_chart_org_id_seq'::regclass);
 H   ALTER TABLE public.organisation_chart ALTER COLUMN org_id DROP DEFAULT;
       public          postgres    false    225    224    225            �           2604    66489    product product_id    DEFAULT     x   ALTER TABLE ONLY public.product ALTER COLUMN product_id SET DEFAULT nextval('public.product_product_id_seq'::regclass);
 A   ALTER TABLE public.product ALTER COLUMN product_id DROP DEFAULT;
       public          postgres    false    228    229    229            �           2604    66478    production pro_id    DEFAULT     v   ALTER TABLE ONLY public.production ALTER COLUMN pro_id SET DEFAULT nextval('public.production_pro_id_seq'::regclass);
 @   ALTER TABLE public.production ALTER COLUMN pro_id DROP DEFAULT;
       public          postgres    false    226    227    227            �           2604    66212    user_info user_id    DEFAULT     v   ALTER TABLE ONLY public.user_info ALTER COLUMN user_id SET DEFAULT nextval('public.bcg_users_user_id_seq'::regclass);
 @   ALTER TABLE public.user_info ALTER COLUMN user_id DROP DEFAULT;
       public          postgres    false    200    201    201            �           2604    66220    user_role role_id    DEFAULT     v   ALTER TABLE ONLY public.user_role ALTER COLUMN role_id SET DEFAULT nextval('public.user_role_role_id_seq'::regclass);
 @   ALTER TABLE public.user_role ALTER COLUMN role_id DROP DEFAULT;
       public          postgres    false    202    203    203            �           2604    66540    vaccine_supply vs_id    DEFAULT     |   ALTER TABLE ONLY public.vaccine_supply ALTER COLUMN vs_id SET DEFAULT nextval('public.vaccine_supply_vs_id_seq'::regclass);
 C   ALTER TABLE public.vaccine_supply ALTER COLUMN vs_id DROP DEFAULT;
       public          postgres    false    232    233    233            �           2604    66398    what_new whats_id    DEFAULT     v   ALTER TABLE ONLY public.what_new ALTER COLUMN whats_id SET DEFAULT nextval('public.what_new_whats_id_seq'::regclass);
 @   ALTER TABLE public.what_new ALTER COLUMN whats_id DROP DEFAULT;
       public          postgres    false    217    216    217            ^          0    66349    about_achivement 
   TABLE DATA           [   COPY public.about_achivement (achivement_id, achivement_name, achivement_year) FROM stdin;
    public          postgres    false    213   ��       \          0    66279    about_us 
   TABLE DATA           �   COPY public.about_us (about_us_id, content_id, content_description, content_status, last_updated, content_updated_by, archive) FROM stdin;
    public          postgres    false    211   ě       f          0    66430    bcgvl_staff_designation 
   TABLE DATA           M   COPY public.bcgvl_staff_designation (deg_id, deg_name, deg_code) FROM stdin;
    public          postgres    false    221   ��       h          0    66441    bcgvl_staff_details 
   TABLE DATA           `   COPY public.bcgvl_staff_details (staff_id, staff_name, deg_code, cate_code, status) FROM stdin;
    public          postgres    false    223   C�       d          0    66419    bcgvl_staff_groups 
   TABLE DATA           K   COPY public.bcgvl_staff_groups (cate_id, cate_name, cate_code) FROM stdin;
    public          postgres    false    219   ^�       V          0    66236    director_desk 
   TABLE DATA           �   COPY public.director_desk (dir_desk_id, director_name, director_position, director_qualification, position_held, director_photo, short_profile, detail_profile, director_message, director_status, director_expertise) FROM stdin;
    public          postgres    false    205   ��       Z          0    66271    director_status 
   TABLE DATA           `   COPY public.director_status (dir_status_id, dir_status_name, dir_status_short_code) FROM stdin;
    public          postgres    false    209   ��       t          0    66555    documents_bcg 
   TABLE DATA           X   COPY public.documents_bcg (doc_id, doc_title, doc_attachment, doc_category) FROM stdin;
    public          postgres    false    235   <�       X          0    66251    emp_designation 
   TABLE DATA           ]   COPY public.emp_designation (designation_id, designation_name, designation_code) FROM stdin;
    public          postgres    false    207   ��       p          0    66497    events 
   TABLE DATA           n   COPY public.events (event_id, event_title, event_desc, date_from, date_to, event_file, event_url) FROM stdin;
    public          postgres    false    231   ��       `          0    66377    former_directors 
   TABLE DATA           Z   COPY public.former_directors (director_id, director_name, year_from, year_to) FROM stdin;
    public          postgres    false    215   J�       j          0    66456    organisation_chart 
   TABLE DATA           I   COPY public.organisation_chart (org_id, org_pic, org_status) FROM stdin;
    public          postgres    false    225   ��       n          0    66486    product 
   TABLE DATA           h   COPY public.product (product_id, product_name, product_desc, product_image, product_status) FROM stdin;
    public          postgres    false    229   1�       l          0    66475 
   production 
   TABLE DATA           D   COPY public.production (pro_id, production_pic, status) FROM stdin;
    public          postgres    false    227   h�       R          0    66209 	   user_info 
   TABLE DATA           C   COPY public.user_info (user_id, uname, upass, role_id) FROM stdin;
    public          postgres    false    201   ��       T          0    66217 	   user_role 
   TABLE DATA           7   COPY public.user_role (role_id, role_name) FROM stdin;
    public          postgres    false    203   ��       r          0    66537    vaccine_supply 
   TABLE DATA           U   COPY public.vaccine_supply (vs_id, vs_details, created_date, updated_by) FROM stdin;
    public          postgres    false    233   �       b          0    66395    what_new 
   TABLE DATA           _   COPY public.what_new (whats_id, whats_title, whats_desc, whats_file, created_date) FROM stdin;
    public          postgres    false    217   ]�       �           0    0    About_us_about_us_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public."About_us_about_us_id_seq"', 7, true);
          public          postgres    false    210            �           0    0 "   about_achivement_achivement_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.about_achivement_achivement_id_seq', 1, false);
          public          postgres    false    212            �           0    0    bcg_users_user_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.bcg_users_user_id_seq', 1, false);
          public          postgres    false    200            �           0    0 "   bcgvl_staff_designation_deg_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.bcgvl_staff_designation_deg_id_seq', 1, false);
          public          postgres    false    220            �           0    0     bcgvl_staff_details_staff_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.bcgvl_staff_details_staff_id_seq', 88, true);
          public          postgres    false    222            �           0    0    bcgvl_staff_groups_cate_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.bcgvl_staff_groups_cate_id_seq', 1, false);
          public          postgres    false    218            �           0    0    director_desk_dir_desk_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.director_desk_dir_desk_id_seq', 59, true);
          public          postgres    false    204            �           0    0 !   director_status_dir_status_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.director_status_dir_status_id_seq', 1, false);
          public          postgres    false    208            �           0    0    documents_bcg_doc_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.documents_bcg_doc_id_seq', 1, false);
          public          postgres    false    234            �           0    0 "   emp_designation_designation_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.emp_designation_designation_id_seq', 1, false);
          public          postgres    false    206            �           0    0    events_event_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.events_event_id_seq', 1, true);
          public          postgres    false    230            �           0    0     former_directors_director_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.former_directors_director_id_seq', 16, true);
          public          postgres    false    214            �           0    0    organisation_chart_org_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.organisation_chart_org_id_seq', 7, true);
          public          postgres    false    224            �           0    0    product_product_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.product_product_id_seq', 5, true);
          public          postgres    false    228            �           0    0    production_pro_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.production_pro_id_seq', 4, true);
          public          postgres    false    226            �           0    0    user_role_role_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.user_role_role_id_seq', 1, false);
          public          postgres    false    202            �           0    0    vaccine_supply_vs_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.vaccine_supply_vs_id_seq', 1, true);
          public          postgres    false    232            �           0    0    what_new_whats_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.what_new_whats_id_seq', 36, true);
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
       public            postgres    false    209            �           2606    66563     documents_bcg documents_bcg_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.documents_bcg
    ADD CONSTRAINT documents_bcg_pkey PRIMARY KEY (doc_id);
 J   ALTER TABLE ONLY public.documents_bcg DROP CONSTRAINT documents_bcg_pkey;
       public            postgres    false    235            �           2606    66256 $   emp_designation emp_designation_pkey 
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
       public            postgres    false    203            �           2606    66545 "   vaccine_supply vaccine_supply_pkey 
   CONSTRAINT     c   ALTER TABLE ONLY public.vaccine_supply
    ADD CONSTRAINT vaccine_supply_pkey PRIMARY KEY (vs_id);
 L   ALTER TABLE ONLY public.vaccine_supply DROP CONSTRAINT vaccine_supply_pkey;
       public            postgres    false    233            �           2606    66404    what_new what_new_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.what_new
    ADD CONSTRAINT what_new_pkey PRIMARY KEY (whats_id);
 @   ALTER TABLE ONLY public.what_new DROP CONSTRAINT what_new_pkey;
       public            postgres    false    217            ^      x������ � �      \      x��]�r�ƒ��<Ŕ���TB �8��)�b�%k%��l�?C`H"�-�HV�mki_a�{p%)��.D�NŖL 3�==��msg4��y�9�A6�v��"f<p�eE�-g�����m�s�.��;=g����-=�n��T�D>�����\}�����َ�t���v�kvw��\���s���x��q��\�̯�i��Ԇ?����S�<Ɓ��}�k������3z��Z4}ϧa��0�U�x!����M����0v� �
g3��$�C7v��	�N"�^:�K�R��ps�vߝ\�,p@���)H	��݌<s��>o��r�wᵈ_)~2	��ũ�̞:����Q���|x�+������8�q,ğ�s��iH���l��&qr�MElg^��	M�� �46���A�<��{�ẓ�j��ZӲ�0�R��K�{z������j+k�L.w^/�7��I���}�怿_'X��z�W3`������Q��7��Շ��؇cI�h<������.Fx�xS��3�L��u�MRv�&��O=7Y��À�I
��Cs���1Xo��7�A�K���af��7	����o����]j�VU�i���x�z�"��B��Y�NE�s 0Ae�C�����WXJ�<��y�}����~����w��'{���F��B���-��ڰd�a案��I�Dnʽ�஝S�l�D�fY��lwҞܟr+�b�D�'X�H�.�`�1�A���q̏1�,�[�;�1pC�r	g �r3>�Qj�ciK,���5�Y���$�%<9�Ʋ��h���s�A1�upH>��e�;x%�A����2�A �4�.Muzk�S����g��L�<�%pg�oQ,�a�sӺ�c��qN��
ӞX� ��"�����d#ч����IG�vu�x	��.�v��>�I$��Z��>D&p��X4��$HR7�R�{y	�<#,�\
;���/�Af��ƞSX��W[����uQc�V�ArA�����s�M���aA��끱)}�$ �`��?2X�����1�'�N�i�ƾ	*������)wb��o�K�C`������B����si0��B/��J��<�0|����J6�zU����qUy8H�&��E���4{(���`AR����I!̂KcN����~f���r�h�p�k�:x�!���5RP��^�]Z��Q���VXSۄ/����'R�5�[xY��k��>�wq���8�رำa� �ŝn��g	~���1n�fRJLɗ�&�pH��"�b#\�ws)��H���sz�fQ��JZ�5L{�J�Y��~����r����ۘ����!}H�`����қa'�� 3�дX���W�����KW��B���r`-\�%�b�@
~IR��Ƹ7��a~�&���%`��,vmm����7y`$''�7%�|4f��� h.����0��������᱓���Y����ȗ����߀����?���N7B?%)vB�$A]�������W�S��lq���
�V�c���Q�����4x����O�I�W�[�"8樻��m��!��:�R K./�cYZ�W�dY(��*e#�1@<�)��T��E�ӦA��"�iq�}�㴸�֠녋W`�ǳ����W����|���K`������+����a��B_�c������G�#��B�����+��\����Ga���IsJִf�OK��O�5Ԁ ��@��0��"�2i��X�j(���
�Ƹ��<lp��8
��W�Y�:+��eQIS%"7Y��SV���iJ�p�%�Y��DNos� �iR�֚1E�&|* ����Y0q��5d��(�y�9��Z�k-=����d�����1P{��]4��5�\��Ҙ˅t
�NI`9.�;_���7��?��;�� �M��
�zT�_^��_^u5-�������-�/f�X�Eq-_�Hr0S�?����ܺa��֣���_^��_��#H�o ����9��1��j]?YGhL�Af��:�'���Q��1���_Z�d��m?�׋�0J19k�=,�7���p �8T�ae S��~9�s�<�����0�������Sm}�k��HpG�Os�o� �zG3�@�fW���F�FG�>��5P-�h�v4��4�����.�͎f=��\��/E���zO��M5{/Es����@�]]5_L7��	��U��tc�ў 	!ր�_��aG|Q�u��?�,�zG��U�_z��ȸ�x9Ⰺ�CaK������c9X�����0��<�v&����f��G�P���e;�JMQ��",a�F\0M�}O���)�����Yy?q��zy7�({L=Q��V���5L�Bl�!*�P�����0�w+#h���z�r��
̲B|�6s���.e��%�nR2��|�!$L|��H�*�(!6�@N>'Y.?�\^\Pn*������
~y> V�]�{�0��mOpKe���DD$��W�V�5��\V�{�z�]GP��s)�$��Cp��4&�(.�`c�d������R�mdԎc�����Tʬe�3���fi͓����晤1A�R5�����p�)���,!ҿ�H����/*�� A�91�!Z�z)��r�p�k&2�#s�01-g�
~���rCʲ��/E 0��a�
��fa3t���qO*��XQ�T�3Ж�(ez�&�R�WXp����I�@�|ApIB�-�%RM9�^ɞ�&���6�[*Z;�_�,q5U
��"��T̰<[�R�>�A��p�DCYkT��EH�Qȼ���5Ǯ �i�.敌*W����VK<�;���/q�*-dQ��n0�|��n�,��:���r�c^Ie�Rg���z�puq��`�����S7Ɲ����1��l`�z Ņ� m�{ϯv����P^-
=7,�M���Oyjyr�iOa'"����%��M�	dǤ��cj)�����̀�5���^®�TkRJ���tp�$ey�%���@�x�� T��"*#�[����L<�Z2���˥<x1��H\0�2K���yز ����F�/���%�Y"ǋ�aG��.n�����V xL��e�6=���X�p-d��4W���������i0-�H�.`�y�
������oq�&�h��p0C*�`�M�(��sQ���
{�Yx�~����Jʴ`<�@��,�$�����I0��Y
І�-��e���iBe4�$UR�,
Yٜę��p�Aɷ*�{p8̏�-8���~ٍG$6�v����M�#�� �l���)�ЕY��Y��:"%JU�e�$�.@EK}h�x,���-��$gH�@�NE-�d\.�J&pUF'�Ox��BU��@Q���.-ge�J/��h~�m� �S-4Ww!�� ��&�;���vk����.�V�[�>�.V~Oq]���'����\����6_�qg��HϢg*��e� ��9V�R���p	ȑq��" /Ee����P
��O�A��tٛ�^�0D��Gh �6g��b�&g��G�ɇ3vxt5���\����p�nw�G՗$K"Ae�f���M`���ȗE������,T�����}}_�u��C�-UW1�G	�5��Ӂ���Zϸ��e:�Ϩ�	��WnD� ���XY��34����qq?��{lץ��4��>���9�)��*X)�ͤ��?���-|�ZX����f��
�%�rgsyy&`�];�9����o���D{��F<�2*$y`�aS�9� X���w����4���u�,^�{����$�|>�Ap��ã�b6{4�y	7k���N��Wv�+d>8�LJ :0�W�ɛpk˪yp_�B�g����4��x��@��K��R��|��ڍT���`d��]�X��J٠��]k�ا�����s��j���t3d񛪌0���Z���EL�0��h'ޭ��y������\�8ѝ{-�h�)ksKq~���#��ir59�\o'{�K�%�z{n��k�7O�:e�fYȎ�)��ͺʫ��vlPR%@n�[�� �  ����ݠ�Yz�x���G���ϊ�P�4����kY��,��ҭ���nr�k���rjN�[W-Y�=]��ݕ�ד�mjk�.NJ�R;�@گV�^!Y֣���3�aL ��Ʈ�)w�<Y*yn/�WWF�j(yTxI���Ȥܩ���\��\Qol�p���A�v���B��U���ʠ ֫��Be��˶� �H�=�fh���;�������dѢW���DȮL���"a�l2O�ʌGcpU����H�u-�_k�"�g�!N�Z?x�����I�s ��1)f"��C�K��h��+�<���*t�=j��Q�3���ΊH�����u�c{A���ǔi���R�gb$�!)F�\�� ��:I���m�)�ŀc2HCܥ���gVؙ�a��[�e|�M'���+�/Ք�Z'u���|�q�P'J8�,~Ͱ#GQʬ�uh�p�7 �Ǒj�����.{�I+���7�ԋn���$q3�H�䜃����s2��٫�w
��O/j���=�N-�}���2`�\u��z"M��0�>�_3�>��@������� �5�>�PRV\���6���N��EM�bQ3L��	ti�Z�;�|D�.!�Ԍ�Fm_Bp�
už���.����wӼ��>C��.tZ�|��.��	l&�9J�6"��46��,�[��n�(HB�p2v�x><z��}+�Ă;�����}FM���>��RB�*r5y`�σ5�#��$Z1y���ܖ��Ԍ���.��܋&�X�@V&Pȋ�ۙ+�yOt�Pu��p1ٻ�`�mwY
��v�bg<�*d�H�(v=�Ou
`K��251�|��OP��&Rc��t�|�=�Y�Qʳ��fQO�Ğ}f� ��'W��\��TQc�Z@��*��i�L�%E�#�F����M�m�E���5'���7P9�IP��<Y�i�K�����.r,(�U�AǔQ���pR��v��={���ߧ��Tͻ<�B7�=&�uL8����tٷ,+q)�3PYT�Ԏ�gJ���k6��9�ZK��s��������+�(	&�#{MVH����%(!� zc�vU�OHx.��MjK�Rޫ:�qF�E�D��c�kWx{t�E��L���������zO3 ��}���WuJ2�e�^�/ �ݨ 	-��WL깔ҹ�.-E�A^{/������'�!�i���W;#1�,��\��rW:E�dR~��T�N�8cr�0�Zl�5Hf"�%<�#��8T��$2ˊ%��Iс���e�%O'W��ޡ�{�Խ= .��Z���=N�4s=J�cz1��`r�h��NG��sX8��ki����)����;�����q��Ȑ��:��]��1VYAD���#��
)6�
\</\��ܥc@�F��A�N�P9)���*o������b��<{�te�C5�E��%�ENXȹ�g�m�ɯ�8أ3��v_)QF��EM�x��
u�
��|.��Zs[~�@��k��*��ް[�Rk����N3=&s\L���.¸�:`���(N�w��_��
�h�;�o-NX�� <Ϸ%x +���MT�=Wkv�3��S�G����"S�����o3�������἖��6�fCs�t��Lȭ�<wI�u��=	�:�¿��*˸��<�Dt�M.�i�9뽩���  Cf�Xޠ���+��љ��Nk�6��j�x0�$�\&����6s�"E�tݢ�Y��,��a��Љ�1����ý�>�1 �_ex�oJ�ۣ�}C�iC�D>ԼG\�$h��-R
]�ԁ5܄���Y%�f�,�b��ux���.E�T{�EL`�a0����O�
�ߙ��"��{�Zŉ�W+>� �\m}�����C��������f�_h���8�Þ�Waʽ�}k����j���]����;w�x�lOHu2��)暲nK��銾���iTC�2�*�s�j3Z�J�ԗ"�D4�P�-n��,��E2���9��t��Z)=��Ƨ�_��|����2�m����o3Nu���Mͪ�԰���\ڀS�V5��S�-����5�?������w��w�S��6��S���@Co��_/`j�S��mjV�@��|]�Vp��܎�F8�W�-�%N�}��e���}xN��9��q��/J�N�;�2��6�&e�Q���
J��������+oF��?��mRf��#�M@
��-bv��}�^K@��C�����;�s;���j����-�ٶ�Wu�����І0e*�N߾<L��lQ"%L!loqK�q깋Ώ�)���c��_�������}�צ �ە�X��jP����-*�M�V��"PA�В�T�qj8P��
�����6p�P���=���m�!r	4e��+��^?K����:ͼ���*Y�Sб�"Y�S�˿JY��~�I���<�R4�}~��1(Ճ�[����O���2��p���5d0���%(5Tzm����?�	Hm�|���̾ҿ��L�F���60��X�6g���[t���)03����ׅ��H��Oum�Yg��bmJˠ	?,u�!������z�w�Q�_i��8���$}[4�ub��95j)CSy�S(��.�^{0��f�R`T���j?F�fo*��>Aj�;l�H[�:�UzC�lI�DO�mN��wc@,�
`�)�րT��R�݊�6[�~�Ԧ �S����ֿ�|;m��<{T���@�jq�ܖ��n��7�|��cA5Th����&�����k	!u�zZ�:Z5��>�j�+ԶVC����a�[u��2~Ce��>t�έ~�A��E����P�w��;�K��2[~lʤo�l\��8yT�J���J�#ZD���Wk�Z������@W�������zN��,em�����^���1�4z[�aL�H�w���n�M���?��2S�q������vF㓝�Q�Y}fO�����;Jp87Y�k�Նv����C� ��_��R�e�G�:�l�/?�w�~&��qS{^���	�c!��0Ʒ��4l��䛜����'�6�y`�����e,�ٸ�ngh���%�U�������Z�_�9�W���^�ތɣ�M�οG��I�pI���؟\�%�6�$�cz���^kmsT��VNaj�7��D��'�6�Q��1�03�e������L��_J�_����{�0No��R���y�.������k<�"��K3욚?�#��ե�lN<���߻u
VF/T�3^��8ЇfW��́fV��_�O?��H_�      f   �  x�e�Ms�0�ϫ_�S���qTlҒ"�����8"فH�,���ĝ�,���g%�F�\4,�»�E>����~�_~���+%�5�@!����A_6���6�3��ͼѕ����:�b0�-��[lm Q�+]G$%Ҷ}uؚ�����5��.�:lxǎJ�K�^m�<��U$�.���jv�_�.Z�l]����4�.A8|�����z�,�ς\ϋ�C�E�C���m�*B)R����[��!o������;��)ydJ��]�$�!3�d+Xv=�&����T</��G�x��a��-(Z��YK#2�A���*���������2��"yh��n�f�r�4��YU�ni��dL�?5��J�|
�>�W�G�Ag ��6��KZ�vK��y����      h     x�u��r�J��'O�P��^"�b��j׾�l(!Z���<�Y�;�g&�|===kV��3eM-��H	�5����U,µ+����h=QUQ)<�U��o<d,-��2�yn�p���x$\k��*-���l�^a�1���p�3	��+k����p,��(h�˷��N��S,�ͺ^Wl�g ���X�О��i�)�	��z-��
�%5gͽ�ۀ��RN��za��AU�K���Z�ɉ��m��$U�;0˅즕c�!�8M�8�uf��63�))���Z@y�K\R��1���	�.�]���޳+et	�|��6����"��V�p�-��G�c��pi�u���Ұ�,�)�{��w���TVf�����T�f�T������2|q��Q\�L��"�3`I�,�ss����tQ��>�)�����XW����Gw ��Z}m�ѡ𬕵I��1�L��p�e|���]U�ũ�;��A�}F�������IQjgJ��5ڿ�r����$@"�=vab��'��� ����)����>�^Y�}�R�3�.p ^`P�Sa�F��e�p��f�)m�p@���fk�Y5��:��&��F�ͮ>��0B3s17d�JxF�}�ۯ��Y�r����"VgQ���U�gQ�Z�����b����Wn�)�׷_����R���G�,�����VRc�+�������5��� 
/�A�>{���I�,�Xi4F�sw�rʰw3dz�����V�9�݃���7P�HXk'�0��N2Wo�t^��i�H�ap~���G�m�|#rx�,��1P~V!+Zk�?Pn��G�o�J~���r/P������t��z:��v0q>Iɬ��vx�����[t�P����Ag�Ӯ񜱋T������g_���)ʎkӡZa�,M7���aK1O6���%�&�e�3�ܝ�|�_�?�)�{u܃��Z��Y�}�ۿ%?���`��o�|f��X7�#ܶ<]v��^���GIy�x��Ñ��9��W;���q�I�TǙ�	�c=<<����+      d   E   x�3�t��u��\FP���{bUjIIj�&H��=��.嗟��*��7��?j��s����� �rA      V   ,	  x��YmO;�L��U"����F�"AR �(��Ҫ_�'�Ǟڞ����s��PwW��jW��B��y}�s��?�m������2疝���;ciE��a/����<x�����4��zc�2�e�1��T&\��L��K��rݙ�LG՞��=f_���;J�6���4�cc�w�u�����Ǧe>�K���</�������ꘈ�H��#Wp�ŝ��5/��u~���k~����R�wlP|;d������;6�����)36�[���عYI.|�����m�L�cR���x�3���`����`�=�#s���`ٿ��z�c�/���(���r/��m�-�KX�����#{�͇��	���]���ʌvZ�؍5K���D{a]p�F��T�p��R����b�h=:Q��KQx�
i��?p�r�m���6�u�(�3�r���xT��%��I&9K���W�y+�,T�{�_"ڄ�[��x�ؔ�r�_ZRs�g�v��dȽ֗�;�q��������I"���%5[݋�(ص���F_z�w�&^Ȝ'�$�T�,�t8���?��jj�,���k����e��ϛ���?��ݝ]�NYg���Y��-��a\�C��V�_/26�?*�?K�1�c�	V(6�	{*1�`kS2o�����Q&��N���x� �2)��v)�O��Q^2�ixp����g� ~��sW~@��]3��-�.��� M�y>W�e�O:�Gұgx��od	g���V����Af!����r.���b	0U��L�6�/f]V�T�pn*�tVo6s��3�K�f��Zp�(97+au��Lt*y��#2zy�����w�R\im�ٝay�j�"��
ƜY!��/+�v���OZ�'y^j�}���Χ�M�Vh�Z�a�Q&U����r�:-QC�����j3Roy!J���O�|�e\A�J��KM�'s�n O�ƇsA�'�;�j�xJI�۞��nD���*�'W�������!sB�qy��;7$�KX-s��0yaM�f��o��Z�CG�)�7��l6�I�3�&��� �{8dM���gcUZ���.y���O78[4DD>*���[Y�#�^*`�׷�2���ت9��Gʸ�����-�{�>	bn��!GA$�z6��_�0�Mqݶ�f��^�q;�d���f��R�ܣ7q��`0D}?p���"�d�?�O/R��ZA.,˷h��a��ov��F˗{��q.A��R��Q�/'!A>x�E�L�U k��ae� ���L�K�*�@�V1�TN@�&`Z<��|z���Tү���t��/./)@�ٿ@\�ހ�P��ҮT��Y�f:���>��TĬ��P7�Gz���l���	)��ZD��,b
�i�4��٬�;�QPw�e�$wI�%8����$Qw�R>��0읔��DW���w�W��&
nc�I�����S<R��B'�F�s059ڣ��?�x~��5Ws�s�}h=!�)�ƶ\b�p��HR��I$ZU��>�/�WU����6bS���! -��\llU�!�D�l?}�՘��$�Mn`�h�,�/>��R�B�0��0y6��Eb�rN��>3��ԙ]�t�|�na����zJ@k��cĘ�3eT�H�9�;��I��wݐ��p�AU����%��u�*��!�&���!Ha|����@\!Ai����-�u�|d��	��h�|FTHgk�F�Z�D�f���J}Ӧ=��zh�A��r��P�aTHwa*���Eт��S��S2�q�8�ll�fЏ����g�ڋ�#-�3.��4���p�IU������	�,�X�ӕ����};N��XJ�jj��p`Fj� Џ#w�w�|�KA8��=�N�),�%����CS� �'��<(�.E5��bL�02���A���K�A3���f�^�1��o`�����m������Kg�r��ј[EC�FR#0Pp�d�-1��B�h�n��X���{QM�*���s'�on�G� �,N��m(��ũmkӬ��Km�`�A߈m���F��uY����%��B{��<��.:�n|ryɋ$��@P��]����D}����'�*"�������A�H�r���Rh�a�Wt�@<s�B3�i���bTWO�k��u~���{�
N5� C!,On9�hu�`7�oi�?	��lh�d|�	��)	���@�T�x?�aZk'��v*�&ֱ�L�tS��:�}h���*����ͫo�.���T#���{:�1()���뱏�:�'�����a�����@��<*�&���Es�l���o��Η���B1?�/��s���k>Z�*��0�?���_�z�w�^�      Z   =   x�3����-N-*�LN����v�2�)J�+NK-JM�	r�2�J-��B\�b���� ��      t   =   x�3�JM.*�,�M�+QH�/R(�O.-J����2�S��Q�W������������� �_<      X      x�3�t�,JM.�/�L�,����� @q      p   �   x�E˽
�0��9y��-1�����A�.1􂽷$QЧ�����Q!� .S���������d�R������8�+��"�#$�x�L��[ޒ�e�����V��J������1���`�q������L�����2%      `   �  x�mQMo�0=K�B�%N�[:2�k�i�3�%@�-@�E�?F���=����$�v�d0#��#%e�0���l�p�h'�-l��_��t"e���a]�Jt��4yal#L�\=�ԫ�����b��PCd�^��G�P�D��wU����E��H�)Ǯ{�PV�S<��F�	+R��o��*!g�d6����{Fh���thwӞF��n�te��b1S�d�a��C�r�]Q�Z1D��u��WiS��JV��	�F,��nG�� �S`��Y���H9S2�8�-�8<P���,��������j���o?_���ͪ��%��v�J��Z�cv^��6w}�2hi��}��T�ϐvr�O">�(q����5���:>�|�~z>��pר��z5���U� ��_�ޚ      j   1   x�3�,-��OL)��OO��,N,����O�H,*1�+�K������� 4�N      n   '  x��VkO9���~�`�ѥZ���QFKHDB�]���8���=NH��kg��U% aƾ���s���A�ա��W�ܴ��C����:�QwtLIkxp�]}�('��jmJ�t}�'��������R��ij�Jc!�.iG�*�*aE�ff�녢����ZP���YSP�)�>��U�R�$�Z�^�X�j+t��_I���5�A�%5g���!�B�Mn��<͌I��Se��8�Z4��źfi�*���R�Y�a�?^[U ��(I�j�6̄-�4�Q8����y����� ��U;ďp�+����Y�����/W��
��.��q�a�E~}�7͊��=��'��"��I�v��S�Ҿ)2���Ƴ&��Q�c�=x����8<�z� $# M�j]�[fJ�D�� 2��F \?�M�k,;�L��̣�/ʒY��Q/��Ey@�TG°`�Ւ1A'}�w��4U�Y��q[4S�H[ ����!9_1��
�jd�r���j|V�9=��	��j,��B�� |��2Pذ>�.
_��40���( DGQf�u��%O��T;)l�,X$ȉZI~�� �R��)�kz{�ʚ�o�.�\ϳ:�h��EU��^*����:j�e��6���Ϳ-j���(a�|����?���*�9�x�8��#���!�c �[0pOP���v��xW�lL��S��+V;BR�7�/S #�Z�`6s�����E�-؆UQ�;ۂ �x���V�����d4~��I����.�|�4�:6ڠ�5t�?�p&#�h��}0]����.Ђ{���O�߱�Q���y���8C%m[a���	1�C��0`�x��m�3h;������N�T� ��ؾol�i<$�4����:��P��ʝ�!s��f��`8�w��>��'�'t��	jwz{�/��;��ɰ��(�t���u���7���*]c]|�lhb]�J���lI�rx�S �-�.QOp��R� �����2� cnE�gm�r�cC&b{����
g���ϥb�����	���X�Ȼ����C��-Ǟ���w!.�T��ʰ��n�$W%p9�Rv�%6.$ǭ�(x7Fh� ,\X��N \�A(ĳ"��`��J��E)eH��\�y�ʡ_u�+�WE�� �����g��g�w-�,E
=�H_�R�v���S/yL��e�ԋH>��)q�б~��\�"��w{R�ȅP��IڡGoo;��)vL+N�s6����EB@������B1򪔘bX�4Ty�+����6Rz�Vwۃ���=��x��	�w���y��%T:vŬ��Ԇ��xk&kPx8ˮ��ؔ����~ 3SA)���G�D,G:�IxL7Ig�[/f�b1s��4�]`<x����Osޖ�`�*�
zJ�`�������wS�r(�;�Y�VE���uر��i��o��@�X���쳂���/J��loƺ4&o�0�󎗩�M<\	�������>����j6�"����Aj|��J��vpa_B�_�F��,6]��fi�[5?x~8�:+\*��r�t��'u?  ��l�<��w��      l   F   x�3�,-��OL)�/(�O)M.)�O�H,*1�+�K���2�T 6���/-N��* k3�!oS���� �4*�      R      x�3�LL��̃��\1z\\\ B�B      T       x�3�tL����2�tJNW(-N-����� P[      r   8  x���o�8ǟۿ��é}�x�#q��ԣ���"���Ҿtl�Hv���_̱�h�!t�Kę��?��_8k%�x�8y�mk����u����K?X�-���3?��--�E&�|G�d>����������װ������r˺�������|z�q*\Hϓ���7�=�m+YD�k#��a�I��:�8Y.��N�{�K�z�j~ﴚ?kF�f��vk+��vU�����CwԿ�����+�w����o�^wq��5%7�8�/�0�Tr^�����Q��7���w�陸?=�_�v�hA���u/����V��� ���]�7�
������z���/����̓��B�}�bz�B��d��>(Y�<��:��u�Fz��)��BP'��6�n�2ϾR�2��ŀ�]�����euC�d.^��#B �Q�	��)dگ0]�J�gZ@ݐ��PG*w�P��	Mb���I����
�qש���d��DǑ��I�ڙ�W0�p�����1&�+jgc�7Y��IAm�B�@|PJ�:���c�BS�~���+s6Pa�*MUf��/�pg���W�_Lk�n���K�%�Mٳ���{5)�د��-���/i�ʜ#�O�Vu��ȗ�w���~y�$S�b���R��LI��C�Q�i�(����;��e�B�{��qx�l��ڣ��U�|iW�]���N��6��*YJp�|9�/DI_��m>5�>!�Kj��+���_�j>b��i1!�j��Q�qD�`z?0�Q�Q�?��`22< j�'��LFsD�8Uos�w�PFd̕���g�Qe6�`��4P��ī�,#���N��$ˡ11�r�2�z�6��dj��:�{�j��h�;&O<_qEhZ7υ��̡�d^��Ko6\ؤ��Y����Vc/�L��D^�eq�rGZ��ٮ�����}�rǍ���-.Yz雬y��)x�s�#��+T�ض���q}�>C�A��<�~L�K�v�xI�k^La�2�&��B�ho���Qg$����E��z�����>#��f��G_�����-�Ι��a�l�J���T*G0����������_�R@�      b   �  x��TMo�0=���T"�?�}�R!z(El�!!+�t-%��8+��x7���VP�fy�̼y~�on@��pg��:�>H��[��g�4O8K8���*�ض�a�)3QSVg%Ʌ�9�Ų���WXD�qO�1���<e�D��\��J��sk{�H��O���3zl:|>�j�R{|�4>��}6:��6��g��n
���uש&���Ż ����k��Q��z9��C_l�	���� Eų�@�Z�ğց�'u��;��0B�RX��V2�ӌ����
	���G����7{x�a����U�� ���/&�Uzq�ؠU�2R0&�U��2� {�vP:xȅ���듿V��_�q��++ƫ���	+)g����n��Ә��x���*֜�4%,��O�ZC�<��3]I�=h��;p�0̬�֨>|�NT���r�=$]��S))�4+�NB���     