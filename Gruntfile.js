module.exports = function(grunt) {

	grunt.initConfig({

		compass: {
			prod: {
				options: {
					cssDir: 'app/generated/css',
					sassDir: 'app/styles/sass',
					imagesDir: 'app/images',
					generatedImagesDir: 'app/generated/sprites',
					// httpImagesPath: '/SiteCollectionImages/BrandHub/jello-o',
					relativeAssets: true,
					raw: 'preferred_syntax = :sass\n'
				}
			},
		},

		watch: {
			js: {

				// Assets to watch:
				files: ['app/js/**/*'],

				// When assets are changed:
				tasks: ['notify:watchJS']
			},
			styles: {

				// Assets to watch:
				files: [
					'app/styles/**/*.sass',
					'app/images/*'
				],

				// When assets are changed:
				tasks: ['compass', 'notify:watchStyles']
			}
		},

		notify: {
			watchStyles: {
				options: {
					title: 'Task Completed',
					message: 'watch:styles'
				}
			},
			watchJS: {
				options: {
					title: 'Task Complete',
					message: 'watch:js'
				}
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-notify');
	grunt.registerTask('default',['watch']);
};