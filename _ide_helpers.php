<?php
/**
 *  @method static void                  registerAliasLoader(array $aliases) Register the aliased class loader.
 *  @method static void                  startExceptionHandling() Start the exception handling for the request.
 *  @method static string                detectEnvironment(array|string $environments) Detect the application's current environment.
 *  @method static string                detectWebEnvironment(string $base, string|array $environments) Set the application environment for a web request.
 *  @method static string                detectConsoleEnvironment(array $arguments) Set the application environment from command-line arguments.
 *  @method static bool                  isMachine($name) Determine if the name matches the machine name.
 *  @method static bool                  runningInConsole() Determine if we are running in the console.
 *  @method static bool                  runningUnitTests() Determine if we are running unit tests.
 *  @method static void                  register(ServiceProvider $provider, array $options = array()) Register a service provider with the application.
 *  @method static mixed                 make(string $abstract, array $parameters = array()) Resolve the given type from the container.
 *  @method static void                  loadDeferredProvider(string $service) Load the provider for a deferred service.
 *  @method static void                  before(Closure|string $callback) Register a "before" application filter.
 *  @method static void                  after(Closure|string $callback) Register an "after" application filter.
 *  @method static void                  close(Closure|string $callback) Register a "close" application filter.
 *  @method static void                  finish(Closure|string $callback) Register a "finish" application filter.
 *  @method static void                  run() Handles the given request and delivers the response.
 *  @method static Symfony\Component\HttpFoundation\Response dispatch(Request $request) Handle the given request and get the response.
 *  @method static Symfony\Component\HttpFoundation\Response handle(SymfonyRequest $request, int $type = HttpKernelInterface::MASTER_REQUEST, bool $catch = true) Handle the given request and get the response. Provides compatibility with BrowserKit functional testing.
 *  @method static void                  boot() Boot the application's service providers.
 *  @method static Illuminate\Foundation\Request prepareRequest(Request $request) Prepare the request by injecting any services.
 *  @method static Symfony\Component\HttpFoundation\Response prepareResponse($value, Request $request) Prepare the given value as a Response object.
 *  @method static void                  setLocale(string $locale)  Set the current application locale.
 *  @method static void                  abort(int $code, string $message = '', array $headers = array()) Throw an HttpException with the given data.
 *  @method static void                  error(Closure $callback) Register an application error handler.
 *  @method static void                  missing(Closure $callback) Register a 404 error handler.
 *  @method static void                  setDeferredServices(array $services) Set the application's deferred services.
 *  @method static mixed                 __get(string $key) Dynamically access application services.
 *  @method static void                  __set(string $key, mixed $value) Dynamically set application services.
 *
 * IoC methods:
 *
 * @method static void  bind(string $abstract, Closure|string|null $concrete, $shared = false) Register a binding with the container.
 * @method static void  bindIf(strinf $abstract, Closure|string|null $concrete, $shared = false) Register a binding if it hasn't already been registered.
 * @method static void  singleton(string $abstract, $concrete = null) Register a shared binding in the container.
 * @method static void  extend(string $abstract, Closure $closure) "Extend" an abstract type in the container.
 * @method static void  instance(string $abstract, mixed $instance) Register an existing instance as shared in the container.
 * @method static void  alias(string $abstract, string $alias)Alias a type to a shorter name.
 * @method static array extractAlias(array $definition) Extract the type and alias from a given definition.
 * @method static mixed make(string $abstract, $parameters = array()) Resolve the given type from the container.
 * @method static mixed getConcrete(string $abstract) Get the concrete type for a given abstract.
 * @method static mixed build(mixed $concrete, $parameters = array()) Instantiate a concrete instance of the given type.
 * @method static array getDependencies(array $parameters) Resolve all of the dependencies from the ReflectionParameters.
 * @method static bool  isShared(string $abstract) Determine if a given type is shared.
 * @method static bool  isBuildable($concrete, $abstract) Determine if the given concrete is buildable.
 * @method static string getAlias(string $abstract)
 * @method static array  getBindings()
 */
