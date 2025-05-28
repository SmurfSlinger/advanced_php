<?php
class InvalidCCNumberException extends InvalidArgumentException {
    public function __construct($message = 'No CC Number', $code = 0, $previous = null)
    {
        return parent::__construct($message, $code, $previous);
    }
}
try {
    processCC(1);
}
catch (InvalidCCNumberException $e) {
    echo $e->getMessage();
    echo get_class($e);
    echo "<br />";
} finally {
    echo "<br />";
    echo "final";
}

function processCC($num = null, $zipCode = null)
{
    try {
        validate($num, $zipCode);
    }
    catch (Exception $e)
    {
        throw $e;

    }
    echo 'processed';
}

function validate($num, $zipCode)
{
    if (is_null($num))
    {
        throw new InvalidCCNumberException();
    }
}