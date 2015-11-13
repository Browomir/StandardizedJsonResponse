<?php
namespace StandardizedJsonResponse;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testGetResponseDefault()
    {
        $expectedArray = array(
            'status' => 'error',
            'data' => null,
            'message' => 'Something went wrong!'
        );

        $response = new Response();
        $expected = array_diff($expectedArray, $response->getResponse());
        $actual = array_diff($response->getResponse(), $expectedArray);

        $this->assertSame($expected, $actual);
    }

    public function testGetResponseStructure()
    {
        $response = new Response();
        $this->assertArrayHasKey('status', $response->getResponse());
        $this->assertArrayHasKey('data', $response->getResponse());
        $this->assertArrayHasKey('message', $response->getResponse());
    }

    public function testSettersAndGetters()
    {
        $response = new Response();
        $data = array('someData');
        $message = 'Some message!';
        $status = 'success';

        $response->setData($data);
        $response->setMessage($message);
        $response->setStatus($status);

        $this->assertSame($data, $response->getData());
        $this->assertSame($message, $response->getMessage());
        $this->assertSame(Response::STATUS_SUCCESS, $response->getStatus());
    }

    public function testEncodedJsonResponse()
    {
        $expectedJson = '{"status":"success","data":{"lorem":"ipsum"},"message":"The message"}';

        $response = new Response();
        $response->setStatus(Response::STATUS_SUCCESS);
        $response->setData(
            array(
                'lorem' => 'ipsum'
            )
        );
        $response->setMessage('The message');

        $this->assertSame($expectedJson, $response->getEncodedResponse());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetDataWithNoArray()
    {
        $response = new Response();
        $response->setData(12345);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testSetMessageWithNoString()
    {
        $response = new Response();
        $response->setMessage(new \stdClass());
    }

    /**
     * @expectedException StandardizedJsonResponse\Exception\InvalidStatusException
     */
    public function testSetInvalidStatus()
    {
        $response = new Response();
        $response->setStatus('Invalid status');
    }
}
