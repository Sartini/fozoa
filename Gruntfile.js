
module.exports = function(grunt) {
  var utils;
  utils = (require('./gruntcomponents/misc/commonutils'))(grunt);
  grunt.task.loadTasks('gruntcomponents/tasks');
  grunt.task.loadNpmTasks('grunt-contrib-watch');
  grunt.task.loadNpmTasks('grunt-contrib-less');
  grunt.initConfig({
    distdir: 'wp-content/themes/odebrecht',
    pkg: grunt.file.readJSON('package.json'),
    src: {
      less: ['wp-content/themes/odebrecht/*.less'],
    },

    growl: {
      ok: {
        title: 'COMPLETE!!',
        msg: '＼(^o^)／'
      }
    },
    coffee: {
      dist2: {
        dir: 'wp-content/themes/bb/js',
        dest: 'wp-content/themes/bb/js'
      }, 
      dist3: {
        dir: 'js/',
        dest: 'js/'
      } 
    },

    less: {
      caminho: {
          //options : {yuicompress: true},
          src: [
                  'wp-content/themes/odebrecht/teste.less',
                  'wp-content/themes/odebrecht/style-600.less',
                  'wp-content/themes/odebrecht/novo.less'
                ],
          dest: 'wp-content/themes/odebrecht/styleall.css'
      }
       
    },
    watch: {
      dist2: {
        files: 'wp-content/themes/bb/js/*.coffee',
        tasks: ['coffee:dist2', 'growl:ok']
      },  
      dist3: {
        files: 'js/*.coffee',
        tasks: ['coffee:dist3', 'growl:ok']
      }, 
      less: {
        files: ['wp-content/themes/odebrecht/*.less'],
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
