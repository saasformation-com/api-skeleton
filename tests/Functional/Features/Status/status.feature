Feature: Testing status endpoint

  Scenario: Happy path
    Given I call "GET" "/status"
    Then the status code should be 200
    And the response should be exactly this JSON:
    """
    {
        "data": {
            "status": "ok"
        }
    }
    """
