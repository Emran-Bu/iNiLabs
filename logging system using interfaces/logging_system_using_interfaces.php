<?php
date_default_timezone_set('asia/dhaka');
// Logger Interface
interface LoggerInterface
{
    function log($message);
}

class FileLogger implements LoggerInterface
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function log($message)
    {
        file_put_contents($this->file, date('Y-m-d H:i:s') . " - " . $message . PHP_EOL, FILE_APPEND);
    }
}

// Using the Loggers (Polymorphism)
class Application
{
    private $logger;

    public function __construct($logger)
    {
        $this->logger = $logger;
    }

    public function run()
    {
        $this->logger->log("Application started");
        $this->logger->log("Processing data...");
        $this->logger->log("Application finished");
    }
}

$app = new Application(new FileLogger("app.log"));
$app->run();

?>



