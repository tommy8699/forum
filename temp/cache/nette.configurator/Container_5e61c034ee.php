<?php
// source: /var/www/forum/config/common.neon
// source: /var/www/forum/config/local.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_5e61c034ee extends Nette\DI\Container
{
	protected $types = ['container' => 'Nette\DI\Container'];

	protected $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'database.default' => 'database.default.connection',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.database.default' => 'database.default',
		'nette.database.default.context' => 'database.default.context',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Database\Connection' => [['database.default.connection']],
		'Nette\Database\IStructure' => [['database.default.structure']],
		'Nette\Database\Structure' => [['database.default.structure']],
		'Nette\Database\Conventions' => [['database.default.conventions']],
		'Nette\Database\Conventions\DiscoveredConventions' => [['database.default.conventions']],
		'Nette\Database\Explorer' => [['database.default.context']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Bridges\ApplicationLatte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\IUserStorage' => [['security.legacyUserStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Symfony\Component\Console\Application' => [['console.application']],
		'Symfony\Contracts\Service\ResetInterface' => [['console.application']],
		'Contributte\Console\Application' => [['console.application']],
		'Symfony\Component\Console\CommandLoader\CommandLoaderInterface' => [['console.commandLoader']],
		'Nextras\Migrations\IDbal' => [['migrations.dbal']],
		'Nextras\Migrations\IDriver' => [['migrations.driver']],
		'Nextras\Migrations\Entities\Group' => [
			2 => ['migrations.group.structures', 'migrations.group.basicData', 'migrations.group.dummyData'],
		],
		'Nextras\Migrations\IExtensionHandler' => [
			2 => ['migrations.extensionHandler.sql', 'migrations.extensionHandler.php'],
		],
		'Nextras\Migrations\Extensions\SqlHandler' => [2 => ['migrations.extensionHandler.sql']],
		'Nextras\Migrations\Extensions\PhpHandler' => [2 => ['migrations.extensionHandler.php']],
		'Nextras\Migrations\IConfiguration' => [['migrations.configuration']],
		'Nextras\Migrations\Bridges\SymfonyConsole\BaseCommand' => [
			2 => ['migrations.continueCommand', 'migrations.createCommand', 'migrations.resetCommand'],
		],
		'Symfony\Component\Console\Command\Command' => [
			2 => ['migrations.continueCommand', 'migrations.createCommand', 'migrations.resetCommand'],
		],
		'Nextras\Migrations\Bridges\SymfonyConsole\ContinueCommand' => [['migrations.continueCommand']],
		'Nextras\Migrations\Bridges\SymfonyConsole\CreateCommand' => [['migrations.createCommand']],
		'Nextras\Migrations\Bridges\SymfonyConsole\ResetCommand' => [['migrations.resetCommand']],
		'Nette\Routing\RouteList' => [['01']],
		'Nette\Routing\Router' => [['01']],
		'ArrayAccess' => [2 => ['01', 'application.2', 'application.3']],
		'Countable' => [2 => ['01']],
		'IteratorAggregate' => [2 => ['01']],
		'Traversable' => [2 => ['01']],
		'Nette\Application\Routers\RouteList' => [['01']],
		'Nette\Application\IPresenter' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5'],
		],
		'App\Presenters\ErrorPresenter' => [2 => ['application.1']],
		'Nette\Application\UI\Presenter' => [2 => ['application.2', 'application.3']],
		'Nette\Application\UI\Control' => [2 => ['application.2', 'application.3']],
		'Nette\Application\UI\Component' => [2 => ['application.2', 'application.3']],
		'Nette\ComponentModel\Container' => [2 => ['application.2', 'application.3']],
		'Nette\ComponentModel\Component' => [2 => ['application.2', 'application.3']],
		'Nette\Application\UI\Renderable' => [2 => ['application.2', 'application.3']],
		'Nette\Application\UI\StatePersistent' => [2 => ['application.2', 'application.3']],
		'Nette\Application\UI\SignalReceiver' => [2 => ['application.2', 'application.3']],
		'Nette\ComponentModel\IContainer' => [2 => ['application.2', 'application.3']],
		'Nette\ComponentModel\IComponent' => [2 => ['application.2', 'application.3']],
		'App\Presenters\HomepagePresenter' => [2 => ['application.2']],
		'App\Presenters\Error4xxPresenter' => [2 => ['application.3']],
		'NetteModule\ErrorPresenter' => [2 => ['application.4']],
		'NetteModule\MicroPresenter' => [2 => ['application.5']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [];
	}


	public function createService01(): Nette\Application\Routers\RouteList
	{
		return App\Router\RouterFactory::createRouter();
	}


	public function createServiceApplication__1(): App\Presenters\ErrorPresenter
	{
		return new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__2(): App\Presenters\HomepagePresenter
	{
		$service = new App\Presenters\HomepagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__3(): App\Presenters\Error4xxPresenter
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__4(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__5(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('01'));
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('01'),
			$this->getService('http.request'),
			$this->getService('http.response')
		);
		$service->catchExceptions = true;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service
		);
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('01'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory')
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 1, null));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceCache__storage(): Nette\Caching\Storage
	{
		return new Nette\Caching\Storages\FileStorage('/var/www/forum/temp/cache');
	}


	public function createServiceConsole__application(): Contributte\Console\Application
	{
		$service = new Contributte\Console\Application;
		$service->setCommandLoader($this->getService('console.commandLoader'));
		return $service;
	}


	public function createServiceConsole__commandLoader(): Symfony\Component\Console\CommandLoader\CommandLoaderInterface
	{
		return new Contributte\Console\CommandLoader\ContainerCommandLoader(
			$this,
			[
				'migrations:continue' => 'migrations.continueCommand',
				'migrations:create' => 'migrations.createCommand',
				'migrations:reset' => 'migrations.resetCommand',
			]
		);
	}


	public function createServiceContainer(): Container_5e61c034ee
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=test', null, null, []);
		Nette\Database\Helpers::initializeTracy(
			$service,
			false,
			'default',
			true,
			$this->getService('tracy.bar'),
			$this->getService('tracy.blueScreen')
		);
		return $service;
	}


	public function createServiceDatabase__default__context(): Nette\Database\Explorer
	{
		return new Nette\Database\Explorer(
			$this->getService('database.default.connection'),
			$this->getService('database.default.structure'),
			$this->getService('database.default.conventions'),
			$this->getService('cache.storage')
		);
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		return new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		return new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			private $container;


			public function __construct(Container_5e61c034ee $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/var/www/forum/temp/cache/latte');
				$service->setAutoRefresh(false);
				$service->setContentType('html');
				Nette\Utils\Html::$xhtml = false;
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Bridges\ApplicationLatte\TemplateFactory
	{
		return new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage')
		);
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServiceMigrations__configuration(): Nextras\Migrations\IConfiguration
	{
		return new Nextras\Migrations\Configurations\Configuration(
			[
				$this->getService('migrations.group.structures'),
				$this->getService('migrations.group.basicData'),
				$this->getService('migrations.group.dummyData'),
			],
			[
				'sql' => $this->getService('migrations.extensionHandler.sql'),
				'php' => $this->getService('migrations.extensionHandler.php'),
			]
		);
	}


	public function createServiceMigrations__continueCommand(): Nextras\Migrations\Bridges\SymfonyConsole\ContinueCommand
	{
		return new Nextras\Migrations\Bridges\SymfonyConsole\ContinueCommand(
			$this->getService('migrations.driver'),
			$this->getService('migrations.configuration')
		);
	}


	public function createServiceMigrations__createCommand(): Nextras\Migrations\Bridges\SymfonyConsole\CreateCommand
	{
		return new Nextras\Migrations\Bridges\SymfonyConsole\CreateCommand(
			$this->getService('migrations.driver'),
			$this->getService('migrations.configuration')
		);
	}


	public function createServiceMigrations__dbal(): Nextras\Migrations\IDbal
	{
		return new Nextras\Migrations\Bridges\NetteDatabase\NetteAdapter($this->getService('database.default.connection'));
	}


	public function createServiceMigrations__driver(): Nextras\Migrations\IDriver
	{
		return new Nextras\Migrations\Drivers\MySqlDriver($this->getService('migrations.dbal'));
	}


	public function createServiceMigrations__extensionHandler__php(): Nextras\Migrations\Extensions\PhpHandler
	{
		return new Nextras\Migrations\Extensions\PhpHandler;
	}


	public function createServiceMigrations__extensionHandler__sql(): Nextras\Migrations\Extensions\SqlHandler
	{
		return new Nextras\Migrations\Extensions\SqlHandler($this->getService('migrations.driver'));
	}


	public function createServiceMigrations__group__basicData(): Nextras\Migrations\Entities\Group
	{
		$service = new Nextras\Migrations\Entities\Group;
		$service->name = 'basic-data';
		$service->enabled = true;
		$service->directory = '/var/www/forum/app/../migrations/basic-data';
		$service->dependencies = ['structures'];
		$service->generator = null;
		return $service;
	}


	public function createServiceMigrations__group__dummyData(): Nextras\Migrations\Entities\Group
	{
		$service = new Nextras\Migrations\Entities\Group;
		$service->name = 'dummy-data';
		$service->enabled = false;
		$service->directory = '/var/www/forum/app/../migrations/dummy-data';
		$service->dependencies = ['structures', 'basic-data'];
		$service->generator = null;
		return $service;
	}


	public function createServiceMigrations__group__structures(): Nextras\Migrations\Entities\Group
	{
		$service = new Nextras\Migrations\Entities\Group;
		$service->name = 'structures';
		$service->enabled = true;
		$service->directory = '/var/www/forum/app/../migrations/structures';
		$service->dependencies = [];
		$service->generator = null;
		return $service;
	}


	public function createServiceMigrations__resetCommand(): Nextras\Migrations\Bridges\SymfonyConsole\ResetCommand
	{
		return new Nextras\Migrations\Bridges\SymfonyConsole\ResetCommand(
			$this->getService('migrations.driver'),
			$this->getService('migrations.configuration')
		);
	}


	public function createServiceSecurity__legacyUserStorage(): Nette\Security\IUserStorage
	{
		return new Nette\Http\UserStorage($this->getService('session.session'));
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		return new Nette\Security\User(
			$this->getService('security.legacyUserStorage'),
			null,
			null,
			$this->getService('security.userStorage')
		);
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		$service->setOptions(['readAndClose' => null, 'cookieSamesite' => 'Lax']);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function initialize()
	{
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			Tracy\Debugger::getLogger()->mailer = [new Tracy\Bridges\Nette\MailSender($this->getService('mail.mailer')), 'send'];
		})();
	}
}
