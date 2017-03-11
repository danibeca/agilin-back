<?php
namespace Tests\Helper;

class MockSonar62Response {

    public static function getResponseTypeOne()
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

    public static function getResponseTypeTwo()
    {
        return '{
  "total": 290,
  "p": 1,
  "ps": 100,
  "paging": {
    "pageIndex": 1,
    "pageSize": 100,
    "total": 290
  },
  "issues": [
    {
      "key": "AVq6URQxOLvsYAN1p4-o",
      "rule": "javascript:StrictMode",
      "severity": "INFO",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/GroupsDirective.js",
      "componentId": 2854,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 1,
      "textRange": {
        "startLine": 1,
        "endLine": 1,
        "startOffset": 0,
        "endOffset": 14
      },
      "flows": [],
      "status": "OPEN",
      "message": "Use of JavaScript strict mode may result in unexpected behaviour in some browsers.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "cross-browser",
        "user-experience"
      ],
      "creationDate": "2017-03-10T17:22:05-0500",
      "updateDate": "2017-03-10T17:22:05-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVcpUPWNOJqQ_zIgIDgr",
      "rule": "javascript:S138",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 19,
      "textRange": {
        "startLine": 19,
        "endLine": 19,
        "startOffset": 0,
        "endOffset": 65
      },
      "flows": [],
      "status": "OPEN",
      "message": "This function has 948 lines, which is greater than the 100 lines authorized. Split it into smaller functions.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-03-10T10:31:05-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVdTVNWAOJqQ_zIgIFlB",
      "rule": "javascript:S2814",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 310,
      "textRange": {
        "startLine": 310,
        "endLine": 310,
        "startOffset": 0,
        "endOffset": 104
      },
      "flows": [],
      "status": "OPEN",
      "message": "Rename \"response\" as this name is already used in declaration at line 284.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "pitfall"
      ],
      "creationDate": "2016-09-22T14:16:56-0500",
      "updateDate": "2017-03-10T10:31:05-0500",
      "type": "BUG"
    },
    {
      "key": "AVeMkXskOJqQ_zIgIFst",
      "rule": "javascript:S2814",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 527,
      "textRange": {
        "startLine": 527,
        "endLine": 527,
        "startOffset": 0,
        "endOffset": 31
      },
      "flows": [],
      "status": "OPEN",
      "message": "Rename \"data\" as this name is already used in declaration at line 522.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "pitfall"
      ],
      "creationDate": "2016-10-03T17:01:24-0500",
      "updateDate": "2017-03-10T10:31:05-0500",
      "type": "BUG"
    },
    {
      "key": "AVpb8l0rZIQKwRDzKHhc",
      "rule": "javascript:S1854",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 268,
      "textRange": {
        "startLine": 268,
        "endLine": 268,
        "startOffset": 12,
        "endOffset": 19
      },
      "flows": [],
      "status": "REOPENED",
      "message": "Remove this useless assignment to local variable \"pinrUrl\"",
      "effort": "15min",
      "debt": "15min",
      "author": "",
      "tags": [
        "cert",
        "cwe",
        "unused"
      ],
      "creationDate": "2017-02-20T09:34:11-0500",
      "updateDate": "2017-03-10T10:31:05-0500",
      "type": "BUG"
    },
    {
      "key": "AVq42MqGOLvsYAN1p4-S",
      "rule": "csharpsquid:S2292",
      "severity": "MINOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028:Entities/Event.cs",
      "componentId": 1923,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028",
      "line": 80,
      "textRange": {
        "startLine": 80,
        "endLine": 80,
        "startOffset": 0,
        "endOffset": 33
      },
      "flows": [],
      "status": "OPEN",
      "message": "Make this an auto-implemented property and remove its backing field.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "clumsy"
      ],
      "creationDate": "2017-03-10T10:31:05-0500",
      "updateDate": "2017-03-10T10:31:05-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVjbKeVt4WSHTcNo74uH",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 19,
      "textRange": {
        "startLine": 19,
        "endLine": 19,
        "startOffset": 9,
        "endOffset": 27
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 19,
                "endLine": 19,
                "startOffset": 0,
                "endOffset": 8
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 31,
                "endLine": 31,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 32,
                "endLine": 32,
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
                "startLine": 33,
                "endLine": 33,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 38,
                "endLine": 38,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 43,
                "endLine": 43,
                "startOffset": 31,
                "endOffset": 39
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 44,
                "endLine": 44,
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
                "startLine": 44,
                "endLine": 44,
                "startOffset": 41,
                "endOffset": 43
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 45,
                "endLine": 45,
                "startOffset": 23,
                "endOffset": 31
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 50,
                "endLine": 50,
                "startOffset": 12,
                "endOffset": 17
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 50,
                "endLine": 50,
                "startOffset": 27,
                "endOffset": 29
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 52,
                "endLine": 52,
                "startOffset": 16,
                "endOffset": 18
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
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 71,
                "endLine": 71,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 83,
                "endLine": 83,
                "startOffset": 23,
                "endOffset": 31
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 87,
                "endLine": 87,
                "startOffset": 26,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 88,
                "endLine": 88,
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
                "startLine": 89,
                "endLine": 89,
                "startOffset": 23,
                "endOffset": 31
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 93,
                "endLine": 93,
                "startOffset": 44,
                "endOffset": 52
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 94,
                "endLine": 94,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 105,
                "endLine": 105,
                "startOffset": 37,
                "endOffset": 45
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 106,
                "endLine": 106,
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
                "startLine": 112,
                "endLine": 112,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 114,
                "endLine": 114,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 116,
                "endLine": 116,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 126,
                "endLine": 126,
                "startOffset": 29,
                "endOffset": 37
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 133,
                "endLine": 133,
                "startOffset": 29,
                "endOffset": 37
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 134,
                "endLine": 134,
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
                "startLine": 147,
                "endLine": 147,
                "startOffset": 41,
                "endOffset": 49
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 150,
                "endLine": 150,
                "startOffset": 28,
                "endOffset": 36
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 152,
                "endLine": 152,
                "startOffset": 31,
                "endOffset": 39
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 153,
                "endLine": 153,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 164,
                "endLine": 164,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 166,
                "endLine": 166,
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
                "startLine": 167,
                "endLine": 167,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 169,
                "endLine": 169,
                "startOffset": 13,
                "endOffset": 15
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 170,
                "endLine": 170,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 172,
                "endLine": 172,
                "startOffset": 13,
                "endOffset": 15
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 173,
                "endLine": 173,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 175,
                "endLine": 175,
                "startOffset": 13,
                "endOffset": 15
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 176,
                "endLine": 176,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 182,
                "endLine": 182,
                "startOffset": 26,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 184,
                "endLine": 184,
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
                "startLine": 185,
                "endLine": 185,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 187,
                "endLine": 187,
                "startOffset": 13,
                "endOffset": 15
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 188,
                "endLine": 188,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 190,
                "endLine": 190,
                "startOffset": 13,
                "endOffset": 15
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 191,
                "endLine": 191,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 193,
                "endLine": 193,
                "startOffset": 13,
                "endOffset": 15
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 194,
                "endLine": 194,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 200,
                "endLine": 200,
                "startOffset": 36,
                "endOffset": 44
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 203,
                "endLine": 203,
                "startOffset": 38,
                "endOffset": 46
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 210,
                "endLine": 210,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 212,
                "endLine": 212,
                "startOffset": 36,
                "endOffset": 44
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 214,
                "endLine": 214,
                "startOffset": 43,
                "endOffset": 51
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 215,
                "endLine": 215,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 225,
                "endLine": 225,
                "startOffset": 23,
                "endOffset": 31
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 229,
                "endLine": 229,
                "startOffset": 33,
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
                "startLine": 230,
                "endLine": 230,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 238,
                "endLine": 238,
                "startOffset": 30,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 240,
                "endLine": 240,
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
                "startLine": 246,
                "endLine": 246,
                "startOffset": 29,
                "endOffset": 37
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 249,
                "endLine": 249,
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
                "startLine": 278,
                "endLine": 278,
                "startOffset": 34,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 280,
                "endLine": 280,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 301,
                "endLine": 301,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 309,
                "endLine": 309,
                "startOffset": 17,
                "endOffset": 19
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 330,
                "endLine": 330,
                "startOffset": 37,
                "endOffset": 45
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 333,
                "endLine": 333,
                "startOffset": 48,
                "endOffset": 56
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 344,
                "endLine": 344,
                "startOffset": 46,
                "endOffset": 54
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 351,
                "endLine": 351,
                "startOffset": 37,
                "endOffset": 45
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 353,
                "endLine": 353,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 371,
                "endLine": 371,
                "startOffset": 32,
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
                "startLine": 375,
                "endLine": 375,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 392,
                "endLine": 392,
                "startOffset": 30,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 410,
                "endLine": 410,
                "startOffset": 29,
                "endOffset": 37
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 416,
                "endLine": 416,
                "startOffset": 29,
                "endOffset": 37
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 443,
                "endLine": 443,
                "startOffset": 29,
                "endOffset": 37
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 446,
                "endLine": 446,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 457,
                "endLine": 457,
                "startOffset": 28,
                "endOffset": 36
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 459,
                "endLine": 459,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 462,
                "endLine": 462,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 473,
                "endLine": 473,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 481,
                "endLine": 481,
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
                "startLine": 488,
                "endLine": 488,
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
                "startLine": 492,
                "endLine": 492,
                "startOffset": 34,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 495,
                "endLine": 495,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 522,
                "endLine": 522,
                "startOffset": 32,
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
                "startLine": 526,
                "endLine": 526,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 538,
                "endLine": 538,
                "startOffset": 34,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 540,
                "endLine": 540,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 541,
                "endLine": 541,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 541,
                "endLine": 541,
                "startOffset": 52,
                "endOffset": 54
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 543,
                "endLine": 543,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 549,
                "endLine": 549,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 555,
                "endLine": 555,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 555,
                "endLine": 555,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 560,
                "endLine": 560,
                "startOffset": 56,
                "endOffset": 64
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 561,
                "endLine": 561,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 577,
                "endLine": 577,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 600,
                "endLine": 600,
                "startOffset": 45,
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
                "startLine": 604,
                "endLine": 604,
                "startOffset": 45,
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
                "startLine": 618,
                "endLine": 618,
                "startOffset": 51,
                "endOffset": 59
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 621,
                "endLine": 621,
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
                "startLine": 625,
                "endLine": 625,
                "startOffset": 41,
                "endOffset": 49
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 627,
                "endLine": 627,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 627,
                "endLine": 627,
                "startOffset": 77,
                "endOffset": 79
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 629,
                "endLine": 629,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 639,
                "endLine": 639,
                "startOffset": 35,
                "endOffset": 43
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 645,
                "endLine": 645,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 646,
                "endLine": 646,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 648,
                "endLine": 648,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 652,
                "endLine": 652,
                "startOffset": 48,
                "endOffset": 56
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 655,
                "endLine": 655,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 672,
                "endLine": 672,
                "startOffset": 45,
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
                "startLine": 678,
                "endLine": 678,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 687,
                "endLine": 687,
                "startOffset": 49,
                "endOffset": 57
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 688,
                "endLine": 688,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 700,
                "endLine": 700,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 713,
                "endLine": 713,
                "startOffset": 46,
                "endOffset": 54
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 718,
                "endLine": 718,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 725,
                "endLine": 725,
                "startOffset": 51,
                "endOffset": 59
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 728,
                "endLine": 728,
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
                "startLine": 732,
                "endLine": 732,
                "startOffset": 41,
                "endOffset": 49
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 734,
                "endLine": 734,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 734,
                "endLine": 734,
                "startOffset": 77,
                "endOffset": 79
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 736,
                "endLine": 736,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 746,
                "endLine": 746,
                "startOffset": 42,
                "endOffset": 50
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 747,
                "endLine": 747,
                "startOffset": 37,
                "endOffset": 45
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 753,
                "endLine": 753,
                "startOffset": 33,
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
                "startLine": 755,
                "endLine": 755,
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
                "startLine": 756,
                "endLine": 756,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 759,
                "endLine": 759,
                "startOffset": 41,
                "endOffset": 49
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 767,
                "endLine": 767,
                "startOffset": 39,
                "endOffset": 47
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 769,
                "endLine": 769,
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
                "startLine": 770,
                "endLine": 770,
                "startOffset": 41,
                "endOffset": 49
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 778,
                "endLine": 778,
                "startOffset": 26,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 803,
                "endLine": 803,
                "startOffset": 29,
                "endOffset": 37
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 810,
                "endLine": 810,
                "startOffset": 8,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 813,
                "endLine": 813,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 827,
                "endLine": 827,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 843,
                "endLine": 843,
                "startOffset": 8,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 848,
                "endLine": 848,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 859,
                "endLine": 859,
                "startOffset": 32,
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
                "startLine": 864,
                "endLine": 864,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 865,
                "endLine": 865,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 868,
                "endLine": 868,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 872,
                "endLine": 872,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 877,
                "endLine": 877,
                "startOffset": 42,
                "endOffset": 50
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 880,
                "endLine": 880,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 897,
                "endLine": 897,
                "startOffset": 45,
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
                "startLine": 903,
                "endLine": 903,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 914,
                "endLine": 914,
                "startOffset": 49,
                "endOffset": 57
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 915,
                "endLine": 915,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 927,
                "endLine": 927,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 938,
                "endLine": 938,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 946,
                "endLine": 946,
                "startOffset": 29,
                "endOffset": 37
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 951,
                "endLine": 951,
                "startOffset": 25,
                "endOffset": 33
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 953,
                "endLine": 953,
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
                "startLine": 956,
                "endLine": 956,
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
                "startLine": 956,
                "endLine": 956,
                "startOffset": 26,
                "endOffset": 28
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 958,
                "endLine": 958,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 959,
                "endLine": 959,
                "startOffset": 15,
                "endOffset": 17
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 961,
                "endLine": 961,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 963,
                "endLine": 963,
                "startOffset": 13,
                "endOffset": 15
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 965,
                "endLine": 965,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 166 which is greater than 10 authorized.",
      "effort": "2h46min",
      "debt": "2h46min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-07T16:21:18-0500",
      "updateDate": "2017-03-06T17:24:44-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVqluiomZIQKwRDzKIAk",
      "rule": "javascript:CommentedCode",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 216,
      "textRange": {
        "startLine": 216,
        "endLine": 216,
        "startOffset": 0,
        "endOffset": 90
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this commented out code.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "misra",
        "unused"
      ],
      "creationDate": "2017-03-06T17:24:44-0500",
      "updateDate": "2017-03-06T17:24:44-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVqluiomZIQKwRDzKIAl",
      "rule": "javascript:CommentedCode",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 217,
      "textRange": {
        "startLine": 217,
        "endLine": 217,
        "startOffset": 0,
        "endOffset": 94
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this commented out code.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "misra",
        "unused"
      ],
      "creationDate": "2017-03-06T17:24:44-0500",
      "updateDate": "2017-03-06T17:24:44-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVdTVNWAOJqQ_zIgIFk_",
      "rule": "javascript:S138",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 246,
      "textRange": {
        "startLine": 246,
        "endLine": 246,
        "startOffset": 0,
        "endOffset": 48
      },
      "flows": [],
      "status": "OPEN",
      "message": "This function has 145 lines, which is greater than the 100 lines authorized. Split it into smaller functions.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-09-22T14:16:56-0500",
      "updateDate": "2017-03-02T10:04:58-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpyKsCCZIQKwRDzKH89",
      "rule": "javascript:CommentedCode",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/app.js",
      "componentId": 798,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 15,
      "textRange": {
        "startLine": 15,
        "endLine": 15,
        "startOffset": 0,
        "endOffset": 79
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this commented out code.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "misra",
        "unused"
      ],
      "creationDate": "2017-02-24T17:07:27-0500",
      "updateDate": "2017-02-24T17:07:27-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVcpUPU3OJqQ_zIgIDfZ",
      "rule": "javascript:S138",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 174,
      "textRange": {
        "startLine": 174,
        "endLine": 174,
        "startOffset": 0,
        "endOffset": 153
      },
      "flows": [],
      "status": "OPEN",
      "message": "This function has 435 lines, which is greater than the 100 lines authorized. Split it into smaller functions.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-02-24T12:06:33-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVcpUPU6OJqQ_zIgIDfw",
      "rule": "javascript:S1871",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 506,
      "textRange": {
        "startLine": 506,
        "endLine": 508,
        "startOffset": 71,
        "endOffset": 21
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 503,
                "endLine": 505,
                "startOffset": 54,
                "endOffset": 21
              },
              "msg": "Original"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Either merge this branch with the identical one on line \"503\" or change one of the implementations.",
      "effort": "10min",
      "debt": "10min",
      "author": "",
      "tags": [],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-02-24T12:06:33-0500",
      "type": "BUG"
    },
    {
      "key": "AVcpUPU6OJqQ_zIgIDfx",
      "rule": "javascript:S1871",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 523,
      "textRange": {
        "startLine": 523,
        "endLine": 525,
        "startOffset": 41,
        "endOffset": 37
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 520,
                "endLine": 522,
                "startOffset": 58,
                "endOffset": 37
              },
              "msg": "Original"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Either merge this branch with the identical one on line \"520\" or change one of the implementations.",
      "effort": "10min",
      "debt": "10min",
      "author": "",
      "tags": [],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-02-24T12:06:33-0500",
      "type": "BUG"
    },
    {
      "key": "AVcpUPU6OJqQ_zIgIDfy",
      "rule": "javascript:S1871",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 374,
      "textRange": {
        "startLine": 374,
        "endLine": 376,
        "startOffset": 71,
        "endOffset": 21
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 371,
                "endLine": 373,
                "startOffset": 54,
                "endOffset": 21
              },
              "msg": "Original"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Either merge this branch with the identical one on line \"371\" or change one of the implementations.",
      "effort": "10min",
      "debt": "10min",
      "author": "",
      "tags": [],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-02-24T12:06:33-0500",
      "type": "BUG"
    },
    {
      "key": "AVcpUPU7OJqQ_zIgIDfz",
      "rule": "javascript:S1871",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 399,
      "textRange": {
        "startLine": 399,
        "endLine": 401,
        "startOffset": 45,
        "endOffset": 41
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 396,
                "endLine": 398,
                "startOffset": 71,
                "endOffset": 41
              },
              "msg": "Original"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Either merge this branch with the identical one on line \"396\" or change one of the implementations.",
      "effort": "10min",
      "debt": "10min",
      "author": "",
      "tags": [],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-02-24T12:06:33-0500",
      "type": "BUG"
    },
    {
      "key": "AVjbKeVu4WSHTcNo74uI",
      "rule": "javascript:ExcessiveParameterList",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 19,
      "textRange": {
        "startLine": 19,
        "endLine": 19,
        "startOffset": 0,
        "endOffset": 65
      },
      "flows": [],
      "status": "OPEN",
      "message": "Function has 12 parameters which is greater than 7 authorized.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-07T16:21:18-0500",
      "updateDate": "2017-02-24T12:06:33-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpbspiJZIQKwRDzKHhM",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 174,
      "textRange": {
        "startLine": 174,
        "endLine": 174,
        "startOffset": 9,
        "endOffset": 20
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 174,
                "endLine": 174,
                "startOffset": 0,
                "endOffset": 8
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 177,
                "endLine": 177,
                "startOffset": 30,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 178,
                "endLine": 178,
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
                "startLine": 178,
                "endLine": 178,
                "startOffset": 41,
                "endOffset": 43
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 179,
                "endLine": 179,
                "startOffset": 23,
                "endOffset": 31
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 182,
                "endLine": 182,
                "startOffset": 16,
                "endOffset": 20
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 186,
                "endLine": 186,
                "startOffset": 16,
                "endOffset": 20
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 190,
                "endLine": 190,
                "startOffset": 16,
                "endOffset": 20
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 194,
                "endLine": 194,
                "startOffset": 16,
                "endOffset": 20
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 198,
                "endLine": 198,
                "startOffset": 16,
                "endOffset": 20
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 217,
                "endLine": 217,
                "startOffset": 34,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 221,
                "endLine": 221,
                "startOffset": 40,
                "endOffset": 48
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 225,
                "endLine": 225,
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
                "startLine": 229,
                "endLine": 229,
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
                "startLine": 231,
                "endLine": 231,
                "startOffset": 56,
                "endOffset": 64
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 245,
                "endLine": 245,
                "startOffset": 31,
                "endOffset": 39
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 267,
                "endLine": 267,
                "startOffset": 25,
                "endOffset": 33
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 272,
                "endLine": 272,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 275,
                "endLine": 275,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 278,
                "endLine": 278,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 281,
                "endLine": 281,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 284,
                "endLine": 284,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 287,
                "endLine": 287,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 290,
                "endLine": 290,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 293,
                "endLine": 293,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 296,
                "endLine": 296,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 299,
                "endLine": 299,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 311,
                "endLine": 311,
                "startOffset": 29,
                "endOffset": 37
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 312,
                "endLine": 312,
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
                "startLine": 314,
                "endLine": 314,
                "startOffset": 35,
                "endOffset": 43
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 315,
                "endLine": 315,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 317,
                "endLine": 317,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 323,
                "endLine": 323,
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
                "startLine": 324,
                "endLine": 324,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 335,
                "endLine": 335,
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
                "startLine": 342,
                "endLine": 342,
                "startOffset": 32,
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
                "startLine": 343,
                "endLine": 343,
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
                "startLine": 350,
                "endLine": 350,
                "startOffset": 34,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 356,
                "endLine": 356,
                "startOffset": 30,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 362,
                "endLine": 362,
                "startOffset": 42,
                "endOffset": 50
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 368,
                "endLine": 368,
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
                "startLine": 369,
                "endLine": 369,
                "startOffset": 31,
                "endOffset": 39
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 370,
                "endLine": 370,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 371,
                "endLine": 371,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 374,
                "endLine": 374,
                "startOffset": 25,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 380,
                "endLine": 380,
                "startOffset": 49,
                "endOffset": 57
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 381,
                "endLine": 381,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 381,
                "endLine": 381,
                "startOffset": 45,
                "endOffset": 47
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 390,
                "endLine": 390,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 391,
                "endLine": 391,
                "startOffset": 58,
                "endOffset": 66
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 396,
                "endLine": 396,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 431,
                "endLine": 431,
                "startOffset": 66,
                "endOffset": 74
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 432,
                "endLine": 432,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 434,
                "endLine": 434,
                "startOffset": 42,
                "endOffset": 44
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 451,
                "endLine": 451,
                "startOffset": 59,
                "endOffset": 67
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 469,
                "endLine": 469,
                "startOffset": 86,
                "endOffset": 94
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 478,
                "endLine": 478,
                "startOffset": 47,
                "endOffset": 55
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 481,
                "endLine": 481,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 482,
                "endLine": 482,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 482,
                "endLine": 482,
                "startOffset": 49,
                "endOffset": 51
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 495,
                "endLine": 495,
                "startOffset": 35,
                "endOffset": 43
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 499,
                "endLine": 499,
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
                "startLine": 499,
                "endLine": 499,
                "startOffset": 26,
                "endOffset": 28
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 501,
                "endLine": 501,
                "startOffset": 36,
                "endOffset": 44
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 502,
                "endLine": 502,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 503,
                "endLine": 503,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 506,
                "endLine": 506,
                "startOffset": 25,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 513,
                "endLine": 513,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 514,
                "endLine": 514,
                "startOffset": 59,
                "endOffset": 67
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 515,
                "endLine": 515,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 515,
                "endLine": 515,
                "startOffset": 49,
                "endOffset": 51
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 520,
                "endLine": 520,
                "startOffset": 36,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 555,
                "endLine": 555,
                "startOffset": 53,
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
                "startLine": 559,
                "endLine": 559,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 573,
                "endLine": 573,
                "startOffset": 56,
                "endOffset": 64
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 580,
                "endLine": 580,
                "startOffset": 57,
                "endOffset": 65
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 583,
                "endLine": 583,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 584,
                "endLine": 584,
                "startOffset": 36,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 584,
                "endLine": 584,
                "startOffset": 53,
                "endOffset": 55
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 598,
                "endLine": 598,
                "startOffset": 25,
                "endOffset": 33
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 599,
                "endLine": 599,
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
                "startLine": 601,
                "endLine": 601,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 605,
                "endLine": 605,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 83 which is greater than 10 authorized.",
      "effort": "1h23min",
      "debt": "1h23min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-02-20T08:24:32-0500",
      "updateDate": "2017-02-24T12:06:33-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpxF4KoZIQKwRDzKH8b",
      "rule": "javascript:UnreachableCode",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/config.js",
      "componentId": 1769,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 67,
      "textRange": {
        "startLine": 67,
        "endLine": 67,
        "startOffset": 13,
        "endOffset": 19
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 66,
                "endLine": 66,
                "startOffset": 13,
                "endOffset": 19
              }
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Remove this code after the \"return\" statement.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "cert",
        "cwe",
        "misra",
        "unused"
      ],
      "creationDate": "2017-02-24T12:06:33-0500",
      "updateDate": "2017-02-24T12:06:33-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpxF4KpZIQKwRDzKH8c",
      "rule": "javascript:UnreachableCode",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/config.js",
      "componentId": 1769,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 70,
      "textRange": {
        "startLine": 70,
        "endLine": 70,
        "startOffset": 12,
        "endOffset": 18
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 69,
                "endLine": 69,
                "startOffset": 12,
                "endOffset": 18
              }
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Remove this code after the \"return\" statement.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "cert",
        "cwe",
        "misra",
        "unused"
      ],
      "creationDate": "2017-02-24T12:06:33-0500",
      "updateDate": "2017-02-24T12:06:33-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpxF4MaZIQKwRDzKH8d",
      "rule": "javascript:S1871",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 202,
      "textRange": {
        "startLine": 202,
        "endLine": 204,
        "startOffset": 16,
        "endOffset": 48
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 182,
                "endLine": 185,
                "startOffset": 16,
                "endOffset": 26
              },
              "msg": "Original"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Either merge this case with the identical one on line \"182\" or change one of the implementations.",
      "effort": "10min",
      "debt": "10min",
      "author": "",
      "tags": [],
      "creationDate": "2017-02-24T12:06:33-0500",
      "updateDate": "2017-02-24T12:06:33-0500",
      "type": "BUG"
    },
    {
      "key": "AVpxF4MbZIQKwRDzKH8e",
      "rule": "javascript:S2703",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 184,
      "textRange": {
        "startLine": 184,
        "endLine": 184,
        "startOffset": 0,
        "endOffset": 49
      },
      "flows": [],
      "status": "OPEN",
      "message": "Add the \"let\", \"const\" or \"var\" keyword to this declaration of \"timeZone\" to make it explicit.",
      "effort": "2min",
      "debt": "2min",
      "author": "",
      "tags": [
        "pitfall"
      ],
      "creationDate": "2017-02-24T12:06:33-0500",
      "updateDate": "2017-02-24T12:06:33-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVcpUPU4OJqQ_zIgIDfd",
      "rule": "javascript:S138",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 362,
      "textRange": {
        "startLine": 362,
        "endLine": 362,
        "startOffset": 0,
        "endOffset": 79
      },
      "flows": [],
      "status": "OPEN",
      "message": "This function has 131 lines, which is greater than the 100 lines authorized. Split it into smaller functions.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-02-23T13:51:10-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVcpUPU4OJqQ_zIgIDfe",
      "rule": "javascript:S138",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 369,
      "textRange": {
        "startLine": 369,
        "endLine": 369,
        "startOffset": 0,
        "endOffset": 45
      },
      "flows": [],
      "status": "OPEN",
      "message": "This function has 121 lines, which is greater than the 100 lines authorized. Split it into smaller functions.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-02-23T13:51:10-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVcpUPU4OJqQ_zIgIDff",
      "rule": "javascript:S138",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 370,
      "textRange": {
        "startLine": 370,
        "endLine": 370,
        "startOffset": 0,
        "endOffset": 41
      },
      "flows": [],
      "status": "OPEN",
      "message": "This function has 119 lines, which is greater than the 100 lines authorized. Split it into smaller functions.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-02-23T13:51:10-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVcpUPU5OJqQ_zIgIDfm",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 362,
      "textRange": {
        "startLine": 362,
        "endLine": 362,
        "startOffset": 42,
        "endOffset": 50
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 362,
                "endLine": 362,
                "startOffset": 42,
                "endOffset": 50
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 368,
                "endLine": 368,
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
                "startLine": 369,
                "endLine": 369,
                "startOffset": 31,
                "endOffset": 39
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 370,
                "endLine": 370,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 371,
                "endLine": 371,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 374,
                "endLine": 374,
                "startOffset": 25,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 380,
                "endLine": 380,
                "startOffset": 49,
                "endOffset": 57
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 381,
                "endLine": 381,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 381,
                "endLine": 381,
                "startOffset": 45,
                "endOffset": 47
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 390,
                "endLine": 390,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 391,
                "endLine": 391,
                "startOffset": 58,
                "endOffset": 66
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 396,
                "endLine": 396,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 431,
                "endLine": 431,
                "startOffset": 66,
                "endOffset": 74
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 432,
                "endLine": 432,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 434,
                "endLine": 434,
                "startOffset": 42,
                "endOffset": 44
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 451,
                "endLine": 451,
                "startOffset": 59,
                "endOffset": 67
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 469,
                "endLine": 469,
                "startOffset": 86,
                "endOffset": 94
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 478,
                "endLine": 478,
                "startOffset": 47,
                "endOffset": 55
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 481,
                "endLine": 481,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 482,
                "endLine": 482,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 482,
                "endLine": 482,
                "startOffset": 49,
                "endOffset": 51
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 21 which is greater than 10 authorized.",
      "effort": "21min",
      "debt": "21min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-02-23T13:51:10-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVcpUPU5OJqQ_zIgIDfn",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 369,
      "textRange": {
        "startLine": 369,
        "endLine": 369,
        "startOffset": 31,
        "endOffset": 39
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 369,
                "endLine": 369,
                "startOffset": 31,
                "endOffset": 39
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 370,
                "endLine": 370,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 371,
                "endLine": 371,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 374,
                "endLine": 374,
                "startOffset": 25,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 380,
                "endLine": 380,
                "startOffset": 49,
                "endOffset": 57
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 381,
                "endLine": 381,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 381,
                "endLine": 381,
                "startOffset": 45,
                "endOffset": 47
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 390,
                "endLine": 390,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 391,
                "endLine": 391,
                "startOffset": 58,
                "endOffset": 66
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 396,
                "endLine": 396,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 431,
                "endLine": 431,
                "startOffset": 66,
                "endOffset": 74
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 432,
                "endLine": 432,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 434,
                "endLine": 434,
                "startOffset": 42,
                "endOffset": 44
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 451,
                "endLine": 451,
                "startOffset": 59,
                "endOffset": 67
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 469,
                "endLine": 469,
                "startOffset": 86,
                "endOffset": 94
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 478,
                "endLine": 478,
                "startOffset": 47,
                "endOffset": 55
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 481,
                "endLine": 481,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 482,
                "endLine": 482,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 482,
                "endLine": 482,
                "startOffset": 49,
                "endOffset": 51
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 19 which is greater than 10 authorized.",
      "effort": "19min",
      "debt": "19min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-02-23T13:51:10-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVcpUPU5OJqQ_zIgIDfo",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 370,
      "textRange": {
        "startLine": 370,
        "endLine": 370,
        "startOffset": 27,
        "endOffset": 35
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 370,
                "endLine": 370,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 371,
                "endLine": 371,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 374,
                "endLine": 374,
                "startOffset": 25,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 380,
                "endLine": 380,
                "startOffset": 49,
                "endOffset": 57
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 381,
                "endLine": 381,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 381,
                "endLine": 381,
                "startOffset": 45,
                "endOffset": 47
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 390,
                "endLine": 390,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 391,
                "endLine": 391,
                "startOffset": 58,
                "endOffset": 66
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 396,
                "endLine": 396,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 431,
                "endLine": 431,
                "startOffset": 66,
                "endOffset": 74
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 432,
                "endLine": 432,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 434,
                "endLine": 434,
                "startOffset": 42,
                "endOffset": 44
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 451,
                "endLine": 451,
                "startOffset": 59,
                "endOffset": 67
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 469,
                "endLine": 469,
                "startOffset": 86,
                "endOffset": 94
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 478,
                "endLine": 478,
                "startOffset": 47,
                "endOffset": 55
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 481,
                "endLine": 481,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 482,
                "endLine": 482,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 482,
                "endLine": 482,
                "startOffset": 49,
                "endOffset": 51
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 18 which is greater than 10 authorized.",
      "effort": "18min",
      "debt": "18min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-02-23T13:51:10-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpsUMFlZIQKwRDzKH75",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 380,
      "textRange": {
        "startLine": 380,
        "endLine": 380,
        "startOffset": 49,
        "endOffset": 57
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 380,
                "endLine": 380,
                "startOffset": 49,
                "endOffset": 57
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 381,
                "endLine": 381,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 381,
                "endLine": 381,
                "startOffset": 45,
                "endOffset": 47
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 390,
                "endLine": 390,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 391,
                "endLine": 391,
                "startOffset": 58,
                "endOffset": 66
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 396,
                "endLine": 396,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 431,
                "endLine": 431,
                "startOffset": 66,
                "endOffset": 74
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 432,
                "endLine": 432,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 434,
                "endLine": 434,
                "startOffset": 42,
                "endOffset": 44
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 451,
                "endLine": 451,
                "startOffset": 59,
                "endOffset": 67
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 469,
                "endLine": 469,
                "startOffset": 86,
                "endOffset": 94
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 11 which is greater than 10 authorized.",
      "effort": "11min",
      "debt": "11min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-02-23T13:51:10-0500",
      "updateDate": "2017-02-23T13:51:10-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpsUMFmZIQKwRDzKH76",
      "rule": "javascript:CommentedCode",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 471,
      "textRange": {
        "startLine": 471,
        "endLine": 471,
        "startOffset": 0,
        "endOffset": 77
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this commented out code.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "misra",
        "unused"
      ],
      "creationDate": "2017-02-23T13:51:10-0500",
      "updateDate": "2017-02-23T13:51:10-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpsUMFmZIQKwRDzKH77",
      "rule": "javascript:UnusedVariable",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 470,
      "textRange": {
        "startLine": 470,
        "endLine": 470,
        "startOffset": 0,
        "endOffset": 96
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove the declaration of the unused \'checkboxes\' variable.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "unused"
      ],
      "creationDate": "2017-02-23T13:51:10-0500",
      "updateDate": "2017-02-23T13:51:10-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpsUMFmZIQKwRDzKH78",
      "rule": "javascript:S1854",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 470,
      "textRange": {
        "startLine": 470,
        "endLine": 470,
        "startOffset": 44,
        "endOffset": 54
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this useless assignment to local variable \"checkboxes\"",
      "effort": "15min",
      "debt": "15min",
      "author": "",
      "tags": [
        "cert",
        "cwe",
        "unused"
      ],
      "creationDate": "2017-02-23T13:51:10-0500",
      "updateDate": "2017-02-23T13:51:10-0500",
      "type": "BUG"
    },
    {
      "key": "AVpdhla3ZIQKwRDzKHjD",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/CustomController.js",
      "componentId": 2637,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 1,
      "textRange": {
        "startLine": 1,
        "endLine": 1,
        "startOffset": 35,
        "endOffset": 43
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1,
                "endLine": 1,
                "startOffset": 35,
                "endOffset": 43
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 12,
                "endLine": 12,
                "startOffset": 28,
                "endOffset": 36
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 17,
                "endLine": 17,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 18,
                "endLine": 18,
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
                "startLine": 21,
                "endLine": 21,
                "startOffset": 15,
                "endOffset": 17
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 23,
                "endLine": 23,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 25,
                "endLine": 25,
                "startOffset": 32,
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
                "startLine": 30,
                "endLine": 30,
                "startOffset": 30,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 38,
                "endLine": 38,
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
                "startLine": 44,
                "endLine": 44,
                "startOffset": 25,
                "endOffset": 33
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 46,
                "endLine": 46,
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
                "startLine": 49,
                "endLine": 49,
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
                "startLine": 49,
                "endLine": 49,
                "startOffset": 26,
                "endOffset": 28
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 51,
                "endLine": 51,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 52,
                "endLine": 52,
                "startOffset": 15,
                "endOffset": 17
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 54,
                "endLine": 54,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 56,
                "endLine": 56,
                "startOffset": 13,
                "endOffset": 15
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 58,
                "endLine": 58,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 62,
                "endLine": 62,
                "startOffset": 22,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 63,
                "endLine": 63,
                "startOffset": 34,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 67,
                "endLine": 67,
                "startOffset": 37,
                "endOffset": 45
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 71,
                "endLine": 71,
                "startOffset": 30,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 73,
                "endLine": 73,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 23 which is greater than 10 authorized.",
      "effort": "23min",
      "debt": "23min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-02-20T16:55:24-0500",
      "updateDate": "2017-02-22T08:24:56-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpl_50AZIQKwRDzKHkj",
      "rule": "javascript:S138",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 495,
      "textRange": {
        "startLine": 495,
        "endLine": 495,
        "startOffset": 0,
        "endOffset": 70
      },
      "flows": [],
      "status": "OPEN",
      "message": "This function has 101 lines, which is greater than the 100 lines authorized. Split it into smaller functions.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-02-22T08:24:56-0500",
      "updateDate": "2017-02-22T08:24:56-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpl_50zZIQKwRDzKHkn",
      "rule": "javascript:S1125",
      "severity": "MINOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/CustomController.js",
      "componentId": 2637,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 38,
      "textRange": {
        "startLine": 38,
        "endLine": 38,
        "startOffset": 0,
        "endOffset": 51
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove the literal \"false\" boolean value.",
      "effort": "2min",
      "debt": "2min",
      "author": "",
      "tags": [
        "clumsy"
      ],
      "creationDate": "2017-02-22T08:24:56-0500",
      "updateDate": "2017-02-22T08:24:56-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpl_533ZIQKwRDzKHku",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:scripts/Helper/re-tree.js",
      "componentId": 2689,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 8,
      "textRange": {
        "startLine": 8,
        "endLine": 8,
        "startOffset": 13,
        "endOffset": 17
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 8,
                "endLine": 8,
                "startOffset": 4,
                "endOffset": 12
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 9,
                "endLine": 9,
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
                "startLine": 9,
                "endLine": 9,
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
                "startLine": 13,
                "endLine": 13,
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
                "startLine": 14,
                "endLine": 14,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 16,
                "endLine": 16,
                "startOffset": 13,
                "endOffset": 15
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 16,
                "endLine": 16,
                "startOffset": 23,
                "endOffset": 25
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 17,
                "endLine": 17,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 17,
                "endLine": 17,
                "startOffset": 35,
                "endOffset": 43
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 21,
                "endLine": 21,
                "startOffset": 13,
                "endOffset": 15
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 21,
                "endLine": 21,
                "startOffset": 23,
                "endOffset": 25
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 22,
                "endLine": 22,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 22,
                "endLine": 22,
                "startOffset": 33,
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
                "startLine": 26,
                "endLine": 26,
                "startOffset": 13,
                "endOffset": 15
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 26,
                "endLine": 26,
                "startOffset": 23,
                "endOffset": 25
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 27,
                "endLine": 27,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 30,
                "endLine": 30,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 17 which is greater than 10 authorized.",
      "effort": "17min",
      "debt": "17min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-02-22T08:24:56-0500",
      "updateDate": "2017-02-22T08:24:56-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpl_534ZIQKwRDzKHkv",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:scripts/Helper/re-tree.js",
      "componentId": 2689,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 34,
      "textRange": {
        "startLine": 34,
        "endLine": 34,
        "startOffset": 13,
        "endOffset": 17
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 34,
                "endLine": 34,
                "startOffset": 4,
                "endOffset": 12
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 35,
                "endLine": 35,
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
                "startLine": 35,
                "endLine": 35,
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
                "startLine": 39,
                "endLine": 39,
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
                "startLine": 40,
                "endLine": 40,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 42,
                "endLine": 42,
                "startOffset": 13,
                "endOffset": 15
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 42,
                "endLine": 42,
                "startOffset": 23,
                "endOffset": 25
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 43,
                "endLine": 43,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 43,
                "endLine": 43,
                "startOffset": 32,
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
                "startLine": 44,
                "endLine": 44,
                "startOffset": 31,
                "endOffset": 32
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 48,
                "endLine": 48,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 11 which is greater than 10 authorized.",
      "effort": "11min",
      "debt": "11min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-02-22T08:24:56-0500",
      "updateDate": "2017-02-22T08:24:56-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpl_534ZIQKwRDzKHkw",
      "rule": "javascript:StrictMode",
      "severity": "INFO",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:scripts/Helper/re-tree.js",
      "componentId": 2689,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 6,
      "textRange": {
        "startLine": 6,
        "endLine": 6,
        "startOffset": 0,
        "endOffset": 18
      },
      "flows": [],
      "status": "OPEN",
      "message": "Use of JavaScript strict mode may result in unexpected behaviour in some browsers.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "cross-browser",
        "user-experience"
      ],
      "creationDate": "2017-02-22T08:24:56-0500",
      "updateDate": "2017-02-22T08:24:56-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpl_53uZIQKwRDzKHko",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:scripts/Helper/ng-device-detector.js",
      "componentId": 2688,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 143,
      "textRange": {
        "startLine": 143,
        "endLine": 143,
        "startOffset": 45,
        "endOffset": 53
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 143,
                "endLine": 143,
                "startOffset": 45,
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
                "startLine": 145,
                "endLine": 145,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 146,
                "endLine": 146,
                "startOffset": 28,
                "endOffset": 33
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 148,
                "endLine": 148,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 149,
                "endLine": 149,
                "startOffset": 28,
                "endOffset": 33
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 152,
                "endLine": 152,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 155,
                "endLine": 155,
                "startOffset": 28,
                "endOffset": 33
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 155,
                "endLine": 155,
                "startOffset": 43,
                "endOffset": 45
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 158,
                "endLine": 158,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 159,
                "endLine": 159,
                "startOffset": 32,
                "endOffset": 37
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 163,
                "endLine": 163,
                "startOffset": 24,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 164,
                "endLine": 164,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 12 which is greater than 10 authorized.",
      "effort": "12min",
      "debt": "12min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-02-22T08:24:56-0500",
      "updateDate": "2017-02-22T08:24:56-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpl_53uZIQKwRDzKHkp",
      "rule": "javascript:NestedIfDepth",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:scripts/Helper/ng-device-detector.js",
      "componentId": 2688,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 130,
      "textRange": {
        "startLine": 130,
        "endLine": 130,
        "startOffset": 0,
        "endOffset": 82
      },
      "flows": [],
      "status": "OPEN",
      "message": "Refactor this code to not nest more than 3 if/for/while/switch/try statements.",
      "effort": "10min",
      "debt": "10min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-02-22T08:24:56-0500",
      "updateDate": "2017-02-22T08:24:56-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpl_53uZIQKwRDzKHkq",
      "rule": "javascript:BitwiseOperators",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:scripts/Helper/ng-device-detector.js",
      "componentId": 2688,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 151,
      "textRange": {
        "startLine": 151,
        "endLine": 151,
        "startOffset": 0,
        "endOffset": 82
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove the use of \">>>\" operator.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "pitfall"
      ],
      "creationDate": "2017-02-22T08:24:56-0500",
      "updateDate": "2017-02-22T08:24:56-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpl_53vZIQKwRDzKHkr",
      "rule": "javascript:StrictMode",
      "severity": "INFO",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:scripts/Helper/ng-device-detector.js",
      "componentId": 2688,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 2,
      "textRange": {
        "startLine": 2,
        "endLine": 2,
        "startOffset": 0,
        "endOffset": 18
      },
      "flows": [],
      "status": "OPEN",
      "message": "Use of JavaScript strict mode may result in unexpected behaviour in some browsers.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "cross-browser",
        "user-experience"
      ],
      "creationDate": "2017-02-22T08:24:56-0500",
      "updateDate": "2017-02-22T08:24:56-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpl_53vZIQKwRDzKHks",
      "rule": "javascript:StrictMode",
      "severity": "INFO",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:scripts/Helper/ng-device-detector.js",
      "componentId": 2688,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 101,
      "textRange": {
        "startLine": 101,
        "endLine": 101,
        "startOffset": 0,
        "endOffset": 38
      },
      "flows": [],
      "status": "OPEN",
      "message": "Use of JavaScript strict mode may result in unexpected behaviour in some browsers.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "cross-browser",
        "user-experience"
      ],
      "creationDate": "2017-02-22T08:24:56-0500",
      "updateDate": "2017-02-22T08:24:56-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpl_53vZIQKwRDzKHkt",
      "rule": "javascript:StrictMode",
      "severity": "INFO",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:scripts/Helper/ng-device-detector.js",
      "componentId": 2688,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 144,
      "textRange": {
        "startLine": 144,
        "endLine": 144,
        "startOffset": 0,
        "endOffset": 38
      },
      "flows": [],
      "status": "OPEN",
      "message": "Use of JavaScript strict mode may result in unexpected behaviour in some browsers.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "cross-browser",
        "user-experience"
      ],
      "creationDate": "2017-02-22T08:24:56-0500",
      "updateDate": "2017-02-22T08:24:56-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpb8l0oZIQKwRDzKHhV",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 267,
      "textRange": {
        "startLine": 267,
        "endLine": 267,
        "startOffset": 25,
        "endOffset": 33
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 267,
                "endLine": 267,
                "startOffset": 25,
                "endOffset": 33
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 272,
                "endLine": 272,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 275,
                "endLine": 275,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 278,
                "endLine": 278,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 281,
                "endLine": 281,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 284,
                "endLine": 284,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 287,
                "endLine": 287,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 290,
                "endLine": 290,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 293,
                "endLine": 293,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 296,
                "endLine": 296,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 299,
                "endLine": 299,
                "startOffset": 12,
                "endOffset": 16
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 11 which is greater than 10 authorized.",
      "effort": "11min",
      "debt": "11min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-02-20T09:34:11-0500",
      "updateDate": "2017-02-20T09:34:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVcpUPWyOJqQ_zIgIDhJ",
      "rule": "javascript:S1871",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:scripts/Hubs/MapTrackingHub.js",
      "componentId": 819,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 132,
      "textRange": {
        "startLine": 132,
        "endLine": 134,
        "startOffset": 63,
        "endOffset": 13
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 129,
                "endLine": 131,
                "startOffset": 46,
                "endOffset": 13
              },
              "msg": "Original"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Either merge this branch with the identical one on line \"129\" or change one of the implementations.",
      "effort": "10min",
      "debt": "10min",
      "author": "",
      "tags": [],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-02-16T15:32:25-0500",
      "type": "BUG"
    },
    {
      "key": "AVpIoOo8ZIQKwRDzKHe5",
      "rule": "javascript:S2703",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 30,
      "textRange": {
        "startLine": 30,
        "endLine": 30,
        "startOffset": 0,
        "endOffset": 39
      },
      "flows": [],
      "status": "OPEN",
      "message": "Add the \"let\", \"const\" or \"var\" keyword to this declaration of \"placaClickModel\" to make it explicit.",
      "effort": "2min",
      "debt": "2min",
      "author": "",
      "tags": [
        "pitfall"
      ],
      "creationDate": "2017-02-16T15:32:25-0500",
      "updateDate": "2017-02-16T15:32:25-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpDzcWOZIQKwRDzKHdD",
      "rule": "javascript:UnusedFunctionArgument",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 231,
      "textRange": {
        "startLine": 231,
        "endLine": 231,
        "startOffset": 0,
        "endOffset": 80
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove the unused function parameter \"key\".",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "misra",
        "unused"
      ],
      "creationDate": "2017-02-15T17:03:17-0500",
      "updateDate": "2017-02-15T17:03:17-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpDzcXQZIQKwRDzKHdE",
      "rule": "javascript:CollapsibleIfStatements",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapServices.js",
      "componentId": 805,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 53,
      "textRange": {
        "startLine": 53,
        "endLine": 53,
        "startOffset": 12,
        "endOffset": 45
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 54,
                "endLine": 54,
                "startOffset": 16,
                "endOffset": 61
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
      "author": "",
      "tags": [
        "clumsy"
      ],
      "creationDate": "2017-02-15T17:03:17-0500",
      "updateDate": "2017-02-15T17:03:17-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVpDzcXRZIQKwRDzKHdG",
      "rule": "javascript:UnusedFunctionArgument",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapServices.js",
      "componentId": 805,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 52,
      "textRange": {
        "startLine": 52,
        "endLine": 52,
        "startOffset": 0,
        "endOffset": 60
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove the unused function parameter \"all\".",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "misra",
        "unused"
      ],
      "creationDate": "2017-02-15T17:03:17-0500",
      "updateDate": "2017-02-15T17:03:17-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVlGxTzDm5RLIGOifSvN",
      "rule": "javascript:S2703",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 148,
      "textRange": {
        "startLine": 148,
        "endLine": 148,
        "startOffset": 0,
        "endOffset": 49
      },
      "flows": [],
      "status": "OPEN",
      "message": "Add the \"let\", \"const\" or \"var\" keyword to this declaration of \"UserGlobal\" to make it explicit.",
      "effort": "2min",
      "debt": "2min",
      "author": "",
      "tags": [
        "pitfall"
      ],
      "creationDate": "2016-12-28T13:49:57-0500",
      "updateDate": "2017-02-15T07:51:56-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVdTt3jWOJqQ_zIgIFlM",
      "rule": "javascript:S138",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/FloatButtonController.js",
      "componentId": 1041,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 12,
      "textRange": {
        "startLine": 12,
        "endLine": 12,
        "startOffset": 0,
        "endOffset": 124
      },
      "flows": [],
      "status": "OPEN",
      "message": "This function has 277 lines, which is greater than the 100 lines authorized. Split it into smaller functions.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-09-22T16:04:50-0500",
      "updateDate": "2017-02-14T11:26:59-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVm8q-2y69u6xM0zAREg",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/FloatButtonController.js",
      "componentId": 1041,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 12,
      "textRange": {
        "startLine": 12,
        "endLine": 12,
        "startOffset": 9,
        "endOffset": 30
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 12,
                "endLine": 12,
                "startOffset": 0,
                "endOffset": 8
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 14,
                "endLine": 14,
                "startOffset": 25,
                "endOffset": 33
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 16,
                "endLine": 16,
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
                "startLine": 19,
                "endLine": 19,
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
                "startLine": 19,
                "endLine": 19,
                "startOffset": 26,
                "endOffset": 28
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 21,
                "endLine": 21,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 22,
                "endLine": 22,
                "startOffset": 15,
                "endOffset": 17
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 24,
                "endLine": 24,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 26,
                "endLine": 26,
                "startOffset": 13,
                "endOffset": 15
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 28,
                "endLine": 28,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 37,
                "endLine": 37,
                "startOffset": 35,
                "endOffset": 43
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 45,
                "endLine": 45,
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
                "startLine": 51,
                "endLine": 51,
                "startOffset": 12,
                "endOffset": 14
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
                "startOffset": 33,
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
                "startLine": 84,
                "endLine": 84,
                "startOffset": 48,
                "endOffset": 56
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 89,
                "endLine": 89,
                "startOffset": 50,
                "endOffset": 58
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 97,
                "endLine": 97,
                "startOffset": 24,
                "endOffset": 26
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
                "startOffset": 33,
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
                "startLine": 115,
                "endLine": 115,
                "startOffset": 38,
                "endOffset": 46
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 119,
                "endLine": 119,
                "startOffset": 33,
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
                "startLine": 129,
                "endLine": 129,
                "startOffset": 17,
                "endOffset": 25
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 134,
                "endLine": 134,
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
                "startLine": 135,
                "endLine": 135,
                "startOffset": 49,
                "endOffset": 57
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 136,
                "endLine": 136,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 148,
                "endLine": 148,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 152,
                "endLine": 152,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 154,
                "endLine": 154,
                "startOffset": 54,
                "endOffset": 62
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 155,
                "endLine": 155,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 155,
                "endLine": 155,
                "startOffset": 57,
                "endOffset": 59
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 157,
                "endLine": 157,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 177,
                "endLine": 177,
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
                "startLine": 183,
                "endLine": 183,
                "startOffset": 42,
                "endOffset": 50
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 187,
                "endLine": 187,
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
                "startLine": 188,
                "endLine": 188,
                "startOffset": 42,
                "endOffset": 50
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 189,
                "endLine": 189,
                "startOffset": 44,
                "endOffset": 52
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 192,
                "endLine": 192,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 192,
                "endLine": 192,
                "startOffset": 73,
                "endOffset": 75
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 211,
                "endLine": 211,
                "startOffset": 35,
                "endOffset": 43
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 212,
                "endLine": 212,
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
                "startLine": 223,
                "endLine": 223,
                "startOffset": 35,
                "endOffset": 43
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 225,
                "endLine": 225,
                "startOffset": 54,
                "endOffset": 62
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 226,
                "endLine": 226,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 232,
                "endLine": 232,
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
                "startLine": 238,
                "endLine": 238,
                "startOffset": 33,
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
                "startLine": 239,
                "endLine": 239,
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
                "startLine": 248,
                "endLine": 248,
                "startOffset": 34,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 249,
                "endLine": 249,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 250,
                "endLine": 250,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 255,
                "endLine": 255,
                "startOffset": 62,
                "endOffset": 70
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 259,
                "endLine": 259,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 261,
                "endLine": 261,
                "startOffset": 26,
                "endOffset": 28
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 260,
                "endLine": 260,
                "startOffset": 26,
                "endOffset": 28
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 275,
                "endLine": 275,
                "startOffset": 32,
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
                "startLine": 277,
                "endLine": 277,
                "startOffset": 54,
                "endOffset": 62
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 278,
                "endLine": 278,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 283,
                "endLine": 283,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 56 which is greater than 10 authorized.",
      "effort": "56min",
      "debt": "56min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-01-20T11:17:39-0500",
      "updateDate": "2017-02-14T11:26:59-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVmtVUa5f22muoGZGBnL",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/FloatButtonController.js",
      "componentId": 1041,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 119,
      "textRange": {
        "startLine": 119,
        "endLine": 119,
        "startOffset": 33,
        "endOffset": 41
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 119,
                "endLine": 119,
                "startOffset": 33,
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
                "startLine": 129,
                "endLine": 129,
                "startOffset": 17,
                "endOffset": 25
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 134,
                "endLine": 134,
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
                "startLine": 135,
                "endLine": 135,
                "startOffset": 49,
                "endOffset": 57
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 136,
                "endLine": 136,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 148,
                "endLine": 148,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 152,
                "endLine": 152,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 154,
                "endLine": 154,
                "startOffset": 54,
                "endOffset": 62
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 155,
                "endLine": 155,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 155,
                "endLine": 155,
                "startOffset": 57,
                "endOffset": 59
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 157,
                "endLine": 157,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 177,
                "endLine": 177,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 12 which is greater than 10 authorized.",
      "effort": "12min",
      "debt": "12min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-01-17T11:48:40-0500",
      "updateDate": "2017-02-14T11:26:59-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVop6WoaZIQKwRDzKHYQ",
      "rule": "csharpsquid:S1854",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028:Hubs/MapTrackingHub.cs",
      "componentId": 1927,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028",
      "line": 233,
      "textRange": {
        "startLine": 233,
        "endLine": 233,
        "startOffset": 0,
        "endOffset": 103
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this useless assignment to local variable \"Placaseguimiento\".",
      "effort": "15min",
      "debt": "15min",
      "author": "",
      "tags": [
        "cert",
        "cwe",
        "suspicious",
        "unused"
      ],
      "creationDate": "2017-02-10T16:23:23-0500",
      "updateDate": "2017-02-10T16:23:23-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVop6WoaZIQKwRDzKHYR",
      "rule": "csharpsquid:S1481",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028:Hubs/MapTrackingHub.cs",
      "componentId": 1927,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028",
      "line": 233,
      "textRange": {
        "startLine": 233,
        "endLine": 233,
        "startOffset": 0,
        "endOffset": 103
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this unused \"Placaseguimiento\" local variable.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "unused"
      ],
      "creationDate": "2017-02-10T16:23:23-0500",
      "updateDate": "2017-02-10T16:23:23-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVmyd1BUa26Qb_yEpwEB",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 246,
      "textRange": {
        "startLine": 246,
        "endLine": 246,
        "startOffset": 29,
        "endOffset": 37
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 246,
                "endLine": 246,
                "startOffset": 29,
                "endOffset": 37
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 249,
                "endLine": 249,
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
                "startLine": 278,
                "endLine": 278,
                "startOffset": 34,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 280,
                "endLine": 280,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 301,
                "endLine": 301,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 309,
                "endLine": 309,
                "startOffset": 17,
                "endOffset": 19
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 330,
                "endLine": 330,
                "startOffset": 37,
                "endOffset": 45
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 333,
                "endLine": 333,
                "startOffset": 48,
                "endOffset": 56
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 344,
                "endLine": 344,
                "startOffset": 46,
                "endOffset": 54
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 351,
                "endLine": 351,
                "startOffset": 37,
                "endOffset": 45
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 353,
                "endLine": 353,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 371,
                "endLine": 371,
                "startOffset": 32,
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
                "startLine": 375,
                "endLine": 375,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 13 which is greater than 10 authorized.",
      "effort": "13min",
      "debt": "13min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-01-18T11:44:11-0500",
      "updateDate": "2017-02-09T17:09:53-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVok7X0LZIQKwRDzKHXJ",
      "rule": "javascript:UnusedFunctionArgument",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 431,
      "textRange": {
        "startLine": 431,
        "endLine": 431,
        "startOffset": 0,
        "endOffset": 90
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove the unused function parameter \"key\".",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "misra",
        "unused"
      ],
      "creationDate": "2017-02-09T17:09:53-0500",
      "updateDate": "2017-02-09T17:09:53-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVok7X1HZIQKwRDzKHXK",
      "rule": "javascript:UnusedFunctionArgument",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/FloatButtonController.js",
      "componentId": 1041,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 89,
      "textRange": {
        "startLine": 89,
        "endLine": 89,
        "startOffset": 0,
        "endOffset": 76
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove the unused function parameter \"status\".",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "misra",
        "unused"
      ],
      "creationDate": "2017-02-09T17:09:53-0500",
      "updateDate": "2017-02-09T17:09:53-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVok7X27ZIQKwRDzKHXL",
      "rule": "javascript:CommentedCode",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 281,
      "textRange": {
        "startLine": 281,
        "endLine": 281,
        "startOffset": 0,
        "endOffset": 43
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this commented out code.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "misra",
        "unused"
      ],
      "creationDate": "2017-02-09T17:09:53-0500",
      "updateDate": "2017-02-09T17:09:53-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVok7X27ZIQKwRDzKHXM",
      "rule": "javascript:UnusedVariable",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 352,
      "textRange": {
        "startLine": 352,
        "endLine": 352,
        "startOffset": 0,
        "endOffset": 87
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove the declaration of the unused \'countQUestion\' variable.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "unused"
      ],
      "creationDate": "2017-02-09T17:09:53-0500",
      "updateDate": "2017-02-09T17:09:53-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVok7X27ZIQKwRDzKHXN",
      "rule": "javascript:S1854",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 352,
      "textRange": {
        "startLine": 352,
        "endLine": 352,
        "startOffset": 28,
        "endOffset": 41
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this useless assignment to local variable \"countQUestion\"",
      "effort": "15min",
      "debt": "15min",
      "author": "",
      "tags": [
        "cert",
        "cwe",
        "unused"
      ],
      "creationDate": "2017-02-09T17:09:53-0500",
      "updateDate": "2017-02-09T17:09:53-0500",
      "type": "BUG"
    },
    {
      "key": "AVok7Xx_ZIQKwRDzKHXD",
      "rule": "csharpsquid:S125",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028:Hubs/MapTrackingHub.cs",
      "componentId": 1927,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028",
      "line": 365,
      "textRange": {
        "startLine": 365,
        "endLine": 365,
        "startOffset": 0,
        "endOffset": 49
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this commented out code.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "misra",
        "unused"
      ],
      "creationDate": "2017-02-09T17:09:53-0500",
      "updateDate": "2017-02-09T17:09:53-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVok7XyKZIQKwRDzKHXF",
      "rule": "csharpsquid:S2486",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028:Log/LogRepository.cs",
      "componentId": 2533,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028",
      "line": 40,
      "textRange": {
        "startLine": 40,
        "endLine": 40,
        "startOffset": 0,
        "endOffset": 18
      },
      "flows": [],
      "status": "OPEN",
      "message": "Handle the exception or explain in a comment why it can be ignored.",
      "effort": "1h",
      "debt": "1h",
      "author": "",
      "tags": [
        "cwe",
        "error-handling"
      ],
      "creationDate": "2017-02-09T17:09:53-0500",
      "updateDate": "2017-02-09T17:09:53-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVok7XyLZIQKwRDzKHXG",
      "rule": "csharpsquid:S108",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028:Log/LogRepository.cs",
      "componentId": 2533,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028",
      "line": 41,
      "textRange": {
        "startLine": 41,
        "endLine": 41,
        "startOffset": 0,
        "endOffset": 14
      },
      "flows": [],
      "status": "OPEN",
      "message": "Either remove or fill this block of code.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "suspicious"
      ],
      "creationDate": "2017-02-09T17:09:53-0500",
      "updateDate": "2017-02-09T17:09:53-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVlGxT30m5RLIGOifSvO",
      "rule": "javascript:S2814",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/SideNavController.js",
      "componentId": 813,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 27,
      "textRange": {
        "startLine": 27,
        "endLine": 27,
        "startOffset": 0,
        "endOffset": 43
      },
      "flows": [],
      "status": "OPEN",
      "message": "Rename \"width\" as this name is already used in declaration at line 13.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "pitfall"
      ],
      "creationDate": "2016-12-28T13:49:57-0500",
      "updateDate": "2017-02-02T11:09:58-0500",
      "type": "BUG"
    },
    {
      "key": "AVlQNhYUm5RLIGOifSwo",
      "rule": "javascript:S2814",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/SideNavController.js",
      "componentId": 813,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 37,
      "textRange": {
        "startLine": 37,
        "endLine": 37,
        "startOffset": 0,
        "endOffset": 64
      },
      "flows": [],
      "status": "OPEN",
      "message": "Rename \"windowsHeight\" as this name is already used in declaration at line 21.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "pitfall"
      ],
      "creationDate": "2016-12-30T09:49:49-0500",
      "updateDate": "2017-02-02T11:09:58-0500",
      "type": "BUG"
    },
    {
      "key": "AVn51THmZIQKwRDzKHH4",
      "rule": "javascript:S1854",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/FloatButtonController.js",
      "componentId": 1041,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 120,
      "textRange": {
        "startLine": 120,
        "endLine": 120,
        "startOffset": 12,
        "endOffset": 25
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this useless assignment to local variable \"countQuestion\"",
      "effort": "15min",
      "debt": "15min",
      "author": "",
      "tags": [
        "cert",
        "cwe",
        "unused"
      ],
      "creationDate": "2017-02-01T08:19:38-0500",
      "updateDate": "2017-02-01T08:19:38-0500",
      "type": "BUG"
    },
    {
      "key": "AVn51TIGZIQKwRDzKHH5",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/QuestionResources.js",
      "componentId": 861,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 4,
      "textRange": {
        "startLine": 4,
        "endLine": 4,
        "startOffset": 13,
        "endOffset": 26
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 4,
                "endLine": 4,
                "startOffset": 4,
                "endOffset": 12
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 8,
                "endLine": 8,
                "startOffset": 32,
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
                "startLine": 13,
                "endLine": 13,
                "startOffset": 31,
                "endOffset": 39
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 17,
                "endLine": 17,
                "startOffset": 36,
                "endOffset": 44
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 22,
                "endLine": 22,
                "startOffset": 33,
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
                "startLine": 27,
                "endLine": 27,
                "startOffset": 37,
                "endOffset": 45
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 30,
                "endLine": 30,
                "startOffset": 34,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 34,
                "endLine": 34,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 39,
                "endLine": 39,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 50,
                "endLine": 50,
                "startOffset": 41,
                "endOffset": 49
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 54,
                "endLine": 54,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 11 which is greater than 10 authorized.",
      "effort": "11min",
      "debt": "11min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-02-01T08:19:38-0500",
      "updateDate": "2017-02-01T08:19:38-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVn2qwzMZIQKwRDzKHHy",
      "rule": "javascript:NestedIfDepth",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/FloatButtonController.js",
      "componentId": 1041,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 155,
      "textRange": {
        "startLine": 155,
        "endLine": 155,
        "startOffset": 0,
        "endOffset": 87
      },
      "flows": [],
      "status": "OPEN",
      "message": "Refactor this code to not nest more than 3 if/for/while/switch/try statements.",
      "effort": "10min",
      "debt": "10min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-01-31T17:34:48-0500",
      "updateDate": "2017-01-31T17:34:48-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVjaRhkr4WSHTcNo74tz",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 74,
      "textRange": {
        "startLine": 74,
        "endLine": 74,
        "startOffset": 32,
        "endOffset": 40
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 74,
                "endLine": 74,
                "startOffset": 32,
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
                "startLine": 77,
                "endLine": 77,
                "startOffset": 32,
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
                "startLine": 80,
                "endLine": 80,
                "startOffset": 31,
                "endOffset": 39
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 84,
                "endLine": 84,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 96,
                "endLine": 96,
                "startOffset": 45,
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
                "startLine": 104,
                "endLine": 104,
                "startOffset": 28,
                "endOffset": 36
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 108,
                "endLine": 108,
                "startOffset": 23,
                "endOffset": 31
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 144,
                "endLine": 144,
                "startOffset": 4,
                "endOffset": 6
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 147,
                "endLine": 147,
                "startOffset": 11,
                "endOffset": 13
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 152,
                "endLine": 152,
                "startOffset": 25,
                "endOffset": 33
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 154,
                "endLine": 154,
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
                "startLine": 157,
                "endLine": 157,
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
                "startLine": 157,
                "endLine": 157,
                "startOffset": 26,
                "endOffset": 28
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 159,
                "endLine": 159,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 160,
                "endLine": 160,
                "startOffset": 15,
                "endOffset": 17
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 162,
                "endLine": 162,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 164,
                "endLine": 164,
                "startOffset": 13,
                "endOffset": 15
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 166,
                "endLine": 166,
                "startOffset": 12,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 18 which is greater than 10 authorized.",
      "effort": "18min",
      "debt": "18min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-07T12:12:29-0500",
      "updateDate": "2017-01-23T13:04:14-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVm9g3jYQjrpRq2Hrpzk",
      "rule": "csharpsquid:S1449",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028:Hubs/MapTrackingHub.cs",
      "componentId": 1927,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028",
      "line": 91,
      "textRange": {
        "startLine": 91,
        "endLine": 91,
        "startOffset": 0,
        "endOffset": 86
      },
      "flows": [],
      "status": "OPEN",
      "message": "Define the locale to be used in this string operation.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "cert",
        "unpredictable"
      ],
      "creationDate": "2017-01-20T15:13:07-0500",
      "updateDate": "2017-01-20T15:13:07-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVm9g3jYQjrpRq2Hrpzl",
      "rule": "csharpsquid:S1449",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028:Hubs/MapTrackingHub.cs",
      "componentId": 1927,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028",
      "line": 91,
      "textRange": {
        "startLine": 91,
        "endLine": 91,
        "startOffset": 0,
        "endOffset": 86
      },
      "flows": [],
      "status": "OPEN",
      "message": "Define the locale to be used in this string operation.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "cert",
        "unpredictable"
      ],
      "creationDate": "2017-01-20T15:13:07-0500",
      "updateDate": "2017-01-20T15:13:07-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVm9g3jYQjrpRq2Hrpzm",
      "rule": "csharpsquid:S2971",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028:Hubs/MapTrackingHub.cs",
      "componentId": 1927,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028",
      "line": 89,
      "textRange": {
        "startLine": 89,
        "endLine": 89,
        "startOffset": 0,
        "endOffset": 110
      },
      "flows": [],
      "status": "OPEN",
      "message": "Drop \"Where\" and move the condition into the \"FirstOrDefault\".",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "clumsy"
      ],
      "creationDate": "2017-01-20T15:13:07-0500",
      "updateDate": "2017-01-20T15:13:07-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVcpUPU4OJqQ_zIgIDfi",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 495,
      "textRange": {
        "startLine": 495,
        "endLine": 495,
        "startOffset": 35,
        "endOffset": 43
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 495,
                "endLine": 495,
                "startOffset": 35,
                "endOffset": 43
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 499,
                "endLine": 499,
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
                "startLine": 499,
                "endLine": 499,
                "startOffset": 26,
                "endOffset": 28
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 501,
                "endLine": 501,
                "startOffset": 36,
                "endOffset": 44
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 502,
                "endLine": 502,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 503,
                "endLine": 503,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 506,
                "endLine": 506,
                "startOffset": 25,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 513,
                "endLine": 513,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 514,
                "endLine": 514,
                "startOffset": 59,
                "endOffset": 67
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 515,
                "endLine": 515,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 515,
                "endLine": 515,
                "startOffset": 49,
                "endOffset": 51
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 520,
                "endLine": 520,
                "startOffset": 36,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 555,
                "endLine": 555,
                "startOffset": 53,
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
                "startLine": 559,
                "endLine": 559,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 573,
                "endLine": 573,
                "startOffset": 56,
                "endOffset": 64
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 580,
                "endLine": 580,
                "startOffset": 57,
                "endOffset": 65
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 583,
                "endLine": 583,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 584,
                "endLine": 584,
                "startOffset": 36,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 584,
                "endLine": 584,
                "startOffset": 53,
                "endOffset": 55
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 19 which is greater than 10 authorized.",
      "effort": "19min",
      "debt": "19min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVcpUPU5OJqQ_zIgIDfj",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 501,
      "textRange": {
        "startLine": 501,
        "endLine": 501,
        "startOffset": 36,
        "endOffset": 44
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 501,
                "endLine": 501,
                "startOffset": 36,
                "endOffset": 44
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 502,
                "endLine": 502,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 503,
                "endLine": 503,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 506,
                "endLine": 506,
                "startOffset": 25,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 513,
                "endLine": 513,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 514,
                "endLine": 514,
                "startOffset": 59,
                "endOffset": 67
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 515,
                "endLine": 515,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 515,
                "endLine": 515,
                "startOffset": 49,
                "endOffset": 51
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 520,
                "endLine": 520,
                "startOffset": 36,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 555,
                "endLine": 555,
                "startOffset": 53,
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
                "startLine": 559,
                "endLine": 559,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 573,
                "endLine": 573,
                "startOffset": 56,
                "endOffset": 64
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 580,
                "endLine": 580,
                "startOffset": 57,
                "endOffset": 65
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 583,
                "endLine": 583,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 584,
                "endLine": 584,
                "startOffset": 36,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 584,
                "endLine": 584,
                "startOffset": 53,
                "endOffset": 55
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 16 which is greater than 10 authorized.",
      "effort": "16min",
      "debt": "16min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVcpUPU5OJqQ_zIgIDfk",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 502,
      "textRange": {
        "startLine": 502,
        "endLine": 502,
        "startOffset": 27,
        "endOffset": 35
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 502,
                "endLine": 502,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 503,
                "endLine": 503,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 506,
                "endLine": 506,
                "startOffset": 25,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 513,
                "endLine": 513,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 514,
                "endLine": 514,
                "startOffset": 59,
                "endOffset": 67
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 515,
                "endLine": 515,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 515,
                "endLine": 515,
                "startOffset": 49,
                "endOffset": 51
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 520,
                "endLine": 520,
                "startOffset": 36,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 555,
                "endLine": 555,
                "startOffset": 53,
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
                "startLine": 559,
                "endLine": 559,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 573,
                "endLine": 573,
                "startOffset": 56,
                "endOffset": 64
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 580,
                "endLine": 580,
                "startOffset": 57,
                "endOffset": 65
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 583,
                "endLine": 583,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 584,
                "endLine": 584,
                "startOffset": 36,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 584,
                "endLine": 584,
                "startOffset": 53,
                "endOffset": 55
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 15 which is greater than 10 authorized.",
      "effort": "15min",
      "debt": "15min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-09-14T10:28:30-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVdNtZ-uOJqQ_zIgID7O",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/command/CommandServices.js",
      "componentId": 800,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 6,
      "textRange": {
        "startLine": 6,
        "endLine": 6,
        "startOffset": 13,
        "endOffset": 25
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 6,
                "endLine": 6,
                "startOffset": 4,
                "endOffset": 12
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 8,
                "endLine": 8,
                "startOffset": 29,
                "endOffset": 37
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 9,
                "endLine": 9,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 10,
                "endLine": 10,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 17,
                "endLine": 17,
                "startOffset": 26,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 24,
                "endLine": 24,
                "startOffset": 34,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 25,
                "endLine": 25,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 26,
                "endLine": 26,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 35,
                "endLine": 35,
                "startOffset": 44,
                "endOffset": 52
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 37,
                "endLine": 37,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 37,
                "endLine": 37,
                "startOffset": 45,
                "endOffset": 47
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 39,
                "endLine": 39,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 40,
                "endLine": 40,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 47,
                "endLine": 47,
                "startOffset": 32,
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
                "startLine": 51,
                "endLine": 51,
                "startOffset": 30,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 55,
                "endLine": 55,
                "startOffset": 16,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 59,
                "endLine": 59,
                "startOffset": 25,
                "endOffset": 33
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 68,
                "endLine": 68,
                "startOffset": 30,
                "endOffset": 38
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 77,
                "endLine": 77,
                "startOffset": 35,
                "endOffset": 43
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 78,
                "endLine": 78,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 79,
                "endLine": 79,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 88,
                "endLine": 88,
                "startOffset": 40,
                "endOffset": 48
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 89,
                "endLine": 89,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 90,
                "endLine": 90,
                "startOffset": 16,
                "endOffset": 18
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
                "startOffset": 38,
                "endOffset": 46
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 100,
                "endLine": 100,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 101,
                "endLine": 101,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 110,
                "endLine": 110,
                "startOffset": 40,
                "endOffset": 48
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 111,
                "endLine": 111,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 112,
                "endLine": 112,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 121,
                "endLine": 121,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 122,
                "endLine": 122,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 123,
                "endLine": 123,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 33 which is greater than 10 authorized.",
      "effort": "33min",
      "debt": "33min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-09-21T12:04:54-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVeQdc9jOJqQ_zIgIFt1",
      "rule": "javascript:S138",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/command/CommandServices.js",
      "componentId": 800,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 6,
      "textRange": {
        "startLine": 6,
        "endLine": 6,
        "startOffset": 0,
        "endOffset": 65
      },
      "flows": [],
      "status": "OPEN",
      "message": "This function has 141 lines, which is greater than the 100 lines authorized. Split it into smaller functions.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-10-04T11:09:53-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVfZ6-g8OJqQ_zIgIF97",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 538,
      "textRange": {
        "startLine": 538,
        "endLine": 538,
        "startOffset": 34,
        "endOffset": 42
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 538,
                "endLine": 538,
                "startOffset": 34,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 540,
                "endLine": 540,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 541,
                "endLine": 541,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 541,
                "endLine": 541,
                "startOffset": 52,
                "endOffset": 54
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 543,
                "endLine": 543,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 549,
                "endLine": 549,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 555,
                "endLine": 555,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 555,
                "endLine": 555,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 560,
                "endLine": 560,
                "startOffset": 56,
                "endOffset": 64
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 561,
                "endLine": 561,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 577,
                "endLine": 577,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 600,
                "endLine": 600,
                "startOffset": 45,
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
                "startLine": 604,
                "endLine": 604,
                "startOffset": 45,
                "endOffset": 53
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 13 which is greater than 10 authorized.",
      "effort": "13min",
      "debt": "13min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-10-18T17:31:03-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVfZt_JrOJqQ_zIgIF9z",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 639,
      "textRange": {
        "startLine": 639,
        "endLine": 639,
        "startOffset": 35,
        "endOffset": 43
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 639,
                "endLine": 639,
                "startOffset": 35,
                "endOffset": 43
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 645,
                "endLine": 645,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 646,
                "endLine": 646,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 648,
                "endLine": 648,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 652,
                "endLine": 652,
                "startOffset": 48,
                "endOffset": 56
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 655,
                "endLine": 655,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 672,
                "endLine": 672,
                "startOffset": 45,
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
                "startLine": 678,
                "endLine": 678,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 687,
                "endLine": 687,
                "startOffset": 49,
                "endOffset": 57
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 688,
                "endLine": 688,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 700,
                "endLine": 700,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 713,
                "endLine": 713,
                "startOffset": 46,
                "endOffset": 54
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 718,
                "endLine": 718,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 13 which is greater than 10 authorized.",
      "effort": "13min",
      "debt": "13min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-10-18T16:34:19-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVfZt_JsOJqQ_zIgIF90",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 645,
      "textRange": {
        "startLine": 645,
        "endLine": 645,
        "startOffset": 19,
        "endOffset": 27
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 645,
                "endLine": 645,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 646,
                "endLine": 646,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 648,
                "endLine": 648,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 652,
                "endLine": 652,
                "startOffset": 48,
                "endOffset": 56
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 655,
                "endLine": 655,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 672,
                "endLine": 672,
                "startOffset": 45,
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
                "startLine": 678,
                "endLine": 678,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 687,
                "endLine": 687,
                "startOffset": 49,
                "endOffset": 57
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 688,
                "endLine": 688,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 700,
                "endLine": 700,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 713,
                "endLine": 713,
                "startOffset": 46,
                "endOffset": 54
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 718,
                "endLine": 718,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 12 which is greater than 10 authorized.",
      "effort": "12min",
      "debt": "12min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-10-18T16:34:19-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVfeqJR7OJqQ_zIgIF-p",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 540,
      "textRange": {
        "startLine": 540,
        "endLine": 540,
        "startOffset": 19,
        "endOffset": 27
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 540,
                "endLine": 540,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 541,
                "endLine": 541,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 541,
                "endLine": 541,
                "startOffset": 52,
                "endOffset": 54
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 543,
                "endLine": 543,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 549,
                "endLine": 549,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 555,
                "endLine": 555,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 555,
                "endLine": 555,
                "startOffset": 40,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 560,
                "endLine": 560,
                "startOffset": 56,
                "endOffset": 64
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 561,
                "endLine": 561,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 577,
                "endLine": 577,
                "startOffset": 27,
                "endOffset": 35
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 600,
                "endLine": 600,
                "startOffset": 45,
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
                "startLine": 604,
                "endLine": 604,
                "startOffset": 45,
                "endOffset": 53
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 12 which is greater than 10 authorized.",
      "effort": "12min",
      "debt": "12min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-10-19T15:35:42-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVfeqJR7OJqQ_zIgIF-q",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 859,
      "textRange": {
        "startLine": 859,
        "endLine": 859,
        "startOffset": 32,
        "endOffset": 40
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 859,
                "endLine": 859,
                "startOffset": 32,
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
                "startLine": 864,
                "endLine": 864,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 865,
                "endLine": 865,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 868,
                "endLine": 868,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 872,
                "endLine": 872,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 877,
                "endLine": 877,
                "startOffset": 42,
                "endOffset": 50
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 880,
                "endLine": 880,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 897,
                "endLine": 897,
                "startOffset": 45,
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
                "startLine": 903,
                "endLine": 903,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 914,
                "endLine": 914,
                "startOffset": 49,
                "endOffset": 57
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 915,
                "endLine": 915,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 927,
                "endLine": 927,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 938,
                "endLine": 938,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 13 which is greater than 10 authorized.",
      "effort": "13min",
      "debt": "13min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-10-19T15:35:42-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVfeqJR7OJqQ_zIgIF-r",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 864,
      "textRange": {
        "startLine": 864,
        "endLine": 864,
        "startOffset": 19,
        "endOffset": 27
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 864,
                "endLine": 864,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 865,
                "endLine": 865,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 868,
                "endLine": 868,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 872,
                "endLine": 872,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 877,
                "endLine": 877,
                "startOffset": 42,
                "endOffset": 50
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 880,
                "endLine": 880,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 897,
                "endLine": 897,
                "startOffset": 45,
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
                "startLine": 903,
                "endLine": 903,
                "startOffset": 24,
                "endOffset": 26
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 914,
                "endLine": 914,
                "startOffset": 49,
                "endOffset": 57
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 915,
                "endLine": 915,
                "startOffset": 32,
                "endOffset": 34
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 927,
                "endLine": 927,
                "startOffset": 28,
                "endOffset": 30
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 938,
                "endLine": 938,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 12 which is greater than 10 authorized.",
      "effort": "12min",
      "debt": "12min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-10-19T15:35:42-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVgcS4kcfSHHf-o-NLuk",
      "rule": "javascript:S138",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 416,
      "textRange": {
        "startLine": 416,
        "endLine": 416,
        "startOffset": 0,
        "endOffset": 54
      },
      "flows": [],
      "status": "OPEN",
      "message": "This function has 121 lines, which is greater than the 100 lines authorized. Split it into smaller functions.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-10-31T14:50:17-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVi_2EPzdEyl4efunk_L",
      "rule": "javascript:FunctionComplexity",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "componentId": 815,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 416,
      "textRange": {
        "startLine": 416,
        "endLine": 416,
        "startOffset": 29,
        "endOffset": 37
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 416,
                "endLine": 416,
                "startOffset": 29,
                "endOffset": 37
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 443,
                "endLine": 443,
                "startOffset": 29,
                "endOffset": 37
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 446,
                "endLine": 446,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 457,
                "endLine": 457,
                "startOffset": 28,
                "endOffset": 36
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 459,
                "endLine": 459,
                "startOffset": 19,
                "endOffset": 27
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 462,
                "endLine": 462,
                "startOffset": 20,
                "endOffset": 22
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 473,
                "endLine": 473,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 481,
                "endLine": 481,
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
                "startLine": 488,
                "endLine": 488,
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
                "startLine": 492,
                "endLine": 492,
                "startOffset": 34,
                "endOffset": 42
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 495,
                "endLine": 495,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 522,
                "endLine": 522,
                "startOffset": 32,
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
                "startLine": 526,
                "endLine": 526,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Function has a complexity of 13 which is greater than 10 authorized.",
      "effort": "13min",
      "debt": "13min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-02T09:02:24-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVmyd0-Qa26Qb_yEpwD0",
      "rule": "javascript:CollapsibleIfStatements",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 583,
      "textRange": {
        "startLine": 583,
        "endLine": 583,
        "startOffset": 32,
        "endOffset": 44
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 584,
                "endLine": 584,
                "startOffset": 36,
                "endOffset": 67
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
      "author": "",
      "tags": [
        "clumsy"
      ],
      "creationDate": "2017-01-18T11:44:11-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVmyd0-Ra26Qb_yEpwD1",
      "rule": "javascript:CollapsibleIfStatements",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 481,
      "textRange": {
        "startLine": 481,
        "endLine": 481,
        "startOffset": 28,
        "endOffset": 40
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 482,
                "endLine": 482,
                "startOffset": 32,
                "endOffset": 63
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
      "author": "",
      "tags": [
        "clumsy"
      ],
      "creationDate": "2017-01-18T11:44:11-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVmyd0-Ra26Qb_yEpwD2",
      "rule": "javascript:NestedIfDepth",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 583,
      "textRange": {
        "startLine": 583,
        "endLine": 583,
        "startOffset": 0,
        "endOffset": 47
      },
      "flows": [],
      "status": "OPEN",
      "message": "Refactor this code to not nest more than 3 if/for/while/switch/try statements.",
      "effort": "10min",
      "debt": "10min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-01-18T11:44:11-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVmyd0-Ra26Qb_yEpwD3",
      "rule": "javascript:ExcessiveParameterList",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 174,
      "textRange": {
        "startLine": 174,
        "endLine": 174,
        "startOffset": 0,
        "endOffset": 153
      },
      "flows": [],
      "status": "OPEN",
      "message": "Function has 10 parameters which is greater than 7 authorized.",
      "effort": "20min",
      "debt": "20min",
      "author": "",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-01-18T11:44:11-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVmyd0-Ra26Qb_yEpwD6",
      "rule": "javascript:S1854",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 581,
      "textRange": {
        "startLine": 581,
        "endLine": 581,
        "startOffset": 36,
        "endOffset": 42
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this useless assignment to local variable \"result\"",
      "effort": "15min",
      "debt": "15min",
      "author": "",
      "tags": [
        "cert",
        "cwe",
        "unused"
      ],
      "creationDate": "2017-01-18T11:44:11-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "BUG"
    },
    {
      "key": "AVmyd0-Sa26Qb_yEpwD7",
      "rule": "javascript:S1854",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 479,
      "textRange": {
        "startLine": 479,
        "endLine": 479,
        "startOffset": 32,
        "endOffset": 38
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this useless assignment to local variable \"result\"",
      "effort": "15min",
      "debt": "15min",
      "author": "",
      "tags": [
        "cert",
        "cwe",
        "unused"
      ],
      "creationDate": "2017-01-18T11:44:11-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "BUG"
    },
    {
      "key": "AVmyd0-Sa26Qb_yEpwD8",
      "rule": "javascript:UnusedFunctionArgument",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "componentId": 803,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 478,
      "textRange": {
        "startLine": 478,
        "endLine": 478,
        "startOffset": 0,
        "endOffset": 79
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove the unused function parameters \"a, b\".",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "misra",
        "unused"
      ],
      "creationDate": "2017-01-18T11:44:11-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVmyd05Ca26Qb_yEpwDw",
      "rule": "javascript:UnusedFunctionArgument",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/app.js",
      "componentId": 798,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 55,
      "textRange": {
        "startLine": 55,
        "endLine": 55,
        "startOffset": 0,
        "endOffset": 74
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove the unused function parameter \"$httpProvider\".",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "misra",
        "unused"
      ],
      "creationDate": "2017-01-18T11:44:11-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVmyd09Ya26Qb_yEpwDx",
      "rule": "javascript:S2228",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/command/CommandServices.js",
      "componentId": 800,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 18,
      "textRange": {
        "startLine": 18,
        "endLine": 18,
        "startOffset": 0,
        "endOffset": 49
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this logging statement.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "owasp-a6"
      ],
      "creationDate": "2017-01-18T11:44:11-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "VULNERABILITY"
    },
    {
      "key": "AVmyd09Ya26Qb_yEpwDy",
      "rule": "javascript:UnusedFunctionArgument",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/command/CommandServices.js",
      "componentId": 800,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 17,
      "textRange": {
        "startLine": 17,
        "endLine": 17,
        "startOffset": 0,
        "endOffset": 69
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove the unused function parameters \"data, status, headers, config\".",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "misra",
        "unused"
      ],
      "creationDate": "2017-01-18T11:44:11-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVmyd0_Ea26Qb_yEpwD-",
      "rule": "javascript:SwitchWithoutDefault",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/404Controller.js",
      "componentId": 2008,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 7,
      "textRange": {
        "startLine": 7,
        "endLine": 7,
        "startOffset": 0,
        "endOffset": 29
      },
      "flows": [],
      "status": "OPEN",
      "message": "Add a \"default\" clause to this \"switch\" statement.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "cert",
        "cwe",
        "misra"
      ],
      "creationDate": "2017-01-18T11:44:11-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    },
    {
      "key": "AVmyd0_Ea26Qb_yEpwD9",
      "rule": "javascript:S1871",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/404Controller.js",
      "componentId": 2008,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 40,
      "textRange": {
        "startLine": 40,
        "endLine": 42,
        "startOffset": 12,
        "endOffset": 22
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 37,
                "endLine": 39,
                "startOffset": 12,
                "endOffset": 22
              },
              "msg": "Original"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Either merge this case with the identical one on line \"37\" or change one of the implementations.",
      "effort": "10min",
      "debt": "10min",
      "author": "",
      "tags": [],
      "creationDate": "2017-01-18T11:44:11-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "BUG"
    },
    {
      "key": "AVmyd0_Ea26Qb_yEpwD_",
      "rule": "javascript:SwitchWithoutDefault",
      "severity": "MAJOR",
      "component": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/404Controller.js",
      "componentId": 2008,
      "project": "Satrack.Loc.Key",
      "subProject": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "line": 36,
      "textRange": {
        "startLine": 36,
        "endLine": 36,
        "startOffset": 0,
        "endOffset": 29
      },
      "flows": [],
      "status": "OPEN",
      "message": "Add a \"default\" clause to this \"switch\" statement.",
      "effort": "5min",
      "debt": "5min",
      "author": "",
      "tags": [
        "cert",
        "cwe",
        "misra"
      ],
      "creationDate": "2017-01-18T11:44:11-0500",
      "updateDate": "2017-01-18T11:44:11-0500",
      "type": "CODE_SMELL"
    }
  ],
  "components": [
    {
      "id": 2533,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028:Log/LogRepository.cs",
      "uuid": "AVok7XRlZIQKwRDzKHXB",
      "enabled": true,
      "qualifier": "FIL",
      "name": "LogRepository.cs",
      "longName": "Log/LogRepository.cs",
      "path": "Log/LogRepository.cs",
      "projectId": 194,
      "subProjectId": 1911
    },
    {
      "id": 861,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/QuestionResources.js",
      "uuid": "AVdJpHz1OJqQ_zIgID6Z",
      "enabled": true,
      "qualifier": "FIL",
      "name": "QuestionResources.js",
      "longName": "app/modules/controls/QuestionResources.js",
      "path": "app/modules/controls/QuestionResources.js",
      "projectId": 194,
      "subProjectId": 794
    },
    {
      "id": 1923,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028:Entities/Event.cs",
      "uuid": "AVl1c0ATm5RLIGOifSyc",
      "enabled": true,
      "qualifier": "FIL",
      "name": "Event.cs",
      "longName": "Entities/Event.cs",
      "path": "Entities/Event.cs",
      "projectId": 194,
      "subProjectId": 1911
    },
    {
      "id": 2854,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/GroupsDirective.js",
      "uuid": "AVq6UQoVOLvsYAN1p4-n",
      "enabled": true,
      "qualifier": "FIL",
      "name": "GroupsDirective.js",
      "longName": "app/modules/controls/GroupsDirective.js",
      "path": "app/modules/controls/GroupsDirective.js",
      "projectId": 194,
      "subProjectId": 794
    },
    {
      "id": 2008,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/404Controller.js",
      "uuid": "AVmyd0cIa26Qb_yEpwDt",
      "enabled": true,
      "qualifier": "FIL",
      "name": "404Controller.js",
      "longName": "app/modules/controls/404Controller.js",
      "path": "app/modules/controls/404Controller.js",
      "projectId": 194,
      "subProjectId": 794
    },
    {
      "id": 819,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:scripts/Hubs/MapTrackingHub.js",
      "uuid": "AVcpUO74OJqQ_zIgIDeT",
      "enabled": true,
      "qualifier": "FIL",
      "name": "MapTrackingHub.js",
      "longName": "scripts/Hubs/MapTrackingHub.js",
      "path": "scripts/Hubs/MapTrackingHub.js",
      "projectId": 194,
      "subProjectId": 794
    },
    {
      "id": 1769,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/config.js",
      "uuid": "AViyMfjydEyl4efunk7h",
      "enabled": true,
      "qualifier": "FIL",
      "name": "config.js",
      "longName": "app/config.js",
      "path": "app/config.js",
      "projectId": 194,
      "subProjectId": 794
    },
    {
      "id": 194,
      "key": "Satrack.Loc.Key",
      "uuid": "AVbHm02Y8LphP4XAJa4l",
      "enabled": true,
      "qualifier": "TRK",
      "name": "Satrack - Localizacion",
      "longName": "Satrack - Localizacion"
    },
    {
      "id": 2689,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:scripts/Helper/re-tree.js",
      "uuid": "AVpl_5fEZIQKwRDzKHkh",
      "enabled": true,
      "qualifier": "FIL",
      "name": "re-tree.js",
      "longName": "scripts/Helper/re-tree.js",
      "path": "scripts/Helper/re-tree.js",
      "projectId": 194,
      "subProjectId": 794
    },
    {
      "id": 794,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2",
      "uuid": "AVcpUO8OOJqQ_zIgIDee",
      "enabled": true,
      "qualifier": "BRC",
      "name": "Satrack.Loc.WebUI",
      "longName": "Satrack.Loc.WebUI",
      "path": "Dev/Satrack.Loc.WebUI",
      "projectId": 194,
      "subProjectId": 194
    },
    {
      "id": 800,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/command/CommandServices.js",
      "uuid": "AVcpUO7GOJqQ_zIgIDeA",
      "enabled": true,
      "qualifier": "FIL",
      "name": "CommandServices.js",
      "longName": "app/modules/command/CommandServices.js",
      "path": "app/modules/command/CommandServices.js",
      "projectId": 194,
      "subProjectId": 794
    },
    {
      "id": 1041,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/FloatButtonController.js",
      "uuid": "AVdTt3QOOJqQ_zIgIFlI",
      "enabled": true,
      "qualifier": "FIL",
      "name": "FloatButtonController.js",
      "longName": "app/modules/controls/FloatButtonController.js",
      "path": "app/modules/controls/FloatButtonController.js",
      "projectId": 194,
      "subProjectId": 794
    },
    {
      "id": 803,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapController.js",
      "uuid": "AVcpUO7OOJqQ_zIgIDeD",
      "enabled": true,
      "qualifier": "FIL",
      "name": "MapController.js",
      "longName": "app/modules/controlpanel/MapController.js",
      "path": "app/modules/controlpanel/MapController.js",
      "projectId": 194,
      "subProjectId": 794
    },
    {
      "id": 815,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/VehiclesController.js",
      "uuid": "AVcpUO7tOJqQ_zIgIDeP",
      "enabled": true,
      "qualifier": "FIL",
      "name": "VehiclesController.js",
      "longName": "app/modules/sidenav/VehiclesController.js",
      "path": "app/modules/sidenav/VehiclesController.js",
      "projectId": 194,
      "subProjectId": 794
    },
    {
      "id": 1911,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028",
      "uuid": "AVl1c0A6m5RLIGOifSyt",
      "enabled": true,
      "qualifier": "BRC",
      "name": "Satrack.Loc.Pusher.Interface",
      "longName": "Satrack.Loc.Pusher.Interface",
      "path": "Dev/Satrack.Loc.Pusher.Interface",
      "projectId": 194,
      "subProjectId": 194
    },
    {
      "id": 798,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/app.js",
      "uuid": "AVcpUO7BOJqQ_zIgIDd-",
      "enabled": true,
      "qualifier": "FIL",
      "name": "app.js",
      "longName": "app/app.js",
      "path": "app/app.js",
      "projectId": 194,
      "subProjectId": 794
    },
    {
      "id": 805,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controlpanel/MapServices.js",
      "uuid": "AVcpUO7TOJqQ_zIgIDeF",
      "enabled": true,
      "qualifier": "FIL",
      "name": "MapServices.js",
      "longName": "app/modules/controlpanel/MapServices.js",
      "path": "app/modules/controlpanel/MapServices.js",
      "projectId": 194,
      "subProjectId": 794
    },
    {
      "id": 2637,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/controls/CustomController.js",
      "uuid": "AVpdFTWKZIQKwRDzKHif",
      "enabled": true,
      "qualifier": "FIL",
      "name": "CustomController.js",
      "longName": "app/modules/controls/CustomController.js",
      "path": "app/modules/controls/CustomController.js",
      "projectId": 194,
      "subProjectId": 794
    },
    {
      "id": 813,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:app/modules/sidenav/SideNavController.js",
      "uuid": "AVcpUO7pOJqQ_zIgIDeN",
      "enabled": true,
      "qualifier": "FIL",
      "name": "SideNavController.js",
      "longName": "app/modules/sidenav/SideNavController.js",
      "path": "app/modules/sidenav/SideNavController.js",
      "projectId": 194,
      "subProjectId": 794
    },
    {
      "id": 1927,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:C414A25A-C9A0-4EB5-BB16-0AC87B617028:Hubs/MapTrackingHub.cs",
      "uuid": "AVl1c0Aem5RLIGOifSyg",
      "enabled": true,
      "qualifier": "FIL",
      "name": "MapTrackingHub.cs",
      "longName": "Hubs/MapTrackingHub.cs",
      "path": "Hubs/MapTrackingHub.cs",
      "projectId": 194,
      "subProjectId": 1911
    },
    {
      "id": 2688,
      "key": "Satrack.Loc.Key:Satrack.Loc.Key:EEC0195A-B432-4DE1-940A-F638A8879AB2:scripts/Helper/ng-device-detector.js",
      "uuid": "AVpl_5fCZIQKwRDzKHkg",
      "enabled": true,
      "qualifier": "FIL",
      "name": "ng-device-detector.js",
      "longName": "scripts/Helper/ng-device-detector.js",
      "path": "scripts/Helper/ng-device-detector.js",
      "projectId": 194,
      "subProjectId": 794
    }
  ]
}';
    }

}