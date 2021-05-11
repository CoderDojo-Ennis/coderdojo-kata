<?php

function coderdojo_kata_register_custom_terms() {
    
    /*
    * Taxonomy: Resource Groups.
    */
    $result = wp_insert_term(
    	'The Software Pad',  
    	'groups', 
        array(
            'description' => 'Here you will find a variety of tutorials and projects created by the CoderDojo Community!',
            'slug'        => 'software'
        )
    );

    if(!is_wp_error( $result )) {

        wp_insert_term(
            'Scratch',  
            'groups', 
            array(
                'description' => 'Scratch is a free programming language where you can create your own interactive stories, games and animations.',
                'parent'      => $result["term_id"],
                'slug'        => 'scratch'
            )
        );

        wp_insert_term(
            'HTML',  
            'groups', 
            array(
                'description' => 'HTML (Hypertext Markup Language) and CSS (Cascading Style Sheets) are two if the core technologies for building Web Pages.',
                'parent'      => $result["term_id"],
                'slug'        => 'html'
            )
        );

        wp_insert_term(
            'JavaScript',  
            'groups', 
            array(
                'description' => 'JavaScript is a full-fledged programming language that can provide dynamic interactivity on websites.',
                'parent'      => $result["term_id"],
                'slug'        => 'javascript'
            )
        );

        wp_insert_term(
            'Python',  
            'groups', 
            array(
                'description' => 'Python is a widely used high-level programming language used for general-purpose programming.',
                'parent'      => $result["term_id"],
                'slug'        => 'python'
            )
        );

        wp_insert_term(
            'App Inventor',  
            'groups', 
            array(
                'description' => 'Mobile is a term used to denote the act or process by which application software is developed for mobile.',
                'parent'      => $result["term_id"],
                'slug'        => 'app-inventor'
            )
        );

        wp_insert_term(
            'Ruby',  
            'groups', 
            array(
                'description' => 'Cool resources for learning Ruby.',
                'parent'      => $result["term_id"],
                'slug'        => 'ruby'
            )
        );

        wp_insert_term(
            'Perl',  
            'groups', 
            array(
                'description' => 'Find resources for learning Perl here!',
                'parent'      => $result["term_id"],
                'slug'        => 'perl'
            )
        );

        wp_insert_term(
            'PHP',  
            'groups', 
            array(
                'description' => 'PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language.',
                'parent'      => $result["term_id"],
                'slug'        => 'php'
            )
        );

        wp_insert_term(
            'Common Lisp',  
            'groups', 
            array(
                'description' => 'Click here to check out great Common Lisp resources! Common Lisp is commonly associated with the development of Artificial Intelligence and machine learning!',
                'parent'      => $result["term_id"],
                'slug'        => 'common-lisp'
            )
        );

        wp_insert_term(
            'Swift',  
            'groups', 
            array(
                'description' => 'Learn to code using Swift Playgrounds and build apps for iOS on Xcode using Swift.',
                'parent'      => $result["term_id"],
                'slug'        => 'swift'
            )
        );

        wp_insert_term(
            'Basic Principals',  
            'groups', 
            array(
                'description' => 'Find the Basic principles to programming here.',
                'parent'      => $result["term_id"],
                'slug'        => 'basic-principals'
            )
        );
    }
    
    $result = wp_insert_term(
    	'The Hardware Laboratory',  
    	'groups', 
        array(
            'description' => 'Robots, Arduinos, Raspberry Pis and 3D printing!',
            'slug'        => 'hardware'
        )
    );

    if(!is_wp_error( $result )) {

        wp_insert_term(
            'Raspberry Pi',  
            'groups', 
            array(
                'description' => 'Learn hardware and programming with Raspberry Pi!',
                'parent'      => $result["term_id"],
                'slug'        => 'raspberry-pi'
            )
        );

        wp_insert_term(
            'Arduino',  
            'groups', 
            array(
                'description' => 'Arduino is an open-source electronics prototyping platform based on flexible, easy-to-use hardware and software. It’s intended for artists, designers, hobbyists, and anyone interested in creating interactive objects or environments.',
                'parent'      => $result["term_id"],
                'slug'        => 'arduino'
            )
        );

        wp_insert_term(
            'micro:bit',  
            'groups', 
            array(
                'description' => 'Learn to code and build hardware projects with the BBC micro:bit.',
                'parent'      => $result["term_id"],
                'slug'        => 'microbit'
            )
        );

        wp_insert_term(
            'Wearables',  
            'groups', 
            array(
                'description' => 'Learn to make electronics you can wear!',
                'parent'      => $result["term_id"],
                'slug'        => 'wearables'
            )
        );

        wp_insert_term(
            '3D Tools',  
            'groups', 
            array(
                'description' => 'Learn about and explore 3D tools here!',
                'parent'      => $result["term_id"],
                'slug'        => '3d-tools'
            )
        );

    }

    $result = wp_insert_term(
    	'The Studio',  
    	'groups', 
        array(
            'description' => 'Audio, image and video editing tools!',
            'slug'        => 'studio'
        )
    );

    if(!is_wp_error( $result )) {

        wp_insert_term(
            'Audio Editing',  
            'groups', 
            array(
                'description' => 'Find the tools you need to get started with audio editing.',
                'parent'      => $result["term_id"],
                'slug'        => 'audio-editing'
            )
        );

        wp_insert_term(
            'Video Editing',  
            'groups', 
            array(
                'description' => 'Want to get creative with videos? Here you will find a list of the tools to get you started.',
                'parent'      => $result["term_id"],
                'slug'        => 'video-editing'
            )
        );

        wp_insert_term(
            'Image Editing',  
            'groups', 
            array(
                'description' => 'Make your projects look great with some of the best image editing software.',
                'parent'      => $result["term_id"],
                'slug'        => 'image-editing'
            )
        );

    }
    
    $result = wp_insert_term(
    	'The Arcade',  
    	'groups', 
        array(
            'description' => 'Here you will find links to games you can play while learning to code!',
            'slug'        => 'arcade'
        )
    );

    if(!is_wp_error( $result )) {

        wp_insert_term(
            'Scratch',  
            'groups', 
            array(
                'description' => 'Scratch is a programming language and an online community where young people can program and share interactive media such as stories, games, and animation with people from all over the world. With Scratch, you can program your own interactive stories, games, and animations — and share your creations with others in the online community.',
                'parent'      => $result["term_id"],
                'slug'        => 'scratch'
            )
        );

        wp_insert_term(
            'HTML',  
            'groups', 
            array(
                'description' => 'Here are some tutorials from all over the world to help you create games!',
                'parent'      => $result["term_id"],
                'slug'        => 'html'
            )
        );

        wp_insert_term(
            'Unity',  
            'groups', 
            array(
                'description' => '',
                'parent'      => $result["term_id"],
                'slug'        => 'unity'
            )
        );

        wp_insert_term(
            'Open Source Libraries',  
            'groups', 
            array(
                'description' => 'Open Source Javascript Libraries to help you create Games.',
                'parent'      => $result["term_id"],
                'slug'        => 'open-source-libraries'
            )
        );

        wp_insert_term(
            'Development Platforms',  
            'groups', 
            array(
                'description' => 'Click on the button to find some development Platforms to get you started on creating your very own games!',
                'parent'      => $result["term_id"],
                'slug'        => 'development-platforms'
            )
        );

        wp_insert_term(
            'MMORPG',  
            'groups', 
            array(
                'description' => 'Massively multiplayer online role-playing games: are online role-playing video games in which a very large number of people participate simultaneously. They blend the genres of role-playing video games and massively multiplayer online games, potentially in the form of web browser-based games, in which a very large number of players interact with one another within a world.',
                'parent'      => $result["term_id"],
                'slug'        => 'mmorpg'
            )
        );

        wp_insert_term(
            'Beginner Arcade',  
            'groups', 
            array(
                'description' => '',
                'parent'      => $result["term_id"],
                'slug'        => 'beginner-arcade'
            )
        );

        wp_insert_term(
            'Intermediate Arcade',  
            'groups', 
            array(
                'description' => '',
                'parent'      => $result["term_id"],
                'slug'        => 'intermediate-arcade'
            )
        );

    }

    $result = wp_insert_term(
    	'Other Resources',  
    	'groups', 
        array(
            'description' => 'Databases, frameworks and much much more.',
            'slug'        => 'other'
        )
    );

    if(!is_wp_error( $result )) {

        wp_insert_term(
            'Git',  
            'groups', 
            array(
                'description' => 'Git is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency.',
                'parent'      => $result["term_id"],
                'slug'        => 'git'
            )
        );

        wp_insert_term(
            'Xcode',  
            'groups', 
            array(
                'description' => 'Xcode is an integrated development environment (IDE) containing a suite of software development tools developed by Apple for developing software for OS X and iOS.',
                'parent'      => $result["term_id"],
                'slug'        => 'xcode'
            )
        );

        wp_insert_term(
            'Web Servers',  
            'groups', 
            array(
                'description' => 'A Web service is a method of communication between two electronic devices over a network.',
                'parent'      => $result["term_id"],
                'slug'        => 'web-servers'
            )
        );

        wp_insert_term(
            'MySQL',  
            'groups', 
            array(
                'description' => 'MySQL is a widely used open-source relational database management system (RDBMS).',
                'parent'      => $result["term_id"],
                'slug'        => 'mysql'
            )
        );

        wp_insert_term(
            'Node.js',  
            'groups', 
            array(
                'description' => 'Node.js is a software platform that is used to build scalable network (especially server-side) applications.',
                'parent'      => $result["term_id"],
                'slug'        => 'node-js'
            )
        );

        wp_insert_term(
            'Joomla',  
            'groups', 
            array(
                'description' => 'Joomla is an award-winning content management system (CMS), which enables you to build Web sites and powerful online applications.',
                'parent'      => $result["term_id"],
                'slug'        => 'joomla'
            )
        );

        wp_insert_term(
            'Minecraft',  
            'groups', 
            array(
                'description' => 'For learning to program motivated by MINECRAFT!',
                'parent'      => $result["term_id"],
                'slug'        => 'minecraft'
            )
        );

    }

    /*
    * Taxonomy: Resource Types.
    */
    wp_insert_term(
    	'Core Resources',  
    	'types', 
        array(
            'description' => 'This content is reviewed by the CoderDojo Foundation and is the recommended starting point for a Dojo or Ninja that’s just beginning to address the topic.',
            'slug'        => 'core'
        )
    );

    wp_insert_term(
    	'Community Resources',  
    	'types', 
        array(
            'description' => 'Ninjas who have completed the core resources at a specific level and want to learn more related things, without going deeper into the topic yet.',
            'slug'        => 'community'
        )
    );

    wp_insert_term(
    	'Social Good Resources',  
    	'types', 
        array(
            'description' => 'Learn to build apps and games to help people learn about important issues.',
            'slug'        => 'social'
        )
    );
    
    wp_insert_term(
    	'Project Ideas',  
    	'types', 
        array(
            'description' => 'Ideas for Ninjas or Dojos for more projects they can undertake with the skills they have learned.',
            'slug'        => 'project'
        )
    );

    wp_insert_term(
    	'Challenge Cards',  
    	'types', 
        array(
            'description' => 'Ninjas who are looking for a challenge can find it here.',
            'slug'        => 'challenge'
        )
    );

    wp_insert_term(
    	'External Resources',  
    	'types', 
        array(
            'description' => 'Resources from other communities and further afield',
            'slug'        => 'external'
        )
    );


    /*
    * Taxonomy: Resource Levels.
    */
    wp_insert_term(
    	'Beginner',  
    	'levels', 
        array(
            'description' => 'Beginner',
            'slug'        => 'beginner'
        )
    );

    wp_insert_term(
    	'Intermediate',  
    	'levels', 
        array(
            'description' => 'Intermediate',
            'slug'        => 'intermediate'
        )
    );

    wp_insert_term(
    	'Advanced',  
    	'levels', 
        array(
            'description' => 'Advanced',
            'slug'        => 'advanced'
        )
    );

}
add_action( 'init', 'coderdojo_kata_register_custom_terms' );


