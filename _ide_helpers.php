<?php die("Access denied!");
/**
 * ---------------- DO NOT UPLOAD THIS FILE TO LIVE SERVER ------------------------
 * Laravel IDE Helper <http://LaravelBook.com>
 * Implements code completion for Laravel 4 in JetBrains PhpStorm and SublimeText 2
 * --------------------------------------------------------------------------------
 */

/**
 * @method	static	bool	check()	Determine if the current user is authenticated.
 * @method	static	bool	guest()	Determine if the current user is a guest.
 * @method	static	void	user()	Get the currently authenticated user.
 * @method	static	bool	stateless(array  $credentials = array())	Log a user into the application without sessions or cookies.
 * @method	static	bool	validate(array  $credentials = array())	Validate a user's credentials.
 * @method	static	bool	attempt(array  $credentials = array(), bool   $remember = false, bool   $login = true)	Attempt to authenticate a user using the given credentials.
 * @method	static	void	login(Illuminate\Auth\UserInterface  $user, bool  $remember = false)	Log a user into the application.
 * @method	static	void	loginUsingId(mixed  $id, bool   $remember = false)	Log the given user ID into the application.
 * @method	static	void	logout()	Log the user out of the application.
 * @method	static	void	getCookieJar()	Get the cookie creator instance used by the guard.
 * @method	static	void	setCookieJar(Illuminate\CookieJar  $cookie)	Set the cookie creator instance used by the guard.
 * @method	static	void	getDispatcher()	Get the event dispatcher instance.
 * @method	static	void	setDispatcher(Illuminate\Events\Dispatcher $events)	Set the event dispatcher instance.
 * @method	static	void	getSession()	Get the session store used by the guard.
 * @method	static	array	getQueuedCookies()	Get the cookies queued by the guard.
 * @method	static	void	getProvider()	Get the user provider used by the guard.
 * @method	static	void	getUser()	Return the currently cached user of the application.
 * @method	static	void	setUser(Illuminate\Auth\UserInterface  $user)	Set the current user of the application.
 * @method	static	string	getName()	Get a unique identifier for the auth session value.
 * @method	static	string	getRecallerName()	Get the name of the cookie used to store the "recaller".
 */
class Auth extends Illuminate\Auth\Guard {}

/**
 * @method	static	bool	has(string  $key)	Determine if an item exists in the cache.
 * @method	static	mixed	get(string  $key, mixed   $default = null)	Retrieve an item from the cache by key.
 * @method	static	void	put(string  $key, mixed   $value, int     $minutes)	Store an item in the cache.
 * @method	static	void	forever(string  $key, mixed   $value)	Store an item in the cache indefinitely.
 * @method	static	void	remember(string   $key, int      $minutes, Closure  $callback)	Get an item from the cache, or store the default value.
 * @method	static	void	rememberForever(string   $key, Closure  $callback)	Get an item from the cache, or store the default value forever.
 * @method	static	void	forget(string  $key)	Remove an item from the cache.
 * @method	static	void	flush()	Remove all items from the cache.
 * @method	static	int	getDefaultCacheTime()	Get the default cache time.
 * @method	static	void	setDefaultCacheTime(int   $minutes)	Set the default cache time in minutes.
 * @method	static	bool	existsInMemory(string  $key)	Determine if an item is in memory.
 * @method	static	array	getMemory()	Get all of the values in memory.
 * @method	static	mixed	getFromMemory(string  $key)	Get the value of an item in memory.
 * @method	static	void	setInMemory(string  $key, mixed   $value)	Set the value of an item in memory.
 * @method	static	bool	offsetExists(string  $key)	Determine if a cached value exists.
 * @method	static	mixed	offsetGet(string  $key)	Retrieve an item from the cache by key.
 * @method	static	void	offsetSet(string  $key, mixed   $value)	Store an item in the cache for the default time.
 * @method	static	void	offsetUnset(string  $key)	Remove an item from the cache.
 */
class Cache extends Illuminate\Cache\Store {}

/**
 * @method	static	bool	has(string  $key)	Determine if the given configuration value exists.
 * @method	static	bool	hasGroup(string  $key)	Determine if a configuration group exists.
 * @method	static	mixed	get(string  $key, mixed   $default)	Get the specified configuration value.
 * @method	static	void	set(string  $key, mixed   $value)	Set a given configuration value.
 * @method	static	void	package(string  $package, string  $hint, string  $namespace)	Register a package for cascading configuration.
 * @method	static	void	afterLoading(string   $namespace, Closure  $callback)	Register an after load callback for a given namespace.
 * @method	static	void	addNamespace(string  $namespace, string  $hint)	Add a new namespace to the loader.
 * @method	static	void	getLoader()	Get the loader implementation.
 * @method	static	string	getEnvironment()	Get the current configuration environment.
 * @method	static	array	getAfterLoadCallbacks()	Get the after load callback array.
 * @method	static	array	getItems()	Get all of the configuration items.
 * @method	static	bool	offsetExists(string  $key)	Determine if the given configuration option exists.
 * @method	static	bool	offsetGet(string  $key)	Get a configuration option.
 * @method	static	bool	offsetSet(string  $key)	Set a configuration option.
 * @method	static	bool	offsetUnset(string  $key)	Unset a configuration option.
 */
