<?php
namespace VasilDakov\MaxOptra;

use VasilDakov\MaxOptra\Request;
use VasilDakov\MaxOptra\Response;
use VasilDakov\MaxOptra\Middleware\JsonStream;

use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;

use InvalidArgumentException;
use Zend\Config\Config;


/**
 * http://beta.maxoptra.com/rest/2/authentication/createSession?accountID=ws&password=dontpreach&user=paul.rooney
 * host: beta.maxoptra.com
 * accountID: ws
 * user: paul.rooney
 * password: dontpreach
 */

// the act of retrieving a response from a service should be separate from interpreting the contents of the response.
// A basic client should reach out to to a service with a request, fetch data, and return it as a string
// 

class MaxOptra
{
    const API_VERSION   = '2.1';

    const VERSION       = '0.1';

    /**
     * @var \GuzzleHttp\ClientInterface $client
     */
    private $client;

    /**
     * @var array $headers
     */
    private $headers;


    /**
     * @param \GuzzleHttp\ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
        $this->headers = [
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
            'Accept' => 'application/xml',
        ];
    }

    /**
     * API for authentication in Maxoptra
     * Input data for authentication request should be sent as
     * attributes of request and should not be included into request body.
     *
     * @param  Request\Authentication    $request
     * @return Response                  $response
     */
    public function createSession(Request\Authentication $request)
    {
        $response = $this->client->request('POST', 'authentication/createSession', [
            'headers' => $this->headers,
            'query' => [
                'accountID' => $request->getAccount(),
                'user'      => $request->getUser(),
                'password'  => $request->getPassword()
            ],
            'body' => ''
        ]);

        return $response;
    }


    /**
     * @codeCoverageIgnore
     *
     * Create and update an orders in Maxoptra uses application/xml as
     * its acceptable request representation, and the standard HTTP method POST.
     *
     * URL: /rest/2/distribution-api/orders/save
     * Method: POST
     * Acceptable request representations: application/xml
     */
    public function saveOrder(Request\Save $request)
    {
        //
    }


    /**
     * @codeCoverageIgnore
     * @param  RequestInterface $request
     * @return
     */
    public function deleteOrder(Request\Delete $request)
    {
        //
    }

    /**
     * URL: /rest/2/distribution-api/orders/getOrderStatuses
     * Method: POST
     * Acceptable request representations: application/x-www-form-urlencoded
     * All attributes should be sent in request body for this request.
     */
    public function getOrderStatuses($sessionID, $orders)
    {
        // Request body: sessionID=eca3b9f1afa24988834ceb5c6aafdcbf&orders=1071088*1070773*1070807*gsdfg
        if (!isset($sessionID) || !isset($orders)) {
            throw new InvalidArgumentException;
        }

        $response = $this->client->request('POST', 'distribution-api/orders/getOrderStatuses', [
            'headers' => $this->headers,
            'query' => [
                'sessionID' => $sessionID,
                'orders'    => $orders,
            ]
        ]);

        return $response;
    }



    /**
     * @codeCoverageIgnore
     */
    public function test()
    {
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded; charset=UTF-8',
            'Accept' => 'application/xml',
        ];

        $body    = [];
        $request = new Psr7\Request('POST', 'authentication/createSession', $headers, $body);
        $response = $this->client->send($request);
    }
}
