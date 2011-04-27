<?php
/**
 * Dydra.com Software Development Kit (SDK) for PHP.
 *
 * This is free and unencumbered software released into the public domain.
 *
 * @see http://docs.dydra.com/sdk/php
 */

/**
 * Implements a Dydra.com XML-RPC API client.
 *
 * @see http://docs.dydra.com/sdk/php
 * @see http://docs.dydra.com/api/rpc
 */
class Client {}

/**
 * Represents a Dydra.com resource.
 *
 * This is the base class for all classes that represent dereferenceable
 * HTTP resources on Dydra.com.
 *
 * @see http://docs.dydra.com/sdk/php
 * @see http://docs.dydra.com/api/rest
 */
class Resource {}

/**
 * Represents a Dydra.com user account.
 *
 * @see http://docs.dydra.com/sdk/php
 */
class Account extends Resource {}

/**
 * Represents a Dydra.com RDF repository.
 *
 * @see http://docs.dydra.com/sdk/php
 */
class Repository extends Resource {}

/**
 * Represents a Dydra.com job.
 *
 * @see http://docs.dydra.com/sdk/php
 */
class Job extends Resource {}
