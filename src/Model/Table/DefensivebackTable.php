<?php
namespace App\Model\Table;

use App\Model\Entity\Defensiveback;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Defensiveback Model
 *
 */
class DefensivebackTable extends Table
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

        $this->table('defensiveback');
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
            ->add('interceptions', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('interceptions');

        $validator
            ->add('tackles', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('tackles');

        $validator
            ->add('sacks', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('sacks');

        return $validator;
    }
}
