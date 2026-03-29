<?php

class ACT_Loader {

    protected $actions = [];
    protected $filters = [];

    public function add_action($hook, $component, $callback) {
        $this->actions[] = [
            'hook' => $hook,
            'component' => $component,
            'callback' => $callback
        ];
    }

    public function add_filter($hook, $component, $callback) {
        $this->filters[] = [
            'hook' => $hook,
            'component' => $component,
            'callback' => $callback
        ];
    }

    public function run() {
        foreach ($this->actions as $hook) {
            add_action($hook['hook'], [$hook['component'], $hook['callback']]);
        }

        foreach ($this->filters as $hook) {
            add_filter($hook['hook'], [$hook['component'], $hook['callback']]);
        }
    }
}