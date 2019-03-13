<?php

use Illuminate\Database\Seeder;

class TaxonomyTableSeeder extends Seeder
{
    protected $termModel;

    protected $vocabularyModel;

    /**
     * TaxonomyTableSeeder constructor.
     */
    public function __construct()
    {
        $this->termModel = config('taxonomy.models.term');
        $this->vocabularyModel = config('taxonomy.models.vocabulary');
    }
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedVocabularies($this->getData());
    }

    /**
     * Specify the taxonomy structure you need.
     *
     * @return array
     */
    public function getData()
    {
        // This options is example:
        return [
            [
                'system_name' => 'question_categories',
                'name' => 'Question categories',
                'description' => '',
                'options' => [
                    'has_hierarchy' => 0,
                ],
                'terms' => [
                    ['name' => 'Account registration ',],
                    ['name' => 'Bank operations',],
                    ['name' => 'Security and Privacy',],
                ],
            ],

            [
                'system_name' => 'betting_categories',
                'name' => 'Betting categories',
                'description' => '',
                'terms' => [
                    ['name' => 'Football',],
                    ['name' => 'Sweepstakes',],
                    ['name' => 'Boxing',],
                ],
            ],
        ];
    }

    /**
     * @param array $vocabularies
     */
    protected function seedVocabularies(array $vocabularies)
    {
        foreach ($vocabularies as $item) {
            $vocabulary = $this->vocabularyModel::updateOrCreate([
                'system_name' => $item['system_name'], // TODO: For this test name is unique !!!
            ], [
                'name' => $item['name'],
                'description' => $item['description'] ?? null,
                'options' => $item['options'] ?? null,
            ]);
            // $this->command->info("Vocabulary saved: $vocabulary->name ($vocabulary->id)");

            if (! empty($item['terms'])) {
                $this->seedTerms($item['terms'], $vocabulary);
            }
        }
    }

    /**
     * @param array $terms
     * @param int $vocabulary
     * @param null $parentId
     */
    protected function seedTerms(array $terms, $vocabulary, $parent_id = null)
    {
        foreach ($terms as $item) {
            $term = $this->termModel::updateOrCreate([
                'name' => $item['name'], // TODO: For this test name is unique !!!
            ], [
                'system_name' => isset($item['system_name']) ? str_slug($item['system_name'], '_') : null,
                'description' => $item['description'] ?? null,
                'options' => $item['options'] ?? null,
                'vocabulary' => $vocabulary->system_name,
                'parent_id' => $parent_id,
                'safe' => $item['safe'] ?? 0,
            ]);

            // $this->command->info(" - Term saved: $term->name ($term->id)");

            if (! empty($item['terms'])) {
                $this->seedTerms($item['terms'], $vocabulary, $term->id);
            }
        }
    }
}
