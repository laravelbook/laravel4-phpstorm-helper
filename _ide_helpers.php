<?php die("Access denied!");
/**
 * ---------------- DO NOT UPLOAD THIS FILE TO LIVE SERVER ------------------------
 * Laravel IDE Helper <http://LaravelBook.com>
 * Implements code completion for Laravel 4 in JetBrains PhpStorm and SublimeText 2
 * --------------------------------------------------------------------------------
 */

/**
 * @method    static void    abort(int $code, string $message, array   $headers)    Throw an HttpException with the given data.
 * @method    static void    after(Closure|string  $callback)    Register an "after" application filter.
 * @method    static void    alias(string $abstract, string $alias)    Alias a type to a shorter name.
 * @method    static void    before(Closure|string  $callback)    Register a "before" application filter.
 * @method    static void    bind(string $abstract, Closure|string|null $concrete, bool $shared)    Register a binding with the container.
 * @method    static bool    bindIf(string $abstract, Closure|string|null $concrete, bool $shared)    Register a binding if it hasn't already been registered.
 * @method    static void    bindInstallPaths(array $paths)    Bind the installation paths to the application.
 * @method    static void    boot()    Boot the application's service providers.
 * @method    static void    booted(mixed $callback)    Register a new "booted" listener.
 * @method    static bool    bound(string $abstract)    Determine if the given abstract type has been bound.
 * @method    static mixed    build(string $concrete, array $parameters)    Instantiate a concrete instance of the given type.
 * @method    static void    close(Closure|string  $callback)    Register a "close" application filter.
 * @method    static string    detectEnvironment(array|string  $environments)    Detect the application's current environment.
 * @method    static void    dispatch(Illuminate\Foundation\Request $request)    Handle the given request and get the response.
 * @method    static void    down(Closure $callback)    Register a maintenance mode event listener.
 * @method    static string    environment()    Get the current application environment.
 * @method    static void    error(Closure $callback)    Register an application error handler.
 * @method    static void    extend(string $abstract, Closure $closure)    "Extend" an abstract type in the container.
 * @method    static void    fatal(Closure $callback)    Register an error handler for fatal errors.
 * @method    static void    finish(Closure|string  $callback)    Register a "finish" application filter.
 * @method    static array    getBindings()    Get the container's bindings.
 * @method    static string    getBootstrapFile()    Get the application bootstrap file.
 * @method    static \Illuminate\Config\LoaderInterface    getConfigLoader()    Get the configuration loader instance.
 * @method    static array    getLoadedProviders()    Get the service providers that have been loaded.
 * @method    static \Illuminate\Foundation\ProviderRepository    getProviderRepository()    Get the service provider repository instance.
 * @method    static \Symfony\Component\HttpFoundation\Response    handle(Symfony\Component\HttpFoundation\Request $request, int $type, bool $catch)    Handle the given request and get the response.
 * @method    static void    instance(string $abstract, mixed $instance)    Register an existing instance as shared in the container.
 * @method    static bool    isDownForMaintenance()    Determine if the application is currently down for maintenance.
 * @method    static void    loadDeferredProviders()    Load and boot all of the remaining deferred providers.
 * @method    static mixed    make(string $abstract, array   $parameters)    Resolve the given type from the container.
 * @method    static void    makemissing(Closure $callback)    Register a 404 error handler.
 * @method    static mixed    offsetGet(string $key)    Get the value at a given offset.
 * @method    static void    offsetSet(string $key, mixed $value)    Set the value at a given offset.
 * @method    static void    offsetUnset(string $key)    Unset the value at a given offset.
 * @method    static \Illuminate\Http\Request    prepareRequest(Illuminate\Http\Request $request)    Prepare the request by injecting any services.
 * @method    static \Symfony\Component\HttpFoundation\Response    prepareResponse(mixed $value)    Prepare the given value as a Response object.
 * @method    static \Symfony\Component\HttpFoundation\RedirectResponse|null    redirectIfTrailingSlash()    Redirect the request if it has a trailing slash.
 * @method    static void    register(Illuminate\Support\ServiceProvider|string $provider, array $options)    Register a service provider with the application.
 * @method    static void    resolving(Closure $callback)    Register a new resolving callback.
 * @method    static void    run()    Handles the given request and delivers the response.
 * @method    static bool    runningInConsole()    Determine if we are running in the console.
 * @method    static bool    runningUnitTests()    Determine if we are running unit tests.
 * @method    static void    setDeferredServices(array  $services)    Set the application's deferred services.
 * @method    static void    setLocale(string $locale)    Set the current application locale.
 * @method    static void    setRequestForConsoleEnvironment()    Set the application request for the console environment.
 * @method    static \Closure    share(Closure $closure)    Wrap a Closure such that it is shared.
 * @method    static void    shutdown(callable $callback)    Register a "shutdown" callback.
 * @method    static void    singleton(string $abstract, Closure|string|null $concrete)    Register a shared binding in the container.
 * @method    static void    startExceptionHandling()    Start the exception handling for the request.
 */
class App extends Illuminate\Foundation\Application {
}

/**
 * @method    static void    call(string $command, array   $parameters, Symfony\Component\Console\Output\OutputInterface $output)    Run an Artisan console command by name.
 */
class Artisan extends Illuminate\Foundation\Artisan {
}

/**
 * @method    static bool    attempt(array $credentials, bool $remember, bool $login)    Attempt to authenticate a user using the given credentials.
 * @method    static void    attempting(mixed $callback)    Register an authentication attempt event listener.
 * @method    static bool    check()    Determine if the current user is authenticated.
 * @method    static \Illuminate\Cookie\CookieJar    getCookieJar()    Get the cookie creator instance used by the guard.
 * @method    static \Illuminate\Events\Dispatcher    getDispatcher()    Get the event dispatcher instance.
 * @method    static string    getName()    Get a unique identifier for the auth session value.
 * @method    static \Illuminate\Auth\UserProviderInterface    getProvider()    Get the user provider used by the guard.
 * @method    static array    getQueuedCookies()    Get the cookies queued by the guard.
 * @method    static string    getRecallerName()    Get the name of the cookie used to store the "recaller".
 * @method    static \Symfony\Component\HttpFoundation\Request    getRequest()    Get the current request instance.
 * @method    static \Illuminate\Session\Store    getSession()    Get the session store used by the guard.
 * @method    static \Illuminate\Auth\UserInterface|null    getUser()    Return the currently cached user of the application.
 * @method    static bool    guest()    Determine if the current user is a guest.
 * @method    static void    login(Illuminate\Auth\UserInterface $user, bool $remember)    Log a user into the application.
 * @method    static \Illuminate\Auth\UserInterface    loginUsingId(mixed $id, bool $remember)   Log the given user ID into the application.
 * @method    static void    logout()    Log the user out of the application.
 * @method    static bool    once(array $credentials)    Log a user into the application without sessions or cookies.$
 * @method    static \Symfony\Component\HttpFoundation\Response|null    onceBasic(string $field, \Symfony\Component\HttpFoundation\Request $request)    Perform a stateless HTTP Basic login attempt.
 * @method    static void    setCookieJar(Illuminate\CookieJar $cookie)    Set the cookie creator instance used by the guard.
 * @method    static Illuminate\Auth\Guard    setDispatcher(Illuminate\Events\Dispatcher)    Set the event dispatcher instance.
 * @method    static void    setUser(Illuminate\Auth\UserInterface $user)    Set the current user of the application.
 * @method    static \Illuminate\Auth\UserInterface|null    user()    Get the currently authenticated user.
 * @method    static bool    validate(array $credentials)    Validate a user's credentials.
 */
class Auth extends Illuminate\Auth\Guard {
}

/**
 * @method    static void    compile(string $path)   Compile the view at the given path.
 * @method    static string    compileString(string $value)    Compile the given Blade template contents.
 * @method    static string    createMatcher(string $function)    Get the regular expression for a generic Blade function.
 * @method    static string    createOpenMatcher(string $function)    Get the regular expression for a generic Blade function.
 * @method    static string    createPlainMatcher(string $function)    Create a plain Blade matcher.
 * @method    static void    extend(Closure $compiler)    Register a custom Blade compiler.
 * @method    static string    getCompiledPath(string $path)    Get the path to the compiled version of a view.
 * @method    static bool    isExpired(string $path)    Determine if the given view is expired.
 * @method    static void    setContentTags(string $openTag, string $closeTag, bool $escaped)    Sets the content tags used for the compiler.
 * @method    static void    setEscapedContentTags(string $openTag, string $closeTag)    Sets the escaped content tags used for the compiler.
 */
