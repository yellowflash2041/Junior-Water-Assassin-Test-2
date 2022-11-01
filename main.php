// Do NOT edit nor remove any existing code when testing or submitting
  function mainFunction($input) {
    // Place your code here
    $input = explode(' ', $input);
    $aRes = [];
    foreach ($input as $value) {
      array_push($aRes, strrev($value));
    }
    return implode(' ', $aRes);
  };
    
