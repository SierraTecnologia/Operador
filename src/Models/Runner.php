<?php

/**
 * This file is part of Gitonomy.
 *
 * (c) Alexandre Salomé <alexandre.salome@gmail.com>
 * (c) Julien DIDIER <genzo.wm@gmail.com>
 *
 * This source file is subject to the GPL license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Operador\Models;

use Pedreiro\Models\Base;
use Operador\Actions\Action;
use Muleta\Contracts\Output\OutputableTrait;
use Log;
use Operador\Contracts\RunnerInterface;
use Operador\Contracts\ActionInterface;

class Runner extends Base implements RunnerInterface
{
    use OutputableTrait;

    protected $organizationPerspective = true;

    protected $table = 'bot_runners';

    protected $action = false;

    protected $target = false;

    protected $worker = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'action_code',
        'target_id',
        'progress',
        'task',
        'stage'
    ];

    public function usingAction(ActionInterface $action)
    {
        $this->action = $action;
        return $this;
    }

    public function usingTarget(Base $target)
    {
        $this->target = $target;
        return $this;
    }

    public function prepare()
    {
        return $this;
    }

    /**
     * 
     */
    public function execute()
    {
        if (!is_null($this->id)) {
            $this->save();
        }

        if (!$this->action) {
            \Log::channel('sitec-finder')->warning('[Estimate] Nenhuma ação para executar');
            return false;
        }
        
        $this->worker = $this->action->getClassWithParams($this->target);

        // dd($this->worker);
        $this->worker->execute();
        return $this;
    }

    public function run()
    {
        return $this->execute();
    }

    public function done()
    {
        return $this;
    }

}
