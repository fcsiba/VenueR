<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'category' => [
        'title' => 'Categories',

        'actions' => [
            'index' => 'Categories',
            'create' => 'New Category',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            
        ],
    ],

    'section' => [
        'title' => 'Sections',

        'actions' => [
            'index' => 'Sections',
            'create' => 'New Section',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'section_name' => 'Section name',
            'cat_id' => 'Cat',
            
        ],
    ],

    'section-content' => [
        'title' => 'Section Content',

        'actions' => [
            'index' => 'Section Content',
            'create' => 'New Section Content',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'h1' => 'H1',
            'sub_text' => 'Sub text',
            'sec_id' => 'Sec',
            
        ],
    ],

    'social-channel' => [
        'title' => 'Social Channels',

        'actions' => [
            'index' => 'Social Channels',
            'create' => 'New Social Channel',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'channel_name' => 'Channel name',
            
        ],
    ],

    'social-link' => [
        'title' => 'Social Links',

        'actions' => [
            'index' => 'Social Links',
            'create' => 'New Social Link',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'links' => 'Links',
            'channel_id' => 'Channel',
            
        ],
    ],

    'process' => [
        'title' => 'Process',

        'actions' => [
            'index' => 'Process',
            'create' => 'New Process',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'h1' => 'H1',
            'sub_text' => 'Sub text',
            
        ],
    ],

    'process-content' => [
        'title' => 'Process Content',

        'actions' => [
            'index' => 'Process Content',
            'create' => 'New Process Content',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'step_name' => 'Step name',
            'h1' => 'H1',
            'sub_text' => 'Sub text',
            'process_id' => 'Process',
            
        ],
    ],

    'survey-user' => [
        'title' => 'Survey Users',

        'actions' => [
            'index' => 'Survey Users',
            'create' => 'New Survey User',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            
        ],
    ],

    'qstype' => [
        'title' => 'Qstype',

        'actions' => [
            'index' => 'Qstype',
            'create' => 'New Qstype',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'qs_type' => 'Qs type',
            
        ],
    ],

    'survey-q' => [
        'title' => 'Survey Qs',

        'actions' => [
            'index' => 'Survey Qs',
            'create' => 'New Survey Q',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'cat' => 'Cat',
            'qs' => 'Qs',
            'sub_text' => 'Sub text',
            
        ],
    ],

    'survey' => [
        'title' => 'Survey',

        'actions' => [
            'index' => 'Survey',
            'create' => 'New Survey',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'user_id' => 'User',
            'qs_id' => 'Qs',
            'choice' => 'Choice',
            
        ],
    ],

    'general' => [
        'title' => 'General',

        'actions' => [
            'index' => 'General',
            'create' => 'New General',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'sector_name' => 'Sector name',
            'h1' => 'H1',
            'sub_text' => 'Sub text',
            'href' => 'Href',
            'image' => 'Image',
            
        ],
    ],

    'survey-q' => [
        'title' => 'Survey Qs',

        'actions' => [
            'index' => 'Survey Qs',
            'create' => 'New Survey Q',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'cat' => 'Cat',
            'qs' => 'Qs',
            'sub_text' => 'Sub text',
            
        ],
    ],

    'qs-opt' => [
        'title' => 'Qs Opt',

        'actions' => [
            'index' => 'Qs Opt',
            'create' => 'New Qs Opt',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'qs_id' => 'Qs',
            'qs_type' => 'Qs type',
            'title' => 'Title',
            'sub_text' => 'Sub text',
            'minimum' => 'Minimum',
            'maximum' => 'Maximum',
            
        ],
    ],

    'survey-q' => [
        'title' => 'Survey Q S',

        'actions' => [
            'index' => 'Survey Q S',
            'create' => 'New Survey Q ',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'cat' => 'Cat',
            'qs' => 'Qs',
            'sub_text' => 'Sub text',
            'qs_type' => 'Qs type',
            
        ],
    ],

    'qs-opt' => [
        'title' => 'Qs Opt',

        'actions' => [
            'index' => 'Qs Opt',
            'create' => 'New Qs Opt',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'qs_id' => 'Qs',
            'title' => 'Title',
            'sub_text' => 'Sub text',
            'minimum' => 'Minimum',
            'maximum' => 'Maximum',
            
        ],
    ],

    'venue' => [
        'title' => 'Venues',

        'actions' => [
            'index' => 'Venues',
            'create' => 'New Venue',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'type' => 'Type',
            'sub_type' => 'Sub type',
            'address' => 'Address',
            'size' => 'Size',
            'accomodation' => 'Accomodation',
            'price' => 'Price',
            'availiblity' => 'Availiblity',
            'info' => 'Info',
            'about' => 'About',
            'image' => 'Image',
            
        ],
    ],

    'contact' => [
        'title' => 'Contact',

        'actions' => [
            'index' => 'Contact',
            'create' => 'New Contact',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'message' => 'Message',
            
        ],
    ],

    'contactvenue' => [
        'title' => 'Contactvenue',

        'actions' => [
            'index' => 'Contactvenue',
            'create' => 'New Contactvenue',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'category' => 'Category',
            'venue_name' => 'Venue name',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            
        ],
    ],

    'contact' => [
        'title' => 'Contact',

        'actions' => [
            'index' => 'Contact',
            'create' => 'New Contact',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'message' => 'Message',
            
        ],
    ],

    'type' => [
        'title' => 'Type',

        'actions' => [
            'index' => 'Type',
            'create' => 'New Type',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            
        ],
    ],

    'sub-type' => [
        'title' => 'Sub Type',

        'actions' => [
            'index' => 'Sub Type',
            'create' => 'New Sub Type',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'type_id' => 'Type',
            'name' => 'Name',
            
        ],
    ],

    'venue' => [
        'title' => 'Venues',

        'actions' => [
            'index' => 'Venues',
            'create' => 'New Venue',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'type' => 'Type',
            'sub_type' => 'Sub type',
            'address' => 'Address',
            'size' => 'Size',
            'accomodation' => 'Accomodation',
            'price' => 'Price',
            'availiblity' => 'Availiblity',
            'info' => 'Info',
            'about' => 'About',
            'image' => 'Image',
            'admin_id' => 'Admin',
            
        ],
    ],

    'contact' => [
        'title' => 'Contact',

        'actions' => [
            'index' => 'Contact',
            'create' => 'New Contact',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'message' => 'Message',
            
        ],
    ],

    'contactvenue' => [
        'title' => 'Contactvenue',

        'actions' => [
            'index' => 'Contactvenue',
            'create' => 'New Contactvenue',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'category' => 'Category',
            'venue_name' => 'Venue name',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'admin_id' => 'Admin',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];