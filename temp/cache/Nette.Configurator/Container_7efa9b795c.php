<?php
// source: C:\wamp\www\bakalarka_web\app/config/config.neon 
// source: C:\wamp\www\bakalarka_web\app/config/config.local.neon 

class Container_7efa9b795c extends Nette\DI\Container
{
	protected $meta = array(
		'types' => array(
			'Nette\Object' => array(
				array(
					'application.application',
					'application.linkGenerator',
					'database.default.connection',
					'database.default.structure',
					'database.default.context',
					'http.requestFactory',
					'http.request',
					'http.response',
					'http.context',
					'security.user',
					'session.session',
					'flashMessages.notifier',
					'flashMessages.session',
					'29_App_Forms_FormFactory',
					'30_App_Forms_SignFormFactory',
					'31_App_Model_UserManager',
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
					'container',
				),
			),
			'Nette\Application\Application' => array(1 => array('application.application')),
			'Nette\Application\IPresenterFactory' => array(
				1 => array('application.presenterFactory'),
			),
			'Nette\Application\LinkGenerator' => array(1 => array('application.linkGenerator')),
			'Nette\Caching\Storages\IJournal' => array(1 => array('cache.journal')),
			'Nette\Caching\IStorage' => array(1 => array('cache.storage')),
			'Nette\Database\Connection' => array(
				1 => array('database.default.connection'),
			),
			'Nette\Database\IStructure' => array(
				1 => array('database.default.structure'),
			),
			'Nette\Database\Structure' => array(
				1 => array('database.default.structure'),
			),
			'Nette\Database\IConventions' => array(
				1 => array('database.default.conventions'),
			),
			'Nette\Database\Conventions\DiscoveredConventions' => array(
				1 => array('database.default.conventions'),
			),
			'Nette\Database\Context' => array(1 => array('database.default.context')),
			'Nette\Http\RequestFactory' => array(1 => array('http.requestFactory')),
			'Nette\Http\IRequest' => array(1 => array('http.request')),
			'Nette\Http\Request' => array(1 => array('http.request')),
			'Nette\Http\IResponse' => array(1 => array('http.response')),
			'Nette\Http\Response' => array(1 => array('http.response')),
			'Nette\Http\Context' => array(1 => array('http.context')),
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => array(1 => array('latte.latteFactory')),
			'Nette\Application\UI\ITemplateFactory' => array(1 => array('latte.templateFactory')),
			'Latte\Object' => array(array('nette.latte')),
			'Latte\Engine' => array(array('nette.latte')),
			'Nette\Mail\IMailer' => array(1 => array('mail.mailer')),
			'Nette\Application\IRouter' => array(1 => array('routing.router')),
			'Nette\Security\IUserStorage' => array(1 => array('security.userStorage')),
			'Nette\Security\User' => array(1 => array('security.user')),
			'Nette\Http\Session' => array(1 => array('session.session')),
			'Tracy\ILogger' => array(1 => array('tracy.logger')),
			'Tracy\BlueScreen' => array(1 => array('tracy.blueScreen')),
			'Tracy\Bar' => array(1 => array('tracy.bar')),
			'IPub\FlashMessages\FlashNotifier' => array(1 => array('flashMessages.notifier')),
			'IPub\FlashMessages\SessionStorage' => array(1 => array('flashMessages.session')),
			'IPub\FlashMessages\Components\IControl' => array(1 => array('flashMessages.messages')),
			'IPub\FlashMessages\Events\OnResponseHandler' => array(
				1 => array('flashMessages.onResponseHandler'),
			),
			'App\Forms\FormFactory' => array(1 => array('29_App_Forms_FormFactory')),
			'App\Forms\SignFormFactory' => array(
				1 => array('30_App_Forms_SignFormFactory'),
			),
			'Nette\Security\IAuthenticator' => array(1 => array('31_App_Model_UserManager')),
			'App\Model\UserManager' => array(1 => array('31_App_Model_UserManager')),
			'App\Model\aboutDB' => array(1 => array('32_App_Model_aboutDB')),
			'App\Model\contactDB' => array(1 => array('33_App_Model_contactDB')),
			'App\Model\homepageDB' => array(1 => array('34_App_Model_homepageDB')),
			'App\Model\referenceDB' => array(1 => array('35_App_Model_referenceDB')),
			'App\Presenters\BasePresenter' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				),
			),
			'Nette\Application\UI\Presenter' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				),
			),
			'Nette\Application\UI\Control' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				),
			),
			'Nette\Application\UI\PresenterComponent' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				),
			),
			'Nette\ComponentModel\Container' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				),
			),
			'Nette\ComponentModel\Component' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				),
			),
			'Nette\Application\UI\IRenderable' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				),
			),
			'Nette\ComponentModel\IContainer' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				),
			),
			'Nette\ComponentModel\IComponent' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				),
			),
			'Nette\Application\UI\ISignalReceiver' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				),
			),
			'Nette\Application\UI\IStatePersistent' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				),
			),
			'ArrayAccess' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				),
			),
			'Nette\Application\IPresenter' => array(
				array(
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
				),
			),
			'App\Presenters\AboutPresenter' => array(array('application.1')),
			'App\Presenters\ContactPresenter' => array(array('application.2')),
			'App\Presenters\Error4xxPresenter' => array(array('application.3')),
			'App\Presenters\ErrorPresenter' => array(array('application.4')),
			'App\Presenters\HomepagePresenter' => array(array('application.5')),
			'App\Presenters\ReferencePresenter' => array(array('application.6')),
			'App\Presenters\ReferencesPresenter' => array(array('application.7')),
			'App\Presenters\SignPresenter' => array(array('application.8')),
			'NetteModule\ErrorPresenter' => array(array('application.9')),
			'NetteModule\MicroPresenter' => array(array('application.10')),
			'Nette\DI\Container' => array(1 => array('container')),
		),
		'services' => array(
			'29_App_Forms_FormFactory' => 'App\Forms\FormFactory',
			'30_App_Forms_SignFormFactory' => 'App\Forms\SignFormFactory',
			'31_App_Model_UserManager' => 'App\Model\UserManager',
			'32_App_Model_aboutDB' => 'App\Model\aboutDB',
			'33_App_Model_contactDB' => 'App\Model\contactDB',
			'34_App_Model_homepageDB' => 'App\Model\homepageDB',
			'35_App_Model_referenceDB' => 'App\Model\referenceDB',
			'application.1' => 'App\Presenters\AboutPresenter',
			'application.10' => 'NetteModule\MicroPresenter',
			'application.2' => 'App\Presenters\ContactPresenter',
			'application.3' => 'App\Presenters\Error4xxPresenter',
			'application.4' => 'App\Presenters\ErrorPresenter',
			'application.5' => 'App\Presenters\HomepagePresenter',
			'application.6' => 'App\Presenters\ReferencePresenter',
			'application.7' => 'App\Presenters\ReferencesPresenter',
			'application.8' => 'App\Presenters\SignPresenter',
			'application.9' => 'NetteModule\ErrorPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'container' => 'Nette\DI\Container',
			'database.default.connection' => 'Nette\Database\Connection',
			'database.default.context' => 'Nette\Database\Context',
			'database.default.conventions' => 'Nette\Database\Conventions\DiscoveredConventions',
			'database.default.structure' => 'Nette\Database\Structure',
			'flashMessages.messages' => 'IPub\FlashMessages\Components\Control',
			'flashMessages.notifier' => 'IPub\FlashMessages\FlashNotifier',
			'flashMessages.onResponseHandler' => 'IPub\FlashMessages\Events\OnResponseHandler',
			'flashMessages.session' => 'IPub\FlashMessages\SessionStorage',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'nette.latte' => 'Latte\Engine',
			'routing.router' => 'Nette\Application\IRouter',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
		),
		'tags' => array(
			'inject' => array(
				'application.1' => TRUE,
				'application.10' => TRUE,
				'application.2' => TRUE,
				'application.3' => TRUE,
				'application.4' => TRUE,
				'application.5' => TRUE,
				'application.6' => TRUE,
				'application.7' => TRUE,
				'application.8' => TRUE,
				'application.9' => TRUE,
				'flashMessages.messages' => TRUE,
			),
			'nette.presenter' => array(
				'application.1' => 'App\Presenters\AboutPresenter',
				'application.10' => 'NetteModule\MicroPresenter',
				'application.2' => 'App\Presenters\ContactPresenter',
				'application.3' => 'App\Presenters\Error4xxPresenter',
				'application.4' => 'App\Presenters\ErrorPresenter',
				'application.5' => 'App\Presenters\HomepagePresenter',
				'application.6' => 'App\Presenters\ReferencePresenter',
				'application.7' => 'App\Presenters\ReferencesPresenter',
				'application.8' => 'App\Presenters\SignPresenter',
				'application.9' => 'NetteModule\ErrorPresenter',
			),
			'cms.components' => array('flashMessages.messages' => TRUE),
		),
		'aliases' => array(
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'database.default' => 'database.default.connection',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.database.default' => 'database.default',
			'nette.database.default.context' => 'database.default.context',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		),
	);


	public function __construct()
	{
		parent::__construct(array(
			'appDir' => 'C:\wamp\www\bakalarka_web\app',
			'wwwDir' => 'C:\wamp\www\bakalarka_web\www',
			'debugMode' => TRUE,
			'productionMode' => FALSE,
			'environment' => 'development',
			'consoleMode' => FALSE,
			'container' => array('class' => NULL, 'parent' => NULL),
			'tempDir' => 'C:\wamp\www\bakalarka_web\app/../temp',
		));
	}


	/**
	 * @return App\Forms\FormFactory
	 */
	public function createService__29_App_Forms_FormFactory()
	{
		$service = new App\Forms\FormFactory;
		return $service;
	}


	/**
	 * @return App\Forms\SignFormFactory
	 */
	public function createService__30_App_Forms_SignFormFactory()
	{
		$service = new App\Forms\SignFormFactory($this->getService('29_App_Forms_FormFactory'), $this->getService('security.user'));
		return $service;
	}


	/**
	 * @return App\Model\UserManager
	 */
	public function createService__31_App_Model_UserManager()
	{
		$service = new App\Model\UserManager($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return App\Model\aboutDB
	 */
	public function createService__32_App_Model_aboutDB()
	{
		$service = new App\Model\aboutDB($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return App\Model\contactDB
	 */
	public function createService__33_App_Model_contactDB()
	{
		$service = new App\Model\contactDB($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return App\Model\homepageDB
	 */
	public function createService__34_App_Model_homepageDB()
	{
		$service = new App\Model\homepageDB($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return App\Model\referenceDB
	 */
	public function createService__35_App_Model_referenceDB()
	{
		$service = new App\Model\referenceDB($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return App\Presenters\AboutPresenter
	 */
	public function createServiceApplication__1()
	{
		$service = new App\Presenters\AboutPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->aboutDB = $this->getService('32_App_Model_aboutDB');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return NetteModule\MicroPresenter
	 */
	public function createServiceApplication__10()
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return App\Presenters\ContactPresenter
	 */
	public function createServiceApplication__2()
	{
		$service = new App\Presenters\ContactPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->contactDB = $this->getService('33_App_Model_contactDB');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\Error4xxPresenter
	 */
	public function createServiceApplication__3()
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\ErrorPresenter
	 */
	public function createServiceApplication__4()
	{
		$service = new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return App\Presenters\HomepagePresenter
	 */
	public function createServiceApplication__5()
	{
		$service = new App\Presenters\HomepagePresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->homepageDB = $this->getService('34_App_Model_homepageDB');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\ReferencePresenter
	 */
	public function createServiceApplication__6()
	{
		$service = new App\Presenters\ReferencePresenter;
		$service->injectFlashMessages($this->getService('flashMessages.messages'), $this->getService('flashMessages.notifier'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->referenceDB = $this->getService('35_App_Model_referenceDB');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\ReferencesPresenter
	 */
	public function createServiceApplication__7()
	{
		$service = new App\Presenters\ReferencesPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->referenceDB = $this->getService('35_App_Model_referenceDB');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\SignPresenter
	 */
	public function createServiceApplication__8()
	{
		$service = new App\Presenters\SignPresenter;
		$service->injectFlashMessages($this->getService('flashMessages.messages'), $this->getService('flashMessages.notifier'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return NetteModule\ErrorPresenter
	 */
	public function createServiceApplication__9()
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication__application()
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'));
		$service->catchExceptions = FALSE;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$service->onResponse[] = $this->getService('flashMessages.onResponseHandler');
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel($this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('application.presenterFactory')));
		return $service;
	}


	/**
	 * @return Nette\Application\LinkGenerator
	 */
	public function createServiceApplication__linkGenerator()
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'), $this->getService('http.request')->getUrl(),
			$this->getService('application.presenterFactory'));
		return $service;
	}


	/**
	 * @return Nette\Application\IPresenterFactory
	 */
	public function createServiceApplication__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 5, 'C:\wamp\www\bakalarka_web\app/../temp/cache/Nette%5CBridges%5CApplicationDI%5CApplicationExtension'));
		$service->setMapping(array(
			'*' => 'App\*Module\Presenters\*Presenter',
		));
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\IJournal
	 */
	public function createServiceCache__journal()
	{
		$service = new Nette\Caching\Storages\FileJournal('C:\wamp\www\bakalarka_web\app/../temp');
		return $service;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function createServiceCache__storage()
	{
		$service = new Nette\Caching\Storages\FileStorage('C:\wamp\www\bakalarka_web\app/../temp/cache', $this->getService('cache.journal'));
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return Nette\Database\Connection
	 */
	public function createServiceDatabase__default__connection()
	{
		$service = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=bakalarka_web', 'root', NULL, NULL);
		$this->getService('tracy.blueScreen')->addPanel('Nette\Bridges\DatabaseTracy\ConnectionPanel::renderException');
		Nette\Database\Helpers::createDebugPanel($service, TRUE, 'default');
		return $service;
	}


	/**
	 * @return Nette\Database\Context
	 */
	public function createServiceDatabase__default__context()
	{
		$service = new Nette\Database\Context($this->getService('database.default.connection'), $this->getService('database.default.structure'),
			$this->getService('database.default.conventions'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Database\Conventions\DiscoveredConventions
	 */
	public function createServiceDatabase__default__conventions()
	{
		$service = new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
		return $service;
	}


	/**
	 * @return Nette\Database\Structure
	 */
	public function createServiceDatabase__default__structure()
	{
		$service = new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return IPub\FlashMessages\Components\IControl
	 */
	public function createServiceFlashMessages__messages()
	{
		return new Container_7efa9b795c_IPub_FlashMessages_Components_IControlImpl_flashMessages_messages($this);
	}


	/**
	 * @return IPub\FlashMessages\FlashNotifier
	 */
	public function createServiceFlashMessages__notifier()
	{
		$service = new IPub\FlashMessages\FlashNotifier($this->getService('flashMessages.session'));
		return $service;
	}


	/**
	 * @return IPub\FlashMessages\Events\OnResponseHandler
	 */
	public function createServiceFlashMessages__onResponseHandler()
	{
		$service = new IPub\FlashMessages\Events\OnResponseHandler($this->getService('flashMessages.session'));
		return $service;
	}


	/**
	 * @return IPub\FlashMessages\SessionStorage
	 */
	public function createServiceFlashMessages__session()
	{
		$service = new IPub\FlashMessages\SessionStorage($this->getService('session.session'));
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceHttp__context()
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttp__request()
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'http.request\', value returned by factory is not Nette\Http\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceHttp__requestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy(array());
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttp__response()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	public function createServiceLatte__latteFactory()
	{
		return new Container_7efa9b795c_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory($this);
	}


	/**
	 * @return Nette\Application\UI\ITemplateFactory
	 */
	public function createServiceLatte__templateFactory()
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('security.user'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Mail\IMailer
	 */
	public function createServiceMail__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Latte\Engine
	 */
	public function createServiceNette__latte()
	{
		$service = new Latte\Engine;
		trigger_error('Service nette.latte is deprecated, implement Nette\Bridges\ApplicationLatte\ILatteFactory.',
			16384);
		$service->setTempDirectory('C:\wamp\www\bakalarka_web\app/../temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceRouting__router()
	{
		$service = App\RouterFactory::createRouter();
		if (!$service instanceof Nette\Application\IRouter) {
			throw new Nette\UnexpectedValueException('Unable to create service \'routing.router\', value returned by factory is not Nette\Application\IRouter type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceSecurity__user()
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'), $this->getService('31_App_Model_UserManager'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	/**
	 * @return Nette\Security\IUserStorage
	 */
	public function createServiceSecurity__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession__session()
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		return $service;
	}


	/**
	 * @return Tracy\Bar
	 */
	public function createServiceTracy__bar()
	{
		$service = Tracy\Debugger::getBar();
		if (!$service instanceof Tracy\Bar) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.bar\', value returned by factory is not Tracy\Bar type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\BlueScreen
	 */
	public function createServiceTracy__blueScreen()
	{
		$service = Tracy\Debugger::getBlueScreen();
		if (!$service instanceof Tracy\BlueScreen) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.blueScreen\', value returned by factory is not Tracy\BlueScreen type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\ILogger
	 */
	public function createServiceTracy__logger()
	{
		$service = Tracy\Debugger::getLogger();
		if (!$service instanceof Tracy\ILogger) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.logger\', value returned by factory is not Tracy\ILogger type.');
		}
		return $service;
	}


	public function initialize()
	{
		date_default_timezone_set('Europe/Prague');
		header('X-Frame-Options: SAMEORIGIN');
		header('X-Powered-By: Nette Framework');
		header('Content-Type: text/html; charset=utf-8');
		Nette\Reflection\AnnotationsParser::setCacheStorage($this->getByType("Nette\Caching\IStorage"));
		Nette\Reflection\AnnotationsParser::$autoRefresh = TRUE;
		$this->getService('session.session')->exists() && $this->getService('session.session')->start();
	}

}



final class Container_7efa9b795c_IPub_FlashMessages_Components_IControlImpl_flashMessages_messages implements IPub\FlashMessages\Components\IControl
{
	private $container;


	public function __construct(Container_7efa9b795c $container)
	{
		$this->container = $container;
	}


	public function create($templateFile = NULL)
	{
		$service = new IPub\FlashMessages\Components\Control($templateFile, $this->container->getService('flashMessages.session'));
		$service->injectTranslator();
		$service->enableTitle(TRUE);
		$service->disableOverlay(FALSE);
		return $service;
	}

}



final class Container_7efa9b795c_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{
	private $container;


	public function __construct(Container_7efa9b795c $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('C:\wamp\www\bakalarka_web\app/../temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		return $service;
	}

}
