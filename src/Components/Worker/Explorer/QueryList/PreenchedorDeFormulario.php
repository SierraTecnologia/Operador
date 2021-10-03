<?php

namespace Operador\Components\Worker\Explorer\QueryList;

/**
 * PreenchedorDeFormulario Class
 *
 * @class   PreenchedorDeFormulario
 * @package crawler
 */
class PreenchedorDeFormulario
{

    public $person = false;

    public $fields = [];

    public function __construct($person = false)
    {
        if (!$person) {
            $person = $this->newFakePerson();
        }
        $this->person = $person;
    }

    public function executeForm($formInstance): void
    {
        $form = $ql->get('https://github.com/login')->find('form');
        $formFields = $formInstance->fields()->get();
        foreach($formFields as $formField) {
            $form->find('input[name=login]')->val('your github username or email');
        }
    }

    protected function newFakePerson(): void
    {
        // @todo PEgar via Factory
    }

    /**
     * @return array
     *
     * @psalm-return array{login: mixed, email: mixed}
     */
    protected function getFields(): array
    {
        return [
            'login' => $this->person->login,
            'email' => $this->person->email
        ];
    }

    public function getField($field)
    {
        return $this->getFields()[$field];
    }
}