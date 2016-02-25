<?php
// @codeCoverageIgnore
return [
    'baseUrl' => 'review.maxoptra.com',
    'operations' => [
        'createSession' => [
            'uri' => 'rest/2/authentication/createSession?accountID={accountID}&password={password}&user={user}',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'accountID' => [
                    'location' => 'uri',
                    'description' => 'Your account ID',
                    'required' => true
                ],
                'user' => [
                    'location' => 'uri',
                    'description' => 'Your account username',
                    'required' => true
                ],
                'password' => [
                    'location' => 'uri',
                    'description' => 'Your account password',
                    'required' => true
                ],
            ]
        ],
        'getAreaOfControls' => [
            'uri' => 'rest/2/distribution-api/objects/getAreaOfControls',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'sessionID' => [
                    'location' => 'postField',
                    'description' => 'Your session ID',
                    'required' => true
                ],
            ]
        ],
        'getVehicles' => [
            'uri' => 'rest/2/distribution-api/objects/getVehicles',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'sessionID' => [
                    'location' => 'postField',
                    'description' => 'Your session ID',
                    'requireed' => true
                ],
                'date' => [
                    'location' => 'postField',
                    'description' => 'Date the vehicle should be available on',
                    'required' => true
                ]
            ]
        ],
        'getVehiclesByAoc' => [
            'uri' => 'rest/2/distribution-api/objects/getVehiclesByAoc',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'sessionID' => [
                    'location' => 'postField',
                    'description' => 'Your session ID',
                    'requireed' => true
                ],
                'date' => [
                    'location' => 'postField',
                    'description' => 'Date from',
                    'required' => true
                ],
                'aocID' => [
                    'location' => 'postField',
                    'description' => 'ID of the distribution centre',
                    'required' => true
                ]
            ]
        ],
        'exportVehicles' => [
            'uri' => 'rest/2/distribution-api/objects/exportVehicles',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'sessionID' => [
                    'location' => 'postField',
                    'description' => 'Your session ID',
                    'required' => true
                ],
            ]
        ],
        'importVehicles' => [
            'uri' => 'rest/2/distribution-api/objects/importVehicles',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'body' => [
                    'location' => 'body',
                    'description' => 'Post body',
                    'required' => true
                ]
            ]
        ],
        'postOrders' => [
            'uri' => 'rest/2/distribution-api/orders/save',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'body' => [
                    'location' => 'body',
                    'description' => 'Post body',
                    'required' => true
                ]
            ]
        ],
        'deleteOrders' => [
            'uri' => 'rest/2/distribution-api/orders/delete',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'body' => [
                    'location' => 'body',
                    'description' => 'Post body',
                    'required' => true
                ]
            ]
        ],
        'getOrdersWithZone' => [
            'uri' => 'rest/2/distribution-api/orders/getOrdersWithZone',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'sessionID' => [
                    'location' => 'postField',
                    'description' => 'Your session ID',
                    'required' => true
                ],
                'aocID' => [
                    'location' => 'postField',
                    'description' => 'ID of the distribution centre',
                    'required' => true
                ],
                'date' => [
                    'location' => 'postField',
                    'description' => 'Requested date',
                    'required' => true
                ]
            ]
        ],
        'getOrderStatuses' => [
            'uri' => 'rest/2/distribution-api/orders/getOrderStatuses',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'sessionID' => [
                    'location' => 'postField',
                    'description' => 'Your session ID',
                    'required' => true
                ],
                'orders' => [
                    'location' => 'postField',
                    'description' => 'Order refs to query',
                    'required' => true
                ]
            ]
        ],
        'getOrdersLog' => [
            'uri' => 'rest/2/distribution-api/orders/getOrdersLog',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'body' => [
                    'location' => 'body',
                    'description' => 'Post body',
                    'required' => true
                ]
            ]
        ],
        'getPerformers' => [
            'uri' => 'rest/2/distribution-api/objects/getPerformers',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'sessionID' => [
                    'location' => 'postField',
                    'description' => 'Your session ID',
                    'required' => true
                ],
                'aocID' => [
                    'location' => 'postField',
                    'description' => 'ID of the distribution centre',
                    'required' => true
                ],
                'date' => [
                    'location' => 'postField',
                    'description' => 'Requested date',
                    'required' => true
                ]
            ]
        ],
        'exportPerformers' => [
            'uri' => 'rest/2/distribution-api/objects/exportPerformers',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'sessionID' => [
                    'location' => 'postField',
                    'description' => 'Your session ID',
                    'required' => true
                ],
            ]
        ],
        'importPerformers' => [
            'uri' => 'rest/2/distribution-api/objects/importPerformers',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'body' => [
                    'location' => 'body',
                    'description' => 'Post body',
                    'required' => true
                ]
            ],
        ],
        'assignPerformersToVehicles' => [
            'uri' => 'rest/2/distribution-api/objects/assignPerformersToVehicles',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'body' => [
                    'location' => 'body',
                    'description' => 'Post body',
                    'required' => true
                ]
            ],
        ],
        'getSchedulingZones' => [
            'uri' => 'rest/2/distribution-api/objects/getSchedulingZones',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'sessionID' => [
                    'location' => 'postField',
                    'description' => 'Your session ID',
                    'required' => true
                ],
                'aocID' => [
                    'location' => 'postField',
                    'description' => 'ID of the distribution centre',
                    'required' => true
                ],
            ]
        ],
        'getScheduleByAOCOnDate' => [
            'uri' => 'rest/2/distribution-api/schedules/getScheduleByAOCOnDate',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'sessionID' => [
                    'location' => 'postField',
                    'description' => 'Your session ID',
                    'required' => true
                ],
                'date' => [
                    'location' => 'postField',
                    'description' => 'Date',
                    'required' => true
                ],
                'aocID' => [
                    'location' => 'postField',
                    'description' => 'ID of the distribution centre',
                    'required' => true
                ],
            ]
        ],
        'getScheduleByVehicleOnDate' => [
            'uri' => 'rest/2/distribution-api/schedules/getScheduleByVehicleOnDate',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'sessionID' => [
                    'location' => 'postField',
                    'description' => 'Your session ID',
                    'required' => true
                ],
                'date' => [
                    'location' => 'postField',
                    'description' => 'Date',
                    'required' => true
                ],
                'vehicleID' => [
                    'location' => 'postField',
                    'description' => 'ID of the vehicle',
                    'required' => true
                ],
            ]
        ],
        'getScheduleByVehicleRun' => [
            'uri' => 'rest/2/distribution-api/schedules/getScheduleByVehicleRun',
            'httpMethod' => 'POST',
            'responseModel' => 'getResponse',
            'parameters' => [
                'sessionID' => [
                    'location' => 'postField',
                    'description' => 'Your session ID',
                    'required' => true
                ],
                'date' => [
                    'location' => 'postField',
                    'description' => 'Date',
                    'required' => true
                ],
                'vehicleID' => [
                    'location' => 'postField',
                    'description' => 'ID of the vehicle',
                    'required' => true
                ],
                'runNumber' => [
                    'location' => 'postField',
                    'description' => 'ID of the run number',
                    'required' => true
                ]
            ]
        ],
    ],
    'models' => [
        'getResponse' => [
            'type' => 'object',
            'properties' => [
                'statusCode' => [
                    'location' => 'statusCode'
                ],
                'response' => [
                    'location' => 'body'
                ]
            ],
        ]
    ]
];