class App extends Illuminate\Foundation\Application {}
/**
 *  @method static bool                 check() Determine if the current user is authenticated.
 *  @method static bool                 guest() Determine if the current user is a guest.
 *  @method static User|null            user() Get the currently authenticated user.
 *  @method static string|null          getRecaller() Get the decrypted recaller cookie for the request(the name of the "Remember me" cookie.
 *  @method static Symfony\Component\HttpFoundation\Cookie createRecaller(mixed $id) Create a remember me cookie for a given ID.
 *  @method static void                 login(User $user, $remember = false) Get the currently authenticated user.
 *  @method static void                 logout() Log the user out of the application.
 *  @method static Illuminate\CookieJar getCookieJar() Get the cookie creator instance used by the guard.
 *  @method static Illuminate\CookieJar getCookieJar(CookieJar $cookie) Set the cookie creator instance used by the guard.
 *  @method static Illuminate\Session\Store getSession() Get the session store used by the guard.
 *  @method static array                getQueuedCookies()  Get the cookies queued by the guard.
 *  @method static Illuminate\Auth\UserProviderInterface getProvider()  Get the user provider used by the guard.
 *  @method static Illuminate\Auth\UserInterface|null getUser() Return the currently cached user of the application.
 *  @method static void                 setUser(User $user) Set the current user of the application.
 *  @method static string               getName() Get a unique identifier for the auth session value.
 *  @method static string               getRecallerName() Get the name of the cookie used to store the "recaller".
 */
class Auth extends Illuminate\Auth\Guard {}

/**
 * @method static void|mixed call($command, array $parameters = array(), OutputInterface $output = null) Run an Artisan console command by name.
 * @method static Illuminate\Console\Application getArtisan() Get the Artisan console instance.
 */
class Artisan extends Illuminate\Foundation\Artisan {}
/**
 * @method static void   extend(Closure $compiler) Register a custom Blade compiler.
 * @method static void   compile($path) Compile the view at the given path.
 * @method static string compileString($value)   Compile the given Blade template contents.
 */
class Blade extends Illuminate\View\Compilers\BladeCompiler {}
/**
 * @method static bool  has(string $key) Determine if an item exists in the cache.
 * @method static mixed get(string $key, $default = null) Retrieve an item from the cache by key.
 * @method static void  put(string $key, mixed $value, int $minutes) Store an item in the cache.
 * @method static void  forever($key, $value)   Store an item in the cache indefinitely.
 * @method static       remember(string $key, int $minutes, Closure $callback)
 * @method static       rememberForever(string $key, Closure $callback)
 * @method static void  forget($key)  Remove an item from the cache.
 * @method static void  flush() Remove all items from the cache.
 * @method static int   getDefaultCacheTime() Get the default cache time.
 * @method static int   setDefaultCacheTime(int $minutes) Set the default cache time in minutes.
 * @method static bool  existsInMemory(string $key) Determine if an item is in memory.
 * @method static array getMemory() Get all of the values in memory.
 * @method static mixed getFromMemory(string $key)  Get the value of an item in memory.
 * @method static void  setInMemory(string $key, mixed $value) Set the value of an item in memory.
 * @method static bool  offsetExists(string $key) Determine if a cached value exists.
 * @method static mixed offsetGet(string $key) Retrieve an item from the cache by key.
 * @method static void  offsetSet(string $key, mixed $value) Store an item in the cache for the default time.
 * @method static void  offsetUnset(string $key) Remove an item from the cache.
 */