class Blade extends Illuminate\View\Compilers\BladeCompiler {
}

/**
 * @method    static void    decrement(string $key, mixed $value)    Decrement the value of an item in the cache.
 * @method    static void    flush()    Remove all items from the cache.
 * @method    static void    forever(string $key, mixed $value)    Store an item in the cache indefinitely.
 * @method    static void    forget(string $key)    Remove an item from the cache.
 * @method    static mixed    get(string $key, mixed $default)    Retrieve an item from the cache by key.
 * @method    static \Illuminate\Database\Connection    getConnection()    Get the underlying database connection.
 * @method    static string    getDirectory()    Get the working directory of the cache.
 * @method    static Illuminate\Encrypter    getEncrypter()    Get the encrypter instance.
 * @method    static Illuminate\Filesystem\Filesystem    getFilesystem()    Get the Filesystem instance.
 * @method    static \Memcached    getMemcached()    Get the underlying Memcached connection.
 * @method    static string    getPrefix()    Get the cache key prefix.
 * @method    static \Illuminate\Redis\Database    getRedis()    Get the Redis database instance.
 * @method    static void    increment(string $key, mixed $value)    Increment  the value of an item in the cache.
 * @method    static void    put(string $key, mixed $value, int $minutes)    Store an item in the cache for a given number of minutes.
 * @method    static \Illuminate\Cache\Section    section(string $name)    Begin executing a new section operation.
 */
class Cache extends Illuminate\Cache\Store {
}

/**
 * @method    static void    addNamespace(string $namespace, string $hint)    Add a new namespace to the loader.
 * @method    static void    afterLoading(string $namespace, Closure $callback)    Register an after load callback for a given namespace.
 * @method    static mixed    get(string $key, mixed $default)    Get the specified configuration value.
 * @method    static array    getAfterLoadCallbacks()    Get the after load callback array.
 * @method    static string    getEnvironment()    Get the current configuration environment.
 * @method    static array    getItems()    Get all of the configuration items.
 * @method    static \Illuminate\Config\LoaderInterface    getLoader()    Get the loader implementation.
 * @method    static array    getNamespaces()    Returns all registered namespaces with the config loader.
 * @method    static bool    has(string $key)    Determine if the given configuration value exists.
 * @method    static bool    hasGroup(string $key)    Determine if a configuration group exists.
 * @method    static bool    offsetExists(string $key)    Determine if the given configuration option exists.
 * @method    static bool    offsetGet(string $key)    Get a configuration option.
 * @method    static bool    offsetSet(string $key)    Set a configuration option.
 * @method    static bool    offsetUnset(string $key)    Unset a configuration option.
 * @method    static void    package(string $package, string $hint, string $namespace)    Register a package for cascading configuration.
 * @method    static array    parseKey(string $key)    Parse a key into namespace, group, and item.
 * @method    static void    set(string $key, mixed $value)    Set a given configuration value.
 * @method    static void    setLoader(Illuminate\Config\LoaderInterface $loader)    Set the loader implementation.
 * @method    static void    setParsedKey(string $key, array $parsed)    Set the parsed value of a key.
 */
class Config extends Illuminate\Config\Repository {
}

/**
 * @method    static void    afterFilter(string $filter, array   $options)    Register a new "after" filter on the controller.
 * @method    static void    beforeFilter(string $filter, array   $options)    Register a new "before" filter on the controller.
 * @method    static void    callAction(Illuminate\Container $container, Illuminate\Routing\Router $router, string $method, array   $parameters)    Execute an action on the controller.
 * @method    static array    getControllerFilters()    Get the code registered filters.
 * @method    static mixed    missingMethod(array $parameters)    Handle calls to missing methods on the controller.
 */
class Controller extends Illuminate\Routing\Controllers\Controller {
}

/**
 * @method    static \Symfony\Component\HttpFoundation\Cookie    forever(string $name, string $value, string $path, string $domain, bool $secure, bool $httpOnly)    Create a cookie that lasts "forever" (five years).
 * @method    static \Symfony\Component\HttpFoundation\Cookie    forget(string $name)    Expire the given cookie.
 * @method    static mixed    get(string $key, mixed $default)    Get the value of the given cookie.
 * @method    static \Illuminate\Encryption\Encrypter    getEncrypter()    Get the encrypter instance.
 * @method    static \Symfony\Component\HttpFoundation\Request    getRequest()    Get the request instance.
 * @method    static bool    has(string $key)    Determine if a cookie exists and is not null.
 * @method    static void    make(string $name, string $value, int $minutes)    Create a new cookie instance.
 * @method    static void    setDefaultPathAndDomain(string $path, string $domain)    Set the default path and domain for the jar.
 */
class Cookie extends Illuminate\Cookie\CookieJar {
}

/**
 * @method    static string    decrypt(string $value)    Decrypt the given value.
 * @method    static string    encrypt(string $value)    Encrypt the given value.
 * @method    static void    setCipher(string $cipher)    Set the encryption cipher.
 * @method    static void    setKey(string $key)    Set the encryption key.
 * @method    static void    setMode(string $mode)    Set the encryption mode.
 */
class Crypt extends Illuminate\Encryption\Encrypter {
}

/**
 * @method    static int    affectingStatement(string $query, array $bindings)    Run an SQL statement and get the number of rows affected.
 * @method    static int    delete(string $query, array   $bindings)    Run a delete statement against the database.
 * @method    static void    disableQueryLog()    Disable the query log on the connection.
 * @method    static void    enableQueryLog()    Enable the query log on the connection.
 * @method    static void    flushQueryLog()    Clear the query log.
 * @method    static \Illuminate\Cache\CacheManager    getCacheManager()    Get the cache manager instance.
 * @method    static mixed    getConfig(string $option)    Get an option from the configuration options.
 * @method    static string    getDatabaseName()    Get the name of the connected database.
 * @method    static Doctrine\DBAL\Schema\Column    getDoctrineColumn(string $table, string $column)    Get a Doctrine Schema Column instance.
 * @method    static \Doctrine\DBAL\Connection    getDoctrineConnection()    Get the Doctrine DBAL database connection instance.
 * @method    static \Doctrine\DBAL\Schema\AbstractSchemaManager    getDoctrineSchemaManager()    Get the Doctrine DBAL schema manager for the connection.
 * @method    static void    getEventDispatcher()    Get the event dispatcher used by the connection.
 * @method    static int    getFetchMode()    Get the default fetch mode for the connection.
 * @method    static string|null    getName()    Get the database connection name.
 * @method    static void    getPaginator()    Get the paginator environment instance.
 * @method    static PDO    getPdo()    Get the currently used PDO connection.
 * @method    static void    getPostProcessor()    Get the query post processor used by the connection.
 * @method    static \Illuminate\Database\Query\Grammars\Grammar    getQueryGrammar()    Get the query grammar used by the connection.
 * @method    static array    getQueryLog()    Get the connection query log.
 * @method    static void    getSchemaBuilder()    Get a schema builder instance for the connection.
 * @method    static void    getSchemaGrammar()    Get the schema grammar used by the connection.
 * @method    static string    getTablePrefix()    Get the table prefix for the connection.
 * @method    static bool    insert(string $query, array   $bindings)    Run an insert statement against the database.
 * @method    static void    listen(Closure $callback)    Register a database query listener with the connection.
 * @method    static void    logQuery(string $query, array $bindings, $time)    Log a query in the connection's query log.
 * @method    static array    prepareBindings(array  $bindings)    Prepare the query bindings for execution.
 * @method    static array    pretend(Closure $callback)    Execute the given callback in "dry run" mode.
 * @method    static bool    pretending()    Determine if the connection in a "dry run".
 * @method    static void    raw(mixed $value)    Get a new raw query expression.
 * @method    static mixed    selectOne(string $query, array   $bindings)    Run a select statement and return a single result.
 * @method    static void    setCacheManager(Illuminate\Cache\CacheManager|Closure $cache)    Set the cache manager instance on the connection.
 * @method    static string    setDatabaseName(string $database)    Set the name of the connected database.
 * @method    static void    setEventDispatcher(Illuminate\Events\Dispatcher)    Set the event dispatcher instance on the connection.
 * @method    static int    setFetchMode(int $fetchMode)    Set the default fetch mode for the connection.
 * @method    static void    setPaginator(Illuminate\Pagination\Environment|Closure  $paginator)    Set the pagination environment instance.
 * @method    static void    setPostProcessor(Illuminate\Database\Query\Processors\Processor)    Set the query post processor used by the connection.
 * @method    static void    setQueryGrammar(Illuminate\Database\Query\Grammars\Grammar)    Set the query grammar used by the connection.
 * @method    static void    setSchemaGrammar(Illuminate\Database\Schema\Grammars\Grammar)    Set the schema grammar used by the connection.
 * @method    static void    setTablePrefix(string $prefix)    Set the table prefix in use by the connection.
 * @method    static bool    statement(string $query, array $bindings)    Execute an SQL statement and return the boolean result.
 * @method    static void    table(string $table)    Begin a fluent query against a database table.
 * @method    static mixed    transaction(Closure $callback)    Execute a Closure within a transaction.
 * @method    static bool    unprepared(string $query)    Run a raw, unprepared query against the PDO connection.
 * @method    static int    update(string $query, array   $bindings)    Run an update statement against the database.
 * @method    static void    useDefaultPostProcessor()    Set the query post processor to the default implementation.
 * @method    static void    useDefaultQueryGrammar()    Set the query grammar to the default implementation.
 * @method    static void    useDefaultSchemaGrammar()    Set the schema grammar to the default implementation.
 * @method    static void    withTablePrefix(Illuminate\Database\Grammar $grammar)    Set the table prefix and return the grammar.
 */
