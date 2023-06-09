<?php /** @var \Galahad\Aire\Elements\Attributes\Collection $attributes */ ?>
<?php /** @var \Galahad\Aire\Support\OptionsCollection $options */ ?>

@isset($prepend_empty_option)

    <div {{ $attributes->label_wrapper }}>
        <input
            {{ $attributes->except('id', 'value', 'checked') }}
            value="{{ $prepend_empty_option->value }}"
            {{ $attributes->isValue($prepend_empty_option->value) ? 'checked' : '' }}
            id="aire-selection-{{ \Illuminate\Support\Str::slug($attributes->get('name').'-'.$prepend_empty_option->label) }}"
        />
        <label {{ $attributes->label }}
               for="aire-selection-{{ \Illuminate\Support\Str::slug($attributes->get('name').'-'.$prepend_empty_option->label) }}">
            {{ $prepend_empty_option->label }}
        </label>
    </div>
@endisset

@foreach ($options->getOptions() as $option_value => $option_label)

    <div {{ $attributes->label_wrapper }}>
        <input
            {{ $attributes->except('id', 'value', 'checked') }}
            value="{{ $option_value }}"
            {{ $attributes->isValue($option_value) ? 'checked' : '' }}
            id="aire-selection-{{ \Illuminate\Support\Str::slug($attributes->get('name').'-'.$option_value) }}"
        />
        <label {{ $attributes->label }}
               for="aire-selection-{{ \Illuminate\Support\Str::slug($attributes->get('name').'-'.$option_value) }}">
            {{ $option_label }}
        </label>
    </div>

@endforeach
