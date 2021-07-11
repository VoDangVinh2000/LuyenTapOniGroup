<?php

namespace Database\Factories;

use App\Models\Companies;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompaniesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Companies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name' => 'Công ty hóa học',
            'company_web' => 'web.vn',
            'company_code' => '13213132a', //max length : 10
            'company_phone' => '0375507120' //max length : 10
        ];
    }
}
