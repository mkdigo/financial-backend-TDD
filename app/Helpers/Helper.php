<?php

namespace App\Helpers;

use Illuminate\Contracts\Validation\Validator;

class Helper {
  public static function validatorErrorsToMessage(Validator $validator)
  {
    $message = '';
    $errors = $validator->errors()->all();

    foreach($errors as $error) {
      $message .= $error . ' ';
    }

    return trim($message);
  }

  public static function validatorErrors(Validator $validator)
  {
    $errors = [];
    $fields = [];

    foreach($validator->errors()->getMessages() as $key => $errorArray) {
      $message = '';
      foreach($errorArray as $error){
        $message .= $error . ' ';
      }
      $errors[$key] = trim($message);
      $fields[] = $key;
    }

    return [$fields, $errors];
  }
}
