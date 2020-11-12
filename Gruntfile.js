module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd/mm/yyyy HH:mm:ss") %> */\n',
                preserveComments: 'all' //Manter todos os comentários dos aquivos .JS
            },
            t1: {
                files: {
                    'public/assets/app.min.js':
                        [
                            'node_modules/jquery/dist/jquery.min.js',
                            'node_modules/popper.js/dist/umd/popper.min.js',
                            'node_modules/bootstrap/dist/js/bootstrap.min.js',
                            'node_modules/@fortawesome/fontawesome-free/js/all.js',
                            'src/app.js',
                        ]
                }
            }
        },
        cssmin: {
            target1: {
                files: {
                    'public/assets/app.min.css': [
                        'node_modules/bootstrap/dist/css/bootstrap.min.css',
                        'node_modules/@fortawesome/fontawesome-free/css/all.min.css',
                        'src/app.css',
                    ]
                }
            }
        },
        copy: {
            main: {
                files: [
                    {
                        expand: true,
                        flatten: true,
                        src: ['node_modules/@fortawesome/fontawesome-free/webfonts/**'],
                        dest: 'public/webfonts/',
                        filter: 'isFile'
                    }
                ]
            }
        },
        watch: {
            files: ['<%= jshint.files %>'],
            tasks: ['jshint']
        }
    });

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-copy');

    grunt.registerTask('default', ['uglify','cssmin','copy']);

};