class DB extends Illuminate\Database\Connection {
}

/**
 * @var    static    bool    exists    Indicates if the model exists.
 * @var    static    bool    incrementing    Indicates if the IDs are auto-incrementing.
 * @var    static    bool    snakeAttributes    Indicates whether attributes are snake cased on arrays.
 * @var    static    bool    timestamps    Indicates if the model should be timestamped.
 * @method    static \Illuminate\Database\Eloquent\Collection    all(array  $columns)    Get all of the models from the database.
 * @method    static array    attributesToArray()    Convert the model's attributes to an array.
 * @method    static \Illuminate\Database\Eloquent\Relations\BelongsTo    belongsTo(string $related, string $foreignKey)    Define an inverse one-to-one or many relationship.
 * @method    static \Illuminate\Database\Eloquent\Relations\BelongsToMany    belongsToMany(string $related, string $table, string $foreignKey, string $otherKey)    Define a many-to-many relationship.
 * @method    static \Illuminate\Database\Eloquent\Model    create(array  $attributes)    Save a new model and return the instance.
 * @method    static void    created(Closure|string $callback)    Register a created model event with the dispatcher.
 * @method    static void    creating(Closure|string $callback)    Register a creating model event with the dispatcher.
 * @method    static void    delete()    Delete the model from the database.
 * @method    static void    deleted(Closure|string $callback)    Register a deleted model event with the dispatcher.
 * @method    static void    deleting(Closure|string $callback)    Register a deleting model event with the dispatcher.
 * @method    static void    destroy(array|int $ids)    Destroy the models for the given IDs.
 * @method    static \Illuminate\Database\Eloquent\Model    fill(array  $attributes)    Fill the model with an array of attributes.
 * @method    static \lluminate\Database\Eloquent\Model    fillable(array  $fillable)    Set the fillable attributes for the model.
 * @method    static \Illuminate\Database\Eloquent\Model|Illuminate\Database\Eloquent\Collection    find(mixed $id, array  $columns)    Find a model by its primary key.
 * @method    static \Illuminate\Database\Eloquent\Model|Illuminate\Database\Eloquent\Collection    findOrFail(mixed $id, array  $columns)    Find a model by its primary key or throw an exception.
 * @method    static void    flushEventListeners()    Remove all of the event listeners for the model.
 * @method    static void    forceDelete()    Force a hard delete on a soft deleted model.
 * @method    static mixed    freshTimestamp()    Get a fresh timestamp for the model.
 * @method    static mixed    getAttribute(string $key)    Get an attribute from the model.
 * @method    static array    getAttributes()    Get all of the current attributes on the model.
 * @method    static \Illuminate\Database\Connection    getConnection()    Get the database connection for the model.
 * @method    static string    getConnectionName()    Get the current connection name for the model.
 * @method    static \Illuminate\Database\ConnectionResolverInterface    getConnectionResolver()    Get the connection resolver instance.
 * @method    static string    getCreatedAtColumn()    Get the name of the "created at" column.
 * @method    static array    getDates()    Get the attributes that should be converted to dates.
 * @method    static string    getDeletedAtColumn()    Get the name of the "deleted at" column.
 * @method    static array    getDirty()    Get the attributes that have been changed since last sync.
 * @method    static \Illuminate\Events\Dispatcher    getEventDispatcher()    Get the event dispatcher instance.
 * @method    static array    getFillable()    Get the fillable attributes for the model.
 * @method    static string    getForeignKey()    Get the default foreign key name for the model.
 * @method    static array    getHidden()    Get the hidden attributes for the model.
 * @method    static bool    getIncrementing()    Get the value indicating whether the IDs are incrementing.
 * @method    static mixed    getKey()    Get the value of the model's primary key.
 * @method    static string    getKeyName()    Get the primary key for the model.
 * @method    static array    getMutatedAttributes()    Get the mutated attributes for a given instance.
 * @method    static array    getObservableEvents()    Get the observable event names.
 * @method    static array    getOriginal(string|null  $key, mixed  $default)    Get the model's original attribute values.
 * @method    static int    getPerPage()    Get the number of models to return per page.
 * @method    static string    getQualifiedDeletedAtColumn()    Get the fully qualified "deleted at" column.
 * @method    static string    getQualifiedKeyName()    Get the table qualified key name.
 * @method    static mixed    getRelation(string $relation)    Get a specified relationship.
 * @method    static string    getTable()    Get the table associated with the model.
 * @method    static string    getTouchedRelations()    Get the relationships that are touched on save.
 * @method    static string    getUpdatedAtColumn()    Get the name of the "updated at" column.
 * @method    static \Illuminate\Database\Eloquent\Model    guard(array  $guarded)    Set the guarded attributes for the model.
 * @method    static bool    hasGetMutator(string $key)    Determine if a get mutator exists for an attribute.
 * @method    static \Illuminate\Database\Eloquent\Relations\HasMany    hasMany(string $related, string $foreignKey)    Define a one-to-many relationship.
 * @method    static \Illuminate\Database\Eloquent\Relations\HasOne    hasOne(string $related, string $foreignKey)    Define a one-to-one relationship.
 * @method    static bool    hasSetMutator(string $key)    Determine if a set mutator exists for an attribute.
 * @method    static bool    isDirty(string $attribute)    Determine if a given attribute is dirty.
 * @method    static bool    isFillable(string $key)    Determine if the given attribute may be mass assigned.
 * @method    static bool    isGuarded(string $key)    Determine if the given key is guarded.
 * @method    static bool    isSoftDeleting()    Determine if the model instance uses soft deletes.
 * @method    static string    joiningTable(string $related)    Get the joining table name for a many-to-many relation.
 * @method    static void    load(array|string $relations)    Eager load relations on the model.
 * @method    static \Illuminate\Database\Eloquent\Relations\MorphMany    morphMany(string $related, string $name, string $foreignKey)    Define a polymorphic one-to-many relationship.
 * @method    static \Illuminate\Database\Eloquent\Relations\MorphOne    morphOne(string $related, string $name, string $foreignKey)    Define a polymorphic one-to-one relationship.
 * @method    static \Illuminate\Database\Eloquent\Relations\BelongsTo    morphTo(string $name)    Define an polymorphic, inverse one-to-one or many relationship.
 * @method    static \Illuminate\Database\Eloquent\Collection    newCollection(array  $models)    Create a new Eloquent Collection instance.
 * @method    static \Illuminate\Database\Eloquent\Model    newExisting(array  $attributes)    Create a new model instance that is existing.
 * @method    static \Illuminate\Database\Eloquent\Model    newFromBuilder(array $attributes)    Create a new model instance that is existing.
 * @method    static Illuminate\Database\Eloquent\Model    newInstance(array  $attributes, bool $exists)    Create a new instance of the given model.
 * @method    static \Illuminate\Database\Eloquent\Builder    newQuery()    Get a new query builder for the model's table.
 * @method    static \Illuminate\Database\Eloquent\Builder    newQueryWithDeleted()    Get a new query builder that includes soft deletes.
 * @method    static void    observe(object $class)    Save the model to the database.
 * @method    static bool    offsetExists(mixed $offset)    Determine if the given attribute exists.
 * @method    static mixed    offsetGet(mixed $offset)    Get the value for a given offset.
 * @method    static void    offsetSet(mixed $offset, mixed $value)    Set the value for a given offset.
 * @method    static void    offsetUnset(mixed $offset)    Unset the value for a given offset.
 * @method    static \Illuminate\Database\Eloquent\Builder    on(string $connection)    Begin querying the model on a given connection.
 * @method    static \Illuminate\Database\Eloquent\Builder    onlyTrashed()    Get a new query builder that only includes soft deletes.
 * @method    static bool    push()    Save the model and all of its relationships.
 * @method    static bool    reguard()    Enable the mass assignment restrictions.
 * @method    static array    relationsToArray()    Get the model's relationships in array form.
 * @method    static \Illuminate\Database\Eloquent\Model    replicate()    Clone the model into a new, non-existing instance.
 * @method    static \Illuminate\Database\Connection    resolveConnection(string $connection)    Restore a soft-deleted model instance.
 * @method    static array    restore()    Get the model's relationships in array form.
 * @method    static bool    save()    Save the model to the database.
 * @method    static void    saved(Closure|string $callback)    Register a saved model event with the dispatcher.
 * @method    static void    saving(Closure|string $callback)    Register a saving model event with the dispatcher.
 * @method    static void    setAttribute(string $key, mixed $value)    Set a given attribute on the model.
 * @method    static void    setConnection(string $name)    Set the connection associated with the model.
 * @method    static void    setConnectionResolver(Illuminate\Database\ConnectionResolverInterface $resolver)    Set the connection resolver instance.
 * @method    static void    setCreatedAt(mixed $value)    Set the value of the "created at" attribute.
 * @method    static void    setEventDispatcher(Illuminate\Events\Dispatcher $dispatcher)    Set the event dispatcher instance.
 * @method    static void    setHidden(array  $hidden)    Set the hidden attributes for the model.
 * @method    static void    setIncrementing(bool $value)    Set whether IDs are incrementing.
 * @method    static void    setPerPage(int $perPage)    Set the number of models ot return per page.
 * @method    static void    setRawAttributes(array  $attributes, bool $sync)    Set the array of model attributes. No checking is done.
 * @method    static \Illuminate\Database\Eloquent\Model    setRelation(string $relation, mixed $value)    Set the specific relationship in the model.
 * @method    static \Illuminate\Database\Eloquent\Model   setRelations(array $relations)    Set the entire relations array on the model.
 * @method    static void    setSoftDeleting(bool $enabled)    Set the soft deleting property on the model.
 * @method    static void    setTable(string $table)    Set the table associated with the model.
 * @method    static void    setTouchedRelations(array $touches)    Set the relationships that are touched on save.
 * @method    static void    setUnguardState(bool $state)    Set "unguard" to a given state.
 * @method    static void    setUpdatedAt(mixed $value)    Set the value of the "updated at" attribute.
 * @method    static void    setVisible(array $visible)    Set the visible attributes for the model.
 * @method    static \Illuminate\Database\Eloquent\Model    syncOriginal()    Sync the original attributes with the current.
 * @method    static array    toArray()    Convert the model instance to an array.
 * @method    static string    toJson(int $options)    Convert the model instance to JSON.
 * @method    static bool    totallyGuarded()    Determine if the model is totally guarded.
 * @method    static bool    touch()    Update the model's update timestamp.
 * @method    static void    touchOwners()    Touch the owning relations of the model.
 * @method    static bool    touches(string $relation    Determine if the model touches a given relation.
 * @method    static bool    trashed()    Determine if the model instance has been soft-deleted.
 * @method    static void    unguard()    Disable all mass assignable restrictions.
 * @method    static void    unsetEventDispatcher()    Unset the event dispatcher for models.
 * @method    static mixed    update(array $attributes)    Update the model in the database.
 * @method    static void    updated(Closure|string $callback)()    Register an updated model event with the dispatcher.
 * @method    static void    unsetEventDispatcher()    Register an updating model event with the dispatcher.
 * @method    static bool    updating(Closure|string $callback)()    Determine if the model uses timestamps.
 * @method    static \Illuminate\Database\Eloquent\Builder    with(array  $relations)    Being querying a model with eager loading.
 * @method    static \Illuminate\Database\Eloquent\Builder    withTrashed()    Get a new query builder that includes soft deletes.
 */
