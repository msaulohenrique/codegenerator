<?php
/**
 *
 * Code Generator. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, henrique.seven2011
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

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

	/**
	 * Constructor
	 *
	 * @param \phpbb\config\config		$config
	 * @param \phpbb\controller\helper	$helper
	 * @param \phpbb\request\request	$request
	 * @param \phpbb\template\template	$template
	 * @param \phpbb\user				$user
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\request\request $request, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->config = $config;
		$this->helper = $helper;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
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
    	$artista = $this->request->variable('artista', '');
    	$album = $this->request->variable('album', '');
    	$poster = $this->request->variable('poster', '');
    	$faixas = $this->request->variable('faixas', '');
    	$origem = $this->request->variable('origem', '');
    	$genero = $this->request->variable('genero', '');
    	$ano = $this->request->variable('ano', '');
    	$gravadora = $this->request->variable('gravadora', '');
    	$codec= $this->request->variable('codec', '');
    	$qualidade = $this->request->variable('qualidade', '');
    	$tamanho = $this->request->variable('tamanho', '');
    	$grupo = $this->request->variable('grupo', '');
    	$uploader = $this->request->variable('uploader', '');
    	$outras_info = $this->request->variable('outras_info', '');
    	$http = $this->request->variable('http', '');
    	$compartilhamento_http = $this->request->variable('compartilhamento_http', '');
    	$compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '');
    	$compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '');
    	$compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '');

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
	$nome = $this->request->variable('nome', '');
	$poster = $this->request->variable('poster', '');
	$descricao = $this->request->variable('descricao', '');
	$screen1 = $this->request->variable('screen1', '');
	$screen2 = $this->request->variable('screen2', '');
	$screen3 = $this->request->variable('screen3', '');
	$screen4 = $this->request->variable('screen4', '');
	$traduzido = $this->request->variable('traduzido', '');
	$temporada = $this->request->variable('temporada', '');
	$nome_episodio = $this->request->variable('nome_episodio', '');
	$fan = $this->request->variable('fan', '');
	$idioma = $this->request->variable('idioma', '');
	$midias = $this->request->variable('midias', '');
	$duracao = $this->request->variable('duracao', '');
	$qualidade = $this->request->variable('qualidade', '');
	$tamanho = $this->request->variable('tamanho', '');
	$video_codec = $this->request->variable('video_codec', '');
	$video_bitrate = $this->request->variable('video_bitrate', '');
	$audio_codec = $this->request->variable('audio_codec', '');
	$audio_bitrate = $this->request->variable('audio_bitrate', '');
	$resolucao = $this->request->variable('resolucao', '');
	$legendas= $this->request->variable('legendas', '');
	$formato= $this->request->variable('formato', '');
	$frame_rate = $this->request->variable('frame_rate', '');
	$frame_rate = $this->request->variable('frame_rate', '');
	$rip = $this->request->variable('rip', '');
	$site = $this->request->variable('site', '');
	$outras_info = $this->request->variable('outras_info', '');
	$http = $this->request->variable('http', '');
	$compartilhamento_http = $this->request->variable('compartilhamento_http', '');
    $compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '');
    $compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '');
    $compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '');

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
	$nome = $this->request->variable('nome', '');
	$poster = $this->request->variable('poster', '');
	$descricao = $this->request->variable('descricao', '');
	$autor = $this->request->variable('autor', '');
	$paginas = $this->request->variable('paginas', '');
	$tamanho = $this->request->variable('tamanho', '');
	$genero = utf8_encode($this->request->variable('genero', ''));
	$formato = $this->request->variable('formato', '');
	$editora = $this->request->variable('editora', '');
	$idioma = $this->request->variable('idioma', '');
	$edicao = $this->request->variable('edicao', '');
	$premiacoes = $this->request->variable('premiacoes', '');
	$curiosidades = $this->request->variable('curiosidades', '');
	$outras_info = $this->request->variable('outras_info', '');
	$http = $this->request->variable('http', '');
	$compartilhamento_http = $this->request->variable('compartilhamento_http', '');
    $compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '');
    $compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '');
    $compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '');

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
	$nome = $this->request->variable('nome', '');
	$poster = $this->request->variable('poster', '');
	$descricao = $this->request->variable('descricao', '');
	$screen1 = $this->request->variable('screen1', '');
	$screen2 = $this->request->variable('screen2', '');
	$elenco = $this->request->variable('elenco', '');
	$traduzido = $this->request->variable('traduzido', '');
	$genero = $this->request->variable('genero', '');
	$duracao = $this->request->variable('duracao', '');
	$ano = $this->request->variable('ano', '');
	$imdb = $this->request->variable('imdb', '');
	$ficha = $this->request->variable('ficha', '');
	$premiacoes = $this->request->variable('premiacoes', '');
	$curiosidades = $this->request->variable('curiosidades', '');
	$midias = $this->request->variable('midias', '');
	$tamanho_arquivo = $this->request->variable('tamanho_arquivo', '');
	$legenda = $this->request->variable('legenda', '');
	$idioma_audio = $this->request->variable('idioma_audio', '');
	$grupo = $this->request->variable('grupo', '');
	$uploader = $this->request->variable('uploader', '');
	$qualidade = $this->request->variable('qualidade', '');
	$video_codec = $this->request->variable('video_codec', '');
	$video_bitrate = $this->request->variable('video_bitrate', '');
	$audio_codec = $this->request->variable('audio_codec', '');
	$audio_bitrate = $this->request->variable('audio_bitrate', '');
	$resolucao = $this->request->variable('resolucao', '');
	$frame_rate = $this->request->variable('frame_rate', '');
	$formato_tela = $this->request->variable('formato_tela', '');
	$outras_info = $this->request->variable('outras_info', '');
	$http = $this->request->variable('http', '');
	$compartilhamento_http = $this->request->variable('compartilhamento_http', '');
    $compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '');
    $compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '');
    $compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '');

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
	$nome = $this->request->variable('nome', '');
	$poster = $this->request->variable('poster', '');
	$descricao = $this->request->variable('descricao', '');
	$screen1 = $this->request->variable('screen1', '');
	$screen2 = $this->request->variable('screen2', '');
	$fabricante = $this->request->variable('fabricante', '');
	$ano = $this->request->variable('ano', '');
	$site = $this->request->variable('site', '');
	$tamanho = $this->request->variable('tamanho', '');
	$distribuidor = $this->request->variable('distribuidor', '');
	$genero = $this->request->variable('genero', '');
	$idioma = $this->request->variable('idioma', '');
	$senha = $this->request->variable('senha', '');
	$midias = $this->request->variable('midias', '');
	$console = $this->request->variable('console', '');
	$sistema = $this->request->variable('sistema', '');
	$multiplay = $this->request->variable('multiplay', '');
	$jogadores = $this->request->variable('jogadores', '');
	$grupo = $this->request->variable('grupo', '');
	$uploader = $this->request->variable('uploader', '');
	$outras_info = $this->request->variable('outras_info', '');
	$http = $this->request->variable('http', '');
	$compartilhamento_http = $this->request->variable('compartilhamento_http', '');
    $compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '');
    $compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '');
    $compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '');
	
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
	$nome = $this->request->variable('nome', '');
	$fabricante = $this->request->variable('fabricante', '');
	$ano = $this->request->variable('ano', '');
	$idioma = $this->request->variable('idioma', '');
	$grupo = $this->request->variable('grupo', '');
	$uploader = $this->request->variable('uploader', '');
	$poster = $this->request->variable('poster', '');
	$plataforma = $this->request->variable('plataforma', '');
	$genero = $this->request->variable('genero', '');
	$cdkey = $this->request->variable('cdkey', '');
	$serial = $this->request->variable('serial', '');
	$senha = $this->request->variable('senha', '');
	$tamanho = $this->request->variable('tamanho', '');
	$midias = $this->request->variable('midias', '');
	$site = $this->request->variable('site', '');
	$screen1 = $this->request->variable('screen1', '');
	$screen2 = $this->request->variable('screen2', '');
	$descricao = $this->request->variable('descricao', '');
	$configuration = $this->request->variable('configuration', '');
	$outras_info = $this->request->variable('outras_info', '');
	$http = $this->request->variable('http', '');
	$compartilhamento_http = $this->request->variable('compartilhamento_http', '');
    	$compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '');
    	$compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '');
    	$compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '');
	
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
	$nome = $this->request->variable('nome', '');
	$episodio = $this->request->variable('episodio', '');
	$temporada = $this->request->variable('temporada', '');
	$duracao = $this->request->variable('duracao', '');
	$tamanho = $this->request->variable('tamanho', '');
	$idioma = $this->request->variable('idioma', '');
	$grupo = $this->request->variable('grupo', '');
	$uploader = $this->request->variable('uploader', '');
	$poster = $this->request->variable('poster', '');
	$video_codec = $this->request->variable('video_codec', '');
	$video_bitrate = $this->request->variable('video_bitrate', '');
	$audio_codec = $this->request->variable('audio_codec', '');
	$audio_bitrate = $this->request->variable('audio_bitrate', '');
	$resolucao = $this->request->variable('resolucao', '');
	$frame_rate = $this->request->variable('frame_rate', '');
	$qualidade = $this->request->variable('qualidade', '');
	$legenda = $this->request->variable('legenda', '');
	$midias = $this->request->variable('midias', '');
	$site = $this->request->variable('site', '');
	$screen1 = $this->request->variable('screen1', '');
	$screen2 = $this->request->variable('screen2', '');
	$descricao = $this->request->variable('descricao', '');
	$elenco = $this->request->variable('elenco', '');
	$outras_info = $this->request->variable('outras_info', '');
	$http = $this->request->variable('http', '');
	$compartilhamento_http = $this->request->variable('compartilhamento_http', '');
    $compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '');
    $compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '');
    $compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '');

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
	$nome = $this->request->variable('nome', '');
	$fabricante = $this->request->variable('fabricante', '');
	$funcao = $this->request->variable('funcao', '');
	$so = $this->request->variable('so', '');
	$idioma = $this->request->variable('idioma', '');
	$grupo = $this->request->variable('grupo', '');
	$uploader = $this->request->variable('uploader', '');
	$poster = $this->request->variable('poster', '');
	$formato = $this->request->variable('formato', '');
	$cdkey = $this->request->variable('cdkey', '');
	$serial = $this->request->variable('serial', '');
	$senha = $this->request->variable('senha', '');
	$tamanho = $this->request->variable('tamanho', '');
	$midias = $this->request->variable('midias', '');
	$site = $this->request->variable('site', '');
	$screen1 = $this->request->variable('screen1', '');
	$screen2 = $this->request->variable('screen2', '');
	$descricao = $this->request->variable('descricao', '');
	$configuration = $this->request->variable('configuration', '');
	$outras_info = $this->request->variable('outras_info', '');
	$http = $this->request->variable('http', '');
	$compartilhamento_http = $this->request->variable('compartilhamento_http', '');
    $compartilhamento_torrent = $this->request->variable('compartilhamento_torrent', '');
    $compartilhamento_magnet = $this->request->variable('compartilhamento_magnet', '');
    $compartilhamento_ed2k = $this->request->variable('compartilhamento_ed2k', '');

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
	$titulo = $this->request->variable('titulo', '');
	$descricao = $this->request->variable('descricao', '');
	$img_des = $this->request->variable('img_des', '');
	$texto = $this->request->variable('texto', '');
	$fonte = $this->request->variable('fonte', '');
	$link = $this->request->variable('link', '');

$this->template->assign_vars(array(
		'A_TITULO'=> $titulo,
		'A_DESCRICAO'=> $descricao,
		'A_IMG_DES'=> $img_des,
		'A_TEXTO'=> $texto,
		'A_FONTE'=> $fonte,
		'A_LINK'=> $link,

));

// UPORTAL
	$titulo1 = $this->request->variable('titulo1', '');
	$imagem1 = $this->request->variable('imagem1', '');
	$compartilhamento1 = $this->request->variable('compartilhamento1', '');
	$categoria1 = $this->request->variable('categoria1', '');
	$tamanho1 = $this->request->variable('tamanho1', '');
	$subcategoria1 = $this->request->variable('subcategoria1', '');
	$autor1 = $this->request->variable('autor1', '');
	$topico1 = $this->request->variable('topico1', '');
	$titulo2 = $this->request->variable('titulo2', '');
	$imagem2 = $this->request->variable('imagem2', '');
	$compartilhamento2 = $this->request->variable('compartilhamento2', '');
	$categoria2 = $this->request->variable('categoria2', '');
	$tamanho2 = $this->request->variable('tamanho2', '');
	$subcategoria2 = $this->request->variable('subcategoria2', '');
	$autor2 = $this->request->variable('autor2', '');
	$topico2 = $this->request->variable('topico2', '');
	$titulo3 = $this->request->variable('titulo3', '');
	$imagem3 = $this->request->variable('imagem3', '');
	$compartilhamento3 = $this->request->variable('compartilhamento3', '');
	$categoria3 = $this->request->variable('categoria3', '');
	$tamanho3 = $this->request->variable('tamanho3', '');
	$subcategoria3 = $this->request->variable('subcategoria3', '');
	$autor3 = $this->request->variable('autor3', '');
	$topico3 = $this->request->variable('topico3', '');
	
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

