PGDMP         $        	        z            bcg    13.6    13.6    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    57757    bcg    DATABASE     _   CREATE DATABASE bcg WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_India.1252';
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
       public          postgres    false    211            �           0    0    About_us_about_us_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public."About_us_about_us_id_seq" OWNED BY public.about_us.about_us_id;
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
       public          postgres    false    213            �           0    0 "   about_achivement_achivement_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.about_achivement_achivement_id_seq OWNED BY public.about_achivement.achivement_id;
          public          postgres    false    212                       1259    67221    archive_events    TABLE     \  CREATE TABLE public.archive_events (
    event_id integer NOT NULL,
    event_title character varying(500),
    event_desc text,
    date_from date,
    date_to date,
    event_file character varying(500),
    event_url character varying(500),
    uploads_type character varying(500),
    created_at timestamp(6) without time zone DEFAULT now()
);
 "   DROP TABLE public.archive_events;
       public         heap    postgres    false                       1259    67219    archive_events_event_id_seq    SEQUENCE     �   CREATE SEQUENCE public.archive_events_event_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.archive_events_event_id_seq;
       public          postgres    false    275            �           0    0    archive_events_event_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.archive_events_event_id_seq OWNED BY public.archive_events.event_id;
          public          postgres    false    274                       1259    67300    archived_tenders    TABLE     �  CREATE TABLE public.archived_tenders (
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
 $   DROP TABLE public.archived_tenders;
       public         heap    postgres    false                       1259    67298    archived_tenders_tender_id_seq    SEQUENCE     �   CREATE SEQUENCE public.archived_tenders_tender_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.archived_tenders_tender_id_seq;
       public          postgres    false    279            �           0    0    archived_tenders_tender_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.archived_tenders_tender_id_seq OWNED BY public.archived_tenders.tender_id;
          public          postgres    false    278            �            1259    66209 	   user_info    TABLE     �   CREATE TABLE public.user_info (
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
       public          postgres    false    201            �           0    0    bcg_users_user_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.bcg_users_user_id_seq OWNED BY public.user_info.user_id;
          public          postgres    false    200                       1259    66950    bcgvl_contacts    TABLE     
  CREATE TABLE public.bcgvl_contacts (
    contact_id integer NOT NULL,
    con_email character varying(500),
    con_phone character varying(500),
    con_address character varying(500),
    map_embed character varying(5000),
    con_status character varying(100)
);
 "   DROP TABLE public.bcgvl_contacts;
       public         heap    postgres    false                       1259    66953    bcgvl_contacts_contact_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bcgvl_contacts_contact_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.bcgvl_contacts_contact_id_seq;
       public          postgres    false    260            �           0    0    bcgvl_contacts_contact_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.bcgvl_contacts_contact_id_seq OWNED BY public.bcgvl_contacts.contact_id;
          public          postgres    false    261            �            1259    66430    bcgvl_staff_designation    TABLE     �   CREATE TABLE public.bcgvl_staff_designation (
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
       public          postgres    false    221            �           0    0 "   bcgvl_staff_designation_deg_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.bcgvl_staff_designation_deg_id_seq OWNED BY public.bcgvl_staff_designation.deg_id;
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
       public          postgres    false    223            �           0    0     bcgvl_staff_details_staff_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.bcgvl_staff_details_staff_id_seq OWNED BY public.bcgvl_staff_details.staff_id;
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
       public          postgres    false    219            �           0    0    bcgvl_staff_groups_cate_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.bcgvl_staff_groups_cate_id_seq OWNED BY public.bcgvl_staff_groups.cate_id;
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
       public          postgres    false    205            �           0    0    director_desk_dir_desk_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.director_desk_dir_desk_id_seq OWNED BY public.director_desk.dir_desk_id;
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
       public          postgres    false    209            �           0    0 !   director_status_dir_status_id_seq    SEQUENCE OWNED BY     g   ALTER SEQUENCE public.director_status_dir_status_id_seq OWNED BY public.director_status.dir_status_id;
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
       public          postgres    false    237            �           0    0    division_div_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.division_div_id_seq OWNED BY public.division.div_id;
          public          postgres    false    236            �            1259    66555    documents_bcg    TABLE     l  CREATE TABLE public.documents_bcg (
    doc_id integer NOT NULL,
    doc_title character varying(500),
    doc_attachment character varying(500),
    doc_description character varying(5000),
    doc_cate character varying(100),
    file_size numeric(100,0),
    year_of_report character varying(100),
    created_at timestamp(6) without time zone DEFAULT now()
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
       public          postgres    false    233            �           0    0    documents_bcg_doc_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.documents_bcg_doc_id_seq OWNED BY public.documents_bcg.doc_id;
          public          postgres    false    232            �            1259    66251    emp_designation    TABLE     �   CREATE TABLE public.emp_designation (
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
       public          postgres    false    207            �           0    0 "   emp_designation_designation_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.emp_designation_designation_id_seq OWNED BY public.emp_designation.designation_id;
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
       public          postgres    false    239            �           0    0    event_category_event_cate_seq    SEQUENCE OWNED BY     \   ALTER SEQUENCE public.event_category_event_cate_seq OWNED BY public.event_category.cate_id;
          public          postgres    false    238            �            1259    66819    event_gallery    TABLE     �   CREATE TABLE public.event_gallery (
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
       public          postgres    false    241            �           0    0    event_gallery_photo_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.event_gallery_photo_id_seq OWNED BY public.event_gallery.photo_id;
          public          postgres    false    240                       1259    67002    events    TABLE       CREATE TABLE public.events (
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
       public         heap    postgres    false                       1259    67000    events_event_id_seq    SEQUENCE     �   CREATE SEQUENCE public.events_event_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.events_event_id_seq;
       public          postgres    false    263            �           0    0    events_event_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.events_event_id_seq OWNED BY public.events.event_id;
          public          postgres    false    262                       1259    67050    faq    TABLE     �   CREATE TABLE public.faq (
    faq_id integer NOT NULL,
    faq_title character varying(1000) NOT NULL,
    faq_desc character varying(5000),
    faq_status integer,
    created_at date DEFAULT now()
);
    DROP TABLE public.faq;
       public         heap    postgres    false            
           1259    67048    faq_faq_id_seq    SEQUENCE     �   CREATE SEQUENCE public.faq_faq_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.faq_faq_id_seq;
       public          postgres    false    267            �           0    0    faq_faq_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.faq_faq_id_seq OWNED BY public.faq.faq_id;
          public          postgres    false    266            	           1259    67041    faq_mst_status    TABLE     x   CREATE TABLE public.faq_mst_status (
    faq_status_id integer NOT NULL,
    faq_status_title character varying(500)
);
 "   DROP TABLE public.faq_mst_status;
       public         heap    postgres    false                       1259    67039     faq_mst_status_faq_status_id_seq    SEQUENCE     �   CREATE SEQUENCE public.faq_mst_status_faq_status_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.faq_mst_status_faq_status_id_seq;
       public          postgres    false    265            �           0    0     faq_mst_status_faq_status_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.faq_mst_status_faq_status_id_seq OWNED BY public.faq_mst_status.faq_status_id;
          public          postgres    false    264                       1259    67174    feed_mst_status    TABLE     {   CREATE TABLE public.feed_mst_status (
    feed_status_id integer NOT NULL,
    feed_status_title character varying(500)
);
 #   DROP TABLE public.feed_mst_status;
       public         heap    postgres    false                       1259    67172 "   feed_mst_status_feed_status_id_seq    SEQUENCE     �   CREATE SEQUENCE public.feed_mst_status_feed_status_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.feed_mst_status_feed_status_id_seq;
       public          postgres    false    271            �           0    0 "   feed_mst_status_feed_status_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.feed_mst_status_feed_status_id_seq OWNED BY public.feed_mst_status.feed_status_id;
          public          postgres    false    270                       1259    67161    feedback    TABLE     J  CREATE TABLE public.feedback (
    feedback_id integer NOT NULL,
    feed_sub character varying(500),
    feed_msg character varying(5000),
    feedback_from character varying(500),
    feedback_mail character varying(500),
    feed_status numeric(10,0) DEFAULT 1,
    created_date timestamp(6) without time zone DEFAULT now()
);
    DROP TABLE public.feedback;
       public         heap    postgres    false                       1259    67159    feedback_feedback_id_seq    SEQUENCE     �   CREATE SEQUENCE public.feedback_feedback_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.feedback_feedback_id_seq;
       public          postgres    false    269            �           0    0    feedback_feedback_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.feedback_feedback_id_seq OWNED BY public.feedback.feedback_id;
          public          postgres    false    268            �            1259    66377    former_directors    TABLE     �   CREATE TABLE public.former_directors (
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
       public          postgres    false    215            �           0    0     former_directors_director_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.former_directors_director_id_seq OWNED BY public.former_directors.director_id;
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
       public          postgres    false    245            �           0    0 !   gallery_category_gall_cate_id_seq    SEQUENCE OWNED BY     g   ALTER SEQUENCE public.gallery_category_gall_cate_id_seq OWNED BY public.gallery_category.gall_cate_id;
          public          postgres    false    244            �            1259    66890    mst_rti    TABLE     *  CREATE TABLE public.mst_rti (
    rti_id integer NOT NULL,
    rti_name character varying(500),
    rti_status character varying(500),
    rti_attachment character varying(500),
    file_type character varying(200),
    rti_url character varying(500),
    created_at timestamp(6) with time zone
);
    DROP TABLE public.mst_rti;
       public         heap    postgres    false            �            1259    66888    mst_rti_rti_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_rti_rti_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.mst_rti_rti_id_seq;
       public          postgres    false    253            �           0    0    mst_rti_rti_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.mst_rti_rti_id_seq OWNED BY public.mst_rti.rti_id;
          public          postgres    false    252            �            1259    66911    mst_sub_rti    TABLE     3  CREATE TABLE public.mst_sub_rti (
    sub_rti_id integer NOT NULL,
    mst_rti_id integer,
    sub_rti_name character varying(500),
    status character varying(500),
    created_at timestamp(6) without time zone DEFAULT now(),
    rti_upload character varying(500),
    file_type character varying(500)
);
    DROP TABLE public.mst_sub_rti;
       public         heap    postgres    false            �            1259    66909    mst_sub_rti_sub_rti_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_sub_rti_sub_rti_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.mst_sub_rti_sub_rti_id_seq;
       public          postgres    false    255            �           0    0    mst_sub_rti_sub_rti_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.mst_sub_rti_sub_rti_id_seq OWNED BY public.mst_sub_rti.sub_rti_id;
          public          postgres    false    254                       1259    66922    mst_subs_rti    TABLE     w  CREATE TABLE public.mst_subs_rti (
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
       public         heap    postgres    false                        1259    66920    mst_subs_rti_subs_rti_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_subs_rti_subs_rti_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.mst_subs_rti_subs_rti_id_seq;
       public          postgres    false    257            �           0    0    mst_subs_rti_subs_rti_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.mst_subs_rti_subs_rti_id_seq OWNED BY public.mst_subs_rti.subs_rti_id;
          public          postgres    false    256            �            1259    66456    organisation_chart    TABLE     �   CREATE TABLE public.organisation_chart (
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
       public          postgres    false    225            �           0    0    organisation_chart_org_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.organisation_chart_org_id_seq OWNED BY public.organisation_chart.org_id;
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
       public          postgres    false    243            �           0    0    photo_category_cate_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.photo_category_cate_id_seq OWNED BY public.photo_category.cate_id;
          public          postgres    false    242            �            1259    66878    photo_gallery    TABLE     �   CREATE TABLE public.photo_gallery (
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
       public          postgres    false    251            �           0    0    photo_gallery_photo_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.photo_gallery_photo_id_seq OWNED BY public.photo_gallery.photo_id;
          public          postgres    false    250            �            1259    66486    product    TABLE     �   CREATE TABLE public.product (
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
       public          postgres    false    229            �           0    0    product_product_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.product_product_id_seq OWNED BY public.product.product_id;
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
       public          postgres    false    227            �           0    0    production_pro_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.production_pro_id_seq OWNED BY public.production.pro_id;
          public          postgres    false    226            �            1259    66702    recruitment    TABLE     f  CREATE TABLE public.recruitment (
    rec_id integer NOT NULL,
    rect_title character varying(500),
    advt_no character varying(500),
    date_of_announce date,
    last_date_to_apply date,
    upload_advt character(500),
    file_size numeric(100,0),
    rec_status character varying(100),
    created_at timestamp(6) without time zone DEFAULT now()
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
       public          postgres    false    235            �           0    0    recruitment_rec_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.recruitment_rec_id_seq OWNED BY public.recruitment.rec_id;
          public          postgres    false    234                       1259    66941    rti_contacts    TABLE     �  CREATE TABLE public.rti_contacts (
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
       public         heap    postgres    false                       1259    66939    rti_contacts_contact_id_seq    SEQUENCE     �   CREATE SEQUENCE public.rti_contacts_contact_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.rti_contacts_contact_id_seq;
       public          postgres    false    259            �           0    0    rti_contacts_contact_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.rti_contacts_contact_id_seq OWNED BY public.rti_contacts.contact_id;
          public          postgres    false    258                       1259    67182    sliders    TABLE     I  CREATE TABLE public.sliders (
    slider_id integer NOT NULL,
    slider_title character varying(500),
    slider_img character varying(500),
    slider_caption character varying(500),
    slider_status numeric(500,0) DEFAULT 1,
    slider_type character varying(200),
    created_at timestamp(6) with time zone DEFAULT now()
);
    DROP TABLE public.sliders;
       public         heap    postgres    false                       1259    67180    sliders_slider_id_seq    SEQUENCE     �   CREATE SEQUENCE public.sliders_slider_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.sliders_slider_id_seq;
       public          postgres    false    273            �           0    0    sliders_slider_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.sliders_slider_id_seq OWNED BY public.sliders.slider_id;
          public          postgres    false    272                       1259    67251    tenders    TABLE     �  CREATE TABLE public.tenders (
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
       public         heap    postgres    false                       1259    67249    tenders_tender_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tenders_tender_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.tenders_tender_id_seq;
       public          postgres    false    277            �           0    0    tenders_tender_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.tenders_tender_id_seq OWNED BY public.tenders.tender_id;
          public          postgres    false    276            �            1259    66217 	   user_role    TABLE     f   CREATE TABLE public.user_role (
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
       public          postgres    false    203            �           0    0    user_role_role_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.user_role_role_id_seq OWNED BY public.user_role.role_id;
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
       public          postgres    false    231            �           0    0    vaccine_supply_vs_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.vaccine_supply_vs_id_seq OWNED BY public.vaccine_supply.vs_id;
          public          postgres    false    230            �            1259    66853    video_category    TABLE     �   CREATE TABLE public.video_category (
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
       public          postgres    false    247            �           0    0    video_category_cate_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.video_category_cate_id_seq OWNED BY public.video_category.cate_id;
          public          postgres    false    246            �            1259    66866    video_gallery    TABLE     �   CREATE TABLE public.video_gallery (
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
       public          postgres    false    249            �           0    0    video_gallery_photo_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.video_gallery_photo_id_seq OWNED BY public.video_gallery.photo_id;
          public          postgres    false    248            �            1259    66395    what_new    TABLE     �   CREATE TABLE public.what_new (
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
       public          postgres    false    217            �           0    0    what_new_whats_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.what_new_whats_id_seq OWNED BY public.what_new.whats_id;
          public          postgres    false    216            4           2604    66352    about_achivement achivement_id    DEFAULT     �   ALTER TABLE ONLY public.about_achivement ALTER COLUMN achivement_id SET DEFAULT nextval('public.about_achivement_achivement_id_seq'::regclass);
 M   ALTER TABLE public.about_achivement ALTER COLUMN achivement_id DROP DEFAULT;
       public          postgres    false    213    212    213            2           2604    66282    about_us about_us_id    DEFAULT     ~   ALTER TABLE ONLY public.about_us ALTER COLUMN about_us_id SET DEFAULT nextval('public."About_us_about_us_id_seq"'::regclass);
 C   ALTER TABLE public.about_us ALTER COLUMN about_us_id DROP DEFAULT;
       public          postgres    false    210    211    211            h           2604    67224    archive_events event_id    DEFAULT     �   ALTER TABLE ONLY public.archive_events ALTER COLUMN event_id SET DEFAULT nextval('public.archive_events_event_id_seq'::regclass);
 F   ALTER TABLE public.archive_events ALTER COLUMN event_id DROP DEFAULT;
       public          postgres    false    274    275    275            m           2604    67303    archived_tenders tender_id    DEFAULT     �   ALTER TABLE ONLY public.archived_tenders ALTER COLUMN tender_id SET DEFAULT nextval('public.archived_tenders_tender_id_seq'::regclass);
 I   ALTER TABLE public.archived_tenders ALTER COLUMN tender_id DROP DEFAULT;
       public          postgres    false    279    278    279            \           2604    66955    bcgvl_contacts contact_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_contacts ALTER COLUMN contact_id SET DEFAULT nextval('public.bcgvl_contacts_contact_id_seq'::regclass);
 H   ALTER TABLE public.bcgvl_contacts ALTER COLUMN contact_id DROP DEFAULT;
       public          postgres    false    261    260            9           2604    66433    bcgvl_staff_designation deg_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_staff_designation ALTER COLUMN deg_id SET DEFAULT nextval('public.bcgvl_staff_designation_deg_id_seq'::regclass);
 M   ALTER TABLE public.bcgvl_staff_designation ALTER COLUMN deg_id DROP DEFAULT;
       public          postgres    false    220    221    221            :           2604    66444    bcgvl_staff_details staff_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_staff_details ALTER COLUMN staff_id SET DEFAULT nextval('public.bcgvl_staff_details_staff_id_seq'::regclass);
 K   ALTER TABLE public.bcgvl_staff_details ALTER COLUMN staff_id DROP DEFAULT;
       public          postgres    false    223    222    223            8           2604    66422    bcgvl_staff_groups cate_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_staff_groups ALTER COLUMN cate_id SET DEFAULT nextval('public.bcgvl_staff_groups_cate_id_seq'::regclass);
 I   ALTER TABLE public.bcgvl_staff_groups ALTER COLUMN cate_id DROP DEFAULT;
       public          postgres    false    218    219    219            /           2604    66239    director_desk dir_desk_id    DEFAULT     �   ALTER TABLE ONLY public.director_desk ALTER COLUMN dir_desk_id SET DEFAULT nextval('public.director_desk_dir_desk_id_seq'::regclass);
 H   ALTER TABLE public.director_desk ALTER COLUMN dir_desk_id DROP DEFAULT;
       public          postgres    false    205    204    205            1           2604    66274    director_status dir_status_id    DEFAULT     �   ALTER TABLE ONLY public.director_status ALTER COLUMN dir_status_id SET DEFAULT nextval('public.director_status_dir_status_id_seq'::regclass);
 L   ALTER TABLE public.director_status ALTER COLUMN dir_status_id DROP DEFAULT;
       public          postgres    false    208    209    209            D           2604    66757    division div_id    DEFAULT     r   ALTER TABLE ONLY public.division ALTER COLUMN div_id SET DEFAULT nextval('public.division_div_id_seq'::regclass);
 >   ALTER TABLE public.division ALTER COLUMN div_id DROP DEFAULT;
       public          postgres    false    237    236    237            @           2604    66558    documents_bcg doc_id    DEFAULT     |   ALTER TABLE ONLY public.documents_bcg ALTER COLUMN doc_id SET DEFAULT nextval('public.documents_bcg_doc_id_seq'::regclass);
 C   ALTER TABLE public.documents_bcg ALTER COLUMN doc_id DROP DEFAULT;
       public          postgres    false    232    233    233            0           2604    66254    emp_designation designation_id    DEFAULT     �   ALTER TABLE ONLY public.emp_designation ALTER COLUMN designation_id SET DEFAULT nextval('public.emp_designation_designation_id_seq'::regclass);
 M   ALTER TABLE public.emp_designation ALTER COLUMN designation_id DROP DEFAULT;
       public          postgres    false    207    206    207            F           2604    66769    event_category cate_id    DEFAULT     �   ALTER TABLE ONLY public.event_category ALTER COLUMN cate_id SET DEFAULT nextval('public.event_category_event_cate_seq'::regclass);
 E   ALTER TABLE public.event_category ALTER COLUMN cate_id DROP DEFAULT;
       public          postgres    false    238    239    239            I           2604    66822    event_gallery photo_id    DEFAULT     �   ALTER TABLE ONLY public.event_gallery ALTER COLUMN photo_id SET DEFAULT nextval('public.event_gallery_photo_id_seq'::regclass);
 E   ALTER TABLE public.event_gallery ALTER COLUMN photo_id DROP DEFAULT;
       public          postgres    false    240    241    241            ]           2604    67005    events event_id    DEFAULT     r   ALTER TABLE ONLY public.events ALTER COLUMN event_id SET DEFAULT nextval('public.events_event_id_seq'::regclass);
 >   ALTER TABLE public.events ALTER COLUMN event_id DROP DEFAULT;
       public          postgres    false    263    262    263            _           2604    67053 
   faq faq_id    DEFAULT     h   ALTER TABLE ONLY public.faq ALTER COLUMN faq_id SET DEFAULT nextval('public.faq_faq_id_seq'::regclass);
 9   ALTER TABLE public.faq ALTER COLUMN faq_id DROP DEFAULT;
       public          postgres    false    267    266    267            ^           2604    67044    faq_mst_status faq_status_id    DEFAULT     �   ALTER TABLE ONLY public.faq_mst_status ALTER COLUMN faq_status_id SET DEFAULT nextval('public.faq_mst_status_faq_status_id_seq'::regclass);
 K   ALTER TABLE public.faq_mst_status ALTER COLUMN faq_status_id DROP DEFAULT;
       public          postgres    false    264    265    265            d           2604    67177    feed_mst_status feed_status_id    DEFAULT     �   ALTER TABLE ONLY public.feed_mst_status ALTER COLUMN feed_status_id SET DEFAULT nextval('public.feed_mst_status_feed_status_id_seq'::regclass);
 M   ALTER TABLE public.feed_mst_status ALTER COLUMN feed_status_id DROP DEFAULT;
       public          postgres    false    271    270    271            a           2604    67164    feedback feedback_id    DEFAULT     |   ALTER TABLE ONLY public.feedback ALTER COLUMN feedback_id SET DEFAULT nextval('public.feedback_feedback_id_seq'::regclass);
 C   ALTER TABLE public.feedback ALTER COLUMN feedback_id DROP DEFAULT;
       public          postgres    false    269    268    269            5           2604    66380    former_directors director_id    DEFAULT     �   ALTER TABLE ONLY public.former_directors ALTER COLUMN director_id SET DEFAULT nextval('public.former_directors_director_id_seq'::regclass);
 K   ALTER TABLE public.former_directors ALTER COLUMN director_id DROP DEFAULT;
       public          postgres    false    214    215    215            N           2604    66846    gallery_category gall_cate_id    DEFAULT     �   ALTER TABLE ONLY public.gallery_category ALTER COLUMN gall_cate_id SET DEFAULT nextval('public.gallery_category_gall_cate_id_seq'::regclass);
 L   ALTER TABLE public.gallery_category ALTER COLUMN gall_cate_id DROP DEFAULT;
       public          postgres    false    244    245    245            V           2604    66893    mst_rti rti_id    DEFAULT     p   ALTER TABLE ONLY public.mst_rti ALTER COLUMN rti_id SET DEFAULT nextval('public.mst_rti_rti_id_seq'::regclass);
 =   ALTER TABLE public.mst_rti ALTER COLUMN rti_id DROP DEFAULT;
       public          postgres    false    253    252    253            W           2604    66914    mst_sub_rti sub_rti_id    DEFAULT     �   ALTER TABLE ONLY public.mst_sub_rti ALTER COLUMN sub_rti_id SET DEFAULT nextval('public.mst_sub_rti_sub_rti_id_seq'::regclass);
 E   ALTER TABLE public.mst_sub_rti ALTER COLUMN sub_rti_id DROP DEFAULT;
       public          postgres    false    255    254    255            Y           2604    66925    mst_subs_rti subs_rti_id    DEFAULT     �   ALTER TABLE ONLY public.mst_subs_rti ALTER COLUMN subs_rti_id SET DEFAULT nextval('public.mst_subs_rti_subs_rti_id_seq'::regclass);
 G   ALTER TABLE public.mst_subs_rti ALTER COLUMN subs_rti_id DROP DEFAULT;
       public          postgres    false    257    256    257            ;           2604    66459    organisation_chart org_id    DEFAULT     �   ALTER TABLE ONLY public.organisation_chart ALTER COLUMN org_id SET DEFAULT nextval('public.organisation_chart_org_id_seq'::regclass);
 H   ALTER TABLE public.organisation_chart ALTER COLUMN org_id DROP DEFAULT;
       public          postgres    false    224    225    225            K           2604    66834    photo_category cate_id    DEFAULT     �   ALTER TABLE ONLY public.photo_category ALTER COLUMN cate_id SET DEFAULT nextval('public.photo_category_cate_id_seq'::regclass);
 E   ALTER TABLE public.photo_category ALTER COLUMN cate_id DROP DEFAULT;
       public          postgres    false    242    243    243            T           2604    66881    photo_gallery photo_id    DEFAULT     �   ALTER TABLE ONLY public.photo_gallery ALTER COLUMN photo_id SET DEFAULT nextval('public.photo_gallery_photo_id_seq'::regclass);
 E   ALTER TABLE public.photo_gallery ALTER COLUMN photo_id DROP DEFAULT;
       public          postgres    false    250    251    251            =           2604    66489    product product_id    DEFAULT     x   ALTER TABLE ONLY public.product ALTER COLUMN product_id SET DEFAULT nextval('public.product_product_id_seq'::regclass);
 A   ALTER TABLE public.product ALTER COLUMN product_id DROP DEFAULT;
       public          postgres    false    229    228    229            <           2604    66478    production pro_id    DEFAULT     v   ALTER TABLE ONLY public.production ALTER COLUMN pro_id SET DEFAULT nextval('public.production_pro_id_seq'::regclass);
 @   ALTER TABLE public.production ALTER COLUMN pro_id DROP DEFAULT;
       public          postgres    false    227    226    227            B           2604    66705    recruitment rec_id    DEFAULT     x   ALTER TABLE ONLY public.recruitment ALTER COLUMN rec_id SET DEFAULT nextval('public.recruitment_rec_id_seq'::regclass);
 A   ALTER TABLE public.recruitment ALTER COLUMN rec_id DROP DEFAULT;
       public          postgres    false    235    234    235            [           2604    66944    rti_contacts contact_id    DEFAULT     �   ALTER TABLE ONLY public.rti_contacts ALTER COLUMN contact_id SET DEFAULT nextval('public.rti_contacts_contact_id_seq'::regclass);
 F   ALTER TABLE public.rti_contacts ALTER COLUMN contact_id DROP DEFAULT;
       public          postgres    false    258    259    259            e           2604    67185    sliders slider_id    DEFAULT     v   ALTER TABLE ONLY public.sliders ALTER COLUMN slider_id SET DEFAULT nextval('public.sliders_slider_id_seq'::regclass);
 @   ALTER TABLE public.sliders ALTER COLUMN slider_id DROP DEFAULT;
       public          postgres    false    273    272    273            j           2604    67254    tenders tender_id    DEFAULT     v   ALTER TABLE ONLY public.tenders ALTER COLUMN tender_id SET DEFAULT nextval('public.tenders_tender_id_seq'::regclass);
 @   ALTER TABLE public.tenders ALTER COLUMN tender_id DROP DEFAULT;
       public          postgres    false    276    277    277            -           2604    66212    user_info user_id    DEFAULT     v   ALTER TABLE ONLY public.user_info ALTER COLUMN user_id SET DEFAULT nextval('public.bcg_users_user_id_seq'::regclass);
 @   ALTER TABLE public.user_info ALTER COLUMN user_id DROP DEFAULT;
       public          postgres    false    201    200    201            .           2604    66220    user_role role_id    DEFAULT     v   ALTER TABLE ONLY public.user_role ALTER COLUMN role_id SET DEFAULT nextval('public.user_role_role_id_seq'::regclass);
 @   ALTER TABLE public.user_role ALTER COLUMN role_id DROP DEFAULT;
       public          postgres    false    203    202    203            >           2604    66540    vaccine_supply vs_id    DEFAULT     |   ALTER TABLE ONLY public.vaccine_supply ALTER COLUMN vs_id SET DEFAULT nextval('public.vaccine_supply_vs_id_seq'::regclass);
 C   ALTER TABLE public.vaccine_supply ALTER COLUMN vs_id DROP DEFAULT;
       public          postgres    false    231    230    231            O           2604    66856    video_category cate_id    DEFAULT     �   ALTER TABLE ONLY public.video_category ALTER COLUMN cate_id SET DEFAULT nextval('public.video_category_cate_id_seq'::regclass);
 E   ALTER TABLE public.video_category ALTER COLUMN cate_id DROP DEFAULT;
       public          postgres    false    247    246    247            R           2604    66869    video_gallery photo_id    DEFAULT     �   ALTER TABLE ONLY public.video_gallery ALTER COLUMN photo_id SET DEFAULT nextval('public.video_gallery_photo_id_seq'::regclass);
 E   ALTER TABLE public.video_gallery ALTER COLUMN photo_id DROP DEFAULT;
       public          postgres    false    248    249    249            6           2604    66398    what_new whats_id    DEFAULT     v   ALTER TABLE ONLY public.what_new ALTER COLUMN whats_id SET DEFAULT nextval('public.what_new_whats_id_seq'::regclass);
 @   ALTER TABLE public.what_new ALTER COLUMN whats_id DROP DEFAULT;
       public          postgres    false    216    217    217            M          0    66349    about_achivement 
   TABLE DATA           [   COPY public.about_achivement (achivement_id, achivement_name, achivement_year) FROM stdin;
    public          postgres    false    213   z[      K          0    66279    about_us 
   TABLE DATA           �   COPY public.about_us (about_us_id, content_id, content_description, content_status, last_updated, content_updated_by, archive) FROM stdin;
    public          postgres    false    211   �[      �          0    67221    archive_events 
   TABLE DATA           �   COPY public.archive_events (event_id, event_title, event_desc, date_from, date_to, event_file, event_url, uploads_type, created_at) FROM stdin;
    public          postgres    false    275   �~      �          0    67300    archived_tenders 
   TABLE DATA           �   COPY public.archived_tenders (tender_id, tender_title, advertise_no, date_of_announce, date_of_closed, tenders_notice, file_size, tender_status, created_date) FROM stdin;
    public          postgres    false    279   �~      |          0    66950    bcgvl_contacts 
   TABLE DATA           n   COPY public.bcgvl_contacts (contact_id, con_email, con_phone, con_address, map_embed, con_status) FROM stdin;
    public          postgres    false    260   �~      U          0    66430    bcgvl_staff_designation 
   TABLE DATA           M   COPY public.bcgvl_staff_designation (deg_id, deg_name, deg_code) FROM stdin;
    public          postgres    false    221   �      W          0    66441    bcgvl_staff_details 
   TABLE DATA           `   COPY public.bcgvl_staff_details (staff_id, staff_name, deg_code, cate_code, status) FROM stdin;
    public          postgres    false    223   ��      S          0    66419    bcgvl_staff_groups 
   TABLE DATA           K   COPY public.bcgvl_staff_groups (cate_id, cate_name, cate_code) FROM stdin;
    public          postgres    false    219   ��      E          0    66236    director_desk 
   TABLE DATA           �   COPY public.director_desk (dir_desk_id, director_name, director_position, director_qualification, position_held, director_photo, short_profile, detail_profile, director_message, director_status, director_expertise) FROM stdin;
    public          postgres    false    205   L�      I          0    66271    director_status 
   TABLE DATA           `   COPY public.director_status (dir_status_id, dir_status_name, dir_status_short_code) FROM stdin;
    public          postgres    false    209   x�      e          0    66754    division 
   TABLE DATA           a   COPY public.division (div_id, div_name, div_content, content_updated_by, created_at) FROM stdin;
    public          postgres    false    237   ŏ      a          0    66555    documents_bcg 
   TABLE DATA           �   COPY public.documents_bcg (doc_id, doc_title, doc_attachment, doc_description, doc_cate, file_size, year_of_report, created_at) FROM stdin;
    public          postgres    false    233   }�      G          0    66251    emp_designation 
   TABLE DATA           ]   COPY public.emp_designation (designation_id, designation_name, designation_code) FROM stdin;
    public          postgres    false    207   �      g          0    66766    event_category 
   TABLE DATA           o   COPY public.event_category (cate_id, category_title, from_date, to_date, created_at, gall_cate_id) FROM stdin;
    public          postgres    false    239   1�      i          0    66819    event_gallery 
   TABLE DATA           b   COPY public.event_gallery (photo_id, category, photo_file, created_at, photo_caption) FROM stdin;
    public          postgres    false    241   �                0    67002    events 
   TABLE DATA           |   COPY public.events (event_id, event_title, event_desc, date_from, date_to, event_file, event_url, uploads_type) FROM stdin;
    public          postgres    false    263   �      �          0    67050    faq 
   TABLE DATA           R   COPY public.faq (faq_id, faq_title, faq_desc, faq_status, created_at) FROM stdin;
    public          postgres    false    267   l�      �          0    67041    faq_mst_status 
   TABLE DATA           I   COPY public.faq_mst_status (faq_status_id, faq_status_title) FROM stdin;
    public          postgres    false    265   �      �          0    67174    feed_mst_status 
   TABLE DATA           L   COPY public.feed_mst_status (feed_status_id, feed_status_title) FROM stdin;
    public          postgres    false    271   M�      �          0    67161    feedback 
   TABLE DATA           |   COPY public.feedback (feedback_id, feed_sub, feed_msg, feedback_from, feedback_mail, feed_status, created_date) FROM stdin;
    public          postgres    false    269   w�      O          0    66377    former_directors 
   TABLE DATA           Z   COPY public.former_directors (director_id, director_name, year_from, year_to) FROM stdin;
    public          postgres    false    215   %�      m          0    66843    gallery_category 
   TABLE DATA           H   COPY public.gallery_category (gall_cate_id, gall_cate_name) FROM stdin;
    public          postgres    false    245   ͘      u          0    66890    mst_rti 
   TABLE DATA           o   COPY public.mst_rti (rti_id, rti_name, rti_status, rti_attachment, file_type, rti_url, created_at) FROM stdin;
    public          postgres    false    253   �      w          0    66911    mst_sub_rti 
   TABLE DATA           v   COPY public.mst_sub_rti (sub_rti_id, mst_rti_id, sub_rti_name, status, created_at, rti_upload, file_type) FROM stdin;
    public          postgres    false    255   ��      y          0    66922    mst_subs_rti 
   TABLE DATA           �   COPY public.mst_subs_rti (subs_rti_id, mst_sub_id, subs_rti_name, description, file_type, size, status, created_at, rti_upload) FROM stdin;
    public          postgres    false    257   �      Y          0    66456    organisation_chart 
   TABLE DATA           I   COPY public.organisation_chart (org_id, org_pic, org_status) FROM stdin;
    public          postgres    false    225   ��      k          0    66831    photo_category 
   TABLE DATA           [   COPY public.photo_category (cate_id, category_title, created_at, gall_cate_id) FROM stdin;
    public          postgres    false    243   ��      s          0    66878    photo_gallery 
   TABLE DATA           b   COPY public.photo_gallery (photo_id, category, photo_file, created_at, photo_caption) FROM stdin;
    public          postgres    false    251   z�      ]          0    66486    product 
   TABLE DATA           h   COPY public.product (product_id, product_name, product_desc, product_image, product_status) FROM stdin;
    public          postgres    false    229    �      [          0    66475 
   production 
   TABLE DATA           D   COPY public.production (pro_id, production_pic, status) FROM stdin;
    public          postgres    false    227   D�      c          0    66702    recruitment 
   TABLE DATA           �   COPY public.recruitment (rec_id, rect_title, advt_no, date_of_announce, last_date_to_apply, upload_advt, file_size, rec_status, created_at) FROM stdin;
    public          postgres    false    235   ��      {          0    66941    rti_contacts 
   TABLE DATA           �   COPY public.rti_contacts (contact_id, contact_title, user_name, designation, contact_address, user_phone, office_phone, organization_email, user_email, status, created_date) FROM stdin;
    public          postgres    false    259   #�      �          0    67182    sliders 
   TABLE DATA           ~   COPY public.sliders (slider_id, slider_title, slider_img, slider_caption, slider_status, slider_type, created_at) FROM stdin;
    public          postgres    false    273   �      �          0    67251    tenders 
   TABLE DATA           �   COPY public.tenders (tender_id, tender_title, advertise_no, date_of_announce, date_of_closed, tenders_notice, file_size, tender_status, created_date) FROM stdin;
    public          postgres    false    277   ��      A          0    66209 	   user_info 
   TABLE DATA           C   COPY public.user_info (user_id, uname, upass, role_id) FROM stdin;
    public          postgres    false    201   �      C          0    66217 	   user_role 
   TABLE DATA           7   COPY public.user_role (role_id, role_name) FROM stdin;
    public          postgres    false    203   ��      _          0    66537    vaccine_supply 
   TABLE DATA           U   COPY public.vaccine_supply (vs_id, vs_details, created_date, updated_by) FROM stdin;
    public          postgres    false    231   ��      o          0    66853    video_category 
   TABLE DATA           [   COPY public.video_category (cate_id, category_title, created_at, gall_cate_id) FROM stdin;
    public          postgres    false    247   �      q          0    66866    video_gallery 
   TABLE DATA           b   COPY public.video_gallery (photo_id, category, photo_file, created_at, photo_caption) FROM stdin;
    public          postgres    false    249   f�      Q          0    66395    what_new 
   TABLE DATA           _   COPY public.what_new (whats_id, whats_title, whats_desc, whats_file, created_date) FROM stdin;
    public          postgres    false    217   �      �           0    0    About_us_about_us_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public."About_us_about_us_id_seq"', 7, true);
          public          postgres    false    210            �           0    0 "   about_achivement_achivement_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.about_achivement_achivement_id_seq', 1, false);
          public          postgres    false    212            �           0    0    archive_events_event_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.archive_events_event_id_seq', 1, false);
          public          postgres    false    274            �           0    0    archived_tenders_tender_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.archived_tenders_tender_id_seq', 1, false);
          public          postgres    false    278            �           0    0    bcg_users_user_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.bcg_users_user_id_seq', 1, false);
          public          postgres    false    200            �           0    0    bcgvl_contacts_contact_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.bcgvl_contacts_contact_id_seq', 4, true);
          public          postgres    false    261            �           0    0 "   bcgvl_staff_designation_deg_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.bcgvl_staff_designation_deg_id_seq', 1, false);
          public          postgres    false    220            �           0    0     bcgvl_staff_details_staff_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.bcgvl_staff_details_staff_id_seq', 90, true);
          public          postgres    false    222            �           0    0    bcgvl_staff_groups_cate_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.bcgvl_staff_groups_cate_id_seq', 1, false);
          public          postgres    false    218            �           0    0    director_desk_dir_desk_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.director_desk_dir_desk_id_seq', 59, true);
          public          postgres    false    204            �           0    0 !   director_status_dir_status_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.director_status_dir_status_id_seq', 1, false);
          public          postgres    false    208            �           0    0    division_div_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.division_div_id_seq', 4, true);
          public          postgres    false    236            �           0    0    documents_bcg_doc_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.documents_bcg_doc_id_seq', 1, true);
          public          postgres    false    232            �           0    0 "   emp_designation_designation_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.emp_designation_designation_id_seq', 1, false);
          public          postgres    false    206            �           0    0    event_category_event_cate_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.event_category_event_cate_seq', 10, true);
          public          postgres    false    238            �           0    0    event_gallery_photo_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.event_gallery_photo_id_seq', 9, true);
          public          postgres    false    240            �           0    0    events_event_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.events_event_id_seq', 10, true);
          public          postgres    false    262            �           0    0    faq_faq_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.faq_faq_id_seq', 4, true);
          public          postgres    false    266            �           0    0     faq_mst_status_faq_status_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.faq_mst_status_faq_status_id_seq', 1, false);
          public          postgres    false    264            �           0    0 "   feed_mst_status_feed_status_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.feed_mst_status_feed_status_id_seq', 1, false);
          public          postgres    false    270            �           0    0    feedback_feedback_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.feedback_feedback_id_seq', 3, true);
          public          postgres    false    268            �           0    0     former_directors_director_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.former_directors_director_id_seq', 18, true);
          public          postgres    false    214            �           0    0 !   gallery_category_gall_cate_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.gallery_category_gall_cate_id_seq', 1, false);
          public          postgres    false    244            �           0    0    mst_rti_rti_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.mst_rti_rti_id_seq', 6, true);
          public          postgres    false    252            �           0    0    mst_sub_rti_sub_rti_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.mst_sub_rti_sub_rti_id_seq', 1, false);
          public          postgres    false    254            �           0    0    mst_subs_rti_subs_rti_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.mst_subs_rti_subs_rti_id_seq', 1, false);
          public          postgres    false    256            �           0    0    organisation_chart_org_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.organisation_chart_org_id_seq', 7, true);
          public          postgres    false    224            �           0    0    photo_category_cate_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.photo_category_cate_id_seq', 3, true);
          public          postgres    false    242            �           0    0    photo_gallery_photo_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.photo_gallery_photo_id_seq', 4, true);
          public          postgres    false    250            �           0    0    product_product_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.product_product_id_seq', 9, true);
          public          postgres    false    228            �           0    0    production_pro_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.production_pro_id_seq', 4, true);
          public          postgres    false    226            �           0    0    recruitment_rec_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.recruitment_rec_id_seq', 1, true);
          public          postgres    false    234            �           0    0    rti_contacts_contact_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.rti_contacts_contact_id_seq', 2, true);
          public          postgres    false    258            �           0    0    sliders_slider_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.sliders_slider_id_seq', 1, true);
          public          postgres    false    272            �           0    0    tenders_tender_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.tenders_tender_id_seq', 1, true);
          public          postgres    false    276            �           0    0    user_role_role_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.user_role_role_id_seq', 1, false);
          public          postgres    false    202            �           0    0    vaccine_supply_vs_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.vaccine_supply_vs_id_seq', 1, true);
          public          postgres    false    230            �           0    0    video_category_cate_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.video_category_cate_id_seq', 2, true);
          public          postgres    false    246            �           0    0    video_gallery_photo_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.video_gallery_photo_id_seq', 4, true);
          public          postgres    false    248            �           0    0    what_new_whats_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.what_new_whats_id_seq', 44, true);
          public          postgres    false    216            {           2606    66288    about_us About_us_pkey 
   CONSTRAINT     _   ALTER TABLE ONLY public.about_us
    ADD CONSTRAINT "About_us_pkey" PRIMARY KEY (about_us_id);
 B   ALTER TABLE ONLY public.about_us DROP CONSTRAINT "About_us_pkey";
       public            postgres    false    211            }           2606    66357 &   about_achivement about_achivement_pkey 
   CONSTRAINT     o   ALTER TABLE ONLY public.about_achivement
    ADD CONSTRAINT about_achivement_pkey PRIMARY KEY (achivement_id);
 P   ALTER TABLE ONLY public.about_achivement DROP CONSTRAINT about_achivement_pkey;
       public            postgres    false    213            �           2606    67229 "   archive_events archive_events_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.archive_events
    ADD CONSTRAINT archive_events_pkey PRIMARY KEY (event_id);
 L   ALTER TABLE ONLY public.archive_events DROP CONSTRAINT archive_events_pkey;
       public            postgres    false    275            q           2606    66214    user_info bcg_users_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.user_info
    ADD CONSTRAINT bcg_users_pkey PRIMARY KEY (user_id);
 B   ALTER TABLE ONLY public.user_info DROP CONSTRAINT bcg_users_pkey;
       public            postgres    false    201            �           2606    66963 "   bcgvl_contacts bcgvl_contacts_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.bcgvl_contacts
    ADD CONSTRAINT bcgvl_contacts_pkey PRIMARY KEY (contact_id);
 L   ALTER TABLE ONLY public.bcgvl_contacts DROP CONSTRAINT bcgvl_contacts_pkey;
       public            postgres    false    260            �           2606    66438 4   bcgvl_staff_designation bcgvl_staff_designation_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.bcgvl_staff_designation
    ADD CONSTRAINT bcgvl_staff_designation_pkey PRIMARY KEY (deg_id);
 ^   ALTER TABLE ONLY public.bcgvl_staff_designation DROP CONSTRAINT bcgvl_staff_designation_pkey;
       public            postgres    false    221            �           2606    66449 ,   bcgvl_staff_details bcgvl_staff_details_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.bcgvl_staff_details
    ADD CONSTRAINT bcgvl_staff_details_pkey PRIMARY KEY (staff_id);
 V   ALTER TABLE ONLY public.bcgvl_staff_details DROP CONSTRAINT bcgvl_staff_details_pkey;
       public            postgres    false    223            �           2606    66427 *   bcgvl_staff_groups bcgvl_staff_groups_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.bcgvl_staff_groups
    ADD CONSTRAINT bcgvl_staff_groups_pkey PRIMARY KEY (cate_id);
 T   ALTER TABLE ONLY public.bcgvl_staff_groups DROP CONSTRAINT bcgvl_staff_groups_pkey;
       public            postgres    false    219            u           2606    66244     director_desk director_desk_pkey 
   CONSTRAINT     g   ALTER TABLE ONLY public.director_desk
    ADD CONSTRAINT director_desk_pkey PRIMARY KEY (dir_desk_id);
 J   ALTER TABLE ONLY public.director_desk DROP CONSTRAINT director_desk_pkey;
       public            postgres    false    205            y           2606    66276 $   director_status director_status_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.director_status
    ADD CONSTRAINT director_status_pkey PRIMARY KEY (dir_status_id);
 N   ALTER TABLE ONLY public.director_status DROP CONSTRAINT director_status_pkey;
       public            postgres    false    209            �           2606    66762    division division_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.division
    ADD CONSTRAINT division_pkey PRIMARY KEY (div_id);
 @   ALTER TABLE ONLY public.division DROP CONSTRAINT division_pkey;
       public            postgres    false    237            �           2606    66563     documents_bcg documents_bcg_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.documents_bcg
    ADD CONSTRAINT documents_bcg_pkey PRIMARY KEY (doc_id);
 J   ALTER TABLE ONLY public.documents_bcg DROP CONSTRAINT documents_bcg_pkey;
       public            postgres    false    233            w           2606    66256 $   emp_designation emp_designation_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.emp_designation
    ADD CONSTRAINT emp_designation_pkey PRIMARY KEY (designation_id);
 N   ALTER TABLE ONLY public.emp_designation DROP CONSTRAINT emp_designation_pkey;
       public            postgres    false    207            �           2606    66775 "   event_category event_category_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.event_category
    ADD CONSTRAINT event_category_pkey PRIMARY KEY (cate_id);
 L   ALTER TABLE ONLY public.event_category DROP CONSTRAINT event_category_pkey;
       public            postgres    false    239            �           2606    66828     event_gallery event_gallery_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.event_gallery
    ADD CONSTRAINT event_gallery_pkey PRIMARY KEY (photo_id);
 J   ALTER TABLE ONLY public.event_gallery DROP CONSTRAINT event_gallery_pkey;
       public            postgres    false    241            �           2606    67010    events events_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.events
    ADD CONSTRAINT events_pkey PRIMARY KEY (event_id);
 <   ALTER TABLE ONLY public.events DROP CONSTRAINT events_pkey;
       public            postgres    false    263            �           2606    67046 "   faq_mst_status faq_mst_status_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.faq_mst_status
    ADD CONSTRAINT faq_mst_status_pkey PRIMARY KEY (faq_status_id);
 L   ALTER TABLE ONLY public.faq_mst_status DROP CONSTRAINT faq_mst_status_pkey;
       public            postgres    false    265            �           2606    67059    faq faq_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY public.faq
    ADD CONSTRAINT faq_pkey PRIMARY KEY (faq_title);
 6   ALTER TABLE ONLY public.faq DROP CONSTRAINT faq_pkey;
       public            postgres    false    267            �           2606    67179 $   feed_mst_status feed_mst_status_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.feed_mst_status
    ADD CONSTRAINT feed_mst_status_pkey PRIMARY KEY (feed_status_id);
 N   ALTER TABLE ONLY public.feed_mst_status DROP CONSTRAINT feed_mst_status_pkey;
       public            postgres    false    271            �           2606    67170    feedback feedback_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT feedback_pkey PRIMARY KEY (feedback_id);
 @   ALTER TABLE ONLY public.feedback DROP CONSTRAINT feedback_pkey;
       public            postgres    false    269                       2606    66385 &   former_directors former_directors_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.former_directors
    ADD CONSTRAINT former_directors_pkey PRIMARY KEY (director_id);
 P   ALTER TABLE ONLY public.former_directors DROP CONSTRAINT former_directors_pkey;
       public            postgres    false    215            �           2606    66848 &   gallery_category gallery_category_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.gallery_category
    ADD CONSTRAINT gallery_category_pkey PRIMARY KEY (gall_cate_id);
 P   ALTER TABLE ONLY public.gallery_category DROP CONSTRAINT gallery_category_pkey;
       public            postgres    false    245            �           2606    66899    mst_rti mst_rti_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.mst_rti
    ADD CONSTRAINT mst_rti_pkey PRIMARY KEY (rti_id);
 >   ALTER TABLE ONLY public.mst_rti DROP CONSTRAINT mst_rti_pkey;
       public            postgres    false    253            �           2606    66919    mst_sub_rti mst_sub_rti_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.mst_sub_rti
    ADD CONSTRAINT mst_sub_rti_pkey PRIMARY KEY (sub_rti_id);
 F   ALTER TABLE ONLY public.mst_sub_rti DROP CONSTRAINT mst_sub_rti_pkey;
       public            postgres    false    255            �           2606    66930    mst_subs_rti mst_subs_rti_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.mst_subs_rti
    ADD CONSTRAINT mst_subs_rti_pkey PRIMARY KEY (subs_rti_id);
 H   ALTER TABLE ONLY public.mst_subs_rti DROP CONSTRAINT mst_subs_rti_pkey;
       public            postgres    false    257            �           2606    66464 *   organisation_chart organisation_chart_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.organisation_chart
    ADD CONSTRAINT organisation_chart_pkey PRIMARY KEY (org_id);
 T   ALTER TABLE ONLY public.organisation_chart DROP CONSTRAINT organisation_chart_pkey;
       public            postgres    false    225            �           2606    66840 "   photo_category photo_category_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.photo_category
    ADD CONSTRAINT photo_category_pkey PRIMARY KEY (cate_id);
 L   ALTER TABLE ONLY public.photo_category DROP CONSTRAINT photo_category_pkey;
       public            postgres    false    243            �           2606    66887     photo_gallery photo_gallery_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.photo_gallery
    ADD CONSTRAINT photo_gallery_pkey PRIMARY KEY (photo_id);
 J   ALTER TABLE ONLY public.photo_gallery DROP CONSTRAINT photo_gallery_pkey;
       public            postgres    false    251            �           2606    66494    product product_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.product
    ADD CONSTRAINT product_pkey PRIMARY KEY (product_id);
 >   ALTER TABLE ONLY public.product DROP CONSTRAINT product_pkey;
       public            postgres    false    229            �           2606    66483    production production_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.production
    ADD CONSTRAINT production_pkey PRIMARY KEY (pro_id);
 D   ALTER TABLE ONLY public.production DROP CONSTRAINT production_pkey;
       public            postgres    false    227            �           2606    66711    recruitment recruitment_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.recruitment
    ADD CONSTRAINT recruitment_pkey PRIMARY KEY (rec_id);
 F   ALTER TABLE ONLY public.recruitment DROP CONSTRAINT recruitment_pkey;
       public            postgres    false    235            �           2606    66949    rti_contacts rti_contacts_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.rti_contacts
    ADD CONSTRAINT rti_contacts_pkey PRIMARY KEY (contact_id);
 H   ALTER TABLE ONLY public.rti_contacts DROP CONSTRAINT rti_contacts_pkey;
       public            postgres    false    259            �           2606    67192    sliders sliders_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.sliders
    ADD CONSTRAINT sliders_pkey PRIMARY KEY (slider_id);
 >   ALTER TABLE ONLY public.sliders DROP CONSTRAINT sliders_pkey;
       public            postgres    false    273            �           2606    67261    tenders tenders_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.tenders
    ADD CONSTRAINT tenders_pkey PRIMARY KEY (tender_id);
 >   ALTER TABLE ONLY public.tenders DROP CONSTRAINT tenders_pkey;
       public            postgres    false    277            s           2606    66222    user_role user_role_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.user_role
    ADD CONSTRAINT user_role_pkey PRIMARY KEY (role_id);
 B   ALTER TABLE ONLY public.user_role DROP CONSTRAINT user_role_pkey;
       public            postgres    false    203            �           2606    66545 "   vaccine_supply vaccine_supply_pkey 
   CONSTRAINT     c   ALTER TABLE ONLY public.vaccine_supply
    ADD CONSTRAINT vaccine_supply_pkey PRIMARY KEY (vs_id);
 L   ALTER TABLE ONLY public.vaccine_supply DROP CONSTRAINT vaccine_supply_pkey;
       public            postgres    false    231            �           2606    66862 "   video_category video_category_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.video_category
    ADD CONSTRAINT video_category_pkey PRIMARY KEY (cate_id);
 L   ALTER TABLE ONLY public.video_category DROP CONSTRAINT video_category_pkey;
       public            postgres    false    247            �           2606    66875     video_gallery video_gallery_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.video_gallery
    ADD CONSTRAINT video_gallery_pkey PRIMARY KEY (photo_id);
 J   ALTER TABLE ONLY public.video_gallery DROP CONSTRAINT video_gallery_pkey;
       public            postgres    false    249            �           2606    66404    what_new what_new_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.what_new
    ADD CONSTRAINT what_new_pkey PRIMARY KEY (whats_id);
 @   ALTER TABLE ONLY public.what_new DROP CONSTRAINT what_new_pkey;
       public            postgres    false    217            M      x������ � �      K      x��]�s۸����+P��WvE�u9�T9vk��xc'����@$daB�v<�v7�K���=V꽱�ht7~}��jg�������	w�,1��N�(�/Y8a�w?�o�ue �X:,l���1�W�/�KzE2�<,Q�!�::6�nE�^���+�����m�c[��{3��_�W��Wo�λ�$z�v~�O T�M"�$��ů�'a�����f��o^��4��w����/����؝��ѧ�p���/;x��~~��!Iԁ����)0�ʗC>c����v�"�d2aX1n��'�K8�H�d,�_�D�}�u ��Nى����m�}<8�dY��d�#�3��0r��$0�w�Ox\t�1<q0A�WF�'��F)��	I�ǾL��ca��$eG��YCg`�A�9����`D�@��LB�/�]0�2YE����X��aı���|��jL.�6i��S�{�0��i6���a��*���@g@\�J��K��R�>� i{��q��|6#jF�Yȿy*a��G��p�Z��B����̈́']��0�=[� L"�r?)�`��P�lG��1�D�J�m8���&1����N͈]��"�J�CK�<>�3�m~�A�@0�}��9��/MM̰k'<��6��6��L��[�Vj�N{W7޾�q����$�9��^�YO1�P8�|y�Eny��s}{�=��@���2�~ �4��<�t�1�L�2��qx.�0�p�����F�8=є�U5�^�8��.�iF-L���-����_���)H��Χ��A��t,�y��N�v����E�D�2jK8N�";Ia�A�H#I*�,e''0!v�HS~&��`���0�8�Φ��0��z>�g��L�|Vz��8$�����0F>5�ƀM�&��K��0?H�	&j���2����v���	҉8	A���EPr&�?��s`,��1�u���~?9��gI�zE~�nwʃ3����g���z����Gm��ź�o�j�Uj��Yլ�$�JP��hຏ��y�0(j�MJ����i鶙& �|�����(jm� G;���� � ƽs��4ɵ�_`�b�]�Q,��]2N���"_�¯���<���<�4k������/���8�a� ����j%�/i�ڍh�-.�t�#�S���p^���+m Y����FQ�� JZ��=��|-Q�Yݜ�y�E#SN��rj���!}H 0���k�Fኄ0��s�hh�K�����O@�\t�[,t�,.:���s�DW�(f�/I*�Wk�~x���0ք���L�����o�
ZQx�}i�99��$�� ���ZS�vh����v���౗�^L�;�#���8xH�b�+�/��)#�t�|&�Y@��.sc���,|�S�)yk.�8���
�Ҭ-�m�J�I��p@Bq�mx��ޫol*�7�{�E*��Vw�o��s��|�[V�󗑞n���4u�ș�"e;�c {��3�����!A������آ9N�͵�7^n��~�~�G���b�T�W�t	09��0,�.�ZW��,JgB(9�*2w`�������KhO4!����Xp����������]���{V('Ʀ+ ��,N@�0PE~��kZ����F����/�]��~
:��a�
��)�DY�/Y��0�$����|��"�+K�0�@��a�	%>�/5�k���ZARz���(%-OG��q0�2e`�Sr1�%Y�_���4��d�J�l�1��v\ԕ�;9���+Az�r��J�o)�N[©�g�t�u�N��聗N�u���k��Q�}m�Vw~}�i�����q�]�/�|c�����R�#mOςm�hy�j��}[v�t�=꟞���z��~�@� ��J��~��iw;f�c�et�����g��|qS��z;��ֻЃ��͜��4^�&�.��-�w3Kށ�跆�ĻEC%r,���<6̓�px�m�6��S�<l�l�?�]�ov�OB5�j[����w��f�ն��N��=�F�v�ݹ?ͽ����OEs��v�O������B��i����y �z�S��m�{�σ������^�� >w,�y2���`	�á�~2���`	����<lY`��f�ݲ�>-�V�z ;h9��Ux�[�oe��۟C�yb��b�X`�T	�<�yY:�	:�n���LTa����O�Pظ�w���O^��",AaZ���	$�|Se��Vn��ya۴��)�@��X`2����
	��L�C��}�K&�RyZ�/UX�\���IxU���+�i=k��D�Xr�1(���n�kl@��x�l�`%�ө�Ԑ���S�ʍEY��`��B'	0��|�(F?�)>���c�����&"�x�d���|���T�F���e�|IQ'���˩�S�(��8炋!�5�/(�ƂK��Q�<�QRqSK*	U�z[��|,y�Y������py�hLD�H��R���>N<���,K������\�����~��� ˼�_�q���w��9�#
��QU �D���,��Ē!�]S9�"���.A%�i�0�0:�d�FO* gX��T/�Ж+UΩ��Bh� p,ԓ�)�@e��qIB���A�:���bx�L@�I�-	�N�](TE��J�[T�@���60�U�(�������E�c��]LC�?�B%ۀ�0�W��9.2P��뢮m�	������[,ܰPgD�b�/q�*-T�K�2�pLG�c�|'$�1�'}���V`0&�L��tFfd*���E᪞��S��c��O�e��yL9,�S�����L�6�{ǧۃ����g@%ۢЗa�m�6>�����M����zO���@d����5��D�f�� 
�����zs�`v`.�J�TkRJ�|����L�sY���֣�=L.`TÎ"*,�)
X,C)�Te#���dJ�)�K���s�H�e�:�Ң���f��r؅����Y�ڋ�eO��/N�����T ��I�(�7]z	{-l-�s����L��j��)�k�f3|�e&R�k_`������:݌_�M��)K�����r��Q>��D��T��q�9���P�M)���#PKn拔X�����1�Y
�˔�W\�b�	�I�L=v����3bg�|B1��*�.���2��2���Ŋ���@��W�i�0��邮�4�{j� "�0������\f����b(��U��Z�Z�C݊�"�wσ|!U	[%�`#�B:4TB�E���Mz
5�=IC��[ g�s�+�U}Z�A��Ψ� 
�;������ab�R��J��lg�wRe�V�3����+�L~_U�>�
�ܼ=Op��ْ�W��K�$�.:�"��������X�B�Qsȅ�hu�B@��B��ӭ�<�7����tޗ��ia��9�	���~̟��ѧ�����ϟ�އӝ��	[>��v?n�6� �dI$�2W_3�[��#�d�d~6�L�)4����ն{[�V������Ꚗ�a=:Hȱ�X�膪*��K_W�p�F%J���I5iE�"Db�	׳!֖��ϳ��6$-�����k��@֚�����D�l���u�⋙�%-p5�A��Zt��%dً�3u{7L Х�P�ҷm����Ur���w�1J?p�b���� X�<��7G��Y����u�x��";¿�$�<>�A�mq�G`��l����wV�Z�3E�\��4�P���ee�a���~���g����-]�����8�/R+`(=P_�<v�ىnz�v# ��w�kQ��=(8յA�I�;�-{��'{����h�L�ċjΫJ8UK�T^ �8�с�+���P�����V NDk�e
h�Vh�&��|��� b~|��>�,	O���z	��ҷ�ʕU8>O�*e���,���1��Mk���*�-4�G	���V�����~L��d���$�f<K��R��A�Z��;v���(J��n��n��X��ɡ{��佊��*j�,�vU���Η�Ļ� {���������ڠT��ސ��    T�HVU黐|s��'�kqT�u��WRJ��R��*H�M����C�>���E���K�HZ�B5�2�ڔ+<�yڱ:W3Uݼ+Wo��L���ӥ���0[�6�?���g~����+�m�5�c��E�\���h��"es?�vvG��dG�pSOq�F��t�~e��݇�7M*��K#�<O0�4:À)�<�D@D��%��`�v��o��̗:G�n�O��\��LG�Do��8@���u�cwJ���cʀ���֤��w�(K���}gn��¸~'I2��ͯ�_vLŧ�s��R��쓸`{�b5�N���)���/,��,j��	�*��-�C�:Q�x�[�˃��H蝇n1��J<�b�D~+�«WI�"���w}N=�d��T�y�xH�9hiL>��d������h���ї�Ѝ��ѓj�Pa���/���9@�+�i���6��ɭbρH��9�,������׈|����(�@r��b&�hQQ�XT��"2����T�S�E�bJ�@7*�"S����]4���L�zA�u@ah�9��GOy�%6fR����bI���WkD��6���"'��r��u�����B��.�	P��u�f�>�׈R.��r~`i�#5����-�\�d
���c#�iq�2ȝ��ܸ�B?��*J ���h'R�.���BU!	R�1 1ϻ���]TAt�n_���J�lli'����4�Y\_<[h�V4s�Lm�P���ԋ�W4yEMyY�b�b�g�vQO��~��;��x8:�c�6�<M����&A�A%��/B�*�fI��pa�ހp��id�y�	e+�T�mT��8OUg��Ru��&.)�Zr��� W{�rT�:�ߛ7�`��vpx��DPI�0�L�\�ˣ(������c��c�S��fU�K9m�ʢb�o��)�>?��J�%�`+�t�fp?�2�r��Ut��V�t�b�2H8Z`�=4;&�%$
<	�x��O
:�%��G�E�D���K��dx����9f���W�b��gZ��6Q���(_ߴ(�`��9���  u;9I�R~`6OR.�,u��tɽ�&lp'_ˮ�t& �Ԫ�,�~e��Y)0���M��G�yw%�Q%�R2�Ì	y���a�A2q��"����>��+]e�U�2��E�I��*=!D�R��K�6�P�Ͳ��&,��B��Ԟ&2g�I�R�St�KI������Nu����Jn�����wMq�Q�:��j7�m�*i����1VA��EU���H��b�->+ON��^ P!�k�%'P�):�=�J��QP�~�(mo�[�;�+�$���94�9T�X7O�����2�ǹ�j�K>6i#g�]���h��@%�t������"8�gjz-�����펽� o��a�.�m�y���㫹M����e�K�9E��b��8�+���4Wo5֥}���[��򎺰/�
�ף��n�<((���ʪů�B�;�"���:U>q� j0���NE�W����JmO̗��ږ���c��F �!N@�-V�櫍����bV\�Q�[w�Zo��lw�f������������z�ة/�������Ԋ��?p���A�?e0֟2P�A b��eݜ��j6���T��R��z�w�V�u|��Yu�hnTԃOB��;��-�ƞ.��Hܬ�S����Er(1{A� eN�,���,z��w�m��cvkЯp���ˇo��iu��f��Ό�o<�)��vbZyu �s�qp���Zʉ~T�ю�����	��Ψ�z4�gnr�M�W>G{�����ꀭ���W��_��*�+��N-�@2�/�H�/�e�e��5�����슱�ՉŘ�A;��.4ơ�-��4=�8�*����__�enߩn�C�ӱ̮^�)��y����4 �~�yg"Šv��q'ڗ,ʝ=��(�G��4�L��܀{W���C��/��9��~�6{��*>��}�p]���T7H)�v�t���W�ʒf�S�0������A4U}���]z!6xN�5��%W��|Σ8&?N4q$ݾY��Y�Y��4}�3��~mu��t:��@�a� ��f��)�_���8�Wo�P�n�
��Ʋ]�1/��1�J�m8=�Y��!l�,�Z����4�4C�1��c��v�����OEHa�l۰V8���5:+$�j��%Ch�uꀬ���������>YF���i軵��~��TghX�Ԭ����b���&ة�J5�b��+$�f���l���t���;5l�Ra�vj�p;���B��nO 5��S0�Ԭ���Z򱥕ة�c;S}���`��S=�ZaxY�S��>��N9�3|�v���,��N5;�r��*Ϻ�Ʋ-`a(�ی��g���xl_�v�X��K�6F��=~$~#^�
mv�H-�2gC�T߰������+����`��h35l���4�U�f[�^U�ԠoX��B�4S��l��ӛ)Оr�0Sh�W8��v걋��1S]���R�?��3�o4�>}��M�YoV�b��nSU��X��C�n�"
gX�v��PA�А�T���p`\s��Sˏ�X����n����NܭrA�h�ǖܽ��u�N3l�Z����WX%+�T�Xe�,�S�4���Ju1�?|�I��&�(��<��{+Ճ�5$�G՟~s�e��JWW,���9b��F�	Y���oc�V����(�o��>��Eب���Fu���?��
��zi
`��W��<�:I=���ۮ���@�nKˠ		?,u4!᷶Q7ب�z��Q�D]Me��l�}+��*1�w���C�x�](��]���({��Kn�z=p�6��6�jc��Tޗi������@j���74��,��=���>�6�R�0=��#ի,)^mEj�K��F�F�g;/�F�	vͰQ������#6h�t	qmߖ��fm�����j�U��U�~�@R
�rBz!�j������VK�ya�j�ы�0VC�����+u��2~Cc��u���+��A��C�HY����zΦ��lWa���o�r���1Wv��w�ܫ@�^�w�d#D��\��ճ6W�Ol^��X�3��xqެ�s��?�R�j�5��'Xdfڽ�~0�A6�A����?��-�p�O��:۶c�{��ޫ��<2?�z�Y�3iV=ҚNv��:Zi�0�0��8L�pFW"�ၪ-���$�q���m�/�'�__�i�:oԗ	�o��p͓�[g���B���7�u:�M��,9����xC�㺃/�^��m���k�z��*���>Pob���1O���Q�
;�������`\:n������m]�<����	L _�����x�kʿ����x����)צg'��g�u����(냚{�fv&���b}�|��ӱ�xb3h�����<u�"1X8N������`�xpt"PaA�g�챍�p6�����l�3vr�C�_���g7�@���T������^��@��O.vK]ד���v��p��&�^+�Mʾ��[�_���O&�\?^=z�r�7���d�Hn�A�>��\�f�l ��e��	x"2	�e[��P>xJ��o3��2/LD����<;�4�_��=��
~�]Wntv����`��?��V�w\hCk�2G�)�و�1�`	�ө(�o�ϚJ���Qm��'������x�=k�i�|H0�%�)������c��n��K��x4�L�\�(��S��6�0��<���Hu&9:��l	���6��������X���~��0$���(K���V�㏨ȻF��<u�@4I_$)p,�^��Z2v�O�/j����bBb4T�<5��ڎ*g�T�m�����=��Q��\�פ�u��7�D/�j��{��}��E��z���}�i�+N�C���瑠<�]Vt���݅��e�.�b�|OYW13�?��fS��\-��P@Uc���.`����}�dI�K��U��{f��s�,���q�lb��?i���@-�t�g݉Ok�T�b�#�bbD���5E����ؽ��O�;n*�e*E�T������-�b����� �  E��G�˪<Wk��Z�Q��"��	���,S����|�m��*FF��6���t���L��8�dQ�V��Q�I�x���Y�Q��2�Ra���<ӏ��� ��S��.������h��>E圸�HE�*d�ι����@xw�<�1�� �:���p3��;�y?�{��TD��g(l*�UP�g�=���$�y	4l���]��1�� ��������|>HtG���z�b�u�V����d��,
3_���˿2����t������������_;:?�#��tU��n?�o��b"Z���m����ͻ����ѫF�����(4X;9k���83���K�5��<,v�X�b���a ℁dhB" [�0-2�ݐĲLk%/J�6~1~%/JN.$n���f:*7�䉖4d�``w��[C��|Y�XE�g��Q�k�a�M�����sy�}̧�)�T'S��d����m�'�}�͕i�S1��ۖ�)p�lZ�<�?����N槸O�h����y���	������T�y?wӀ5n]� 8:��NT�z���q���V�s�E6ms� ��������s��(�5�ܔ����׿aN���n�����莐30;͇�u(����5}>��s�X�.�dT�5���(��7g�A�õ[|��X����l��d˶����������m�����;��S~��?�/����}*�      �      x������ � �      �      x������ � �      |   (  x�M�KO�0��ɯ��ǻv�	A�P��8!N�8�i-%N�����r���~�9dm�=�,�n�����ĊsY��\=@���՚������ӎ���t)��<{���MO��h�+������ǐ�rr�d�s!_�73���{ �s.0�Ÿ�o��t:��8n{Ǻq(��K7�����;
�4�$A�
�aZ�@Z��h�T��
�q@���)x�()�Z5T~$�r����|!��,t�`m�ҨbKqNU,�����k�r�;{v!}�@�T�+�������m^�����rh      U   �  x�e�Ms�0�ϫ_�S���qTlҒ"�����8"فH�,���ĝ�,���g%�F�\4,�»�E>����~�_~���+%�5�@!����A_6���6�3��ͼѕ����:�b0�-��[lm Q�+]G$%Ҷ}uؚ�����5��.�:lxǎJ�K�^m�<��U$�.���jv�_�.Z�l]����4�.A8|�����z�,�ς\ϋ�C�E�C���m�*B)R����[��!o������;��)ydJ��]�$�!3�d+Xv=�&����T</��G�x��a��-(Z��YK#2�A���*���������2��"yh��n�f�r�4��YU�ni��dL�?5��J�|
�>�W�G�Ag ��6��KZ�vK��y����      W   6  x�uV�r�L���'���D4&���꫽�,|2�Ĕ��{c�@n���t�>�=}1��Ԕ�p_|�M�^�"X;��2*M'�<�y����t��#�+��$'cUf����Ô�)W�	/��l�2�;��HS����$�b������(��X�ڽ^Wl�'@$^p/��=1�����u+p�7���{,¹�X��3f@�TĻi6M�� >;o��X��
��-0��m7��V�Q�Q�4���f63�1�Z����R�-)�sn1���.�]�dJH�ɑ2����y�kbB"+�H}K-������197��]�Er��˖`�O�����m8$�re��:E��D����D2.�[���3��z�Ģ̹�P�InBu,C��v�n�9Ѱ ���ț�P�������m/��a��ps9�L3��6܆�\ �k2�	D�B�f]|�w����:�����5���)N�&��+s�/�C"<F�8���q��r��R�Rh$V��တ��Km�|p��QZڨw:����������!D�;�L��{p��,��?�:�������(u����}��5�>�_�J<ߟr3M魬����������־���
��(�%����J+��N����ۈ�c�>5���HFcx��&�9)��A�ibu���U����I�ᷠ�k��&g�` ^����Թ�:��#1��y!��)Z�|�H���8���܂��h���@i�m�\�����^����A���6Ӛ�D�k`�|��*߶0m󼚧�U��`���I�ٮ�^XE:��h�X�gב�L�aGe[R���m�� ��"�W��!~ɺѸZ��cB��&܃��Rc+6�~�/�χ��93T��v�̼2�N���鱫JW�0r��8�b�|}������^���z��1����L�Ñ�'�eT�v<�^�����/;��X��&e���Oy��ktz}N����y�|�\��Ś��2$:��1�Cy�g�I\�}����k��3�
��v�}Y��	�9�UF��c����t:� �q��      S   E   x�3�t��u��\FP���{bUjIIj�&H��=��.嗟��*��7��?j��s����� �rA      E   	  x��Y]o�8}Nч�l�vgv&m&�c7�;q���X�h��TIʩ���\R�e����X�"�"y?�=�����h�w3������~6��.�o�FGiD�9b�����<?xf�����杉H�f�	��XF<e3��:իMk6���=�sƾ�/��7v!�T?��Z�\�.,�H+���n'W7W6+��m:��v��y~������HψXNSyvjs�X�rk{����mR1|���o/3nVR�a���[���u��.ް� wo_�]	3�dc���`��,�Zp�+��o�ߵV�ɨ&9&�O��3#k���u��a�}zL朝ò����>_}`c��|�wR��F�	���2Y`����?a[�أ"V�1�N�Svk���3UN������&�ʟ��T�xon�X�7ZNT��Z�N�\m��*h�<<l���{���4�
M���l�%��H��u*??
 �� �W�6���+��l�U��+����fC���A2��
�
�؝p8`Ykr{�f�xI%(:qA�Vu�2
v�}�����-/��W2�Q�)	<6�8���۽'q;FMy�yl�'�w��B�ޟ��~;O�q,7z)SA��y>��t����V����/���g��K��2��`y�+��){i�3�6�`Nә:����p(��gS8��}���V7����589�E~�D�����o�#��l�yДz���2�=B���/Ri�'� �38��W��3[,�eP\�2��j3i�R(AY� �"Jsa��Lи���Y�ba���T�:X���U�.x&��,�%7��K�F!���LU,y��S�ju�����7�RXil�؝fY�p��"�yꍹ0B|�_F"��!��J��YV(�}���������}��Z�e�q"�8�:fw�5[�D�����f���\Tխ��٪�x
mkQ�/�̉���|�i��y���}B�"�1%-l;��.��n�������& ����4;	ݐ�@�)�.����!Sꕱ_��P�l�
�5�O���\��H	�#���]��Y�4�����x���Nۻ��D��k!wr�CF�L��_^W�8��b�2��H#�1㮤����E�~|�u���gċD<@̺H�텺?)��v�k'�U�Q)���XK:賘�1�	���� ���Ml{%�$غ G�N�	���/Տ&<�u��]8�lu��!�8R*���h��d%!�'�w��"��0t0�P0�r��Xg�tN �9³a�����R�E��[d*݆=;ώm����b���E=@�Ո�l�k�������)Q�`�d�����qGp@5ҩ�Ed-n "� ���HX�͋�_�a�THr�^�<�ː�Oug(�N��ިX o/�\,���dc"�&�D?�\�=�"�4-T��B���]���[��kh9�يI��������j^��b��º�9�<&0�H�$_�=6�\W��(���~ab���> ��\lm�R��	��>�#ebT�&��B4FK���Z�T6!̋L��?t'�9'�G�� CxjͯGm/��[j�2V���%��a�0"K�2Jj$	���-�ЍE延�u�O8�����C�iȨs]��.ȫ��ø���(P�HP\:6���+(�g~l%'j4_��Js���7U�Du������l��dN��������G����#h,h�e�o�<'�0�����j��^ �d�k'��4���\ЬS���q &�U�^��&d2GO�N���Y���l���R�WQ�p�Áa�x@?��w���,��&�Ovw��)C�1n%�Y�<��I)�|=(��!}%�1��	���H��5fB��K
?t �P�ۙz�M: ��!b�A���w�C���hKgL���7ϖѐ����\8�a+����5
3��:����A�FS�
ch�����.O(@?t��k�p�xa<F��6���R7u�7B[�/��9GVջjNn���9ߞ�9󡯊�k�\^r"JT��+ޘn���Du����#T��n�q���3�"9�l��|3��|Jk4�3�(4�$ax/Du�Ի�^�g��`�/�+8�h���<��L��y
�!X|�I����fCK"s��8}�1���J����9����e�Υ��:t�ل�Ɩ'cM��M�ڔ>�Vݬ���F��� ��ba�ߝ�2��('JJ�i�:�q���6i���c�)M(⹇01P##{eRgu{�����<��}�9�(���+t��SS�)���?����{���? ��X�      I   =   x�3����-N-*�LN����v�2�)J�+NK-JM�	r�2�J-��B\�b���� ��      e   �   x�uλ�0 ��}
&7j凌�\���.�4���2����ą��s(���E;���t��:@1�)V)%	�
�	�,�2�4�}K���l�$e�ҹ~��96D"�t�d��]��^����z�l�ֽ�m�BS!	�i���wq��O9�g�O�� �sĕ$T��~pqD�      a   x   x�3�t��+M�QJ-�/*Q020�P�Q�
���@dd`d���^��V_VRV�a��W����,G?�PGN3s3C3KN��.H�d�.�&C3+c+#S=S3KK3�=... �(b      G      x�3�t�,JM.�/�L�,����� @q      g   �   x���;n!��=�^`�<f� i��Aaɱܤ��ͮܙ���/��v�=�o��z�KD�F��X�]ZQC)����bg�h����Jd`�F&0q�N	�"KH�$��B�Jh<�Z��{_��kf �ѡ�����Y|��N?�{�O!�#�K�%H�ӞEH�ǵ=[_��~������7�/�� �U����yY�5�~�      i   �   x�mQAn�0<ۯ���wm��cz�%걧H�RD	 }M8�"�|X��ΌQ�h�\T_5�}#P!��O���hp���ۇ$A�z�w��a*��XR~�>�>�A�J�Y�F�U���"2B�h���yU[N�2q$�غ�Т��ǅ=i���#��Y9���QK�����Q#䝱Z\��?���j��S��e����Sf#Y��**����}_v�{/���w���йڮ� � de����R�_��j0         @  x���͎�0���S�U�J�J�OA]i��_��̆͝Đ+�DW}��^��v3LE�i�Hd����9��|FSZM{��+�����"�G����$���,��P`Kk��%�Ԫ�w����$����2	��u�O���f�sK����[*M����V��������$�6�%�	JÖkZP��i��\UkA(s��3ݹI�����W�_�Ip�p	\�\nХsۄ�+.}J>8��h��dAM��tt<������h��Gi�ҙ�id I�M�&���iI�[ܡ�;�W�_a�����;5[�:p��AU\����@��?}�Wȹ���aJ���'0=6��t�q�#�T�: !�j}��*ԫ:��EO�܄dN�V��ƪ���t��_���'��5nc|�Q���)��]D��Y�����G%�^靴��-%Y�~��d���fC�0Q\� �Lg�z�]��\l�����<���-NXܭ��n''ro+�D���7��_�i��?���l�&j�W�L)Q:�������\��+�;��P�X�T����9��'9	�Y      �   �   x���A
�0���s�JE�j����ئtP�����Eԕ�~���BMM�u�T)��(�}@�]�WJ�5:����b��nʏ�	��>��8p�sE�/�֬�3��%��� ��7���� �Ѓ��;��0�e	�K��-�
�$3i������h      �   !   x�3�t)JL+�2�(M��,�HM����� ]j�      �      x�3��+JML�2�Q1z\\\ >�      �   �   x���M� ���)z�fJ`eo�K7�6)m���j�K��[��|���	�W��5���CLn^�%  ET��&���MgI�]�[A�̑`����6�1��:-���9�us�f8���0�+��}�nnq�G���T�E�F*mڞ�E
!�'�I�      O   �  x�m�Ao�0�Ϟ_���e�v ��I�bPL�*�	����R����8 u�=��獝j\�
u�#�/GR�@S��K�\�ְ,K(�{fR�q��1�8�r��Wmp�z���R㳡
��e�`)LB��4
b�sUX4K���R�-�gz����r�2�J�R�k�����]�^i��Ĝ�ܳBgL�4g�����f3niг��z����d��K�S �vCu�c��D�Ղ�u`m�W����M-N�e���N�@)Qԇ06B�Dq�Z=�������t��?��ߗ��r/U��J���#������뿥Ճ��Y��S���5}�
8 ��ō����(r�Z���l�b�c˱LIv��@�����M7����Y$y���C��}���ݟ\��v�@�[�BJ�
~! |��      m   /   x�3�L-K�+�OO��I-��2�,��/ɇ�9�2SR�`�=... �x�      u   �   x�e��
�0Dϛ��/Z��R���{Iו.�II6�������\�<���`�:��OL}r!/.q��r����d�1��;�ĸKZR���腶�N1��˔���A���h�,����x'a�Wu��1�	�Y9�      w   g  x����n� �g���d.����K�%��-RE0q��0N�>}I�U�Uǣs���`�񍴦��8����`ե �5 )!󴘓bR2Zb��^��uB�`1ԍWt�]���'Y�!�������(���*��pe����=�@9K/F��Gظ��V�I��#�GL�P��=8���$��^��W��u=)�
#"E�у�U�z]�Xl^-46��:O핕#�S.>�* K�V�Q�R����6����|�!���W��������鍿��������`����j��d>O1�y���H�s��9�/>��l�*��;v�ٷ	&�^u�n[4��pt��fU��%I��l      y   �  x���mo�6�?˿�������7E�:��ÀM�6��Hʅ��w$%[N�4�������;&��c��A�o�,�f�#��0B�����	�0���~8DA8MF�8����d���L#����\�~0M�A�$h�LxXjF�K�An1g�r_^�J�k�����a��Y�I�,_�h\c��!ÜIJ���˂�ʷE����e��f��L9G�8w�-iQq*]Ɨ�P��ZN�7��2�<W��~�7���A�� E��pzC�Z�~�+� ���Jd\�4ӕ���B%lj���^f��	�����NؘFӲ����[( �(J�1EvXnߢ���C���"Ri<�:�B�ʶT��ƚ�kk5k�as�p���X���Oz'� ��h%�{��b*z��e���Iauv梠�z��E%�^��6��bd+|/��}~�f�W��%-��]5��Riavm-g�ŏ���3m*�1��:�HD��7�v]�5f��y�5��>���=�}�����p��L�BA ���-�e	e���Fq�D��k��鰲4�U���w9�l,`�����̞CU�a{�#�`��]ΰ������[��DkmN��� ~�{FA����}o	�H�mZ�[G��)�cm<���&�(�Ó65�m�RZ��=�TB�s'@>�
�f���{�4�������3�	C~��T���ζ�;3�[�S���,\S�=Y�?�9A��pN݊0x�6f
)9�]l�HK�R�'6�{Jv�A��������/�!�X��آ&8��@?A�2�rϔ)o�S�p���j��f6Al%.��f��vHy���3v���J�.Ū��B{b���W~���[~�:?�= J4�p;�]J�Y���r�Ʋ�
�B&�aC��`C�0�ݙ6���)ʏ�74'���/!�N����Z���]T�f�{���2����1�'�{ہ����ݑ�ʨ������*���w��=�p���@��ø=+��7�洬t+����뗻ů��3��!`BVc�y�ϭ�|���L`���[V�*�9��1���!�z�q������}	�l�G�L��R�w��i1�s��:�}D9��Y3�
(k{)���E�-�]H,�i&�K�+�N'��ˠ����/��      Y   /   x�3�,-��OL)��OO��,N,�����/r��
��9c��b���� 8��      k   q   x�U�A� F��p
. ��QaL����������K���@��v�Hh���N[��z�A��i���?���=����
-=��[�t�)�Pּo|W�b��	Km^F)u^'      s   �   x�}ͱ
�0����y���%�4u(����$��RĪ�֡oo�¿~��w�w��\���� �D���D�D&ŹȰX����6�,���x]��cy���,)�l(��t�FX�9�u�!2+��1���w��I���$�a��[qPB��^6�      ]     x��W�O�8~��b��R�������r�J��I�����p��@��}c'��n���=�7�x<��7?�f���W��,SF�h0���>��˽;%�6mҹҍ4���l����R[��$��v\��ଙ��c�=�k���kwm��V�N�����TXG#S<5&��,��	%ق�T�A|���ە�J�N�wv	������ƽ����c'=�AY����d�����K�[*잏��T���-�X�ͱ2�,ʨ��w�}��5>��<״S	8$���Rf�JI��٤L���2�}�	�kT���dr�MP��2�-�~Ԫ޽,
:���F�PձН����wrA��T�!87R���Om�ǖcUMɻ����@*�W;�7Y�f�AB��t��P��8|}�A�T�o�G/7h��~/B��3���u�\!5�
3F�˚'�0&�ԵV2O�޵��  5^�Ҟ��4��z�n��I\7�~�!���Y� ��A����"�v�]�TU5F}OL�=�[�$��II�m�I��N��l<U���4M�� 61W>.���ԳU���Z�v" 1��V����F���ʚ�ý[������3
���}X���
 �!��$}��si�L@t�L��*҆�Ne�CLl3-�3md`��V\�ڗ�fch���e>��L�B=�-W��G�J|S���ځ�p��`�TQz� � 6�(��e������ప���ם }MV�����:��W�]H��;4�Zم���xB������d{�>��wO#���5�
����+��_������/H[N<dc�,-]�cF�ie,�EpA�(4�&���"��^�o�p+������9�����v_*@:u"o�g�n$�.�X���W�N�a��Fg�[w	y�m��5>��͍����toYw�ȧ1�G���}o�a�|�|n�R�����+T�}��3�E��*ޔ+P0��j}��s.y�F8ۣ�D{��(���2��7z+�n*+�#<5ߔV��HϪ��ZRT"t8+�|G��eFr���=A��� j`�@5k�0�6���*�����<�a0����B5S��(0�L��Ֆ3kb�f��D�7Qp=��b#�5ւ��垕�1@�� M6�oaT]������c
�Ͳ�=N�z��p����h��6�d�z��Ɂ��ħ�dW�"V�l4������4?/*ef�3�����ź����y<GwF�R�G�uyi�V��m�0:�껂f,9��,�W�8�V�{<�)t`��u�ݿ�%^���J@�]���a�"Ut
�A��9Wǉ�K>���~��Y����Ðc�γq"���%�SG�p�&�8�,ŵ���ϪXm��� >���E�y%LS �B�°���'�R�n�>N��Y)\X��O�dS�~�2���W���)d޲K�����u����K�bZ�	�DX�����(�^)��zW��W?A�	�34���xy�C����?��'^�5��"��7������׃�����r�      [   F   x�3�,-��OL)�/(�O)M.)�O�H,*1�+�K���2�T 6���/-N��* k3�!oS���� �4*�      c   y   x�3�JM.*�,�M�+QH�/RpL����,.)J,�,KU�OK�LN-�,N+NI�4202�50�54AfIK]�@<q����)���8-�L9c��	���L��L�,L��,�b���� �7f�      {   �   x���1o�0����+<��JB���5Ej$*�,��.��m�J]+}û|ғB�8�j?6=Y����yVUےu��b��f�}І�Opt�	1
!�sQ�#ZK��6^0xy�Rs9��*:ǌ��$y�e�$MWk �p���.-������E����=��:/*6f�|��:ݡx�T|0�쟘$Z����{��:��x�dH��e��k�uE_XHf�      �   ^   x�˱
�  ���
�P�N�r��V!",l������=�v.%]X+���y��"����X׼$y��~�q�O�?H��6��6h�}�.Q!^L��      �   {   x�3�,�/I,���SH�/R.-(ȩT�OS(HL���KW�M,I-�L�)�442651��4202�5��5@bZr�tA�9�y)z)i�f�f���%�e�H�-�Ḽ-������b���� z#�      A   n   x���C1��{��0x�4�R�d�2w���ߓ���B3DW�r�FRͲ�쓴7W\��{� ��YБF	���
�q��Ǚ��ǔ��Ӕ��3�*�����'�      C       x�3�tL����2�tJNW(-N-����� P[      _   >  x��Zmo�0�\~��I�Ԅ�Ix+ �бn-E��4��t`7q�(1}ٯ_��[�Z�����{;�rx��ߋQ�5�a�B$?�q���g-�2R���@�垖\�Q �v�x�E (J�L��1C�4�{\��N��x�C\���1	�	i�㓃�O{�v��O\G��'ಸ<�7�����e��� �Ŵq�_�4�r*��V5My��^r�fc��p�����A>@1u�WD)a���(�(��q��Ɖ��ho8��vx�����-?�T���(���A��F;���ͽ6�5scv�>;#ٝ���H�0!Y4�fro�R�(�I8A�@�����54�'�2!���)K��V�f�^(
�R.\�g��i�L��􇇽���z��Fݱ^�ĳ��Gh�u08:<� S���I�}��.��)������G5[�vQ�cB _���4ºa���ʉ��w��f�Z��`6��u*x�I~<��e��N�(�����pu�]ԛ^ARI%�F�HB�W���p4��Ԗ6*E�B~0���p�Я�
�$T��A�� "��`K��lZ�^��l�z��P{J����-�C]I=
Dl+�`k׀��
oZ�a~8��Bv��	X�J�m2"�E�bm"����S����<�����RU9��ʊ�?�5�
�$����f��K�_�%%��k�ՠ[�"c���`�$����!�1î��쬯a淥��G����,���t2bѬ�"k��1�Qڒ���{\5���3TYw�S������r���!&!�Yщ�0iX�a�۩Zf}脋҅Q*�~���      o   N   x�3�N�-�I�4202�50�52U04�25�20�3046�0�4�2�I-.��KGQffedbeb�glhln`T���� �{0      q   �   x���=�0 �=�?�}ި1LN&�%TH����A���|�iv��a$)�e�~��ʋ�҇ʟd���2/

 V�0�H�Qh4V9��dѡ����s�u��p%����0t��?<pdRa����[_����l�o�N��$�:�@����>����? ��_�      Q   �  x��S�j�0>��B�j���-�P�C��Io� lyF`KB�����;��b�қп|�>�rse�:h������A[3��z
�c����� M��ګ&@��k�k��L���M0��t�n��Ҵxm�����<�,��F�f���%�q���I\�m���~
3QӢ�Ϫ�js�L83�h��Y�x�j��Unۊ�yq�iF�B�y�=��'��sỻ7x� �R�),.l%����ئ�ńVu�H��(Ϟ��X��c��AȐ���)�����+/���O:
�<o�o��f5�	+)g��u�n���=�ڟj<U���EW��4%,��O�7N�E�����6Ai�w�A�����>�����Q�WI�q�"%e�f%������G���2/��Ti�P� 
���K^����d%Ʌ�9��B�p6R���ߍ1���<e�D?B�7���     