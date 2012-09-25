<?php
namespace Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Services;

use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetDevisResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetDevis;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetAgencesByLocalisationResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetAgencesByLocalisation;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\LoginResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\Login;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\SupprimerClientResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\SupprimerClient;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\ModifierAdresseResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\ModifierAdresse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\ModifierLoginResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\ModifierLogin;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\CreerClientExpressResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\CreerClientExpress;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetAdresseResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetAdresse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetAdressesResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetAdresses;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetInformationsListeAgenceDepotResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetInformationsListeAgenceDepot;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetAgencesResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetAgences;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetInfoProduitsResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetInfoProduits;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetTarifsDegressifsResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetTarifsDegressifs;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\CreerClientResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\CreerClient;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetAdressesLivraisonResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetAdressesLivraison;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetAdressesFacturationResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetAdressesFacturation;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetUtilisateurResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetUtilisateur;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetTarifsEtStocksResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetTarifsEtStocks;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetEncoursClientResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetEncoursClient;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetClientsResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetClients;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\ModifierClientResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\ModifierClient;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\ConvertirEnCommandeResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\ConvertirEnCommande;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\ResetPasswordResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\ResetPassword;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetPaniersResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetPaniers;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\CreerAdresseResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\CreerAdresse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\CreerAdresseExpressResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\CreerAdresseExpress;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GenererDevisResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GenererDevis;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetInformationsAgenceDepotResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetInformationsAgenceDepot;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\SupprimerAdresseResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\SupprimerAdresse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetDMResponse;
use Level42\SoapClientBundle\Tests\Resources\Generated\Wsdl1\Entities\GetDM;
use \SoapClient;


/**
 * AS400EndpointService class
 */
class AS400EndpointService extends SoapClient
{

  /**
   * Default class map
   * @access private
   * @var array
   */
  private static $classmap = array(
    "getDevis" => "GetDevis",
    "getDevisResponse" => "GetDevisResponse",
    "getAgencesByLocalisation" => "GetAgencesByLocalisation",
    "getAgencesByLocalisationResponse" => "GetAgencesByLocalisationResponse",
    "login" => "Login",
    "loginResponse" => "LoginResponse",
    "supprimerClient" => "SupprimerClient",
    "supprimerClientResponse" => "SupprimerClientResponse",
    "modifierAdresse" => "ModifierAdresse",
    "modifierAdresseResponse" => "ModifierAdresseResponse",
    "modifierLogin" => "ModifierLogin",
    "modifierLoginResponse" => "ModifierLoginResponse",
    "creerClientExpress" => "CreerClientExpress",
    "creerClientExpressResponse" => "CreerClientExpressResponse",
    "getAdresse" => "GetAdresse",
    "getAdresseResponse" => "GetAdresseResponse",
    "getAdresses" => "GetAdresses",
    "getAdressesResponse" => "GetAdressesResponse",
    "getInformationsListeAgenceDepot" => "GetInformationsListeAgenceDepot",
    "getInformationsListeAgenceDepotResponse" => "GetInformationsListeAgenceDepotResponse",
    "getAgences" => "GetAgences",
    "getAgencesResponse" => "GetAgencesResponse",
    "getInfoProduits" => "GetInfoProduits",
    "getInfoProduitsResponse" => "GetInfoProduitsResponse",
    "getTarifsDegressifs" => "GetTarifsDegressifs",
    "getTarifsDegressifsResponse" => "GetTarifsDegressifsResponse",
    "creerClient" => "CreerClient",
    "creerClientResponse" => "CreerClientResponse",
    "getAdressesLivraison" => "GetAdressesLivraison",
    "getAdressesLivraisonResponse" => "GetAdressesLivraisonResponse",
    "getAdressesFacturation" => "GetAdressesFacturation",
    "getAdressesFacturationResponse" => "GetAdressesFacturationResponse",
    "getUtilisateur" => "GetUtilisateur",
    "getUtilisateurResponse" => "GetUtilisateurResponse",
    "getTarifsEtStocks" => "GetTarifsEtStocks",
    "getTarifsEtStocksResponse" => "GetTarifsEtStocksResponse",
    "getEncoursClient" => "GetEncoursClient",
    "getEncoursClientResponse" => "GetEncoursClientResponse",
    "getClients" => "GetClients",
    "getClientsResponse" => "GetClientsResponse",
    "modifierClient" => "ModifierClient",
    "modifierClientResponse" => "ModifierClientResponse",
    "convertirEnCommande" => "ConvertirEnCommande",
    "convertirEnCommandeResponse" => "ConvertirEnCommandeResponse",
    "resetPassword" => "ResetPassword",
    "resetPasswordResponse" => "ResetPasswordResponse",
    "getPaniers" => "GetPaniers",
    "getPaniersResponse" => "GetPaniersResponse",
    "creerAdresse" => "CreerAdresse",
    "creerAdresseResponse" => "CreerAdresseResponse",
    "creerAdresseExpress" => "CreerAdresseExpress",
    "creerAdresseExpressResponse" => "CreerAdresseExpressResponse",
    "genererDevis" => "GenererDevis",
    "genererDevisResponse" => "GenererDevisResponse",
    "getInformationsAgenceDepot" => "GetInformationsAgenceDepot",
    "getInformationsAgenceDepotResponse" => "GetInformationsAgenceDepotResponse",
    "supprimerAdresse" => "SupprimerAdresse",
    "supprimerAdresseResponse" => "SupprimerAdresseResponse",
    "getDM" => "GetDM",
    "getDMResponse" => "GetDMResponse",
  );

