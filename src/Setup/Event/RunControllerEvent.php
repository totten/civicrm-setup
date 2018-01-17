<?php
namespace Civi\Setup\Event;

use Civi\Setup\SetupController;
use Civi\Setup\SetupControllerInterface;

/**
 * Run the stock web-based UI.
 *
 * Event Name: 'civi.setup.runController'
 */
class RunControllerEvent extends BaseSetupEvent {

  /**
   * @var \Civi\Setup\SetupControllerInterface
   */
  protected $ctrl;

  /**
   * @var string
   *   Ex: 'POST', 'GET'.
   */
  protected $method;

  /**
   * @var array
   */
  protected $fields;

  /**
   * RunControllerEvent constructor.
   *
   * @param SetupControllerInterface $ctrl
   * @param $method
   * @param $fields
   */
  public function __construct($ctrl, $method, $fields) {
    $this->ctrl = $ctrl;
    $this->method = $method;
    $this->fields = $fields;
  }

  /**
   * @return SetupControllerInterface
   */
  public function getCtrl() {
    return $this->ctrl;
  }

  /**
   * @return mixed
   */
  public function getMethod() {
    return $this->method;
  }

  /**
   * @return mixed
   */
  public function getFields() {
    return $this->fields;
  }

}
