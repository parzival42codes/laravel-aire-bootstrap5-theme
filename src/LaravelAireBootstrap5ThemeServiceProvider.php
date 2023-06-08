<?php

namespace parzival42codes\LaravelAireBootstrap5Theme;

use Galahad\Aire\Support\Facades\Aire;
use Illuminate\Support\ServiceProvider;

class LaravelAireBootstrap5ThemeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(dirname(__DIR__) . '/views', 'aire-bootstrap5');

        Aire::setTheme('aire-bootstrap5', null, [
            'default_classes' => [
                'group' => 'form-group', 'group_input_group' => 'input-group',
                'group_prepend' => 'input-group-prepend', 'group_append' => 'input-group-append',
                'group_help_text' => 'form-text text-muted', 'group_errors' => '', 'label' => 'form-label',
                'input' => 'form-control',

                'checkbox' => 'form-check-input', 'checkbox_label' => 'form-check-label',
                'checkbox_wrapper' => 'custom-control custom-checkbox',

                'checkbox_group' => 'form-check-input',
                'checkbox_group_label' => 'form-check-label',
                'checkbox_group_label_wrapper' => 'form-check',

                'radio_group' => 'form-check-input', 'radio_group_label' => 'form-check-label',
                'radio_group_label_wrapper' => 'form-check', 'summary' => 'alert alert-warning',
                'button' => 'btn btn-primary', 'select' => 'form-control',
                'textarea' => 'form-control',
            ], 'validation_classes' => [
                'valid' => [
                    'label' => 'is-valid', 'checkbox' => 'is-valid', 'radio' => 'is-valid',
                    'checkbox-group' => 'is-valid', 'radio-group' => 'is-valid', 'input' => 'is-valid',
                    'select' => 'is-valid', 'textarea' => 'is-valid', 'errors' => 'valid-feedback d-block',
                    'group_errors' => 'valid-feedback d-block', 'group_help_text' => 'valid-feedback d-block',
                ], 'invalid' => [
                    'label' => 'is-invalid', 'checkbox' => 'is-invalid', 'checkbox-group' => 'is-invalid',
                    'radio-group' => 'is-invalid', 'radio' => 'is-invalid', 'input' => 'is-invalid',
                    'select' => 'is-invalid', 'textarea' => 'is-invalid', 'errors' => 'invalid-feedback d-block',
                    'group_errors' => 'invalid-feedback d-block', 'group_help_text' => 'invalid-feedback d-block',
                ],
            ], 'variant_classes' => [
                'input' => [
                    'default' => 'form-control', 'sm' => 'form-control-sm', 'lg' => 'form-control-lg',
                ], 'group_input_group' => [
                    'default' => 'input-group', 'sm' => 'input-group-sm', 'lg' => 'input-group-lg',
                ], 'group_input_range' => [
                    'default' => [
                        'display' => 'range-default',
                    ],
                ], 'select' => [
                    'default' => [
                        'display' => 'form-select', 'size' => '', 'color' => '',
                    ], 'sm' => 'custom-select-sm', 'lg' => 'custom-select-lg',
                ], 'button' => [
                    'default' => [
                        'display' => 'btn', 'size' => '', 'color' => 'btn-primary',
                    ], 'sm' => [
                        'size' => 'btn-sm',
                    ], 'lg' => [
                        'size' => 'btn-sm',
                    ], 'primary' => [
                        'color' => 'btn-primary',
                    ], 'secondary' => [
                        'color' => 'btn-secondary',
                    ], 'success' => [
                        'color' => 'btn-success',
                    ], 'danger' => [
                        'color' => 'btn-danger',
                    ], 'warning' => [
                        'color' => 'btn-warning',
                    ], 'info' => [
                        'color' => 'btn-info',
                    ], 'light' => [
                        'color' => 'btn-light',
                    ], 'dark' => [
                        'color' => 'btn-dark',
                    ],
                ],
            ],
        ]);
    }

    public function registeringPackage(): void
    {
    }
}
