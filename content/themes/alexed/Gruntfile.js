module.exports = function( grunt ) {

    // Only use quiet mode if param entered.
    if (grunt.option('q') || grunt.option('quiet')) {
        require('quiet-grunt');
    }

    // Load NPM tasks
    grunt.loadNpmTasks( 'grunt-notify' );
    grunt.loadNpmTasks( 'grunt-contrib-watch' );
    grunt.loadNpmTasks( 'grunt-contrib-uglify' );
    grunt.loadNpmTasks( 'grunt-pixrem' );
    grunt.loadNpmTasks( 'grunt-postcss' );
    grunt.loadNpmTasks( 'grunt-imageoptim' );
    grunt.loadNpmTasks( 'grunt-svgmin' );
    grunt.loadNpmTasks( 'grunt-grunticon' );
    grunt.loadNpmTasks( 'grunt-sass' );
    grunt.loadNpmTasks('grunt-browser-sync');

    // Keep directories in variable for easy changes and CMS integration
    var dirs = {
        assets_input: 'assets/app',
        assets_output: 'assets/dist',
        modules: 'node_modules'
    }

    /**
     * Change this var to suit your local development url for browsersync development
     *
     * @type {string}
     */
    var local_url = 'alexed.local';

    grunt.initConfig({
        pkg: grunt.file.readJSON( 'package.json' ),
        dirs: dirs,
        local_url: local_url,

        /**
         * Scaffold tasks
         */

        browserSync: {
            bsFiles: {
                src: [
                    '<%= dirs.assets_output %>/css/*.css',
                    '<%= dirs.assets_output %>/js/*.js',
                    '*.php'
                ]
            },
            options: {
                watchTask: true,
                proxy: '<%= local_url %>',
                host: '<%= local_url %>',
                open: 'external',
                ghostMode: {
                    clicks: true,
                    forms: true,
                    scroll: false
                }
            }
        },

        watch: {
            options: {
                spawn: false
            },
            scripts: {
                files: [ '<%= dirs.assets_input %>/js/*.js' ],
                tasks: [ 'uglify', 'notify:uglify' ]
            },
            css: {
                files: '<%= dirs.assets_input %>/scss/**/*.scss',
                tasks: [ 'sass:dist', 'pixrem', 'postcss:dist', 'notify:sass' ]
            },
            svg: {
                files: '<%= dirs.assets_input %>/icons/*.svg',
                tasks: [ 'svgmin', 'grunticon', 'sass:dist' ]
            }
        },

        /**
         * JavaScript
         */

        uglify: {
            scripts: {
                options: {
                    compress: true,
                    sourceMap: true,
                    preserveComments: 'some',
                    screwIE8: false,
                    banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
                },
                files: {
                    '<%= dirs.assets_output %>/js/main.min.js': [
                        '<%= dirs.assets_output %>/grunticon/grunticon.loader.js',
                        '<%= dirs.assets_input %>/js/partials/custom-select.js',
                        '<%= dirs.assets_input %>/js/main.js'
                    ],
                    '<%= dirs.assets_output %>/js/head.min.js': [
                        '<%= dirs.modules %>/jquery/dist/jquery.js',
                        '<%= dirs.modules %>/slick-carousel/slick/slick.js',
                        '<%= dirs.assets_input %>/js/vendors/modernizr.js',
                        '<%= dirs.assets_input %>/js/head.js'
                    ]
                }
            }
        },

        /**
         * Sass
         */

        sass: {
            options: {
                sourceMap: true,
                outputStyle: 'compressed'
            },
            dist: {
                files: {
                    '<%= dirs.assets_output %>/css/styles.css': [
                        '<%= dirs.assets_input %>/scss/styles.scss'
                    ],
                    '<%= dirs.assets_output %>/css/ie.css': [
                        '<%= dirs.assets_input %>/scss/ie.scss'
                    ],
                    '<%= dirs.assets_output %>/css/print.css': [
                        '<%= dirs.assets_input %>/scss/print.scss'
                    ]
                }
            }
        },

        // Fallback for rem's
        pixrem: {
            options: {
                rootvalue: '1em'
            },
            dist: {
                src: '<%= dirs.assets_output %>/css/ie.css',
                dest: '<%= dirs.assets_output %>/css/ie.css'
            }
        },

        // Autoprefix .css files
        postcss: {
            options: {
                processors: [
                    require('autoprefixer')({
                        browsers: [ 'last 3 versions', 'ie >= 8', 'Firefox ESR', 'iOS >= 7' ],
                        remove: false,
                        cascade: false,
                    })
                ],
                map: true
            },
            dist: {
                expand: true,
                flatten: true,
                src: '<%= dirs.assets_output %>/css/*.css',
                dest: '<%= dirs.assets_output %>/css/'
            }
        },

        /**
         * Image optimisation
         */

        imageoptim: {
            src: '<%= dirs.assets_output %>/img',
            options: {
                quitAfter: true
            }
        },

        /**
         * SVGs
         */

        svgmin: {
            options: {
                plugins:[
                    {
                        removeViewBox: false
                    },
                    {
                        removeUselessStrokeAndFill: false
                    },
                    {
                        convertPathData: {
                            straightCurves: false
                        }
                    }
                ]
            },
            dist: {
                files: [{
                    expand: true,
                    cwd: '<%= dirs.assets_input %>/icons',
                    src: [ '**/*.svg' ],
                    dest: '<%= dirs.assets_input %>/icons',
                    ext: '.svg'
                }]
            }
        },

        // Generate SVG/PNG icons + fallback
        grunticon: {
            icons: {
                files: [{
                    expand: true,
                    cwd: '<%= dirs.assets_input %>/icons',
                    src: [ '*.svg', '*.png' ],
                    dest: "<%= dirs.assets_output %>/grunticon"
                }],
                options: {
                    loadersnippet: "grunticon.loader.js",
                    cssprefix: ".icon--"
                }
            }
        },


        /**
         * Notify
         */

        notify_hooks: {
            options: {
                enabled: true,
                max_jshint_notifications: 3, // maximum number of notifications from jshint output
                duration: 0.5 // the duration of notification in seconds, for `notify-send only
            }
        },

        notify: {
            uglify: {
                options: {
                    message: "Javascript compiled and minified successfully"
                }
            },
            sass: {
                options: {
                    message: 'CSS compiled and minified successfully'
                }
            }
        },
    });

    // Register above tasks
    grunt.registerTask(
        'default',
        [
            'svgmin',
            'grunticon',
            'imageoptim',
            'sass:dist',
            'pixrem',
            'postcss',
            'uglify'
        ]
    );

    grunt.registerTask(
        'dev',
        [
            'browserSync',
            'watch'
        ]
    );

    // This is required if you use any options.
    grunt.task.run('notify_hooks');
}
