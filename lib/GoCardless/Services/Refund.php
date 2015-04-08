<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Services;

/**
  *  Refund objects represent (partial) refunds of a
  *  [payment](https://developer.gocardless.com/pro/#api-endpoints-payment) back
  *  to the
  *  [customer](https://developer.gocardless.com/pro/#api-endpoints-customers).

  *   *  
  *  The API allows you to create, show, list and update your
  *  refunds.
  *  
  *  GoCardless will notify you via a
  *  [webhook](https://developer.gocardless.com/pro/#webhooks) whenever a refund
  *  is created.
  *  
  *  _Note:_ A payment that has been (partially) refunded
  *  can still receive a late failure or chargeback from the banks.
  */
class Refund extends Base
{
  
  /**
    *  Creates a new refund object.
    *  
    *  This fails with:<a
    *  name="refund_payment_invalid_state"></a><a
    *  name="total_amount_confirmation_invalid"></a>
    *  
    *  -
    *  `refund_payment_invalid_state` error if the linked
    *  [payment](https://developer.gocardless.com/pro/#api-endpoints-payments)
    *  isn't either `confirmed` or `paid_out`.
    *  
    *  -
    *  `total_amount_confirmation_invalid` if the confirmation amount doesn't
    *  match the total amount refunded for the payment. This safeguard is there
    *  to prevent two processes from creating refunds without awareness of each
    *  other.
    *  
    *
    *  Example URL: /refunds
    **/
    public function create($options = array())
    {
        return $this->makeRequest('post', '/refunds', $options);
    }

  /**
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/#overview-cursor-pagination)
    *  list of your refunds.
    *
    *  Example URL: /refunds
    **/
    public function do_list($options = array())
    {
        return $this->makeRequest('get', '/refunds', $options);
    }

  /**
    *  Retrieves all details for a single refund
    *
    *  Example URL: /refunds/:identity
    *
    *  @param identity:  Unique identifier, beginning with "RF"
    **/
    public function get($identity, $options = array())
    {
        $path = $this->subUrl('/refunds/:identity', array(
            'identity' => $identity
        ));

        return $this->makeRequest('get', $path, $options);
    }

  /**
    *  Updates a refund object.
    *
    *  Example URL: /refunds/:identity
    *
    *  @param identity:  Unique identifier, beginning with "RF"
    **/
    public function update($identity, $options = array())
    {
        $path = $this->subUrl('/refunds/:identity', array(
            'identity' => $identity
        ));

        return $this->makeRequest('put', $path, $options);
    }


  /**
    * Handles functions in the API that are normally PHP reserved words.
    */
    public function __call($name, $args)
    {
        $attemptName = 'do_' . $name;
        if (method_exists($this, $attemptName)) {
            return call_user_func_array(array($this, $attemptName), $args);
        }
        return false;
    }

  /**
   * Get the resource loading class.
   */
    protected function resourceClass()
    {
        return '\GoCardless\Resources\Refund';
    }

  /**
    *  Get the key the response object is enclosed in in JSON.
    */
    protected function envelopeKey()
    {
        return 'refunds';
    }
}