  /**
   * ClassService constructor
   *
   * @param string $wsdl WSDL location for this service
   * @param array $options Options for the SoapClient
   *
   * @return ClassService
   */
  public function __construct($wsdl = './src/Level42/SoapClientBundle/Tests/Resources/wsdl1.wsdl', $options = array()) {
    foreach (self::$classmap as $wsdlClassName => $phpClassName) {
      if (!isset($options['classmap'][$wsdlClassName])) {
        $options['classmap'][$wsdlClassName] = $phpClassName;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * Return WSDL targetNamespace
   *
   * @return string
   */
  public function getTargetNamespace() {
    return "http://as400.endpoint.groupemb.com/";
  }

  /**
   * Set a SOAP header
   *
   * @param string $key Key of header value
   * @param mixed $value Value of header
   */
  public function setSoapHeader($key, $value = null) {
    $soapHeader = new SoapHeader($this->getTargetNamespace(), $key, $value);
    $this->__setSoapHeaders($soapHeader);
  }

  /**
   * Set multiple SOAP headers
   *
   * @param array $header  Associative array with key/value
   */
  public function setSoapHeaders($headers = array()) {
    $headers = array();
    foreach ($headers as $key => $value) {
      $headers[] = new SoapHeader($this->getTargetNamespace(), $key, $value);
    }
    $this->__setSoapHeaders($headers);
  }

  /**
   * getDevis method
   *
   * @param GetDevis $parameters
   *
   * @return GetDevisResponse
   */
  public function getDevis(GetDevis $parameters) {
    parent::__soapCall('getDevis', func_get_args());
  }

  /**
   * getAgencesByLocalisation method
   *
   * @param GetAgencesByLocalisation $parameters
   *
   * @return GetAgencesByLocalisationResponse
   */
  public function getAgencesByLocalisation(GetAgencesByLocalisation $parameters) {
    parent::__soapCall('getAgencesByLocalisation', func_get_args());
  }

  /**
   * login method
   *
   * @param Login $parameters
   *
   * @return LoginResponse
   */
  public function login(Login $parameters) {
    parent::__soapCall('login', func_get_args());
  }

  /**
   * supprimerClient method
   *
   * @param SupprimerClient $parameters
   *
   * @return SupprimerClientResponse
   */
  public function supprimerClient(SupprimerClient $parameters) {
    parent::__soapCall('supprimerClient', func_get_args());
  }

  /**
   * modifierAdresse method
   *
   * @param ModifierAdresse $parameters
   *
   * @return ModifierAdresseResponse
   */
  public function modifierAdresse(ModifierAdresse $parameters) {
    parent::__soapCall('modifierAdresse', func_get_args());
  }

  /**
   * modifierLogin method
   *
   * @param ModifierLogin $parameters
   *
   * @return ModifierLoginResponse
   */
  public function modifierLogin(ModifierLogin $parameters) {
    parent::__soapCall('modifierLogin', func_get_args());
  }

  /**
   * creerClientExpress method
   *
   * @param CreerClientExpress $parameters
   *
   * @return CreerClientExpressResponse
   */
  public function creerClientExpress(CreerClientExpress $parameters) {
    parent::__soapCall('creerClientExpress', func_get_args());
  }

  /**
   * getAdresse method
   *
   * @param GetAdresse $parameters
   *
   * @return GetAdresseResponse
   */
  public function getAdresse(GetAdresse $parameters) {
    parent::__soapCall('getAdresse', func_get_args());
  }

  /**
   * getAdresses method
   *
   * @param GetAdresses $parameters
   *
   * @return GetAdressesResponse
   */
  public function getAdresses(GetAdresses $parameters) {
    parent::__soapCall('getAdresses', func_get_args());
  }

  /**
   * getInformationsListeAgenceDepot method
   *
   * @param GetInformationsListeAgenceDepot $parameters
   *
   * @return GetInformationsListeAgenceDepotResponse
   */
  public function getInformationsListeAgenceDepot(GetInformationsListeAgenceDepot $parameters) {
    parent::__soapCall('getInformationsListeAgenceDepot', func_get_args());
  }

  /**
   * getAgences method
   *
   * @param GetAgences $parameters
   *
   * @return GetAgencesResponse
   */
  public function getAgences(GetAgences $parameters) {
    parent::__soapCall('getAgences', func_get_args());
  }

  /**
   * getInfoProduits method
   *
   * @param GetInfoProduits $parameters
   *
   * @return GetInfoProduitsResponse
   */
  public function getInfoProduits(GetInfoProduits $parameters) {
    parent::__soapCall('getInfoProduits', func_get_args());
  }

  /**
   * getTarifsDegressifs method
   *
   * @param GetTarifsDegressifs $parameters
   *
   * @return GetTarifsDegressifsResponse
   */
  public function getTarifsDegressifs(GetTarifsDegressifs $parameters) {
    parent::__soapCall('getTarifsDegressifs', func_get_args());
  }

  /**
   * creerClient method
   *
   * @param CreerClient $parameters
   *
   * @return CreerClientResponse
   */
  public function creerClient(CreerClient $parameters) {
    parent::__soapCall('creerClient', func_get_args());
  }

  /**
   * getAdressesLivraison method
   *
   * @param GetAdressesLivraison $parameters
   *
   * @return GetAdressesLivraisonResponse
   */
  public function getAdressesLivraison(GetAdressesLivraison $parameters) {
    parent::__soapCall('getAdressesLivraison', func_get_args());
  }

  /**
   * getAdressesFacturation method
   *
   * @param GetAdressesFacturation $parameters
   *
   * @return GetAdressesFacturationResponse
   */
  public function getAdressesFacturation(GetAdressesFacturation $parameters) {
    parent::__soapCall('getAdressesFacturation', func_get_args());
  }

  /**
   * getUtilisateur method
   *
   * @param GetUtilisateur $parameters
   *
   * @return GetUtilisateurResponse
   */
  public function getUtilisateur(GetUtilisateur $parameters) {
    parent::__soapCall('getUtilisateur', func_get_args());
  }

  /**
   * getTarifsEtStocks method
   *
   * @param GetTarifsEtStocks $parameters
   *
   * @return GetTarifsEtStocksResponse
   */
  public function getTarifsEtStocks(GetTarifsEtStocks $parameters) {
    parent::__soapCall('getTarifsEtStocks', func_get_args());
  }

  /**
   * getEncoursClient method
   *
   * @param GetEncoursClient $parameters
   *
   * @return GetEncoursClientResponse
   */
  public function getEncoursClient(GetEncoursClient $parameters) {
    parent::__soapCall('getEncoursClient', func_get_args());
  }

  /**
   * getClients method
   *
   * @param GetClients $parameters
   *
   * @return GetClientsResponse
   */
  public function getClients(GetClients $parameters) {
    parent::__soapCall('getClients', func_get_args());
  }

  /**
   * modifierClient method
   *
   * @param ModifierClient $parameters
   *
   * @return ModifierClientResponse
   */
  public function modifierClient(ModifierClient $parameters) {
    parent::__soapCall('modifierClient', func_get_args());
  }

  /**
   * convertirEnCommande method
   *
   * @param ConvertirEnCommande $parameters
   *
   * @return ConvertirEnCommandeResponse
   */
  public function convertirEnCommande(ConvertirEnCommande $parameters) {
    parent::__soapCall('convertirEnCommande', func_get_args());
  }

  /**
   * resetPassword method
   *
   * @param ResetPassword $parameters
   *
   * @return ResetPasswordResponse
   */
  public function resetPassword(ResetPassword $parameters) {
    parent::__soapCall('resetPassword', func_get_args());
  }

  /**
   * getPaniers method
   *
   * @param GetPaniers $parameters
   *
   * @return GetPaniersResponse
   */
  public function getPaniers(GetPaniers $parameters) {
    parent::__soapCall('getPaniers', func_get_args());
  }

  /**
   * creerAdresse method
   *
   * @param CreerAdresse $parameters
   *
   * @return CreerAdresseResponse
   */
  public function creerAdresse(CreerAdresse $parameters) {
    parent::__soapCall('creerAdresse', func_get_args());
  }

  /**
   * creerAdresseExpress method
   *
   * @param CreerAdresseExpress $parameters
   *
   * @return CreerAdresseExpressResponse
   */
  public function creerAdresseExpress(CreerAdresseExpress $parameters) {
    parent::__soapCall('creerAdresseExpress', func_get_args());
  }

  /**
   * genererDevis method
   *
   * @param GenererDevis $parameters
   *
   * @return GenererDevisResponse
   */
  public function genererDevis(GenererDevis $parameters) {
    parent::__soapCall('genererDevis', func_get_args());
  }

  /**
   * getInformationsAgenceDepot method
   *
   * @param GetInformationsAgenceDepot $parameters
   *
   * @return GetInformationsAgenceDepotResponse
   */
  public function getInformationsAgenceDepot(GetInformationsAgenceDepot $parameters) {
    parent::__soapCall('getInformationsAgenceDepot', func_get_args());
  }

  /**
   * supprimerAdresse method
   *
   * @param SupprimerAdresse $parameters
   *
   * @return SupprimerAdresseResponse
   */
  public function supprimerAdresse(SupprimerAdresse $parameters) {
    parent::__soapCall('supprimerAdresse', func_get_args());
  }

  /**
   * getDM method
   *
   * @param GetDM $parameters
   *
   * @return GetDMResponse
   */
  public function getDM(GetDM $parameters) {
    parent::__soapCall('getDM', func_get_args());
  }

}
