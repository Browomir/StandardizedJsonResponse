<?php

namespace StandardizedJsonResponse;

use StandardizedJsonResponse\Exception\InvalidStatusException;

class Response
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
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData($data)
    {
        if (is_array($data) || is_null($data)) {
            $this->data = $data;
        } else {
            throw new \InvalidArgumentException('Data element is incorrect. Only array or null is allowed!');
        }
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        if (is_string($message)) {
            $this->message = $message;
        } else {
            throw new \InvalidArgumentException('Message is not a string!');
        }
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        if ($status === self::STATUS_SUCCESS || $status === self::STATUS_ERROR || $status === self::STATUS_FAIL) {
            $this->status = $status;
        } else {
            throw new InvalidStatusException('Invalid response status!');
        }
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
