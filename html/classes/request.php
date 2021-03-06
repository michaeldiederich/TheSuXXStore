<?php

/**
 * This code is part of the Suxx security demo application
 *
 * *** DO NOT USE IN ANY TYPE OF PRODUCTION ***
 *
 * The application is stripped down and contains various security issues to be found
 * by course attendees. It is not meant to be used as an actual shop application or a
 * base for one.
 *
 * @author Arne Blankerts <arne.blankerts@thephp.cc>
 * @copyright 2011-2012 thePHP.cc - The PHP Consulting Company, Germany
 *
 */

class SuxxRequest {

   protected $input;
   protected $params;

   public function __construct(Array $request, Array $session) {
      $this->input = $request;
      $this->session = $session;
   }

   public function setParams(Array $params) {
      $this->params = $params;
   }

   public function getValue($key, $default = null) {
      if (isset($this->input[$key])) {
         return $this->input[$key];
      }

      if (isset($this->session[$key])) {
         return $this->session[$key];
      }

      if (isset($this->params[$key])) {
         return $this->params[$key];
      }

      return $default;
   }


}