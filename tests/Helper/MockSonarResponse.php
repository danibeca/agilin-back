<?php
namespace Tests\Helper;

class MockSonarResponse {

    public static function getResponse()
    {
        return '[
              {
                "id": 304,
                "uuid": "AVcJ-FAy8LphP4XAJa8-",
                "key": "Satrack.Comm.Key",
                "name": "Satrack - Servicios Comandos",
                "scope": "PRJ",
                "qualifier": "TRK",
                "date": "2017-02-10T14:29:35-0500",
                "creationDate": "2016-09-08T08:24:10-0500",
                "lname": "Satrack - Servicios Comandos",
                "version": "1.0",
                "msr": [
                  {
                    "key": "duplicated_lines_density",
                    "val": 7.3,
                    "frmt_val": "7.3%"
                  },
                  {
                    "key": "violations",
                    "val": 0,
                    "frmt_val": "0"
                  },
                  {
                    "key": "sqale_index",
                    "val": 0,
                    "frmt_val": "0"
                  }
                ]
              }
            ]';
    }

    public static function getResponse63()
    {
        return '{
                  "component": {
                    "id": "AVqdWLymZpzp6YfOfgrS",
                    "key": "quind-back",
                    "name": "quind-back",
                    "description": "No description.",
                    "qualifier": "TRK",
                    "measures": [
                      {
                        "metric": "sqale_index",
                        "value": "144",
                        "periods": [
                          {
                            "index": 1,
                            "value": "-2"
                          }
                        ]
                      },
                      {
                        "metric": "ncloc",
                        "value": "1248",
                        "periods": [
                          {
                            "index": 1,
                            "value": "7"
                          }
                        ]
                      },
                      {
                        "metric": "duplicated_lines_density",
                        "value": "0.0",
                        "periods": [
                          {
                            "index": 1,
                            "value": "0.0"
                          }
                        ]
                      },
                      {
                        "metric": "function_complexity",
                        "value": "1.5",
                        "periods": [
                          {
                            "index": 1,
                            "value": "0.0"
                          }
                        ]
                      }
                    ]
                  }
                }';
    }


}