class Eloquent extends Illuminate\Database\Eloquent\Model {
}

/**
 * @method    static \Illuminate\Events\Closure    createClassListener(mixed $listener)    Create a class based listener using the IoC container.
 * @method    static void    fire(string $event, mixed $payload, boolean $halt)    Fire an event and call the listeners.
 * @method    static void    flush(string $event)    Flush a set of queued events.
 * @method    static void    forget(string $event)    Remove a set of listeners from the dispatcher.
 * @method    static array    getListeners(string $eventName)    Get all of the listeners for a given event name.
 * @method    static bool    hasListeners(string $eventName)    Determine if a given event has listeners.
 * @method    static void    listen(string $event, mixed $listener, int $priority)    Register an event listener with the dispatcher.
 * @method    static void    makeListener(mixed $listener)    Register an event listener with the dispatcher.
 * @method    static void    queue(string $event, array $payload)    Register a queued event and payload.
 * @method    static void    subscribe(string $subscriber)    Register an event subscriber with the dispatcher.
 * @method    static bool    until(string $event, array $payload)    Fire an event until the first non-null response is returned.
 */
class Event extends Illuminate\Events\Event {
}

/**
 * @method    static array    allFiles(string $directory)    Get all of the files from the given directory (recursive).
 * @method    static int    append(string $path, string $data)    Append to a file.
 * @method    static void    cleanDirectory(string $directory)    Empty the specified directory of all files and folders.
 * @method    static void    copy(string $path, string $target)    Copy a file to a new location.
 * @method    static void    copyDirectory(string $directory, string $destination, int $options)    Copy a directory from one location to another.
 * @method    static bool    delete(string $path)    Delete the file at a given path.
 * @method    static void    deleteDirectory(string $directory, bool $preserve)    Recursively delete a directory.
 * @method    static array    directories(string $directory)    Get all of the directories within a given directory.
 * @method    static bool    exists(string $path)    Determine if a file exists.
 * @method    static string    extension(string $path)    Extract the file extension from a file path.
 * @method    static array    files(string $directory)    Get an array of all files in a directory.
 * @method    static string    get(string $path)    Get the contents of a file.
 * @method    static string    getRemote(string $path)    Get the contents of a remote file.
 * @method    static mixed    getRequire(string $path)    Get the returned value of a file.
 * @method    static array    glob(string $pattern, int $flags)    Find path names matching a given pattern.
 * @method    static bool    isDirectory(string $directory)    Determine if the given path is a directory.
 * @method    static bool    isFile(string $file)    Determine if the given path is a file.
 * @method    static bool    isWritable(string $path)    Determine if the given path is writable.
 * @method    static int    lastModified(string $path)    Get the file's last modification time.
 * @method    static bool    makeDirectory(string $path, int $mode, bool $recursive)    Create a directory.
 * @method    static void    move(string $path, string $target)    Move a file to a new location.
 * @method    static int    put(string $path, string $contents)    Write the contents of a file.
 * @method    static void    requireOnce(string $file)    Require the given file once.
 * @method    static int    size(string $path)    Get the file size of a given file.
 * @method    static string    type(string $path)    Get the file type of a given file.
 */
class File extends Illuminate\Filesystem\Filesystem {
}

/**
 * @method    static string    button(string $value, array $options)    Create a button element.
 * @method    static string    checkbox(string $name, mixed $value, bool $checked, array $options)    Create a checkbox input field.
 * @method    static string    close()    Close the current form.
 * @method    static string    email(string $name, string $value, array $options)    Create an e-mail input field.
 * @method    static string    file(string $name, array $options)    Create a file input field.
 * @method    static \Illuminate\Session\Store    getSessionStore()    Get the session store implementation.
 * @method    static string    getValueAttribute(string $name, string $value)    Get the value that should be assigned to the field.
 * @method    static string    hidden(string $name, string $value, array $options)   Create a hidden input field.
 * @method    static string    image(string $url, string $name, array $attributes)    Create a HTML image input element.
 * @method    static string    input(string $type, string $name, string $value, array $options)    Create a form input field.
 * @method    static string    label(string $name, string $value, array $options)    Create a form label element.
 * @method    static string    macro(string $name, callable $macro)    Register a custom form macro.
 * @method    static string    model($model, array $options = array())    Create a new model based form builder.
 * @method    static string    open(array $options = array())    Open up a new HTML form.
 * @method    static string    password(string $name, array $options)     Create a password input field.
 * @method    static string    radio(string $name, mixed $value, bool $checked, array $options)    Create a radio button input field.
 * @method    static string    reset(string $value, array $attributes)    Create a HTML reset input element.
 * @method    static string    select(string $name, array $list, string $selected, array $options)    Create a select box field.
 * @method    static \Illuminate\Html\FormBuilder    setSessionStore(\Illuminate\Session\Store $session)    Set the session store implementation.
 * @method    static string    submit(string $value, array $options)    Create a submit button element.
 * @method    static string    text(string $name, string $value, array $options)    Create a text input field.
 * @method    static string    textarea(string $name, string $value, array $options)    Create a textarea input field.
 * @method    static string    token()    Generate a hidden field with the current CSRF token.
 */
