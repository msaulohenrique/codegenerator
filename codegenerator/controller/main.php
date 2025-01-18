<?php
	namespace hs11\codegenerator\controller;

	/**
	 * Code Generator main controller.
	 */
	class main
	{
		/* @var \phpbb\config\config */
		protected $config;

		/* @var \phpbb\controller\helper */
		protected $helper;
		
		/* @var \phpbb\request\request */
		protected $request;
		
		/* @var \phpbb\template\template */
		protected $template;

		/* @var \phpbb\user */
		protected $user;
		
		/* @var \phpbb\profilefields\manager */
		protected $custom_fields_manager;

		/**
		 * Constructor
		 *
		 * @param \phpbb\config\config		$config
		 * @param \phpbb\controller\helper	$helper
		 * @param \phpbb\request\request	$request
		 * @param \phpbb\template\template	$template
		 * @param \phpbb\user				$user
		 * @param \phpbb\profilefields\manager				$custom_fields_manager
		 */
		public function __construct(
			\phpbb\config\config $config,
			\phpbb\controller\helper $helper,
			\phpbb\request\request $request,
			\phpbb\template\template $template,
			\phpbb\user $user,
			\phpbb\profilefields\manager $custom_fields_manager
		) {
			$this->config = $config;
			$this->helper = $helper;
			$this->request = $request;
			$this->template = $template;
			$this->user = $user;
			$this->custom_fields_manager = $custom_fields_manager;

			// Recuperar o valor do campo personalizado
			$this->cg_image_top = $this->get_custom_field('cg_image_top');
		}

		/**
		 * Recupera o valor de um campo personalizado.
		 *
		 * @param string $field_name Nome do campo personalizado.
		 * @return mixed Valor do campo ou null se não encontrado.
		 */
		protected function get_custom_field($field_name)
		{
			$user_id = $this->user->data['user_id'];
			$custom_fields = $this->custom_fields_manager->grab_profile_fields_data([$user_id]);

			return isset($custom_fields[$user_id][$field_name]) ? $custom_fields[$user_id][$field_name] : null;
		}

		/**
		 * Demo controller for route /codegenerator/{name}
		 *
		 * @param string $name
		 *
		 * @return \Symfony\Component\HttpFoundation\Response A Symfony Response object
		 */
		public function handle($name)
		{
		// MUSIC
			$artista = $this->request->variable('artista', '', true);
			$album = $this->request->variable('album', '', true);
			$poster = $this->request->variable('poster', '', true);
			$faixas = $this->request->variable('faixas', '', true);
			$origem = $this->request->variable('origem', '', true);
			$genero = $this->request->variable('genero', '', true);
			$ano = $this->request->variable('ano', '', true);
			$gravadora = $this->request->variable('gravadora', '', true);
			$codec= $this->request->variable('codec', '', true);
			$qualidade = $this->request->variable('qualidade', '', true);
			$tamanho = $this->request->variable('tamanho', '', true);
			$grupo = $this->request->variable('grupo', '', true);
			$uploader = $this->request->variable('uploader', '', true);
			$outras_info = $this->request->variable('outras_info', '', true);
			$http = $this->request->variable('http', '', true);
			$compartilhamento_http = $this->request->variable('compartilhamento_http', '', true);
			$compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '', true);
			$compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '', true);
			$compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '', true);

	$this->template->assign_vars(array(
			'A_ARTISTA'=> $artista,
			'A_ALBUM'=> $album,
			'A_POSTER'=> $poster,
			'A_FAIXAS'=> $faixas,
			'A_ORIGEM'=> $origem,
			'A_GENERO'=> $genero,
			'A_ANO'=> $ano,
			'A_GRAVADORA'=> $gravadora,
			'A_CODEC'=> $codec,
			'A_QUALIDADE'=> $qualidade,
			'A_TAMANHO'=> $tamanho,
			'A_GRUPO'=> $grupo,
			'A_UPLOADER'=> $uploader,
			'A_OUTRAS_INFO'=> $outras_info,
			'A_HTTP'=> $http,
			'A_COMPARTILHAMENTO_HTTP'=> $compartilhamento_http,
			'A_COMPARTILHAMENTO_TORRENT'=> $compartilhamento_torrent,
			'A_COMPARTILHAMENTO_MAGNET'=> $compartilhamento_magnet,
			'A_COMPARTILHAMENTO_ED2K'=> $compartilhamento_ed2k,
	));

	// ANIMATION
		$nome = $this->request->variable('nome', '', true);
		$poster = $this->request->variable('poster', '', true);
		$descricao = $this->request->variable('descricao', '', true);
		$screen1 = $this->request->variable('screen1', '', true);
		$screen2 = $this->request->variable('screen2', '', true);
		$screen3 = $this->request->variable('screen3', '', true);
		$screen4 = $this->request->variable('screen4', '', true);
		$traduzido = $this->request->variable('traduzido', '', true);
		$temporada = $this->request->variable('temporada', '', true);
		$nome_episodio = $this->request->variable('nome_episodio', '', true);
		$fan = $this->request->variable('fan', '', true);
		$idioma = $this->request->variable('idioma', '', true);
		$midias = $this->request->variable('midias', '', true);
		$duracao = $this->request->variable('duracao', '', true);
		$qualidade = $this->request->variable('qualidade', '', true);
		$tamanho = $this->request->variable('tamanho', '', true);
		$video_codec = $this->request->variable('video_codec', '', true);
		$video_bitrate = $this->request->variable('video_bitrate', '', true);
		$audio_codec = $this->request->variable('audio_codec', '', true);
		$audio_bitrate = $this->request->variable('audio_bitrate', '', true);
		$resolucao = $this->request->variable('resolucao', '', true);
		$legendas= $this->request->variable('legendas', '', true);
		$formato= $this->request->variable('formato', '', true);
		$frame_rate = $this->request->variable('frame_rate', '', true);
		$frame_rate = $this->request->variable('frame_rate', '', true);
		$rip = $this->request->variable('rip', '', true);
		$site = $this->request->variable('site', '', true);
		$outras_info = $this->request->variable('outras_info', '', true);
		$http = $this->request->variable('http', '', true);
		$compartilhamento_http = $this->request->variable('compartilhamento_http', '', true);
		$compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '', true);
		$compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '', true);
		$compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '', true);

		$this->template->assign_vars(array(
			'A_NOME'=> $nome,
			'A_POSTER'=> $poster,
			'A_DESCRICAO'=> $descricao,
			'A_SCREEN1'=> $screen1,
			'A_SCREEN2'=> $screen2,
			'A_SCREEN3'=> $screen3,
			'A_SCREEN4'=> $screen4,
			'A_TRADUZIDO'=> $traduzido,
			'A_TEMPORADA'=> $temporada,
			'A_NOME_EPI'=> $nome_episodio,
			'A_FAN'=> $fan,
			'A_IDIOMA'=> $idioma,
			'A_MIDIAS'=> $midias,
			'A_DURACAO'=> $duracao,
			'A_QUALIDADE'=> $qualidade,
			'A_TAMANHO'=> $tamanho,
			'A_VIDEO_C'=> $video_codec,
			'A_VIDEO_B'=> $video_bitrate,
			'A_AUDIO_C'=> $audio_codec,
			'A_AUDIO_B'=> $audio_bitrate,
			'A_RESOLUCAO'=> $resolucao,
			'A_LEGENDAS'=> $legendas,
			'A_FORMATO'=> $formato,
			'A_FRAME_R'=> $frame_rate,
			'A_RIP'=> $rip,
			'A_SITE'=> $site,
			'A_OUTRAS_INFO'=> $outras_info,
			'A_HTTP'=> $http,
			'A_COMPARTILHAMENTO_HTTP'=> $compartilhamento_http,
			'A_COMPARTILHAMENTO_TORRENT'=> $compartilhamento_torrent,
			'A_COMPARTILHAMENTO_MAGNET'=> $compartilhamento_magnet,
			'A_COMPARTILHAMENTO_ED2K'=> $compartilhamento_ed2k,
		));

	// EBOOK
		$nome = $this->request->variable('nome', '', true);
		$poster = $this->request->variable('poster', '', true);
		$descricao = $this->request->variable('descricao', '', true);
		$autor = $this->request->variable('autor', '', true);
		$paginas = $this->request->variable('paginas', '', true);
		$tamanho = $this->request->variable('tamanho', '', true);
		$genero = utf8_encode($this->request->variable('genero', ''));
		$formato = $this->request->variable('formato', '', true);
		$editora = $this->request->variable('editora', '', true);
		$idioma = $this->request->variable('idioma', '', true);
		$edicao = $this->request->variable('edicao', '', true);
		$premiacoes = $this->request->variable('premiacoes', '', true);
		$curiosidades = $this->request->variable('curiosidades', '', true);
		$outras_info = $this->request->variable('outras_info', '', true);
		$http = $this->request->variable('http', '', true);
		$compartilhamento_http = $this->request->variable('compartilhamento_http', '', true);
		$compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '', true);
		$compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '', true);
		$compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '', true);

	$this->template->assign_vars(array(
			'A_NOME'=> $nome,
			'A_POSTER'=> $poster,
			'A_DESCRICAO'=> $descricao,
			'A_AUTOR'=> $autor,
			'A_PAGINAS'=> $paginas,
			'A_TAMANHO'=> $tamanho,
			'A_GENERO'=> $genero,
			'A_FORMATO'=> $formato,
			'A_EDITORA'=> $editora,
			'A_IDIOMA'=> $idioma,
			'A_EDICAO'=> $edicao,
			'A_PREMIACOES'=> $premiacoes,
			'A_CURIOSIDADES'=> $curiosidades,
			'A_OUTRAS_INFO'=> $outras_info,
			'A_HTTP'=> $http,
			'A_COMPARTILHAMENTO_HTTP'=> $compartilhamento_http,
			'A_COMPARTILHAMENTO_TORRENT'=> $compartilhamento_torrent,
			'A_COMPARTILHAMENTO_MAGNET'=> $compartilhamento_magnet,
			'A_COMPARTILHAMENTO_ED2K'=> $compartilhamento_ed2k,
	));

