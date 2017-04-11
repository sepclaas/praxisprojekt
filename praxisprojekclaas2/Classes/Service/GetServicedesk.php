<?php

/**
 * Created by PhpStorm.
 * User: claas
 * Date: 11.04.17
 * Time: 11:22
 */
class GetServicedesk
{
    protected $username = 'suendermann';
    protected $password = 'guesswhat';
    public $jql = "project=" . $_GET['project'] . " AND status=Closed AND updated>='" . $_GET['startdate'] . "' AND updated<='" . $_GET['enddate'] . "'";
    public $fields = "timeestimate, timespent, summary"; // Kann man im Debug herausfinden
    protected $search_url = "https://jira.avonis.com/rest/api/2/search";
    protected $parameters = "jql=" . urlencode($jql) . "&maxResults=100&fields=" . urlencode($fields) . "&+order+by+key+DESC";
//$parameters = "jql=" . urlencode($jql) . "&maxResults=100&+order+by+key+DESC";


}