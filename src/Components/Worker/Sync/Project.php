<?php
/**
 * 
 */

namespace Operador\Components\Worker\Sync;

use Fabrica\Tools\Databases\Mysql\Mysql as MysqlTool;
use Fabrica\Models\Infra\Token;
use Fabrica\Models\Infra\SshKey;
use Fabrica\Tools\Programs\Git\Admin as GitManiputor;
use Fabrica\Models\Code\Project as ProjectModel;
class Project
{

    protected $project = false;

    public function __construct(ProjectModel $project)
    {
        $this->project = $project;
    }

    public function execute(): void
    {
        // $this->project;

        SshKey::defaultById(4);

        if (!$this->project->repositoryIsCloned()) {
            $repository = GitManiputor::cloneTo($this->project->getRepositoryPath(), $this->project->getRepository());
            dd('Project', $repository);
        }
        $repository = GitManiputor::init($this->project->getRepositoryPath());
    }
}