// MOVIES
	$nome = $this->request->variable('nome', '', true);
	$poster = $this->request->variable('poster', '', true);
	$descricao = $this->request->variable('descricao', '', true);
	$screen1 = $this->request->variable('screen1', '', true);
	$screen2 = $this->request->variable('screen2', '', true);
	$elenco = $this->request->variable('elenco', '', true);
	$traduzido = $this->request->variable('traduzido', '', true);
	$genero = $this->request->variable('genero', '', true);
	$duracao = $this->request->variable('duracao', '', true);
	$ano = $this->request->variable('ano', '', true);
	$imdb = $this->request->variable('imdb', '', true);
	$ficha = $this->request->variable('ficha', '', true);
	$premiacoes = $this->request->variable('premiacoes', '', true);
	$curiosidades = $this->request->variable('curiosidades', '', true);
	$midias = $this->request->variable('midias', '', true);
	$tamanho_arquivo = $this->request->variable('tamanho_arquivo', '', true);
	$legenda = $this->request->variable('legenda', '', true);
	$idioma_audio = $this->request->variable('idioma_audio', '', true);
	$grupo = $this->request->variable('grupo', '', true);
	$uploader = $this->request->variable('uploader', '', true);
	$qualidade = $this->request->variable('qualidade', '', true);
	$video_codec = $this->request->variable('video_codec', '', true);
	$video_bitrate = $this->request->variable('video_bitrate', '', true);
	$audio_codec = $this->request->variable('audio_codec', '', true);
	$audio_bitrate = $this->request->variable('audio_bitrate', '', true);
	$resolucao = $this->request->variable('resolucao', '', true);
	$frame_rate = $this->request->variable('frame_rate', '', true);
	$formato_tela = $this->request->variable('formato_tela', '', true);
	$outras_info = $this->request->variable('outras_info', '', true);
	$http = $this->request->variable('http', '', true);
	$compartilhamento_http = $this->request->variable('compartilhamento_http', '', true);
    $compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '', true);
    $compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '', true);
    $compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '', true);

