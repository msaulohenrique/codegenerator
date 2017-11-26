<?php
/**
 *
 * Code Generator. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, henrique.seven2011
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace hs11\codegenerator\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Code Generator Event listener.
 */
class main_listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.display_forums_modify_template_vars'	=> 'display_forums_modify_template_vars',
			'core.user_setup'				=> 'load_language_on_setup',
			'core.page_header'				=> 'add_page_header_link',
			'core.viewonline_overwrite_location'	=> 'viewonline_page',
		);
	}

	/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/** @var string phpEx */
	protected $php_ext;

	/**
	 * Constructor
	 *
	 * @param \phpbb\controller\helper	$helper		Controller helper object
	 * @param \phpbb\template\template	$template	Template object
	 * @param \phpbb\user               $user       User object
	 * @param string                    $php_ext    phpEx
	 */
	public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\user $user, $php_ext)
	{
		$this->helper   = $helper;
		$this->template = $template;
		$this->user     = $user;
		$this->php_ext  = $php_ext;
	}

	/**
	 * Load common language files during user setup
	 *
	 * @param \phpbb\event\data	$event	Event object
	 */
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'hs11/codegenerator',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	 * Add a link to the controller in the forum navbar
	 */
	public function add_page_header_link()
	{
		$this->template->assign_vars(array(
			'U_CODE_GENERATOR'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'main')),
			'U_ANIMATION'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'animation')),
			'U_ANIMATION_ACTION'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'animation_action')),
			'U_EBOOK'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'ebook')),
			'U_EBOOK_ACTION'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'ebook_action')),
			'U_GAMES'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'games')),
			'U_GAMES_ACTION'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'games_action')),
			'U_GAMESPC'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'gamespc')),
			'U_GAMESPC_ACTION'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'gamespc_action')),
			'U_MOVIES'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'movies')),
			'U_MOVIES_ACTION'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'movies_action')),
			'U_MUSIC'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'music')),
			'U_MUSIC_ACTION'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'music_action')),
			'U_SOFT'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'soft')),
			'U_SOFT_ACTION'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'soft_action')),
			'U_TVSHOW'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'tvshow')),
			'U_TVSHOW_ACTION'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'tvshow_action')),
			'U_NEWS'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'news')),
			'U_NEWS_ACTION'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'news_action')),
			'U_PORTAL'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'portal')),
			'U_PORTAL_ACTION'	=> $this->helper->route('hs11_codegenerator_controller', array('name' => 'portal_action')),
		));
		
	}

	/**
	 * Show users viewing Code Generator on the Who Is Online page
	 *
	 * @param \phpbb\event\data	$event	Event object
	 */
	public function viewonline_page($event)
	{
		if ($event['on_page'][1] === 'app' && strrpos($event['row']['session_page'], 'app.' . $this->php_ext . '/codegenerator') === 0)
		{
			$event['location'] = $this->user->lang('VIEWING_CODEGENERATOR');
			$event['location_url'] = $this->helper->route('hs11_codegenerator_controller', array('name' => 'main'));
		}
	}

	/**
	 * A sample PHP event
	 * Modifies the names of the forums on index
	 *
	 * @param \phpbb\event\data	$event	Event object
	 */
	public function display_forums_modify_template_vars($event)
	{
		$forum_row = $event['forum_row'];
		$forum_row['FORUM_NAME'] .= ' :: Code Generator Event ::';
		$event['forum_row'] = $forum_row;
	}
	
}