class Cache extends Illuminate\Cache\Store {}
/**
 * @method static bool  has(string $key) Determine if the given configuration value exists.
 * @method static mixed get($key, $default = null)  Get the specified configuration value.
 * @method static void set(string $key, mixed $value)   Set a given configuration value.
 * @method static void load(string $group, string $namespace, string $collection) Load the configuration group for the key.
 * @method static array callAfterLoad(string $namespace, string $group, array $items) Call the after load callback for a namespace.
 * @method static array parseNamespacedSegments(string $key) Parse an array of namespaced segments.
 * @method static array parsePackageSegments(string $key, string $namespace, string $item) Parse the segments of a package namespace.
 * @method static void package(string $package, string $hint, string $namespace = null) Register a package for cascading configuration.
 * @method static string getPackageNamespace(string $package, string $namespace) Get the configuration namespace for a package.
 * @method static void afterLoading(string $namespace, Closure $callback) Register an after load callback for a given namespace.
 * @method static string getCollection(string $group, string $namespace = null) Get the collection identifier.
 * @method static void addNamespace(string $namespace, string $hint) Add a new namespace to the loader.
 * @method static Illuminate\Config\LoaderInterface  getLoader() Get the loader implementation.
 * @method static string getEnvironment() Get the current configuration environment.
 * @method static array getAfterLoadCallbacks() Get the after load callback array.
 * @method static array getItems() Get all of the configuration items
 * @method static bool offsetExists(string $key) Determine if the given configuration option exists.
 * @method static bool offsetGet(string $key) Get a configuration option.
 * @method static bool offsetSet(string $key, $value) Set a configuration option.
 * @method static bool offsetUnset($key) Unset a configuration option.
 */
class Config extends Illuminate\Config\Repository {}
#class Console
# Use App:: instead of Container
#class Container extends Illuminate\Container\Container {}

/**
 * @method static bool                                     has($key) Determine if a cookie exists and is not null.
 * @method static mixed                                    get($key, $default = null)   Get the value of the given cookie.
 * @method static mixed|null                               decrypt($value)  Decrypt the given cookie value.
 * @method static Symfony\Component\HttpFoundation\Cookie  make($name, $value, $minutes = 0)    Create a new cookie instance.
 * @method static Symfony\Component\HttpFoundation\Cookie  forever(string $name, string $value) Create a cookie that lasts "forever" (five years).
 * @method static Symfony\Component\HttpFoundation\Cookie  forget(string $name) Expire the given cookie.
 * @method static Symfony\Component\HttpFoundation\Request getRequest() Get the request instance.
 * @method static Illuminate\Encrypter                     getEncrypter()   Get the encrypter instance.
 */
class Cookie extends Illuminate\CookieJar {}

/**
 * @method static string encrypt(string $value)
 * @method static string padAndMcrypt(string $value, string $iv)
 * @method static string decrypt(string $payload)
 * @method static string mcryptDecrypt(string $value, string $iv)
 * @method static array  getJsonPayload(string $payload)
 * @method static string hash(string $value) Create a MAC for the given value.
 * @method static string addPadding(string $value)
 * @method static string stripPadding(string $value)
 * @method static bool   paddingIsValid(string $pad, string $value) Determine if the given padding for a value is valid.
 * @method static bool   invalidPayload(array $data) Verify that the encryption payload is valid.
 * @method static int    getIvSize()   Get the IV size for the cipher.
 * @method static int    getRandomizer()   Get the random data source available for the OS.
 */
class Crypt extends Illuminate\Encrypter {}

/**
 * @method static Illuminate\Database\Query\Builder table($table) Begin a fluent query against a database table.
 * @method static Illuminate\Database\Query\Expression raw(mixed $value)
 * @method static mixed  selectOne($query, $bindings = array())
 * @method static array  select($query, $bindings = array())
 * @method static bool   insert($query, $bindings = array())
 * @method static int    update($query, $bindings = array())
 * @method static bool   delete($query, $bindings = array())
 * @method static bool   statement($query, $bindings = array()) Execute an SQL statement and return the boolean result.
 * @method static int    affectingStatement($query, $bindings = array())
 *
 * @method static mixed transaction(Closure $callback) Execute a Closure within a transaction.
 * @method static array pretend(Closure $callback) Execute the given callback in "dry run" mode.
 * @method static mixed run($query, $bindings, Closure $callback) Run a SQL statement and log its execution context.
 * @method static void  logQuery($query, $bindings, $time = null) Log a query in the connection's query log.
 */
class DB extends Illuminate\Database\Connection {}

