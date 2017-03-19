<?php


namespace Tests\Helper;


class MockTestngResponse {

    public static function rewriteJSON($response)
    {
        $a = preg_replace('/\'/', '', $response);
        $b = preg_replace('/\\\"/', '', $a);
        return preg_replace('/\\\%d\\\/', '', $b);
    }


    public static function getResponseIssues()
    {
        return self::rewriteJSON('{
  "total": 2455,
  "p": 1,
  "ps": 100,
  "paging": {
    "pageIndex": 1,
    "pageSize": 100,
    "total": 2455
  },
  "issues": [
    {
      "organization": "default",
      "key": "AVqZkjM3ayFRw6rZSOXz",
      "rule": "squid:S1192",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/EmailableReporter2.java",
      "componentId": 848580,
      "project": "org.testng:testng",
      "line": 444,
      "textRange": {
        "startLine": 444,
        "endLine": 444,
        "startOffset": 30,
        "endOffset": 47
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 444,
                "endLine": 444,
                "startOffset": 30,
                "endOffset": 47
              },
              "msg": "Duplication"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 450,
                "endLine": 450,
                "startOffset": 30,
                "endOffset": 47
              },
              "msg": "Duplication"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 463,
                "endLine": 463,
                "startOffset": 30,
                "endOffset": 47
              },
              "msg": "Duplication"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 472,
                "endLine": 472,
                "startOffset": 30,
                "endOffset": 47
              },
              "msg": "Duplication"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 483,
                "endLine": 483,
                "startOffset": 30,
                "endOffset": 47
              },
              "msg": "Duplication"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Define a constant instead of duplicating this literal \" colspan=\\\"%d\\\"\" 5 times.",
      "effort": "12min",
      "debt": "12min",
      "author": "rankincj@googlemail.com",
      "tags": [
        "design"
      ],
      "creationDate": "2017-03-04T14:44:43+0100",
      "updateDate": "2017-03-04T14:44:43+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqWkeR0ayFRw6rZSJw2",
      "rule": "squid:S899",
      "severity": "MINOR",
      "component": "org.testng:testng:src/main/java/org/testng/internal/thread/graph/GraphThreadPoolExecutor.java",
      "componentId": 848515,
      "project": "org.testng:testng",
      "line": 77,
      "textRange": {
        "startLine": 77,
        "endLine": 77,
        "startOffset": 8,
        "endOffset": 42
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do something with the \"boolean\" value returned by \"await\".",
      "effort": "15min",
      "debt": "15min",
      "assignee": "krmahadevan@github",
      "author": "krishnan.mahadevan1978@gmail.com",
      "tags": [
        "cert",
        "cwe",
        "error-handling",
        "misra"
      ],
      "creationDate": "2017-03-04T00:45:43+0100",
      "updateDate": "2017-03-04T00:45:43+0100",
      "type": "VULNERABILITY"
    },
    {
      "organization": "default",
      "key": "AVqWkeRyayFRw6rZSJw0",
      "rule": "squid:S2142",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/internal/thread/graph/GraphThreadPoolExecutor.java",
      "componentId": 848515,
      "project": "org.testng:testng",
      "line": 78,
      "textRange": {
        "startLine": 78,
        "endLine": 78,
        "startOffset": 15,
        "endOffset": 37
      },
      "flows": [],
      "status": "OPEN",
      "message": "Either re-interrupt this method or rethrow the \"InterruptedException\".",
      "effort": "15min",
      "debt": "15min",
      "assignee": "krmahadevan@github",
      "author": "krishnan.mahadevan1978@gmail.com",
      "tags": [
        "cwe",
        "multi-threading"
      ],
      "creationDate": "2017-03-04T00:45:43+0100",
      "updateDate": "2017-03-04T00:45:43+0100",
      "type": "BUG"
    },
    {
      "organization": "default",
      "key": "AVqWkeR0ayFRw6rZSJw1",
      "rule": "squid:S1148",
      "severity": "MINOR",
      "component": "org.testng:testng:src/main/java/org/testng/internal/thread/graph/GraphThreadPoolExecutor.java",
      "componentId": 848515,
      "project": "org.testng:testng",
      "line": 79,
      "textRange": {
        "startLine": 79,
        "endLine": 79,
        "startOffset": 10,
        "endOffset": 25
      },
      "flows": [],
      "status": "OPEN",
      "message": "Use a logger to log this exception.",
      "effort": "10min",
      "debt": "10min",
      "assignee": "krmahadevan@github",
      "author": "krishnan.mahadevan1978@gmail.com",
      "tags": [
        "error-handling"
      ],
      "creationDate": "2017-03-04T00:45:43+0100",
      "updateDate": "2017-03-04T00:45:43+0100",
      "type": "VULNERABILITY"
    },
    {
      "organization": "default",
      "key": "AVqBtoHVGqtTGnUlOpNo",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/internal/MethodInstance.java",
      "componentId": 848420,
      "project": "org.testng:testng",
      "line": 27,
      "textRange": {
        "startLine": 27,
        "endLine": 27,
        "startOffset": 18,
        "endOffset": 30
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoHXGqtTGnUlOpNp",
      "rule": "squid:MissingDeprecatedCheck",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/internal/MethodInstance.java",
      "componentId": 848420,
      "project": "org.testng:testng",
      "line": 27,
      "textRange": {
        "startLine": 27,
        "endLine": 27,
        "startOffset": 18,
        "endOffset": 30
      },
      "flows": [],
      "status": "OPEN",
      "message": "Add the missing @deprecated Javadoc tag.",
      "effort": "5min",
      "debt": "5min",
      "author": "cedric@beust.com",
      "tags": [
        "bad-practice",
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoPJGqtTGnUlOpNq",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Utils.java",
      "componentId": 848444,
      "project": "org.testng:testng",
      "line": 65,
      "textRange": {
        "startLine": 65,
        "endLine": 65,
        "startOffset": 25,
        "endOffset": 38
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoPJGqtTGnUlOpNr",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Utils.java",
      "componentId": 848444,
      "project": "org.testng:testng",
      "line": 90,
      "textRange": {
        "startLine": 90,
        "endLine": 90,
        "startOffset": 25,
        "endOffset": 39
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoPJGqtTGnUlOpNs",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Utils.java",
      "componentId": 848444,
      "project": "org.testng:testng",
      "line": 258,
      "textRange": {
        "startLine": 258,
        "endLine": 258,
        "startOffset": 21,
        "endOffset": 28
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoPJGqtTGnUlOpNt",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Utils.java",
      "componentId": 848444,
      "project": "org.testng:testng",
      "line": 270,
      "textRange": {
        "startLine": 270,
        "endLine": 270,
        "startOffset": 21,
        "endOffset": 32
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoPJGqtTGnUlOpNu",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Utils.java",
      "componentId": 848444,
      "project": "org.testng:testng",
      "line": 281,
      "textRange": {
        "startLine": 281,
        "endLine": 281,
        "startOffset": 25,
        "endOffset": 60
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoPJGqtTGnUlOpNv",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Utils.java",
      "componentId": 848444,
      "project": "org.testng:testng",
      "line": 310,
      "textRange": {
        "startLine": 310,
        "endLine": 310,
        "startOffset": 25,
        "endOffset": 51
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoPJGqtTGnUlOpNw",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Utils.java",
      "componentId": 848444,
      "project": "org.testng:testng",
      "line": 339,
      "textRange": {
        "startLine": 339,
        "endLine": 339,
        "startOffset": 25,
        "endOffset": 60
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoPJGqtTGnUlOpNx",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Utils.java",
      "componentId": 848444,
      "project": "org.testng:testng",
      "line": 355,
      "textRange": {
        "startLine": 355,
        "endLine": 355,
        "startOffset": 25,
        "endOffset": 69
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoPKGqtTGnUlOpNy",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Utils.java",
      "componentId": 848444,
      "project": "org.testng:testng",
      "line": 438,
      "textRange": {
        "startLine": 438,
        "endLine": 438,
        "startOffset": 21,
        "endOffset": 34
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoPKGqtTGnUlOpNz",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Utils.java",
      "componentId": 848444,
      "project": "org.testng:testng",
      "line": 750,
      "textRange": {
        "startLine": 750,
        "endLine": 750,
        "startOffset": 21,
        "endOffset": 29
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoQvGqtTGnUlOpN0",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/internal/annotations/Converter.java",
      "componentId": 848455,
      "project": "org.testng:testng",
      "line": 16,
      "textRange": {
        "startLine": 16,
        "endLine": 16,
        "startOffset": 13,
        "endOffset": 22
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtod-GqtTGnUlOpN1",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/VerboseReporter.java",
      "componentId": 848593,
      "project": "org.testng:testng",
      "line": 46,
      "textRange": {
        "startLine": 46,
        "endLine": 46,
        "startOffset": 11,
        "endOffset": 26
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeMGqtTGnUlOpN2",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 214,
      "textRange": {
        "startLine": 214,
        "endLine": 214,
        "startOffset": 13,
        "endOffset": 38
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeMGqtTGnUlOpN3",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 222,
      "textRange": {
        "startLine": 222,
        "endLine": 222,
        "startOffset": 14,
        "endOffset": 39
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeNGqtTGnUlOpN4",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 230,
      "textRange": {
        "startLine": 230,
        "endLine": 230,
        "startOffset": 13,
        "endOffset": 38
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeNGqtTGnUlOpN5",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 238,
      "textRange": {
        "startLine": 238,
        "endLine": 238,
        "startOffset": 14,
        "endOffset": 39
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeNGqtTGnUlOpN6",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 246,
      "textRange": {
        "startLine": 246,
        "endLine": 246,
        "startOffset": 16,
        "endOffset": 34
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeNGqtTGnUlOpN7",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 254,
      "textRange": {
        "startLine": 254,
        "endLine": 254,
        "startOffset": 14,
        "endOffset": 32
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeNGqtTGnUlOpN8",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 262,
      "textRange": {
        "startLine": 262,
        "endLine": 262,
        "startOffset": 17,
        "endOffset": 42
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeNGqtTGnUlOpN9",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 270,
      "textRange": {
        "startLine": 270,
        "endLine": 270,
        "startOffset": 14,
        "endOffset": 40
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeNGqtTGnUlOpN-",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 278,
      "textRange": {
        "startLine": 278,
        "endLine": 278,
        "startOffset": 17,
        "endOffset": 44
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeNGqtTGnUlOpN_",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 286,
      "textRange": {
        "startLine": 286,
        "endLine": 286,
        "startOffset": 14,
        "endOffset": 42
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeOGqtTGnUlOpOA",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 294,
      "textRange": {
        "startLine": 294,
        "endLine": 294,
        "startOffset": 16,
        "endOffset": 34
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeOGqtTGnUlOpOB",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 302,
      "textRange": {
        "startLine": 302,
        "endLine": 302,
        "startOffset": 14,
        "endOffset": 32
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeOGqtTGnUlOpOC",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 310,
      "textRange": {
        "startLine": 310,
        "endLine": 310,
        "startOffset": 17,
        "endOffset": 43
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeOGqtTGnUlOpOD",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 318,
      "textRange": {
        "startLine": 318,
        "endLine": 318,
        "startOffset": 14,
        "endOffset": 41
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeOGqtTGnUlOpOE",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 326,
      "textRange": {
        "startLine": 326,
        "endLine": 326,
        "startOffset": 14,
        "endOffset": 40
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeOGqtTGnUlOpOF",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 334,
      "textRange": {
        "startLine": 334,
        "endLine": 334,
        "startOffset": 17,
        "endOffset": 42
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeOGqtTGnUlOpOG",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 342,
      "textRange": {
        "startLine": 342,
        "endLine": 342,
        "startOffset": 14,
        "endOffset": 45
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVqBtoeOGqtTGnUlOpOH",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "componentId": 848595,
      "project": "org.testng:testng",
      "line": 350,
      "textRange": {
        "startLine": 350,
        "endLine": 350,
        "startOffset": 17,
        "endOffset": 47
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-27T23:33:48+0100",
      "updateDate": "2017-02-27T23:33:48+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVpzJKDwGqtTGnUlGbem",
      "rule": "squid:S1192",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/MethodInvocationHelper.java",
      "componentId": 848421,
      "project": "org.testng:testng",
      "line": 261,
      "textRange": {
        "startLine": 261,
        "endLine": 261,
        "startOffset": 70,
        "endOffset": 79
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 261,
                "endLine": 261,
                "startOffset": 70,
                "endOffset": 79
              },
              "msg": "Duplication"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 286,
                "endLine": 286,
                "startOffset": 68,
                "endOffset": 77
              },
              "msg": "Duplication"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 293,
                "endLine": 293,
                "startOffset": 67,
                "endOffset": 76
              },
              "msg": "Duplication"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Define a constant instead of duplicating this literal \"Method \" 3 times.",
      "effort": "8min",
      "debt": "8min",
      "assignee": "juherr@github",
      "author": "julien@herr.fr",
      "tags": [
        "design"
      ],
      "creationDate": "2017-02-25T03:39:51+0100",
      "updateDate": "2017-02-25T03:39:51+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVpzJKPVGqtTGnUlGben",
      "rule": "squid:S00107",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/internal/thread/graph/GraphThreadPoolExecutor.java",
      "componentId": 848515,
      "project": "org.testng:testng",
      "line": 29,
      "textRange": {
        "startLine": 29,
        "endLine": 29,
        "startOffset": 9,
        "endOffset": 32
      },
      "flows": [],
      "status": "OPEN",
      "message": "Constructor has 8 parameters, which is greater than 7 authorized.",
      "effort": "20min",
      "debt": "20min",
      "assignee": "juherr@github",
      "author": "julien@herr.fr",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2017-02-25T03:39:51+0100",
      "updateDate": "2017-02-25T03:39:51+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVprRZ5ZGqtTGnUlFt6Y",
      "rule": "squid:S00116",
      "severity": "MINOR",
      "component": "org.testng:testng:src/main/java/org/testng/internal/TestResult.java",
      "componentId": 848443,
      "project": "org.testng:testng",
      "line": 276,
      "textRange": {
        "startLine": 276,
        "endLine": 276,
        "startOffset": 28,
        "endOffset": 40
      },
      "flows": [],
      "status": "OPEN",
      "message": "Rename this field \"m_attributes\" to match the regular expression \'^[a-z][a-zA-Z0-9]*$\'.",
      "effort": "2min",
      "debt": "2min",
      "assignee": "juherr@github",
      "author": "julien@herr.fr",
      "tags": [
        "convention"
      ],
      "creationDate": "2017-02-23T14:58:42+0100",
      "updateDate": "2017-02-23T14:58:42+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVo4jzq006I2ZTNgYeEt",
      "rule": "javascript:S3827",
      "severity": "BLOCKER",
      "component": "org.testng:testng:src/main/resources/org/testng/testng-reports.js",
      "componentId": 1266555,
      "project": "org.testng:testng",
      "line": 109,
      "textRange": {
        "startLine": 109,
        "endLine": 109,
        "startOffset": 24,
        "endOffset": 47
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 110,
                "endLine": 110,
                "startOffset": 15,
                "endOffset": 38
              }
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "\"suiteTableInitFunctions\" does not exist. Change its name or declare it so that its usage doesn\'t result in a \"ReferenceError\".",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [],
      "creationDate": "2017-02-13T18:38:37+0100",
      "updateDate": "2017-02-13T18:38:37+0100",
      "type": "BUG"
    },
    {
      "organization": "default",
      "key": "AVoPtGjnPy26VwNFU9yk",
      "rule": "common-java:DuplicatedBlocks",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/Assert.java",
      "componentId": 848268,
      "project": "org.testng:testng",
      "flows": [],
      "status": "OPEN",
      "message": "2 duplicated blocks of code must be removed.",
      "effort": "30min",
      "debt": "30min",
      "assignee": "juherr@github",
      "author": "julien@herr.fr",
      "tags": [
        "pitfall"
      ],
      "creationDate": "2017-02-05T20:14:52+0100",
      "updateDate": "2017-02-05T20:14:52+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVoPtGjqPy26VwNFU9yl",
      "rule": "squid:S1192",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/Assert.java",
      "componentId": 848268,
      "project": "org.testng:testng",
      "line": 774,
      "textRange": {
        "startLine": 774,
        "endLine": 774,
        "startOffset": 13,
        "endOffset": 41
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 774,
                "endLine": 774,
                "startOffset": 13,
                "endOffset": 41
              },
              "msg": "Duplication"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 797,
                "endLine": 797,
                "startOffset": 13,
                "endOffset": 41
              },
              "msg": "Duplication"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 808,
                "endLine": 808,
                "startOffset": 13,
                "endOffset": 41
              },
              "msg": "Duplication"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Define a constant instead of duplicating this literal \"Sets not equal: expected: \" 3 times.",
      "effort": "8min",
      "debt": "8min",
      "author": "cedric@beust.com",
      "tags": [
        "design"
      ],
      "creationDate": "2017-02-05T20:14:52+0100",
      "updateDate": "2017-02-05T20:14:52+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVoPtGjqPy26VwNFU9ym",
      "rule": "squid:S2583",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/Assert.java",
      "componentId": 848268,
      "project": "org.testng:testng",
      "line": 988,
      "textRange": {
        "startLine": 988,
        "endLine": 988,
        "startOffset": 8,
        "endOffset": 12
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 988,
                "endLine": 988,
                "startOffset": 8,
                "endOffset": 12
              },
              "msg": "Condition is always true."
            },
            {
              "textRange": {
                "startLine": 983,
                "endLine": 983,
                "startOffset": 6,
                "endOffset": 17
              },
              "msg": "\'fail\' is assigned true."
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Change this condition so that it does not always evaluate to \"true\"",
      "effort": "15min",
      "debt": "15min",
      "author": "cedric@beust.com",
      "tags": [
        "cert",
        "cwe",
        "misra",
        "pitfall"
      ],
      "creationDate": "2017-02-05T20:14:52+0100",
      "updateDate": "2017-02-05T20:14:52+0100",
      "type": "BUG"
    },
    {
      "organization": "default",
      "key": "AVoPtGjrPy26VwNFU9yq",
      "rule": "squid:S1166",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/Assert.java",
      "componentId": 848268,
      "project": "org.testng:testng",
      "line": 1002,
      "textRange": {
        "startLine": 1002,
        "endLine": 1002,
        "startOffset": 13,
        "endOffset": 29
      },
      "flows": [],
      "status": "OPEN",
      "message": "Either log or rethrow this exception.",
      "effort": "10min",
      "debt": "10min",
      "assignee": "juherr@github",
      "author": "julien@herr.fr",
      "tags": [
        "cert",
        "error-handling",
        "suspicious"
      ],
      "creationDate": "2017-02-05T20:14:52+0100",
      "updateDate": "2017-02-05T20:14:52+0100",
      "type": "BUG"
    },
    {
      "organization": "default",
      "key": "AVoPtGjrPy26VwNFU9yp",
      "rule": "squid:S2583",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/Assert.java",
      "componentId": 848268,
      "project": "org.testng:testng",
      "line": 1006,
      "textRange": {
        "startLine": 1006,
        "endLine": 1006,
        "startOffset": 8,
        "endOffset": 12
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1006,
                "endLine": 1006,
                "startOffset": 8,
                "endOffset": 12
              },
              "msg": "Condition is always true."
            },
            {
              "textRange": {
                "startLine": 1001,
                "endLine": 1001,
                "startOffset": 6,
                "endOffset": 17
              },
              "msg": "\'fail\' is assigned true."
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Change this condition so that it does not always evaluate to \"true\"",
      "effort": "15min",
      "debt": "15min",
      "assignee": "juherr@github",
      "author": "julien@herr.fr",
      "tags": [
        "cert",
        "cwe",
        "misra",
        "pitfall"
      ],
      "creationDate": "2017-02-05T20:14:52+0100",
      "updateDate": "2017-02-05T20:14:52+0100",
      "type": "BUG"
    },
    {
      "organization": "default",
      "key": "AVoPtGjrPy26VwNFU9yr",
      "rule": "squid:S1166",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/Assert.java",
      "componentId": 848268,
      "project": "org.testng:testng",
      "line": 1020,
      "textRange": {
        "startLine": 1020,
        "endLine": 1020,
        "startOffset": 13,
        "endOffset": 29
      },
      "flows": [],
      "status": "OPEN",
      "message": "Either log or rethrow this exception.",
      "effort": "10min",
      "debt": "10min",
      "assignee": "juherr@github",
      "author": "julien@herr.fr",
      "tags": [
        "cert",
        "error-handling",
        "suspicious"
      ],
      "creationDate": "2017-02-05T20:14:52+0100",
      "updateDate": "2017-02-05T20:14:52+0100",
      "type": "BUG"
    },
    {
      "organization": "default",
      "key": "AVoPtGjrPy26VwNFU9yn",
      "rule": "squid:S2583",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/Assert.java",
      "componentId": 848268,
      "project": "org.testng:testng",
      "line": 1024,
      "textRange": {
        "startLine": 1024,
        "endLine": 1024,
        "startOffset": 8,
        "endOffset": 12
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1024,
                "endLine": 1024,
                "startOffset": 8,
                "endOffset": 12
              },
              "msg": "Condition is always true."
            },
            {
              "textRange": {
                "startLine": 1019,
                "endLine": 1019,
                "startOffset": 6,
                "endOffset": 17
              },
              "msg": "\'fail\' is assigned true."
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Change this condition so that it does not always evaluate to \"true\"",
      "effort": "15min",
      "debt": "15min",
      "assignee": "juherr@github",
      "author": "julien@herr.fr",
      "tags": [
        "cert",
        "cwe",
        "misra",
        "pitfall"
      ],
      "creationDate": "2017-02-05T20:14:52+0100",
      "updateDate": "2017-02-05T20:14:52+0100",
      "type": "BUG"
    },
    {
      "organization": "default",
      "key": "AVoPtGjrPy26VwNFU9ys",
      "rule": "squid:S1166",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/Assert.java",
      "componentId": 848268,
      "project": "org.testng:testng",
      "line": 1038,
      "textRange": {
        "startLine": 1038,
        "endLine": 1038,
        "startOffset": 13,
        "endOffset": 29
      },
      "flows": [],
      "status": "OPEN",
      "message": "Either log or rethrow this exception.",
      "effort": "10min",
      "debt": "10min",
      "assignee": "juherr@github",
      "author": "julien@herr.fr",
      "tags": [
        "cert",
        "error-handling",
        "suspicious"
      ],
      "creationDate": "2017-02-05T20:14:52+0100",
      "updateDate": "2017-02-05T20:14:52+0100",
      "type": "BUG"
    },
    {
      "organization": "default",
      "key": "AVoPtGjrPy26VwNFU9yo",
      "rule": "squid:S2583",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/Assert.java",
      "componentId": 848268,
      "project": "org.testng:testng",
      "line": 1042,
      "textRange": {
        "startLine": 1042,
        "endLine": 1042,
        "startOffset": 8,
        "endOffset": 12
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1042,
                "endLine": 1042,
                "startOffset": 8,
                "endOffset": 12
              },
              "msg": "Condition is always true."
            },
            {
              "textRange": {
                "startLine": 1037,
                "endLine": 1037,
                "startOffset": 6,
                "endOffset": 17
              },
              "msg": "\'fail\' is assigned true."
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Change this condition so that it does not always evaluate to \"true\"",
      "effort": "15min",
      "debt": "15min",
      "assignee": "juherr@github",
      "author": "julien@herr.fr",
      "tags": [
        "cert",
        "cwe",
        "misra",
        "pitfall"
      ],
      "creationDate": "2017-02-05T20:14:52+0100",
      "updateDate": "2017-02-05T20:14:52+0100",
      "type": "BUG"
    },
    {
      "organization": "default",
      "key": "AVoPtGjrPy26VwNFU9yt",
      "rule": "squid:S1166",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/Assert.java",
      "componentId": 848268,
      "project": "org.testng:testng",
      "line": 1056,
      "textRange": {
        "startLine": 1056,
        "endLine": 1056,
        "startOffset": 13,
        "endOffset": 29
      },
      "flows": [],
      "status": "OPEN",
      "message": "Either log or rethrow this exception.",
      "effort": "10min",
      "debt": "10min",
      "assignee": "juherr@github",
      "author": "julien@herr.fr",
      "tags": [
        "cert",
        "error-handling",
        "suspicious"
      ],
      "creationDate": "2017-02-05T20:14:52+0100",
      "updateDate": "2017-02-05T20:14:52+0100",
      "type": "BUG"
    },
    {
      "organization": "default",
      "key": "AVoFU9ucPy26VwNFUNdF",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/ITestNGMethod.java",
      "componentId": 848313,
      "project": "org.testng:testng",
      "line": 173,
      "textRange": {
        "startLine": 173,
        "endLine": 173,
        "startOffset": 6,
        "endOffset": 29
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2017-02-03T19:53:18+0100",
      "updateDate": "2017-02-03T19:53:18+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVoFU9_HPy26VwNFUNdG",
      "rule": "squid:UselessParenthesesCheck",
      "severity": "MINOR",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Invoker.java",
      "componentId": 848416,
      "project": "org.testng:testng",
      "line": 173,
      "textRange": {
        "startLine": 173,
        "endLine": 173,
        "startOffset": 10,
        "endOffset": 11
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 173,
                "endLine": 173,
                "startOffset": 57,
                "endOffset": 58
              },
              "msg": "Original"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Remove those useless parentheses.",
      "effort": "1min",
      "debt": "1min",
      "assignee": "krmahadevan@github",
      "author": "krishnan.mahadevan1978@gmail.com",
      "tags": [
        "confusing"
      ],
      "creationDate": "2017-02-03T19:53:18+0100",
      "updateDate": "2017-02-03T19:53:18+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVoFU9_IPy26VwNFUNdH",
      "rule": "squid:S1192",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Invoker.java",
      "componentId": 848416,
      "project": "org.testng:testng",
      "line": 199,
      "textRange": {
        "startLine": 199,
        "endLine": 199,
        "startOffset": 21,
        "endOffset": 32
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 199,
                "endLine": 199,
                "startOffset": 21,
                "endOffset": 32
              },
              "msg": "Duplication"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 230,
                "endLine": 230,
                "startOffset": 16,
                "endOffset": 27
              },
              "msg": "Duplication"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 237,
                "endLine": 237,
                "startOffset": 14,
                "endOffset": 25
              },
              "msg": "Duplication"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Define a constant instead of duplicating this literal \"Skipping \" 3 times.",
      "effort": "8min",
      "debt": "8min",
      "assignee": "juherr@github",
      "author": "julien@herr.fr",
      "tags": [
        "design"
      ],
      "creationDate": "2017-02-03T19:53:18+0100",
      "updateDate": "2017-02-03T19:53:18+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVkjZGsf5BQvDmAJLNfV",
      "rule": "squid:S1172",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/TestClass.java",
      "componentId": 848326,
      "project": "org.testng:testng",
      "line": 39,
      "textRange": {
        "startLine": 39,
        "endLine": 39,
        "startOffset": 27,
        "endOffset": 34
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this unused method parameter \"runInfo\".",
      "effort": "5min",
      "debt": "5min",
      "author": "cedric@beust.com",
      "tags": [
        "cert",
        "misra",
        "unused"
      ],
      "creationDate": "2016-12-21T22:57:06+0100",
      "updateDate": "2016-12-21T22:57:06+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVkjZG3E5BQvDmAJLNfW",
      "rule": "squid:S1143",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/internal/ClassHelper.java",
      "componentId": 848389,
      "project": "org.testng:testng",
      "line": 231,
      "textRange": {
        "startLine": 231,
        "endLine": 231,
        "startOffset": 8,
        "endOffset": 14
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this return statement from this finally block.",
      "effort": "30min",
      "debt": "30min",
      "assignee": "krmahadevan@github",
      "author": "krishnan.mahadevan1978@gmail.com",
      "tags": [
        "cert",
        "cwe",
        "error-handling"
      ],
      "creationDate": "2016-12-21T22:57:06+0100",
      "updateDate": "2016-12-21T22:57:06+0100",
      "type": "BUG"
    },
    {
      "organization": "default",
      "key": "AVkjZG9I5BQvDmAJLNfX",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/PackageUtils.java",
      "componentId": 848427,
      "project": "org.testng:testng",
      "line": 53,
      "textRange": {
        "startLine": 53,
        "endLine": 53,
        "startOffset": 25,
        "endOffset": 45
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 57,
                "endLine": 57,
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
                "startLine": 63,
                "endLine": 63,
                "startOffset": 86,
                "endOffset": 87
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
                "startLine": 75,
                "endLine": 75,
                "startOffset": 4,
                "endOffset": 7
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 76,
                "endLine": 76,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 80,
                "endLine": 80,
                "startOffset": 6,
                "endOffset": 11
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 86,
                "endLine": 86,
                "startOffset": 4,
                "endOffset": 7
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
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 92,
                "endLine": 92,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 95,
                "endLine": 95,
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
                "startLine": 98,
                "endLine": 98,
                "startOffset": 8,
                "endOffset": 13
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 101,
                "endLine": 101,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 104,
                "endLine": 104,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 106,
                "endLine": 106,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+5 (incl 4 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 110,
                "endLine": 110,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+5 (incl 4 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 110,
                "endLine": 110,
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
                "startLine": 113,
                "endLine": 113,
                "startOffset": 14,
                "endOffset": 16
              },
              "msg": "+6 (incl 5 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 113,
                "endLine": 113,
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
                "startLine": 121,
                "endLine": 121,
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
                "startLine": 131,
                "endLine": 131,
                "startOffset": 10,
                "endOffset": 15
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 47 to the 15 allowed.",
      "effort": "37min",
      "debt": "37min",
      "assignee": "krmahadevan@github",
      "author": "krishnan.mahadevan1978@gmail.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-21T22:57:06+0100",
      "updateDate": "2016-12-21T22:57:06+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5R-SrfIUgbqivM0d",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/Assert.java",
      "componentId": 848268,
      "project": "org.testng:testng",
      "line": 137,
      "textRange": {
        "startLine": 137,
        "endLine": 137,
        "startOffset": 22,
        "endOffset": 39
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 138,
                "endLine": 138,
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
                "startLine": 141,
                "endLine": 141,
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
                "startLine": 148,
                "endLine": 148,
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
                "startLine": 150,
                "endLine": 150,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 151,
                "endLine": 151,
                "startOffset": 9,
                "endOffset": 12
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 156,
                "endLine": 156,
                "startOffset": 14,
                "endOffset": 19
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 157,
                "endLine": 157,
                "startOffset": 63,
                "endOffset": 64
              },
              "msg": "+5 (incl 4 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 163,
                "endLine": 163,
                "startOffset": 8,
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
                "startLine": 164,
                "endLine": 164,
                "startOffset": 80,
                "endOffset": 81
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 22 to the 15 allowed.",
      "effort": "12min",
      "debt": "12min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5R-UrfIUgbqivM0e",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/Assert.java",
      "componentId": 848268,
      "project": "org.testng:testng",
      "line": 588,
      "textRange": {
        "startLine": 588,
        "endLine": 588,
        "startOffset": 21,
        "endOffset": 33
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 589,
                "endLine": 589,
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
                "startLine": 593,
                "endLine": 593,
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
                "startLine": 593,
                "endLine": 593,
                "startOffset": 22,
                "endOffset": 24
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 594,
                "endLine": 594,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 596,
                "endLine": 596,
                "startOffset": 8,
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
                "startLine": 602,
                "endLine": 602,
                "startOffset": 4,
                "endOffset": 9
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 602,
                "endLine": 602,
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
                "startLine": 608,
                "endLine": 608,
                "startOffset": 44,
                "endOffset": 45
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 614,
                "endLine": 614,
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
                "startLine": 617,
                "endLine": 617,
                "startOffset": 44,
                "endOffset": 45
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 620,
                "endLine": 620,
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
                "startLine": 623,
                "endLine": 623,
                "startOffset": 44,
                "endOffset": 45
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 16 to the 15 allowed.",
      "effort": "6min",
      "debt": "6min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SHUrfIUgbqivM0g",
      "rule": "squid:S1133",
      "severity": "INFO",
      "component": "org.testng:testng:src/main/java/org/testng/SuiteRunner.java",
      "componentId": 848324,
      "project": "org.testng:testng",
      "line": 108,
      "textRange": {
        "startLine": 108,
        "endLine": 108,
        "startOffset": 12,
        "endOffset": 23
      },
      "flows": [],
      "status": "OPEN",
      "message": "Do not forget to remove this deprecated code someday.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "obsolete"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SHVrfIUgbqivM0h",
      "rule": "squid:S00107",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/SuiteRunner.java",
      "componentId": 848324,
      "project": "org.testng:testng",
      "line": 108,
      "textRange": {
        "startLine": 108,
        "endLine": 108,
        "startOffset": 12,
        "endOffset": 23
      },
      "flows": [],
      "status": "OPEN",
      "message": "Constructor has 9 parameters, which is greater than 7 authorized.",
      "effort": "20min",
      "debt": "20min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SLQrfIUgbqivM0k",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestNG.java",
      "componentId": 848329,
      "project": "org.testng:testng",
      "line": 261,
      "textRange": {
        "startLine": 261,
        "endLine": 261,
        "startOffset": 14,
        "endOffset": 40
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 264,
                "endLine": 264,
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
                "startLine": 269,
                "endLine": 269,
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
                "startLine": 271,
                "endLine": 271,
                "startOffset": 5,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 272,
                "endLine": 272,
                "startOffset": 8,
                "endOffset": 11
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 275,
                "endLine": 275,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 280,
                "endLine": 280,
                "startOffset": 18,
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
                "startLine": 283,
                "endLine": 283,
                "startOffset": 16,
                "endOffset": 19
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 287,
                "endLine": 287,
                "startOffset": 14,
                "endOffset": 19
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 299,
                "endLine": 299,
                "startOffset": 4,
                "endOffset": 7
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 300,
                "endLine": 300,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 306,
                "endLine": 306,
                "startOffset": 8,
                "endOffset": 11
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 308,
                "endLine": 308,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 311,
                "endLine": 311,
                "startOffset": 10,
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
                "startLine": 316,
                "endLine": 316,
                "startOffset": 6,
                "endOffset": 11
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 318,
                "endLine": 318,
                "startOffset": 8,
                "endOffset": 13
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 321,
                "endLine": 321,
                "startOffset": 8,
                "endOffset": 13
              },
              "msg": "+3 (incl 2 for nesting)"
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
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 324,
                "endLine": 324,
                "startOffset": 8,
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
                "startLine": 333,
                "endLine": 333,
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
                "startLine": 333,
                "endLine": 333,
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
                "startLine": 335,
                "endLine": 335,
                "startOffset": 6,
                "endOffset": 9
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 342,
                "endLine": 342,
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
                "startLine": 358,
                "endLine": 358,
                "startOffset": 8,
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
                "startLine": 360,
                "endLine": 360,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 363,
                "endLine": 363,
                "startOffset": 12,
                "endOffset": 15
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 365,
                "endLine": 365,
                "startOffset": 14,
                "endOffset": 16
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 367,
                "endLine": 367,
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
                "startLine": 374,
                "endLine": 374,
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
                "startLine": 380,
                "endLine": 380,
                "startOffset": 6,
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
                "startLine": 388,
                "endLine": 388,
                "startOffset": 8,
                "endOffset": 11
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 396,
                "endLine": 396,
                "startOffset": 4,
                "endOffset": 9
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 61 to the 15 allowed.",
      "effort": "51min",
      "debt": "51min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SLQrfIUgbqivM0l",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestNG.java",
      "componentId": 848329,
      "project": "org.testng:testng",
      "line": 563,
      "textRange": {
        "startLine": 563,
        "endLine": 563,
        "startOffset": 25,
        "endOffset": 58
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 573,
                "endLine": 573,
                "startOffset": 4,
                "endOffset": 7
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 579,
                "endLine": 579,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 582,
                "endLine": 582,
                "startOffset": 8,
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
                "startLine": 583,
                "endLine": 583,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 583,
                "endLine": 583,
                "startOffset": 22,
                "endOffset": 24
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 589,
                "endLine": 589,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 595,
                "endLine": 595,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 599,
                "endLine": 599,
                "startOffset": 6,
                "endOffset": 9
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 600,
                "endLine": 600,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 606,
                "endLine": 606,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 19 to the 15 allowed.",
      "effort": "9min",
      "debt": "9min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SLRrfIUgbqivM0p",
      "rule": "squid:S00116",
      "severity": "MINOR",
      "component": "org.testng:testng:src/main/java/org/testng/TestNG.java",
      "componentId": 848329,
      "project": "org.testng:testng",
      "line": 855,
      "textRange": {
        "startLine": 855,
        "endLine": 855,
        "startOffset": 18,
        "endOffset": 33
      },
      "flows": [],
      "status": "OPEN",
      "message": "Rename this field \"m_preserveOrder\" to match the regular expression \'^[a-z][a-zA-Z0-9]*$\'.",
      "effort": "2min",
      "debt": "2min",
      "author": "cedric@beust.com",
      "tags": [
        "convention"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SLRrfIUgbqivM0r",
      "rule": "squid:S00117",
      "severity": "MINOR",
      "component": "org.testng:testng:src/main/java/org/testng/TestNG.java",
      "componentId": 848329,
      "project": "org.testng:testng",
      "line": 926,
      "textRange": {
        "startLine": 926,
        "endLine": 926,
        "startOffset": 92,
        "endOffset": 108
      },
      "flows": [],
      "status": "OPEN",
      "message": "Rename this local variable name to match the regular expression \'^[a-z][a-zA-Z0-9]*$\'.",
      "effort": "2min",
      "debt": "2min",
      "assignee": "juherr@github",
      "author": "julien@herr.fr",
      "tags": [
        "convention"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SLSrfIUgbqivM0s",
      "rule": "squid:S00117",
      "severity": "MINOR",
      "component": "org.testng:testng:src/main/java/org/testng/TestNG.java",
      "componentId": 848329,
      "project": "org.testng:testng",
      "line": 927,
      "textRange": {
        "startLine": 927,
        "endLine": 927,
        "startOffset": 92,
        "endOffset": 108
      },
      "flows": [],
      "status": "OPEN",
      "message": "Rename this local variable name to match the regular expression \'^[a-z][a-zA-Z0-9]*$\'.",
      "effort": "2min",
      "debt": "2min",
      "assignee": "juherr@github",
      "author": "julien@herr.fr",
      "tags": [
        "convention"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SLQrfIUgbqivM0m",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestNG.java",
      "componentId": 848329,
      "project": "org.testng:testng",
      "line": 1207,
      "textRange": {
        "startLine": 1207,
        "endLine": 1207,
        "startOffset": 22,
        "endOffset": 38
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1209,
                "endLine": 1209,
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
                "startLine": 1210,
                "endLine": 1210,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1216,
                "endLine": 1216,
                "startOffset": 6,
                "endOffset": 9
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1223,
                "endLine": 1223,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1223,
                "endLine": 1223,
                "startOffset": 37,
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
                "startLine": 1225,
                "endLine": 1225,
                "startOffset": 8,
                "endOffset": 11
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1229,
                "endLine": 1229,
                "startOffset": 8,
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
                "startLine": 1234,
                "endLine": 1234,
                "startOffset": 8,
                "endOffset": 11
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1252,
                "endLine": 1252,
                "startOffset": 8,
                "endOffset": 13
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1258,
                "endLine": 1258,
                "startOffset": 4,
                "endOffset": 8
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 19 to the 15 allowed.",
      "effort": "9min",
      "debt": "9min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SLRrfIUgbqivM0n",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestNG.java",
      "componentId": 848329,
      "project": "org.testng:testng",
      "line": 1460,
      "textRange": {
        "startLine": 1460,
        "endLine": 1460,
        "startOffset": 17,
        "endOffset": 26
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1461,
                "endLine": 1461,
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
                "startLine": 1467,
                "endLine": 1467,
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
                "startLine": 1470,
                "endLine": 1470,
                "startOffset": 6,
                "endOffset": 9
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1479,
                "endLine": 1479,
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
                "startLine": 1490,
                "endLine": 1490,
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
                "startLine": 1501,
                "endLine": 1501,
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
                "startLine": 1504,
                "endLine": 1504,
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
                "startLine": 1507,
                "endLine": 1507,
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
                "startLine": 1510,
                "endLine": 1510,
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
                "startLine": 1513,
                "endLine": 1513,
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
                "startLine": 1516,
                "endLine": 1516,
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
                "startLine": 1519,
                "endLine": 1519,
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
                "startLine": 1521,
                "endLine": 1521,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1527,
                "endLine": 1527,
                "startOffset": 6,
                "endOffset": 9
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1529,
                "endLine": 1529,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1537,
                "endLine": 1537,
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
                "startLine": 1539,
                "endLine": 1539,
                "startOffset": 6,
                "endOffset": 9
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1542,
                "endLine": 1542,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1544,
                "endLine": 1544,
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
                "startLine": 1548,
                "endLine": 1548,
                "startOffset": 8,
                "endOffset": 13
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1554,
                "endLine": 1554,
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
                "startLine": 1557,
                "endLine": 1557,
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
                "startLine": 1562,
                "endLine": 1562,
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
                "startLine": 1567,
                "endLine": 1567,
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
                "startLine": 1571,
                "endLine": 1571,
                "startOffset": 4,
                "endOffset": 6
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 35 to the 15 allowed.",
      "effort": "25min",
      "debt": "25min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SLRrfIUgbqivM0o",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestNG.java",
      "componentId": 848329,
      "project": "org.testng:testng",
      "line": 1608,
      "textRange": {
        "startLine": 1608,
        "endLine": 1608,
        "startOffset": 14,
        "endOffset": 23
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1612,
                "endLine": 1612,
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
                "startLine": 1618,
                "endLine": 1618,
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
                "startLine": 1623,
                "endLine": 1623,
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
                "startLine": 1628,
                "endLine": 1628,
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
                "startLine": 1641,
                "endLine": 1641,
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
                "startLine": 1646,
                "endLine": 1646,
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
                "startLine": 1652,
                "endLine": 1652,
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
                "startLine": 1656,
                "endLine": 1656,
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
                "startLine": 1661,
                "endLine": 1661,
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
                "startLine": 1666,
                "endLine": 1666,
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
                "startLine": 1668,
                "endLine": 1668,
                "startOffset": 6,
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
                "startLine": 1673,
                "endLine": 1673,
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
                "startLine": 1678,
                "endLine": 1678,
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
                "startLine": 1683,
                "endLine": 1683,
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
                "startLine": 1688,
                "endLine": 1688,
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
                "startLine": 1693,
                "endLine": 1693,
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
                "startLine": 1698,
                "endLine": 1698,
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
                "startLine": 1699,
                "endLine": 1699,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1702,
                "endLine": 1702,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 21 to the 15 allowed.",
      "effort": "11min",
      "debt": "11min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SNPrfIUgbqivM0u",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestNGAntTask.java",
      "componentId": 848330,
      "project": "org.testng:testng",
      "line": 722,
      "textRange": {
        "startLine": 722,
        "endLine": 722,
        "startOffset": 17,
        "endOffset": 28
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 723,
                "endLine": 723,
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
                "startLine": 728,
                "endLine": 728,
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
                "startLine": 729,
                "endLine": 729,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 733,
                "endLine": 733,
                "startOffset": 6,
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
                "startLine": 734,
                "endLine": 734,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 742,
                "endLine": 742,
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
                "startLine": 743,
                "endLine": 743,
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
                "startLine": 744,
                "endLine": 744,
                "startOffset": 34,
                "endOffset": 35
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 745,
                "endLine": 745,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 749,
                "endLine": 749,
                "startOffset": 6,
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
                "startLine": 750,
                "endLine": 750,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 758,
                "endLine": 758,
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
                "startLine": 759,
                "endLine": 759,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 763,
                "endLine": 763,
                "startOffset": 6,
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
                "startLine": 764,
                "endLine": 764,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 772,
                "endLine": 772,
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
                "startLine": 773,
                "endLine": 773,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 777,
                "endLine": 777,
                "startOffset": 6,
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
                "startLine": 778,
                "endLine": 778,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 32 to the 15 allowed.",
      "effort": "22min",
      "debt": "22min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SNNrfIUgbqivM0t",
      "rule": "squid:S1905",
      "severity": "MINOR",
      "component": "org.testng:testng:src/main/java/org/testng/TestNGAntTask.java",
      "componentId": 848330,
      "project": "org.testng:testng",
      "line": 794,
      "textRange": {
        "startLine": 794,
        "endLine": 794,
        "startOffset": 17,
        "endOffset": 23
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove this unnecessary cast to \"Target\".",
      "effort": "5min",
      "debt": "5min",
      "author": "cbeust@1a8b0fc8-9519-0410-aeec-afd8fd7729cf",
      "tags": [
        "clumsy",
        "redundant"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SNPrfIUgbqivM0v",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestNGAntTask.java",
      "componentId": 848330,
      "project": "org.testng:testng",
      "line": 935,
      "textRange": {
        "startLine": 935,
        "endLine": 935,
        "startOffset": 17,
        "endOffset": 24
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 940,
                "endLine": 940,
                "startOffset": 4,
                "endOffset": 9
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 942,
                "endLine": 942,
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
                "startLine": 942,
                "endLine": 942,
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
                "startLine": 947,
                "endLine": 947,
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
                "startLine": 953,
                "endLine": 953,
                "startOffset": 30,
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
                "startLine": 957,
                "endLine": 957,
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
                "startLine": 958,
                "endLine": 958,
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
                "startLine": 964,
                "endLine": 964,
                "startOffset": 4,
                "endOffset": 7
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
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 967,
                "endLine": 967,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 970,
                "endLine": 970,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 976,
                "endLine": 976,
                "startOffset": 6,
                "endOffset": 10
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 18 to the 15 allowed.",
      "effort": "8min",
      "debt": "8min",
      "author": "cbeust@1a8b0fc8-9519-0410-aeec-afd8fd7729cf",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SPQrfIUgbqivM02",
      "rule": "squid:S00115",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestRunner.java",
      "componentId": 848333,
      "project": "org.testng:testng",
      "line": 149,
      "textRange": {
        "startLine": 149,
        "endLine": 149,
        "startOffset": 46,
        "endOffset": 61
      },
      "flows": [],
      "status": "OPEN",
      "message": "Rename this constant name to match the regular expression \'^[A-Z][A-Z0-9]*(_[A-Z0-9]+)*$\'.",
      "effort": "2min",
      "debt": "2min",
      "assignee": "juherr@github",
      "author": "herr@protoelectronique.com",
      "tags": [
        "convention"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-19T09:51:58+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SPRrfIUgbqivM03",
      "rule": "squid:S00115",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestRunner.java",
      "componentId": 848333,
      "project": "org.testng:testng",
      "line": 149,
      "textRange": {
        "startLine": 149,
        "endLine": 149,
        "startOffset": 4,
        "endOffset": 19
      },
      "flows": [],
      "status": "OPEN",
      "message": "Rename this constant name to match the regular expression \'^[A-Z][A-Z0-9]*(_[A-Z0-9]+)*$\'.",
      "effort": "2min",
      "debt": "2min",
      "assignee": "juherr@github",
      "author": "herr@protoelectronique.com",
      "tags": [
        "convention"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-19T09:51:58+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SPRrfIUgbqivM04",
      "rule": "squid:S00115",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestRunner.java",
      "componentId": 848333,
      "project": "org.testng:testng",
      "line": 149,
      "textRange": {
        "startLine": 149,
        "endLine": 149,
        "startOffset": 63,
        "endOffset": 79
      },
      "flows": [],
      "status": "OPEN",
      "message": "Rename this constant name to match the regular expression \'^[A-Z][A-Z0-9]*(_[A-Z0-9]+)*$\'.",
      "effort": "2min",
      "debt": "2min",
      "assignee": "juherr@github",
      "author": "herr@protoelectronique.com",
      "tags": [
        "convention"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-19T09:51:58+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SPRrfIUgbqivM05",
      "rule": "squid:S00115",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestRunner.java",
      "componentId": 848333,
      "project": "org.testng:testng",
      "line": 149,
      "textRange": {
        "startLine": 149,
        "endLine": 149,
        "startOffset": 21,
        "endOffset": 34
      },
      "flows": [],
      "status": "OPEN",
      "message": "Rename this constant name to match the regular expression \'^[A-Z][A-Z0-9]*(_[A-Z0-9]+)*$\'.",
      "effort": "2min",
      "debt": "2min",
      "assignee": "juherr@github",
      "author": "herr@protoelectronique.com",
      "tags": [
        "convention"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-19T09:51:58+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SPRrfIUgbqivM06",
      "rule": "squid:S00115",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestRunner.java",
      "componentId": 848333,
      "project": "org.testng:testng",
      "line": 149,
      "textRange": {
        "startLine": 149,
        "endLine": 149,
        "startOffset": 36,
        "endOffset": 44
      },
      "flows": [],
      "status": "OPEN",
      "message": "Rename this constant name to match the regular expression \'^[A-Z][A-Z0-9]*(_[A-Z0-9]+)*$\'.",
      "effort": "2min",
      "debt": "2min",
      "assignee": "juherr@github",
      "author": "herr@protoelectronique.com",
      "tags": [
        "convention"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-19T09:51:58+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SPPrfIUgbqivM0w",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestRunner.java",
      "componentId": 848333,
      "project": "org.testng:testng",
      "line": 269,
      "textRange": {
        "startLine": 269,
        "endLine": 269,
        "startOffset": 25,
        "endOffset": 41
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 273,
                "endLine": 273,
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
                "startLine": 275,
                "endLine": 275,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 277,
                "endLine": 277,
                "startOffset": 8,
                "endOffset": 11
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 280,
                "endLine": 280,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+4 (incl 3 for nesting)"
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
                "endOffset": 14
              },
              "msg": "+5 (incl 4 for nesting)"
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
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 16 to the 15 allowed.",
      "effort": "6min",
      "debt": "6min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SPPrfIUgbqivM0x",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestRunner.java",
      "componentId": 848333,
      "project": "org.testng:testng",
      "line": 297,
      "textRange": {
        "startLine": 297,
        "endLine": 297,
        "startOffset": 15,
        "endOffset": 28
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 305,
                "endLine": 305,
                "startOffset": 4,
                "endOffset": 7
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 308,
                "endLine": 308,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 323,
                "endLine": 323,
                "startOffset": 6,
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
                "startLine": 325,
                "endLine": 325,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 329,
                "endLine": 329,
                "startOffset": 6,
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
                "startLine": 330,
                "endLine": 330,
                "startOffset": 55,
                "endOffset": 56
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 333,
                "endLine": 333,
                "startOffset": 4,
                "endOffset": 9
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 339,
                "endLine": 339,
                "startOffset": 4,
                "endOffset": 7
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 340,
                "endLine": 340,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 340,
                "endLine": 340,
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
                "startLine": 343,
                "endLine": 343,
                "startOffset": 57,
                "endOffset": 58
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 344,
                "endLine": 344,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 18 to the 15 allowed.",
      "effort": "8min",
      "debt": "8min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SPPrfIUgbqivM0y",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestRunner.java",
      "componentId": 848333,
      "project": "org.testng:testng",
      "line": 706,
      "textRange": {
        "startLine": 706,
        "endLine": 706,
        "startOffset": 15,
        "endOffset": 25
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 711,
                "endLine": 711,
                "startOffset": 33,
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
                "startLine": 716,
                "endLine": 716,
                "startOffset": 6,
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
                "startLine": 717,
                "endLine": 717,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 722,
                "endLine": 722,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 732,
                "endLine": 732,
                "startOffset": 12,
                "endOffset": 17
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 737,
                "endLine": 737,
                "startOffset": 8,
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
                "startLine": 740,
                "endLine": 740,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 740,
                "endLine": 740,
                "startOffset": 37,
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
                "startLine": 744,
                "endLine": 744,
                "startOffset": 8,
                "endOffset": 13
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 746,
                "endLine": 746,
                "startOffset": 10,
                "endOffset": 13
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 19 to the 15 allowed.",
      "effort": "9min",
      "debt": "9min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2017-03-04T00:45:43+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SPPrfIUgbqivM0z",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestRunner.java",
      "componentId": 848333,
      "project": "org.testng:testng",
      "line": 803,
      "textRange": {
        "startLine": 803,
        "endLine": 803,
        "startOffset": 39,
        "endOffset": 70
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 808,
                "endLine": 808,
                "startOffset": 4,
                "endOffset": 7
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 814,
                "endLine": 814,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 814,
                "endLine": 814,
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
                "startLine": 814,
                "endLine": 814,
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
                "startLine": 814,
                "endLine": 814,
                "startOffset": 48,
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
                "startLine": 821,
                "endLine": 821,
                "startOffset": 4,
                "endOffset": 7
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 829,
                "endLine": 829,
                "startOffset": 4,
                "endOffset": 7
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 831,
                "endLine": 831,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 832,
                "endLine": 832,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 834,
                "endLine": 834,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 836,
                "endLine": 836,
                "startOffset": 12,
                "endOffset": 15
              },
              "msg": "+5 (incl 4 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 841,
                "endLine": 841,
                "startOffset": 10,
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
                "startLine": 848,
                "endLine": 848,
                "startOffset": 6,
                "endOffset": 10
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 24 to the 15 allowed.",
      "effort": "14min",
      "debt": "14min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SPPrfIUgbqivM00",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/TestRunner.java",
      "componentId": 848333,
      "project": "org.testng:testng",
      "line": 982,
      "textRange": {
        "startLine": 982,
        "endLine": 982,
        "startOffset": 38,
        "endOffset": 56
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 986,
                "endLine": 986,
                "startOffset": 4,
                "endOffset": 7
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 991,
                "endLine": 991,
                "startOffset": 50,
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
                "startLine": 992,
                "endLine": 992,
                "startOffset": 4,
                "endOffset": 7
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 994,
                "endLine": 994,
                "startOffset": 6,
                "endOffset": 9
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 995,
                "endLine": 995,
                "startOffset": 8,
                "endOffset": 11
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1008,
                "endLine": 1008,
                "startOffset": 4,
                "endOffset": 7
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1014,
                "endLine": 1014,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1015,
                "endLine": 1015,
                "startOffset": 10,
                "endOffset": 13
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1017,
                "endLine": 1017,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1027,
                "endLine": 1027,
                "startOffset": 8,
                "endOffset": 11
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1030,
                "endLine": 1030,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1034,
                "endLine": 1034,
                "startOffset": 10,
                "endOffset": 13
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1046,
                "endLine": 1046,
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
                "startLine": 1048,
                "endLine": 1048,
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
                "startLine": 1055,
                "endLine": 1055,
                "startOffset": 6,
                "endOffset": 9
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1056,
                "endLine": 1056,
                "startOffset": 8,
                "endOffset": 11
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1063,
                "endLine": 1063,
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
                "startLine": 1065,
                "endLine": 1065,
                "startOffset": 6,
                "endOffset": 9
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 36 to the 15 allowed.",
      "effort": "26min",
      "debt": "26min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SPPrfIUgbqivM01",
      "rule": "squid:S1166",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/TestRunner.java",
      "componentId": 848333,
      "project": "org.testng:testng",
      "line": 1192,
      "textRange": {
        "startLine": 1192,
        "endLine": 1192,
        "startOffset": 15,
        "endOffset": 26
      },
      "flows": [],
      "status": "OPEN",
      "message": "Either log or rethrow this exception.",
      "effort": "10min",
      "debt": "10min",
      "author": "missedone@gmail.com",
      "tags": [
        "cert",
        "error-handling",
        "suspicious"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "BUG"
    },
    {
      "organization": "default",
      "key": "AVj_5SPRrfIUgbqivM07",
      "rule": "squid:S1148",
      "severity": "MINOR",
      "component": "org.testng:testng:src/main/java/org/testng/TestRunner.java",
      "componentId": 848333,
      "project": "org.testng:testng",
      "line": 1193,
      "textRange": {
        "startLine": 1193,
        "endLine": 1193,
        "startOffset": 10,
        "endOffset": 25
      },
      "flows": [],
      "status": "OPEN",
      "message": "Use a logger to log this exception.",
      "effort": "10min",
      "debt": "10min",
      "author": "missedone@gmail.com",
      "tags": [
        "error-handling"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "VULNERABILITY"
    },
    {
      "organization": "default",
      "key": "AVj_5SVMrfIUgbqivM08",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/ClassHelper.java",
      "componentId": 848389,
      "project": "org.testng:testng",
      "line": 344,
      "textRange": {
        "startLine": 344,
        "endLine": 344,
        "startOffset": 23,
        "endOffset": 38
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 357,
                "endLine": 357,
                "startOffset": 6,
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
                "startLine": 359,
                "endLine": 359,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 375,
                "endLine": 375,
                "startOffset": 6,
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
                "startLine": 385,
                "endLine": 385,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 385,
                "endLine": 385,
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
                "startLine": 392,
                "endLine": 392,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 394,
                "endLine": 394,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 394,
                "endLine": 394,
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
                "startLine": 400,
                "endLine": 400,
                "startOffset": 10,
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
                "startLine": 412,
                "endLine": 412,
                "startOffset": 8,
                "endOffset": 13
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 421,
                "endLine": 421,
                "startOffset": 4,
                "endOffset": 9
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 424,
                "endLine": 424,
                "startOffset": 4,
                "endOffset": 9
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 427,
                "endLine": 427,
                "startOffset": 4,
                "endOffset": 9
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 433,
                "endLine": 433,
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
                "startLine": 433,
                "endLine": 433,
                "startOffset": 23,
                "endOffset": 25
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 23 to the 15 allowed.",
      "effort": "13min",
      "debt": "13min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-21T22:57:06+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SVMrfIUgbqivM09",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/ClassHelper.java",
      "componentId": 848389,
      "project": "org.testng:testng",
      "line": 533,
      "textRange": {
        "startLine": 533,
        "endLine": 533,
        "startOffset": 25,
        "endOffset": 36
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 536,
                "endLine": 536,
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
                "startLine": 536,
                "endLine": 536,
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
                "startLine": 539,
                "endLine": 539,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 545,
                "endLine": 545,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 553,
                "endLine": 553,
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
                "startLine": 571,
                "endLine": 571,
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
                "startLine": 574,
                "endLine": 574,
                "startOffset": 6,
                "endOffset": 9
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 580,
                "endLine": 580,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 593,
                "endLine": 593,
                "startOffset": 4,
                "endOffset": 7
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 594,
                "endLine": 594,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 597,
                "endLine": 597,
                "startOffset": 6,
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
                "startLine": 603,
                "endLine": 603,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 609,
                "endLine": 609,
                "startOffset": 4,
                "endOffset": 6
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 19 to the 15 allowed.",
      "effort": "9min",
      "debt": "9min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SW2rfIUgbqivM1B",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/ConfigurationMethod.java",
      "componentId": 848395,
      "project": "org.testng:testng",
      "line": 338,
      "textRange": {
        "startLine": 338,
        "endLine": 338,
        "startOffset": 15,
        "endOffset": 19
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 341,
                "endLine": 341,
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
                "startLine": 347,
                "endLine": 347,
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
                "startLine": 347,
                "endLine": 347,
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
                "startLine": 348,
                "endLine": 348,
                "startOffset": 5,
                "endOffset": 7
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 351,
                "endLine": 351,
                "startOffset": 5,
                "endOffset": 7
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 354,
                "endLine": 354,
                "startOffset": 5,
                "endOffset": 7
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 357,
                "endLine": 357,
                "startOffset": 5,
                "endOffset": 7
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 360,
                "endLine": 360,
                "startOffset": 5,
                "endOffset": 7
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 363,
                "endLine": 363,
                "startOffset": 5,
                "endOffset": 7
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 366,
                "endLine": 366,
                "startOffset": 5,
                "endOffset": 7
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 369,
                "endLine": 369,
                "startOffset": 5,
                "endOffset": 7
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 372,
                "endLine": 372,
                "startOffset": 5,
                "endOffset": 7
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 375,
                "endLine": 375,
                "startOffset": 5,
                "endOffset": 7
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 379,
                "endLine": 379,
                "startOffset": 4,
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
                "startLine": 385,
                "endLine": 385,
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
                "startLine": 387,
                "endLine": 387,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 390,
                "endLine": 390,
                "startOffset": 8,
                "endOffset": 11
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 393,
                "endLine": 393,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 394,
                "endLine": 394,
                "startOffset": 10,
                "endOffset": 13
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 402,
                "endLine": 402,
                "startOffset": 4,
                "endOffset": 6
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 38 to the 15 allowed.",
      "effort": "28min",
      "debt": "28min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SXtrfIUgbqivM1C",
      "rule": "squid:S1871",
      "severity": "MINOR",
      "component": "org.testng:testng:src/main/java/org/testng/internal/DynamicGraph.java",
      "componentId": 848401,
      "project": "org.testng:testng",
      "line": 94,
      "textRange": {
        "startLine": 94,
        "endLine": 96,
        "startOffset": 52,
        "endOffset": 7
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 92,
                "endLine": 94,
                "startOffset": 32,
                "endOffset": 7
              },
              "msg": "Original"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "This branch\'s code block is the same as the block for the branch on line 92.",
      "effort": "10min",
      "debt": "10min",
      "assignee": "juherr@github",
      "author": "herr@protoelectronique.com",
      "tags": [
        "design",
        "suspicious"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2017-03-01T23:02:06+0100",
      "type": "BUG"
    },
    {
      "organization": "default",
      "key": "AVj_5SXtrfIUgbqivM1E",
      "rule": "squid:S1151",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/internal/DynamicGraph.java",
      "componentId": 848401,
      "project": "org.testng:testng",
      "line": 219,
      "textRange": {
        "startLine": 219,
        "endLine": 219,
        "startOffset": 6,
        "endOffset": 20
      },
      "flows": [],
      "status": "OPEN",
      "message": "Reduce this switch case number of lines from 16 to at most 5, for example by extracting code into methods.",
      "effort": "5min",
      "debt": "5min",
      "assignee": "juherr@github",
      "author": "herr@protoelectronique.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2017-01-11T18:46:52+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SXtrfIUgbqivM1D",
      "rule": "squid:S134",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/DynamicGraph.java",
      "componentId": 848401,
      "project": "org.testng:testng",
      "line": 228,
      "textRange": {
        "startLine": 228,
        "endLine": 228,
        "startOffset": 12,
        "endOffset": 14
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 227,
                "endLine": 227,
                "startOffset": 10,
                "endOffset": 13
              },
              "msg": "Nesting + 1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 226,
                "endLine": 226,
                "startOffset": 8,
                "endOffset": 11
              },
              "msg": "Nesting + 1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 214,
                "endLine": 214,
                "startOffset": 4,
                "endOffset": 10
              },
              "msg": "Nesting + 1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this code to not nest more than 3 if/for/while/switch/try statements.",
      "effort": "10min",
      "debt": "10min",
      "assignee": "juherr@github",
      "author": "herr@protoelectronique.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-19T09:51:58+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SYJrfIUgbqivM1G",
      "rule": "squid:S1948",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/FactoryMethod.java",
      "componentId": 848405,
      "project": "org.testng:testng",
      "line": 29,
      "textRange": {
        "startLine": 29,
        "endLine": 29,
        "startOffset": 23,
        "endOffset": 33
      },
      "flows": [],
      "status": "OPEN",
      "message": "Make \"m_instance\" transient or serializable.",
      "effort": "30min",
      "debt": "30min",
      "author": "cedric@beust.com",
      "tags": [
        "cwe",
        "serialization"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "BUG"
    },
    {
      "organization": "default",
      "key": "AVj_5SYJrfIUgbqivM1F",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/FactoryMethod.java",
      "componentId": 848405,
      "project": "org.testng:testng",
      "line": 66,
      "textRange": {
        "startLine": 66,
        "endLine": 66,
        "startOffset": 18,
        "endOffset": 24
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 85,
                "endLine": 85,
                "startOffset": 6,
                "endOffset": 11
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
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 90,
                "endLine": 90,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 90,
                "endLine": 90,
                "startOffset": 30,
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
                "startLine": 91,
                "endLine": 91,
                "startOffset": 12,
                "endOffset": 15
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 94,
                "endLine": 94,
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
                "startLine": 95,
                "endLine": 95,
                "startOffset": 12,
                "endOffset": 15
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 97,
                "endLine": 97,
                "startOffset": 14,
                "endOffset": 16
              },
              "msg": "+5 (incl 4 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 97,
                "endLine": 97,
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
                "startLine": 103,
                "endLine": 103,
                "startOffset": 10,
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
                "startLine": 104,
                "endLine": 104,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 104,
                "endLine": 104,
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
                "startLine": 106,
                "endLine": 106,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 108,
                "endLine": 108,
                "startOffset": 19,
                "endOffset": 21
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
                "startOffset": 14,
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
                "startLine": 118,
                "endLine": 118,
                "startOffset": 6,
                "endOffset": 11
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 34 to the 15 allowed.",
      "effort": "24min",
      "debt": "24min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SaKrfIUgbqivM1I",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Invoker.java",
      "componentId": 848416,
      "project": "org.testng:testng",
      "line": 150,
      "textRange": {
        "startLine": 150,
        "endLine": 150,
        "startOffset": 15,
        "endOffset": 35
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 159,
                "endLine": 159,
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
                "startLine": 159,
                "endLine": 159,
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
                "startLine": 167,
                "endLine": 167,
                "startOffset": 4,
                "endOffset": 7
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 168,
                "endLine": 168,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 173,
                "endLine": 173,
                "startOffset": 28,
                "endOffset": 29
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 183,
                "endLine": 183,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 194,
                "endLine": 194,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 194,
                "endLine": 194,
                "startOffset": 67,
                "endOffset": 69
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 196,
                "endLine": 196,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 198,
                "endLine": 198,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 198,
                "endLine": 198,
                "startOffset": 82,
                "endOffset": 84
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 219,
                "endLine": 219,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 219,
                "endLine": 219,
                "startOffset": 33,
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
                "startLine": 221,
                "endLine": 221,
                "startOffset": 14,
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
                "startLine": 228,
                "endLine": 228,
                "startOffset": 10,
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
                "startLine": 235,
                "endLine": 235,
                "startOffset": 8,
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
                "startLine": 244,
                "endLine": 244,
                "startOffset": 6,
                "endOffset": 11
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 246,
                "endLine": 246,
                "startOffset": 8,
                "endOffset": 13
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 32 to the 15 allowed.",
      "effort": "22min",
      "debt": "22min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2017-02-23T14:39:33+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SaKrfIUgbqivM1J",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Invoker.java",
      "componentId": 848416,
      "project": "org.testng:testng",
      "line": 349,
      "textRange": {
        "startLine": 349,
        "endLine": 349,
        "startOffset": 15,
        "endOffset": 50
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 358,
                "endLine": 358,
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
                "startLine": 358,
                "endLine": 358,
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
                "startLine": 361,
                "endLine": 361,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 363,
                "endLine": 363,
                "startOffset": 8,
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
                "startLine": 371,
                "endLine": 371,
                "startOffset": 9,
                "endOffset": 11
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
                "startOffset": 46,
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
                "startLine": 372,
                "endLine": 372,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 374,
                "endLine": 374,
                "startOffset": 8,
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
                "startLine": 381,
                "endLine": 381,
                "startOffset": 9,
                "endOffset": 11
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
                "startLine": 387,
                "endLine": 387,
                "startOffset": 9,
                "endOffset": 11
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 387,
                "endLine": 387,
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
                "startLine": 390,
                "endLine": 390,
                "startOffset": 6,
                "endOffset": 9
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 395,
                "endLine": 395,
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
                "startLine": 395,
                "endLine": 395,
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
                "startLine": 396,
                "endLine": 396,
                "startOffset": 6,
                "endOffset": 9
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 20 to the 15 allowed.",
      "effort": "10min",
      "debt": "10min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SaKrfIUgbqivM1K",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Invoker.java",
      "componentId": 848416,
      "project": "org.testng:testng",
      "line": 420,
      "textRange": {
        "startLine": 420,
        "endLine": 420,
        "startOffset": 18,
        "endOffset": 38
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 426,
                "endLine": 426,
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
                "startLine": 428,
                "endLine": 428,
                "startOffset": 6,
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
                "startLine": 429,
                "endLine": 429,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 430,
                "endLine": 430,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 432,
                "endLine": 432,
                "startOffset": 10,
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
                "startLine": 439,
                "endLine": 439,
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
                "startLine": 440,
                "endLine": 440,
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
                "startLine": 444,
                "endLine": 444,
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
                "startLine": 446,
                "endLine": 446,
                "startOffset": 11,
                "endOffset": 14
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 447,
                "endLine": 447,
                "startOffset": 13,
                "endOffset": 15
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 458,
                "endLine": 458,
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
                "startLine": 458,
                "endLine": 458,
                "startOffset": 22,
                "endOffset": 24
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
                "startOffset": 6,
                "endOffset": 9
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 460,
                "endLine": 460,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 25 to the 15 allowed.",
      "effort": "15min",
      "debt": "15min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SaKrfIUgbqivM1L",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Invoker.java",
      "componentId": 848416,
      "project": "org.testng:testng",
      "line": 575,
      "textRange": {
        "startLine": 575,
        "endLine": 575,
        "startOffset": 22,
        "endOffset": 34
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 604,
                "endLine": 604,
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
                "startLine": 639,
                "endLine": 639,
                "startOffset": 6,
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
                "startLine": 652,
                "endLine": 652,
                "startOffset": 62,
                "endOffset": 63
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
                "startOffset": 6,
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
                "startLine": 656,
                "endLine": 656,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 659,
                "endLine": 659,
                "startOffset": 10,
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
                "startLine": 665,
                "endLine": 665,
                "startOffset": 8,
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
                "startLine": 670,
                "endLine": 670,
                "startOffset": 4,
                "endOffset": 9
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 674,
                "endLine": 674,
                "startOffset": 4,
                "endOffset": 9
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 684,
                "endLine": 684,
                "startOffset": 4,
                "endOffset": 9
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 676,
                "endLine": 676,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 679,
                "endLine": 679,
                "startOffset": 6,
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
                "startLine": 703,
                "endLine": 703,
                "startOffset": 6,
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
                "startLine": 703,
                "endLine": 703,
                "startOffset": 44,
                "endOffset": 46
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 16 to the 15 allowed.",
      "effort": "6min",
      "debt": "6min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2017-02-03T19:53:18+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SaLrfIUgbqivM1M",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Invoker.java",
      "componentId": 848416,
      "project": "org.testng:testng",
      "line": 1059,
      "textRange": {
        "startLine": 1059,
        "endLine": 1059,
        "startOffset": 27,
        "endOffset": 44
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1070,
                "endLine": 1070,
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
                "startLine": 1080,
                "endLine": 1080,
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
                "startLine": 1095,
                "endLine": 1095,
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
                "startLine": 1095,
                "endLine": 1095,
                "startOffset": 44,
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
                "startLine": 1101,
                "endLine": 1101,
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
                "startLine": 1104,
                "endLine": 1104,
                "startOffset": 34,
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
                "startLine": 1114,
                "endLine": 1114,
                "startOffset": 4,
                "endOffset": 9
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1115,
                "endLine": 1115,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1121,
                "endLine": 1121,
                "startOffset": 6,
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
                "startLine": 1129,
                "endLine": 1129,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1132,
                "endLine": 1132,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1135,
                "endLine": 1135,
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
                "startLine": 1148,
                "endLine": 1148,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1148,
                "endLine": 1148,
                "startOffset": 81,
                "endOffset": 83
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1151,
                "endLine": 1151,
                "startOffset": 12,
                "endOffset": 17
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1153,
                "endLine": 1153,
                "startOffset": 14,
                "endOffset": 16
              },
              "msg": "+5 (incl 4 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1175,
                "endLine": 1175,
                "startOffset": 12,
                "endOffset": 15
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1179,
                "endLine": 1179,
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
                "startLine": 1180,
                "endLine": 1180,
                "startOffset": 12,
                "endOffset": 17
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1182,
                "endLine": 1182,
                "startOffset": 14,
                "endOffset": 16
              },
              "msg": "+5 (incl 4 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1207,
                "endLine": 1207,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+5 (incl 4 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1210,
                "endLine": 1210,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+5 (incl 4 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1210,
                "endLine": 1210,
                "startOffset": 48,
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
                "startLine": 1212,
                "endLine": 1212,
                "startOffset": 18,
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
                "startLine": 1227,
                "endLine": 1227,
                "startOffset": 16,
                "endOffset": 18
              },
              "msg": "+5 (incl 4 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1228,
                "endLine": 1228,
                "startOffset": 22,
                "endOffset": 24
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1229,
                "endLine": 1229,
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
                "startLine": 1230,
                "endLine": 1230,
                "startOffset": 18,
                "endOffset": 23
              },
              "msg": "+6 (incl 5 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1239,
                "endLine": 1239,
                "startOffset": 8,
                "endOffset": 13
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 73 to the 15 allowed.",
      "effort": "1h3min",
      "debt": "1h3min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2017-02-16T19:12:01+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SaLrfIUgbqivM1N",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Invoker.java",
      "componentId": 848416,
      "project": "org.testng:testng",
      "line": 1375,
      "textRange": {
        "startLine": 1375,
        "endLine": 1375,
        "startOffset": 7,
        "endOffset": 30
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1385,
                "endLine": 1385,
                "startOffset": 4,
                "endOffset": 7
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1392,
                "endLine": 1392,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1392,
                "endLine": 1392,
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
                "startLine": 1395,
                "endLine": 1395,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1396,
                "endLine": 1396,
                "startOffset": 10,
                "endOffset": 12
              },
              "msg": "+4 (incl 3 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1399,
                "endLine": 1399,
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
                "startLine": 1400,
                "endLine": 1400,
                "startOffset": 12,
                "endOffset": 14
              },
              "msg": "+5 (incl 4 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1402,
                "endLine": 1402,
                "startOffset": 14,
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
                "startLine": 1407,
                "endLine": 1407,
                "startOffset": 10,
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
                "startLine": 1415,
                "endLine": 1415,
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
                "startLine": 1415,
                "endLine": 1415,
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
                "startLine": 1417,
                "endLine": 1417,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1424,
                "endLine": 1424,
                "startOffset": 110,
                "endOffset": 112
              },
              "msg": "+1"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1426,
                "endLine": 1426,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1430,
                "endLine": 1430,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1434,
                "endLine": 1434,
                "startOffset": 8,
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
                "startLine": 1436,
                "endLine": 1436,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1436,
                "endLine": 1436,
                "startOffset": 42,
                "endOffset": 44
              },
              "msg": "+1"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 35 to the 15 allowed.",
      "effort": "25min",
      "debt": "25min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SaLrfIUgbqivM1O",
      "rule": "squid:S3776",
      "severity": "CRITICAL",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Invoker.java",
      "componentId": 848416,
      "project": "org.testng:testng",
      "line": 1513,
      "textRange": {
        "startLine": 1513,
        "endLine": 1513,
        "startOffset": 17,
        "endOffset": 34
      },
      "flows": [
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1517,
                "endLine": 1517,
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
                "startLine": 1522,
                "endLine": 1522,
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
                "startLine": 1523,
                "endLine": 1523,
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
                "startLine": 1530,
                "endLine": 1530,
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
                "startLine": 1530,
                "endLine": 1530,
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
                "startLine": 1532,
                "endLine": 1532,
                "startOffset": 6,
                "endOffset": 9
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1537,
                "endLine": 1537,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1537,
                "endLine": 1537,
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
                "startLine": 1541,
                "endLine": 1541,
                "startOffset": 8,
                "endOffset": 10
              },
              "msg": "+3 (incl 2 for nesting)"
            }
          ]
        },
        {
          "locations": [
            {
              "textRange": {
                "startLine": 1550,
                "endLine": 1550,
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
                "startLine": 1554,
                "endLine": 1554,
                "startOffset": 6,
                "endOffset": 8
              },
              "msg": "+2 (incl 1 for nesting)"
            }
          ]
        }
      ],
      "status": "OPEN",
      "message": "Refactor this method to reduce its Cognitive Complexity from 17 to the 15 allowed.",
      "effort": "7min",
      "debt": "7min",
      "author": "cedric@beust.com",
      "tags": [
        "brain-overload"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "CODE_SMELL"
    },
    {
      "organization": "default",
      "key": "AVj_5SaLrfIUgbqivM1Q",
      "rule": "squid:S1166",
      "severity": "MAJOR",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Invoker.java",
      "componentId": 848416,
      "project": "org.testng:testng",
      "line": 1746,
      "textRange": {
        "startLine": 1746,
        "endLine": 1746,
        "startOffset": 15,
        "endOffset": 26
      },
      "flows": [],
      "status": "OPEN",
      "message": "Either log or rethrow this exception.",
      "effort": "10min",
      "debt": "10min",
      "author": "missedone@gmail.com",
      "tags": [
        "cert",
        "error-handling",
        "suspicious"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "BUG"
    },
    {
      "organization": "default",
      "key": "AVj_5SaLrfIUgbqivM1R",
      "rule": "squid:S1148",
      "severity": "MINOR",
      "component": "org.testng:testng:src/main/java/org/testng/internal/Invoker.java",
      "componentId": 848416,
      "project": "org.testng:testng",
      "line": 1747,
      "textRange": {
        "startLine": 1747,
        "endLine": 1747,
        "startOffset": 10,
        "endOffset": 25
      },
      "flows": [],
      "status": "OPEN",
      "message": "Use a logger to log this exception.",
      "effort": "10min",
      "debt": "10min",
      "author": "missedone@gmail.com",
      "tags": [
        "error-handling"
      ],
      "creationDate": "2016-12-15T01:31:32+0100",
      "updateDate": "2016-12-15T01:31:32+0100",
      "type": "VULNERABILITY"
    }
  ],
  "components": [
    {
      "organization": "default",
      "id": 848330,
      "key": "org.testng:testng:src/main/java/org/testng/TestNGAntTask.java",
      "uuid": "47aadc4e-3c8b-4f50-9200-a7739d2548f6",
      "enabled": true,
      "qualifier": "FIL",
      "name": "TestNGAntTask.java",
      "longName": "src/main/java/org/testng/TestNGAntTask.java",
      "path": "src/main/java/org/testng/TestNGAntTask.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848326,
      "key": "org.testng:testng:src/main/java/org/testng/TestClass.java",
      "uuid": "d1f50a85-d13f-483d-af8b-85ce29464cde",
      "enabled": true,
      "qualifier": "FIL",
      "name": "TestClass.java",
      "longName": "src/main/java/org/testng/TestClass.java",
      "path": "src/main/java/org/testng/TestClass.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848595,
      "key": "org.testng:testng:src/main/java/org/testng/reporters/XMLReporter.java",
      "uuid": "6fd57bd5-c477-4ed5-bd09-67e1d54f23bf",
      "enabled": true,
      "qualifier": "FIL",
      "name": "XMLReporter.java",
      "longName": "src/main/java/org/testng/reporters/XMLReporter.java",
      "path": "src/main/java/org/testng/reporters/XMLReporter.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848515,
      "key": "org.testng:testng:src/main/java/org/testng/internal/thread/graph/GraphThreadPoolExecutor.java",
      "uuid": "e2dcfec1-faca-4983-81f0-6ae882cbaaa2",
      "enabled": true,
      "qualifier": "FIL",
      "name": "GraphThreadPoolExecutor.java",
      "longName": "src/main/java/org/testng/internal/thread/graph/GraphThreadPoolExecutor.java",
      "path": "src/main/java/org/testng/internal/thread/graph/GraphThreadPoolExecutor.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 252297,
      "key": "org.testng:testng",
      "uuid": "3bfc5973-13be-4784-b59f-c650d118898b",
      "enabled": true,
      "qualifier": "TRK",
      "name": "testng",
      "longName": "testng"
    },
    {
      "organization": "default",
      "id": 848268,
      "key": "org.testng:testng:src/main/java/org/testng/Assert.java",
      "uuid": "72939998-f3d9-462e-8352-0b6dae76d60c",
      "enabled": true,
      "qualifier": "FIL",
      "name": "Assert.java",
      "longName": "src/main/java/org/testng/Assert.java",
      "path": "src/main/java/org/testng/Assert.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848421,
      "key": "org.testng:testng:src/main/java/org/testng/internal/MethodInvocationHelper.java",
      "uuid": "64ddc76b-85e2-49e5-9105-7c03898f9e81",
      "enabled": true,
      "qualifier": "FIL",
      "name": "MethodInvocationHelper.java",
      "longName": "src/main/java/org/testng/internal/MethodInvocationHelper.java",
      "path": "src/main/java/org/testng/internal/MethodInvocationHelper.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848401,
      "key": "org.testng:testng:src/main/java/org/testng/internal/DynamicGraph.java",
      "uuid": "be8f3167-9b9b-4965-a95a-440de9d9f515",
      "enabled": true,
      "qualifier": "FIL",
      "name": "DynamicGraph.java",
      "longName": "src/main/java/org/testng/internal/DynamicGraph.java",
      "path": "src/main/java/org/testng/internal/DynamicGraph.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848395,
      "key": "org.testng:testng:src/main/java/org/testng/internal/ConfigurationMethod.java",
      "uuid": "5dc81e25-3e39-44d2-8ee7-55bff952dda7",
      "enabled": true,
      "qualifier": "FIL",
      "name": "ConfigurationMethod.java",
      "longName": "src/main/java/org/testng/internal/ConfigurationMethod.java",
      "path": "src/main/java/org/testng/internal/ConfigurationMethod.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848324,
      "key": "org.testng:testng:src/main/java/org/testng/SuiteRunner.java",
      "uuid": "7303b11b-b2c1-45d7-953b-b2655f23c85f",
      "enabled": true,
      "qualifier": "FIL",
      "name": "SuiteRunner.java",
      "longName": "src/main/java/org/testng/SuiteRunner.java",
      "path": "src/main/java/org/testng/SuiteRunner.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848389,
      "key": "org.testng:testng:src/main/java/org/testng/internal/ClassHelper.java",
      "uuid": "8a36a715-1d67-49f9-b7bb-a2fd90dbadd7",
      "enabled": true,
      "qualifier": "FIL",
      "name": "ClassHelper.java",
      "longName": "src/main/java/org/testng/internal/ClassHelper.java",
      "path": "src/main/java/org/testng/internal/ClassHelper.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848416,
      "key": "org.testng:testng:src/main/java/org/testng/internal/Invoker.java",
      "uuid": "3f44f9bd-d73d-4eaa-88dc-2961424151d7",
      "enabled": true,
      "qualifier": "FIL",
      "name": "Invoker.java",
      "longName": "src/main/java/org/testng/internal/Invoker.java",
      "path": "src/main/java/org/testng/internal/Invoker.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848580,
      "key": "org.testng:testng:src/main/java/org/testng/reporters/EmailableReporter2.java",
      "uuid": "b6c63153-53c0-4f57-b55e-6e4e6b224215",
      "enabled": true,
      "qualifier": "FIL",
      "name": "EmailableReporter2.java",
      "longName": "src/main/java/org/testng/reporters/EmailableReporter2.java",
      "path": "src/main/java/org/testng/reporters/EmailableReporter2.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 1266555,
      "key": "org.testng:testng:src/main/resources/org/testng/testng-reports.js",
      "uuid": "AVkIurN0290hzbIYUGqf",
      "enabled": true,
      "qualifier": "FIL",
      "name": "testng-reports.js",
      "longName": "src/main/resources/org/testng/testng-reports.js",
      "path": "src/main/resources/org/testng/testng-reports.js",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848444,
      "key": "org.testng:testng:src/main/java/org/testng/internal/Utils.java",
      "uuid": "eb6aafd8-e442-454e-9ad3-1371fcc7a9c6",
      "enabled": true,
      "qualifier": "FIL",
      "name": "Utils.java",
      "longName": "src/main/java/org/testng/internal/Utils.java",
      "path": "src/main/java/org/testng/internal/Utils.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848405,
      "key": "org.testng:testng:src/main/java/org/testng/internal/FactoryMethod.java",
      "uuid": "0d3becc2-22dd-4360-aadf-4e1538f2bacb",
      "enabled": true,
      "qualifier": "FIL",
      "name": "FactoryMethod.java",
      "longName": "src/main/java/org/testng/internal/FactoryMethod.java",
      "path": "src/main/java/org/testng/internal/FactoryMethod.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848420,
      "key": "org.testng:testng:src/main/java/org/testng/internal/MethodInstance.java",
      "uuid": "41ed0203-a065-46ca-b336-a8f3f83f6fbc",
      "enabled": true,
      "qualifier": "FIL",
      "name": "MethodInstance.java",
      "longName": "src/main/java/org/testng/internal/MethodInstance.java",
      "path": "src/main/java/org/testng/internal/MethodInstance.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848593,
      "key": "org.testng:testng:src/main/java/org/testng/reporters/VerboseReporter.java",
      "uuid": "cd7cb873-8fdf-4f58-917d-0e4937b6c551",
      "enabled": true,
      "qualifier": "FIL",
      "name": "VerboseReporter.java",
      "longName": "src/main/java/org/testng/reporters/VerboseReporter.java",
      "path": "src/main/java/org/testng/reporters/VerboseReporter.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848443,
      "key": "org.testng:testng:src/main/java/org/testng/internal/TestResult.java",
      "uuid": "1df7ae79-a6c1-4aa3-b435-e55e1368fd49",
      "enabled": true,
      "qualifier": "FIL",
      "name": "TestResult.java",
      "longName": "src/main/java/org/testng/internal/TestResult.java",
      "path": "src/main/java/org/testng/internal/TestResult.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848455,
      "key": "org.testng:testng:src/main/java/org/testng/internal/annotations/Converter.java",
      "uuid": "59106771-df38-4691-8da7-339cd55050cb",
      "enabled": true,
      "qualifier": "FIL",
      "name": "Converter.java",
      "longName": "src/main/java/org/testng/internal/annotations/Converter.java",
      "path": "src/main/java/org/testng/internal/annotations/Converter.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848313,
      "key": "org.testng:testng:src/main/java/org/testng/ITestNGMethod.java",
      "uuid": "61ff6abc-0f06-4436-ac7a-a4220d12b096",
      "enabled": true,
      "qualifier": "FIL",
      "name": "ITestNGMethod.java",
      "longName": "src/main/java/org/testng/ITestNGMethod.java",
      "path": "src/main/java/org/testng/ITestNGMethod.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848329,
      "key": "org.testng:testng:src/main/java/org/testng/TestNG.java",
      "uuid": "7bf344ff-4fe9-4493-b7b1-f4794d927dca",
      "enabled": true,
      "qualifier": "FIL",
      "name": "TestNG.java",
      "longName": "src/main/java/org/testng/TestNG.java",
      "path": "src/main/java/org/testng/TestNG.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848427,
      "key": "org.testng:testng:src/main/java/org/testng/internal/PackageUtils.java",
      "uuid": "bff5e1da-78f4-46a8-89ac-a5172eb1a64a",
      "enabled": true,
      "qualifier": "FIL",
      "name": "PackageUtils.java",
      "longName": "src/main/java/org/testng/internal/PackageUtils.java",
      "path": "src/main/java/org/testng/internal/PackageUtils.java",
      "projectId": 252297,
      "subProjectId": 252297
    },
    {
      "organization": "default",
      "id": 848333,
      "key": "org.testng:testng:src/main/java/org/testng/TestRunner.java",
      "uuid": "7585801d-96d0-467e-8e3e-7289ae948439",
      "enabled": true,
      "qualifier": "FIL",
      "name": "TestRunner.java",
      "longName": "src/main/java/org/testng/TestRunner.java",
      "path": "src/main/java/org/testng/TestRunner.java",
      "projectId": 252297,
      "subProjectId": 252297
    }
  ],
  "facets": [
    {
      "property": "severities",
      "values": [
        {
          "val": "MINOR",
          "count": 1261
        },
        {
          "val": "MAJOR",
          "count": 669
        },
        {
          "val": "CRITICAL",
          "count": 335
        },
        {
          "val": "INFO",
          "count": 148
        },
        {
          "val": "BLOCKER",
          "count": 42
        }
      ]
    },
    {
      "property": "tags",
      "values": [
        {
          "val": "convention",
          "count": 986
        },
        {
          "val": "brain-overload",
          "count": 222
        },
        {
          "val": "error-handling",
          "count": 201
        },
        {
          "val": "unused",
          "count": 174
        },
        {
          "val": "bad-practice",
          "count": 173
        },
        {
          "val": "misra",
          "count": 166
        },
        {
          "val": "cwe",
          "count": 153
        },
        {
          "val": "psr2",
          "count": 150
        },
        {
          "val": "obsolete",
          "count": 129
        },
        {
          "val": "design",
          "count": 106
        }
      ]
    },
    {
      "property": "types",
      "values": [
        {
          "val": "CODE_SMELL",
          "count": 2351
        },
        {
          "val": "BUG",
          "count": 78
        },
        {
          "val": "VULNERABILITY",
          "count": 26
        }
      ]
    }
  ]
}');
    }

}