class Form extends Illuminate\Html\FormBuilder {
}

/**
 * @method    static bool    check(string $value, string $hashedValue, array $options)    Check the given plain value against a hash.
 * @method    static string    make(string $value, array $options)    Hash the given value.
 * @method    static bool    needsRehash(string $hashedValue, array $options)    Check if the given hash has been hashed using the given options.
 */
class Hash extends Illuminate\Hashing\BcryptHasher {
}

/**
 * @method    static string    attributes(array $attributes)    Build an HTML attribute string from an array.
 * @method    static string    decode(string $value)    Convert entities to HTML characters.
 * @method    static string    email(string $email)    Obfuscate an e-mail address to prevent spam-bots from sniffing it.
 * @method    static string    entities(string $value)    Convert an HTML string to entities.
 * @method    static string    image($url, $alt = null, $attributes = array())    Generate an HTML image element.
 * @method    static string    link(string $url, string $title, array $attributes, bool $secure)    Generate a HTML link.
 * @method    static string    linkAction(string $action, string $title, array $parameters, array $attributes)    Generate a HTML link to a controller action.
 * @method    static string    linkAsset(string $url, string $title, array $attributes, bool $secure)    Generate a HTML link to an asset.
 * @method    static string    linkRoute(string $name, string $title, array $parameters, array $attributes)    Generate a HTML link to a named route.
 * @method    static string    linkSecureAsset(string $url, string $title, array $attributes)    Generate a HTTPS HTML link to an asset.
 * @method    static string    macro(string $name, callable $macro)    Register a custom HTML macro.
 * @method    static string    mailto(string $email, string $title, array $attributes)    Generate a HTML link to an email address.
 * @method    static string    obfuscate(string $value)    Obfuscate a string to prevent spam-bots from sniffing it.
 * @method    static string    ol(array $list, array $attributes)    Generate an ordered list of items.
 * @method    static string    script(string $url, array $attributes = array())    Generate a link to a JavaScript file.
 * @method    static string    secureLink(string $url, string $title, array $attributes)    Generate a HTTPS HTML link.
 * @method    static string    style($url, $attributes = array())    Generate a link to a CSS file.
 * @method    static string    ul(array $list, array $attributes)    Generate an un-ordered list of items.
 */
class HTML extends Illuminate\Html\HtmlBuilder {
}

/**
 * @method    static bool    ajax()    Determine if the request is the result of an AJAX call.
 * @method    static array    all()    Get all of the input and files for the request.
 * @method    static string    cookie(string $key, mixed $default)    Retrieve a cookie from the request.
 * @method    static array    except(array  $keys)    Get all of the input except for a specified array of items.
 * @method    static \Symfony\Component\HttpFoundation\File\UploadedFile    file(string $key, mixed $default)    Retrieve a file from the request.
 * @method    static void    flash(string $filter, array  $keys)    Flash the input for the current request to the session.
 * @method    static void    flashExcept(dynamic  string)    Flash only some of the input to the session.
 * @method    static void    flashOnly(dynamic  string)    Flash only some of the input to the session.
 * @method    static void    flush()    Flush all of the old input from the session.
 * @method    static string    fullUrl()    Get the full URL for the request.
 * @method    static void    getSessionStore()    Get the Illuminate session store implementation.
 * @method    static bool    has(string|array  $key)    Determine if the request contains a given input item.
 * @method    static bool    hasFile(string $key)    Determine if the uploaded data contains a file.
 * @method    static bool    hasSessionStore()    Determine if the session store has been set.
 * @method    static string    header(string $key, mixed $default)    Retrieve a header from the request.
 * @method    static string    input(string $key, mixed $default)    Retrieve an input item from the request.
 * @method    static \Illuminate\Http\Request    instance()    Return the Request instance.
 * @method    static bool    is(string $pattern)    Determine if the current request URI matches a pattern.
 * @method    static bool    isJson()    Determine if the request is sending JSON.
 * @method    static mixed    json(string $key, mixed $default)    Get the JSON payload for the request.
 * @method    static void    merge(array  $input)    Merge new input into the current request's input array.
 * @method    static string    old(string $key, mixed $default)    Retrieve an old input item.
 * @method    static array    only(array  $keys)    Get a subset of the items from the input data.
 * @method    static string    path()    Get the current path info for the request.
 * @method    static string    query(string $key, mixed $default)    Retrieve a query string item from the request.
 * @method    static void    replace(array  $input)    Replace the input for the current request.
 * @method    static string    root()    Get the root URL for the application.
 * @method    static bool    secure()    Determine if the request is over HTTPS.
 * @method    static string    segment(string $index, mixed $default)    Get a segment from the URI (1 based index).
 * @method    static array    segments()    Get all of the segments for the request path.
 * @method    static string    server(string $key, mixed $default)    Retrieve a server variable from the request.
 * @method    static void    setSessionStore(Illuminate\Session\Store $session)    Set the Illuminate session store implementation.
 * @method    static string    url()    Get the URL (no query string) for the request.
 * @method    static string    wantsJson()    Determine if the current request is asking for JSON in return .
 */
class Input extends Illuminate\Http\Request {
}

/**
 * @method    static void    addNamespace(string $namespace, string $hint)    Add a new namespace to the loader.
 * @method    static string    choice(string $id, int $number, array   $parameters, string $locale)    Get a translation according to an integer value.
 * @method    static string    get(string $id, array   $parameters, string $locale)    Get the translation for a given key.
 * @method    static Illuminate\Translation\LoaderInterface    getLoader()    Get the language line loader implementation.
 * @method    static string    getLocale()    Get the default locale being used.
 * @method    static \Symfony\Component\Translation\MessageSelector    getSelector()    Get the message selector instance.
 * @method    static bool    has(string $key, string $locale)    Determine if a translation exists.
 * @method    static string    load(string $group, string $namespace, string $locale)    Load the specified language group.
 * @method    static array    parseKey(string $key)    Parse a key into namespace, group, and item.
 * @method    static void    setLocale(string $locale)    Set the default locale.
 * @method    static void    setParsedKey(string $key, array $parsed)    Set the parsed value of a key.
 * @method    static void    setSelector(Symfony\Component\Translation\MessageSelector $selector)    Set the message selector instance.
 * @method    static string    trans(string $id, array $parameters, string $domain, string $locale)    Get the translation for a given key.
 * @method    static string    transChoice(string $id, int $number, array $parameters, string $domain, string $locale)    Get a translation according to an integer value.
 */
class Lang extends Illuminate\Translation\Translator {
}

/**
 * @method    static \Illuminate\Events\Dispatcher    getEventDispatcher()    Get the underlying Monolog instance.
 * @method    static void    getMonolog()    Get the underlying Monolog instance.
 * @method    static void    listen(Closure $callback)    Register a new callback handler for when a log event is triggered.
 * @method    static void    setEventDispatcher(Illuminate\Events\Dispatcher $dispatcher)    Set the event dispatcher instance.
 * @method    static void    useDailyFiles(string $path, int $days, string $level)    Register a daily file log handler.
 * @method    static void    useFiles(string $path, string $level)    Register a file log handler.
 */
class Log extends Illuminate\Log\Writer {
}

/**
 * @method    static void    alwaysFrom(string $address, string $name)    Set the global from address and name.
 * @method    static \Swift_Mailer    getSwiftMailer()    Get the Swift Mailer instance.
 * @method    static \Illuminate\View\Environment    getViewEnvironment()    Get the view environment instance.
 * @method    static void    handleQueuedMessage(Illuminate\Queue\Jobs\Job $job, array $data)    Handle a queued e-mail message job.
 * @method    static void    later(int $delay, string|array $view, array $data, Closure|string $callback, string $queue)    Queue a new e-mail message for sending after (n) seconds.
 * @method    static void    laterOn(string $queue, int $delay, string|array $view, array $data, Closure|string $callback)    Queue a new e-mail message for sending after (n) seconds on the given queue.
 * @method    static void    plain(string $view, array $data, mixed $callback)    Send a new message when only a plain part.
 * @method    static void    pretend(bool $value)    Tell the mailer to not really send messages.
 * @method    static void    queue(string|array $view, array $data, Closure|string $callback, string $queue)    Queue a new e-mail message for sending.
 * @method    static void    queueOn(string $queue, string|array $view, array $data, Closure|string $callback)    Queue a new e-mail message for sending on the given queue.
 * @method    static void    send(string|array $view, array $data, Closure|string $callback)    Send a new message using a view.
 * @method    static void    setContainer(Illuminate\Container $container)    Set the IoC container instance.
 * @method    static \Illuminate\Mail\Mailer    setLogger(Illuminate\Log\Writer $logger)    Set the log writer instance.
 * @method    static \Illuminate\Mail\Mailer    setQueue(Illuminate\Queue\QueueManager $queue)    Set the queue manager instance.
 * @method    static void    setSwiftMailer(Swift_Mailer $swift)    Set the Swift Mailer instance.
 */
