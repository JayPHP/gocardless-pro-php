<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Services;

/**
  *  Creditors
  *
  * @method \GoCardless\Core\ListResponse list() list(array $options = array(), array $headers = array()) gets a non-paginated list of models given finder options.
  *
  *  Each
  *  [payment](https://developer.gocardless.com/pro/#api-endpoints-payments)
  *  taken through the API is linked to a "creditor", to whom the payment is
  *  then paid out. In most cases your organisation will have a single
  *  "creditor", but the API also supports collecting payments on behalf of
  *  others.
  *  
  *  Please get in touch if you wish to use this endpoint.
  *  Currently, for Anti Money Laundering reasons, any creditors you add must be
  *  directly related to your organisation.
  */
class Creditor extends Base
{
  
  /**
    *  Create a creditor
    *
    *  Creates a new creditor.
    *
    *  Example URL: /creditors
    *  @return Creditor
    *  @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    *  @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function create($params = array(), $headers = array())
    {
        return $this->make_request('post', '/creditors', $params);
    }

  /**
    *  List creditors
    *
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/#overview-cursor-pagination)
    *  list of your creditors.
    *
    *  Example URL: /creditors
    *  @return \GoCardless\Core\ListResponse
    *  @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    *  @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function do_list($params = array(), $headers = array())
    {
        return $this->make_request('get', '/creditors', $params);
    }

  /**
    *  Get a single creditor
    *
    *  Retrieves the details of an existing creditor.
    *
    *  Example URL: /creditors/:identity
    *
    *  @param identity:  Unique identifier, beginning with "CR".
    *  @return Creditor
    *  @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    *  @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function get($identity, $params = array(), $headers = array())
    {
        $path = $this->sub_url('/creditors/:identity', array(
            'identity' => $identity
        ));

        return $this->make_request('get', $path, $params, $headers);
    }

  /**
    *  Update a creditor
    *
    *  Updates a creditor object. Supports all of the fields supported when
    *  creating a creditor.
    *
    *  Example URL: /creditors/:identity
    *
    *  @param identity:  Unique identifier, beginning with "CR".
    *  @return Creditor
    *  @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    *  @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function update($identity, $params = array(), $headers = array())
    {
        $path = $this->sub_url('/creditors/:identity', array(
            'identity' => $identity
        ));

        return $this->make_request('put', $path, $params, $headers);
    }



  /**
    *  List creditors
    *
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/#overview-cursor-pagination)
    *  list of your creditors.
    *
    *  Example URL: /creditors\
    *  @return \GoCardless\Core\Paginator
    **/
    public function all($list_max, $options = array(), $headers = array())
    {
        return new \GoCardless\Core\Paginator($this, $list_max, $this->do_list($options), $options, $headers);
    }


   /**
    * Get the resource loading class.
    * Used internally to send http requests.
    *
    * @return string
    */
    protected function resourceClass()
    {
        return '\GoCardless\Resources\Creditor';
    }

  /**
    *  Get the key the response object is enclosed in in JSON.
    *  Used internally to wrap and unwrap http requests.
    *
    *  @return string
    */
    protected function envelopeKey()
    {
        return 'creditors';
    }
}
