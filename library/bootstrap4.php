<?php
/*
  * PHP Bootstrap Library
  * For add HTML Like btn, card, modal
  * link https://teerapuch.com
  * version 001
*/
function parse_html($attributes = NULL)
{
    if(is_array($attributes)) {
        $attribute_str = '';
        foreach($attributes as $key => $value) {
            $attribute_str .= ' '.$key.'="'.$value.'"';
        }
        return $attribute_str;
    }
    return '';
}
function div($content, $attributes = array())
{
    $attr = parse_html($attributes);
    echo '<div '.$attr.'>';
    echo $content;
    echo '</div>';
}

function p($content, $attributes = array())
{
    $attr = parse_html($attributes);
    echo '<p '.$attr.'>';
    echo $content;
    echo '</p>';
}

function li($content, $attributes = array())
{
    $attr = parse_html($attributes);
    echo '<li '.$attr.'>';
    echo $content;
    echo '</li>';
}
function label($type, $content)
{
    echo '<span class="label label-'.$type.'">';
    echo $content;
    echo '</span>';
}

function alert($type, $content)
{
    echo '<div class="alert alert-'.$type.'" role="alert">';
    echo $content;
    echo '</div>';
}

function btn($type, $content)
{
    echo '<button type="button" class="btn btn-'.$type.'">';
    echo $content;
    echo '</button>';
}

function row($content)
{
    echo '<div class="row">';
    echo $content;
    echo '</div>';
}

function col($content)
{
    echo '<div class="col">';
    echo $content;
    echo '</div>';
}
?>