$this->template->assign_vars(array(
		'A_NOME'=> $nome,
		'A_POSTER'=> $poster,
		'A_DESCRICAO'=> $descricao,
		'A_SCREEN1'=> $screen1,
		'A_SCREEN2'=> $screen2,
		'A_ELENCO'=> $elenco,
		'A_TRADUZIDO'=> $traduzido,
		'A_GENERO'=> $genero,
		'A_DURACAO'=> $duracao,
		'A_ANO'=> $ano,
		'A_IMDB'=> $imdb,
		'A_FICHA'=> $ficha,
		'A_PREMIACOES'=> $premiacoes,
		'A_CURIOSIDADES'=> $curiosidades,
		'A_MIDIAS'=> $midias, 
		'A_QUALIDADE'=> $qualidade,
		'A_VIDEO_C'=> $video_codec,
		'A_VIDEO_B'=> $video_bitrate,
		'A_AUDIO_C'=> $audio_codec,
		'A_AUDIO_B'=> $audio_bitrate,
		'A_RESOLUCAO'=> $resolucao,
		'A_FRAME_R'=> $frame_rate,
		'A_FORMATO_TELA'=> $formato_tela,
		'A_TAMANHO_ARQUIVO'=> $tamanho_arquivo,
		'A_LEGENDA'=> $legenda, 
		'A_IDIOMA'=> $idioma_audio, 
		'A_GRUPO'=> $grupo,
		'A_UPLOADER'=> $uploader,
		'A_OUTRAS_INFO'=> $outras_info,
		'A_HTTP'=> $http,
		'A_COMPARTILHAMENTO_HTTP'=> $compartilhamento_http,
		'A_COMPARTILHAMENTO_TORRENT'=> $compartilhamento_torrent,
		'A_COMPARTILHAMENTO_MAGNET'=> $compartilhamento_magnet,
		'A_COMPARTILHAMENTO_ED2K'=> $compartilhamento_ed2k,
));