class Config extends Illuminate\Config\Repository {}

/**
 * @method	static	bool	has(string  $key)	Determine if a cookie exists and is not null.
 * @method	static	mixed	get(string  $key, mixed   $default = null)	Get the value of the given cookie.
 * @method	static	void	make(string  $name, string  $value, int     $minutes = 0)	Create a new cookie instance.
 * @method	static	void	forever(string  $name, string  $value)	Create a cookie that lasts "forever" (five years).
 * @method	static	void	forget(string  $name)	Expire the given cookie.
 * @method	static	void	setDefault(string  $option, string  $value)	Set the value of a cookie otpion.
 * @method	static	void	getRequest()	Get the request instance.
 * @method	static	void	getEncrypter()	Get the encrypter instance.
 */
class Cookie extends Illuminate\Cookie\CookieJar {}

/**
 * @method	static	void	useDefaultQueryGrammar()	Set the query grammar to the default implementation.
 * @method	static	void	useDefaultSchemaGrammar()	Set the schema grammar to the default implementation.
 * @method	static	void	useDefaultPostProcessor()	Set the query post processor to the default implementation.
 * @method	static	void	getSchemaBuilder()	Get a schema builder instance for the connection.
 * @method	static	void	table(string  $table)	Begin a fluent query against a database table.
 * @method	static	void	raw(mixed  $value)	Get a new raw query expression.
 * @method	static	mixed	selectOne(string  $query, array   $bindings = array())	Run a select statement and return a single result.
 * @method	static	array	select(string  $query, array   $bindings = array())	Run a select statement against the database.
 * @method	static	bool	insert(string  $query, array   $bindings = array())	Run an insert statement against the database.
 * @method	static	int	update(string  $query, array   $bindings = array())	Run an update statement against the database.
 * @method	static	int	delete(string  $query, array   $bindings = array())	Run a delete statement against the database.
 * @method	static	bool	statement(string  $query, array   $bindings = array())	Execute an SQL statement and return the boolean result.
 * @method	static	int	affectingStatement(string  $query, array   $bindings = array())	Run an SQL statement and get the number of rows affected.
 * @method	static	bool	unprepared(string  $query)	Run a raw, unprepared query against the PDO connection.
 * @method	static	array	prepareBindings(array  $bindings)	Prepare the query bindings for execution.
 * @method	static	mixed	transaction(Closure  $callback)	Execute a Closure within a transaction.
 * @method	static	array	pretend(Closure  $callback)	Execute the given callback in "dry run" mode.
 * @method	static	void	logQuery(string  $query, array   $bindings, $time = null)	Log a query in the connection's query log.
 * @method	static	PDO	getPdo()	Get the currently used PDO connection.
 * @method	static	string	getDriverName()	Get the PDO driver name.
 * @method	static	void	getQueryGrammar()	Get the query grammar used by the connection.
 * @method	static	void	setQueryGrammar(Illuminate\Database\Query\Grammars\Grammar $grammar)	Set the query grammar used by the connection.
 * @method	static	void	getSchemaGrammar()	Get the schema grammar used by the connection.
 * @method	static	void	setSchemaGrammar(Illuminate\Database\Schema\Grammars\Grammar $grammer)	Set the schema grammar used by the connection.
 * @method	static	void	getPostProcessor()	Get the query post processor used by the connection.
 * @method	static	void	setPostProcessor(Illuminate\Database\Query\Processors\Processor $processor)	Set the query post processor used by the connection.
 * @method	static	void	getEventDispatcher()	Get the event dispatcher used by the connection.
 * @method	static	void	setEventDispatcher(Illuminate\Events\Dispatcher $events)	Set the event dispatcher instance on the connection.
 * @method	static	void	getPaginator()	Get the paginator environment instance.
 * @method	static	void	setPaginator(Illuminate\Pagination\Environment $paginator)	Set the pagination environment instance.
 * @method	static	bool	pretending()	Determine if the connection in a "dry run".
 * @method	static	int	getFetchMode()	Get the default fetch mode for the connection.
 * @method	static	int	setFetchMode(int  $fetchMode)	Set the default fetch mode for the connection.
 * @method	static	array	getQueryLog()	Get the connection query log.
 * @method	static	string	getDatabaseName()	Get the name of the connected database.
 * @method	static	string	setDatabaseName(string  $database)	Set the name of the connected database.
 * @method	static	string	getTablePrefix()	Get the table prefix for the connection.
 * @method	static	void	setTablePrefix(string  $prefix)	Set the table prefix in use by the connection.
 * @method	static	void	withTablePrefix(Illuminate\Database\Grammar  $grammar)	Set the table prefix and return the grammar.
 */
class DB extends Illuminate\Database\Connection {}

