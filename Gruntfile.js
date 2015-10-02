module.exports = function(grunt) {

    'use strict';

    require('time-grunt')(grunt);
    
    // Project configuration
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        app: {
            path: {
                src     : 'src'
            },
            copyright   : '/*\n * Wildebeest WordPress boilerplate theme v1.0\n * Copyright (c) 2015 Wildebeest\n * Author: Wildebeest Design and Development\n * Author URI: http://wildebee.st\n */\n'
        },

        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 10', 'ie 11'],
                safe: true
            },
            dev: {
                src: 'style.css'
            }
        },

        csslint: {
            options: {
                'adjoining-classes': false,
                'box-model': false,
                'box-sizing': false,
                'compatible-vendor-prefixes': false,
                'empty-rules': true,
                'errors': true,
                'display-property-grouping': true,
                'duplicate-background-images': true,
                'duplicate-properties': true,
                'fallback-colors': true,
                'floats': true,
                'font-faces': true,
                'font-sizes': false,
                'gradients': true,
                'ids': false,
                'import': true,
                'important': true,
                'known-properties': true,
                'outline-none': false,
                'overqualified-elements': true,
                'qualified-headings': false,
                'regex-selectors': false,
                'shorthand': true,
                'star-property-hack': false,
                'text-indent': true,
                'underscore-property-hack': true,
                'unique-headings': false,
                'universal-selector': false,
                'unqualified-attributes': true,
                'vendor-prefix': true,
                'zero-units': true
            },
            src: ['style.css']
        },

        jshint: {
            options: {
                camelcase: true,
                curly: true,
                eqeqeq: true,
                indent: 4,
                latedef: true,
                newcap: true,
                noempty: true,
                nonew: true,
                quotmark: 'single',
                strict: true,
                globals: {
                    jQuery: true
                }
            },
            src: ['Gruntfile.js', '<%= app.path.src %>/js/scripts.js']
        },

        sass: {
            dev: {
                options: {
                    cacheLocation: '.tmp/.sass-cache',
                    sourcemap: 'none',
                    style: 'expanded'
                },
                files: [{
                    'style.css': '<%= app.path.src %>/sass/style.scss'
                }]
            }
        },

        uglify: {
            options: {
                mangle: true,
                compress: true,
                banner: '<%= app.copyright %>',
                quoteStyle: 3
            },
            dev: {
                files: {
                    'js/scripts.min.js': ['<%= app.path.src %>/js/scripts.js']
                }
            }
        },

        watch: {
            sass: {
                files: '<%= app.path.src %>/sass/**/*.scss',
                tasks: ['sass', 'autoprefixer', 'csslint'],
                options: {
                    livereload: true
                }
            },
            scripts: {
                files: ['Gruntfile.js', '<%= app.path.src %>/js/**/*.js'],
                tasks: ['uglify', 'jshint'],
                options: {
                    livereload: true
                }
            },
            files: {
                files: ['**/*.php', 'img/**'],
                options: {
                    livereload: true
                }
            }
        }

    });

    // Load plugin tasks
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-csslint');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Tasks
    grunt.registerTask('default', ['dev']);
    grunt.registerTask('dev', [
        'sass',
        'autoprefixer',
        'csslint',
        'uglify',
        'jshint',
        'watch'
    ]);
    grunt.registerTask('build', [
        'sass',
        'autoprefixer',
        'csslint',
        'uglify',
        'jshint',
    ]);

};