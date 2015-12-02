<?php
namespace App\Model\Table;

use App\Model\Entity\Player;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Player Model
 *
 */
class PlayerTable extends Table
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

        $this->table('player');
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
            ->allowEmpty('pname');

        $validator
            ->add('pweight', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('pweight');

        $validator
            ->allowEmpty('pheight');

        $validator
            ->add('jerseNumber', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('jerseNumber');

        $validator
            ->allowEmpty('partOfTeam');

        $validator
            ->add('numYearsInNFL', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('numYearsInNFL');

        return $validator;
    }
}
