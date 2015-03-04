module.exports = function(grunt) {
    "use strict";

    //Configuration
    var THEME_NAME = "";

    grunt.initConfig({
        pkg: grunt.file.readJSON("package.json"),
        bower: {
            all: {
                options: {
                    cleanup: false,
                    layout: "byComponent",
                    targetDir: "content/themes/" + THEME_NAME + "/inc"
                }
            }
        },
        clean: {
            dist: {
                src: [
                    "content/themes/" + THEME_NAME + "/css/*.min.css",
                    "content/themes/" + THEME_NAME + "/js/*.min.js"
                ]
            }
        },
        compass: {
            all: {
                options: {
                    cssDir: "content/themes/" + THEME_NAME + "/css",
                    outputStyle: "compressed",
                    raw:
                        "on_stylesheet_saved do |filename|\n" +
                            "if File.exists? (filename)\n" +
                                "FileUtils.cp(filename, filename.gsub(\".css\", \".min.css\"))\n" +
                                "FileUtils.rm(filename);\n" +
                            "end\n" +
                        "end\n",
                    sassDir: "content/themes/" + THEME_NAME + "/scss"
                }
            }
        },
        jshint: {
            all: {
                ignores: "*.min.js",
                jshintrc: ".jshintrc",
                src: "content/themes/" + THEME_NAME + "/js/*.js"
            }
        },
        requirejs: {
            dist: {
                options: {
                    baseUrl: "content/themes/" + THEME_NAME + "/js",
                    fileExclusionRegExp: /\.min\.js$/,
                    mainConfigFile: "app.js",
                    name: "app",
                    optimize: "uglify2",
                    out: "content/themes/" + THEME_NAME + "/js/app.min.js",
                    paths: {
                    }
                }
            }
        },
        watch: {
            devCss: {
                files: ["content/themes/" + THEME_NAME + "/scss/*.scss"],
                tasks: [
                    "compass:all"
                ]
            },
            devJs: {
                files: ["content/themes/" + THEME_NAME + "/js/*.js"],
                tasks: [
                    "jshint:test"
                ]
            }
        },
    });

    require("load-grunt-tasks")(grunt);

    grunt.registerTask("default", ["clean:dist", "bower:all", "compass:all", "requirejs:dist"]);
};
