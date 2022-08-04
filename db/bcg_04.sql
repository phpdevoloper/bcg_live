PGDMP         +                z            bcg    13.6    13.6 �    :           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            ;           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            <           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            =           1262    57757    bcg    DATABASE     _   CREATE DATABASE bcg WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_India.1252';
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
       public          postgres    false    211            >           0    0    About_us_about_us_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public."About_us_about_us_id_seq" OWNED BY public.about_us.about_us_id;
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
       public          postgres    false    213            ?           0    0 "   about_achivement_achivement_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.about_achivement_achivement_id_seq OWNED BY public.about_achivement.achivement_id;
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
       public          postgres    false    201            @           0    0    bcg_users_user_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.bcg_users_user_id_seq OWNED BY public.user_info.user_id;
          public          postgres    false    200                       1259    66950    bcgvl_contacts    TABLE     
  CREATE TABLE public.bcgvl_contacts (
    contact_id integer NOT NULL,
    con_email character varying(500),
    con_phone character varying(500),
    con_address character varying(500),
    map_embed character varying(5000),
    con_status character varying(100)
);
 "   DROP TABLE public.bcgvl_contacts;
       public         heap    postgres    false            	           1259    66953    bcgvl_contacts_contact_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bcgvl_contacts_contact_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.bcgvl_contacts_contact_id_seq;
       public          postgres    false    264            A           0    0    bcgvl_contacts_contact_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.bcgvl_contacts_contact_id_seq OWNED BY public.bcgvl_contacts.contact_id;
          public          postgres    false    265            �            1259    66430    bcgvl_staff_designation    TABLE     �   CREATE TABLE public.bcgvl_staff_designation (
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
       public          postgres    false    221            B           0    0 "   bcgvl_staff_designation_deg_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.bcgvl_staff_designation_deg_id_seq OWNED BY public.bcgvl_staff_designation.deg_id;
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
       public          postgres    false    223            C           0    0     bcgvl_staff_details_staff_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.bcgvl_staff_details_staff_id_seq OWNED BY public.bcgvl_staff_details.staff_id;
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
       public          postgres    false    219            D           0    0    bcgvl_staff_groups_cate_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.bcgvl_staff_groups_cate_id_seq OWNED BY public.bcgvl_staff_groups.cate_id;
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
       public          postgres    false    205            E           0    0    director_desk_dir_desk_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.director_desk_dir_desk_id_seq OWNED BY public.director_desk.dir_desk_id;
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
       public          postgres    false    209            F           0    0 !   director_status_dir_status_id_seq    SEQUENCE OWNED BY     g   ALTER SEQUENCE public.director_status_dir_status_id_seq OWNED BY public.director_status.dir_status_id;
          public          postgres    false    208            �            1259    66754    division    TABLE     �   CREATE TABLE public.division (
    div_id integer NOT NULL,
    div_name character varying(500),
    div_content character varying(50000),
    content_updated_by character varying(500),
    created_at timestamp(6) without time zone DEFAULT now()
);
    DROP TABLE public.division;
       public         heap    postgres    false            �            1259    66752    division_div_id_seq    SEQUENCE     �   CREATE SEQUENCE public.division_div_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.division_div_id_seq;
       public          postgres    false    241            G           0    0    division_div_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.division_div_id_seq OWNED BY public.division.div_id;
          public          postgres    false    240            �            1259    66555    documents_bcg    TABLE     �   CREATE TABLE public.documents_bcg (
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
       public          postgres    false    235            H           0    0    documents_bcg_doc_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.documents_bcg_doc_id_seq OWNED BY public.documents_bcg.doc_id;
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
       public          postgres    false    207            I           0    0 "   emp_designation_designation_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.emp_designation_designation_id_seq OWNED BY public.emp_designation.designation_id;
          public          postgres    false    206            �            1259    66766    event_category    TABLE     *  CREATE TABLE public.event_category (
    cate_id integer NOT NULL,
    category_title character varying(500),
    from_date character varying(200),
    to_date character varying(200),
    created_at timestamp(6) without time zone DEFAULT now(),
    gall_cate_id character varying(100) DEFAULT 1
);
 "   DROP TABLE public.event_category;
       public         heap    postgres    false            �            1259    66764    event_category_event_cate_seq    SEQUENCE     �   CREATE SEQUENCE public.event_category_event_cate_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.event_category_event_cate_seq;
       public          postgres    false    243            J           0    0    event_category_event_cate_seq    SEQUENCE OWNED BY     \   ALTER SEQUENCE public.event_category_event_cate_seq OWNED BY public.event_category.cate_id;
          public          postgres    false    242            �            1259    66819    event_gallery    TABLE     �   CREATE TABLE public.event_gallery (
    photo_id integer NOT NULL,
    category integer,
    photo_file character varying(500),
    created_at timestamp(6) without time zone DEFAULT now(),
    photo_caption character varying(500)
);
 !   DROP TABLE public.event_gallery;
       public         heap    postgres    false            �            1259    66817    event_gallery_photo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.event_gallery_photo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.event_gallery_photo_id_seq;
       public          postgres    false    245            K           0    0    event_gallery_photo_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.event_gallery_photo_id_seq OWNED BY public.event_gallery.photo_id;
          public          postgres    false    244            �            1259    66497    events    TABLE       CREATE TABLE public.events (
    event_id integer NOT NULL,
    event_title character varying(500),
    event_desc text,
    date_from date,
    date_to date,
    event_file character varying(500),
    event_url character varying(500),
    uploads_type character varying(500)
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
       public          postgres    false    231            L           0    0    events_event_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.events_event_id_seq OWNED BY public.events.event_id;
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
       public          postgres    false    215            M           0    0     former_directors_director_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.former_directors_director_id_seq OWNED BY public.former_directors.director_id;
          public          postgres    false    214            �            1259    66843    gallery_category    TABLE     w   CREATE TABLE public.gallery_category (
    gall_cate_id integer NOT NULL,
    gall_cate_name character varying(500)
);
 $   DROP TABLE public.gallery_category;
       public         heap    postgres    false            �            1259    66841 !   gallery_category_gall_cate_id_seq    SEQUENCE     �   CREATE SEQUENCE public.gallery_category_gall_cate_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 8   DROP SEQUENCE public.gallery_category_gall_cate_id_seq;
       public          postgres    false    249            N           0    0 !   gallery_category_gall_cate_id_seq    SEQUENCE OWNED BY     g   ALTER SEQUENCE public.gallery_category_gall_cate_id_seq OWNED BY public.gallery_category.gall_cate_id;
          public          postgres    false    248                       1259    66890    mst_rti    TABLE     �   CREATE TABLE public.mst_rti (
    rti_id integer NOT NULL,
    rti_name character varying(500),
    status character varying(500),
    created_at timestamp(6) without time zone DEFAULT now()
);
    DROP TABLE public.mst_rti;
       public         heap    postgres    false                        1259    66888    mst_rti_rti_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_rti_rti_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.mst_rti_rti_id_seq;
       public          postgres    false    257            O           0    0    mst_rti_rti_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.mst_rti_rti_id_seq OWNED BY public.mst_rti.rti_id;
          public          postgres    false    256                       1259    66911    mst_sub_rti    TABLE     3  CREATE TABLE public.mst_sub_rti (
    sub_rti_id integer NOT NULL,
    mst_rti_id integer,
    sub_rti_name character varying(500),
    status character varying(500),
    created_at timestamp(6) without time zone DEFAULT now(),
    rti_upload character varying(500),
    file_type character varying(500)
);
    DROP TABLE public.mst_sub_rti;
       public         heap    postgres    false                       1259    66909    mst_sub_rti_sub_rti_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_sub_rti_sub_rti_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.mst_sub_rti_sub_rti_id_seq;
       public          postgres    false    259            P           0    0    mst_sub_rti_sub_rti_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.mst_sub_rti_sub_rti_id_seq OWNED BY public.mst_sub_rti.sub_rti_id;
          public          postgres    false    258                       1259    66922    mst_subs_rti    TABLE     w  CREATE TABLE public.mst_subs_rti (
    subs_rti_id integer NOT NULL,
    mst_sub_id integer,
    subs_rti_name character varying(500),
    description character varying(500),
    file_type character varying(500),
    size character varying(500),
    status character varying(500),
    created_at character varying(500) DEFAULT now(),
    rti_upload character varying(500)
);
     DROP TABLE public.mst_subs_rti;
       public         heap    postgres    false                       1259    66920    mst_subs_rti_subs_rti_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_subs_rti_subs_rti_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.mst_subs_rti_subs_rti_id_seq;
       public          postgres    false    261            Q           0    0    mst_subs_rti_subs_rti_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.mst_subs_rti_subs_rti_id_seq OWNED BY public.mst_subs_rti.subs_rti_id;
          public          postgres    false    260            �            1259    66456    organisation_chart    TABLE     �   CREATE TABLE public.organisation_chart (
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
       public          postgres    false    225            R           0    0    organisation_chart_org_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.organisation_chart_org_id_seq OWNED BY public.organisation_chart.org_id;
          public          postgres    false    224            �            1259    66831    photo_category    TABLE     �   CREATE TABLE public.photo_category (
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
       public          postgres    false    247            S           0    0    photo_category_cate_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.photo_category_cate_id_seq OWNED BY public.photo_category.cate_id;
          public          postgres    false    246            �            1259    66878    photo_gallery    TABLE     �   CREATE TABLE public.photo_gallery (
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
       public          postgres    false    255            T           0    0    photo_gallery_photo_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.photo_gallery_photo_id_seq OWNED BY public.photo_gallery.photo_id;
          public          postgres    false    254            �            1259    66486    product    TABLE     �   CREATE TABLE public.product (
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
       public          postgres    false    229            U           0    0    product_product_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.product_product_id_seq OWNED BY public.product.product_id;
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
       public          postgres    false    227            V           0    0    production_pro_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.production_pro_id_seq OWNED BY public.production.pro_id;
          public          postgres    false    226            �            1259    66702    recruitment    TABLE     B  CREATE TABLE public.recruitment (
    rec_id integer NOT NULL,
    rect_title character varying(500),
    advt_no character varying(500),
    date_of_announce character varying(500),
    last_date_to_apply character varying(500),
    upload_advt character(500),
    created_date time(6) without time zone DEFAULT now()
);
    DROP TABLE public.recruitment;
       public         heap    postgres    false            �            1259    66700    recruitment_rec_id_seq    SEQUENCE     �   CREATE SEQUENCE public.recruitment_rec_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.recruitment_rec_id_seq;
       public          postgres    false    237            W           0    0    recruitment_rec_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.recruitment_rec_id_seq OWNED BY public.recruitment.rec_id;
          public          postgres    false    236                       1259    66941    rti_contacts    TABLE     �  CREATE TABLE public.rti_contacts (
    contact_id integer NOT NULL,
    contact_title character varying(500),
    user_name character varying(500),
    designation character varying(500),
    contact_address character varying(500),
    user_phone character varying(500),
    office_phone character varying(500),
    organization_email character varying(500),
    user_email character varying(500),
    status character varying(500),
    created_date timestamp(6) without time zone
);
     DROP TABLE public.rti_contacts;
       public         heap    postgres    false                       1259    66939    rti_contacts_contact_id_seq    SEQUENCE     �   CREATE SEQUENCE public.rti_contacts_contact_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.rti_contacts_contact_id_seq;
       public          postgres    false    263            X           0    0    rti_contacts_contact_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.rti_contacts_contact_id_seq OWNED BY public.rti_contacts.contact_id;
          public          postgres    false    262            �            1259    66721    tenders    TABLE     N  CREATE TABLE public.tenders (
    tender_id integer NOT NULL,
    tender_title character varying(500),
    date_of_announce character varying(500),
    tenders_notice character varying(500),
    tender_status character varying(500) DEFAULT 'Closed'::character varying,
    created_date timestamp(6) without time zone DEFAULT now()
);
    DROP TABLE public.tenders;
       public         heap    postgres    false            �            1259    66719    tenders_tender_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tenders_tender_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.tenders_tender_id_seq;
       public          postgres    false    239            Y           0    0    tenders_tender_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.tenders_tender_id_seq OWNED BY public.tenders.tender_id;
          public          postgres    false    238            �            1259    66217 	   user_role    TABLE     f   CREATE TABLE public.user_role (
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
       public          postgres    false    203            Z           0    0    user_role_role_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.user_role_role_id_seq OWNED BY public.user_role.role_id;
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
       public          postgres    false    233            [           0    0    vaccine_supply_vs_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.vaccine_supply_vs_id_seq OWNED BY public.vaccine_supply.vs_id;
          public          postgres    false    232            �            1259    66853    video_category    TABLE     �   CREATE TABLE public.video_category (
    cate_id integer NOT NULL,
    category_title character varying(500),
    created_at timestamp(6) without time zone DEFAULT now(),
    gall_cate_id character varying(100) DEFAULT 3
);
 "   DROP TABLE public.video_category;
       public         heap    postgres    false            �            1259    66851    video_category_cate_id_seq    SEQUENCE     �   CREATE SEQUENCE public.video_category_cate_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.video_category_cate_id_seq;
       public          postgres    false    251            \           0    0    video_category_cate_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.video_category_cate_id_seq OWNED BY public.video_category.cate_id;
          public          postgres    false    250            �            1259    66866    video_gallery    TABLE     �   CREATE TABLE public.video_gallery (
    photo_id integer NOT NULL,
    category integer,
    photo_file character varying(500),
    created_at timestamp(6) without time zone DEFAULT now(),
    photo_caption character varying(500)
);
 !   DROP TABLE public.video_gallery;
       public         heap    postgres    false            �            1259    66864    video_gallery_photo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.video_gallery_photo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.video_gallery_photo_id_seq;
       public          postgres    false    253            ]           0    0    video_gallery_photo_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.video_gallery_photo_id_seq OWNED BY public.video_gallery.photo_id;
          public          postgres    false    252            �            1259    66395    what_new    TABLE     �   CREATE TABLE public.what_new (
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
       public          postgres    false    217            ^           0    0    what_new_whats_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.what_new_whats_id_seq OWNED BY public.what_new.whats_id;
          public          postgres    false    216                       2604    66352    about_achivement achivement_id    DEFAULT     �   ALTER TABLE ONLY public.about_achivement ALTER COLUMN achivement_id SET DEFAULT nextval('public.about_achivement_achivement_id_seq'::regclass);
 M   ALTER TABLE public.about_achivement ALTER COLUMN achivement_id DROP DEFAULT;
       public          postgres    false    212    213    213                       2604    66282    about_us about_us_id    DEFAULT     ~   ALTER TABLE ONLY public.about_us ALTER COLUMN about_us_id SET DEFAULT nextval('public."About_us_about_us_id_seq"'::regclass);
 C   ALTER TABLE public.about_us ALTER COLUMN about_us_id DROP DEFAULT;
       public          postgres    false    210    211    211            1           2604    66955    bcgvl_contacts contact_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_contacts ALTER COLUMN contact_id SET DEFAULT nextval('public.bcgvl_contacts_contact_id_seq'::regclass);
 H   ALTER TABLE public.bcgvl_contacts ALTER COLUMN contact_id DROP DEFAULT;
       public          postgres    false    265    264            
           2604    66433    bcgvl_staff_designation deg_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_staff_designation ALTER COLUMN deg_id SET DEFAULT nextval('public.bcgvl_staff_designation_deg_id_seq'::regclass);
 M   ALTER TABLE public.bcgvl_staff_designation ALTER COLUMN deg_id DROP DEFAULT;
       public          postgres    false    220    221    221                       2604    66444    bcgvl_staff_details staff_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_staff_details ALTER COLUMN staff_id SET DEFAULT nextval('public.bcgvl_staff_details_staff_id_seq'::regclass);
 K   ALTER TABLE public.bcgvl_staff_details ALTER COLUMN staff_id DROP DEFAULT;
       public          postgres    false    222    223    223            	           2604    66422    bcgvl_staff_groups cate_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_staff_groups ALTER COLUMN cate_id SET DEFAULT nextval('public.bcgvl_staff_groups_cate_id_seq'::regclass);
 I   ALTER TABLE public.bcgvl_staff_groups ALTER COLUMN cate_id DROP DEFAULT;
       public          postgres    false    218    219    219                        2604    66239    director_desk dir_desk_id    DEFAULT     �   ALTER TABLE ONLY public.director_desk ALTER COLUMN dir_desk_id SET DEFAULT nextval('public.director_desk_dir_desk_id_seq'::regclass);
 H   ALTER TABLE public.director_desk ALTER COLUMN dir_desk_id DROP DEFAULT;
       public          postgres    false    204    205    205                       2604    66274    director_status dir_status_id    DEFAULT     �   ALTER TABLE ONLY public.director_status ALTER COLUMN dir_status_id SET DEFAULT nextval('public.director_status_dir_status_id_seq'::regclass);
 L   ALTER TABLE public.director_status ALTER COLUMN dir_status_id DROP DEFAULT;
       public          postgres    false    209    208    209                       2604    66757    division div_id    DEFAULT     r   ALTER TABLE ONLY public.division ALTER COLUMN div_id SET DEFAULT nextval('public.division_div_id_seq'::regclass);
 >   ALTER TABLE public.division ALTER COLUMN div_id DROP DEFAULT;
       public          postgres    false    241    240    241                       2604    66558    documents_bcg doc_id    DEFAULT     |   ALTER TABLE ONLY public.documents_bcg ALTER COLUMN doc_id SET DEFAULT nextval('public.documents_bcg_doc_id_seq'::regclass);
 C   ALTER TABLE public.documents_bcg ALTER COLUMN doc_id DROP DEFAULT;
       public          postgres    false    234    235    235                       2604    66254    emp_designation designation_id    DEFAULT     �   ALTER TABLE ONLY public.emp_designation ALTER COLUMN designation_id SET DEFAULT nextval('public.emp_designation_designation_id_seq'::regclass);
 M   ALTER TABLE public.emp_designation ALTER COLUMN designation_id DROP DEFAULT;
       public          postgres    false    207    206    207                       2604    66769    event_category cate_id    DEFAULT     �   ALTER TABLE ONLY public.event_category ALTER COLUMN cate_id SET DEFAULT nextval('public.event_category_event_cate_seq'::regclass);
 E   ALTER TABLE public.event_category ALTER COLUMN cate_id DROP DEFAULT;
       public          postgres    false    243    242    243                       2604    66822    event_gallery photo_id    DEFAULT     �   ALTER TABLE ONLY public.event_gallery ALTER COLUMN photo_id SET DEFAULT nextval('public.event_gallery_photo_id_seq'::regclass);
 E   ALTER TABLE public.event_gallery ALTER COLUMN photo_id DROP DEFAULT;
       public          postgres    false    245    244    245                       2604    66500    events event_id    DEFAULT     r   ALTER TABLE ONLY public.events ALTER COLUMN event_id SET DEFAULT nextval('public.events_event_id_seq'::regclass);
 >   ALTER TABLE public.events ALTER COLUMN event_id DROP DEFAULT;
       public          postgres    false    231    230    231                       2604    66380    former_directors director_id    DEFAULT     �   ALTER TABLE ONLY public.former_directors ALTER COLUMN director_id SET DEFAULT nextval('public.former_directors_director_id_seq'::regclass);
 K   ALTER TABLE public.former_directors ALTER COLUMN director_id DROP DEFAULT;
       public          postgres    false    214    215    215            "           2604    66846    gallery_category gall_cate_id    DEFAULT     �   ALTER TABLE ONLY public.gallery_category ALTER COLUMN gall_cate_id SET DEFAULT nextval('public.gallery_category_gall_cate_id_seq'::regclass);
 L   ALTER TABLE public.gallery_category ALTER COLUMN gall_cate_id DROP DEFAULT;
       public          postgres    false    249    248    249            *           2604    66893    mst_rti rti_id    DEFAULT     p   ALTER TABLE ONLY public.mst_rti ALTER COLUMN rti_id SET DEFAULT nextval('public.mst_rti_rti_id_seq'::regclass);
 =   ALTER TABLE public.mst_rti ALTER COLUMN rti_id DROP DEFAULT;
       public          postgres    false    257    256    257            ,           2604    66914    mst_sub_rti sub_rti_id    DEFAULT     �   ALTER TABLE ONLY public.mst_sub_rti ALTER COLUMN sub_rti_id SET DEFAULT nextval('public.mst_sub_rti_sub_rti_id_seq'::regclass);
 E   ALTER TABLE public.mst_sub_rti ALTER COLUMN sub_rti_id DROP DEFAULT;
       public          postgres    false    258    259    259            .           2604    66925    mst_subs_rti subs_rti_id    DEFAULT     �   ALTER TABLE ONLY public.mst_subs_rti ALTER COLUMN subs_rti_id SET DEFAULT nextval('public.mst_subs_rti_subs_rti_id_seq'::regclass);
 G   ALTER TABLE public.mst_subs_rti ALTER COLUMN subs_rti_id DROP DEFAULT;
       public          postgres    false    261    260    261                       2604    66459    organisation_chart org_id    DEFAULT     �   ALTER TABLE ONLY public.organisation_chart ALTER COLUMN org_id SET DEFAULT nextval('public.organisation_chart_org_id_seq'::regclass);
 H   ALTER TABLE public.organisation_chart ALTER COLUMN org_id DROP DEFAULT;
       public          postgres    false    224    225    225                       2604    66834    photo_category cate_id    DEFAULT     �   ALTER TABLE ONLY public.photo_category ALTER COLUMN cate_id SET DEFAULT nextval('public.photo_category_cate_id_seq'::regclass);
 E   ALTER TABLE public.photo_category ALTER COLUMN cate_id DROP DEFAULT;
       public          postgres    false    247    246    247            (           2604    66881    photo_gallery photo_id    DEFAULT     �   ALTER TABLE ONLY public.photo_gallery ALTER COLUMN photo_id SET DEFAULT nextval('public.photo_gallery_photo_id_seq'::regclass);
 E   ALTER TABLE public.photo_gallery ALTER COLUMN photo_id DROP DEFAULT;
       public          postgres    false    255    254    255                       2604    66489    product product_id    DEFAULT     x   ALTER TABLE ONLY public.product ALTER COLUMN product_id SET DEFAULT nextval('public.product_product_id_seq'::regclass);
 A   ALTER TABLE public.product ALTER COLUMN product_id DROP DEFAULT;
       public          postgres    false    228    229    229                       2604    66478    production pro_id    DEFAULT     v   ALTER TABLE ONLY public.production ALTER COLUMN pro_id SET DEFAULT nextval('public.production_pro_id_seq'::regclass);
 @   ALTER TABLE public.production ALTER COLUMN pro_id DROP DEFAULT;
       public          postgres    false    226    227    227                       2604    66705    recruitment rec_id    DEFAULT     x   ALTER TABLE ONLY public.recruitment ALTER COLUMN rec_id SET DEFAULT nextval('public.recruitment_rec_id_seq'::regclass);
 A   ALTER TABLE public.recruitment ALTER COLUMN rec_id DROP DEFAULT;
       public          postgres    false    237    236    237            0           2604    66944    rti_contacts contact_id    DEFAULT     �   ALTER TABLE ONLY public.rti_contacts ALTER COLUMN contact_id SET DEFAULT nextval('public.rti_contacts_contact_id_seq'::regclass);
 F   ALTER TABLE public.rti_contacts ALTER COLUMN contact_id DROP DEFAULT;
       public          postgres    false    263    262    263                       2604    66724    tenders tender_id    DEFAULT     v   ALTER TABLE ONLY public.tenders ALTER COLUMN tender_id SET DEFAULT nextval('public.tenders_tender_id_seq'::regclass);
 @   ALTER TABLE public.tenders ALTER COLUMN tender_id DROP DEFAULT;
       public          postgres    false    239    238    239            �           2604    66212    user_info user_id    DEFAULT     v   ALTER TABLE ONLY public.user_info ALTER COLUMN user_id SET DEFAULT nextval('public.bcg_users_user_id_seq'::regclass);
 @   ALTER TABLE public.user_info ALTER COLUMN user_id DROP DEFAULT;
       public          postgres    false    201    200    201            �           2604    66220    user_role role_id    DEFAULT     v   ALTER TABLE ONLY public.user_role ALTER COLUMN role_id SET DEFAULT nextval('public.user_role_role_id_seq'::regclass);
 @   ALTER TABLE public.user_role ALTER COLUMN role_id DROP DEFAULT;
       public          postgres    false    202    203    203                       2604    66540    vaccine_supply vs_id    DEFAULT     |   ALTER TABLE ONLY public.vaccine_supply ALTER COLUMN vs_id SET DEFAULT nextval('public.vaccine_supply_vs_id_seq'::regclass);
 C   ALTER TABLE public.vaccine_supply ALTER COLUMN vs_id DROP DEFAULT;
       public          postgres    false    232    233    233            #           2604    66856    video_category cate_id    DEFAULT     �   ALTER TABLE ONLY public.video_category ALTER COLUMN cate_id SET DEFAULT nextval('public.video_category_cate_id_seq'::regclass);
 E   ALTER TABLE public.video_category ALTER COLUMN cate_id DROP DEFAULT;
       public          postgres    false    250    251    251            &           2604    66869    video_gallery photo_id    DEFAULT     �   ALTER TABLE ONLY public.video_gallery ALTER COLUMN photo_id SET DEFAULT nextval('public.video_gallery_photo_id_seq'::regclass);
 E   ALTER TABLE public.video_gallery ALTER COLUMN photo_id DROP DEFAULT;
       public          postgres    false    252    253    253                       2604    66398    what_new whats_id    DEFAULT     v   ALTER TABLE ONLY public.what_new ALTER COLUMN whats_id SET DEFAULT nextval('public.what_new_whats_id_seq'::regclass);
 @   ALTER TABLE public.what_new ALTER COLUMN whats_id DROP DEFAULT;
       public          postgres    false    217    216    217                      0    66349    about_achivement 
   TABLE DATA           [   COPY public.about_achivement (achivement_id, achivement_name, achivement_year) FROM stdin;
    public          postgres    false    213   �                0    66279    about_us 
   TABLE DATA           �   COPY public.about_us (about_us_id, content_id, content_description, content_status, last_updated, content_updated_by, archive) FROM stdin;
    public          postgres    false    211         6          0    66950    bcgvl_contacts 
   TABLE DATA           n   COPY public.bcgvl_contacts (contact_id, con_email, con_phone, con_address, map_embed, con_status) FROM stdin;
    public          postgres    false    264   �:                0    66430    bcgvl_staff_designation 
   TABLE DATA           M   COPY public.bcgvl_staff_designation (deg_id, deg_name, deg_code) FROM stdin;
    public          postgres    false    221   �;                0    66441    bcgvl_staff_details 
   TABLE DATA           `   COPY public.bcgvl_staff_details (staff_id, staff_name, deg_code, cate_code, status) FROM stdin;
    public          postgres    false    223   �=      	          0    66419    bcgvl_staff_groups 
   TABLE DATA           K   COPY public.bcgvl_staff_groups (cate_id, cate_name, cate_code) FROM stdin;
    public          postgres    false    219   �A      �          0    66236    director_desk 
   TABLE DATA           �   COPY public.director_desk (dir_desk_id, director_name, director_position, director_qualification, position_held, director_photo, short_profile, detail_profile, director_message, director_status, director_expertise) FROM stdin;
    public          postgres    false    205   B      �          0    66271    director_status 
   TABLE DATA           `   COPY public.director_status (dir_status_id, dir_status_name, dir_status_short_code) FROM stdin;
    public          postgres    false    209   KK                0    66754    division 
   TABLE DATA           a   COPY public.division (div_id, div_name, div_content, content_updated_by, created_at) FROM stdin;
    public          postgres    false    241   �K                0    66555    documents_bcg 
   TABLE DATA           X   COPY public.documents_bcg (doc_id, doc_title, doc_attachment, doc_category) FROM stdin;
    public          postgres    false    235   PL      �          0    66251    emp_designation 
   TABLE DATA           ]   COPY public.emp_designation (designation_id, designation_name, designation_code) FROM stdin;
    public          postgres    false    207   �L      !          0    66766    event_category 
   TABLE DATA           o   COPY public.event_category (cate_id, category_title, from_date, to_date, created_at, gall_cate_id) FROM stdin;
    public          postgres    false    243   �L      #          0    66819    event_gallery 
   TABLE DATA           b   COPY public.event_gallery (photo_id, category, photo_file, created_at, photo_caption) FROM stdin;
    public          postgres    false    245   �M                0    66497    events 
   TABLE DATA           |   COPY public.events (event_id, event_title, event_desc, date_from, date_to, event_file, event_url, uploads_type) FROM stdin;
    public          postgres    false    231   �N                0    66377    former_directors 
   TABLE DATA           Z   COPY public.former_directors (director_id, director_name, year_from, year_to) FROM stdin;
    public          postgres    false    215   vO      '          0    66843    gallery_category 
   TABLE DATA           H   COPY public.gallery_category (gall_cate_id, gall_cate_name) FROM stdin;
    public          postgres    false    249   4Q      /          0    66890    mst_rti 
   TABLE DATA           G   COPY public.mst_rti (rti_id, rti_name, status, created_at) FROM stdin;
    public          postgres    false    257   sQ      1          0    66911    mst_sub_rti 
   TABLE DATA           v   COPY public.mst_sub_rti (sub_rti_id, mst_rti_id, sub_rti_name, status, created_at, rti_upload, file_type) FROM stdin;
    public          postgres    false    259   R      3          0    66922    mst_subs_rti 
   TABLE DATA           �   COPY public.mst_subs_rti (subs_rti_id, mst_sub_id, subs_rti_name, description, file_type, size, status, created_at, rti_upload) FROM stdin;
    public          postgres    false    261   �S                0    66456    organisation_chart 
   TABLE DATA           I   COPY public.organisation_chart (org_id, org_pic, org_status) FROM stdin;
    public          postgres    false    225   #X      %          0    66831    photo_category 
   TABLE DATA           [   COPY public.photo_category (cate_id, category_title, created_at, gall_cate_id) FROM stdin;
    public          postgres    false    247   dX      -          0    66878    photo_gallery 
   TABLE DATA           b   COPY public.photo_gallery (photo_id, category, photo_file, created_at, photo_caption) FROM stdin;
    public          postgres    false    255   �X                0    66486    product 
   TABLE DATA           h   COPY public.product (product_id, product_name, product_desc, product_image, product_status) FROM stdin;
    public          postgres    false    229   4Y                0    66475 
   production 
   TABLE DATA           D   COPY public.production (pro_id, production_pic, status) FROM stdin;
    public          postgres    false    227   �_                0    66702    recruitment 
   TABLE DATA           �   COPY public.recruitment (rec_id, rect_title, advt_no, date_of_announce, last_date_to_apply, upload_advt, created_date) FROM stdin;
    public          postgres    false    237   `      5          0    66941    rti_contacts 
   TABLE DATA           �   COPY public.rti_contacts (contact_id, contact_title, user_name, designation, contact_address, user_phone, office_phone, organization_email, user_email, status, created_date) FROM stdin;
    public          postgres    false    263   �`                0    66721    tenders 
   TABLE DATA           y   COPY public.tenders (tender_id, tender_title, date_of_announce, tenders_notice, tender_status, created_date) FROM stdin;
    public          postgres    false    239   �a      �          0    66209 	   user_info 
   TABLE DATA           C   COPY public.user_info (user_id, uname, upass, role_id) FROM stdin;
    public          postgres    false    201   b      �          0    66217 	   user_role 
   TABLE DATA           7   COPY public.user_role (role_id, role_name) FROM stdin;
    public          postgres    false    203   -b                0    66537    vaccine_supply 
   TABLE DATA           U   COPY public.vaccine_supply (vs_id, vs_details, created_date, updated_by) FROM stdin;
    public          postgres    false    233   ]b      )          0    66853    video_category 
   TABLE DATA           [   COPY public.video_category (cate_id, category_title, created_at, gall_cate_id) FROM stdin;
    public          postgres    false    251   �f      +          0    66866    video_gallery 
   TABLE DATA           b   COPY public.video_gallery (photo_id, category, photo_file, created_at, photo_caption) FROM stdin;
    public          postgres    false    253   g                0    66395    what_new 
   TABLE DATA           _   COPY public.what_new (whats_id, whats_title, whats_desc, whats_file, created_date) FROM stdin;
    public          postgres    false    217   �g      _           0    0    About_us_about_us_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public."About_us_about_us_id_seq"', 7, true);
          public          postgres    false    210            `           0    0 "   about_achivement_achivement_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.about_achivement_achivement_id_seq', 1, false);
          public          postgres    false    212            a           0    0    bcg_users_user_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.bcg_users_user_id_seq', 1, false);
          public          postgres    false    200            b           0    0    bcgvl_contacts_contact_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.bcgvl_contacts_contact_id_seq', 3, true);
          public          postgres    false    265            c           0    0 "   bcgvl_staff_designation_deg_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.bcgvl_staff_designation_deg_id_seq', 1, false);
          public          postgres    false    220            d           0    0     bcgvl_staff_details_staff_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.bcgvl_staff_details_staff_id_seq', 90, true);
          public          postgres    false    222            e           0    0    bcgvl_staff_groups_cate_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.bcgvl_staff_groups_cate_id_seq', 1, false);
          public          postgres    false    218            f           0    0    director_desk_dir_desk_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.director_desk_dir_desk_id_seq', 59, true);
          public          postgres    false    204            g           0    0 !   director_status_dir_status_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.director_status_dir_status_id_seq', 1, false);
          public          postgres    false    208            h           0    0    division_div_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.division_div_id_seq', 4, true);
          public          postgres    false    240            i           0    0    documents_bcg_doc_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.documents_bcg_doc_id_seq', 1, false);
          public          postgres    false    234            j           0    0 "   emp_designation_designation_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.emp_designation_designation_id_seq', 1, false);
          public          postgres    false    206            k           0    0    event_category_event_cate_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.event_category_event_cate_seq', 9, true);
          public          postgres    false    242            l           0    0    event_gallery_photo_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.event_gallery_photo_id_seq', 9, true);
          public          postgres    false    244            m           0    0    events_event_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.events_event_id_seq', 3, true);
          public          postgres    false    230            n           0    0     former_directors_director_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.former_directors_director_id_seq', 18, true);
          public          postgres    false    214            o           0    0 !   gallery_category_gall_cate_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.gallery_category_gall_cate_id_seq', 1, false);
          public          postgres    false    248            p           0    0    mst_rti_rti_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.mst_rti_rti_id_seq', 1, false);
          public          postgres    false    256            q           0    0    mst_sub_rti_sub_rti_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.mst_sub_rti_sub_rti_id_seq', 1, false);
          public          postgres    false    258            r           0    0    mst_subs_rti_subs_rti_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.mst_subs_rti_subs_rti_id_seq', 1, false);
          public          postgres    false    260            s           0    0    organisation_chart_org_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.organisation_chart_org_id_seq', 7, true);
          public          postgres    false    224            t           0    0    photo_category_cate_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.photo_category_cate_id_seq', 3, true);
          public          postgres    false    246            u           0    0    photo_gallery_photo_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.photo_gallery_photo_id_seq', 1, true);
          public          postgres    false    254            v           0    0    product_product_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.product_product_id_seq', 8, true);
          public          postgres    false    228            w           0    0    production_pro_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.production_pro_id_seq', 4, true);
          public          postgres    false    226            x           0    0    recruitment_rec_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.recruitment_rec_id_seq', 1, true);
          public          postgres    false    236            y           0    0    rti_contacts_contact_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.rti_contacts_contact_id_seq', 2, true);
          public          postgres    false    262            z           0    0    tenders_tender_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.tenders_tender_id_seq', 1, true);
          public          postgres    false    238            {           0    0    user_role_role_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.user_role_role_id_seq', 1, false);
          public          postgres    false    202            |           0    0    vaccine_supply_vs_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.vaccine_supply_vs_id_seq', 1, true);
          public          postgres    false    232            }           0    0    video_category_cate_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.video_category_cate_id_seq', 2, true);
          public          postgres    false    250            ~           0    0    video_gallery_photo_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.video_gallery_photo_id_seq', 3, true);
          public          postgres    false    252                       0    0    what_new_whats_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.what_new_whats_id_seq', 43, true);
          public          postgres    false    216            =           2606    66288    about_us About_us_pkey 
   CONSTRAINT     _   ALTER TABLE ONLY public.about_us
    ADD CONSTRAINT "About_us_pkey" PRIMARY KEY (about_us_id);
 B   ALTER TABLE ONLY public.about_us DROP CONSTRAINT "About_us_pkey";
       public            postgres    false    211            ?           2606    66357 &   about_achivement about_achivement_pkey 
   CONSTRAINT     o   ALTER TABLE ONLY public.about_achivement
    ADD CONSTRAINT about_achivement_pkey PRIMARY KEY (achivement_id);
 P   ALTER TABLE ONLY public.about_achivement DROP CONSTRAINT about_achivement_pkey;
       public            postgres    false    213            3           2606    66214    user_info bcg_users_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.user_info
    ADD CONSTRAINT bcg_users_pkey PRIMARY KEY (user_id);
 B   ALTER TABLE ONLY public.user_info DROP CONSTRAINT bcg_users_pkey;
       public            postgres    false    201            s           2606    66963 "   bcgvl_contacts bcgvl_contacts_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.bcgvl_contacts
    ADD CONSTRAINT bcgvl_contacts_pkey PRIMARY KEY (contact_id);
 L   ALTER TABLE ONLY public.bcgvl_contacts DROP CONSTRAINT bcgvl_contacts_pkey;
       public            postgres    false    264            G           2606    66438 4   bcgvl_staff_designation bcgvl_staff_designation_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.bcgvl_staff_designation
    ADD CONSTRAINT bcgvl_staff_designation_pkey PRIMARY KEY (deg_id);
 ^   ALTER TABLE ONLY public.bcgvl_staff_designation DROP CONSTRAINT bcgvl_staff_designation_pkey;
       public            postgres    false    221            I           2606    66449 ,   bcgvl_staff_details bcgvl_staff_details_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.bcgvl_staff_details
    ADD CONSTRAINT bcgvl_staff_details_pkey PRIMARY KEY (staff_id);
 V   ALTER TABLE ONLY public.bcgvl_staff_details DROP CONSTRAINT bcgvl_staff_details_pkey;
       public            postgres    false    223            E           2606    66427 *   bcgvl_staff_groups bcgvl_staff_groups_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.bcgvl_staff_groups
    ADD CONSTRAINT bcgvl_staff_groups_pkey PRIMARY KEY (cate_id);
 T   ALTER TABLE ONLY public.bcgvl_staff_groups DROP CONSTRAINT bcgvl_staff_groups_pkey;
       public            postgres    false    219            7           2606    66244     director_desk director_desk_pkey 
   CONSTRAINT     g   ALTER TABLE ONLY public.director_desk
    ADD CONSTRAINT director_desk_pkey PRIMARY KEY (dir_desk_id);
 J   ALTER TABLE ONLY public.director_desk DROP CONSTRAINT director_desk_pkey;
       public            postgres    false    205            ;           2606    66276 $   director_status director_status_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.director_status
    ADD CONSTRAINT director_status_pkey PRIMARY KEY (dir_status_id);
 N   ALTER TABLE ONLY public.director_status DROP CONSTRAINT director_status_pkey;
       public            postgres    false    209            [           2606    66762    division division_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.division
    ADD CONSTRAINT division_pkey PRIMARY KEY (div_id);
 @   ALTER TABLE ONLY public.division DROP CONSTRAINT division_pkey;
       public            postgres    false    241            U           2606    66563     documents_bcg documents_bcg_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.documents_bcg
    ADD CONSTRAINT documents_bcg_pkey PRIMARY KEY (doc_id);
 J   ALTER TABLE ONLY public.documents_bcg DROP CONSTRAINT documents_bcg_pkey;
       public            postgres    false    235            9           2606    66256 $   emp_designation emp_designation_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.emp_designation
    ADD CONSTRAINT emp_designation_pkey PRIMARY KEY (designation_id);
 N   ALTER TABLE ONLY public.emp_designation DROP CONSTRAINT emp_designation_pkey;
       public            postgres    false    207            ]           2606    66775 "   event_category event_category_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.event_category
    ADD CONSTRAINT event_category_pkey PRIMARY KEY (cate_id);
 L   ALTER TABLE ONLY public.event_category DROP CONSTRAINT event_category_pkey;
       public            postgres    false    243            _           2606    66828     event_gallery event_gallery_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.event_gallery
    ADD CONSTRAINT event_gallery_pkey PRIMARY KEY (photo_id);
 J   ALTER TABLE ONLY public.event_gallery DROP CONSTRAINT event_gallery_pkey;
       public            postgres    false    245            Q           2606    66505    events events_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.events
    ADD CONSTRAINT events_pkey PRIMARY KEY (event_id);
 <   ALTER TABLE ONLY public.events DROP CONSTRAINT events_pkey;
       public            postgres    false    231            A           2606    66385 &   former_directors former_directors_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.former_directors
    ADD CONSTRAINT former_directors_pkey PRIMARY KEY (director_id);
 P   ALTER TABLE ONLY public.former_directors DROP CONSTRAINT former_directors_pkey;
       public            postgres    false    215            c           2606    66848 &   gallery_category gallery_category_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.gallery_category
    ADD CONSTRAINT gallery_category_pkey PRIMARY KEY (gall_cate_id);
 P   ALTER TABLE ONLY public.gallery_category DROP CONSTRAINT gallery_category_pkey;
       public            postgres    false    249            k           2606    66899    mst_rti mst_rti_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.mst_rti
    ADD CONSTRAINT mst_rti_pkey PRIMARY KEY (rti_id);
 >   ALTER TABLE ONLY public.mst_rti DROP CONSTRAINT mst_rti_pkey;
       public            postgres    false    257            m           2606    66919    mst_sub_rti mst_sub_rti_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.mst_sub_rti
    ADD CONSTRAINT mst_sub_rti_pkey PRIMARY KEY (sub_rti_id);
 F   ALTER TABLE ONLY public.mst_sub_rti DROP CONSTRAINT mst_sub_rti_pkey;
       public            postgres    false    259            o           2606    66930    mst_subs_rti mst_subs_rti_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.mst_subs_rti
    ADD CONSTRAINT mst_subs_rti_pkey PRIMARY KEY (subs_rti_id);
 H   ALTER TABLE ONLY public.mst_subs_rti DROP CONSTRAINT mst_subs_rti_pkey;
       public            postgres    false    261            K           2606    66464 *   organisation_chart organisation_chart_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.organisation_chart
    ADD CONSTRAINT organisation_chart_pkey PRIMARY KEY (org_id);
 T   ALTER TABLE ONLY public.organisation_chart DROP CONSTRAINT organisation_chart_pkey;
       public            postgres    false    225            a           2606    66840 "   photo_category photo_category_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.photo_category
    ADD CONSTRAINT photo_category_pkey PRIMARY KEY (cate_id);
 L   ALTER TABLE ONLY public.photo_category DROP CONSTRAINT photo_category_pkey;
       public            postgres    false    247            i           2606    66887     photo_gallery photo_gallery_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.photo_gallery
    ADD CONSTRAINT photo_gallery_pkey PRIMARY KEY (photo_id);
 J   ALTER TABLE ONLY public.photo_gallery DROP CONSTRAINT photo_gallery_pkey;
       public            postgres    false    255            O           2606    66494    product product_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.product
    ADD CONSTRAINT product_pkey PRIMARY KEY (product_id);
 >   ALTER TABLE ONLY public.product DROP CONSTRAINT product_pkey;
       public            postgres    false    229            M           2606    66483    production production_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.production
    ADD CONSTRAINT production_pkey PRIMARY KEY (pro_id);
 D   ALTER TABLE ONLY public.production DROP CONSTRAINT production_pkey;
       public            postgres    false    227            W           2606    66711    recruitment recruitment_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.recruitment
    ADD CONSTRAINT recruitment_pkey PRIMARY KEY (rec_id);
 F   ALTER TABLE ONLY public.recruitment DROP CONSTRAINT recruitment_pkey;
       public            postgres    false    237            q           2606    66949    rti_contacts rti_contacts_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.rti_contacts
    ADD CONSTRAINT rti_contacts_pkey PRIMARY KEY (contact_id);
 H   ALTER TABLE ONLY public.rti_contacts DROP CONSTRAINT rti_contacts_pkey;
       public            postgres    false    263            Y           2606    66731    tenders tenders_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.tenders
    ADD CONSTRAINT tenders_pkey PRIMARY KEY (tender_id);
 >   ALTER TABLE ONLY public.tenders DROP CONSTRAINT tenders_pkey;
       public            postgres    false    239            5           2606    66222    user_role user_role_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.user_role
    ADD CONSTRAINT user_role_pkey PRIMARY KEY (role_id);
 B   ALTER TABLE ONLY public.user_role DROP CONSTRAINT user_role_pkey;
       public            postgres    false    203            S           2606    66545 "   vaccine_supply vaccine_supply_pkey 
   CONSTRAINT     c   ALTER TABLE ONLY public.vaccine_supply
    ADD CONSTRAINT vaccine_supply_pkey PRIMARY KEY (vs_id);
 L   ALTER TABLE ONLY public.vaccine_supply DROP CONSTRAINT vaccine_supply_pkey;
       public            postgres    false    233            e           2606    66862 "   video_category video_category_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.video_category
    ADD CONSTRAINT video_category_pkey PRIMARY KEY (cate_id);
 L   ALTER TABLE ONLY public.video_category DROP CONSTRAINT video_category_pkey;
       public            postgres    false    251            g           2606    66875     video_gallery video_gallery_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.video_gallery
    ADD CONSTRAINT video_gallery_pkey PRIMARY KEY (photo_id);
 J   ALTER TABLE ONLY public.video_gallery DROP CONSTRAINT video_gallery_pkey;
       public            postgres    false    253            C           2606    66404    what_new what_new_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.what_new
    ADD CONSTRAINT what_new_pkey PRIMARY KEY (whats_id);
 @   ALTER TABLE ONLY public.what_new DROP CONSTRAINT what_new_pkey;
       public            postgres    false    217                  x������ � �            x��]�s�ƒ���S��WR �Cv\ES��<K�J���z_@bH�WpHV����3�HH����ک$�	`����}h��W;o���v���Y��<fv��,��[�ٻ�{�ٞ�܀37`钳�߰���s������#nম�r��gӐ}���o���;�:��������Ԯ�w����n ~��""�$i��W!�Kzj�<���'0�|���80���vM}����;�����*���xs���.wj����Ø�� f��ޫl��Y慉��������c��tl3`�Ւ�vt[��U+��!X{^,�w�w��ji�dc�dr��fi��G0M��o��#��&��%��}5��u�/~�t#J_�*���x��x,�0�'gG����ǋ^��G|[,BLȾ��F�[�i�i�*l��A`��M�b0턱�(r�|�Έ�(��n�g)>��{ {i�N���Kv��k�9a���O.�X8���)�0,�r3
ܱ����son��$��k>R�f8���I�n��$����,a��I
�q���9Pi� &�5�PA���ʅ2�F����$�`�]��֥ɬH�x�z�2����/�����@\��>Çb����W�m�<��El�>Q3��,p��SV�{t>ٻ�[4"��l
wn��w�+�<d�>;	��Mm/9�K�*�5qD��Rw�vQ���J���PAط��\ۃ��v|}�����Ƽ�l��`� ��X\�/hؽ��{a|��K�*�VѰu�����=�v��ON6��Y1����k���s�A��Ir����o;x%�a;���<�@�`c��vi���Y8�-㱛�l^��D������%6��5ȉ�4��[v��N,�[nǤQk��r��R:�o��g�h
}8:�\�t�nW��� ��hW�T��&���NS���]��� AK+�I�Y�v//A!�aă�����y���XAf�%�=�='7=�]*��'��F��\_���|�O!�J�M�6ɋ��׶끥*��	@��&��v�c� ��1�'�Nd�&�)�}������Sۉ�9��/x]���O����k�u� �z;^��BX[>[ ׋[�^�f`�������e]�J���X������7��;�ꍋ����{��9��`�R��$�I�̜KcN�����(�<���v�hM8	ص><����ε� 4ɽF��I�*�=�Za	L=#p�f�y<�^��ՁW�\�����~�nƹ�`s5ti��t�(�%��dQm����"�kF2��	A�sE��js���H���==Q�(C}!-���v|5��_��g�di�@�,Bi&CpbH0�E��?Q�"!hr|<	M�x�y(�7X�|�*�X8�eq1,-\�%�k�@0>$)��ڸ7���<�֚��$,�xs�;�@�
:Qx#�199��$�����s��K;�}�����`>o��I���,������η�C]��R^30�n��N�kB��A]��,sQ	�HS��fvd�:��+am���4��D�)����_���0�^=xbOȾ���0N��߸�s�x��-���H�ei�^A�e!gz딍�� ���|�G.��A�ӺA��&�iq�}�q��\j�y���1���d|t��+�e����+��串�aa�rպ[� fR�s.�a,��W��H�9�0��hB�u9�����<'l)�Ҋ��=-ܳB81쯠  !*X�0���*�i����R��ṃ_fcTe/��0�Ba�v�DY�nY�Ű�$��.�U�|ʚ���
$6�����I(���V�pM�ܰV,).�f���(�[�L��e��U��3�G�-�Ŕ J{~�p3��N�a��rdS�@��p�TB5*8�"�%���=V�?��:��K�.�������k�']�����^�o�2��+����뫮�E__�0�й���`&�%nZ��R�5� O���f���u�RM�G���������#H���7��>O㘆�U����4���b��ﻎ����֛i����*��i�O�f6F�&����,y@��0���@%�2u]��<7̓�p�x��P��K�<�6>�j��]�E�F�;��x��}�i�;��|6�j�e$h6:Z��4���j/Es�����yhtU�e�h6;��x�p����VG�=�<4��ͽ��>wu�|1��w�'@Bk8T���AG{$̫B/C�?�(ͺ�џ _�f��?��y�/��}
�S"Do�W�+C�RL�r�*���5/]&1A�a�橸�0�DF;#�bހ�Ƶ��1V�Va	
0�i*��{��.M!>�\���i���wSB��i1�d%�+X�½�)]��m�|,��r7��݊���&�E��t���a��KQ�b�-Ơ�^���]cƿ�C�`�����cL'�K.���^\RVn��"�1	���$���/��{�0��g�1VIsiA����xZ>��Q���C(|�:�2A�KQ'���˩�S�(��8��3B�k��S���<�#By��I�E�SI(���pD��ÒG��y�OB���	$.Uw�P�ط*�R��"��$/8v�Ee�/AB�eNl��q���O�<���H�* LL[f3?�Q�ܐ��s�XpL��}X��h�<�b��1�<�Փ�>Vim��s��+EΩ��B~h���X�'Q��㒄J]���H5��{��7��uh�Q�R���	}��BQ���<Eeܷ)�c�T�R���A�s�hCyl��eH�V�d���j����(ke�a�UM�	h�@�(Y,�K�HsQ��R��mLG�c7�B����:�漤� �1٤�c!3r#@#S^�'�o��xbj��b�ƨ�	�,qA�)�5������I����+��W��P�-
=7̧M�����2�<9�������tޑl����cl��ZoQyxc.�
����P�y`cF�K��@R�bMB�6_rwNP&ӹ,A@ ��~����A5�(�¢T���4�"� hɄ�S��2����<q�,���:X�ah��1��_a�³D���I_T�����*<&yR3���=��X�p�E�j�+Pk�������i0->O�.@��[��`�ηoQA@4��H8�!�}��l44#<;^��D��wû��%��P�����
D��j�+����>��Y��a�L�~��E/f�Pa-I���)��V� v��'�f�@��9ƾ��_'���X�/���|D@�4sh?g ki��|0<�0���]����E�1�P*��h�чZ�C�c�k÷ϓ|!Q	;%���q�;�T���<:�|ƋtJLr���s��p�v���i���ٌ��T_ @��]rGVd�h�ݠ���[�p��&��U� �r԰�D��W����f�O
#��9/�Wn��(qgͿdHϢc���oc\�`�b�
A����Pw�B@���6��[�	��/����/��ia�ӏ� �m�泋��]���&�����h��5k�����d�
2I�D�*s��ܚ`�V="O!�z���Pe���f���}��9��S�T]Ű$��".����=�]OV�_�%�b;��C���Xl�~64���q~?۵�خKMzhb�|��i�Z�R{>.���Ķ.l��]ji�o#Ě��+\/Y��8[���0������3��n�JN���n�FWĄ�l[�s\��e>�G��@v�2�&?G��K����v'���!��o;vT�z�>,�zg�Ւ�)����V�|�����i�\@���?��5[Tу�Z�]�5���"�C�z���؅d'r�f�F*�P�_0�E��� �T�	'�Z��>�O��g,h�TC�/�΋J8UKP*/0����@Le�y4�ׅ�������=)@6-�%X3ѡ���8��x�I����yr59�l6��z	���[�r�ǳ��J��<��;<Ƚ���ꯢ�ڙ���Q���� �  ���k`R�p�������4,��E6H|����Q/�F_��eip-m����C�X��GU%U4nYb�D��htQ�x�`O6��5̝��J@���>���T��HU�o!��|�w�	hqZӺ�p睔��Kcɿ�"H�!C��O�!I[�"�S��N���F5P�6e��� O�z�n������2��3(����k��%os��d$��[��i��۪�1�����!P��~P�pѢ	��D�MF��Y��n�v�a�����+Vd��>D�iRi/A�y;�<���S8y8�������X��
���ؙ����u[͐�s����Kq����ujǳ%�NW�S��f@�ڐ|/?�#�I1����k��ؿ�$����߂_8&��1�\
;=�T���
;�7�{K�膗�t;�b�QM��UR�@���׌C�8Q�x�[���8�R$���Y������Gt�і�ǊY�Ջ$Z����S/����J�S�G�C��AJc�A�!F����{�MƧ�MW���TG�
Ckx���� w]��OSq?���C�gx�O�9f���)�^�����l%aŭ\{�~t�	����T�+��"2���P�U�S�E�bJň�lT�"��k�eO&�H���零��>C�H�9͍�Ty���fR��0o#bIOcS;��E��V��� 'c��!�ã�Zط�J�m�6W�Һ�g�9��c�(��.W��|���3m���)��W[�����&��jVspϛB?`Q�@&/���]����9BUM0�rb��<o�����
"3v�|gv,D���FQ�z�j
`��6u4�r�ڢ��l�M�^,�c�;j�MZ�Q�ӟ�fQO�Ğ�Ύ?L��h:&������DT��EH�@d�,�366�7a��� �0mW� �"�@�,�&N���Du�/U�K�aK9֒�F�¸��)"����*�(�'������s*)~HU)y�(
�@zK��hD�ؖ�碇Y�R�CeQq�:��k_]Y����l%�����'�#G#`��� �Ďl5Y ������C���.!Q�	���ש-�Iydy��0�(r�Ȝ�Bx��qw�Gw^$j�T�]�,^�� T�O�{��(���$߾��S�A/)3�j� `�F9Ih���b6ϥ\�% ua%�Ȓ{�<I`p7�e�^:`�D�u��^��,�`ds��J-�R��LJ
 b�ʝ)fL�6���9�c�8�hF�J�X�E�2����$�ĿKN�"���K�v�ýr�� �pT!����&2g����1��җ�-�2���Q�����Jn��'n��wMQ����r���ҍ�T%��9��,��*� ���Ⱥ;��bR,�ŋ�a����]9"d����d����Z���V�~~+o�G�'�+�$p(K��4��y���E��q.������=:�YJW���"�1Plj�j����Es,�P�FS[�۠�5L���v���ݝѻ�;�i·�p#ϣ��q�;���<�_���� ��C�" ������&<_c��9`v��Q���BX�AN�'�*�ŸwR����Ft��	�O0��'X�����f0��G�	��o6���0�x�o�����1����*�[�djy��In��r��3�|}�\��46�Τ)L���ªg�o��(Hݸx�D��La�������j�&˓^�����]ЅM���<�V+J��Y��՛͉�u��[�`g�\��FQ��}x`v�~�hfi/�����;�:�(�0-�*K!�	�(�V��]c��V��
��G�\�*�&S����L��,h�z���b���k�#����M��Q������?Ÿ��6p��+Şn��fo� ^Q�iX��]�K�JSu�ܿc�e9j=H~҉�ɀi�9�a��g0��B�\X����+�,�ճ�Nk�6��j�~m�H�m��}�/P��+ʜO1�Ѵ�x��"���_�������-��W�Õ��Z�CH�^K�<��#�}C�iCQm<�0�va#�L6ѷH(t�R�p�|�0<i�����U�ڿ/��[�7՞a�"��0��P�Y�_�%�;��<v��w5�j%V_-ׁ�/Y����'�;??d:���*�́jv�%�F������'l�U�������0<)}�=MizMAKॳ=&U�0����?-aЧ+zé����e�U����f���~�+^���Cѷ��rYJw�dT!Jox�EKЩ{�����߸�|����2�m����o3Nu���Mɪ�԰�� _ڀS�V%��S�-�Qé�6���T�R̻���C�԰�M���Ԡ�8��ۢ�Wǁ������ �a��U�)����km�����o�S}��b�[�TOѷ^�p�݇Gᔩ����|��6p��є9T�x�1`h(Mg�Z�*(�jG��Sz�_<���-�����	H����7)�����U�jzkK@��C�����;_���`Jk5L�Sݖ���l[��*L����VhC�2���4�<L��l�#L!loQ��8��E����e��T��S�V�ޗ�o���z��+�Ym�����%@�����V�[*ZR�j3N�=���C�T��l���={�cp
��6"Wp@S�Ͻs�����n;�ٮ�Q��[��8e�,��8�M��{�������k���-ES��wz�R=��%i?�����,C��m\A�9Z�RC�׆��K������w�]0��+�������_D�Fuk�挟���p�np�4f��;y��Y]����Tצ�u�֦�ڐ��RG~?1����g�����ۉ��~�1JзE�[%��n�S��24�g?��i�2���m�/9F�z��Ĩ�c��a������|;�԰խ]�7T̖�N�����d�b�V CO��z����V���Z��6��2����?Y��2�R�=�{Dl�m���vnK�J�]���p>�
*��C/? )Dm��^K�Ջ���h��KD?X5���6�j�?S�#��p���J�o��ۇnBع���ZD�O��	Ug�����UfˏM�������=���G����W�E�"R~��O��[�U�Oto��b��y~ݮ�ϩ�Y����ҿ1��4�?��Fo�/Lhƴ���p����~�\�(�e�:���?��/��_~�{#��      6   /  x�M��N�0���S؇ނc�'FBP*T!!N�S/NlZK�S�N�WP�J���o5�aY�m=����'�:�|F�@w��TԲ@���Feϫ5��]�Eo�'��\�g���z3�89ݣ�u��#!�8G7����WT���z�]�>��z��͌$��C��q���x<��8n{K�q(��Zk��fi4�9f�3������ 1��`�V��a�P 8�`���ղ��+A�����=�_�Wu��R�� -���X �#�[����;X�>����d�*�ZVu���4ۼ�]*	~���7
-t�         �  x�e�Ms�0�ϫ_�S���qTlҒ"�����8"فH�,���ĝ�,���g%�F�\4,�»�E>����~�_~���+%�5�@!����A_6���6�3��ͼѕ����:�b0�-��[lm Q�+]G$%Ҷ}uؚ�����5��.�:lxǎJ�K�^m�<��U$�.���jv�_�.Z�l]����4�.A8|�����z�,�ς\ϋ�C�E�C���m�*B)R����[��!o������;��)ydJ��]�$�!3�d+Xv=�&����T</��G�x��a��-(Z��YK#2�A���*���������2��"yh��n�f�r�4��YU�ni��dL�?5��J�|
�>�W�G�Ag ��6��KZ�vK��y����           x�uV�r�L��<O@�z�hL4�!n���tJ��� ����;�k2��s�������2g�������Ko��*�����!���h>QYR!\�U:�/xİ4���HlA�;>���o���1�*-���u�� ��l1LYME*�����ks�������D�#��o��wt*8�Hşb%[��=�5��x}|ľ���Ŭ	{J����m�����\Q}�Å��&�Ԍ2��5���f@T��:t)�U�I�SR��q�f�]�s9d%q%�"c�u����Oq�	>`�|�RqE��ZC���]F�2�S!�gG��F�|��ԇ�{�Z���w��<Bt�OI�ǐvS��N)4�-�S����m"���QiM�*�Tj�Aљ��,�g�fMQH��M�gȒ�Y���(t�>j��
v_MG�0=U�!�bw�0P�a���zP	�\����R�h�NH�CG�>vT��%:܆n.4��2���&E�ƌ�Uc����|@"�=<���2����7��H�q�=@:��1����T��A��e�P�4k̪�����q��}`�X�{Ԇw����m�my������i!Sd�3
�k���:�C�]w��>[�4����J5}�M�3����1/�W�yg�^�WG���Q	�j���<�����VRFxW:�%V�d��]'��ap�md����������D�tgc���R���i�b���u��`�!�����5(w$���5��K'鳷X:7IOJ�{,08�@���-F�T��|x\qTkP~V!+Zkw8R�a�#��+�N�{���?���G���e�y����IJ��N���Sm�U?T�A�f(�%-�1n��s�.R&F�bq�]�e3�U�K5�RQ�*jO ��aGO6���%�HS�2�IG��{|��<|�B�v�>|�U
�t4�w�[�By[g���Zf��X'�C�my��Ҷ ���<͕�?_�É}]��6����c|���'�<��7O�ͨ~kyڻ.��g_>�1�'��9      	   E   x�3�t��u��\FP���{bUjIIj�&H��=��.嗟��*��7��?j��s����� �rA      �   %	  x��Y]o�8}Nч�'Ngv&M&�c��;q���X�h��TIʩ���\R�����X�"ڤ"y?�=�R��xo��=����5��n:��.�nn�{ciE��c�����<?x����Mg��P���ME*��T&�̥Qf��L��Q��tn���E����	�����E�ұ�t�;�:�f|y}�c�2�s٥�mw�������y�NKuF�r��٩+�f���������;�V��%?{�s���;,�����~����
���R�	���ˆvnV҂_�8a7F/�����z4����st8������a���9;=�e�.��}���FF)>7�{��m�?�eo��<�w�|X������5�1��a�5��X��<�M��7�id�M�g�-�/��+V��֣�@��7���8��*�6��ٯ��`θʍF��Q�[�d�&��,1J�^��GD`�:�D��&�||���M�.<�%5W1}Ʈiw�yH��a}����on��O�E'-���^TF���O44��À߹�e0�R�<�8%���e�G����n�I�PS{e�O������J���X6og����,���磋OW�"]l$�	�J�b�iq�Y���<�	V(X�,L؃P��[��yCg�X�C8ʄ�\¡":R�M�\�P��R��ݰ#�g����ԕř��|��8y��s�f��A[�m&��� M�y>W�e�O:� �gp�ӯd	g���W@qY�$�@h̤��eK��B�f®���qq9�R�sS���z��딽�Tk�Y�����V#���Lt*y��S2zyئ���7�R\im�٭ay�p�"��
Ƽ�B|�_V"��!�wZ�'y^j��! ����M�V�Z��d��L�43&e��5[*��~����f���B�T՝��e�qm+Q�/5��I�N�|���w�}B�\�����~D�+�O�B�����r����9!Ҹ�<p� ��%���9JN��59�y�N���kiNA��7<�:�٤V-�Έ��EB����5�2c��Ui�vɛuЈ��٢!%�Qɯ�|��>r��y]/�\^a��*0�#�|����$Pf��=H���
17u�Ґ� � U�R	ׯb���>�s[3XB/�+�d��:���!K��Л����p��~�6��E^ɰ�A+�V���G-��a��o���2�/r�\�!��y�_NB�|��bHA�rT�z�	�x9tdd�\z/Pb����r�6��%���~�����yuEB��	�V4�"E�v��F�:7�Q�����"f��m�~�����&P�t��"R��`S�PMC_����f�܉�%���,+$�K����|��'�����9'���oX.Kpz]-��ޡ_Y�(��9'�O"�gO�Ha {��E�`jr�G��/�6�:Nk���]�}h=!�)�#ƶ\b�p~{<�g��	�'�*P@���W��*��t�졍ؔ}-y@�1� BUi:�"�O��� �Ĵ�����⽑8)�+D�|�g��H�U���a�1��:��a7�'���q�*���d �&=F�)<�QFŏ$�3��9���z��n�	�>` �j�x|Z2�\7�����j"8�1����)
���V������Z�Gy�fɉ��
�l����U˛���uU�oڴ�\��d��6���À
��.L%Vд(Z�}�\�AyNfaN�G��-��#h�@-sg\{��E�oƅv���a�1i�*�p��7!�Kp��8��)~�Ŏ%6�Ҿ�ڎ!���9��{����5.����ivxLa.�(0�c C� �'��<`v_�j��ǘ`+`dT��!��%�f":���ͨ��c(��)ˡ	�}�쮡w{⥳;��x9�s�h���@j
.��%f�P��������Px/*�)[���pA���[�T(�0��w���xqjF��4���R7�w�7b[m�ѹpu���z|n�j��О�9����۟\F^�"�t�:��)oD �Չ����o��*"������A�H�r��~��LØ���x��f��$��Ũ��z����l������~�M���'��I��P��ŷ�4џ�Ί`6�d����Ӈ��Q�W�V�M���0����Wa;�f��U�c�)XW�L�>4I�u��F���wx�H������x:�1()����?Fu������a�����@��l�I���墹U����7e`����H��������z��^������ŗ��/�v�a�      �   =   x�3����-N-*�LN����v�2�)J�+NK-JM�	r�2�J-��B\�b���� ��         �   x�uλ�0 ��}
&7j凌�\���.�4���2����ą��s(���E;���t��:@1�)V)%	�
�	�,�2�4�}K���l�$e�ҹ~��96D"�t�d��]��^����z�l�ֽ�m�BS!	�i���wq��O9�g�O�� �sĕ$T��~pqD�         =   x�3�JM.*�,�M�+QH�/R(�O.-J����2�S��Q�W������������� �_<      �      x�3�t�,JM.�/�L�,����� @q      !   �   x���=�0�=E/P˿I�c���B�"�0p{����lO�ߧ��i[_�~�N��=02Ϙg�#R�^y"�0�LF��+����"�*���X5�1�{�K��8DC���	�Hap ˩h��B�Q��T@�چ�/����z|8/��_�Gd��� V�Ě�v/0���;n�      #   �   x�m��n�0Dg�+�!$R%���%��)�Ẃ� ����W�'7�;��@1�4�mh*ģ�#�AsD�D��zq��X�6OU�`��Ӗ�q���&A����O��~��T͹�O6>�A�J�Y�Fqmn���Gr�R������������2q$�غ��Nhq�K�=k�����.�s��Ir�O�_lh���������$}�fK;���c�2.����d5o�a�V/�����oU����y</�3H)� ZRi�         �   x�͐�N1E��Wx	��&��Z�v�,�]�*�ǌ�i%)R�z���/�k�W�-[�w_*�I*=ܱ�������_+%3#�n�S��Ķ/�#/\�a���$o+R��χ:SƊ�@ȴ���m�
&:���A��}�!P�O�1�5�m
`i�4�������t�j��O�#���w���-�,G��|. .F��>����ZÍ���SZ�ێs�#Z�z         �  x�m�Oo�0��ԧ�mɡ�('�sdb�r�(�eg�K�m���|����v�ߏ��(uo�fet�#v�{�����Ҡe��*�IǾ����/P-ژ'�{���*��D��SKa��+�� 8}��]��2��5��~S�M�H�A�\���T�*F3�&����9��ga���*�9����waWo�-�z��\Ͽqi�$+UI��'w}t�B��7"�j��BL���fC=�g[�S&��tV��S���Ǻ��w�ƶ�3zy9]���z�v�x=�e�k)`>5�.i{z����M��K��\%�g�a�����+� 46��Z|���-KY"��´�@��c��lǧ� ���|���rT8]�(�"�xhޓ�.|���+ �Ц4�i9Ҟ�>4��K��0�^N���������(�>����      '   /   x�3�L-K�+�OO��I-��2�,��/ɇ�9�2SR�`�=... �x�      /   �   x�����0 ��+�@胢�Ftq1�0�@��	��}�{���񒻜`C�|zM�z�A�� <��YC���D��~�@g�틷<��|ZBtd�+Ģ:؂@]7��R6R�ȑ�����i=A�׿E���)x���Ǣ ��J7U)�PJ�䜿"/8      1   g  x����n� �g���d.����K�%��-RE0q��0N�>}I�U�Uǣs���`�񍴦��8����`ե �5 )!󴘓bR2Zb��^��uB�`1ԍWt�]���'Y�!�������(���*��pe����=�@9K/F��Gظ��V�I��#�GL�P��=8���$��^��W��u=)�
#"E�у�U�z]�Xl^-46��:O핕#�S.>�* K�V�Q�R����6����|�!���W��������鍿��������`����j��d>O1�y���H�s��9�/>��l�*��;v�ٷ	&�^u�n[4��pt��fU��%I��l      3     x����o�6��忂Oņ��$K�7'n�lq��n���m.�Q���ߑ�l9���2�%��}w�;�
��T�RF�k!3���H�׌P�|}<����w�A׏����8�z�a4E�����;/t�Kx���ðx^z�K�H�bY }��Ya�o��D�����m����3�0O�$I$-_mi\a����)��(!�&t[��(�gy*��o
��q�
��1�6ݣ9�JN�����v4A�����Ԛ'��j�a������ֈ�HӢ�N�܊,cJ�O&ÏPJ�nD������b�T.P�ZW��I��B2��<�c &��4/S�����%� [,7�o�]ɉ��EE �Xj��߹)�Uh�����Xu�w�cNNџK���w4��^�D��we,��wi�Q�?����3�0����<��y��(Ѳ��y��wnn?|y@�K�kNs!U[6�X�ɭ�������Ƅ�L�N�;�R�J)Rx���U+��k�ؚtx�e��=�9ߞq�9��֔�(��|y�p�C[ۦ{���8=S��5��B9�,N*��wmM�&0B ��K����0lO0r���`�R�uG�,����GZcq�M�#�+"r���9pΔ�ڣIQ�~�a���������m�A8v��(��Ҟl�k,���Z��_����0�\�kP,{��E	�{85.��Wg���.��t-٦>��sبh�l�bZ�^&�{ �$���o�h�$�	�4Y|�� ���@kY~������9vᒒ-��'�Bz�T5����ג3�_'���i�ex1��S_���\�'�{ߢ?5f#q����1��ļ�+�h��:���%�3�,��Y�rǊ6lPz�*�Ռ���
�0{��^�]xkb���=h~d��nU���Ӯa����ű���p�鎯<��P��� ����+�d7����U�R:�fhud�ÂC��C�Br96�i�g�1�:t�>'HJ���2��f���G����+�$�o=C끋8��Ҽ�A�)Ob�f��7~Z��]}Ҫ>��� %�J8�ZĝiJ����ѽ�2�ikC&5�b������v|*Z�k���Y�Cȧb+�k��U��"3��2U���[��pY����'��^����?�         1   x�3�,-��OL)��OO��,N,����O�H,*1�+�K������� 4�N      %   q   x�U�A� F��p
. ��QaL����������K���@��v�Hh���N[��z�A��i���?���=����
-=��[�t�)�Pּo|W�b��	Km^F)u^'      -   ?   x�3�4�,ˍO�H,*��*H�4202�50�52U04�22�25�3�0�44�trv������ �~�         u  x��W]O9}�_�
�0�t�U��(�%$"!Үxq<NƋǞ�g����v&����QE������sϵ��zI�}kg��v;��v�b���;:di2ܻ�Ͽv�N����}�8��{wo.ʯ='�y�9%�h���d�3�J'K�x�fgL�Gɦ\T�)�2|>b��قU�d��U�$��񪒦�V��q,��.��f�^�V��dϺ`��i|�\�,�6cU=���W>ac�|\�,lQj%={RUl8�w��,`Ǔ��d
�s�
.li%9k�����2bl�Nz���zg����Z[������{�'g��z�0Q\_��M���t��3;e�f#��\[�2����"xD��O��#��n{p3��q:���������W���m�K��e�) "b��=o@�5�²�ɤHuT�A:fe�QO���y� O��ÂG%��`tҧ��AæRۧ�ݮ#g�^Ĳp����?p2_�T�l�E�+x�t�y���.��j����f����w�"7P?����!��\TQ�F����Ҟ�B�Bt�m�<b��3�%S^p��q����,=GX���/b�1�̩t�B�M�e|��<�BFko���Փ���XG�)�6�,{�i�߄���`�}>�.�?��vK�<;}>m���}���1
���+�;0ǳ�v��p��$L?�S��uNl EH͌S�&#"�%b3��V����f[�'##7�L�0��V���ӛt4��|�նuS(U�*6ʠx��z�#'#�h����`�����*���n�?c(��U�sw��q�H����;p�'�b&:�B��Y�%��� ΂����'</��G��}-޸�1�Ԡ�t��#�����^K���h����p�����ޞ�+�PP��o�g����z�ۈ��N�u{�n{<���i+^ɣj,�o�M��P8cC%"$���%�x�Y(.I*��x�J�����2���J��r0�g5�,�Mn�H4�Kۏ�+�e���ZIB�Ύeh����2��G{��z(�_Iѓ%�3�ځ�>�ś��Vv��U�h��S��͔�!@��8U��-$ ��s'���e5

�,�a0GA
�������2��Fs7S9���x�`zQ�y0�l�^?�T|�{S�AO�3�"s�@�7��~z�9�M���l�z�Oq�K�:��k�AD%F�~�j�P��t�v��ы�["p����圍�_�8!�v �q!ixGyaVHB^���;���B��uI?��G���{ɻu�a,P�J��c�8�k�q�W��΂\QU�GE*KH	�
��ex�eS�e]F���0� f.S���G�DDGv���]���f��I��L���V�����{�_�y����+�c0��gF�
GU:����Lq�)��5F�²(��8{�?-|��pe�*�-O9�U�h�A��"o/ƺ�V'l�yC���$���\u�{�:��g��j6g<��ঞ�jt�_'���T����r�.��?�MW��Y��U���o��w���mew[��Vv���mew[��Vv���mew[��V�����{c�C���^�,�<kV�֬<�C��g������Ja��4���-#L�/����!���}����5]]         F   x�3�,-��OL)�/(�O)M.)�O�H,*1�+�K���2�T 6���/-N��* k3�!oS���� �4*�         n   x�3�JM.*�,�M�+QH�/RpL����,.)J,�,KU�OK�LN-�,N+NI�4202�50�54�3��8����.H �8��
R�F�P��fVFV��z��&�\1z\\\ �c0      5   �   x���Ao�@���+�h/�h�&Ŕ������eX��dYH���$���d�0y��0���ʺ=[Q��bCN���l�>�7��}�Y�T�/:����	�Y���R�XZ�޺k�
��Ӕ��D��sa���<���
 �Y�(|�P�g;j(v�bH���=�t�u�j��l�#����E���vdn��4�����[�(�yl�S�Z���J���|��Z� ~ ��k�         t   x�3�,�/I,���SH�/R.-(ȩT�OS(HL���KW�M,I-�L�)�4202�50�54��� ��B��b�����+HI�tL.�,KE2K��������L�����̘+F��� ��.$      �      x�3�LL��̃��\1z\\\ B�B      �       x�3�tL����2�tJNW(-N-����� P[         8  x���o�8ǟۿ��é}�x�#q��ԣ���"���Ҿtl�Hv���_̱�h�!t�Kę��?��_8k%�x�8y�mk����u����K?X�-���3?��--�E&�|G�d>����������װ������r˺�������|z�q*\Hϓ���7�=�m+YD�k#��a�I��:�8Y.��N�{�K�z�j~ﴚ?kF�f��vk+��vU�����CwԿ�����+�w����o�^wq��5%7�8�/�0�Tr^�����Q��7���w�陸?=�_�v�hA���u/����V��� ���]�7�
������z���/����̓��B�}�bz�B��d��>(Y�<��:��u�Fz��)��BP'��6�n�2ϾR�2��ŀ�]�����euC�d.^��#B �Q�	��)dگ0]�J�gZ@ݐ��PG*w�P��	Mb���I����
�qש���d��DǑ��I�ڙ�W0�p�����1&�+jgc�7Y��IAm�B�@|PJ�:���c�BS�~���+s6Pa�*MUf��/�pg���W�_Lk�n���K�%�Mٳ���{5)�د��-���/i�ʜ#�O�Vu��ȗ�w���~y�$S�b���R��LI��C�Q�i�(����;��e�B�{��qx�l��ڣ��U�|iW�]���N��6��*YJp�|9�/DI_��m>5�>!�Kj��+���_�j>b��i1!�j��Q�qD�`z?0�Q�Q�?��`22< j�'��LFsD�8Uos�w�PFd̕���g�Qe6�`��4P��ī�,#���N��$ˡ11�r�2�z�6��dj��:�{�j��h�;&O<_qEhZ7υ��̡�d^��Ko6\ؤ��Y����Vc/�L��D^�eq�rGZ��ٮ�����}�rǍ���-.Yz雬y��)x�s�#��+T�ض���q}�>C�A��<�~L�K�v�xI�k^La�2�&��B�ho���Qg$����E��z�����>#��f��G_�����-�Ι��a�l�J���T*G0����������_�R@�      )   N   x�3�N�-�I�4202�50�52U04�25�20�3046�0�4�2�I-.��KGQffedbeb�glhln`T���� �{0      +   �   x���=�  �N���G߫e����H����H��o�����L���e�R��ķluIĒe�!=�;\�Y��9�@�j�;��"
�fPĎ�sw�1�>���� ��>/�����5�00���s���G         .  x��T�n�0]'_�%H�e_;�cסBtQ���C�L��X�8���﹙�4k4��E��8���=�`ݖ\Cgkl�F�����!�1��%�hǠ] �֛:`�Շޭ�M�3��7ds����mmm<Ѯ!l3O_�S+�+` w�����s�~�%��y��д�Ժ:N.*�W h^BV�)�ɭq�LD���{�ݑ�`L�<�h�s��Λ�3�-r�T�
v��w�����h�HP��ava���_(�m:{QLhYINs�E�B�LT�4<%��[��X��������L�6�Fy���+P�x
b��۝����;��T)�]1pV1I��S)�%��`��u�L�ں`�v�!�P��ܺ�^�?D*���G�:�j�{����(eV�Qj�x����>L'�ҫH�+&A�\��z@�� ~>YA�
R�z'`#��)��c0ʔ�P��!�8%�'m3�M;=g�ʱN8�T1Fs�,/Sɓ��{���嶯��7����_r�Ϫ�WBQ�g�P	Ir����s�$*�*�S�g�C�����*�\����Д     