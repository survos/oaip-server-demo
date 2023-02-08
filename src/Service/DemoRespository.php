<?php

namespace App\Service;

use HAB\OAI\PMH\Model;
use HAB\OAI\PMH\ProtocolError;
use HAB\OAI\PMH\Repository\RepositoryInterface;

class DemoRespository implements RepositoryInterface
{


    public function getRecord($identifier, $metadataPrefix): Model\ResponseBodyInterface
    {
        // TODO: Implement getRecord() method.
    }

    public function identify(): Model\Identity
    {
        $identity = new Model\Identity();
        return $identity;
        // TODO: Implement identify() method.
    }

    public function listIdentifiers($metadataPrefix, $from = null, $until = null, $set = null): Model\ResponseBodyInterface
    {
        // TODO: Implement listIdentifiers() method.
    }

    public function listRecords($metadataPrefix, $from = null, $until = null, $set = null): Model\ResponseBodyInterface
    {
        // TODO: Implement listRecords() method.
    }

    public function listMetadataFormats($identifier = null): Model\ResponseBodyInterface
    {
        // TODO: Implement listMetadataFormats() method.
    }

    public function listSets(): Model\ResponseBodyInterface
    {
        // TODO: Implement listSets() method.
    }

    public function resume($verb, $resumptionToken): Model\ResponseBodyInterface
    {
        // TODO: Implement resume() method.
    }
}
