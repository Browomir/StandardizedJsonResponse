<?php

namespace Browomir;

class StandardizedJsonResponse
{
    const STATUS_SUCCESS = 'success';
    const STATUS_ERROR = 'error';
    const STATUS_FAIL = 'fail';
    const DEFAULT_MESSAGE = 'Something went wrong!';

    private $status;
    private $message;
    private $data;

    public function __construct($status = self::STATUS_ERROR, $message = self::DEFAULT_MESSAGE, $data = null)
    {
        $this->setStatus($status);
        $this->setMessage($message);
        $this->setData($data);
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * return array - it can be easily serialized
     * @return array
     */
    public function getResponse()
    {
        return array(
            'status' => $this->status,
            'data' => $this->data,
            'message' => $this->message
        );
    }

    /**
     * return JSON response
     * @return string
     */
    public function getEncodedResponse()
    {
        return json_encode($this->getResponse());
    }
}
