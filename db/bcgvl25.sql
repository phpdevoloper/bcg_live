PGDMP     4                    {            bcg    14.7    14.7 0   �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16642    bcg    DATABASE     g   CREATE DATABASE bcg WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_United States.1252';
    DROP DATABASE bcg;
                postgres    false            �            1259    16643    about_us    TABLE     R  CREATE TABLE public.about_us (
    about_us_id integer NOT NULL,
    content_id character varying(200) NOT NULL,
    content_description text,
    content_status character varying(100),
    last_updated time without time zone DEFAULT CURRENT_TIMESTAMP,
    content_updated_by character varying(100),
    archive character varying(500)
);
    DROP TABLE public.about_us;
       public         heap    postgres    false            �            1259    16649    About_us_about_us_id_seq    SEQUENCE     �   CREATE SEQUENCE public."About_us_about_us_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public."About_us_about_us_id_seq";
       public          postgres    false    209            �           0    0    About_us_about_us_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public."About_us_about_us_id_seq" OWNED BY public.about_us.about_us_id;
          public          postgres    false    210            �            1259    16650    about_achivement    TABLE     �   CREATE TABLE public.about_achivement (
    achivement_id integer NOT NULL,
    achivement_name character varying(500),
    achivement_year timestamp(6) without time zone
);
 $   DROP TABLE public.about_achivement;
       public         heap    postgres    false            �            1259    16655 "   about_achivement_achivement_id_seq    SEQUENCE     �   CREATE SEQUENCE public.about_achivement_achivement_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.about_achivement_achivement_id_seq;
       public          postgres    false    211            �           0    0 "   about_achivement_achivement_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.about_achivement_achivement_id_seq OWNED BY public.about_achivement.achivement_id;
          public          postgres    false    212            �            1259    16656    archive_events    TABLE     \  CREATE TABLE public.archive_events (
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
       public         heap    postgres    false            �            1259    16662    archive_events_event_id_seq    SEQUENCE     �   CREATE SEQUENCE public.archive_events_event_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.archive_events_event_id_seq;
       public          postgres    false    213            �           0    0    archive_events_event_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.archive_events_event_id_seq OWNED BY public.archive_events.event_id;
          public          postgres    false    214            �            1259    16663    archived_tenders    TABLE     �  CREATE TABLE public.archived_tenders (
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
       public         heap    postgres    false            �            1259    16670    archived_tenders_tender_id_seq    SEQUENCE     �   CREATE SEQUENCE public.archived_tenders_tender_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.archived_tenders_tender_id_seq;
       public          postgres    false    215            �           0    0    archived_tenders_tender_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.archived_tenders_tender_id_seq OWNED BY public.archived_tenders.tender_id;
          public          postgres    false    216            �            1259    16671 	   user_info    TABLE     �   CREATE TABLE public.user_info (
    user_id integer NOT NULL,
    uname character varying(200),
    upass character varying(200),
    role_id integer
);
    DROP TABLE public.user_info;
       public         heap    postgres    false            �            1259    16674    bcg_users_user_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bcg_users_user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.bcg_users_user_id_seq;
       public          postgres    false    217            �           0    0    bcg_users_user_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.bcg_users_user_id_seq OWNED BY public.user_info.user_id;
          public          postgres    false    218            �            1259    16675    bcgvl_contacts    TABLE     
  CREATE TABLE public.bcgvl_contacts (
    contact_id integer NOT NULL,
    con_email character varying(500),
    con_phone character varying(500),
    con_address character varying(500),
    map_embed character varying(5000),
    con_status character varying(100)
);
 "   DROP TABLE public.bcgvl_contacts;
       public         heap    postgres    false            �            1259    16680    bcgvl_contacts_contact_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bcgvl_contacts_contact_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.bcgvl_contacts_contact_id_seq;
       public          postgres    false    219            �           0    0    bcgvl_contacts_contact_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.bcgvl_contacts_contact_id_seq OWNED BY public.bcgvl_contacts.contact_id;
          public          postgres    false    220            �            1259    16681    bcgvl_staff_designation    TABLE     �   CREATE TABLE public.bcgvl_staff_designation (
    deg_id integer NOT NULL,
    deg_name character varying(500),
    deg_code character varying(500)
);
 +   DROP TABLE public.bcgvl_staff_designation;
       public         heap    postgres    false            �            1259    16686 "   bcgvl_staff_designation_deg_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bcgvl_staff_designation_deg_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.bcgvl_staff_designation_deg_id_seq;
       public          postgres    false    221            �           0    0 "   bcgvl_staff_designation_deg_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.bcgvl_staff_designation_deg_id_seq OWNED BY public.bcgvl_staff_designation.deg_id;
          public          postgres    false    222            �            1259    16687    bcgvl_staff_details    TABLE     �   CREATE TABLE public.bcgvl_staff_details (
    staff_id integer NOT NULL,
    staff_name character varying(500),
    deg_code character varying(500),
    cate_code character varying(500),
    status character varying(500)
);
 '   DROP TABLE public.bcgvl_staff_details;
       public         heap    postgres    false            �            1259    16692     bcgvl_staff_details_staff_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bcgvl_staff_details_staff_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.bcgvl_staff_details_staff_id_seq;
       public          postgres    false    223            �           0    0     bcgvl_staff_details_staff_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.bcgvl_staff_details_staff_id_seq OWNED BY public.bcgvl_staff_details.staff_id;
          public          postgres    false    224            �            1259    16693    bcgvl_staff_groups    TABLE     �   CREATE TABLE public.bcgvl_staff_groups (
    cate_id integer NOT NULL,
    cate_name character varying(500),
    cate_code character varying(500)
);
 &   DROP TABLE public.bcgvl_staff_groups;
       public         heap    postgres    false            �            1259    16698    bcgvl_staff_groups_cate_id_seq    SEQUENCE     �   CREATE SEQUENCE public.bcgvl_staff_groups_cate_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.bcgvl_staff_groups_cate_id_seq;
       public          postgres    false    225            �           0    0    bcgvl_staff_groups_cate_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.bcgvl_staff_groups_cate_id_seq OWNED BY public.bcgvl_staff_groups.cate_id;
          public          postgres    false    226            �            1259    16699    director_desk    TABLE     �  CREATE TABLE public.director_desk (
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
       public         heap    postgres    false            �            1259    16704    director_desk_dir_desk_id_seq    SEQUENCE     �   CREATE SEQUENCE public.director_desk_dir_desk_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.director_desk_dir_desk_id_seq;
       public          postgres    false    227            �           0    0    director_desk_dir_desk_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.director_desk_dir_desk_id_seq OWNED BY public.director_desk.dir_desk_id;
          public          postgres    false    228            �            1259    16705    director_status    TABLE     �   CREATE TABLE public.director_status (
    dir_status_id integer NOT NULL,
    dir_status_name character varying(200),
    dir_status_short_code character varying(200)
);
 #   DROP TABLE public.director_status;
       public         heap    postgres    false            �            1259    16708 !   director_status_dir_status_id_seq    SEQUENCE     �   CREATE SEQUENCE public.director_status_dir_status_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 8   DROP SEQUENCE public.director_status_dir_status_id_seq;
       public          postgres    false    229            �           0    0 !   director_status_dir_status_id_seq    SEQUENCE OWNED BY     g   ALTER SEQUENCE public.director_status_dir_status_id_seq OWNED BY public.director_status.dir_status_id;
          public          postgres    false    230            �            1259    16709    division    TABLE     �   CREATE TABLE public.division (
    div_id integer NOT NULL,
    div_name character varying(500),
    div_content character varying(50000),
    content_updated_by character varying(500),
    created_at timestamp(6) without time zone DEFAULT now()
);
    DROP TABLE public.division;
       public         heap    postgres    false            �            1259    16715    division_div_id_seq    SEQUENCE     �   CREATE SEQUENCE public.division_div_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.division_div_id_seq;
       public          postgres    false    231            �           0    0    division_div_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.division_div_id_seq OWNED BY public.division.div_id;
          public          postgres    false    232            �            1259    16716    documents_bcg    TABLE     l  CREATE TABLE public.documents_bcg (
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
       public         heap    postgres    false            �            1259    16722    documents_bcg_doc_id_seq    SEQUENCE     �   CREATE SEQUENCE public.documents_bcg_doc_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.documents_bcg_doc_id_seq;
       public          postgres    false    233            �           0    0    documents_bcg_doc_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.documents_bcg_doc_id_seq OWNED BY public.documents_bcg.doc_id;
          public          postgres    false    234            �            1259    16723    emp_designation    TABLE     �   CREATE TABLE public.emp_designation (
    designation_id integer NOT NULL,
    designation_name character varying(200),
    designation_code character varying(200)
);
 #   DROP TABLE public.emp_designation;
       public         heap    postgres    false            �            1259    16726 "   emp_designation_designation_id_seq    SEQUENCE     �   CREATE SEQUENCE public.emp_designation_designation_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.emp_designation_designation_id_seq;
       public          postgres    false    235            �           0    0 "   emp_designation_designation_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.emp_designation_designation_id_seq OWNED BY public.emp_designation.designation_id;
          public          postgres    false    236            �            1259    16727    event_category    TABLE     *  CREATE TABLE public.event_category (
    cate_id integer NOT NULL,
    category_title character varying(500),
    from_date character varying(200),
    to_date character varying(200),
    created_at timestamp(6) without time zone DEFAULT now(),
    gall_cate_id character varying(100) DEFAULT 1
);
 "   DROP TABLE public.event_category;
       public         heap    postgres    false            �            1259    16734    event_category_event_cate_seq    SEQUENCE     �   CREATE SEQUENCE public.event_category_event_cate_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.event_category_event_cate_seq;
       public          postgres    false    237            �           0    0    event_category_event_cate_seq    SEQUENCE OWNED BY     \   ALTER SEQUENCE public.event_category_event_cate_seq OWNED BY public.event_category.cate_id;
          public          postgres    false    238            �            1259    16735    event_gallery    TABLE     �   CREATE TABLE public.event_gallery (
    photo_id integer NOT NULL,
    category integer,
    photo_file character varying(500),
    created_at timestamp(6) without time zone DEFAULT now(),
    photo_caption character varying(500)
);
 !   DROP TABLE public.event_gallery;
       public         heap    postgres    false            �            1259    16741    event_gallery_photo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.event_gallery_photo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.event_gallery_photo_id_seq;
       public          postgres    false    239            �           0    0    event_gallery_photo_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.event_gallery_photo_id_seq OWNED BY public.event_gallery.photo_id;
          public          postgres    false    240            �            1259    16742    events    TABLE       CREATE TABLE public.events (
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
       public         heap    postgres    false            �            1259    16747    events_event_id_seq    SEQUENCE     �   CREATE SEQUENCE public.events_event_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.events_event_id_seq;
       public          postgres    false    241            �           0    0    events_event_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.events_event_id_seq OWNED BY public.events.event_id;
          public          postgres    false    242            �            1259    16748    faq    TABLE     �   CREATE TABLE public.faq (
    faq_id integer NOT NULL,
    faq_title character varying(1000) NOT NULL,
    faq_desc character varying(5000),
    faq_status integer,
    created_at date DEFAULT now()
);
    DROP TABLE public.faq;
       public         heap    postgres    false            �            1259    16754    faq_faq_id_seq    SEQUENCE     �   CREATE SEQUENCE public.faq_faq_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.faq_faq_id_seq;
       public          postgres    false    243            �           0    0    faq_faq_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.faq_faq_id_seq OWNED BY public.faq.faq_id;
          public          postgres    false    244            �            1259    16755    faq_mst_status    TABLE     x   CREATE TABLE public.faq_mst_status (
    faq_status_id integer NOT NULL,
    faq_status_title character varying(500)
);
 "   DROP TABLE public.faq_mst_status;
       public         heap    postgres    false            �            1259    16758     faq_mst_status_faq_status_id_seq    SEQUENCE     �   CREATE SEQUENCE public.faq_mst_status_faq_status_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.faq_mst_status_faq_status_id_seq;
       public          postgres    false    245            �           0    0     faq_mst_status_faq_status_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.faq_mst_status_faq_status_id_seq OWNED BY public.faq_mst_status.faq_status_id;
          public          postgres    false    246            �            1259    16759    feed_mst_status    TABLE     {   CREATE TABLE public.feed_mst_status (
    feed_status_id integer NOT NULL,
    feed_status_title character varying(500)
);
 #   DROP TABLE public.feed_mst_status;
       public         heap    postgres    false            �            1259    16762 "   feed_mst_status_feed_status_id_seq    SEQUENCE     �   CREATE SEQUENCE public.feed_mst_status_feed_status_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 9   DROP SEQUENCE public.feed_mst_status_feed_status_id_seq;
       public          postgres    false    247            �           0    0 "   feed_mst_status_feed_status_id_seq    SEQUENCE OWNED BY     i   ALTER SEQUENCE public.feed_mst_status_feed_status_id_seq OWNED BY public.feed_mst_status.feed_status_id;
          public          postgres    false    248            �            1259    16763    feedback    TABLE     J  CREATE TABLE public.feedback (
    feedback_id integer NOT NULL,
    feed_sub character varying(500),
    feed_msg character varying(5000),
    feedback_from character varying(500),
    feedback_mail character varying(500),
    feed_status numeric(10,0) DEFAULT 1,
    created_date timestamp(6) without time zone DEFAULT now()
);
    DROP TABLE public.feedback;
       public         heap    postgres    false            �            1259    16770    feedback_feedback_id_seq    SEQUENCE     �   CREATE SEQUENCE public.feedback_feedback_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.feedback_feedback_id_seq;
       public          postgres    false    249            �           0    0    feedback_feedback_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.feedback_feedback_id_seq OWNED BY public.feedback.feedback_id;
          public          postgres    false    250            �            1259    16771    former_directors    TABLE     �   CREATE TABLE public.former_directors (
    director_id integer NOT NULL,
    director_name character varying(500),
    year_from character varying(500),
    year_to character varying(500)
);
 $   DROP TABLE public.former_directors;
       public         heap    postgres    false            �            1259    16776     former_directors_director_id_seq    SEQUENCE     �   CREATE SEQUENCE public.former_directors_director_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.former_directors_director_id_seq;
       public          postgres    false    251            �           0    0     former_directors_director_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.former_directors_director_id_seq OWNED BY public.former_directors.director_id;
          public          postgres    false    252            �            1259    16777    gallery_category    TABLE     w   CREATE TABLE public.gallery_category (
    gall_cate_id integer NOT NULL,
    gall_cate_name character varying(500)
);
 $   DROP TABLE public.gallery_category;
       public         heap    postgres    false            �            1259    16780 !   gallery_category_gall_cate_id_seq    SEQUENCE     �   CREATE SEQUENCE public.gallery_category_gall_cate_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 8   DROP SEQUENCE public.gallery_category_gall_cate_id_seq;
       public          postgres    false    253            �           0    0 !   gallery_category_gall_cate_id_seq    SEQUENCE OWNED BY     g   ALTER SEQUENCE public.gallery_category_gall_cate_id_seq OWNED BY public.gallery_category.gall_cate_id;
          public          postgres    false    254            �            1259    16781    mst_rti    TABLE     *  CREATE TABLE public.mst_rti (
    rti_id integer NOT NULL,
    rti_name character varying(500),
    rti_status character varying(500),
    rti_attachment character varying(500),
    file_type character varying(200),
    rti_url character varying(500),
    created_at timestamp(6) with time zone
);
    DROP TABLE public.mst_rti;
       public         heap    postgres    false                        1259    16786    mst_rti_rti_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_rti_rti_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.mst_rti_rti_id_seq;
       public          postgres    false    255            �           0    0    mst_rti_rti_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.mst_rti_rti_id_seq OWNED BY public.mst_rti.rti_id;
          public          postgres    false    256            $           1259    17036    mst_state_list    TABLE     �   CREATE TABLE public.mst_state_list (
    state_id integer NOT NULL,
    state_name character varying(100),
    state_code character varying(20)
);
 "   DROP TABLE public.mst_state_list;
       public         heap    postgres    false            #           1259    17035    mst_state_list_state_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_state_list_state_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.mst_state_list_state_id_seq;
       public          postgres    false    292            �           0    0    mst_state_list_state_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.mst_state_list_state_id_seq OWNED BY public.mst_state_list.state_id;
          public          postgres    false    291                       1259    16787    mst_sub_rti    TABLE     3  CREATE TABLE public.mst_sub_rti (
    sub_rti_id integer NOT NULL,
    mst_rti_id integer,
    sub_rti_name character varying(500),
    status character varying(500),
    created_at timestamp(6) without time zone DEFAULT now(),
    rti_upload character varying(500),
    file_type character varying(500)
);
    DROP TABLE public.mst_sub_rti;
       public         heap    postgres    false                       1259    16793    mst_sub_rti_sub_rti_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_sub_rti_sub_rti_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.mst_sub_rti_sub_rti_id_seq;
       public          postgres    false    257            �           0    0    mst_sub_rti_sub_rti_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.mst_sub_rti_sub_rti_id_seq OWNED BY public.mst_sub_rti.sub_rti_id;
          public          postgres    false    258                       1259    16794    mst_subs_rti    TABLE     w  CREATE TABLE public.mst_subs_rti (
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
       public         heap    postgres    false                       1259    16800    mst_subs_rti_subs_rti_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_subs_rti_subs_rti_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.mst_subs_rti_subs_rti_id_seq;
       public          postgres    false    259            �           0    0    mst_subs_rti_subs_rti_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.mst_subs_rti_subs_rti_id_seq OWNED BY public.mst_subs_rti.subs_rti_id;
          public          postgres    false    260            &           1259    17051    mst_supply_bcgvl    TABLE     V  CREATE TABLE public.mst_supply_bcgvl (
    supply_id integer NOT NULL,
    supply_year character varying(100),
    state_name character varying(100),
    supply_details character varying(100),
    supply_name character varying(100),
    supply_status character varying(10) DEFAULT 'L'::character varying,
    created_at date DEFAULT now()
);
 $   DROP TABLE public.mst_supply_bcgvl;
       public         heap    postgres    false            %           1259    17050    mst_supply_bcgvl_supply_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mst_supply_bcgvl_supply_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.mst_supply_bcgvl_supply_id_seq;
       public          postgres    false    294            �           0    0    mst_supply_bcgvl_supply_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.mst_supply_bcgvl_supply_id_seq OWNED BY public.mst_supply_bcgvl.supply_id;
          public          postgres    false    293                       1259    16801    organisation_chart    TABLE     �   CREATE TABLE public.organisation_chart (
    org_id integer NOT NULL,
    org_pic character varying(500),
    org_status character varying(500)
);
 &   DROP TABLE public.organisation_chart;
       public         heap    postgres    false                       1259    16806    organisation_chart_org_id_seq    SEQUENCE     �   CREATE SEQUENCE public.organisation_chart_org_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.organisation_chart_org_id_seq;
       public          postgres    false    261            �           0    0    organisation_chart_org_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.organisation_chart_org_id_seq OWNED BY public.organisation_chart.org_id;
          public          postgres    false    262                       1259    16807    photo_category    TABLE     
  CREATE TABLE public.photo_category (
    cate_id integer NOT NULL,
    category_title character varying(500),
    created_at timestamp(6) without time zone DEFAULT now(),
    gall_cate_id character varying(100) DEFAULT 2,
    category_status character varying(5)
);
 "   DROP TABLE public.photo_category;
       public         heap    postgres    false                       1259    16814    photo_category_cate_id_seq    SEQUENCE     �   CREATE SEQUENCE public.photo_category_cate_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.photo_category_cate_id_seq;
       public          postgres    false    263            �           0    0    photo_category_cate_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.photo_category_cate_id_seq OWNED BY public.photo_category.cate_id;
          public          postgres    false    264            	           1259    16815    photo_gallery    TABLE     �   CREATE TABLE public.photo_gallery (
    photo_id integer NOT NULL,
    category integer,
    photo_file character varying(500),
    created_at timestamp(6) without time zone DEFAULT now(),
    photo_caption character varying(500)
);
 !   DROP TABLE public.photo_gallery;
       public         heap    postgres    false            
           1259    16821    photo_gallery_photo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.photo_gallery_photo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.photo_gallery_photo_id_seq;
       public          postgres    false    265            �           0    0    photo_gallery_photo_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.photo_gallery_photo_id_seq OWNED BY public.photo_gallery.photo_id;
          public          postgres    false    266                       1259    16822    product    TABLE     �   CREATE TABLE public.product (
    product_id integer NOT NULL,
    product_name character varying,
    product_desc text,
    product_image character varying(500),
    product_status character varying(500)
);
    DROP TABLE public.product;
       public         heap    postgres    false                       1259    16827    product_product_id_seq    SEQUENCE     �   CREATE SEQUENCE public.product_product_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.product_product_id_seq;
       public          postgres    false    267            �           0    0    product_product_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.product_product_id_seq OWNED BY public.product.product_id;
          public          postgres    false    268                       1259    16828 
   production    TABLE     �   CREATE TABLE public.production (
    pro_id integer NOT NULL,
    production_pic character varying(500),
    status character varying(500)
);
    DROP TABLE public.production;
       public         heap    postgres    false                       1259    16833    production_pro_id_seq    SEQUENCE     �   CREATE SEQUENCE public.production_pro_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.production_pro_id_seq;
       public          postgres    false    269            �           0    0    production_pro_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.production_pro_id_seq OWNED BY public.production.pro_id;
          public          postgres    false    270                       1259    16834    recruitment    TABLE     f  CREATE TABLE public.recruitment (
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
       public         heap    postgres    false                       1259    16840    recruitment_rec_id_seq    SEQUENCE     �   CREATE SEQUENCE public.recruitment_rec_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.recruitment_rec_id_seq;
       public          postgres    false    271            �           0    0    recruitment_rec_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.recruitment_rec_id_seq OWNED BY public.recruitment.rec_id;
          public          postgres    false    272                       1259    16841    rti_contacts    TABLE     �  CREATE TABLE public.rti_contacts (
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
       public         heap    postgres    false                       1259    16846    rti_contacts_contact_id_seq    SEQUENCE     �   CREATE SEQUENCE public.rti_contacts_contact_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.rti_contacts_contact_id_seq;
       public          postgres    false    273            �           0    0    rti_contacts_contact_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.rti_contacts_contact_id_seq OWNED BY public.rti_contacts.contact_id;
          public          postgres    false    274                       1259    16847    sliders    TABLE     I  CREATE TABLE public.sliders (
    slider_id integer NOT NULL,
    slider_title character varying(500),
    slider_img character varying(500),
    slider_caption character varying(500),
    slider_status numeric(500,0) DEFAULT 1,
    slider_type character varying(200),
    created_at timestamp(6) with time zone DEFAULT now()
);
    DROP TABLE public.sliders;
       public         heap    postgres    false                       1259    16854    sliders_slider_id_seq    SEQUENCE     �   CREATE SEQUENCE public.sliders_slider_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.sliders_slider_id_seq;
       public          postgres    false    275            �           0    0    sliders_slider_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.sliders_slider_id_seq OWNED BY public.sliders.slider_id;
          public          postgres    false    276            "           1259    17028    supply_of_bcg    TABLE     �   CREATE TABLE public.supply_of_bcg (
    supply_id integer NOT NULL,
    year_of_supply character varying(10),
    supply_report character varying(200),
    supply_status character varying(200) DEFAULT now(),
    last_updated date,
    created_at date
);
 !   DROP TABLE public.supply_of_bcg;
       public         heap    postgres    false            !           1259    17027    supply_of_bcg_supply_id_seq    SEQUENCE     �   CREATE SEQUENCE public.supply_of_bcg_supply_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.supply_of_bcg_supply_id_seq;
       public          postgres    false    290            �           0    0    supply_of_bcg_supply_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.supply_of_bcg_supply_id_seq OWNED BY public.supply_of_bcg.supply_id;
          public          postgres    false    289                       1259    16855    tenders    TABLE     �  CREATE TABLE public.tenders (
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
       public         heap    postgres    false                       1259    16862    tenders_tender_id_seq    SEQUENCE     �   CREATE SEQUENCE public.tenders_tender_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.tenders_tender_id_seq;
       public          postgres    false    277            �           0    0    tenders_tender_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.tenders_tender_id_seq OWNED BY public.tenders.tender_id;
          public          postgres    false    278                       1259    16863 	   user_role    TABLE     f   CREATE TABLE public.user_role (
    role_id integer NOT NULL,
    role_name character varying(200)
);
    DROP TABLE public.user_role;
       public         heap    postgres    false                       1259    16866    user_role_role_id_seq    SEQUENCE     �   CREATE SEQUENCE public.user_role_role_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.user_role_role_id_seq;
       public          postgres    false    279            �           0    0    user_role_role_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.user_role_role_id_seq OWNED BY public.user_role.role_id;
          public          postgres    false    280                       1259    16867    vaccine_supply    TABLE     �   CREATE TABLE public.vaccine_supply (
    vs_id integer NOT NULL,
    vs_details text,
    created_date timestamp(6) without time zone DEFAULT now(),
    updated_by character varying(500)
);
 "   DROP TABLE public.vaccine_supply;
       public         heap    postgres    false                       1259    16873    vaccine_supply_vs_id_seq    SEQUENCE     �   CREATE SEQUENCE public.vaccine_supply_vs_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.vaccine_supply_vs_id_seq;
       public          postgres    false    281            �           0    0    vaccine_supply_vs_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.vaccine_supply_vs_id_seq OWNED BY public.vaccine_supply.vs_id;
          public          postgres    false    282                       1259    16874    video_category    TABLE     �   CREATE TABLE public.video_category (
    cate_id integer NOT NULL,
    category_title character varying(500),
    created_at timestamp(6) without time zone DEFAULT now(),
    gall_cate_id character varying(100) DEFAULT 3
);
 "   DROP TABLE public.video_category;
       public         heap    postgres    false                       1259    16881    video_category_cate_id_seq    SEQUENCE     �   CREATE SEQUENCE public.video_category_cate_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.video_category_cate_id_seq;
       public          postgres    false    283            �           0    0    video_category_cate_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.video_category_cate_id_seq OWNED BY public.video_category.cate_id;
          public          postgres    false    284                       1259    16882    video_gallery    TABLE     �   CREATE TABLE public.video_gallery (
    photo_id integer NOT NULL,
    category integer,
    photo_file character varying(500),
    created_at timestamp(6) without time zone DEFAULT now(),
    photo_caption character varying(500)
);
 !   DROP TABLE public.video_gallery;
       public         heap    postgres    false                       1259    16888    video_gallery_photo_id_seq    SEQUENCE     �   CREATE SEQUENCE public.video_gallery_photo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.video_gallery_photo_id_seq;
       public          postgres    false    285            �           0    0    video_gallery_photo_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.video_gallery_photo_id_seq OWNED BY public.video_gallery.photo_id;
          public          postgres    false    286                       1259    16889    what_new    TABLE     �   CREATE TABLE public.what_new (
    whats_id integer NOT NULL,
    whats_title character varying,
    whats_desc text,
    whats_file character varying(500),
    created_date timestamp(6) without time zone DEFAULT now()
);
    DROP TABLE public.what_new;
       public         heap    postgres    false                        1259    16895    what_new_whats_id_seq    SEQUENCE     �   CREATE SEQUENCE public.what_new_whats_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.what_new_whats_id_seq;
       public          postgres    false    287            �           0    0    what_new_whats_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.what_new_whats_id_seq OWNED BY public.what_new.whats_id;
          public          postgres    false    288            0           2604    16896    about_achivement achivement_id    DEFAULT     �   ALTER TABLE ONLY public.about_achivement ALTER COLUMN achivement_id SET DEFAULT nextval('public.about_achivement_achivement_id_seq'::regclass);
 M   ALTER TABLE public.about_achivement ALTER COLUMN achivement_id DROP DEFAULT;
       public          postgres    false    212    211            /           2604    16897    about_us about_us_id    DEFAULT     ~   ALTER TABLE ONLY public.about_us ALTER COLUMN about_us_id SET DEFAULT nextval('public."About_us_about_us_id_seq"'::regclass);
 C   ALTER TABLE public.about_us ALTER COLUMN about_us_id DROP DEFAULT;
       public          postgres    false    210    209            2           2604    16898    archive_events event_id    DEFAULT     �   ALTER TABLE ONLY public.archive_events ALTER COLUMN event_id SET DEFAULT nextval('public.archive_events_event_id_seq'::regclass);
 F   ALTER TABLE public.archive_events ALTER COLUMN event_id DROP DEFAULT;
       public          postgres    false    214    213            5           2604    16899    archived_tenders tender_id    DEFAULT     �   ALTER TABLE ONLY public.archived_tenders ALTER COLUMN tender_id SET DEFAULT nextval('public.archived_tenders_tender_id_seq'::regclass);
 I   ALTER TABLE public.archived_tenders ALTER COLUMN tender_id DROP DEFAULT;
       public          postgres    false    216    215            7           2604    16900    bcgvl_contacts contact_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_contacts ALTER COLUMN contact_id SET DEFAULT nextval('public.bcgvl_contacts_contact_id_seq'::regclass);
 H   ALTER TABLE public.bcgvl_contacts ALTER COLUMN contact_id DROP DEFAULT;
       public          postgres    false    220    219            8           2604    16901    bcgvl_staff_designation deg_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_staff_designation ALTER COLUMN deg_id SET DEFAULT nextval('public.bcgvl_staff_designation_deg_id_seq'::regclass);
 M   ALTER TABLE public.bcgvl_staff_designation ALTER COLUMN deg_id DROP DEFAULT;
       public          postgres    false    222    221            9           2604    16902    bcgvl_staff_details staff_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_staff_details ALTER COLUMN staff_id SET DEFAULT nextval('public.bcgvl_staff_details_staff_id_seq'::regclass);
 K   ALTER TABLE public.bcgvl_staff_details ALTER COLUMN staff_id DROP DEFAULT;
       public          postgres    false    224    223            :           2604    16903    bcgvl_staff_groups cate_id    DEFAULT     �   ALTER TABLE ONLY public.bcgvl_staff_groups ALTER COLUMN cate_id SET DEFAULT nextval('public.bcgvl_staff_groups_cate_id_seq'::regclass);
 I   ALTER TABLE public.bcgvl_staff_groups ALTER COLUMN cate_id DROP DEFAULT;
       public          postgres    false    226    225            ;           2604    16904    director_desk dir_desk_id    DEFAULT     �   ALTER TABLE ONLY public.director_desk ALTER COLUMN dir_desk_id SET DEFAULT nextval('public.director_desk_dir_desk_id_seq'::regclass);
 H   ALTER TABLE public.director_desk ALTER COLUMN dir_desk_id DROP DEFAULT;
       public          postgres    false    228    227            <           2604    16905    director_status dir_status_id    DEFAULT     �   ALTER TABLE ONLY public.director_status ALTER COLUMN dir_status_id SET DEFAULT nextval('public.director_status_dir_status_id_seq'::regclass);
 L   ALTER TABLE public.director_status ALTER COLUMN dir_status_id DROP DEFAULT;
       public          postgres    false    230    229            >           2604    16906    division div_id    DEFAULT     r   ALTER TABLE ONLY public.division ALTER COLUMN div_id SET DEFAULT nextval('public.division_div_id_seq'::regclass);
 >   ALTER TABLE public.division ALTER COLUMN div_id DROP DEFAULT;
       public          postgres    false    232    231            @           2604    16907    documents_bcg doc_id    DEFAULT     |   ALTER TABLE ONLY public.documents_bcg ALTER COLUMN doc_id SET DEFAULT nextval('public.documents_bcg_doc_id_seq'::regclass);
 C   ALTER TABLE public.documents_bcg ALTER COLUMN doc_id DROP DEFAULT;
       public          postgres    false    234    233            A           2604    16908    emp_designation designation_id    DEFAULT     �   ALTER TABLE ONLY public.emp_designation ALTER COLUMN designation_id SET DEFAULT nextval('public.emp_designation_designation_id_seq'::regclass);
 M   ALTER TABLE public.emp_designation ALTER COLUMN designation_id DROP DEFAULT;
       public          postgres    false    236    235            D           2604    16909    event_category cate_id    DEFAULT     �   ALTER TABLE ONLY public.event_category ALTER COLUMN cate_id SET DEFAULT nextval('public.event_category_event_cate_seq'::regclass);
 E   ALTER TABLE public.event_category ALTER COLUMN cate_id DROP DEFAULT;
       public          postgres    false    238    237            F           2604    16910    event_gallery photo_id    DEFAULT     �   ALTER TABLE ONLY public.event_gallery ALTER COLUMN photo_id SET DEFAULT nextval('public.event_gallery_photo_id_seq'::regclass);
 E   ALTER TABLE public.event_gallery ALTER COLUMN photo_id DROP DEFAULT;
       public          postgres    false    240    239            G           2604    16911    events event_id    DEFAULT     r   ALTER TABLE ONLY public.events ALTER COLUMN event_id SET DEFAULT nextval('public.events_event_id_seq'::regclass);
 >   ALTER TABLE public.events ALTER COLUMN event_id DROP DEFAULT;
       public          postgres    false    242    241            I           2604    16912 
   faq faq_id    DEFAULT     h   ALTER TABLE ONLY public.faq ALTER COLUMN faq_id SET DEFAULT nextval('public.faq_faq_id_seq'::regclass);
 9   ALTER TABLE public.faq ALTER COLUMN faq_id DROP DEFAULT;
       public          postgres    false    244    243            J           2604    16913    faq_mst_status faq_status_id    DEFAULT     �   ALTER TABLE ONLY public.faq_mst_status ALTER COLUMN faq_status_id SET DEFAULT nextval('public.faq_mst_status_faq_status_id_seq'::regclass);
 K   ALTER TABLE public.faq_mst_status ALTER COLUMN faq_status_id DROP DEFAULT;
       public          postgres    false    246    245            K           2604    16914    feed_mst_status feed_status_id    DEFAULT     �   ALTER TABLE ONLY public.feed_mst_status ALTER COLUMN feed_status_id SET DEFAULT nextval('public.feed_mst_status_feed_status_id_seq'::regclass);
 M   ALTER TABLE public.feed_mst_status ALTER COLUMN feed_status_id DROP DEFAULT;
       public          postgres    false    248    247            N           2604    16915    feedback feedback_id    DEFAULT     |   ALTER TABLE ONLY public.feedback ALTER COLUMN feedback_id SET DEFAULT nextval('public.feedback_feedback_id_seq'::regclass);
 C   ALTER TABLE public.feedback ALTER COLUMN feedback_id DROP DEFAULT;
       public          postgres    false    250    249            O           2604    16916    former_directors director_id    DEFAULT     �   ALTER TABLE ONLY public.former_directors ALTER COLUMN director_id SET DEFAULT nextval('public.former_directors_director_id_seq'::regclass);
 K   ALTER TABLE public.former_directors ALTER COLUMN director_id DROP DEFAULT;
       public          postgres    false    252    251            P           2604    16917    gallery_category gall_cate_id    DEFAULT     �   ALTER TABLE ONLY public.gallery_category ALTER COLUMN gall_cate_id SET DEFAULT nextval('public.gallery_category_gall_cate_id_seq'::regclass);
 L   ALTER TABLE public.gallery_category ALTER COLUMN gall_cate_id DROP DEFAULT;
       public          postgres    false    254    253            Q           2604    16918    mst_rti rti_id    DEFAULT     p   ALTER TABLE ONLY public.mst_rti ALTER COLUMN rti_id SET DEFAULT nextval('public.mst_rti_rti_id_seq'::regclass);
 =   ALTER TABLE public.mst_rti ALTER COLUMN rti_id DROP DEFAULT;
       public          postgres    false    256    255            s           2604    17039    mst_state_list state_id    DEFAULT     �   ALTER TABLE ONLY public.mst_state_list ALTER COLUMN state_id SET DEFAULT nextval('public.mst_state_list_state_id_seq'::regclass);
 F   ALTER TABLE public.mst_state_list ALTER COLUMN state_id DROP DEFAULT;
       public          postgres    false    292    291    292            S           2604    16919    mst_sub_rti sub_rti_id    DEFAULT     �   ALTER TABLE ONLY public.mst_sub_rti ALTER COLUMN sub_rti_id SET DEFAULT nextval('public.mst_sub_rti_sub_rti_id_seq'::regclass);
 E   ALTER TABLE public.mst_sub_rti ALTER COLUMN sub_rti_id DROP DEFAULT;
       public          postgres    false    258    257            U           2604    16920    mst_subs_rti subs_rti_id    DEFAULT     �   ALTER TABLE ONLY public.mst_subs_rti ALTER COLUMN subs_rti_id SET DEFAULT nextval('public.mst_subs_rti_subs_rti_id_seq'::regclass);
 G   ALTER TABLE public.mst_subs_rti ALTER COLUMN subs_rti_id DROP DEFAULT;
       public          postgres    false    260    259            t           2604    17054    mst_supply_bcgvl supply_id    DEFAULT     �   ALTER TABLE ONLY public.mst_supply_bcgvl ALTER COLUMN supply_id SET DEFAULT nextval('public.mst_supply_bcgvl_supply_id_seq'::regclass);
 I   ALTER TABLE public.mst_supply_bcgvl ALTER COLUMN supply_id DROP DEFAULT;
       public          postgres    false    294    293    294            V           2604    16921    organisation_chart org_id    DEFAULT     �   ALTER TABLE ONLY public.organisation_chart ALTER COLUMN org_id SET DEFAULT nextval('public.organisation_chart_org_id_seq'::regclass);
 H   ALTER TABLE public.organisation_chart ALTER COLUMN org_id DROP DEFAULT;
       public          postgres    false    262    261            Y           2604    16922    photo_category cate_id    DEFAULT     �   ALTER TABLE ONLY public.photo_category ALTER COLUMN cate_id SET DEFAULT nextval('public.photo_category_cate_id_seq'::regclass);
 E   ALTER TABLE public.photo_category ALTER COLUMN cate_id DROP DEFAULT;
       public          postgres    false    264    263            [           2604    16923    photo_gallery photo_id    DEFAULT     �   ALTER TABLE ONLY public.photo_gallery ALTER COLUMN photo_id SET DEFAULT nextval('public.photo_gallery_photo_id_seq'::regclass);
 E   ALTER TABLE public.photo_gallery ALTER COLUMN photo_id DROP DEFAULT;
       public          postgres    false    266    265            \           2604    16924    product product_id    DEFAULT     x   ALTER TABLE ONLY public.product ALTER COLUMN product_id SET DEFAULT nextval('public.product_product_id_seq'::regclass);
 A   ALTER TABLE public.product ALTER COLUMN product_id DROP DEFAULT;
       public          postgres    false    268    267            ]           2604    16925    production pro_id    DEFAULT     v   ALTER TABLE ONLY public.production ALTER COLUMN pro_id SET DEFAULT nextval('public.production_pro_id_seq'::regclass);
 @   ALTER TABLE public.production ALTER COLUMN pro_id DROP DEFAULT;
       public          postgres    false    270    269            _           2604    16926    recruitment rec_id    DEFAULT     x   ALTER TABLE ONLY public.recruitment ALTER COLUMN rec_id SET DEFAULT nextval('public.recruitment_rec_id_seq'::regclass);
 A   ALTER TABLE public.recruitment ALTER COLUMN rec_id DROP DEFAULT;
       public          postgres    false    272    271            `           2604    16927    rti_contacts contact_id    DEFAULT     �   ALTER TABLE ONLY public.rti_contacts ALTER COLUMN contact_id SET DEFAULT nextval('public.rti_contacts_contact_id_seq'::regclass);
 F   ALTER TABLE public.rti_contacts ALTER COLUMN contact_id DROP DEFAULT;
       public          postgres    false    274    273            c           2604    16928    sliders slider_id    DEFAULT     v   ALTER TABLE ONLY public.sliders ALTER COLUMN slider_id SET DEFAULT nextval('public.sliders_slider_id_seq'::regclass);
 @   ALTER TABLE public.sliders ALTER COLUMN slider_id DROP DEFAULT;
       public          postgres    false    276    275            q           2604    17031    supply_of_bcg supply_id    DEFAULT     �   ALTER TABLE ONLY public.supply_of_bcg ALTER COLUMN supply_id SET DEFAULT nextval('public.supply_of_bcg_supply_id_seq'::regclass);
 F   ALTER TABLE public.supply_of_bcg ALTER COLUMN supply_id DROP DEFAULT;
       public          postgres    false    289    290    290            f           2604    16929    tenders tender_id    DEFAULT     v   ALTER TABLE ONLY public.tenders ALTER COLUMN tender_id SET DEFAULT nextval('public.tenders_tender_id_seq'::regclass);
 @   ALTER TABLE public.tenders ALTER COLUMN tender_id DROP DEFAULT;
       public          postgres    false    278    277            6           2604    16930    user_info user_id    DEFAULT     v   ALTER TABLE ONLY public.user_info ALTER COLUMN user_id SET DEFAULT nextval('public.bcg_users_user_id_seq'::regclass);
 @   ALTER TABLE public.user_info ALTER COLUMN user_id DROP DEFAULT;
       public          postgres    false    218    217            g           2604    16931    user_role role_id    DEFAULT     v   ALTER TABLE ONLY public.user_role ALTER COLUMN role_id SET DEFAULT nextval('public.user_role_role_id_seq'::regclass);
 @   ALTER TABLE public.user_role ALTER COLUMN role_id DROP DEFAULT;
       public          postgres    false    280    279            i           2604    16932    vaccine_supply vs_id    DEFAULT     |   ALTER TABLE ONLY public.vaccine_supply ALTER COLUMN vs_id SET DEFAULT nextval('public.vaccine_supply_vs_id_seq'::regclass);
 C   ALTER TABLE public.vaccine_supply ALTER COLUMN vs_id DROP DEFAULT;
       public          postgres    false    282    281            l           2604    16933    video_category cate_id    DEFAULT     �   ALTER TABLE ONLY public.video_category ALTER COLUMN cate_id SET DEFAULT nextval('public.video_category_cate_id_seq'::regclass);
 E   ALTER TABLE public.video_category ALTER COLUMN cate_id DROP DEFAULT;
       public          postgres    false    284    283            n           2604    16934    video_gallery photo_id    DEFAULT     �   ALTER TABLE ONLY public.video_gallery ALTER COLUMN photo_id SET DEFAULT nextval('public.video_gallery_photo_id_seq'::regclass);
 E   ALTER TABLE public.video_gallery ALTER COLUMN photo_id DROP DEFAULT;
       public          postgres    false    286    285            p           2604    16935    what_new whats_id    DEFAULT     v   ALTER TABLE ONLY public.what_new ALTER COLUMN whats_id SET DEFAULT nextval('public.what_new_whats_id_seq'::regclass);
 @   ALTER TABLE public.what_new ALTER COLUMN whats_id DROP DEFAULT;
       public          postgres    false    288    287            X          0    16650    about_achivement 
   TABLE DATA           [   COPY public.about_achivement (achivement_id, achivement_name, achivement_year) FROM stdin;
    public          postgres    false    211   �t      V          0    16643    about_us 
   TABLE DATA           �   COPY public.about_us (about_us_id, content_id, content_description, content_status, last_updated, content_updated_by, archive) FROM stdin;
    public          postgres    false    209   u      Z          0    16656    archive_events 
   TABLE DATA           �   COPY public.archive_events (event_id, event_title, event_desc, date_from, date_to, event_file, event_url, uploads_type, created_at) FROM stdin;
    public          postgres    false    213   ��      \          0    16663    archived_tenders 
   TABLE DATA           �   COPY public.archived_tenders (tender_id, tender_title, advertise_no, date_of_announce, date_of_closed, tenders_notice, file_size, tender_status, created_date) FROM stdin;
    public          postgres    false    215   ��      `          0    16675    bcgvl_contacts 
   TABLE DATA           n   COPY public.bcgvl_contacts (contact_id, con_email, con_phone, con_address, map_embed, con_status) FROM stdin;
    public          postgres    false    219   ޘ      b          0    16681    bcgvl_staff_designation 
   TABLE DATA           M   COPY public.bcgvl_staff_designation (deg_id, deg_name, deg_code) FROM stdin;
    public          postgres    false    221   �      d          0    16687    bcgvl_staff_details 
   TABLE DATA           `   COPY public.bcgvl_staff_details (staff_id, staff_name, deg_code, cate_code, status) FROM stdin;
    public          postgres    false    223   ś      f          0    16693    bcgvl_staff_groups 
   TABLE DATA           K   COPY public.bcgvl_staff_groups (cate_id, cate_name, cate_code) FROM stdin;
    public          postgres    false    225   �      h          0    16699    director_desk 
   TABLE DATA           �   COPY public.director_desk (dir_desk_id, director_name, director_position, director_qualification, position_held, director_photo, short_profile, detail_profile, director_message, director_status, director_expertise) FROM stdin;
    public          postgres    false    227   `�      j          0    16705    director_status 
   TABLE DATA           `   COPY public.director_status (dir_status_id, dir_status_name, dir_status_short_code) FROM stdin;
    public          postgres    false    229   ��      l          0    16709    division 
   TABLE DATA           a   COPY public.division (div_id, div_name, div_content, content_updated_by, created_at) FROM stdin;
    public          postgres    false    231   ٩      n          0    16716    documents_bcg 
   TABLE DATA           �   COPY public.documents_bcg (doc_id, doc_title, doc_attachment, doc_description, doc_cate, file_size, year_of_report, created_at) FROM stdin;
    public          postgres    false    233   ��      p          0    16723    emp_designation 
   TABLE DATA           ]   COPY public.emp_designation (designation_id, designation_name, designation_code) FROM stdin;
    public          postgres    false    235   ��      r          0    16727    event_category 
   TABLE DATA           o   COPY public.event_category (cate_id, category_title, from_date, to_date, created_at, gall_cate_id) FROM stdin;
    public          postgres    false    237   ��      t          0    16735    event_gallery 
   TABLE DATA           b   COPY public.event_gallery (photo_id, category, photo_file, created_at, photo_caption) FROM stdin;
    public          postgres    false    239   ��      v          0    16742    events 
   TABLE DATA           |   COPY public.events (event_id, event_title, event_desc, date_from, date_to, event_file, event_url, uploads_type) FROM stdin;
    public          postgres    false    241   ��      x          0    16748    faq 
   TABLE DATA           R   COPY public.faq (faq_id, faq_title, faq_desc, faq_status, created_at) FROM stdin;
    public          postgres    false    243   ��      z          0    16755    faq_mst_status 
   TABLE DATA           I   COPY public.faq_mst_status (faq_status_id, faq_status_title) FROM stdin;
    public          postgres    false    245   ��      |          0    16759    feed_mst_status 
   TABLE DATA           L   COPY public.feed_mst_status (feed_status_id, feed_status_title) FROM stdin;
    public          postgres    false    247   ��      ~          0    16763    feedback 
   TABLE DATA           |   COPY public.feedback (feedback_id, feed_sub, feed_msg, feedback_from, feedback_mail, feed_status, created_date) FROM stdin;
    public          postgres    false    249   �      �          0    16771    former_directors 
   TABLE DATA           Z   COPY public.former_directors (director_id, director_name, year_from, year_to) FROM stdin;
    public          postgres    false    251   ��      �          0    16777    gallery_category 
   TABLE DATA           H   COPY public.gallery_category (gall_cate_id, gall_cate_name) FROM stdin;
    public          postgres    false    253   Y�      �          0    16781    mst_rti 
   TABLE DATA           o   COPY public.mst_rti (rti_id, rti_name, rti_status, rti_attachment, file_type, rti_url, created_at) FROM stdin;
    public          postgres    false    255   ��      �          0    17036    mst_state_list 
   TABLE DATA           J   COPY public.mst_state_list (state_id, state_name, state_code) FROM stdin;
    public          postgres    false    292   4�      �          0    16787    mst_sub_rti 
   TABLE DATA           v   COPY public.mst_sub_rti (sub_rti_id, mst_rti_id, sub_rti_name, status, created_at, rti_upload, file_type) FROM stdin;
    public          postgres    false    257   ��      �          0    16794    mst_subs_rti 
   TABLE DATA           �   COPY public.mst_subs_rti (subs_rti_id, mst_sub_id, subs_rti_name, description, file_type, size, status, created_at, rti_upload) FROM stdin;
    public          postgres    false    259   ��      �          0    17051    mst_supply_bcgvl 
   TABLE DATA           �   COPY public.mst_supply_bcgvl (supply_id, supply_year, state_name, supply_details, supply_name, supply_status, created_at) FROM stdin;
    public          postgres    false    294   6�      �          0    16801    organisation_chart 
   TABLE DATA           I   COPY public.organisation_chart (org_id, org_pic, org_status) FROM stdin;
    public          postgres    false    261   ��      �          0    16807    photo_category 
   TABLE DATA           l   COPY public.photo_category (cate_id, category_title, created_at, gall_cate_id, category_status) FROM stdin;
    public          postgres    false    263   ��      �          0    16815    photo_gallery 
   TABLE DATA           b   COPY public.photo_gallery (photo_id, category, photo_file, created_at, photo_caption) FROM stdin;
    public          postgres    false    265   8�      �          0    16822    product 
   TABLE DATA           h   COPY public.product (product_id, product_name, product_desc, product_image, product_status) FROM stdin;
    public          postgres    false    267   K�      �          0    16828 
   production 
   TABLE DATA           D   COPY public.production (pro_id, production_pic, status) FROM stdin;
    public          postgres    false    269   8�      �          0    16834    recruitment 
   TABLE DATA           �   COPY public.recruitment (rec_id, rect_title, advt_no, date_of_announce, last_date_to_apply, upload_advt, file_size, rec_status, created_at) FROM stdin;
    public          postgres    false    271   ��      �          0    16841    rti_contacts 
   TABLE DATA           �   COPY public.rti_contacts (contact_id, contact_title, user_name, designation, contact_address, user_phone, office_phone, organization_email, user_email, status, created_date) FROM stdin;
    public          postgres    false    273   u�      �          0    16847    sliders 
   TABLE DATA           ~   COPY public.sliders (slider_id, slider_title, slider_img, slider_caption, slider_status, slider_type, created_at) FROM stdin;
    public          postgres    false    275   n�      �          0    17028    supply_of_bcg 
   TABLE DATA           z   COPY public.supply_of_bcg (supply_id, year_of_supply, supply_report, supply_status, last_updated, created_at) FROM stdin;
    public          postgres    false    290   ��      �          0    16855    tenders 
   TABLE DATA           �   COPY public.tenders (tender_id, tender_title, advertise_no, date_of_announce, date_of_closed, tenders_notice, file_size, tender_status, created_date) FROM stdin;
    public          postgres    false    277   ��      ^          0    16671 	   user_info 
   TABLE DATA           C   COPY public.user_info (user_id, uname, upass, role_id) FROM stdin;
    public          postgres    false    217   O�      �          0    16863 	   user_role 
   TABLE DATA           7   COPY public.user_role (role_id, role_name) FROM stdin;
    public          postgres    false    279   ��      �          0    16867    vaccine_supply 
   TABLE DATA           U   COPY public.vaccine_supply (vs_id, vs_details, created_date, updated_by) FROM stdin;
    public          postgres    false    281   ��      �          0    16874    video_category 
   TABLE DATA           [   COPY public.video_category (cate_id, category_title, created_at, gall_cate_id) FROM stdin;
    public          postgres    false    283   K�      �          0    16882    video_gallery 
   TABLE DATA           b   COPY public.video_gallery (photo_id, category, photo_file, created_at, photo_caption) FROM stdin;
    public          postgres    false    285   ��      �          0    16889    what_new 
   TABLE DATA           _   COPY public.what_new (whats_id, whats_title, whats_desc, whats_file, created_date) FROM stdin;
    public          postgres    false    287   a�      �           0    0    About_us_about_us_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public."About_us_about_us_id_seq"', 8, true);
          public          postgres    false    210            �           0    0 "   about_achivement_achivement_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.about_achivement_achivement_id_seq', 1, false);
          public          postgres    false    212            �           0    0    archive_events_event_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.archive_events_event_id_seq', 1, false);
          public          postgres    false    214            �           0    0    archived_tenders_tender_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.archived_tenders_tender_id_seq', 1, false);
          public          postgres    false    216            �           0    0    bcg_users_user_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.bcg_users_user_id_seq', 1, false);
          public          postgres    false    218            �           0    0    bcgvl_contacts_contact_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.bcgvl_contacts_contact_id_seq', 59, true);
          public          postgres    false    220            �           0    0 "   bcgvl_staff_designation_deg_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.bcgvl_staff_designation_deg_id_seq', 1, false);
          public          postgres    false    222            �           0    0     bcgvl_staff_details_staff_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.bcgvl_staff_details_staff_id_seq', 90, true);
          public          postgres    false    224            �           0    0    bcgvl_staff_groups_cate_id_seq    SEQUENCE SET     M   SELECT pg_catalog.setval('public.bcgvl_staff_groups_cate_id_seq', 1, false);
          public          postgres    false    226            �           0    0    director_desk_dir_desk_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.director_desk_dir_desk_id_seq', 59, true);
          public          postgres    false    228            �           0    0 !   director_status_dir_status_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.director_status_dir_status_id_seq', 1, false);
          public          postgres    false    230            �           0    0    division_div_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.division_div_id_seq', 7, true);
          public          postgres    false    232            �           0    0    documents_bcg_doc_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.documents_bcg_doc_id_seq', 2, true);
          public          postgres    false    234            �           0    0 "   emp_designation_designation_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.emp_designation_designation_id_seq', 1, false);
          public          postgres    false    236            �           0    0    event_category_event_cate_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.event_category_event_cate_seq', 10, true);
          public          postgres    false    238            �           0    0    event_gallery_photo_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.event_gallery_photo_id_seq', 9, true);
          public          postgres    false    240            �           0    0    events_event_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.events_event_id_seq', 10, true);
          public          postgres    false    242            �           0    0    faq_faq_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.faq_faq_id_seq', 4, true);
          public          postgres    false    244            �           0    0     faq_mst_status_faq_status_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.faq_mst_status_faq_status_id_seq', 1, false);
          public          postgres    false    246            �           0    0 "   feed_mst_status_feed_status_id_seq    SEQUENCE SET     Q   SELECT pg_catalog.setval('public.feed_mst_status_feed_status_id_seq', 1, false);
          public          postgres    false    248            �           0    0    feedback_feedback_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.feedback_feedback_id_seq', 3, true);
          public          postgres    false    250            �           0    0     former_directors_director_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.former_directors_director_id_seq', 18, true);
          public          postgres    false    252            �           0    0 !   gallery_category_gall_cate_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.gallery_category_gall_cate_id_seq', 1, false);
          public          postgres    false    254            �           0    0    mst_rti_rti_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.mst_rti_rti_id_seq', 6, true);
          public          postgres    false    256            �           0    0    mst_state_list_state_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.mst_state_list_state_id_seq', 1, false);
          public          postgres    false    291            �           0    0    mst_sub_rti_sub_rti_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.mst_sub_rti_sub_rti_id_seq', 1, false);
          public          postgres    false    258            �           0    0    mst_subs_rti_subs_rti_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.mst_subs_rti_subs_rti_id_seq', 1, false);
          public          postgres    false    260            �           0    0    mst_supply_bcgvl_supply_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.mst_supply_bcgvl_supply_id_seq', 3, true);
          public          postgres    false    293            �           0    0    organisation_chart_org_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.organisation_chart_org_id_seq', 7, true);
          public          postgres    false    262            �           0    0    photo_category_cate_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.photo_category_cate_id_seq', 17, true);
          public          postgres    false    264            �           0    0    photo_gallery_photo_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.photo_gallery_photo_id_seq', 74, true);
          public          postgres    false    266            �           0    0    product_product_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.product_product_id_seq', 9, true);
          public          postgres    false    268            �           0    0    production_pro_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.production_pro_id_seq', 4, true);
          public          postgres    false    270            �           0    0    recruitment_rec_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.recruitment_rec_id_seq', 2, true);
          public          postgres    false    272            �           0    0    rti_contacts_contact_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.rti_contacts_contact_id_seq', 6, true);
          public          postgres    false    274                        0    0    sliders_slider_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.sliders_slider_id_seq', 9, true);
          public          postgres    false    276                       0    0    supply_of_bcg_supply_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.supply_of_bcg_supply_id_seq', 2, true);
          public          postgres    false    289                       0    0    tenders_tender_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.tenders_tender_id_seq', 2, true);
          public          postgres    false    278                       0    0    user_role_role_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.user_role_role_id_seq', 1, false);
          public          postgres    false    280                       0    0    vaccine_supply_vs_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.vaccine_supply_vs_id_seq', 1, true);
          public          postgres    false    282                       0    0    video_category_cate_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.video_category_cate_id_seq', 2, true);
          public          postgres    false    284                       0    0    video_gallery_photo_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.video_gallery_photo_id_seq', 4, true);
          public          postgres    false    286                       0    0    what_new_whats_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.what_new_whats_id_seq', 44, true);
          public          postgres    false    288            x           2606    16942    about_us About_us_pkey 
   CONSTRAINT     _   ALTER TABLE ONLY public.about_us
    ADD CONSTRAINT "About_us_pkey" PRIMARY KEY (about_us_id);
 B   ALTER TABLE ONLY public.about_us DROP CONSTRAINT "About_us_pkey";
       public            postgres    false    209            z           2606    16944 &   about_achivement about_achivement_pkey 
   CONSTRAINT     o   ALTER TABLE ONLY public.about_achivement
    ADD CONSTRAINT about_achivement_pkey PRIMARY KEY (achivement_id);
 P   ALTER TABLE ONLY public.about_achivement DROP CONSTRAINT about_achivement_pkey;
       public            postgres    false    211            |           2606    16946 "   archive_events archive_events_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.archive_events
    ADD CONSTRAINT archive_events_pkey PRIMARY KEY (event_id);
 L   ALTER TABLE ONLY public.archive_events DROP CONSTRAINT archive_events_pkey;
       public            postgres    false    213            ~           2606    16948    user_info bcg_users_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.user_info
    ADD CONSTRAINT bcg_users_pkey PRIMARY KEY (user_id);
 B   ALTER TABLE ONLY public.user_info DROP CONSTRAINT bcg_users_pkey;
       public            postgres    false    217            �           2606    16950 "   bcgvl_contacts bcgvl_contacts_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.bcgvl_contacts
    ADD CONSTRAINT bcgvl_contacts_pkey PRIMARY KEY (contact_id);
 L   ALTER TABLE ONLY public.bcgvl_contacts DROP CONSTRAINT bcgvl_contacts_pkey;
       public            postgres    false    219            �           2606    16952 4   bcgvl_staff_designation bcgvl_staff_designation_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.bcgvl_staff_designation
    ADD CONSTRAINT bcgvl_staff_designation_pkey PRIMARY KEY (deg_id);
 ^   ALTER TABLE ONLY public.bcgvl_staff_designation DROP CONSTRAINT bcgvl_staff_designation_pkey;
       public            postgres    false    221            �           2606    16954 ,   bcgvl_staff_details bcgvl_staff_details_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.bcgvl_staff_details
    ADD CONSTRAINT bcgvl_staff_details_pkey PRIMARY KEY (staff_id);
 V   ALTER TABLE ONLY public.bcgvl_staff_details DROP CONSTRAINT bcgvl_staff_details_pkey;
       public            postgres    false    223            �           2606    16956 *   bcgvl_staff_groups bcgvl_staff_groups_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.bcgvl_staff_groups
    ADD CONSTRAINT bcgvl_staff_groups_pkey PRIMARY KEY (cate_id);
 T   ALTER TABLE ONLY public.bcgvl_staff_groups DROP CONSTRAINT bcgvl_staff_groups_pkey;
       public            postgres    false    225            �           2606    16958     director_desk director_desk_pkey 
   CONSTRAINT     g   ALTER TABLE ONLY public.director_desk
    ADD CONSTRAINT director_desk_pkey PRIMARY KEY (dir_desk_id);
 J   ALTER TABLE ONLY public.director_desk DROP CONSTRAINT director_desk_pkey;
       public            postgres    false    227            �           2606    16960 $   director_status director_status_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.director_status
    ADD CONSTRAINT director_status_pkey PRIMARY KEY (dir_status_id);
 N   ALTER TABLE ONLY public.director_status DROP CONSTRAINT director_status_pkey;
       public            postgres    false    229            �           2606    16962    division division_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.division
    ADD CONSTRAINT division_pkey PRIMARY KEY (div_id);
 @   ALTER TABLE ONLY public.division DROP CONSTRAINT division_pkey;
       public            postgres    false    231            �           2606    16964     documents_bcg documents_bcg_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.documents_bcg
    ADD CONSTRAINT documents_bcg_pkey PRIMARY KEY (doc_id);
 J   ALTER TABLE ONLY public.documents_bcg DROP CONSTRAINT documents_bcg_pkey;
       public            postgres    false    233            �           2606    16966 $   emp_designation emp_designation_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.emp_designation
    ADD CONSTRAINT emp_designation_pkey PRIMARY KEY (designation_id);
 N   ALTER TABLE ONLY public.emp_designation DROP CONSTRAINT emp_designation_pkey;
       public            postgres    false    235            �           2606    16968 "   event_category event_category_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.event_category
    ADD CONSTRAINT event_category_pkey PRIMARY KEY (cate_id);
 L   ALTER TABLE ONLY public.event_category DROP CONSTRAINT event_category_pkey;
       public            postgres    false    237            �           2606    16970     event_gallery event_gallery_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.event_gallery
    ADD CONSTRAINT event_gallery_pkey PRIMARY KEY (photo_id);
 J   ALTER TABLE ONLY public.event_gallery DROP CONSTRAINT event_gallery_pkey;
       public            postgres    false    239            �           2606    16972    events events_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.events
    ADD CONSTRAINT events_pkey PRIMARY KEY (event_id);
 <   ALTER TABLE ONLY public.events DROP CONSTRAINT events_pkey;
       public            postgres    false    241            �           2606    16974 "   faq_mst_status faq_mst_status_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.faq_mst_status
    ADD CONSTRAINT faq_mst_status_pkey PRIMARY KEY (faq_status_id);
 L   ALTER TABLE ONLY public.faq_mst_status DROP CONSTRAINT faq_mst_status_pkey;
       public            postgres    false    245            �           2606    16976    faq faq_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY public.faq
    ADD CONSTRAINT faq_pkey PRIMARY KEY (faq_title);
 6   ALTER TABLE ONLY public.faq DROP CONSTRAINT faq_pkey;
       public            postgres    false    243            �           2606    16978 $   feed_mst_status feed_mst_status_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.feed_mst_status
    ADD CONSTRAINT feed_mst_status_pkey PRIMARY KEY (feed_status_id);
 N   ALTER TABLE ONLY public.feed_mst_status DROP CONSTRAINT feed_mst_status_pkey;
       public            postgres    false    247            �           2606    16980    feedback feedback_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT feedback_pkey PRIMARY KEY (feedback_id);
 @   ALTER TABLE ONLY public.feedback DROP CONSTRAINT feedback_pkey;
       public            postgres    false    249            �           2606    16982 &   former_directors former_directors_pkey 
   CONSTRAINT     m   ALTER TABLE ONLY public.former_directors
    ADD CONSTRAINT former_directors_pkey PRIMARY KEY (director_id);
 P   ALTER TABLE ONLY public.former_directors DROP CONSTRAINT former_directors_pkey;
       public            postgres    false    251            �           2606    16984 &   gallery_category gallery_category_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.gallery_category
    ADD CONSTRAINT gallery_category_pkey PRIMARY KEY (gall_cate_id);
 P   ALTER TABLE ONLY public.gallery_category DROP CONSTRAINT gallery_category_pkey;
       public            postgres    false    253            �           2606    16986    mst_rti mst_rti_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.mst_rti
    ADD CONSTRAINT mst_rti_pkey PRIMARY KEY (rti_id);
 >   ALTER TABLE ONLY public.mst_rti DROP CONSTRAINT mst_rti_pkey;
       public            postgres    false    255            �           2606    17041 "   mst_state_list mst_state_list_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.mst_state_list
    ADD CONSTRAINT mst_state_list_pkey PRIMARY KEY (state_id);
 L   ALTER TABLE ONLY public.mst_state_list DROP CONSTRAINT mst_state_list_pkey;
       public            postgres    false    292            �           2606    16988    mst_sub_rti mst_sub_rti_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.mst_sub_rti
    ADD CONSTRAINT mst_sub_rti_pkey PRIMARY KEY (sub_rti_id);
 F   ALTER TABLE ONLY public.mst_sub_rti DROP CONSTRAINT mst_sub_rti_pkey;
       public            postgres    false    257            �           2606    16990    mst_subs_rti mst_subs_rti_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.mst_subs_rti
    ADD CONSTRAINT mst_subs_rti_pkey PRIMARY KEY (subs_rti_id);
 H   ALTER TABLE ONLY public.mst_subs_rti DROP CONSTRAINT mst_subs_rti_pkey;
       public            postgres    false    259            �           2606    17058 &   mst_supply_bcgvl mst_supply_bcgvl_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public.mst_supply_bcgvl
    ADD CONSTRAINT mst_supply_bcgvl_pkey PRIMARY KEY (supply_id);
 P   ALTER TABLE ONLY public.mst_supply_bcgvl DROP CONSTRAINT mst_supply_bcgvl_pkey;
       public            postgres    false    294            �           2606    16992 *   organisation_chart organisation_chart_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.organisation_chart
    ADD CONSTRAINT organisation_chart_pkey PRIMARY KEY (org_id);
 T   ALTER TABLE ONLY public.organisation_chart DROP CONSTRAINT organisation_chart_pkey;
       public            postgres    false    261            �           2606    16994 "   photo_category photo_category_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.photo_category
    ADD CONSTRAINT photo_category_pkey PRIMARY KEY (cate_id);
 L   ALTER TABLE ONLY public.photo_category DROP CONSTRAINT photo_category_pkey;
       public            postgres    false    263            �           2606    16996     photo_gallery photo_gallery_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.photo_gallery
    ADD CONSTRAINT photo_gallery_pkey PRIMARY KEY (photo_id);
 J   ALTER TABLE ONLY public.photo_gallery DROP CONSTRAINT photo_gallery_pkey;
       public            postgres    false    265            �           2606    16998    product product_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.product
    ADD CONSTRAINT product_pkey PRIMARY KEY (product_id);
 >   ALTER TABLE ONLY public.product DROP CONSTRAINT product_pkey;
       public            postgres    false    267            �           2606    17000    production production_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.production
    ADD CONSTRAINT production_pkey PRIMARY KEY (pro_id);
 D   ALTER TABLE ONLY public.production DROP CONSTRAINT production_pkey;
       public            postgres    false    269            �           2606    17002    recruitment recruitment_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.recruitment
    ADD CONSTRAINT recruitment_pkey PRIMARY KEY (rec_id);
 F   ALTER TABLE ONLY public.recruitment DROP CONSTRAINT recruitment_pkey;
       public            postgres    false    271            �           2606    17004    rti_contacts rti_contacts_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.rti_contacts
    ADD CONSTRAINT rti_contacts_pkey PRIMARY KEY (contact_id);
 H   ALTER TABLE ONLY public.rti_contacts DROP CONSTRAINT rti_contacts_pkey;
       public            postgres    false    273            �           2606    17006    sliders sliders_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.sliders
    ADD CONSTRAINT sliders_pkey PRIMARY KEY (slider_id);
 >   ALTER TABLE ONLY public.sliders DROP CONSTRAINT sliders_pkey;
       public            postgres    false    275            �           2606    17034     supply_of_bcg supply_of_bcg_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.supply_of_bcg
    ADD CONSTRAINT supply_of_bcg_pkey PRIMARY KEY (supply_id);
 J   ALTER TABLE ONLY public.supply_of_bcg DROP CONSTRAINT supply_of_bcg_pkey;
       public            postgres    false    290            �           2606    17008    tenders tenders_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.tenders
    ADD CONSTRAINT tenders_pkey PRIMARY KEY (tender_id);
 >   ALTER TABLE ONLY public.tenders DROP CONSTRAINT tenders_pkey;
       public            postgres    false    277            �           2606    17010    user_role user_role_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.user_role
    ADD CONSTRAINT user_role_pkey PRIMARY KEY (role_id);
 B   ALTER TABLE ONLY public.user_role DROP CONSTRAINT user_role_pkey;
       public            postgres    false    279            �           2606    17012 "   vaccine_supply vaccine_supply_pkey 
   CONSTRAINT     c   ALTER TABLE ONLY public.vaccine_supply
    ADD CONSTRAINT vaccine_supply_pkey PRIMARY KEY (vs_id);
 L   ALTER TABLE ONLY public.vaccine_supply DROP CONSTRAINT vaccine_supply_pkey;
       public            postgres    false    281            �           2606    17014 "   video_category video_category_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.video_category
    ADD CONSTRAINT video_category_pkey PRIMARY KEY (cate_id);
 L   ALTER TABLE ONLY public.video_category DROP CONSTRAINT video_category_pkey;
       public            postgres    false    283            �           2606    17016     video_gallery video_gallery_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.video_gallery
    ADD CONSTRAINT video_gallery_pkey PRIMARY KEY (photo_id);
 J   ALTER TABLE ONLY public.video_gallery DROP CONSTRAINT video_gallery_pkey;
       public            postgres    false    285            �           2606    17018    what_new what_new_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.what_new
    ADD CONSTRAINT what_new_pkey PRIMARY KEY (whats_id);
 @   ALTER TABLE ONLY public.what_new DROP CONSTRAINT what_new_pkey;
       public            postgres    false    287            X      x������ � �      V      x��]�S�H�����x��Z}a�#0�g���y�b�TKմֺF���_fV���9Z3�cw�n�*++3y�do^l��ߜ�0�r'��0��<�c��ES���=����B���5;|z����������`��7�ؗ��z/~���[������k�]������X[��[�g����4~�z~�wT�Nc�4���/��(�:����g�g����,���7p�ŧϿ�Oǒ؃����w���������=u%�#�A�h9!����:_N�$Jx%7;��0��RƁ�N��^�|��S����#/N��	�^�"�>~�Ap?��s�\��)�9z��|��;����a97�����<���	ʓr��ѕH�@�~2]��l��k�2�f|�{�L�,
��f��0sduZ!ȃw{
T�p��j�g�Q���G�)�/�j�&Nx�q"ğ��ă��|�FrM�m��g��΢�e�D$N�G)�2�}���T�^x	ĥ(�ޔ��.����w�m�<K�˄Q3�<�����yw6޽�[4"��	�poX \ρ݂�>�g�}���˸�Vl��l�Q��#���"�<���Fp�K�qx��� SQ��طX8�a�C� ���_3ؘ�>wQX�
�R΁�7�"4�V���(�g�eп���4lQ������7n���ژ9˳�d��dt�@�����q������w�(��`<�D�����d	�h��'������6�����S����8W '�Ҭ&�:;�a'.��Ҩ�A�i�xm%�����{s��D|��ݮI_��8�s�]/mR�C�D�e��h�����<���)ZX�8L3/�3�s~
q�"��Kj�H�O��
�(���ߢ�w��)��2��ᓔ۸����Ar����[k�A��6ۤ��������k$@����v�c=�[x��	�s�/���Ê3��>�8�n́�|��諓�����n�%��y��ጇ���
g�\_�H��53�����_�uO����ڪ�Ҝ �+�굇�������)�D`�2��Y$�i�̂����(Sσ8�}�����іm�8dW8p/�S���+f 4�F��I��j�9�Zc)L�8�NľȄ��o}�y6׿s%��Ѡ�
J�\^�$��f�� �ŕ^%�?R,j������v9$.��D^(�U]�K���@��e��5�2��G�r�a�+O��1�p>����8D��e��dN�C
��w��H��\�@B�b�_��֦غ�W,r�<)'��Es��+��%3��4�m�{?\��ǰ֔_���L���%��0�v��Z��rrr ��I� �,�� p/��)�0�=�=���y�7%�{=�H�/�]��C]��R^10�^��NZhB���AS�1's��/sA�R����:K�Я`m��74������)�a���f��0�^}�cWʾ���XC���x��|�[��󗑞^���K�z=�L���1�=��i?��+��@���i���rZ�c�t�6��t�p�
��q|���W���Rs_�w�%��Im�����Z� f�R!��P:�)���[���D�\By�)����ڂsňwp���dJk��q�t�J��ش� t�`�0`!��*�\�U�a�+�J�~��*�8���GII3�����B�����yH�h,�^Uʧ-(Y��DiJ�p�����>Nn�9 �4-k͒���{" ���媨,C΋�9@=�oF.�Q�𫥛���w��^O �� 2o������Q��9q/-��H�nX)�-#�)$�	�r��������9p��>X����=��/������a�߷i�I���/��`6�%/��e�{��^��L��5�/�6��n}����e[^���G"��߁A���Ys��cZ��ntM�d ;F���纾�k��l��$l���Ai��݂��,Y�&�*��.��n���tFC�Ľ�@�MS��<5���h�p�-�ҭ�s�<�6>��5л�g�	���i�g����#������h���݇������\4w;��p�GVW7�G�f�c�N����Es�c�A���n����~�<���n?�l:�# ao4ҍg��a�x$,�B�C�c>>+ͦ�1��f�c>���y�+��=
�*D��χ!�"��\1a"0P�^.ּL���]�O�E)&�0�9��'�(l\Ȼc��(k�1����#Θ�Ɂ������ڗ�Yy=�����jJ(P>-�����Bk���`J�}R���}�]#�72�F.���IxY���+�Y3k���\�Xz�1(���n�l@��w����`%������O1;�_�(+7U�FpL���*I�)��D1��0��z�cU�4��61�K:�Ud��@�p)봰z��<WP&��(�$�Pq9�s�\p0#�F��Xp)92��1j�T~�v*�d������X���IH�[��\Ҙ�0���K�R����xZc� O��o���\����~��� �܄_�I��VL�|8�=�R�ޑU ����3� P�����X
L��uX��h�4��N0�<�ՓxVi9�����J�s��Z+l8�I�$�E(����4�RW�����}�\�륰�.�6�[&R�;�/�P(�^M����l��6S,؀*� Q�����w`m(��"w=����
�l"�ø�Vͱ�@JZ!���Q%P�6\���b���FԈ��Ҿ$����z,U{�c:8�x�7�<��I^0���&�K�Q��z>qqs��`��S�$/A�O�e�zL9,�Sݐ���@�4�Gg;��_�����mq�{Q1m�v>�}U�����]�}1�LL�-���M ;&�V�����7����Na�K�7wl��v2���X�P��W������t.K@���0��eP;����T�lC���F^��R�)�K��b�+�z`�e�xFM,�������Z�o���%�y*�K�fWȤ/*�u�COQ�"�'x�C7�%� \	ٻ���I�r�S א��%��gP=�F��X��*h
�&�	3��O���tЌ"�yr)�Va����&�g8P�CI�W+�-7�EJ��r�}�'N��a�L�~��E/f�Ra-I���)��V~I�̐O�����G���z�b�N���X�/��L�"�Q�9���ZGYvW.�(2�:���#Of�O�-DD2�ʂ�"Z�G�a�����D�D��#��C����D��Z�Ȥ�Z*Y�E}�/�*�4�
�$�p��pVv���iu�~P?�%�@@ �qsg�UY5�d7(6�:��&�e��:c ZjX}��+uM�f�;�Fr��L<�^��%�+k�CR�S�]c}�:��u,\!h4�ra\��Y�?�֦�t2���}2�`/��%�;-��b1Z ������6�x~���b��#;zwq0>9g˵�����x�
2i�Ƃ*s͞ܚ�Y��'���I?���Hg����a���=��9����馎a=:Hȱ�D���*��{���a�F-J �v=���$	�؄�lh-����l�����>���6d~ �kMT���t*]6W��m]�|x����>�5�MW�^�,GI~)�>�R0螓��ҷ�����ur���w�5z2&$~`�b��
f�,�=r�7G �I�L��L�z�K<W��N��Ǉ4H0�wy\�f��,�zg�Ւ�)����V�b��< ���B@F��?��5[V���Z�]��S�"�C�f���إd�j��ҍT����a\��]�A���N���Y{�?9:��C�@��[:~(u^V©�X�Rx��E�Gb�" �ȣ�x�(g�0�8�O�v� q"Z9,3�f�C��f���/�D�������F��0~�,��;}KU�u��<�ꔡ�O�$�����kEk��*+�$��)�[�V���_��K/��b��3�gQ�Q"�A�"74��f7�^�p{=�n�X,���w�q僊��*�*��d�����Ļ� {��mc��E���Zo��    �Z�{�dY����η�Ę����	w�IY
�2��'��24���5�/�+50^��I+jT�QhSux�w�kvW3U~��\�##�3�[/�v�a��m�?���k~��v#M+�����	��E��e��-�`رIDb������c��hn�v�a��nO�:���Y�~���^� �<�<���S8E8�����R��X�G'�Oy�{*G�n�O�V�tJ�� �]`).P�� �Ny�̈w���2 �5�7�����tH�5��V�����4�e޶��b�1�B̥����8�Mc�5;��+��U"��NB���DT["j��)��!�-ǡB�(���5��`E+zW�S*�RW@ʏ+;�h�oc�Sz�2�V&�1�n�Գ*�����T��!y� �	� �#d����Ƈ��k���7=��
F�=���2Z�C�u���"���0��W�9�]�B�e��T\ z���O"�J[z�A?�Ԅ�Z�D*5�t�@V*ռݩ�"�L	1�f�@6jz	��.����]���$�2��x��Д���G�<h	�M`3)�Q��bI�`����"tkE�_����q����赖��8����
PY�ی������R.��r5~`)P�с�:�VL�0�B�b��ڈnjN\fr��j�ES�,B(���Y�ک's��A�@��I��Nx��]j�궻����ݱ�$9O�Y8�A�x��S_��_,�D�\�X�#�mȂ4��+�\QS^V���<�ٻ_�S8���ƎO��/;&V�����dT��EH�@d�<-2166��Q�� �1�kN[�l�JH����y�:ӌ���%w��k�e#yi\�aǖ���hN��R��䄝xSA%œ�յ����q��[L�D#z�\���fY��8����o��)�>��f'��s��L
:v|�99: �J:J�I��V���:�`	H�Z`�5һ:����x��Ҟ�tw+�2�̉1)�':����ѕ�S�o냮j��b����}�L���u\l�@7)�`V�ٻ�v 0uIh��}�l�G��s@��J�+P%�ry�<��n�ˮ�t&� ɮ�<���a�)Xd)���:7�F���ٔ�A�U;S9̘�'l�6��S�$q���9T\�ID�E�6��Ӣ���E�%�7W�����j��. �pT!��*O�3�=�R�SU�K�MY ���A�����Znq�+/R�wCQ�ʉ�r���ҍ2t%�����`aD@�XTf�]�TD1)ݒ��a��)ȝ;"d��Z��d�����Z���R�Aq)o-FV'�k�$p��>�Ji,�[$�`	ju��ϓBR���t�����Qe4�`���l�p+*���"��R����������ooz�Qת�m��:x�~k����iZ����Ü�$\1�g���G��O��G�Ui���d�Q��r�rÛ�_�4u��梳j�)š��	�X�m��G�G\�$����]s���_��!���|�oY��X?��i��I
;�8bU���2>�-�▇�������fw�7�{Ơ;UKl��z�8����?��/�jO7h	��!@�؃\=�`�e � ��˦���jv���'�ek�"� Q�svv�[wV7.��瑋�8��Q��s�J�s'wk)��=ai�J�^��@��(O 4�˙��m�]k�2@v��m5���>����L����>3��*3N��Tz�$�y�A�WX/� p�v -���T�Ѷn��Wy�Ou��4p3�O
7�y���V�љ�	w��:`�x�Ô���s`����mC2w.�L�/Y�
e�e_�[
���`�ګ��b����E׊��w�Ga����M��gIt���/�V�۷�G��֐mwM���wa"I�=O�g|�D�os�Rd�.�t<��9��tg/fQ���y�-��<�[pՂ��<ԟ]�B����n��,�o�d����[؅}Ŏ�n�P�FO�F�Y����v/�cޱ�����݋h�Vl�o�h�X�9�,[����W^��q��+��j������������K������TZ-�o���/m�E�q���o��\}(�Q黧+�7�e��[/��1�N���}�^��6}�f.9D�lU������Լ�-m���sR"�ei�սD���]#u�2�<�%�ԅ�����Ƨ�`Y>�Z���<��#m�f��4s��UǩQ�-85���zk��N�HF��t���=�^�0��S��:��SÖ�@C��_��`j�SC��uJV�@��<li-85xj��^85�zkvK��k���N=��� ��5{�qj�cׁS펦쑶����#K[v�%�B��z�_�Z������G�i>�������G��)��ֈ�u�Z�dΖ��@�F��������]O0e��F큩n�YEi���U���|j+tO���e����@z�ȑ��רRu�z��C`�g��Xj����S�V������)��v�)����Z�Ԭ� �ю&
{T�v�� ThIq��85j��@�E����g��,���������u6D�အ��z����Ӻ�� d�F3�g��JV�T�Xg����u��_�z������&�)��>�������Z����Ϡ�̲��h���5d����%(5��m��=�?x�Z����
F�m���n/��� o��z�6g�,�Gkt���)03O������b$�䧺��Yg=�`ݗ�a~X�hC�o�Qw`�}=�c����'��m�(I��n����mN�����=�)���.�~{0�Zg�R`T���ڏQ��ٛJx_&H-�z�Q�['�Z��-i��k}���>|6�R� ���mH�k-��H���nR���6�x��7ص�,��iO�= 60��B�8��C�ۮ��M8��XPV����RB��	鷄�:P=-?�VK_L���j���V#���`Gku��2~#m��>t�ε>ޠE��"R6P����2T�x��:��n��)�� �����?q�����J�#ZD��6p�����ol^\M���zqծ��4�l0�R�z�7��gh�3��Z��"�i)���������!{��e�#0��~������ᇭ׹�\Z'�b �SN�,��$�.�(���Z����V`��1�K~���d���R����nb���N�=V��/|�ܤW���Ւ����|c� ��i�r�|��Q����¬����
G�(����'<��W���L�v��q"�;W��p��D߂K�\�r�:�	�A>�k���)H��e���ͷ���]3�M�����;�3c�����5�ū27���W�V�\����9��]��+V/���vz1.��DK໾'<sf"�X4ɸ�o�>]|�/�;�WG��$=`����FA V��i�����"p�''�&@���ҁ揍Fl4��5⑆i��ة@iY��kҏ�#��d~�?��hl~��`�eh�M���W��_S^{O8��(����5T���/�7v�P8�B���+�i�:�Ynn�f����f̍R�n�c� �b���eh�@���bVS�с:������v<��80F��Ma{f��1<�˒��f�������}@ �ܢ�@�!���!�m���J��J�K1��3���D�˂�N�jO<��%xI��� y/�$�s�}l��P:va��'߉�^y��[����i����9��d�}"D��
?C�M)�Ã8OWl�^�㏸L����]-����bJ,�mܪ"�+?�lYڢ����������܃�d���7G�vW�aWi��������k�H�ܒ8W�����l�ĠK��%��_S�W����2������4�=�Lm˅�<�ʏ9}��n��{q�����i�lq�z�HY�	�6KΓ�;je��Q�$kł��:Sw�K�s��UӂFM�y ��KAe3���[ԓ,�K9���Z�+��N��z��<LL�	�6L���s�+Q;k 3����E����nS�:C�(�Vݨi��U��^���GA��[@ �  *�ӡu6��t��`����?b=eM�n*;a��s�Ҏ�`�y
�W�8Xc�Z+i'��h1�[]}d�7b���'� 'D�TX˪ja�a���� �ʻ.�"�����v����w閽��,,��I�T��wQ�`PK_�c�Fy﫼ϩ����T@��d;e�O0ʌ��7J_�}U%�yMr"��{��@2^6]�3��afB����������r7���O�2�CG�:���wǔh���D�dt/~���i� ��{��@�b��]s��m�Bs���^&2ld��2y$\̷
��>J
��:&��-t�]�0 ��)���ǰضn�0�m�h�r�#|���4��l�L^`���
u]/S{!�A��6`���R���计�^���7��Je =�T���v��8̊ƣ�y��D�?;J�^S�NϐmE{�v�>����ƛ�(F�7��F&[%�5c]7��5[s���������o�䛣Qoc��B2Y�w����:�*��B^S�ُ�2��?�16M��X��K��Ɩ�oL�X�L�G&ϯ=<�ʇ^P�A�V�"������H�,;�I޵S�-�|�9��L�S&R���z�q�]q��N���_O4v~|�x�����.<רxbL���4����rV��_
���{r?�G*�''���8����Q���>��9��:�r���V��0٘ !<��&�Eˮ>����h���Ї/�H�7��Fm��n�T�|#���q�|��C�1?\|��\�.��G2�C�����&xm���3�^�����d�"�!y|/MR+S�O�Qr��ؔ_̬�㉆ڲӔ��Q��Nr�8��0���7��{����zw`v��7�����? C,(      Z      x������ � �      \      x������ � �      `   '  x�M��n�0Eg�+���+��"[�>�"(Pd*:e�m5`ˁ%���U�G:� y�;Țvw�Y���?x�2�3.%�%��e�
r�j�=���ݴ�󖼚f�L�K����.��ws��3=y�D[�?��st�O�q��d���W�73��lL7�9��c<�eY�N'��]oY;�`��Cc��CsGa �Z�JP�p]3-A -PQ�j�T����(Rp�QRt����H�=�|���|��BW5V�Q�Al(�$����4]eЅ�������<�GPJ��(�D��O��&߲<�?q�      b   �  x�e�Ms�0�ϫ_�S���qTlҒ"�����8"فH�,���ĝ�,���g%�F�\4,�»�E>����~�_~���+%�5�@!����A_6���6�3��ͼѕ����:�b0�-��[lm Q�+]G$%Ҷ}uؚ�����5��.�:lxǎJ�K�^m�<��U$�.���jv�_�.Z�l]����4�.A8|�����z�,�ς\ϋ�C�E�C���m�*B)R����[��!o������;��)ydJ��]�$�!3�d+Xv=�&����T</��G�x��a��-(Z��YK#2�A���*���������2��"yh��n�f�r�4��YU�ni��dL�?5��J�|
�>�W�G�Ag ��6��KZ�vK��y����      d   6  x�uV�r�L���'���D4&���꫽�,|2�Ĕ��{c�@n���t�>�=}1��Ԕ�p_|�M�^�"X;��2*M'�<�y����t��#�+��$'cUf����Ô�)W�	/��l�2�;��HS����$�b������(��X�ڽ^Wl�'@$^p/��=1�����u+p�7���{,¹�X��3f@�TĻi6M�� >;o��X��
��-0��m7��V�Q�Q�4���f63�1�Z����R�-)�sn1���.�]�dJH�ɑ2����y�kbB"+�H}K-������197��]�Er��˖`�O�����m8$�re��:E��D����D2.�[���3��z�Ģ̹�P�InBu,C��v�n�9Ѱ ���ț�P�������m/��a��ps9�L3��6܆�\ �k2�	D�B�f]|�w����:�����5���)N�&��+s�/�C"<F�8���q��r��R�Rh$V��တ��Km�|p��QZڨw:����������!D�;�L��{p��,��?�:�������(u����}��5�>�_�J<ߟr3M魬����������־���
��(�%����J+��N����ۈ�c�>5���HFcx��&�9)��A�ibu���U����I�ᷠ�k��&g�` ^����Թ�:��#1��y!��)Z�|�H���8���܂��h���@i�m�\�����^����A���6Ӛ�D�k`�|��*߶0m󼚧�U��`���I�ٮ�^XE:��h�X�gב�L�aGe[R���m�� ��"�W��!~ɺѸZ��cB��&܃��Rc+6�~�/�χ��93T��v�̼2�N���鱫JW�0r��8�b�|}������^���z��1����L�Ñ�'�eT�v<�^�����/;��X��&e���Oy��ktz}N����y�|�\��Ś��2$:��1�Cy�g�I\�}����k��3�
��v�}Y��	�9�UF��c����t:� �q��      f   E   x�3�t��u��\FP���{bUjIIj�&H��=��.嗟��*��7��?j��s����� �rA      h   	  x��Y]o�8}Nч�l�vgv&m&�c7�;q���X�h��TIʩ���\R�e����X�"�"y?�=�����h�w3������~6��.�o�FGiD�9b�����<?xf�����杉H�f�	��XF<e3��:իMk6���=�sƾ�/��7v!�T?��Z�\�.,�H+���n'W7W6+��m:��v��y~������HψXNSyvjs�X�rk{����mR1|���o/3nVR�a���[���u��.ް� wo_�]	3�dc���`��,�Zp�+��o�ߵV�ɨ&9&�O��3#k���u��a�}zL朝ò����>_}`c��|�wR��F�	���2Y`����?a[�أ"V�1�N�Svk���3UN������&�ʟ��T�xon�X�7ZNT��Z�N�\m��*h�<<l���{���4�
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
�!X|�I����fCK"s��8}�1���J����9����e�Υ��:t�ل�Ɩ'cM��M�ڔ>�Vݬ���F��� ��ba�ߝ�2��('JJ�i�:�q���6i���c�)M(⹇01P##{eRgu{�����<��}�9�(���+t��SS�)���?����{���? ��X�      j   =   x�3����-N-*�LN����v�2�)J�+NK-JM�	r�2�J-��B\�b���� ��      l      x��]�s"9���+�2��9lc��{��k�m��obwD�Li\T1Rn��̔�c��{7b(TR*oI���>���~�����#~ґ
�~k;���H
��;y�i�� ��d����_�ۄ����c0ԓ�l��;g_.��5�:�C_jO��S�}�X[�X���+&\EcDU6 �[H�9!|�D0C���0_�+���O�(JW؃'�i���q�S�B��>2h*���X����vd�ǉ
���."$)�'a��P&�<���J(���f���b�d䥽sx���`S�820�qǓb:G��C(�}c黅&�
xK�pxD��D��+�d�0�^���H����W�|�	�a�;v��1}��	��A�"�~� ,�:b��
���� ҙ�>L_l�d0�X<�����	!d��j*a3+?G� ����^��]��7�,��=q�?C�0V	'�x\%;����5C��d�Y!�>��dXcn�,i4	}����q{ >�9t��:1�W�`$�Q_F�]�O�/*�P�c��[�u��_`8������v�����ҁ��v�P	���@oN��¸��D��4Q�	ܨ�S��O��Ta��&��i���'��
ljj�Sa��k����h��5�SPR�ג�6�W(�.z�ݚP��ں-Pd?n�r�܁�q�J�e�0�cfMӺ�&���H�O@TA��M8�6"# e�ɡ�7��fbS)>#�t*����\`���/�Kv{
��"M����\�<s1�?�O�YC� �?c�@fw�ʹ9��	h��'���7"PL�*q��>�c���x�3! j�$��0"���ǲ����[n�K�s<�ܣ7���2�{=ea�0(B��@�"qk�^�ؕ�r}��a�˶��f�,�К�[�3O�0���V���(��, )R�8�`+�c��F�
�QNۑ(���'k�`�`�F�PQA�A<ʔ����&J�7QV�!pF%4sc����@�.��̄�S���_ƟF
숦��V��)�U���N�FkpF��&�A`������DI��F� ��X���)��IB�(� S��3gN�v� �VB�E��L�V�%��N�l<�O����F����	U��$�k � L/	�u�m��X���� ��+W/p�,�����)�ڧ���}�ܾ���������u�uOz�������=� c�*r_��;�}U��.�y���q}ܯ����	3�����o�6Lp1_�AôyqB�*��et�8��J���ԎU��~�H�"1�����Wr�?�>�:Q���5���/ήۃ���P�S��Z����?�c�:2 h���pN����?�@���G���c.wsqU�����&8z[e������h��cp��Ȇ^67�˫*;��[����㫧�ӳtw,�UY�=SH��o���x�w$LSh\�I�����ކ��7%�YΛqS���Cܒ��yL}a]�����!��� ��@�a���o��u���p"ȁ�'	gg.!ܙ��2ԋ ����V��]'\���iJ��t� ��:9[��҉}��K�j��IZ�*r��q8n=i�U����o������}W�G�u�S;`a��4�'%j������m�Yf6a��s���-��;.������X������7߀�q���+m���ؕp)��Q���$m��FĂ4"ő0�b�i�T�w��=a�y.O�{H�$�xj�'Z��G��Zk����yB������&�>2ȝF2�F���Va�H�v��$��.$+�@d2�A�-�s�m-����n�Et�X���M���ꍃ�������H���ݽV����)����I�H�k>� ���f�Qkn�H����qJP��� ��U�ш�
YoUk� ��sF��<����bsZ�=4��:,��.�zc��R��zi��fŨ��j����b��'���'"��s�'|�b�G^�ڮ'�T��ȓ����K�zG��t^�p+�R[�%�wsP����5�5�s�9��buz�N����x^�*��}���&���[JOQ�W��"�����?s�=�}��Oڳ���:��������zof�{����͜��l�xo�qk]��~���5��i�@3���Y�� �[��z�z�Y��V�6��=.�B�E�����h�K~�17�B�"�.k�-��t��>��z��%g��K�������{�����z�ݱޡ�ٮ�������vkG��j�ux��{_��^�4�s񥎶��v4���-�Bl�UT:��;��^�º�NAfW�N�b!�ā#}� ���~hqQЁA�s�O��}v'}D��đc�X��L���`���
;�!���̟o�	�9��~��úg�}b��W~�@����5�Ǟ���}�Vح���p�P�jA;>c��q�\2�A0��>,��_�.�X����_a�=���I�`��sG�¢���}*F� )��8hd�	�;�Ɩ:s�!��gpQ�#a��u8�(V|8U|��6��&���[MRd��U�Rbĕ���1r]�dQ4(�
�Y"ϟ���т��!��-��?�a7Ǡ�g�+P��C��j[�a�	��I��΁b���c����ڒ�0&���_�S�"���*9ES��Q��
Ib�F�H�1'i�#��NI���E� s ��N�O:�Y����0 �[��9qT3�&�uO;��א��2ځP?�qC�3� �H}���� �n�\N��������r��^����.��t4'���w�.�H`m4������o4���O�7Hm�Y��������Wǃ�P���>9��i4k/<o��&��� 'u8;H J�7^�A�f啛�T3�b�v"�t�T. P'�W3v;	�\7_�c}W�hѾ�l:a�NǸ 8@�(���#л�B HN�!L�O&��@�̍^	�?�$��Ѐ'8JvQ֡�47 ׫�̓������>:�V�İԿ���M	̣��������pz���J� ��3Bݤ}�EH�6'����A0	�{��}P���r�Jp��w�T2��&2n�j5�G�G)�)�0Hj����I	��B�\�ǙSx.e臣�өU@͵���f�8��7O���Z󌀧����g}%����V09A���|V	���hQM5��Hf.�Ah��Hr��|�1��Gqz���"1t������0F1� uipO|��ܞ-Ux=��	�]kz9���0�4x�(���@�x�3^��-�ve�l`^]��-�x��_<�X/��v=Ơr��/�XM�s�	����y.��$�JP�W?��U��$��Ԩ���$e��[�t�g,'&�Ϝz�eL" ����0��e��W�{�lbQ6\6�Vba��S��9��%×G,i1uk�QI��dS]�I����2;0h��˿,�r�e������1�h��m�"D���	s&�a�ۗD:X�T�0��n����n��m���H�vY��RRr$��.Ӡcr���m6�T�+�8���Ģ���h���յ	Ւf�sCO޲l�-�E��c��le���@����r=�EES��[��"����˚�1*�P�1��e�D�>汐dza��r��ʇ��v�Eb7K�ae�}	��%���@7G��]��c�"� ��/z��#�L�4�ګ��Vw[������w����]�~���Q< o�3��`[@�4qAodRw*�55>,$���J�`����|���5��l4W.c�/ǭ#I��Mj&�#'�Z#���5)v��?i3*���j�m�5�v�nvnŭs,w�;�Z��C/�yYC^��Z�s�Z��5�(�C�@<������rЉ��Z G�N�lcL�5�;���o�S`�Ԧ:�,!��l��v�	"��$G��Ex �*>̜�B��T�k7&rKG[�[I����B�.$�?���J���l��C��1��](�Ikf�&��\xv��Mi3���F*Ľ6z �	  �
1�۲�{X:jRi9������`XwL�(��Ԧ�҈5-Y�J��Y�X�(����@�,�[,�|Z}��͓}����*p�r�hV�����`�?�!��r�V?�4�lp�V�S���)I�/-�D�Q8u�("W��5`����}�T�ok�@�Ӥ����1Z�'�G0
��i+�S�}�&�۴��h�t@�6? ���L��2��6�^�['2:q�D�tt�3���"q��:�l`�W�M�(�(qZ�\�qp�9���/f��9#�R��rV�%������u�RB��^;�|�C�5���m�K=�:�������'�c��꭪Z�"�]�۔fa���F_�������(7���G������D��_�����f�	���"�0�Y2s#�G���C��V�Y��O���~�K��)�[k�\�Sl</��綏�ެë���➫
�Z�>e�[f1��R�Zag���C(W��v�IО�)��]wN/vnɭM]���:,��Qχ�D���i��<�t<)2ܜ-z�b���O,�~"]��r�ݝ���0� X$:�cW�V��:�b�/���Y�����r�x4G��?��5ݕ����W�������#V��c^a��^r2�3�����d��v~%�컼\ևO���6���/p�.�ت���N�� �� � �Q��+��K��B�Ϙ;��Ÿ�o�!�9�<D��d�m��
\e�X�q�*ۯ�j��g)���S��]�c�@[^�{�'(5޼R�`��	�y�Ӻz<I�\@���\�4�xqdf(g".�1H�*,�����Vh���e�Ta��:��ե�k��m�R��S�� æ�/j\őO���b\s��R�}��Tc~��?�8��C� <����JF��n�Y�P���-���0��#�t�/ֆ�B�--y�~�"�����Jj�FIA�O� �i0q9�_�*����Q���z{��p����j!}�$7~�<ʈWT�Бt!n�7��������ۍ�����	f�{Ш�o���޼��`�zס:�t\��U��`--8�쪗�T���7�5��@��"��٘�	<�V�HM�XӦ?�L��is���Ot�� >q.��ʅ�0�{�_Xv��v�N���&7B��=���#��d*y��㆐A1��9F���Y����1�?�#��i����xЋA>c��͎2�#���}@�$��Q�E����K)\AWK�2'y�.���sWE�w��=���ᵨ���/�u2�-��4��#�߶�5gG���\-�2L>��Dl�L�ݽm�A�Iq���:�{3K/]6Jj�N�<U@!�?M�p�ey���Q����_����u�{ҧq`���{��fU��D��I����|]�D0J�Cj�4�ṿ�`���L]1���P	�9А��&&'�\e�;�u��؂�t8zx+�|��*;�C����~���ؽ)顋�H
��1�\�E�˞�J�r�r��������qaW�E��q�O��)w��ᙢ9�rpQ�`>3���ݽ?1��Ҽ���[�9A1�{Uc�&X[��H��'BNQ!%ب��ɕ�g�T(Sa!���M|�<�֯�/���)MyBr��R�eq�)|��xm�)�o�ނF����Ҵz��}�1�-�r���pS.�J��+�u?ܯ.n�.r*GP�-���/�������[�e1��UN���Y�Ȗ�p��\�<��o�e۵�{֫�Y�ld��[�?��_��$�b~�QOp{��P��Uʘ�QaM-�2�b�F�A�����Í��i�\��W���	�+ T���)������/"+�[t1e�+&��;j4�`�Rk�j��[�N��ޕ�"�"R�+܁jn?��6�r��܃�(��+��
��$8�>B�2Ddv){1٣r/4�����L��������t�!=p~iR����� ��l�G�V�{��}��o���������P6W�A8��,�3�J�)��R�b�,�+�5e0��
�P�a��v�qe�B�WR�B��/pʢ���#3+���9�\�*���� ٟ���X�����r㮺��Y;Ō�y}�HF���Mq�Ln,�t*�Bףߜ���	;���������B����U�C������cxjB�
?��L#WG�y	<B峬��n����V�-/:l������>!�'��!��7��+HU���Q�u�?��fb��,����F?Դ��q^8O���=���?6���o�X�@�v�J�Y�����$�w7���P�I�g[�x�>����f���Ƿ�f���Ͳ�T�o?�_p�Ws��Û�p���| K��AΓc]����!�����_��#k�u��&�L�������p���z·ԅ�:p��4��1������I>2�[���oe���'�`���&�E3��Q�Goh\w�up-��Zs�������Q�Q������������?��E      n   �   x�}�=�0���Wd�!!�4I��:���N�Q[��R?�o\D(�p��ܫH��Ϻc��p����3"=�$ �˫�:�8&#��\���󜫨�]Q�ʬ'���D=O���A� F��zo)��z�/ٿ�OA�9Dhl�����8uH=�b�"�3e�oͣ�1��`��&w����J�      p      x�3�t�,JM.�/�L�,����� @q      r   �   x���;n!��=�^`�<f� i��Aaɱܤ��ͮܙ���/��v�=�o��z�KD�F��X�]ZQC)����bg�h����Jd`�F&0q�N	�"KH�$��B�Jh<�Z��{_��kf �ѡ�����Y|��N?�{�O!�#�K�%H�ӞEH�ǵ=[_��~������7�/�� �U����yY�5�~�      t   �   x�mQAn�0<ۯ���wm��cz�%걧H�RD	 }M8�"�|X��ΌQ�h�\T_5�}#P!��O���hp���ۇ$A�z�w��a*��XR~�>�>�A�J�Y�F�U���"2B�h���yU[N�2q$�غ�Т��ǅ=i���#��Y9���QK�����Q#䝱Z\��?���j��S��e����Sf#Y��**����}_v�{/���w���йڮ� � de����R�_��j0      v   @  x����n�@���S̩j%��M���H�B���JJ.\&��G^��%���}�>Iw�	�����l��~��?3���"i��Y�ܒ���ږJ�%n`�U���P�$�.�%�	J�#״���j��W�P��gz�i�4>|��`��=a|��/��n/�ȀŊK���H��![�$<p��Knl8�ؿ¸�(��t��oxְ�l�C����Ƿ�
���O!�?h�� '>`]�=؛�uf�u���\(U@�v@ȱ^���UP�����ijQ��)׍�i�j��X�6h�z.��:��8C����������1*'<�tww�&�}��r5xTr����B�QrvTH?�h)ɢ���H��n�i6�kc�E��d�i���a$I���ՁQQP�g6���	�{�^+׋��H��o垩���=�6�a'�ךM�X�P`�ɔ�cO_O8
[������r�����Ȑ��E�Q:<I����rY]�\�эn;���U�n�<G�nׄdA����_�n�=u�a7�������+���SAP����xw�ľ֤�^��(U5'���êu��g�[�9��'o(�Y      x   �   x���A
�0���s�JE�j����ئtP�����Eԕ�~���BMM�u�T)��(�}@�]�WJ�5:����b��nʏ�	��>��8p�sE�/�֬�3��%��� ��7���� �Ѓ��;��0�e	�K��-�
�$3i������h      z   !   x�3�t)JL+�2�(M��,�HM����� ]j�      |      x�3��+JML�2�Q1z\\\ >�      ~   �   x���;�0D��)r�X�������4��Hq"e���A��@�S�<>�����;����)&�9m	P!�j�+ݻ�s
��]oZ��̑`
�o�X�X�F����|�oN��b_(a��\���������TZ��R��(nR�(
I�      �   �  x�m�Ao�0�Ϟ_���e�v ��I�bPL�*�	����R����8 u�=��獝j\�
u�#�/GR�@S��K�\�ְ,K(�{fR�q��1�8�r��Wmp�z���R㳡
��e�`)LB��4
b�sUX4K���R�-�gz����r�2�J�R�k�����]�^i��Ĝ�ܳBgL�4g�����f3niг��z����d��K�S �vCu�c��D�Ղ�u`m�W����M-N�e���N�@)Qԇ06B�Dq�Z=�������t��?��ߗ��r/U��J���#������뿥Ճ��Y��S���5}�
8 ��ō����(r�Z���l�b�c˱LIv��@�����M7����Y$y���C��}���ݟ\��v�@�[�BJ�
~! |��      �   /   x�3�L-K�+�OO��I-��2�,��/ɇ�9�2SR�`�=... �x�      �   �   x�]��
�0�s�ya�E�"Rvܥ���v��ao��@P����r����:���,S*�3E[<�7Npϸ�❄Mi:�Ʌ��āV��S�/���\פ��t�8���(��:�$ʹ~�hU��1���8�      �   �  x�]�͎�@���O�D��/���U�\z���j9O��Z�&9N�u�4
�Pk�^i�n�FX���N�4wrEB�G��9�F�Ŷ����q4��V�)�%�+#i�x���qJk$lo<0��6HL�$5C�}?y<�^�N��"�H)�2�բ#MH���<r��BR��r'��9r����Q.䅈��h�0���m��R+��Y��M\�����W+m�6(�,��/v���l�<�+��i��+�-�>*��%)��� {Ӷ��>#����
�'
�8�{�A@K�Q">j����)r�լ�Ҹ��6�����fcu_0�<��jaN�WA~v�6�|���`�K(q-���)n���7�A$�\�ߴ�L�"
��N���`��Ns��iްw��*��n����B�>�/��_      �   �  x���M��0@�ί�0�Jb���@����2�	�;r*��kPʮ���q4�g<C ;�(k��P�>����S����f�Ђ��pD��<l�nt��{���Nϲ,ES��	fޏ��T&\��.��pc��'U�{R�2���'��o�q����/(A4����4B{r��&`����z��9�zV��(���le����jݠk��O�&�.s}�'HfL�?}倂���3��`1ƱH�z�_�ŋ��C���O��#�uv�o8���s <6��c���T�/��݇��H���H���Usi�|0o��AUa@��?|��e��UA�rg�o��(���2��g�jxu���_7��u}��Z�w�\
	.(.�D)�9��B?������Q<Rd��n>�$I~s��B      �   �  x���mo�6�?˿�������7E�:��ÀM�6��Hʅ��w$%[N�4�������;&��c��A�o�,�f�#��0B�����	�0���~8DA8MF�8����d���L#����\�~0M�A�$h�LxXjF�K�An1g�r_^�J�k�����a��Y�I�,_�h\c��!ÜIJ���˂�ʷE����e��f��L9G�8w�-iQq*]Ɨ�P��ZN�7��2�<W��~�7���A�� E��pzC�Z�~�+� ���Jd\�4ӕ���B%lj���^f��	�����NؘFӲ����[( �(J�1EvXnߢ���C���"Ri<�:�B�ʶT��ƚ�kk5k�as�p���X���Oz'� ��h%�{��b*z��e���Iauv梠�z��E%�^��6��bd+|/��}~�f�W��%-��]5��Riavm-g�ŏ���3m*�1��:�HD��7�v]�5f��y�5��>���=�}�����p��L�BA ���-�e	e���Fq�D��k��鰲4�U���w9�l,`�����̞CU�a{�#�`��]ΰ������[��DkmN��� ~�{FA����}o	�H�mZ�[G��)�cm<���&�(�Ó65�m�RZ��=�TB�s'@>�
�f���{�4�������3�	C~��T���ζ�;3�[�S���,\S�=Y�?�9A��pN݊0x�6f
)9�]l�HK�R�'6�{Jv�A��������/�!�X��آ&8��@?A�2�rϔ)o�S�p���j��f6Al%.��f��vHy���3v���J�.Ū��B{b���W~���[~�:?�= J4�p;�]J�Y���r�Ʋ�
�B&�aC��`C�0�ݙ6���)ʏ�74'���/!�N����Z���]T�f�{���2����1�'�{ہ����ݑ�ʨ������*���w��=�p���@��ø=+��7�洬t+����뗻ů��3��!`BVc�y�ϭ�|���L`���[V�*�9��1���!�z�q������}	�l�G�L��R�w��i1�s��:�}D9��Y3�
(k{)���E�-�]H,�i&�K�+�N'��ˠ����/��      �   Y   x�3�4204���A��)ŉ)��@ęfp� U����p�8@�F���Ӱ(7�n2ݒ�7��8Ӏ�@:�Uy� ��$N      �   /   x�3�,-��OL)��OO��,N,�����/r��
��9c��b���� 8��      �   J  x��TMs�0=�_����J⛛K2i2i�6S���kG-�!%���v�8�K90���}K����;��s�����zw^m6������Q2.��RDt�g�<1^��J8KrYƑ��?/���n���fO�?̨ߍ&<e�����4���M�lD�Wi�҄�Eq�ˣo؇u�8W{��õS~��#"�T�h�p�֖v��C�v}&��$SV�Ș̋T�S]��k<NT�+��O��!��q�(�%T�1LZk��[P}�l�"�5>�Gm�{F<z�3��X̎�Q�euuW5h3i����f�ˏwԾ�G3(��'*�SƲ(���Qݡ2�2�:�H	~�-�=h��v���e��y�#�N��E��3��jt^ot3j��.I26��Zh<��-\�- '�Q�'�i˨�Ş�������d��LHGvI-�Z��i�E (��*����3f]��4\��2�T�%�TlDR���:$�rZ��������k�dE�2�k�h���S���r8u�	�l�ݍ�FG)��d�	��,�$/�L��?͍|F%K�e�ȏ]y{D�?�~?.���\�sy���o��O�      �     x�u��nGE�=_�P�^��]� ��H�,��h$�BR	���MJ�F,�-έ�w5kH����%����6�\P�`]��f�X̤&a`-G�ȧUcM%�
<�G���VbJVs���O��ES�Z������i�U�r��Ϗ�g�*jŀ7�s�q$�([�0����g�t��4&�D���1�;vY��4J�C$��0���`y$L��J�z��p��6���]|U7�ƀ�O��7�0�pNݍ�Ğ���̱Ufp��'�u���ъJ�v�{^��f,IZoiO,���6jF+'8���ѵ��V
,+w����c)�5�z^�<2�(Z�v'GX��9Y��fF�UυB��"a\�k���>�w���a�\x�P%ǚE:�f��𚢱qo8͡�w�W7oO�_r�Fy�߰�qG���L�������7}-����h�v�&Xk��GF'Z}nK&)�mP�#��ڈ���4\n��->nv������ry}7�W�:��L��X���f>�O�v�1��5��3���փi���e�B�ַ���3[id�
��5�	�`v��a��^���X�k��D/n���r�Fݣ2�����⦾���ު���֬� k3��/ HdÔ�!�Lм�K/4<��ϳ�֡�\"Y�h��|�pۺ�R6v?�H�R���J�	N�j��w�&5�h��b����j�7�����
BI�7���ڗ^	�a�R�tn�`�sF�a!�����ց���Z;d�y:�0A��}5¦2��O?n�m6�'?%�*�J=�̯$n���4edb��K����8K�2�"����vT��Z?��N��h�$̀w�3�y/;<v�ߥ�O�W@І=ZT�K&��9|^�?�����w���,�F2י����["��}�p	^
� �?�Z�Z��B3�����H� .���i�_nw�K2��u���Kr���Q���%�/�ڨ�3`=Bp���n?}�����.w�	�����a���l      �   �  x��X�o7���}lT�e�鹉m ��Vh}�ԇ���jy�[�kU����ܕ֎����;���Ag޼y3�o���}O7"˔�4/�tp<��zyt��>�t�t#M�����̂���m����R[��t���Y}q想fuq)}�T͛_��_���G�}/��ׯ)-�*U���Z�@��®s�h]��b���̬�A�&Ȝ6J�ܓ0dk�q��l	�K[ٕ4���_K��Ƹw{���V���Q/�}g��]>l�<ք�Z�U^��d�zp?��DV>�$|�2���/)X��*�5�9�ښ���RfE�<���rH� 8���ԇ�Mf�"�qf��NyBn��񥣣��y����V�.&��K�4H������p�,�S���=+yv���c�ݩ�T:wH���w
i#�{���w..��H��ܹz��H֑�����O�����}B�ٖ��_��{��yG���>��[	�d�9|0+evK����&er�% ���w�{�$�� ���\�-*�e�l��N�z��(h&�1}�Va0��MwJ�9�����C+u�t-�����m˙�V�]v>Ph�jg�&�ڬ$t8h��P�N�q2�2��`z�� �6�^�$��78&r�H�B*~m�p6�H'��!�jS�Z�<A{�&�j| ��xH��&Y��
��j��0�
�@5����9��2�d�7,"�~�]�TU5F��������qRRi�A�:g��"$�*[If���� �]̕τ˱ËB��S����v2 1~)��(�)��|��5�k	�N_�r��f,���~�W�or(���e��/,�W�PPF�dA�%��"m��T@>��6��:��^���Hu~� �M�16�z��@��q�g�5�$o�|�PѸ���
��fw�#�0إ*)J�D��EK�B9�y�L�޾Dm/*��{�`��n�f��{��C���^WRx�CLh����7�BT���9��FA���ȭc�k*$tq��\����_"�_��!m��P�IYZ�4Ǌ�	���h�Q.nÒǯ�"�X/��5�Q�R8�ŗvڱմ8��ʉ�����0P]&�hm�I�2�"��5:�ܪh::!T����F��d�7K=u´�l�@��`���񹌏�,߻�$����ij�
�qd��p�#t���C�� �S����A��>ג�7��=�$�㇔��}�	���4Z����������nCzS�e�����]���k:�(,3���W�-r����mլ	�H��w�L���Zbb�l�I��|=��
լ4w���3i���?@�(B�L⟴�M\�������xh�Z���#�Y�7HB>��d�1��F�1ԟ���vtL	�Yָ��C/��-�ZE36�)'��C�O|2��0�)SD��yd>X�B���D�S�6͈g���m�u9�)�Hx��d%�G�u3ze�A��Cz3��f,��\�/���82���v8x\$S�� �k�8�]��j�z�,���4}�����E*��-REg�$��k�q\�X򱌦��
�0o���)�<�;��Mx8�d���H�'�2M2q�ًk)uA?��i��������O.�+a�� z��-�<H�oYJ�����"�R��$�揉Ժ��M��G����?�|� ���y��N&���o'�v�*?��M�'��~ �'�㽏�ӗ=4&/A�}��И�C���ǧ�����}�gM��ȷ�m����?�?���i      �   F   x�3�,-��OL)�/(�O)M.)�O�H,*1�+�K���2�T 6���/-N��* k3�!oS���� �4*�      �   �   x�풽j�0�竧���߲��)KR�d	ǒ��#IN_�rJǮ%9\.�3|���Սi	��b�~N�ɞB������;���d��N9'�%L���ӎ����h��z��0�%���&BW3�K�s�P��6��~�>�&�M,.]���Z�<�j�X�a�/s.Jj����'nU����l�}�s�R����ߝ����3az�6�S�S�� �� �ƣ      �   �   x���Ak�@���W�Q/K�F�7�)M��
O�L63ge�����^��.��@N<vj;T[����v�6MÖ�����f
�^���ȳ�gx��GkYH}`�<篥/�X��-� ���,K�Y�$�% ���(����eup���-Q
�|���@��u��UM�1��M��s�[�F}R��v���;SL�ɋ�������P�å�Al++a���tOG���_u��(���m�      �   |   x�u�1
1E��)��L2�L���
b!�EX���m,V����x��{�7��XT��Η~�O"����'hkY8�R-G������hI2{AU�_Q�
�u�k�Ie�}�Vq����,�      �   �   x�U�A
�0��ur��@��$�i��eA(H��TB����J���}?)F
���k����)M� �VJ��mx�S^�<�xF&�le���AgX %R����!�Au�:�{_�~��Rl��s�I��8�?�Y����%�      �   �   x����
�0E��W̲]D&3�w��.�ۂE��(��[���]̙��e�g?�}M?B�CxA����{�����zl}��&Nb�
B"�N�n:���"������"q*��Y��@�Yl3�"k4#K���V+dE�7���\�>�<>����P�2�R�@�0��F����HJ�eI      ^   n   x���C1��{��0x�4�R�d�2w���ߓ���B3DW�r�FRͲ�쓴7W\��{� ��YБF	���
�q��Ǚ��ǔ��Ӕ��3�*�����'�      �       x�3�tL����2�tJNW(-N-����� P[      �   >  x��Zmo�0�\~��I�Ԅ�Ix+ �бn-E��4��t`7q�(1}ٯ_��[�Z�����{;�rx��ߋQ�5�a�B$?�q���g-�2R���@�垖\�Q �v�x�E (J�L��1C�4�{\��N��x�C\���1	�	i�㓃�O{�v��O\G��'ಸ<�7�����e��� �Ŵq�_�4�r*��V5My��^r�fc��p�����A>@1u�WD)a���(�(��q��Ɖ��ho8��vx�����-?�T���(���A��F;���ͽ6�5scv�>;#ٝ���H�0!Y4�fro�R�(�I8A�@�����54�'�2!���)K��V�f�^(
�R.\�g��i�L��􇇽���z��Fݱ^�ĳ��Gh�u08:<� S���I�}��.��)������G5[�vQ�cB _���4ºa���ʉ��w��f�Z��`6��u*x�I~<��e��N�(�����pu�]ԛ^ARI%�F�HB�W���p4��Ԗ6*E�B~0���p�Я�
�$T��A�� "��`K��lZ�^��l�z��P{J����-�C]I=
Dl+�`k׀��
oZ�a~8��Bv��	X�J�m2"�E�bm"����S����<�����RU9��ʊ�?�5�
�$����f��K�_�%%��k�ՠ[�"c���`�$����!�1î��쬯a淥��G����,���t2bѬ�"k��1�Qڒ���{\5���3TYw�S������r���!&!�Yщ�0iX�a�۩Zf}脋҅Q*�~���      �   N   x�3�N�-�I�4202�50�52U04�25�20�3046�0�4�2�I-.��KGQffedbeb�glhln`T���� �{0      �   �   x���=�0 �=�?�}ި1LN&�%TH����A���|�iv��a$)�e�~��ʋ�҇ʟd���2/

 V�0�H�Qh4V9��dѡ����s�u��p%����0t��?<pdRa����[_����l�o�N��$�:�@����>����? ��_�      �   �  x��S�j�0>��B�j���-�P�C��Io� lyF`KB�����;��b�қп|�>�rse�:h������A[3��z
�c����� M��ګ&@��k�k��L���M0��t�n��Ҵxm�����<�,��F�f���%�q���I\�m���~
3QӢ�Ϫ�js�L83�h��Y�x�j��Unۊ�yq�iF�B�y�=��'��sỻ7x� �R�),.l%����ئ�ńVu�H��(Ϟ��X��c��AȐ���)�����+/���O:
�<o�o��f5�	+)g��u�n���=�ڟj<U���EW��4%,��O�7N�E�����6Ai�w�A�����>�����Q�WI�q�"%e�f%������G���2/��Ti�P� 
���K^����d%Ʌ�9��B�p6R���ߍ1���<e�D?B�7���     