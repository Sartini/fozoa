
module.exports = function(grunt) {
  var utils;
  utils = (require('./gruntcomponents/misc/commonutils'))(grunt);
  grunt.task.loadTasks('gruntcomponents/tasks');
  grunt.task.loadNpmTasks('grunt-contrib-watch');
  grunt.task.loadNpmTasks('grunt-contrib-less');
  grunt.initConfig({
    distdir: 'wp-content/themes/fozoa',
    pkg: grunt.file.readJSON('package.json'),
    src: {
      less: ['wp-content/themes/fozoa/*.less'],
    },

    growl: {
      ok: {
        title: 'COMPLETE!!',
        msg: '＼(^o^)／'
      }
    },
    coffee: {
      dist2: {
        dir: 'wp-content/themes/fozoa/js',
        dest: 'wp-content/themes/fozoa/js'
      }, 
      dist3: {
        dir: 'js/',
        dest: 'js/'
      } 
    },

    less: {
      caminho: {
          options : {yuicompress: true},
          src: [
                  'wp-content/themes/fozoa/css/less/style-default.less',
                  'wp-content/themes/fozoa/css/less/style-pages.less'
                ],
          dest: 'wp-content/themes/fozoa/css/styleall.css'
      }, 
      styleIpad: {
          //options : {yuicompress: true},
          src:  'wp-content/themes/fozoa/css/less/style-768.less', 
          dest: 'wp-content/themes/fozoa/css/style-768.css'
      }, 
      style980: {
          //options : {yuicompress: true},
          src:  'wp-content/themes/fozoa/css/less/style-980.less', 
          dest: 'wp-content/themes/fozoa/css/style-980.css'
      }, 
      bootstrap: {
          src:  'wp-content/themes/fozoa/library/less/bootstrap.less', 
          dest: 'wp-content/themes/fozoa/library/css/bootstrap.css'
      }
       
    },
    watch: {
      dist2: {
        files: 'wp-content/themes/fozoa/js/*.coffee',
        tasks: ['coffee:dist2', 'growl:ok']
      },  
      dist3: {
        files: 'js/*.coffee',
        tasks: ['coffee:dist3', 'growl:ok']
      }, 
      less: {
        files: ['wp-content/themes/fozoa/css/less/*.less', 'wp-content/themes/fozoa/library/less/*.less' ],
        tasks: 'less'
      } 
    }
  });
  grunt.event.on('coffee.error', function(msg) {
    console.log('teste');
    return utils.growl('ERROR!!', msg);
  });
  return grunt.registerTask('default', ['coffee', 'less', 'growl:ok']);
};
