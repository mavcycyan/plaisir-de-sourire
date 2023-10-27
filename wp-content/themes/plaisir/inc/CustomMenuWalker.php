<?php

namespace inc;
use Walker_Nav_Menu;

class CustomMenuWalker extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $has_hash = strpos($item->url, '#') !== false;

        if ($has_hash) {
            $output .= '<li' . $this->get_item_classes($item) . '><span class="parent_menu js-parentItem">' . esc_html($item->title) . '</span>';
        } else {
            parent::start_el($output, $item, $depth, $args, $id);
        }
    }

    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $has_hash = strpos($item->url, '#') !== false;

        if ($has_hash) {
            $output .= '</li>';
        } else {
            parent::end_el($output, $item, $depth, $args);
        }
    }

    private function get_item_classes($item)
    {
        $classes = empty($item->classes) ? array() : (array)$item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        return !empty($class_names) ? ' class="' . esc_attr($class_names) . '"' : '';
    }
}