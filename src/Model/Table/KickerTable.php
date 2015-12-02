<?php
namespace App\Model\Table;

use App\Model\Entity\Kicker;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kicker Model
 *
 */
class KickerTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('kicker');
        $this->displayField('pid');
        $this->primaryKey('pid');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('pid', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('pid', 'create');

        $validator
            ->add('fieldgoals', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('fieldgoals');

        $validator
            ->add('extrapoints', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('extrapoints');

        $validator
            ->add('touchbacks', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('touchbacks');

        return $validator;
    }
}
