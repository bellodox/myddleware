<?php
$moduleFields = array (
    'pages' => array(
        'id' => array( 'label' => 'ID', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'date' => array( 'label' => 'Date', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'date_gmt' => array( 'label' => 'Date GMT', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'guid' => array( 'label' => 'Guid', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'modified' => array( 'label' => 'Modified', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'modified_gmt' => array( 'label' => 'Modified GMT', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'slug' => array( 'label' => 'Slug', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'status' => array( 'label' => 'Status', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'type' => array( 'label' => 'Type', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'link' => array( 'label' => 'Link', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'date' => array( 'label' => 'Date', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'title' => array( 'label' => 'Title', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),    
        'content' => array( 'label' => 'Content', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'excerpt' => array( 'label' => 'Excerpt', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'author' => array( 'label' => 'Author', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'featured_media' => array( 'label' => 'Featured media', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'parent' => array( 'label' => 'Parent', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'menu_order' => array( 'label' => 'Menu order', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'comment_status' => array( 'label' => 'Comment status', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'ping_status' => array( 'label' => 'Ping status', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'template' => array( 'label' => 'Template', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        '_links' => array( 'label' => '_links', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
    ),
    'users' => array(
        'id' => array( 'label' => 'ID', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'username' => array( 'label' => 'Username', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'name' => array( 'label' => 'Name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'first_name' => array( 'label' => 'First Name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'last_name' => array( 'label' => 'Last Name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'email' => array( 'label' => 'Email', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'url' => array( 'label' => 'URL', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'description' => array( 'label' => 'Description', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'link' => array( 'label' => 'Link', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'locale' => array( 'label' => 'Locale', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'nickname' => array( 'label' => 'Nickname', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'slug' => array( 'label' => 'Slug', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'registered_date' => array( 'label' => 'Registered Date', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'roles' => array( 'label' => 'Roles', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'password' => array( 'label' => 'Password', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'capabilities' => array( 'label' => 'Capabilities', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'extra_capabilities' => array( 'label' => 'Extra Capabilities', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'avatar_urls' => array( 'label' => 'Avatar URLs', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'meta' => array( 'label' => 'Meta', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),


    ),

//these modules are part of the Woocommerce Event manager plugin and are used in the wooeventmanager connector
    'mep_events' => array(
        'id' => array( 'label' => 'ID', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'date' => array( 'label' => 'Date', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'date_gmt' => array( 'label' => 'Date GMT', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'guid__rendered' => array( 'label' => 'Guid', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'modified' => array( 'label' => 'Modified', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'modified_gmt' => array( 'label' => 'Modified GMT', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'slug' => array( 'label' => 'Slug', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'status' => array( 'label' => 'Status', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'type' => array( 'label' => 'Type', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'link' => array( 'label' => 'Link', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'title__rendered' => array( 'label' => 'Title rendered', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'content__rendered' => array( 'label' => 'Content rendered', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'content__protected' => array( 'label' => 'Content protected', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'excerpt__rendered' => array( 'label' => 'Excerpt rendered', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'excerp__protected' => array( 'label' => 'Excerpt protected', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'featured_media' => array( 'label' => 'Featured Media', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'template' => array( 'label' => 'Template', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_cat' => array( 'label' => 'MEP Categories', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_org' => array( 'label' => 'MEP Organizers', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'event_informations' => array( 'label' => 'Event informations', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        '_links' => array( 'label' => '__links', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
    ),
    'event_informations' => array(
        '_edit_lock' => array( 'label' => 'Event info : edit lock', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'link_wc_product' => array( 'label' => 'Event info : link_wc_product', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'check_if_run_once' => array( 'label' => 'Event info : check if run once', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        '_edit_last' => array( 'label' => 'Event info : edit last', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_available_seat' => array( 'label' => 'Event info : mep available seat', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_reg_status' => array( 'label' => 'Event info : mep reg status', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        '_tax_status' => array( 'label' => 'Event info : tax status', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        '_tax_class' => array( 'label' => 'Event info : tax class', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_event_ticket_type' => array( 'label' => 'Event info : mep event ticket type', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_rt_event_status' => array( 'label' => 'Event info : mep rt event status', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_rt_event_attandence_mode' => array( 'label' => 'Event info : mep rt event attendance mode', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_rt_event_prvdate' => array( 'label' => 'Event info : mep rt event prvdate', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_full_name' => array( 'label' => 'Event info : mep full name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_reg_email' => array( 'label' => 'Event info : mep reg email', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_reg_phone' => array( 'label' => 'Event info : mep reg phone', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_reg_address' => array( 'label' => 'Event info : mep reg address', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_reg_designation' => array( 'label' => 'Event info : mep reg designation', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_reg_website' => array( 'label' => 'Event info : mep reg website', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_reg_veg' => array( 'label' => 'Event info : mep reg veg', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_reg_company' => array( 'label' => 'Event info : mep reg company', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_reg_gender' => array( 'label' => 'Event info : mep reg gender', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_reg_tshirtsize' => array( 'label' => 'Event info : mep reg tshirt size', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_reg_tshirtsize_list' => array( 'label' => 'Event info : mep reg tshirt size list', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_event_template' => array( 'label' => 'Event info : mep event template', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_org_address' => array( 'label' => 'Event info : mep org address', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'event_start_date' => array( 'label' => 'Event info : start date', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'event_start_time' => array( 'label' => 'Event info : start time', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'event_end_date' => array( 'label' => 'Event info : end date', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'event_end_time' => array( 'label' => 'Event info : end time', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'event_start_datetime' => array( 'label' => 'Event info : event start datetime', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'event_end_datetime' => array( 'label' => 'Event info : event end datetime', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'event_expire_datetime' => array( 'label' => 'Event info : event expire date time', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        '_manage_stock' => array( 'label' => 'Event info : manage stock', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        '_stock' => array( 'label' => 'Event info : stock', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        '_stock_msg' => array( 'label' => 'Event info : stock msg', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'longitude' => array( 'label' => 'Event info : longitude', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'latitude' => array( 'label' => 'Event info : latitude', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'location_name' => array( 'label' => 'Event info : location name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_location_venue' => array( 'label' => 'Event info : location venue', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_street' => array( 'label' => 'Event info : mep street', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        '_sold_individually' => array( 'label' => 'Event info : sold individually', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_city' => array( 'label' => 'Event info : mep city', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_state' => array( 'label' => 'Event info : mep state', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_postcode' => array( 'label' => 'Event info : mep postcode', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_country' => array( 'label' => 'Event info : mep country', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        '_price' => array( 'label' => 'Event info : price', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        '_virtual' => array( 'label' => 'Event info : virtual', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        '_sku' => array( 'label' => 'Event info : sku', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_event_more_date' => array( 'label' => 'Event info : mep event more date', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_list_thumbnail' => array( 'label' => 'Event info : mep list thumbnail', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'mep_event_cc_email_text' => array( 'label' => 'Event info : mep event cc email text', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'event_feature_image' => array( 'label' => 'Event info : event feature image', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
    ),
    'mep_org' => array(
        'id' => array( 'label' => 'ID', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'count' => array( 'label' => 'Count', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'description' => array( 'label' => 'Description', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'link' => array( 'label' => 'Link', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'name' => array( 'label' => 'Name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'slug' => array( 'label' => 'Slug', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'taxonomy' => array( 'label' => 'Taxonomy', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'parent' => array( 'label' => 'Parent', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'meta' => array( 'label' => 'Meta', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        '_links' => array( 'label' => 'ID', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
    ),
    'mep_cat' => array(
        'id' => array( 'label' => 'ID', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'count' => array( 'label' => 'Count', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'description' => array( 'label' => 'Description', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'link' => array( 'label' => 'Link', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'name' => array( 'label' => 'Name', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'slug' => array( 'label' => 'Slug', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'taxonomy' => array( 'label' => 'Taxonomy', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'parent' => array( 'label' => 'Parent', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        'meta' => array( 'label' => 'Meta', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
        '_links' => array( 'label' => 'ID', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
    ),


);

$fieldsRelate = array (
    'event_informations' => array(
        'event_id' => array( 'label' => 'Event Id', 'type' => 'varchar(255)', 'type_bdd' => 'varchar(255)', 'required' => 0),
    ),
);