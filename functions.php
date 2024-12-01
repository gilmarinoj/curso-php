<?php

declare(strict_types=1); // <- a nivel de archivo y arriba del todo


function render_template (string $template, array $data = [])
{
    extract($data);
    require "templates/$template.php";
}

function get_data(string $url): array
{
    $result = file_get_contents($url); // Si solo quieres hacer un GET de una API
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days): string
{
    return match (true) {
        $days === 0 => "Hoy se estrena!",
        $days === 1 => "Tomorrow se estrena!",
        $days < 7   => "Esta semana se estrena!",
        $days < 30  => "Este mes se estrena!",
        default     => "$days dias hasta el estreno",
    };
}