<?php

namespace ContainerQ1xEwtW;

return [
    'App\\Service\\BidManager' => true,
    'App\\Service\\SessionManager' => true,
    'Psr\\Cache\\CacheItemPoolInterface' => true,
    'Psr\\Container\\ContainerInterface $parameterBag' => true,
    'Psr\\EventDispatcher\\EventDispatcherInterface' => true,
    'Psr\\Log\\LoggerInterface' => true,
    'SessionHandlerInterface' => true,
    'Symfony\\Component\\Config\\Loader\\LoaderInterface' => true,
    'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => true,
    'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => true,
    'Symfony\\Component\\DependencyInjection\\ReverseContainer' => true,
    'Symfony\\Component\\ErrorHandler\\ErrorRenderer\\FileLinkFormatter' => true,
    'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => true,
    'Symfony\\Component\\Filesystem\\Filesystem' => true,
    'Symfony\\Component\\HttpFoundation\\Request' => true,
    'Symfony\\Component\\HttpFoundation\\RequestStack' => true,
    'Symfony\\Component\\HttpFoundation\\Response' => true,
    'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => true,
    'Symfony\\Component\\HttpFoundation\\UriSigner' => true,
    'Symfony\\Component\\HttpFoundation\\UrlHelper' => true,
    'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => true,
    'Symfony\\Component\\HttpKernel\\Fragment\\FragmentUriGeneratorInterface' => true,
    'Symfony\\Component\\HttpKernel\\HttpCache\\StoreInterface' => true,
    'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => true,
    'Symfony\\Component\\HttpKernel\\KernelInterface' => true,
    'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => true,
    'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => true,
    'Symfony\\Component\\Routing\\RequestContext' => true,
    'Symfony\\Component\\Routing\\RequestContextAwareInterface' => true,
    'Symfony\\Component\\Routing\\RouterInterface' => true,
    'Symfony\\Component\\String\\Slugger\\SluggerInterface' => true,
    'Symfony\\Contracts\\Cache\\CacheInterface' => true,
    'Symfony\\Contracts\\Cache\\TagAwareCacheInterface' => true,
    'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => true,
    'argument_metadata_factory' => true,
    'argument_resolver' => true,
    'argument_resolver.backed_enum_resolver' => true,
    'argument_resolver.controller_locator' => true,
    'argument_resolver.datetime' => true,
    'argument_resolver.default' => true,
    'argument_resolver.query_parameter_value_resolver' => true,
    'argument_resolver.request' => true,
    'argument_resolver.request_attribute' => true,
    'argument_resolver.request_payload' => true,
    'argument_resolver.service' => true,
    'argument_resolver.session' => true,
    'argument_resolver.variadic' => true,
    'cache.adapter.apcu' => true,
    'cache.adapter.array' => true,
    'cache.adapter.doctrine_dbal' => true,
    'cache.adapter.filesystem' => true,
    'cache.adapter.memcached' => true,
    'cache.adapter.pdo' => true,
    'cache.adapter.psr6' => true,
    'cache.adapter.redis' => true,
    'cache.adapter.redis_tag_aware' => true,
    'cache.adapter.system' => true,
    'cache.app.taggable' => true,
    'cache.default_clearer' => true,
    'cache.default_doctrine_dbal_provider' => true,
    'cache.default_marshaller' => true,
    'cache.default_memcached_provider' => true,
    'cache.default_redis_provider' => true,
    'cache.early_expiration_handler' => true,
    'cache.property_info' => true,
    'cache.serializer' => true,
    'cache.validator' => true,
    'cache_clearer' => true,
    'config.resource.self_checking_resource_checker' => true,
    'config_builder.warmer' => true,
    'config_cache_factory' => true,
    'console.command.about' => true,
    'console.command.assets_install' => true,
    'console.command.cache_clear' => true,
    'console.command.cache_pool_clear' => true,
    'console.command.cache_pool_delete' => true,
    'console.command.cache_pool_invalidate_tags' => true,
    'console.command.cache_pool_list' => true,
    'console.command.cache_pool_prune' => true,
    'console.command.cache_warmup' => true,
    'console.command.config_debug' => true,
    'console.command.config_dump_reference' => true,
    'console.command.container_debug' => true,
    'console.command.container_lint' => true,
    'console.command.debug_autowiring' => true,
    'console.command.dotenv_debug' => true,
    'console.command.event_dispatcher_debug' => true,
    'console.command.router_debug' => true,
    'console.command.router_match' => true,
    'console.command.secrets_decrypt_to_local' => true,
    'console.command.secrets_encrypt_from_local' => true,
    'console.command.secrets_generate_key' => true,
    'console.command.secrets_list' => true,
    'console.command.secrets_remove' => true,
    'console.command.secrets_reveal' => true,
    'console.command.secrets_set' => true,
    'console.command.yaml_lint' => true,
    'console.error_listener' => true,
    'console.messenger.application' => true,
    'console.messenger.execute_command_handler' => true,
    'console.suggest_missing_package_subscriber' => true,
    'container.env' => true,
    'container.env_var_processor' => true,
    'container.getenv' => true,
    'controller.cache_attribute_listener' => true,
    'controller_resolver' => true,
    'debug.debug_handlers_listener' => true,
    'debug.file_link_formatter' => true,
    'dependency_injection.config.container_parameters_resource_checker' => true,
    'disallow_search_engine_index_response_listener' => true,
    'error_handler.error_renderer.html' => true,
    'error_renderer' => true,
    'error_renderer.html' => true,
    'exception_listener' => true,
    'file_locator' => true,
    'filesystem' => true,
    'fragment.handler' => true,
    'fragment.renderer.inline' => true,
    'fragment.uri_generator' => true,
    'http_cache' => true,
    'http_cache.store' => true,
    'locale_aware_listener' => true,
    'locale_listener' => true,
    'logger' => true,
    'maker.auto_command.abstract' => true,
    'maker.auto_command.make_auth' => true,
    'maker.auto_command.make_command' => true,
    'maker.auto_command.make_controller' => true,
    'maker.auto_command.make_crud' => true,
    'maker.auto_command.make_docker_database' => true,
    'maker.auto_command.make_entity' => true,
    'maker.auto_command.make_fixtures' => true,
    'maker.auto_command.make_form' => true,
    'maker.auto_command.make_listener' => true,
    'maker.auto_command.make_message' => true,
    'maker.auto_command.make_messenger_middleware' => true,
    'maker.auto_command.make_migration' => true,
    'maker.auto_command.make_registration_form' => true,
    'maker.auto_command.make_reset_password' => true,
    'maker.auto_command.make_schedule' => true,
    'maker.auto_command.make_security_custom' => true,
    'maker.auto_command.make_security_form_login' => true,
    'maker.auto_command.make_serializer_encoder' => true,
    'maker.auto_command.make_serializer_normalizer' => true,
    'maker.auto_command.make_stimulus_controller' => true,
    'maker.auto_command.make_test' => true,
    'maker.auto_command.make_twig_component' => true,
    'maker.auto_command.make_twig_extension' => true,
    'maker.auto_command.make_user' => true,
    'maker.auto_command.make_validator' => true,
    'maker.auto_command.make_voter' => true,
    'maker.auto_command.make_webhook' => true,
    'maker.autoloader_finder' => true,
    'maker.autoloader_util' => true,
    'maker.console_error_listener' => true,
    'maker.doctrine_helper' => true,
    'maker.entity_class_generator' => true,
    'maker.event_registry' => true,
    'maker.file_link_formatter' => true,
    'maker.file_manager' => true,
    'maker.generator' => true,
    'maker.maker.make_authenticator' => true,
    'maker.maker.make_command' => true,
    'maker.maker.make_controller' => true,
    'maker.maker.make_crud' => true,
    'maker.maker.make_custom_authenticator' => true,
    'maker.maker.make_docker_database' => true,
    'maker.maker.make_entity' => true,
    'maker.maker.make_fixtures' => true,
    'maker.maker.make_form' => true,
    'maker.maker.make_form_login' => true,
    'maker.maker.make_functional_test' => true,
    'maker.maker.make_listener' => true,
    'maker.maker.make_message' => true,
    'maker.maker.make_messenger_middleware' => true,
    'maker.maker.make_migration' => true,
    'maker.maker.make_registration_form' => true,
    'maker.maker.make_reset_password' => true,
    'maker.maker.make_schedule' => true,
    'maker.maker.make_serializer_encoder' => true,
    'maker.maker.make_serializer_normalizer' => true,
    'maker.maker.make_stimulus_controller' => true,
    'maker.maker.make_subscriber' => true,
    'maker.maker.make_test' => true,
    'maker.maker.make_twig_component' => true,
    'maker.maker.make_twig_extension' => true,
    'maker.maker.make_unit_test' => true,
    'maker.maker.make_user' => true,
    'maker.maker.make_validator' => true,
    'maker.maker.make_voter' => true,
    'maker.maker.make_webhook' => true,
    'maker.php_compat_util' => true,
    'maker.renderer.form_type_renderer' => true,
    'maker.security_config_updater' => true,
    'maker.security_controller_builder' => true,
    'maker.template_component_generator' => true,
    'maker.template_linter' => true,
    'maker.user_class_builder' => true,
    'parameter_bag' => true,
    'process.messenger.process_message_handler' => true,
    'response_listener' => true,
    'reverse_container' => true,
    'router.cache_warmer' => true,
    'router.default' => true,
    'router.request_context' => true,
    'router_listener' => true,
    'routing.loader.attribute' => true,
    'routing.loader.attribute.directory' => true,
    'routing.loader.attribute.file' => true,
    'routing.loader.container' => true,
    'routing.loader.directory' => true,
    'routing.loader.glob' => true,
    'routing.loader.php' => true,
    'routing.loader.psr4' => true,
    'routing.loader.xml' => true,
    'routing.loader.yml' => true,
    'routing.resolver' => true,
    'secrets.decryption_key' => true,
    'secrets.env_var_loader' => true,
    'secrets.local_vault' => true,
    'secrets.vault' => true,
    'session.abstract_handler' => true,
    'session.factory' => true,
    'session.handler' => true,
    'session.handler.native' => true,
    'session.handler.native_file' => true,
    'session.marshaller' => true,
    'session.marshalling_handler' => true,
    'session.storage.factory' => true,
    'session.storage.factory.mock_file' => true,
    'session.storage.factory.native' => true,
    'session.storage.factory.php_bridge' => true,
    'session_listener' => true,
    'slugger' => true,
    'uri_signer' => true,
    'url_helper' => true,
    'validate_request_listener' => true,
];
