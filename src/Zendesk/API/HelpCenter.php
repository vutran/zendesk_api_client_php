<?php

namespace Zendesk\API;

/**
 * The Help Center Articles class exposes Helper Center Articles information
 * @package Zendesk\API
 */
class HelpCenterArticles extends ClientAbstract {

    const OBJ_NAME = 'article';
    const OBJ_NAME_PLURAL = 'articles';


    /**
     * Find all articles
     *
     * @param array $params
     *
     * @throws ResponseException
     * @throws \Exception
     *
     * @return mixed
     */
    public function findAll(array $params = array()) {
        $endPoint = Http::prepare('help_center/articles.json', null, $params);
        $response = Http::send($this->client, $endPoint);
        if ((!is_object($response)) || ($this->client->getDebug()->lastResponseCode != 200)) {
            throw new ResponseException(__METHOD__);
        }
        $this->client->setSideload(null);
        return $response;
    }

    /**
     * Search for articles using the Search API
     *
     * @param array $params
     *
     * @throws ResponseException
     * @throws \Exception
     *
     * @return mixed
     */
    public function search(array $params = array()) {
        $endPoint = Http::prepare('help_center/articles/search.json', null, $params);
        $response = Http::send($this->client, $endPoint);
        if ((!is_object($response)) || ($this->client->getDebug()->lastResponseCode != 200)) {
            throw new ResponseException(__METHOD__);
        }
        $this->client->setSideload(null);
        return $response;
    }
}