/**
 * @method        Illuminate\Database\Eloquent\Model      fill(array $attributes)
 * @method        Illuminate\Database\Eloquent\Model      newInstance($attributes = array(), $exists = false)  clone existing attribute onto a new dirty model
 * @method        Illuminate\Database\Eloquent\Model      newExisting($attributes = array()) clone existing attribute onto a model with existing flag
 * @method static Illuminate\Database\Eloquent\Model      create(array $attributes) Save a new model and return the instance.
 * @method static Illuminate\Database\Eloquent\Builder    on($connection)
 * @method static Illuminate\Database\Eloquent\Collection all($columns = array('*'))
 * @method static Illuminate\Database\Eloquent\Model|Collection find($id, $columns = array('*'))
 * @method static Illuminate\Database\Eloquent\Builder    with($relations)
 *
 */
class Eloquent extends Illuminate\Database\Eloquent\Model {}

/**
 * @method static void     listen($event, $listener, $priority = 0)
 * @method static Symfony\Component\EventDispatcher\Event  fire($eventName, $payload = array())
 * @method static void     subscribe(EventSubscriberInterface $subscriber)
 * @method static void     unsubscribe(EventSubscriberInterface $subscriber)
 * @method static void     addListener($eventName, $listener, $priority = 0)
 * @method static Closure  createClassListener($listener)
 */
class Event extends Illuminate\Events\Dispatcher {}
class Facade extends Illuminate\Support\Facades\Facade {}

/**
 * @method static string get($path) Get the contents of a file.
 * @method static string getRemote($path) Get the contents of a remote file.
 * @method static mixed  getRequire($path) Get the returned value of a file.
 * @method static void   requireOnce($file)
 * @method static int    put($path, $contents)
 * @method static int    append($path, $data)
 * @method static bool   delete($path)
 * @method static void   move($path, $target)
 * @method static void   copy($path, $target)
 * @method static void   extension($path) Extract the file extension from a file path.
 * @method static void   type($path) Get the file type of a given file.
 * @method static int    size($path)
 * @method static int    lastModified($path)
 * @method static bool   isDirectory($directory)
 * @method static array  glob($pattern, $flags = 0)
 * @method static array  files($directory) Get an array of all files in a directory.
 * @method static bool   makeDirectory($path, $mode = 0777, $recursive = false)
 * @method static void   copyDirectory($directory, $destination, $options = null)
 * @method static void   deleteDirectory($directory, $preserve = false)
 * @method static void   cleanDirectory($directory)
 */
class File extends  Illuminate\Filesystem\Filesystem {}

/**
 * @method static string getRandomSalt()
 * @method static bool   check($value, $hashedValue, array $options = array())
 * @method static string make($value, array $options = array())
 *
 */
class Hash extends Illuminate\Hashing\BcryptHasher {}
/**
 * @method static mixed get(string|array $key = null, $default = null) Get an item from the input data. This method is used for all request verbs (GET, POST, PUT, PATCH and DELETE)
 * @method static bool has(string|array $key)  Determine if the request contains a given input item.
 * @method static array all()   Get all of the input and files for the request.
 * @method static array only(array|string $keys) Get a subset of the items from the input data.
 * @method static array except(array|string $keys) Get all of the input except for a specified array of items.
 * @method static string query(string $key = null, mixed $default = null) Retrieve a query string item from the request.
 * @method static string cookie(string $key = null, mixed $default = null) Retrieve a cookie from the request.
 * @method static Symfony\Component\HttpFoundation\File\UploadedFile file($key = null, $default = null) Retrieve a file from the request.
 * @method static bool hasFile(string $key) Determine if the uploaded data contains a file.
 * @method static string header($key = null, $default = null)
 * @method static string server($key = null, $default = null)
 * @method static string old($key = null, $default = null)
 * @method static void flash($filter = null, $keys = array())
 * @method static void flashOnly()
 * @method static void flashExcept()
 * @method static void flush()
 * @method static void merge(array $input)
 * @method static void replace(array $input)
 * @method static object json() Get the JSON payload for the request.
 */
