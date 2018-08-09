var elixir = require('laravel-elixir');

elixir(function(mix) {

	//////////////
	// Engineer //
	//////////////
	mix.scripts([
		'../vendor/jquery/dist/jquery.min.js',
		'../vendor/jquery-ui/jquery-ui.min.js',
		'../vendor/moment/min/moment.min.js',
		'../vendor/bootstrap/dist/js/bootstrap.min.js',
		'../vendor/admin-lte/dist/js/adminlte.js',
		'../vendor/admin-lte/dist/js/adminlte.min.js',
		'../vendor/datatables.net/js/jquery.dataTables.min.js',
		'../vendor/datatables.net-bs/js/dataTables.bootstrap.min.js',
	],  'public/js/utils.js');

	mix.styles([
		'../vendor/bootstrap/dist/css/bootstrap.min.css',
		'../vendor/font-awesome/css/font-awesome.min.css',
		'../vendor/Ionicons/css/ionicons.min.css',
		'../vendor/admin-lte/dist/css/AdminLTE.min.css',
		'../vendor/admin-lte/dist/css/skins/_all-skins.min.css',
		'../vendor/datatables.net-bs/css/dataTables.bootstrap.min.css',
	], 'public/css/style.css');
});