/**
 * @var	static	void	incrementing = true	Indicates if the IDs are auto-incrementing.
 * @var	static	void	timestamps = true	Indicates if the model should be timestamped.
 * @var	static	void	exists = false	Indicates if the model exists.
 * @method	static	void	fill(array  $attributes)	Fill the model with an array of attributes.
 * @method	static	void	newInstance(array  $attributes = array(), bool   $exists = false)	Create a new instance of the given model.
 * @method	static	void	newExisting(array  $attributes = array())	Create a new model instance that is existing.
 * @method	static	void	create(array  $attributes)	Save a new model and return the instance.
 * @method	static	void	on(string  $connection)	Begin querying the model on a given connection.
 * @method	static	void	all(array  $columns = array('*'))	Get all of the models from the database.
 * @method	static	void	find(mixed  $id, array  $columns = array('*'))	Find a model by its primary key.
 * @method	static	void	with(array  $relations)	Being querying a model with eager loading.
 * @method	static	void	hasOne(string  $related, string  $foreignKey = null)	Define a one-to-one relationship.
 * @method	static	void	morphOne(string  $related, string  $name, string  $foreignKey)	Define a polymorphic one-to-one relationship.
 * @method	static	void	belongsTo(string  $related, string  $foreignKey = null)	Define an inverse one-to-one or many relationship.
 * @method	static	void	morphTo(string  $name = null)	Define an polymorphic, inverse one-to-one or many relationship.
 * @method	static	void	hasMany(string  $related, string  $foreignKey = null)	Define a one-to-many relationship.
 * @method	static	void	morphMany(string  $related, string  $name, string  $foreignKey)	Define a polymorphic one-to-many relationship.
 * @method	static	void	belongsToMany(string  $related, string  $table = null, string  $foreignKey = null, string  $otherKey = null)	Define a many-to-many relationship.
 * @method	static	string	joiningTable(string  $related)	Get the joining table name for a many-to-many relation.
 * @method	static	void	delete()	Delete the model from the database.
 * @method	static	void	updating(Closure  $callback)	Register an updating model event with the dispatcher.
 * @method	static	void	creating(Closure  $callback)	Register a creating model event with the dispatcher.
 * @method	static	bool	save()	Save the model to the database.
 * @method	static	bool	touch()	Update the model's updat timestamp.
 * @method	static	mixed	freshTimestamp()	Get a fresh timestamp for the model.
 * @method	static	void	newQuery()	Get a new query builder for the model's table.
 * @method	static	void	newCollection(array  $models = array())	Create a new Eloquent Collection instance.
 * @method	static	string	getTable()	Get the table associated with the model.
 * @method	static	void	setTable(string  $table)	Set the table associated with the model.
 * @method	static	mixed	getKey()	Get the value of the model's primary key.
 * @method	static	string	getKeyName()	Get the primary key for the model.
 * @method	static	bool	usesTimestamps()	Determine if the model uses timestamps.
 * @method	static	int	getPerPage()	Get the number of models to return per page.
 * @method	static	void	setPerPage(int   $perPage)	Set the number of models ot return per page.
 * @method	static	string	getForeignKey()	Get the default foreign key name for the model.
 * @method	static	array	getHidden()	Get the hidden attributes for the model.
 * @method	static	void	setHidden(array  $hidden)	Set the hidden attributes for the model.
 * @method	static	array	getFillable()	Get the fillable attributes for the model.
 * @method	static	void	fillable(array  $fillable)	Set the fillable attributes for the model.
 * @method	static	void	guard(array  $guarded)	Set the guarded attributes for the model.
 * @method	static	bool	isFillable(string  $key)	Determine if the given attribute may be mass assigned.
 * @method	static	bool	getIncrementing()	Get the value indicating whether the IDs are incrementing.
 * @method	static	void	setIncrementing(bool  $value)	Set whether IDs are incrementing.
 * @method	static	string	toJson(int  $options)	Convert the model instance to JSON.
 * @method	static	array	toArray()	Convert the model instance to an array.
 * @method	static	array	relationsToArray()	Get the model's relationships in array form.
 * @method	static	mixed	getAttribute(string  $key)	Get an attribute from the model.
 * @method	static	bool	hasGetMutator(string  $key)	Determine if a get mutator exists for an attribute.
 * @method	static	void	setAttribute(string  $key, mixed   $value)	Set a given attribute on the model.
 * @method	static	bool	hasSetMutator(string  $key)	Determine if a set mutator exists for an attribute.
 * @method	static	array	getAttributes()	Get all of the current attributes on the model.
 * @method	static	void	setRawAttributes(array  $attributes, bool   $sync = false)	Set the array of model attributes. No checking is done.
 * @method	static	array	getOriginal(string  $key = null, mixed  $default = null)	Get the model's original attribute values.
 * @method	static	void	syncOriginal()	Sync the original attributes with the current.
 * @method	static	mixed	getRelation(string  $relation)	Get a specified relationship.
 * @method	static	void	setRelation(string  $relation, mixed   $value)	Set the specific relationship in the model.
 * @method	static	void	getConnection()	Get the database connection for the model.
 * @method	static	string	getConnectionName()	Get the current connection name for the model.
 * @method	static	void	setConnection(string  $name)	Set the connection associated with the model.
 * @method	static	void	resolveConnection(string  $connection)	Resolve a connection instance by name.
 * @method	static	void	getConnectionResolver()	Get the connection resolver instance.
 * @method	static	void	setConnectionResolver(Illuminate\Database\ConnectionResolverInterface  $resolver)	Set the connection resolver instance.
 * @method	static	void	getEventDispatcher()	Get the event dispatcher instance.
 * @method	static	void	setEventDispatcher(Illuminate\Events\Dispatcher $dispatcher)	Set the event dispatcher instance.
 * @method	static	void	unsetEventDispatcher()	Unset the event dispatcher for models.
 */