class Mail extends Illuminate\Mail\Mailer {
}

/**
 * @method    static int    getCurrentPage()    Get the current page for the request.
 * @method    static string    getCurrentUrl()    Get the root URL for the request.
 * @method    static string    getLocale()    Get the locale of the paginator.
 * @method    static string    getPageName()    Get the input page parameter name used by the paginator.
 * @method    static \Illuminate\View\View    getPaginationView(Illuminate\Pagination\Paginator $paginator)    Get the pagination view.
 * @method    static \Symfony\Component\HttpFoundation\Request    getRequest()    Get the active request instance.
 * @method    static \Symfony\Component\Translation\TranslatorInterface    getTranslator()    Get the translator instance.
 * @method    static \Illuminate\View\Environment    getViewDriver()    Get the current view driver.
 * @method    static string    getViewName()    Get the name of the pagination view.
 * @method    static \Illuminate\Pagination\Paginator    make(array $items, int $total, int $perPage)    Get a new paginator instance.
 * @method    static void    setBaseUrl    Set the base URL in use by the paginator.
 * @method    static void    setCurrentPage(int $number)    Set the number of the current page.
 * @method    static void    setLocale(string $locale)    Set the locale of the paginator.
 * @method    static void    setPageName(string $pageName)    Set the input page parameter name used by the paginator.
 * @method    static void    etRequest(Illuminate\Http\Request $request)    Set the active request instance.
 * @method    static void    setViewDriver(\Illuminate\View\Environment $view)    Set the current view driver.
 * @method    static void    setViewName(string $viewName)    Set the name of the pagination view.
 */
class Paginator extends Illuminate\Pagination\Paginator {
}

/**
 * @method    static \Illuminate\Auth\Reminders\RemindableInterface    getUser(array $credentials)    Get the user for the given credentials.
 * @method    static \Illuminate\Http\RedirectResponse    remind(array $credentials, \Closure $callback)    Send a password reminder to a user.
 * @method    static mixed    reset(array $credentials, Closure $callback)    Reset the password for the given token.
 * @method    static void    sendReminder(\Illuminate\Auth\Reminders\RemindableInterface $user, string $token, \Closure $callback)    Send the password reminder e-mail.
 */
class Password extends Illuminate\Auth\Reminders\PasswordBroker {
}

/**
 * @method    static void    addConnector(string $driver, \Closure $resolver)    connection
 * @method    static \Illuminate\Queue\QueueInterface    connection(string $name)    Resolve a queue connection instance.
 */
class Queue extends Illuminate\Queue\QueueManager {
}

/**
 * @method    static \Illuminate\Http\RedirectResponse    action(string $action, array $parameters, int $status, array $headers)    Create a new redirect response to a controller action.
 * @method    static \Illuminate\Http\RedirectResponse    back(int $status, array $headers)    Create a new redirect response to the previous location.
 * @method    static \Illuminate\Routing\UrlGenerator    getUrlGenerator()    Get the URL generator instance.
 * @method    static \Illuminate\Http\RedirectResponse    guest(string $path, int $status, array $headers, bool $secure)    Create a new redirect response, while putting the current URL in the session.
 * @method    static \Illuminate\Http\RedirectResponse    home(int $status)    Create a new redirect response to the "home" route.
 * @method    static \Illuminate\Http\RedirectResponse    intended(string $default, int $status, array $headers, bool $secure)    Create a new redirect response to the previously intended location.
 * @method    static \Illuminate\Http\RedirectResponse    refresh(int $status, array $headers)    Create a new redirect response to the current URI.
 * @method    static \Illuminate\Http\RedirectResponse    route(string $route, array $parameters, int $status, array $headers)    Create a new redirect response to a named route.
 * @method    static \Illuminate\Http\RedirectResponse    secure(string $path, int $status, array $headers)    Create a new redirect response to the given HTTPS path.
 * @method    static void    setSession(\Illuminate\Session\Store $session)    Set the active session store.
 * @method    static \Illuminate\Http\RedirectResponse    to($path, $status = 302, $headers = array(), $secure = null)    Create a new redirect response to the given path.
 */
class Redirect extends Illuminate\Routing\Redirector {
}

/**
 * @method    static mixed    command(string $method, array $parameters)    Run a command against the Redis database.
 * @method    static \Predis\Connection\SingleConnectionInterface    connection(string $name)    Get a specific Redis connection instance.
 */
class Redis extends Illuminate\Redis\Database {
}

/**
 * @method    static bool    ajax()    Determine if the request is the result of an AJAX call.
 * @method    static array    all()    Get all of the input and files for the request.
 * @method    static string    cookie(string $key, mixed $default)    Retrieve a cookie from the request.
 * @method    static array    except(array  $keys)    Get all of the input except for a specified array of items.
 * @method    static void    file(string $key, mixed $default)    Retrieve a file from the request.
 * @method    static void    flash(string $filter, array  $keys)    Flash the input for the current request to the session.
 * @method    static void    flashExcept(Illuminate\Http\dynamic  string)    Flash only some of the input to the session.
 * @method    static void    flashOnly(Illuminate\Http\dynamic  string)    Flash only some of the input to the session.
 * @method    static void    flush()    Flush all of the old input from the session.
 * @method    static string    fullUrl()    Get the full URL for the request.
 * @method    static \Illuminate\Session\Store    getSessionStore()    Get the Illuminate session store implementation.
 * @method    static bool    has(string|array  $key)    Determine if the request contains a given input item.
 * @method    static bool    hasFile(string $key)    Determine if the uploaded data contains a file.
 * @method    static bool    hasSessionStore()    Determine if the session store has been set.
 * @method    static string    header(string $key, mixed $default)    Retrieve a header from the request.
 * @method    static string    input(string $key, mixed $default)    Retrieve an input item from the request.
 * @method    static \Illuminate\Http\Request    instance()    Return the Request instance.
 * @method    static bool    is(string $pattern)    Determine if the current request URI matches a pattern.
 * @method    static bool    isJson()    Determine if the request is sending JSON.
 * @method    static object    json()    Get the JSON payload for the request.
 * @method    static void    merge(array  $input)    Merge new input into the current request's input array.
 * @method    static string    old(string $key, mixed $default)    Retrieve an old input item.
 * @method    static array    only(array  $keys)    Get a subset of the items from the input data.
 * @method    static string    path()    Get the current path info for the request.
 * @method    static string    query(string $key, mixed $default)    Retrieve a query string item from the request.
 * @method    static void    replace(array  $input)    Replace the input for the current request.
 * @method    static string    root()    Get the root URL for the application.
 * @method    static string    url()    Get the URL (no query string) for the request.
 * @method    static bool    secure()    Determine if the request is over HTTPS.
 * @method    static string    segment(string $index, mixed $default)    Get a segment from the URI (1 based index).
 * @method    static array    segments()    Get all of the segments for the request path.
 * @method    static string    server(string $key, mixed $default)    Retrieve a server variable from the request.
 * @method    static void    setSessionStore(Illuminate\Session\Store $session)    Set the Illuminate session store implementation.
 * @method    static string    url()    Get the URL (no query string) for the request.
 * @method    static bool    wantsJson()    Determine if the current request is asking for JSON in return .
 */
class Request extends Illuminate\Http\Request {
}

/**
 * @var    static    mixed    original    The original content of the response.
 * @method    static mixed    getOriginalContent()    Get the original response content.
 * @method    static \Illuminate\Http\Response    header(string $key, string $value, bool $replace)    Set a header on the Response.
 * @method    static void    setContent(mixed $content)    Set the content on the response.
 * @method    static \Illuminate\Http\Response    withCookie(Symfony\Component\HttpFoundation\Cookie $cookie)    Add a cookie to the response.
 */