class Input extends Illuminate\Http\Request {}
/**
 * @method static void  has($key, $locale = null)   Determine if a translation exists.
 * @method static string get($key, $parameters = array(), $locale = null)   Get the translation for a given key.
 * @method static string choice($key, $number, $parameters = array(), $locale = null)   Get a translation according to an integer value.
 * @method static string trans($id, array $parameters = array(), $domain = 'messages', $locale = null)  Get the translation for a given key.
 * @method static string transChoice($id, $number, array $parameters = array(), $domain = 'messages', $locale = null)   Get a translation according to an integer value.
 * @method static string load($group, $namespace, $locale)  Load the specified language group.
 * @method static void   addResource(array $lines, $locale, $domain)
 * @method static void   addNamespace($namespace, $hint)    Add a new namespace to the loader.
 * @method static string getLocale()    Get the default locale being used.
 * @method static void   setLocale($locale) Set the default locale.
 * @method static void   setSymfonyTranslator(Symfony\Translation\Translator  $trans) Set the base Symfony translator instance.
 * @method static Symfony\Translation\Translator   getSymfonyTranslator() Get the base Symfony translator instance.
 */
class Lang extends Illuminate\Translation\Translator {}
/**
 * @method static void useFiles(string $path, string $level = 'debug') Register a file log handler.
 * @method static void useDailyFiles($path, $days = 0, $level = 'debug')    Register a daily file log handler.
 * @method static int  parseLevel(string $level) Parse the string level into a Monolog constant. debug|info|notice|warning|error|critical|alert|emergency
 * @method static Monolog\Logger getMonolog() Get the underlying Monolog instance.
 * @method static mixed __call($method, $parameters) Dynamically handle error additions.( Closure support )
 */
class Log extends Illuminate\Log\Writer {}
/**
 * @method static void   alwaysFrom($address, $name = null) Set the global from address and name.
 * @method static void   send(string|array $view, array $data, Closure|string $callback)    Send a new message using a view.
 * @method static void   sendSwiftMessage($message) Send a Swift Message instance.
 * @method static void   logMessage(Swift_Message $message) Log that a message was sent.
 * @method static void   callMessageBuilder(Closure|string $callback, Illuminate\Mail\Message $message) Call the provided message builder.
 * @method static Illuminate\Mail\Message createMessage()   Create a new message instance.
 * @method static void   pretend($value = true) Tell the mailer to not really send messages.
 * @method static Illuminate\View\Environment   getViewEnvironment() Get the view environment instance.
 * @method static Swift_Mailer  getSwiftMailer() Get the Swift Mailer instance.
 * @method static void  setSwiftMailer(Swift_Mailer $swift) Set the Swift Mailer instance.
 * @method static void  setLogger(Illuminate\Log\Writer $logger) Set the log writer instance.
 * @method static void  setContainer(Illuminate\Container $container) Set the IoC container instance.
 */
class Mail extends Illuminate\Mail\Mailer {}
#class Paginator extends Illuminate\Pagination\BootstrapPresenter {}
/**
 * @method static void todo()
 */
class Queue {}

/**
 * @method static Illuminate\Http\Request instance()
 * @method static string       root() Get the root URL for the application.
 * @method static string       url() Get the URL (no query string) for the request.
 * @method static string       fullUrl() Get the full URL for the request.
 * @method static string       path() Get the current path info for the request.
 * @method static string|array is($pattern) Determine if the current request URI matches a pattern.
 * @method static bool         ajax()
 * @method static bool         secure()
 * @method static mixed        get(string|array $key = null, $default = null) Get an item from the input data. This method is used for all request verbs (GET, POST, PUT, PATCH and DELETE)
 * @method static bool         has(string|array $key)  Determine if the request contains a given input item.
 * @method static array        all()
 * @method static array        only(array|string $keys) Get a subset of the items from the input data.
 * @method static array        except(array|string $keys) Get all of the input except for a specified array of items.
 * @method static string       query(string $key = null, mixed $default = null) Retrieve a query string item from the request.
 * @method static string       cookie(string $key = null, mixed $default = null) Retrieve a cookie from the request.
 * @method static UploadedFile file($key = null, $default = null) Retrieve a file from the request.
 * @method static bool         hasFile(string $key) Determine if the uploaded data contains a file.
 * @method static string       header($key = null, $default = null)
 * @method static string       server($key = null, $default = null)
 * @method static string       old($key = null, $default = null)
 * @method static void         flash($filter = null, $keys = array())
 * @method static void         flashOnly()
 * @method static void         flashExcept()
 * @method static void         flush()
 * @method static void         merge(array $input)
 * @method static void         replace(array $input)
 * @method static object       json( dynamic ) Get the JSON payload for the request.
 */