class Eloquent extends Illuminate\Database\Eloquent\Model {}

/**
 * @method	static	bool	hasTable(string  $table)	Determine if the given table exists.
 * @method	static	void	table(string   $table, Closure  $callback)	Modify a table on the schema.
 * @method	static	void	create(string   $table, Closure  $callback)	Create a new table on the schema.
 * @method	static	void	drop(string  $table)	Drop a table from the schema.
 * @method	static	void	dropIfExists(string  $table)	Drop a table from the schema if it exists.
 * @method	static	void	rename(string  $from, string  $to)	Rename a table on the schema.
 * @method	static	void	getConnection()	Get the database connection instance.
 * @method	static	void	setConnection(Illuminate\Database\Connection $connection)	Set the database connection instance.
 */
class Schema extends Illuminate\Database\Schema\Builder {}

/**
 * @method	static	string	encrypt(string  $value)	Encrypt the given value.
 * @method	static	string	decrypt(string  $value)	Decrypt the given value.
 */
class Crypt extends Illuminate\Encryption\Encrypter {}

/**
 * @method	static	void	stop()	Stop the propagation of the event to other listeners.
 * @method	static	bool	isStopped()	Determine if the event has been stopped from propagating.
 */
class Event extends Illuminate\Events\Event {}

/**
 * @method	static	bool	exists(string  $path)	Determine if a file exists.
 * @method	static	string	get(string  $path)	Get the contents of a file.
 * @method	static	string	getRemote(string  $path)	Get the contents of a remote file.
 * @method	static	mixed	getRequire(string  $path)	Get the returned value of a file.
 * @method	static	void	requireOnce(string  $file)	Require the given file once.
 * @method	static	int	put(string  $path, string  $contents)	Write the contents of a file.
 * @method	static	int	append(string  $path, string  $data)	Append to a file.
 * @method	static	bool	delete(string  $path)	Delete the file at a given path.
 * @method	static	void	move(string  $path, string  $target)	Move a file to a new location.
 * @method	static	void	copy(string  $path, string  $target)	Copy a file to a new location.
 * @method	static	string	extension(string  $path)	Extract the file extension from a file path.
 * @method	static	string	type(string  $path)	Get the file type of a given file.
 * @method	static	int	size(string  $path)	Get the file size of a given file.
 * @method	static	int	lastModified(string  $path)	Get the file's last modification time.
 * @method	static	bool	isDirectory(string  $directory)	Determine if the given path is a directory.
 * @method	static	array	glob(string  $pattern, int     $flags)	Find path names matching a given pattern.
 * @method	static	array	filetype(string  $directory)	Get an array of all files in a directory.
 * @method	static	bool	makeDirectory(string  $path, int     $mode = 0777, bool    $recursive = false)	Create a directory.
 * @method	static	void	copyDirectory(string  $directory, string  $destination, int     $options = null)	Copy a directory from one location to another.
 * @method	static	void	deleteDirectory(string  $directory, bool    $preserve = false)	Recursively delete a directory.
 * @method	static	void	cleanDirectory(string  $directory)	Empty the specified directory of all files and folders.
 */
class File extends Illuminate\Filesystem\Filesystem {}

/**
 * @var	static	void	VERSION	The Laravel framework version.
 * @method	static	void	bindInstallPaths(array  $paths)	Bind the installation paths to the application.
 * @method	static	string	getBootstrapFile()	Get the application bootstrap file.
 * @method	static	void	registerAliasLoader(array  $aliases)	Register the aliased class loader.
 * @method	static	void	ExceptionServiceProvider()	Start the exception handling for the request.
 * @method	static	string	environment()	Get the current application environment.
 * @method	static	string	detectEnvironment(string  $environments)	Detect the application's current environment.
 * @method	static	bool	runningInConsole()	Determine if we are running in the console.
 * @method	static	bool	runningUnitTests()	Determine if we are running unit tests.
 * @method	static	void	register(Illuminate\Support\ServiceProvider  $provider, array  $options = array())	Register a service provider with the application.
 * @method	static	void	loadDeferredProviders()	Load and boot all of the remaining deferred providers.
 * @method	static	mixed	make(string  $abstract, array   $parameters)	Resolve the given type from the container.
 * @method	static	void	before(Closure  $callback)	Register a "before" application filter.
 * @method	static	void	after(Closure  $callback)	Register an "after" application filter.
 * @method	static	void	close(Closure  $callback)	Register a "close" application filter.
 * @method	static	void	finish(Closure  $callback)	Register a "finish" application filter.
 * @method	static	void	run()	Handles the given request and delivers the response.
 * @method	static	void	dispatch(Illuminate\Foundation\Request  $request)	Handle the given request and get the response.
 * @method	static	void	handle(SymfonyRequest $request, int $type = HttpKernelInterface::MASTER_REQUEST, bool $catch = true)	Handle the given request and get the response.
 * @method	static	void	boot()	Boot the application's service providers.
 * @method	static	void	booting(mixed  $callback)	Register a new boot listener.
 * @method	static	void	prepareRequest(Illuminate\Foundation\Request  $request)	Prepare the request by injecting any services.
 * @method	static	void	prepareResponse(mixed  $value, Illuminate\Foundation\Request  $request)	Prepare the given value as a Response object.
 * @method	static	void	setLocale(string  $locale)	Set the current application locale.
 * @method	static	void	abort(int     $code, string  $message = '', array   $headers = array())	Throw an HttpException with the given data.
 * @method	static	void	NotFoundHttpException(Closure  $callback)	Register a 404 error handler.
 * @method	static	void	error(Closure  $callback)	Register an application error handler.
 * @method	static	void	FatalErrorException(Closure  $callback)	Register an error handler for fatal errors.
 * @method	static	array	getLoadedProviders()	Get the service providers that have been loaded.
 * @method	static	void	setDeferredServices(array  $services)	Set the application's deferred services.
 */