// GAMES
	$nome = $this->request->variable('nome', '', true);
	$poster = $this->request->variable('poster', '', true);
	$descricao = $this->request->variable('descricao', '', true);
	$screen1 = $this->request->variable('screen1', '', true);
	$screen2 = $this->request->variable('screen2', '', true);
	$fabricante = $this->request->variable('fabricante', '', true);
	$ano = $this->request->variable('ano', '', true);
	$site = $this->request->variable('site', '', true);
	$tamanho = $this->request->variable('tamanho', '', true);
	$distribuidor = $this->request->variable('distribuidor', '', true);
	$genero = $this->request->variable('genero', '', true);
	$idioma = $this->request->variable('idioma', '', true);
	$senha = $this->request->variable('senha', '', true);
	$midias = $this->request->variable('midias', '', true);
	$console = $this->request->variable('console', '', true);
	$sistema = $this->request->variable('sistema', '', true);
	$multiplay = $this->request->variable('multiplay', '', true);
	$jogadores = $this->request->variable('jogadores', '', true);
	$grupo = $this->request->variable('grupo', '', true);
	$uploader = $this->request->variable('uploader', '', true);
	$outras_info = $this->request->variable('outras_info', '', true);
	$http = $this->request->variable('http', '', true);
	$compartilhamento_http = $this->request->variable('compartilhamento_http', '', true);
    $compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '', true);
    $compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '', true);
    $compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '', true);
	
$this->template->assign_vars(array(
		'A_NOME'=> $nome,
		'A_POSTER'=> $poster,
		'A_DESCRICAO'=> $descricao,
		'A_SCREEN1'=> $screen1,
		'A_SCREEN2'=> $screen2,
		'A_FABRICANTE'=> $fabricante,
		'A_ANO'=> $ano,
		'A_SITE'=> $site,
		'A_TAMANHO'=> $tamanho,
		'A_DISTRIBUIDOR'=> $distribuidor,
		'A_GENERO'=> $genero,
		'A_IDIOMA'=> $idioma,
		'A_SENHA'=> $senha,
		'A_MIDIAS'=> $midias,
		'A_CONSOLE'=> $console,
		'A_SISTEMA'=> $sistema,
		'A_MULTIPLAY'=> $multiplay,
		'A_JOGADORES'=> $jogadores,
		'A_GRUPO'=> $grupo,
		'A_UPLOADER'=> $uploader,
		'A_OUTRAS_INFO'=> $outras_info,
		'A_HTTP'=> $http,
		'A_COMPARTILHAMENTO_HTTP'=> $compartilhamento_http,
		'A_COMPARTILHAMENTO_TORRENT'=> $compartilhamento_torrent,
		'A_COMPARTILHAMENTO_MAGNET'=> $compartilhamento_magnet,
		'A_COMPARTILHAMENTO_ED2K'=> $compartilhamento_ed2k,

));