class Request extends Illuminate\Http\Request {}

/**
 * @method static Symfony\Component\HttpFoundation\Response           make($content = '', $status = 200, array $headers = array())
 * @method static Symfony\Component\HttpFoundation\JsonResponse       json($data = array(), $status = 200, array $headers = array())
 * @method static Symfony\Component\HttpFoundation\StreamedResponse   stream($callback, $status = 200, array $headers = array())
 * @method static Symfony\Component\HttpFoundation\BinaryFileResponse download($file, $status = 200, $headers = array())
 *
 */
class Response extends Illuminate\Support\Facades\Response {}
#class Response extends Illuminate\Http\Response {}

/**
 * @method static Illuminate\Redis\Database  connection($name = null)
 * @method static Illuminate\Redis\Database  createConnection($name)
 * @method static array                      getConfig($name)
 * @method static string                     getDefaultConnection()
 *
 * The real query magic:
 * @method static mixed __call($method, $parameters) Dynamically make a Redis command.
 * @method static mixed command($method, array $parameters = array()) Run a command against the Redis database.
 *
 */
class Redis extends Illuminate\Redis\Database {}

/**
 * @method static Illuminate\Routing\Route get(string $pattern, mixed $action) Add a new route to the collection.
 * @method static Illuminate\Routing\Route put(string $pattern, mixed $action) Add a new route to the collection.
 * @method static Illuminate\Routing\Route patch(string $pattern, mixed $action) Add a new route to the collection.
 * @method static Illuminate\Routing\Route post(string $pattern, mixed $action) Add a new route to the collection.
 * @method static Illuminate\Routing\Route delete(string $pattern, mixed $action) Add a new route to the collection.
 * @method static Illuminate\Routing\Route match(string $method, string $pattern, mixed $action) Add a new route to the collection.
 * @method static Illuminate\Routing\Route createRoute(string $method, string $pattern, mixed $action) Add a new route to the collection.
 * @method static Illuminate\Routing\Route any(string $pattern, mixed $action) Add a new route to the collection.
 * @method static void                     controllers(array $controllers) Register an array of controllers with wildcard routing.
 * @method static Illuminate\Routing\Route controller($controller, $uri)
 * @method static void                     resource(string $resource, string $controller, array $options = array()) Route a resource to a controller.
 * @method static void                     group(array $attributes, Closure $callback) Create a route group with shared attributes.
 * @method static Symfony\Component\HttpFoundation\Response dispatch(Symfony\Component\HttpFoundation\Request $request) Get the response for a given request.
 * @method static void                     before(Closure $callback) Register a "before" routing filter.
 * @method static void                     after(Closure $callback) Register an "after" routing filter.
 * @method static void                     close(Closure $callback) Register a "close" routing filter.
 * @method static void                     finish(Closure $callback) Register a "finish" routing filters.
 * @method static void                     addFilter(string $name, Closure|string $callback) Register a new filter with the application.
 * @method static Closure                  getFilter($name) Get a registered filter callback.
 */
class Route extends Illuminate\Routing\Router {}

/**
 * @method static Illuminate\Http\RedirectResponse back($status = 302, $headers = array())
 * @method static Illuminate\Http\RedirectResponse to($path, $status = 302, $headers = array(), $secure = false)
 * @method static Illuminate\Http\RedirectResponse secure($path, $status = 302, $headers = array())
 * @method static Illuminate\Http\RedirectResponse route($route, $parameters = array(), $status = 302, $headers = array())
 * @method static Illuminate\Http\RedirectResponse action($action, $parameters = array(), $status = 302, $headers = array())
 * @method static Illuminate\Http\RedirectResponse createRedirect($path, $status, $headers)
 */
class Redirect extends Illuminate\Routing\Redirector {}

/**
 * @method static string to($path, $parameters = array(), $secure = null)
 * @method static string secure($path, $parameters = array())
 * @method static string asset($path, $secure = null)
 * @method static string secureAsset($path)
 * @method static string getScheme($secure = null)
 * @method static string route($name, $parameters = array(), $absolute = true)
 * @method static string action($action, $parameters = array(), $absolute = true)
 * @method static string getRootUrl($scheme)
 * @method static bool   isValidUrl($path)
 */
