<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCreativesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202005\CreativePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202005\CreativePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\CreativePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\CreativePage $rval
     * @return \Google\AdsApi\AdManager\v202005\getCreativesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