class App extends Illuminate\Foundation\Application {}

/**
 * @method	static	void	call(string  $command, array   $parameters = array(), Symfony\Component\Console\Output\OutputInterface  $output = null)	Run an Artisan console command by name.
 */
class Artisan extends Illuminate\Foundation\Artisan {}

/**
 * @method	static	void	instance()	Return the Request instance.
 * @method	static	string	root()	Get the root URL for the application.
 * @method	static	string	url()	Get the URL (no query string) for the request.
 * @method	static	string	fullUrl()	Get the full URL for the request.
 * @method	static	string	path()	Get the current path info for the request.
 * @method	static	string	segment(string  $index, mixed   $default = null)	Get a segment from the URI (1 based index).
 * @method	static	array	segments()	Get all of the segments for the request path.
 * @method	static	bool	is(string  $pattern)	Determine if the current request URI matches a pattern.
 * @method	static	bool	ajax()	Determine if the request is the result of an AJAX call.
 * @method	static	bool	secure()	Determine if the request is over HTTPS.
 * @method	static	bool	has(string  $key)	Determine if the request contains a given input item.
 * @method	static	array	all()	Get all of the input and files for the request.
 * @method	static	string	input(string  $key = null, mixed   $default = null)	Retrieve an input item from the request.
 * @method	static	array	only(array  $keys)	Get a subset of the items from the input data.
 * @method	static	array	except(array  $keys)	Get all of the input except for a specified array of items.
 * @method	static	string	query(string  $key = null, mixed   $default = null)	Retrieve a query string item from the request.
 * @method	static	string	cookie(string  $key = null, mixed   $default = null)	Retrieve a cookie from the request.
 * @method	static	void	file(string  $key = null, mixed   $default = null)	Retrieve a file from the request.
 * @method	static	bool	hasFile(string  $key)	Determine if the uploaded data contains a file.
 * @method	static	string	header(string  $key = null, mixed   $default = null)	Retrieve a header from the request.
 * @method	static	string	server(string  $key = null, mixed   $default = null)	Retrieve a server variable from the request.
 * @method	static	string	old(string  $key = null, mixed   $default = null)	Retrieve an old input item.
 * @method	static	void	flash(string $filter = null, array  $keys = null)	Flash the input for the current request to the session.
 * @method	static	void	flashOnly(dynamic  $keys)	Flash only some of the input to the session.
 * @method	static	void	flashExcept(dynamic  $keys)	Flash only some of the input to the session.
 * @method	static	void	flush()	Flush all of the old input from the session.
 * @method	static	void	merge(array  $input)	Merge new input into the current request's input array.
 * @method	static	void	replace(array  $input)	Replace the input for the current request.
 * @method	static	object	json()	Get the JSON payload for the request.
 * @method	static	void	getSessionStore()	Get the Illuminate session store implementation.
 * @method	static	void	setSessionStore(Illuminate\Session\Store  $session)	Set the Illuminate session store implementation.
 * @method	static	bool	hasSessionStore()	Determine if the session store has been set.
 */
class Input extends Illuminate\Http\Request {}

/**
 * @var	static	void	original	The original content of the response.
 * @method	static	void	withCookie(Symfony\Component\HttpFoundation\Cookie  $cookie)	Add a cookie to the response.
 * @method	static	void	setContent(mixed  $content)	Set the content on the response.
 * @method	static	mixed	getOriginalContent()	Get the original response content.
 */
class Response extends Illuminate\Http\Response {}

/**
 * @method	static	void	useFiles(string  $path, string  $level = 'debug')	Register a file log handler.
 * @method	static	void	useDailyFiles(string  $path, int     $days, string  $level = 'debug')	Register a daily file log handler.
 * @method	static	void	getMonolog()	Get the underlying Monolog instance.
 */
class Log extends Illuminate\Log\Writer {}