// GAMES PC 
	$nome = $this->request->variable('nome', '', true);
	$fabricante = $this->request->variable('fabricante', '', true);
	$ano = $this->request->variable('ano', '', true);
	$idioma = $this->request->variable('idioma', '', true);
	$grupo = $this->request->variable('grupo', '', true);
	$uploader = $this->request->variable('uploader', '', true);
	$poster = $this->request->variable('poster', '', true);
	$plataforma = $this->request->variable('plataforma', '', true);
	$genero = $this->request->variable('genero', '', true);
	$cdkey = $this->request->variable('cdkey', '', true);
	$serial = $this->request->variable('serial', '', true);
	$senha = $this->request->variable('senha', '', true);
	$tamanho = $this->request->variable('tamanho', '', true);
	$midias = $this->request->variable('midias', '', true);
	$site = $this->request->variable('site', '', true);
	$screen1 = $this->request->variable('screen1', '', true);
	$screen2 = $this->request->variable('screen2', '', true);
	$descricao = $this->request->variable('descricao', '', true);
	$configuration = $this->request->variable('configuration', '', true);
	$outras_info = $this->request->variable('outras_info', '', true);
	$http = $this->request->variable('http', '', true);
	$compartilhamento_http = $this->request->variable('compartilhamento_http', '', true);
    	$compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '', true);
    	$compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '', true);
    	$compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '', true);
	
$this->template->assign_vars(array(
		'A_NAME'=> $nome,
		'A_FABRICANTE'=> $fabricante,
		'A_ANO'=> $ano,
		'A_IDIOMA'=> $idioma,
		'A_GRUPO'=> $grupo,
		'A_UPLOADER'=> $uploader,
		'A_POSTER'=> $poster,
		'A_PLATAFORMA'=> $plataforma,
		'A_GENERO'=> $genero,
		'A_CDKEY'=> $cdkey,
		'A_SERIAL'=> $serial,
		'A_SENHA'=> $senha,
		'A_TAMANHO'=> $tamanho,
		'A_MIDIAS'=> $midias,
		'A_SITE'=> $site,
		'A_SCREEN1'=> $screen1,
		'A_SCREEN2'=> $screen1,
		'A_DESCRICAO'=> $descricao,
		'A_CONFIGURATION'=> $configuration,
		'A_OUTRAS_INFO'=> $outras_info,
		'A_HTTP'=> $http,
		'A_COMPARTILHAMENTO_HTTP'=> $compartilhamento_http,
		'A_COMPARTILHAMENTO_TORRENT'=> $compartilhamento_torrent,
		'A_COMPARTILHAMENTO_MAGNET'=> $compartilhamento_magnet,
		'A_COMPARTILHAMENTO_ED2K'=> $compartilhamento_ed2k,

		
));

