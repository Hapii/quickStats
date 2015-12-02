<?php
namespace App\Model\Table;

use App\Model\Entity\Play;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Plays Model
 *
 */
class PlaysTable extends Table
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

        $this->table('plays');
        $this->displayField('hometeam');
        $this->primaryKey(['hometeam', 'awayteam', 'dateOfGame']);

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
            ->allowEmpty('hometeam', 'create');

        $validator
            ->allowEmpty('awayteam', 'create');

        $validator
            ->add('dateOfGame', 'valid', ['rule' => 'date'])
            ->allowEmpty('dateOfGame', 'create');

        $validator
            ->add('homescore', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('homescore');

        $validator
            ->add('awayscore', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('awayscore');

        return $validator;
    }
}
