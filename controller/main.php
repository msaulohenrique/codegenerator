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

	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/**
	 * Constructor
	 *
	 * @param \phpbb\config\config		$config
	 * @param \phpbb\controller\helper	$helper
	 * @param \phpbb\template\template	$template
	 * @param \phpbb\user				$user
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->config = $config;
		$this->helper = $helper;
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

