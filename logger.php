<?php

    require_once(dirname(__FILE__).'/vendor/autoload.php');

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    function logger($mensagem,$modo='info'){
        $logger = new Logger('PHP');
        $logger ->pushHandler(new StreamHandler(dirname(__FILE__).'/LOGS.txt'));

        switch($modo){

            case 'info':
                $logger ->info($mensagem);
                break;
                case 'warning':
                    $logger ->info($mensagem);
                    break; 
                        case 'error':
                        $logger ->info($mensagem);
                        break; 
                            case 'debug':
                            $logger ->info($mensagem);
                            break; 
                                case 'notice':
                                $logger ->info($mensagem);
                                break; 
                                    case 'critical':
                                    $logger ->info($mensagem);
                                    break; 
                                        case 'alert':
                                        $logger ->info($mensagem);
                                        break;
                                            case 'emergency':
                                            $logger ->info($mensagem);
                                            break;
                                                default:
                                                    $logger->info($mensagem);
                                                    break;
        }
    }
?>