class Response extends Illuminate\Http\Response {
}

/**
 * @method    static void    after(Closure|string  $callback)    Register an "after" routing filter.
 * @method    static \Illuminate\Routing\Route    any(string $pattern, mixed $action)    Add a new route to the collection.
 * @method    static void    before(Closure|string  $callback)    Register a "before" routing filter.
 * @method    static void    bind(string $key, mixed $binder)    Register a custom parameter binder.
 * @method    static mixed    callCloseFilter(Symfony\Component\HttpFoundation\Request $request, Symfony\Component\HttpFoundation\Response $response)    Call the "close" global filter.
 * @method    static mixed    callFinishFilter(Symfony\Component\HttpFoundation\Request $request, Symfony\Component\HttpFoundation\Response $response)    Call the "finish" global filter.
 * @method    static void    close(Closure|string  $callback)    Register a "close" routing filter.
 * @method    static \Illuminate\Routing\Route    controller(string $controller, string $uri)    Route a controller to a URI with wildcard routing.
 * @method    static void    controllers(array  $controllers)    Register an array of controllers with wildcard routing.
 * @method    static string|null    currentRouteAction()    Get the current route action.
 * @method    static string|null    currentRouteName()    Get the current route name.
 * @method    static bool    currentRouteNamed(string $name)    Determine if the current route has a given name.
 * @method    static bool    currentRouteUses(string $action)    Determine if the current route uses a given controller action.
 * @method    static \Illuminate\Routing\Route    delete(string $pattern, mixed $action)    Add a new route to the collection.
 * @method    static void    disableFilters()    Disable the runnning of all filters.
 * @method    static \Symfony\Component\HttpFoundation\Response    dispatch(Symfony\Component\HttpFoundation\Request $request)    Get the response for a given request.
 * @method    static void    enableFilters()    Enable the running of filters.
 * @method    static void    filter(string $name, Closure|string $callback)    Register a new filter with the application.
 * @method    static bool    filtersEnabled()    Determine if route filters are enabled.
 * @method    static array    findPatternFilters(Illuminate\Foundation\Request $request)    Find the patterned filters matching a request.
 * @method    static void    finish(Closure|string  $callback)    Register a "finish" routing filters.
 * @method    static \Illuminate\Routing\Route    get(string $pattern, mixed $action)    Add a new route to the collection.
 * @method    static \Illuminate\Container\Container    getContainer()    Get the container used by the router.
 * @method    static \lluminate\Routing\Route    getCurrentRoute()    Get the current route being executed.
 * @method    static Closure    getFilter(string $name)    Get a registered filter callback.
 * @method    static array    getFilters()    Get the filters defined on the router.
 * @method    static array    getGlobalFilters()    Get the global filters defined on the router.
 * @method    static Illuminate\Routing\Controllers\Inspector    getInspector()    Get the controller inspector instance.
 * @method    static \Symfony\Component\HttpFoundation\Request    getRequest()    Get the current request being dispatched.
 * @method    static string    getResourceUri(string $resource)    Get the base resource URI for a given resource.
 * @method    static string    getResourceWildcard(string $value)    Format a resource wildcard parameter.
 * @method    static \Symfony\Component\Routing\RouteCollection    getRoutes()    Retrieve the entire route collection.
 * @method    static void    group(array $attributes, Closure $callback)    Create a route group with shared attributes.
 * @method    static bool    hasBinder(string $key)    Determine if a given key has a registered binder.
 * @method    static \Illuminate\Routing\Route    match(string $method, string $pattern, mixed $action)    Add a new route to the collection.
 * @method    static void    post(string $pattern, mixed $action)    Add a new route to the collection.
 * @method    static void    put(string $pattern, mixed $action)    Add a new route to the collection.
 * @method    static void    patch(string $pattern, mixed $action)    Add a new route to the collection.
 * @method    static void    resource(string $resource, string $controller, array   $options)    Route a resource to a controller.
 * @method    static void    group(array    $attributes, Closure $callback)    Create a route group with shared attributes.
 * @method    static void   model(string $key, string $class, Closure $callback)    Register a model binder for a wildcard.
 * @method    static \Illuminate\Routing\Route   options(string $pattern, mixed $action)    Add a new route to the collection.
 * @method    static \Illuminate\Routing\Route   patch(string $pattern, mixed $action)    Add a new route to the collection.
 * @method    static void    pattern(string $key, string $pattern)    Set a global where pattern on all routes
 * @method    static mixed    performBinding(string $key, mixed $value, Illuminate\Routing\Route $route)    Call a binder for a given wildcard.
 * @method    static \Illuminate\Routing\Route    post(string $pattern, mixed $action)    Add a new route to the collection.
 * @method    static \Symfony\Component\HttpFoundation\Response    prepare(mixed $value, Symfony\Component\HttpFoundation\Request $request)    Prepare the given value as a Response object.
 * @method    static \Illuminate\Routing\Route    put(string $pattern, mixed $action)    Add a new route to the collection.
 * @method    static void    resource(string $resource, string $controller, array $options)    Route a resource to a controller.
 * @method    static void    setContainer(Illuminate\Container $container)    Set the container instance on the router.
 * @method    static void    setCurrentRoute(Illuminate\Routing\Route $route)    Set the current route on the router.
 * @method    static void    setInspector(Illuminate\Routing\Controllers\Inspector $inspector)    Set the controller inspector instance.
 * @method    static void    when(string $pattern, string|array $names, array|null $methods)    Tie a registered filter to a URI pattern.
 */
class Route extends Illuminate\Routing\Router {
}

/**
 * @method    static \Illuminate\Database\Schema\Blueprint    create(string $table, Closure $callback)    Create a new table on the schema.
 * @method    static \Illuminate\Database\Schema\Blueprint    drop(string $table)    Drop a table from the schema.
 * @method    static \Illuminate\Database\Schema\Blueprint    dropIfExists(string $table)    Drop a table from the schema if it exists.
 * @method    static \Illuminate\Database\Connection    getConnection()    Get the database connection instance.
 * @method    static bool    hasColumn(string $table, string $column)    Determine if the given table has a given column.
 * @method    static bool    hasTable(string $table)    Determine if the given table exists.
 * @method    static \Illuminate\Database\Schema\Blueprint    rename(string $from, string $to)    Rename a table on the schema.
 * @method    static \Illuminate\Database\Schema\Builder    setConnection(Illuminate\Database\Connection)    Set the database connection instance.
 * @method    static \Illuminate\Database\Schema\Blueprint    table(string $table, Closure $callback)    Modify a table on the schema.
 */
class Schema extends Illuminate\Database\Schema\Builder {
}

/**
 * @method    static void    call(string $class)    Seed the given connection from the given path.
 * @method    static void    run()    Run the database seeds.
 * @method    static void    setCommand(Illuminate\Console\Command $command)    Set the console command instance.
 * @method    static void    setContainer(Illuminate\Container\Container $container)    Set the IoC container instance..
 */
class Seeder {
}

/**
 * @method    static void    flash(string $key, mixed $value)    Flash a key / value pair to the session.
 * @method    static void    flashInput(array $value)    Flash an input array to the session.
 * @method    static void    flush()    Remove all of the items from the session.
 * @method    static void    forget(string $key)    Remove an item from the session.
 * @method    static mixed    get($name, $default = null)     @inheritdoc
 * @method    static mixed    getOldInput($key = null, $default = null)   Get the requested item from the flashed input array.
 * @method    static string    getToken()    Get the CSRF token value.
 * @method    static bool    has($name)    inheritdoc
 * @method    static bool    hasOldInput(string $key)    hasOldInput(string $key)    Determine if the session contains old input.
 * @method    static void    keep(array|Illuminate\Session\dynamic $keys = null)    Reflash a subset of the current flash data.
 * @method    static void    push(string $key, mixed $value)    Reflash a subset of the current flash data.
 * @method    static void    put(string $key, mixed $value)    Put a key / value pair in the session.
 * @method    static void    reflash()    Reflash all of the session flash data.
 * @method    static void    regenerate()    Generate a new session identifier.
 * @method    static void    save()    inheritdoc
 * @method    static void    start()    inheritdoc
 * @method    static string    token()    Get the CSRF token value.
 */
class Session extends Illuminate\Session\Store {
}