/**
 * @method	static	void	alwaysFrom(string  $address, string  $name = null)	Set the global from address and name.
 * @method	static	void	plain(string  $view, array   $data, mixed  $callback)	Send a new message when only a plain part.
 * @method	static	void	send(string    $view, array           $data, Closure  $callback)	Send a new message using a view.
 * @method	static	void	pretend(bool  $value = true)	Tell the mailer to not really send messages.
 * @method	static	void	getViewEnvironment()	Get the view environment instance.
 * @method	static	Swift_Mailer	getSwiftMailer()	Get the Swift Mailer instance.
 * @method	static	void	setSwiftMailer(Swift_Mailer  $swift)	Set the Swift Mailer instance.
 * @method	static	void	setLogger(Illuminate\Log\Writer  $logger)	Set the log writer instance.
 * @method	static	void	setContainer(Illuminate\Container  $container)	Set the IoC container instance.
 */
class Mail extends Illuminate\Mail\Mailer {}

/**
 * @method	static	void	setupPaginationContext()	Setup the pagination context (current and last page).
 * @method	static	void	links()	Get the pagination links view.
 * @method	static	string	getUrl(int     $page)	Get a URL for a given page number.
 * @method	static	void	appends(string  $key, string  $value)	Add a query string value to the paginator.
 * @method	static	void	addQuery(string  $key, string  $value)	Add a query string value to the paginator.
 * @method	static	int	getCurrentPage()	Get the current page for the request.
 * @method	static	int	getLastPage()	Get the last page that should be available.
 * @method	static	array	getItems()	Get the items being paginated.
 * @method	static	int	getTotal()	Get the total number of items in the collection.
 * @method	static	ArrayIterator	getIterator()	Get an iterator for the items.
 * @method	static	bool	isEmpty()	Determine if the list of items is empty or not.
 * @method	static	int	count()	Get the number of items for the current page.
 * @method	static	bool	offsetExists(mixed  $key)	Determine if the given item exists.
 * @method	static	mixed	offsetGet(mixed  $key)	Get the item at the given offset.
 * @method	static	void	offsetSet(mixed  $key, mixed  $value)	Set the item at the given offset.
 * @method	static	void	offsetUnset(mixed  $key)	Unset the item at the given key.
 */
class Paginator extends Illuminate\Pagination\Paginator {}

/**
 * @method	static	void	connect()	Connect to the Redis database.
 * @method	static	mixed	command(string  $method, array   $parameters = array())	Run a command against the Redis database.
 * @method	static	string	buildCommand(string  $method, array   $parameters)	Build the Redis command syntax.
 * @method	static	mixed	parseResponse(string  $response)	Parse the Redis database response.
 * @method	static	string	fileRead(int     $bytes)	Read the specified number of bytes from the file resource.
 * @method	static	string	fileGet(int     $bytes)	Get the specified number of bytes from a file line.
 * @method	static	void	fileWrite(string  $commnad)	Write the given command to the file resource.
 * @method	static	resource	getConnection()	Get the Redis socket connection.
 */
class Redis extends Illuminate\Redis\Database {}

/**
 * @method	static	void	back(int    $status = 302, array  $headers = array())	Create a new redirect response to the previous location.
 * @method	static	void	refresh(int    $status = 302, array  $headers = array())	Create a new redirect response to the current URI.
 * @method	static	void	to(string  $path, int    $status = 302, array  $headers = array(), bool    $secure = null)	Create a new redirect response to the given path.
 * @method	static	void	secure(string  $path, int    $status = 302, array  $headers = array())	Create a new redirect response to the given HTTPS path.
 * @method	static	void	route(string  $route, array   $parameters = array(), int     $status = 302, array   $headers = array())	Create a new redirect response to a named route.
 * @method	static	void	action(string  $action, array   $parameters = array(), int    $status = 302, array  $headers = array())	Create a new redirect response to a controller action.
 * @method	static	void	getUrlGenerator()	Get the URL generator instance.
 * @method	static	void	setSession(Illuminate\Session\Store  $session)	Set the active session store.
 */
class Redirect extends Illuminate\Routing\Redirector {}

