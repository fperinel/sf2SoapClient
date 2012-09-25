<?php
namespace Level42\SoapClientBundle\Command;

use Level42\SoapClientBundle\Services\WebserviceAnnotedTest;

use Level42\SoapClientBundle\Services\WSDLGenerator;

use Symfony\Component\Console\Input\InputOption;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Command\Command;


/**
 * Generate models from WSDL uri
 */
class GenerateCommand extends Command
{

  /**
   * WSDL uri
   * @var String
   * @access private
   */
  private $_wsdl = '';

  /**
   * Namespace
   * @var String
   * @access private
   */
  private $_namespace = '';

  /**
   * Directory
   * @var String
   * @access private
   */
  private $_directory = '';

  /**
   * Allow classes overwriting
   * @var boolean
   * @access private
   */
  private $_overwrite = false;

  /**
   * (non-PHPdoc)
   * @see Symfony\Component\Console\Command.Command::configure()
   */
  protected function configure()
  {
    parent::configure();

    $this
    ->setName('generate:soap:classes')
    ->setDescription('Generates entity and services classes from a wsdl uri')
    /*->addArgument('wsdl', InputArgument::REQUIRED, 'WSDL uri')
    ->addArgument('namespace', InputArgument::REQUIRED, 'Classes namespace')
    ->addOption('force', 'f', InputOption::VALUE_OPTIONAL, 'Force to overwrite classes', false)
    ->addOption('directory', 'd', InputOption::VALUE_OPTIONAL, 'Set directory to generate classes', 'src')*/
    ->setHelp(<<<EOT
The <info>generate:soap:classes</info> command generate entities
and service classes from a wsdl file:

<info>php app/console generate:soap:classe http://example/service?wsdl "WebServices\Backend\Portail"</info>

You can also optionally force overwriting classes with the
<info>--force</info> option:

<info>php app/console generate:soap:classe http://example/service?wsdl "WebServices\Backend\Portail" --force=true</info>

You can define target directory with the
<info>--directory</info> option:

<info>php app/console generate:soap:classe http://example/service?wsdl "WebServices\Backend\Portail" --directory=src</info>
EOT
    );
  }
  
  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $service = new WebserviceAnnotedTest();
    echo "FIN";  
  }
  
  /**
   * (non-PHPdoc)
   * @see Symfony\Component\Console\Command.Command::execute()
   * 
   * @param InputInterface  $input  Input command
   * @param OutputInterface $output Ouput command
   */
  /*protected function execute(InputInterface $input, OutputInterface $output)
  {
    $this->_wsdl = $input->getArgument('wsdl');
    $this->_namespace = $input->getArgument('namespace');
    $this->_overwrite = $input->getOption('force');
    $this->_directory = $input->getOption('directory');

    //$directory = $this->_directory.DIRECTORY_SEPARATOR.str_replace("\\", DIRECTORY_SEPARATOR, $this->_namespace);

    // Generate classes
    $parser = new WSDLGenerator($this->_wsdl, $this->_namespace);

    $classes = $parser->getEntitiesClasses();

    $directoryEntities = $directory.DIRECTORY_SEPARATOR.'Entities';
     $parser->savePHPObjects($directoryEntities, $this->_overwrite);

    $directoryServices = $directory.DIRECTORY_SEPARATOR.'Services';
    $parser->savePHPServices($directoryServices, $this->_overwrite);
  }*/
}