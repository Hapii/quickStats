<?php
namespace App\Model\Table;

use App\Model\Entity\PlaysOn;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PlaysOn Model
 *
 */
class PlaysOnTable extends Table
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

        $this->table('plays_on');
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
            ->allowEmpty('tname');

        $validator
            ->add('NumberOfYears', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('NumberOfYears');

        $validator
            ->add('startDate', 'valid', ['rule' => 'date'])
            ->allowEmpty('startDate');

        $validator
            ->add('endDate', 'valid', ['rule' => 'date'])
            ->allowEmpty('endDate');

        return $validator;
    }
}