/**
 * @method	static	void	explode(Illuminate\Container  $container)	Create a new router instance.
 * @method	static	void	get(string  $pattern, mixed   $action)	Add a new route to the collection.
 * @method	static	void	post(string  $pattern, mixed   $action)	Add a new route to the collection.
 * @method	static	void	put(string  $pattern, mixed   $action)	Add a new route to the collection.
 * @method	static	void	patch(string  $pattern, mixed   $action)	Add a new route to the collection.
 * @method	static	void	delete(string  $pattern, mixed   $action)	Add a new route to the collection.
 * @method	static	void	match(string  $method, string  $pattern, mixed   $action)	Add a new route to the collection.
 * @method	static	void	any(string  $pattern, mixed   $action)	Add a new route to the collection.
 * @method	static	void	controllers(array  $controllers)	Register an array of controllers with wildcard routing.
 * @method	static	void	controller(string  $uri, string  $controller)	Route a controller to a URI with wildcard routing.
 * @method	static	void	resource(string  $resource, string  $controller, array   $options = array())	Route a resource to a controller.
 * @method	static	string	getResourceUri(string  $resource)	Get the base resource URI for a given resource.
 * @method	static	void	group(array    $attributes, Closure  $callback)	Create a route group with shared attributes.
 * @method	static	void	dispatch(Symfony\Component\HttpFoundation\Request  $request)	Get the response for a given request.
 * @method	static	void	before(Closure  $callback)	Register a "before" routing filter.
 * @method	static	void	after(Closure  $callback)	Register an "after" routing filter.
 * @method	static	void	close(Closure  $callback)	Register a "close" routing filter.
 * @method	static	void	finish(Closure  $callback)	Register a "finish" routing filters.
 * @method	static	void	addFilter(string   $name, Closure  $callback)	Register a new filter with the application.
 * @method	static	Closure	getFilter(string   $name)	Get a registered filter callback.
 * @method	static	void	matchFilter(string  $pattern, array  $names)	Tie a registered filter to a URI pattern.
 * @method	static	array	findPatternFilters(Illuminate\Foundation\Request  $request)	Find the patterned filters matching a request.
 * @method	static	mixed	callFinishFilter(Symfony\Component\HttpFoundation\Request   $request, Symfony\Component\HttpFoundation\Response  $response)	Call the "finish" global filter.
 * @method	static	void	pattern(string  $key, string  $pattern)	Set a global where pattern on all routes
 * @method	static	void	is_null(string  $key, string  $class)	Register a model binder for a wildcard.
 * @method	static	void	bind(string  $key, mixed   $binder)	Register a custom parameter binder.
 * @method	static	bool	hasBinder(string  $key)	Determine if a given key has a registered binder.
 * @method	static	mixed	performBinding(string  $key, mixed   $value, Illuminate\Routing\Route  $route)	Call a binder for a given wildcard.
 * @method	static	void	prepare(mixed  $value, Illuminate\Foundation\Request  $request)	Prepare the given value as a Response object.
 * @method	static	bool	currentRouteNamed(string  $name)	Determine if the current route has a given name.
 * @method	static	bool	currentRouteUses(string  $action)	Determine if the current route uses a given controller action.
 * @method	static	bool	filtersEnabled()	Determine if route filters are enabled.
 * @method	static	void	enableFilters()	Enable the running of filters.
 * @method	static	void	disableFilters()	Disable the runnning of all filters.
 * @method	static	void	getRoutes()	Retrieve the entire route collection.
 * @method	static	void	getRequest()	Get the current request being dispatched.
 * @method	static	void	getCurrentRoute()	Get the current route being executed.
 * @method	static	void	setCurrentRoute(Illuminate\Routing\Route  $route)	Set the current route on the router.
 * @method	static	array	getFilters()	Get the filters defined on the router.
 * @method	static	array	getGlobalFilters()	Get the global filters defined on the router.
 * @method	static	void	getInspector()	Get the controller inspector instance.
 * @method	static	void	setInspector(Illuminate\Routing\Controllers\Inspector  $inspector)	Set the controller inspector instance.
 * @method	static	void	getContainer()	Get the container used by the router.
 * @method	static	void	setContainer(Illuminate\Container\Container  $container)	Set the container instance on the router.
 */
class Route extends Illuminate\Routing\Router {}

/**
 * @method	static	string	to(string  $path, array   $parameters = array(), bool    $secure = null)	Generate a absolute URL to the given path.
 * @method	static	string	secure(string  $path, array  $parameters = array())	Generate a secure, absolute URL to the given path.
 * @method	static	string	asset(string  $path, bool    $secure = null)	Generate a URL to an application asset.
 * @method	static	string	secureAsset(string  $path)	Generate a URL to a secure asset.
 * @method	static	string	route(string  $name, array   $parameters = array(), bool    $absolute = true)	Get the URL to a named route.
 * @method	static	string	action(string  $action, array   $parameters = array(), bool    $absolute = true)	Get the URL to a controller action.
 * @method	static	bool	isValidUrl(string  $path)	Determine if the given path is a valid URL.
 * @method	static	void	getRequest()	Get the request instance.
 * @method	static	void	setRequest(Symfony\Component\HttpFoundation\Request  $request)	Set the current request instance.
 * @method	static	void	getGenerator()	Get the Symfony URL generator instance.
 * @method	static	void	setGenerator(Symfony\Component\Routing\Generator\UrlGenerator  $generator)	Get the Symfony URL generator instance.
 */
class URL extends Illuminate\Routing\UrlGenerator {}

/**
 * @method	static	void	beforeFilter(string  $filter, array   $options = array())	Register a new "before" filter on the controller.
 * @method	static	void	afterFilter(string  $filter, array   $options = array())	Register a new "after" filter on the controller.
 * @method	static	void	callAction(Illuminate\Container  $container, Illuminate\Routing\Router  $router, string  $method, array   $parameters)	Execute an action on the controller.
 * @method	static	array	getFilters()	Get the code registered filters.
 * @method	static	mixed	missingMethod(array   $parameters)	Handle calls to missing methods on the controller.
 */