/**
 * @method    static string    action(string $action, mixed $parameters, bool $absolute)    Get the URL to a controller action.
 * @method    static string    asset(string $path, bool $secure)    Generate a URL to an application asset.
 * @method    static string    current()    Get the current URL for the request.
 * @method    static string    full()    Get the full URL for the current request.
 * @method    static \Symfony\Component\Routing\Generator\UrlGenerator    getGenerator()    Get the Symfony URL generator instance.
 * @method    static \Symfony\Component\HttpFoundation\Request    getRequest()    Get the request instance.
 * @method    static bool    isValidUrl(string $path)    Determine if the given path is a valid URL.
 * @method    static string    previous()    Get the URL for the previous request.
 * @method    static string    route(string $name, mixed $parameters, bool $absolute)    Get the URL to a named route.
 * @method    static string    secure(string $path)    Generate a secure, absolute URL to the given path.
 * @method    static string    secureAsset(string $path)    Generate a URL to a secure asset.
 * @method    static void    setGenerator(Symfony\Component\Routing\Generator\UrlGenerator $generator)    Get the Symfony URL generator instance.
 * @method    static void    setRequest(Symfony\Component\HttpFoundation\Request $request)    Set the current request instance.
 * @method    static string    to(string $path, array   $parameters, bool $secure)    Generate a absolute URL to the given path.
 */
class URL extends Illuminate\Routing\UrlGenerator {
}


/**
 * @method    static void    addExtension(string $rule, Closure $extension)    Register a custom validator extension.
 * @method    static void    addExtensions(array  $extensions)    Register an array of custom validator extensions.
 * @method    static void    addImplicitExtension(string $rule, Closure $extension)    Register a custom implicit validator extension.
 * @method    static void    addImplicitExtensions(array  $extensions)   Register an array of custom implicit validator extensions.
 * @method    static \Illuminate\Support\MessageBag    errors()    An alternative more semantic shortcut to the message container.
 * @method    static array    failed()    Get the failed validation rules.
 * @method    static bool    fails()    Determine if the data fails the validation rules.
 * @method    static array    getCustomMessages()    Get the custom messages for the validator.
 * @method    static array    getData()    Get the data under validation.
 * @method    static array    getExtensions()    Get the array of custom validator extensions.
 * @method    static array    getFiles()    Get the files under validation.
 * @method    static \Illuminate\Support\MessageBag    getMessageBag()    Get the messages for the instance.
 * @method    static \Illuminate\Validation\PresenceVerifierInterface    getPresenceVerifier()    Get the Presence Verifier implementation.
 * @method    static array    getRules()    Get the validation rules.
 * @method    static \Symfony\Component\Translation\TranslatorInterface    getTranslator()    Get the Translator implementation.
 * @method    static \Illuminate\Support\MessageBag    messages()    Get the message container for the validator.
 * @method    static bool    passes()    Determine if the data passes the validation rules.
 * @method    static \Illuminate\Validation\Validator    setAttributeNames(array $attributes)    Set the custom attributes on the validator.
 * @method    static void    setContainer(Illuminate\Container\Container $container)    Set the IoC container instance.
 * @method    static void    setCustomMessages(array $messages))    Set the custom messages for the validator
 * @method    static void    setData(array  $data)    Set the data under validation.
 * @method    static \Illuminate\Validation\Validator    setFiles(array  $files)    Set the files under validation.
 * @method    static void    setPresenceVerifier(Illuminate\Validation\PresenceVerifierInterface $presenceVerifier)    Set the Presence Verifier implementation.
 * @method    static void    setTranslator(Symfony\Component\Translation\TranslatorInterface $translator)    Set the Translator implementation.
 */
class Validator extends Illuminate\Validation\Factory {
}

/**
 * @method    static void    addExtension(string $extension, string $engine, Closure $resolver)    Register a valid view extension and its engine.
 * @method    static void    addLocation(string $location)    Add a location to the array of view locations.
 * @method    static void    addNamespace(string $namespace, string|array $hints)    Add a new namespace to the loader.
 * @method    static void    callComposer(Illuminate\View\View $view)    Call the composer for a given view.
 * @method    static \Closure    composer(string $view, Closure|string  $callback)    Register a view composer event.
 * @method    static void    decrementRender()    Decrement the rendering counter.
 * @method    static bool    doneRendering()    Check if there are no active render operations.
 * @method    static bool    exists(string $view)    Determine if a given view exists.
 * @method    static void    flushSections()    Flush all of the section contents.
 * @method    static \Illuminate\Container\Container    getContainer()    Get the IoC container instance.
 * @method    static \Illuminate\Events\Dispatcher    getDispatcher()    Get the event dispatcher instance.
 * @method    static \Illuminate\View\Engines\EngineResolver    getEngineResolver()    Get the engine resolver instance.
 * @method    static array    getExtensions()    Get the extension to engine bindings.
 * @method    static \Illuminate\View\ViewFinderInterface    getFinder()    Get the view finder instance.
 * @method    static array    getNames()    Get all of the registered named views in environment.
 * @method    static array    getSections()    Get the entire array of sections.
 * @method    static array    getShared()    Get all of the shared data for the environment.
 * @method    static void    incrementRender()    Increment the rendering counter.
 * @method    static void    inject(string $section, string $content)    Inject inline content into a section.
 * @method    static void    make(string $view, array   $data = array())    Get a evaluated view contents for the given view.
 * @method    static void    name(string $view, string $name)    Register a named view.
 * @method    static Illuminate\View\View    of(string $view, mixed $data)    Get a evaluated view contents for a named view.
 * @method    static string    renderEach(string $view, array $data, string $iterator, string $empty)    Get the rendered contents of a partial from a loop.
 * @method    static void    setContainer(Illuminate\Container\Container $container)    Set the IoC container instance.
 * @method    static void    share(string $key, mixed $value)    Add a piece of shared data to the environment.
 * @method    static void    startSection(string $section, string $content)    Start injecting content into a section.
 * @method    static string    stopSection()    Stop injecting content into a section.
 * @method    static string    yieldContent(string $section)    Get the string contents of a section.
 * @method    static string    yieldSection()    Stop injecting content into a section and return its contents.
 */
class View extends Illuminate\View\Environment {
}

/**
 * @method    static \Cartalyst\Sentry\Users\UserInterface    authenticate(array $credentials, $remember)    Attempts to authenticate the given user according to the passed credentials.
 * @method    static \Cartalyst\Sentry\Users\UserInterface    authenticateAndRemember(array $credentials)    Alias for authenticating with the remember flag checked.
 * @method    static bool     check()    Check to see if the user is logged in and activated.
 * @method    static \Cartalyst\Sentry\Users\UserInterface    getUser()    Returns the current user being used by Sentry, if any.
 * @method    static \Cartalyst\Sentry\Cookies\CookieInterface     getCookie()    Gets the cookie driver for Sentry.
 * @method    static \Cartalyst\Sentry\Groups\ProviderInterface     getGroupProvider()    Gets the group provider for Sentry.
 * @method    static string     getIpAddress()    Gets the IP address Sentry is bound to.
 * @method    static \Cartalyst\Sentry\Sessions\SessionInterface    getSession()    Gets the session driver for Sentry.
 * @method    static \Cartalyst\Sentry\Throttling\ProviderInterface     getThrottleProvider()    Gets the throttle provider for Sentry.
 * @method    static \Cartalyst\Sentry\Users\ProviderInterface     getUserProvider()    Gets the user provider for Sentry.
 * @method    static void    login(UserInterface $user, $remember)    Logs in the given user and sets properties in the session.
 * @method    static void    loginAndRemember(UserInterface $user)    Alias for logging in and remembering.
 * @method    static void    logout()    Logs the current user out.
 * @method    static \Cartalyst\Sentry\Users\UserInterface    register(array $credentials, $activate)    Registers a user by giving the required credentials and an optional flag for whether to activate the user.
 * @method    static void     setCookie(Cartalyst\Sentry\Cookies\CookieInterface $cookie)    Sets the cookie driver for Sentry.
 * @method    static void     setGroupProvider(Cartalyst\Sentry\Groups\ProviderInterface $groupProvider)    Sets the group provider for Sentry.
 * @method    static void     setIpAddress($ipAddress)    Sets the IP address Sentry is bound to.
 * @method    static void    setSession(Cartalyst\Sentry\Sessions\SessionInterface $session)    Sets the session driver for Sentry.
 * @method    static void     setThrottleProvider(Cartalyst\Sentry\Throttling\ProviderInterface $throttleProvider)    Sets the throttle provider for Sentry.
 * @method    static void    setUser(Cartalyst\Sentry\Users\UserInterface $user)    Sets the user to be used by Sentry.
 * @method    static void     setUserProvider(Cartalyst\Sentry\Users\ProviderInterface $userProvider)    Sets the user provider for Sentry.
 */
class Sentry extends Cartalyst\Sentry\Sentry {
}
