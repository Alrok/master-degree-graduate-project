<?php
/**
 * Created by PhpStorm.
 * User: 1roky
 * Date: 22.09.2019
 * Time: 1:32
 */

namespace App\Facades;


use Cviebrock\LaravelElasticsearch\Facade;
use Elasticsearch\Namespaces\CatNamespace;
use Elasticsearch\Namespaces\ClusterNamespace;
use Elasticsearch\Namespaces\IndicesNamespace;
use Elasticsearch\Namespaces\IngestNamespace;
use Elasticsearch\Namespaces\NodesNamespace;
use Elasticsearch\Namespaces\SnapshotNamespace;
use Elasticsearch\Namespaces\TasksNamespace;

/**
 * Class Elasticsearch
 * @package App\Facades
 *
 * @method info(array $params = [])
 * @method ping(array $params = []) : bool
 * @method rankEval(array $params)
 * @method get(array $params)
 * @method getSource(array $params)
 * @method existsSource(array $params) : bool
 * @method delete(array $params)
 * @method deleteByQuery(array $params = [])
 * @method deleteByQueryRethrottle(array $params)
 * @method count(array $params = [])
 * @method termvectors(array $params = [])
 * @method mtermvectors(array $params = [])
 * @method exists(array $params) : bool
 * @method mget(array $params = [])
 * @method msearch(array $params = [])
 * @method msearchTemplate(array $params = [])
 * @method create(array $params)
 * @method bulk(array $params = [])
 * @method index(array $params)
 * @method reindex(array $params)
 * @method reindexRethrottle(array $params)
 * @method explain(array $params)
 * @method search(array $params = [])
 * @method searchShards(array $params = [])
 * @method searchTemplate(array $params = [])
 * @method scroll(array $params = [])
 * @method scriptsPainlessExecute(array $params = [])
 * @method clearScroll(array $params = [])
 * @method update(array $params)
 * @method updateByQuery(array $params = [])
 * @method updateByQueryRethrottle(array $params = [])
 * @method getScript(array $params)
 * @method deleteScript(array $params)
 * @method putScript(array $params)
 * @method deleteTemplate(array $params)
 * @method fieldCaps(array $params = [])
 * @method renderSearchTemplate(array $params = [])
 * @method indices() : IndicesNamespace
 * @method cluster() : ClusterNamespace
 * @method nodes() : NodesNamespace
 * @method snapshot() : SnapshotNamespace
 * @method cat() : CatNamespace
 * @method ingest() : IngestNamespace
 * @method tasks() : TasksNamespace
 * @method extractArgument(array &$params, string $arg)
 *
 *
 * @see Client
 */
class Elasticsearch extends Facade
{

}