class Controller extends Illuminate\Routing\Controllers\Controller {}

/**
 * @method	static	bool	has(string  $key, string  $locale = null)	Determine if a translation exists.
 * @method	static	string	get(string  $id, array   $parameters = array(), string  $locale = null)	Get the translation for a given key.
 * @method	static	string	choice(string  $id, int     $number, array   $parameters = array(), string  $locale = null)	Get a translation according to an integer value.
 * @method	static	string	trans(string  $id, array   $parameters = array(), string  $domain, string  $locale = null)	Get the translation for a given key.
 * @method	static	string	transChoice(string  $id, int     $number, array   $parameters = array(), string  $domain, string  $locale = null)	Get a translation according to an integer value.
 * @method	static	string	load(string  $group, string  $namespace, string  $locale)	Load the specified language group.
 * @method	static	void	addNamespace(string  $namespace, string  $hint)	Add a new namespace to the loader.
 * @method	static	string	getLocale()	Get the default locale being used.
 * @method	static	void	setLocale(string  $locale)	Set the default locale.
 * @method	static	void	getSymfonyTranslator()	Get the base Symfony translator instance.
 * @method	static	void	setSymfonyTranslator(Symfony\Translation\Translator  $trans)	Get the base Symfony translator instance.
 */
class Lang extends Illuminate\Translation\Translator {}

/**
 * @method	static	bool	passes()	Determine if the data passes the validation rules.
 * @method	static	bool	fails()	Determine if the data fails the validation rules.
 * @method	static	array	getExtensions()	Get the array of custom validator extensions.
 * @method	static	void	addExtensions(array  $extensions)	Register an array of custom validator extensions.
 * @method	static	void	addImplicitExtensions(array  $extensions)	Register an array of custom implicit validator extensions.
 * @method	static	void	addExtension(string   $rule, Closure  $extension)	Register a custom validator extension.
 * @method	static	void	addImplicitExtension(string   $rule, Closure  $extension)	Register a custom implicit validator extension.
 * @method	static	array	getData()	Get the data under validation.
 * @method	static	void	setData(array  $data)	Set the data under validation.
 * @method	static	array	getRules()	Get the validation rules.
 * @method	static	array	getFiles()	Get the files under validation.
 * @method	static	void	setFiles(array  $files)	Set the files under validation.
 * @method	static	void	getPresenceVerifier()	Get the Presence Verifier implementation.
 * @method	static	void	setPresenceVerifier(Illuminate\Validation\PresenceVerifierInterface  $presenceVerifier)	Set the Presence Verifier implementation.
 * @method	static	void	getTranslator()	Get the Translator implementation.
 * @method	static	void	setTranslator(Symfony\Component\Translation\TranslatorInterface  $translator)	Set the Translator implementation.
 * @method	static	void	messages()	Get the message container for the validator.
 * @method	static	void	errors()	An alternative more semantic shortcut to the message container.
 * @method	static	void	getMessageBag()	Get the messages for the instance.
 */
class Validator extends Illuminate\Validation\Validator {}

/**
 * @method	static	void	make(string  $view, array   $data = array())	Get a evaluated view contents for the given view.
 * @method	static	string	renderEach(string  $view, array   $data, string  $iterator, string  $empty = 'raw')	Get the rendered contents of a partial from a loop.
 * @method	static	void	share(string  $key, mixed   $value)	Add a piece of shared data to the environment.
 * @method	static	Closure	composer(array  $views, Closure  $callback)	Register a view composer event.
 * @method	static	void	callComposer(Illuminate\View\View  $view)	Call the composer for a given view.
 * @method	static	void	startSection(string  $section, string  $content='')	Start injecting content into a section.
 * @method	static	void	inject(string  $section, string  $content)	Inject inline content into a section.
 * @method	static	string	yieldSection()	Stop injecting content into a section and return its contents.
 * @method	static	string	stopSection()	Stop injecting content into a section.
 * @method	static	string	yieldContent(string  $section)	Get the string contents of a section.
 * @method	static	void	flushSections()	Flush all of the section contents.
 * @method	static	void	incrementRender()	Increment the rendering counter.
 * @method	static	void	decrementRender()	Decrement the rendering counter.
 * @method	static	bool	doneRendering()	Check if there are no active render operations.
 * @method	static	void	addLocation(string  $location)	Add a location to the array of view locations.
 * @method	static	void	addNamespace(string  $namespace, array  $hints)	Add a new namespace to the loader.
 * @method	static	void	addExtension(string   $extension, string   $engine, Closure  $resolver = null)	Register a valid view extension and its engine.
 * @method	static	void	getEngineResolver()	Get the engine resolver instance.
 * @method	static	void	getFinder()	Get the view finder instance.
 * @method	static	void	getDispatcher()	Get the event dispatcher instance.
 * @method	static	void	getContainer()	Get the IoC container instance.
 * @method	static	void	setContainer(Illuminate\Container  $container)	Set the IoC container instance.
 * @method	static	array	getShared()	Get all of the shared data for the environment.
 * @method	static	array	getSections()	Get the entire array of sections.
 */
class View extends Illuminate\View\Environment {}
