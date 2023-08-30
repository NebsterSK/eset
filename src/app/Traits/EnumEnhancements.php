<?php

namespace App\Traits;

use Illuminate\Support\Collection;

trait EnumEnhancements
{
    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function collectWithKeys(): Collection
    {
        return collect(self::cases())->mapWithKeys(fn (self $enum) => [$enum->value => $enum]);
    }

    public function label(): string
    {
        return str($this->value)->headline()->value();
    }

    /**
     * returns an array of objects, so it is easier to use in React
     * example (JS syntax) [{value: john, label: 'Johnny'}, {value: jane, label: 'G.I.Jane'}, ...]
     */
    public static function reactify(): array
    {
        return collect(self::cases())->map(function (self $item) {
            return (object) [
                'value' => $item->value,
                'label' => $item->label(),
            ];
        })->all();
    }
}