// TV SHOW
	$nome = $this->request->variable('nome', '', true);
	$episodio = $this->request->variable('episodio', '', true);
	$temporada = $this->request->variable('temporada', '', true);
	$duracao = $this->request->variable('duracao', '', true);
	$tamanho = $this->request->variable('tamanho', '', true);
	$idioma = $this->request->variable('idioma', '', true);
	$grupo = $this->request->variable('grupo', '', true);
	$uploader = $this->request->variable('uploader', '', true);
	$poster = $this->request->variable('poster', '', true);
	$video_codec = $this->request->variable('video_codec', '', true);
	$video_bitrate = $this->request->variable('video_bitrate', '', true);
	$audio_codec = $this->request->variable('audio_codec', '', true);
	$audio_bitrate = $this->request->variable('audio_bitrate', '', true);
	$resolucao = $this->request->variable('resolucao', '', true);
	$frame_rate = $this->request->variable('frame_rate', '', true);
	$qualidade = $this->request->variable('qualidade', '', true);
	$legenda = $this->request->variable('legenda', '', true);
	$midias = $this->request->variable('midias', '', true);
	$site = $this->request->variable('site', '', true);
	$screen1 = $this->request->variable('screen1', '', true);
	$screen2 = $this->request->variable('screen2', '', true);
	$descricao = $this->request->variable('descricao', '', true);
	$elenco = $this->request->variable('elenco', '', true);
	$outras_info = $this->request->variable('outras_info', '', true);
	$http = $this->request->variable('http', '', true);
	$compartilhamento_http = $this->request->variable('compartilhamento_http', '', true);
    $compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '', true);
    $compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '', true);
    $compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '', true);

$this->template->assign_vars(array(
		'A_NAME'=> $nome,
		'A_EPISODIO'=> $episodio,
		'A_TEMPORADA'=> $temporada,
		'A_DURACAO'=> $duracao,
		'A_TAMANHO'=> $tamanho,
		'A_IDIOMA'=> $idioma,
		'A_GRUPO'=> $grupo,
		'A_UPLOADER'=> $uploader,
		'A_POSTER'=> $poster,
		'A_VIDEO_CODEC'=> $video_codec,
		'A_VIDEO_BITRATE'=> $video_bitrate,
		'A_AUDIO_CODEC'=> $audio_codec,
		'A_AUDIO_BITRATE'=> $audio_bitrate,
		'A_RESOLUCAO'=> $resolucao,
		'A_FRAME_RATE'=> $frame_rate,
		'A_QUALIDADE'=> $qualidade,
		'A_LEGENDA'=> $legenda,
		'A_MIDIAS'=> $midias,
		'A_SITE'=> $site,
		'A_SCREEN1'=> $screen1,
		'A_SCREEN2'=> $screen2,
		'A_DESCRICAO'=> $descricao,
		'A_ELENCO'=> $elenco,
		'A_OUTRAS_INFO'=> $outras_info,
		'A_HTTP'=> $http,
		'A_COMPARTILHAMENTO_HTTP'=> $compartilhamento_http,
		'A_COMPARTILHAMENTO_TORRENT'=> $compartilhamento_torrent,
		'A_COMPARTILHAMENTO_MAGNET'=> $compartilhamento_magnet,
		'A_COMPARTILHAMENTO_ED2K'=> $compartilhamento_ed2k,


));

// SOFTWARES
	$nome = $this->request->variable('nome', '', true);
	$fabricante = $this->request->variable('fabricante', '', true);
	$funcao = $this->request->variable('funcao', '', true);
	$so = $this->request->variable('so', '', true);
	$idioma = $this->request->variable('idioma', '', true);
	$grupo = $this->request->variable('grupo', '', true);
	$uploader = $this->request->variable('uploader', '', true);
	$poster = $this->request->variable('poster', '', true);
	$formato = $this->request->variable('formato', '', true);
	$cdkey = $this->request->variable('cdkey', '', true);
	$serial = $this->request->variable('serial', '', true);
	$senha = $this->request->variable('senha', '', true);
	$tamanho = $this->request->variable('tamanho', '', true);
	$midias = $this->request->variable('midias', '', true);
	$site = $this->request->variable('site', '', true);
	$screen1 = $this->request->variable('screen1', '', true);
	$screen2 = $this->request->variable('screen2', '', true);
	$descricao = $this->request->variable('descricao', '', true);
	$configuration = $this->request->variable('configuration', '', true);
	$outras_info = $this->request->variable('outras_info', '', true);
	$http = $this->request->variable('http', '', true);
	$compartilhamento_http = $this->request->variable('compartilhamento_http', '', true);
    $compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '', true);
    $compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '', true);
    $compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '', true);

