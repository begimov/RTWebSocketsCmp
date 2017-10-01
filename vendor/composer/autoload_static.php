<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea9ca56c5e2653d0b060f7c1225f48d2
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        '6b06ce8ccf69c43a60a1e48495a034c9' => __DIR__ . '/..' . '/react/promise-timer/src/functions.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Routing\\' => 26,
            'Symfony\\Component\\HttpFoundation\\' => 33,
        ),
        'R' => 
        array (
            'React\\Stream\\' => 13,
            'React\\Socket\\' => 13,
            'React\\Promise\\Timer\\' => 20,
            'React\\Promise\\' => 14,
            'React\\EventLoop\\' => 16,
            'React\\Dns\\' => 10,
            'React\\Cache\\' => 12,
            'Ratchet\\RFC6455\\' => 16,
            'Ratchet\\' => 8,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/routing',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'React\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/stream/src',
        ),
        'React\\Socket\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/socket/src',
        ),
        'React\\Promise\\Timer\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise-timer/src',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'React\\EventLoop\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/event-loop/src',
        ),
        'React\\Dns\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/dns/src',
        ),
        'React\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/cache/src',
        ),
        'Ratchet\\RFC6455\\' => 
        array (
            0 => __DIR__ . '/..' . '/ratchet/rfc6455/src',
        ),
        'Ratchet\\' => 
        array (
            0 => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Evenement' => 
            array (
                0 => __DIR__ . '/..' . '/evenement/evenement/src',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Chat' => __DIR__ . '/../..' . '/app/Chat.php',
        'Evenement\\EventEmitter' => __DIR__ . '/..' . '/evenement/evenement/src/Evenement/EventEmitter.php',
        'Evenement\\EventEmitterInterface' => __DIR__ . '/..' . '/evenement/evenement/src/Evenement/EventEmitterInterface.php',
        'Evenement\\EventEmitterTrait' => __DIR__ . '/..' . '/evenement/evenement/src/Evenement/EventEmitterTrait.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'Ratchet\\AbstractConnectionDecorator' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/AbstractConnectionDecorator.php',
        'Ratchet\\App' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/App.php',
        'Ratchet\\ComponentInterface' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/ComponentInterface.php',
        'Ratchet\\ConnectionInterface' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/ConnectionInterface.php',
        'Ratchet\\Http\\CloseResponseTrait' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Http/CloseResponseTrait.php',
        'Ratchet\\Http\\HttpRequestParser' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Http/HttpRequestParser.php',
        'Ratchet\\Http\\HttpServer' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Http/HttpServer.php',
        'Ratchet\\Http\\HttpServerInterface' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Http/HttpServerInterface.php',
        'Ratchet\\Http\\OriginCheck' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Http/OriginCheck.php',
        'Ratchet\\Http\\Router' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Http/Router.php',
        'Ratchet\\MessageComponentInterface' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/MessageComponentInterface.php',
        'Ratchet\\MessageInterface' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/MessageInterface.php',
        'Ratchet\\RFC6455\\Handshake\\ClientNegotiator' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Handshake/ClientNegotiator.php',
        'Ratchet\\RFC6455\\Handshake\\NegotiatorInterface' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Handshake/NegotiatorInterface.php',
        'Ratchet\\RFC6455\\Handshake\\RequestVerifier' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Handshake/RequestVerifier.php',
        'Ratchet\\RFC6455\\Handshake\\ResponseVerifier' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Handshake/ResponseVerifier.php',
        'Ratchet\\RFC6455\\Handshake\\ServerNegotiator' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Handshake/ServerNegotiator.php',
        'Ratchet\\RFC6455\\Messaging\\CloseFrameChecker' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Messaging/CloseFrameChecker.php',
        'Ratchet\\RFC6455\\Messaging\\DataInterface' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Messaging/DataInterface.php',
        'Ratchet\\RFC6455\\Messaging\\Frame' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Messaging/Frame.php',
        'Ratchet\\RFC6455\\Messaging\\FrameInterface' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Messaging/FrameInterface.php',
        'Ratchet\\RFC6455\\Messaging\\Message' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Messaging/Message.php',
        'Ratchet\\RFC6455\\Messaging\\MessageBuffer' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Messaging/MessageBuffer.php',
        'Ratchet\\RFC6455\\Messaging\\MessageInterface' => __DIR__ . '/..' . '/ratchet/rfc6455/src/Messaging/MessageInterface.php',
        'Ratchet\\Server\\EchoServer' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Server/EchoServer.php',
        'Ratchet\\Server\\FlashPolicy' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Server/FlashPolicy.php',
        'Ratchet\\Server\\IoConnection' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Server/IoConnection.php',
        'Ratchet\\Server\\IoServer' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Server/IoServer.php',
        'Ratchet\\Server\\IpBlackList' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Server/IpBlackList.php',
        'Ratchet\\Session\\Serialize\\HandlerInterface' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Session/Serialize/HandlerInterface.php',
        'Ratchet\\Session\\Serialize\\PhpBinaryHandler' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Session/Serialize/PhpBinaryHandler.php',
        'Ratchet\\Session\\Serialize\\PhpHandler' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Session/Serialize/PhpHandler.php',
        'Ratchet\\Session\\SessionProvider' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Session/SessionProvider.php',
        'Ratchet\\Session\\Storage\\Proxy\\VirtualProxy' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Session/Storage/Proxy/VirtualProxy.php',
        'Ratchet\\Session\\Storage\\VirtualSessionStorage' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Session/Storage/VirtualSessionStorage.php',
        'Ratchet\\Wamp\\Exception' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Wamp/Exception.php',
        'Ratchet\\Wamp\\JsonException' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Wamp/JsonException.php',
        'Ratchet\\Wamp\\ServerProtocol' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Wamp/ServerProtocol.php',
        'Ratchet\\Wamp\\Topic' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Wamp/Topic.php',
        'Ratchet\\Wamp\\TopicManager' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Wamp/TopicManager.php',
        'Ratchet\\Wamp\\WampConnection' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Wamp/WampConnection.php',
        'Ratchet\\Wamp\\WampServer' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Wamp/WampServer.php',
        'Ratchet\\Wamp\\WampServerInterface' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/Wamp/WampServerInterface.php',
        'Ratchet\\WebSocket\\ConnContext' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/WebSocket/ConnContext.php',
        'Ratchet\\WebSocket\\MessageCallableInterface' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/WebSocket/MessageCallableInterface.php',
        'Ratchet\\WebSocket\\MessageComponentInterface' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/WebSocket/MessageComponentInterface.php',
        'Ratchet\\WebSocket\\WsConnection' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/WebSocket/WsConnection.php',
        'Ratchet\\WebSocket\\WsServer' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/WebSocket/WsServer.php',
        'Ratchet\\WebSocket\\WsServerInterface' => __DIR__ . '/..' . '/cboden/ratchet/src/Ratchet/WebSocket/WsServerInterface.php',
        'React\\Cache\\ArrayCache' => __DIR__ . '/..' . '/react/cache/src/ArrayCache.php',
        'React\\Cache\\CacheInterface' => __DIR__ . '/..' . '/react/cache/src/CacheInterface.php',
        'React\\Dns\\BadServerException' => __DIR__ . '/..' . '/react/dns/src/BadServerException.php',
        'React\\Dns\\Config\\Config' => __DIR__ . '/..' . '/react/dns/src/Config/Config.php',
        'React\\Dns\\Config\\FilesystemFactory' => __DIR__ . '/..' . '/react/dns/src/Config/FilesystemFactory.php',
        'React\\Dns\\Config\\HostsFile' => __DIR__ . '/..' . '/react/dns/src/Config/HostsFile.php',
        'React\\Dns\\Model\\HeaderBag' => __DIR__ . '/..' . '/react/dns/src/Model/HeaderBag.php',
        'React\\Dns\\Model\\Message' => __DIR__ . '/..' . '/react/dns/src/Model/Message.php',
        'React\\Dns\\Model\\Record' => __DIR__ . '/..' . '/react/dns/src/Model/Record.php',
        'React\\Dns\\Protocol\\BinaryDumper' => __DIR__ . '/..' . '/react/dns/src/Protocol/BinaryDumper.php',
        'React\\Dns\\Protocol\\Parser' => __DIR__ . '/..' . '/react/dns/src/Protocol/Parser.php',
        'React\\Dns\\Query\\CachedExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/CachedExecutor.php',
        'React\\Dns\\Query\\CancellationException' => __DIR__ . '/..' . '/react/dns/src/Query/CancellationException.php',
        'React\\Dns\\Query\\Executor' => __DIR__ . '/..' . '/react/dns/src/Query/Executor.php',
        'React\\Dns\\Query\\ExecutorInterface' => __DIR__ . '/..' . '/react/dns/src/Query/ExecutorInterface.php',
        'React\\Dns\\Query\\HostsFileExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/HostsFileExecutor.php',
        'React\\Dns\\Query\\Query' => __DIR__ . '/..' . '/react/dns/src/Query/Query.php',
        'React\\Dns\\Query\\RecordBag' => __DIR__ . '/..' . '/react/dns/src/Query/RecordBag.php',
        'React\\Dns\\Query\\RecordCache' => __DIR__ . '/..' . '/react/dns/src/Query/RecordCache.php',
        'React\\Dns\\Query\\RetryExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/RetryExecutor.php',
        'React\\Dns\\Query\\TimeoutException' => __DIR__ . '/..' . '/react/dns/src/Query/TimeoutException.php',
        'React\\Dns\\Query\\TimeoutExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/TimeoutExecutor.php',
        'React\\Dns\\RecordNotFoundException' => __DIR__ . '/..' . '/react/dns/src/RecordNotFoundException.php',
        'React\\Dns\\Resolver\\Factory' => __DIR__ . '/..' . '/react/dns/src/Resolver/Factory.php',
        'React\\Dns\\Resolver\\Resolver' => __DIR__ . '/..' . '/react/dns/src/Resolver/Resolver.php',
        'React\\EventLoop\\ExtEventLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtEventLoop.php',
        'React\\EventLoop\\Factory' => __DIR__ . '/..' . '/react/event-loop/src/Factory.php',
        'React\\EventLoop\\LibEvLoop' => __DIR__ . '/..' . '/react/event-loop/src/LibEvLoop.php',
        'React\\EventLoop\\LibEventLoop' => __DIR__ . '/..' . '/react/event-loop/src/LibEventLoop.php',
        'React\\EventLoop\\LoopInterface' => __DIR__ . '/..' . '/react/event-loop/src/LoopInterface.php',
        'React\\EventLoop\\StreamSelectLoop' => __DIR__ . '/..' . '/react/event-loop/src/StreamSelectLoop.php',
        'React\\EventLoop\\Tick\\FutureTickQueue' => __DIR__ . '/..' . '/react/event-loop/src/Tick/FutureTickQueue.php',
        'React\\EventLoop\\Tick\\NextTickQueue' => __DIR__ . '/..' . '/react/event-loop/src/Tick/NextTickQueue.php',
        'React\\EventLoop\\Timer\\Timer' => __DIR__ . '/..' . '/react/event-loop/src/Timer/Timer.php',
        'React\\EventLoop\\Timer\\TimerInterface' => __DIR__ . '/..' . '/react/event-loop/src/Timer/TimerInterface.php',
        'React\\EventLoop\\Timer\\Timers' => __DIR__ . '/..' . '/react/event-loop/src/Timer/Timers.php',
        'React\\Promise\\CancellablePromiseInterface' => __DIR__ . '/..' . '/react/promise/src/CancellablePromiseInterface.php',
        'React\\Promise\\CancellationQueue' => __DIR__ . '/..' . '/react/promise/src/CancellationQueue.php',
        'React\\Promise\\Deferred' => __DIR__ . '/..' . '/react/promise/src/Deferred.php',
        'React\\Promise\\Exception\\LengthException' => __DIR__ . '/..' . '/react/promise/src/Exception/LengthException.php',
        'React\\Promise\\ExtendedPromiseInterface' => __DIR__ . '/..' . '/react/promise/src/ExtendedPromiseInterface.php',
        'React\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/react/promise/src/FulfilledPromise.php',
        'React\\Promise\\LazyPromise' => __DIR__ . '/..' . '/react/promise/src/LazyPromise.php',
        'React\\Promise\\Promise' => __DIR__ . '/..' . '/react/promise/src/Promise.php',
        'React\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/react/promise/src/PromiseInterface.php',
        'React\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/react/promise/src/PromisorInterface.php',
        'React\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/react/promise/src/RejectedPromise.php',
        'React\\Promise\\Timer\\TimeoutException' => __DIR__ . '/..' . '/react/promise-timer/src/TimeoutException.php',
        'React\\Promise\\UnhandledRejectionException' => __DIR__ . '/..' . '/react/promise/src/UnhandledRejectionException.php',
        'React\\Socket\\Connection' => __DIR__ . '/..' . '/react/socket/src/Connection.php',
        'React\\Socket\\ConnectionInterface' => __DIR__ . '/..' . '/react/socket/src/ConnectionInterface.php',
        'React\\Socket\\Connector' => __DIR__ . '/..' . '/react/socket/src/Connector.php',
        'React\\Socket\\ConnectorInterface' => __DIR__ . '/..' . '/react/socket/src/ConnectorInterface.php',
        'React\\Socket\\DnsConnector' => __DIR__ . '/..' . '/react/socket/src/DnsConnector.php',
        'React\\Socket\\FixedUriConnector' => __DIR__ . '/..' . '/react/socket/src/FixedUriConnector.php',
        'React\\Socket\\LimitingServer' => __DIR__ . '/..' . '/react/socket/src/LimitingServer.php',
        'React\\Socket\\SecureConnector' => __DIR__ . '/..' . '/react/socket/src/SecureConnector.php',
        'React\\Socket\\SecureServer' => __DIR__ . '/..' . '/react/socket/src/SecureServer.php',
        'React\\Socket\\Server' => __DIR__ . '/..' . '/react/socket/src/Server.php',
        'React\\Socket\\ServerInterface' => __DIR__ . '/..' . '/react/socket/src/ServerInterface.php',
        'React\\Socket\\StreamEncryption' => __DIR__ . '/..' . '/react/socket/src/StreamEncryption.php',
        'React\\Socket\\TcpConnector' => __DIR__ . '/..' . '/react/socket/src/TcpConnector.php',
        'React\\Socket\\TcpServer' => __DIR__ . '/..' . '/react/socket/src/TcpServer.php',
        'React\\Socket\\TimeoutConnector' => __DIR__ . '/..' . '/react/socket/src/TimeoutConnector.php',
        'React\\Socket\\UnixConnector' => __DIR__ . '/..' . '/react/socket/src/UnixConnector.php',
        'React\\Stream\\CompositeStream' => __DIR__ . '/..' . '/react/stream/src/CompositeStream.php',
        'React\\Stream\\DuplexResourceStream' => __DIR__ . '/..' . '/react/stream/src/DuplexResourceStream.php',
        'React\\Stream\\DuplexStreamInterface' => __DIR__ . '/..' . '/react/stream/src/DuplexStreamInterface.php',
        'React\\Stream\\ReadableResourceStream' => __DIR__ . '/..' . '/react/stream/src/ReadableResourceStream.php',
        'React\\Stream\\ReadableStreamInterface' => __DIR__ . '/..' . '/react/stream/src/ReadableStreamInterface.php',
        'React\\Stream\\ThroughStream' => __DIR__ . '/..' . '/react/stream/src/ThroughStream.php',
        'React\\Stream\\Util' => __DIR__ . '/..' . '/react/stream/src/Util.php',
        'React\\Stream\\WritableResourceStream' => __DIR__ . '/..' . '/react/stream/src/WritableResourceStream.php',
        'React\\Stream\\WritableStreamInterface' => __DIR__ . '/..' . '/react/stream/src/WritableStreamInterface.php',
        'Symfony\\Component\\HttpFoundation\\AcceptHeader' => __DIR__ . '/..' . '/symfony/http-foundation/AcceptHeader.php',
        'Symfony\\Component\\HttpFoundation\\AcceptHeaderItem' => __DIR__ . '/..' . '/symfony/http-foundation/AcceptHeaderItem.php',
        'Symfony\\Component\\HttpFoundation\\ApacheRequest' => __DIR__ . '/..' . '/symfony/http-foundation/ApacheRequest.php',
        'Symfony\\Component\\HttpFoundation\\BinaryFileResponse' => __DIR__ . '/..' . '/symfony/http-foundation/BinaryFileResponse.php',
        'Symfony\\Component\\HttpFoundation\\Cookie' => __DIR__ . '/..' . '/symfony/http-foundation/Cookie.php',
        'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException' => __DIR__ . '/..' . '/symfony/http-foundation/Exception/ConflictingHeadersException.php',
        'Symfony\\Component\\HttpFoundation\\Exception\\RequestExceptionInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Exception/RequestExceptionInterface.php',
        'Symfony\\Component\\HttpFoundation\\Exception\\SuspiciousOperationException' => __DIR__ . '/..' . '/symfony/http-foundation/Exception/SuspiciousOperationException.php',
        'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/ExpressionRequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\FileBag' => __DIR__ . '/..' . '/symfony/http-foundation/FileBag.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\AccessDeniedException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/AccessDeniedException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/FileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/FileNotFoundException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\UnexpectedTypeException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/UnexpectedTypeException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\UploadException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/UploadException.php',
        'Symfony\\Component\\HttpFoundation\\File\\File' => __DIR__ . '/..' . '/symfony/http-foundation/File/File.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/ExtensionGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesserInterface' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/ExtensionGuesserInterface.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\FileBinaryMimeTypeGuesser' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/FileBinaryMimeTypeGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\FileinfoMimeTypeGuesser' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/FileinfoMimeTypeGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeExtensionGuesser' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/MimeTypeExtensionGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/MimeTypeGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/MimeTypeGuesserInterface.php',
        'Symfony\\Component\\HttpFoundation\\File\\Stream' => __DIR__ . '/..' . '/symfony/http-foundation/File/Stream.php',
        'Symfony\\Component\\HttpFoundation\\File\\UploadedFile' => __DIR__ . '/..' . '/symfony/http-foundation/File/UploadedFile.php',
        'Symfony\\Component\\HttpFoundation\\HeaderBag' => __DIR__ . '/..' . '/symfony/http-foundation/HeaderBag.php',
        'Symfony\\Component\\HttpFoundation\\IpUtils' => __DIR__ . '/..' . '/symfony/http-foundation/IpUtils.php',
        'Symfony\\Component\\HttpFoundation\\JsonResponse' => __DIR__ . '/..' . '/symfony/http-foundation/JsonResponse.php',
        'Symfony\\Component\\HttpFoundation\\ParameterBag' => __DIR__ . '/..' . '/symfony/http-foundation/ParameterBag.php',
        'Symfony\\Component\\HttpFoundation\\RedirectResponse' => __DIR__ . '/..' . '/symfony/http-foundation/RedirectResponse.php',
        'Symfony\\Component\\HttpFoundation\\Request' => __DIR__ . '/..' . '/symfony/http-foundation/Request.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcherInterface' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcherInterface.php',
        'Symfony\\Component\\HttpFoundation\\RequestStack' => __DIR__ . '/..' . '/symfony/http-foundation/RequestStack.php',
        'Symfony\\Component\\HttpFoundation\\Response' => __DIR__ . '/..' . '/symfony/http-foundation/Response.php',
        'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag' => __DIR__ . '/..' . '/symfony/http-foundation/ResponseHeaderBag.php',
        'Symfony\\Component\\HttpFoundation\\ServerBag' => __DIR__ . '/..' . '/symfony/http-foundation/ServerBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Attribute/AttributeBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBagInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\NamespacedAttributeBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Attribute/NamespacedAttributeBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Flash\\AutoExpireFlashBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Flash/AutoExpireFlashBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Flash/FlashBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Flash/FlashBagInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Session' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Session.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/SessionBagInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/SessionInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MemcacheSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/MemcacheSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MemcachedSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/MemcachedSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MongoDbSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/MongoDbSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/NativeSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NullSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\PdoSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/PdoSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/WriteCheckSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/MetadataBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockArraySessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/MockArraySessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/MockFileSessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/NativeSessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/PhpBridgeSessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\AbstractProxy' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Proxy/AbstractProxy.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\NativeProxy' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Proxy/NativeProxy.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\SessionHandlerProxy' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/SessionStorageInterface.php',
        'Symfony\\Component\\HttpFoundation\\StreamedResponse' => __DIR__ . '/..' . '/symfony/http-foundation/StreamedResponse.php',
        'Symfony\\Component\\Routing\\Annotation\\Route' => __DIR__ . '/..' . '/symfony/routing/Annotation/Route.php',
        'Symfony\\Component\\Routing\\CompiledRoute' => __DIR__ . '/..' . '/symfony/routing/CompiledRoute.php',
        'Symfony\\Component\\Routing\\DependencyInjection\\RoutingResolverPass' => __DIR__ . '/..' . '/symfony/routing/DependencyInjection/RoutingResolverPass.php',
        'Symfony\\Component\\Routing\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/routing/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Routing\\Exception\\InvalidParameterException' => __DIR__ . '/..' . '/symfony/routing/Exception/InvalidParameterException.php',
        'Symfony\\Component\\Routing\\Exception\\MethodNotAllowedException' => __DIR__ . '/..' . '/symfony/routing/Exception/MethodNotAllowedException.php',
        'Symfony\\Component\\Routing\\Exception\\MissingMandatoryParametersException' => __DIR__ . '/..' . '/symfony/routing/Exception/MissingMandatoryParametersException.php',
        'Symfony\\Component\\Routing\\Exception\\ResourceNotFoundException' => __DIR__ . '/..' . '/symfony/routing/Exception/ResourceNotFoundException.php',
        'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException' => __DIR__ . '/..' . '/symfony/routing/Exception/RouteNotFoundException.php',
        'Symfony\\Component\\Routing\\Generator\\ConfigurableRequirementsInterface' => __DIR__ . '/..' . '/symfony/routing/Generator/ConfigurableRequirementsInterface.php',
        'Symfony\\Component\\Routing\\Generator\\Dumper\\GeneratorDumper' => __DIR__ . '/..' . '/symfony/routing/Generator/Dumper/GeneratorDumper.php',
        'Symfony\\Component\\Routing\\Generator\\Dumper\\GeneratorDumperInterface' => __DIR__ . '/..' . '/symfony/routing/Generator/Dumper/GeneratorDumperInterface.php',
        'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper' => __DIR__ . '/..' . '/symfony/routing/Generator/Dumper/PhpGeneratorDumper.php',
        'Symfony\\Component\\Routing\\Generator\\UrlGenerator' => __DIR__ . '/..' . '/symfony/routing/Generator/UrlGenerator.php',
        'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => __DIR__ . '/..' . '/symfony/routing/Generator/UrlGeneratorInterface.php',
        'Symfony\\Component\\Routing\\Loader\\AnnotationClassLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/AnnotationClassLoader.php',
        'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/AnnotationDirectoryLoader.php',
        'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/AnnotationFileLoader.php',
        'Symfony\\Component\\Routing\\Loader\\ClosureLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/ClosureLoader.php',
        'Symfony\\Component\\Routing\\Loader\\DependencyInjection\\ServiceRouterLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/DependencyInjection/ServiceRouterLoader.php',
        'Symfony\\Component\\Routing\\Loader\\DirectoryLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/DirectoryLoader.php',
        'Symfony\\Component\\Routing\\Loader\\ObjectRouteLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/ObjectRouteLoader.php',
        'Symfony\\Component\\Routing\\Loader\\PhpFileLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/PhpFileLoader.php',
        'Symfony\\Component\\Routing\\Loader\\XmlFileLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/XmlFileLoader.php',
        'Symfony\\Component\\Routing\\Loader\\YamlFileLoader' => __DIR__ . '/..' . '/symfony/routing/Loader/YamlFileLoader.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\DumperCollection' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/DumperCollection.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\DumperRoute' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/DumperRoute.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\MatcherDumper' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/MatcherDumper.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\MatcherDumperInterface' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/MatcherDumperInterface.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/PhpMatcherDumper.php',
        'Symfony\\Component\\Routing\\Matcher\\Dumper\\StaticPrefixCollection' => __DIR__ . '/..' . '/symfony/routing/Matcher/Dumper/StaticPrefixCollection.php',
        'Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcher' => __DIR__ . '/..' . '/symfony/routing/Matcher/RedirectableUrlMatcher.php',
        'Symfony\\Component\\Routing\\Matcher\\RedirectableUrlMatcherInterface' => __DIR__ . '/..' . '/symfony/routing/Matcher/RedirectableUrlMatcherInterface.php',
        'Symfony\\Component\\Routing\\Matcher\\RequestMatcherInterface' => __DIR__ . '/..' . '/symfony/routing/Matcher/RequestMatcherInterface.php',
        'Symfony\\Component\\Routing\\Matcher\\TraceableUrlMatcher' => __DIR__ . '/..' . '/symfony/routing/Matcher/TraceableUrlMatcher.php',
        'Symfony\\Component\\Routing\\Matcher\\UrlMatcher' => __DIR__ . '/..' . '/symfony/routing/Matcher/UrlMatcher.php',
        'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => __DIR__ . '/..' . '/symfony/routing/Matcher/UrlMatcherInterface.php',
        'Symfony\\Component\\Routing\\RequestContext' => __DIR__ . '/..' . '/symfony/routing/RequestContext.php',
        'Symfony\\Component\\Routing\\RequestContextAwareInterface' => __DIR__ . '/..' . '/symfony/routing/RequestContextAwareInterface.php',
        'Symfony\\Component\\Routing\\Route' => __DIR__ . '/..' . '/symfony/routing/Route.php',
        'Symfony\\Component\\Routing\\RouteCollection' => __DIR__ . '/..' . '/symfony/routing/RouteCollection.php',
        'Symfony\\Component\\Routing\\RouteCollectionBuilder' => __DIR__ . '/..' . '/symfony/routing/RouteCollectionBuilder.php',
        'Symfony\\Component\\Routing\\RouteCompiler' => __DIR__ . '/..' . '/symfony/routing/RouteCompiler.php',
        'Symfony\\Component\\Routing\\RouteCompilerInterface' => __DIR__ . '/..' . '/symfony/routing/RouteCompilerInterface.php',
        'Symfony\\Component\\Routing\\Router' => __DIR__ . '/..' . '/symfony/routing/Router.php',
        'Symfony\\Component\\Routing\\RouterInterface' => __DIR__ . '/..' . '/symfony/routing/RouterInterface.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea9ca56c5e2653d0b060f7c1225f48d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea9ca56c5e2653d0b060f7c1225f48d2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitea9ca56c5e2653d0b060f7c1225f48d2::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitea9ca56c5e2653d0b060f7c1225f48d2::$classMap;

        }, null, ClassLoader::class);
    }
}
