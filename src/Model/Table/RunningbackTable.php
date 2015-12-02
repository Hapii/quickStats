<?php
namespace App\Model\Table;

use App\Model\Entity\Runningback;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Runningback Model
 *
 */
class RunningbackTable extends Table
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

        $this->table('runningback');
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
            ->add('rushingYards', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('rushingYards');

        $validator
            ->add('rushingTDs', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('rushingTDs');

        return $validator;
    }
}