$this->template->assign_vars(array(
		'A_NAME'=> $nome,
		'A_FABRICANTE'=> $fabricante,
		'A_FUNCAO'=> $funcao,
		'A_SO'=> $so,
		'A_IDIOMA'=> $idioma,
		'A_GRUPO'=> $grupo,
		'A_UPLOADER'=> $uploader,
		'A_POSTER'=> $poster,
		'A_FORMATO'=> $formato,
		'A_CDKEY'=> $cdkey,
		'A_SERIAL'=> $serial,
		'A_SENHA'=> $senha,
		'A_TAMANHO'=> $tamanho,
		'A_MIDIAS'=> $midias,
		'A_SITE'=> $site,
		'A_SCREEN1'=> $screen1,
		'A_SCREEN2'=> $screen2,
		'A_DESCRICAO'=> $descricao,
		'A_CONFIGURATION'=> $configuration,
		'A_OUTRAS_INFO'=> $outras_info,
		'A_HTTP'=> $http,
		'A_COMPARTILHAMENTO_HTTP'=> $compartilhamento_http,
		'A_COMPARTILHAMENTO_TORRENT'=> $compartilhamento_torrent,
		'A_COMPARTILHAMENTO_MAGNET'=> $compartilhamento_magnet,
		'A_COMPARTILHAMENTO_ED2K'=> $compartilhamento_ed2k,
));

// NEWS
	$titulo = $this->request->variable('titulo', '', true);
	$descricao = $this->request->variable('descricao', '', true);
	$img_des = $this->request->variable('img_des', '', true);
	$texto = $this->request->variable('texto', '', true);
	$fonte = $this->request->variable('fonte', '', true);
	$link = $this->request->variable('link', '', true);

$this->template->assign_vars(array(
		'A_TITULO'=> $titulo,
		'A_DESCRICAO'=> $descricao,
		'A_IMG_DES'=> $img_des,
		'A_TEXTO'=> $texto,
		'A_FONTE'=> $fonte,
		'A_LINK'=> $link,

));

// UPORTAL
	$titulo1 = $this->request->variable('titulo1', '', true);
	$imagem1 = $this->request->variable('imagem1', '', true);
	$compartilhamento1 = $this->request->variable('compartilhamento1', '', true);
	$categoria1 = $this->request->variable('categoria1', '', true);
	$tamanho1 = $this->request->variable('tamanho1', '', true);
	$subcategoria1 = $this->request->variable('subcategoria1', '', true);
	$autor1 = $this->request->variable('autor1', '', true);
	$topico1 = $this->request->variable('topico1', '', true);
	$titulo2 = $this->request->variable('titulo2', '', true);
	$imagem2 = $this->request->variable('imagem2', '', true);
	$compartilhamento2 = $this->request->variable('compartilhamento2', '', true);
	$categoria2 = $this->request->variable('categoria2', '', true);
	$tamanho2 = $this->request->variable('tamanho2', '', true);
	$subcategoria2 = $this->request->variable('subcategoria2', '', true);
	$autor2 = $this->request->variable('autor2', '', true);
	$topico2 = $this->request->variable('topico2', '', true);
	$titulo3 = $this->request->variable('titulo3', '', true);
	$imagem3 = $this->request->variable('imagem3', '', true);
	$compartilhamento3 = $this->request->variable('compartilhamento3', '', true);
	$categoria3 = $this->request->variable('categoria3', '', true);
	$tamanho3 = $this->request->variable('tamanho3', '', true);
	$subcategoria3 = $this->request->variable('subcategoria3', '', true);
	$autor3 = $this->request->variable('autor3', '', true);
	$topico3 = $this->request->variable('topico3', '', true);
	
