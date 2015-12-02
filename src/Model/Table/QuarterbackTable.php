<?php
namespace App\Model\Table;

use App\Model\Entity\Quarterback;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Quarterback Model
 *
 */
class QuarterbackTable extends Table
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

        $this->table('quarterback');
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
            ->add('passingyards', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('passingyards');

        $validator
            ->add('rushingyards', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('rushingyards');

        $validator
            ->add('passingTDs', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('passingTDs');

        $validator
            ->add('rushingTDs', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('rushingTDs');

        $validator
            ->add('interceptionsThrown', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('interceptionsThrown');

        return $validator;
    }
}
