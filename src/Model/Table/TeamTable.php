<?php
namespace App\Model\Table;

use App\Model\Entity\Team;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Team Model
 *
 */
class TeamTable extends Table
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

        $this->table('team');
        $this->displayField('tname');
        $this->primaryKey('tname');

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
            ->allowEmpty('tname', 'create');

        $validator
            ->allowEmpty('division');

        $validator
            ->add('wins', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('wins');

        $validator
            ->add('losses', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('losses');

        $validator
            ->add('ties', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ties');

        return $validator;
    }
}
