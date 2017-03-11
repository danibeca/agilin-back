<?php
namespace Tests\Helper;

class MockSonar63Response {

    public static function getResponseTypeOne()
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

    public static function getResponseTypeTwo()
    {
        return '{
  "total": 7,
  "p": 1,
  "ps": 100,
  "paging": {
    "pageIndex": 1,
    "pageSize": 100,
    "total": 7
  },
  "issues": [
    {
      "organization": "default-organization",
      "key": "AVqc-Xm5ayFRw6rZSVfF",
      "rule": "javascript:UnusedFunctionArgument",
      "severity": "MAJOR",
      "component": "quind-front:src/client/app/applications/controller/applications.controller.js",
      "componentId": 1592503,
      "project": "quind-front",
      "line": 9,
      "textRange": {
        "startLine": 9,
        "endLine": 9,
        "startOffset": 64,
        "endOffset": 70
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove the unused function parameter \"logger\".",
      "effort": "5min",
      "debt": "5min",
      "assignee": "danibeca@github",
      "author": "danibeca@okazo.co",
      "tags": [
        "cert",
        "misra",
        "unused"
      ],
      "creationDate": "2017-03-05T06:37:54+0100",
      "updateDate": "2017-03-05T06:37:54+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default-organization",
      "key": "AVqM_9aJayFRw6rZRNTx",
      "rule": "common-js:DuplicatedBlocks",
      "severity": "MAJOR",
      "component": "quind-front:src/client/app/applications/route/applications.route.js",
      "componentId": 1592505,
      "project": "quind-front",
      "flows": [],
      "status": "OPEN",
      "message": "1 duplicated blocks of code must be removed.",
      "effort": "20min",
      "debt": "20min",
      "assignee": "danibeca@github",
      "author": "danibeca@okazo.co",
      "tags": [
        "pitfall"        
      ],
      "creationDate": "2017-02-26T01:18:47+0100",
      "updateDate": "2017-03-04T06:53:52+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default-organization",
      "key": "AVqM_9fiayFRw6rZRNT7",
      "rule": "common-js:DuplicatedBlocks",
      "severity": "MAJOR",
      "component": "quind-front:src/client/app/systems/route/systems.route.js",
      "componentId": 1592625,
      "project": "quind-front",
      "flows": [],
      "status": "OPEN",
      "message": "1 duplicated blocks of code must be removed.",
      "effort": "20min",
      "debt": "20min",
      "assignee": "danibeca@github",
      "author": "danibeca@okazo.co",
      "tags": [
        "pitfall"
      ],
      "creationDate": "2017-02-26T01:18:47+0100",
      "updateDate": "2017-03-04T06:53:52+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default-organization",
      "key": "AVqM_9fDayFRw6rZRNT5",
      "rule": "javascript:CollapsibleIfStatements",
      "severity": "MAJOR",
      "component": "quind-front:src/client/app/core/service/request.interceptor.js",
      "componentId": 1592613,
      "project": "quind-front",
      "line": 37,
      "textRange": {
        "startLine": 37,
        "endLine": 37,
        "startOffset": 12,
        "endOffset": 56
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 38,
                "endLine": 38,
                "startOffset": 16,
                "endOffset": 42
              },
              "msg": "Nested \"if\" statement"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Merge this if statement with the nested one.",
      "effort": "5min",
      "debt": "5min",
      "assignee": "danibeca@github",
      "author": "danibeca@okazo.co",
      "tags": [
        "clumsy"
      ],
      "creationDate": "2017-02-24T04:29:16+0100",
      "updateDate": "2017-03-04T06:53:52+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default-organization",
      "key": "AVqM_9bWayFRw6rZRNT0",
      "rule": "javascript:S1067",
      "severity": "CRITICAL",
      "component": "quind-front:src/client/app/blocks/router/provider/router-helper.provider.js",
      "componentId": 1592534,
      "project": "quind-front",
      "line": 69,
      "textRange": {
        "startLine": 69,
        "endLine": 71,
        "startOffset": 42,
        "endOffset": 44
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 70,
                "endLine": 70,
                "startOffset": 90,
                "endOffset": 92
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 69,
                "endLine": 69,
                "startOffset": 51,
                "endOffset": 53
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 70,
                "endLine": 70,
                "startOffset": 59,
                "endOffset": 61
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 70,
                "endLine": 70,
                "startOffset": 43,
                "endOffset": 45
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Reduce the number of conditional operators (4) used in the expression (maximum allowed 3).",
      "effort": "6min",
      "debt": "6min",
      "assignee": "danibeca@github",
      "author": "danibeca@okazo.co",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-02T02:44:48+0100",
      "updateDate": "2017-03-04T06:53:52+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default-organization",
      "key": "AVqM_9cTayFRw6rZRNT1",
      "rule": "javascript:S3776",
      "severity": "CRITICAL",
      "component": "quind-front:src/client/app/blocks/theme/components/baSidebar/baSidebarHelpers.directive.js",
      "componentId": 1592554,
      "project": "quind-front",
      "line": 58,
      "textRange": {
        "startLine": 58,
        "endLine": 58,
        "startOffset": 4,
        "endOffset": 12
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 61,
                "endLine": 61,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 61,
                "endLine": 61,
                "startOffset": 21,
                "endOffset": 23
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 82,
                "endLine": 82,
                "startOffset": 62,
                "endOffset": 63
              },
              "msg": "+3 (incl. 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 87,
                "endLine": 87,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+2 (incl. 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 92,
                "endLine": 92,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+3 (incl. 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 92,
                "endLine": 92,
                "startOffset": 39,
                "endOffset": 41
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 99,
                "endLine": 99,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+3 (incl. 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 99,
                "endLine": 99,
                "startOffset": 38,
                "endOffset": 40
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 107,
                "endLine": 107,
                "startOffset": 25,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this function to reduce its Cognitive Complexity from 16 to the 15 allowed.",
      "effort": "6min",
      "debt": "6min",
      "assignee": "danibeca@github",
      "author": "danibeca@okazo.co",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-02T02:44:48+0100",
      "updateDate": "2017-03-04T06:53:52+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default-organization",
      "key": "AVqM_9fDayFRw6rZRNT4",
      "rule": "javascript:S2228",
      "severity": "MINOR",
      "component": "quind-front:src/client/app/core/service/request.interceptor.js",
      "componentId": 1592613,
      "project": "quind-front",
      "line": 34,
      "textRange": {
        "startLine": 34,
        "endLine": 34,
        "startOffset": 16,
        "endOffset": 27
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this logging statement.",
      "effort": "5min",
      "debt": "5min",
      "assignee": "danibeca@github",
      "author": "danibeca@okazo.co",
      "tags": [
        "owasp-a6",
        "user-experience"
      ],
      "creationDate": "2016-12-02T02:44:48+0100",
      "updateDate": "2017-03-04T06:53:52+0100",
      "type": "VULNERABILITY"
    }
  ],
  "components": [
    {
      "organization": "default-organization",
      "id": 1592505,
      "key": "quind-front:src/client/app/applications/route/applications.route.js",
      "uuid": "AVqX4eysayFRw6rZSMfC",
      "enabled": true,
      "qualifier": "FIL",
      "name": "applications.route.js",
      "longName": "src/client/app/applications/route/applications.route.js",
      "path": "src/client/app/applications/route/applications.route.js",
      "projectId": 1583310,
      "subProjectId": 1583310
    },
    {
      "organization": "default-organization",
      "id": 1592613,
      "key": "quind-front:src/client/app/core/service/request.interceptor.js",
      "uuid": "AVqX4eyuayFRw6rZSMgu",
      "enabled": true,
      "qualifier": "FIL",
      "name": "request.interceptor.js",
      "longName": "src/client/app/core/service/request.interceptor.js",
      "path": "src/client/app/core/service/request.interceptor.js",
      "projectId": 1583310,
      "subProjectId": 1583310
    },
    {
      "organization": "default-organization",
      "id": 1592625,
      "key": "quind-front:src/client/app/systems/route/systems.route.js",
      "uuid": "AVqX4eyuayFRw6rZSMg6",
      "enabled": true,
      "qualifier": "FIL",
      "name": "systems.route.js",
      "longName": "src/client/app/systems/route/systems.route.js",
      "path": "src/client/app/systems/route/systems.route.js",
      "projectId": 1583310,
      "subProjectId": 1583310
    },
    {
      "organization": "default-organization",
      "id": 1583310,
      "key": "quind-front",
      "uuid": "AVqM_9JEZpzp6YfOfgUs",
      "enabled": true,
      "qualifier": "TRK",
      "name": "quind-front",
      "longName": "quind-front"
    },
    {
      "organization": "default-organization",
      "id": 1592534,
      "key": "quind-front:src/client/app/blocks/router/provider/router-helper.provider.js",
      "uuid": "AVqX4eytayFRw6rZSMff",
      "enabled": true,
      "qualifier": "FIL",
      "name": "router-helper.provider.js",
      "longName": "src/client/app/blocks/router/provider/router-helper.provider.js",
      "path": "src/client/app/blocks/router/provider/router-helper.provider.js",
      "projectId": 1583310,
      "subProjectId": 1583310
    },
    {
      "organization": "default-organization",
      "id": 1592554,
      "key": "quind-front:src/client/app/blocks/theme/components/baSidebar/baSidebarHelpers.directive.js",
      "uuid": "AVqX4eytayFRw6rZSMfz",
      "enabled": true,
      "qualifier": "FIL",
      "name": "baSidebarHelpers.directive.js",
      "longName": "src/client/app/blocks/theme/components/baSidebar/baSidebarHelpers.directive.js",
      "path": "src/client/app/blocks/theme/components/baSidebar/baSidebarHelpers.directive.js",
      "projectId": 1583310,
      "subProjectId": 1583310
    },
    {
      "organization": "default-organization",
      "id": 1592503,
      "key": "quind-front:src/client/app/applications/controller/applications.controller.js",
      "uuid": "AVqX4eysayFRw6rZSMfA",
      "enabled": true,
      "qualifier": "FIL",
      "name": "applications.controller.js",
      "longName": "src/client/app/applications/controller/applications.controller.js",
      "path": "src/client/app/applications/controller/applications.controller.js",
      "projectId": 1583310,
      "subProjectId": 1583310
    }
  ]
}';
    }


}