class URL extends Illuminate\Routing\UrlGenerator {}
class Controller extends Illuminate\Routing\Controllers\Controller {}

/**
 * @method static Illuminate\Database\Schema\Builder   connection(strin $name) Get a schema builder instance for a connection.
 * @method static bool                                 hasTable(string $table)
 * @method static Illuminate\Database\Schema\Blueprint table($table, Closure $callback(Illuminate\Database\Schema\Blueprint $table) )
 * @method static Illuminate\Database\Schema\Blueprint create($table, Closure $callback)
 * @method static Illuminate\Database\Schema\Blueprint drop($table)
 * @method static Illuminate\Database\Schema\Blueprint dropIfExists($table)
 * @method static Illuminate\Database\Schema\Blueprint rename($from, $to)
 * @method static Illuminate\Database\Schema\Blueprint build(Blueprint $blueprint)
 * @method static Illuminate\Database\Schema\Blueprint createBlueprint($table, Closure $callback = null)
 * @method static Illuminate\Database\Schema           setConnection(Connection $connection)
 * @method static Illuminate\Database\Connection       getConnection()
 */
class Schema extends Illuminate\Database\Schema\Builder {}

/**
 * @method static void   start(Illuminate\Cookie\CookieJar $cookies)
 * @method static array  createFreshSession()
 * @method static array  createData()
 * @method static string createSessionID()
 * @method static bool   isInvalid($session)
 * @method static bool   has(string $key)
 * @method static mixed  get($key, $default = null)
 * @method static mixed  getOldInput($key = null, $default = null)
 * @method static array  all()
 * @method static void   put($key, $value)
 * @method static void   flash($key, $value)
 * @method static void   flashInput(array $value)
 * @method static void   reflash()
 * @method static void   keep($keys)
 * @method static void   forget($key)
 * @method static void   flush()
 * @method static void   finish(Response $response, CookieJar $cookie, $lifetime)
 * @method static void   ageFlashData()
 * @method static string getToken()
 * @method static string regenerate()
 * @method static bool   hitsLottery()
 * @method static bool   sessionExists()
 * @method static void   setExists($value)
 * @method static void   setLifetime($minutes)
 * @method static void   setCookieOption($option, $value)
 */
class Session extends Illuminate\Session\Store {}

/**
 * @method static Illuminate\Validation\Validator make(array $data, array $rules, array $messages = array())
 * @method static Illuminate\Validation\Validator resolve($data, $rules, $messages)
 * @method static Closure                         extend($rule, Closure $extension)
 */
class Validator extends Illuminate\Validation\Factory {}

/**
 * @method static Illuminate\View\View                    make($view, array $data = array())
 * @method static string                                  renderEach($view, $data, $iterator, $empty = 'raw|')
 * @method static Illuminate\View\Engines\EngineInterface getEngineFromPath($path)
 * @method static string                                  getExtension($path)
 * @method static void                                    share($key, $value)
 * @method static Closure                                 composer($view, $callback)
 * @method static Closure                                 addClassComposer($view, $class)
 * @method static void                                    callComposer(View $view)
 * @method static void                                    addLocation($location) Add a location to the array of view locations.
 * @method static void                                    addNamespace($namespace, $hints) Add a new namespace to the loader.
 * @method static void                                    addExtension($extension, $engine, $resolver = null) Register a valid view extension and its engine.
 * @method static Illuminate\View\Engines\EngineResolver  getEngineResolver() Get the engine resolver instance.
 * @method static Illuminate\View\ViewFinder              getFinder() Get the view finder instance.
 * @method static Illuminate\Events\Dispatcher            getDispatcher() Get the event dispatcher instance.
 * @method static Illuminate\Container                    getContainer()
 * @method static void                                    setContainer(Container $container)
 * @method static array                                   getShared() Get all of the shared data for the environment.
 * @method static array                                   getSections()
 */
class View extends Illuminate\View\Environment {}