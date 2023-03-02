<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Faq\Models\Faq;
use Botble\Faq\Models\FaqCategory;
use Botble\Faq\Models\FaqCategoryTranslation;
use Botble\Faq\Models\FaqTranslation;
use Botble\Language\Models\LanguageMeta;
use Illuminate\Support\Arr;

class FaqSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::truncate();
        FaqCategory::truncate();
        FaqTranslation::truncate();
        FaqCategoryTranslation::truncate();
        LanguageMeta::where('reference_type', FaqCategory::class)->delete();
        LanguageMeta::where('reference_type', Faq::class)->delete();

        $categories = [
            [
                'name' => 'General',
            ],
        ];

        foreach ($categories as $index => $value) {
            $value['order'] = $index;
            FaqCategory::create($value);
        }

        $faqItems = [
            [
                'question' => 'Can I see the demo before purchasing?',
                'answer'   => 'Etiam amet mauris suscipit in odio integer congue metus vitae arcu mollis blandit ultrice ligula egestas and magna suscipit lectus magna suscipit luctus blandit vitae',
            ],
            [
                'question' => 'Can I use your system on different devices?',
                'answer'   => 'Etiam amet mauris suscipit in odio integer congue metus vitae arcu mollis blandit ultrice ligula egestas and magna suscipit lectus magna suscipit luctus blandit vitae',
            ],
            [
                'question' => 'Can I import my sitemap to your system?',
                'answer'   => 'An enim nullam tempor sapien gravida a donec ipsum enim an porta justo integer at velna vitae auctor integer congue undo magna at pretium purus pretium',
            ],
            [
                'question' => 'Can I cancel my subscription at any time?',
                'answer'   => 'An enim nullam tempor sapien gravida a donec ipsum enim an porta justo integer at velna vitae auctor integer congue undo magna at pretium purus pretium',
            ],
            [
                'question' => 'How can I switch my subscription between essential, and premium plan',
                'answer'   => 'Cubilia laoreet augue egestas and luctus donec curabite diam vitae dapibus libero and quisque gravida donec and neque.',
            ],
            [
                'question' => 'Is there an additional discount when paid annually?',
                'answer'   => 'Cubilia laoreet augue egestas and luctus donec curabite diam vitae dapibus libero and quisque gravida donec and neque. Blandit justo aliquam molestie nunc sapien',
            ],
            [
                'question'    => 'Where does it come from ?',
                'answer'      => 'If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages.',
                'category_id' => 2,
            ],
            [
                'question' => 'I have an issue with my account',
                'answer'   => '<ul>
                    <li>Etiam amet mauris suscipit sit amet in odio. Integer congue leo metus. Vitae arcu mollis blandit ultrice ligula</li>
                    <li>An enim nullam tempor sapien gravida donec congue leo metus. Vitae arcu mollis blandit integer at velna</li>
                </ul>',
            ],
            [
                'question' => 'What happens if I don’t renew my license after one year?',
                'answer'   => '<ul>
                    <li>Etiam amet mauris suscipit sit amet in odio. Integer congue leo metus. Vitae arcu mollis blandit ultrice ligula</li>
                    <li>An enim nullam tempor sapien gravida donec congue leo metus. Vitae arcu mollis blandit integer at velna</li>
                </ul>',
            ],
            [
                'question' => 'Do you have a free trial?',
                'answer'   => '<ul class="text-body-text">
                    <li>Fringilla risus, luctus mauris orci auctor purus</li>
                    <li>Quaerat sodales sapien euismod blandit purus and ipsum primis in cubilia laoreet augue luctus</li>
                </ul>',
            ],
            [
                'question' => 'What kind of payment methods do you provide?',
                'answer'   => '<ul class="text-body-text">
                <li>Fringilla risus, luctus mauris orci auctor purus</li>
                <li>Quaerat sodales sapien euismoda laoreet augue luctus</li>
              </ul>',
            ],
        ];

        foreach ($faqItems as $value) {
            if (!Arr::get($value, 'category_id')) {
                $value['category_id'] = 1;
            }
            Faq::create($value);
        }

        $translations = [
            [
                'name' => 'Chung',
            ],
        ];

        foreach ($translations as $index => $item) {
            $item['lang_code'] = 'vi';
            $item['faq_categories_id'] = $index + 1;

            FaqCategoryTranslation::insert($item);
        }
    }
}