$this->template->assign_vars(array(
		'A_TITULO1'=> $titulo1,
		'A_IMAGEM1'=> $imagem1,
		'A_COMPARTILHAMENTO1'=> $compartilhamento1,
		'A_CATEGORIA1'=> $categoria1,
		'A_TAMANHO1'=> $tamanho1,
		'A_SUBCATEGORIA1'=> $subcategoria1,
		'A_AUTOR1'=> $autor1,
		'A_TOPICO1'=> $topico1,
		'A_TITULO2'=> $titulo2,
		'A_IMAGEM2'=> $imagem2,
		'A_COMPARTILHAMENTO2'=> $compartilhamento2,
		'A_CATEGORIA2'=> $categoria2,
		'A_TAMANHO2'=> $tamanho2,
		'A_SUBCATEGORIA2'=> $subcategoria2,
		'A_AUTOR2'=> $autor2,
		'A_TOPICO2'=> $topico2,
		'A_TITULO3'=> $titulo3,
		'A_IMAGEM3'=> $imagem3,
		'A_COMPARTILHAMENTO3'=> $compartilhamento3,
		'A_CATEGORIA3'=> $categoria3,
		'A_TAMANHO3'=> $tamanho3,
		'A_SUBCATEGORIA3'=> $subcategoria3,
		'A_AUTOR3'=> $autor3,
		'A_TOPICO3'=> $topico3,
));
        

	    if($name == "music") {
	        return $this->helper->render('codegenerator/music.html', $this->user->lang('CAT_MUSIC'));
	    }
	    if($name == "music_action") {
	        return $this->helper->render('codegenerator/form_action/music.html', $this->user->lang('CAT_MUSIC'));
	    }
	    if($name == "animation") {
	        return $this->helper->render('codegenerator/animation.html', $this->user->lang('CAT_ANIMATION'));
	    }
	    if($name == "animation_action") {
	        return $this->helper->render('codegenerator/form_action/animation.html', $this->user->lang('CAT_ANIMATION'));
	    }
	    if($name == "ebook") {
	        return $this->helper->render('codegenerator/ebook.html', $this->user->lang('CAT_BOOKS'));
	    }
	    if($name == "ebook_action") {
	        return $this->helper->render('codegenerator/form_action/ebook.html', $this->user->lang('CAT_BOOKS'));
	    }
	    if($name == "movies") {
	        return $this->helper->render('codegenerator/movies.html', $this->user->lang('CAT_MOVIE'));
	    }
	    if($name == "movies_action") {
	        return $this->helper->render('codegenerator/form_action/movies.html', $this->user->lang('CAT_MOVIE'));
	    }
	    if($name == "games") {
	        return $this->helper->render('codegenerator/games.html', $this->user->lang('CAT_GAMES'));
	    }
	    if($name == "games_action") {
	        return $this->helper->render('codegenerator/form_action/games.html', $this->user->lang('CAT_GAMES'));
	    }
	    if($name == "gamespc") {
	        return $this->helper->render('codegenerator/gamespc.html', $this->user->lang('CAT_GAMESPC'));
	    }
	    if($name == "gamespc_action") {
	        return $this->helper->render('codegenerator/form_action/gamespc.html', $this->user->lang('CAT_GAMESPC'));
	    }
	    if($name == "tvshow") {
	        return $this->helper->render('codegenerator/tvshow.html', $this->user->lang('CAT_TVSHOW'));
	    }
	    if($name == "tvshow_action") {
	        return $this->helper->render('codegenerator/form_action/tvshow.html', $this->user->lang('CAT_TVSHOW'));
	    }
	    if($name == "soft") {
	        return $this->helper->render('codegenerator/soft.html', $this->user->lang('CAT_SOFT'));
	    }
	    if($name == "soft_action") {
	        return $this->helper->render('codegenerator/form_action/soft.html', $this->user->lang('CAT_SOFT'));
	    }
	    if($name == "news") {
	        return $this->helper->render('codegenerator/news.html', $this->user->lang('CAT_NEWS'));
	    }
	    if($name == "news_action") {
	        return $this->helper->render('codegenerator/form_action/news.html', $this->user->lang('CAT_NEWS'));
	    }
	    if($name == "portal") {
	        return $this->helper->render('codegenerator/portal.html', $this->user->lang('CAT_PORTAL'));
	    }
	    if($name == "portal_action") {
	        return $this->helper->render('codegenerator/form_action/portal.html', $this->user->lang('CAT_PORTAL'));
	    }
		return $this->helper->render('codegenerator.html', $this->user->lang('CODEGENERATOR_PAGE'));
	}
}

